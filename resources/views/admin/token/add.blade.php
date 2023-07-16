@extends('layouts.app.admin-app')
@if(isset($tokens))
@section('title', 'Token Edit- '.env('APP_NAME'))
@else
@section('title', 'Token Add- '.env('APP_NAME'))
@endif
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-md-12">
         <div class="row mb-2">
            <div class="col-sm-6 mt-2">
                <h5>{{ isset($tokens) ? 'Edit' : 'Add' }} Token</h5>
            </div>
         </div>
        
         <form action="{{url('admin/token/store')}}" name="frm" id="frm" method="post"
               enctype="multipart/form-data">
               @csrf
            <div class="card mb-4">
              <div class="card-body">
                  <input type="hidden" id="vUniqueCode" name="vUniqueCode"
                     value="@if(isset($tokens)){{$tokens->vUniqueCode}}@endif">
                  <div class="row g-3">
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Token</label>
                        <input type="text" name="vToken" id="vToken" class="form-control"
                           placeholder="Enter Token"
                           value="@if(isset($tokens)){{$tokens->vToken}}@endif">
                        <div id="vToken_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Token
                        </div>
                     </div>
                
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Status</label>
                        <select name="eStatus" id="eStatus" class="form-select">
                           <option value="">Select Status</option>
                           <option value="Active" @if(isset($tokens)) @if($tokens->eStatus == 'Active')
                           selected @endif @endif>Active</option>
                           <option value="Inactive" @if(isset($tokens)) @if($tokens->eStatus ==
                           'Inactive') selected @endif @endif>Inactive</option>
                         
                        </select>
                        <div id="eStatus_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Status
                        </div>
                     </div>

                  </div>
               </div>
               <div class="card-footer col-12 align-self-end d-inline-block mt-0 text-left">
                  <a href="javascript:;" class="btn btn-primary submit" id="save">Submit</a>
                  <a href="javascript:;" class="btn btn-primary loading" style="display: none;">
                  <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>Loading...
                  </a>
                  <a href="{{url('admin/token')}}" class="btn-info btn">Back</a>
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
<script type="text/javascript">
   // ------ image preview ----------->
   // ------ image preview ----------->
   $("#vImage").change(function() { // Check is a input type button
       var fileName = $("#vImage").val();
   
   
       if (this.files && this.files[0] && this.files[0].name.match(/\.(jpg|jpeg|png|gif|svg)$/)) {
           if (fileName) { // returns true if the string is not empty
               // alert(fileName + " was selected");
               //alert("image selected");
               $("#image_none").hide(); //default image
               $("#vMiddleImage_preview").show();
   
           } else { // no file was selected
               $("#image_none").show(); //default image
               $("#vMiddleImage_preview").hide(); // selected image
               //alert("no file selected");
           }
   
   
       }
   });
   // ---------------------- get url link in image or video start preview ------------>
   $('#vImage').on('change', function(event) {
   
       if (
           !event ||
           !event.target ||
           !event.target.files ||
           event.target.files.length === 0
       ) {
           return;
       }
   
       const fileUrl = window.URL.createObjectURL(event.target.files[0]);
       const imgExtensions = ['jpg', 'png', 'jpeg', 'gif', 'svg'];
       const name = event.target.files[0].name;
       const lastDot = name.lastIndexOf('.');
   
       const ext = name.substring(lastDot + 1);
   
       if (imgExtensions.includes(ext)) {
           // alert("image");
           $("#vImage_error").hide();
           $(".image_none").hide(); // hide default preview
           $(".image_Preview").show().attr("src", fileUrl);
       }
   });
   // ----------------- get link code end ----------------->
</script>
<script type="text/javascript">
 
   $(document).on('click', '.submit', function() {
       var vUniqueCode = $("#vUniqueCode").val();
       var vToken      = $("#vToken").val();
       var eStatus     = $("#eStatus").val();

       var error = false;
   
       if (vToken.length == 0) {
           $("#vToken_error").show();
           error = true;
       } else {
           $("#vToken_error").hide();
       }
       if (eStatus.length == 0) {
           error = true;
           $("#eStatus_error").show();
       } else {
           $("#eStatus_error").hide();
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