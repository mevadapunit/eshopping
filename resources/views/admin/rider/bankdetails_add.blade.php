@extends('layouts.app.admin-app')
@if(isset($rider_bankdetails))
@section('title', 'Bankdetails Edit - '.env('APP_NAME'))
@else
@section('title', 'Bankdetails Add- '.env('APP_NAME'))
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
                      <a class="nav-link " href="{{route('admin.rider.edit',$rider_bankdetails->vUniqueCode)}}"
                        ><i class="bx bx-user me-1"></i> Profile</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="{{url('admin/rider/tax_edit',$rider_bankdetails->vUniqueCode)}}"><i class='bx bx-receipt'></i> Tax Details</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="{{url('admin/rider/bankdetails_edit',$rider_bankdetails->vUniqueCode)}}"
                        ><i class="bx bx-link-alt me-1"></i> Bank Details</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="{{url('admin/rider/vehicle_edit',$rider_bankdetails->vUniqueCode)}}"><i class="bx bx-car me-1"></i> Vehicle</a
                      >
                    </li>
                  </ul>
        
            <form action="{{url('admin/rider/bankdetails_store')}}" name="frm" id="frm" method="post"
               enctype="multipart/form-data">
               @csrf
              <div class="card mb-4">
               <div class="card-body">
                  <input type="hidden" id="vUniqueCode" name="vUniqueCode"
                     value="@if(isset($rider_bankdetails)){{$rider_bankdetails->vUniqueCode}}@endif">
                  <div class="row g-3">
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Account Holder Name</label>
                        <input type="text" name="vAccountHolderName" id="vAccountHolderName" class="form-control"
                           placeholder="Enter Account Holder Name"
                           value="@if(isset($rider_bankdetails)){{$rider_bankdetails->vAccountHolderName}}@endif">
                        <div id="vAccountHolderName_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Account Holder Name
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>BSB</label>
                        <input type="text" name="vBSB" id="vBSB" class="form-control"
                           placeholder="Enter BSB"
                           value="@if(isset($rider_bankdetails)){{$rider_bankdetails->vBSB}}@endif">
                        <div id="vBSB_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter BSB
                        </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Account Number</label>
                        <input type="text" name="vAccountNumber" id="vAccountNumber" class="form-control"
                           placeholder="Enter Account Number"
                           value="@if(isset($rider_bankdetails)){{$rider_bankdetails->vAccountNumber}}@endif">
                        <div id="vAccountNumber_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Account Number
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Bank Name</label>
                        <div class="input-group input-group-merge">
                           <input class="form-control"
                              type="email" name="vBankName" id="vBankName" class="form-control"
                              placeholder="Enter Bank Name" value="@if(isset($rider_bankdetails)){{$rider_bankdetails->vBankName}}@endif"/>
                        </div>
                        <div id="vBankName_error" class="error mt-1" style="color:red;display: none;">Please
                           Enter Bank Name
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Branch</label>
                        <input type="text" name="vBranch" id="vBranch" class="form-control"
                           placeholder="Enter Branch" value="@if(isset($rider_bankdetails)){{$rider_bankdetails->vBranch}}@endif">
                        <div id="vBranch_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Branch
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label >Bank PostCode</label>
                        <div class="input-group input-group-merge">
                           <input class="form-control"
                              type="text" name="vBankPostCode" id="vBankPostCode" class="form-control"
                              placeholder="Enter Bank PostCode" value="@if(isset($rider_bankdetails)){{$rider_bankdetails->vBankPostCode}}@endif"/>
                        </div>
                        <div id="vBankPostCode_error" class="error mt-1" style="color:red;display: none;">Please
                           Enter Bank PostCode
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
       var vAccountHolderName = $("#vAccountHolderName").val();
       var vBSB               = $("#vBSB").val();
       var vAccountNumber     = $("#vAccountNumber").val();
       var vBankName          = $("#vBankName").val();         
       var vBranch            = $("#vBranch").val();
       var vBankPostCode      = $("#vBankPostCode").val();    
       var vPostCode          = $("#vPostCode").val();
       var error              = false;
   
       if (vBankPostCode.length == 0) {
           $("#vBankPostCode_error").show();
           error = true;
       } else {
           $("#vBankPostCode_error").hide();
       }
       if (vAccountHolderName.length == 0) {
           $("#vAccountHolderName_error").show();
           error = true;
       } else {
           $("#vAccountHolderName_error").hide();
       }
        if (vBSB.length == 0) {
           $("#vBSB_error").show();
           error = true;
       } else {
           $("#vBSB_error").hide();
       }
       if (vAccountNumber.length == 0) {
           error = true;
           $("#vAccountNumber_error").show();
       } else {
           $("#vAccountNumber_error").hide();
       }
       if (vBankName.length == 0) {
           error = true;
           $("#vBankName_error").show();
       } else {
           $("#vBankName_error").hide();
       }

         if (vBranch.length == 0) {
           error = true;
           $("#vBranch_error").show();
       } else {
           $("#vBranch_error").hide();
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