@extends('layouts.app.front-app')
@section('title', 'Offers - '.env('APP_NAME'))

@section('content')


<div class="page-wrap offer-page py-60">
    <div class="container">
        <section>
            <h1 class="h2 sub">Offers</h1>
            <div class="owl-carousel owl-theme offer-slide mt-25">
                @if($offers != null)
                @foreach($offers as $values)
                <div class="item">
                    <div class="offer-card">
                        <div class="offer-card-img">
                            <img src="{{asset('uploads/offer/'.$values->vImage)}}" alt="digital-paymant"
                                title="digital-paymant" class="img-cover" width="329" height="336">
                        </div>
                        <div class="offer-card-info">
                            <p class="offer-text">@if($values->vPercentage != null){{$values->vPercentage}}@else{{"N/A"}}@endif <span>@if($values->vTitle != null){{$values->vTitle}}@else{{"N/A"}}@endif </span>@if($values->vStartDate != null){{$values->vStartDate}}@else{{"N/A"}}@endif @if($values->vEndDate != null){{" to ".$values->vEndDate}}@endif</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </section>
        <section class="follow-portion-wrap mt-60">
            <div class="follow-potion-desc">
                <h2 class="h2 sub">Follow our page @snaprideau</h2>
                <p>Excited to be the first to know about our new deals and offers for you?</p>
                <p class="common-text">Excited to be the first to know about our new deals and offers for you?</p>
            </div>
            <div class="follow-icon-wrap">
                <a rel="dofollow" href="#" class="follow-icon">
                    <img src="{{asset('front/assets/img/follow-icon.png')}}" alt="icon" title="icon" class="img-contain"
                        width="31" height="31">
                </a>
                <a rel="dofollow" href="#" class="follow-icon">
                    <img src="{{asset('front/assets/img/follow-icon-b.png')}}" alt="icon" title="icon"
                        class="img-contain" width="31" height="31">
                </a>
                <a rel="dofollow" href="#" class="follow-icon">
                    <img src="{{asset('front/assets/img/follow-icon-c.png')}}" alt="icon" title="icon"
                        class="img-contain" width="31" height="31">
                </a>
            </div>
        </section>
        <section class="rider-offer mt-90">
            <h2 class="h2 sub">Rider offer</h2>
            <div class="owl-carousel owl-theme offer-rider mt-25">
                @if($rideroffer != null)
                @foreach($rideroffer as $values)
                <div class="item">
                    <div class="offer-card rider">
                        <div class="offer-card-img">
                            <img src="{{asset('uploads/offer/'.$values->vImage)}}" alt="digital-paymant"
                                title="digital-paymant" class="img-cover" width="329" height="336">
                        </div>
                        <div class="offer-card-info">
                            <h3 class="common-text">@if($values->vTitle != null){{$values->vTitle}}@endif</h3>
                            <p>@if($values->tDescription != null){{$values->tDescription}}@endif</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </section>
        <section class="rider-offer mt-60">
            <h2 class="h2 sub">Driver Offer (Pioneer Offer)*</h2>
            <div class="owl-carousel owl-theme offer-rider mt-25">
                @if($driveroffer != null)
                @foreach($driveroffer as $values)
                <div class="item">
                    <div class="offer-card rider">
                        <div class="offer-card-img">
                            <img src="{{asset('uploads/offer/'.$values->vImage)}}" alt="digital-paymant"
                                title="digital-paymant" class="img-cover" width="329" height="336">
                        </div>
                        <div class="offer-card-info">
                            <h3 class="common-text">@if($values->vTitle != null){{$values->vTitle}}@endif</h3>
                            <p>@if($values->tDescription != null){{$values->tDescription}}@endif</p>
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
$(document).ready(function() {
    $(".owl-carousel").owlCarousel();
});
AOS.init();
</script>
@endsection
