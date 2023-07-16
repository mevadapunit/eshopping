@extends('layouts.app.front-app')
@section('title', 'Driver Signup - '.env('APP_NAME'))
@section('content')
  <div class="page-wrap">
    <div class="container">
      <section class="contact-page ride-with-us">
        @if($driveusbanner != null)
        @foreach($driveusbanner as $values)
        <div class="contact-us-img" @if($values->vLogo != null) style="background-image: url({{asset('uploads/banner/'.$values->vLogo)}});" @endif>
          <div class="content drive-us">
            <h1 class="h1">
              @if($values->vTitle != null){{$values->vTitle}}@endif
            </h1>
          </div>
        </div>
        @endforeach
        @endif
      </section>
      <section class="pt-90 book-in-ride">
      <h2 class="h2">Our promises</h2>
        <div class="row">
          <div class="col-xl-8 col-lg-9 mx-auto">
            <div class="book-ride-card-wrap mt-60">
              @if($driverpromises != null)
              @foreach($driverpromises as $values)
              <div class="book-card card">
                <h3 class="h3">@if($values->vTitle != null){{$values->vTitle}}@endif</h3>
                <div class="book-card-content">
                  <p class="mt-15">@if($values->tDescription != null){{$values->tDescription}}@endif</p>
                </div>
                <div class="book-ride-icon-img">
                  <img src="{{asset('uploads/ourpromises/'.$values->vImage)}}" alt="Increased Earnings" title="Increased Earnings" class="img-fluid" width="92" height="100">
                </div>
              </div>
              @endforeach
              @endif
            </div>
          </div>
        </div>
      </section>
      <section class="pt-90 state-req">
        <h2 class="h2">Check for state wise requirements. <br>
          Select the state and find the requirements to drive with us.</h2>
        <div class="row g-3 mt-60">
          @if($driverstatewiserequirement != null)
          @foreach($driverstatewiserequirement as $values)
          <div class="col-lg-3 col-md-4 col-sm-6">
           <div class="state-card">
            <div class="state-img">
              @if($values->vImage != null && file_exists(public_path()."/uploads/statewiserequirement/".$values->vImage))
              <img src="{{asset('uploads/statewiserequirement/'. $values->vImage)}}" alt="state-img" class="img-cover" width="329" height="258">
              @else
              <img src="{{asset('front/assets/img/no_image.png')}}"  alt="car-img" class="img-fluid"
                    width="200" height="200">
              @endif
            </div>
            <h3 class="h3">@if($values->vStateCode != null){{$values->vStateCode}}@endif</h3>
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
                    <a rel="dofollow" href="@if($apple_appstore_link->vValue != null){{$apple_appstore_link->vValue}}@endif" class="dow-btn"><img src="{{asset('uploads/logo/'.$apple_appstore_logo->vValue)}}" alt="app store" class="img-fluid"  width="165" height="45"></a>
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
