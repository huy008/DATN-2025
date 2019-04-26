 <header>
     <div class="tp-header-area p-relative z-index-11 tp-header-style-primary">
         <div class="p-relative z-index-11 tp-header-top-border tp-header-top black-bg page_speed_1985950614">

             <div class="tp-header-main tp-header-sticky page_speed_872863184">
                 <div class="container">
                     <div class="row align-items-center">
                         <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                             <div class="logo"><a href="{{ route('index') }}"><img
                                         src={{ asset('client/storage/main/general/logo.png') }} data-bb-lazy="false"
                                         class="page_speed_1759980468" loading="eager"
                                         alt="Shofy - Multipurpose eCommerce Laravel Script"></a>
                             </div>
                         </div>
                         <div class="col-xl-6 col-lg-7 d-none d-lg-block pl-70">
                             <form action="/products" data-ajax-url="/ajax/search-products" method="GET"
                                 class="bb-form-quick-search" id="bb-form-quick-search">
                                 <div class="tp-header-search-wrapper d-flex align-items-center">
                                     <div class="tp-header-search-box">
                                         <input type="search" name="q" placeholder="Search for Products..."
                                             autocomplete="off" id="quick-search-input">
                                     </div>
                                 </div>
                                 <div class="bb-quick-search-results" id="quick-search-results">
                                 </div>
                             </form>
                         </div>
                         <div class="col-xl-4 col-lg-3 col-md-8 col-6">
                             <div class="tp-header-main-right d-flex align-items-center justify-content-end">
                                 <div class="tp-header-login d-flex align-items-center ml-50">
                                     <div class="tp-header-login-icon">
                                         <span class="page_speed_1653511719"><svg width=17 height=21 viewBox="0 0 17 21"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                 <circle cx="8.57894" cy="5.77803" r="4.77803" stroke="currentColor"
                                                     stroke-width="1.5" stroke-linecap="round"
                                                     stroke-linejoin="round" />
                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                     d="M1.00002 17.2014C0.998732 16.8655 1.07385 16.5337 1.2197 16.2311C1.67736 15.3158 2.96798 14.8307 4.03892 14.611C4.81128 14.4462 5.59431 14.336 6.38217 14.2815C7.84084 14.1533 9.30793 14.1533 10.7666 14.2815C11.5544 14.3367 12.3374 14.4468 13.1099 14.611C14.1808 14.8307 15.4714 15.27 15.9291 16.2311C16.2224 16.8479 16.2224 17.564 15.9291 18.1808C15.4714 19.1419 14.1808 19.5812 13.1099 19.7918C12.3384 19.9634 11.5551 20.0766 10.7666 20.1304C9.57937 20.2311 8.38659 20.2494 7.19681 20.1854C6.92221 20.1854 6.65677 20.1854 6.38217 20.1304C5.59663 20.0773 4.81632 19.9641 4.04807 19.7918C2.96798 19.5812 1.68652 19.1419 1.2197 18.1808C1.0746 17.8747 0.999552 17.5401 1.00002 17.2014Z"
                                                     stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                     stroke-linejoin="round" />
                                             </svg></span>
                                     </div>
                                     <div class="tp-header-login-content d-none d-xl-block">
                                         @auth
                                             <span class="page_speed_1653511719">
                                                 Hello, {{ Auth::user()->name }}
                                             </span>
                                             <h5 class="tp-header-login-title">
                                                 <a href="{{ route('logout') }}"
                                                     onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                     Logout
                                                 </a>
                                             </h5>

                                             <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                 style="display: none;">
                                                 @csrf
                                             </form>
                                         @else
                                             <span class="page_speed_1653511719">
                                                 Hello, Guest
                                             </span>
                                             <h5 class="tp-header-login-title">
                                                 <a href="{{ route('login') }}">Login</a> / <a
                                                     href="{{ route('register') }}">Register</a>
                                             </h5>
                                         @endauth
                                     </div>
                                 </div>
                                 <div class="tp-header-action d-flex align-items-center ml-50">
                                     <div class="tp-header-action-item d-none d-lg-block">
                                         <a href="{{ route('orders.index') }}" class="tp-header-action-btn"
                                             title="Đơn hàng của bạn">
                                             <svg width="22" height="20" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                 <path d="M3 3H5H21" stroke="currentColor" stroke-width="1.5"
                                                     stroke-linecap="round" stroke-linejoin="round" />
                                                 <path
                                                     d="M8 3L9.39559 5.78994C9.775 6.5416 10.5754 7 11.4481 7H20.5C21.3284 7 22 7.67157 22 8.5V17.5C22 18.3284 21.3284 19 20.5 19H6C5.17157 19 4.5 18.3284 4.5 17.5V6.5C4.5 5.67157 5.17157 5 6 5H7"
                                                     stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                     stroke-linejoin="round" />
                                                 <circle cx="9" cy="21" r="1" fill="currentColor" />
                                                 <circle cx="18" cy="21" r="1" fill="currentColor" />
                                             </svg>
                                             <span class="tp-header-action-badge" data-bb-value="order-count">
                                                 {{ Auth::check() ? Auth::user()->orders()->count() : 0 }}
                                             </span>
                                         </a>
                                     </div>
                                     <div class="tp-header-action-item">
                                         <a href="{{ route('cart.index') }}"
                                             class="tp-header-action-btn cartmini-open-btn"
                                             data-bb-toggle="open-mini-cart"
                                             data-url="https://shofy.botble.com/ajax/cart-content"><svg width=21
                                                 height=22 viewBox="0 0 21 22" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                     d="M6.48626 20.5H14.8341C17.9004 20.5 20.2528 19.3924 19.5847 14.9348L18.8066 8.89359C18.3947 6.66934 16.976 5.81808 15.7311 5.81808H5.55262C4.28946 5.81808 2.95308 6.73341 2.4771 8.89359L1.69907 14.9348C1.13157 18.889 3.4199 20.5 6.48626 20.5Z"
                                                     stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                     stroke-linejoin="round" />
                                                 <path
                                                     d="M6.34902 5.5984C6.34902 3.21232 8.28331 1.27803 10.6694 1.27803V1.27803C11.8184 1.27316 12.922 1.72619 13.7362 2.53695C14.5504 3.3477 15.0081 4.44939 15.0081 5.5984V5.5984"
                                                     stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                     stroke-linejoin="round" />
                                                 <path d="M7.70365 10.1018H7.74942" stroke="currentColor"
                                                     stroke-width="1.5" stroke-linecap="round"
                                                     stroke-linejoin="round" />
                                                 <path d="M13.5343 10.1018H13.5801" stroke="currentColor"
                                                     stroke-width="1.5" stroke-linecap="round"
                                                     stroke-linejoin="round" />
                                             </svg><span class="tp-header-action-badge"
                                                 data-bb-value="cart-count">0</span></a>
                                     </div>
                                     <div class="tp-header-action-item d-lg-none">
                                         <button type=button class="tp-header-action-btn tp-offcanvas-open-btn"
                                             title="Menu"><svg xmlns="http://www.w3.org/2000/svg" width=30 height=16
                                                 viewBox="0 0 30 16">
                                                 <rect x="10" width=20 height=2 fill="currentColor" />
                                                 <rect x="5" y="7" width=25 height=2 fill="currentColor" />
                                                 <rect x="10" y="14" width=20 height=2 fill="currentColor" />
                                             </svg></button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="tp-header-bottom tp-header-bottom-border d-none d-lg-block page_speed_664569758">
                 <div class="container">
                     <div class="tp-mega-menu-wrapper p-relative">
                         <div class="row align-items-center">
                             <div class="col-xl-3 col-lg-3">
                                 <div class="tp-header-category tp-category-menu tp-header-category-toggle">
                                     <div style="background: #0c55aa; padding:11px 0px 11px 60px;color:white;">
                                         Hãng sản xuất
                                     </div>
                                 </div>
                             </div>
                             <div class="col-xl-6 col-lg-6">
                                 <div class="main-menu menu-style-1">
                                     <nav class="tp-main-menu-content">
                                         <ul>
                                             @foreach ($categoriesWithProductCount as $item)
                                                 <li class="has-dropdown">
                                                     <a href="{{ route('category.show', $item->id) }}" title="Home">
                                                         {{ $item->name }}
                                                     </a>
                                                 </li>
                                             @endforeach

                                         </ul>
                                     </nav>
                                 </div>
                             </div>
                             <div class="col-xl-3 col-lg-3">
                                 <div class="tp-header-contact d-flex align-items-center justify-content-end">
                                     <div class="tp-header-contact-icon">
                                         <span><svg class="icon svg-icon-ti-ti-phone"
                                                 xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                 <path
                                                     d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                             </svg></span>
                                     </div>
                                     <div class="tp-header-contact-content">
                                         <h5>Hotline:
                                         </h5>
                                         <p><a href="tel:8 800 332 65-66">
                                                 8
                                                 800
                                                 332
                                                 65-66
                                             </a>
                                         </p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
 </header>

 <script>
     document.addEventListener("DOMContentLoaded", function() {
         const input = document.getElementById("quick-search-input");
         const resultsContainer = document.getElementById("quick-search-results");
         const form = document.getElementById("bb-form-quick-search");
         const ajaxUrl = form.getAttribute("data-ajax-url");

         let debounceTimer;

         input.addEventListener("input", function() {
             clearTimeout(debounceTimer);
             const query = input.value.trim();

             if (query.length < 3) {
                 console.log(query.length)
                 resultsContainer.innerHTML = '';
                 return;
             }

             debounceTimer = setTimeout(() => {
                 fetch(`${ajaxUrl}?q=${encodeURIComponent(query)}`)
                     .then(response => response.json())
                     .then(data => {
                         renderResults(data);
                     });
             }, 1000);
         });

         function renderResults(products) {
             if (!products.length) {
                 resultsContainer.innerHTML = '<div class="bb-quick-search-empty">No products found.</div>';
                 return;
             }

             resultsContainer.innerHTML = products.map(product => {
                console.log(product)
                 const fullStars = Math.floor(product.rating_percent);
                 const halfStar = product.rating_percent - fullStars >= 0.5;
                 const emptyStars = 5 - fullStars - (halfStar ? 1 : 0);

                 const starsHtml = `
        ${'<i class="fa fa-star" style="color: gold; font-size: 12px;"></i>'.repeat(fullStars)}
        ${halfStar ? '<i class="fa fa-star-half-o" style="color: gold; font-size: 12px;"></i>' : ''}
        ${'<i class="fa fa-star-o" style="color: gold; font-size: 12px;"></i>'.repeat(emptyStars)}
    `;

                 return `
        <a class="bb-quick-search-item" href="${product.url}">
            <div class="bb-quick-search-item-image">
                <img src="${product.image}" alt="${product.name}">
            </div>
            <div class="bb-quick-search-item-info">
                <div class="bb-quick-search-item-name">${highlightText(product.name, input.value)}</div>
                
                <div class="bb-quick-search-item-rating" style="margin: 2px 0;">
                    ${starsHtml}
                    <small>(${product.reviews_count} đánh giá)</small>
                </div>

                <div class="bb-quick-search-item-price">
                    <span class="new-price">$${product.base_price}</span>
                    ${product.base_price ? `<small><del class="old-price">$${product.base_price}</del></small>` : ''}
                </div>
            </div>
        </a>
    `;
             }).join('');
         }


         function highlightText(text, keyword) {
             const regex = new RegExp(`(${keyword})`, 'gi');
             return text.replace(regex, '<span class="bb-quick-search-highlight">$1</span>');
         }
     });
 </script>
