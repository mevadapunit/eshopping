@extends('layouts.app.admin-app')
@if(isset($admin))
@section('title', 'Admin Edit- '.env('APP_NAME'))
@else
@section('title', 'Admin Add- '.env('APP_NAME'))
@endif
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-md-12">
        
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item mt-2 me-3">
                        <spna class="col-sm-6 ">
                            <h5>{{ isset($admin) ? 'Edit' : 'Add' }} Admin</h5>
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
                      <a class="nav-link active" href="{{route('admin.admin.edit',$admin->vUniqueCode)}}"
                        ><i class="bx bx-user me-1"></i>Admin Profile</a
                      >
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link @if(!isset($admin)) disabled @endif " href="{{route('admin.admin.address_edit',$admin->vUniqueCode)}}"><i class='bx bx-receipt'></i> Address</a
                      >
                    </li>
                    @endif
                  </ul>
      
             <form action="{{url('admin/admin/store')}}" name="frm" id="frm" method="post"
               enctype="multipart/form-data">
               @csrf
            <div class="card mb-4">
                    
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <input type="file" id="vImage" class="account-file-input media_image only_image" hidden=""  name="vImage" accept="image/png, image/jpeg">
                        <img style="width: 100px; border-radius: 10px;margin-top: 7px; display:none;" class="vImage_preview_img" id="vImage_preview"
                                src="#" alt="your image" />

                      @if(isset($admin) && $admin->vImage !='' && file_exists(public_path()."/uploads/user/".$admin->vImage))
                       
                        <img style="width: 100px; border-radius: 10px;margin-top: 7px;" alt="user-avatar" class=" rounded " id="image_display"
                                value="@if(old('vImage') == 'vImage') @endif"
                                src="{{asset('uploads/user/'.$admin->vImage)}}">
                       @elseif(isset($admin))
                          
                            <!-- default image -->
                            @if($admin->eGender != null)
                                @if($admin->eGender == "Male" || $admin->eGender == "Other")
                                <div id="image_none">
                                   <img alt="no-image" style="width: 115px;aspect-ratio: auto 100 / 100;height: 100px;" class="card-img-top" src="{{ asset('admin/assets/img/avatars/male.jpg') }}">
                                </div>
                                @elseif($admin->eGender == "Female")
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
                         @if(!(isset($admin)))
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
                             Please Select Image
                         </div>
                        <div class="button-wrapper">
                          <label for="vImage" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload Image</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            
                          </label>
                   
                            <p class="text-muted mb-0">Allowed JPG, JPEG or PNG. Max size of 800K</p>


                        </div>
                      </div>
                    </div>

               <div class="card-body">
                  <input type="hidden" id="vUniqueCode" name="vUniqueCode"
                     value="@if(isset($admin)){{$admin->vUniqueCode}}@endif">
                  <div class="row g-3">
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>First name</label>
                        <input type="text" name="vFirstName" id="vFirstName" class="form-control"
                           placeholder="Enter First Name"
                           value="@if(isset($admin)){{$admin->vFirstName}}@endif">
                        <div id="vFirstName_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter First name
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Middle Name</label>
                        <input type="text" name="vMiddleName" id="vMiddleName" class="form-control"
                           placeholder="Enter Middle Name"
                           value="@if(isset($admin)){{$admin->vMiddleName}}@endif">
                        <div id="vMiddleName_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Middle Name
                        </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Last Name</label>
                        <input type="text" name="vLastName" id="vLastName" class="form-control"
                           placeholder="Enter Last Name"
                           value="@if(isset($admin)){{$admin->vLastName}}@endif">
                        <div id="vLastName_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Last name
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Email</label>
                        <div class="input-group input-group-merge">
                           <input class="form-control"
                              type="email" name="vEmail" id="vEmail" class="form-control"
                              placeholder="Enter Email" value="@if(isset($admin)){{$admin->vEmail}}@endif"/>
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
                           placeholder="Enter Phone" value="@if(isset($admin)){{$admin->vPhone}}@endif">
                        <div id="vPhone_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Phone
                        </div>
                        <div id="vPhone_valid_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter 10 Digit Mobile Number
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Gender</label>
                        <select name="eGender" id="eGender" class="form-select">
                           <option value="">Select Gender</option>
                           <option value="Male" @if(isset($admin)) @if($admin->eGender == 'Male')
                           selected @endif @endif>Male</option>
                           <option value="Female" @if(isset($admin)) @if($admin->eGender ==
                           'Female') selected @endif @endif>Female</option>
                           <option value="Other" @if(isset($admin)) @if($admin->eGender ==
                           'Other') selected @endif @endif>Other</option>
                        </select>
                        <div id="eGender_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Gender
                        </div>
                     </div>
                     @if(!isset($admin))
                     <div class="form-group col-lg-6 col-md-6 last">
                        <label class="label-control">Password</label>
                        <input type="password" class="form-control" id="vPassword" name="vPassword"
                            value="" placeholder="Enter Password" required>
                        <div  class="error mt-1"  style="color:red;display: none;" id="vPassword_error">Please
                           Enter Password
                        </div>
                     </div>
                     <div class="form-group col-lg-6 col-md-6 last">
                        <label class="label-control">Confirm Password</label>
                        <input type="password" class="form-control" id="vPassword2" name="vPassword2"
                           value=""placeholder="Enter Confirm Password" required>
                        <div id="vPassword2_error" class="error mt-1" style="color:red; display: none;">
                           Please Enter Confirm Password
                        </div>
                        <div class="error mt-1" id="vPassword2_same_error"
                           style="color:red; display: none;">Password should match</div>
                     </div>
                      
                     @endif
                       <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Status</label>
                        <select name="eStatus" id="eStatus" class="form-select">
                           <option value="">Select Status</option>
                           <option value="Active" @if(isset($admin)) @if($admin->eStatus == 'Active')
                           selected @endif @endif>Active</option>
                           <option value="Inactive" @if(isset($admin)) @if($admin->eStatus ==
                           'Inactive') selected @endif @endif>Inactive</option>
                           <option value="Pending" @if(isset($admin)) @if($admin->eStatus ==
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
   $("#image_display", window.parent.document).css(
        "display" , "none"
        );
  }

}
// ----------------- get link code end ----------------->
</script>
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
       var vFirstName  = $("#vFirstName").val();
       var vMiddleName = $("#vMiddleName").val();
       var vLastName   = $("#vLastName").val();         
       var vEmail      = $("#vEmail").val();
       var vPhone      = $("#vPhone").val();
       var vPassword   = $("#vPassword").val();
       var vPassword2  = $("#vPassword2").val(); 
       var vImage      = $("#vImage").val();
       var eGender     = $("#eGender").val();
       var eStatus     = $("#eStatus").val();
       var Emailregex  = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
       var Passwordregex = /^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&]).*$/;  
       var error       = false;

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
       if (eGender.length == 0) {
           error = true;
           $("#eGender_error").show();
       } else {
           $("#eGender_error").hide();
       }


       if($('#email_unique_error').css('display') == 'block')
       {
           $("#email_unique_error").show();
            error = true;
       }else{

           $("#email_unique_error").hide();
           error = false;
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
      

      @if(!isset($admin))
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
                   return false;
               } else {
                   $("#vPassword2_same_error").hide();
               }
           }
      @endif


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