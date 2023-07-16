@php
  $setting_info = \App\Helper\GeneralHelper::setting_info('Company');
  $setting_social = \App\Helper\GeneralHelper::setting_info('Social');
@endphp

<footer>
    <div class="container">
      <div class="footer-content">
        <div class="footer-copy-wrap">
          <ul class="footer-menu">
            <li class="nav-iteam"><a rel="dofollow" class="nav-link {{ Route::is('front.terms_condition.terms_condition') ? 'active' : '' }}" href="{{route('front.terms_condition.terms_condition')}}">Terms & Conditions</a></li>
            <li class="nav-iteam"><a rel="dofollow" class="nav-link {{ Route::is('front.privacy_policy.privacy_policy') ? 'active' : '' }}" href="{{route('front.privacy_policy.privacy_policy')}}">Privacy Policy</a></li>
            <li class="nav-iteam"><a rel="dofollow" class="nav-link {{ Route::is('front.legal.legal') ? 'active' : '' }}" href="{{route('front.legal.legal')}}">Legal</a></li>
            <li class="nav-iteam"><a rel="dofollow" class="nav-link {{ Route::is('front.rider_faq.rider_faq') ? 'active' : '' }}" href="{{route('front.rider_faq.rider_faq')}}">Rider FAQs</a></li>
            <li class="nav-iteam"><a rel="dofollow" class="nav-link {{ Route::is('front.driver_faq.driver_faq') ? 'active' : '' }}" href="{{route('front.driver_faq.driver_faq')}}">Driver FAQs</a></li>
            <li class="nav-iteam"><a rel="dofollow" class="nav-link {{ Route::is('front.offers.offers') ? 'active' : '' }}" href="{{route('front.offers.offers')}}">Offers</a></li>
          </ul>
        </div>
        <div class="footer-copy">
          <div class="footer-icon-group">
            <a rel="dofollow" href="{{$setting_social['SOCIAL_FACEBOOK']['vValue']}}" class="footer-icon">
              <img src="{{asset('front/assets/img/facebook-icon.png')}}" alt="Facebook" width="25" height="25">
            </a>
            <a rel="dofollow" href="{{$setting_social['SOCIAL_INSTAGRAM']['vValue']}}" class="footer-icon">
              <img src="{{asset('front/assets/img/instagram-icon.png')}}" alt="Instagram" width="25" height="25">
            </a>
            <a rel="dofollow" href="{{$setting_social['SOCIAL_TWITTER']['vValue']}}" class="footer-icon">
              <img src="{{asset('front/assets/img/twitter-icon.png')}}" alt="TWITTER" width="25" height="25">
            </a>
          </div>
          <div class="copy-text sub-text">{{$setting_info['COPYRIGHTED_TEXT']['vValue']}}.</div>

        </div>
      </div>
    </div>
    </div>
  </footer>
