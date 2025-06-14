<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    @include('frontend.layouts.header')

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3HBK72XBZC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-3HBK72XBZC');
    </script>

</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="{{ asset('assets/images/loader.png') }}" alt="">
    </div>


    @include('frontend.layouts.nav')


    <div class="stricky-header stricked-menu main-menu main-menu-two">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <div class="page-wrapper" style="">
        @yield('content')
        @include('frontend.layouts.footer')
    </div>
    @include('frontend.layouts.mobile-nav')

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="{{ asset('frontend/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('plugins/notification/snackbar/snackbar.min.js') }}"></script>

    <script src="{{ asset('frontend/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('frontend/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('frontend/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/twentytwenty/twentytwenty.js') }}"></script>
    <script src="{{ asset('frontend/vendors/twentytwenty/jquery.event.move.js') }}"></script>
    <script src="{{ asset('frontend/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('frontend/vendors/timepicker/timePicker.js') }}"></script>


    <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>


    <!-- template js -->
    <script src="{{ asset('frontend/js/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('frontend/js/photoswipe.min.js') }}"></script>

    <script src="{{ asset('frontend/js/kontin.js') }}"></script>
    @yield('js')

</body>

</html>
