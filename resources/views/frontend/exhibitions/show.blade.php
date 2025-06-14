@extends('frontend.layouts.app')
@section('title', ucfirst($exhibition->title . ' - Exhibitions -'))

@section('content')

<section class="page-header" style="background-image: url({{asset('frontend/images/breadcrum/ex-show.png')}});">
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('frontend.index')}}">Home</a></li>
                <li><span>/</span></li>
                <li><a href="{{ route('exhibitions')}}">Exhibitions</a></li>
                <!-- <li><span>/</span></li>
                <li>{{ $exhibition->title }}</li> -->
            </ul>
            <h2>{{ $exhibition->title }}</h2>
        </div>
    </div>
</section>



<section class="project-full-width py-5 my-0 py-md-5 my-md-4">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="project-full-width__img">
                    <img src="{{ asset('storage/images/exhibition/' . $exhibition->image) }}" alt="" class="img-fluid" style="width: 100%;height:546px;object-fit:cover">
                        <div class="news-one__date">
                            <p>{{ dd_format($exhibition->start_date, 'd-m-Y') }} to
                                    {{ dd_format($exhibition->end_date, 'd-m-Y') }}</p>
                        </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-10 col-lg-10">
                <div class="project-full-width__content mt-0" style="padding-top:30px">
                    <h3 class="project-full-width__title">{{$exhibition->title}}</h3>
                    <p class="project-full-width__text-1">{!! $exhibition->descriptions !!}</p>
                </div>
            </div>
        </div>

    </div>
</section>


@if ($medias->count())
<section class="team-page">
    <div class="container">
        <div class="section-title text-center">
            <!-- <span class="section-title__tagline">INDUSTRIAL EXHIBITIONS
            </span> -->
            <h2 class="section-title__title">Gallery
            </h2>
        </div>

        <div class="row">
        @forelse ($medias as $media)
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="{{ asset('storage/images/exhibition/' . $media->filename) }}" alt="" class="img-fluid" style="height:250px;object-fit:cover">
                        <div class="team-one__social">
                        </div>
                    </div>

                </div>
            </div>
            @empty
                 <div class="text-center pb-4">
                  No Gallery Found
                 </div>
            @endforelse
        </div>
    </div>
</section>
@endif



<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                {{-- <img src="frontend/images/icons8-previous-50.png" alt=""> --}}
            </button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var pswpElement = document.querySelectorAll('.pswp')[0];

            var options = {
                // Add any options you need
            };

            var items = [];

            // Iterate over each element with the class 'masonry-brick'
            document.querySelectorAll('.team-one__single').forEach(function(element, index) {
                // Get the image source from the current element
                var src = element.querySelector('img').getAttribute('src');

                // Add the image data to the items array
                items.push({
                    src: src,
                    w: 1200, // Replace with the actual width of your image
                    h: 800, // Replace with the actual height of your image
                });

                // Set up click event for each image to open PhotoSwipe
                element.addEventListener('click', function(e) {
                    e.preventDefault();
                    var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
                    gallery.init();
                    gallery.goTo(index);
                });
            });
        });
    </script>

@endsection
