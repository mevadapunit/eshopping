@extends('layouts.app.front-app')
@section('title', 'Rider With Us - '.env('APP_NAME'))

@section('content')

  <div class="page-wrap">
    <div class="container">
      <section class="contact-page ride-with-us">
        @if($ridewithusbanner != null)
        @foreach($ridewithusbanner as $values)
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
        <div class="detail-page">
          <div class="row g-5">
            @if($vehicles != null)
            @foreach($vehicles as $values)
            <div class="col-lg-6">
              <div class="informarion-card">
                <div class="car-img">
                  @if($values->vImage != null && file_exists(public_path()."/uploads/vehicle_type/".$values->vImage))
                  <img src="{{asset('uploads/vehicle_type/'.$values->vImage)}}" alt="logo" title="logo" class="img-fluid" width="260"  height="220">
                  @else
                  <img src="{{asset('front/assets/img/no_image.png')}}" alt="logo" title="logo" class="img-fluid" width="260"  height="220">
                  @endif
                </div>
                <h2 class="h2 ">@if($values->vTitle != null){{$values->vTitle}}@endif</h2>
                <ul class="car-detail-content mt-30">
                  @if($values->vDescription != null)
                  <?php  $description = preg_split('/\r\n|\r|\n/', $values->vDescription);
                  ?>
                  @foreach($description as $desval)
                  <li>
                    <p class="sub-text">
                       {{$desval}}
                    </p>
                  </li>
                  @endforeach
                  @if(strlen($values->vDescription) >= 255)
                  <li>
                    <p class="sub-text">
                     <a rel="dofollow" href="#" class="read">read more... </a>
                    </p>
                  </li>
                  @endif
                  @endif
                </ul>
              </div>
            </div>
            @endforeach
            @endif
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
