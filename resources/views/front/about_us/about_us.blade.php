@extends('layouts.app.front-app')
@section('title', 'About Us - '.env('APP_NAME'))
@section('content')

<div class="page-wrap py-60">
    <div class="container">
        <section class="contact-page about-page">
            @if($aboutusbanner != null)
            @foreach($aboutusbanner as $values)
            <div class="contact-us-img" @if($values->vLogo != null) style="background-image: url({{asset('uploads/banner/'.$values->vLogo)}});" @endif>
                <div class="content">
                    <h1 class="h1">
                        @if($values->vTitle != null){{$values->vTitle}}@endif
                    </h1>
                </div>
            </div>
            @endforeach
            @endif
        </section>

        <section class="pt-90 book-in-ride">
           <h2 class="h2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras netus commodo praesent laoreet. Faucibus tincidunt tellus.</h2>
            <div class="row">
                <div class="col-xl-8 col-lg-9 mx-auto">
                    <div class="book-ride-card-wrap about mt-60">
                        @if($aboutusimages != null)
                        @foreach($aboutusimages as $values)
                        <div class="book-card card img">
                            @if($values->vFile != null)
                            <img src="{{asset('uploads/page_builder/'.$values->vFile)}}" alt="about-img"  class="img-cover" width="410" height="320">
                            @else
                            <img src="{{asset('front/assets/img/no_image.png')}}" alt="about-img"  class="img-cover" width="410" height="320">
                            @endif
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-90 book-in-ride">
            @if($aboutusimagewithtext != null)
            @foreach($aboutusimagewithtext as $values)
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <h2 class="h2">{{$values->vTitle}}</h2>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-lg-5">
                    <div class="about-desc-img">
                        @if($values->vFile != null && file_exists(public_path()."/uploads/page_builder/".$values->vFile))
                        <img src="{{asset('uploads/page_builder/'.$values->vFile)}}" alt="about-img"  class="img-cover" width="559" height="338">
                        @else
                        <img src="{{asset('front/assets/img/no_image.png')}}" alt="about-img"  class="img-cover" width="559" height="338">
                        @endif
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-us-decription">
                         @if($values->tDescription != null)
                         {!! $values->tDescription !!}
                         @endif
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </section>
        <section class="pt-90 skilled-type">
            <h2 class="h2">Lorem ipsum dolor sit amet</h2>
            <p class="title">Lorem ipsum dolor sit amet</p>
            <div class="skilled-type-wrap mt-60">
                @if($aboutusgetrideanytime != null)
                @foreach($aboutusgetrideanytime as $values)
                <div class="skilled-box">
                    <div class="skilled-box-left">
                        <div class="h3">
                           @if($values->vTitle != null){{$values->vTitle}}@endif
                        </div>
                        <div class="left-content mt-25">
                            <p>
                               @if($values->tDescription != null){{$values->tDescription}}@endif
                            </p>
                        </div>
                    </div>
                    <div class="skilled-box-right">
                        <div class="skilled-img">
                            @if($values->vImage != null && file_exists(public_path()."/uploads/get_ride_anytime/".$values->vImage))
                            <img src="{{asset('uploads/get_ride_anytime/'. $values->vImage)}}" alt="digital-paymant"  title="digital-paymant" class="img-contain" width="54" height="54">
                            @else
                            <img src="{{asset('front/assets/img/no_image.png')}}" alt="digital-paymant"  title="digital-paymant" class="img-contain" width="54" height="54">
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </section>
        <section class="pt-90 dow-app">
            <div class="row">
            <div class="col-md-6">
                <div class="dow-app-text" >
                    <h2 class="h2 sub">Download the <br> app & ride now!</h2>
                <p class="mt-15">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet
                </p>
                <div class="dow-btn-grup mt-40">
                    @if($android_playstore_logo->vValue != null && file_exists(public_path()."/uploads/logo/".$android_playstore_logo->vValue))
                    <a rel="dofollow" href="@if($android_playstore_link->vValue != null){{$android_playstore_link->vValue}}@endif"
                    target="_blank" class="dow-btn"><img src="{{asset('uploads/logo/'.$android_playstore_logo->vValue)}}" alt="play-store" class="img-fluid" width="165" height="45"></a>
                    @else
                    <img src="{{asset('front/assets/img/no_image.png')}}" alt="play-store" class="img-fluid" width="165" height="45">
                    @endif
                    @if($apple_appstore_logo->vValue != null && file_exists(public_path()."/uploads/logo/".$apple_appstore_logo->vValue))
                    <a rel="dofollow" href="@if($apple_appstore_link->vValue != null){{$apple_appstore_link->vValue}}@endif"
                    target="_blank" class="dow-btn"><img src="{{asset('uploads/logo/'.$apple_appstore_logo->vValue)}}" alt="appstore" class="img-fluid" width="165" height="45"></a>
                    @else
                    <img src="{{asset('front/assets/img/no_image.png')}}" alt="play-store" class="img-fluid" width="165" height="45">
                    @endif
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="banner-right-img">
                    <img src="{{asset('front/assets/img/scree-12.png')}}" alt="banner-left"  class="img-fluid" width="380" height="420">
                </div>
            </div>
            </div>
        </section>
    </div>
</div>

@endsection

@section('custom-js')
<script>
$(document).ready(function() {
    $(".owl-carousel").owlCarousel();
});
AOS.init();
</script>
@endsection
