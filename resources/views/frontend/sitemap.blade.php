@extends('frontend.layouts.app')
@section('title', 'Sitemap - ')
@section('content')

    <section class="page-header p-0" style="background-image: url(frontend/images/breadcrum/sitemap.jpg);">
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('frontend.index') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li>Sitemap</li>
                </ul>
                <h2>Sitemap</h2>
            </div>
        </div>
    </section>

    <div class="page-content bg-white">


        <section class="content-inner pt-md-5 pt-3 offer-sec-height pb-5">
            <div class="container">
                <div class="h2 fw-600 text-capitalize prime-color section-title__title_new text-center mb-4">
                    Sitemap
                </div>
                <div class="row row-cols-1 row-cols-md-3">
                    <div class="col mb-4">
                        <div>
                            <a href="{{ url('/') }}" class="  d-block text-center  btn-business">
                                Home
                            </a>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div>
                            <a href="{{ url('company-profile') }}" class="  d-block text-center btn-business">
                                Company
                                Profile
                            </a>


                        </div>
                    </div>
                    <div class="col mb-4 ">
                        <div>
                            <a href="{{ url('latest-offers') }}" class="  d-block text-center btn-business">
                                Latest
                                Offers
                            </a>


                        </div>
                    </div>
                    <div class="col mb-4 ">
                        <div>
                            <a href="{{ url('business-process') }}" class="  d-block text-center btn-business">
                                Business Process
                            </a>



                        </div>
                    </div>
                    <div class="col mb-4 ">
                        <div>
                            <a href="{{ url('exhibitions') }}" class="  d-block text-center btn-business">
                                Exhibitions
                            </a>


                        </div>
                    </div>
                    <div class="col mb-4 ">
                        <div>


                            <a href="{{ url('contact-us') }}" class="  d-block text-center btn-business ">
                                Contact
                                Us
                            </a>
                        </div>
                    </div>
                </div>

                <div class="h2 fw-600 text-capitalize prime-color section-title__title_new text-center mb-4 mt-4">
                    Latest Offers
                </div>

                <div class="row row-cols-1 row-cols-md-3">
                    @foreach ($offers as $offer)
                        <div class="col mb-4">
                            <a href="{{ route('offer-show', ['category' => $offer->categories->slug, 'offer' => $offer->slug]) }}"
                                class="  d-block text-center shadow-primary  btn-sitemap" style="height: 100%">
                                {{ $offer->title }}
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
    </div>
@endsection
