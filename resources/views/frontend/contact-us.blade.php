@extends('frontend.layouts.app')
@section('title', 'Contact Us - ')
@section('content')

<section class="page-header" style="background-image: url(frontend/images/breadcrum/contactus.png);">
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('frontend.index')}}">Home</a></li>
                <li><span>/</span></li>
                <li>Contact Us</li>
            </ul>
            <h2>Contact Us</h2>
        </div>
    </div>
</section>


<section class="location  pt-5 pb-4 pt-md-5 pb-md-5 mt-0 mt-md-4">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
               <!--Location Single-->
                <div class="location__single">
                    <div class="location__img">
                        <img src="frontend/images/contactus/coimbuter.png" alt="">
                    </div>
                    <div class="location__content">
                        <h3 class="location__title mb-0">
                            Coimbatore </h3>
                        <ul class="list-unstyled loaction__list">

                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:v@midreamworks.com">v[at]midreamworks[dot]com</a></p>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
               <!--Location Single-->
                <div class="location__single">
                    <div class="location__img">
                        <img src="frontend/images/contactus/mumbai.png" alt="">
                    </div>
                    <div class="location__content">
                        <h3 class="location__title mb-0">Mumbai</h3>
                        <ul class="list-unstyled loaction__list">

                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:v@midreamworks.com">
                                        v[at]midreamworks[dot]com</a></p>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
               <!--Location Single-->
                <div class="location__single">
                    <div class="location__img">
                        <img src="frontend/images/contactus/ahemdabaad.png" alt="">
                    </div>
                    <div class="location__content">
                        <h3 class="location__title mb-0">Ahmedabad</h3>
                        <ul class="list-unstyled loaction__list">

                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:v@midreamworks.com">v[at]midreamworks[dot]com</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="contact-page pb-4 pb-md-5 mb-0 mb-md-4">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Ask Any question</span>
            <h2 class="section-title__title">Feel Free to Contact</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-page__form">
                    <form action="{{route('frontend.contact.submit')}}" method="POST">
                    @csrf
                    <input type="hidden" class="form-control" name="page_name" value="Contact">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Your Full Name"  name="name"
                            placeholder="Full Name" minlength="3" maxlength="30" value="{{old('name')}}" required>
                            @if ($errors->has('name'))
                                            <div id="message-error " class="text-danger">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="email" placeholder="Email Address" name="email" placeholder="Email"
                                                minlength="5" maxlength="40" value="{{old('email')}}" required>
                                    @if ($errors->has('email'))
                                            <div id="message-error " class="text-danger">
                                                {{ $errors->first('email') }}
                                            </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" name="phone" name="phone"
                                                placeholder="Phone No." minlength="10" maxlength="10" value="{{old('phone')}}" required>
                                    @if ($errors->has('phone'))
                                            <div id="message-error " class="text-danger">
                                                {{ $errors->first('phone') }}
                                            </div>
                                        @endif
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" name="subject" placeholder="Subject"
                                                minlength="3" maxlength="100" value="{{old('Subject')}}" required>
                                                @if ($errors->has('subject'))
                                            <div id="message-error " class="text-danger">
                                                {{ $errors->first('subject') }}
                                            </div>
                                        @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="comment-form__input-box">
                                    <textarea name="message" minlength="5" maxlength="250" placeholder="Message" required>{{old('message')}}</textarea>
                                    @if ($errors->has('message'))
                                            <div id="message-error " class="text-danger">
                                                {{ $errors->first('message') }}
                                            </div>
                                        @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                               <div class="contact-page__btn-box">
                                <!-- <a href="" class="btn btn-business mt-4 py-3" style="">
                                    Send a message
                                </a> -->
                                <button name="submit" type="submit" value="submit"
                                            class="btn btn-business mt-4 py-3">Submit Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection



@section('js')
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

@endsection
