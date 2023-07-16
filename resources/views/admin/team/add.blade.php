@extends('layouts.app.admin-app')
@if(isset($teams))
@section('title', 'Team Edit- '.env('APP_NAME'))
@else
@section('title', 'Team Add- '.env('APP_NAME'))
@endif
@section('content')


<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-md-12">
         <div class="row mb-2">
            <div class="col-sm-6 mt-2">
                <h5>{{ isset($teams) ? 'Edit' : 'Add' }} Team</h5>
            </div>
         </div>
         <form action="{{url('admin/team/store')}}" name="frm" id="frm" method="post"
               enctype="multipart/form-data">
               @csrf
              <div class="card mb-4">
                <div class="card-body">
                  <input type="hidden" id="vUniqueCode" name="vUniqueCode"
                     value="@if(isset($teams)){{$teams->vUniqueCode}}@endif">
                  <div class="row g-3">
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Name</label>
                        <input type="text" name="vName" id="vName" class="form-control"
                           placeholder="Enter Name"
                           value="@if(isset($teams)){{$teams->vName}}@endif">
                        <div id="vName_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Name
                        </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Position</label>
                        <input type="text" name="vPosition" id="vPosition" class="form-control"
                           placeholder="Enter Position"
                           value="@if(isset($teams)){{$teams->vPosition}}@endif">
                        <div id="vPosition_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Position
                        </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Email</label>
                        <div class="input-group input-group-merge">
                           <input class="form-control"
                              type="email" name="vEmail" id="vEmail" class="form-control"
                              placeholder="Enter Email" value="@if(isset($teams)){{$teams->vEmail}}@endif"/>
                        </div>
                        <div id="vEmail_error" class="error mt-1" style="color:red;display: none;">Please
                           Enter Email
                        </div>
                        <div id="vEmail_valid_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Valid Email
                        </div>
                        <div id="vEmail_unique_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Different Email, this email is already in use.
                        </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Feature</label>
                        <select name="eFeature" id="eFeature" class="form-select">
                           <option value="">Select Feature</option>
                           <option value="Yes" @if(isset($teams)) @if($teams->eFeature ==
                           'Yes') selected @endif @endif>Yes</option>
                           <option value="No" @if(isset($teams)) @if($teams->eFeature == 'No')
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
                           <option value="Active" @if(isset($teams)) @if($teams->eStatus == 'Active')
                           selected @endif @endif>Active</option>
                           <option value="Inactive" @if(isset($teams)) @if($teams->eStatus ==
                           'Inactive') selected @endif @endif>Inactive</option>
                           <option value="Pending" @if(isset($teams)) @if($teams->eStatus ==
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

                            @if(isset($teams) && $teams->vImage !='' &&
                            file_exists(public_path()."/uploads/team/".$teams->vImage))


                            <!-- for image -->
                            <img style="width: 100px; border-radius: 10px;margin-top: 7px;" id="image_display"
                                value="@if(old('vImage') == 'vImage') selected @endif"
                                src="{{asset('uploads/team/'.$teams->vImage)}}">
                            
                            @elseif(isset($teams))
                            <!-- default image -->
                            
                            <div id="image_none">
                                <img  style="display: block;" height="100" width="100" class="d-block rounded"
                                    src="{{ asset('admin/assets/img/no_image.png') }}" alt="No photo">
                            </div>
                          
                            <!-- selected image -->
                            <img style="width: 100px;display:none;border-radius: 10px;margin-top: 7px;" class="image_Preview"
                                id="vMiddleImage_preview" src="#" alt="your image" />

                            @endif
                           

                            @if(!(isset($teams)))
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
                                Please Select Content
                            </div>
                      </div>
                      
                  </div>
               </div>
               <div class="card-footer col-12 align-self-end d-inline-block mt-0 text-left">
                  <a href="javascript:;" class="btn btn-primary submit" id="save">Submit</a>
                  <a href="javascript:;" class="btn btn-primary loading" style="display: none;">
                  <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>Loading...
                  </a>
                  <a href="{{url('admin/team')}}" class="btn-info btn">Back</a>
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
       var vName       = $("#vName").val();
       var vPosition   = $("#vPosition").val();
       var eStatus     = $("#eStatus").val();
       var vImage      = $("#vImage").val();
       var eFeature    = $("#eFeature").val();
       var vEmail      = $("#vEmail").val();
       var Emailregex  = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;



       var error = false;
       @if(!(isset($teams)))
       if (vImage.length == 0) {
           $("#vImage_error").show();
           error = true;
       } else {
           $("#vImage_error").hide();
       }
       @endif
       if (vName.length == 0) {
           $("#vName_error").show();
           error = true;
       } else {
           $("#vName_error").hide();
       }

       if (vPosition.length == 0) {
           $("#vPosition_error").show();
           error = true;
       } else {
           $("#vPosition_error").hide();
       }

       if (vEmail.length == 0) {
           $("#vEmail_error").show();
           $('#vEmail_valid_error').hide();
           error = true;
       } else {
           $('#vEmail_error').hide();
           if (!Emailregex.test(vEmail)) {
               $('#vEmail_valid_error').show();
               error = true;
           } else {
               $('#vEmail_valid_error').hide();
           }
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