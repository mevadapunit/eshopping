@extends('layouts.app.front-app')
@section('title', 'Home - '.env('APP_NAME'))

@section('content')


  <div class="page-wrap">
    <div class="container">
      <section class="home-page-banner-wrap">
        @if($homebanner != null)
        @foreach($homebanner as $values)
        <div class="main-banner">
          <div class="main-banner-left">
             @if($values->vLogo != null && file_exists(public_path()."/uploads/banner/".$values->vLogo))
             <img src="{{asset('uploads/banner/'.$values->vLogo)}}" alt=""  class="img-fluid" width="315" height="285">
             @else
             <img src="{{asset('front/assets/img/no_image.png')}}" alt=""  class="img-fluid" width="315" height="285">
             @endif
          </div>
          <div class="main-banner-mid">
            <div class="banner-content">
              <div class="banner-top-sec">
                <h1 class="h1">
                @if($values->vTitle != null){{$values->vTitle}}@endif
                </h1>
                <p class="sub-text mt-10">{{$values->vSubTitle}}</p>
                <div class="dow-btn-grup mt-20">
                  @if($android_playstore_logo->vValue != null && file_exists(public_path()."/uploads/logo/".$android_playstore_logo->vValue))
                  <a rel="dofollow" href="@if($android_playstore_link->vValue != null){{$android_playstore_link->vValue}}@endif" class="dow-btn"><img src="{{asset('uploads/logo/'.$android_playstore_logo->vValue)}}" alt="play store" class="img-fluid" width="165" height="45"></a>
                  @else
                   <img src="{{asset('front/assets/img/no_image.png')}}" alt="play store" class="img-fluid" width="165" height="45">
                  @endif
                  @if($apple_appstore_logo->vValue != null && file_exists(public_path()."/uploads/logo/".$apple_appstore_logo->vValue))
                  <a rel="dofollow" href="@if($apple_appstore_link->vValue != null){{$apple_appstore_link->vValue}}@endif" class="dow-btn"><img src="{{asset('uploads/logo/'.$apple_appstore_logo->vValue)}}" alt="app store" class="img-fluid"  width="165" height="45"></a>
                  @else
                   <img src="{{asset('front/assets/img/no_image.png')}}" alt="play store" class="img-fluid" width="165" height="45">
                  @endif
                </div>
              </div>
              <div class="banner-bottom-sec">
                <h2 class="h2">
                  Wish To Drive With Us?
                </h2>
                <div class="mt-25">
                  <a rel="dofollow" href="{{route('front.contact_us.contact_us')}}" class="join-us">Join Us</a>
                </div>
              </div>
            </div>
          </div>
          <div class="main-banner-right">
                @if($values->vImage != null && file_exists(public_path()."/uploads/banner/".$values->vImage))
                <img src="{{asset('uploads/banner/'.$values->vImage)}}" alt="snap-ride"  class="img-fluid"  width="380" height="420">
                @else
                <img src="{{asset('front/assets/img/no_image.png')}}" alt="snap-ride"  class="img-fluid"  width="380" height="420">
                @endif
          </div>
        </div>
        @endforeach
        @endif
        <div class="nex-scroll-btn-wrap">
          <div class="nex-scroll-btn">
            <a rel="dofollow" href="{{route('front.home')}}" title="next"><i class="fas fa-angle-down"></i></a>
          </div>
        </div>
      </section>
      <section class="pt-90 any-time-ride">
        <div class="any-time-ride-wrap">
          <div class="any-time-ride-content">
            <h2 class="h2 sub">Get a Ride Anytime, Anywhere.</h2>
            <div class="any-time-content mt-20">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at ullamcorper aliquam
                pretium faucibus feugiat cras.</p>
            </div>
          </div>
          <div class="slide-sec">
            <div class="owl-carousel owl-theme payment-property">
              @if($homegetrideanytime != null)
              @foreach($homegetrideanytime as $keys=>$values)
              <div class="ride-property">
                <div class="ride-left">
                  <h3 class="h3">
                    @if($values->vTitle != null){{$values->vTitle}}@endif
                  </h3>
                  <div class="left-content mt-10">
                    <p class="sub-text">
                     @if($values->tDescription != null){{$values->tDescription}}@endif
                    </p>
                  </div>
                </div>
                <div class="ride-right">
                  <div class="icon">
                    @if($values->vImage != null && file_exists(public_path()."/uploads/get_ride_anytime/".$values->vImage))
                    <img src="{{asset('uploads/get_ride_anytime/'.$values->vImage)}}" alt="digital-paymant" width="50" height="50">
                    @else
                    <img src="{{asset('front/assets/img/no_image.png')}}" alt="digital-paymant" width="50" height="50">
                    @endif
                  </div>
                </div>
              </div>
              @endforeach
              @endif
            </div>
          </div>
        </div>
      </section>
      <section class="pt-90 book-in-ride">
             <h2 class="h2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras netus commodo
              praesent laoreet. Faucibus tincidunt tellus.</h2>
        <div class="row mt-60">
          <div class="col-xl-8 col-lg-9 mx-auto">
            <div class="book-ride-card-wrap">
              @if($homehowitworks != null)
              @foreach($homehowitworks as $keys=>$values)
              <div class="book-card card">
                <h3 class="h3">@if($values->vTitle){{$values->vTitle}}@endif</h3>
                <div class="book-card-content">
                  <p class="mt-15 sub-text">@if($values->tDescription){{$values->tDescription}}@endif</p>
                </div>
                <div class="book-ride-icon-img">
                  @if($values->vImage != null && file_exists(public_path()."/uploads/how_it_works/".$values->vImage))
                  <img src="{{asset('uploads/how_it_works/'.$values->vImage)}}" alt="icon" width="100"  height="100">
                  @else
                  <img src="{{asset('front/assets/img/no_image.png')}}" alt="icon" width="100"  height="100">
                  @endif
                </div>
              </div>
              @endforeach
              @endif
            </div>
          </div>
        </div>
      </section>
      <section class="pt-90 get-ride">
        <h2 class="h2">Get a Ride Anytime, Anywhere.</h2>
        <p class="mt-15 sub">The Safest, Digital & most Convenient ride experience</p>
        <div class="row g-3 mt-60">
          @if($vehicles != null)
          @foreach($vehicles as $values)
          <div class="col-lg-3 col-sm-6">
            <div class="card-wrap">
              <div class="card-header" id="card-header">
                <div class="head-img">
                  @if($values->vImage != null && file_exists(public_path()."/uploads/vehicle_type/".$values->vImage))
                  <img src="{{asset('uploads/vehicle_type/'.$values->vImage)}}"  alt="car-img" class="img-fluid"
                    width="200" height="200">
                  @else
                  <img src="{{asset('front/assets/img/no_image.png')}}"  alt="car-img" class="img-fluid"
                    width="200" height="200">
                  @endif
                </div>
                <h3 class="h3">Snap Standard X</h3>
              </div>
              <div class="card-body card-sec">
                @if($values->vDescription != null)
                 <?php  $description = preg_split('/\r\n|\r|\n/', $values->vDescription);?>
                <ul class="car-content">
                  @if($description != null)
                  @foreach($description as $desval)
                  <li>
                  <p>
                       {{$desval}}
                    </p>
                  </li>
                  @endforeach
                  @endif
                </ul>
                @endif
              </div>
            </div>
          </div>
          @endforeach
          @endif
        </div>
      </section>
      <section class="pt-90 drive-with-us">
        <h2 class="h2">Lorem ipsum dolor sit amet.</h2>
        <p class="mt-15 sub">Lorem ipsum dolor sit amet</p>
        <div class="row g-3 mt-60">
          <div class="col-lg-6">
            @if($homesectiontype1 != null)
            @foreach($homesectiontype1 as $values)
            <div class="ride-now-card">
              <div class="ride-now-card-left-img">
                <img src="{{asset('uploads/section/'.$values->vImage)}}" alt="get-ride" width="326" height="339">
              </div>
              <div class="ride-now-card-right ride" style="background-color: {{$values->vColor}} !important">
                <div class="ride-card-content">
                  <h3 class="h3">
                    @if($values->vTitle != null){{$values->vTitle}}@endif
                  </h3>
                  <p class="sub-text mt-20">
                    @if($values->vSubTitle != null){{$values->vSubTitle}}@endif
                  </p>
                </div>
                <div class="ride-btn">
                  <a rel="dofollow"  @if($values->vUrl != null) href="{{route('front.'.$values->vUrl.'.'.$values->vUrl)}}" @endif class="btn black-btn"> @if($values->vButtontTitle != null){{$values->vButtontTitle}}@endif</a>
                </div>
              </div>
            </div>
            @endforeach
            @endif
          </div>
          <div class="col-lg-6">
            @if($homesectiontype2 != null)
            @foreach($homesectiontype2 as $values)
            <div class="ride-now-card">
              <div class="ride-now-card-left-img">
                <img src="{{asset('uploads/section/'.$values->vImage)}}" alt="drive-withus" width="326" height="339"
                >
              </div>
              <div class="ride-now-card-right" @if($values->vColor != null) style="background-color: {{$values->vColor}} !important" @endif>
                <div class="ride-card-content">
                  <h3 class="h3"> @if($values->vTitle != null){{$values->vTitle}}@endif</h3>
                  <p class="sub-text mt-20">
                    @if($values->vSubTitle != null){{$values->vSubTitle}}@endif
                  </p>
                </div>
                <div class="ride-btn">
                  <a rel="dofollow"  @if($values->vUrl != null) href="{{route('front.'.$values->vUrl.'.'.$values->vUrl)}}" @endif class="btn black-btn"> @if($values->vButtontTitle != null){{$values->vButtontTitle}}@endif</a>
                </div>
              </div>
            </div>
            @endforeach
            @endif
          </div>
          <div class="col-12">
            @if($homesectiontype3 != null)
            @foreach($homesectiontype3 as $values)
            <div class="ride-now-card ride-airport">
              <div class="ride-now-card-left-img">
                @if($values->vImage != null && file_exists(public_path()."/uploads/section/".$values->vImage))
                <img src="{{asset('uploads/section/'.$values->vImage)}}" alt="get-ride" class="img-cover" width="660" height="329">
                @else
                <img src="{{asset('front/assets/img/no_image.png')}}" alt="get-ride" class="img-cover" width="660" height="329">
                @endif
              </div>
              <div class="ride-now-card-right">
                <div class="ride-card-content">
                  <h3 class="h3">
                  @if($values->vTitle != null){{$values->vTitle}}@endif
                  </h3>
                  <p class="sub-text mt-20">
                  @if($values->vSubTitle != null){{$values->vSubTitle}}@endif
                  </p>
                </div>
                <div class="ride-btn">
                  <a rel="dofollow"  @if($values->vUrl != null) href="{{route('front.'.$values->vUrl.'.'.$values->vUrl)}}" @endif class="btn black-btn"> @if($values->vButtontTitle != null){{$values->vButtontTitle}}@endif</a>
                </div>
              </div>
            </div>
            @endforeach
            @endif
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
  @endsection
