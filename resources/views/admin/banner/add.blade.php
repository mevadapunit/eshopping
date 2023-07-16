@extends('layouts.app.admin-app')
@if(isset($banners))
@section('title', 'Banner Edit- '.env('APP_NAME'))
@else
@section('title', 'Banner Add- '.env('APP_NAME'))
@endif
@section('content')


<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-md-12">
         <div class="row mb-2">
            <div class="col-sm-6 mt-2">
                <h5>{{ isset($banners) ? 'Edit' : 'Add' }} Banner</h5>
            </div>
         </div>
         <form action="{{url('admin/banner/store')}}" name="frm" id="frm" method="post"
               enctype="multipart/form-data">
               @csrf
              <div class="card mb-4">
                <div class="card-body">
                  <input type="hidden" id="vUniqueCode" name="vUniqueCode"
                     value="@if(isset($banners)){{$banners->vUniqueCode}}@endif">
                  <div class="row g-3">
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Title</label>
                        <input type="text" name="vTitle" id="vTitle" class="form-control"
                           placeholder="Enter Banner Title"
                           value="@if(isset($banners)){{$banners->vTitle}}@endif">
                        <div id="vTitle_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Banner
                        </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Sub Title</label>
                        <input type="text" name="vSubTitle" id="vSubTitle" class="form-control"
                           placeholder="Enter Banner Sub Title"
                           value="@if(isset($banners)){{$banners->vSubTitle}}@endif">
                        <div id="vSubTitle_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Banner Sub Title
                        </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Order</label>
                        <select name="iOrder" id="iOrder" class="form-select">
                           @for($i=1; $i<=10; $i++)
                           <option value="{{$i}}"  @if(isset($banners)) @if($banners->iOrder ==
                           $i) selected @endif @endif>{{$i}}</option>
                           @endfor
                        </select>
                        <div id="iOrder_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Order</div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Menu</label>
                        <select name="eMenu" id="eMenu" class="form-select">
                           <option value="">Select Menu</option>
                           <option value="HOME" @if(isset($banners)) @if($banners->eMenu ==
                           'HOME') selected @endif @endif>HOME</option>
                           <option value="ABOUT US" @if(isset($banners)) @if($banners->eMenu == 'ABOUT US')
                           selected @endif @endif>ABOUT US</option>
                           <option value="RIDE WITH US" @if(isset($banners)) @if($banners->eMenu ==
                           'RIDE WITH US') selected @endif @endif>RIDE WITH US</option>
                           <option value="AIRPORT GUIDE" @if(isset($banners)) @if($banners->eMenu ==
                           'AIRPORT GUIDE') selected @endif @endif>AIRPORT GUIDE</option>
                           <option value="USER GUIDE" @if(isset($banners)) @if($banners->eMenu ==
                           'USER GUIDE') selected @endif @endif>USER GUIDE</option>
                           <option value="CONTACT US" @if(isset($banners)) @if($banners->eMenu ==
                           'CONTACT US') selected @endif @endif>CONTACT US</option>
                           <option value="AIRPORT GUIDE RIDE" @if(isset($banners)) @if($banners->eMenu ==
                           'AIRPORT GUIDE RIDE') selected @endif @endif>AIRPORT GUIDE RIDE</option>
                           <option value="DRIVE WITH US" @if(isset($banners)) @if($banners->eMenu ==
                           'DRIVE WITH US') selected @endif @endif>DRIVE WITH US</option>
                           <option value="SYDNEY" @if(isset($banners)) @if($banners->eMenu ==
                           'SYDNEY') selected @endif @endif>SYDNEY</option>
                           <option value="HOBART" @if(isset($banners)) @if($banners->eMenu ==
                           'HOBART') selected @endif @endif>HOBART</option>
                           <option value="PERTH" @if(isset($banners)) @if($banners->eMenu ==
                           'PERTH') selected @endif @endif>PERTH</option>
                           <option value="CANBERRA" @if(isset($banners)) @if($banners->eMenu ==
                           'CANBERRA') selected @endif @endif>CANBERRA</option>
                           <option value="MELBOURNE" @if(isset($banners)) @if($banners->eMenu ==
                           'MELBOURNE') selected @endif @endif>MELBOURNE</option>
                           <option value="ADELAIDE" @if(isset($banners)) @if($banners->eMenu ==
                           'ADELAIDE') selected @endif @endif>ADELAIDE</option>
                           <option value="DARWIN" @if(isset($banners)) @if($banners->eMenu ==
                           'DARWIN') selected @endif @endif>Darwin</option>
                        </select>
                        <div id="eMenu_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Banner Menu
                        </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Feature</label>
                        <select name="eFeature" id="eFeature" class="form-select">
                           <option value="">Select Feature</option>
                           <option value="Yes" @if(isset($banners)) @if($banners->eFeature ==
                           'Yes') selected @endif @endif>Yes</option>
                           <option value="No" @if(isset($banners)) @if($banners->eFeature == 'No')
                           selected @endif @endif>No</option>
                        </select>
                        <div id="eFeature_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Feature
                        </div>
                     </div>
                 
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Status</label>
                        <select name="eStatus" id="eStatus" class="form-select">
                           <option value="">Select Status</option>
                           <option value="Active" @if(isset($banners)) @if($banners->eStatus == 'Active')
                           selected @endif @endif>Active</option>
                           <option value="Inactive" @if(isset($banners)) @if($banners->eStatus ==
                           'Inactive') selected @endif @endif>Inactive</option>
                           <option value="Pending" @if(isset($banners)) @if($banners->eStatus ==
                           'Pending') selected @endif @endif>Pending</option>
                        </select>
                        <div id="eStatus_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Status
                        </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                            <label>Logo </label>
                            <input class="form-control media_image only_image" accept="image/jpg, image/jpeg, image/png" type="file" id="vLogo"
                                name="vLogo">
                            

                            <img style="width: 100px; border-radius: 10px;margin-top: 7px; display:none;" class="vLogo_preview_logo" id="vLogo_preview"
                                src="#" alt="your image" />

                            @if(isset($banners) && $banners->vLogo !='' &&
                            file_exists(public_path()."/uploads/banner/".$banners->vLogo))


                            <!-- for image -->
                            <img style="width: 100px; border-radius: 10px;margin-top: 7px;" id="logo_display"
                                value="@if(old('vLogo') == 'vLogo') selected @endif"
                                src="{{asset('uploads/banner/'.$banners->vLogo)}}">
                            
                            @elseif(isset($banners))
                            <!-- default image -->
                            
                            <div id="logo_none">
                                <img  style="display: block;" height="100" width="100" class="d-block rounded"
                                    src="{{ asset('admin/assets/img/no_image.png') }}" alt="No photo">
                            </div>
                          
                            <!-- selected image -->
                            <img style="width: 100px;display:none;border-radius: 10px;margin-top: 7px;" class="logo_Preview" src="#" alt="your image" />

                            @endif
                           

                            @if(!(isset($banners)))
                            <!-- default image -->
                            <div id="logo_none">
                                <img style="width: 100px; display: block;"
                                    src="{{ asset('admin/assets/img/no_image.png') }}" alt="No photo">
                            </div>
                            <!-- selected image -->
                            <img style="width: 100px;display:none;" class="logo_Preview" src="#" alt="your image" />
                            @endif
                            <div id="vLogo_error" class="error mt-1" style="color:red;display: none;">
                                Please Select Banner
                            </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                            <label>Image </label>
                            <input class="form-control media_image only_image" accept="image/jpg, image/jpeg, image/png" type="file" id="vImage"
                                name="vImage">

                            <img style="width: 100px; border-radius: 10px;margin-top: 7px; display:none;" class="vImage_preview_img" id="vImage_preview"
                                src="#" alt="your image" />

                            @if(isset($banners) && $banners->vImage !='' &&
                            file_exists(public_path()."/uploads/banner/".$banners->vImage))


                            <!-- for image -->
                            <img style="width: 100px; border-radius: 10px;margin-top: 7px;" id="image_display"
                                value="@if(old('vImage') == 'vImage') selected @endif"
                                src="{{asset('uploads/banner/'.$banners->vImage)}}">
                            
                            @elseif(isset($banners))
                            <!-- default image -->
                            
                            <div id="image_none">
                                <img  style="display: block;" height="100" width="100" class="d-block rounded"
                                    src="{{ asset('admin/assets/img/no_image.png') }}" alt="No photo">
                            </div>
                          
                            <!-- selected image -->
                            <img style="width: 100px;display:none;border-radius: 10px;margin-top: 7px;" class="image_Preview"
                                 src="#" alt="your image" />

                            @endif
                           

                            @if(!(isset($banners)))
                            <!-- default image -->
                            <div id="image_none">
                                <img style="width: 100px; display: block;"
                                    src="{{ asset('admin/assets/img/no_image.png') }}" alt="No photo">
                            </div>
                            <!-- selected image -->
                            <img style="width: 100px;display:none;" class="image_Preview"
                                 src="#" alt="your image" />
                            @endif
                            <div id="vImage_error" class="error mt-1" style="color:red;display: none;">
                                Please Select Banner
                            </div>
                     </div>
                  </div>
               </div>
               <div class="card-footer col-12 align-self-end d-inline-block mt-0 text-left">
                  <a href="javascript:;" class="btn btn-primary submit" id="save">Submit</a>
                  <a href="javascript:;" class="btn btn-primary loading" style="display: none;">
                  <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>Loading...
                  </a>
                  <a href="{{url('admin/banner')}}" class="btn-info btn">Back</a>
               </div>
              </div>
            </form>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
         </div>
     </div>
