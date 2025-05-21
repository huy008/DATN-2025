 @extends('layout.main')
 @section('content')
     <style>
         .product-review-progress-bar-value .progress-bar {
             background-color: #ffc107;
         }
     </style>
     <main>
         <section
             class="breadcrumb__area include-bg pt-30 pb-30 mb-50 breadcrumb__style-2 include-bg pt-30 pb-30 pt-30 page_speed_1399539857">
             <div class="container">
                 <div class="breadcrumb__content p-relative z-index-1">
                     <div class="breadcrumb__list js_breadcrumb_reduce_length_on_mobile">
                         <span><a href="{{ route('index') }}">Trang chủ</a></span><span><a
                                 href="{{ route('category.show', $product->category->id) }}">{{ $product->category->name }}</a></span>
                         <span>
                             {{ $product->name }}
                         </span>
                     </div>
                 </div>
             </div>
         </section>
         <section class="tp-product-details-area ">
             <div class="tp-product-details-top bb-product-detail">
                 <div class="container">
                     <div class="row">
                         <div class="col-lg-6">
                             <div class="tp-product-details-thumb-wrapper me-0 me-md-3 tp-tab">
                                 <div class="bb-product-gallery-wrapper">
                                     <div class="bb-product-gallery bb-product-gallery-vertical">
                                         <div class="bb-product-gallery-images">
                                             @if (!empty($variantImages))
                                                 @foreach ($variantImages as $variantImage)
                                                     <a href="{{ asset($variantImage) }}" class="variant-image">
                                                         <img src="{{ asset($variantImage) }}"
                                                             alt="{{ $product->name }}"></a>
                                                 @endForEach
                                             @else
                                                 <a href="{{ asset($product->img_thumbnail) }}">
                                                     <img src="{{ asset($product->img_thumbnail) }}" data-bb-lazy="true"
                                                         loading="lazy" data-src="{{ asset($product->img_thumbnail) }}"
                                                         alt="{{ $product->name }}"></a>
                                             @endif
                                         </div>
                                         <div class="bb-product-gallery-thumbnails" data-vertical="1">
                                             @if (!empty($variantImages))
                                                 @foreach ($variantImages as $variantImage)
                                                     <div data-variant-id="{{ $variantImage }}" class="variant-thumbnail">
                                                         <img src='{{ asset($variantImage) }}' alt="{{ $product->name }}">
                                                     </div>
                                                 @endForeach
                                             @else
                                                 <div class="variant-thumbnail">
                                                     <img src='{{ asset($product->img_thumbnail) }}' data-bb-lazy="true"
                                                         loading="lazy" alt="{{ $product->name }}">
                                                 </div>
                                             @endif

                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-6">
                             <div class="tp-product-details-wrapper has-sticky">
                                 <h1 class="tp-product-details-title">
                                     {{ $product->name }}</h1>
                                 <div class="tp-product-details-inventory d-flex align-items-center mb-10">
                                     <div class="tp-product-details-stock mb-10">
                                         <span><a
                                                 href="{{ route('category.show', $product->category->id) }}">{{ $product->category->name }}</a></span>
                                     </div>
                                     <div class="tp-product-details-rating-wrapper d-flex align-items-center mb-10">
                                         <div class="tp-product-details-rating">
                                             @php
                                                 $reviewCount = $product->reviews->count();
                                                 $rating = $product->average_rating;
                                                 $fullStars = floor($rating);
                                                 $halfStar = $rating - $fullStars >= 0.5;
                                             @endphp

                                             @for ($i = 0; $i < $fullStars; $i++)
                                                 <i class="fa fa-star" style="color: gold; font-size: 20px;"></i>
                                             @endfor

                                             @if ($halfStar)
                                                 <i class="fa fa-star-half-o" style="color: gold; font-size: 20px;"></i>
                                             @endif

                                             @for ($i = 0; $i < 5 - $fullStars - ($halfStar ? 1 : 0); $i++)
                                                 <i class="fa fa-star-o" style="color: gold; font-size: 20px;"></i>
                                             @endfor
                                         </div>
                                         <div class="tp-product-details-reviews">
                                             <a href="apple-watch-series-7.html#product-review"
                                                 data-bb-toggle="scroll-to-review">({{ $reviewCount }}
                                                 đánh giá)</a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="tp-product-details-description mb-20">
                                     {!! $product->short_description !!}
                                 </div>
                                 <div class="tp-product-details-price-wrapper mb-20">
                                     <span class="tp-product-details-price new-price"
                                         data-bb-value="product-price">{{ format_currency($product->final_price ?? $product->base_price) }}</span>
                                     <span class=""><small><del class="tp-product-details-price old-price"
                                                 data-bb-value="product-original-price">{{ format_currency($product->base_price) }}</del></small></span>
                                 </div>
                                 <form method="POST" action="{{ route('cart.add') }}" class="product-form">
                                     @csrf
                                     <input type="hidden" name="id" id="product-id" value="{{ $product->id }}">
                                     <input type="hidden" name="price" value="{{ $product->base_price }}">

                                     <div class="product-attributes product-attribute-swatches" id="product-attributes-15">
                                         <div class="bb-product-attribute-swatch visual-swatches-wrapper attribute-swatches-wrapper"
                                             data-type="visual" data-slug="color">
                                             @if (!empty($groupedAttributes['Màu sắc']))
                                                 <h4 class="bb-product-attribute-swatch-title">
                                                     Màu sắc:
                                                 </h4>
                                                 <ul
                                                     class="bb-product-attribute-swatch-list visual-swatch color-swatch attribute-swatch">
                                                     @foreach ($groupedAttributes['Màu sắc'] as $color)
                                                         <li data-slug="green" data-id="{{ $color['attribute_value_id'] }}"
                                                             data-bs-toggle="tooltip" data-bs-title="Disabled tooltip"
                                                             class="bb-product-attribute-swatch-item attribute-swatch-item">
                                                             <label><input type=radio name="attribute_color"
                                                                     data-slug="green"
                                                                     value="{{ $color['attribute_value_id'] }}"
                                                                     class="product-filter-item"><span
                                                                     class="bb-product-attribute-swatch-display page_speed_{{ $color['attribute_value_id'] }}"></span><span
                                                                     class="bb-product-attribute-swatch-item-tooltip">{{ $color['attribute_value'] }}</span></label>
                                                         </li>
                                                     @endForEach
                                             @endif
                                             </ul>
                                         </div>
                                         <div class="bb-product-attribute-swatch text-swatches-wrapper attribute-swatches-wrapper"
                                             data-type="text" data-slug="capacity">
                                             @if (!empty($groupedAttributes['Dung lượng']))
                                                 <h4 class="bb-product-attribute-swatch-title">
                                                     Dung lượng :
                                                 </h4>
                                                 <ul class="bb-product-attribute-swatch-list text-swatch attribute-swatch">
                                                     @foreach ($groupedAttributes['Dung lượng'] as $capacity)
                                                         <li data-slug="{{ $capacity['attribute_value'] }}"
                                                             data-id="{{ $capacity['attribute_value_id'] }}"
                                                             class="bb-product-attribute-swatch-item attribute-swatch-item">
                                                             <label><input name="attribute_capacity"
                                                                     data-slug="{{ $capacity['attribute_value'] }}"
                                                                     type=radio
                                                                     value="{{ $capacity['attribute_value_id'] }}"
                                                                     class="product-filter-item"><span
                                                                     class="bb-product-attribute-text-display">{{ $capacity['attribute_value'] }}</span></label>
                                                         </li>
                                                     @endForEach
                                             @endif
                                             </ul>
                                         </div>

                                     </div>
                                     <div class="pr_switch_wrap" id="product-option">
                                     </div>
                                     <div class="number-items-available">
                                         <span class="text-success">
                                             {{ $product->stock_quantity }}
                                             sản phẩm có sẵn
                                         </span>
                                     </div>
                                     <div class="tp-product-details-action-wrapper mt-3">
                                         <h3 class="tp-product-details-action-title">
                                             Số lượng
                                         </h3>
                                         <div class="tp-product-details-action-item-wrapper d-flex align-items-center">
                                             <div class="tp-product-details-quantity">
                                                 <div class="tp-product-quantity mb-15 mr-15">
                                                     <span class="tp-cart-minus" data-bb-toggle="decrease-qty"><svg
                                                             width=11 height=2 viewBox="0 0 11 2" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                             <path d="M1 1H10" stroke="currentColor" stroke-width="1.5"
                                                                 stroke-linecap="round" stroke-linejoin="round" />
                                                         </svg></span><input class="tp-cart-input" type=number name=qty
                                                         value="1" min="1"
                                                         max="{{ $product->stock_quantity }}"><span class="tp-cart-plus"
                                                         data-bb-toggle="increase-qty"><svg width=11 height=12
                                                             viewBox="0 0 11 12" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                             <path d="M1 6H10" stroke="currentColor" stroke-width="1.5"
                                                                 stroke-linecap="round" stroke-linejoin="round" />
                                                             <path d="M5.5 10.5V1.5" stroke="currentColor"
                                                                 stroke-width="1.5" stroke-linecap="round"
                                                                 stroke-linejoin="round" />
                                                         </svg></span>
                                                 </div>
                                             </div>
                                             <div class="tp-product-details-add-to-cart mb-15 w-100">
                                                 <input type="hidden" name="redirect" value="1">
                                                 <button type="submit" name="add-to-cart"
                                                     class="tp-product-details-add-to-cart-btn w-100">
                                                     Thêm vào giỏ hàng
                                                 </button>
                                             </div>
                                         </div>
                                         <input type="hidden" name="variant_id" class="variant_id">
                                         <button type="submit" formaction="{{ route('cart.checkout') }}"
                                             name="checkout" class="tp-product-details-buy-now-btn w-100">
                                             Mua ngay
                                         </button>
                                     </div>

                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-8 mx-auto">
                     <div class="product-review-number">
                         <h3 class="product-review-number-title">Đánh giá của khách hàng</h3>
                         <div class="product-review-summary">
                             <div class="product-review-summary-value"><span>{{ number_format($averageRating, 2) }}</span>
                             </div>
                             <div class="tp-product-details-rating-wrapper d-flex align-items-center mb-10">
                                 <div class="tp-product-details-rating">
                                     @php
                                         $reviewCount = $product->reviews->count();
                                         $rating = $product->average_rating;
                                         $fullStars = floor($rating);
                                         $halfStar = $rating - $fullStars >= 0.5;
                                     @endphp

                                     @for ($i = 0; $i < $fullStars; $i++)
                                         <i class="fa fa-star" style="color: gold; font-size: 20px;"></i>
                                     @endfor

                                     @if ($halfStar)
                                         <i class="fa fa-star-half-o" style="color: gold; font-size: 20px;"></i>
                                     @endif

                                     @for ($i = 0; $i < 5 - $fullStars - ($halfStar ? 1 : 0); $i++)
                                         <i class="fa fa-star-o" style="color: gold; font-size: 20px;"></i>
                                     @endfor
                                 </div>
                                 <div class="tp-product-details-reviews">
                                     <a href="apple-watch-series-7.html#product-review"
                                         data-bb-toggle="scroll-to-review">({{ $reviewCount }}
                                         đánh giá)</a>
                                 </div>
                             </div>
                         </div>

                         <div class="product-review-progress">
                             @foreach ($starRatings as $stars => $count)
                                 <div class="product-review-progress-bar">
                                     <span class="product-review-progress-bar-title">{{ $stars }} Stars</span>
                                     <div class="progress product-review-progress-bar-value">
                                         <div role="progressbar"
                                             aria-valuenow="{{ ($reviewCount != 0 ? $count / $reviewCount : 0) * 100 }}"
                                             aria-valuemin="0" aria-valuemax="100"
                                             style="width: {{ ($reviewCount != 0 ? $count / $reviewCount : 0) * 100 }}%;"
                                             class="progress-bar page_speed_500276036">
                                         </div>
                                     </div>
                                     <span class="product-review-progress-bar-percent">
                                         {{ number_format(($reviewCount != 0 ? $count / $reviewCount : 0) * 100, 2) }}%
                                     </span>
                                 </div>
                             @endforeach
                         </div>
      
                         @if ($reviews->count())
                             <div style="max-height: 300px; overflow-y: auto; padding-right: 10px;">
                                 @foreach ($reviews as $review)
                                     @if ($review->publish == 2)
                                         <div style="padding: 20px 0 0 20px; border-bottom: 1px solid #ddd;">
                                             <div style="display: flex; align-items: center; gap: 12px;">
                                                 <img src="{{ asset($review->user->img_thumbnail) ?? asset('images/vnpay.jpg') }}"
                                                     alt="Avatar"
                                                     style="width: 36px;height: 36px;border-radius: 50%; object-fit: cover">
                                                 <strong>{{ $review->user->name }}</strong>
                                                 <div class="tp-product-details-rating">
                                                     @php
                                                         $rating = $review->rating;
                                                     @endphp

                                                     @for ($i = 0; $i < $rating; $i++)
                                                         <i class="fa fa-star" style="color: gold; font-size: 15px;"></i>
                                                     @endfor

                                                     @for ($i = 0; $i < 5 - $rating; $i++)
                                                         <i class="fa fa-star-o"
                                                             style="color: gold; font-size: 15px;"></i>
                                                     @endfor
                                                 </div>
                                             </div>
                                             <p class="mt-1 text-sm text-gray-600">{{ $review->comment }}</p>

                                         </div>
                                     @endif
                                 @endforeach
                             </div>
                         @else
                             <p>Chưa có đánh giá nào cho sản phẩm này.</p>
                         @endif
                     </div>

                 </div>
             </div>
             <section class="tp-product-category mt-50  pb-15" style="text-align:center">
                 <h1 class="pb-50">Sản phẩm liên quan</h1>
                 <div class="container">

                     <div class="tp-product-categories-slider swiper-container" data-items="5">
                         <div class="swiper-wrapper">
                             @foreach ($productRelated as $product)
                                 <div class="swiper-slide">
                                     <div class="tp-product-item transition-3 mb-25 ">
                                         <div class="tp-product-thumb p-relative fix m-img">
                                             <a href="{{ route('product.detail', $product->id) }}">
                                                 <img src="{{ asset($product->img_thumbnail) }}" data-bb-lazy="true"
                                                     loading="lazy" data-src="{{ $product->img_thumbnail }}"
                                                     alt="{{ $product->name }}" data-ll-status="loaded"
                                                     class="entered loaded">
                                             </a>
                                         </div>
                                         <div class="tp-product-content">
                                             <div class="tp-product-category">
                                                 <a href="https://shofy.botble.com/stores/global-office">Global
                                                     Office</a>
                                             </div>
                                             <h3 class="text-truncate tp-product-title">
                                                 <a href="{{ route('product.detail', $product->id) }}"
                                                     title="{{ $product->name }}">
                                                     {{ $product->name }}
                                                 </a>
                                             </h3>
                                             <div class="">
                                                 <div
                                                     class="tp-product-details-rating-wrapper d-flex align-items-center mb-10">
                                                     <div class="tp-product-details-rating">
                                                         @php
                                                             $reviewCount = $product->reviews->count();
                                                             $rating = $product->average_rating;
                                                             $fullStars = floor($rating);
                                                             $halfStar = $rating - $fullStars >= 0.5;
                                                         @endphp

                                                         @for ($i = 0; $i < $fullStars; $i++)
                                                             <i class="fa fa-star"
                                                                 style="color: gold; font-size: 15px;"></i>
                                                         @endfor

                                                         @if ($halfStar)
                                                             <i class="fa fa-star-half-o"
                                                                 style="color: gold; font-size: 15px;"></i>
                                                         @endif

                                                         @for ($i = 0; $i < 5 - $fullStars - ($halfStar ? 1 : 0); $i++)
                                                             <i class="fa fa-star-o"
                                                                 style="color: gold; font-size: 15px;"></i>
                                                         @endfor
                                                     </div>
                                                     <div class="tp-product-details-reviews">
                                                         <a href="apple-watch-series-7.html#product-review"
                                                             data-bb-toggle="scroll-to-review">({{ $reviewCount }}
                                                             đánh giá)</a>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-price-wrapper" style="text-align:left">
                                                     <span class="tp-product-price new-price"
                                                         data-bb-value="product-price">{{ format_currency($product->final_price ?? $product->base_price) }}</span>

                                                     <span class="">
                                                         <small>
                                                             <del class="tp-product-price old-price"
                                                                 data-bb-value="product-original-price">{{ format_currency($product->base_price) }}</del>
                                                         </small>
                                                     </span>
                                                 </div>
                                             </div>



                                         </div>
                                     </div>
                                 </div>
                             @endforeach
                         </div>
                     </div>
                 </div>
             </section>


         </section>
     </main>

     <script>
         document.addEventListener('DOMContentLoaded', function() {
             // Biến lưu trữ giá trị đã chọn
             let selectedColor = null;
             let selectedCapacity = null;

             const colorInputs = document.querySelectorAll('input[name="attribute_color"]');
             const capacityInputs = document.querySelectorAll('input[name="attribute_capacity"]');

             // 👉 Hàm chọn ngẫu nhiên 1 radio
             function selectFirst(inputs) {
                 if (inputs.length > 0) {
                     const firstInput = inputs[0];
                     firstInput.checked = true;
                     firstInput.dispatchEvent(new Event('change'));
                     return firstInput.value;
                 }
                 return null;
             }
             // Lắng nghe sự kiện chọn màu sắc
             colorInputs.forEach(input => {
                 input.addEventListener('change', function() {
                     selectedColor = this.value;
                     checkAndFetchVariant();
                 });
             });

             // Lắng nghe sự kiện chọn dung lượng
             capacityInputs.forEach(input => {
                 input.addEventListener('change', function() {
                     selectedCapacity = this.value;
                     checkAndFetchVariant();
                 });
             });
             // Hàm kiểm tra và gọi API tìm biến thể
             function checkAndFetchVariant() {
                 if (selectedColor && selectedCapacity) {
                     fetchVariant(selectedColor, selectedCapacity);
                 }
             }

             // Hàm gửi AJAX để tìm biến thể
             function fetchVariant(colorId, capacityId) {
                 // Lấy token CSRF (nếu dùng Laravel)
                 const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
                 const productId = document.getElementById('product-id').value;
                 // Gửi yêu cầu AJAX
                 fetch('/find-variant', {
                         method: 'POST',
                         headers: {
                             'Content-Type': 'application/json',
                             'X-CSRF-TOKEN': csrfToken
                         },
                         body: JSON.stringify({
                             color_id: colorId,
                             capacity_id: capacityId,
                             product_id: productId
                         })
                     })
                     .then(response => response.json())
                     .then(data => {
                         if (data.variant) {
                             updateVariantDetails(data.variant);
                         } else {
                             alert('Không tìm thấy biến thể phù hợp!');
                         }
                     })
                     .catch(error => console.error('Error:', error));
             }

             selectedColor = selectFirst(colorInputs);
             selectedCapacity = selectFirst(capacityInputs);

             function formatCurrency(price) {
                 return Number(price).toLocaleString('vi-VN') + 'đ';
             }

             // Hàm cập nhật thông tin biến thể lên giao diện
             function updateVariantDetails(variant) {
                 // Ví dụ: Cập nhật giá, SKU, hình ảnh...
                 document.querySelector('[data-bb-value="product-original-price"]').textContent = formatCurrency(
                     variant.price);
                 document.querySelector('[data-bb-value="product-price"]').textContent = formatCurrency(variant
                     .final_price);
                 //  document.querySelector('[data-bb-value="product-sku"]') = variant.sku;
                 document.querySelector('.text-success').textContent = variant.stock_quantity + " sản phẩm có sẵn";

                 document.querySelector('.tp-cart-input').setAttribute('max', variant.stock_quantity);
                 document.querySelector('.tp-cart-input').value = 1

                 document.querySelector('.variant_id').value = variant.id;
             }
         });
     </script>
     <script>
         document.addEventListener("DOMContentLoaded", function() {
             // Nút tăng số lượng
             document.querySelectorAll('[data-bb-toggle="increase-qty"]').forEach(function(btn) {
                 btn.addEventListener('click', function() {
                     let input = this.parentElement.querySelector('.tp-cart-input');
                     let current = parseInt(input.value) || 1;
                     let max = parseInt(input.getAttribute('max')) || 99;

                     if (current < max) {
                         input.value = current + 1;
                         input.dispatchEvent(new Event('change')); // nếu cần trigger change
                     }
                 });
             });

             // Nút giảm số lượng
             document.querySelectorAll('[data-bb-toggle="decrease-qty"]').forEach(function(btn) {
                 btn.addEventListener('click', function() {
                     let input = this.parentElement.querySelector('.tp-cart-input');
                     let current = parseInt(input.value) || 1;
                     let min = parseInt(input.getAttribute('min')) || 1;

                     if (current > min) {
                         input.value = current - 1;
                         input.dispatchEvent(new Event('change')); // nếu cần trigger change
                     }
                 });
             });
         });
     </script>

 @endsection
