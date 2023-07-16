@extends('layouts.app.admin-app')
@if(isset($admin))
@section('title', 'Address Edit- '.env('APP_NAME'))
@else
@section('title', 'Address Add- '.env('APP_NAME'))
@endif
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-md-12">
               <ul class="nav nav-pills flex-column flex-md-row mb-3">
                     <li class="nav-item mt-2 me-3">
                        <spna class="col-sm-6 ">
                            <h5>{{ isset($admin) ? 'Edit' : 'Add' }} Address</h5>
                        </spna>
                    </li>
                    @if(!isset($admin->vUniqueCode))
                    <li class="nav-item">
                      <a class="nav-link active" href="{{route('admin.admin.add')}}"
                        ><i class="bx bx-user me-1"></i>Admin Profile</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link @if(!isset($admin)) disabled @endif " href="javascript:void(0)"><i class='bx bx-receipt'></i> Address</a
                      >
                    </li>
                    @elseif(isset($admin->vUniqueCode))
                    <li class="nav-item">
                      <a class="nav-link " href="{{route('admin.admin.edit',$admin->vUniqueCode)}}"
                        ><i class="bx bx-user me-1"></i>Admin Profile</a
                      >
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link active @if(!isset($admin)) disabled @endif " href="{{route('admin.admin.address_edit',$admin->vUniqueCode)}}"><i class='bx bx-receipt'></i> Address</a
                      >
                    </li>
                    @endif
                  </ul>
             <form action="{{url('admin/admin/address_store')}}" name="frm" id="frm" method="post"
               enctype="multipart/form-data">
               @csrf
            <div class="card mb-4">
                   

               <div class="card-body">
                  <input type="hidden" id="vUniqueCode" name="vUniqueCode"
                     value="@if(isset($admin)){{$admin->vUniqueCode}}@endif">
                  <input type="hidden" id="selected_iCityId" value="@if(isset($admin)){{$admin->iCityId}}@endif">
                  <div class="row g-3">
                   
                     
                        <!-- Residential address -->
                      
                        <div class="form-group col-xl-6 col-lg-12 col-md-6">
                            <label>Apt.Number/Unit Number/House Number</label>
                            <textarea class="form-control"  placeholder="Address" name="vAddress1" id="vAddress1" rows="3"  style="height: 72px;">@if(isset($admin)){{$admin->vAddress1}}@endif</textarea>
                            <div id="vAddress1_error" class="error mt-1" style="color:red;display: none;">
                               Please Enter First name
                            </div>
                        </div>
                        <div class="form-group col-xl-6 col-lg-12 col-md-6">
                            <label>Street Address</label>
                             <textarea class="form-control"  placeholder="Address" name="vAddress2" id="vAddress2" rows="3"  style="height: 72px;">@if(isset($admin)){{$admin->vAddress2}}@endif</textarea>
                            <div id="vAddress2_error" class="error mt-1" style="color:red;display: none;">
                               Please Enter Street Address
                            </div>
                        </div>
                        <div class="form-group col-xl-6 col-lg-12 col-md-6">
                           <label>State</label>
                           <select id="iStateId" name="iStateId" class="form-select">
                               <option value="">Select State</option>
                               @foreach($states as $value)
                               <option value="{{$value->iStateId}}" @if(isset($admin)) @if($admin->iStateId == $value->iStateId) selected @endif @endif>{{$value->vState}}</option>
                               @endforeach
                           </select>
                           <div id="iStateId_error" class="error mt-1" style="color:red;display: none;">
                               Please Select State</div>
                        </div>
                        <div class="form-group col-xl-6 col-lg-12 col-md-6">
                          <div class="form-group">
                              <label>City Name</label>
                              <select id="iCityId" name="iCityId" class="form-select">
                              <option value="">Select City</option>
                              </select>
                              <div id="iCityId_error" class="error mt-1" style="color:red;display: none;">Please Select City Name
                              </div>
                          </div>
                        </div>
                        <div class="form-group col-xl-6 col-lg-12 col-md-6">
                            <label>Zipcode</label>
                            <input type="text" name="vZipCode" id="vZipCode" placeholder="Zipcode" class="form-control"
                               value="@if(isset($admin)){{$admin->vZipCode}}@endif">
                            <div id="vZipCode_error" class="error mt-1" style="color:red;display: none;">
                               Please Enter Zipcode
                            </div>
                        </div>
                        <div class="form-group col-xl-12 col-lg-12">
                            <input class="form-check-input me-1" type="checkbox"  value="Yes" @if(isset($admin)) @if($admin->eAddressCheck =='Yes') checked @endif @endif  id="eAddressCheck" name="eAddressCheck">My Postal Address Same As Recidentaial Address
                        </div>
                        <div class="form-group col-xl-6 col-lg-12 col-md-6">
                            <label>Postal Address</label>
                            <textarea class="form-control"  placeholder="Address" name="vPostalAddress" id="vPostalAddress" rows="3"  style="height: 72px;">@if(isset($admin)){{$admin->vPostalAddress}}@endif</textarea>
                            <div id="vPostalAddress_error" class="error mt-1" style="color:red;display: none;">
                               Please Enter Postal Address
                            </div>
                        </div>

                        <div class="form-group col-xl-6 col-lg-12 col-md-6">
                            <label>Postcode</label>
                            <input type="text" name="vPostCode" id="vPostCode" placeholder="Postcode" class="form-control"
                               value="@if(isset($admin)){{$admin->vPostCode}}@endif">
                            <div id="vPostCode_error" class="error mt-1" style="color:red;display: none;">
                               Please Enter Postcode
                            </div>
                        </div>
                        <div class="form-group col-xl-6 col-lg-12 col-md-6">
                            <label>PTD Authentication</label>
                            <input type="text" name="vPTD" id="vPTD" placeholder="Enter PTD Authentication number" class="form-control"
                               value="@if(isset($admin)){{$admin->vPTD}}@endif">
                            <div id="vPTD_error" class="error mt-1" style="color:red;display: none;">
                               Please Enter PTD Authentication
                            </div>
                        </div>
                       
                  </div>
               </div>
               <div class="card-footer col-12 align-self-end d-inline-block mt-0 text-left">
                  <a href="javascript:;" class="btn btn-primary submit" id="save">Submit</a>
                  <a href="javascript:;" class="btn btn-primary loading" style="display: none;">
                  <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>Loading...
                  </a>
                  <a href="{{url('admin/admin')}}" class="btn-info btn">Back</a>
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

