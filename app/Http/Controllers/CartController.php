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

        // if (Auth::check()) {
        //     $cart = Auth::user()->carts()->with('product')->get();
        // } else {
            $cart = collect(session('cart', []));
        // }

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

        $product = Product::findOrFail($request->id);


        // Kiểm tra số lượng tồn kho
        // if ($product->quantity < $request->qty) {
        //     return back()->with('error', 'Số lượng sản phẩm không đủ');
        // }

        $cartItem = [
            'product_id' => $product->id,
            'quantity' => $request->qty,
            'price' => $product->price,
            'attributes' => [
                'color' => $request->attribute_color,
                'capacity' => $request->attribute_capacity,
            ]
        ];

        // Nếu user đã đăng nhập
        if (Auth::check()) {
            $user = Auth::user();

            // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
            $existingCart = Cart::where('user_id', $user->id)
                ->where('product_id', $product->id)
                ->first();

            if ($existingCart) {
                $existingCart->quantity += $request->qty;
                $existingCart->save();
            } else {
                Cart::create([
                    'user_id' => $user->id,
                    'product_id' => $product->id,
                    'quantity' => $request->qty,
                    'price' => $product->price,
                    'attributes' => json_encode([
                        'color' => $request->attribute_color,
                        'capacity' => $request->attribute_capacity,
                    ])
                ]);
            }

            return redirect()->route('cart.index');
        }
        // Nếu user chưa đăng nhập, lưu vào session
        else {

            $cart = session()->get('cart', []);
            $key = $product->id . '-' . $request->attribute_color . '-' . $request->attribute_capacity;

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

        // Thêm vào giỏ hàng trước
        $this->addToCart($request);

        // Chuyển hướng đến trang thanh toán
        return redirect()->route('checkout');
    }
}
