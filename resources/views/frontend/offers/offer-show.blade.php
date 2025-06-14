@extends('frontend.layouts.app')
@section('title', ucfirst($offer->title . ' - ' . $category->title . ' - Latest Offers - '))
@section('content')
<section class="page-header" style="background-image: url({{asset('frontend/images/breadcrum/show.png')}});">
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li><span>/</span></li>
                <li><a href="{{ route('latest-offers')}}">Latest Offers</a></li>
                <li><span>/</span></li>
                <li> <a href="{{ route('offer-index', $category->slug) }}">
                        {{ $category->title }}
                    </a>
                </li>
                <!-- <li><span>/</span></li>
                <li>Offers Show</li> -->
            </ul>
            <h2>{{$offer->title}}</h2>
        </div>
    </div>
</section>

<section class="news-details py-5 my-0 py-md-5 my-md-4">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="news-details__left">
                    <div class="news-details__img">
                        @if($offer->image)
                        <img src="{{ asset('storage/images/offers/' . $offer->image) }}" alt="" class="img-fluid" style="max-height:550px; object-fit: contain;">
                        @endif
                    </div>
                    <div class="news-details__content">

                        <h3 class="news-details__title">{{$offer->title}}</h3>
                        <p class="news-details__text-1">{!! $offer->body !!}</p>
                    </div>

                </div>

            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__search">

                        <h4 style="background-color:#072762;width:100%;color:white;padding:25px 54px 25px">
                            Other Offers
                        </h4>
                        @forelse ($relatedOffers as $ro)
                        <div class="sidebar__single sidebar__category">
                            <ul class="sidebar__category-list list-unstyled">
                                <li><a
                                        href="{{ route('offer-show', ['category' => $category->slug, 'offer' => $ro->slug]) }}">{{ $ro->title }}<span
                                            class="fa fa-angle-right"></span></a></li>
                            </ul>
                        </div>
                        @empty
                        <li class="text-lg-start text-center">No Related Offer Found</li>
                        @endforelse
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
