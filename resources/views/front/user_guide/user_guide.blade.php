@extends('layouts.app.front-app')
@section('title', 'User Guide - '.env('APP_NAME'))

@section('content')

<div class="page-wrap py-60">
    <div class="container">
      <section class="contact-page about-page">
        @if($userguidebanner != null)
        @foreach($userguidebanner as $values)
        <div class="contact-us-img" @if($values->vLogo != null) style="background-image: url({{asset('uploads/banner/'.$values->vLogo)}});" @endif>
          <div class="content">
            <h1 class="h1">
              @if($values->vTitle != null){{$values->vTitle}}@endif
            </h1>
            <div class="sub-text">@if($values->vSubTitle != null){{$values->vSubTitle}}@endif</div>
          </div>
        </div>
        @endforeach
        @endif
      </section>

      <section class="pt-90">
        <div class="row">
          @if($userguidehowtouse != null)
          @foreach($userguidehowtouse as $values)
          <div class="user-guid-info">
            <div class="video-inform">
              @if($values->vFile != null && file_exists(public_path()."/uploads/how_to_use/".$values->vFile))
              <video controls>
                <source src="{{asset('uploads/how_to_use/'.$values->vFile)}}" type="video/mp4">
              </video>
              @else
              <img src="{{asset('front/assets/img/no_image.png')}}" alt="icon" width="100"  height="100">
              @endif
            </div>
            <div class="guide-description">
              @if($values->vTitle != null)
              <?php
                $words = explode(" ", $values->vTitle );
                $last_two_word = implode(' ',array_splice($words, -2 ));
                $except_last_two = implode(' ', $words);
              ?>
              @if($values->tDescription != null && $last_two_word != null && $except_last_two !=null)
              <h2 class="h3 ">{{$except_last_two}}<span> {{$last_two_word}}</span> </h2>
              <p class="sub-text">@if($values->tDescription != null){{$values->tDescription}}@endif</p>
              @endif
              @endif
            </div>
          </div>
          @endforeach
          @endif
        </div>
      </section>
      <section class="welcome-rider mt-90">
        <h3 class="h2">SNAP RIDE</h3>
        <p class="sub-text title">Welcome all The Riders</p>
        <div class="mt-60 snap-video-portion">
          @if($userguidevideo != null)
          @foreach($userguidevideo as $values)
          <div class="video-1 video">
            @if($values->vFile != null && file_exists(public_path()."/uploads/page_builder/".$values->vFile))
            <video controls>
              <source src="{{asset('uploads/page_builder/'.$values->vFile)}}" type="video/mp4">
            </video>
            @else
            <img src="{{asset('front/assets/img/no_image.png')}}" alt="icon" width="100"  height="100">
            @endif
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
                <img src="{{asset('front/assets/img/no_image.png')}}" alt="play store" class="img-fluid" width="165" height="45">
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
      $(document).ready(function () {
        $(".owl-carousel").owlCarousel();
      });
      AOS.init();
    </script>
  @endsection