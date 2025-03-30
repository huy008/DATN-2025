<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cart = [];

        if (Auth::check()) {
            $cart = Auth::user()->carts()->with('product')->get();
        } else {
            $cart = collect(session('cart', []));
        }

        return view('cart', compact('cart'));
    }
    public function addToCart(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:products,id',
            'qty' => 'required|integer|min:1',
            'attribute_color' => 'nullable|exists:attribute_values,id',
            'attribute_capacity' => 'nullable|exists:attribute_values,id',
        ]);

        $cartItem = [
            'product_id' => $request->id,
            'quantity' => $request->qty,
            'price' => $request->price,
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
                    'price' => $request->price,
                    'attributes' => json_encode([
                        'color' => $request->attribute_color,
                        'capacity' => $request->attribute_capacity,
                    ])
                ]);
            }

            return redirect()->route('cart.index');
        }
        else {
            $cart = session()->get('cart', []);
            $key = $request->id . '-' . $request->attribute_color . '-' . $request->attribute_capacity;

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
        $request->validate([
            'id' => 'required|exists:products,id',
            'qty' => 'required|integer|min:1',
            'attribute_color' => 'nullable|exists:attribute_values,id',
            'attribute_capacity' => 'nullable|exists:attribute_values,id',
        ]);
        
        $this->addToCart($request);
        return redirect()->route('checkout');
    }
}
