@extends('layouts.app.front-app')
@section('title', 'Contact Us - '.env('APP_NAME'))

@section('content')
  <div class="page-wrap">
    <div class="container">
      <section class="contact-page">
        @if($contactbanner != null)
        @foreach($contactbanner as $values)
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
      <section class="pt-90 ">
        <div class="inqury-section">
          <div class="row support-sec">
            <div class="col-lg-2">
              <h2 class="h2">24/7 Support</h2>
            </div>
            <div class="col-lg-3">
              <div class="contact-box">
                <div class="icon-wrap">
                  <img src="{{asset('front/assets/img/call-icon.png')}}" alt="icon" class="img-fluid" width="29" height="29">
                </div>
                <div class="desc">
                  <p class="sub-text">Phone</p>
                  <a href="callto:@if($supportphone != null){{$supportphone->vValue}}@endif" class="h4"> @if($supportphone != null){{$supportphone->vValue}}@endif</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="contact-box">
                <div class="icon-wrap">
                  <img src="{{asset('front/assets/img/email-icon.png')}}" alt="icon" class="img-fluid" width="29" height="29">
                </div>
                <div class="desc">
                  <p class="sub-text">Email
                  </p>
                   @if($supportemail != null) <?php $supportemailData = explode(",",$supportemail->vValue);?> @endif
                   <a href="mailto:@if($supportemailData[0] != null){{$supportemailData[0]}}@endif" class="h4"> @if($supportemailData[0] != null){{$supportemailData[0]}}@endif</a><br>
                   <a href="mailto:@if($supportemailData[1] != null){{$supportemailData[1]}}@endif" class="h4"> @if($supportemailData[1] != null){{$supportemailData[1]}}@endif</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="contact-box">
                <div class="icon-wrap">
                  <img src="{{asset('front/assets/img/chat-icon.png')}}" alt="icon" class="img-fluid" width="29" height="29">
                </div>
                <div class="desc">
                  <p class="sub-text">Chat</p>
                  <a href="http://m.me/mybot?ref=@if($supportchat != null){{$supportchat->vValue}}@endif" class="h4">@if($supportchat != null){{$supportchat->vValue}}@endif</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row support-sec">
            <div class="col-lg-2">
              <h2 class="h2">General Inquiry</h2>
            </div>
            <div class="col-lg-3">
              <div class="contact-box">
                <div class="desc inqury">
                  <p class="sub-text">Phone</p>
                  <a href="callto:@if($generalinquiryphone != null){{$generalinquiryphone->vValue}}@endif" class="h4">@if($generalinquiryphone != null){{$generalinquiryphone->vValue}}@endif</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="contact-box">
                <div class="desc inqury">
                  <p class="sub-text">Email </p>
                  <a href="mailto:@if($generalinquiryemail != null){{$generalinquiryemail->vValue}}@endif" class="h4"> @if($generalinquiryemail != null){{$generalinquiryemail->vValue}}@endif</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="contact-box">
                <div class="desc inqury">
                  <p class="sub-text">Timings</p>
                  <a href="#"class="h4">Monday to Friday 8AM to 5PM</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pt-90 visit-us">
        <h3 class="h3">Visit Us at Office</h3>
        <div class="row support-sec mt-60">
          <div class="col-md-6">
            <div class="contact-box">
              <div class="icon-wrap">
                <img src="{{asset('front/assets/img/call-icon.png')}}" alt="icon" class="img-fluid" width="29" height="29">
              </div>
              <div class="desc">
                <p class="sub-text">Address</p>
                <a href="https://www.google.com/maps?q=@if($companyaddress != null){{str_replace(' ','+',strip_tags($companyaddress->vValue))}}@endif" class="h4"> @if($companyaddress != null){!! $companyaddress->vValue !!}@endif</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="contact-box">
              <div class="icon-wrap">
                <img src="{{asset('front/assets/img/email-icon.png')}}" alt="icon" class="img-fluid" width="29" height="29">
              </div>
              <div class="desc">
                <p class="sub-text">Email
                </p>
                <a href="mailto:@if($companyemail != null){{$companyemail->vValue}}@endif" class="h4"> @if($companyemail != null){{$companyemail->vValue}}@endif</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row support-sec mt-60">
          <div class="col-xxl-3 col-md-6">
            <div class="contact-box verification">
              <p class="sub-text">Partner Support</p>
              <a href="mailto:@if($partnersupportemail != null){{$partnersupportemail->vValue}}@endif" class="h4"> @if($partnersupportemail != null){{$partnersupportemail->vValue}}@endif</a>
            </div>
          </div>
          <div class="col-xxl-3 col-md-6">
            <div class="contact-box verification">
              <p class="sub-text">Partner Support</p>
              <a href="https://www.google.com/maps?q=@if($companyaddress != null){{str_replace(' ','+',strip_tags($partnersupportaddress->vValue))}}@endif" class="h4"> @if($partnersupportaddress != null){{$partnersupportaddress->vValue}}@endif</a>
            </div>
          </div>
          <div class="col-xxl-3 col-md-6">
            <div class="contact-box verification">
              <p class="sub-text">Rider Support</p>
              <a href="mailto:@if($ridersupportemail != null){{$ridersupportemail->vValue}}@endif" class="h4"> @if($ridersupportemail != null){{$ridersupportemail->vValue}}@endif</a>
            </div>
          </div>
          <div class="col-xxl-3 col-md-6">
            <div class="contact-box verification">
              <p class="sub-text">@if($businessmanagername != null){{$businessmanagername->vValue}}@endif,<br>Business Manager</p>
              <a href="mailto:@if($businessmanageremail != null){{$businessmanageremail->vValue}}@endif" class="h4"> @if($businessmanageremail != null){{$businessmanageremail->vValue}}@endif</a>
            </div>
          </div>
        </div>
      </section>
      <section class="pt-90 our-team">
        @if($team != null)
        @foreach($team as $values)
        <div class="team-card">
          <div class="team-profile">
            @if($values->vImage != null && file_exists(public_path()."/uploads/team/".$values->vImage))
            <img src="{{asset('uploads/team/'.$values->vImage)}}" alt="team-member" class="img-fluid" width="123" height="123">
            @else
            <img src="{{asset('front/assets/img/no_image.png')}}" alt="team-member" class="img-fluid" width="123" height="123">
            @endif
          </div>
          <h4 class="h3 profile-name">@if($values->vName != null){{$values->vName}}@endif</h4>
          <p class="sub-text deg">@if($values->vPosition != null){{$values->vPosition}}@endif</p>
          <a href="mailto:@if($values->vEmail != null){{$values->vEmail}}@endif" class="sub-text mail">@if($values->vEmail != null){{$values->vEmail}}@endif</a>
        </div>
        @endforeach
        @endif

      </section>
      <section class="pt-90 lost-found">
        <div class="row">
          <div class="col-lg-6 property-lost">
            <div class="process-chart">
              <div class="chart-img">
                <img src="{{asset('front/assets/img/share-icon.png')}}" alt="process-icon" class="img-contain"  width="98" height="98">
              </div>
              <div class="chart-img">
                <img src="{{asset('front/assets/img/driver-icon.png')}}" alt="process-icon"class="img-contain"  width="98" height="98">
              </div>
              <div class="chart-img">
                <img src="{{asset('front/assets/img/car-share.png')}}" alt="process-icon"class="img-contain"  width="98" height="98">
              </div>
              <div class="chart-img">
                <img src="{{asset('front/assets/img/locaton-share.png')}}" alt="process-icon"class="img-contain"  width="98" height="98">
              </div>
            </div>
            <div class="mt-60">
              <h2 class="h2 text-start">Request Support or Report Lost / Found Property</h2>
              <p class="sub-text mt-30">Please mention Trip Reference Number (TRN) | The registration number of the
                vehicle | The driver's phone number, or the customer's phone number. (If available)</p>
            </div>
          </div>
          <div class="col-lg-6 contact-us form">
            <form action="{{url('contact-us/store')}}" name="contactusfrm" id="contactusfrm" method="post"
               enctype="multipart/form-data">
               @csrf
              <div class="common-input">
                <input type="text" name="vName"   class="form-control" id="vName" placeholder="Name">
                <div id="vName_error" class="error" style="color:red;display: none;">Please Enter Name</div>
              </div>
              <div class="common-input">
                <input type="text" class="form-control" maxlength="10"  onkeypress="return phonevalidate(event)" id="vPhone" name="vPhone" placeholder="Contact Number">
                <div id="vPhone_error" class="error " style="color:red;display: none;">Please Enter Contact Number</div>
                <div id="vPhone_error" class="error " style="color:red;display: none;">Please Enter Valid Contact Number</div>
              </div>
              <div class="common-input">
                <input type="text" class="form-control" id="vEmail" name="vEmail" placeholder="Email Address *">
                <div id="vEmail_error" class="error " style="color:red;display: none;">Please Enter Email</div>
                <div id="vEmail_valid_error" class="error " style="color:red;display: none;">Please Enter Valid Email</div>
              </div>
              <div class="common-input">
                <input type="text" class="form-control" id="vTRN" name="vTRN"  placeholder="TRN">
                <div id="vTRN_error" class="error " style="color:red;display: none;">Please Enter TRN Number</div>
                <div id="vTRN_valid_error" class="error " style="color:red;display: none;">Please Enter Valid TRN Number</div>
              </div>
              <div class="check-grup-wrap">
                    <div class="check-grup ">
                        <div class="form-check">
                        <input class="form-check-input subject" value="LOST / FOUND PROPERTY" type="checkbox"  name="vSubject" id="vSubject">
                        <label class="form-check-label" for="vSubject">
                            LOST / FOUND PROPERTY
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input subject" value="COMPLAINT" type="checkbox" name="vSubject" id="vSubject">
                        <label class="form-check-label" for="vSubject">
                            COMPLAINT
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input subject" value="OTHER" type="checkbox" name="vSubject" id="vSubject">
                        <label class="form-check-label" for="vSubject">
                            OTHER
                        </label>
                        </div>
                    </div>
                    <div id="vSubject_error" class="error " style="color:red;display: none;">Please Select Subject</div>
                </div>
              <div class=" common-input">
                <label for="vFile" class="me-2">Attachment</label>
                <input class="form-control" type="file" name="vFile" id="vFile" accept="image/*,.pdf,.doc">
                <div id="vFile_error" class="error " style="color:red;display: none;">Please Select Subject</div>
              </div>
              <div class="common-input">
                <textarea class="form-control" placeholder="Message" id="tMessage" name="tMessage" rows="3"></textarea>
                <div id="tMessage_error" class="error " style="color:red;display: none;">Please Enter Message</div>
              </div>
              <div class="check-grup-wrap">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="eTermsAndCondition">
                        <label class="form-check-label" for="eTermsAndCondition">
                        I have read and agree with the stated Privacy Policy
                        and Terms Conditions
                        </label>
                        <div id="eTermsAndCondition_error" class="error " style="color:red;display: none;">Please Agree Terms and Conditions.</div>
                    </div>
              </div>
              <div class="submit-btn">
                <a rel="dofollow" href="javascript:;" class="request btn contactussubmit">Request Support</a>
              </div>
            </form>
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
                    <a rel="dofollow" href="@if($apple_appstore_link->vValue != null){{$apple_appstore_link->vValue}}@endif"
                    target="_blank" class="dow-btn"><img src="{{asset('uploads/logo/'.$apple_appstore_logo->vValue)}}" alt="appstore" class="img-fluid" width="165" height="45"></a>
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

  <script type="text/javascript">

  $(function ()
     {
     $('.subject').click(function(e) {
     $('.subject').not(this).prop('checked', false);
     });
   });

   $("#eTermsAndCondition").change(function() {
    if(this.checked) {
       $('.contactussubmit').removeClass('disabled');
    }else
    {
       $('.contactussubmit').addClass('disabled');
    }
   });

  function phonevalidate (evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode (key);
    var regex = /[0-9]|\./;
    if ( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
    }
  }
    $(document).on('click', '.contactussubmit', function() {
       var vName       = $("#vName").val();
       var vPhone      = $("#vPhone").val();
       var vEmail      = $("#vEmail").val();
       var vTRN        = $("#vTRN").val();
       var tMessage    = $("#tMessage").val();


       var error = false;


      if ($('.subject').is(':checked')){
         $('#vSubject_error').hide();
      }else{
         $('#vSubject_error').show();
         error = true;
      }

      if($('#eTermsAndCondition').is(':checked')) {
      $('.contactussubmit').removeClass('disabled');
      $('#eTermsAndCondition_error').hide();
      }else
      {
         $('#eTermsAndCondition_error').show();
         error = true;
         $('.contactussubmit').addClass('disabled');
      }


      if (tMessage.length == 0) {
           $("#tMessage_error").show();
           error = true;
       } else {
           $("#tMessage_error").hide();
       }

       if (vPhone.length == 0) {
           $("#vPhone_error").show();
           error = true;
       } else {
           $("#vPhone_error").hide();
       }

       if (vName.length == 0) {
           $("#vName_error").show();
           error = true;
       } else {
           $("#vName_error").hide();
       }

       if (vEmail.length == 0) {
           $("#vEmail_error").show();
           error = true;
       } else {
           $("#vEmail_error").hide();
       }

       if (vTRN.length == 0) {
           $("#vTRN_error").show();
           error = true;
       } else {
           $("#vTRN_error").hide();
       }

       if (error == true) {
         return false;
      } else {


         setTimeout(function() {
            $("#contactusfrm").submit();
            return true;
         }, 1000);
      }

    });

  </script>
  @endsection
