@extends('layouts.app.front-app')
@section('title', 'Rider FAQs - '.env('APP_NAME'))

@section('content')

<div class="page-wrap py-60">
    <div class="container">
      <section class="contact-page">
        <div class="contact-us-img" style="background-image: url({{asset('front/assets/img/faq-bg.png')}});">
          <div class="content faq">
            <h1 class="h1">
              Frequently Asked Questions
            </h1>
          </div>
        </div>
      </section>
      <section class="pt-90 faq-tab-listing">
        <ul class="nav nav-pills faq" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="booking-tab" data-bs-toggle="tab" data-bs-target="#booking"
              type="button" role="tab" aria-controls="booking" aria-selected="true">Booking an Snap Ride</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="ride-type-tab" data-bs-toggle="tab" data-bs-target="#ride-type" type="button" role="tab" aria-controls="ride-type" aria-selected="false">Ride Types</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="fares-tab" data-bs-toggle="tab" data-bs-target="#fares" type="button" role="tab" aria-controls="fares" aria-selected="false">Fares & Charges</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment" type="button" role="tab" aria-controls="payment" aria-selected="false">Payment</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="tips-tab" data-bs-toggle="tab" data-bs-target="#tips" type="button" role="tab"
              aria-controls="tips" aria-selected="false">Tips</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="account-tab" data-bs-toggle="tab" data-bs-target="#account" type="button" role="tab" aria-controls="account" aria-selected="false">Account & Sign Up</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="safe-tab" data-bs-toggle="tab" data-bs-target="#safe" type="button" role="tab"
              aria-controls="safe" aria-selected="false">Safe</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="booking" role="tabpanel" aria-labelledby="booking-tab">
            <div class="accordion loading-zone mt-60" id="valuesBooking">
              @if($driverfaqbooking != null)
              @foreach($driverfaqbooking as $keys=>$valuesBooking)
              <div class="accordion-item">
                <h3 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo_{{$valuesBooking->iFaqId}}" aria-expanded="false" aria-controls="collapseTwo_{{$valuesBooking->iFaqId}}">
                   {{$valuesBooking->vTitle}}
                  </button>
                </h3>
                <div id="collapseTwo_{{$valuesBooking->iFaqId}}" class="accordion-collapse collapse @if($keys == 0) show @endif" aria-labelledby="headingTwo" data-bs-parent="#valuesBooking">
                  <div class="accordion-body">
                     {!! $valuesBooking->tDescription !!}
                  </div>
                </div>
              </div>
              @endforeach
              @endif
            </div>
          </div>
          <div class="tab-pane fade" id="ride-type" role="tabpanel" aria-labelledby="ride-type-tab">
            <div class="accordion loading-zone mt-60" id="valuesTypes">
              @if($driverfaqtypes != null)
              @foreach($driverfaqtypes as $keys=>$valuesTypes)
              <div class="accordion-item">
                <h3 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo_{{$valuesTypes->iFaqId}}" aria-expanded="false" aria-controls="collapseTwo_{{$valuesTypes->iFaqId}}">
                   {{$valuesTypes->vTitle}}
                  </button>
                </h3>
                <div id="collapseTwo_{{$valuesTypes->iFaqId}}" class="accordion-collapse collapse @if($keys == 0) show @endif" aria-labelledby="headingTwo" data-bs-parent="#valuesTypes">
                  <div class="accordion-body">
                    {!! $valuesTypes->tDescription !!}
                  </div>
                </div>
              </div>
              @endforeach
              @endif
            </div>
          </div>
          <div class="tab-pane fade" id="fares" role="tabpanel" aria-labelledby="fares-tab">
            <div class="accordion loading-zone mt-60" id="valuesCharges">
              @if($driverfaqcharges != null)
              @foreach($driverfaqcharges as $keys=>$valuesCharges)
              <div class="accordion-item">
                <h3 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo_{{$valuesCharges->iFaqId}}" aria-expanded="false" aria-controls="collapseTwo_{{$valuesCharges->iFaqId}}">
                     {{$valuesCharges->vTitle}}
                  </button>
                </h3>
                <div id="collapseTwo_{{$valuesCharges->iFaqId}}" class="accordion-collapse collapse @if($keys == 0) show @endif" aria-labelledby="headingTwo" data-bs-parent="#valuesCharges">
                  <div class="accordion-body">
                     {!! $valuesCharges->tDescription !!}
                  </div>
                </div>
              </div>
              @endforeach
              @endif
            </div>
          </div>
          <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
            <div class="accordion loading-zone mt-60" id="valuesPayment">
              @if($driverfaqpayment != null)
              @foreach($driverfaqpayment as $keys=>$valuesPayment)
              <div class="accordion-item">
                <h3 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo_{{$valuesPayment->iFaqId}}" aria-expanded="false" aria-controls="collapseTwo_{{$valuesPayment->iFaqId}}">
                    {{$valuesPayment->vTitle}}
                  </button>
                </h3>
                <div id="collapseTwo_{{$valuesPayment->iFaqId}}" class="accordion-collapse collapse @if($keys == 0) show @endif" aria-labelledby="headingTwo" data-bs-parent="#valuesPayment">
                  <div class="accordion-body">
                    {!! $valuesPayment->tDescription !!}
                  </div>
                </div>
              </div>
              @endforeach
              @endif
            </div>
          </div>
          <div class="tab-pane fade" id="tips" role="tabpanel" aria-labelledby="tips-tab">  <div class="accordion loading-zone mt-60" id="valuesTips">
            @if($driverfaqtips != null)
            @foreach($driverfaqtips as $keys=>$valuesTips)
            <div class="accordion-item">
              <h3 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo_{{$valuesTips->iFaqId}}" aria-expanded="false" aria-controls="collapseTwo_{{$valuesTips->iFaqId}}">
                   {{$valuesTips->vTitle}}
                </button>
              </h3>
              <div id="collapseTwo_{{$valuesTips->iFaqId}}" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                data-bs-parent="#valuesTips">
                <div class="accordion-body">
                   {!! $valuesTips->tDescription !!}
                </div>
              </div>
            </div>
            @endforeach
            @endif
          </div>
        </div>

        <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
          <div class="accordion loading-zone mt-60" id="valuesAccount">
            @if($driverfaqaccount != null)
            @foreach($driverfaqaccount as $keys=>$valuesAccount)
            <div class="accordion-item">
              <h3 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo_{{$valuesAccount->iFaqId}}" aria-expanded="false" aria-controls="collapseTwo_{{$valuesAccount->iFaqId}}">
                   {{$valuesAccount->vTitle}}
                </button>
              </h3>
              <div id="collapseTwo_{{$valuesAccount->iFaqId}}" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                data-bs-parent="#valuesAccount">
                <div class="accordion-body">
                   {!! $valuesAccount->tDescription !!}
                </div>
              </div>
            </div>
            @endforeach
            @endif
          </div>
        </div>
        <div class="tab-pane fade" id="safe" role="tabpanel" aria-labelledby="safe-tab">  <div class="accordion loading-zone mt-60" id="valuesPractice">
            @if($driverfaqpractice != null)
            @foreach($driverfaqpractice as $keys=>$valuesPractice)
            <div class="accordion-item">
              <h3 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo_{{$valuesPractice->iFaqId}}" aria-expanded="false" aria-controls="collapseTwo_{{$valuesPractice->iFaqId}}">
                    {{$valuesPractice->vTitle}}
                </button>
              </h3>
              <div id="collapseTwo_{{$valuesPractice->iFaqId}}" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                data-bs-parent="#valuesPractice">
                <div class="accordion-body">
                     {!! $valuesPractice->tDescription !!}
                </div>
              </div>
            </div>
            @endforeach
            @endif
          </div>
        </div>
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
