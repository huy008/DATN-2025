 @extends('layout.main')

 @section('content')
     <main>
         <section class="breadcrumb__area include-bg pt-60 pb-60  text-start pt-30 page_speed_1957708400">
             <div class="container">
                 <div class="breadcrumb__content p-relative z-index-1">
                     <h3 class="breadcrumb__title">
                         Sản phẩm</h3>
                     <div class="breadcrumb__list js_breadcrumb_reduce_length_on_mobile">
                         <span><a href="index.html">Home</a></span><span>
                             Sản phẩm </span>
                     </div>
                 </div>
             </div>
         </section>
         <section class="tp-shop-area">
             <div class="container position-relative pb-50">
                 <div class="row">
                     <div class="col-xl-12 col-lg-8">
                         <div class="bb-filter-offcanvas-area">
                             <div class="bb-filter-offcanvas-wrapper">
                                 <div class="bb-shop-sidebar">
                                     <form id="filter-form" action="{{ route('category.show', $category->id) }}"
                                         method="GET"
                                         class="bb-product-form-filter d-flex align-items-center justify-content-between">
                                         <div class="tp-shop-widget mb-35 tp-sidebar-search">
                                             <div class="tp-sidebar-search-input">
                                                 <input type="search" id="search-input" name="q"
                                                     placeholder="Search..." value="{{ request('q') }}">
                                                 <button type="submit" title="Search">
                                                     <!-- Search Icon SVG -->
                                                 </button>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <select id="price-range" name="price_range" class="form-control">
                                                 <option value="">Chọn giá</option>
                                                 <option value="0-1000000"
                                                     {{ request('price_range') == '0-1000000' ? 'selected' : '' }}>Dưới 1
                                                     triệu</option>
                                                 <option value="1000000-5000000"
                                                     {{ request('price_range') == '1000000-5000000' ? 'selected' : '' }}>1
                                                     triệu - 5 triệu</option>
                                                 <option value="5000000-10000000"
                                                     {{ request('price_range') == '5000000-10000000' ? 'selected' : '' }}>5
                                                     triệu - 10 triệu</option>
                                                 <option value="10000000-20000000"
                                                     {{ request('price_range') == '10000000-20000000' ? 'selected' : '' }}>
                                                     10 triệu - 20 triệu</option>
                                                 <option value="20000000-56800944"
                                                     {{ request('price_range') == '20000000-56800944' ? 'selected' : '' }}>
                                                     Trên 20 triệu</option>
                                             </select>
                                         </div>
                                     </form>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-xl-12 col-lg-8">
                         <div class="tp-shop-main-wrapper">
                             <div class="bb-product-items-wrapper tp-shop-item-primary">
                                 <div class="row row-cols-xxl-4 row-cols-md-3 row-cols-sm-2 row-cols-2 mb-30">
                                     @if ($products && $products->count() > 0)
                                         @foreach ($products as $product)
                                             <div class="col">
                                                 <div class="tp-product-item transition-3 mb-25 ">
                                                     <div class="tp-product-thumb p-relative fix m-img">
                                                         <a href="{{ route('product.detail', $product->id) }}">
                                                             <img style="max-height:300px"
                                                                 src="{{ asset($product->img_thumbnail) }}"
                                                                 data-bb-lazy="true" loading="lazy"
                                                                 data-src="{{ $product->img_thumbnail }}"
                                                                 alt="{{ $product->name }}" data-ll-status="loaded"
                                                                 class="entered loaded">
                                                         </a>

                                                         <div class="tp-product-badge">
                                                             <span style="background-color: #006554 !important;">New</span>
                                                         </div>
                                                     </div>

                                                     <div class="tp-product-content">


                                                         <div class="tp-product-category">
                                                             <a href="#">{{ $product->category->name }}</a>
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
                                                                     <a href=""
                                                                         data-bb-toggle="scroll-to-review">({{ $reviewCount }}
                                                                         đánh giá)</a>
                                                                 </div>
                                                             </div>

                                                             <div class="tp-product-price-wrapper">
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
                                     @else
                                             <div
                                                 style="display: flex; justify-content: center; align-items: center; min-height: 200px;margin-left:550px">
                                                 <p style="font-size: 20px; text-align: center;">Không có sản phẩm nào !!!!
                                                 </p>
                                             </div>
                                     @endif
                                 </div>
                                 {{-- {{ $products->appends(request()->query())->links() }} --}}
                             </div>

                         </div>
                     </div>
                 </div>
             </div>
         </section>
     </main>
     <script>
         document.addEventListener("DOMContentLoaded", function() {
             const form = document.getElementById('filter-form');
             const priceRangeSelect = document.getElementById('price-range');
             const searchInput = document.getElementById('search-input');

             // Lắng nghe sự kiện thay đổi giá trị khoảng giá và tìm kiếm
             priceRangeSelect.addEventListener('change', function() {
                 form.submit(); // Gửi form để reload trang với dữ liệu mới
             });

             searchInput.addEventListener('input', function() {
                 const searchValue = searchInput.value
                     .trim(); // Lấy giá trị tìm kiếm và loại bỏ khoảng trắng

                 // Chỉ submit form khi người dùng nhập ít nhất 3 ký tự
                 if (searchValue.length >= 3) {
                     form.submit(); // Gửi form để reload trang với dữ liệu mới
                 }
             });
         });
     </script>
 @endsection
