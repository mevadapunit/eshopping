
@if(!empty(Session::get('error')))
<input type="hidden" id="error_msg" value="{{Session::get('error')}}">
@endif
@if(!empty(Session::get('success')))
<input type="hidden" id="success_msg" value="{{Session::get('success')}}">
@endif
 <!-- Navbar Start -->
<header  class="navbar-wrap">

      <div class="container">
        <div class="navbar">
          <div class="navbar-brand">
            <a rel="dofollow" href="{{route('front.home')}}" class="brand-logo">
              <img src="{{asset('front/assets/img/logo.png')}}" alt="logo" title="Snap-Ride" width="100" height="73">
            </a>
          </div>
          <div class="nav-mid">
            <ul class="navbar-menu">
              <li class="nav-iteam">
                <a rel="dofollow" href="{{route('front.home')}}" class="nav-link {{ Route::is('front.home') ? 'active' : '' }}">HOME</a>
              </li>
              <li class="nav-iteam">
                <a rel="dofollow" href="{{route('front.about_us.about_us')}}" class="nav-link {{ Route::is('front.about_us.about_us') ? 'active' : '' }}">ABOUT US</a>
              </li>
              <li class="nav-iteam">
                <a rel="dofollow" href="{{route('front.ride_with_us.ride_with_us')}}" class="nav-link {{ Route::is('front.ride_with_us.ride_with_us') ? 'active' : '' }}">RIDE WITH US</a>
              </li>
              <li class="nav-iteam">
                <a rel="dofollow" href="{{route('front.airport_guide_ride.airport_guide_ride')}}" class="nav-link {{ Route::is('front.airport_guide_ride.airport_guide_ride') ? 'active' : '' }}">AIRPORT GUIDE </a>
              </li>
              <li class="nav-iteam">
                <a rel="dofollow" href="{{route('front.user_guide.user_guide')}}" class="nav-link {{ Route::is('front.user_guide.user_guide') ? 'active' : '' }}">USER GUIDE</a>
              </li>
              <li class="nav-iteam">
                <a rel="dofollow" href="{{route('front.contact_us.contact_us')}}" class="nav-link {{ Route::is('front.contact_us.contact_us') ? 'active' : '' }}">CONTACT</a>
              </li>
            </ul>
            <div class="navbar-btn-grup">
              <a rel="dofollow" href="{{route('front.driver_signup.driver_signup')}}" class="main-btn">Driver Sign-Up</a>
            </div>
            <div class="offcanvash-wrap">
                <div class="nav-drop">
                <button class="btn  navbar-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                    aria-controls="offcanvasTop">
                    <span class="line-toggle"></span>
                    <span class="line-toggle"></span>
                    <span class="line-toggle"></span>
                </button>
                </div>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>

                <div class="offcanvas-body">
                    <ul class="navbar-menu">
                    <li class="nav-iteam">
                        <a rel="dofollow" href="{{route('front.home')}}" class="nav-link {{ Route::is('front.home') ? 'active' : '' }}">HOME</a>
                    </li>
                    <li class="nav-iteam">
                        <a rel="dofollow" href="{{route('front.about_us.about_us')}}" class="nav-link {{ Route::is('front.about_us.about_us') ? 'active' : '' }}">ABOUT US</a>
                    </li>
                    <li class="nav-iteam">
                        <a rel="dofollow" href="{{route('front.ride_with_us.ride_with_us')}}" class="nav-link {{ Route::is('front.ride_with_us.ride_with_us') ? 'active' : '' }}">RIDE WITH US</a>
                    </li>
                    <li class="nav-iteam">
                        <a rel="dofollow" href="{{route('front.airport_guide_ride.airport_guide_ride')}}" class="nav-link {{ Route::is('front.airport_guide_ride.airport_guide_ride') ? 'active' : '' }}">AIRPORT GUIDE </a>
                    </li>
                    <li class="nav-iteam">
                        <a rel="dofollow" href="{{route('front.user_guide.user_guide')}}" class="nav-link {{ Route::is('front.user_guide.user_guide') ? 'active' : '' }}">USER GUIDE</a>
                    </li>
                    <li class="nav-iteam">
                        <a rel="dofollow" href="{{route('front.contact_us.contact_us')}}" class="nav-link {{ Route::is('front.contact_us.contact_us') ? 'active' : '' }}">CONTACT</a>
                    </li>
                    </ul>
                    <div class="mobile-btn">
                    <a rel="dofollow" href="{{route('front.driver_signup.driver_signup')}}" class="main-mobile-btn">Driver Sign-Up</a>
                    </div>

                </div>
                </div>
            </div>

          </div>
        </div>
      </div>
    </header>
