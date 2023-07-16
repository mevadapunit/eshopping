@extends('layouts.app.admin-app')
@if(isset($faqs))
@section('title', 'Faq Add- '.env('APP_NAME'))
@else
@section('title', 'Faq Add- '.env('APP_NAME'))
@endif
@section('content')


<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-md-12">
         <div class="row mb-2">
            <div class="col-sm-6 mt-2">
                <h5>{{ isset($faqs) ? 'Edit' : 'Add' }} Faq</h5>
            </div>
         </div>
         <form action="{{url('admin/faq/store')}}" name="frm" id="frm" method="post"
               enctype="multipart/form-data">
               @csrf
              <div class="card mb-4">
                <div class="card-body">
                  <input type="hidden" id="vUniqueCode" name="vUniqueCode"
                     value="@if(isset($faqs)){{$faqs->vUniqueCode}}@endif">
                  <div class="row g-3">
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Title</label>
                        <input type="text" name="vTitle" id="vTitle" class="form-control"
                           placeholder="Enter Title"
                           value="@if(isset($faqs)){{$faqs->vTitle}}@endif">
                        <div id="vTitle_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Title
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Feature</label>
                        <select name="eFeature" id="eFeature" class="form-select">
                           <option value="">Select Feature</option>
                           <option value="Yes" @if(isset($faqs)) @if($faqs->eFeature ==
                           'Yes') selected @endif @endif>Yes</option>
                           <option value="No" @if(isset($faqs)) @if($faqs->eFeature == 'No')
                           selected @endif @endif>No</option>
                        </select>
                        <div id="eFeature_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Feature
                        </div>
                     </div>
         
               
                    <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>User</label>
                        <select name="eUser" id="eUser" class="form-select">
                           <option value="">Select User</option>
                           <option value="Driver" @if(isset($faqs)) @if($faqs->eUser == 'Driver')
                           selected @endif @endif>Driver</option>
                           <option value="Rider" @if(isset($faqs)) @if($faqs->eUser ==
                           'Rider') selected @endif @endif>Rider</option>
                        </select>
                        <div id="eUser_error" class="error mt-1" style="color:red;display: none;">
                           Please Select User
                        </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6 ridertype" style="display:none">
                        <label>Type</label>
                        <select name="vTypeRider" id="vTypeRider" class="form-select">
                           <option value="">Select Type</option>
                           <option value="Booking an Snap Ride" @if(isset($faqs)) @if($faqs->vType == 'Booking an Snap Ride')
                           selected @endif @endif>Booking an Snap Ride</option>
                           <option value="Ride Types" @if(isset($faqs)) @if($faqs->vType ==
                           'Ride Types') selected @endif @endif>Ride Types</option>
                           <option value="Fares and Charges" @if(isset($faqs)) @if($faqs->vType ==
                           'Fares and Charges') selected @endif @endif>Fares and Charges</option>
                           <option value="Payment" @if(isset($faqs)) @if($faqs->vType ==
                           'Payment') selected @endif @endif>Payment</option>
                           <option value="Tips" @if(isset($faqs)) @if($faqs->vType ==
                           'Tips') selected @endif @endif>Tips</option>
                           <option value="Account & Sign Up" @if(isset($faqs)) @if($faqs->vType ==
                           'Account & Sign Up') selected @endif @endif>Account & Sign Up</option>
                           <option value="Safe" @if(isset($faqs)) @if($faqs->vType ==
                           'Safe') selected @endif @endif>Safe</option>
                        </select>
                        <div id="vTypeRider_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Type
                        </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6 drivertype" style="display:none">
                        <label>Type</label>
                        <select name="vTypeDriver" id="vTypeDriver" class="form-select">
                           <option value="">Select Type</option>
                           <option value="Sign-Up Application" @if(isset($faqs)) @if($faqs->vType ==
                           'Sign-Up Application') selected @endif @endif>Sign-Up Application</option>
                           <option value="Your Vehicle" @if(isset($faqs)) @if($faqs->vType ==
                           'Your Vehicle') selected @endif @endif>Your Vehicle</option>
                           <option value="Driver Partners" @if(isset($faqs)) @if($faqs->vType ==
                           'Driver Partners') selected @endif @endif>Driver Partners</option>
                           <option value="Fatigue Management" @if(isset($faqs)) @if($faqs->vType ==
                           'Fatigue Management') selected @endif @endif>Fatigue Management</option>
                            <option value="Support" @if(isset($faqs)) @if($faqs->vType ==
                           'Support') selected @endif @endif>Support</option>
                            <option value="Best Practices" @if(isset($faqs)) @if($faqs->vType ==
                           'Best Practices') selected @endif @endif>Best Practices</option>
                        </select>
                        <div id="vTypeDriver_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Type
                        </div>
                     </div>

                    <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Status</label>
                        <select name="eStatus" id="eStatus" class="form-select">
                           <option value="">Select Status</option>
                           <option value="Active" @if(isset($faqs)) @if($faqs->eStatus == 'Active')
                           selected @endif @endif>Active</option>
                           <option value="Inactive" @if(isset($faqs)) @if($faqs->eStatus ==
                           'Inactive') selected @endif @endif>Inactive</option>
                           <option value="Pending" @if(isset($faqs)) @if($faqs->eStatus ==
                           'Pending') selected @endif @endif>Pending</option>
                        </select>
                        <div id="eStatus_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Status
                        </div>
                     </div>
                  </div>

                  <div class="form-group col-xl-12 col-lg-12 col-md-12">
                     <label>Description</label>
                     <textarea name="tDescription" id="tDescription" class="form-control"
                        placeholder="Enter Description" value="@if(isset($faqs)){{$faqs->tDescription}}@endif">@if(isset($faqs)){{$faqs->tDescription}}@endif</textarea> 
                     <div id="tDescription_error" class="error mt-1" style="color:red;display: none;">
                        Please Enter Description
                     </div>
                    </div>
                  </div>
                <div class="card-footer col-12 align-self-end d-inline-block mt-0 text-left">
                  <a href="javascript:;" class="btn btn-primary submit" id="save">Submit</a>
                  <a href="javascript:;" class="btn btn-primary loading" style="display: none;">
                  <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>Loading...
                  </a>
                  <a href="{{url('admin/faq')}}" class="btn-info btn">Back</a>
               </div>
              </div>
            </form>
         </div>
     </div>
