@extends('frontend.layouts.app')
@section('title', ucfirst($category->title . ' - Latest Offers -'))

@section('content')


    <section class="page-header" style="background-image: url({{asset('frontend/images/breadcrum/offer-inn.png')}});  ">
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('frontend.index')}}">Home</a></li>
                    <li><span>/</span></li>
                    <li><a href="{{ route('latest-offers')}}">Latest Offers</a></li>
                    <li><span>/</span></li>
                    <li>{{$category->title}}</li>
                </ul>
                <h2>{{$category->title}}</h2>
            </div>
        </div>
    </section>

    <section class="news-details py-5 my-0 py-md-5 my-md-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="row">
                    @forelse($offers as $offer)

                        <div class="col-12 col-md-6 mb-3 mb-md-4">
                            <div class="news-details__left" style="height:100%">
                                <div class="services-one__single ele-industrial">

                                    <div class="services-one__content ele-industrial-content">
                                        <h3 class="services-one__title ele-industrial-title">
                                            {{$offer->title}}
                                        </h3>

                                        <div class="services-one__arrow pt-4">
                                            <a href="{{ route('offer-show', ['category' => $category->slug, 'offer' => $offer->slug]) }}"><span class="icon-right-arrow"></span></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        @empty
                                <li>No Offers Found</li>
                            @endforelse
                    </div>

                    <nav aria-label="Page navigation" class="d-flex justify-content-center">
                        <ul class="pagination custome-pagination">
                            <li class="page-item active">
                                {{ $offers->withQueryString()->onEachSide(0)->links('pagination::bootstrap-4') }}
                            </li>
                        </ul>
                    </nav>


                </div>
                <div class="col-xl-4 col-lg-5 ">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__search">

                            <h4 style="background-color:#072762;width:100%;color:white;padding:25px 54px 25px">
                                Other
                                Categories
                            </h4>
                            @forelse ($relatedCategories as $rCategory)
                            <div class="sidebar__single sidebar__category" style="">
                                    <ul class="sidebar__category-list list-unstyled">
                                        <li class="">
                                            <a href="{{ route('offer-index', $rCategory->slug) }}">{{ $rCategory->title }}<span class="fa fa-angle-right"></span></a></li>

                                    </ul>
                            </div>
                            @empty
                                    <li class="text-center text-lg-start">No Category Found</li>
                                @endforelse
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