</div>
@endsection
@section('custom-css')
<style></style>
@endsection
@section('custom-js')
  
<script type="text/javascript">
 
 $("vLogo_preview_logo").hide();
// ------------ hide and show image or video or default image code start ---------------->
$("#vLogo").change(function() { // Check is a input type button
    var fileName = $("#vLogo").val();


    if (this.files && this.files[0] && this.files[0].name.match(/\.(jpg|jpeg|png|gif)$/) ) {
    if(fileName) { // returns true if the string is not empty
       // alert(fileName + " was selected");
        //alert("image selected");
         $("#vLogo_error").hide();
         $("#logo_display").hide();  //default image
         $("#vLogo_preview").show();
         $("#logo_none").hide();

    } else { // no file was selected


        $("#logo_display").show(); //default image
        $("#vLogo_preview").hide(); // selected image
        //alert("no file selected");
    }


   }
});

// ---------------------- get url link in image or video start preview ------------>

vLogo.onchange = evt => {
  $( "#vLogo_preview" ).removeClass("vLogo_preview_logo")
  $( "#logo_display" ).addClass("vLogo_preview_logo")
  const fileUrl = window.URL.createObjectURL(event.target.files[0]);
  const imgExtensions = ['jpg', 'png','jpeg'];
  const name = event.target.files[0].name;
  const lastDot = name.lastIndexOf('.');

  const ext = name.substring(lastDot + 1);

   if (imgExtensions.includes(ext)) {
   $("#vLogo_preview").show().attr("src", fileUrl);
  }

}
// ----------------- get link code end ----------------->

