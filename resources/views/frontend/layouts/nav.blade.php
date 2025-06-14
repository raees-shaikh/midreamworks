<header class="main-header-two clearfix" style="z-index:3" >
    {{-- <img src="frontend/images/icon/zigzag.svg" alt="" class="img-fluid" style="position: absolute;right:0px"> --}}
    <div class="container">
        <div class="row">

            <nav class="main-menu main-menu-two clearfix bg-white">
                <div class="main-menu-two-wrapper d-flex justify-content-between w-100">
                    <div class="main-menu-two-wrapper__logo p-0">
                        <a href="{{ route('frontend.index') }}">
                            <img src="{{asset('frontend/images/resources/logo.jpg')}}" class="p-0 logo-size" alt="">
                        </a>
                    </div>
                    <div class="main-menu-two-wrapper__main-menu">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>

                        <ul class="main-menu__list" style="color: #354791">
                            <li class="dropdown {{ Route::currentRouteName() == 'frontend.index' ? 'current' : '' }}">
                                <a href="{{ route('frontend.index') }}" style="color: #354791; font-size: 20px">Home</a>
                            </li>
                            <li class="dropdown {{ Route::currentRouteName() == 'company-profile' ? 'current' : '' }}">
                                <a href="{{ route('company-profile') }}" style="color: #354791; font-size: 20px">Company
                                    Profile</a>
                            </li>
                            <li class="dropdown {{ Route::currentRouteName() == 'latest-offers' ? 'current' : '' }}">
                                <a href="{{ route('latest-offers') }}" style="color: #354791; font-size: 20px">Latest
                                    Offers</a>
                            </li>
                            <li class="dropdown {{ Route::currentRouteName() == 'business-process' ? 'current' : '' }}">
                                <a href="{{ route('business-process') }}"
                                    style="color: #354791; font-size: 20px">Business Process</a>
                            </li>
                            <li class="dropdown {{ Route::currentRouteName() == 'exhibitions' ? 'current' : '' }}">
                                <a href="{{ route('exhibitions') }}"
                                 style="color: #354791; font-size: 20px">Exhibitions</a>
                            </li>   
                            <li class="dropdown {{ Route::currentRouteName() == 'contact-us' ? 'current' : '' }} d-block d-xl-none">
                                <a href="{{ route('contact-us') }}"
                                 style="color: #354791; font-size: 20px">Contact Us</a>
                            </li>   

                                <a href="{{ route('contact-us') }}"
                                    style="font-size: 20px; font-weight: 300; padding: 0.42rem 0.82rem;"
                                    class="btn btn-custome btn-contactus d-none d-xl-block">
                                    Contact Us
                                </a>
                        </ul>


                    </div>

                </div>
            </nav>

        </div>
    </div>
</header>


<div class="stricky-header stricked-menu main-menu main-menu-two"  >

    <div class="container">
        <div class="row">

            <div class="sticky-header__content">

            </div>


        </div>
    </div>
</div>
