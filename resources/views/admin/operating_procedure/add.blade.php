@extends('layouts.app.admin-app')
@if(isset($operatingprocedures))
@section('title', 'Operating Procedure Edit- '.env('APP_NAME'))
@else
@section('title', 'Operating Procedure Add- '.env('APP_NAME'))
@endif
@section('content')


<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-md-12">
         <div class="row mb-2">
            <div class="col-sm-6 mt-2">
                <h5>{{ isset($operatingprocedures) ? 'Edit' : 'Add' }} Operating Procedure</h5>
            </div>
         </div>
         <form action="{{url('admin/operatingprocedure/store')}}" name="frm" id="frm" method="post"
               enctype="multipart/form-data">
               @csrf
              <div class="card mb-4">
                <div class="card-body">
                  <input type="hidden" id="vUniqueCode" name="vUniqueCode"
                     value="@if(isset($operatingprocedures)){{$operatingprocedures->vUniqueCode}}@endif">
                  <div class="row g-3">
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Title</label>
                        <input type="text" name="vTitle" id="vTitle" class="form-control"
                           placeholder="Enter Title"
                           value="@if(isset($operatingprocedures)){{$operatingprocedures->vTitle}}@endif">
                        <div id="vTitle_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Title
                        </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Sub Title</label>
                        <input type="text" name="vSubTitle" id="vSubTitle" class="form-control"
                           placeholder="Enter Sub Title"
                           value="@if(isset($operatingprocedures)){{$operatingprocedures->vSubTitle}}@endif">
                        <div id="vSubTitle_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Sub Title
                        </div>
                     </div>

                    

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Feature</label>
                        <select name="eFeature" id="eFeature" class="form-select">
                           <option value="">Select Feature</option>
                           <option value="Yes" @if(isset($operatingprocedures)) @if($operatingprocedures->eFeature ==
                           'Yes') selected @endif @endif>Yes</option>
                           <option value="No" @if(isset($operatingprocedures)) @if($operatingprocedures->eFeature == 'No')
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
                           <option value="Active" @if(isset($operatingprocedures)) @if($operatingprocedures->eStatus == 'Active')
                           selected @endif @endif>Active</option>
                           <option value="Inactive" @if(isset($operatingprocedures)) @if($operatingprocedures->eStatus ==
                           'Inactive') selected @endif @endif>Inactive</option>
                           <option value="Pending" @if(isset($operatingprocedures)) @if($operatingprocedures->eStatus ==
                           'Pending') selected @endif @endif>Pending</option>
                        </select>
                        <div id="eStatus_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Status
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Description</label>
                        <textarea  type="text" name="tDescription" id="tDescription" class="form-control"
                           placeholder="Enter Description" >@if(isset($operatingprocedures)){{$operatingprocedures->tDescription}}@endif</textarea>
                        <div id="tDescription_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Description
                        </div>
                     </div>

                  </div>
               </div>
               <div class="card-footer col-12 align-self-end d-inline-block mt-0 text-left">
                  <a href="javascript:;" class="btn btn-primary submit" id="save">Submit</a>
                  <a href="javascript:;" class="btn btn-primary loading" style="display: none;">
                  <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>Loading...
                  </a>
                  <a href="{{url('admin/operatingprocedure')}}" class="btn-info btn">Back</a>
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


   $(document).on('click', '.submit', function() {
       var vUniqueCode = $("#vUniqueCode").val();
       var vTitle      = $("#vTitle").val();
       var eStatus     = $("#eStatus").val();
       var eFeature    = $("#eFeature").val();
       var vSubTitle   = $("#vSubTitle").val();
       var tDescription = $("#tDescription").val();
       
       var error = false;

       if (tDescription.length == 0) {
           $("#tDescription_error").show();
           error = true;
       } else {
           $("#tDescription_error").hide();
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