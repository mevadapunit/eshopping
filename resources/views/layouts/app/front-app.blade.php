@php
$general_favicon = \App\Helper\GeneralHelper::setting_info('Company');
$favicon         = $general_favicon['COMPANY_FAVICON']['vValue'];
$general_info    = \App\Helper\GeneralHelper::setting_info('Appearance');
@endphp

<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport"  content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Download the app and get the best ride in Australia - Book a comfortable, wheelchair-accessible ride, and travel without any hesitations. join now!">

    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="SnapRide" />
    <meta property="og:description" content="with 24x7 support team enjoy the safest ride experience.." />
    <meta property="og:image" content="{{asset('front/assets/img/snapride.png')}}" />
    <meta property="og:image:secure_url" content="{{asset('front/assets/img/snapride.png')}}" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="600" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/assets/img/'.$favicon)}}">
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://snapride.com.au/ride-with-snap-ride/" />
    <meta property="og:title" content="Get a Best Ride with Snap Ride - Download the App now!" />
    <meta property="og:description" content="Download the app and get the best ride in Australia - Book a comfortable, wheelchair-accessible ride, and travel without any hesitations. join now!" />
    <meta property="og:image" content="/public/front/assets/img/logo.png " />
    <meta property="og:image:width" content="2560" />
    <meta property="og:image:height" content="1325" />
    <meta property="article:published_time" content="2021-10-18T12:26:01" />
    <meta property="article:author" content="Viral Soni" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Get a Best Ride with Snap Ride - Download the App now!" />
    <meta name="twitter:description" content="Download the app and get the best ride in Australia - Book a comfortable, wheelchair-accessible ride, and travel without any hesitations. join now!" />
    <meta name="twitter:image" content="/public/front/assets/img/logo.png" />


    @include('layouts.front.css')
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
         @include('layouts.front.header')

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            @yield('content')
            <!-- / Content -->
            @include('layouts.front.footer')
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    @include('layouts.front.js')
    @include('layouts.front.toast')
    @yield('custom-js')
  </body>
</html>










