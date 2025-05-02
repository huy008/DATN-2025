<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'product_id' => 'required|exists:products,id',
    //         'rating' => 'required|integer|min:1|max:5',
    //         'comment' => 'nullable|string',
    //     ]);

    //     $user = auth()->user();

    //     $hasPurchased = Order::where('user_id', $user->id)
    //         ->whereHas('order_items', function ($query) use ($request) {
    //             $query->where('product_id', $request->product_id);
    //         })
    //         ->exists();

    //     if (!$hasPurchased) {
    //         return back()->with('error', 'You can only review products you have purchased.');
    //     }

    //     Review::create([
    //         'user_id' => $user->id,
    //         'product_id' => $request->product_id,
    //         'rating' => $request->rating,
    //         'comment' => $request->comment,
    //     ]);

    //     return back()->with('success', 'Review submitted successfully.');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'order_id' => 'required|exists:orders,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
        ]);

        Review::create([
            'user_id' => auth()->id(),
            'product_id' => $request->product_id,
            'order_id' => $request->order_id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);
        toastr()->success('Đánh giá của bạn đã được gửi.', 'Thành công', ['timeOut' => 2000]);
        return back();
    }
}
