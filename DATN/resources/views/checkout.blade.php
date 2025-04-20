 @extends('layout.main')

 @section('content')
     <style>
         .payment-method-wrapper {
             margin-top: 30px;
         }

         .payment-option {
             display: block;
             border: 2px solid #e0e0e0;
             border-radius: 10px;
             padding: 15px;
             cursor: pointer;
             transition: all 0.3s ease;
             position: relative;
         }

         .payment-option input[type="radio"] {
             position: absolute;
             opacity: 0;
             cursor: pointer;
         }

         .payment-option .payment-content {
             display: flex;
             align-items: center;
             gap: 15px;
         }

         .payment-option img {
             width: 50px;
             height: auto;
         }

         .payment-option:hover,
         .payment-option input[type="radio"]:checked+.payment-content {
             border-color: #007bff;
             background-color: #f0f8ff;
         }

         .payment-option input[type="radio"]:checked+.payment-content {
             border-left: 4px solid #007bff;
             border-radius: 8px;
         }

         .payment-option img {
             width: 50px;
             height: 50px;
             object-fit: contain;
             border-radius: 8px;
             transition: 0.3s;
             border: 2px solid transparent;
             /* Mặc định không có border */
         }

         .payment-option input[type="radio"]:checked+label img {
             border: 2px solid #007bff;
             /* Thêm border khi được chọn */
             box-shadow: 0 0 6px rgba(0, 123, 255, 0.4);
             /* Thêm shadow khi chọn */
         }

         /* Khi hover ảnh sẽ có hiệu ứng border */
         .payment-option:hover img {
             border: 2px solid #007bff;
             box-shadow: 0 0 6px rgba(0, 123, 255, 0.4);
         }
     </style>
     <div class="container my-0 my-md-3 my-lg-5 checkout-content-wrap">
         <form action="{{ route('checkout.store') }}" method="POST">
             @csrf
             <div class="row" id="main-checkout-product-info" bis_skin_checked="1">

                 <div class="col-lg-5 col-md-6 order-1 order-md-2" bis_skin_checked="1">
                     <div class="d-block d-sm-none" bis_skin_checked="1">
                         <div class="checkout-logo" bis_skin_checked="1">
                             <a href="https://shofy.botble.com" title="Shofy - Multipurpose eCommerce Laravel Script">
                                 <img src="https://shofy.botble.com/storage/main/general/logo.png"
                                     alt="Shofy - Multipurpose eCommerce Laravel Script">
                             </a>
                         </div>
                         <hr class="border-dark-subtle">
                     </div>
                     <div class="my-3 bg-light" bis_skin_checked="1">
                         <div class="position-relative p-3" id="cart-item" bis_skin_checked="1">
                             <div class="bg-light py-2" bis_skin_checked="1">
                                 <p class="font-weight-bold mb-0">Product(s):</p>
                             </div>

                             <div class="checkout-products-marketplace shipping-method-wrapper" bis_skin_checked="1">
                                 <div class="mt-3 bg-light mb-3" bis_skin_checked="1">
                                     <div class="p-2" style="background: antiquewhite;" bis_skin_checked="1">
                                         <img class="img-fluid rounded"
                                             src="https://shofy.botble.com/storage/main/stores/8.png" alt="Old El Paso"
                                             style="max-width: 30px; margin-inline-end: 3px;">
                                         <span class="font-weight-bold">Old El Paso</span>
                                         <div class="d-flex align-items-center gap-2" bis_skin_checked="1">
                                             <div class="bb-product-rating" style="--bb-rating-size: 70px"
                                                 bis_skin_checked="1">
                                                 <span style="width: 58.235294117647% !important;"></span>
                                             </div>
                                             <span class="small text-muted">
                                                 (68 Reviews)
                                             </span>
                                         </div>
                                     </div>
                                     <div class="py-3" bis_skin_checked="1">
                                         @foreach ($carts as $cart)
                                             <div class="row cart-item" bis_skin_checked="1">
                                                 <div class="col-3" bis_skin_checked="1">
                                                     <div class="checkout-product-img-wrapper" bis_skin_checked="1">
                                                         <img class="item-thumb img-thumbnail img-rounded"
                                                             src="{{ asset($cart->product->img_thumbnail) }}"
                                                             alt="Fitbit Charge 5 Fitness Tracker (Digital)">
                                                         <span class="checkout-quantity">{{ $cart['quantity'] }}</span>
                                                     </div>
                                                 </div>
                                                 <div class="col" bis_skin_checked="1">
                                                     <p class="mb-0">
                                                         {{ $cart['name'] }}
                                                     </p>

                                                     <div class="ec-checkout-quantity"
                                                         data-url="https://shofy.botble.com/cart/update"
                                                         data-row-id="abf2d759b4e8bac06a1569f64bc77b10"
                                                         bis_skin_checked="1">
                                                         Số lương: {{ $cart['quantity'] }}
                                                     </div>
                                                 </div>
                                                 <div class="col-auto text-end" bis_skin_checked="1">
                                                     <p>{{ $cart['quantity'] * $cart['base_price'] }}</p>
                                                 </div>
                                             </div>
                                         @endforeach
                                     </div>
                                     <hr class="border-dark-subtle">
                                 </div>
                             </div>
                             <div class="mt-2 p-2" bis_skin_checked="1">
                                 <div class="row" bis_skin_checked="1">
                                     <div class="col-6" bis_skin_checked="1">
                                         <p><strong>Tổng tiền</strong>:</p>
                                     </div>
                                     <div class="col-6 float-end" bis_skin_checked="1">
                                         <p class="total-text raw-total-text" data-price="5459.3">
                                             {{ $total }}
                                         </p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="mt-3 mb-5" bis_skin_checked="1">
                         <div class="coupon-wrapper mt-2" style="display: none;" bis_skin_checked="1">
                             <div class="btn-group w-100" bis_skin_checked="1">
                                 <input class="form-control coupon-code" name="coupon_code" type="text" value=""
                                     placeholder="Enter coupon code...">
                                 <button class="apply-coupon-code d-flex align-items-center gap-2"
                                     data-url="https://shofy.botble.com/coupon/apply" type="button">
                                     Apply
                                 </button>
                             </div>

                             <div class="coupon-error-msg mt-1" bis_skin_checked="1">
                                 <span class="text-danger"></span>
                             </div>
                         </div>
                         <div class="clearfix" bis_skin_checked="1"></div>
                     </div>
                 </div>
                 <div class="form-checkout col-lg-7 col-md-6" bis_skin_checked="1">
                     <div class="d-none d-sm-block" bis_skin_checked="1">
                         <div class="checkout-logo" bis_skin_checked="1">
                             <a href="https://shofy.botble.com" title="Shofy - Multipurpose eCommerce Laravel Script">
                                 <img src="https://shofy.botble.com/storage/main/general/logo.png"
                                     alt="Shofy - Multipurpose eCommerce Laravel Script">
                             </a>
                         </div>
                         <hr class="border-dark-subtle">
                     </div>
                     <div class="mb-4" bis_skin_checked="1">
                         <h5 class="checkout-billing-information-title">Thanh toán</h5>
                         <div class="customer-billing-address-form" bis_skin_checked="1">
                             <div class="mb-3 form-group" bis_skin_checked="1">
                                 <input name="billing_address_same_as_shipping_address" type="hidden" value="0">
                             </div>

                             <div class="billing-address-form-wrapper" bis_skin_checked="1">
                                 <div class="form-group mb-3 " bis_skin_checked="1">
                                     <div class="form-input-wrapper" bis_skin_checked="1">
                                         <input class="form-control" id="name" name=""
                                             autocomplete="family-name" type="text" value="{{ $user->name }}">
                                         <label for="name">Tên</label>
                                     </div>
                                 </div>

                                 <div class="row" bis_skin_checked="1">
                                     <div class="col-lg-8 col-12" bis_skin_checked="1">
                                         <div class="form-group  " bis_skin_checked="1">
                                             <div class="form-input-wrapper" bis_skin_checked="1">
                                                 <input id="email" class="form-control" autocomplete="email"
                                                     name="email" type="text" value="{{ $user->phone }}">
                                                 <label for="email">Email</label>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-lg-4 col-12" bis_skin_checked="1">
                                         <div class="form-group  " bis_skin_checked="1">
                                             <div class="form-input-wrapper" bis_skin_checked="1">
                                                 <input id="phone" class="form-control" autocomplete="phone"
                                                     name="phone" type="text" value="{{ $user->phone }}">
                                                 <label for="phone">Số điện thoại</label>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="form-group mb-3 " bis_skin_checked="1">
                                     <div class="form-input-wrapper" bis_skin_checked="1">
                                         <input class="form-control" id="address" name="address"
                                             autocomplete="address" type="text" value="">
                                         <label for="address">Địa chỉ</label>
                                     </div>
                                 </div>
                                 <div class="form-group mb-3" bis_skin_checked="1">
                                     <label class="form-label" for="description">
                                         Ghi chú
                                     </label>
                                     <textarea class="form-control" data-counter="10000" rows="3"
                                         placeholder="Notes about your order, e.g. special notes for delivery." id="description" name="note"
                                         cols="50"></textarea>
                                 </div>
                                 <div class="form-group mb-3 " bis_skin_checked="1">
                                     <div class="payment-method-wrapper">
                                         <h6>Chọn phương thức thanh toán</h6>
                                         <div class="row">
                                             <!-- VNPay -->
                                             <div class="col-md-6">
                                                 <label class="payment-option">
                                                     <input type="radio" name="payment_method" value="vnpay" checked>
                                                     <div class="payment-content">
                                                         <img src="{{ asset('images/vnpay.jpg') }}" alt="VNPay">
                                                         <span>Thanh toán qua VNPay</span>
                                                     </div>
                                                 </label>
                                             </div>

                                             <!-- MoMo -->
                                             <div class="col-md-6">
                                                 <label class="payment-option">
                                                     <input type="radio" name="payment_method" value="momo">
                                                     <div class="payment-content">
                                                         <img src="{{ asset('images/momo.jpg') }}" alt="MoMo">
                                                         <span>Thanh toán qua MoMo</span>
                                                     </div>
                                                 </label>
                                             </div>
                                         </div>
                                     </div>

                                 </div>

                             </div>
                         </div>
                     </div>
                     <input class="form-control" data-counter="250" name="total_price" type="hidden" value="5459.3">
                     <div data-bb-toggle="checkout-payment-methods-area" bis_skin_checked="1">
                         <input name="currency" type="hidden" value="USD">
                     </div>

                     <div class="w-100 row align-items-center g-3 mb-5" bis_skin_checked="1">
                         <div class="order-2 order-md-1 col-md-6 text-center text-md-start mb-4 mb-md-0"
                             bis_skin_checked="1">
                             <a class="d-flex align-items-center gap-1" href="{{ route('cart.index') }}">
                                 <svg class="icon  svg-icon-ti-ti-arrow-narrow-left" xmlns="http://www.w3.org/2000/svg"
                                     width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                     <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                     <path d="M5 12l14 0"></path>
                                     <path d="M5 12l4 4"></path>
                                     <path d="M5 12l4 -4"></path>
                                 </svg> <span class="d-inline-block back-to-cart">Quay lại giỏ hàng</span>
                             </a>
                         </div>
                         <input type="hidden" name="redirect" value="1">
                         <div class="order-1 order-md-2 col-md-6" bis_skin_checked="1">
                             <button class="btn payment-checkout-btn payment-checkout-btn-step float-end"
                                 data-processing-text="Processing. Please wait..." data-error-header="Error"
                                 type="submit">
                                 Thanh toán
                             </button>
                         </div>
                     </div>
                 </div>
             </div>
         </form>
     </div>
 @endsection
