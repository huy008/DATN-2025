    @extends('layout.main')

@section('content')
<style>
    .order-container {
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        max-width: 800px;
        margin: 40px auto;
        font-family: 'Segoe UI', sans-serif;
    }

    .order-container h2 {
        font-size: 24px;
        margin-bottom: 20px;
        color: #333;
    }

    .order-container p {
        font-size: 16px;
        margin: 10px 0;
        color: #555;
    }

    .order-container ul {
        list-style: none;
        padding: 0;
        margin-top: 10px;
        margin-bottom: 20px;
    }

    .order-container li {
        padding: 10px 15px;
        background: #f9f9f9;
        border: 1px solid #eee;
        border-radius: 8px;
        margin-bottom: 10px;
        font-size: 15px;
    }

    .order-container strong {
        color: #222;
    }
</style>
<div class="order-container">
    <h2>Trạng thái đơn hàng: {{ $order->code }}</h2>

    <p><strong>Trạng thái:</strong>
        @php
            $statusText = [
                'pending' => 'Chờ xác nhận',
                'processing' => 'Đang giao',
                'completed' => 'Đã giao',
                'cancelled' => 'Đã hủy',
            ];
        @endphp
        {{ $statusText[$order->status] ?? 'Không xác định' }}
    </p>

    <p><strong>Ngày đặt hàng:</strong> {{ $order->created_at->format('d/m/Y H:i') }}</p>

    <h4>Danh sách sản phẩm:</h4>
    <ul>
        @foreach ($order->order_items as $item)
            <li>
                {{ $item->product->name }} - Số lượng: {{ $item->quantity }} - Giá: {{ number_format($item->price, 0, ',', '.') }}₫
            </li>
        @endforeach
    </ul>

    <p><strong>Tổng tiền:</strong> {{ number_format($order->total_price, 0, ',', '.') }}₫</p>
</div>
@endsection
