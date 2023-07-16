<!doctype html>
<html lang="en" dir="ltr">
	
<!-- Mirrored from laravel.spruko.com/zanex/ltr/index by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Jun 2023 09:50:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
    <!-- LINKS -->
    @include('layouts.admin.css')
	</head>

	<body class="app sidebar-mini">

    <!-- Switcher -->
		<div class="switcher-wrapper">
			<div class="demo_changer">
				<div class="demo-icon bg_dark">
					<i class="fa fa-cog fa-spin  text_primary"></i>
				</div>
				<div class="form_holder sidebar-right1">
					<div class="row">
						<div class="predefined_styles">
							<div class="swichermainleft text-center">
								<div class="p-3 d-grid gap-2">
									<a href="https://laravel.spruko.com/zanex/index.html" class="btn ripple btn-primary mt-0">View Demo</a>
									<a href="https://themeforest.net/item/zanex-bootstrap-5-admin-dashboard-template/32984858" class="btn ripple btn-secondary">Buy Now</a>
									<a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-red">Our Portfolio</a>
								</div>
							</div>
							<div class="swichermainleft mb-4">
								<h4>Navigation Style</h4>
								<div class="ps-3 pe-3 pt-3 d-grid gap-2">
									<a class="btn btn-success " href="vertical-light.html"> Leftmenu</a>
									<a class="btn btn-danger" href="horizontal-light.html"> Horizontal </a>
								</div>
							</div>
							<div class="swichermainleft mb-4">
								<h4>Navigation  RTL Style</h4>
								<div class="ps-3 pe-3 pt-3 d-grid gap-2">
									<a class="btn btn-success " href="https://laravel.spruko.com/zanex/rtl/vertical-light"> Leftmenu-RTL</a>
									<a class="btn btn-danger" href="https://laravel.spruko.com/zanex/rtl/horizontal-light"> Horizontal-RTL </a>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Theme Layout</h4>
								<div class="switch_section d-flex my-4">
									<ul class="switch-buttons row">
										<li class="col-md-6 mb-0">
											<button type="button" id="background-left1" class="bg-left1 wscolorcode1 button-image"></button>
											<span class="d-block">Light Theme</span>
										</li>
										<li class="col-md-6 mb-0">
											<button type="button" id="background-left2" class="bg-left2 wscolorcode1 button-image"></button>
											<span class="d-block">Dark Theme</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Header Styles Mode</h4>
								<div class="switch_section d-flex my-4">
									<ul class="switch-buttons row">
										<li class="col-md-6 light-bg">
											<button type="button" id="background1" class="bg1 wscolorcode1 button-image"></button>
											<span class="d-block">Light Header</span>
										</li>
										<li class="col-md-6">
											<button type="button" id="background2" class="bg2 wscolorcode1 button-image"></button>
											<span class="d-block">Color Header</span>
										</li>
										<li class="col-md-6 d-block mx-auto dark-bg">
											<button type="button" id="background3" class="bg3 wscolorcode1 button-image"></button>
											<span class="d-block">Dark Header</span>
										</li>
										<li class="col-md-6 d-block mx-auto">
											<button type="button" id="background11" class="bg8 wscolorcode1 button-image"></button>
											<span class="d-block">Gradient Header</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Leftmenu Styles Mode</h4>
								<div class="switch_section d-flex my-4">
									<ul class="switch-buttons row">
										<li class="col-md-6 mb-4">
											<button type="button" id="background4" class="bg4 wscolorcode1 button-image"></button>
											<span class="d-block">Light Menu</span>
										</li>
										<li class="col-md-6 mb-4">
											<button type="button" id="background5" class="bg5 wscolorcode1 button-image"></button>
											<span class="d-block">Color Menu</span>
										</li>
										<li class="col-md-6 mb-0 d-block mx-auto dark-bgmenu">
											<button type="button" id="background6" class="bg6 wscolorcode1 button-image"></button>
											<span class="d-block">Dark Menu</span>
										</li>
										<li class="col-md-6 mb-0 d-block mx-auto">
											<button type="button" id="background10" class="bg7 wscolorcode1 button-image"></button>
											<span class="d-block">Gradient Menu</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Layout-width Styles Mode</h4>
								<div class="switch_section d-flex my-4">
									<ul class="switch-buttons row">
										<li class="col-md-6 mb-4">
											<button type="button" id="background14" class="bg-layf wscolorcode1 button-image"></button>
											<span class="d-block">Full-Width</span>
										</li>
										<li class="col-md-6 mb-4">
											<button type="button" id="background15" class="bg-laybx wscolorcode1 button-image"></button>
											<span class="d-block">Boxed</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Side-menu layout Styles Mode</h4>
								<div class="switch_section d-flex my-4">
									<ul class="switch-buttons row">
										<li class="col-md-6 mb-4">                                    
											<a href="#" class="swticher-link default-menu" data-sidetheme="{{asset('admin/assets/css/sidemenu.css')}}"></a>
												<button type="button" class="bg-sided wscolorcode1 button-image"></button>
											<span class="d-block">Default</span>
										</li>
										<li class="col-md-6 mb-4">                                  
											<a href="index1.html" class="swticher-link icontext-menu" data-sidetheme="{{asset('admin/assets/css/sidemenu-icontext.css')}}"></a>
												<button type="button" class="bg-sideictxt wscolorcode1 button-image"></button>
											<span class="d-block">Icon-with Text</span>
										</li>
										<li class="col-md-6 mb-4 d-block mx-auto">                      
											<a href="#" class="swticher-link sideicon-menu" data-sidetheme=" {{asset('admin/assets/css/sidemenu-icon.css')}}"></a>
												<button type="button" class="bg-sideicon wscolorcode1 button-image"></button>
											<span class="d-block">Icon</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Layout Positions Mode</h4>
								<div class="switch_section d-flex my-4">
									<ul class="switch-buttons row">
										<li class="col-md-6 mb-4">
											<button type="button" id="background16" class="bg-left1 wscolorcode1 button-image"></button>
											<span class="d-block">Fixed</span>
										</li>
										<li class="col-md-6 mb-4">
											<button type="button" id="background17" class="bg-left1 wscolorcode1 button-image"></button>
											<span class="d-block">Scrollable</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Switcher -->			

		<!-- GLOBAL-LOADER -->
		<!-- <div id="global-loader">
			<img src="{{asset('admin/assets/images/loader.svg')}}" class="loader-img" alt="Loader">
		</div>    -->
		<!-- /GLOBAL-LOADER -->

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">
        <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
        <!-- Left Menu -->
        @include('layouts.admin.left')
        <!-- Left Menu -->
        
        <!-- Navbar Header -->
        @include('layouts.admin.header')
        <!-- Navbar Header -->

        <!-- Content -->
          @yield('content')
        <!-- / Content -->

      </div>
        <!-- Footer -->
        @include('layouts.admin.footer')
        <!-- Footer -->
        <!-- BACK-TO-TOP -->
        <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>       

        @include('layouts.admin.js')
        @include('layouts.admin.toast')
        @yield('custom-js')
        <!-- CONTAINER END -->
		</div>
	</body>
