@extends('layouts.app.admin-app')
@if(isset($business_type))
@section('title', 'Business Type Edit- '.env('APP_NAME'))
@else
@section('title', 'Business Type Add- '.env('APP_NAME'))
@endif
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-md-12">
      <div class="row mb-2">
            <div class="col-sm-6 mt-2">
                <h5>{{ isset($business_type) ? 'Edit' : 'Add' }} Business Type</h5>
            </div>
         </div>
   
         <form action="{{route('admin.business_type.store')}}" name="frm" id="frm" method="post"
               enctype="multipart/form-data">
               @csrf
             <div class="card mb-4">
                <div class="card-body">
                  <input type="hidden" id="vUniqueCode" name="vUniqueCode"
                     value="@if(isset($business_type)){{$business_type->vUniqueCode}}@endif">
                  <div class="row g-3">
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Business Type</label>
                        <input type="text" name="vBusinessType" id="vBusinessType" class="form-control"
                           placeholder="Enter Business Type"
                           value="@if(isset($business_type)){{$business_type->vBusinessType}}@endif">
                        <div id="vBusinessType_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Business Type
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Feature</label>
                        <select name="eFeature" id="eFeature" class="form-select">
                           <option value="">Select Feature</option>
                           <option value="Yes" @if(isset($business_type)) @if($business_type->eFeature ==
                           'Yes') selected @endif @endif>Yes</option>
                           <option value="No" @if(isset($business_type)) @if($business_type->eFeature == 'No')
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
                           <option value="Active" @if(isset($business_type)) @if($business_type->eStatus == 'Active')
                           selected @endif @endif>Active</option>
                           <option value="Inactive" @if(isset($business_type)) @if($business_type->eStatus ==
                           'Inactive') selected @endif @endif>Inactive</option>
                           <option value="Pending" @if(isset($business_type)) @if($business_type->eStatus ==
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
                  <a href="{{url('admin/businesstype')}}" class="btn-info btn">Back</a>
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
       var vUniqueCode   = $("#vUniqueCode").val();
       var vBusinessType = $("#vBusinessType").val();
       var eStatus       = $("#eStatus").val();
       var eFeature      = $("#eFeature").val();
       var error         = false;
   
       if (vBusinessType.length == 0) {
           $("#vBusinessType_error").show();
           error = true;
       } else {
           $("#vBusinessType_error").hide();
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