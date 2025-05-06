@extends('layout.main')

@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <div class="container mt-200">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header text-white bg-{{ $status == 'success' ? 'success' : 'danger' }} text-center">
                        <h4>{{ $message }}</h4>
                    </div>

                    <div class="card-body">
                        <div class="text-center mb-4">
                            <i
                                class="fas {{ $status == 'success' ? 'fa-check-circle' : 'fa-times-circle' }} fa-5x text-{{ $status == 'success' ? 'success' : 'danger' }}"></i>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                @if (isset($data['vnp_TransactionNo']))
                                    {{-- VNPAY --}}
                                    <p><strong>Mã giao dịch:</strong> {{ $data['vnp_TransactionNo'] }}</p>
                                    <p><strong>Thông tin đơn hàng:</strong> {{ $data['vnp_OrderInfo'] }}</p>
                                    <p><strong>Ngày thanh toán:</strong>
                                        {{ \Carbon\Carbon::parse($data['vnp_PayDate'])->format('d/m/Y H:i:s') }}</p>
                                    <p><strong>Số tiền:</strong> {{ format_currency($data['vnp_Amount'] / 100) }} VND</p>
                                @elseif(isset($data['partnerCode']) && $data['partnerCode'] === 'MOMOBKUN20180529')
                                    {{-- MoMo --}}
                                    <p><strong>Mã giao dịch:</strong> {{ $data['transId'] }}</p>
                                    <p><strong>Thông tin đơn hàng:</strong> {{ $data['orderInfo'] }}</p>
                                    <p><strong>Ngày thanh toán:</strong>
                                        {{ \Carbon\Carbon::createFromTimestampMs($data['responseTime'])->format('d/m/Y H:i:s') }}
                                    </p>
                                    <p><strong>Số tiền:</strong> {{ format_currency($data['amount']) }} VND</p>
                                @elseif($status == 'success' && !isset($data['vnp_TransactionNo']) && !isset($data['partnerCode']))
                                    {{-- COD --}}
                                    <p><strong>Thông tin đơn hàng:</strong> Thanh toán khi nhận hàng (COD)</p>
                                    <p><strong>Ngày đặt hàng:</strong> {{ \Carbon\Carbon::now()->format('d/m/Y H:i:s') }}
                                    </p>
                                    <p><strong>Số tiền:</strong> {{ format_currency($data['totalAmount']) }} VND</p>
                                @else
                                    <p>Không thể xác định loại giao dịch.</p>
                                @endif
                            </div>
                        </div>

                        <div class="text-center">
                            <a href="{{ route('index') }}" class="btn btn-primary btn-lg">
                                <i class="fas fa-home"></i> Quay lại trang chủ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
