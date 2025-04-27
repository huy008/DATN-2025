 @extends('layout.main')
 @section('content')
     <main>
         <section class="breadcrumb__area include-bg mb-30 text-start pt-30 page_speed_617743483">
             <div class="container">
                 <div class="breadcrumb__content p-relative z-index-1">
                     <h3 class="breadcrumb__title">
                         Giỏ hàng</h3>
                     <div class="breadcrumb__list js_breadcrumb_reduce_length_on_mobile">
                         <span><a href="{{ route('index') }}">Trang chủ</a></span><span>
                             Giỏ hàng </span>
                     </div>
                 </div>
             </div>
         </section>
         <section class="tp-cart-area pb-120 ">
             <div class="container" bis_skin_checked="1">
                 <div class="row" bis_skin_checked="1">
                     <div class="col-xl-9 col-lg-8" bis_skin_checked="1">
                         <form method="POST" action="https://shofy.botble.com/cart/update" accept-charset="UTF-8"
                             class="cart-form"><input name="_token" type="hidden"
                                 value="fixS1HA6FB9V19i58E4Q9IhApKC9ndtwGaEfIrlW">
                             <div class="tp-cart-list mb-25 mr-30 bb-ecommerce-table" bis_skin_checked="1">
                                 <table class="table">
                                     <thead>
                                         <tr>
                                             <th class="tp-cart-header-product">Sản phẩm</th>
                                             <th class="tp-cart-header-price">Giá tiền</th>
                                             <th class="tp-cart-header-quantity">Số lương</th>
                                             <th class="tp-cart-header-total">Tổng tiền</th>
                                             <th></th>
                                         </tr>
                                     </thead>

                                     <tbody>
                                         @if (count($carts) !== 0)
                                             @foreach ($carts as $cart)
                                                 <tr>
                                                     <td class="ps-3 cart-product-content">
                                                         <a href="#">
                                                             <img src="{{ asset($cart['img_thumbnail']) }}"
                                                                 data-bb-lazy="true" loading="lazy"
                                                                 data-src="{{ asset($cart['img_thumbnail']) }}"
                                                                 alt="Fitbit Charge 5 Fitness Tracker (Digital)"
                                                                 data-ll-status="loaded" class="entered loaded">
                                                         </a>
                                                         <div class="tp-cart-title" bis_skin_checked="1">
                                                             <input type="hidden"
                                                                 name="items[abf2d759b4e8bac06a1569f64bc77b10][rowId]"
                                                                 value="abf2d759b4e8bac06a1569f64bc77b10">
                                                             <a href="#" class="ms-0">{{ $cart['name'] }}</a>
                                                             {{-- <div class="small" bis_skin_checked="1">
                                                         <span class="text-success">In stock</span>
                                                     </div>

                                                     <div class="small" bis_skin_checked="1">
                                                         <span>Vendor:</span>
                                                         <a href="https://shofy.botble.com/stores/old-el-paso"
                                                             class="small fw-medium">Old El Paso</a>
                                                     </div> --}}

                                                             <div class="small" bis_skin_checked="1"></div>
                                                         </div>
                                                     </td>
                                                     <td class="tp-cart-price" data-title="Price">
                                                         <div class="" bis_skin_checked="1">
                                                             <span class=""
                                                                 data-bb-value="product-price">{{ format_currency($cart['base_price']) }}</span>

                                                         </div>
                                                     </td>
                                                     <td class="tp-cart-quantity" data-title="Quantity">
                                                         <div class="tp-product-quantity mt-10 mb-10" bis_skin_checked="1">
                                                             <span class="tp-cart-minus" data-bb-toggle="decrease-qty">
                                                                 <svg width="10" height="2" viewBox="0 0 10 2"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                     <path d="M1 1H9" stroke="currentColor"
                                                                         stroke-width="1.5" stroke-linecap="round"
                                                                         stroke-linejoin="round"></path>
                                                                 </svg>
                                                             </span>
                                                             <input class="tp-cart-input" type="number"
                                                                 data-product-id="{{ $cart['product_id'] }}"
                                                                 data-variant-id="{{ $cart['variant_id'] }}"
                                                                 value="{{ $cart['stock_quantity'] }}"
                                                                 data-bb-toggle="update-cart">
                                                             <span class="tp-cart-plus" data-bb-toggle="increase-qty">
                                                                 <svg width="10" height="10" viewBox="0 0 10 10"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                     <path d="M5 1V9" stroke="currentColor"
                                                                         stroke-width="1.5" stroke-linecap="round"
                                                                         stroke-linejoin="round"></path>
                                                                     <path d="M1 5H9" stroke="currentColor"
                                                                         stroke-width="1.5" stroke-linecap="round"
                                                                         stroke-linejoin="round"></path>
                                                                 </svg>
                                                             </span>
                                                         </div>
                                                     </td>
                                                     <td class="tp-cart-total" data-title="Total">
                                                         {{ format_currency($cart['base_price'] * $cart['stock_quantity']) }}
                                                     </td>
                                                     <td class="tp-cart-action" data-title="Remove">
                                                         <a href="#" class="tp-cart-action-btn"
                                                             data-product-id="{{ $cart['product_id'] }}"
                                                             data-variant-id="{{ $cart['variant_id'] }}">
                                                             <svg class="icon
                                                             svg-icon-ti-ti-trash" xmlns="http://www.w3.org/2000/svg"
                                                             width="24" height="24" viewBox="0 0 24 24"
                                                             fill="none" stroke="currentColor" stroke-width="2"
                                                             stroke-linecap="round" stroke-linejoin="round">
                                                             <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                             </path>
                                                             <path d="M4 7l16 0"></path>
                                                             <path d="M10 11l0 6"></path>
                                                             <path d="M14 11l0 6"></path>
                                                             <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                             </path>
                                                             <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                             </svg>
                                                         </a>
                                                     </td>
                                                 </tr>
                                             @endforeach
                                         @else
                                             <td colspan="4" style="text-align: center">Giỏ hàng của bạn đang trống.
                                             </td>
                                         @endif
                                     </tbody>
                                 </table>

                             </div>
                         </form>
                         <div class="tp-cart-bottom" bis_skin_checked="1">
                             <div class="tp-cart-coupon" bis_skin_checked="1">
                                 <form method="POST" action="https://shofy.botble.com/coupon/apply"
                                     accept-charset="UTF-8" id="coupon-form"><input name="_token" type="hidden"
                                         value="fixS1HA6FB9V19i58E4Q9IhApKC9ndtwGaEfIrlW">

                                 </form>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6" bis_skin_checked="1">
                         <div class="tp-cart-checkout-wrapper" bis_skin_checked="1">
                             {{-- <div class="tp-cart-checkout-top d-flex align-items-center justify-content-between"
                                 bis_skin_checked="1">
                                 <span class="tp-cart-checkout-top-title">Subtotal</span>
                                 <span class="tp-cart-checkout-top-price">$4,963.00</span>
                             </div>
                             <div class="tp-cart-checkout-tax d-flex align-items-center justify-content-between mb-2"
                                 bis_skin_checked="1">
                                 <span class="tp-cart-checkout-tax-title">Tax</span>
                                 <span class="tp-cart-checkout-tax-price">$496.30</span>
                             </div> --}}
                             <div class="tp-cart-checkout-total d-flex align-items-center justify-content-between mt-3 mb-3"
                                 bis_skin_checked="1">
                                 <span>Tổng tiền</span>
                                 <span id="cart-total">$5,459.30</span>
                             </div>
                             <div class="tp-cart-checkout-proceed" bis_skin_checked="1">
                                 <a href="{{ route('checkout') }}" class="tp-cart-checkout-btn w-100">
                                     Thanh toán
                                 </a>
                             </div>

                             <a href="{{ route('index') }}" class="btn-link d-block text-center mt-3">
                                 Tiếp tục mua hàng
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
     </main>

     <script>
         document.addEventListener('DOMContentLoaded', function() {
             const minusButtons = document.querySelectorAll('.tp-cart-minus');
             const plusButtons = document.querySelectorAll('.tp-cart-plus');
             const totalCartElement = document.getElementById('cart-total');

             function updateLineTotal(input) {
                 const row = input.closest('tr');
                 const priceElement = row.querySelector('[data-bb-value="product-price"]');
                 const totalElement = row.querySelector('.tp-cart-total');
                 const quantity = parseInt(input.value) || 0;
                 const rawPrice = priceElement.innerText.replace(/[^\d]/g, '');
                 const price = parseInt(rawPrice) || 0;
                 const total = quantity * price;
                 totalElement.innerText = total.toLocaleString('vi-VN') + 'đ';
             }

             function updateCartTotal() {
                 let totalCart = 0;
                 document.querySelectorAll('.tp-cart-total').forEach(totalElement => {
                     let rawTotal = totalElement.innerText.replace(/[^\d]/g, '');
                     let totalPrice = parseInt(rawTotal) || 0;
                     totalCart += totalPrice;
                 });

                 if (totalCartElement) {
                     totalCartElement.innerText = totalCart.toLocaleString('vi-VN') + 'đ';
                 }

                 // Nếu giỏ hàng trống
                 if (document.querySelectorAll('.tp-cart-total').length === 0) {
                     document.querySelector('.tp-cart-checkout-total').innerHTML = `<span>Giỏ hàng trống</span>`;
                 }
             }

             function updateCartItemQuantity(productId, variantId, quantity) {
                 fetch('/cart/update-quantity', {
                         method: 'POST',
                         headers: {
                             'Content-Type': 'application/json',
                             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                 'content')
                         },
                         body: JSON.stringify({
                             product_id: productId,
                             variant_id: variantId,
                             quantity: quantity
                         })
                     })
                     .then(response => response.json())
                     .then(data => {
                         if (data.success) {
                             showToast('Cập nhật số lượng thành công!');
                         } else {
                             showToast(data.message || 'Cập nhật thất bại!', 'error');
                         }
                     })
                     .catch(error => {
                         console.error('Lỗi:', error);
                         showToast('Có lỗi xảy ra!', 'error');
                     });
             }

             function removeCartItem(productId, variantId, row) {
                 fetch('/cart/remove', {
                         method: 'POST',
                         headers: {
                             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                 'content'),
                             'Accept': 'application/json',
                             'Content-Type': 'application/json',
                         },
                         body: JSON.stringify({
                             product_id: productId,
                             variant_id: variantId
                         }),
                     })
                     .then(response => response.json())
                     .then(data => {
                         if (data.success) {
                             row.remove();
                             updateCartTotal();
                             showToast('Đã xóa sản phẩm khỏi giỏ hàng!');
                         } else {
                             showToast('Xóa sản phẩm thất bại!', 'error');
                         }
                     })
                     .catch(error => {
                         console.error('Lỗi:', error);
                         showToast('Có lỗi xảy ra!', 'error');
                     });
             }

             function changeQuantity(button, increase = true) {
                 const input = button.parentElement.querySelector('.tp-cart-input');
                 let current = parseInt(input.value) || 1;
                 let min = parseInt(input.getAttribute('min')) || 1;
                 let max = parseInt(input.getAttribute('max')) || 99;

                 if (increase && current < max) {
                     current++;
                 } else if (!increase && current > min) {
                     current--;
                 }

                 input.value = current;
                 input.dispatchEvent(new Event('change'));

                 const productId = input.dataset.productId;
                 const variantId = input.dataset.variantId;

                 updateCartItemQuantity(productId, variantId, current);
                 updateLineTotal(input);
                 updateCartTotal();
             }

             function showToast(message, type = 'success') {
                 let toast = document.createElement('div');
                 toast.className = `toast-message ${type}`;
                 toast.style.position = 'fixed';
                 toast.style.top = '20px';
                 toast.style.right = '20px';
                 toast.style.background = type === 'success' ? '#4caf50' : '#f44336';
                 toast.style.color = '#fff';
                 toast.style.padding = '10px 20px';
                 toast.style.borderRadius = '5px';
                 toast.style.zIndex = '9999';
                 toast.style.transition = 'opacity 0.5s';
                 toast.innerText = message;
                 document.body.appendChild(toast);

                 setTimeout(() => {
                     toast.style.opacity = '0';
                     setTimeout(() => toast.remove(), 500);
                 }, 2000);
             }

             // Gắn sự kiện nút tăng giảm
             minusButtons.forEach(function(btn) {
                 btn.addEventListener('click', function() {
                     changeQuantity(this, false);
                 });
             });

             plusButtons.forEach(function(btn) {
                 btn.addEventListener('click', function() {
                     changeQuantity(this, true);
                 });
             });

             // Gắn sự kiện nhập số lượng trực tiếp
             document.querySelectorAll('.tp-cart-input').forEach(input => {
                 input.addEventListener('input', function() {
                     if (this.value < 1) this.value = 1;
                     updateLineTotal(this);
                     updateCartTotal();
                 });

                 input.addEventListener('change', function() {
                     const productId = this.dataset.productId;
                     const variantId = this.dataset.variantId;
                     updateCartItemQuantity(productId, variantId, parseInt(this.value) || 1);
                 });
             });

             // Gắn sự kiện nút XÓA
             document.querySelectorAll('.tp-cart-action-btn').forEach(button => {
                 button.addEventListener('click', function(event) {
                     event.preventDefault();
                     const productId = this.getAttribute('data-product-id');
                     const variantId = this.getAttribute('data-variant-id');
                     const row = this.closest('tr');

                     if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')) {
                         removeCartItem(productId, variantId, row);
                     }
                 });
             });

             // Cập nhật tổng tiền ban đầu
             updateCartTotal();
         });
     </script>

 @endsection
