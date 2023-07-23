<!doctype html>
<html lang="en" dir="ltr">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Zanex – Laravel Admin & Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin, admin dashboard template, bootstrap 5, dashboard, laravel, laravel admin, laravel admin panel, laravel admin template, laravel blade, laravel dashboard, laravel dashboard template, laravel mvc, laravel php, laravel ui template, ui kit">

        <!-- TITLE -->
        <title>@yield('title')</title>

        @include('layouts.admin.css')
		@yield('custom-css')
	</head>

	<body class="app sidebar-mini">

			
        <!-- Switcher -->
		@include('layouts.admin.switcher')
		<!-- End Switcher -->			

		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="{{asset('admin/assets/images/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOBAL-LOADER -->

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

                <!--APP-SIDEBAR-->
				<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
			    @include('layouts.admin.left')
				<!--/APP-SIDEBAR-->
                <!-- Mobile Header -->
				@include('layouts.admin.header')
				<!-- /Mobile Header -->
                <!--app-content open-->
				@yield('content')
				<!-- CONTAINER END -->
            </div>  

            <!-- Sidebar-right -->
			@include('layouts.admin.sidebar')
			<!--/Sidebar-right-->
            <!-- FOOTER -->
			@include('layouts.admin.footer')
			<!-- FOOTER CLOSED -->
            
		</div>

        <!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		@include('layouts.admin.js')
        @include('layouts.admin.toast')
        @yield('custom-js')
	</body>
</html>