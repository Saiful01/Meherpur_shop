<footer>


    <!-- Footer-newsletter -->
    <div class="bg-primary py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 mb-md-3 mb-lg-0">
                    <div class="row align-items-center">
                        <div class="col my-4 my-md-0">
                            <h5 class="font-size-15 ml-4 mb-0 text-center"> <strong> {{__('localize.text')}}</strong></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer-copy-right -->
    <div class="bg-gray-14 py-2">
        <div class="container">
            <div class="flex-center-between d-block d-md-flex">
                <div class="mb-3 mb-md-0">© <a href="#" class="font-weight-bold text-gray-90">Developed By</a> <a class="text-black" href="http://eventtechbd.com/" target="_BLANK">Eventtech</a> </div>
            </div>
        </div>
    </div>
    <!-- End Footer-copy-right -->
</footer>
<!-- ========== SECONDARY CONTENTS ========== -->
<!-- Account Sidebar Navigation -->
@include('/ecommerce.includes.account_authentication')
<!-- End Account Sidebar Navigation -->
<!-- ========== END SECONDARY CONTENTS ========== -->

<!-- Go to Top -->
<a class="js-go-to u-go-to" href="#"
   data-position='{"bottom": 15, "right": 15 }'
   data-type="fixed"
   data-offset-top="400"
   data-compensation="#header"
   data-show-effect="slideInUp"
   data-hide-effect="slideOutDown">
    <span class="fas fa-arrow-up u-go-to__inner"></span>
</a>
<!-- End Go to Top -->

<script src="/ecommerce/vendor/jquery/dist/jquery.min.js"></script>
<script src="/ecommerce/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
<script src="/ecommerce/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="/ecommerce/vendor/bootstrap/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="/ecommerce/vendor/appear.js"></script>
<script src="/ecommerce/vendor/jquery.countdown.min.js"></script>
<script src="/ecommerce/vendor/hs-megamenu/src/hs.megamenu.js"></script>
<script src="/ecommerce/vendor/svg-injector/dist/svg-injector.min.js"></script>
<script src="/ecommerce/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/ecommerce/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="/ecommerce/vendor/fancybox/jquery.fancybox.min.js"></script>
<script src="/ecommerce/vendor/typed.js/lib/typed.min.js"></script>
<script src="/ecommerce/vendor/slick-carousel/slick/slick.js"></script>
<script src="/ecommerce/vendor/appear.js"></script>
<script src="/ecommerce/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

<!-- JS Electro -->
<script src="/ecommerce/js/hs.core.js"></script>
<script src="/ecommerce/js/components/hs.countdown.js"></script>
<script src="/ecommerce/js/components/hs.header.js"></script>
<script src="/ecommerce/js/components/hs.hamburgers.js"></script>
<script src="/ecommerce/js/components/hs.unfold.js"></script>
<script src="/ecommerce/js/components/hs.focus-state.js"></script>
<script src="/ecommerce/js/components/hs.malihu-scrollbar.js"></script>
<script src="/ecommerce/js/components/hs.validation.js"></script>
<script src="/ecommerce/js/components/hs.fancybox.js"></script>
<script src="/ecommerce/js/components/hs.onscroll-animation.js"></script>
<script src="/ecommerce/js/components/hs.slick-carousel.js"></script>
<script src="/ecommerce/js/components/hs.quantity-counter.js"></script>
<script src="/ecommerce/js/components/hs.show-animation.js"></script>
<script src="/ecommerce/js/components/hs.svg-injector.js"></script>
<script src="/ecommerce/js/components/hs.scroll-nav.js"></script>
<script src="/ecommerce/js/components/hs.go-to.js"></script>
<script src="/ecommerce/js/components/hs.selectpicker.js"></script>

<!-- JS Plugins Init. -->
<script>
    $(window).on('load', function () {
        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
            event: 'hover',
            direction: 'horizontal',
            pageContainer: $('.container'),
            breakpoint: 767.98,
            hideTimeOut: 0
        });
    });

    $(document).on('ready', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#header'));

        // initialization of animation
        $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

        // initialization of unfold component
        $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
            afterOpen: function () {
                $(this).find('input[type="search"]').focus();
            }
        });

        // initialization of HSScrollNav component
        $.HSCore.components.HSScrollNav.init($('.js-scroll-nav'), {
            duration: 700
        });

        // initialization of quantity counter
        $.HSCore.components.HSQantityCounter.init('.js-quantity');

        // initialization of popups
        $.HSCore.components.HSFancyBox.init('.js-fancybox');

        // initialization of countdowns
        var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
            yearsElSelector: '.js-cd-years',
            monthsElSelector: '.js-cd-months',
            daysElSelector: '.js-cd-days',
            hoursElSelector: '.js-cd-hours',
            minutesElSelector: '.js-cd-minutes',
            secondsElSelector: '.js-cd-seconds'
        });

        // initialization of malihu scrollbar
        $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

        // initialization of forms
        $.HSCore.components.HSFocusState.init();

        // initialization of form validation
        $.HSCore.components.HSValidation.init('.js-validate', {
            rules: {
                confirmPassword: {
                    equalTo: '#signupPassword'
                }
            }
        });

        // initialization of show animations
        $.HSCore.components.HSShowAnimation.init('.js-animation-link');

        // initialization of fancybox
        $.HSCore.components.HSFancyBox.init('.js-fancybox');

        // initialization of slick carousel
        $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of hamburgers
        $.HSCore.components.HSHamburgers.init('#hamburgerTrigger');

        // initialization of unfold component
        $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
            beforeClose: function () {
                $('#hamburgerTrigger').removeClass('is-active');
            },
            afterClose: function() {
                $('#headerSidebarList .collapse.show').collapse('hide');
            }
        });

        $('#headerSidebarList [data-toggle="collapse"]').on('click', function (e) {
            e.preventDefault();

            var target = $(this).data('target');

            if($(this).attr('aria-expanded') === "true") {
                $(target).collapse('hide');
            } else {
                $(target).collapse('show');
            }
        });

        // initialization of unfold component
        $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

        // initialization of select picker
        $.HSCore.components.HSSelectPicker.init('.js-select');
    });
</script>
