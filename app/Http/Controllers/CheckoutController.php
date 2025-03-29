<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = [];

        if (Auth::check()) {
            $cart = Auth::user()->carts()->with('product')->get();
        } else {
            $cart = collect(session('cart', []));
        }

        return view('checkout.index', compact('cart'));
    }

    public function store(Request $request)
    {
        // Validate thông tin thanh toán
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            // Các trường khác
        ]);

        // Tạo đơn hàng
        $order = Order::create([
            'user_id' => Auth::id(),
            'total' => $this->calculateTotal(),
            'status' => 'pending',
            'shipping_address' => $request->address,
            'billing_address' => $request->address,
            'customer_note' => $request->note,
        ]);

        // Thêm sản phẩm vào đơn hàng
        if (Auth::check()) {
            $cartItems = Auth::user()->carts;
        } else {
            $cartItems = collect(session('cart', []));
        }

        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'attributes' => json_encode($item['attributes']),
            ]);
        }

        // Xóa giỏ hàng
        if (Auth::check()) {
            Auth::user()->carts()->delete();
        } else {
            session()->forget('cart');
        }

        // Chuyển hướng đến trang cảm ơn
        return redirect()->route('thankyou', $order->id);
    }

    private function calculateTotal()
    {
        // Tính tổng tiền
        $total = 0;

        if (Auth::check()) {
            $cartItems = Auth::user()->carts;
        } else {
            $cartItems = collect(session('cart', []));
        }

        foreach ($cartItems as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return $total;
    }
}
