  @extends('layout.main')

  @section('content')
      <main>
          <section class="breadcrumb__area include-bg mb-30 text-start pt-30 page_speed_617743483">
              <div class="container">
                  <div class="breadcrumb__content p-relative z-index-1">
                      <h3 class="breadcrumb__title">
                          Login</h3>
                      <div class="breadcrumb__list js_breadcrumb_reduce_length_on_mobile">
                          <span><a href="index.html">Home</a></span><span>
                              Login </span>
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
                                      <img src="{{ asset('client/storage/main/general/placeholder.png') }}"
                                          data-bb-lazy="true" class="auth-card__banner" loading="lazy"
                                          data-src="https://shofy.botble.com/storage/main/general/auth-banner.png"
                                          alt="Login to your account">
                                  </div>
                                  <div class="col-md-6 auth-card__right">
                                      <div class="auth-card__header">
                                          <div class="d-flex flex-column flex-md-row align-items-start gap-3">
                                              <div class="auth-card__header-icon bg-white p-3 rounded">
                                                  <svg class="icon text-primary svg-icon-ti-ti-lock"
                                                      xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                      viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                      <path
                                                          d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                                                      <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                                      <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                                                  </svg>
                                              </div>
                                              <div>
                                                  <h3 class="auth-card__header-title fs-4 mb-1">
                                                      Login
                                                      to
                                                      your
                                                      account
                                                  </h3>
                                                  <p class="auth-card__header-description text-muted">
                                                      Your
                                                      personal
                                                      data
                                                      will
                                                      be
                                                      used
                                                      to
                                                      support
                                                      your
                                                      experience
                                                      throughout
                                                      this
                                                      website,
                                                      to
                                                      manage
                                                      access
                                                      to
                                                      your
                                                      account.
                                                  </p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="auth-card__body">
                                          <form method="POST" action="https://shofy.botble.com/login"
                                              accept-charset="UTF-8" id="botble-ecommerce-forms-fronts-auth-login-form"
                                              class="js-base-form dirty-check" icon="ti ti-lock"
                                              heading="Login to your account"
                                              description="Your personal data will be used to support your experience throughout this website, to manage access to your account."
                                              banner="main/general/auth-banner.png" bannerDirection="horizontal">
                                              <input name=_token type=hidden
                                                  value="SPz1qyncaKbdv25m6D9mAygMzUr373EJVS4dARKR">
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
                                                          placeholder="Email address" name=email type=email id="email">
                                                  </div>
                                              </div>
                                              <div class="mb-3 position-relative">
                                                  <label class="form-label" for="password">
                                                      Password
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
                                                              placeholder="Password" data-bb-password><span
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
                                              <div class="row g-0 mb-3">
                                                  <div class="col-6">
                                                      <input type=hidden name=remember value="0"><label
                                                          class="form-check"><input type=checkbox
                                                              id="remember_dc3c99bb4e249a95567a2bf7d5f327ed" name=remember
                                                              class="form-check-input" value="1"><span
                                                              class="form-check-label">
                                                              Remember
                                                              me
                                                          </span></label>
                                                  </div>
                                                  <div class="col-6 text-end">
                                                      <a href="password/reset.html"
                                                          class="text-decoration-underline">Forgot
                                                          password?</a>
                                                  </div>
                                              </div>
                                              <div class="d-grid">
                                                  <button class="btn btn-primary btn-auth-submit" type=submit>Login<svg
                                                          class="icon svg-icon-ti-ti-arrow-narrow-right"
                                                          xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                          viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                          stroke-width="2" stroke-linecap="round"
                                                          stroke-linejoin="round">
                                                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                          <path d="M5 12l14 0" />
                                                          <path d="M15 16l4 -4" />
                                                          <path d="M15 8l4 4" />
                                                      </svg></button>
                                              </div>
                                              <div class="mt-3 text-center">
                                                  Don&#039;t
                                                  have
                                                  an
                                                  account?<a href="register.html"
                                                      class="ms-1 text-decoration-underline">Register
                                                      now</a>
                                              </div>
                                              <div class="login-options">
                                                  <div class="login-options-title">
                                                      <p>Login
                                                          with
                                                          social
                                                          networks
                                                      </p>
                                                  </div>
                                                  <ul class="social-icons social-login-lg">
                                                      <li><a class="facebook" data-bs-toggle="tooltip"
                                                              data-bs-title="Sign in with Facebook"
                                                              title="Sign in with Facebook" href="login.html"><svg
                                                                  class="icon svg-icon-ti-ti-brand-facebook"
                                                                  xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                                  viewBox="0 0 24 24" fill="none"
                                                                  stroke="currentColor" stroke-width="2"
                                                                  stroke-linecap="round" stroke-linejoin="round">
                                                                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                  <path
                                                                      d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                                                              </svg><span>Sign
                                                                  in
                                                                  with
                                                                  Facebook</span></a>
                                                      </li>
                                                      <li><a class="google" data-bs-toggle="tooltip"
                                                              data-bs-title="Sign in with Google"
                                                              title="Sign in with Google"
                                                              href="https://accounts.google.com/o/oauth2/auth?client_id=329814605456-caictgvcdf9b4es3j2frbu8iisi771ce.apps.googleusercontent.com&amp;redirect_uri=https%3A%2F%2Fshofy.botble.com%2Fauth%2Fcallback%2Fgoogle&amp;scope=openid+profile+email&amp;response_type=code&amp;state=pQFvGZ5FeZBaEY0DkbncR28rWTXEfRt1dnFgiMn7"><svg
                                                                  class="icon svg-icon-ti-ti-brand-google"
                                                                  xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                                  viewBox="0 0 24 24" fill="none"
                                                                  stroke="currentColor" stroke-width="2"
                                                                  stroke-linecap="round" stroke-linejoin="round">
                                                                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                  <path
                                                                      d="M20.945 11a9 9 0 1 1 -3.284 -5.997l-2.655 2.392a5.5 5.5 0 1 0 2.119 6.605h-4.125v-3h7.945z" />
                                                              </svg><span>Sign
                                                                  in
                                                                  with
                                                                  Google</span></a>
                                                      </li>
                                                      <li><a class="github" data-bs-toggle="tooltip"
                                                              data-bs-title="Sign in with GitHub"
                                                              title="Sign in with GitHub" href="login.html"><svg
                                                                  class="icon svg-icon-ti-ti-brand-github"
                                                                  xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                                  viewBox="0 0 24 24" fill="none"
                                                                  stroke="currentColor" stroke-width="2"
                                                                  stroke-linecap="round" stroke-linejoin="round">
                                                                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                  <path
                                                                      d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                                                              </svg><span>Sign
                                                                  in
                                                                  with
                                                                  GitHub</span></a>
                                                      </li>
                                                      <li><a class="linkedin" data-bs-toggle="tooltip"
                                                              data-bs-title="Sign in with Linkedin"
                                                              title="Sign in with Linkedin" href="login.html"><svg
                                                                  class="icon svg-icon-ti-ti-brand-linkedin"
                                                                  xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                                  viewBox="0 0 24 24" fill="none"
                                                                  stroke="currentColor" stroke-width="2"
                                                                  stroke-linecap="round" stroke-linejoin="round">
                                                                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                  <path d="M8 11v5" />
                                                                  <path d="M8 8v.01" />
                                                                  <path d="M12 16v-5" />
                                                                  <path d="M16 16v-3a2 2 0 1 0 -4 0" />
                                                                  <path
                                                                      d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
                                                              </svg><span>Sign
                                                                  in
                                                                  with
                                                                  Linkedin</span></a>
                                                      </li>
                                                      <li><a class="linkedin-openid" data-bs-toggle="tooltip"
                                                              data-bs-title="Sign in with Linkedin OpenID Connect"
                                                              title="Sign in with Linkedin OpenID Connect"
                                                              href="login.html"><svg
                                                                  class="icon svg-icon-ti-ti-brand-linkedin"
                                                                  xmlns="http://www.w3.org/2000/svg" width=24 height=24
                                                                  viewBox="0 0 24 24" fill="none"
                                                                  stroke="currentColor" stroke-width="2"
                                                                  stroke-linecap="round" stroke-linejoin="round">
                                                                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                  <path d="M8 11v5" />
                                                                  <path d="M8 8v.01" />
                                                                  <path d="M12 16v-5" />
                                                                  <path d="M16 16v-3a2 2 0 1 0 -4 0" />
                                                                  <path
                                                                      d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
                                                              </svg><span>Sign
                                                                  in
                                                                  with
                                                                  Linkedin
                                                                  OpenID
                                                                  Connect</span></a>
                                                      </li>
                                                  </ul>
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
      <section class="tp-subscribe-area pt-70 pb-65 theme-bg p-relative z-index-1">
          <div class="tp-subscribe-shape d-none d-sm-block">
              <img src="{{ asset('client/storage/main/general/placeholder.png') }}" data-bb-lazy="true"
                  class="tp-subscribe-shape-1" loading="lazy"
                  data-src="https://shofy.botble.com/themes/shofy/images/newsletter/shape-1.png"
                  alt="Subscribe our Newsletter"><img src="{{ asset('client/storage/main/general/placeholder.png') }}"
                  data-bb-lazy="true" class="tp-subscribe-shape-2" loading="lazy"
                  data-src="https://shofy.botble.com/themes/shofy/images/newsletter/shape-2.png"
                  alt="Subscribe our Newsletter"><img src="{{ asset('client/storage/main/general/placeholder.png') }}"
                  data-bb-lazy="true" class="tp-subscribe-shape-3" loading="lazy"
                  data-src="https://shofy.botble.com/themes/shofy/images/newsletter/shape-3.png"
                  alt="Subscribe our Newsletter"><img src="{{ asset('client/storage/main/general/placeholder.png') }}"
                  data-bb-lazy="true" class="tp-subscribe-shape-4" loading="lazy"
                  data-src="https://shofy.botble.com/themes/shofy/images/newsletter/shape-4.png"
                  alt="Subscribe our Newsletter">
              <div class="tp-subscribe-plane"><img class="tp-subscribe-plane-shape"
                      src="{{ asset('client/themes/shofy/images/newsletter/plane.png') }}"
                      alt="Subscribe our Newsletter"><svg width=399 height=110 class="d-none d-sm-block"
                      viewBox="0 0 399 110" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                          <form method="POST" action="{{route('login')}}"
                              accept-charset="UTF-8" id="botble-newsletter-forms-fronts-newsletter-form"
                              class="subscribe-form dirty-check">
                              <input name=_token type=hidden value="SPz1qyncaKbdv25m6D9mAygMzUr373EJVS4dARKR">
                              <div class="tp-subscribe-input">
                                  <input class="form-control" placeholder="Enter Your Email" id="newsletter-email"
                                      required="required" name=email type=email><button class=""
                                      type=submit>Subscribe</button>
                              </div>
                              <div class="newsletter-message newsletter-success-message page_speed_1938937266">
                              </div>
                              <div class="newsletter-message newsletter-error-message page_speed_1938937266">
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  @endsection
