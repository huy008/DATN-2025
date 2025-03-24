 @extends('layout.main')

 @section('content')
     <main>
         <section class="breadcrumb__area include-bg pt-60 pb-60 mb-50 mb-30 text-start pt-30 page_speed_411211456">
             <div class="container">
                 <div class="breadcrumb__content p-relative z-index-1">
                     <h3 class="breadcrumb__title">
                         Products</h3>
                     <div class="breadcrumb__list js_breadcrumb_reduce_length_on_mobile">
                         <span><a href="index.html">Home</a></span><span>
                             Products </span>
                     </div>
                 </div>
             </div>
         </section>
         <section class="tp-shop-area">
             <div class="container position-relative pt-50 pb-50">
                 <section class="tp-brand-area pb-40">
                     <div class="tp-brand-slider p-relative">
                         <div class="tp-brand-slider-active swiper-container">
                             <div class="swiper-wrapper">
                                 <div class="tp-brand-item swiper-slide text-center">
                                     <a href="brands/foodpound.html"><img src="{{ asset('client/storage/main/general/placeholder.png')}}"
                                             data-bb-lazy="true" loading="lazy" class="page_speed_596526783"
                                             data-src="https://shofy.botble.com/storage/main/brands/1.png"
                                             alt="FoodPound"></a>
                                 </div>
                                 <div class="tp-brand-item swiper-slide text-center">
                                     <a href="brands/itea-jsc.html"><img src="{{ asset('client/storage/main/general/placeholder.png')}}"
                                             data-bb-lazy="true" loading="lazy" class="page_speed_596526783"
                                             data-src="https://shofy.botble.com/storage/main/brands/2.png"
                                             alt="iTea JSC"></a>
                                 </div>
                                 <div class="tp-brand-item swiper-slide text-center">
                                     <a href="brands/soda-brand.html"><img src="{{ asset('client/storage/main/general/placeholder.png')}}"
                                             data-bb-lazy="true" loading="lazy" class="page_speed_596526783"
                                             data-src="https://shofy.botble.com/storage/main/brands/3.png"
                                             alt="Soda Brand"></a>
                                 </div>
                                 <div class="tp-brand-item swiper-slide text-center">
                                     <a href="brands/shofy.html"><img src="{{ asset('client/storage/main/general/placeholder.png')}}"
                                             data-bb-lazy="true" loading="lazy" class="page_speed_596526783"
                                             data-src="https://shofy.botble.com/storage/main/brands/4.png"
                                             alt="Shofy"></a>
                                 </div>
                                 <div class="tp-brand-item swiper-slide text-center">
                                     <a href="brands/soda-brand.html"><img src="{{ asset('client/storage/main/general/placeholder.png')}}"
                                             data-bb-lazy="true" loading="lazy" class="page_speed_596526783"
                                             data-src="https://shofy.botble.com/storage/main/brands/5.png"
                                             alt="Soda Brand"></a>
                                 </div>
                             </div>
                         </div>
                         <div class="tp-brand-slider-arrow">
                             <button class="tp-brand-slider-button-prev"><svg width=8 height=14 viewBox="0 0 8 14"
                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                         stroke-linejoin="round" />
                                 </svg></button><button class="tp-brand-slider-button-next"><svg width=8 height=14
                                     viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                         stroke-linejoin="round" />
                                 </svg></button>
                         </div>
                     </div>
                 </section>
                 <div class="tp-product-categories-slider swiper-container">
                     <div class="swiper-wrapper">
                         <div class="swiper-slide">
                             <div class="tp-product-category-item text-center mb-40">
                                 <div class="tp-product-category-thumb fix">
                                     <a href="product-categories/headphones.html" title="Headphones"><img
                                             src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true" loading="lazy"
                                             data-src="https://shofy.botble.com/storage/main/product-categories/1.png"
                                             alt="Headphones"></a>
                                 </div>
                                 <div class="tp-product-category-content">
                                     <h3 class="tp-product-category-title">
                                         <a href="product-categories/headphones.html" title="Headphones">Headphones</a>
                                     </h3>
                                     <p> 3 products
                                     </p>
                                 </div>
                             </div>
                         </div>
                         <div class="swiper-slide">
                             <div class="tp-product-category-item text-center mb-40">
                                 <div class="tp-product-category-thumb fix">
                                     <a href="product-categories/with-bluetooth.html" title="With Bluetooth"><img
                                             src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true" loading="lazy"
                                             data-src="https://shofy.botble.com/storage/main/product-categories/5.png"
                                             alt="With Bluetooth"></a>
                                 </div>
                                 <div class="tp-product-category-content">
                                     <h3 class="tp-product-category-title">
                                         <a href="product-categories/with-bluetooth.html" title="With Bluetooth">With
                                             Bluetooth</a>
                                     </h3>
                                     <p> 5 products
                                     </p>
                                 </div>
                             </div>
                         </div>
                         <div class="swiper-slide">
                             <div class="tp-product-category-item text-center mb-40">
                                 <div class="tp-product-category-thumb fix">
                                     <a href="product-categories/computers-laptops.html"
                                         title="Computers &amp; Laptops"><img src="{{ asset('client/storage/main/general/placeholder.png')}}"
                                             data-bb-lazy="true" loading="lazy"
                                             data-src="https://shofy.botble.com/storage/main/product-categories/menu-2.jpg"
                                             alt="Computers &amp; Laptops"></a>
                                 </div>
                                 <div class="tp-product-category-content">
                                     <h3 class="tp-product-category-title">
                                         <a href="product-categories/computers-laptops.html"
                                             title="Computers &amp; Laptops">Computers
                                             &amp;
                                             Laptops</a>
                                     </h3>
                                     <p> 22
                                         products
                                     </p>
                                 </div>
                             </div>
                         </div>
                         <div class="swiper-slide">
                             <div class="tp-product-category-item text-center mb-40">
                                 <div class="tp-product-category-thumb fix">
                                     <a href="product-categories/mobile-phone.html" title="Mobile Phone"><img
                                             src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true" loading="lazy"
                                             data-src="https://shofy.botble.com/storage/main/product-categories/2.png"
                                             alt="Mobile Phone"></a>
                                 </div>
                                 <div class="tp-product-category-content">
                                     <h3 class="tp-product-category-title">
                                         <a href="product-categories/mobile-phone.html" title="Mobile Phone">Mobile
                                             Phone</a>
                                     </h3>
                                     <p> 4 products
                                     </p>
                                 </div>
                             </div>
                         </div>
                         <div class="swiper-slide">
                             <div class="tp-product-category-item text-center mb-40">
                                 <div class="tp-product-category-thumb fix">
                                     <a href="product-categories/cpu-heat-pipes.html" title="CPU Heat Pipes"><img
                                             src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true" loading="lazy"
                                             data-src="https://shofy.botble.com/storage/main/product-categories/3.png"
                                             alt="CPU Heat Pipes"></a>
                                 </div>
                                 <div class="tp-product-category-content">
                                     <h3 class="tp-product-category-title">
                                         <a href="product-categories/cpu-heat-pipes.html" title="CPU Heat Pipes">CPU
                                             Heat
                                             Pipes</a>
                                     </h3>
                                     <p> 7 products
                                     </p>
                                 </div>
                             </div>
                         </div>
                         <div class="swiper-slide">
                             <div class="tp-product-category-item text-center mb-40">
                                 <div class="tp-product-category-thumb fix">
                                     <a href="product-categories/smart-watch.html" title="Smart Watch"><img
                                             src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true" loading="lazy"
                                             data-src="https://shofy.botble.com/storage/main/product-categories/4.png"
                                             alt="Smart Watch"></a>
                                 </div>
                                 <div class="tp-product-category-content">
                                     <h3 class="tp-product-category-title">
                                         <a href="product-categories/smart-watch.html" title="Smart Watch">Smart
                                             Watch</a>
                                     </h3>
                                     <p> 5 products
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-xl-3 col-lg-4">
                         <div class="bb-filter-offcanvas-area">
                             <div class="bb-filter-offcanvas-wrapper">
                                 <div class="bb-filter-offcanvas-close">
                                     <button type=button class="bb-filter-offcanvas-close-btn"
                                         data-bb-toggle="toggle-filter-sidebar"><svg xmlns="http://www.w3.org/2000/svg"
                                             width=24 height=24 viewBox="0 0 24 24" stroke-width="2"
                                             stroke="currentColor" fill="none" stroke-linecap="round"
                                             stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                             <path d="M18 6l-12 12" />
                                             <path d="M6 6l12 12" />
                                         </svg>
                                         Close
                                     </button>
                                 </div>
                                 <div class="bb-shop-sidebar">
                                     <form action="https://shofy.botble.com/products"
                                         data-action="https://shofy.botble.com/products" method="GET"
                                         class="bb-product-form-filter">
                                         <div class="bb-ecommerce-filter-hidden-fields">
                                             <input name=layout type=hidden class="product-filter-item"
                                                 value=""><input name=page type=hidden class="product-filter-item"
                                                 value=""><input name=per-page type=hidden
                                                 class="product-filter-item" value=""><input name=num type=hidden
                                                 class="product-filter-item" value=""><input name=sort-by
                                                 type=hidden class="product-filter-item" value=""><input
                                                 name=collection type=hidden class="product-filter-item" value="">
                                         </div>
                                         <div class="tp-shop-widget mb-35 tp-sidebar-search">
                                             <div class="tp-sidebar-search-input">
                                                 <input type=search name=q placeholder="Search..." value=""><button
                                                     type=submit title="Search"><svg width=18 height=18
                                                         viewBox="0 0 18 18" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                         <path
                                                             d="M8.11111 15.2222C12.0385 15.2222 15.2222 12.0385 15.2222 8.11111C15.2222 4.18375 12.0385 1 8.11111 1C4.18375 1 1 4.18375 1 8.11111C1 12.0385 4.18375 15.2222 8.11111 15.2222Z"
                                                             stroke="currentColor" stroke-width="2"
                                                             stroke-linecap="round" stroke-linejoin="round">
                                                         </path>
                                                         <path d="M16.9995 17L13.1328 13.1333" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round">
                                                         </path>
                                                     </svg></button>
                                             </div>
                                         </div>
                                         <div class="bb-product-filter">
                                             <h4 class="bb-product-filter-title">
                                                 Categories
                                             </h4>
                                             <div class="bb-product-filter-content">
                                                 <ul class="bb-product-filter-items ">
                                                     <li class="bb-product-filter-item">
                                                         <a href="product-categories/new-arrivals.html"
                                                             class="bb-product-filter-link" data-id="1"><svg
                                                                 class="icon svg-icon-ti-ti-home"
                                                                 xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round">
                                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                 <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                                                 <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                                                 <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                                             </svg>
                                                             New
                                                             Arrivals
                                                         </a>
                                                     </li>
                                                     <li class="bb-product-filter-item">
                                                         <a href="product-categories/electronics.html"
                                                             class="bb-product-filter-link" data-id="2"><svg
                                                                 class="icon svg-icon-ti-ti-device-tv"
                                                                 xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round">
                                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                 <path
                                                                     d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                                                 <path d="M16 3l-4 4l-4 -4" />
                                                             </svg>
                                                             Electronics
                                                         </a>
                                                         <ul class="bb-product-filter-items ">
                                                             <li class="bb-product-filter-item">
                                                                 <a href="product-categories/featured.html"
                                                                     class="bb-product-filter-link" data-id="3">
                                                                     Featured
                                                                 </a>
                                                                 <ul class="bb-product-filter-items ">
                                                                     <li class="bb-product-filter-item">
                                                                         <a href="product-categories/new-arrivals.html"
                                                                             class="bb-product-filter-link"
                                                                             data-id="4">
                                                                             New
                                                                             Arrivals
                                                                         </a>
                                                                     </li>
                                                                     <li class="bb-product-filter-item">
                                                                         <a href="product-categories/best-sellers.html"
                                                                             class="bb-product-filter-link"
                                                                             data-id="5">
                                                                             Best
                                                                             Sellers
                                                                         </a>
                                                                     </li>
                                                                     <li class="bb-product-filter-item">
                                                                         <a href="product-categories/mobile-phone.html"
                                                                             class="bb-product-filter-link"
                                                                             data-id="6">
                                                                             Mobile
                                                                             Phone
                                                                         </a>
                                                                     </li>
                                                                 </ul>
                                                                 <button
                                                                     data-bb-toggle="toggle-product-categories-tree"><svg
                                                                         class="icon svg-icon-ti-ti-plus"
                                                                         xmlns="http://www.w3.org/2000/svg" width=24
                                                                         height=24 viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round">
                                                                         <path stroke="none" d="M0 0h24v24H0z"
                                                                             fill="none" />
                                                                         <path d="M12 5l0 14" />
                                                                         <path d="M5 12l14 0" />
                                                                     </svg><svg xmlns="http://www.w3.org/2000/svg" width=24
                                                                         height=24 viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="icon svg-icon-ti-ti-minus page_speed_1485093326">
                                                                         <path stroke="none" d="M0 0h24v24H0z"
                                                                             fill="none" />
                                                                         <path d="M5 12l14 0" />
                                                                     </svg></button>
                                                             </li>
                                                             <li class="bb-product-filter-item">
                                                                 <a href="product-categories/computers-laptops.html"
                                                                     class="bb-product-filter-link" data-id="7">
                                                                     Computers
                                                                     &amp;
                                                                     Laptops
                                                                 </a>
                                                                 <ul class="bb-product-filter-items ">
                                                                     <li class="bb-product-filter-item">
                                                                         <a href="product-categories/top-brands.html"
                                                                             class="bb-product-filter-link"
                                                                             data-id="8">
                                                                             Top
                                                                             Brands
                                                                         </a>
                                                                     </li>
                                                                     <li class="bb-product-filter-item">
                                                                         <a href="product-categories/weekly-best-selling.html"
                                                                             class="bb-product-filter-link"
                                                                             data-id="9">
                                                                             Weekly
                                                                             Best
                                                                             Selling
                                                                         </a>
                                                                     </li>
                                                                     <li class="bb-product-filter-item">
                                                                         <a href="product-categories/cpu-heat-pipes.html"
                                                                             class="bb-product-filter-link"
                                                                             data-id="10">
                                                                             CPU
                                                                             Heat
                                                                             Pipes
                                                                         </a>
                                                                     </li>
                                                                     <li class="bb-product-filter-item">
                                                                         <a href="product-categories/cpu-coolers.html"
                                                                             class="bb-product-filter-link"
                                                                             data-id="11">
                                                                             CPU
                                                                             Coolers
                                                                         </a>
                                                                     </li>
                                                                 </ul>
                                                                 <button
                                                                     data-bb-toggle="toggle-product-categories-tree"><svg
                                                                         class="icon svg-icon-ti-ti-plus"
                                                                         xmlns="http://www.w3.org/2000/svg" width=24
                                                                         height=24 viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round">
                                                                         <path stroke="none" d="M0 0h24v24H0z"
                                                                             fill="none" />
                                                                         <path d="M12 5l0 14" />
                                                                         <path d="M5 12l14 0" />
                                                                     </svg><svg xmlns="http://www.w3.org/2000/svg" width=24
                                                                         height=24 viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="icon svg-icon-ti-ti-minus page_speed_1485093326">
                                                                         <path stroke="none" d="M0 0h24v24H0z"
                                                                             fill="none" />
                                                                         <path d="M5 12l14 0" />
                                                                     </svg></button>
                                                             </li>
                                                             <li class="bb-product-filter-item">
                                                                 <a href="product-categories/accessories.html"
                                                                     class="bb-product-filter-link" data-id="12">
                                                                     Accessories
                                                                 </a>
                                                                 <ul class="bb-product-filter-items ">
                                                                     <li class="bb-product-filter-item">
                                                                         <a href="product-categories/headphones.html"
                                                                             class="bb-product-filter-link"
                                                                             data-id="13">
                                                                             Headphones
                                                                         </a>
                                                                     </li>
                                                                     <li class="bb-product-filter-item">
                                                                         <a href="product-categories/wireless-headphones.html"
                                                                             class="bb-product-filter-link"
                                                                             data-id="14">
                                                                             Wireless
                                                                             Headphones
                                                                         </a>
                                                                     </li>
                                                                     <li class="bb-product-filter-item">
                                                                         <a href="product-categories/tws-earphones.html"
                                                                             class="bb-product-filter-link"
                                                                             data-id="15">
                                                                             TWS
                                                                             Earphones
                                                                         </a>
                                                                     </li>
                                                                     <li class="bb-product-filter-item">
                                                                         <a href="product-categories/smart-watch.html"
                                                                             class="bb-product-filter-link"
                                                                             data-id="16">
                                                                             Smart
                                                                             Watch
                                                                         </a>
                                                                     </li>
                                                                 </ul>
                                                                 <button
                                                                     data-bb-toggle="toggle-product-categories-tree"><svg
                                                                         class="icon svg-icon-ti-ti-plus"
                                                                         xmlns="http://www.w3.org/2000/svg" width=24
                                                                         height=24 viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round">
                                                                         <path stroke="none" d="M0 0h24v24H0z"
                                                                             fill="none" />
                                                                         <path d="M12 5l0 14" />
                                                                         <path d="M5 12l14 0" />
                                                                     </svg><svg xmlns="http://www.w3.org/2000/svg" width=24
                                                                         height=24 viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="icon svg-icon-ti-ti-minus page_speed_1485093326">
                                                                         <path stroke="none" d="M0 0h24v24H0z"
                                                                             fill="none" />
                                                                         <path d="M5 12l14 0" />
                                                                     </svg></button>
                                                             </li>
                                                             <li class="bb-product-filter-item">
                                                                 <a href="product-categories/gaming-console.html"
                                                                     class="bb-product-filter-link" data-id="17">
                                                                     Gaming
                                                                     Console
                                                                 </a>
                                                             </li>
                                                             <li class="bb-product-filter-item">
                                                                 <a href="product-categories/playstation.html"
                                                                     class="bb-product-filter-link" data-id="18">
                                                                     Playstation
                                                                 </a>
                                                             </li>
                                                         </ul>
                                                         <button data-bb-toggle="toggle-product-categories-tree"><svg
                                                                 class="icon svg-icon-ti-ti-plus"
                                                                 xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round">
                                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                 <path d="M12 5l0 14" />
                                                                 <path d="M5 12l14 0" />
                                                             </svg><svg xmlns="http://www.w3.org/2000/svg" width=24
                                                                 height=24 viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 class="icon svg-icon-ti-ti-minus page_speed_1485093326">
                                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                 <path d="M5 12l14 0" />
                                                             </svg></button>
                                                     </li>
                                                     <li class="bb-product-filter-item">
                                                         <a href="product-categories/gifts.html"
                                                             class="bb-product-filter-link" data-id="19"><svg
                                                                 class="icon svg-icon-ti-ti-gift"
                                                                 xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round">
                                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                 <path
                                                                     d="M3 8m0 1a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1z" />
                                                                 <path d="M12 8l0 13" />
                                                                 <path d="M19 12v7a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-7" />
                                                                 <path
                                                                     d="M7.5 8a2.5 2.5 0 0 1 0 -5a4.8 8 0 0 1 4.5 5a4.8 8 0 0 1 4.5 -5a2.5 2.5 0 0 1 0 5" />
                                                             </svg>
                                                             Gifts
                                                         </a>
                                                     </li>
                                                     <li class="bb-product-filter-item">
                                                         <a href="product-categories/computers.html"
                                                             class="bb-product-filter-link" data-id="20"><svg
                                                                 class="icon svg-icon-ti-ti-device-laptop"
                                                                 xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round">
                                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                 <path d="M3 19l18 0" />
                                                                 <path
                                                                     d="M5 6m0 1a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v8a1 1 0 0 1 -1 1h-12a1 1 0 0 1 -1 -1z" />
                                                             </svg>
                                                             Computers
                                                         </a>
                                                         <ul class="bb-product-filter-items ">
                                                             <li class="bb-product-filter-item">
                                                                 <a href="product-categories/desktop.html"
                                                                     class="bb-product-filter-link" data-id="21">
                                                                     Desktop
                                                                 </a>
                                                             </li>
                                                             <li class="bb-product-filter-item">
                                                                 <a href="product-categories/laptop.html"
                                                                     class="bb-product-filter-link" data-id="22">
                                                                     Laptop
                                                                 </a>
                                                             </li>
                                                             <li class="bb-product-filter-item">
                                                                 <a href="product-categories/tablet.html"
                                                                     class="bb-product-filter-link" data-id="23">
                                                                     Tablet
                                                                 </a>
                                                             </li>
                                                             <li class="bb-product-filter-item">
                                                                 <a href="product-categories/accessories.html"
                                                                     class="bb-product-filter-link" data-id="24">
                                                                     Accessories
                                                                 </a>
                                                             </li>
                                                         </ul>
                                                         <button data-bb-toggle="toggle-product-categories-tree"><svg
                                                                 class="icon svg-icon-ti-ti-plus"
                                                                 xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round">
                                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                 <path d="M12 5l0 14" />
                                                                 <path d="M5 12l14 0" />
                                                             </svg><svg xmlns="http://www.w3.org/2000/svg" width=24
                                                                 height=24 viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 class="icon svg-icon-ti-ti-minus page_speed_1485093326">
                                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                 <path d="M5 12l14 0" />
                                                             </svg></button>
                                                     </li>
                                                     <li class="bb-product-filter-item">
                                                         <a href="product-categories/smartphones-tablets.html"
                                                             class="bb-product-filter-link" data-id="25"><svg
                                                                 class="icon svg-icon-ti-ti-device-mobile"
                                                                 xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round">
                                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                 <path
                                                                     d="M6 5a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2v-14z" />
                                                                 <path d="M11 4h2" />
                                                                 <path d="M12 17v.01" />
                                                             </svg>
                                                             Smartphones
                                                             &amp;
                                                             Tablets
                                                         </a>
                                                     </li>
                                                     <li class="bb-product-filter-item">
                                                         <a href="product-categories/tv-video-music.html"
                                                             class="bb-product-filter-link" data-id="26"><svg
                                                                 class="icon svg-icon-ti-ti-device-tv"
                                                                 xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round">
                                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                 <path
                                                                     d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                                                 <path d="M16 3l-4 4l-4 -4" />
                                                             </svg>
                                                             TV,
                                                             Video
                                                             &amp;
                                                             Music
                                                         </a>
                                                     </li>
                                                     <li class="bb-product-filter-item">
                                                         <a href="product-categories/cameras.html"
                                                             class="bb-product-filter-link" data-id="27"><svg
                                                                 class="icon svg-icon-ti-ti-camera"
                                                                 xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round">
                                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                 <path
                                                                     d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                                                                 <path d="M9 13a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                                             </svg>
                                                             Cameras
                                                         </a>
                                                     </li>
                                                     <li class="bb-product-filter-item">
                                                         <a href="product-categories/cooking.html"
                                                             class="bb-product-filter-link" data-id="28"><svg
                                                                 class="icon svg-icon-ti-ti-grill-spatula"
                                                                 xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round">
                                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                 <path d="M10.2 10.2l6.3 6.3" />
                                                                 <path
                                                                     d="M19.347 16.575l1.08 1.079a1.96 1.96 0 0 1 -2.773 2.772l-1.08 -1.079a1.96 1.96 0 0 1 2.773 -2.772z" />
                                                                 <path
                                                                     d="M3 7l3.05 3.15a2.9 2.9 0 0 0 4.1 -4.1l-3.15 -3.05l-4 4z" />
                                                             </svg>
                                                             Cooking
                                                         </a>
                                                     </li>
                                                     <li class="bb-product-filter-item">
                                                         <a href="product-categories/accessories.html"
                                                             class="bb-product-filter-link" data-id="29"><svg
                                                                 class="icon svg-icon-ti-ti-building-store"
                                                                 xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round">
                                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                 <path d="M3 21l18 0" />
                                                                 <path
                                                                     d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" />
                                                                 <path d="M5 21l0 -10.15" />
                                                                 <path d="M19 21l0 -10.15" />
                                                                 <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
                                                             </svg>
                                                             Accessories
                                                         </a>
                                                         <ul class="bb-product-filter-items ">
                                                             <li class="bb-product-filter-item">
                                                                 <a href="product-categories/with-bluetooth.html"
                                                                     class="bb-product-filter-link" data-id="30">
                                                                     With
                                                                     Bluetooth
                                                                 </a>
                                                             </li>
                                                         </ul>
                                                         <button data-bb-toggle="toggle-product-categories-tree"><svg
                                                                 class="icon svg-icon-ti-ti-plus"
                                                                 xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round">
                                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                 <path d="M12 5l0 14" />
                                                                 <path d="M5 12l14 0" />
                                                             </svg><svg xmlns="http://www.w3.org/2000/svg" width=24
                                                                 height=24 viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 class="icon svg-icon-ti-ti-minus page_speed_1485093326">
                                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                 <path d="M5 12l14 0" />
                                                             </svg></button>
                                                     </li>
                                                     <li class="bb-product-filter-item">
                                                         <a href="product-categories/sports.html"
                                                             class="bb-product-filter-link" data-id="31"><svg
                                                                 class="icon svg-icon-ti-ti-ball-football"
                                                                 xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round">
                                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                 <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                                                 <path d="M12 7l4.76 3.45l-1.76 5.55h-6l-1.76 -5.55z" />
                                                                 <path
                                                                     d="M12 7v-4m3 13l2.5 3m-.74 -8.55l3.74 -1.45m-11.44 7.05l-2.56 2.95m.74 -8.55l-3.74 -1.45" />
                                                             </svg>
                                                             Sports
                                                         </a>
                                                     </li>
                                                     <li class="bb-product-filter-item">
                                                         <a href="product-categories/electronics-gadgets.html"
                                                             class="bb-product-filter-link" data-id="32"><svg
                                                                 class="icon svg-icon-ti-ti-cpu-2"
                                                                 xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round">
                                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                 <path
                                                                     d="M5 5m0 1a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v12a1 1 0 0 1 -1 1h-12a1 1 0 0 1 -1 -1z" />
                                                                 <path d="M8 10v-2h2m6 6v2h-2m-4 0h-2v-2m8 -4v-2h-2" />
                                                                 <path d="M3 10h2" />
                                                                 <path d="M3 14h2" />
                                                                 <path d="M10 3v2" />
                                                                 <path d="M14 3v2" />
                                                                 <path d="M21 10h-2" />
                                                                 <path d="M21 14h-2" />
                                                                 <path d="M14 21v-2" />
                                                                 <path d="M10 21v-2" />
                                                             </svg>
                                                             Electronics
                                                             Gadgets
                                                         </a>
                                                         <ul class="bb-product-filter-items ">
                                                             <li class="bb-product-filter-item">
                                                                 <a href="product-categories/micrscope.html"
                                                                     class="bb-product-filter-link" data-id="33">
                                                                     Micrscope
                                                                 </a>
                                                             </li>
                                                             <li class="bb-product-filter-item">
                                                                 <a href="product-categories/remote-control.html"
                                                                     class="bb-product-filter-link" data-id="34">
                                                                     Remote
                                                                     Control
                                                                 </a>
                                                             </li>
                                                             <li class="bb-product-filter-item">
                                                                 <a href="product-categories/monitor.html"
                                                                     class="bb-product-filter-link" data-id="35">
                                                                     Monitor
                                                                 </a>
                                                             </li>
                                                             <li class="bb-product-filter-item">
                                                                 <a href="product-categories/thermometer.html"
                                                                     class="bb-product-filter-link" data-id="36">
                                                                     Thermometer
                                                                 </a>
                                                             </li>
                                                             <li class="bb-product-filter-item">
                                                                 <a href="product-categories/backpack.html"
                                                                     class="bb-product-filter-link" data-id="37">
                                                                     Backpack
                                                                 </a>
                                                             </li>
                                                             <li class="bb-product-filter-item">
                                                                 <a href="product-categories/headphones.html"
                                                                     class="bb-product-filter-link" data-id="38">
                                                                     Headphones
                                                                 </a>
                                                             </li>
                                                         </ul>
                                                         <button data-bb-toggle="toggle-product-categories-tree"><svg
                                                                 class="icon svg-icon-ti-ti-plus"
                                                                 xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round">
                                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                 <path d="M12 5l0 14" />
                                                                 <path d="M5 12l14 0" />
                                                             </svg><svg xmlns="http://www.w3.org/2000/svg" width=24
                                                                 height=24 viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 class="icon svg-icon-ti-ti-minus page_speed_1485093326">
                                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                 <path d="M5 12l14 0" />
                                                             </svg></button>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                         <div class="bb-product-filter">
                                             <h4 class="bb-product-filter-title">
                                                 Brands
                                             </h4>
                                             <div class="bb-product-filter-content">
                                                 <ul class="bb-product-filter-items filter-checkbox">
                                                     <li class="bb-product-filter-item">
                                                         <input id="attribute-brand-1" type=checkbox name=brands[]
                                                             value="1"><label
                                                             for="attribute-brand-1">FoodPound</label>
                                                     </li>
                                                     <li class="bb-product-filter-item">
                                                         <input id="attribute-brand-2" type=checkbox name=brands[]
                                                             value="2"><label for="attribute-brand-2">iTea
                                                             JSC</label>
                                                     </li>
                                                     <li class="bb-product-filter-item">
                                                         <input id="attribute-brand-3" type=checkbox name=brands[]
                                                             value="3"><label for="attribute-brand-3">Soda
                                                             Brand</label>
                                                     </li>
                                                     <li class="bb-product-filter-item">
                                                         <input id="attribute-brand-4" type=checkbox name=brands[]
                                                             value="4"><label for="attribute-brand-4">Shofy</label>
                                                     </li>
                                                     <li class="bb-product-filter-item">
                                                         <input id="attribute-brand-5" type=checkbox name=brands[]
                                                             value="5"><label for="attribute-brand-5">Soda
                                                             Brand</label>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                         <div class="bb-product-filter">
                                             <h4 class="bb-product-filter-title">
                                                 Tags
                                             </h4>
                                             <div class="bb-product-filter-content">
                                                 <ul class="bb-product-filter-items filter-checkbox">
                                                     <li class="bb-product-filter-item">
                                                         <input id="attribute-tag-4" type=checkbox name=tags[]
                                                             value="4"><label for="attribute-tag-4">Printer</label>
                                                     </li>
                                                     <li class="bb-product-filter-item">
                                                         <input id="attribute-tag-2" type=checkbox name=tags[]
                                                             value="2"><label for="attribute-tag-2">Mobile</label>
                                                     </li>
                                                     <li class="bb-product-filter-item">
                                                         <input id="attribute-tag-1" type=checkbox name=tags[]
                                                             value="1"><label
                                                             for="attribute-tag-1">Electronic</label>
                                                     </li>
                                                     <li class="bb-product-filter-item">
                                                         <input id="attribute-tag-3" type=checkbox name=tags[]
                                                             value="3"><label for="attribute-tag-3">Iphone</label>
                                                     </li>
                                                     <li class="bb-product-filter-item">
                                                         <input id="attribute-tag-6" type=checkbox name=tags[]
                                                             value="6"><label for="attribute-tag-6">IT</label>
                                                     </li>
                                                     <li class="bb-product-filter-item">
                                                         <input id="attribute-tag-5" type=checkbox name=tags[]
                                                             value="5"><label for="attribute-tag-5">Office</label>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                         <div class="bb-product-filter">
                                             <h4 class="bb-product-filter-title border-0 mb-3">
                                                 Price
                                             </h4>
                                             <div class="bb-product-filter-content">
                                                 <div class="bb-product-price-filter">
                                                     <div class="price-slider mb-20" data-min="0"
                                                         data-max="2192232.96">
                                                     </div>
                                                     <div
                                                         class="bb-product-price-filter-info d-flex align-items-center justify-content-between">
                                                         <span class="input-range"><input name=min_price type=hidden
                                                                 value=""><input name=max_price type=hidden
                                                                 value=""><span class="input-range-label"><span
                                                                     class="from"></span>
                                                                 &mdash;
                                                                 <span class="to"></span></span></span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="bb-product-filter bb-product-filter-attributes">
                                             <div class="bb-product-filter-attribute-item">
                                                 <h4 class="bb-product-filter-title">
                                                     Color
                                                 </h4>
                                                 <div class="bb-product-filter-content">
                                                     <ul class="bb-product-filter-items filter-visual">
                                                         <li class="bb-product-filter-item">
                                                             <input id="attribute-1" name=attributes[color][] type=checkbox
                                                                 value="1"><label
                                                                 for="attribute-1">Green</label><span
                                                                 class="bb-product-attribute-swatch-display page_speed_1806909470"></span>
                                                         </li>
                                                         <li class="bb-product-filter-item">
                                                             <input id="attribute-2" name=attributes[color][] type=checkbox
                                                                 value="2"><label for="attribute-2">Blue</label><span
                                                                 class="bb-product-attribute-swatch-display page_speed_1809313494"></span>
                                                         </li>
                                                         <li class="bb-product-filter-item">
                                                             <input id="attribute-3" name=attributes[color][] type=checkbox
                                                                 value="3"><label for="attribute-3">Red</label><span
                                                                 class="bb-product-attribute-swatch-display page_speed_984279924"></span>
                                                         </li>
                                                         <li class="bb-product-filter-item">
                                                             <input id="attribute-4" name=attributes[color][] type=checkbox
                                                                 value="4"><label
                                                                 for="attribute-4">Black</label><span
                                                                 class="bb-product-attribute-swatch-display page_speed_240633161"></span>
                                                         </li>
                                                         <li class="bb-product-filter-item">
                                                             <input id="attribute-5" name=attributes[color][] type=checkbox
                                                                 value="5"><label
                                                                 for="attribute-5">Brown</label><span
                                                                 class="bb-product-attribute-swatch-display page_speed_151184969"></span>
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </div>
                                             <div class="bb-product-filter-attribute-item">
                                                 <h4 class="bb-product-filter-title">
                                                     Weight
                                                 </h4>
                                                 <div class="bb-product-filter-content">
                                                     <ul class="bb-product-filter-items filter-checkbox">
                                                         <li class="bb-product-filter-item">
                                                             <input id="attribute-11" name=attributes[weight][]
                                                                 type=checkbox value="11"><label
                                                                 for="attribute-11">1KG</label>
                                                         </li>
                                                         <li class="bb-product-filter-item">
                                                             <input id="attribute-12" name=attributes[weight][]
                                                                 type=checkbox value="12"><label
                                                                 for="attribute-12">2KG</label>
                                                         </li>
                                                         <li class="bb-product-filter-item">
                                                             <input id="attribute-13" name=attributes[weight][]
                                                                 type=checkbox value="13"><label
                                                                 for="attribute-13">3KG</label>
                                                         </li>
                                                         <li class="bb-product-filter-item">
                                                             <input id="attribute-14" name=attributes[weight][]
                                                                 type=checkbox value="14"><label
                                                                 for="attribute-14">4KG</label>
                                                         </li>
                                                         <li class="bb-product-filter-item">
                                                             <input id="attribute-15" name=attributes[weight][]
                                                                 type=checkbox value="15"><label
                                                                 for="attribute-15">5KG</label>
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </div>
                                             <div class="bb-product-filter-attribute-item">
                                                 <h4 class="bb-product-filter-title">
                                                     Size
                                                 </h4>
                                                 <div class="bb-product-filter-content">
                                                     <ul class="bb-product-filter-items filter-checkbox">
                                                         <li class="bb-product-filter-item">
                                                             <input id="attribute-6" name=attributes[size][] type=checkbox
                                                                 value="6"><label for="attribute-6">S</label>
                                                         </li>
                                                         <li class="bb-product-filter-item">
                                                             <input id="attribute-7" name=attributes[size][] type=checkbox
                                                                 value="7"><label for="attribute-7">M</label>
                                                         </li>
                                                         <li class="bb-product-filter-item">
                                                             <input id="attribute-8" name=attributes[size][] type=checkbox
                                                                 value="8"><label for="attribute-8">L</label>
                                                         </li>
                                                         <li class="bb-product-filter-item">
                                                             <input id="attribute-9" name=attributes[size][] type=checkbox
                                                                 value="9"><label for="attribute-9">XL</label>
                                                         </li>
                                                         <li class="bb-product-filter-item">
                                                             <input id="attribute-10" name=attributes[size][] type=checkbox
                                                                 value="10"><label for="attribute-10">XXL</label>
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </div>
                                             <div class="bb-product-filter-attribute-item">
                                                 <h4 class="bb-product-filter-title">
                                                     Boxes
                                                 </h4>
                                                 <div class="bb-product-filter-content">
                                                     <ul class="bb-product-filter-items filter-checkbox">
                                                         <li class="bb-product-filter-item">
                                                             <input id="attribute-16" name=attributes[boxes][]
                                                                 type=checkbox value="16"><label for="attribute-16">1
                                                                 Box</label>
                                                         </li>
                                                         <li class="bb-product-filter-item">
                                                             <input id="attribute-17" name=attributes[boxes][]
                                                                 type=checkbox value="17"><label for="attribute-17">2
                                                                 Boxes</label>
                                                         </li>
                                                         <li class="bb-product-filter-item">
                                                             <input id="attribute-18" name=attributes[boxes][]
                                                                 type=checkbox value="18"><label for="attribute-18">3
                                                                 Boxes</label>
                                                         </li>
                                                         <li class="bb-product-filter-item">
                                                             <input id="attribute-19" name=attributes[boxes][]
                                                                 type=checkbox value="19"><label for="attribute-19">4
                                                                 Boxes</label>
                                                         </li>
                                                         <li class="bb-product-filter-item">
                                                             <input id="attribute-20" name=attributes[boxes][]
                                                                 type=checkbox value="20"><label for="attribute-20">5
                                                                 Boxes</label>
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </div>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-9 col-lg-8">
                         <div class="tp-shop-main-wrapper">
                             <div class="tp-shop-top mb-45">
                                 <div class="row">
                                     <div class="col-xl-6">
                                         <div class="tp-shop-top-left d-flex align-items-center">
                                             <div class="tp-shop-top-tab tp-tab">
                                                 <ul class="nav nav-tabs" id="productTab" role="tablist">
                                                     <li class="nav-item" role="presentation">
                                                         <button class="nav-link active" data-value="grid" id="grid-tab"
                                                             data-bb-toggle="change-product-filter-layout" type=button
                                                             role="tab" aria-controls="grid-tab-pane"
                                                             aria-selected="true"><svg
                                                                 class="icon svg-icon-ti-ti-layout-grid"
                                                                 xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round">
                                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                 <path
                                                                     d="M4 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                                                 <path
                                                                     d="M14 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                                                 <path
                                                                     d="M4 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                                                 <path
                                                                     d="M14 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                                             </svg></button>
                                                     </li>
                                                     <li class="nav-item" role="presentation">
                                                         <button class="nav-link" data-value="list" id="list-tab"
                                                             data-bb-toggle="change-product-filter-layout" type=button
                                                             role="tab" aria-controls="list-tab-pane"
                                                             aria-selected="false"><svg
                                                                 class="icon svg-icon-ti-ti-layout-list"
                                                                 xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round">
                                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                 <path
                                                                     d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                                                 <path
                                                                     d="M4 14m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                                             </svg></button>
                                                     </li>
                                                 </ul>
                                             </div>
                                             <div class="tp-shop-top-result">
                                                 <p>Showing
                                                     1
                                                     -
                                                     24
                                                     of
                                                     57
                                                     products
                                                 </p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-xl-6">
                                         <div
                                             class="tp-shop-top-right d-sm-flex align-items-center justify-content-xl-end">
                                             <div class="tp-shop-top-select">
                                                 <select name=sort-by data-nice-select>
                                                     <option value="default_sorting">
                                                         Default
                                                     </option>
                                                     <option value="date_asc">
                                                         Oldest
                                                     </option>
                                                     <option value="date_desc">
                                                         Newest
                                                     </option>
                                                     <option value="price_asc">
                                                         Price:
                                                         low
                                                         to
                                                         high
                                                     </option>
                                                     <option value="price_desc">
                                                         Price:
                                                         high
                                                         to
                                                         low
                                                     </option>
                                                     <option value="name_asc">
                                                         Name:
                                                         A-Z
                                                     </option>
                                                     <option value="name_desc">
                                                         Name:
                                                         Z-A
                                                     </option>
                                                     <option value="rating_asc">
                                                         Rating:
                                                         low
                                                         to
                                                         high
                                                     </option>
                                                     <option value="rating_desc">
                                                         Rating:
                                                         high
                                                         to
                                                         low
                                                     </option>
                                                 </select>
                                             </div>
                                             <div class="tp-shop-top-select sort-by">
                                                 <select name=per-page data-nice-select>
                                                     <option value="12">
                                                         12
                                                     </option>
                                                     <option value="24" selected>
                                                         24
                                                     </option>
                                                     <option value="36">
                                                         36
                                                     </option>
                                                 </select>
                                             </div>
                                             <div class="tp-shop-top-filter d-lg-none">
                                                 <button type=button class="tp-filter-btn"
                                                     data-bb-toggle="toggle-filter-sidebar"><span><svg width=16 height=15
                                                             viewBox="0 0 16 15" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                             <path d="M14.9998 3.45001H10.7998" stroke="currentColor"
                                                                 stroke-width="1.5" stroke-miterlimit="10"
                                                                 stroke-linecap="round" stroke-linejoin="round" />
                                                             <path d="M3.8 3.45001H1" stroke="currentColor"
                                                                 stroke-width="1.5" stroke-miterlimit="10"
                                                                 stroke-linecap="round" stroke-linejoin="round" />
                                                             <path
                                                                 d="M6.5999 5.9C7.953 5.9 9.0499 4.8031 9.0499 3.45C9.0499 2.0969 7.953 1 6.5999 1C5.2468 1 4.1499 2.0969 4.1499 3.45C4.1499 4.8031 5.2468 5.9 6.5999 5.9Z"
                                                                 stroke="currentColor" stroke-width="1.5"
                                                                 stroke-miterlimit="10" stroke-linecap="round"
                                                                 stroke-linejoin="round" />
                                                             <path d="M15.0002 11.15H12.2002" stroke="currentColor"
                                                                 stroke-width="1.5" stroke-miterlimit="10"
                                                                 stroke-linecap="round" stroke-linejoin="round" />
                                                             <path d="M5.2 11.15H1" stroke="currentColor"
                                                                 stroke-width="1.5" stroke-miterlimit="10"
                                                                 stroke-linecap="round" stroke-linejoin="round" />
                                                             <path
                                                                 d="M9.4002 13.6C10.7533 13.6 11.8502 12.5031 11.8502 11.15C11.8502 9.79691 10.7533 8.70001 9.4002 8.70001C8.0471 8.70001 6.9502 9.79691 6.9502 11.15C6.9502 12.5031 8.0471 13.6 9.4002 13.6Z"
                                                                 stroke="currentColor" stroke-width="1.5"
                                                                 stroke-miterlimit="10" stroke-linecap="round"
                                                                 stroke-linejoin="round" />
                                                         </svg></span>
                                                     Filter
                                                 </button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="bb-product-items-wrapper tp-shop-item-primary">
                                 <div class="row row-cols-xxl-3 row-cols-md-2 row-cols-sm-2 row-cols-2 mb-30">
                                     <div class="col">
                                         <div class="tp-product-item transition-3 mb-25 ">
                                             <div class="tp-product-thumb p-relative fix m-img">
                                                 <a href="products/sony-ht-a9-home-theater-system.html"><img
                                                         src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                                                         loading="lazy"
                                                         data-src="https://shofy.botble.com/storage/main/products/product-details-desc-3-600x600.jpg"
                                                         alt="Sony HT-A9 Home Theater System"></a>
                                                 <div class="tp-product-badge">
                                                     <span class="page_speed_1493750440">New</span>
                                                 </div>
                                                 <div class="tp-product-action">
                                                     <div class="d-flex flex-column tp-product-action-item">
                                                         <button type=button
                                                             class="tp-product-compare-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-compare" title="Add To Compare"
                                                             data-url="https://shofy.botble.com/compare/57"
                                                             data-remove-url="https://shofy.botble.com/compare/57"
                                                             data-add-text="Add To Compare"
                                                             data-remove-text="Remove From Compare"><svg width=17 height=21
                                                                 viewBox="0 0 17 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M12.6666 1L16 4.33333L12.6666 7.66667"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Compare
                                                             </span></button><button type=button
                                                             class="tp-product-quick-view-btn tp-product-action-btn"
                                                             title="Quick View" data-bs-toggle="modal"
                                                             data-bs-target="#product-quick-view-modal"
                                                             data-url="https://shofy.botble.com/ajax/quick-view/57"><svg
                                                                 width=20 height=17 viewBox="0 0 20 17" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                     fill="currentColor" />
                                                                 <g mask="url(#mask0_1211_721)">
                                                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                                                         d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                         fill="currentColor" />
                                                                 </g>
                                                             </svg><span class="tp-product-tooltip">Quick
                                                                 View</span></button><button type=button
                                                             class="tp-product-add-to-wishlist-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                             data-url="https://shofy.botble.com/wishlist/57"
                                                             data-add-text="Add To Wishlist"
                                                             data-remove-text="Remove From Wishlist"><svg width=20
                                                                 height=19 viewBox="0 0 20 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z"
                                                                     fill="currentColor" />
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z"
                                                                     fill="currentColor" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Wishlist
                                                             </span></button>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-add-cart-btn-large-wrapper">
                                                     <button type=button class="tp-product-add-cart-btn-large"
                                                         data-bb-toggle="add-to-cart" data-show-toast-on-success="false"
                                                         data-url="https://shofy.botble.com/cart/add-to-cart"
                                                         data-id="57" data-bb-toggle="add-to-cart" data-product-id="57"
                                                         data-product-name="Sony HT-A9 Home Theater System"
                                                         data-product-price="343" data-product-sku="OI-172"
                                                         data-product-category="Accessories &gt; With Bluetooth"
                                                         data-product-brand="iTea JSC"
                                                         data-product-categories="TWS Earphones,Cameras,Accessories,With Bluetooth"
                                                         title="Add To Cart"><svg width=20 height=20 viewBox="0 0 20 20"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                         Add
                                                         To
                                                         Cart
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="tp-product-content">
                                                 <div class="tp-product-category">
                                                     <a href="stores/global-office.html">Global
                                                         Office</a>
                                                 </div>
                                                 <h3 class="text-truncate tp-product-title">
                                                     <a href="products/sony-ht-a9-home-theater-system.html"
                                                         title="Sony HT-A9 Home Theater System">
                                                         Sony
                                                         HT-A9
                                                         Home
                                                         Theater
                                                         System
                                                     </a>
                                                 </h3>
                                                 <div class="">
                                                     <div class="tp-product-rating d-flex align-items-center">
                                                         <div class="tp-product-rating-icon">
                                                             <div class="bb-product-rating page_speed_328097537">
                                                                 <span class="page_speed_8077185"></span>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-rating-text">
                                                             <a href="products/sony-ht-a9-home-theater-system.html#product-review"
                                                                 data-bb-toggle="scroll-to-review"><span
                                                                     class="d-none d-sm-block">(8
                                                                     reviews)</span><span
                                                                     class="d-block d-sm-none">(8)</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="tp-product-price-wrapper">
                                                         <span class="tp-product-price new-price"
                                                             data-bb-value="product-price">₦299,103.68</span><span
                                                             class=""><small><del
                                                                     class="tp-product-price old-price"
                                                                     data-bb-value="product-original-price">₦307,163.36</del></small></span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col">
                                         <div class="tp-product-item transition-3 mb-25 ">
                                             <div class="tp-product-thumb p-relative fix m-img">
                                                 <a href="products/sony-x950h-4k-ultra-hd-smart-led-tv.html"><img
                                                         src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                                                         loading="lazy"
                                                         data-src="https://shofy.botble.com/storage/main/products/product-13-600x600.jpg"
                                                         alt="Sony X950H 4K Ultra HD Smart LED TV"></a>
                                                 <div class="tp-product-badge">
                                                 </div>
                                                 <div class="tp-product-action">
                                                     <div class="d-flex flex-column tp-product-action-item">
                                                         <button type=button
                                                             class="tp-product-compare-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-compare" title="Add To Compare"
                                                             data-url="https://shofy.botble.com/compare/14"
                                                             data-remove-url="https://shofy.botble.com/compare/14"
                                                             data-add-text="Add To Compare"
                                                             data-remove-text="Remove From Compare"><svg width=17
                                                                 height=21 viewBox="0 0 17 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M12.6666 1L16 4.33333L12.6666 7.66667"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Compare
                                                             </span></button><button type=button
                                                             class="tp-product-quick-view-btn tp-product-action-btn"
                                                             title="Quick View" data-bs-toggle="modal"
                                                             data-bs-target="#product-quick-view-modal"
                                                             data-url="https://shofy.botble.com/ajax/quick-view/14"><svg
                                                                 width=20 height=17 viewBox="0 0 20 17" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                     fill="currentColor" />
                                                                 <g mask="url(#mask0_1211_721)">
                                                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                                                         d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                         fill="currentColor" />
                                                                 </g>
                                                             </svg><span class="tp-product-tooltip">Quick
                                                                 View</span></button><button type=button
                                                             class="tp-product-add-to-wishlist-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                             data-url="https://shofy.botble.com/wishlist/14"
                                                             data-add-text="Add To Wishlist"
                                                             data-remove-text="Remove From Wishlist"><svg width=20
                                                                 height=19 viewBox="0 0 20 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z"
                                                                     fill="currentColor" />
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z"
                                                                     fill="currentColor" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Wishlist
                                                             </span></button>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-add-cart-btn-large-wrapper">
                                                     <button type=button class="tp-product-add-cart-btn-large"
                                                         data-bb-toggle="quick-shop"
                                                         data-url="https://shofy.botble.com/ajax/quick-shop/sony-x950h-4k-ultra-hd-smart-led-tv"
                                                         data-bb-toggle="quick-shop" data-product-id="14"
                                                         data-product-name="Sony X950H 4K Ultra HD Smart LED TV"
                                                         data-product-price="2250" data-product-sku="9W-196-A1"
                                                         data-product-category="Electronics Gadgets &gt; Backpack"
                                                         data-product-brand="Shofy"
                                                         data-product-categories="Weekly Best Selling,TWS Earphones,Smartphones &amp; Tablets,Backpack"
                                                         title="Quick Shop"><svg width=20 height=20 viewBox="0 0 20 20"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                         Select
                                                         Options
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="tp-product-content">
                                                 <div class="tp-product-category">
                                                     <a href="stores/starkist.html">StarKist</a>
                                                 </div>
                                                 <h3 class="text-truncate tp-product-title">
                                                     <a href="products/sony-x950h-4k-ultra-hd-smart-led-tv.html"
                                                         title="Sony X950H 4K Ultra HD Smart LED TV">
                                                         Sony
                                                         X950H
                                                         4K
                                                         Ultra
                                                         HD
                                                         Smart
                                                         LED
                                                         TV
                                                     </a>
                                                 </h3>
                                                 <div class="">
                                                     <div class="tp-product-rating d-flex align-items-center">
                                                         <div class="tp-product-rating-icon">
                                                             <div class="bb-product-rating page_speed_328097537">
                                                                 <span class="page_speed_1331044914"></span>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-rating-text">
                                                             <a href="products/sony-x950h-4k-ultra-hd-smart-led-tv.html#product-review"
                                                                 data-bb-toggle="scroll-to-review"><span
                                                                     class="d-none d-sm-block">(8
                                                                     reviews)</span><span
                                                                     class="d-block d-sm-none">(8)</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="tp-product-price-wrapper">
                                                         <span class="tp-product-price new-price"
                                                             data-bb-value="product-price">₦2,014,920.00</span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col">
                                         <div class="tp-product-item transition-3 mb-25 ">
                                             <div class="tp-product-thumb p-relative fix m-img">
                                                 <a href="products/apple-watch-series-7.html"><img
                                                         src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                                                         loading="lazy"
                                                         data-src="https://shofy.botble.com/storage/main/products/product-details-desc-2-600x600.jpg"
                                                         alt="Apple Watch Series 7"></a>
                                                 <div class="tp-product-badge">
                                                     <span class="page_speed_1493750440">New</span>
                                                 </div>
                                                 <div class="tp-product-action">
                                                     <div class="d-flex flex-column tp-product-action-item">
                                                         <button type=button
                                                             class="tp-product-compare-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-compare" title="Add To Compare"
                                                             data-url="https://shofy.botble.com/compare/15"
                                                             data-remove-url="https://shofy.botble.com/compare/15"
                                                             data-add-text="Add To Compare"
                                                             data-remove-text="Remove From Compare"><svg width=17
                                                                 height=21 viewBox="0 0 17 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M12.6666 1L16 4.33333L12.6666 7.66667"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Compare
                                                             </span></button><button type=button
                                                             class="tp-product-quick-view-btn tp-product-action-btn"
                                                             title="Quick View" data-bs-toggle="modal"
                                                             data-bs-target="#product-quick-view-modal"
                                                             data-url="https://shofy.botble.com/ajax/quick-view/15"><svg
                                                                 width=20 height=17 viewBox="0 0 20 17" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                     fill="currentColor" />
                                                                 <g mask="url(#mask0_1211_721)">
                                                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                                                         d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                         fill="currentColor" />
                                                                 </g>
                                                             </svg><span class="tp-product-tooltip">Quick
                                                                 View</span></button><button type=button
                                                             class="tp-product-add-to-wishlist-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                             data-url="https://shofy.botble.com/wishlist/15"
                                                             data-add-text="Add To Wishlist"
                                                             data-remove-text="Remove From Wishlist"><svg width=20
                                                                 height=19 viewBox="0 0 20 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z"
                                                                     fill="currentColor" />
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z"
                                                                     fill="currentColor" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Wishlist
                                                             </span></button>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-add-cart-btn-large-wrapper">
                                                     <button type=button class="tp-product-add-cart-btn-large"
                                                         data-bb-toggle="quick-shop"
                                                         data-url="https://shofy.botble.com/ajax/quick-shop/apple-watch-series-7"
                                                         data-bb-toggle="quick-shop" data-product-id="15"
                                                         data-product-name="Apple Watch Series 7"
                                                         data-product-price="1373" data-product-sku="JZ-187-A1"
                                                         data-product-category="Electronics Gadgets &gt; Backpack"
                                                         data-product-brand="Soda Brand"
                                                         data-product-categories="New Arrivals,Computers &amp; Laptops,Monitor,Backpack"
                                                         title="Quick Shop"><svg width=20 height=20 viewBox="0 0 20 20"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                         Select
                                                         Options
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="tp-product-content">
                                                 <div class="tp-product-category">
                                                     <a href="stores/young-shop.html">Young
                                                         Shop</a>
                                                 </div>
                                                 <h3 class="text-truncate tp-product-title">
                                                     <a href="products/apple-watch-series-7.html"
                                                         title="Apple Watch Series 7">
                                                         Apple
                                                         Watch
                                                         Series
                                                         7
                                                     </a>
                                                 </h3>
                                                 <div class="">
                                                     <div class="tp-product-rating d-flex align-items-center">
                                                         <div class="tp-product-rating-icon">
                                                             <div class="bb-product-rating page_speed_328097537">
                                                                 <span class="page_speed_1436905892"></span>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-rating-text">
                                                             <a href="products/apple-watch-series-7.html#product-review"
                                                                 data-bb-toggle="scroll-to-review"><span
                                                                     class="d-none d-sm-block">(9
                                                                     reviews)</span><span
                                                                     class="d-block d-sm-none">(9)</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="tp-product-price-wrapper">
                                                         <span class="tp-product-price new-price"
                                                             data-bb-value="product-price">₦1,229,548.96</span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col">
                                         <div class="tp-product-item transition-3 mb-25 ">
                                             <div class="tp-product-thumb p-relative fix m-img">
                                                 <a href="products/fitbit-charge-5-fitness-tracker-digital.html"><img
                                                         src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                                                         loading="lazy"
                                                         data-src="https://shofy.botble.com/storage/main/products/product-11-600x600.jpg"
                                                         alt="Fitbit Charge 5 Fitness Tracker (Digital)"></a>
                                                 <div class="tp-product-badge">
                                                     <span class="product-sale">-39%</span>
                                                 </div>
                                                 <div class="tp-product-action">
                                                     <div class="d-flex flex-column tp-product-action-item">
                                                         <button type=button
                                                             class="tp-product-compare-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-compare" title="Add To Compare"
                                                             data-url="https://shofy.botble.com/compare/16"
                                                             data-remove-url="https://shofy.botble.com/compare/16"
                                                             data-add-text="Add To Compare"
                                                             data-remove-text="Remove From Compare"><svg width=17
                                                                 height=21 viewBox="0 0 17 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M12.6666 1L16 4.33333L12.6666 7.66667"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Compare
                                                             </span></button><button type=button
                                                             class="tp-product-quick-view-btn tp-product-action-btn"
                                                             title="Quick View" data-bs-toggle="modal"
                                                             data-bs-target="#product-quick-view-modal"
                                                             data-url="https://shofy.botble.com/ajax/quick-view/16"><svg
                                                                 width=20 height=17 viewBox="0 0 20 17" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                     fill="currentColor" />
                                                                 <g mask="url(#mask0_1211_721)">
                                                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                                                         d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                         fill="currentColor" />
                                                                 </g>
                                                             </svg><span class="tp-product-tooltip">Quick
                                                                 View</span></button><button type=button
                                                             class="tp-product-add-to-wishlist-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                             data-url="https://shofy.botble.com/wishlist/16"
                                                             data-add-text="Add To Wishlist"
                                                             data-remove-text="Remove From Wishlist"><svg width=20
                                                                 height=19 viewBox="0 0 20 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z"
                                                                     fill="currentColor" />
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z"
                                                                     fill="currentColor" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Wishlist
                                                             </span></button>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-add-cart-btn-large-wrapper">
                                                     <button type=button class="tp-product-add-cart-btn-large"
                                                         data-bb-toggle="add-to-cart" data-show-toast-on-success="false"
                                                         data-url="https://shofy.botble.com/cart/add-to-cart"
                                                         data-id="16" data-bb-toggle="add-to-cart"
                                                         data-product-id="16"
                                                         data-product-name="Fitbit Charge 5 Fitness Tracker (Digital)"
                                                         data-product-price="1178" data-product-sku="1B-177"
                                                         data-product-category="Sports" data-product-brand="Shofy"
                                                         data-product-categories="Computers &amp; Laptops,Playstation,Accessories,Sports"
                                                         title="Add To Cart"><svg width=20 height=20 viewBox="0 0 20 20"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                         Add
                                                         To
                                                         Cart
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="tp-product-content">
                                                 <div class="tp-product-category">
                                                     <a href="stores/old-el-paso.html">Old
                                                         El
                                                         Paso</a>
                                                 </div>
                                                 <h3 class="text-truncate tp-product-title">
                                                     <a href="products/fitbit-charge-5-fitness-tracker-digital.html"
                                                         title="Fitbit Charge 5 Fitness Tracker (Digital)">
                                                         Fitbit
                                                         Charge
                                                         5
                                                         Fitness
                                                         Tracker
                                                         (Digital)
                                                     </a>
                                                 </h3>
                                                 <div class="">
                                                     <div class="tp-product-rating d-flex align-items-center">
                                                         <div class="tp-product-rating-icon">
                                                             <div class="bb-product-rating page_speed_328097537">
                                                                 <span class="page_speed_2097183486"></span>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-rating-text">
                                                             <a href="products/fitbit-charge-5-fitness-tracker-digital.html#product-review"
                                                                 data-bb-toggle="scroll-to-review"><span
                                                                     class="d-none d-sm-block">(6
                                                                     reviews)</span><span
                                                                     class="d-block d-sm-none">(6)</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="tp-product-price-wrapper">
                                                         <span class="tp-product-price new-price"
                                                             data-bb-value="product-price">₦634,923.68</span><span
                                                             class=""><small><del
                                                                     class="tp-product-price old-price"
                                                                     data-bb-value="product-original-price">₦1,054,922.56</del></small></span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col">
                                         <div class="tp-product-item transition-3 mb-25 ">
                                             <div class="tp-product-thumb p-relative fix m-img">
                                                 <a href="products/garmin-fenix-7x-sapphire-solar-gps-watch.html"><img
                                                         src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                                                         loading="lazy"
                                                         data-src="https://shofy.botble.com/storage/main/products/product-15-600x600.jpg"
                                                         alt="Garmin Fenix 7X Sapphire Solar GPS Watch"></a>
                                                 <div class="tp-product-badge">
                                                     <span class="product-sale">-5%</span>
                                                 </div>
                                                 <div class="tp-product-action">
                                                     <div class="d-flex flex-column tp-product-action-item">
                                                         <button type=button
                                                             class="tp-product-compare-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-compare" title="Add To Compare"
                                                             data-url="https://shofy.botble.com/compare/17"
                                                             data-remove-url="https://shofy.botble.com/compare/17"
                                                             data-add-text="Add To Compare"
                                                             data-remove-text="Remove From Compare"><svg width=17
                                                                 height=21 viewBox="0 0 17 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M12.6666 1L16 4.33333L12.6666 7.66667"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Compare
                                                             </span></button><button type=button
                                                             class="tp-product-quick-view-btn tp-product-action-btn"
                                                             title="Quick View" data-bs-toggle="modal"
                                                             data-bs-target="#product-quick-view-modal"
                                                             data-url="https://shofy.botble.com/ajax/quick-view/17"><svg
                                                                 width=20 height=17 viewBox="0 0 20 17" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                     fill="currentColor" />
                                                                 <g mask="url(#mask0_1211_721)">
                                                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                                                         d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                         fill="currentColor" />
                                                                 </g>
                                                             </svg><span class="tp-product-tooltip">Quick
                                                                 View</span></button><button type=button
                                                             class="tp-product-add-to-wishlist-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                             data-url="https://shofy.botble.com/wishlist/17"
                                                             data-add-text="Add To Wishlist"
                                                             data-remove-text="Remove From Wishlist"><svg width=20
                                                                 height=19 viewBox="0 0 20 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z"
                                                                     fill="currentColor" />
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z"
                                                                     fill="currentColor" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Wishlist
                                                             </span></button>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-add-cart-btn-large-wrapper">
                                                     <button type=button class="tp-product-add-cart-btn-large"
                                                         data-bb-toggle="add-to-cart" data-show-toast-on-success="false"
                                                         data-url="https://shofy.botble.com/cart/add-to-cart"
                                                         data-id="17" data-bb-toggle="add-to-cart"
                                                         data-product-id="17"
                                                         data-product-name="Garmin Fenix 7X Sapphire Solar GPS Watch"
                                                         data-product-price="773" data-product-sku="V9-190"
                                                         data-product-category="Accessories"
                                                         data-product-brand="FoodPound"
                                                         data-product-categories="Playstation,Gifts,Desktop,Accessories"
                                                         title="Add To Cart"><svg width=20 height=20 viewBox="0 0 20 20"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                         Add
                                                         To
                                                         Cart
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="tp-product-content">
                                                 <div class="tp-product-category">
                                                     <a href="stores/old-el-paso.html">Old
                                                         El
                                                         Paso</a>
                                                 </div>
                                                 <h3 class="text-truncate tp-product-title">
                                                     <a href="products/garmin-fenix-7x-sapphire-solar-gps-watch.html"
                                                         title="Garmin Fenix 7X Sapphire Solar GPS Watch">
                                                         Garmin
                                                         Fenix
                                                         7X
                                                         Sapphire
                                                         Solar
                                                         GPS
                                                         Watch
                                                     </a>
                                                 </h3>
                                                 <div class="">
                                                     <div class="tp-product-rating d-flex align-items-center">
                                                         <div class="tp-product-rating-icon">
                                                             <div class="bb-product-rating page_speed_328097537">
                                                                 <span class="page_speed_476214920"></span>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-rating-text">
                                                             <a href="products/garmin-fenix-7x-sapphire-solar-gps-watch.html#product-review"
                                                                 data-bb-toggle="scroll-to-review"><span
                                                                     class="d-none d-sm-block">(9
                                                                     reviews)</span><span
                                                                     class="d-block d-sm-none">(9)</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="tp-product-price-wrapper">
                                                         <span class="tp-product-price new-price"
                                                             data-bb-value="product-price">₦655,520.64</span><span
                                                             class=""><small><del
                                                                     class="tp-product-price old-price"
                                                                     data-bb-value="product-original-price">₦692,236.96</del></small></span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col">
                                         <div class="tp-product-item transition-3 mb-25 ">
                                             <div class="tp-product-thumb p-relative fix m-img">
                                                 <a href="products/microsoft-surface-pro-8.html"><img
                                                         src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                                                         loading="lazy"
                                                         data-src="https://shofy.botble.com/storage/main/products/product-details-desc-3-600x600.jpg"
                                                         alt="Microsoft Surface Pro 8"></a>
                                                 <div class="tp-product-badge">
                                                     <span class="page_speed_1493750440">New</span>
                                                 </div>
                                                 <div class="tp-product-action">
                                                     <div class="d-flex flex-column tp-product-action-item">
                                                         <button type=button
                                                             class="tp-product-compare-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-compare" title="Add To Compare"
                                                             data-url="https://shofy.botble.com/compare/18"
                                                             data-remove-url="https://shofy.botble.com/compare/18"
                                                             data-add-text="Add To Compare"
                                                             data-remove-text="Remove From Compare"><svg width=17
                                                                 height=21 viewBox="0 0 17 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M12.6666 1L16 4.33333L12.6666 7.66667"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Compare
                                                             </span></button><button type=button
                                                             class="tp-product-quick-view-btn tp-product-action-btn"
                                                             title="Quick View" data-bs-toggle="modal"
                                                             data-bs-target="#product-quick-view-modal"
                                                             data-url="https://shofy.botble.com/ajax/quick-view/18"><svg
                                                                 width=20 height=17 viewBox="0 0 20 17" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                     fill="currentColor" />
                                                                 <g mask="url(#mask0_1211_721)">
                                                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                                                         d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                         fill="currentColor" />
                                                                 </g>
                                                             </svg><span class="tp-product-tooltip">Quick
                                                                 View</span></button><button type=button
                                                             class="tp-product-add-to-wishlist-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                             data-url="https://shofy.botble.com/wishlist/18"
                                                             data-add-text="Add To Wishlist"
                                                             data-remove-text="Remove From Wishlist"><svg width=20
                                                                 height=19 viewBox="0 0 20 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z"
                                                                     fill="currentColor" />
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z"
                                                                     fill="currentColor" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Wishlist
                                                             </span></button>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-add-cart-btn-large-wrapper">
                                                     <button type=button class="tp-product-add-cart-btn-large"
                                                         data-bb-toggle="add-to-cart" data-show-toast-on-success="false"
                                                         data-url="https://shofy.botble.com/cart/add-to-cart"
                                                         data-id="18" data-bb-toggle="add-to-cart"
                                                         data-product-id="18"
                                                         data-product-name="Microsoft Surface Pro 8"
                                                         data-product-price="928" data-product-sku="YY-149"
                                                         data-product-category="Electronics Gadgets &gt; Monitor"
                                                         data-product-brand="FoodPound"
                                                         data-product-categories="Electronics,Best Sellers,Laptop,Monitor"
                                                         title="Add To Cart"><svg width=20 height=20 viewBox="0 0 20 20"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                         Add
                                                         To
                                                         Cart
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="tp-product-content">
                                                 <div class="tp-product-category">
                                                     <a href="stores/global-office.html">Global
                                                         Office</a>
                                                 </div>
                                                 <h3 class="text-truncate tp-product-title">
                                                     <a href="products/microsoft-surface-pro-8.html"
                                                         title="Microsoft Surface Pro 8">
                                                         Microsoft
                                                         Surface
                                                         Pro
                                                         8
                                                     </a>
                                                 </h3>
                                                 <div class="">
                                                     <div class="tp-product-rating d-flex align-items-center">
                                                         <div class="tp-product-rating-icon">
                                                             <div class="bb-product-rating page_speed_328097537">
                                                                 <span class="page_speed_1058980378"></span>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-rating-text">
                                                             <a href="products/microsoft-surface-pro-8.html#product-review"
                                                                 data-bb-toggle="scroll-to-review"><span
                                                                     class="d-none d-sm-block">(8
                                                                     reviews)</span><span
                                                                     class="d-block d-sm-none">(8)</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="tp-product-price-wrapper">
                                                         <span class="tp-product-price new-price"
                                                             data-bb-value="product-price">₦30,447.68</span><span
                                                             class=""><small><del
                                                                     class="tp-product-price old-price"
                                                                     data-bb-value="product-original-price">₦831,042.56</del></small></span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col">
                                         <div class="tp-product-item transition-3 mb-25 ">
                                             <div class="tp-product-thumb p-relative fix m-img">
                                                 <a href="products/lenovo-thinkpad-x1-carbon-gen-9-laptop.html"><img
                                                         src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                                                         loading="lazy"
                                                         data-src="https://shofy.botble.com/storage/main/products/product-6-600x600.jpg"
                                                         alt="Lenovo ThinkPad X1 Carbon Gen 9 Laptop"></a>
                                                 <div class="tp-product-badge">
                                                 </div>
                                                 <div class="tp-product-action">
                                                     <div class="d-flex flex-column tp-product-action-item">
                                                         <button type=button
                                                             class="tp-product-compare-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-compare" title="Add To Compare"
                                                             data-url="https://shofy.botble.com/compare/19"
                                                             data-remove-url="https://shofy.botble.com/compare/19"
                                                             data-add-text="Add To Compare"
                                                             data-remove-text="Remove From Compare"><svg width=17
                                                                 height=21 viewBox="0 0 17 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M12.6666 1L16 4.33333L12.6666 7.66667"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Compare
                                                             </span></button><button type=button
                                                             class="tp-product-quick-view-btn tp-product-action-btn"
                                                             title="Quick View" data-bs-toggle="modal"
                                                             data-bs-target="#product-quick-view-modal"
                                                             data-url="https://shofy.botble.com/ajax/quick-view/19"><svg
                                                                 width=20 height=17 viewBox="0 0 20 17" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                     fill="currentColor" />
                                                                 <g mask="url(#mask0_1211_721)">
                                                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                                                         d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                         fill="currentColor" />
                                                                 </g>
                                                             </svg><span class="tp-product-tooltip">Quick
                                                                 View</span></button><button type=button
                                                             class="tp-product-add-to-wishlist-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                             data-url="https://shofy.botble.com/wishlist/19"
                                                             data-add-text="Add To Wishlist"
                                                             data-remove-text="Remove From Wishlist"><svg width=20
                                                                 height=19 viewBox="0 0 20 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z"
                                                                     fill="currentColor" />
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z"
                                                                     fill="currentColor" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Wishlist
                                                             </span></button>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-add-cart-btn-large-wrapper">
                                                     <button type=button class="tp-product-add-cart-btn-large"
                                                         data-bb-toggle="quick-shop"
                                                         data-url="https://shofy.botble.com/ajax/quick-shop/lenovo-thinkpad-x1-carbon-gen-9-laptop"
                                                         data-bb-toggle="quick-shop" data-product-id="19"
                                                         data-product-name="Lenovo ThinkPad X1 Carbon Gen 9 Laptop"
                                                         data-product-price="1234" data-product-sku="CG-170-A1"
                                                         data-product-category="Electronics Gadgets &gt; Headphones"
                                                         data-product-brand="FoodPound"
                                                         data-product-categories="New Arrivals,Top Brands,Smartphones &amp; Tablets,Headphones"
                                                         title="Quick Shop"><svg width=20 height=20 viewBox="0 0 20 20"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                         Select
                                                         Options
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="tp-product-content">
                                                 <div class="tp-product-category">
                                                     <a href="stores/gopro.html">GoPro</a>
                                                 </div>
                                                 <h3 class="text-truncate tp-product-title">
                                                     <a href="products/lenovo-thinkpad-x1-carbon-gen-9-laptop.html"
                                                         title="Lenovo ThinkPad X1 Carbon Gen 9 Laptop">
                                                         Lenovo
                                                         ThinkPad
                                                         X1
                                                         Carbon
                                                         Gen
                                                         9
                                                         Laptop
                                                     </a>
                                                 </h3>
                                                 <div class="">
                                                     <div class="tp-product-rating d-flex align-items-center">
                                                         <div class="tp-product-rating-icon">
                                                             <div class="bb-product-rating page_speed_328097537">
                                                                 <span class="page_speed_1440146406"></span>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-rating-text">
                                                             <a href="products/lenovo-thinkpad-x1-carbon-gen-9-laptop.html#product-review"
                                                                 data-bb-toggle="scroll-to-review"><span
                                                                     class="d-none d-sm-block">(8
                                                                     reviews)</span><span
                                                                     class="d-block d-sm-none">(8)</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="tp-product-price-wrapper">
                                                         <span class="tp-product-price new-price"
                                                             data-bb-value="product-price">₦1,105,071.68</span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col">
                                         <div class="tp-product-item transition-3 mb-25 ">
                                             <div class="tp-product-thumb p-relative fix m-img">
                                                 <a
                                                     href="products/hp-spectre-x360-14-inch-convertible-laptop-digital.html"><img
                                                         src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                                                         loading="lazy"
                                                         data-src="https://shofy.botble.com/storage/main/products/product-4-600x600.jpg"
                                                         alt="HP Spectre x360 14-Inch Convertible Laptop (Digital)"></a>
                                                 <div class="tp-product-badge">
                                                     <span class="product-sale">-98%</span>
                                                 </div>
                                                 <div class="tp-product-action">
                                                     <div class="d-flex flex-column tp-product-action-item">
                                                         <button type=button
                                                             class="tp-product-compare-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-compare" title="Add To Compare"
                                                             data-url="https://shofy.botble.com/compare/20"
                                                             data-remove-url="https://shofy.botble.com/compare/20"
                                                             data-add-text="Add To Compare"
                                                             data-remove-text="Remove From Compare"><svg width=17
                                                                 height=21 viewBox="0 0 17 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M12.6666 1L16 4.33333L12.6666 7.66667"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Compare
                                                             </span></button><button type=button
                                                             class="tp-product-quick-view-btn tp-product-action-btn"
                                                             title="Quick View" data-bs-toggle="modal"
                                                             data-bs-target="#product-quick-view-modal"
                                                             data-url="https://shofy.botble.com/ajax/quick-view/20"><svg
                                                                 width=20 height=17 viewBox="0 0 20 17" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                     fill="currentColor" />
                                                                 <g mask="url(#mask0_1211_721)">
                                                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                                                         d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                         fill="currentColor" />
                                                                 </g>
                                                             </svg><span class="tp-product-tooltip">Quick
                                                                 View</span></button><button type=button
                                                             class="tp-product-add-to-wishlist-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                             data-url="https://shofy.botble.com/wishlist/20"
                                                             data-add-text="Add To Wishlist"
                                                             data-remove-text="Remove From Wishlist"><svg width=20
                                                                 height=19 viewBox="0 0 20 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z"
                                                                     fill="currentColor" />
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z"
                                                                     fill="currentColor" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Wishlist
                                                             </span></button>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-add-cart-btn-large-wrapper">
                                                     <button type=button class="tp-product-add-cart-btn-large"
                                                         data-bb-toggle="add-to-cart" data-show-toast-on-success="false"
                                                         data-url="https://shofy.botble.com/cart/add-to-cart"
                                                         data-id="20" data-bb-toggle="add-to-cart"
                                                         data-product-id="20"
                                                         data-product-name="HP Spectre x360 14-Inch Convertible Laptop (Digital)"
                                                         data-product-price="2448" data-product-sku="ZP-183"
                                                         data-product-category="Electronics Gadgets &gt; Thermometer"
                                                         data-product-brand="iTea JSC"
                                                         data-product-categories="Computers &amp; Laptops,CPU Heat Pipes,Gifts,Thermometer"
                                                         title="Add To Cart"><svg width=20 height=20 viewBox="0 0 20 20"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                         Add
                                                         To
                                                         Cart
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="tp-product-content">
                                                 <div class="tp-product-category">
                                                     <a href="stores/global-office.html">Global
                                                         Office</a>
                                                 </div>
                                                 <h3 class="text-truncate tp-product-title">
                                                     <a href="products/hp-spectre-x360-14-inch-convertible-laptop-digital.html"
                                                         title="HP Spectre x360 14-Inch Convertible Laptop (Digital)">
                                                         HP
                                                         Spectre
                                                         x360
                                                         14-Inch
                                                         Convertible
                                                         Laptop
                                                         (Digital)
                                                     </a>
                                                 </h3>
                                                 <div class="">
                                                     <div class="tp-product-rating d-flex align-items-center">
                                                         <div class="tp-product-rating-icon">
                                                             <div class="bb-product-rating page_speed_328097537">
                                                                 <span class="page_speed_1440146406"></span>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-rating-text">
                                                             <a href="products/hp-spectre-x360-14-inch-convertible-laptop-digital.html#product-review"
                                                                 data-bb-toggle="scroll-to-review"><span
                                                                     class="d-none d-sm-block">(8
                                                                     reviews)</span><span
                                                                     class="d-block d-sm-none">(8)</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="tp-product-price-wrapper">
                                                         <span class="tp-product-price new-price"
                                                             data-bb-value="product-price">₦26,865.60</span><span
                                                             class=""><small><del
                                                                     class="tp-product-price old-price"
                                                                     data-bb-value="product-original-price">₦2,192,232.96</del></small></span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col">
                                         <div class="tp-product-item transition-3 mb-25 ">
                                             <div class="tp-product-thumb p-relative fix m-img">
                                                 <a href="products/razer-blade-15-advanced-gaming-laptop.html"><img
                                                         src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                                                         loading="lazy"
                                                         data-src="https://shofy.botble.com/storage/main/products/product-14-600x600.jpg"
                                                         alt="Razer Blade 15 Advanced Gaming Laptop"></a>
                                                 <div class="tp-product-badge">
                                                     <span class="page_speed_827514293">Sale</span>
                                                 </div>
                                                 <div class="tp-product-action">
                                                     <div class="d-flex flex-column tp-product-action-item">
                                                         <button type=button
                                                             class="tp-product-compare-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-compare" title="Add To Compare"
                                                             data-url="https://shofy.botble.com/compare/21"
                                                             data-remove-url="https://shofy.botble.com/compare/21"
                                                             data-add-text="Add To Compare"
                                                             data-remove-text="Remove From Compare"><svg width=17
                                                                 height=21 viewBox="0 0 17 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M12.6666 1L16 4.33333L12.6666 7.66667"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Compare
                                                             </span></button><button type=button
                                                             class="tp-product-quick-view-btn tp-product-action-btn"
                                                             title="Quick View" data-bs-toggle="modal"
                                                             data-bs-target="#product-quick-view-modal"
                                                             data-url="https://shofy.botble.com/ajax/quick-view/21"><svg
                                                                 width=20 height=17 viewBox="0 0 20 17" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                     fill="currentColor" />
                                                                 <g mask="url(#mask0_1211_721)">
                                                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                                                         d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                         fill="currentColor" />
                                                                 </g>
                                                             </svg><span class="tp-product-tooltip">Quick
                                                                 View</span></button><button type=button
                                                             class="tp-product-add-to-wishlist-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                             data-url="https://shofy.botble.com/wishlist/21"
                                                             data-add-text="Add To Wishlist"
                                                             data-remove-text="Remove From Wishlist"><svg width=20
                                                                 height=19 viewBox="0 0 20 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z"
                                                                     fill="currentColor" />
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z"
                                                                     fill="currentColor" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Wishlist
                                                             </span></button>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-add-cart-btn-large-wrapper">
                                                     <button type=button class="tp-product-add-cart-btn-large"
                                                         data-bb-toggle="quick-shop"
                                                         data-url="https://shofy.botble.com/ajax/quick-shop/razer-blade-15-advanced-gaming-laptop"
                                                         data-bb-toggle="quick-shop" data-product-id="21"
                                                         data-product-name="Razer Blade 15 Advanced Gaming Laptop"
                                                         data-product-price="2091" data-product-sku="7S-123-A1"
                                                         data-product-category="Accessories &gt; With Bluetooth"
                                                         data-product-brand="Shofy"
                                                         data-product-categories="Featured,CPU Coolers,Accessories,With Bluetooth"
                                                         title="Quick Shop"><svg width=20 height=20 viewBox="0 0 20 20"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                         Select
                                                         Options
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="tp-product-content">
                                                 <div class="tp-product-category">
                                                     <a href="stores/global-office.html">Global
                                                         Office</a>
                                                 </div>
                                                 <h3 class="text-truncate tp-product-title">
                                                     <a href="products/razer-blade-15-advanced-gaming-laptop.html"
                                                         title="Razer Blade 15 Advanced Gaming Laptop">
                                                         Razer
                                                         Blade
                                                         15
                                                         Advanced
                                                         Gaming
                                                         Laptop
                                                     </a>
                                                 </h3>
                                                 <div class="">
                                                     <div class="tp-product-rating d-flex align-items-center">
                                                         <div class="tp-product-rating-icon">
                                                             <div class="bb-product-rating page_speed_328097537">
                                                                 <span class="page_speed_1759922384"></span>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-rating-text">
                                                             <a href="products/razer-blade-15-advanced-gaming-laptop.html#product-review"
                                                                 data-bb-toggle="scroll-to-review"><span
                                                                     class="d-none d-sm-block">(9
                                                                     reviews)</span><span
                                                                     class="d-block d-sm-none">(9)</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="tp-product-price-wrapper">
                                                         <span class="tp-product-price new-price"
                                                             data-bb-value="product-price">₦1,872,532.32</span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col">
                                         <div class="tp-product-item transition-3 mb-25 ">
                                             <div class="tp-product-thumb p-relative fix m-img">
                                                 <a href="products/alienware-m15-r6-gaming-laptop.html"><img
                                                         src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                                                         loading="lazy"
                                                         data-src="https://shofy.botble.com/storage/main/products/product-1-600x600.jpg"
                                                         alt="Alienware m15 R6 Gaming Laptop"></a>
                                                 <div class="tp-product-badge">
                                                     <span class="product-sale">-14%</span>
                                                 </div>
                                                 <div class="tp-product-action">
                                                     <div class="d-flex flex-column tp-product-action-item">
                                                         <button type=button
                                                             class="tp-product-compare-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-compare" title="Add To Compare"
                                                             data-url="https://shofy.botble.com/compare/22"
                                                             data-remove-url="https://shofy.botble.com/compare/22"
                                                             data-add-text="Add To Compare"
                                                             data-remove-text="Remove From Compare"><svg width=17
                                                                 height=21 viewBox="0 0 17 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M12.6666 1L16 4.33333L12.6666 7.66667"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Compare
                                                             </span></button><button type=button
                                                             class="tp-product-quick-view-btn tp-product-action-btn"
                                                             title="Quick View" data-bs-toggle="modal"
                                                             data-bs-target="#product-quick-view-modal"
                                                             data-url="https://shofy.botble.com/ajax/quick-view/22"><svg
                                                                 width=20 height=17 viewBox="0 0 20 17" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                     fill="currentColor" />
                                                                 <g mask="url(#mask0_1211_721)">
                                                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                                                         d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                         fill="currentColor" />
                                                                 </g>
                                                             </svg><span class="tp-product-tooltip">Quick
                                                                 View</span></button><button type=button
                                                             class="tp-product-add-to-wishlist-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                             data-url="https://shofy.botble.com/wishlist/22"
                                                             data-add-text="Add To Wishlist"
                                                             data-remove-text="Remove From Wishlist"><svg width=20
                                                                 height=19 viewBox="0 0 20 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z"
                                                                     fill="currentColor" />
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z"
                                                                     fill="currentColor" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Wishlist
                                                             </span></button>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-add-cart-btn-large-wrapper">
                                                     <button type=button class="tp-product-add-cart-btn-large"
                                                         data-bb-toggle="add-to-cart" data-show-toast-on-success="false"
                                                         data-url="https://shofy.botble.com/cart/add-to-cart"
                                                         data-id="22" data-bb-toggle="add-to-cart"
                                                         data-product-id="22"
                                                         data-product-name="Alienware m15 R6 Gaming Laptop"
                                                         data-product-price="2162" data-product-sku="AE-128"
                                                         data-product-category="Electronics Gadgets &gt; Backpack"
                                                         data-product-brand="iTea JSC"
                                                         data-product-categories="CPU Coolers,Laptop,Thermometer,Backpack"
                                                         title="Add To Cart"><svg width=20 height=20 viewBox="0 0 20 20"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                         Add
                                                         To
                                                         Cart
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="tp-product-content">
                                                 <div class="tp-product-category">
                                                     <a href="stores/stouffer.html">Stouffer</a>
                                                 </div>
                                                 <h3 class="text-truncate tp-product-title">
                                                     <a href="products/alienware-m15-r6-gaming-laptop.html"
                                                         title="Alienware m15 R6 Gaming Laptop">
                                                         Alienware
                                                         m15
                                                         R6
                                                         Gaming
                                                         Laptop
                                                     </a>
                                                 </h3>
                                                 <div class="">
                                                     <div class="tp-product-rating d-flex align-items-center">
                                                         <div class="tp-product-rating-icon">
                                                             <div class="bb-product-rating page_speed_328097537">
                                                                 <span class="page_speed_1666803154"></span>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-rating-text">
                                                             <a href="products/alienware-m15-r6-gaming-laptop.html#product-review"
                                                                 data-bb-toggle="scroll-to-review"><span
                                                                     class="d-none d-sm-block">(9
                                                                     reviews)</span><span
                                                                     class="d-block d-sm-none">(9)</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="tp-product-price-wrapper">
                                                         <span class="tp-product-price new-price"
                                                             data-bb-value="product-price">₦1,648,652.32</span><span
                                                             class=""><small><del
                                                                     class="tp-product-price old-price"
                                                                     data-bb-value="product-original-price">₦1,936,114.24</del></small></span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col">
                                         <div class="tp-product-item transition-3 mb-25 ">
                                             <div class="tp-product-thumb p-relative fix m-img">
                                                 <a
                                                     href="products/corsair-k95-rgb-platinum-xt-mechanical-gaming-keyboard.html"><img
                                                         src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                                                         loading="lazy"
                                                         data-src="https://shofy.botble.com/storage/main/products/product-4-600x600.jpg"
                                                         alt="Corsair K95 RGB Platinum XT Mechanical Gaming Keyboard"></a>
                                                 <div class="tp-product-badge">
                                                     <span class="product-sale">-62%</span>
                                                 </div>
                                                 <div class="tp-product-action">
                                                     <div class="d-flex flex-column tp-product-action-item">
                                                         <button type=button
                                                             class="tp-product-compare-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-compare" title="Add To Compare"
                                                             data-url="https://shofy.botble.com/compare/23"
                                                             data-remove-url="https://shofy.botble.com/compare/23"
                                                             data-add-text="Add To Compare"
                                                             data-remove-text="Remove From Compare"><svg width=17
                                                                 height=21 viewBox="0 0 17 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M12.6666 1L16 4.33333L12.6666 7.66667"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Compare
                                                             </span></button><button type=button
                                                             class="tp-product-quick-view-btn tp-product-action-btn"
                                                             title="Quick View" data-bs-toggle="modal"
                                                             data-bs-target="#product-quick-view-modal"
                                                             data-url="https://shofy.botble.com/ajax/quick-view/23"><svg
                                                                 width=20 height=17 viewBox="0 0 20 17" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                     fill="currentColor" />
                                                                 <g mask="url(#mask0_1211_721)">
                                                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                                                         d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                         fill="currentColor" />
                                                                 </g>
                                                             </svg><span class="tp-product-tooltip">Quick
                                                                 View</span></button><button type=button
                                                             class="tp-product-add-to-wishlist-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                             data-url="https://shofy.botble.com/wishlist/23"
                                                             data-add-text="Add To Wishlist"
                                                             data-remove-text="Remove From Wishlist"><svg width=20
                                                                 height=19 viewBox="0 0 20 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z"
                                                                     fill="currentColor" />
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z"
                                                                     fill="currentColor" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Wishlist
                                                             </span></button>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-add-cart-btn-large-wrapper">
                                                     <button type=button class="tp-product-add-cart-btn-large"
                                                         data-bb-toggle="add-to-cart" data-show-toast-on-success="false"
                                                         data-url="https://shofy.botble.com/cart/add-to-cart"
                                                         data-id="23" data-bb-toggle="add-to-cart"
                                                         data-product-id="23"
                                                         data-product-name="Corsair K95 RGB Platinum XT Mechanical Gaming Keyboard"
                                                         data-product-price="923" data-product-sku="ZT-155"
                                                         data-product-category="Electronics Gadgets &gt; Monitor"
                                                         data-product-brand="Shofy"
                                                         data-product-categories="Weekly Best Selling,Smartphones &amp; Tablets,Sports,Monitor"
                                                         title="Add To Cart"><svg width=20 height=20 viewBox="0 0 20 20"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                         Add
                                                         To
                                                         Cart
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="tp-product-content">
                                                 <div class="tp-product-category">
                                                     <a href="stores/gopro.html">GoPro</a>
                                                 </div>
                                                 <h3 class="text-truncate tp-product-title">
                                                     <a href="products/corsair-k95-rgb-platinum-xt-mechanical-gaming-keyboard.html"
                                                         title="Corsair K95 RGB Platinum XT Mechanical Gaming Keyboard">
                                                         Corsair
                                                         K95
                                                         RGB
                                                         Platinum
                                                         XT
                                                         Mechanical
                                                         Gaming
                                                         Keyboard
                                                     </a>
                                                 </h3>
                                                 <div class="">
                                                     <div class="tp-product-rating d-flex align-items-center">
                                                         <div class="tp-product-rating-icon">
                                                             <div class="bb-product-rating page_speed_328097537">
                                                                 <span class="page_speed_782298826"></span>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-rating-text">
                                                             <a href="products/corsair-k95-rgb-platinum-xt-mechanical-gaming-keyboard.html#product-review"
                                                                 data-bb-toggle="scroll-to-review"><span
                                                                     class="d-none d-sm-block">(6
                                                                     reviews)</span><span
                                                                     class="d-block d-sm-none">(6)</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="tp-product-price-wrapper">
                                                         <span class="tp-product-price new-price"
                                                             data-bb-value="product-price">₦308,058.88</span><span
                                                             class=""><small><del
                                                                     class="tp-product-price old-price"
                                                                     data-bb-value="product-original-price">₦826,564.96</del></small></span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col">
                                         <div class="tp-product-item transition-3 mb-25 ">
                                             <div class="tp-product-thumb p-relative fix m-img">
                                                 <a
                                                     href="products/logitech-g-pro-x-superlight-wireless-gaming-mouse-digital.html"><img
                                                         src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                                                         loading="lazy"
                                                         data-src="https://shofy.botble.com/storage/main/products/product-details-desc-1-600x600.jpg"
                                                         alt="Logitech G Pro X Superlight Wireless Gaming Mouse (Digital)"></a>
                                                 <div class="tp-product-badge">
                                                     <span class="page_speed_827514293">Sale</span>
                                                 </div>
                                                 <div class="tp-product-action">
                                                     <div class="d-flex flex-column tp-product-action-item">
                                                         <button type=button
                                                             class="tp-product-compare-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-compare" title="Add To Compare"
                                                             data-url="https://shofy.botble.com/compare/24"
                                                             data-remove-url="https://shofy.botble.com/compare/24"
                                                             data-add-text="Add To Compare"
                                                             data-remove-text="Remove From Compare"><svg width=17
                                                                 height=21 viewBox="0 0 17 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M12.6666 1L16 4.33333L12.6666 7.66667"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Compare
                                                             </span></button><button type=button
                                                             class="tp-product-quick-view-btn tp-product-action-btn"
                                                             title="Quick View" data-bs-toggle="modal"
                                                             data-bs-target="#product-quick-view-modal"
                                                             data-url="https://shofy.botble.com/ajax/quick-view/24"><svg
                                                                 width=20 height=17 viewBox="0 0 20 17" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                     fill="currentColor" />
                                                                 <g mask="url(#mask0_1211_721)">
                                                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                                                         d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                         fill="currentColor" />
                                                                 </g>
                                                             </svg><span class="tp-product-tooltip">Quick
                                                                 View</span></button><button type=button
                                                             class="tp-product-add-to-wishlist-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                             data-url="https://shofy.botble.com/wishlist/24"
                                                             data-add-text="Add To Wishlist"
                                                             data-remove-text="Remove From Wishlist"><svg width=20
                                                                 height=19 viewBox="0 0 20 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z"
                                                                     fill="currentColor" />
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z"
                                                                     fill="currentColor" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Wishlist
                                                             </span></button>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-add-cart-btn-large-wrapper">
                                                     <button type=button class="tp-product-add-cart-btn-large"
                                                         data-bb-toggle="add-to-cart" data-show-toast-on-success="false"
                                                         data-url="https://shofy.botble.com/cart/add-to-cart"
                                                         data-id="24" data-bb-toggle="add-to-cart"
                                                         data-product-id="24"
                                                         data-product-name="Logitech G Pro X Superlight Wireless Gaming Mouse (Digital)"
                                                         data-product-price="733" data-product-sku="0J-123"
                                                         data-product-category="Computers &gt; Desktop"
                                                         data-product-brand="Soda Brand"
                                                         data-product-categories="Mobile Phone,TWS Earphones,Computers,Desktop"
                                                         title="Add To Cart"><svg width=20 height=20 viewBox="0 0 20 20"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                         Add
                                                         To
                                                         Cart
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="tp-product-content">
                                                 <div class="tp-product-category">
                                                     <a href="stores/old-el-paso.html">Old
                                                         El
                                                         Paso</a>
                                                 </div>
                                                 <h3 class="text-truncate tp-product-title">
                                                     <a href="products/logitech-g-pro-x-superlight-wireless-gaming-mouse-digital.html"
                                                         title="Logitech G Pro X Superlight Wireless Gaming Mouse (Digital)">
                                                         Logitech
                                                         G
                                                         Pro
                                                         X
                                                         Superlight
                                                         Wireless
                                                         Gaming
                                                         Mouse
                                                         (Digital)
                                                     </a>
                                                 </h3>
                                                 <div class="">
                                                     <div class="tp-product-rating d-flex align-items-center">
                                                         <div class="tp-product-rating-icon">
                                                             <div class="bb-product-rating page_speed_328097537">
                                                                 <span class="page_speed_2123523001"></span>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-rating-text">
                                                             <a href="products/logitech-g-pro-x-superlight-wireless-gaming-mouse-digital.html#product-review"
                                                                 data-bb-toggle="scroll-to-review"><span
                                                                     class="d-none d-sm-block">(6
                                                                     reviews)</span><span
                                                                     class="d-block d-sm-none">(6)</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="tp-product-price-wrapper">
                                                         <span class="tp-product-price new-price"
                                                             data-bb-value="product-price">₦136,119.04</span><span
                                                             class=""><small><del
                                                                     class="tp-product-price old-price"
                                                                     data-bb-value="product-original-price">₦656,416.16</del></small></span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col">
                                         <div class="tp-product-item transition-3 mb-25 ">
                                             <div class="tp-product-thumb p-relative fix m-img">
                                                 <a href="products/steelseries-arctis-pro-wireless-gaming-headset.html"><img
                                                         src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                                                         loading="lazy"
                                                         data-src="https://shofy.botble.com/storage/main/products/product-17-600x600.jpg"
                                                         alt="SteelSeries Arctis Pro Wireless Gaming Headset"></a>
                                                 <div class="tp-product-badge">
                                                 </div>
                                                 <div class="tp-product-action">
                                                     <div class="d-flex flex-column tp-product-action-item">
                                                         <button type=button
                                                             class="tp-product-compare-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-compare" title="Add To Compare"
                                                             data-url="https://shofy.botble.com/compare/25"
                                                             data-remove-url="https://shofy.botble.com/compare/25"
                                                             data-add-text="Add To Compare"
                                                             data-remove-text="Remove From Compare"><svg width=17
                                                                 height=21 viewBox="0 0 17 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M12.6666 1L16 4.33333L12.6666 7.66667"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Compare
                                                             </span></button><button type=button
                                                             class="tp-product-quick-view-btn tp-product-action-btn"
                                                             title="Quick View" data-bs-toggle="modal"
                                                             data-bs-target="#product-quick-view-modal"
                                                             data-url="https://shofy.botble.com/ajax/quick-view/25"><svg
                                                                 width=20 height=17 viewBox="0 0 20 17" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                     fill="currentColor" />
                                                                 <g mask="url(#mask0_1211_721)">
                                                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                                                         d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                         fill="currentColor" />
                                                                 </g>
                                                             </svg><span class="tp-product-tooltip">Quick
                                                                 View</span></button><button type=button
                                                             class="tp-product-add-to-wishlist-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                             data-url="https://shofy.botble.com/wishlist/25"
                                                             data-add-text="Add To Wishlist"
                                                             data-remove-text="Remove From Wishlist"><svg width=20
                                                                 height=19 viewBox="0 0 20 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z"
                                                                     fill="currentColor" />
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z"
                                                                     fill="currentColor" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Wishlist
                                                             </span></button>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-add-cart-btn-large-wrapper">
                                                     <button type=button class="tp-product-add-cart-btn-large"
                                                         data-bb-toggle="quick-shop"
                                                         data-url="https://shofy.botble.com/ajax/quick-shop/steelseries-arctis-pro-wireless-gaming-headset"
                                                         data-bb-toggle="quick-shop" data-product-id="25"
                                                         data-product-name="SteelSeries Arctis Pro Wireless Gaming Headset"
                                                         data-product-price="1509" data-product-sku="QE-125-A1"
                                                         data-product-category="Electronics Gadgets &gt; Thermometer"
                                                         data-product-brand="FoodPound"
                                                         data-product-categories="Playstation,Gifts,Accessories,Thermometer"
                                                         title="Quick Shop"><svg width=20 height=20 viewBox="0 0 20 20"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                         Select
                                                         Options
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="tp-product-content">
                                                 <div class="tp-product-category">
                                                     <a href="stores/roberts-store.html">Robert’s
                                                         Store</a>
                                                 </div>
                                                 <h3 class="text-truncate tp-product-title">
                                                     <a href="products/steelseries-arctis-pro-wireless-gaming-headset.html"
                                                         title="SteelSeries Arctis Pro Wireless Gaming Headset">
                                                         SteelSeries
                                                         Arctis
                                                         Pro
                                                         Wireless
                                                         Gaming
                                                         Headset
                                                     </a>
                                                 </h3>
                                                 <div class="">
                                                     <div class="tp-product-rating d-flex align-items-center">
                                                         <div class="tp-product-rating-icon">
                                                             <div class="bb-product-rating page_speed_328097537">
                                                                 <span class="page_speed_1331044914"></span>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-rating-text">
                                                             <a href="products/steelseries-arctis-pro-wireless-gaming-headset.html#product-review"
                                                                 data-bb-toggle="scroll-to-review"><span
                                                                     class="d-none d-sm-block">(8
                                                                     reviews)</span><span
                                                                     class="d-block d-sm-none">(8)</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="tp-product-price-wrapper">
                                                         <span class="tp-product-price new-price"
                                                             data-bb-value="product-price">₦1,351,339.68</span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col">
                                         <div class="tp-product-item transition-3 mb-25 ">
                                             <div class="tp-product-thumb p-relative fix m-img">
                                                 <a href="products/elgato-stream-deck-xl.html"><img
                                                         src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                                                         loading="lazy"
                                                         data-src="https://shofy.botble.com/storage/main/products/product-10-600x600.jpg"
                                                         alt="Elgato Stream Deck XL"></a>
                                                 <div class="tp-product-badge">
                                                 </div>
                                                 <div class="tp-product-action">
                                                     <div class="d-flex flex-column tp-product-action-item">
                                                         <button type=button
                                                             class="tp-product-compare-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-compare" title="Add To Compare"
                                                             data-url="https://shofy.botble.com/compare/26"
                                                             data-remove-url="https://shofy.botble.com/compare/26"
                                                             data-add-text="Add To Compare"
                                                             data-remove-text="Remove From Compare"><svg width=17
                                                                 height=21 viewBox="0 0 17 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M12.6666 1L16 4.33333L12.6666 7.66667"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Compare
                                                             </span></button><button type=button
                                                             class="tp-product-quick-view-btn tp-product-action-btn"
                                                             title="Quick View" data-bs-toggle="modal"
                                                             data-bs-target="#product-quick-view-modal"
                                                             data-url="https://shofy.botble.com/ajax/quick-view/26"><svg
                                                                 width=20 height=17 viewBox="0 0 20 17" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                     fill="currentColor" />
                                                                 <g mask="url(#mask0_1211_721)">
                                                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                                                         d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                         fill="currentColor" />
                                                                 </g>
                                                             </svg><span class="tp-product-tooltip">Quick
                                                                 View</span></button><button type=button
                                                             class="tp-product-add-to-wishlist-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                             data-url="https://shofy.botble.com/wishlist/26"
                                                             data-add-text="Add To Wishlist"
                                                             data-remove-text="Remove From Wishlist"><svg width=20
                                                                 height=19 viewBox="0 0 20 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z"
                                                                     fill="currentColor" />
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z"
                                                                     fill="currentColor" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Wishlist
                                                             </span></button>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-add-cart-btn-large-wrapper">
                                                     <button type=button class="tp-product-add-cart-btn-large"
                                                         data-bb-toggle="quick-shop"
                                                         data-url="https://shofy.botble.com/ajax/quick-shop/elgato-stream-deck-xl"
                                                         data-bb-toggle="quick-shop" data-product-id="26"
                                                         data-product-name="Elgato Stream Deck XL"
                                                         data-product-price="2238" data-product-sku="SC-112-A1"
                                                         data-product-category="Computers &gt; Desktop"
                                                         data-product-brand="iTea JSC"
                                                         data-product-categories="Weekly Best Selling,TWS Earphones,Smart Watch,Desktop"
                                                         title="Quick Shop"><svg width=20 height=20 viewBox="0 0 20 20"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                         Select
                                                         Options
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="tp-product-content">
                                                 <div class="tp-product-category">
                                                     <a href="stores/young-shop.html">Young
                                                         Shop</a>
                                                 </div>
                                                 <h3 class="text-truncate tp-product-title">
                                                     <a href="products/elgato-stream-deck-xl.html"
                                                         title="Elgato Stream Deck XL">
                                                         Elgato
                                                         Stream
                                                         Deck
                                                         XL
                                                     </a>
                                                 </h3>
                                                 <div class="">
                                                     <div class="tp-product-rating d-flex align-items-center">
                                                         <div class="tp-product-rating-icon">
                                                             <div class="bb-product-rating page_speed_328097537">
                                                                 <span class="page_speed_1618492194"></span>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-rating-text">
                                                             <a href="products/elgato-stream-deck-xl.html#product-review"
                                                                 data-bb-toggle="scroll-to-review"><span
                                                                     class="d-none d-sm-block">(8
                                                                     reviews)</span><span
                                                                     class="d-block d-sm-none">(8)</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="tp-product-price-wrapper">
                                                         <span class="tp-product-price new-price"
                                                             data-bb-value="product-price">₦2,004,173.76</span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col">
                                         <div class="tp-product-item transition-3 mb-25 ">
                                             <div class="tp-product-thumb p-relative fix m-img">
                                                 <a href="products/nintendo-switch-oled-model.html"><img
                                                         src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                                                         loading="lazy"
                                                         data-src="https://shofy.botble.com/storage/main/products/product-details-desc-2-600x600.jpg"
                                                         alt="Nintendo Switch OLED Model"></a>
                                                 <div class="tp-product-badge">
                                                     <span class="page_speed_1493750440">New</span>
                                                 </div>
                                                 <div class="tp-product-action">
                                                     <div class="d-flex flex-column tp-product-action-item">
                                                         <button type=button
                                                             class="tp-product-compare-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-compare" title="Add To Compare"
                                                             data-url="https://shofy.botble.com/compare/27"
                                                             data-remove-url="https://shofy.botble.com/compare/27"
                                                             data-add-text="Add To Compare"
                                                             data-remove-text="Remove From Compare"><svg width=17
                                                                 height=21 viewBox="0 0 17 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M12.6666 1L16 4.33333L12.6666 7.66667"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Compare
                                                             </span></button><button type=button
                                                             class="tp-product-quick-view-btn tp-product-action-btn"
                                                             title="Quick View" data-bs-toggle="modal"
                                                             data-bs-target="#product-quick-view-modal"
                                                             data-url="https://shofy.botble.com/ajax/quick-view/27"><svg
                                                                 width=20 height=17 viewBox="0 0 20 17" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                     fill="currentColor" />
                                                                 <g mask="url(#mask0_1211_721)">
                                                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                                                         d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                         fill="currentColor" />
                                                                 </g>
                                                             </svg><span class="tp-product-tooltip">Quick
                                                                 View</span></button><button type=button
                                                             class="tp-product-add-to-wishlist-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                             data-url="https://shofy.botble.com/wishlist/27"
                                                             data-add-text="Add To Wishlist"
                                                             data-remove-text="Remove From Wishlist"><svg width=20
                                                                 height=19 viewBox="0 0 20 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z"
                                                                     fill="currentColor" />
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z"
                                                                     fill="currentColor" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Wishlist
                                                             </span></button>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-add-cart-btn-large-wrapper">
                                                     <button type=button class="tp-product-add-cart-btn-large"
                                                         data-bb-toggle="quick-shop"
                                                         data-url="https://shofy.botble.com/ajax/quick-shop/nintendo-switch-oled-model"
                                                         data-bb-toggle="quick-shop" data-product-id="27"
                                                         data-product-name="Nintendo Switch OLED Model"
                                                         data-product-price="2338" data-product-sku="JB-122-A1"
                                                         data-product-category="TV, Video &amp; Music"
                                                         data-product-brand="iTea JSC"
                                                         data-product-categories="Featured,Weekly Best Selling,Gifts,TV, Video &amp; Music"
                                                         title="Quick Shop"><svg width=20 height=20 viewBox="0 0 20 20"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                         Select
                                                         Options
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="tp-product-content">
                                                 <div class="tp-product-category">
                                                     <a href="stores/gopro.html">GoPro</a>
                                                 </div>
                                                 <h3 class="text-truncate tp-product-title">
                                                     <a href="products/nintendo-switch-oled-model.html"
                                                         title="Nintendo Switch OLED Model">
                                                         Nintendo
                                                         Switch
                                                         OLED
                                                         Model
                                                     </a>
                                                 </h3>
                                                 <div class="">
                                                     <div class="tp-product-rating d-flex align-items-center">
                                                         <div class="tp-product-rating-icon">
                                                             <div class="bb-product-rating page_speed_328097537">
                                                                 <span class="page_speed_1824828712"></span>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-rating-text">
                                                             <a href="products/nintendo-switch-oled-model.html#product-review"
                                                                 data-bb-toggle="scroll-to-review"><span
                                                                     class="d-none d-sm-block">(6
                                                                     reviews)</span><span
                                                                     class="d-block d-sm-none">(6)</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="tp-product-price-wrapper">
                                                         <span class="tp-product-price new-price"
                                                             data-bb-value="product-price">₦2,093,725.76</span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col">
                                         <div class="tp-product-item transition-3 mb-25 ">
                                             <div class="tp-product-thumb p-relative fix m-img">
                                                 <a href="products/playstation-5-console-digital.html"><img
                                                         src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                                                         loading="lazy"
                                                         data-src="https://shofy.botble.com/storage/main/products/product-12-600x600.jpg"
                                                         alt="PlayStation 5 Console (Digital)"></a>
                                                 <div class="tp-product-badge">
                                                     <span class="product-sale">-19%</span>
                                                 </div>
                                                 <div class="tp-product-action">
                                                     <div class="d-flex flex-column tp-product-action-item">
                                                         <button type=button
                                                             class="tp-product-compare-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-compare" title="Add To Compare"
                                                             data-url="https://shofy.botble.com/compare/28"
                                                             data-remove-url="https://shofy.botble.com/compare/28"
                                                             data-add-text="Add To Compare"
                                                             data-remove-text="Remove From Compare"><svg width=17
                                                                 height=21 viewBox="0 0 17 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M12.6666 1L16 4.33333L12.6666 7.66667"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Compare
                                                             </span></button><button type=button
                                                             class="tp-product-quick-view-btn tp-product-action-btn"
                                                             title="Quick View" data-bs-toggle="modal"
                                                             data-bs-target="#product-quick-view-modal"
                                                             data-url="https://shofy.botble.com/ajax/quick-view/28"><svg
                                                                 width=20 height=17 viewBox="0 0 20 17" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                     fill="currentColor" />
                                                                 <g mask="url(#mask0_1211_721)">
                                                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                                                         d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                         fill="currentColor" />
                                                                 </g>
                                                             </svg><span class="tp-product-tooltip">Quick
                                                                 View</span></button><button type=button
                                                             class="tp-product-add-to-wishlist-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                             data-url="https://shofy.botble.com/wishlist/28"
                                                             data-add-text="Add To Wishlist"
                                                             data-remove-text="Remove From Wishlist"><svg width=20
                                                                 height=19 viewBox="0 0 20 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z"
                                                                     fill="currentColor" />
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z"
                                                                     fill="currentColor" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Wishlist
                                                             </span></button>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-add-cart-btn-large-wrapper">
                                                     <button type=button class="tp-product-add-cart-btn-large"
                                                         data-bb-toggle="add-to-cart" data-show-toast-on-success="false"
                                                         data-url="https://shofy.botble.com/cart/add-to-cart"
                                                         data-id="28" data-bb-toggle="add-to-cart"
                                                         data-product-id="28"
                                                         data-product-name="PlayStation 5 Console (Digital)"
                                                         data-product-price="2321" data-product-sku="SH-195"
                                                         data-product-category="Electronics Gadgets &gt; Thermometer"
                                                         data-product-brand="iTea JSC"
                                                         data-product-categories="Accessories,With Bluetooth,Remote Control,Thermometer"
                                                         title="Add To Cart"><svg width=20 height=20 viewBox="0 0 20 20"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                         Add
                                                         To
                                                         Cart
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="tp-product-content">
                                                 <div class="tp-product-category">
                                                     <a href="stores/starkist.html">StarKist</a>
                                                 </div>
                                                 <h3 class="text-truncate tp-product-title">
                                                     <a href="products/playstation-5-console-digital.html"
                                                         title="PlayStation 5 Console (Digital)">
                                                         PlayStation
                                                         5
                                                         Console
                                                         (Digital)
                                                     </a>
                                                 </h3>
                                                 <div class="">
                                                     <div class="tp-product-rating d-flex align-items-center">
                                                         <div class="tp-product-rating-icon">
                                                             <div class="bb-product-rating page_speed_328097537">
                                                                 <span class="page_speed_946906685"></span>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-rating-text">
                                                             <a href="products/playstation-5-console-digital.html#product-review"
                                                                 data-bb-toggle="scroll-to-review"><span
                                                                     class="d-none d-sm-block">(10
                                                                     reviews)</span><span
                                                                     class="d-block d-sm-none">(10)</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="tp-product-price-wrapper">
                                                         <span class="tp-product-price new-price"
                                                             data-bb-value="product-price">₦1,676,413.44</span><span
                                                             class=""><small><del
                                                                     class="tp-product-price old-price"
                                                                     data-bb-value="product-original-price">₦2,078,501.92</del></small></span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col">
                                         <div class="tp-product-item transition-3 mb-25 ">
                                             <div class="tp-product-thumb p-relative fix m-img">
                                                 <a href="products/xbox-series-x-console.html"><img
                                                         src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                                                         loading="lazy"
                                                         data-src="https://shofy.botble.com/storage/main/products/product-3-600x600.jpg"
                                                         alt="Xbox Series X Console"></a>
                                                 <div class="tp-product-badge">
                                                 </div>
                                                 <div class="tp-product-action">
                                                     <div class="d-flex flex-column tp-product-action-item">
                                                         <button type=button
                                                             class="tp-product-compare-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-compare" title="Add To Compare"
                                                             data-url="https://shofy.botble.com/compare/29"
                                                             data-remove-url="https://shofy.botble.com/compare/29"
                                                             data-add-text="Add To Compare"
                                                             data-remove-text="Remove From Compare"><svg width=17
                                                                 height=21 viewBox="0 0 17 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M12.6666 1L16 4.33333L12.6666 7.66667"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Compare
                                                             </span></button><button type=button
                                                             class="tp-product-quick-view-btn tp-product-action-btn"
                                                             title="Quick View" data-bs-toggle="modal"
                                                             data-bs-target="#product-quick-view-modal"
                                                             data-url="https://shofy.botble.com/ajax/quick-view/29"><svg
                                                                 width=20 height=17 viewBox="0 0 20 17" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                     fill="currentColor" />
                                                                 <g mask="url(#mask0_1211_721)">
                                                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                                                         d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                         fill="currentColor" />
                                                                 </g>
                                                             </svg><span class="tp-product-tooltip">Quick
                                                                 View</span></button><button type=button
                                                             class="tp-product-add-to-wishlist-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                             data-url="https://shofy.botble.com/wishlist/29"
                                                             data-add-text="Add To Wishlist"
                                                             data-remove-text="Remove From Wishlist"><svg width=20
                                                                 height=19 viewBox="0 0 20 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z"
                                                                     fill="currentColor" />
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z"
                                                                     fill="currentColor" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Wishlist
                                                             </span></button>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-add-cart-btn-large-wrapper">
                                                     <button type=button class="tp-product-add-cart-btn-large"
                                                         data-bb-toggle="quick-shop"
                                                         data-url="https://shofy.botble.com/ajax/quick-shop/xbox-series-x-console"
                                                         data-bb-toggle="quick-shop" data-product-id="29"
                                                         data-product-name="Xbox Series X Console"
                                                         data-product-price="2094" data-product-sku="BT-123-A1"
                                                         data-product-category="Electronics Gadgets &gt; Headphones"
                                                         data-product-brand="Shofy"
                                                         data-product-categories="Featured,Gifts,With Bluetooth,Headphones"
                                                         title="Quick Shop"><svg width=20 height=20 viewBox="0 0 20 20"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                         Select
                                                         Options
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="tp-product-content">
                                                 <div class="tp-product-category">
                                                     <a href="stores/gopro.html">GoPro</a>
                                                 </div>
                                                 <h3 class="text-truncate tp-product-title">
                                                     <a href="products/xbox-series-x-console.html"
                                                         title="Xbox Series X Console">
                                                         Xbox
                                                         Series
                                                         X
                                                         Console
                                                     </a>
                                                 </h3>
                                                 <div class="">
                                                     <div class="tp-product-rating d-flex align-items-center">
                                                         <div class="tp-product-rating-icon">
                                                             <div class="bb-product-rating page_speed_328097537">
                                                                 <span class="page_speed_782298826"></span>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-rating-text">
                                                             <a href="products/xbox-series-x-console.html#product-review"
                                                                 data-bb-toggle="scroll-to-review"><span
                                                                     class="d-none d-sm-block">(9
                                                                     reviews)</span><span
                                                                     class="d-block d-sm-none">(9)</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="tp-product-price-wrapper">
                                                         <span class="tp-product-price new-price"
                                                             data-bb-value="product-price">₦1,875,218.88</span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col">
                                         <div class="tp-product-item transition-3 mb-25 ">
                                             <div class="tp-product-thumb p-relative fix m-img">
                                                 <a href="products/oculus-quest-2-vr-headset.html"><img
                                                         src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                                                         loading="lazy"
                                                         data-src="https://shofy.botble.com/storage/main/products/product-details-desc-3-600x600.jpg"
                                                         alt="Oculus Quest 2 VR Headset"></a>
                                                 <div class="tp-product-badge">
                                                     <span class="page_speed_827514293">Sale</span>
                                                 </div>
                                                 <div class="tp-product-action">
                                                     <div class="d-flex flex-column tp-product-action-item">
                                                         <button type=button
                                                             class="tp-product-compare-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-compare" title="Add To Compare"
                                                             data-url="https://shofy.botble.com/compare/30"
                                                             data-remove-url="https://shofy.botble.com/compare/30"
                                                             data-add-text="Add To Compare"
                                                             data-remove-text="Remove From Compare"><svg width=17
                                                                 height=21 viewBox="0 0 17 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M12.6666 1L16 4.33333L12.6666 7.66667"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Compare
                                                             </span></button><button type=button
                                                             class="tp-product-quick-view-btn tp-product-action-btn"
                                                             title="Quick View" data-bs-toggle="modal"
                                                             data-bs-target="#product-quick-view-modal"
                                                             data-url="https://shofy.botble.com/ajax/quick-view/30"><svg
                                                                 width=20 height=17 viewBox="0 0 20 17" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                     fill="currentColor" />
                                                                 <g mask="url(#mask0_1211_721)">
                                                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                                                         d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                         fill="currentColor" />
                                                                 </g>
                                                             </svg><span class="tp-product-tooltip">Quick
                                                                 View</span></button><button type=button
                                                             class="tp-product-add-to-wishlist-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                             data-url="https://shofy.botble.com/wishlist/30"
                                                             data-add-text="Add To Wishlist"
                                                             data-remove-text="Remove From Wishlist"><svg width=20
                                                                 height=19 viewBox="0 0 20 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z"
                                                                     fill="currentColor" />
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z"
                                                                     fill="currentColor" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Wishlist
                                                             </span></button>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-add-cart-btn-large-wrapper">
                                                     <button type=button class="tp-product-add-cart-btn-large"
                                                         data-bb-toggle="quick-shop"
                                                         data-url="https://shofy.botble.com/ajax/quick-shop/oculus-quest-2-vr-headset"
                                                         data-bb-toggle="quick-shop" data-product-id="30"
                                                         data-product-name="Oculus Quest 2 VR Headset"
                                                         data-product-price="1983" data-product-sku="7Y-111-A1"
                                                         data-product-category="Gifts" data-product-brand="Soda Brand"
                                                         data-product-categories="New Arrivals,Computers &amp; Laptops,Smart Watch,Gifts"
                                                         title="Quick Shop"><svg width=20 height=20 viewBox="0 0 20 20"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                         Select
                                                         Options
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="tp-product-content">
                                                 <div class="tp-product-category">
                                                     <a href="stores/global-office.html">Global
                                                         Office</a>
                                                 </div>
                                                 <h3 class="text-truncate tp-product-title">
                                                     <a href="products/oculus-quest-2-vr-headset.html"
                                                         title="Oculus Quest 2 VR Headset">
                                                         Oculus
                                                         Quest
                                                         2
                                                         VR
                                                         Headset
                                                     </a>
                                                 </h3>
                                                 <div class="">
                                                     <div class="tp-product-rating d-flex align-items-center">
                                                         <div class="tp-product-rating-icon">
                                                             <div class="bb-product-rating page_speed_328097537">
                                                                 <span class="page_speed_225210520"></span>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-rating-text">
                                                             <a href="products/oculus-quest-2-vr-headset.html#product-review"
                                                                 data-bb-toggle="scroll-to-review"><span
                                                                     class="d-none d-sm-block">(7
                                                                     reviews)</span><span
                                                                     class="d-block d-sm-none">(7)</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="tp-product-price-wrapper">
                                                         <span class="tp-product-price new-price"
                                                             data-bb-value="product-price">₦1,775,816.16</span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col">
                                         <div class="tp-product-item transition-3 mb-25 ">
                                             <div class="tp-product-thumb p-relative fix m-img">
                                                 <a href="products/htc-vive-cosmos-elite-vr-headset.html"><img
                                                         src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                                                         loading="lazy"
                                                         data-src="https://shofy.botble.com/storage/main/products/product-18-600x600.jpg"
                                                         alt="HTC Vive Cosmos Elite VR Headset"></a>
                                                 <div class="tp-product-badge">
                                                 </div>
                                                 <div class="tp-product-action">
                                                     <div class="d-flex flex-column tp-product-action-item">
                                                         <button type=button
                                                             class="tp-product-compare-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-compare" title="Add To Compare"
                                                             data-url="https://shofy.botble.com/compare/31"
                                                             data-remove-url="https://shofy.botble.com/compare/31"
                                                             data-add-text="Add To Compare"
                                                             data-remove-text="Remove From Compare"><svg width=17
                                                                 height=21 viewBox="0 0 17 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M12.6666 1L16 4.33333L12.6666 7.66667"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Compare
                                                             </span></button><button type=button
                                                             class="tp-product-quick-view-btn tp-product-action-btn"
                                                             title="Quick View" data-bs-toggle="modal"
                                                             data-bs-target="#product-quick-view-modal"
                                                             data-url="https://shofy.botble.com/ajax/quick-view/31"><svg
                                                                 width=20 height=17 viewBox="0 0 20 17" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                     fill="currentColor" />
                                                                 <g mask="url(#mask0_1211_721)">
                                                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                                                         d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                         fill="currentColor" />
                                                                 </g>
                                                             </svg><span class="tp-product-tooltip">Quick
                                                                 View</span></button><button type=button
                                                             class="tp-product-add-to-wishlist-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                             data-url="https://shofy.botble.com/wishlist/31"
                                                             data-add-text="Add To Wishlist"
                                                             data-remove-text="Remove From Wishlist"><svg width=20
                                                                 height=19 viewBox="0 0 20 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z"
                                                                     fill="currentColor" />
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z"
                                                                     fill="currentColor" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Wishlist
                                                             </span></button>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-add-cart-btn-large-wrapper">
                                                     <button type=button class="tp-product-add-cart-btn-large"
                                                         data-bb-toggle="quick-shop"
                                                         data-url="https://shofy.botble.com/ajax/quick-shop/htc-vive-cosmos-elite-vr-headset"
                                                         data-bb-toggle="quick-shop" data-product-id="31"
                                                         data-product-name="HTC Vive Cosmos Elite VR Headset"
                                                         data-product-price="711" data-product-sku="JD-103-A1"
                                                         data-product-category="Electronics Gadgets"
                                                         data-product-brand="FoodPound"
                                                         data-product-categories="Wireless Headphones,Playstation,TV, Video &amp; Music,Electronics Gadgets"
                                                         title="Quick Shop"><svg width=20 height=20 viewBox="0 0 20 20"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                         Select
                                                         Options
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="tp-product-content">
                                                 <div class="tp-product-category">
                                                     <a href="stores/global-store.html">Global
                                                         Store</a>
                                                 </div>
                                                 <h3 class="text-truncate tp-product-title">
                                                     <a href="products/htc-vive-cosmos-elite-vr-headset.html"
                                                         title="HTC Vive Cosmos Elite VR Headset">
                                                         HTC
                                                         Vive
                                                         Cosmos
                                                         Elite
                                                         VR
                                                         Headset
                                                     </a>
                                                 </h3>
                                                 <div class="">
                                                     <div class="tp-product-rating d-flex align-items-center">
                                                         <div class="tp-product-rating-icon">
                                                             <div class="bb-product-rating page_speed_328097537">
                                                                 <span class="page_speed_1759922384"></span>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-rating-text">
                                                             <a href="products/htc-vive-cosmos-elite-vr-headset.html#product-review"
                                                                 data-bb-toggle="scroll-to-review"><span
                                                                     class="d-none d-sm-block">(9
                                                                     reviews)</span><span
                                                                     class="d-block d-sm-none">(9)</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="tp-product-price-wrapper">
                                                         <span class="tp-product-price new-price"
                                                             data-bb-value="product-price">₦636,714.72</span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col">
                                         <div class="tp-product-item transition-3 mb-25 ">
                                             <div class="tp-product-thumb p-relative fix m-img">
                                                 <a
                                                     href="products/samsung-odyssey-g9-49-inch-curved-gaming-monitor-digital.html"><img
                                                         src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                                                         loading="lazy"
                                                         data-src="https://shofy.botble.com/storage/main/products/product-1-600x600.jpg"
                                                         alt="Samsung Odyssey G9 49-Inch Curved Gaming Monitor (Digital)"></a>
                                                 <div class="tp-product-badge">
                                                     <span class="product-sale">-69%</span>
                                                 </div>
                                                 <div class="tp-product-action">
                                                     <div class="d-flex flex-column tp-product-action-item">
                                                         <button type=button
                                                             class="tp-product-compare-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-compare" title="Add To Compare"
                                                             data-url="https://shofy.botble.com/compare/32"
                                                             data-remove-url="https://shofy.botble.com/compare/32"
                                                             data-add-text="Add To Compare"
                                                             data-remove-text="Remove From Compare"><svg width=17
                                                                 height=21 viewBox="0 0 17 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M12.6666 1L16 4.33333L12.6666 7.66667"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Compare
                                                             </span></button><button type=button
                                                             class="tp-product-quick-view-btn tp-product-action-btn"
                                                             title="Quick View" data-bs-toggle="modal"
                                                             data-bs-target="#product-quick-view-modal"
                                                             data-url="https://shofy.botble.com/ajax/quick-view/32"><svg
                                                                 width=20 height=17 viewBox="0 0 20 17" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                     fill="currentColor" />
                                                                 <g mask="url(#mask0_1211_721)">
                                                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                                                         d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                         fill="currentColor" />
                                                                 </g>
                                                             </svg><span class="tp-product-tooltip">Quick
                                                                 View</span></button><button type=button
                                                             class="tp-product-add-to-wishlist-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                             data-url="https://shofy.botble.com/wishlist/32"
                                                             data-add-text="Add To Wishlist"
                                                             data-remove-text="Remove From Wishlist"><svg width=20
                                                                 height=19 viewBox="0 0 20 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z"
                                                                     fill="currentColor" />
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z"
                                                                     fill="currentColor" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Wishlist
                                                             </span></button>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-add-cart-btn-large-wrapper">
                                                     <button type=button class="tp-product-add-cart-btn-large"
                                                         data-bb-toggle="add-to-cart" data-show-toast-on-success="false"
                                                         data-url="https://shofy.botble.com/cart/add-to-cart"
                                                         data-id="32" data-bb-toggle="add-to-cart"
                                                         data-product-id="32"
                                                         data-product-name="Samsung Odyssey G9 49-Inch Curved Gaming Monitor (Digital)"
                                                         data-product-price="1709" data-product-sku="NX-108"
                                                         data-product-category="Computers &gt; Accessories"
                                                         data-product-brand="Shofy"
                                                         data-product-categories="CPU Coolers,Gaming Console,Computers,Accessories"
                                                         title="Add To Cart"><svg width=20 height=20 viewBox="0 0 20 20"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                         Add
                                                         To
                                                         Cart
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="tp-product-content">
                                                 <div class="tp-product-category">
                                                     <a href="stores/global-store.html">Global
                                                         Store</a>
                                                 </div>
                                                 <h3 class="text-truncate tp-product-title">
                                                     <a href="products/samsung-odyssey-g9-49-inch-curved-gaming-monitor-digital.html"
                                                         title="Samsung Odyssey G9 49-Inch Curved Gaming Monitor (Digital)">
                                                         Samsung
                                                         Odyssey
                                                         G9
                                                         49-Inch
                                                         Curved
                                                         Gaming
                                                         Monitor
                                                         (Digital)
                                                     </a>
                                                 </h3>
                                                 <div class="">
                                                     <div class="tp-product-rating d-flex align-items-center">
                                                         <div class="tp-product-rating-icon">
                                                             <div class="bb-product-rating page_speed_328097537">
                                                                 <span class="page_speed_622407875"></span>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-rating-text">
                                                             <a href="products/samsung-odyssey-g9-49-inch-curved-gaming-monitor-digital.html#product-review"
                                                                 data-bb-toggle="scroll-to-review"><span
                                                                     class="d-none d-sm-block">(9
                                                                     reviews)</span><span
                                                                     class="d-block d-sm-none">(9)</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="tp-product-price-wrapper">
                                                         <span class="tp-product-price new-price"
                                                             data-bb-value="product-price">₦462,088.32</span><span
                                                             class=""><small><del
                                                                     class="tp-product-price old-price"
                                                                     data-bb-value="product-original-price">₦1,530,443.68</del></small></span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col">
                                         <div class="tp-product-item transition-3 mb-25 ">
                                             <div class="tp-product-thumb p-relative fix m-img">
                                                 <a href="products/lg-ultragear-27gn950-b-4k-gaming-monitor.html"><img
                                                         src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                                                         loading="lazy"
                                                         data-src="https://shofy.botble.com/storage/main/products/product-11-600x600.jpg"
                                                         alt="LG UltraGear 27GN950-B 4K Gaming Monitor"></a>
                                                 <div class="tp-product-badge">
                                                     <span class="page_speed_1966307419">Hot</span>
                                                 </div>
                                                 <div class="tp-product-action">
                                                     <div class="d-flex flex-column tp-product-action-item">
                                                         <button type=button
                                                             class="tp-product-compare-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-compare" title="Add To Compare"
                                                             data-url="https://shofy.botble.com/compare/33"
                                                             data-remove-url="https://shofy.botble.com/compare/33"
                                                             data-add-text="Add To Compare"
                                                             data-remove-text="Remove From Compare"><svg width=17
                                                                 height=21 viewBox="0 0 17 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M12.6666 1L16 4.33333L12.6666 7.66667"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Compare
                                                             </span></button><button type=button
                                                             class="tp-product-quick-view-btn tp-product-action-btn"
                                                             title="Quick View" data-bs-toggle="modal"
                                                             data-bs-target="#product-quick-view-modal"
                                                             data-url="https://shofy.botble.com/ajax/quick-view/33"><svg
                                                                 width=20 height=17 viewBox="0 0 20 17" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                     fill="currentColor" />
                                                                 <g mask="url(#mask0_1211_721)">
                                                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                                                         d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                         fill="currentColor" />
                                                                 </g>
                                                             </svg><span class="tp-product-tooltip">Quick
                                                                 View</span></button><button type=button
                                                             class="tp-product-add-to-wishlist-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                             data-url="https://shofy.botble.com/wishlist/33"
                                                             data-add-text="Add To Wishlist"
                                                             data-remove-text="Remove From Wishlist"><svg width=20
                                                                 height=19 viewBox="0 0 20 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z"
                                                                     fill="currentColor" />
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z"
                                                                     fill="currentColor" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Wishlist
                                                             </span></button>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-add-cart-btn-large-wrapper">
                                                     <button type=button class="tp-product-add-cart-btn-large"
                                                         data-bb-toggle="add-to-cart" data-show-toast-on-success="false"
                                                         data-url="https://shofy.botble.com/cart/add-to-cart"
                                                         data-id="33" data-bb-toggle="add-to-cart"
                                                         data-product-id="33"
                                                         data-product-name="LG UltraGear 27GN950-B 4K Gaming Monitor"
                                                         data-product-price="417" data-product-sku="DO-174"
                                                         data-product-category="Electronics Gadgets &gt; Headphones"
                                                         data-product-brand="FoodPound"
                                                         data-product-categories="Accessories,Tablet,Accessories,Headphones"
                                                         title="Add To Cart"><svg width=20 height=20 viewBox="0 0 20 20"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                         Add
                                                         To
                                                         Cart
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="tp-product-content">
                                                 <div class="tp-product-category">
                                                     <a href="stores/old-el-paso.html">Old
                                                         El
                                                         Paso</a>
                                                 </div>
                                                 <h3 class="text-truncate tp-product-title">
                                                     <a href="products/lg-ultragear-27gn950-b-4k-gaming-monitor.html"
                                                         title="LG UltraGear 27GN950-B 4K Gaming Monitor">
                                                         LG
                                                         UltraGear
                                                         27GN950-B
                                                         4K
                                                         Gaming
                                                         Monitor
                                                     </a>
                                                 </h3>
                                                 <div class="">
                                                     <div class="tp-product-rating d-flex align-items-center">
                                                         <div class="tp-product-rating-icon">
                                                             <div class="bb-product-rating page_speed_328097537">
                                                                 <span class="page_speed_1331044914"></span>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-rating-text">
                                                             <a href="products/lg-ultragear-27gn950-b-4k-gaming-monitor.html#product-review"
                                                                 data-bb-toggle="scroll-to-review"><span
                                                                     class="d-none d-sm-block">(8
                                                                     reviews)</span><span
                                                                     class="d-block d-sm-none">(8)</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="tp-product-price-wrapper">
                                                         <span class="tp-product-price new-price"
                                                             data-bb-value="product-price">₦113,731.04</span><span
                                                             class=""><small><del
                                                                     class="tp-product-price old-price"
                                                                     data-bb-value="product-original-price">₦373,431.84</del></small></span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col">
                                         <div class="tp-product-item transition-3 mb-25 ">
                                             <div class="tp-product-thumb p-relative fix m-img">
                                                 <a
                                                     href="products/acer-predator-x38-pbmiphzx-38-inch-curved-gaming-monitor.html"><img
                                                         src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                                                         loading="lazy"
                                                         data-src="https://shofy.botble.com/storage/main/products/product-19-600x600.jpg"
                                                         alt="Acer Predator X38 Pbmiphzx 38-Inch Curved Gaming Monitor"></a>
                                                 <div class="tp-product-badge">
                                                     <span class="product-sale">-40%</span>
                                                 </div>
                                                 <div class="tp-product-action">
                                                     <div class="d-flex flex-column tp-product-action-item">
                                                         <button type=button
                                                             class="tp-product-compare-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-compare" title="Add To Compare"
                                                             data-url="https://shofy.botble.com/compare/34"
                                                             data-remove-url="https://shofy.botble.com/compare/34"
                                                             data-add-text="Add To Compare"
                                                             data-remove-text="Remove From Compare"><svg width=17
                                                                 height=21 viewBox="0 0 17 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M12.6666 1L16 4.33333L12.6666 7.66667"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Compare
                                                             </span></button><button type=button
                                                             class="tp-product-quick-view-btn tp-product-action-btn"
                                                             title="Quick View" data-bs-toggle="modal"
                                                             data-bs-target="#product-quick-view-modal"
                                                             data-url="https://shofy.botble.com/ajax/quick-view/34"><svg
                                                                 width=20 height=17 viewBox="0 0 20 17" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                     fill="currentColor" />
                                                                 <g mask="url(#mask0_1211_721)">
                                                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                                                         d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                         fill="currentColor" />
                                                                 </g>
                                                             </svg><span class="tp-product-tooltip">Quick
                                                                 View</span></button><button type=button
                                                             class="tp-product-add-to-wishlist-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                             data-url="https://shofy.botble.com/wishlist/34"
                                                             data-add-text="Add To Wishlist"
                                                             data-remove-text="Remove From Wishlist"><svg width=20
                                                                 height=19 viewBox="0 0 20 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z"
                                                                     fill="currentColor" />
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z"
                                                                     fill="currentColor" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Wishlist
                                                             </span></button>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-add-cart-btn-large-wrapper">
                                                     <button type=button class="tp-product-add-cart-btn-large"
                                                         data-bb-toggle="add-to-cart" data-show-toast-on-success="false"
                                                         data-url="https://shofy.botble.com/cart/add-to-cart"
                                                         data-id="34" data-bb-toggle="add-to-cart"
                                                         data-product-id="34"
                                                         data-product-name="Acer Predator X38 Pbmiphzx 38-Inch Curved Gaming Monitor"
                                                         data-product-price="1055" data-product-sku="AT-147"
                                                         data-product-category="Computers &gt; Tablet"
                                                         data-product-brand="Soda Brand"
                                                         data-product-categories="Electronics,Featured,New Arrivals,Tablet"
                                                         title="Add To Cart"><svg width=20 height=20 viewBox="0 0 20 20"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                         Add
                                                         To
                                                         Cart
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="tp-product-content">
                                                 <div class="tp-product-category">
                                                     <a href="stores/starkist.html">StarKist</a>
                                                 </div>
                                                 <h3 class="text-truncate tp-product-title">
                                                     <a href="products/acer-predator-x38-pbmiphzx-38-inch-curved-gaming-monitor.html"
                                                         title="Acer Predator X38 Pbmiphzx 38-Inch Curved Gaming Monitor">
                                                         Acer
                                                         Predator
                                                         X38
                                                         Pbmiphzx
                                                         38-Inch
                                                         Curved
                                                         Gaming
                                                         Monitor
                                                     </a>
                                                 </h3>
                                                 <div class="">
                                                     <div class="tp-product-rating d-flex align-items-center">
                                                         <div class="tp-product-rating-icon">
                                                             <div class="bb-product-rating page_speed_328097537">
                                                                 <span class="page_speed_2043958294"></span>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-rating-text">
                                                             <a href="products/acer-predator-x38-pbmiphzx-38-inch-curved-gaming-monitor.html#product-review"
                                                                 data-bb-toggle="scroll-to-review"><span
                                                                     class="d-none d-sm-block">(7
                                                                     reviews)</span><span
                                                                     class="d-block d-sm-none">(7)</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="tp-product-price-wrapper">
                                                         <span class="tp-product-price new-price"
                                                             data-bb-value="product-price">₦562,386.56</span><span
                                                             class=""><small><del
                                                                     class="tp-product-price old-price"
                                                                     data-bb-value="product-original-price">₦944,773.60</del></small></span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col">
                                         <div class="tp-product-item transition-3 mb-25 ">
                                             <div class="tp-product-thumb p-relative fix m-img">
                                                 <a href="products/asus-rog-swift-pg279qm-27-inch-gaming-monitor.html"><img
                                                         src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                                                         loading="lazy"
                                                         data-src="https://shofy.botble.com/storage/main/products/product-17-600x600.jpg"
                                                         alt="ASUS ROG Swift PG279QM 27-Inch Gaming Monitor"></a>
                                                 <div class="tp-product-badge">
                                                     <span class="product-sale">-14%</span>
                                                 </div>
                                                 <div class="tp-product-action">
                                                     <div class="d-flex flex-column tp-product-action-item">
                                                         <button type=button
                                                             class="tp-product-compare-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-compare" title="Add To Compare"
                                                             data-url="https://shofy.botble.com/compare/35"
                                                             data-remove-url="https://shofy.botble.com/compare/35"
                                                             data-add-text="Add To Compare"
                                                             data-remove-text="Remove From Compare"><svg width=17
                                                                 height=21 viewBox="0 0 17 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M12.6666 1L16 4.33333L12.6666 7.66667"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Compare
                                                             </span></button><button type=button
                                                             class="tp-product-quick-view-btn tp-product-action-btn"
                                                             title="Quick View" data-bs-toggle="modal"
                                                             data-bs-target="#product-quick-view-modal"
                                                             data-url="https://shofy.botble.com/ajax/quick-view/35"><svg
                                                                 width=20 height=17 viewBox="0 0 20 17" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                     fill="currentColor" />
                                                                 <g mask="url(#mask0_1211_721)">
                                                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                                                         d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                         fill="currentColor" />
                                                                 </g>
                                                             </svg><span class="tp-product-tooltip">Quick
                                                                 View</span></button><button type=button
                                                             class="tp-product-add-to-wishlist-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                             data-url="https://shofy.botble.com/wishlist/35"
                                                             data-add-text="Add To Wishlist"
                                                             data-remove-text="Remove From Wishlist"><svg width=20
                                                                 height=19 viewBox="0 0 20 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z"
                                                                     fill="currentColor" />
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z"
                                                                     fill="currentColor" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Wishlist
                                                             </span></button>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-add-cart-btn-large-wrapper">
                                                     <button type=button class="tp-product-add-cart-btn-large"
                                                         data-bb-toggle="add-to-cart" data-show-toast-on-success="false"
                                                         data-url="https://shofy.botble.com/cart/add-to-cart"
                                                         data-id="35" data-bb-toggle="add-to-cart"
                                                         data-product-id="35"
                                                         data-product-name="ASUS ROG Swift PG279QM 27-Inch Gaming Monitor"
                                                         data-product-price="271" data-product-sku="FK-163"
                                                         data-product-category="Computers &gt; Laptop"
                                                         data-product-brand="Soda Brand"
                                                         data-product-categories="New Arrivals,Headphones,Playstation,Laptop"
                                                         title="Add To Cart"><svg width=20 height=20 viewBox="0 0 20 20"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                         Add
                                                         To
                                                         Cart
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="tp-product-content">
                                                 <div class="tp-product-category">
                                                     <a href="stores/roberts-store.html">Robert’s
                                                         Store</a>
                                                 </div>
                                                 <h3 class="text-truncate tp-product-title">
                                                     <a href="products/asus-rog-swift-pg279qm-27-inch-gaming-monitor.html"
                                                         title="ASUS ROG Swift PG279QM 27-Inch Gaming Monitor">
                                                         ASUS
                                                         ROG
                                                         Swift
                                                         PG279QM
                                                         27-Inch
                                                         Gaming
                                                         Monitor
                                                     </a>
                                                 </h3>
                                                 <div class="">
                                                     <div class="tp-product-rating d-flex align-items-center">
                                                         <div class="tp-product-rating-icon">
                                                             <div class="bb-product-rating page_speed_328097537">
                                                                 <span class="page_speed_782298826"></span>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-rating-text">
                                                             <a href="products/asus-rog-swift-pg279qm-27-inch-gaming-monitor.html#product-review"
                                                                 data-bb-toggle="scroll-to-review"><span
                                                                     class="d-none d-sm-block">(10
                                                                     reviews)</span><span
                                                                     class="d-block d-sm-none">(10)</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="tp-product-price-wrapper">
                                                         <span class="tp-product-price new-price"
                                                             data-bb-value="product-price">₦208,656.16</span><span
                                                             class=""><small><del
                                                                     class="tp-product-price old-price"
                                                                     data-bb-value="product-original-price">₦242,685.92</del></small></span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col">
                                         <div class="tp-product-item transition-3 mb-25 ">
                                             <div class="tp-product-thumb p-relative fix m-img">
                                                 <a
                                                     href="products/benq-ew3280u-32-inch-4k-hdr-entertainment-monitor-digital.html"><img
                                                         src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                                                         loading="lazy"
                                                         data-src="https://shofy.botble.com/storage/main/products/product-7-600x600.jpg"
                                                         alt="BenQ EW3280U 32-Inch 4K HDR Entertainment Monitor (Digital)"></a>
                                                 <div class="tp-product-badge">
                                                     <span class="page_speed_1966307419">Hot</span>
                                                 </div>
                                                 <div class="tp-product-action">
                                                     <div class="d-flex flex-column tp-product-action-item">
                                                         <button type=button
                                                             class="tp-product-compare-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-compare" title="Add To Compare"
                                                             data-url="https://shofy.botble.com/compare/36"
                                                             data-remove-url="https://shofy.botble.com/compare/36"
                                                             data-add-text="Add To Compare"
                                                             data-remove-text="Remove From Compare"><svg width=17
                                                                 height=21 viewBox="0 0 17 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M12.6666 1L16 4.33333L12.6666 7.66667"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                                 <path
                                                                     d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1"
                                                                     stroke="currentColor" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Compare
                                                             </span></button><button type=button
                                                             class="tp-product-quick-view-btn tp-product-action-btn"
                                                             title="Quick View" data-bs-toggle="modal"
                                                             data-bs-target="#product-quick-view-modal"
                                                             data-url="https://shofy.botble.com/ajax/quick-view/36"><svg
                                                                 width=20 height=17 viewBox="0 0 20 17" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                     fill="currentColor" />
                                                                 <g mask="url(#mask0_1211_721)">
                                                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                                                         d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                         fill="currentColor" />
                                                                 </g>
                                                             </svg><span class="tp-product-tooltip">Quick
                                                                 View</span></button><button type=button
                                                             class="tp-product-add-to-wishlist-btn tp-product-action-btn"
                                                             data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                                             data-url="https://shofy.botble.com/wishlist/36"
                                                             data-add-text="Add To Wishlist"
                                                             data-remove-text="Remove From Wishlist"><svg width=20
                                                                 height=19 viewBox="0 0 20 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z"
                                                                     fill="currentColor" />
                                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z"
                                                                     fill="currentColor" />
                                                             </svg><span class="tp-product-tooltip">
                                                                 Add
                                                                 To
                                                                 Wishlist
                                                             </span></button>
                                                     </div>
                                                 </div>
                                                 <div class="tp-product-add-cart-btn-large-wrapper">
                                                     <button type=button class="tp-product-add-cart-btn-large"
                                                         data-bb-toggle="add-to-cart" data-show-toast-on-success="false"
                                                         data-url="https://shofy.botble.com/cart/add-to-cart"
                                                         data-id="36" data-bb-toggle="add-to-cart"
                                                         data-product-id="36"
                                                         data-product-name="BenQ EW3280U 32-Inch 4K HDR Entertainment Monitor (Digital)"
                                                         data-product-price="486" data-product-sku="YW-170"
                                                         data-product-category="Electronics Gadgets &gt; Remote Control"
                                                         data-product-brand="Soda Brand"
                                                         data-product-categories="New Arrivals,Wireless Headphones,Cameras,Remote Control"
                                                         title="Add To Cart"><svg width=20 height=20 viewBox="0 0 20 20"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                 fill="currentColor" />
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                         Add
                                                         To
                                                         Cart
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="tp-product-content">
                                                 <div class="tp-product-category">
                                                     <a href="stores/global-office.html">Global
                                                         Office</a>
                                                 </div>
                                                 <h3 class="text-truncate tp-product-title">
                                                     <a href="products/benq-ew3280u-32-inch-4k-hdr-entertainment-monitor-digital.html"
                                                         title="BenQ EW3280U 32-Inch 4K HDR Entertainment Monitor (Digital)">
                                                         BenQ
                                                         EW3280U
                                                         32-Inch
                                                         4K
                                                         HDR
                                                         Entertainment
                                                         Monitor
                                                         (Digital)
                                                     </a>
                                                 </h3>
                                                 <div class="">
                                                     <div class="tp-product-rating d-flex align-items-center">
                                                         <div class="tp-product-rating-icon">
                                                             <div class="bb-product-rating page_speed_328097537">
                                                                 <span class="page_speed_782298826"></span>
                                                             </div>
                                                         </div>
                                                         <div class="tp-product-rating-text">
                                                             <a href="products/benq-ew3280u-32-inch-4k-hdr-entertainment-monitor-digital.html#product-review"
                                                                 data-bb-toggle="scroll-to-review"><span
                                                                     class="d-none d-sm-block">(10
                                                                     reviews)</span><span
                                                                     class="d-block d-sm-none">(10)</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="tp-product-price-wrapper">
                                                         <span class="tp-product-price new-price"
                                                             data-bb-value="product-price">₦235,521.76</span><span
                                                             class=""><small><del
                                                                     class="tp-product-price old-price"
                                                                     data-bb-value="product-original-price">₦435,222.72</del></small></span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <nav class="tp-pagination">
                                     <ul class="pagination">
                                         <li class="page-item disabled" aria-disabled="true"
                                             aria-label="&laquo; Previous">
                                             <span class="pages-number" aria-hidden="true"><svg width=15 height=13
                                                     viewBox="0 0 15 13" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                     <path d="M1.00017 6.77879L14 6.77879" stroke="currentColor"
                                                         stroke-width="1.5" stroke-linecap="round"
                                                         stroke-linejoin="round" />
                                                     <path d="M6.24316 11.9999L0.999899 6.77922L6.24316 1.55762"
                                                         stroke="currentColor" stroke-width="1.5"
                                                         stroke-linecap="round" stroke-linejoin="round" />
                                                 </svg></span>
                                         </li>
                                         <li class="page-item active" aria-current="page">
                                             <span class="current pages-number">1</span>
                                         </li>
                                         <li class="page-item">
                                             <a class="pages-number" href="products4658.html?page=2">2</a>
                                         </li>
                                         <li class="page-item">
                                             <a class="pages-number" href="products9ba9.html?page=3">3</a>
                                         </li>
                                         <li class="page-item">
                                             <a class="pages-number" href="products4658.html?page=2" rel="next"
                                                 aria-label="Next &raquo;"><svg width=15 height=13 viewBox="0 0 15 13"
                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                     <path d="M13.9998 6.77883L1 6.77883" stroke="currentColor"
                                                         stroke-width="1.5" stroke-linecap="round"
                                                         stroke-linejoin="round" />
                                                     <path d="M8.75684 1.55767L14.0001 6.7784L8.75684 12"
                                                         stroke="currentColor" stroke-width="1.5"
                                                         stroke-linecap="round" stroke-linejoin="round" />
                                                 </svg></a>
                                         </li>
                                     </ul>
                                 </nav>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
     </main>
     <section class="tp-subscribe-area pt-70 pb-65 theme-bg p-relative z-index-1">
         <div class="tp-subscribe-shape d-none d-sm-block">
             <img src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true" class="tp-subscribe-shape-1"
                 loading="lazy" data-src="https://shofy.botble.com/themes/shofy/images/newsletter/shape-1.png"
                 alt="Subscribe our Newsletter"><img src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                 class="tp-subscribe-shape-2" loading="lazy"
                 data-src="https://shofy.botble.com/themes/shofy/images/newsletter/shape-2.png"
                 alt="Subscribe our Newsletter"><img src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                 class="tp-subscribe-shape-3" loading="lazy"
                 data-src="https://shofy.botble.com/themes/shofy/images/newsletter/shape-3.png"
                 alt="Subscribe our Newsletter"><img src="{{ asset('client/storage/main/general/placeholder.png')}}" data-bb-lazy="true"
                 class="tp-subscribe-shape-4" loading="lazy"
                 data-src="https://shofy.botble.com/themes/shofy/images/newsletter/shape-4.png"
                 alt="Subscribe our Newsletter">
             <div class="tp-subscribe-plane"><img class="tp-subscribe-plane-shape"
                     src="{{asset('client/themes/shofy/images/newsletter/plane.png')}}" alt="Subscribe our Newsletter"><svg width=399 height=110
                     class="d-none d-sm-block" viewBox="0 0 399 110" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                     <path
                         d="M0.499634 1.00049C8.5 20.0005 54.2733 13.6435 60.5 40.0005C65.6128 61.6426 26.4546 130.331 15 90.0005C-9 5.5 176.5 127.5 218.5 106.5C301.051 65.2247 202 -57.9188 344.5 40.0003C364 53.3997 384 22 399 22"
                         stroke="white" stroke-opacity="0.5" stroke-dasharray="3 3" />
                 </svg><svg class="d-sm-none" width=193 height=110 viewBox="0 0 193 110" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                     <path
                         d="M1 1C4.85463 20.0046 26.9085 13.6461 29.9086 40.0095C32.372 61.6569 13.5053 130.362 7.98637 90.0217C-3.57698 5.50061 85.7981 127.53 106.034 106.525C145.807 65.2398 98.0842 -57.9337 166.742 40.0093C176.137 53.412 185.773 22.0046 193 22.0046"
                         stroke="white" stroke-opacity="0.5" stroke-dasharray="3 3" />
                 </svg></div>
         </div>
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-xl-7 col-lg-7">
                     <div class="tp-subscribe-content">
                         <span>Sale 20% off all
                             store</span>
                         <h3 class="tp-subscribe-title">
                             Subscribe our
                             Newsletter</h3>
                     </div>
                 </div>
                 <div class="col-xl-5 col-lg-5">
                     <div class="tp-subscribe-form">
                         <form method="POST" action="https://shofy.botble.com/newsletter/subscribe"
                             accept-charset="UTF-8" id="botble-newsletter-forms-fronts-newsletter-form"
                             class="subscribe-form dirty-check">
                             <input name=_token type=hidden value="SPz1qyncaKbdv25m6D9mAygMzUr373EJVS4dARKR">
                             <div class="tp-subscribe-input">
                                 <input class="form-control" placeholder="Enter Your Email" id="newsletter-email"
                                     required="required" name=email type=email><button class=""
                                     type=submit>Subscribe</button>
                             </div>
                             <div class="newsletter-message newsletter-success-message page_speed_1848172758">
                             </div>
                             <div class="newsletter-message newsletter-error-message page_speed_1848172758">
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 @endsection
