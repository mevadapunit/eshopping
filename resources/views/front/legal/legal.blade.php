@extends('layouts.app.front-app')
@section('title', 'Legal - '.env('APP_NAME'))

@section('content')


  <div class="page-wrap py-60">
    <div class="container">
        <ul class="legal-guide-listing">
            <li>
                <a href="#">Terms and Conditios</a>
           </li>
           <li>
                <a href="#">Privecy Policy</a>
           </li>

           <li>
                <a href="#">Driver Agreement</a>
           </li>

           <li>
                <a href="#">Camera Surveillance Policy</a>
           </li>
           <li>
                <a href="#">Community Policies & Safety Standards</a>
           </li>
           <li>
                <a href="#">Rider FAQS</a>
           </li>
           <li>
                <a href="#">Driver FAQS</a>
           </li>
           <li>
                <a href="#">Driver in NSW</a>
           </li>
            <li>
                <a href="#">Drive in ACT</a>
           </li>
           <li>
                <a href="#">Drive in Victoria</a>
           </li>
            <li>
                <a href="#">Drive in Queensland</a>
           </li>
           <li>
                <a href="#">Drive in Western Australia</a>
           </li>
           <li>
                <a href="#">Drive in South Australia</a>
           </li>
            <li>
                <a href="#">Drive in Tasmania </a>
           </li>
           <li>
                <a href="#">Drive in NT with Snap Ride</a>
           </li>
           <li>
                <a href="#">IT Policy</a>
           </li>
           <li>
                <a href="#">Covid-19 Policy</a>
           </li>
            <li>
                <a href="#">Fatigue Policy</a>
           </li>
           <li>
                <a href="#">Extra charges form</a>
           </li>
           <li>
                <a href="#">WORK HEALTH & SAFETY Policy</a>
           </li>
           <li>
                <a href="#">ADHB policy</a>
           </li>
           <li>
                <a href="#">Zero Tolerance Policy</a>
           </li>
        </ul>
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
