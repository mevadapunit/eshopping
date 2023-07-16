@php 
$general_favicon = \App\Helper\GeneralHelper::setting_info('Company');
$favicon         = $general_favicon['COMPANY_FAVICON']['vValue'];
$general_info    = \App\Helper\GeneralHelper::setting_info('Appearance');
@endphp

<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon/'.$favicon)}}">

    <title>@yield('title')</title>
    <meta name="description" content="" />
     @include('layouts.admin.css')
  </head>
  <body>
  @yield('content')
  @include('layouts.admin.js')
  @include('layouts.admin.toast')
  </body>
</html>

