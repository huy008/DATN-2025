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
        // session()->forget('cart');
        $carts = [];

        if (Auth::check()) {
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
                            'quantity' => $item['stock_quantity'],
                            'price' => $price,
                        ]);
                    }
                }
                session()->forget('cart');
            }

            $dbCarts = Auth::user()->carts()->with('product')->get();
            if ($dbCarts->isNotEmpty()) {
                $carts = $dbCarts->map(function ($item) {
                    $variant = ProductVariant::find($item->variant_id);
                    $product = Product::find($item->product_id);
                    return [
                        'id' => $item->id,
                        'product_id' => $item->product_id,
                        'variant_id' => $item->variant_id,
                        'img_thumbnail' => $variant ? $variant->image_url : $item->product->img_thumbnail,
                        'name' => $item->product->name,
                        'base_price' => $variant
                            ? ($variant->final_price ?? $variant->price)
                            : ($product->final_price ?? $product->base_price),
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
                        $carts[$item['product_id'] . '-' . $item['variant_id']] = array_merge([
                            'product_id' => $item['product_id'],
                            'variant_id' => $item['variant_id'],
                            'img_thumbnail' => $variant ? $variant->image_url : $product->img_thumbnail,
                            'name' => $product->name,
                            'base_price' =>  $variant
                                ? ($variant->final_price ?? $variant->price)
                                : ($product->final_price ?? $product->base_price),
                            'stock_quantity' => $item['stock_quantity'],
                        ], $item);
                    }
                }

                session()->put('cart', $carts);
            }
        }

        return view('cart', compact('carts'));
    }

    public function addToCart(Request $request)
    {
        $cartItem = [
            'product_id' => $request->id,
            'stock_quantity' => $request->qty,
            'variant_id' => $request->variant_id,
        ];

        if (Auth::check()) {
            $user = Auth::user();
            $existingCart = Cart::where('user_id', $user->id)
                ->where('product_id', $request->id)
                ->where('variant_id', $request->variant_id) // Nếu null thì query = null luôn
                ->first();

            if ($existingCart) {
                $existingCart->quantity += $request->qty;
                $existingCart->save();
            } else {
                $product = Product::where('id', $request->id)->first();
                $variant = ProductVariant::find($request->variant_id);
                if ($variant) {
                    $price = $variant->final_price ?? $variant->price;
                } else {
                    $price = $product->final_price ?? $product->base_price;
                }
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
            $key = $request->id . '-' . $request->variant_id;

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

    public function remove(Request $request)
    {
        if (Auth::check()) {
            $cartItem = Cart::where('product_id', $request->product_id)->where('variant_id', $request->variant_id)->first();
            if ($cartItem) {
                $cartItem->delete();
                return response()->json(['success' => true]);
            }
        }

        $carts = session()->get('cart', []);
        $key = $request->product_id . '-' . $request->variant_id;

        if ($carts[$key]) {
            unset($carts[$key]);
            session()->put('cart', $carts);
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'Sản phẩm không tồn tại']);
    }

    public function updateQuantity(Request $request)
    {
        $productId = $request->product_id;
        $variantId = $request->variant_id;
        $quantity = max(1, (int) $request->quantity); // Đảm bảo số lượng >= 1

        if (Auth::check()) {
            // Nếu đã đăng nhập, cập nhật trong DB
            $cartItem = Cart::where('user_id', Auth::id())
                ->where('product_id', $productId)
                ->where('variant_id', $variantId)
                ->first();

            if ($cartItem) {
                $cartItem->quantity = $quantity;
                $cartItem->save();
                return response()->json(['success' => true, 'message' => 'Cập nhật số lượng thành công']);
            } else {
                return response()->json(['success' => false, 'message' => 'Không tìm thấy sản phẩm trong giỏ hàng']);
            }
        } else {
            // Nếu chưa đăng nhập, cập nhật trong session
            $cart = session()->get('cart', []);

            $updated = false;
            if (isset($cart[$productId . '-' . $variantId])) {
                $cart[$productId . '-' . $variantId]['stock_quantity'] = $quantity;
                $updated = true;
            }

            if ($updated) {
                session()->put('cart', $cart);
                return response()->json(['success' => true, 'message' => 'Cập nhật số lượng thành công']);
            } else {
                return response()->json(['success' => false, 'message' => 'Không tìm thấy sản phẩm trong giỏ hàng']);
            }
        }
    }
}
