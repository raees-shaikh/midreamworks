@extends('frontend.layouts.app')
@section('title', '')
@section('content')

    <section style="isolation: isolate;position: relative;z-index:100">
        <img src="frontend/images/icon/zigzag.png" alt="" class="img-fluid zigzagimg user-select-none">
    </section>

    <section style="padding-top:12rem">
        <div class="heroslider py-4 ">
            <div class="swiper-wrapper">

                <div class="swiper-slide">


                    <div class="container" style="">
                        <div class="row d-flex flex-column-reverse flex-lg-row align-items-center justify-content-center">

                            <div class="col-lg-6 ">

                                <div class="py-4 py-lg-0">
                                    <div class="display-5 fw-500 prime-color">
                                        We Work Hand In Hand With Your Group
                                    </div>

                                    <div class="h2 fw-300 mt-2 subtittle prime-color">
                                        For Your Specific Requirments
                                    </div>

                                    <a href="{{ route('latest-offers') }}" class="btn btn-business mt-4 ">
                                        Read More
                                    </a>


                                </div>
                            </div>
                            <div class="col-lg-6 px-3 px-lg-0">
                                <div>

                                    <img src="frontend/images/backgrounds/local-business.png" alt=""
                                        class="img-fluid w-100">
                                </div>
                            </div>


                        </div>
                    </div>




                </div>


                <div class="swiper-slide">


                    <div class="container " style="">
                        <div class="row d-flex flex-column-reverse flex-lg-row align-items-center justify-content-center">

                            <div class="col-lg-6 ">

                                <div class="py-3 py-lg-0">
                                    <div class="display-5 fw-500 prime-color">
                                        One Of The Largest

                                    </div>

                                    <div class=" fw-300 py-2 prime-color h2">
                                        Sellers Of  <br /> Textile Plants & Machinerys
                                    </div>


                                    <a href="{{ route('company-profile') }}" class="btn btn-business mt-4">
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 px-3 px-lg-0">

                                <div>
                                    <img src="frontend/images/backgrounds/largest.png" alt=""
                                        class="img-fluid w-100" style="">
                                </div>

                            </div>


                        </div>
                    </div>


                </div>

                <div class="swiper-slide">
                    <div class="container" style="">
                        <div class="row d-flex flex-column-reverse flex-lg-row align-items-center justify-content-center">

                            <div class="col-lg-6 ">

                                <div class="py-4 py-lg-0">
                                    <div class="display-5 fw-500 prime-color">
                                        We Work With

                                    </div>

                                    <div class="fw-300 mt-2 subtittle prime-color h2">
                                        You For Solution
                                    </div>


                                    <a href="{{ route('contact-us') }}" class="btn btn-business mt-4 ">
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 px-3 px-lg-0">

                                <div>
                                    <img src="frontend/images/backgrounds/industial-solution.png" alt=""
                                        class="img-fluid w-100">
                                </div>


                            </div>


                        </div>
                    </div>

                </div>




            </div>
        </div>
    </section>



    <section class="com__spac " style="isolation:isolate;position: relative;">
        <img src="frontend/images/icon/world.png" alt="" class="img-fluid mapfirstimg user-select-none">
        <img src="frontend/images/icon/circle.svg" alt="" class="img-fluid user-select-none"
            style="position: absolute;right:50px;bottom:0px">

        <div class="container position-relative">
            <div class="row">
                <div class="col-12 col-xl-5 ">
                    <img src="frontend/images/bussiness/aboutindex.png" alt="" class="img-fluid w-100"
                        style="">
                </div>
                <div class="col-12 col-xl-7">
                    <div class="about-leftpadding">
                        <div class="section-title mb-0">
                            <h2 class="section-title__title prime-color mt-4 mt-xl-0" style="font-weight: 600">
                                Company Profile
                            </h2>
                        </div>
                        {{-- <div class="d-block d-xl-none">
                            <img src="frontend/images/bussiness/aboutindex.png" alt="" class="img-fluid w-100"
                            style="   ">
                        </div> --}}
                        <p class="pt-3" style="font-size:18px">
                            <span class="" style="color: #033CA6"> MI DREAM WORKS </span> are leading Indian
                            International Brokers
                            for
                            RELOCATION of  TEXTILE
                            Plants, Machinery & Technology from different Countries worldwide focusing though on CHINA
                            majorly.
                        </p>
                        <p style="font-size:18px">
                            Our company has experience of more than <span class="" style="color:#033CA6"> two
                                decades</span> & has
                            the
                            ability of being most extensive
                            brokers for all kinds of textile plants.
                        </p>

                        <p style="font-size:18px">
                            To name a few past experiences, we have sold more than 500,000 spindles of Ring Spinning Plant &
                            Machineries, 60,000 Rotors, 1000 Looms, 200 Circular Knitting Machines, 100 Flat Knitting, Warp
                            Knitting, Non-Woven plants, Man-made Fibre plants like Polyester POY, FDY, Nylon 66, Viscose
                            Staple
                            Fiber, Viscose filament yarn, Acrylic, Tajima, Barudan Embroidery machines & others.
                        </p>
                        <p class="" style="font-size:18px">
                            MI DREAM WORKS provides its Indian & other Overseas Customers, one of the largest inventory of

                            TEXTILE plants and individual machinery.
                        </p>


                        <a href="{{ route('company-profile') }}" class="btn btn-business mt-4">
                            Read More
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <section class="pt-4 " style="padding-bottom:90px; isolation:isolate;position: relative">
        <img src="frontend/images/icon/bigmap.png" alt="" class="img-fluid user-select-none"
            style="position: absolute;right:-41px;bottom:-70px">

        <div class="container">
            <div class="d-flex flex-column flex-md-row text-center justify-content-between my-5">

                <div class=" h4 fw-600 prime-color text-left">
                    We Serve Below Categories Of
                    <br>
                    Textile Industry From Overseas
                </div>

                <div class="section-title__title_new h2 fw-600 prime-color">
                    Latest Offers
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                @forelse ($categories as $cat)
                    <div class="col wow fadeInLeft animated mb-3 mb-md-4" data-wow-duration="1500ms" data-wow-delay="0ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <div class="services-one__single ele-industrial">
                            <div class="services-one__content  ele-industrial-content">
                                <h3 class="services-one__title ele-industrial-title">
                                    <a href="{{ route('offer-index', $cat->slug) }}">
                                        {{ $cat->title }}
                                    </a>
                                </h3>
                                <div class="services-one__arrow  pt-3">
                                    <a href="{{ route('offer-index', $cat->slug) }}"><span
                                            class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse



            </div>

            <div class="text-center">
                <a href="{{ route('latest-offers') }}" class="btn btn-business mt-4">
                    View All
                </a>
            </div>

        </div>
    </section>

    <section class="bg-manufature " style="position:relative;isolation:isolate">
        <div class="section-title  text-center">

            <div class="h4 fw-400 " style="color: white">
                OEM
            </div>
            <div class="h2 fw-600 section-title__title_new" style="color: white">
                Best Manufacturers
            </div>

        </div>




        <div class="best-manufactures">
            <div class="swiper-wrapper">


                <div class="swiper-slide">


                    <div class="container">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                            <div class="col"><a href="https://www.oerlikon.com/en/brands/oerlikon-barmag/"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve" style="--background:white"></i><span
                                        class="btn-title common-style-span">OERLIKON
                                        BARMAG</span></a></div>
                            <div class="col"><a href="https://www.neumag.com/"
                                    class="btn-style-one blog-two__top-btn w-100 mb-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">NEUMAG
                                        GERMANY</span></a></div>
                            <div class="col"><a href="https://www.farespa.com/"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">FARE
                                        ITALY</span></a></div>
                            <div class="col"><a href="javascript:void(0)"
                                    class="btn-style-one blog-two__top-btn w-100 mb-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">ESL
                                        UK</span></a></div>
                            <div class="col"><a href="https://www.mechanicamordene.it/en/"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">MECCANICA MORDENE
                                        ITALY</span></a></div>
                            <div class="col"><a href="https://www.dilo.de/en/machines/needlelooms/"
                                    class="btn-style-one blog-two__top-btn w-100  mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">DILO DILO
                                        GERMANY</span></a></div>
                            <div class="col"><a href="https://www.autefa.com/autefa-solutions-group"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">AUTEFA</span></a>
                            </div>
                            <div class="col"><a
                                    href="https://www.andritz.com/products-en/group/nonwoven-textile/needlepunch/excelle-range/specialty-needlelooms"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">ANDRTIZ</span></a>
                            </div>
                            <div class="col"><a href="javascript:void(0)"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">FERHER</span></a>
                            </div>
                            <div class="col"><a href="javascript:void(0)"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">ASSELIN</span></a>
                            </div>
                            <div class="col"><a href="javascript:void(0)"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">OCTIR</span></a>
                            </div>
                            <div class="col"><a href="javascript:void(0)"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span
                                        class="btn-title common-style-span">SPINNBAU</span></a></div>
                            <div class="col"><a href="http://www.hergeth.de/"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">HERGETH</span></a>
                            </div>
                            <div class="col"><a href="https://www.huntereng.com/"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">HUNTER</span></a>
                            </div>
                            <div class="col"><a href="https://www.bywaterct.com/"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">BYWATER</span></a>
                            </div>
                            <div class="col"><a href="https://www.sulzer.com/en"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">SULZER
                                        RUTI</span></a></div>
                            <div class="col"><a href="https://www.itemagroup.com/en/"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">ITEMA</span></a>
                            </div>
                            <div class="col"><a href="https://www.lindauerdornier.com/en/"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">LINDAUER
                                        DORNIER</span></a></div>
                            <div class="col"><a href="https://www.toyota-industries.com"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">TOYOTA</span></a>
                            </div>
                            <div class="col"><a href="https://www.tsudakoma.co.jp/english/"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span
                                        class="btn-title common-style-span">TSUDAKOMA</span></a></div>


                        </div>

                    </div>


                </div>



                <div class="swiper-slide">
                    <div class="container">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">

                            <div class="col"><a
                                    href="https://saurer.com/en/systems/allma-systems/allma-systems-industrial-yarn"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">SAURER
                                        ALLMA</span></a></div>
                            <div class="col"><a href="https://www.teijin.com/"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">TEIJIN
                                        SEIKE</span></a></div>
                            <div class="col"><a href="javascript:void(0)"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">SSM</span></a>
                            </div>
                            <div class="col"><a href="javascript:void(0)"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">MENZEL</span></a>
                            </div>
                            <div class="col"><a href="https://www.brueckner.com/en"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span
                                        class="btn-title common-style-span">BRUCKNER</span></a>
                            </div>
                            <div class="col"><a href="https://www.picanol.be/"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">PICANOL</span></a>
                            </div>
                            <div class="col"><a href="https://benningergroup.com/home"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span
                                        class="btn-title common-style-span">BENNINGER</span></a>
                            </div>
                            <div class="col"><a href="https://www.karlmayer.com/en/"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">KARL
                                        MAYER</span></a>
                            </div>
                            <div class="col"><a href="https://www.mayercie.com/en/"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">MAYER</span></a>
                            </div>
                            <div class="col"><a href="https://www.terrot.de/en/"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">TERROT</span></a>
                            </div>
                            <div class="col"><a href="javascript:void(0)"
                                    class="btn-style-one blog-two__top-btn w-100 " target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">LIBA</span></a>
                            </div>
                            <div class="col"><a href="https://www.starlinger.com/en/"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span
                                        class="btn-title common-style-span">STARLINGER</span></a>
                            </div>
                            <div class="col"><a href="https://www.lohiagroup.com/"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">LOHIA</span></a>
                            </div>
                            <div class="col"><a href="https://www.wh.group/int/en/company/w_h_group/"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span
                                        class="btn-title common-style-span">WINDMOLLER</span></a>
                            </div>
                            <div class="col"><a href="https://www.ngr-world.com/"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">NGR
                                        RECYCLING</span></a></div>
                            <div class="col"><a href="https://www.erema.com/"
                                    class="btn-style-one blog-two__top-btn w-100 mb-2 mb-md-3" target="_blank"><i
                                        class="btn-curve"></i><span class="btn-title common-style-span">EREMA
                                        RECYCLING</span></a></div>


                        </div>

                    </div>




                </div>

            </div>
            <div class="bestswipper swiper-pagination"></div>

        </div>

    </section>




    <section class="counters-one m-0" style="padding:50px 0px 50px 0px;isolation:isolate;position: relative">
        <img src="frontend/images/icon/circle.svg" alt="" class="img-fluid user-select-none"
            style="position: absolute;left:0px;bottom:0px">
        <img src="frontend/images/icon/newhalf.png" alt="" class="img-fluid user-select-none"
            style="position: absolute;right:0px;top:50px">

        <div class="section-title  text-center position-relative">

            <div class="h4 fw-400 prime-color">
                About Quality
            </div>
            <div class="h2 fw-600 text-capitalize prime-color">
                Lowest Rates & Best Quality Always

            </div>

        </div>


        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-10">


                    <div class="row row-cols-1  row-cols-md-2 row-cols-lg-3 ">
                        <div class="col">
                            <div class="p-3 h-100 w-100 " style="background-color:#072762;">
                                <ul class="counters-one__box list-unstyled d-flex justify-content-center ">
                                    <li class="counter-one__single wow fadeInUp animated mb-0  d-flex m-0 flex-column align-items-center "
                                        data-wow-delay="100ms"
                                        style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                        <div class="counter-one__icon">
                                            <span class="icon-building"></span>
                                        </div>
                                        <h3 class="odometer odometer-auto-theme" data-count="900">
                                            <div class="odometer-inside"><span class="odometer-digit">
                                                    <span class="odometer-digit-spacer">9</span>
                                                    <span class="odometer-digit-inner">
                                                        <span class="odometer-ribbon">
                                                            <span class="odometer-ribbon-inner">
                                                                <span
                                                                    class="odometer-value">0</span></span></span></span></span><span
                                                    class="odometer-formatting-mark">,</span><span
                                                    class="odometer-digit"><span
                                                        class="odometer-digit-spacer">0</span><span
                                                        class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                                class="odometer-ribbon-inner"><span
                                                                    class="odometer-value">0</span></span></span></span></span><span
                                                    class="odometer-digit">

                                            </div>
                                        </h3>
                                        <p class="counter-one__text text-center">
                                            Plants & Machinery Sold

                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center mt-4 mt-lg-0">
                            <div class="p-3 h-100 w-100" style="background-color:#072762">

                                <ul class="counters-one__box list-unstyled d-flex justify-content-center">
                                    <li class="counter-one__single wow fadeInUp animated mb-0  d-flex m-0 flex-column align-items-center"
                                        data-wow-delay="200ms"
                                        style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                                        <div class="counter-one__icon">
                                            <span class="icon-building-1"></span>
                                        </div>
                                        <h3 class="odometer odometer-auto-theme" data-count="7000">
                                            <div class="odometer-inside">
                                                <span class="odometer-digit">
                                                    <span class="odometer-digit-spacer">7</span>
                                                    <span class="odometer-digit-inner">
                                                        <span class="odometer-ribbon">
                                                            <span class="odometer-ribbon-inner">
                                                                <span class="odometer-value">0</span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="odometer-formatting-mark">,</span>
                                                <span class="odometer-digit">
                                                    <span class="odometer-digit-spacer">0</span>
                                                    <span class="odometer-digit-inner">
                                                        <span class="odometer-ribbon">
                                                            <span class="odometer-ribbon-inner">
                                                                <span class="odometer-value">0</span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </span>


                                            </div>
                                        </h3>

                                        <p class="counter-one__text text-center">
                                            World-Wide Exhibitions Participated
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center mt-4 mt-lg-0">
                            <div class="p-3 h-100 w-100" style="background-color:#072762;">

                                <ul class="counters-one__box list-unstyled d-flex justify-content-center">
                                    <li class="counter-one__single wow fadeInUp animated mb-0 d-flex m-0 flex-column align-items-center"
                                        data-wow-delay="300ms"
                                        style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                                        <div class="counter-one__icon">
                                            <span class="icon-engineer"></span>
                                        </div>
                                        <h3 class="odometer odometer-auto-theme" data-count="33">
                                            <div class="odometer-inside">
                                                <span class="odometer-digit">
                                                    <span class="odometer-digit-spacer">3</span>
                                                    <span class="odometer-digit-inner">
                                                        <span class="odometer-ribbon">
                                                            <span class="odometer-ribbon-inner">
                                                                <span class="odometer-value">3</span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </span>


                                            </div>

                                        </h3>
                                        <p class="counter-one__text text-center">Satisfied Clients</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>


    {{--
    <section class="brand-one brand-two border-0 client-bg" style="padding: 55px 0 119px;">
        <div class="section-title  text-center">

            <div class="h4 fw-600 prime-color">
                Industrial Clients

            </div>
            <div class="h2 fw-600 text-capitalize prime-color" >
                Technical Textile Clients


            </div>

        </div>

        <div class="container ">
            <div class="thm-swiper__slider swiper-container "
                data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 1800 }, "loop": true, "breakpoints": {
         "0": {
         "spaceBetween": 30,
         "slidesPerView": 1
         },
         "375": {
         "spaceBetween": 30,
         "slidesPerView": 1
         },
         "575": {
         "spaceBetween": 30,
         "slidesPerView": 3
         },
         "767": {
         "spaceBetween": 50,
         "slidesPerView": 4
         },
         "991": {
         "spaceBetween": 50,
         "slidesPerView": 4
         },
         "1199": {
         "spaceBetween": 50,
         "slidesPerView": 5
         }
         }}'>
                <div class="swiper-wrapper same-height">

                    <div class="swiper-slide ">
                        <a href="{{ asset('frontend/images/client/logoarvind.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logoarvind.png') }}" alt="">
                        </a>
                    </div>
                    <!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logocentenary.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logocentenary.png') }}" alt="">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logocheviot.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logocheviot.png') }}" alt="">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logodaman.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logodaman.png') }}" alt="">
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logodcm.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logodcm.png') }}" alt="">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logodfr.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logodfr.png') }}" alt="">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logodiv.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logodiv.png') }}" alt="">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logoflexi.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logoflexi.png') }}" alt="">
                        </a>
                    </div>



                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logogeo.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logogeo.png') }}" alt="">
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logogreenpro.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logogreenpro.png') }}" alt="">
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logogtf.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logogtf.png') }}" alt="">
                        </a>
                    </div>



                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logoiff.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logoiff.png') }}" alt="">
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logoimbb.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logoimbb.png') }}" alt="">
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logoinvermex.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logoinvermex.png') }}" alt="">
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="{{ asset('') }}" target="_blank">
                            <img src="{{ asset('frontend/images/brand/brand-1-3.png') }}" alt="">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logojagdamba.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logojagdamba.png') }}" alt="">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logojeevan.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logojeevan.png') }}" alt="">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logokanodia.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logokanodia.png') }}" alt="">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logokhosla.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logokhosla.png') }}" alt="">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logomayur.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logomayur.png') }}" alt="">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logomerit.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logomerit.png') }}" alt="">
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logomurugappa.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logomurugappa.png') }}" alt="">
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logoparrys.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logoparrys.png') }}" alt="">
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logopolyspin.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logopolyspin.png') }}" alt="">
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logosafe.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logosafe.png') }}" alt="">
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logosanrhea.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logosanrhea.png') }}" alt="">
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logoshri.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logoshri.png') }}" alt="">
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logoshri1.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logoshri1.png') }}" alt="">
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logosrf.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logosrf.png') }}" alt="">
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logotara.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logotara.png') }}" alt="">
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logotech.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logotech.png') }}" alt="">
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logotechfab.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logotechfab.png') }}" alt="">
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logotuflex.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logotuflex.png') }}" alt="">
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logowinner.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logowinner.png') }}" alt="">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logozoom.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logozoom.png') }}" alt="">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/client/logomanas-1.png') }}" target="_blank">
                            <img src="{{ asset('frontend/images/client/logomanas-1.png') }}" alt="">
                        </a>
                    </div>









                </div>
            </div>
        </div>
    </section> --}}
    @if ($data)
        <div class="container ">
            <div class="section-title text-center">
                <h2 class="h2 fw-600 text-capitalize prime-color">Technical Data </h2>
            </div>
            <div class="row justify-content-center mb-2">
                <div class="col-md-4 mx-auto text-center my-2">
                    <a href="{{ asset('storage/data/' . $data->filename) }}" class=" btn-pdf" target="_blank">
                        <img src="{{ asset('frontend/images/pdf.png') }}" alt="" class="mr-1"> Open PDF</a>
                </div>
            </div>
        </div>
    @endif
