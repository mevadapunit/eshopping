@extends('layouts.app.admin-app')
@if(isset($rider_tax))
@section('title', 'Tax Edit- '.env('APP_NAME'))
@else
@section('title', 'Tax Add- '.env('APP_NAME'))
@endif
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-md-12">
          <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                     <li class="nav-item mt-2 me-3">
                        <spna class="col-sm-6 ">
                            <h5>Edit Rider</h5>
                        </spna>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="{{route('admin.rider.edit',$rider_tax->vUniqueCode)}}"
                        ><i class="bx bx-user me-1"></i> Profile</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active " href="{{route('admin.rider.tax_edit',$rider_tax->vUniqueCode)}}"
                        ><i class='bx bx-receipt'></i> Tax Details</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('admin/rider/bankdetails_edit',$rider_tax->vUniqueCode)}}"
                        ><i class="bx bx-link-alt me-1"></i> Bank Details</a
                      >
                    </li>
                     <li class="nav-item">
                      <a class="nav-link" href="{{url('admin/rider/vehicle_edit',$rider_tax->vUniqueCode)}}"><i class="bx bx-car me-1"></i> Vehicle</a
                      >
                    </li>
                  </ul>
            <form action="{{url('admin/rider/tax_store')}}" name="frm" id="frm" method="post"
               enctype="multipart/form-data">
               @csrf
              <div class="card mb-4">
               <div class="card-body">
                  <input type="hidden" id="vUniqueCode" name="vUniqueCode"
                     value="@if(isset($rider_tax)){{$rider_tax->vUniqueCode}}@endif">
                  <div class="row g-3">
                    <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label >GST</label>
                        <select name="eGST" id="eGST" class="form-select">
                           <option value="">Select GST</option>
                           <option value="Yes" @if(isset($rider_tax)) @if($rider_tax->eGST =='Yes') selected @endif @endif>Yes</option>
                           <option value="No" @if(isset($rider_tax)) @if($rider_tax->eGST == 'No')
                           selected @endif @endif>No</option>
                        </select>
                        <div id="eGST_error" class="error mt-1" style="color:red;display: none;">
                           Please Select GST Status
                        </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label >ABN Code</label>
                        <input type="text" name="vABNCode" id="vABNCode" class="form-control"
                           placeholder="Code"
                           value="@if(isset($rider_tax)){{$rider_tax->vABNCode}}@endif">
                        <div id="vABNCode_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter ABN Code
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label >Business Name</label>
                        <input type="text" name="vBusinessName" id="vBusinessName" class="form-control"
                           placeholder="Enter Business Name"
                           value="@if(isset($rider_tax)){{$rider_tax->vBusinessName}}@endif">
                        <div id="vBusinessName_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Business Name
                        </div>
                     </div>
                    
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label  >Bussiness Type</label>
                        <select name="iBusinessTypeId" id="iBusinessTypeId" class="form-select">
                           <option value="">Select Bussiness Type</option>
                            @foreach($businesstype as $key=>$value)
                            <option value="{{$value->iBusinessTypeId}}" @if(isset($rider_tax)) @if($rider_tax->iBusinessTypeId == $value->iBusinessTypeId) selected @endif @endif>{{$value->vBusinessType}}</option>
                            @endforeach
                        </select>
                        <div id="iBusinessTypeId_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Bussiness Type
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                         <label>Business Address</label>
                          <textarea class="form-control"  placeholder="Address" name="vBusinessAddress" id="vBusinessAddress" rows="3"  style="height: 72px;">@if(isset($rider_tax)){{$rider_tax->vBusinessAddress}}@endif</textarea>
                         <div id="vBusinessAddress_error" class="error mt-1" style="color:red;display: none;">
                            Please Enter Business Address
                         </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label >Business City</label>
                        <div class="input-group input-group-merge">
                           <input class="form-control"
                              type="text" name="vBusinessCity" id="vBusinessCity" class="form-control"
                              placeholder="Enter Business City" value="@if(isset($rider_tax)){{$rider_tax->vBusinessCity}}@endif"/>
                        </div>
                        <div id="vBusinessCity_error" class="error mt-1" style="color:red;display: none;">Please
                           Enter Business City
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label >Business PostCode</label>
                        <div class="input-group input-group-merge">
                           <input class="form-control"
                              type="text" name="vBusinessPostCode" id="vBusinessPostCode" class="form-control"
                              placeholder="Enter Business PostCode" value="@if(isset($rider_tax)){{$rider_tax->vBusinessPostCode}}@endif"/>
                        </div>
                        <div id="vBusinessPostCode_error" class="error mt-1" style="color:red;display: none;">Please
                           Enter Business PostCode
                        </div>
                     </div>
                     

                  </div>
               </div>
               <div class="card-footer col-12 align-self-end d-inline-block mt-0 text-left">
                  <a href="javascript:;" class="btn btn-primary submit" id="save">Submit</a>
                  <a href="javascript:;" class="btn btn-primary loading" style="display: none;">
                  <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>Loading...
                  </a>
                  <a href="{{url('admin/rider')}}" class="btn-info btn">Back</a>
               </div>
            </div>
            </form>
      </div>
   </div>
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
       var eGST              = $("#eGST").val();
       var vABNCode          = $("#vABNCode").val();
       var vBusinessName     = $("#vBusinessName").val();         
       var iBusinessTypeId   = $("#iBusinessTypeId").val();
       var vBusinessCity     = $("#vBusinessCity").val();
       var vBusinessPostCode = $("#vBusinessPostCode").val();
       
       var vBusinessAddress  = $.trim($("#vBusinessAddress").val());
       var Emailregex  = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
       var Passwordregex = /^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&]).*$/;  
       var error       = false;

       if (eGST.length == 0) {
           $("#eGST_error").show();
           error = true;
       } else {
           $("#eGST_error").hide();
       }

       if (vABNCode.length == 0) {
           $("#vABNCode_error").show();
           error = true;
       } else {
           $("#vABNCode_error").hide();
       }

        if (vBusinessName.length == 0) {
           $("#vBusinessName_error").show();
           error = true;
       } else {
           $("#vBusinessName_error").hide();
       }


        if (iBusinessTypeId.length == 0) {
           $("#iBusinessTypeId_error").show();
           error = true;
       } else {
           $("#iBusinessTypeId_error").hide();
       }

        if (vBusinessAddress.length == 0) {
           $("#vBusinessAddress_error").show();
           error = true;
       } else {
           $("#vBusinessAddress_error").hide();
       }

        if (vBusinessCity.length == 0) {
           $("#vBusinessCity_error").show();
           error = true;
       } else {
           $("#vBusinessCity_error").hide();
       }

        if (vBusinessPostCode.length == 0) {
           $("#vBusinessPostCode_error").show();
           error = true;
       } else {
           $("#vBusinessPostCode_error").hide();
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