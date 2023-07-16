@extends('layouts.app.admin-app')
@if(isset($document_type))
@section('title', 'Document Type Edit- '.env('APP_NAME'))
@else
@section('title', 'Document Type Add- '.env('APP_NAME'))
@endif
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-md-12">
         <div class="row mb-2">
            <div class="col-sm-6 mt-2">
                <h5>{{ isset($document_type) ? 'Edit' : 'Add' }} Document Type</div>
         </div>
         
         <form action="{{route('admin.document_type.store')}}" name="frm" id="frm" method="post"
               enctype="multipart/form-data">
               @csrf
            <div class="card mb-4">
                <div class="card-body">
                  <input type="hidden" id="vUniqueCode" name="vUniqueCode"
                     value="@if(isset($document_type)){{$document_type->vUniqueCode}}@endif">
                  <div class="row g-3">
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Document Type</label>
                        <input type="text" name="vDocumentType" id="vDocumentType" class="form-control"
                           placeholder="Ex. Driving Licence"
                           value="@if(isset($document_type)){{$document_type->vDocumentType}}@endif">
                        <div id="vDocumentType_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Document Type
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                           <label>State</label>
                           <select id="iStateId" name="iStateId" class="form-select">
                               <option value="">Select State</option>
                               @foreach($states as $value)
                               <option value="{{$value->iStateId}}" @if(isset($document_type)) @if($document_type->iStateId == $value->iStateId) selected @endif @endif>{{$value->vState}}</option>
                               @endforeach
                           </select>
                           <div id="iStateId_error" class="error mt-1" style="color:red;display: none;">Please Select State</div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Feature</label>
                        <select name="eFeature" id="eFeature" class="form-select">
                           <option value="">Select Feature</option>
                           <option value="Yes" @if(isset($document_type)) @if($document_type->eFeature ==
                           'Yes') selected @endif @endif>Yes</option>
                           <option value="No" @if(isset($document_type)) @if($document_type->eFeature == 'No')
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
                           <option value="Active" @if(isset($document_type)) @if($document_type->eStatus == 'Active')
                           selected @endif @endif>Active</option>
                           <option value="Inactive" @if(isset($document_type)) @if($document_type->eStatus ==
                           'Inactive') selected @endif @endif>Inactive</option>
                           <option value="Pending" @if(isset($document_type)) @if($document_type->eStatus ==
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
                  <a href="{{url('admin/documenttype')}}" class="btn-info btn">Back</a>
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
       var vDocumentType = $("#vDocumentType").val();
       var iStateId      = $("#iStateId").val();
       var eStatus       = $("#eStatus").val();
       var eFeature      = $("#eFeature").val();
       var error         = false;
   
       if (vDocumentType.length == 0) {
           $("#vDocumentType_error").show();
           error = true;
       } else {
           $("#vDocumentType_error").hide();
       }
       if (iStateId.length == 0) {
           error = true;
           $("#iStateId_error").show();
       } else {
           $("#iStateId_error").hide();
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