</html>


<body class="app sidebar-mini">

			
        <!-- Switcher -->
		<div class="switcher-wrapper">
			<div class="demo_changer">
				<div class="demo-icon bg_dark">
					<i class="fa fa-cog fa-spin  text_primary"></i>
				</div>
				<div class="form_holder sidebar-right1">
					<div class="row">
						<div class="predefined_styles">
							<div class="swichermainleft text-center">
								<div class="p-3 d-grid gap-2">
									<a href="https://laravel.spruko.com/zanex/index.html" class="btn ripple btn-primary mt-0">View Demo</a>
									<a href="https://themeforest.net/item/zanex-bootstrap-5-admin-dashboard-template/32984858" class="btn ripple btn-secondary">Buy Now</a>
									<a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-red">Our Portfolio</a>
								</div>
							</div>
							<div class="swichermainleft mb-4">
								<h4>Navigation Style</h4>
								<div class="ps-3 pe-3 pt-3 d-grid gap-2">
									<a class="btn btn-success " href="vertical-light.html"> Leftmenu</a>
									<a class="btn btn-danger" href="horizontal-light.html"> Horizontal </a>
								</div>
							</div>
							<div class="swichermainleft mb-4">
								<h4>Navigation  RTL Style</h4>
								<div class="ps-3 pe-3 pt-3 d-grid gap-2">
									<a class="btn btn-success " href="https://laravel.spruko.com/zanex/rtl/vertical-light"> Leftmenu-RTL</a>
									<a class="btn btn-danger" href="https://laravel.spruko.com/zanex/rtl/horizontal-light"> Horizontal-RTL </a>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Theme Layout</h4>
								<div class="switch_section d-flex my-4">
									<ul class="switch-buttons row">
										<li class="col-md-6 mb-0">
											<button type="button" id="background-left1" class="bg-left1 wscolorcode1 button-image"></button>
											<span class="d-block">Light Theme</span>
										</li>
										<li class="col-md-6 mb-0">
											<button type="button" id="background-left2" class="bg-left2 wscolorcode1 button-image"></button>
											<span class="d-block">Dark Theme</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Header Styles Mode</h4>
								<div class="switch_section d-flex my-4">
									<ul class="switch-buttons row">
										<li class="col-md-6 light-bg">
											<button type="button" id="background1" class="bg1 wscolorcode1 button-image"></button>
											<span class="d-block">Light Header</span>
										</li>
										<li class="col-md-6">
											<button type="button" id="background2" class="bg2 wscolorcode1 button-image"></button>
											<span class="d-block">Color Header</span>
										</li>
										<li class="col-md-6 d-block mx-auto dark-bg">
											<button type="button" id="background3" class="bg3 wscolorcode1 button-image"></button>
											<span class="d-block">Dark Header</span>
										</li>
										<li class="col-md-6 d-block mx-auto">
											<button type="button" id="background11" class="bg8 wscolorcode1 button-image"></button>
											<span class="d-block">Gradient Header</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Leftmenu Styles Mode</h4>
								<div class="switch_section d-flex my-4">
									<ul class="switch-buttons row">
										<li class="col-md-6 mb-4">
											<button type="button" id="background4" class="bg4 wscolorcode1 button-image"></button>
											<span class="d-block">Light Menu</span>
										</li>
										<li class="col-md-6 mb-4">
											<button type="button" id="background5" class="bg5 wscolorcode1 button-image"></button>
											<span class="d-block">Color Menu</span>
										</li>
										<li class="col-md-6 mb-0 d-block mx-auto dark-bgmenu">
											<button type="button" id="background6" class="bg6 wscolorcode1 button-image"></button>
											<span class="d-block">Dark Menu</span>
										</li>
										<li class="col-md-6 mb-0 d-block mx-auto">
											<button type="button" id="background10" class="bg7 wscolorcode1 button-image"></button>
											<span class="d-block">Gradient Menu</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Layout-width Styles Mode</h4>
								<div class="switch_section d-flex my-4">
									<ul class="switch-buttons row">
										<li class="col-md-6 mb-4">
											<button type="button" id="background14" class="bg-layf wscolorcode1 button-image"></button>
											<span class="d-block">Full-Width</span>
										</li>
										<li class="col-md-6 mb-4">
											<button type="button" id="background15" class="bg-laybx wscolorcode1 button-image"></button>
											<span class="d-block">Boxed</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Side-menu layout Styles Mode</h4>
								<div class="switch_section d-flex my-4">
									<ul class="switch-buttons row">
										<li class="col-md-6 mb-4">
											<a href="#" class="swticher-link default-menu" data-sidetheme="assets/css/sidemenu.css"></a>
												<button type="button" class="bg-sided wscolorcode1 button-image"></button>
											<span class="d-block">Default</span>
										</li>
										<li class="col-md-6 mb-4">
											<a href="index1.html" class="swticher-link icontext-menu" data-sidetheme="assets/css/sidemenu-icontext.css"></a>
												<button type="button" class="bg-sideictxt wscolorcode1 button-image"></button>
											<span class="d-block">Icon-with Text</span>
										</li>
										<li class="col-md-6 mb-4 d-block mx-auto">
											<a href="#" class="swticher-link sideicon-menu" data-sidetheme="assets/css/sidemenu-icon.css"></a>
												<button type="button" class="bg-sideicon wscolorcode1 button-image"></button>
											<span class="d-block">Icon</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Layout Positions Mode</h4>
								<div class="switch_section d-flex my-4">
									<ul class="switch-buttons row">
										<li class="col-md-6 mb-4">
											<button type="button" id="background16" class="bg-left1 wscolorcode1 button-image"></button>
											<span class="d-block">Fixed</span>
										</li>
										<li class="col-md-6 mb-4">
											<button type="button" id="background17" class="bg-left1 wscolorcode1 button-image"></button>
											<span class="d-block">Scrollable</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Switcher -->			

		<!-- GLOBAL-LOADER -->
		<!-- <div id="global-loader">
			<img src="{{asset('admin/assets/images/loader.svg')}}" class="loader-img" alt="Loader">
		</div>  -->
		<!-- /GLOBAL-LOADER -->

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

        
				<!-- CONTAINER END -->
      </div>
      <!-- footer -->
   
	    
		</div>
	</body>










