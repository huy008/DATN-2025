@extends('layout.main')

@section('content')
<style>
    .table-order {
    background-color: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.05);
    font-size: 15px;
}

.table-order th {
    background-color: #f8f9fa;
    color: #333;
    font-weight: 600;
    text-align: center;
}

.table-order td {
    vertical-align: middle;
    text-align: center;
}

.table-order tbody tr:hover {
    background-color: #f1f5f9;
    transition: all 0.3s ease;
}

.badge {
    font-size: 13px;
    padding: 6px 12px;
    border-radius: 12px;
}

.table-order .btn-outline-primary {
    padding: 4px 10px;
    font-size: 14px;
    border-radius: 8px;
}
</style>
    <div class="container">
             <section class="breadcrumb__area include-bg mb-30 text-start pt-30 page_speed_617743483">
              <div class="container">
                  <div class="breadcrumb__content p-relative z-index-1">
                      <h3 class="breadcrumb__title">
                          Đơn hàng của bạn</h3>
                      <div class="breadcrumb__list js_breadcrumb_reduce_length_on_mobile">
                          <span><a href="{{route('index')}}">Trang chủ</a></span><span>
                              Đơn hàng của bạn </span>
                      </div>
                  </div>
              </div>
          </section>
        <form method="GET" class="mb-4">
            <div class="row">
                <div class="col-md-3">
                    <select name="status" class="form-control">
                        <option value="">-- Trạng thái --</option>
                        <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Đang xử lý</option>
                        <option value="shipped" {{ request('status') == 'shipped' ? 'selected' : '' }}>Đã giao</option>
                        <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Đã hủy</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}">
                </div>
                <div class="col-md-3">
                    <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}">
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Lọc</button>
                    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Xóa lọc</a>
                </div>
            </div>
        </form>
        @if ($orders->count())
            <table class="table table-order">
                <thead>
                    <tr>
                        <th>Mã đơn</th>
                        <th>Ngày đặt</th>
                        <th>Trạng thái</th>
                        <th>Tổng tiền</th>
                        <th>Chi tiết</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->order_number }}</td>
                            <td>{{ $order->created_at->format('d/m/Y H:i') }}</td>
                            <td> @php
                            $statusText = [
                                'pending' => 'Chờ xác nhận',
                                'processing' => 'Đang giao',
                                'completed' => 'Đã giao',
                                'cancelled' => 'Đã hủy',
                            ];
                        @endphp
                        {{ $statusText[$order->status] ?? 'Không xác định' }}</td>
                            <td>{{ number_format($order->total_price, 0, ',', '.') }}₫</td>
                            <td><a href="{{route('order.status',$order->order_number)}}" class="btn btn-sm btn-primary">Xem</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $orders->links('pagination::bootstrap-4') }}
        @else
            <p>Bạn chưa có đơn hàng nào.</p>
        @endif
    </div>
@endsection
