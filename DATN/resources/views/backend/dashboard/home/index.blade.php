<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h2>Báo cáo doanh thu</h2>
                    <form method="GET" action="{{ route('dashboard.index') }}" class="row g-3 mb-4">
                        <div class="col-md-4">
                            <label for="from">Từ ngày:</label>
                            <input type="date" name="from" class="form-control"
                                value="{{ request('from') ?? \Carbon\Carbon::now()->startOfMonth()->format('Y-m-d') }}">
                        </div>
                        <div class="col-md-4">
                            <label for="to">Đến ngày:</label>
                            <input type="date" name="to" class="form-control"
                                value="{{ request('to') ?? \Carbon\Carbon::now()->endOfMonth()->format('Y-m-d') }}">
                        </div>
                        <div class="col-md-4" style="margin-top: 22px">
                            <button type="submit" class="btn btn-primary">Xem báo cáo</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Tổng số đơn hàng thành công</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ $successfulOrders }}</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5> Tổng số đơn hàng bị hủy</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ $cancelledOrders }}</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Tổng doanh thu</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ $totalRevenue }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h4>Doanh thu theo sản phẩm ({{ $from }} đến {{ $to }})</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Số lượng bán</th>
                                <th>Doanh thu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($topProducts as $item)
                                <tr>
                                    <td>{{ $item->product->name ?? 'N/A' }}</td>
                                    <td>{{ $item->total_sold }}</td>
                                    <td>{{ number_format($item->total_revenue, 0, ',', '.') }} đ</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h4>📦 Tổng sản phẩm trong kho: {{ $totalStock }}</h4>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Số lượng trong kho</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inventory as $item)
                                @if ($item->stock_quantity == 0)
                                    <tr style="background-color: #f8d7da;">
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->stock_quantity }}</td>
                                    </tr>
                                @endif
                            @endforeach   @foreach ($inventory as $item)
                                @if ($item->stock_quantity <=5 && $item->stock_quantity != 0)
                                    <tr style="background-color: #fff3cd;">
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->stock_quantity }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
