<style>
    :root {
        --success-color: #10B981;
        --failure-color: #EF4444;
        --revenue-color: #3B82F6;
        --text-color: #111827;
        --bg-color: #F9FAFB;
        --card-bg: #FFFFFF;
    }

    .dashboard {
        display: flex;
        width: 100%;
        background: var(--card-bg);
        border-radius: 16px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        overflow: hidden;
    }

    .chart-section {
        flex: 1;
        padding: 32px;
        border-right: 1px solid #F3F4F6;
    }

    .revenue-section {
        width: 300px;
        padding: 32px;
        background: linear-gradient(135deg, #F9FAFB, #FFFFFF);
    }

    .section-title {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 24px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .section-title svg {
        width: 20px;
        height: 20px;
    }

    .pie-chart {
        width: 220px;
        height: 220px;
        border-radius: 50%;
        background: conic-gradient(
            var(--success-color) 0% {{ $successRate }}%,
            var(--failure-color) {{ $successRate }}% 100%
        );
        margin: 0 auto 24px;
        position: relative;
    }

    .pie-chart::before {
        content: '';
        position: absolute;
        width: 70%;
        height: 70%;
        background: var(--card-bg);
        border-radius: 50%;
        top: 15%;
        left: 15%;
    }

    .chart-center {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        z-index: 1;
    }

    .chart-percent {
        font-size: 28px;
        font-weight: 700;
        color: var(--text-color);
    }

    .chart-label {
        font-size: 14px;
        color: #6B7280;
    }

    .chart-legend {
        margin-top: 32px;
    }

    .legend-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 0;
        border-bottom: 1px solid #F3F4F6;
    }

    .legend-info {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .legend-color {
        width: 12px;
        height: 12px;
        border-radius: 3px;
    }

    .success-color {
        background-color: var(--success-color);
    }

    .failure-color {
        background-color: var(--failure-color);
    }

    .legend-text {
        font-size: 14px;
    }

    .legend-value {
        font-size: 14px;
        font-weight: 600;
    }

    /* Revenue section styles */
    .revenue-amount {
        font-size: 32px;
        font-weight: 700;
        color: var(--revenue-color);
        margin: 16px 0 8px;
        display: flex;
        align-items: flex-end;
    }

    .revenue-currency {
        font-size: 16px;
        font-weight: 500;
        color: #6B7280;
        margin-left: 4px;
        margin-bottom: 3px;
    }

    .revenue-meta {
        font-size: 14px;
        color: #6B7280;
        margin-bottom: 24px;
    }

    .revenue-stats {
        margin-top: 24px;
    }

    .revenue-stat {
        display: flex;
        justify-content: space-between;
        padding: 10px 0;
        border-bottom: 1px solid #F3F4F6;
    }

    .stat-label {
        font-size: 14px;
        color: #6B7280;
    }

    .stat-value {
        font-size: 14px;
        font-weight: 600;
    }

    .growth-positive {
        color: var(--success-color);
    }

    .footer {
        margin-top: 24px;
        font-size: 12px;
        color: #9CA3AF;
        text-align: center;
    }

    @media (max-width: 768px) {
        .dashboard {
            flex-direction: column;
        }

        .chart-section {
            border-right: none;
            border-bottom: 1px solid #F3F4F6;
        }

        .revenue-section {
            width: auto;
        }
    }
</style>
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
           <div class="row" style="margin-bottom:30px">
        <div class="col-lg-12">
            <div class="dashboard">
                <!-- Phần biểu đồ -->
                <div class="chart-section">
                    <h2 class="section-title">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16 17L21 12L16 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21 12H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Tỷ lệ đơn hàng
                    </h2>

                    <div class="pie-chart">
                        <div class="chart-center">
                            <div class="chart-percent">{{ $successRate }}%</div>
                            <div class="chart-label">Thành công</div>
                        </div>
                    </div>

                    <div class="chart-legend">
                        <div class="legend-item">
                            <div class="legend-info">
                                <div class="legend-color success-color"></div>
                                <div class="legend-text">Đơn hàng thành công</div>
                            </div>
                            <div class="legend-value">{{ $successfulOrders }} ({{ $successRate }}%)</div>
                        </div>
                        <div class="legend-item">
                            <div class="legend-info">
                                <div class="legend-color failure-color"></div>
                                <div class="legend-text">Đơn hàng thất bại</div>
                            </div>
                            <div class="legend-value">{{ $cancelledOrders }} ({{ $cancelRate }}%)</div>
                        </div>
                        <div class="legend-item" style="border-bottom: none;">
                            <div class="legend-info">
                                <div class="legend-color" style="background: #D1D5DB;"></div>
                                <div class="legend-text">Tổng đơn hàng</div>
                            </div>
                            <div class="legend-value">{{ $totalOrders }}</div>
                        </div>
                    </div>
                </div>

                <!-- Phần doanh thu -->
                <div class="revenue-section">
                    <h2 class="section-title">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 1V23" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17 5H9.5C8.57174 5 7.6815 5.36875 7.02513 6.02513C6.36875 6.6815 6 7.57174 6 8.5C6 9.42826 6.36875 10.3185 7.02513 10.9749C7.6815 11.6313 8.57174 12 9.5 12H14.5C15.4283 12 16.3185 12.3687 16.9749 13.0251C17.6313 13.6815 18 14.5717 18 15.5C18 16.4283 17.6313 17.3185 16.9749 17.9749C16.3185 18.6313 15.4283 19 14.5 19H6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Tổng doanh thu
                    </h2>

                    <div class="revenue-amount">
                        {{ number_format($totalRevenue) }} <span class="revenue-currency">VND</span>
                    </div>

                    <div class="revenue-meta">
                        Từ {{ $successfulOrders }} đơn hàng thành công
                    </div>

                    <div class="revenue-stats">
                        <div class="revenue-stat">
                            <div class="stat-label">Doanh thu trung bình</div>
                            <div class="stat-value">{{ number_format($averageRevenue) }} VND</div>
                        </div>
                        <div class="revenue-stat">
                            <div class="stat-label">Đơn hàng cao nhất</div>
                            <div class="stat-value">{{ number_format($highestOrder) }} VND</div>
                        </div>
                        <div class="revenue-stat" style="border-bottom: none;">
                            <div class="stat-label">Khoảng thời gian</div>
                            <div class="stat-value">
                                {{ \Carbon\Carbon::parse($from)->format('d/m/Y') }} - 
                                {{ \Carbon\Carbon::parse($to)->format('d/m/Y') }}
                            </div>
                        </div>
                    </div>
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
                                        <td>{{ format_currency($item->total_revenue) }} đ</td>
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
                                    @endforeach @foreach ($inventory as $item)
                                        @if ($item->stock_quantity <= 5 && $item->stock_quantity != 0)
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