$(".vImage_preview_img").hide();
// ------------ hide and show image or video or default image code start ---------------->
$("#vImage").change(function() { // Check is a input type button
    var fileName = $("#vImage").val();


    if (this.files && this.files[0] && this.files[0].name.match(/\.(jpg|jpeg|png|gif)$/) ) {
    if(fileName) { // returns true if the string is not empty
       // alert(fileName + " was selected");
        //alert("image selected");
         $("#vImage_error").hide();
         $("#image_display").hide();  //default image
         $("#vImage_preview").show();
         $("#image_none").hide();
    } else { // no file was selected


        $("#image_display").show(); //default image
        $("#vImage_preview").hide(); // selected image
        //alert("no file selected");
    }


   }
});

// ---------------------- get url link in image or video start preview ------------>

vImage.onchange = evt => {
  $( "#vImage_preview" ).removeClass("vImage_preview_img")
  $( "#image_display" ).addClass("vImage_preview_img")
  const fileUrl = window.URL.createObjectURL(event.target.files[0]);
  const imgExtensions = ['jpg', 'png','jpeg'];
  const name = event.target.files[0].name;
  const lastDot = name.lastIndexOf('.');

  const ext = name.substring(lastDot + 1);

   if (imgExtensions.includes(ext)) {
   $("#vImage_preview").show().attr("src", fileUrl);
  }

}
// ----------------- get link code end ----------------->

   $(document).on('click', '.submit', function() {
       var vUniqueCode = $("#vUniqueCode").val();
       var vTitle      = $("#vTitle").val();
       var eStatus     = $("#eStatus").val();
       var eFeature    = $("#eFeature").val();
       var vSubTitle   = $("#vSubTitle").val();
       var eMenu       = $("#eMenu").val();
       var vLogo       = $("#vLogo").val();
 

       var error = false;

       // if (vSubTitle.length == 0) {
       //     $("#vSubTitle_error").show();
       //     error = true;
       // } else {
       //     $("#vSubTitle_error").hide();
       // }
       @if(!(isset($banners)))
       if (vLogo.length == 0) {
           $("#vLogo_error").show();
           error = true;
       } else {
           $("#vLogo_error").hide();
       }
       @endif
       if (eMenu.length == 0) {
           $("#eMenu_error").show();
           error = true;
       } else {
           $("#eMenu_error").hide();
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