@extends('layouts.app.admin-app')
@if(isset($rider_vehicle))
@section('title', 'Vehicle Edit- '.env('APP_NAME'))
@else
@section('title', 'Vehicle Add- '.env('APP_NAME'))
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
                      <a class="nav-link " href="{{route('admin.rider.edit',$rider_vehicle->vUniqueCode)}}"
                        ><i class="bx bx-user me-1"></i> Profile</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link  " href="{{route('admin.rider.tax_edit',$rider_vehicle->vUniqueCode)}}"
                        ><i class='bx bx-receipt'></i> Tax Details</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('admin/rider/bankdetails_edit',$rider_vehicle->vUniqueCode)}}"
                        ><i class="bx bx-link-alt me-1"></i> Bank Details</a
                      >
                    </li>
                     <li class="nav-item">
                      <a class="nav-link active" href="{{url('admin/rider/vehicle_edit',$rider_vehicle->vUniqueCode)}}"><i class="bx bx-car me-1"></i> Vehicle</a
                      >
                    </li>
                  </ul>
       
            <form action="{{url('admin/rider/vehicle_store')}}" name="frm" id="frm" method="post"
               enctype="multipart/form-data">
               @csrf
              <div class="card mb-4">
               <div class="card-body">
                  <input type="hidden" id="vUniqueCode" name="vUniqueCode"
                     value="@if(isset($rider_vehicle)){{$rider_vehicle->vUniqueCode}}@endif">
                  <div class="row g-3">
                     <!-- <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Company</label>
                        <select id="iCompanyId" name="iCompanyId" class="form-select">
                            <option value="">Select Company</option>
                            @foreach($companies as $key=>$values)
                            <option value="{{$values->iCompanyId}}" @if(isset($rider_vehicle)) @if($rider_vehicle->iCompanyId == $values->iCompanyId) selected @endif @endif>{{$values->vCompany}}</option>
                            @endforeach
                        </select>
                        <div id="iCompanyId_error" class="error mt-1" style="color:red;display: none;">
                            Please Select Company Name</div>
                    </div> -->
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label >Register Number</label>
                        <div class="input-group input-group-merge">
                           <input class="form-control"
                              type="text" name="vRegisterNumber" id="vRegisterNumber" class="form-control"
                              placeholder="Enter Company Name" value="@if(isset($rider_vehicle)){{$rider_vehicle->vRegisterNumber}}@endif"/>
                        </div>
                        <div id="vRegisterNumber_error" class="error mt-1" style="color:red;display: none;">Please
                           Enter Register Number
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label >Driving Licence Number</label>
                        <div class="input-group input-group-merge">
                           <input class="form-control"
                              type="text" name="vDrivingLicence" id="vDrivingLicence" class="form-control"
                              placeholder="Enter Driving Licence Number" value="@if(isset($rider_vehicle)){{$rider_vehicle->vDrivingLicence}}@endif"/>
                        </div>
                        <div id="vDrivingLicence_error" class="error mt-1" style="color:red;display: none;">Please
                           Enter Driving Licence Number
                        </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label >VIN Number</label>
                        <div class="input-group input-group-merge">
                           <input class="form-control"
                              type="text" name="vVIN" id="vVIN" class="form-control"
                              placeholder="Enter VIN Number" value="@if(isset($rider_vehicle)){{$rider_vehicle->vVIN}}@endif"/>
                        </div>
                        <div id="vVIN_error" class="error mt-1" style="color:red;display: none;">Please
                           Enter VIN Number
                        </div>
                     </div>
               
                      <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Make</label>
                        <select id="iMakeId" name="iMakeId" class="form-select">
                            <option value="">Select Make</option>
                            @foreach($makes as $key=>$values)
                            <option value="{{$values->iMakeId}}" @if(isset($rider_vehicle)) @if($rider_vehicle->iMakeId == $values->iMakeId) selected @endif @endif>{{$values->vMake}}</option>
                            @endforeach
                        </select>
                        <div id="iMakeId_error" class="error mt-1" style="color:red;display: none;">
                            Please Select Make</div>
                    </div>

                       <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Model</label>
                        <select id="iModelId" name="iModelId" class="form-select">
                            <option value="">Select Model</option>
                            @foreach($models as $key=>$values)
                            <option value="{{$values->iModelId}}" @if(isset($rider_vehicle)) @if($rider_vehicle->iModelId == $values->iModelId) selected @endif @endif>{{$values->vModel}}</option>
                            @endforeach
                        </select>
                        <div id="iModelId_error" class="error mt-1" style="color:red;display: none;">
                            Please Select Model</div>
                    </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Color</label>
                        <select id="iColorId" name="iColorId" class="form-select">
                            <option value="">Select Color</option>
                            @foreach($colors as $key=>$values)
                            <option value="{{$values->iColorId}}" @if(isset($rider_vehicle)) @if($rider_vehicle->iColorId == $values->iColorId) selected @endif @endif>{{$values->vColor}}</option>
                            @endforeach
                        </select>
                        <div id="iColorId_error" class="error mt-1" style="color:red;display: none;">
                            Please Select Color</div>
                    </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Year</label>
                        <select id="iYearId" name="iYearId" class="form-select">
                            <option value="">Select Year</option>
                            @foreach($years as $value)
                            <option value="{{$value->iYearId}}" @if(isset($rider_vehicle)) @if($rider_vehicle->iYearId == $value->iYearId) selected @endif @endif>{{$value->vYear}}</option>
                            @endforeach
                        </select>
                        <div id="iYearId_error" class="error mt-1" style="color:red;display: none;">
                            Please Select Year Type</div>
                    </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Vehicle Type</label>
                        <select id="iVehicleTypeId" name="iVehicleTypeId" class="form-select">
                            <option value="">Select Type</option>
                            @foreach($vehicle_type as $value)
                            <option value="{{$value->iVehicleTypeId}}" @if(isset($rider_vehicle)) @if($rider_vehicle->iVehicleTypeId == $value->iVehicleTypeId) selected @endif @endif>{{$value->vVehicleType}}</option>
                            @endforeach
                        </select>
                        <div id="iVehicleTypeId_error" class="error mt-1" style="color:red;display: none;">
                            Please Select Vehicle Type</div>
                    </div>


                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Ownership Type</label>
                        <select id="iOwnershipTypeId" name="iOwnershipTypeId" class="form-select">
                            <option value="">Select Ownership Type</option>
                            @foreach($ownership_type as $value)
                            <option value="{{$value->iOwnershipTypeId}}" @if(isset($rider_vehicle)) @if($rider_vehicle->iOwnershipTypeId == $value->iOwnershipTypeId) selected @endif @endif>{{$value->vOwnershipType}}</option>
                            @endforeach
                        </select>
                        <div id="iOwnershipTypeId_error" class="error mt-1" style="color:red;display: none;">
                            Please Select Ownership Type</div>
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
       var iCompanyId        = $("#iCompanyId").val();
       var vBusinessPostCode = $("#vBusinessPostCode").val(); 
       var vDrivingLicence   = $("#vDrivingLicence").val();
       var vRegisterNumber   = $("#vRegisterNumber").val();
       var iMakeId           = $("#iMakeId").val();
       var iModelId          = $("#iModelId").val();
       var iColorId          = $("#iColorId").val(); 
       var iYearId           = $("#iYearId").val(); 
       var iVehicleTypeId    = $("#iVehicleTypeId").val();  
       var iOwnershipTypeId  = $('#iOwnershipTypeId').val(); 
       var vVIN              = $('#vVIN').val();
     
       var error             = false;
    
       // if (iCompanyId.length == 0) {
       //     $("#iCompanyId_error").show();
       //     error = true;
       // } else {
       //     $("#iCompanyId_error").hide();
       // }
       if (vDrivingLicence.length == 0) {
           $("#vDrivingLicence_error").show();
           error = true;
       } else {
           $("#vDrivingLicence_error").hide();
       }
       if (vVIN.length == 0) {
           $("#vVIN_error").show();
           error = true;
       } else {
           $("#vVIN_error").hide();
       }
       if (iVehicleTypeId.length == 0) {
           $("#iVehicleTypeId_error").show();
           error = true;
       } else {
           $("#iVehicleTypeId_error").hide();
       }
       if (iOwnershipTypeId.length == 0) {
           $("#iOwnershipTypeId_error").show();
           error = true;
       } else {
           $("#iOwnershipTypeId_error").hide();
       }
        if (vRegisterNumber.length == 0) {
           $("#vRegisterNumber_error").show();
           error = true;
       } else {
           $("#vRegisterNumber_error").hide();
       }

        if (iMakeId.length == 0) {
           $("#iMakeId_error").show();
           error = true;
       } else {
           $("#iMakeId_error").hide();
       }
       
        if (iModelId.length == 0) {
           $("#iModelId_error").show();
           error = true;
       } else {
           $("#iModelId_error").hide();
       }

        if (iColorId.length == 0) {
           $("#iColorId_error").show();
           error = true;
       } else {
           $("#iColorId_error").hide();
       }

        if (iYearId.length == 0) {
           $("#iYearId_error").show();
           error = true;
       } else {
           $("#iYearId_error").hide();
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