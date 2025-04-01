<script data-cfasync="false" src="{{ asset('client/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
</script>
<script>
    window.currencies = JSON.parse(
        '{\u0022display_big_money\u0022:false,\u0022billion\u0022:\u0022billion\u0022,\u0022million\u0022:\u0022million\u0022,\u0022is_prefix_symbol\u0022:false,\u0022symbol\u0022:\u0022\\u20ab\u0022,\u0022title\u0022:\u0022VND\u0022,\u0022decimal_separator\u0022:\u0022.\u0022,\u0022thousands_separator\u0022:\u0022,\u0022,\u0022number_after_dot\u0022:0,\u0022show_symbol_or_title\u0022:true}'
    );
</script>
<script src={{ asset('client/themes/shofy/js/jquery-3.7.1.min.js') }}></script>
<script defer src={{ asset('client/themes/shofy/plugins/bootstrap/bootstrap.min.js') }}></script>
<script defer src={{ asset('client/themes/shofy/js/meanmenu.js') }}></script>
<script defer src={{ asset('client/themes/shofy/plugins/swiper/swiper-bundlec8c4.js?v=1.3.1') }}></script>
<script defer src={{ asset('client/themes/shofy/js/countdown.js') }}></script>
<script defer src={{ asset('client/themes/shofy/js/themec8c4.js?v=1.3.1') }}></script>
<script src={{ asset('client/themes/shofy/plugins/waypoints/jquery.waypoints.min.js') }}></script>
<script src={{ asset('client/themes/shofy/js/range-slider.js') }}></script>
<script src={{ asset('client/themes/shofy/js/nice-select.js') }}></script>
<div class="modal fade tp-product-modal" id="product-quick-view-modal" tabindex="-1"
    aria-labelledby="product-quick-view-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered justify-content-center">
        <div class="modal-content"></div>
    </div>
</div>
<div data-bb-toggle="quick-shop-modal" class="modal fade" id="quick-shop-modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"><button type=button class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
            <div class="modal-body"></div>
        </div>
    </div>
</div>
<script src={{ asset('client/vendor/core/plugins/ecommerce/libraries/slick/slick.minc8c4.js?v=1.3.1') }}></script>
<script src={{ asset('client/vendor/core/plugins/ecommerce/libraries/lightgallery/js/lightgallery.min.js') }}></script>
{{-- <script src={{ asset('client/vendor/core/plugins/ecommerce/js/change-product-swatches.js') }}></script>
<script src={{ asset('client/vendor/core/plugins/ecommerce/js/change-product-optionsc8c4.js?v=1.3.1') }}></script> --}}
<script src={{ asset('client/vendor/core/core/js-validation/js/js-validationf700.js?v=1.0.1') }}></script>
<script>
    jQuery(document).ready(function() {
        'use strict';
        $("#botble-newsletter-forms-fronts-newsletter-form").each(function() {
            $(this).validate({
                errorElement: 'div',
                errorClass: 'invalid-feedback',
                errorPlacement: function(error, element) {
                    if (element.closest('[data-bb-toggle="tree-checkboxes"]').length) {
                        error.insertAfter(element.closest(
                            '[data-bb-toggle="tree-checkboxes"]'));
                    } else if (element.parent('.input-group').length || element.prop(
                            'type') === 'checkbox' || element.prop('type') === 'radio') {
                        error.insertAfter(element.parent());
                    } else if ($(element).data('select2')) {
                        error.insertAfter(element.next('span'));
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function(element) {
                    $(element).closest('.form-control').removeClass('is-valid').addClass(
                        'is-invalid');
                },
                unhighlight: function(element) {
                    $(element).closest('.form-control').removeClass('is-invalid').addClass(
                        'is-valid');
                },
                success: function(element) {
                    $(element).closest('.form-control').removeClass('is-invalid').addClass(
                        'is-valid');
                },
                focusInvalid: false,
                rules: JSON.parse(
                    '{\u0022email\u0022:{\u0022laravelValidation\u0022:[[\u0022Required\u0022,[],\u0022The email field is required.\u0022,true],[\u0022Email\u0022,[],\u0022The email must be a valid email address.\u0022,false]],\u0022laravelValidationRemote\u0022:[[\u0022Unique\u0022,[\u0022email\u0022,\u0022eyJpdiI6InFKMEVzTlJQaDJ5dkxHL3VjVDYwbHc9PSIsInZhbHVlIjoidXRYTWE5d3J5WmxPMWI1OUFwZWRzMVJLeUV4aU5oTEdmSjB4VytkUklMdHpqWmg3OXV3RXhLeDNGK29RS2h5OHZkM3o3dkErNk42RGZYSWNPdDR0WlE9PSIsIm1hYyI6Ijg3MDc0ZmQwY2JhZjYzMzYwYmZiMWVkOWQzMGNiN2JjOTc1MGExNWNmOTkxYWRlNjM5NGEyODBhYWZkYzg3ODAiLCJ0YWciOiIifQ==\u0022,false],\u0022The email has already been taken.\u0022,false]]},\u0022status\u0022:{\u0022laravelValidation\u0022:[[\u0022In\u0022,[\u0022subscribed\u0022,\u0022unsubscribed\u0022],\u0022The selected status is invalid.\u0022,false]]}}'
                )
            });
        });
    });
</script>
<script defer src={{ asset('client/vendor/core/packages/theme/plugins/lazyload.minc8c4.js?v=1.3.1') }}></script>
<script src={{ asset('client/vendor/core/plugins/cookie-consent/js/cookie-consent0ff5.js?v=1.0.2') }}></script>
<script src={{ asset('client/vendor/core/plugins/sale-popup/js/sale-popup5438.js?v=1.2.0') }}></script>
<script
    src={{ asset('client/vendor/core/plugins/ecommerce/libraries/lightgallery/plugins/lg-thumbnail.minc8c4.js?v=1.3.1') }}>
</script>
<script src={{ asset('client/vendor/core/plugins/ecommerce/js/front-ecommerce8913.js?v=1.3.1.3') }}></script>
<script src={{ asset('client/vendor/core/plugins/ecommerce/js/front-reviewc8c4.js?v=1.3.1') }}></script>

<script async defer src='https://www.googletagmanager.com/gtag/js?id=G-76NX8HY29D'></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-76NX8HY29D');
</script>
<script src={{ asset('client/vendor/core/packages/theme/js/toast.js') }}></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        window.Theme = window.Theme || {};
        Theme.lazyLoadInstance = new LazyLoad({
            elements_selector: '[data-bb-lazy="true"]:not(.loaded)',
        });
    });
    document.addEventListener('shortcode.loaded', function() {
        Theme.lazyLoadInstance.update()
    });
</script>
{{-- <script src={{ asset('client/vendor/core/plugins/announcement/js/announcementc8c4.js?v=1.3.1') }}></script> --}}

<script>
    window.addEventListener('load', function() {
        if (typeof gtag !== 'undefined') {
            gtag('consent', 'default', {
                'ad_storage': 'denied'
            });
            document.addEventListener('click', function(event) {
                if (event.target.classList.contains('js-cookie-consent-agree')) {
                    gtag('consent', 'update', {
                        'ad_storage': 'granted'
                    });
                }
            });
        }
    });
</script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
