@extends('frontend.layouts.app')
@section('title', 'Exhibitions - ')
@section('content')
<section class="page-header" style="background-image: url(frontend/images/breadcrum/new-exhibition.png);">
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li><span>/</span></li>
                <li>Exhibitions</li>
            </ul>
            <h2>Exhibitions</h2>
        </div>
    </div>
</section>
<section class="services-one services-page py-5 my-0 py-md-5 my-md-4">
    <div class="container">
        <div class="row">
        @forelse($exhibitions as $exhibition)
            <div class="col-xl-4 col-lg-4 wow fadeInLeft animated" data-wow-duration="1500ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                <!--Services One Single-->
                <div class="services-one__single">
                    <div class="services-one__img">
                        <img src="{{ asset('storage/images/exhibition/' . $exhibition->image) }}" alt="" class="img-fluid" style="height: 250px;object-fit:cover">

                        <div class="news-one__date">
                            <p>{{dd_format($exhibition->start_date, 'd-m-Y')}} to {{dd_format($exhibition->end_date, 'd-m-Y')}}</p>
                        </div>

                    </div>
                    <div class="services-one__content services-one__content_padding " >
                        <h3 class="services-one__title"><a href="{{ route('show', $exhibition->slug) }}">{{$exhibition->title}}</a>
                        </h3>
                        <p class="services-one__text">{!! Str::words($exhibition->descriptions, 10) !!}.</p>
                        <div class="services-one__arrow">
                            <a href="{{ route('show', $exhibition->slug) }}"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 m-b30">
              <p class="text-center">No Exhibitions Found</p>
            </div>
         @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center pt-5">
                <nav aria-label="Page navigation pb-5">
                    <ul class="pagination mipagination">
                        <li class="page-item "> {{ $exhibitions->onEachSide(1)->links('pagination::bootstrap-4') }}

                        </li>
                    </ul>
                </nav>
            </div>
</section>


@endsection
