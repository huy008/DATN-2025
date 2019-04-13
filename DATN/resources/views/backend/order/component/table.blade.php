<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>
                <input type="checkbox" value="" id="checkAll" class="input-checkbox">
            </th>
            <th>Mã đơn hàng</th>
            <th>Khách hàng</th>
            <th>Tổng số tiền</th>
            <th>Trạng thái đơn hàng</th>
            <th>Địa chỉ</th>
            <th class="text-center">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        @if (isset($orders) && is_object($orders))
            @foreach ($orders as $order)
                <tr>
                    <td>
                        <input type="checkbox" value="{{ $order->id }}" class="input-checkbox checkBoxItem">
                    </td>
                    <td>
                        {{ $order->id }}
                    </td>
                    <td>
                        {{ $order->user->name }}
                    </td>
                    <td>
                        {{ $order->total_price }}
                    </td>
                    <td>
                        @php
                            $statusText = [
                                'pending' => 'Chờ xác nhận',
                                'processing' => 'Đang giao',
                                'completed' => 'Đã giao',
                                'cancelled' => 'Đã hủy',
                            ];
                        @endphp
                        {{ $statusText[$order->status] ?? 'Không xác định' }}
                    </td>
                    <td>
                        {{ $order->address }}
                    </td>
                    <td style="display:flex;gap:10px;justify-content:center">
                        <a href="{{ route('order.edit', $order->id) }}" class="btn btn-success"><i
                                class="fa fa-edit"></i></a>
                        @if ($order->status == 'pending')
                            <form action="{{ route('order.destroy', $order->id) }}" method="post"
                                onsubmit="return confirm('Bạn có chắc chắn hủy đơn hàng không ?');">
                                @csrf
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
{{ $orders->links('pagination::bootstrap-4') }}
