<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $carts = []; // luôn khởi tạo mảng carts

        if (Auth::check()) {
            // 👇 Merge session cart vào DB nếu có
            $sessionCart = session('cart', []);
            if (!empty($sessionCart)) {
                foreach ($sessionCart as $item) {
                    $existingCart = Cart::where('user_id', Auth::id())
                        ->where('product_id', $item['product_id'])
                        ->where('variant_id', $item['variant_id'])
                        ->first();

                    if ($existingCart) {
                        $existingCart->quantity += $item['quantity'];
                        $existingCart->save();
                    } else {
                        $product = Product::find($item['product_id']);
                        $variant = $product->variants->where('id', $item['variant_id'])->first();
                        $price = $variant ? $variant->price : $product->base_price;

                        Cart::create([
                            'user_id' => Auth::id(),
                            'product_id' => $item['product_id'],
                            'variant_id' => $item['variant_id'],
                            'quantity' => $item['quantity'],
                            'price' => $price,
                        ]);
                    }
                }
                session()->forget('cart');
            }

            // 👉 Lấy cart từ DB
            $dbCarts = Auth::user()->carts()->with('product')->get();
            if ($dbCarts->isNotEmpty()) {
                $carts = $dbCarts->map(function ($item) {
                    $variant = ProductVariant::find($item->variant_id);
                    return [
                        'id' => $item->id,
                        'product_id' => $item->product_id,
                        'variant_id' => $item->variant_id,
                        'img_thumbnail' => $variant ? $variant->image_url : $item->product->img_thumbnail,
                        'name' => $item->product->name,
                        'base_price' => $variant ? $variant->price : $item->product->base_price,
                        'stock_quantity' => $item->quantity,
                    ];
                });
            }
        } else {
            $sessionCart = session('cart', []);
            if (!empty($sessionCart)) {
                foreach ($sessionCart as $item) {
                    $product = Product::find($item['product_id']);
                    if ($product) {
                        $variant = $product->variants->where('id', $item['variant_id'])->first();
                        $carts[] = array_merge([
                            'id' => $item['product_id'],
                            'img_thumbnail' => $variant ? $variant->image_url : $product->img_thumbnail,
                            'name' => $product->name,
                            'base_price' => $variant ? $variant->price : $product->base_price,
                            'stock_quantity' => $item['quantity'],
                        ], $item);
                    }
                }

                // Cập nhật lại session cart sau khi xử lý
                session()->put('cart', $carts);
            }
        }

        return view('cart', compact('carts'));
    }

    public function addToCart(Request $request)
    {
        $cartItem = [
            'product_id' => $request->id,
            'quantity' => $request->qty,
            'variant_id' => $request->variant_id,
        ];

        if (Auth::check()) {
            $user = Auth::user();
            $existingCart = Cart::where('user_id', $user->id)
                ->where('product_id', $request->id)
                ->first();

            if ($existingCart) {
                $existingCart->quantity += $request->qty;
                $existingCart->save();
            } else {
                $product = Product::where('id', $request->id)->first();
                $price =  !isset($product->variants) ? ProductVariant::where('id', $request->variant_id)->first()->price: $product->base_price;
                Cart::create([
                    'user_id' => $user->id,
                    'product_id' => $request->id,
                    'quantity' => $request->qty,
                    'variant_id' => $request->variant_id,
                    'price' =>  $price
                ]);
            }
            return redirect()->route('cart.index');
        } else {
            $cart = session()->get('cart', []);
            $key = $request->id;

            if (isset($cart[$key])) {
                $cart[$key]['stock_quantity'] += $request->qty;
            } else {
                $cart[$key] = $cartItem;
            }

            session()->put('cart', $cart);
            return redirect()->route('cart.index');
        }
    }

    public function checkout(Request $request)
    {
        $this->addToCart($request);
        return redirect()->route('checkout');
    }

    public function remove($id)
    {
        $cartItem = Cart::find($id);
        if ($cartItem) {
            $cartItem->delete();
            return response()->json(['success' => true]);
        }

        $carts = session()->get('cart', []);

        foreach ($carts as $cart) {
            if ($cart['id'] == $id) {
                unset($carts[$cart['id']]);
                session()->put('cart', $carts);
                return response()->json(['success' => true]);
            }
        }

        return response()->json(['success' => false, 'message' => 'Sản phẩm không tồn tại']);
    }
}
