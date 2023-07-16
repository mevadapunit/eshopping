@extends('layouts.app.admin-app')
@if(isset($getrideanytimes))
@section('title', 'Get Ride Anytime Edit- '.env('APP_NAME'))
@else
@section('title', 'Get Ride Anytime Add- '.env('APP_NAME'))
@endif
@section('content')


<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-md-12">
         <div class="row mb-2">
            <div class="col-sm-6 mt-2">
                <h5>{{ isset($getrideanytimes) ? 'Edit' : 'Add' }} Get Ride Anytime</h5>
            </div>
         </div>
         <form action="{{url('admin/getrideanytime/store')}}" name="frm" id="frm" method="post"
               enctype="multipart/form-data">
               @csrf
              <div class="card mb-4">
                <div class="card-body">
                  <input type="hidden" id="vUniqueCode" name="vUniqueCode"
                     value="@if(isset($getrideanytimes)){{$getrideanytimes->vUniqueCode}}@endif">
                  <div class="row g-3">
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Title</label>
                        <input type="text" name="vTitle" id="vTitle" class="form-control"
                           placeholder="Enter Title"
                           value="@if(isset($getrideanytimes)){{$getrideanytimes->vTitle}}@endif">
                        <div id="vTitle_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Title
                        </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Description</label>
                        <textarea  name="tDescription" id="tDescription" class="form-control"
                           placeholder="Enter Description"
                           value="@if(isset($getrideanytimes)){{$getrideanytimes->tDescription}}@endif">@if(isset($getrideanytimes)){{$getrideanytimes->tDescription}}@endif</textarea> 
                        <div id="tDescription_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Description</div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Menu</label>
                        <select name="eMenu" id="eMenu" class="form-select">
                           <option value="">Select Menu</option>
                           <option value="HOME" @if(isset($getrideanytimes)) @if($getrideanytimes->eMenu ==
                           'HOME') selected @endif @endif>HOME</option>
                           <option value="ABOUT US" @if(isset($getrideanytimes)) @if($getrideanytimes->eMenu == 'ABOUT US')
                           selected @endif @endif>ABOUT US</option>
                           <option value="RIDE WITH US" @if(isset($getrideanytimes)) @if($getrideanytimes->eMenu ==
                           'RIDE WITH US') selected @endif @endif>RIDE WITH US</option>
                           <option value="AIRPORT GUIDE" @if(isset($getrideanytimes)) @if($getrideanytimes->eMenu ==
                           'AIRPORT GUIDE') selected @endif @endif>AIRPORT GUIDE</option>
                           <option value="USER GUIDE" @if(isset($getrideanytimes)) @if($getrideanytimes->eMenu ==
                           'USER GUIDE') selected @endif @endif>USER GUIDE</option>
                           <option value="CONTACT US" @if(isset($getrideanytimes)) @if($getrideanytimes->eMenu ==
                           'CONTACT US') selected @endif @endif>CONTACT US</option>
                        </select>
                        <div id="eMenu_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Menu
                        </div>
                     </div>


                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Feature</label>
                        <select name="eFeature" id="eFeature" class="form-select">
                           <option value="">Select Feature</option>
                           <option value="Yes" @if(isset($getrideanytimes)) @if($getrideanytimes->eFeature ==
                           'Yes') selected @endif @endif>Yes</option>
                           <option value="No" @if(isset($getrideanytimes)) @if($getrideanytimes->eFeature == 'No')
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
                           <option value="Active" @if(isset($getrideanytimes)) @if($getrideanytimes->eStatus == 'Active')
                           selected @endif @endif>Active</option>
                           <option value="Inactive" @if(isset($getrideanytimes)) @if($getrideanytimes->eStatus ==
                           'Inactive') selected @endif @endif>Inactive</option>
                           <option value="Pending" @if(isset($getrideanytimes)) @if($getrideanytimes->eStatus ==
                           'Pending') selected @endif @endif>Pending</option>
                        </select>
                        <div id="eStatus_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Status
                        </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                            <label>Image </label>
                            <input class="form-control media_image only_image" accept="image/jpg, image/jpeg, image/png, image/svg" type="file" id="vImage"
                                name="vImage">

                            <img style="width: 100px; border-radius: 10px;margin-top: 7px; display:none;" class="vImage_preview_img" id="vImage_preview"
                                src="#" alt="your image" />

                            @if(isset($getrideanytimes) && $getrideanytimes->vImage !='' &&
                            file_exists(public_path()."/uploads/get_ride_anytime/".$getrideanytimes->vImage))


                            <!-- for image -->
                            <img style="width: 100px; border-radius: 10px;margin-top: 7px;" id="image_display"
                                value="@if(old('vImage') == 'vImage') selected @endif"
                                src="{{asset('uploads/get_ride_anytime/'.$getrideanytimes->vImage)}}">
                            
                            @elseif(isset($getrideanytimes))
                            <!-- default image -->
                            
                            <div id="image_none">
                                <img  style="display: block;" height="100" width="100" class="d-block rounded"
                                    src="{{ asset('admin/assets/img/no_image.png') }}" alt="No photo">
                            </div>
                          
                            <!-- selected image -->
                            <img style="width: 100px;display:none;border-radius: 10px;margin-top: 7px;" class="image_Preview"
                                id="vMiddleImage_preview" src="#" alt="your image" />

                            @endif
                           

                            @if(!(isset($getrideanytimes)))
                            <!-- default image -->
                            <div id="image_none">
                                <img style="width: 100px; display: block;"
                                    src="{{ asset('admin/assets/img/no_image.png') }}" alt="No photo">
                            </div>
                            <!-- selected image -->
                            <img style="width: 100px;display:none;" class="image_Preview"
                                id="vMiddleImage_preview" src="#" alt="your image" />
                            @endif
                            <div id="vImage_error" class="error mt-1" style="color:red;display: none;">
                                Please Select Image
                            </div>
                      </div>
                      
                  </div>
               </div>
               <div class="card-footer col-12 align-self-end d-inline-block mt-0 text-left">
                  <a href="javascript:;" class="btn btn-primary submit" id="save">Submit</a>
                  <a href="javascript:;" class="btn btn-primary loading" style="display: none;">
                  <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>Loading...
                  </a>
                  <a href="{{url('admin/getrideanytime')}}" class="btn-info btn">Back</a>
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
 
 $(".vImage_preview_img").hide();
// ------------ hide and show image or video or default image code start ---------------->
$("#vImage").change(function() { // Check is a input type button
    var fileName = $("#vImage").val();


    if (this.files && this.files[0] && this.files[0].name.match(/\.(jpg|jpeg|png|svg)$/) ) {
    if(fileName) { // returns true if the string is not empty
       // alert(fileName + " was selected");
        //alert("image selected");
         $("#vImage_error").hide();
         $("#image_display").hide();  //default image
         $("#vImage_preview").show();
         $("#image_none").hide();
        // $("#vMiddleImage_preview").show();

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
  const imgExtensions = ['jpg', 'png','jpeg','svg'];
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
       var eMenu       = $("#eMenu").val();
       var eStatus     = $("#eStatus").val();
       var vImage      = $("#vImage").val();
       var eFeature    = $("#eFeature").val();
       var tDescription = $("#tDescription").val();



       var error = false;
       @if(!(isset($getrideanytimes)))
       if (vImage.length == 0) {
           $("#vImage_error").show();
           error = true;
       } else {
           $("#vImage_error").hide();
       }
       @endif
       if (eMenu.length == 0) {
           $("#eMenu_error").show();
           error = true;
       } else {
           $("#eMenu_error").hide();
       }
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