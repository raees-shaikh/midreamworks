@extends('frontend.layouts.app')
@section('title', 'Latest Offers - ')
@section('content')

<section class="page-header" style="background-image: url({{asset('frontend/images/breadcrum/offer-index.png')}});">
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{route('frontend.index')}}">Home</a></li>
                <li><span>/</span></li>
                <li>Latest Offers</li>
            </ul>
            <h2>Latest Offers</h2>
        </div>
    </div>
</section>

<section class="services-one services-two cust-padd" style="background-color: #f3f3f3">
            <div class="container">

                <div class="row">
                @forelse ($categories as $cat)
                    <div class="col-xl-4 col-lg-4 mb-3 mb-md-4 wow fadeInLeft animated animated" data-wow-duration="1500ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <!--Services One Single-->
                        <div class="services-one__single ele-industrial">

                            <div class="services-one__content ele-industrial-content">
                                <h3 class="services-one__title ele-industrial-title">{{$cat->title}}
                                </h3>

                                <div class="services-one__arrow pt-4">
                                    <a href="{{ route('offer-index', $cat->slug) }}"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
                </div>
            </div>


         

            <div class="d-flex justify-content-center pt-5">
                <nav aria-label="Page navigation pb-5">
                    <ul class="pagination mipagination custome-pagination">
                        <li class="page-item "> {{ $categories->onEachSide(0)->links('pagination::bootstrap-4') }}
    
                        </li>
                    </ul>
                </nav>
            </div>
    
</section>







@endsection
