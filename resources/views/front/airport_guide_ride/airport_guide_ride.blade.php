@extends('layouts.app.front-app')
@section('title', 'Airport Guide Ride - '.env('APP_NAME'))

@section('content')
  <div class="page-wrap py-60">
    <div class="container">
      <section class="contact-page airport-guid">
        @if($airportguideridebanner != null)
        @foreach($airportguideridebanner as $values)
        <div class="contact-us-img" @if($values->vLogo != null) style="background-image: url({{asset('uploads/banner/'.$values->vLogo)}});" @endif>
          <div class="content">
            <h1 class="h1">
              @if($values->vTitle != null) {{$values->vTitle}} @endif
            </h1>
          </div>
        </div>
        @endforeach
        @endif
      </section>
      <section class="pt-90 airport-ride-wrap">
        @if($airportguiderideimagewithtext != null)
        @foreach($airportguiderideimagewithtext as $values)
        <div class="airport-ride">
          <div class="airport-ride-left">
            <div class="airport-ride-left-img">
              @if($values->vFile != null && file_exists(public_path()."/uploads/page_builder/".$values->vFile))
              <img src="{{asset('uploads/page_builder/'.$values->vFile)}}"  alt="airport-guide" class="img-fluid" width="677" height="411">
              @else
              <img src="{{asset('front/assets/img/no_image.png')}}"  alt="airport-guide" class="img-fluid" width="677" height="411">
              @endif
            </div>
          </div>
          <div class="airport-ride-right">
            <h2 class="h3">@if($values->vTitle != null){{$values->vTitle}}@endif</h2>
            <div class="airport-ride-desc mt-25">
             <P>@if($values->tDescription != null){!! $values->tDescription !!}@endif
              </p>
            </div>
          </div>
        </div>
        @endforeach
        @endif
        <div class="airport-ride">
          <div class="airport-ride-right">
            <h2 class="h3">Australia</h2>
            <ul class="state-list-grup mt-25">
              <li class="state-label"> <a href="{{route('front.sydney_airport.sydney_airport')}}">  Sydney</a></li>
              <li class="state-label"><a href="{{route('front.hobart_airport.hobart_airport')}}">Hobart</a> </li>
              <li class="state-label"><a href="{{route('front.perth_airport.perth_airport')}}">Perth</a></li>
              <li class="state-label"><a href="{{route('front.canberra_airport.canberra_airport')}}">Canberra</a></li>
              <li class="state-label"><a href="{{route('front.melbourne_airport.melbourne_airport')}}">Melbourne</a></li>
              <li class="state-label"><a href="{{route('front.adelaide_airport.adelaide_airport')}}">Adelaide</a></li>
              <li class="state-label"><a href="{{route('front.darwin_airport.darwin_airport')}}">Darwin</a></li>
            </ul>
          </div>
          @if($airportguiderideimage != null)
          @foreach($airportguiderideimage as $values)
          <div class="airport-ride-left">
            <div class="airport-ride-left-img">
              @if($values->vFile != null && file_exists(public_path()."/uploads/page_builder/".$values->vFile))
              <img src="{{asset('uploads/page_builder/'.$values->vFile)}}"  alt="airport-guide" class="img-fluid" width="677" height="411">
              @else
              <img src="{{asset('front/assets/img/no_image.png')}}"  alt="airport-guide" class="img-fluid" width="677" height="411">
              @endif
            </div>
          </div>
          @endforeach
          @endif
        </div>
      </section>
      <section class="pt-90 get-ride">
        <h2 class="h2">Ways to Ride with Snap Ride</h2>
        <p class="mt-15 sub-text sub">The Safest, Digital & most Convenient ride experience</p>
        <div class="ride-ways  mt-60">
          @if($vehicles != null)
          @foreach($vehicles as $values)
          <div class="ride-ways-card">
            <div class="card-header" id="card-header">
              <div class="head-img">
                @if($values->vImage != null && file_exists(public_path()."/uploads/vehicle_type/".$values->vImage))
                <img src="{{asset('uploads/vehicle_type/'.$values->vImage)}}"  alt="car-img" class="img-fluid" width="200" height="200">
                @else
                <img src="{{asset('front/assets/img/no_image.png')}}"  alt="car-img" class="img-fluid" width="200" height="200">
                @endif
              </div>
              <h3 class="h3">@if($values->vTitle != null){{$values->vTitle}}@endif</h3>
              @if($values->vDescription != null)
              <?php  $alldescription = preg_split('/\r\n|\r|\n/', $values->vDescription); ?>
              @foreach($alldescription as $keys=>$valdisc)
              @if($valdisc != "" && $keys == 0)
               <P>{{$valdisc}}
                </p>
              @endif
              @endforeach
              @endif
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
      $(document).ready(function () {
        $(".owl-carousel").owlCarousel();
      });
      AOS.init();
    </script>
  @endsection