@endsection
@section('js')
    <script>
        var swiper = new Swiper('.best-manufactures', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        var swiper = new Swiper('.heroslider', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 2100,
                disableOnInteraction: true,
            },


        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.2.228/pdf.min.js"></script>


    <script>
        var _PDF_DOC,
            _CURRENT_PAGE,
            _TOTAL_PAGES,
            _PAGE_RENDERING_IN_PROGRESS = 0,
            _CANVAS = document.querySelector('#pdf-canvas');





        var _PDF_DOC,
            _CURRENT_PAGE,
            _TOTAL_PAGES,
            _PAGE_RENDERING_IN_PROGRESS = 0,
            _CANVAS = document.querySelector('#pdf-canvas');

        // initialize and load the PDF
        async function showPDF(pdf_url) {
            document.querySelector("#pdf-loader").style.display = 'block';

            // get handle of pdf document
            try {
                _PDF_DOC = await pdfjsLib.getDocument({
                    url: pdf_url
                });
            } catch (error) {
                alert(error.message);
            }

            // total pages in pdf
            _TOTAL_PAGES = _PDF_DOC.numPages;

            // Hide the pdf loader and show pdf container
            document.querySelector("#pdf-loader").style.display = 'none';
            document.querySelector("#pdf-contents").style.display = 'block';
            document.querySelector("#pdf-total-pages").innerHTML = _TOTAL_PAGES;

            // show the first page
            showPage(1);
        }

        // load and render specific page of the PDF
        async function showPage(page_no) {
            _PAGE_RENDERING_IN_PROGRESS = 1;
            _CURRENT_PAGE = page_no;

            // disable Previous & Next buttons while page is being loaded
            document.querySelector("#pdf-next").disabled = true;
            document.querySelector("#pdf-prev").disabled = true;

            // while page is being rendered hide the canvas and show a loading message
            document.querySelector("#pdf-canvas").style.display = 'none';
            document.querySelector("#page-loader").style.display = 'block';

            // update current page
            document.querySelector("#pdf-current-page").innerHTML = page_no;

            // get handle of page
            try {
                var page = await _PDF_DOC.getPage(page_no);
            } catch (error) {
                alert(error.message);
            }

            // original width of the pdf page at scale 1
            var pdf_original_width = page.getViewport(1).width;

            // as the canvas is of a fixed width we need to adjust the scale of the viewport where page is rendered
            var scale_required = _CANVAS.width / pdf_original_width;

            // get viewport to render the page at required scale
            var viewport = page.getViewport(scale_required);

            // set canvas height same as viewport height
            _CANVAS.height = viewport.height;

            // setting page loader height for smooth experience
            document.querySelector("#page-loader").style.height = _CANVAS.height + 'px';
            document.querySelector("#page-loader").style.lineHeight = _CANVAS.height + 'px';

            var render_context = {
                canvasContext: _CANVAS.getContext('2d'),
                viewport: viewport
            };

            // render the page contents in the canvas
            try {
                await page.render(render_context);
            } catch (error) {
                alert(error.message);
            }

            _PAGE_RENDERING_IN_PROGRESS = 0;

            // re-enable Previous & Next buttons
            document.querySelector("#pdf-next").disabled = false;
            document.querySelector("#pdf-prev").disabled = false;

            // show the canvas and hide the page loader
            document.querySelector("#pdf-canvas").style.display = 'block';
            document.querySelector("#page-loader").style.display = 'none';
        }

        // click on "Show PDF" buuton
        document.querySelector("#show-pdf-button").addEventListener('click', function() {
            this.style.display = 'block';
            showPDF('pdf/Saturn-Technical-Data.pdf');
        });

        // click on the "Previous" page button
        document.querySelector("#pdf-prev").addEventListener('click', function() {
            if (_CURRENT_PAGE != 1)
                showPage(--_CURRENT_PAGE);
        });

        // click on the "Next" page button
        document.querySelector("#pdf-next").addEventListener('click', function() {
            if (_CURRENT_PAGE != _TOTAL_PAGES)
                showPage(++_CURRENT_PAGE);
        });
    </script>

@endsection
