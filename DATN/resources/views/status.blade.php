@extends('layout.main')

@section('content')
    <style>
        .order-container {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            max-width: 1000px;
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

        .star-rating {
            direction: rtl;
            display: inline-flex;
            font-size: 20px;
            gap: 5px;
            justify-content: flex-start;
        }

        .star-rating input[type="radio"] {
            display: none;
        }

        .star-rating label {
            color: #ccc;
            cursor: pointer;
            transition: color 0.2s;
        }

        .star-rating input[type="radio"]:checked~label,
        .star-rating label:hover,
        .star-rating label:hover~label {
            color: gold;
        }

        .product-review textarea {
            width: 100%;
            resize: vertical;
        }

        .product-review {
            background: #fdfdfd;
        }

        .order-items-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .order-item {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease-in-out;
        }

        .order-item:hover {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .order-item-info {
            flex: 1;
        }

        .product-name {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .product-quantity,
        .product-price {
            font-size: 16px;
            color: #555;
        }

        .product-quantity strong,
        .product-price strong {
            color: #333;
        }
    </style>
       <section class="breadcrumb__area include-bg mb-30 text-start pt-30 page_speed_617743483">
              <div class="container">
                  <div class="breadcrumb__content p-relative z-index-1">
                      <h3 class="breadcrumb__title">
                          Trạng thái đơn hàng - {{$order->order_number}}</h3>
                      <div class="breadcrumb__list js_breadcrumb_reduce_length_on_mobile">
                          <span><a href="{{route('index')}}">Trang chủ</a></span><span>
                              Trạng thái đơn hàng - {{$order->order_number}} </span>
                      </div>
                  </div>
              </div>
          </section>
    <div class="order-container">
     

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
        @if ($order->status === 'completed')
            <h4>Đánh giá sản phẩm:</h4>
            @foreach ($order->order_items as $item)
                <div class="product-review mb-4 p-3 border rounded">
                    <p><strong>{{ $item->product->name }}</strong></p>

                    @php
                        $existingReview = $item->product->reviews->where('user_id', auth()->id())->first();
                    @endphp

                    @if ($existingReview)
                        <p><strong>Đã đánh giá:</strong></p>
                        <div>
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="fa {{ $i <= $existingReview->rating ? 'fa-star' : 'fa-star-o' }}"
                                    style="color: gold;"></i>
                            @endfor
                        </div>
                        <p>{{ $existingReview->comment }}</p>
                    @else
                        <form action="{{ route('reviews.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $item->product->id }}">
                            <input type="hidden" name="order_id" value="{{ $order->id }}">

                            <div class="form-group mb-2">
                                <label>Đánh giá:</label>
                                <div class="star-rating">
                                    @for ($i = 5; $i >= 1; $i--)
                                        <input type="radio" id="star{{ $item->id }}-{{ $i }}"
                                            name="rating" value="{{ $i }}">
                                        <label for="star{{ $item->id }}-{{ $i }}"><i
                                                class="fa fa-star"></i></label>
                                    @endfor
                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <label>Bình luận:</label>
                                <textarea name="comment" class="form-control" rows="3" placeholder="Viết đánh giá của bạn..." required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm">Gửi đánh giá</button>
                        </form>
                    @endif
                </div>
            @endforeach
        @else
            <ul class="order-items-list">
                @foreach ($order->order_items as $item)
                    <li class="order-item">
                        <div class="order-item-info">
                            <h5 class="product-name">{{ $item->product->name }}</h5>
                            <p class="product-quantity">Số lượng: <strong>{{ $item->quantity }}</strong></p>
                            <p class="product-price">Giá: <strong>{{ number_format($item->price, 0, ',', '.') }}₫</strong>
                            </p>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
        <p><strong>Tổng tiền:</strong> {{ number_format($order->total_price, 0, ',', '.') }}₫</p>
    </div>
@endsection
