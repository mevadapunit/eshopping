@extends('layouts.app.front-app')
@section('title', 'Privacy Policy - '.env('APP_NAME'))

@section('content')

<div class="page-wrap py-60">
    <div class="container">
        <section class="terms-condition">
            @if($privacypolicy != null)
            @foreach($privacypolicy as $values)
            <div class="terms-condition-listing">
                <h1 class="h3">
                {{$values->vTitle}}
                </h1>
                <p>{!! $values->tDescription !!}</p>
                <br>
            </div>
            @endforeach
            @endif
        </section>
        <section class="pt-90 dow-app">
        <div class="row">
          <div class="col-md-6">
            <div class="dow-app-text" >
                <h2 class="h2 sub">Download the <br> app & ride now!</h2>
              <p class="mt-15">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet
              </p>
              <div class="dow-btn-grup mt-40">
                @if($android_playstore_logo->vValue != null)
                <a rel="dofollow" href="@if($android_playstore_link->vValue != null){{$android_playstore_link->vValue}}@endif"
                  target="_blank" class="dow-btn"><img src="{{asset('uploads/logo/'.$android_playstore_logo->vValue)}}" alt="play-store" class="img-fluid" width="165" height="45"></a>
                @endif
                @if($apple_appstore_logo->vValue != null)
                <a rel="dofollow" href="@if($apple_appstore_link->vValue != null){{$apple_appstore_link->vValue}}@endif"
                  target="_blank" class="dow-btn"><img src="{{asset('uploads/logo/'.$apple_appstore_logo->vValue)}}" alt="appstore" class="img-fluid" width="165" height="45"></a>
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
