@extends('layouts.app.front-app')
@section('title', 'Driver FAQs - '.env('APP_NAME'))

@section('content')

<div class="page-wrap py-60">
    <div class="container">
      <section class="contact-page">
        <div class="contact-us-img" style="background-image: url({{asset('front/assets/img/faq-bg.png')}});">
          <div class="content faq">
            <h1 class="h1">
            Driver FAQ
            </h1>
          </div>
        </div>
      </section>
      <section class="pt-90 faq-tab-listing">
        <ul class="nav nav-pills faq" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="booking-tab" data-bs-toggle="tab" data-bs-target="#booking"
              type="button" role="tab" aria-controls="booking" aria-selected="true">Sign-Up Application</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="ride-type-tab" data-bs-toggle="tab" data-bs-target="#ride-type" type="button" role="tab" aria-controls="ride-type" aria-selected="false">Your Vehicle</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="fares-tab" data-bs-toggle="tab" data-bs-target="#fares" type="button" role="tab" aria-controls="fares" aria-selected="false">Driver Partners</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment" type="button" role="tab" aria-controls="payment" aria-selected="false">Fatigue Management</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="tips-tab" data-bs-toggle="tab" data-bs-target="#tips" type="button" role="tab"
              aria-controls="tips" aria-selected="false"> Support</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="account-tab" data-bs-toggle="tab" data-bs-target="#account" type="button" role="tab" aria-controls="account" aria-selected="false">Best Practices</button>
          </li>

        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="booking" role="tabpanel" aria-labelledby="booking-tab">
            <div class="accordion loading-zone mt-60" id="valuesSignup">
              @if($driverfaqsignup != null)
              @foreach($driverfaqsignup as $keys=>$valuesSignup)
              <div class="accordion-item">
                <h3 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo_{{$valuesSignup->iFaqId}}" aria-expanded="false" aria-controls="collapseTwo_{{$valuesSignup->iFaqId}}">
                    {{$valuesSignup->vTitle}}
                  </button>
                </h3>
                <div id="collapseTwo_{{$valuesSignup->iFaqId}}" class="accordion-collapse collapse @if($keys == 0) show @endif" aria-labelledby="headingTwo" data-bs-parent="#valuesSignup">
                  <div class="accordion-body">
                    {!! $valuesSignup->tDescription !!}
                  </div>
                </div>
              </div>
              @endforeach
              @endif
            </div>
          </div>
          <div class="tab-pane fade" id="ride-type" role="tabpanel" aria-labelledby="ride-type-tab">
            <div class="accordion loading-zone mt-60" id="valuesYourvehicle">
              @if($driverfaqyourvehicle != null)
              @foreach($driverfaqyourvehicle as $keys=>$valuesYourvehicle)
              <div class="accordion-item">
                <h3 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo_{{$valuesYourvehicle->iFaqId}}" aria-expanded="false" aria-controls="collapseTwo_{{$valuesYourvehicle->iFaqId}}">
                     {{$valuesYourvehicle->vTitle}}
                  </button>
                </h3>
                <div id="collapseTwo_{{$valuesYourvehicle->iFaqId}}" class="accordion-collapse collapse @if($keys == 0) show @endif" aria-labelledby="headingTwo" data-bs-parent="#valuesYourvehicle">
                  <div class="accordion-body">
                   {!! $valuesYourvehicle->tDescription !!}
                  </div>
                </div>
              </div>
              @endforeach
              @endif
            </div>
          </div>
          <div class="tab-pane fade" id="fares" role="tabpanel" aria-labelledby="fares-tab">
            <div class="accordion loading-zone mt-60" id="valuesPartners">
              @if($driverfaqpartners != null)
              @foreach($driverfaqpartners as $keys=>$valuesPartners)
              <div class="accordion-item">
                <h3 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo_{{$valuesPartners->iFaqId}}" aria-expanded="false" aria-controls="collapseTwo_{{$valuesPartners->iFaqId}}">
                    {{$valuesPartners->vTitle}}
                  </button>
                </h3>
                <div id="collapseTwo_{{$valuesPartners->iFaqId}}" class="accordion-collapse collapse @if($keys == 0) show @endif" aria-labelledby="headingTwo" data-bs-parent="#valuesPartners">
                  <div class="accordion-body">
                  {!! $valuesPartners->tDescription !!}
                  </div>
                </div>
              </div>
              @endforeach
              @endif
            </div>
          </div>
          <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
            <div class="accordion loading-zone mt-60" id="valuesManagement">
              @if($driverfaqmanagement != null)
              @foreach($driverfaqmanagement as $keys=>$valuesManagement)
              <div class="accordion-item">
                <h3 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo_{{$valuesManagement->iFaqId}}" aria-expanded="false" aria-controls="collapseTwo_{{$valuesManagement->iFaqId}}">
                    {{$valuesManagement->vTitle}}
                  </button>
                </h3>
                <div id="collapseTwo_{{$valuesManagement->iFaqId}}" class="accordion-collapse collapse @if($keys == 0) show @endif" aria-labelledby="headingTwo" data-bs-parent="#valuesManagement">
                  <div class="accordion-body">
                   {!! $valuesManagement->tDescription !!}
                  </div>
                </div>
              </div>
              @endforeach
              @endif
            </div>
          </div>
          <div class="tab-pane fade" id="tips" role="tabpanel" aria-labelledby="tips-tab">
                <div class="accordion loading-zone mt-60" id="valuesSupport">
                    @if($driverfaqsupport != null)
                    @foreach($driverfaqsupport as $keys=>$valuesSupport)
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo_{{$valuesSupport->iFaqId}}" aria-expanded="false" aria-controls="collapseTwo_{{$valuesSupport->iFaqId}}">
                            {{$valuesSupport->vTitle}}
                            </button>
                        </h3>
                        <div id="collapseTwo_{{$valuesSupport->iFaqId}}" class="accordion-collapse collapse @if($keys == 0) show @endif" aria-labelledby="headingTwo"
                            data-bs-parent="#valuesSupport">
                            <div class="accordion-body">
                              {!! $valuesSupport->tDescription !!}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
          </div>
          <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
            @if($driverfaqpractice != null)
            @foreach($driverfaqpractice as $keys=>$valuesPractice)

            <div class="accordion loading-zone mt-60" id="valuesPractice">
                {!! $valuesPractice->tDescription !!}
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
