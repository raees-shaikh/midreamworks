<footer class="site-footer">
    {{-- <div class="site-footer-map" style="background-image: url(frontend/images/backgrounds/footer-bg.jpg)"> </div> --}}
    <div style="background-image: url('{{ asset("frontend/images/backgrounds/ftrbg.png") }}'); background-repeat: no-repeat; background-size: cover;">


        <div class="site-footer__top">
            <div class="container">
                <div class="site-footer__top-inner">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__about-logo">
                                    <a href="{{route('frontend.index')}}">
                                        <img src="{{ asset('frontend/images/resources/logo.jpg')}}" alt=""
                                        style="width:138px;"
                                        >
                                    </a>
                                </div>

                                <p class="footer-widget__about-text" style="font-size:15px;line-height:1.6">
                                    Mi Dream Works are leading Indian International Brokers for RELOCATION of  TEXTILE Plants, Machinery & Technology from different Countries worldwide focusing though on CHINA majorly.
                                </p>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-md-6 wow fadeInUp d-flex justify-content-start justify-content-md-center" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__links clearfix">
                                <h3 class="footer-widget__title">Useful Links</h3>
                                <ul class="footer-widget__links-list list-unstyled">
                                    <li><a href="{{ route('frontend.index')}}">     Home</a></li>
                                    <li><a href="{{ route('company-profile')}}">     Company Profile</a></li>
                                    <li><a href="{{route('latest-offers')}}">      Latest Offers</a></li>
                                    <li><a href="{{ route('business-process')}}">   Business Process</a></li>
                                    <li><a href="{{ route('exhibitions')}}">   Exhibitions</a></li>
                                    <li><a href="{{ route('contact-us')}}">   Contact Us</a></li>
                                    <li><a href="{{ route('sitemap')}}">  Sitemap</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                <div class="footer-widget__column d-flex justify-content-start justify-content-lg-end mt-5 mt-lg-0">
                                    <div>
                                        <h3 class="footer-widget__title">Contact</h3>
                                        <ul class="list-unstyled footer-widget__contact-list">

                                            <li>
                                                <div class="icon">
                                                    <span class="icon-email"></span>
                                                </div>
                                                <div class="text">
                                                    <p><a href="mailto:v@midreamworks.com">v[at]midreamworks[dot]com</a></p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-pin"></span>
                                                </div>
                                                <div class="text">
                                                    <p> Coimbatore | Mumbai | Ahmedabad </p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="footer-widget__about-social mt-3">
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                            <a href="#"><i class="fab fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        {{-- <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__newsletter">
                                <h3 class="footer-widget__title">Newsletter</h3>
                                <p class="footer-widget__newsletter-text">There are many of simple lorem available
                                    for not, but the majority alteration.</p>
                                <form class="footer-widget__newsletter-form mc-form" data-url="#">
                                    <div class="footer-widget__newsletter-input-box">
                                        <input type="email" placeholder="Email address" name="EMAIL">
                                        <button type="submit" class="footer-widget__newsletter-btn"><i class="icon-sent-mail"></i></button>
                                    </div>
                                </form>
                                <div class="mc-form__response"></div><!-- /.mc-form__response -->
                                <div class="footer-widget__newsletter-bottom">
                                    <div class="footer-widget__newsletter-bottom-icon">
                                        <i class="fa fa-circle"></i>
                                    </div>
                                    <div class="footer-widget__newsletter-bottom-text">
                                        <p>I agree to all terms and policies</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>



                </div>
            </div>
        </div>

        <div class="site-footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer__bottom-inner">
                            <p class="site-footer__bottom-text text-white">Copyright © {{ date('Y') }} All Rights Reserved Mi Dream Works | Designed & Developed By <a href="https://www.acetrot.com/" target="__blank" class="text-white">Acetrot.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<script>
    @if (Session::get('alert-type') == 'success')
        @if (Session::has('message'))
            Snackbar.show({
                text: "{{ Session::get('message') }}",
                pos: 'top-right',
                actionTextColor: '#fff',
                backgroundColor: '#1abc9c'
            });
        @endif
    @elseif (Session::get('alert-type') == 'info')
        @if (Session::has('message'))
            Snackbar.show({
                text: "{{ Session::get('message') }}",
                pos: 'top-right',
                actionTextColor: '#fff',
                backgroundColor: '#2196f3'
            });
        @endif
    @elseif (Session::get('alert-type') == 'error')
        @if (Session::has('message'))
            Snackbar.show({
                text: "{{ Session::get('message') }}",
                pos: 'top-right',
                actionTextColor: '#fff',
                backgroundColor: '#e7515a'
            });
        @endif
    @else
        @if (Session::has('message'))
            Snackbar.show({
                text: "{{ Session::get('message') }}",
                pos: 'top-right',
                actionTextColor: '#fff',
                backgroundColor: '#3b3f5c'
            });
        @endif
    @endif
</script>
