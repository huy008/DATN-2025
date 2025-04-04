 @extends('layout.main')
 @section('content')
     <main>
         <section class="breadcrumb__area include-bg pt-60 pb-60 mb-50 mb-30 text-start pt-30 page_speed_1984785789">
             <div class="container" bis_skin_checked="1">
                 <div class="breadcrumb__content p-relative z-index-1" bis_skin_checked="1">
                     <h3 class="breadcrumb__title">Shopping Cart</h3>
                     <div class="breadcrumb__list js_breadcrumb_reduce_length_on_mobile" bis_skin_checked="1"><span><a
                                 href="https://shofy.botble.com">Home</a></span><span> Shopping Cart </span></div>
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
                                             <th class="tp-cart-header-product">Product</th>
                                             <th class="tp-cart-header-price">Price</th>
                                             <th class="tp-cart-header-quantity">Quantity</th>
                                             <th class="tp-cart-header-total">Total</th>
                                             <th></th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         @foreach ($carts as $cart)
                                             <tr>
                                                 <td class="ps-3 cart-product-content">
                                                     <a href="#">
                                                         <img src="{{ asset($cart['img_thumbnail']) }}" data-bb-lazy="true"
                                                             loading="lazy" data-src="{{ asset($cart['img_thumbnail']) }}"
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
                                                             data-bb-value="product-price">{{ $cart['base_price'] }}</span>

                                                         <span class="">
                                                             <small>
                                                                 <del class="text-muted"
                                                                     data-bb-value="product-original-price">{{ $cart['base_price'] }}</del>
                                                             </small>
                                                         </span>
                                                     </div>
                                                 </td>
                                                 <td class="tp-cart-quantity" data-title="Quantity">
                                                     <div class="tp-product-quantity mt-10 mb-10" bis_skin_checked="1">
                                                         <span class="tp-cart-minus" data-bb-toggle="decrease-qty">
                                                             <svg width="10" height="2" viewBox="0 0 10 2"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M1 1H9" stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round"></path>
                                                             </svg>
                                                         </span>
                                                         <input class="tp-cart-input" type="number"
                                                             name="items[abf2d759b4e8bac06a1569f64bc77b10][values][qty]"
                                                             value="{{ $cart['quantity'] }}" data-bb-toggle="update-cart">
                                                         <span class="tp-cart-plus" data-bb-toggle="increase-qty">
                                                             <svg width="10" height="10" viewBox="0 0 10 10"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M5 1V9" stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round"></path>
                                                                 <path d="M1 5H9" stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round"></path>
                                                             </svg>
                                                         </span>
                                                     </div>
                                                 </td>
                                                 <td class="tp-cart-total" data-title="Total">
                                                     {{ $cart['base_price'] * $cart['quantity'] }}
                                                 </td>
                                                 <td class="tp-cart-action" data-title="Remove">
                                                     <a href="#" class="tp-cart-action-btn"
                                                         data-id="{{ $cart['id'] }}">
                                                         <svg class="icon svg-icon-ti-ti-trash"
                                                             xmlns="http://www.w3.org/2000/svg" width="24"
                                                             height="24" viewBox="0 0 24 24" fill="none"
                                                             stroke="currentColor" stroke-width="2"
                                                             stroke-linecap="round" stroke-linejoin="round">
                                                             <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
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
                             <div class="tp-cart-checkout-total d-flex align-items-center justify-content-between mt-3 mb-0"
                                 bis_skin_checked="1">
                                 <span>Total</span>
                                 <span>$5,459.30</span>
                             </div>
                             <div class="tp-cart-checkout-proceed" bis_skin_checked="1">
                                 <a href="https://shofy.botble.com/checkout/5808cf6fe2c848f25b8b5262b3f5f65a"
                                     class="tp-cart-checkout-btn w-100">
                                     Proceed to Checkout
                                 </a>
                             </div>

                             <a href="https://shofy.botble.com/products" class="btn-link d-block text-center mt-3">
                                 Continue Shopping
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </section>







     </main>
     <section class="tp-subscribe-area pt-70 pb-65 theme-bg p-relative z-index-1">
         <div class="tp-subscribe-shape d-none d-sm-block" bis_skin_checked="1"><img
                 src="https://shofy.botble.com/themes/shofy/images/newsletter/shape-1.png" data-bb-lazy="true"
                 class="tp-subscribe-shape-1 entered loaded" loading="lazy"
                 data-src="https://shofy.botble.com/themes/shofy/images/newsletter/shape-1.png"
                 alt="Subscribe our Newsletter" data-ll-status="loaded"><img
                 src="https://shofy.botble.com/themes/shofy/images/newsletter/shape-2.png" data-bb-lazy="true"
                 class="tp-subscribe-shape-2 entered loaded" loading="lazy"
                 data-src="https://shofy.botble.com/themes/shofy/images/newsletter/shape-2.png"
                 alt="Subscribe our Newsletter" data-ll-status="loaded"><img
                 src="https://shofy.botble.com/themes/shofy/images/newsletter/shape-3.png" data-bb-lazy="true"
                 class="tp-subscribe-shape-3 entered loaded" loading="lazy"
                 data-src="https://shofy.botble.com/themes/shofy/images/newsletter/shape-3.png"
                 alt="Subscribe our Newsletter" data-ll-status="loaded"><img
                 src="https://shofy.botble.com/themes/shofy/images/newsletter/shape-4.png" data-bb-lazy="true"
                 class="tp-subscribe-shape-4 entered loaded" loading="lazy"
                 data-src="https://shofy.botble.com/themes/shofy/images/newsletter/shape-4.png"
                 alt="Subscribe our Newsletter" data-ll-status="loaded">
             <div class="tp-subscribe-plane" bis_skin_checked="1"><img class="tp-subscribe-plane-shape"
                     src="https://shofy.botble.com/themes/shofy/images/newsletter/plane.png"
                     alt="Subscribe our Newsletter"><svg width="399" height="110" class="d-none d-sm-block"
                     viewBox="0 0 399 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                         d="M0.499634 1.00049C8.5 20.0005 54.2733 13.6435 60.5 40.0005C65.6128 61.6426 26.4546 130.331 15 90.0005C-9 5.5 176.5 127.5 218.5 106.5C301.051 65.2247 202 -57.9188 344.5 40.0003C364 53.3997 384 22 399 22"
                         stroke="white" stroke-opacity="0.5" stroke-dasharray="3 3"></path>
                 </svg><svg class="d-sm-none" width="193" height="110" viewBox="0 0 193 110" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                     <path
                         d="M1 1C4.85463 20.0046 26.9085 13.6461 29.9086 40.0095C32.372 61.6569 13.5053 130.362 7.98637 90.0217C-3.57698 5.50061 85.7981 127.53 106.034 106.525C145.807 65.2398 98.0842 -57.9337 166.742 40.0093C176.137 53.412 185.773 22.0046 193 22.0046"
                         stroke="white" stroke-opacity="0.5" stroke-dasharray="3 3"></path>
                 </svg></div>
         </div>
         <div class="container" bis_skin_checked="1">
             <div class="row align-items-center" bis_skin_checked="1">
                 <div class="col-xl-7 col-lg-7" bis_skin_checked="1">
                     <div class="tp-subscribe-content" bis_skin_checked="1"><span>Sale 20% off all store</span>
                         <h3 class="tp-subscribe-title">Subscribe our Newsletter</h3>
                     </div>
                 </div>
                 <div class="col-xl-5 col-lg-5" bis_skin_checked="1">
                     <div class="tp-subscribe-form" bis_skin_checked="1">
                         <form method="POST" action="https://shofy.botble.com/newsletter/subscribe"
                             accept-charset="UTF-8" id="botble-newsletter-forms-fronts-newsletter-form"
                             class="subscribe-form dirty-check" novalidate="novalidate"><input name="_token"
                                 type="hidden" value="fixS1HA6FB9V19i58E4Q9IhApKC9ndtwGaEfIrlW">
                             <div class="tp-subscribe-input" bis_skin_checked="1"><input class="form-control"
                                     placeholder="Enter Your Email" id="newsletter-email" required="required"
                                     name="email" type="email" aria-required="true"><button class=""
                                     type="submit">Subscribe</button></div>
                             <div class="newsletter-message newsletter-success-message page_speed_691515591"
                                 bis_skin_checked="1"></div>
                             <div class="newsletter-message newsletter-error-message page_speed_691515591"
                                 bis_skin_checked="1"></div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <script>
         document.addEventListener('DOMContentLoaded', function() {
             const minusButtons = document.querySelectorAll('.tp-cart-minus');
             const plusButtons = document.querySelectorAll('.tp-cart-plus');
             const totalCartElement = document.querySelector(
                 '.tp-cart-checkout-total span:last-child'); // Tổng tiền giỏ hàng

             function updateTotal(input) {
                 const row = input.closest('tr'); // Lấy hàng chứa sản phẩm
                 const priceElement = row.querySelector('[data-bb-value="product-price"]'); // Giá sản phẩm
                 const totalElement = row.querySelector('.tp-cart-total'); // Tổng tiền sản phẩm
                 const quantity = parseInt(input.value) || 0;
                 const price = parseFloat(priceElement.innerText.replace(/[^0-9.]/g, '')) || 0;

                 // Tính tổng tiền sản phẩm
                 const total = quantity * price;
                 totalElement.innerText = `$${total.toFixed(2)}`;

                 updateCartTotal(); // Cập nhật tổng giỏ hàng
             }

             function updateCartTotal() {
                 let totalCart = 0;
                 document.querySelectorAll('.tp-cart-total').forEach(totalElement => {
                     let totalPrice = parseFloat(totalElement.innerText.replace(/[^0-9.]/g, '')) || 0;
                     totalCart += totalPrice;
                 });

                 // Cập nhật tổng tiền giỏ hàng
                 totalCartElement.innerText = `$${totalCart.toFixed(2)}`;
             }

             function changeQuantity(button, increase = true) {
                 const input = button.parentElement.querySelector('.tp-cart-input');
                 let currentVal = parseInt(input.value) || 0;

                 // Tăng hoặc giảm số lượng
                 if (increase) {
                     input.value = currentVal + 1;
                 } else {
                     if (currentVal > 1) {
                         input.value = currentVal - 1;
                     }
                 }

                 updateTotal(input); // Cập nhật tổng tiền sản phẩm và giỏ hàng
             }

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

             document.querySelectorAll('.tp-cart-input').forEach(input => {
                 input.addEventListener('input', function() {
                     if (this.value < 1) this.value = 1; // Không cho số nhỏ hơn 1
                     updateTotal(this);
                 });
             });

             // Cập nhật tổng ban đầu khi trang tải
             updateCartTotal();
         });

         document.addEventListener('DOMContentLoaded', function() {
             document.querySelectorAll('.tp-cart-action-btn').forEach(button => {
                 button.addEventListener('click', function(event) {
                     event.preventDefault(); // ❌ Ngăn không cho trình duyệt chuyển trang

                     let cartId = this.getAttribute('data-id'); // Lấy ID sản phẩm
                     let row = this.closest('tr'); // Xác định dòng chứa sản phẩm

                     if (!cartId) return;

                     if (!confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')) return;

                     // Gửi AJAX request xóa sản phẩm
                     fetch(`/cart/remove/${cartId}`, {
                             method: 'DELETE',
                             headers: {
                                 'X-CSRF-TOKEN': document.querySelector(
                                     'meta[name="csrf-token"]').getAttribute('content'),
                                 'Accept': 'application/json',
                                 'Content-Type': 'application/json',
                             },
                         })
                         .then(response => response.json())
                         .then(data => {
                             if (data.success) {
                                 row.remove(); // Xóa sản phẩm khỏi giao diện
                                 updateCartTotal(); // Cập nhật tổng tiền giỏ hàng
                                 showToast('Sản phẩm đã được xóa khỏi giỏ hàng', 'success');
                             } else {
                                 showToast('Xóa sản phẩm thất bại!', 'error');
                             }
                         })
                         .catch(error => {
                             console.error('Lỗi:', error);
                             showToast('Đã xảy ra lỗi, vui lòng thử lại!', 'error');
                         });
                 });
             });

             function updateCartTotal() {
                 let totalCart = 0;
                 document.querySelectorAll('.tp-cart-total').forEach(totalElement => {
                     let totalPrice = parseFloat(totalElement.innerText.replace(/[^0-9.]/g, '')) || 0;
                     totalCart += totalPrice;
                 });

                 document.querySelector('.tp-cart-checkout-total span:last-child').innerText =
                     `$${totalCart.toFixed(2)}`;

                 if (document.querySelectorAll('.tp-cart-total').length === 0) {
                     document.querySelector('.tp-cart-checkout-total').innerHTML = `<span>Giỏ hàng trống</span>`;
                 }
             }

             function showToast(message, type = 'success') {
                 let toast = document.createElement('div');
                 toast.className = `toast-message ${type}`;
                 toast.innerText = message;
                 document.body.appendChild(toast);

                 setTimeout(() => {
                     toast.style.opacity = '0';
                     setTimeout(() => toast.remove(), 500);
                 }, 2000);
             }
         });
     </script>
 @endsection
