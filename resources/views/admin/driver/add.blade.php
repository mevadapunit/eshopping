@extends('layouts.app.admin-app')
@if(isset($driver))
@section('title', 'Driver Profile Edit- '.env('APP_NAME'))
@else
@section('title', 'Driver Profile Add- '.env('APP_NAME'))
@endif
@section('content')


<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-md-12">
                  @if(isset($driver))
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item mt-2 me-3">
                        <spna class="col-sm-6 ">
                            <h5>Edit Driver</h5>
                        </spna>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="{{route('admin.driver.edit',$driver->vUniqueCode)}}"
                        ><i class="bx bx-user me-1"></i> Profile</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="{{url('admin/driver/tax_edit',$driver->vUniqueCode)}}"><i class='bx bx-receipt'></i> Tax Details</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('admin/driver/bankdetails_edit',$driver->vUniqueCode)}}"
                        ><i class="bx bx-link-alt me-1"></i> Bank Details</a
                      >
                    </li>
                     <li class="nav-item">
                      <a class="nav-link " href="{{url('admin/driver/vehicle_edit',$driver->vUniqueCode)}}"><i class="bx bx-car me-1"></i> Vehicle</a
                      >
                    </li>
                     <li class="nav-item">
                      <a class="nav-link" href="{{url('admin/driver/document_edit',$driver->vUniqueCode)}}"><i class='bx bx-file'></i> Document</a
                      >
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('admin/driver/vehicle_images',$driver->vUniqueCode)}}"><i class='bx bx-image-add'></i>Vehicle Images</a
                      >
                    </li>
                    <li class="nav-item">
                     <a class="nav-link" href="{{url('admin/driver/training_video_verification',$driver->vUniqueCode)}}"><i class='bx bx-show-alt'></i>Video Status</a
                      >
                    </li>
                     <li class="nav-item">
                     <a class="nav-link" href="{{url('admin/driver/referral_code',$driver->vUniqueCode)}}"><i class='bx bxs-network-chart'></i>Raferral</a
                      >
                    </li>
                     
                  </ul>
                  @endif
          @if(!isset($driver))        
          <div class="row mb-2">
            <div class="col-sm-6">
                <h5>Add Driver</h5>
            </div>
          </div>
          @endif
            <form action="{{url('admin/driver/store')}}" name="frm" id="frm" method="post"
               enctype="multipart/form-data">
               @csrf
             <div class="card mb-4">
               <div class="card-body">
                  <input type="hidden" id="vUniqueCode" name="vUniqueCode"
                     value="@if(isset($driver)){{$driver->vUniqueCode}}@endif">
                  <input type="hidden" id="selected_iCityId" value="@if(isset($driver)){{$driver->iCityId}}@endif">
                  <div class="row g-3">
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>First name</label>
                        <input type="text" name="vFirstName" id="vFirstName" class="form-control"
                           placeholder="Enter First Name"
                           value="@if(isset($driver)){{$driver->vFirstName}}@endif">
                        <div id="vFirstName_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter First name
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Middle Name</label>
                        <input type="text" name="vMiddleName" id="vMiddleName" class="form-control"
                           placeholder="Enter Middle Name"
                           value="@if(isset($driver)){{$driver->vMiddleName}}@endif">
                        <div id="vMiddleName_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Middle Name
                        </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Last Name</label>
                        <input type="text" name="vLastName" id="vLastName" class="form-control"
                           placeholder="Enter Last Name"
                           value="@if(isset($driver)){{$driver->vLastName}}@endif">
                        <div id="vLastName_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Last name
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Email</label>
                        <div class="input-group input-group-merge">
                           <input class="form-control"
                              type="email" name="vEmail" id="vEmail" class="form-control"
                              placeholder="Enter Email" value="@if(isset($driver)){{$driver->vEmail}}@endif"/>
                        </div>
                        <div id="email_error" class="error mt-1" style="color:red;display: none;">Please
                           Enter Email
                        </div>
                        <div id="email_valid_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Valid Email
                        </div>
                        <div id="email_unique_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Different Email, this email is already in use.
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Phone</label>
                        <input type="text" name="vPhone" id="vPhone" class="form-control"
                           placeholder="Enter Phone" value="@if(isset($driver)){{$driver->vPhone}}@endif">
                        <div id="vPhone_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Phone
                        </div>
                        <div id="vPhone_valid_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter 10 Digit Mobile Number
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>DOB(Date Of Birth)</label>
                        <input class="form-control"  value="@if(old('dBirthDate')!=''){{old('dBirthDate')}}@elseif(isset($driver->dBirthDate)){{$driver->dBirthDate}}@else{{old('dBirthDate')}}@endif" type="date" name="dBirthDate" id="dBirthDate">
                        <div id="dBirthDate_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Date Of Birth
                        </div>
                     </div> 
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Gender</label>
                        <select name="eGender" id="eGender" class="form-select">
                           <option value="">Select Gender</option>
                           <option value="Male" @if(isset($driver)) @if($driver->eGender == 'Male')
                           selected @endif @endif>Male</option>
                           <option value="Female" @if(isset($driver)) @if($driver->eGender ==
                           'Female') selected @endif @endif>Female</option>
                           <option value="Other" @if(isset($driver)) @if($driver->eGender ==
                           'Other') selected @endif @endif>Other</option>
                        </select>
                        <div id="eGender_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Gender
                        </div>
                     </div>
                     @if(!isset($driver))
                     <div class="form-group col-lg-6 col-md-6 last">
                        <label class="label-control">Password</label>
                        <input type="password" class="form-control" id="password" name="vPassword"
                            value="" placeholder="Enter Password" required>
                        <div  class="error mt-1"  style="color:red;display: none;" id="vPassword_error">Please
                           Enter Password
                        </div>
                     </div>
                     <div class="form-group col-lg-6 col-md-6 last">
                        <label class="label-control">Confirm Password</label>
                        <input type="password" class="form-control" id="vPassword2" name="vPassword2"
                           value=""  placeholder="Enter Confirm Password" required>
                        <div id="vPassword2_error" class="error mt-1" style="color:red; display: none;">
                           Please Enter Confirm Password
                        </div>
                        <div class="error mt-1" id="vPassword2_same_error"
                           style="color:red; display: none;">Password should match</div>
                     </div>
                     @endif
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Immigration Status</label>
                        <select id="iImmigrationStatusId" name="iImmigrationStatusId" class="form-select">
                            <option value="">Select Status</option>
                            @foreach($immigration_status as $value)
                            <option value="{{$value->iImmigrationStatusId}}" @if(isset($driver)) @if($driver->iImmigrationStatusId == $value->iImmigrationStatusId) selected @endif @endif>{{$value->vImmigrationStatus}}</option>
                            @endforeach
                        </select>
                        <div id="iImmigrationStatusId_error" class="error mt-1" style="color:red;display: none;">
                            Please Select Immigration Status</div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                            <label>Image </label>
                            <input class="form-control media_image only_image" accept="image/jpg, image/jpeg, image/png" type="file" id="vImage"
                                name="vImage">

                            <img style="width: 100px; border-radius: 10px;margin-top: 7px; display:none;" class="vImage_preview_img" id="vImage_preview"
                                src="#" alt="your image" />

                            @if(isset($driver) && $driver->vImage !='' &&
                            file_exists(public_path()."/uploads/user/".$driver->vImage))


                            <!-- for image -->
                            <img style="width: 100px; border-radius: 10px;margin-top: 7px;" id="image_display"
                                value="@if(old('vImage') == 'vImage') selected @endif"
                                src="{{asset('uploads/user/'.$driver->vImage)}}">
                            
                            @elseif(isset($driver))
                            <!-- default image -->
                            @if($driver->eGender != null)
                                @if($driver->eGender == "Male" || $driver->eGender == "Other")
                                <div id="image_none">
                                   <img alt="no-image" style="width: 115px;aspect-ratio: auto 100 / 100;height: 100px;" class="card-img-top" src="{{ asset('admin/assets/img/avatars/male.jpg') }}">
                                </div>
                                @elseif($driver->eGender == "Female")
                                <div id="image_none">
                                  <img alt="no-image"  style="width: 115px;aspect-ratio: auto 100 / 100;height: 100px;" class="card-img-top"  src="{{ asset('admin/assets/img/avatars/female.jpg') }}">
                                </div>
                                @endif
                            @else
                            <div id="image_none">
                                <img  style="display: block;" height="100" width="100" class="d-block rounded"
                                    src="{{ asset('admin/assets/img/no_image.png') }}" alt="No photo">
                            </div>
                            @endif
                            <!-- selected image -->
                            <img style="width: 100px;display:none;border-radius: 10px;margin-top: 7px;" class="image_Preview"
                                id="vMiddleImage_preview" src="#" alt="your image" />

                            @endif
                           

                            @if(!(isset($driver)))
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
                                Please Select Banner
                            </div>
                         </div>
                        <!-- Residential address -->
                        <div class="form-group col-xl-12 col-lg-12 pt-2">
                          <p style="background-color: #FFE6D5;color: #464C52; width: fit-content;border-radius: 5px;padding: 2px 10px;text-align: center;height: fit-content;font-weight: 600;color:#ec8c00;">Residential Address</p>
                        </div>
                        <div class="form-group col-xl-6 col-lg-12 col-md-6">
                            <label>Apt.Number/Unit Number/House Number</label>
                            <textarea class="form-control"  placeholder="Address" name="vAddress1" id="vAddress1" rows="3"  style="height: 72px;">@if(isset($driver)){{ $driver->vAddress1}} @endif</textarea>
                            <div id="vAddress1_error" class="error mt-1" style="color:red;display: none;">
                               Please Enter First name
                            </div>
                        </div>
                        <div class="form-group col-xl-6 col-lg-12 col-md-6">
                            <label>Street Address</label>
                             <textarea class="form-control"  placeholder="Address" name="vAddress2" id="vAddress2" rows="3"  style="height: 72px;">@if(isset($driver)){{ $driver->vAddress2}} @endif</textarea>
                            <div id="vAddress2_error" class="error mt-1" style="color:red;display: none;">
                               Please Enter Street Address
                            </div>
                        </div>
                        <div class="form-group col-xl-6 col-lg-12 col-md-6">
                           <label>State</label>
                           <select id="iStateId" name="iStateId" class="form-select">
                               <option value="">Select State</option>
                               @foreach($states as $value)
                               <option value="{{$value->iStateId}}" @if(isset($driver)) @if($driver->iStateId == $value->iStateId) selected @endif @endif>{{$value->vState}}</option>
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
                            <input type="text" name="vZipCode" id="vZipCode" class="form-control"
                             placeholder="Enter Zipcode"  value="@if(isset($driver)){{$driver->vZipCode}}@endif">
                            <div id="vZipCode_error" class="error mt-1" style="color:red;display: none;">
                               Please Enter Zipcode
                            </div>
                        </div>
                        <div class="form-group col-xl-12 col-lg-12">
                            <input class="form-check-input me-1" type="checkbox"  value="Yes" @if(isset($driver)) @if($driver->eAddressCheck =='Yes') checked @endif @endif  id="eAddressCheck" name="eAddressCheck" >My Postal Address Same As Recidentaial Address
                        </div>
                        <div class="form-group col-xl-6 col-lg-12 col-md-6">
                            <label>Postal Address</label>
                            <textarea class="form-control"  placeholder="Address" name="vPostalAddress" id="vPostalAddress" rows="3"  style="height: 72px;">@if(isset($driver)){{ $driver->vPostalAddress}} @endif</textarea>
                            <div id="vPostalAddress_error" class="error mt-1" style="color:red;display: none;">
                               Please Enter Postal Address
                            </div>
                        </div>

                        <div class="form-group col-xl-6 col-lg-12 col-md-6">
                            <label>Postcode</label>
                            <input type="text" name="vPostCode" id="vPostCode" class="form-control"
                              placeholder="Enter Postcode" value="@if(isset($driver)){{$driver->vPostCode}}@endif">
                            <div id="vPostCode_error" class="error mt-1" style="color:red;display: none;">
                               Please Enter Postcode
                            </div>
                        </div>
                        <div class="form-group col-xl-6 col-lg-12 col-md-6">
                            <label>PTD Authentication</label>
                            <input type="text" name="vPTD" id="vPTD" placeholder="Enter PTD Authentication number" class="form-control"
                               value="@if(isset($driver)){{$driver->vPTD}}@endif">
                            <div id="vPTD_error" class="error mt-1" style="color:red;display: none;">
                               Please Enter PTD Authentication
                            </div>
                        </div>
                        <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Status</label>
                        <select name="eStatus" id="eStatus" class="form-select">
                           <option value="">Select Status</option>
                           <option value="Active" @if(isset($driver)) @if($driver->eStatus == 'Active')
                           selected @endif @endif>Active</option>
                           <option value="Inactive" @if(isset($driver)) @if($driver->eStatus ==
                           'Inactive') selected @endif @endif>Inactive</option>
                           <option value="Pending" @if(isset($driver)) @if($driver->eStatus ==
                           'Pending') selected @endif @endif>Pending</option>
                        </select>
                        <div id="eStatus_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Status
                         </div>
                        </div>
                        <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Profile Verified</label>
                        <select name="eProfileVerified" id="eProfileVerified" class="form-select">
                           <option value="">Select Status</option>
                           <option value="Yes" @if(isset($driver)) @if($driver->eProfileVerified == 'Yes')
                           selected @endif @endif>Yes</option>
                           <option value="No" @if(isset($driver)) @if($driver->eProfileVerified ==
                           'No') selected @endif @endif>No</option>
                          
                        </select>
                        <div id="eProfileVerified_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Profile Verification Status
                         </div>
                        </div>
                  </div>
               </div>
               <div class="card-footer col-12 align-self-end d-inline-block mt-0 text-left">
                  <a href="javascript:;" class="btn btn-primary submit" id="save">Submit</a>
                  <a href="javascript:;" class="btn btn-primary loading" style="display: none;">
                  <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>Loading...
                  </a>
                  <a href="{{url('admin/driver')}}" class="btn-info btn">Back</a>
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
// -- disable future dates of birthdate --->
$(function(){
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();

    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

    var maxDate = year + '-' + month + '-' + day;    
    $('#dBirthDate').attr('max', maxDate);
});
// ------ check unique email -->
 $('#vEmail').keyup(function() {
        var vEmail = $('#vEmail').val();
         $.ajax({
                url:"{{route('admin.admin.check_unique_email')}}",
                type: "POST",
                data: {
                    vEmail: vEmail,
                    _token: '{{csrf_token()}}' 
                },

                dataType : 'json',
          success: function(result){
                     if(result[0] != undefined){
                             $("#email_unique_error").show();
                             error = true;
                           }else{

                             $("#email_unique_error").hide();
                              error = false;
                           }
                    
                   }
          });
 });

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
$(".vImage_preview_img").hide();
// ------------ hide and show image or video or default image code start ---------------->
$("#vImage").change(function() { // Check is a input type button
    var fileName = $("#vImage").val();


    if (this.files && this.files[0] && this.files[0].name.match(/\.(jpg|jpeg|png|gif)$/) ) {
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
  const imgExtensions = ['jpg', 'png','jpeg'];
  const name = event.target.files[0].name;
  const lastDot = name.lastIndexOf('.');

  const ext = name.substring(lastDot + 1);

   if (imgExtensions.includes(ext)) {
   $("#vImage_preview").show().attr("src", fileUrl);
  }

}
// ----------------- get link code end ----------------->
</script>
<script type="text/javascript">
   $(document).on('change', '#vImage', function() {
       var filesize = this.files[0].size
       var maxfilesize = parseInt(filesize / 1024);
       if (maxfilesize > 2048) {
           $('#vImage').val('');
           $("#vImage_error_max").show();
           $("#save").removeClass("submit");
           return false;
       } else {
           $("#save").addClass("submit");
           $("#vImage_error_max").hide();
       }
   });
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
</script>
<script type="text/javascript">
   $(document).on('click', '.submit', function() {
       var vUniqueCode = $("#vUniqueCode").val();
       var vFirstName  = $("#vFirstName").val();
       var vMiddleName = $("#vMiddleName").val();
       var vLastName   = $("#vLastName").val();         
       var vEmail      = $("#vEmail").val();
       var vPhone      = $("#vPhone").val();
       var vPassword   = $("#password").val();
       var vPassword2  = $("#vPassword2").val(); 
       var iRoleId     = $("#iRoleId").val();
       var dBirthDate  = $("#dBirthDate").val();
       var iStateId    = $('#iStateId').find(":selected").val();
       var eGender     = $("#eGender").val();
       var vAddress1   = $.trim($("#vAddress1").val());
       var vAddress2   = $.trim($("#vAddress2").val());
       var vPostalAddress  = $.trim($("#vPostalAddress").val());
       var iCityId     = $("#iCityId").val();
       var vZipCode    = $("#vZipCode").val();
       var vPostCode   = $("#vPostCode").val();
       var vPTD        = $("#vPTD").val();
       var iImmigrationStatusId = $('#iImmigrationStatusId').find(":selected").val();
       var vImage      = $("#vImage").val();
       var eStatus     = $("#eStatus").val();
       var eProfileVerified = $('#eProfileVerified').find(":selected").val();
       var Emailregex  = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
       var Passwordregex = /^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&]).*$/;  
       var error       = false;

       if (eProfileVerified.length == 0) {
           $("#eProfileVerified_error").show();
           error = true;
       } else {
           $("#eProfileVerified_error").hide();
       }

       if (vFirstName.length == 0) {
           $("#vFirstName_error").show();
           error = true;
       } else {
           $("#vFirstName_error").hide();
       }
        if (vMiddleName.length == 0) {
           $("#vMiddleName_error").show();
           error = true;
       } else {
           $("#vMiddleName_error").hide();
       }
       if (vLastName.length == 0) {
           error = true;
           $("#vLastName_error").show();
       } else {
           $("#vLastName_error").hide();
       }
        if (dBirthDate.length == 0) {
           error = true;
           $("#dBirthDate_error").show();
       } else {
           $("#dBirthDate_error").hide();
       }
       if (iStateId.length == 0) {
           error = true;
           $("#iStateId_error").show();
       } else {
           $("#iStateId_error").hide();
       }
       if (eGender.length == 0) {
           error = true;
           $("#eGender_error").show();
       } else {
           $("#eGender_error").hide();
       }
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
       if (iImmigrationStatusId.length == 0) {
           error = true;
           $("#iImmigrationStatusId_error").show();
       } else {
           $("#iImmigrationStatusId_error").hide();
       }
       if (vPhone.length == 0) {
           $("#vPhone_error").show();
           error = true;
       } else if (vPhone.length < 10) {
           $("#vPhone_error").hide();
           $('#vPhone_valid_error').show();
           error = true;
       } else {
           $("#vPhone_error").hide();
           $('#vPhone_valid_error').hide();
       }
       if (eStatus.length == 0) {
           error = true;
           $("#eStatus_error").show();
       } else {
           $("#eStatus_error").hide();
       }
       if (vEmail.length == 0) {
           $("#email_error").show();
           $('#email_valid_error').hide();
           error = true;
       } else {
           $('#email_error').hide();
           if (!Emailregex.test(vEmail)) {
               $('#email_valid_error').show();
               error = true;
           } else {
               $('#email_valid_error').hide();
           }
       }
         if($('#email_unique_error').css('display') == 'block')
       {
           $("#email_unique_error").show();
            error = true;
       }else{

           $("#email_unique_error").hide();
          
       }
      

      if(vUniqueCode == "" ){
           if (vPassword.length == 0) {
               $("#vPassword_error").show();
               error = true;
           } else {
               $("#vPassword_error").hide();
           }
   
           if (vPassword2.length == 0) {
               $("#vPassword2_error").show();
               $("#vPassword2_same_error").hide();
               error = true;
           } else {
               $("#vPassword2_error").hide();
           }
           if (vPassword.length != 0 && vPassword2.length != 0) {
               if (vPassword != vPassword2) {
                   $("#vPassword2_same_error").show();
                   error = true;
               } else {
                   $("#vPassword2_same_error").hide();
               }
           }
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