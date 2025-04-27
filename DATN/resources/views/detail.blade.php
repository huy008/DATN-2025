 @extends('layout.main')
 @section('content')
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
                                         data-bb-value="product-price">{{ format_currency($product->final_price??$product->base_price) }}</span>
                                     <span class=""><small><del class="tp-product-details-price old-price"
                                                 data-bb-value="product-original-price">{{ format_currency($product->base_price) }}</del></small></span>
                                 </div>
                                 <form method="POST" action="{{ route('cart.add') }}" class="product-form">
                                     @csrf
                                     <input type="hidden" name="id" value="{{ $product->id }}">
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
                                             {{ $product->quantity }}
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
                                                         value="1" min="1" max="15"><span
                                                         class="tp-cart-plus" data-bb-toggle="increase-qty"><svg width=11
                                                             height=12 viewBox="0 0 11 12" fill="none"
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


             <section class="tp-product-category  pb-15" style="text-align:center">
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

             {{-- <div data-bb-toggle="block-lazy-loading" data-url="https://shofy.botble.com/ajax/cross-sale-products/15"
                 class="position-relative page_speed_156113627">
             </div> --}}
             {{-- <div class="tp-product-details-bottom">
                 <div class="container">
                     <div class="row">
                         <div class="col-xl-12">
                             <div class="tp-product-details-tab-nav tp-tab">
                                 <nav>
                                     <div class="nav nav-tabs justify-content-center p-relative tp-product-tab"
                                         id="navPresentationTab" role="tablist">
                                         <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab"
                                             data-bs-target="#nav-description" type=button role="tab"
                                             aria-controls="nav-description" aria-selected="true">
                                             Description
                                         </button><button class="nav-link" id="nav-specification-tab"
                                             data-bs-toggle="tab" data-bs-target="#nav-specification" type=button
                                             role="tab" aria-controls="nav-specification" aria-selected="false">
                                             Product
                                             Specification
                                         </button><button class="nav-link" id="nav-review-tab" data-bs-toggle="tab"
                                             data-bs-target="#nav-review" type=button role="tab"
                                             aria-controls="nav-review" aria-selected="false">
                                             Reviews
                                             (9)
                                         </button><button class="nav-link" id="nav-vendor-tab" data-bs-toggle="tab"
                                             data-bs-target="#nav-vendor" type=button role="tab"
                                             aria-controls="nav-store" aria-selected="false">
                                             Vendor
                                         </button><button class="nav-link" id="nav-faq-tab" data-bs-toggle="tab"
                                             data-bs-target="#nav-faq" type=button role="tab" aria-controls="nav-faq"
                                             aria-selected="false">
                                             FAQs
                                         </button><span id="productTabMarker" class="tp-product-details-tab-line"></span>
                                     </div>
                                 </nav>
                                 <div class="tab-content" id="navPresentationTabContent">
                                     <div class="tab-pane fade show active" id="nav-description" role="tabpanel"
                                         aria-labelledby="nav-description-tab" tabindex="0">
                                         <div class="tp-product-details-desc-wrapper">
                                             <div class="ck-content">
                                                 <div class="row justify-content-center">
                                                     <div class="col-xl-10">
                                                         <div class="tp-product-details-desc-item pb-105">
                                                             <div class="row">
                                                                 <div class="col-lg-6">
                                                                     <div class="pt-25">
                                                                         <span>Galaxy
                                                                             A8
                                                                             tablet</span>
                                                                         <h3 class="tp-product-details-desc-title">
                                                                             Your
                                                                             world
                                                                             at
                                                                             a
                                                                             glance
                                                                         </h3>
                                                                         <p> With
                                                                             a
                                                                             slim
                                                                             design,
                                                                             a
                                                                             vibrant
                                                                             entertainment
                                                                             system,
                                                                             and
                                                                             <br>
                                                                             outstanding
                                                                             performance,
                                                                             the
                                                                             new
                                                                             Galaxy
                                                                             Tab
                                                                             A7
                                                                             is
                                                                             a
                                                                             stylish
                                                                             new
                                                                             <br>
                                                                             companion
                                                                             for
                                                                             your
                                                                             life.Dive
                                                                             head-first
                                                                             into
                                                                             the
                                                                             things
                                                                             you
                                                                             love,
                                                                             <br>
                                                                             and
                                                                             easily
                                                                             share
                                                                             your
                                                                             favorite
                                                                             moments.
                                                                             Learn,
                                                                             explore,
                                                                             connect
                                                                             <br>
                                                                             and
                                                                             be
                                                                             inspired.
                                                                         </p>
                                                                     </div>
                                                                     <div>
                                                                         <h3 class="tp-product-details-desc-title">
                                                                             Draw
                                                                             inspiration
                                                                             with
                                                                             S
                                                                             Pen
                                                                         </h3>
                                                                         <p> S
                                                                             Pen
                                                                             is
                                                                             a
                                                                             bundle
                                                                             of
                                                                             writing
                                                                             instruments
                                                                             in
                                                                             one.
                                                                             Its
                                                                             natural
                                                                             grip,
                                                                             <br>
                                                                             low
                                                                             latency
                                                                             and
                                                                             impressive
                                                                             pressure
                                                                             sensitivity
                                                                             will
                                                                             make
                                                                             it
                                                                             your
                                                                             go-to
                                                                             for
                                                                             everything
                                                                             from
                                                                             drawing
                                                                             to
                                                                             editing
                                                                             documents.
                                                                             And
                                                                             S
                                                                             Pen
                                                                             won't
                                                                             get
                                                                             misplaced
                                                                             thanks.
                                                                         </p>
                                                                     </div>
                                                                 </div>
                                                                 <div class="col-lg-6">
                                                                     <div class="tp-product-details-desc-thumb">
                                                                         <img src="{{ asset('client/storage/main/products/product-details-desc-1.jpg') }}"
                                                                             alt="product">
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-details-desc-item pb-75">
                                                             <div class="row">
                                                                 <div class="col-lg-7">
                                                                     <div class="tp-product-details-desc-thumb">
                                                                         <img src="{{ asset('client/storage/main/products/product-details-desc-2.jpg') }}"
                                                                             alt="product">
                                                                     </div>
                                                                 </div>
                                                                 <div class="col-lg-5 order-first order-lg-last">
                                                                     <div class="des-content-2 pl-40">
                                                                         <h3 class="tp-product-details-desc-title">
                                                                             Carry
                                                                             with
                                                                             <br>
                                                                             Confidence
                                                                             and
                                                                             style
                                                                         </h3>
                                                                         <p> Wrap
                                                                             your
                                                                             tablet
                                                                             in
                                                                             a
                                                                             sleek
                                                                             case
                                                                             that's
                                                                             as
                                                                             stylish
                                                                             as
                                                                             it
                                                                             is
                                                                             convenient.
                                                                             Galaxy
                                                                             Tab
                                                                             S6
                                                                             Lite
                                                                             Book
                                                                             Cover
                                                                             folds
                                                                             around
                                                                             and
                                                                             clings
                                                                             magnetically,
                                                                             so
                                                                             you
                                                                             can
                                                                             easily
                                                                             gear
                                                                             up
                                                                             as
                                                                             you're
                                                                             headed
                                                                             out
                                                                             the
                                                                             door.
                                                                             There's
                                                                             even
                                                                             a
                                                                             compartment
                                                                             for
                                                                             S
                                                                             pen,
                                                                             so
                                                                             you
                                                                             can
                                                                             be
                                                                             sure
                                                                             it
                                                                             doesn't
                                                                             get
                                                                             left
                                                                             behind.
                                                                         </p>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-details-desc-item">
                                                             <div class="row">
                                                                 <div class="col-xl-12">
                                                                     <div
                                                                         class="tp-product-details-desc-banner text-center m-img">
                                                                         <h3
                                                                             class="tp-product-details-desc-banner-title tp-product-details-desc-title">
                                                                             Speed
                                                                             Memory
                                                                             Power
                                                                             =
                                                                             Epic
                                                                             Races
                                                                         </h3>
                                                                         <img src={{ asset('client/storage/main/products/product-details-desc-3.jpg') }}
                                                                             alt="product">
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="facebook-comment">
                                                 <div class="fb-comments"
                                                     data-href="https://shofy.botble.com/products/apple-watch-series-7"
                                                     data-numposts="5" data-width="100%">
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="tab-pane fade" id="nav-specification" role="tabpanel"
                                         aria-labelledby="nav-specification-tab" tabindex="0">
                                         <div class="tp-product-details-additional-info">
                                             <div class="row justify-content-center">
                                                 <div class="col-xl-10">
                                                     <table>
                                                         <tbody>
                                                             <tr>
                                                                 <td>Height
                                                                 </td>
                                                                 <td> 73.74
                                                                     cm
                                                                 </td>
                                                             </tr>
                                                             <tr>
                                                                 <td>Width
                                                                 </td>
                                                                 <td> 87.54
                                                                     cm
                                                                 </td>
                                                             </tr>
                                                             <tr>
                                                                 <td>Weight
                                                                 </td>
                                                                 <td> 9.47
                                                                     cm
                                                                 </td>
                                                             </tr>
                                                             <tr>
                                                                 <td>Power
                                                                 </td>
                                                                 <td> 78.34
                                                                     cm
                                                                 </td>
                                                             </tr>
                                                             <tr>
                                                                 <td>Speed
                                                                 </td>
                                                                 <td> 47.76
                                                                     cm
                                                                 </td>
                                                             </tr>
                                                         </tbody>
                                                     </table>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="tab-pane fade" id="nav-review" role="tabpanel"
                                         aria-labelledby="nav-review-tab" tabindex="0">
                                         <div class="tp-product-details-review-wrapper pt-60" id="product-review">
                                             <div class="d-flex flex-column gap-5 product-review-container">
                                                 <div class="row g-3">
                                                     <div class="col-12 col-md-4">
                                                         <div class="product-review-number">
                                                             <h3 class="product-review-number-title">
                                                                 Customer
                                                                 reviews
                                                             </h3>
                                                             <div class="product-review-summary">
                                                                 <div class="product-review-summary-value">
                                                                     <span>
                                                                         2.67
                                                                     </span>
                                                                 </div>
                                                                 <div class="product-review-summary-rating">
                                                                     <div class="bb-product-rating page_speed_284057444">
                                                                         <span class="page_speed_213792111"></span>
                                                                     </div>
                                                                     <p> (9
                                                                         Reviews)
                                                                     </p>
                                                                 </div>
                                                             </div>
                                                             <div class="product-review-progress">
                                                                 <div class="product-review-progress-bar">
                                                                     <span class="product-review-progress-bar-title">
                                                                         5
                                                                         Stars
                                                                     </span>
                                                                     <div
                                                                         class="progress product-review-progress-bar-value">
                                                                         <div role="progressbar" aria-valuenow="11.11"
                                                                             aria-valuemin="0" aria-valuemax="100"
                                                                             class="progress-bar page_speed_2055556672">
                                                                         </div>
                                                                     </div>
                                                                     <span class="product-review-progress-bar-percent">
                                                                         11.11%
                                                                     </span>
                                                                 </div>
                                                                 <div class="product-review-progress-bar">
                                                                     <span class="product-review-progress-bar-title">
                                                                         4
                                                                         Stars
                                                                     </span>
                                                                     <div
                                                                         class="progress product-review-progress-bar-value">
                                                                         <div role="progressbar" aria-valuenow="11.11"
                                                                             aria-valuemin="0" aria-valuemax="100"
                                                                             class="progress-bar page_speed_2055556672">
                                                                         </div>
                                                                     </div>
                                                                     <span class="product-review-progress-bar-percent">
                                                                         11.11%
                                                                     </span>
                                                                 </div>
                                                                 <div class="product-review-progress-bar">
                                                                     <span class="product-review-progress-bar-title">
                                                                         3
                                                                         Stars
                                                                     </span>
                                                                     <div
                                                                         class="progress product-review-progress-bar-value">
                                                                         <div role="progressbar" aria-valuenow="33.33"
                                                                             aria-valuemin="0" aria-valuemax="100"
                                                                             class="progress-bar page_speed_178694564">
                                                                         </div>
                                                                     </div>
                                                                     <span class="product-review-progress-bar-percent">
                                                                         33.33%
                                                                     </span>
                                                                 </div>
                                                                 <div class="product-review-progress-bar">
                                                                     <span class="product-review-progress-bar-title">
                                                                         2
                                                                         Stars
                                                                     </span>
                                                                     <div
                                                                         class="progress product-review-progress-bar-value">
                                                                         <div role="progressbar" aria-valuenow="22.22"
                                                                             aria-valuemin="0" aria-valuemax="100"
                                                                             class="progress-bar page_speed_1737161918">
                                                                         </div>
                                                                     </div>
                                                                     <span class="product-review-progress-bar-percent">
                                                                         22.22%
                                                                     </span>
                                                                 </div>
                                                                 <div class="product-review-progress-bar">
                                                                     <span class="product-review-progress-bar-title">
                                                                         1
                                                                         Star
                                                                     </span>
                                                                     <div
                                                                         class="progress product-review-progress-bar-value">
                                                                         <div role="progressbar" aria-valuenow="22.22"
                                                                             aria-valuemin="0" aria-valuemax="100"
                                                                             class="progress-bar page_speed_1737161918">
                                                                         </div>
                                                                     </div>
                                                                     <span class="product-review-progress-bar-percent">
                                                                         22.22%
                                                                     </span>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="col-12 col-md-8">
                                                         <h4>Add
                                                             your
                                                             review
                                                         </h4>
                                                         <p> Your
                                                             email
                                                             address
                                                             will
                                                             not
                                                             be
                                                             published.
                                                             Required
                                                             fields
                                                             are
                                                             marked
                                                             *
                                                             <span class="required"></span>
                                                         </p>
                                                         <p class="text-danger">
                                                             Please
                                                             <a href="client/login.html">login</a>
                                                             to
                                                             write
                                                             review!
                                                         </p>
                                                         <form method="POST"
                                                             action="https://shofy.botble.com/review/create"
                                                             accept-charset="UTF-8" enctype="multipart/form-data">
                                                             <input name=_token type=hidden
                                                                 value="SPz1qyncaKbdv25m6D9mAygMzUr373EJVS4dARKR"><input
                                                                 type=hidden name=product_id value="15">
                                                             <div class="d-flex align-items-center mb-3">
                                                                 <label class="form-label mb-0 required"
                                                                     for="rating">Your
                                                                     rating:</label>
                                                                 <div class="form-rating-stars ms-2">
                                                                     <input class="btn-check" id="rating-star-5" name=star
                                                                         type=radio value="5" checked><label
                                                                         for="rating-star-5" title="5 stars"><svg
                                                                             class="icon svg-icon-ti-ti-star-filled"
                                                                             xmlns="http://www.w3.org/2000/svg" width=24
                                                                             height=24 viewBox="0 0 24 24"
                                                                             stroke-width="2" stroke="currentColor"
                                                                             fill="none" stroke-linecap="round"
                                                                             stroke-linejoin="round">
                                                                             <path stroke="none" d="M0 0h24v24H0z"
                                                                                 fill="none" />
                                                                             <path
                                                                                 d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                                                 stroke-width="0" fill="currentColor" />
                                                                         </svg></label><input class="btn-check"
                                                                         id="rating-star-4" name=star type=radio
                                                                         value="4"><label for="rating-star-4"
                                                                         title="4 stars"><svg
                                                                             class="icon svg-icon-ti-ti-star-filled"
                                                                             xmlns="http://www.w3.org/2000/svg" width=24
                                                                             height=24 viewBox="0 0 24 24"
                                                                             stroke-width="2" stroke="currentColor"
                                                                             fill="none" stroke-linecap="round"
                                                                             stroke-linejoin="round">
                                                                             <path stroke="none" d="M0 0h24v24H0z"
                                                                                 fill="none" />
                                                                             <path
                                                                                 d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                                                 stroke-width="0" fill="currentColor" />
                                                                         </svg></label><input class="btn-check"
                                                                         id="rating-star-3" name=star type=radio
                                                                         value="3"><label for="rating-star-3"
                                                                         title="3 stars"><svg
                                                                             class="icon svg-icon-ti-ti-star-filled"
                                                                             xmlns="http://www.w3.org/2000/svg" width=24
                                                                             height=24 viewBox="0 0 24 24"
                                                                             stroke-width="2" stroke="currentColor"
                                                                             fill="none" stroke-linecap="round"
                                                                             stroke-linejoin="round">
                                                                             <path stroke="none" d="M0 0h24v24H0z"
                                                                                 fill="none" />
                                                                             <path
                                                                                 d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                                                 stroke-width="0" fill="currentColor" />
                                                                         </svg></label><input class="btn-check"
                                                                         id="rating-star-2" name=star type=radio
                                                                         value="2"><label for="rating-star-2"
                                                                         title="2 stars"><svg
                                                                             class="icon svg-icon-ti-ti-star-filled"
                                                                             xmlns="http://www.w3.org/2000/svg" width=24
                                                                             height=24 viewBox="0 0 24 24"
                                                                             stroke-width="2" stroke="currentColor"
                                                                             fill="none" stroke-linecap="round"
                                                                             stroke-linejoin="round">
                                                                             <path stroke="none" d="M0 0h24v24H0z"
                                                                                 fill="none" />
                                                                             <path
                                                                                 d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                                                 stroke-width="0" fill="currentColor" />
                                                                         </svg></label><input class="btn-check"
                                                                         id="rating-star-1" name=star type=radio
                                                                         value="1"><label for="rating-star-1"
                                                                         title="1 stars"><svg
                                                                             class="icon svg-icon-ti-ti-star-filled"
                                                                             xmlns="http://www.w3.org/2000/svg" width=24
                                                                             height=24 viewBox="0 0 24 24"
                                                                             stroke-width="2" stroke="currentColor"
                                                                             fill="none" stroke-linecap="round"
                                                                             stroke-linejoin="round">
                                                                             <path stroke="none" d="M0 0h24v24H0z"
                                                                                 fill="none" />
                                                                             <path
                                                                                 d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                                                 stroke-width="0" fill="currentColor" />
                                                                         </svg></label>
                                                                 </div>
                                                             </div>
                                                             <div class="mb-3">
                                                                 <label for="comment" class="form-label required">
                                                                     Review:
                                                                 </label>
                                                                 <textarea class="form-control" name=comment required rows="8" placeholder="Write your review" disabled></textarea>
                                                             </div>
                                                             <script type=text/x-custom-template id="review-image-template">
                                                                 <span class="image-viewer__item" data-id="__id__"><img src=https://shofy.botble.com/vendor/core/core/base/images/placeholder.png alt="Preview" class="img-responsive d-block"><span class="image-viewer__icon-remove"><svg class="icon svg-icon-ti-ti-x" xmlns="http://www.w3.org/2000/svg" width=24 height=24 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg></span></span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
                                                                                                                                                                                                                                                                                                                                                                                                                                           
                                                                                                                                                                                                                                                                                                                 
                                                                                                                                                                                       
                                                             </script>
                                                             <div class="image-upload__viewer d-flex">
                                                                 <div class="image-viewer__list position-relative">
                                                                     <div class="image-upload__uploader-container">
                                                                         <div class="d-table">
                                                                             <div class="image-upload__uploader">
                                                                                 <svg class="icon svg-icon-ti-ti-photo"
                                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                                     width=24 height=24 viewBox="0 0 24 24"
                                                                                     fill="none" stroke="currentColor"
                                                                                     stroke-width="2"
                                                                                     stroke-linecap="round"
                                                                                     stroke-linejoin="round">
                                                                                     <path stroke="none" d="M0 0h24v24H0z"
                                                                                         fill="none" />
                                                                                     <path d="M15 8h.01" />
                                                                                     <path
                                                                                         d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" />
                                                                                     <path
                                                                                         d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" />
                                                                                     <path
                                                                                         d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" />
                                                                                 </svg>
                                                                                 <div class="image-upload__text">
                                                                                     Upload
                                                                                     photos
                                                                                 </div>
                                                                                 <input class="image-upload__file-input"
                                                                                     name=images[] data-max-files="6"
                                                                                     data-max-size="2048"
                                                                                     data-max-size-message="The __attribute__ must not be greater than __max__ kilobytes."
                                                                                     type=file
                                                                                     accept="image/png,image/jpeg,image/jpg"
                                                                                     multiple="multiple">
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div role="alert"
                                                                 class="image-upload-info alert alert-info p-2">
                                                                 <div class="small d-flex align-items-center gap-1">
                                                                     <svg class="icon svg-icon-ti-ti-info-circle"
                                                                         xmlns="http://www.w3.org/2000/svg" width=24
                                                                         height=24 viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round">
                                                                         <path stroke="none" d="M0 0h24v24H0z"
                                                                             fill="none" />
                                                                         <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                                                         <path d="M12 9h.01" />
                                                                         <path d="M11 12h1v4h1" />
                                                                     </svg>
                                                                     You
                                                                     can
                                                                     upload
                                                                     up
                                                                     to
                                                                     6
                                                                     photos,
                                                                     each
                                                                     photo
                                                                     maximum
                                                                     size
                                                                     is
                                                                     2
                                                                     MB.
                                                                 </div>
                                                             </div>
                                                             <button type=submit class="btn btn-primary disabled" disabled>
                                                                 Submit
                                                             </button>
                                                         </form>
                                                     </div>
                                                 </div>
                                                 <div class="review-images-container">
                                                     <h4 class="mb-3">
                                                         Images
                                                         from
                                                         customer
                                                         (17)
                                                     </h4>
                                                     <div class="row g-1 review-images">
                                                         <a href="{{ asset('client/storage/main/products/product-6.jpg') }}"
                                                             class="col-3 col-md-2 col-xl-1 position-relative page_speed_665446075"><img
                                                                 src={{ asset('client/storage/main/products/product-6-150x150.jpg') }}
                                                                 alt="{{ $product->name }}" class="img-thumbnail"></a><a
                                                             href="{{ asset('client/storage/main/products/product-details-desc-3.jpg') }}"
                                                             class="col-3 col-md-2 col-xl-1 position-relative page_speed_665446075"><img
                                                                 src={{ asset('client/storage/main/products/product-details-desc-3-150x150.jpg') }}
                                                                 alt="{{ $product->name }}" class="img-thumbnail"></a><a
                                                             href="{{ asset('client/storage/main/products/product-7.jpg') }}"
                                                             class="col-3 col-md-2 col-xl-1 position-relative page_speed_665446075"><img
                                                                 src={{ asset('client/storage/main/products/product-7-150x150.jpg') }}
                                                                 alt="{{ $product->name }}" class="img-thumbnail"></a><a
                                                             href="{{ asset('client/storage/main/products/product-8.jpg') }}"
                                                             class="col-3 col-md-2 col-xl-1 position-relative page_speed_665446075"><img
                                                                 src={{ asset('client/storage/main/products/product-8-150x150.jpg') }}
                                                                 alt="{{ $product->name }}" class="img-thumbnail"></a><a
                                                             href="{{ asset('client/storage/main/products/product-3.jpg') }}"
                                                             class="col-3 col-md-2 col-xl-1 position-relative page_speed_665446075"><img
                                                                 src={{ asset('client/storage/main/products/product-3-150x150.jpg') }}
                                                                 alt="{{ $product->name }}" class="img-thumbnail"></a><a
                                                             href="{{ asset('client/storage/main/products/product-18.jpg') }}"
                                                             class="col-3 col-md-2 col-xl-1 position-relative page_speed_665446075"><img
                                                                 src={{ asset('client/storage/main/products/product-18-150x150.jpg') }}
                                                                 alt="{{ $product->name }}" class="img-thumbnail"></a><a
                                                             href="{{ asset('client/storage/main/products/product-5.jpg') }}"
                                                             class="col-3 col-md-2 col-xl-1 position-relative page_speed_665446075"><img
                                                                 src={{ asset('client/storage/main/products/product-5-150x150.jpg') }}
                                                                 alt="{{ $product->name }}" class="img-thumbnail"></a><a
                                                             href="{{ asset('client/storage/main/products/product-17.jpg') }}"
                                                             class="col-3 col-md-2 col-xl-1 position-relative page_speed_665446075"><img
                                                                 src={{ asset('client/storage/main/products/product-17-150x150.jpg') }}
                                                                 alt="{{ $product->name }}" class="img-thumbnail"></a><a
                                                             href="{{ asset('client/storage/main/products/product-19.jpg') }}"
                                                             class="col-3 col-md-2 col-xl-1 position-relative page_speed_665446075"><img
                                                                 src={{ asset('client/storage/main/products/product-19-150x150.jpg') }}
                                                                 alt="{{ $product->name }}" class="img-thumbnail"></a><a
                                                             href="{{ asset('client/storage/main/products/product-details-desc-1.jpg') }}"
                                                             class="col-3 col-md-2 col-xl-1 position-relative page_speed_665446075"><img
                                                                 src={{ asset('client/storage/main/products/product-details-desc-1-150x150.jpg') }}
                                                                 alt="{{ $product->name }}" class="img-thumbnail"></a><a
                                                             href="{{ asset('client/storage/main/products/product-2.jpg') }}"
                                                             class="col-3 col-md-2 col-xl-1 position-relative page_speed_665446075"><img
                                                                 src={{ asset('client/storage/main/products/product-2-150x150.jpg') }}
                                                                 alt="{{ $product->name }}" class="img-thumbnail"></a><a
                                                             href="{{ asset('client/storage/main/products/product-4.jpg') }}"
                                                             class="col-3 col-md-2 col-xl-1 position-relative page_speed_665446075"><img
                                                                 src={{ asset('client/storage/main/products/product-4-150x150.jpg') }}
                                                                 alt="{{ $product->name }}" class="img-thumbnail">
                                                             <div
                                                                 class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75 rounded">
                                                             </div>
                                                             <div
                                                                 class="position-absolute top-50 start-50 translate-middle text-white">
                                                                 <span class="badge bg-dark">+5
                                                                     more</span>
                                                             </div>
                                                         </a><a
                                                             href="{{ asset('client/storage/main/products/product-19.jpg') }}"
                                                             class="col-3 col-md-2 col-xl-1 position-relative page_speed_391311860"><img
                                                                 src={{ asset('client/storage/main/products/product-19-150x150.jpg') }}
                                                                 alt="{{ $product->name }}" class="img-thumbnail"></a><a
                                                             href="{{ asset('client/storage/main/products/product-16.jpg') }}"
                                                             class="col-3 col-md-2 col-xl-1 position-relative page_speed_391311860"><img
                                                                 src={{ asset('client/storage/main/products/product-16-150x150.jpg') }}
                                                                 alt="{{ $product->name }}" class="img-thumbnail"></a><a
                                                             href="{{ asset('client/storage/main/products/product-6.jpg') }}"
                                                             class="col-3 col-md-2 col-xl-1 position-relative page_speed_391311860"><img
                                                                 src={{ asset('client/storage/main/products/product-6-150x150.jpg') }}
                                                                 alt="{{ $product->name }}" class="img-thumbnail"></a><a
                                                             href="{{ asset('client/storage/main/products/product-16.jpg') }}"
                                                             class="col-3 col-md-2 col-xl-1 position-relative page_speed_391311860"><img
                                                                 src={{ asset('client/storage/main/products/product-16-150x150.jpg') }}
                                                                 alt="{{ $product->name }}" class="img-thumbnail"></a><a
                                                             href="{{ asset('client/storage/main/products/product-details-desc-2.jpg') }}"
                                                             class="col-3 col-md-2 col-xl-1 position-relative page_speed_391311860"><img
                                                                 src={{ asset('client/storage/main/products/product-details-desc-2-150x150.jpg') }}
                                                                 alt="{{ $product->name }}" class="img-thumbnail"></a>
                                                     </div>
                                                 </div>
                                                 <div class="position-relative review-list-container">
                                                     <h4 class="mb-3">
                                                         9
                                                         review(s)
                                                         for
                                                         &quot;Apple
                                                         Watch
                                                         Series
                                                         7&quot;
                                                     </h4>
                                                     <div class="review-list">
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="tab-pane fade" id="nav-vendor" role="tabpanel"
                                         aria-labelledby="nav-vendor-tab" tabindex="0">
                                         <div class="pt-60">
                                             <div class="d-flex gap-3 mb-3">
                                                 <img src={{ asset('client/storage/main/general/placeholder.png') }}
                                                     data-bb-lazy="true" loading="lazy"
                                                     data-src="https://shofy.botble.com/storage/main/stores/3.png')}}"
                                                     alt="Young Shop" class="rounded-pill page_speed_737501745">
                                                 <div>
                                                     <h6><a href="/stores/young-shop.html">Young
                                                             Shop</a>
                                                     </h6>
                                                     <div class="d-flex align-items-center gap-2">
                                                         <div class="bb-product-rating page_speed_1348734562">
                                                             <span class="page_speed_385708504"></span>
                                                         </div>
                                                         <span class="small text-muted">
                                                             1
                                                         </span>
                                                     </div>
                                                     <time class="small text-muted" datetime="2025-01-08">
                                                         Joined
                                                         Jan
                                                         08,
                                                         2025
                                                     </time>
                                                 </div>
                                             </div>
                                             <ul class="d-flex flex-column gap-2 list-unstyled mb-3">
                                                 <li class="d-flex align-items-center gap-2">
                                                     <svg class="icon svg-icon-ti-ti-map-pin"
                                                         xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                         <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                         <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                                         <path
                                                             d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                                                     </svg><strong>Address:</strong><span>33253
                                                         Heathcote
                                                         Station
                                                         Suite
                                                         569,
                                                         North
                                                         Jeffrymouth,
                                                         Missouri,
                                                         VE</span>
                                                 </li>
                                                 <li class="d-flex align-items-center gap-2">
                                                     <svg class="icon svg-icon-ti-ti-headphones"
                                                         xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                         <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                         <path
                                                             d="M4 13m0 2a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2z" />
                                                         <path
                                                             d="M15 13m0 2a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2z" />
                                                         <path d="M4 15v-3a8 8 0 0 1 16 0v3" />
                                                     </svg><strong>Phone:</strong><a
                                                         href="tel:+16235652900">+16235652900</a>
                                                 </li>
                                                 <li class="d-flex align-items-center gap-2">
                                                     <svg class="icon svg-icon-ti-ti-mail"
                                                         xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                         <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                         <path
                                                             d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                                         <path d="M3 7l9 6l9 -6" />
                                                     </svg><strong>Email:</strong><a
                                                         href="cdn-cgi/l/email-protection.html#fd9b98988e89d399949392bd98859c908d9198d3939889"><span
                                                             class="__cf_email__"
                                                             data-cfemail="7f191a1a0c0b511b1611103f1a071e120f131a51111a0b">[email&#160;protected]</span></a>
                                                 </li>
                                             </ul>
                                             <p> Pariatur
                                                 consequuntur
                                                 et
                                                 saepe.
                                                 Quia
                                                 et
                                                 et
                                                 delectus
                                                 eveniet
                                                 sequi
                                                 libero
                                                 laborum.
                                                 Sed
                                                 aperiam
                                                 occaecati
                                                 dolores
                                                 voluptates
                                                 debitis
                                                 ex.
                                                 Eos
                                                 molestias
                                                 officia
                                                 at
                                                 eos
                                                 distinctio.
                                                 Quaerat
                                                 incidunt
                                                 ut
                                                 illo.
                                                 Nihil
                                                 quia
                                                 ipsam
                                                 porro
                                                 ut
                                                 odit
                                                 et
                                                 consequatur
                                                 est.
                                                 Incidunt
                                                 reprehenderit
                                                 repellendus
                                                 tenetur.
                                                 Velit
                                                 odio
                                                 ut
                                                 dolores
                                                 dolore.
                                                 Eveniet
                                                 impedit
                                                 deleniti
                                                 ut
                                                 earum.
                                             </p>
                                         </div>
                                     </div>
                                     <div class="tab-pane fade" id="nav-faq" role="tabpanel"
                                         aria-labelledby="nav-faq-tab" tabindex="0">
                                         <div class="pt-60">
                                             <div class="product-faqs-accordion accordion" id="faqs-accordion">
                                                 <div class="accordion-item">
                                                     <h2 class="accordion-header">
                                                         <button class="accordion-button" type=button
                                                             data-toggle="collapse" data-target="#collapse-0"
                                                             aria-expanded="true" data-bs-toggle="collapse"
                                                             data-bs-target="#collapse-0" aria-expanded="true"
                                                             aria-controls="collapse-0">
                                                             What
                                                             Shipping
                                                             Methods
                                                             Are
                                                             Available?
                                                         </button>
                                                     </h2>
                                                     <div id="collapse-0" class="accordion-collapse collapse show"
                                                         data-bs-parent="#faqs-accordion">
                                                         <div class="accordion-body">
                                                             Ex
                                                             Portland
                                                             Pitchfork
                                                             irure
                                                             mustache.
                                                             Eutra
                                                             fap
                                                             before
                                                             they
                                                             sold
                                                             out
                                                             literally.
                                                             Aliquip
                                                             ugh
                                                             bicycle
                                                             rights
                                                             actually
                                                             mlkshk,
                                                             seitan
                                                             squid
                                                             craft
                                                             beer
                                                             tempor.
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="accordion-item">
                                                     <h2 class="accordion-header">
                                                         <button class="accordion-button collapsed" type=button
                                                             data-toggle="collapse" data-target="#collapse-1"
                                                             aria-expanded="true" data-bs-toggle="collapse"
                                                             data-bs-target="#collapse-1" aria-expanded="true"
                                                             aria-controls="collapse-1">
                                                             What
                                                             Payment
                                                             Methods
                                                             Are
                                                             Accepted?
                                                         </button>
                                                     </h2>
                                                     <div id="collapse-1" class="accordion-collapse collapse"
                                                         data-bs-parent="#faqs-accordion">
                                                         <div class="accordion-body">
                                                             Fashion
                                                             axe
                                                             DIY
                                                             jean
                                                             shorts,
                                                             swag
                                                             kale
                                                             chips
                                                             meh
                                                             polaroid
                                                             kogi
                                                             butcher
                                                             Wes
                                                             Anderson
                                                             chambray
                                                             next
                                                             level
                                                             semiotics
                                                             gentrify
                                                             yr.
                                                             Voluptate
                                                             photo
                                                             booth
                                                             fugiat
                                                             Vice.
                                                             Austin
                                                             sed
                                                             Williamsburg,
                                                             ea
                                                             labore
                                                             raw
                                                             denim
                                                             voluptate
                                                             cred
                                                             proident
                                                             mixtape
                                                             excepteur
                                                             mustache.
                                                             Twee
                                                             chia
                                                             photo
                                                             booth
                                                             readymade
                                                             food
                                                             truck,
                                                             hoodie
                                                             roof
                                                             party
                                                             swag
                                                             keytar
                                                             PBR
                                                             DIY.
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="accordion-item">
                                                     <h2 class="accordion-header">
                                                         <button class="accordion-button collapsed" type=button
                                                             data-toggle="collapse" data-target="#collapse-2"
                                                             aria-expanded="true" data-bs-toggle="collapse"
                                                             data-bs-target="#collapse-2" aria-expanded="true"
                                                             aria-controls="collapse-2">
                                                             Is
                                                             Buying
                                                             On-Line
                                                             Safe?
                                                         </button>
                                                     </h2>
                                                     <div id="collapse-2" class="accordion-collapse collapse"
                                                         data-bs-parent="#faqs-accordion">
                                                         <div class="accordion-body">
                                                             Art
                                                             party
                                                             authentic
                                                             freegan
                                                             semiotics
                                                             jean
                                                             shorts
                                                             chia
                                                             cred.
                                                             Neutra
                                                             Austin
                                                             roof
                                                             party
                                                             Brooklyn,
                                                             synth
                                                             Thundercats
                                                             swag
                                                             8-bit
                                                             photo
                                                             booth.
                                                             Plaid
                                                             letterpress
                                                             leggings
                                                             craft
                                                             beer
                                                             meh
                                                             ethical
                                                             Pinterest.
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="accordion-item">
                                                     <h2 class="accordion-header">
                                                         <button class="accordion-button collapsed" type=button
                                                             data-toggle="collapse" data-target="#collapse-3"
                                                             aria-expanded="true" data-bs-toggle="collapse"
                                                             data-bs-target="#collapse-3" aria-expanded="true"
                                                             aria-controls="collapse-3">
                                                             Do
                                                             I
                                                             need
                                                             an
                                                             account
                                                             to
                                                             place
                                                             an
                                                             order?
                                                         </button>
                                                     </h2>
                                                     <div id="collapse-3" class="accordion-collapse collapse"
                                                         data-bs-parent="#faqs-accordion">
                                                         <div class="accordion-body">
                                                             Thundercats
                                                             swag
                                                             8-bit
                                                             photo
                                                             booth.
                                                             Plaid
                                                             letterpress
                                                             leggings
                                                             craft
                                                             beer
                                                             meh
                                                             ethical
                                                             Pinterest.
                                                             Twee
                                                             chia
                                                             photo
                                                             booth
                                                             readymade
                                                             food
                                                             truck,
                                                             hoodie
                                                             roof
                                                             party
                                                             swag
                                                             keytar
                                                             PBR
                                                             DIY.
                                                             Cray
                                                             ugh
                                                             3
                                                             wolf
                                                             moon
                                                             fap,
                                                             fashion
                                                             axe
                                                             irony
                                                             butcher
                                                             cornhole
                                                             typewriter
                                                             chambray
                                                             VHS
                                                             banjo
                                                             street
                                                             art.
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="accordion-item">
                                                     <h2 class="accordion-header">
                                                         <button class="accordion-button collapsed" type=button
                                                             data-toggle="collapse" data-target="#collapse-4"
                                                             aria-expanded="true" data-bs-toggle="collapse"
                                                             data-bs-target="#collapse-4" aria-expanded="true"
                                                             aria-controls="collapse-4">
                                                             How
                                                             Do
                                                             I
                                                             Track
                                                             My
                                                             Order?
                                                         </button>
                                                     </h2>
                                                     <div id="collapse-4" class="accordion-collapse collapse"
                                                         data-bs-parent="#faqs-accordion">
                                                         <div class="accordion-body">
                                                             Keytar
                                                             cray
                                                             slow-carb,
                                                             Godard
                                                             banh
                                                             mi
                                                             salvia
                                                             pour-over.
                                                             Slow-carb
                                                             @Odd
                                                             Future
                                                             seitan
                                                             normcore.
                                                             Master
                                                             cleanse
                                                             American
                                                             Apparel
                                                             gentrify
                                                             flexitarian
                                                             beard
                                                             slow-carb
                                                             next
                                                             level.
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div> --}}
             {{-- <div class="tp-product-details-sticky-actions">
                 <div class="container">
                     <div class="d-flex justify-content-between align-items-center">
                         <div class="d-none d-lg-flex align-items-center gap-3">
                             <div class="sticky-actions-img">
                                 <img src={{ asset($product->img_thumbnail) }} data-bb-lazy="true"
                                     loading="lazy"
                                     data-src="{{ asset($product->img_thumbnail) }}"
                                     alt="{{ $product->name }}">
                             </div>
                             <div class="sticky-actions-content">
                                 <h4 class="fs-6 mb-1">
                                     {{ $product->name }}</h4>
                                 <div class="tp-product-price-wrapper">
                                     <span class="tp-product-price new-price"
                                         data-bb-value="product-price">{{ $product->base_price }}</span>
                                     <input type="text" name="price" id="price"
                                         value="{{ $product->base_price }}" hidden>
                                 </div>
                             </div>
                         </div>
                         <div class="sticky-actions-button d-flex align-items-center gap-2">
                             <a type=submit name=add-to-cart class="tp-product-details-add-to-cart-btn"
                                 data-bb-toggle="add-to-cart-in-form" data-product-id="15"
                                 data-product-name="{{ $product->name }}" data-product-price="1373"
                                 data-product-sku="JZ-187-A1" data-product-category="Electronics Gadgets &gt; Backpack"
                                 data-product-brand="Soda Brand"
                                 data-product-categories="New Arrivals,Computers &amp; Laptops,Monitor,Backpack">
                                 Thêm vào giỏ hàng
                             </a><a type=submit name=checkout class="tp-product-details-buy-now-btn">Mua ngay</a>
                         </div>
                     </div>
                 </div>
             </div> --}}
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
                             product_id: {{ $product->id }} // Truyền ID sản phẩm từ Blade
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
