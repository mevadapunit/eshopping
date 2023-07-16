@extends('layouts.app.admin-app')
@if(isset($modules))
@section('title', 'Module Edit- '.env('APP_NAME'))
@else
@section('title', 'Module Add- '.env('APP_NAME'))
@endif
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-md-12">
         <div class="row mb-2">
            <div class="col-sm-6 mt-2">
                <h5>{{ isset($modules) ? 'Edit' : 'Add' }} Module</h5>
            </div>
         </div>
         <form action="{{url('admin/module/store')}}" name="frm" id="frm" method="post"
               enctype="multipart/form-data">
               @csrf
              <div class="card mb-4">
                <div class="card-body">
                  <input type="hidden" id="vUniqueCode" name="vUniqueCode"
                     value="@if(isset($modules)){{$modules->vUniqueCode}}@endif">
                  <div class="row g-3">
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                           <label>Menu</label>
                           <select id="iMenuId" name="iMenuId" class="form-select">
                               <option value="">Select Menu</option>
                               @foreach($menues as $value)
                               <option value="{{$value->iMenuId}}" @if(isset($modules)) @if($modules->iMenuId == $value->iMenuId) selected @endif @endif>{{$value->vMenu}}</option>
                               @endforeach
                           </select>
                           <div id="iMenuId_error" class="error mt-1" style="color:red;display: none;">
                               Please Select Menu</div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Module Name</label>
                        <input type="text" name="vModule" id="vModule" class="form-control"
                           placeholder="Enter Module Name"
                           value="@if(isset($modules)){{$modules->vModule}}@endif">
                        <div id="vModule_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Module Name
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Controller</label>
                        <select id="vController" name="vController" class="form-select">
                            <option value="">Select Controller</option>
                         
                            @foreach($controllers as $value)
                            <option value="{{$value}}" @if(isset($modules)) @if($modules->vController == $value) selected @endif @endif>@php echo strstr($value, 'Controller', true);@endphp</option>
                            @endforeach

                        </select>
                        <div id="vController_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Controller
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                           <label>Role</label>
                           <select id="iRoleId" name="iRoleId" class="form-select">
                               <option value="">Select Role</option>
                               @foreach($roles as $value)
                               <option value="{{$value->iRoleId}}" @if(isset($modules)) @if($modules->iRoleId == $value->iRoleId) selected @endif @endif>{{$value->vRole}}</option>
                               @endforeach
                           </select>
                           <div id="iRoleId_error" class="error mt-1" style="color:red;display: none;">
                               Please Select Role</div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Feature</label>
                        <select name="eFeature" id="eFeature" class="form-select">
                           <option value="">Select Feature</option>
                           <option value="Yes" @if(isset($modules)) @if($modules->eFeature ==
                           'Yes') selected @endif @endif>Yes</option>
                           <option value="No" @if(isset($modules)) @if($modules->eFeature == 'No')
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
                           <option value="Active" @if(isset($modules)) @if($modules->eStatus == 'Active')
                           selected @endif @endif>Active</option>
                           <option value="Inactive" @if(isset($modules)) @if($modules->eStatus ==
                           'Inactive') selected @endif @endif>Inactive</option>
                           <option value="Pending" @if(isset($modules)) @if($modules->eStatus ==
                           'Pending') selected @endif @endif>Pending</option>
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
                  <a href="{{url('admin/module')}}" class="btn-info btn">Back</a>
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
       var vModule     = $("#vModule").val();
       var eStatus     = $("#eStatus").val();
       var eFeature    = $("#eFeature").val();
       var vController = $("#vController").val();
       var iRoleId     = $("#iRoleId").val();
       var iMenuId     = $("#iMenuId").val();


       var error = false;
   
       if (iMenuId.length == 0) {
           $("#iMenuId_error").show();
           error = true;
       } else {
           $("#iMenuId_error").hide();
       }
        if (vModule.length == 0) {
           $("#vModule_error").show();
           error = true;
       } else {
           $("#vModule_error").hide();
       }
       if (iRoleId.length == 0) {
           $("#iRoleId_error").show();
           error = true;
       } else {
           $("#iRoleId_error").hide();
       }
       if (vController.length == 0) {
           $("#vController_error").show();
           error = true;
       } else {
           $("#vController_error").hide();
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