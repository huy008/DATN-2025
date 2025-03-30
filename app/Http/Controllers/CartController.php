<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cart = [];

        if (Auth::check()) {
            $carts = Auth::user()->carts()->with('product')->get()->map(function ($item) {
                return [
                    'id' => $item->id,
                    'user_id' => $item->user_id,
                    'product_id' => $item->product_id,
                    'variant_id' => $item->variant_id,
                    'quantity' => $item->quantity,
                    'attributes' => $item->attributes,
                    'img_thumbnail' => $item->product->img_thumbnail,
                    'name' => $item->product->name,
                    'base_price' => $item->product->base_price,
                    'stock_quantity' => $item->product->stock_quantity,
                ];
            });
        } else {
            $cart = collect(session('cart', []));
            $i=0;
            foreach($cart as $item){
                $product = Product::find($item['product_id']);
                if ($product) {
                    $i++;
                    $carts[] = array_merge([
                        'id' => $i,
                        'img_thumbnail' => $product->img_thumbnail,
                        'name' => $product->name,
                        'base_price' => $product->base_price,
                        'stock_quantity' => $product->stock_quantity,
                    ], $item);
                }
            }
            session()->put('cart', $carts);
        }
        // dd($carts);
        return view('cart', compact('carts'));
    }
    public function addToCart(Request $request)
    {
        $cartItem = [
            'product_id' => $request->id,
            'quantity' => $request->qty,
            'variant_id' => $request->variant_id,
            'attributes' => [
                'color' => $request->attribute_color,
                'capacity' => $request->attribute_capacity,
            ]
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
                Cart::create([
                    'user_id' => $user->id,
                    'product_id' => $request->id,
                    'quantity' => $request->qty,
                    'variant_id' => $request->variant_id,
                    'attributes' => json_encode([
                        'color' => $request->attribute_color,
                        'capacity' => $request->attribute_capacity,
                    ])
                ]);
            }

            return redirect()->route('cart.index');
        } else {
            $cart = session()->get('cart', []);
            $key = $request->id ;

            if (isset($cart[$key])) {
                $cart[$key]['quantity'] += $request->qty;
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