$(document).ready(function() {
  var iStateId            = $("#iStateId").val();
  var selected_iCityId    = $("#selected_iCityId").val();
  if(iStateId != ''){
      $("#iCityId").html('');
      $.ajax({
          url:"{{url('admin/city/get_city_by_state')}}",
          type: "POST",
          data: {
              iStateId: iStateId,
              _token: '{{csrf_token()}}'
          },
          dataType : 'json',
          success: function(result){
              // console.log(result);
              $('#iCityId').html('<option value="">Select City</option>');
                  // alert(selected_iCityId);
                  $.each(result.city,function(key,value){
                      if (selected_iCityId == value.iCityId) {
                          $('select[name="iCityId"]').append('<option selected value="'+value.iCityId+'">'+value.vCity+'</option>');
                      }else{
                          $("#iCityId").append('<option value="'+value.iCityId+'">'+value.vCity+'</option>');
                      }
                  });
          }
       });
  }
});

$(document).on('change','#iStateId',function()
    {
        var iStateId = $("#iStateId").val();
        if(iStateId != ''){
            $("#state_id").html('');
            $.ajax({
                url:"{{url('admin/city/get_city_by_state')}}",
                type: "POST",
                data: {
                    iStateId: iStateId,
                    _token: '{{csrf_token()}}'
                },

                dataType : 'json',
                success: function(result){
                    // console.log(result);
                    $('#iCityId').html('<option value="">Select City</option>');
                    $.each(result.city,function(key,value){
                        $("#iCityId").append('<option value="'+value.iCityId+'">'+value.vCity+'</option>');
                    });
                }
            });
        }
});

$(document).ready(function() {
            var check = $('#eAddressCheck').is(':checked');
            if (check == true) {
                $('#vPostalAddress').prop('readonly', true);
                $('#vPostCode').prop('readonly', true);
            }else{
                $('#vPostalAddress').prop('readonly', false);
                $('#vPostCode').prop('readonly', false);
            }

         $("#eAddressCheck").click(function() {
            var checked   = $(this).is(':checked');
            var vAddress1 = $.trim($("#vAddress1").val()); 
            var vZipCode = $("#vZipCode").val(); 
            if (checked) {
                $("#vPostalAddress").val(vAddress1); 
                $("#vPostCode").val(vZipCode);
                if(vAddress1.length != 0){
                $('#vPostalAddress').prop('readonly', true);
                }else{alert("Enter First Recidential Address");}
                if(vZipCode.length != 0){
                $('#vPostCode').prop('readonly', true);
                }else{alert("Enter First ZipCode");}
            }else{
                $('#vPostalAddress').prop('readonly', false);
                $('#vPostCode').prop('readonly', false);
            }
        });
});

</script>
<script type="text/javascript">
   $(document).on('keyup', '#vPhone', function() {
       vPhone = $(this).val();
       if (vPhone.length > 10) {
           $('#vPhone').val(vPhone.substring(0, 10));
       }
   
   });
   $(document).on('keypress', '#vPhone', function(e) {
       var charCode = (e.which) ? e.which : event.keyCode
       if (String.fromCharCode(charCode).match(/[^0-9]/g))
           return false;
   });

   
   $(document).on('click', '.submit', function() {
       var vUniqueCode = $("#vUniqueCode").val();
       var iStateId    = $("#iStateId").val();
       var eGender     = $("#eGender").val();
       var vAddress1   = $.trim($("#vAddress1").val());
       var vAddress2   = $.trim($("#vAddress2").val());
       var iCityId     = $("#iCityId").val();
       var vZipCode    = $("#vZipCode").val();
       var vPostalAddress = $.trim($("#vPostalAddress").val());
       var vPostCode   = $("#vPostCode").val();
       var vPTD        = $("#vPTD").val(); 
       var error       = false;

        if (vAddress1.length == 0) {
           error = true;
           $("#vAddress1_error").show();
       } else {
           $("#vAddress1_error").hide();
       }
       if (vAddress2.length == 0) {
           error = true;
           $("#vAddress2_error").show();
       } else {
           $("#vAddress2_error").hide();
       }
        if (iStateId.length == 0) {
           error = true;
           $("#iStateId_error").show();
       } else {
           $("#iStateId_error").hide();
       }
       if (iCityId.length == 0) {
           error = true;
           $("#iCityId_error").show();
       } else {
           $("#iCityId_error").hide();
       }

       if (vZipCode.length == 0) {
           error = true;
           $("#vZipCode_error").show();
       } else {
           $("#vZipCode_error").hide();
       }
       if (vPostalAddress.length == 0) {
           error = true;
           $("#vPostalAddress_error").show();
       } else {
           $("#vPostalAddress_error").hide();
       }

       if (vPostCode.length == 0) {
           error = true;
           $("#vPostCode_error").show();
       } else {
           $("#vPostCode_error").hide();
       }
        if (vPTD.length == 0) {
           error = true;
           $("#vPTD_error").show();
       } else {
           $("#vPTD_error").hide();
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