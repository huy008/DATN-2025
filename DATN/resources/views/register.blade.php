 @extends('layout.main')

 @section('content')
     <main>
         <section class="breadcrumb__area include-bg mb-30 text-start pt-30 page_speed_1290811132">
             <div class="container">
                 <div class="breadcrumb__content p-relative z-index-1">
                     <h3 class="breadcrumb__title">
                         Đăng ký</h3>
                     <div class="breadcrumb__list js_breadcrumb_reduce_length_on_mobile">
                         <span><a href="{{route('index')}}">Trang chủ</a></span><span>
                              Đăng ký </span>
                     </div>
                 </div>
             </div>
         </section>
         <section class="tp-page-area pb-80 pt-50">
             <div class="container">
                 <div class="container">
                     <div class="row justify-content-center py-5">
                         <div class="col-lg-10">
                             <div class="auth-card auth-card__horizontal row">
                                 <div class="col-md-6 auth-card__left">
                                     <img src={{ asset('client/storage/main/general/placeholder.png') }} data-bb-lazy="true"
                                         class="auth-card__banner" loading="lazy"
                                         data-src="https://shofy.botble.com/storage/main/general/auth-banner.png"
                                         alt="Register an account">
                                 </div>
                                 <div class="col-md-6 auth-card__right">
                                     <div class="auth-card__header">
                                         <div class="d-flex flex-column flex-md-row align-items-start gap-3">
                                             <div class="auth-card__header-icon bg-white p-3 rounded">
                                                 <svg class="icon text-primary svg-icon-ti-ti-user-plus"
                                                     xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                     <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                                     <path d="M16 19h6" />
                                                     <path d="M19 16v6" />
                                                     <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                                                 </svg>
                                             </div>
                                             <div>
                                                 <h3 class="auth-card__header-title fs-4 mb-1">
                                                     Đăng ký tài khoản
                                                 </h3>
                                                 <p class="auth-card__header-description text-muted">
                                                   Dữ liệu cá nhân của bạn sẽ được sử dụng để hỗ trợ trải nghiệm của bạn trên toàn trang web này, để quản lý quyền truy cập vào tài khoản của bạn.
                                                 </p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="auth-card__body">
                                         <form method="POST" action="{{route('register.post')}}"
                                             accept-charset="UTF-8" id="botble-ecommerce-forms-fronts-auth-register-form"
                                             class="js-base-form dirty-check" icon="ti ti-user-plus"
                                             heading="Register an account"
                                             description="Your personal data will be used to support your experience throughout this website, to manage access to your account."
                                             banner="main/general/auth-banner.png" bannerDirection="horizontal">
                                             @csrf
                                             <div class="mb-3 position-relative">
                                                 <label class="form-label" for="name">
                                                     Nhập tên
                                                 </label>
                                                 <div class="position-relative">
                                                     <span class="auth-input-icon input-group-text"><svg
                                                             class="icon svg-icon-ti-ti-user"
                                                             xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round">
                                                             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                             <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                                             <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                                         </svg></span><input class="form-control ps-5" data-counter="250"
                                                         placeholder="Nhập tên" name=name type=text id="name">
                                                 </div>
                                             </div>
                                             <div class="mb-3 position-relative">
                                                 <label class="form-label" for="email">
                                                     Email
                                                 </label>
                                                 <div class="position-relative">
                                                     <span class="auth-input-icon input-group-text"><svg
                                                             class="icon svg-icon-ti-ti-mail"
                                                             xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round">
                                                             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                             <path
                                                                 d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                                             <path d="M3 7l9 6l9 -6" />
                                                         </svg></span><input class="form-control ps-5" data-counter="60"
                                                         placeholder="Nhập email" autocomplete="email" name=email type=email
                                                         id="email">
                                                 </div>
                                             </div>
                                             <div class="mb-3 position-relative">
                                                 <label class="form-label" for="phone">
                                                     Số điện thoại
                                                 </label>
                                                 <div class="position-relative">
                                                     <span class="auth-input-icon input-group-text"><svg
                                                             class="icon svg-icon-ti-ti-phone"
                                                             xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round">
                                                             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                             <path
                                                                 d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                                         </svg></span><input
                                                         class="form-control ps-5 js-phone-number-mask form-control"
                                                         data-counter="250" placeholder="Nhập số điện thoại" autocomplete="tel"
                                                         name=phone_number type=text id="phone">
                                                 </div>
                                             </div>
                                             <div class="mb-3 position-relative">
                                                 <label class="form-label" for="password">
                                                      Nhập mật khẩu
                                                 </label>
                                                 <div class="position-relative">
                                                     <span class="auth-input-icon input-group-text"><svg
                                                             class="icon svg-icon-ti-ti-lock"
                                                             xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round">
                                                             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                             <path
                                                                 d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                                                             <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                                             <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                                                         </svg></span>
                                                     <div class="input-group">
                                                         <input type=password name=password id="password" value=""
                                                             class="form-control ps-5" data-counter="250"
                                                             placeholder="Nhập mật khẩu" data-bb-password><span
                                                             class="input-password-toggle" data-bb-toggle-password><svg
                                                                 class="icon svg-icon-ti-ti-eye"
                                                                 xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round">
                                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                 <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                                 <path
                                                                     d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                                             </svg></span>
                                                     </div>
                                                 </div>
                                             </div>
                                             <style>
                                                 .input-password-toggle {
                                                     position: absolute;
                                                     right: 0;
                                                     top: 0;
                                                     cursor: pointer;
                                                     padding: 10px 15px;
                                                     z-index: 9;
                                                 }

                                                 input[data-bb-password]:valid,
                                                 input[data-bb-password].is-valid {
                                                     background-image: unset;
                                                 }
                                             </style>
                                             <script>
                                                 window.addEventListener('load', function() {
                                                     document.querySelectorAll('[data-bb-toggle-password]').forEach(button => {
                                                         button.addEventListener('click', () => {
                                                             const passwordField = button.parentElement.querySelector('[data-bb-password]');
                                                             if (passwordField.getAttribute('type') === 'password') {
                                                                 passwordField.setAttribute('type', 'text');
                                                                 button.innerHTML =
                                                                     `<svg class="icon svg-icon-ti-ti-eye-off" xmlns="http://www.w3.org/2000/svg" width=24 height=24 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" /><path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" /><path d="M3 3l18 18" /></svg>`;
                                                             } else {
                                                                 passwordField.setAttribute('type', 'password');
                                                                 button.innerHTML =
                                                                     `<svg class="icon svg-icon-ti-ti-eye" xmlns="http://www.w3.org/2000/svg" width=24 height=24 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>`;
                                                             }
                                                         });
                                                     });
                                                 });
                                             </script>
                                             <div class="mb-3 position-relative">
                                                 <label class="form-label" for="password_confirmation">
                                                     Nhập lại mật khẩu
                                                 </label>
                                                 <div class="position-relative">
                                                     <span class="auth-input-icon input-group-text"><svg
                                                             class="icon svg-icon-ti-ti-lock"
                                                             xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round">
                                                             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                             <path
                                                                 d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                                                             <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                                             <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                                                         </svg></span>
                                                     <div class="input-group">
                                                         <input type=password name=password_confirmation
                                                             id="password_confirmation" value=""
                                                             class="form-control ps-5" data-counter="250"
                                                             placeholder="Nhập lại mật khẩu" data-bb-password><span
                                                             class="input-password-toggle" data-bb-toggle-password><svg
                                                                 class="icon svg-icon-ti-ti-eye"
                                                                 xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round">
                                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                 <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                                 <path
                                                                     d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                                             </svg></span>
                                                     </div>
                                                 </div>
                                             </div>
                           
                                             <div class="d-grid">
                                                 <button class="btn btn-primary btn-auth-submit" type=submit>Đăng ký<svg
                                                         class="icon svg-icon-ti-ti-arrow-narrow-right"
                                                         xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                         <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                         <path d="M5 12l14 0" />
                                                         <path d="M15 16l4 -4" />
                                                         <path d="M15 8l4 4" />
                                                     </svg></button>
                                             </div>
                                             <div class="mt-3 text-center">
                                                 Đã có một tài khoản?<a href="{{route('login')}}"
                                                     class="ms-1 text-decoration-underline">Đăng nhập</a>
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
     </main>
   
 @endsection
