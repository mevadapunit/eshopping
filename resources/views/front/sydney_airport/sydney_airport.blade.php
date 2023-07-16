@extends('layouts.app.front-app')
@section('title', 'Airport Guide - '.env('APP_NAME'))

@section('content')

  <div class="page-wrap airport-guide-detail py-60">
    <div class="container">
      <section class="contact-page airport-guid">
        @if($airportguidebanner != null)
        @foreach($airportguidebanner as $values)
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

      @if($airportguidezone != null)
      @foreach($airportguidezone as $keys=>$values)
      @if($keys%2 == 0)
      <section class="pt-90">
        <h2 class="h2">@if($values->vTitle != null){{$values->vTitle}}@endif</h2>
        <div class="mt-60 airport-ride-wrap">
          <div class="airport-ride">
            <div class="airport-ride-left">
              <div class="airport-ride-left-img map">
                <img src="{{asset('uploads/airportguide/'. $values->vImage)}}" title="airport-guide" alt="airport-guide" class="img-contain"
                  width="677" height="411">
              </div>
            </div>
            <div class="airport-ride-right">
              <h3 class="h3">@if($values->vSubTitle != null){{$values->vSubTitle}}@endif</h3>
             @if($values->tDescription != null){!! $values->tDescription !!}@endif
            </div>
          </div>
        </div>
      </section>
      @else
      <section class="pt-90">
        <h2 class="h2">@if($values->vTitle != null){{$values->vTitle}}@endif</h2>
        <div class="mt-60 airport-ride-wrap">
          <div class="airport-ride">
            <div class="airport-ride-right">
              <h3 class="h3">@if($values->vSubTitle != null){{$values->vSubTitle}}@endif</h3>
              @if($values->tDescription != null){!! $values->tDescription !!}@endif
            </div>
            <div class="airport-ride-left">
              <div class="airport-ride-left-img map">
                @if($values->vImage != null && file_exists(public_path()."/uploads/airportguide/".$values->vImage))
                <img src="{{asset('uploads/airportguide/'. $values->vImage)}}" title="airport-guide" alt="airport-guide" class="img-contain"  width="677" height="411">
                @else
                <img src="{{asset('front/assets/img/no_image.png')}}" alt="get-ride" class="img-cover" width="660" height="329">
                @endif
              </div>
            </div>
          </div>
        </div>
      </section>
      @endif
      @endforeach
      @endif

      @if($airportoperatingprocedure != null)
      @foreach($airportoperatingprocedure as $values)
      <section class="pt-90 airport-oprating-zone">
        <h2 class="h2">@if($values->vTitle != null){{$values->vTitle}}@endif</h2>
        <p class="mt-15 sub">@if($values->vSubTitle != null){{$values->vSubTitle}}@endif</p>
        <div class="mt-60">
          <ul class="airport-ride-listing ">
            @if($values->tDescription != null)
            <?php  $alldescription = preg_split('/\r\n|\r|\n/', $values->tDescription); ?>
            @foreach($alldescription as $valdisc)
            @if($valdisc != "")
            <li>
             <P>{{$valdisc}}
              </p>
            </li>
            @endif
            @endforeach
            @endif
          </ul>
        </div>
      </section>
      @endforeach
      @endif

      <section class="pt-90 airport-loading-zone">
        <h2 class="h2">Access points for the loading zone</h2>
        <div class="accordion loading-zone mt-60" id="accordionExample">
          @if($airportaccesspoint != null)
          @foreach($airportaccesspoint as $keys=>$values)

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne_{{$values->iAccessPointId}}"
                aria-expanded="true" aria-controls="collapseOne">
                @if($values->tDescription != null){{$values->vTitle}}@endif
              </button>
            </h3>
            <div id="collapseOne_{{$values->iAccessPointId}}" class="accordion-collapse collapse @if($keys == 0) show @endif" aria-labelledby="headingOne"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <ul class="airport-ride-listing number ">
                   @if($values->tDescription != null)
                    <?php  $alldescription = preg_split('/\r\n|\r|\n/', $values->tDescription); ?>
                    @foreach($alldescription as $valdisc)
                    @if($valdisc != "")
                    <li>
                     <P>{{$valdisc}}
                      </p>
                    </li>
                    @endif
                    @endforeach
                    @endif
                </ul>
              </div>
            </div>
          </div>
          @endforeach
          @endif
        </div>
      </section>

      <section class="pt-90 airport-pickup-zone">
        @if($airportguiderideimagewithtext != null)
        <h2 class="h2">@if($values->vTitle != null){{$airportguiderideimagewithtext->vTitle}}@endif</h2>
        <div class="pickup-zone mt-60">
          <div class="pickup-zone-left">
            @if($airportguiderideimagewithtext->vFile != null && file_exists(public_path()."/uploads/page_builder/".$airportguiderideimagewithtext->vFile))
            <img src="{{asset('uploads/page_builder/'.$airportguiderideimagewithtext->vFile)}}" title="airport-guide" alt="airport-guide" class="img-contain" width="677" height="411">
            @else
            <img src="{{asset('front/assets/img/no_image.png')}}" title="airport-guide" alt="airport-guide" class="img-contain" width="677" height="411">
            @endif
          </div>
          <div class="pickup-zone-right">
            <ul class="airport-ride-listing ">
              @if($airportguiderideimagewithtext->tDescription != null)
                {!! $airportguiderideimagewithtext->tDescription !!}
              @endif
            </ul>
          </div>
        </div>
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
