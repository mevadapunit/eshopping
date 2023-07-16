@extends('layouts.app.admin-app')
@if(isset($sections))
@section('title', 'Section Edit- '.env('APP_NAME'))
@else
@section('title', 'Section Add- '.env('APP_NAME'))
@endif
@section('content')


<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-md-12">
         <div class="row mb-2">
            <div class="col-sm-6 mt-2">
                <h5>{{ isset($sections) ? 'Edit' : 'Add' }} Section</h5>
            </div>
         </div>
         <form action="{{url('admin/section/store')}}" name="frm" id="frm" method="post"
               enctype="multipart/form-data">
               @csrf
              <div class="card mb-4">
                <div class="card-body">
                  <input type="hidden" id="vUniqueCode" name="vUniqueCode"
                     value="@if(isset($sections)){{$sections->vUniqueCode}}@endif">
                  <div class="row g-3">
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Title</label>
                        <input type="text" name="vTitle" id="vTitle" class="form-control"
                           placeholder="Enter Title"
                           value="@if(isset($sections)){{$sections->vTitle}}@endif">
                        <div id="vTitle_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Title
                        </div>
                     </div>
                     
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Sub Title</label>
                        <input type="text" name="vSubTitle" id="vSubTitle" class="form-control"
                           placeholder="Enter Title"
                           value="@if(isset($sections)){{$sections->vSubTitle}}@endif">
                        <div id="vSubTitle_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Title
                        </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Button Title</label>
                        <input type="text" name="vButtontTitle" id="vButtontTitle" class="form-control"
                           placeholder="Enter Button Title"
                           value="@if(isset($sections)){{$sections->vButtontTitle}}@endif">
                        <div id="vButtontTitle_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Button Title
                        </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Controller</label>
                        <select id="vController" name="vController" class="form-select">
                            <option value="">Select Controller</option>
                            @foreach($controllers as $value)
                            <option value="{{$value}}" @if(isset($sections)) @if($sections->vController == $value) selected @endif @endif>@php echo strstr($value, 'Controller', true);@endphp</option>
                            @endforeach
                        </select>
                        <div id="vController_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Controller
                        </div>
                     </div>
                     

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Section</label>
                        <select name="iSectionType" id="iSectionType" class="form-select">
                          <option value="">Select Section</option>
                           <option value="1" @if(isset($sections)) @if($sections->iSectionType ==
                           '1') selected @endif @endif>Section 1</option>
                           <option value="2" @if(isset($sections)) @if($sections->iSectionType == '2')
                           selected @endif @endif>Section 2</option>
                           <option value="3" @if(isset($sections)) @if($sections->iSectionType == '3')
                           selected @endif @endif>Section 3</option>
                        </select>
                        <div id="iSectionType_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Type</div>
                     </div>


                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Color</label>
                        <input type="color" name="vColor" id="vColor" class="form-control"
                           placeholder="Enter Color Code"
                           value="@if(isset($sections)){{$sections->vColor}}@endif">
                        <div id="vColor_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Color Code
                        </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Feature</label>
                        <select name="eFeature" id="eFeature" class="form-select">
                           <option value="">Select Feature</option>
                           <option value="Yes" @if(isset($sections)) @if($sections->eFeature ==
                           'Yes') selected @endif @endif>Yes</option>
                           <option value="No" @if(isset($sections)) @if($sections->eFeature == 'No')
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
                           <option value="Active" @if(isset($sections)) @if($sections->eStatus == 'Active')
                           selected @endif @endif>Active</option>
                           <option value="Inactive" @if(isset($sections)) @if($sections->eStatus ==
                           'Inactive') selected @endif @endif>Inactive</option>
                           <option value="Pending" @if(isset($sections)) @if($sections->eStatus ==
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

                            @if(isset($sections) && $sections->vImage !='' &&
                            file_exists(public_path()."/uploads/section/".$sections->vImage))


                            <!-- for image -->
                            <img style="width: 100px; border-radius: 10px;margin-top: 7px;" id="image_display"
                                value="@if(old('vImage') == 'vImage') selected @endif"
                                src="{{asset('uploads/section/'.$sections->vImage)}}">
                            
                            @elseif(isset($sections))
                            <!-- default image -->
                            
                            <div id="image_none">
                                <img  style="display: block;" height="100" width="100" class="d-block rounded"
                                    src="{{ asset('admin/assets/img/no_image.png') }}" alt="No photo">
                            </div>
                          
                            <!-- selected image -->
                            <img style="width: 100px;display:none;border-radius: 10px;margin-top: 7px;" class="image_Preview"
                                id="vMiddleImage_preview" src="#" alt="your image" />

                            @endif
                           

                            @if(!(isset($sections)))
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
                  <a href="{{url('admin/section')}}" class="btn-info btn">Back</a>
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
       var vSubTitle   = $("#vSubTitle").val();
       var eStatus     = $("#eStatus").val();
       var vImage      = $("#vImage").val();
       var vButtontTitle = $("#vButtontTitle").val();
       var vUrl        = $("#vUrl").val();
       var vController = $("#vController").val();
       var iSectionType = $("#iSectionType").val();
       var eFeature    = $("#eFeature").val();

       var error = false;
       @if(!(isset($sections)))
       if (vImage.length == 0) {
           $("#vImage_error").show();
           error = true;
       } else {
           $("#vImage_error").hide();
       }
       @endif

       if (eFeature.length == 0) {
           $("#eFeature_error").show();
           error = true;
       } else {
           $("#eFeature_error").hide();
       }

       if (iSectionType.length == 0) {
           $("#iSectionType_error").show();
           error = true;
       } else {
           $("#iSectionType_error").hide();
       }

       if (vButtontTitle.length == 0) {
           $("#vButtontTitle_error").show();
           error = true;
       } else {
           $("#vButtontTitle_error").hide();
       }

       if (vController.length == 0) {
           $("#vController_error").show();
           error = true;
       } else {
           $("#vController_error").hide();
       }
       if (vSubTitle.length == 0) {
           $("#vSubTitle_error").show();
           error = true;
       } else {
           $("#vSubTitle_error").hide();
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