</div>
@endsection
@section('custom-css')
<style></style>
@endsection
@section('custom-js')
 
 <script type="text/javascript" src="{{asset('admin/assets/js/tinymce/tinymce.min.js')}}"></script>
<script type="text/javascript">
  tinymce.init({
    selector: 'textarea',
    height: 150,
    menubar: false,
    plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code help wordcount'
    ],
    toolbar: 'insert | undo redo | formatselect fontselect fontsizeselect | bold italic underline backcolor forecolor | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent | removeformat | blockquote | help | code',
    content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
    ],
    theme_advanced_fonts : "Andale Mono=andale mono,times;"+
    "Arial=arial,helvetica,sans-serif;"+
    "Arial Black=arial black,avant garde;"+
    "Book Antiqua=book antiqua,palatino;"+
    "Comic Sans MS=comic sans ms,sans-serif;"+
    "Courier New=courier new,courier;"+
    "Georgia=georgia,palatino;"+
    "Helvetica=helvetica;"+
    "Impact=impact,chicago;"+
    "Symbol=symbol;"+
    "Tahoma=tahoma,arial,helvetica,sans-serif;"+
    "Terminal=terminal,monaco;"+
    "Times New Roman=times new roman,times;"+
    "Trebuchet MS=trebuchet ms,geneva;"+
    "Verdana=verdana,geneva;"+
    "Webdings=webdings;"+
    "Wingdings=wingdings,zapf dingbats",
    fontsize_formats: '11px 12px 14px 16px 18px 24px 36px 48px',
    textcolor_map: [
    "000000", "Black",
    "993300", "Burnt orange",
    "333300", "Dark olive",
    "003300", "Dark green",
    "003366", "Dark azure",
    "000080", "Navy Blue",
    "333399", "Indigo",
    "333333", "Very dark gray",
    "800000", "Maroon",
    "FF6600", "Orange",
    "808000", "Olive",
    "008000", "Green",
    "008080", "Teal",
    "0000FF", "Blue",
    "666699", "Grayish blue",
    "808080", "Gray",
    "FF0000", "Red",
    "FF9900", "Amber",
    "99CC00", "Yellow green",
    "339966", "Sea green",
    "33CCCC", "Turquoise",
    "3366FF", "Royal blue",
    "800080", "Purple",
    "999999", "Medium gray",
    "FF00FF", "Magenta",
    "FFCC00", "Gold",
    "FFFF00", "Yellow",
    "00FF00", "Lime",
    "00FFFF", "Aqua",
    "00CCFF", "Sky blue",
    "993366", "Red violet",
    "FFFFFF", "White",
    "FF99CC", "Pink",
    "FFCC99", "Peach",
    "FFFF99", "Light yellow",
    "CCFFCC", "Pale green",
    "CCFFFF", "Pale cyan",
    "99CCFF", "Light sky blue",
    "CC99FF", "Plum"
    ]
  });
</script> 
<script type="text/javascript">
var user = $('#eUser').val();
if(user == "Driver")
{
  $('.drivertype').show();
  $('.ridertype').hide();
  $('#vTypeRider').val('');
}else if(user == "Rider")
{
  $('.ridertype').show();
  $('.drivertype').hide();
  $('#vTypeDriver').val('');
}
$("#eUser").change(function(){
     var user = $(this).val();
     if(user == "Driver")
     {
        $('.drivertype').show();
        $('.ridertype').hide();
        $('#vTypeRider').val('');
     }else if(user == "Rider")
     {
        $('.ridertype').show();
        $('.drivertype').hide();
        $('#vTypeDriver').val('');
     }
});

   $(document).on('click', '.submit', function() {
       var vUniqueCode = $("#vUniqueCode").val();
       var vTitle      = $("#vTitle").val();
       var eStatus     = $("#eStatus").val();
       var eFeature    = $("#eFeature").val();
       tDescription    = tinyMCE.get('tDescription').getContent();
      
       var error = false;

       if (tDescription.length == 0) {
           $("#tDescription_error").show();
           error = true;
       } else {
           $("#tDescription_error").hide();
       }

       if (vTitle.length == 0) {
           $("#vTitle_error").show();
           error = true;
       } else {
           $("#vTitle_error").hide();
       }
       if (eStatus.length == 0) {
           error = true;
           $("#eStatus_error").show();
       } else {
           $("#eStatus_error").hide();
       }

        if (eFeature.length == 0) {
           error = true;
           $("#eFeature_error").show();
       } else {
           $("#eFeature_error").hide();
       }
   
       if (error == true) {
         return false;
      } else {
         $('.submit').hide();
         $('.loading').show();
         
         setTimeout(function() {
            $("#frm").submit();
            return true;
         }, 1000);
      }
   
   });
   
</script>
@endsection