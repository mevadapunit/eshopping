@extends('layouts.app.admin-app')
@if(isset($offers))
@section('title', 'Offer Edit- '.env('APP_NAME'))
@else
@section('title', 'Offer Add- '.env('APP_NAME'))
@endif
@section('content')


<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-md-12">
         <div class="row mb-2">
            <div class="col-sm-6 mt-2">
                <h5>{{ isset($offers) ? 'Edit' : 'Add' }} Offer</h5>
            </div>
         </div>
         <form action="{{url('admin/offer/store')}}" name="frm" id="frm" method="post"
               enctype="multipart/form-data">
               @csrf
              <div class="card mb-4">
                <div class="card-body">
                  <input type="hidden" id="vUniqueCode" name="vUniqueCode"
                     value="@if(isset($offers)){{$offers->vUniqueCode}}@endif">
                  <div class="row g-3">
                    
                    <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Type</label>
                        <select name="eType" id="eType" class="form-select">
                           <option value="">Select Type</option>
                           <option value="Offers" @if(isset($offers)) @if($offers->eType == 'Offers')
                           selected @endif @endif>Offers</option>
                           <option value="Driver Offer" @if(isset($offers)) @if($offers->eType ==
                           'Driver Offer') selected @endif @endif>Driver Offer</option>
                           <option value="Rider offer" @if(isset($offers)) @if($offers->eType ==
                           'Rider offer') selected @endif @endif>Rider offer</option>
                        </select>
                        <div id="eType_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Type
                        </div>
                    </div>

                    <div class="form-group col-xl-6 col-lg-12 col-md-6 offerpercentage" style="display:none">
                        <label>Percentage</label>
                        <input type="text" name="vPercentage" id="vPercentage" class="form-control"
                           placeholder="Ex. 0%"
                           value="@if(isset($offers)){{$offers->vPercentage}}@endif">
                        <div id="vPercentage_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Percentage
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Title</label>
                        <input type="text" name="vTitle" id="vTitle" class="form-control titleplaceholder"
                           placeholder="Enter Title"
                           value="@if(isset($offers)){{$offers->vTitle}}@endif">
                        <div id="vTitle_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter offers
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6 offerstartdate" style="display:none">
                        <label>Start Date</label>
                        <input class="form-control"  onkeydown="return false"  value="@if(old('dStartDate')!=''){{old('dStartDate')}}@elseif(isset($offers->dStartDate)){{$offers->dStartDate}}@else{{old('dStartDate')}}@endif" type="date" name="vStartDate" id="vStartDate">
                        <div id="vStartDate_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Start Date
                        </div>
                     </div> 
                     <div class="form-group col-xl-6 col-lg-12 col-md-6 offerenddate" style="display:none">
                        <label>End Date</label>
                        <input class="form-control"  onkeydown="return false"  value="@if(old('dEndDate')!=''){{old('dEndDate')}}@elseif(isset($offers->dEndDate)){{$offers->dEndDate}}@else{{old('dEndDate')}}@endif" type="date" name="vEndDate" id="vEndDate">
                        <div id="vEndDate_error" class="error mt-1" style="color:red;display: none;">
                           Please Select End Date
                        </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Feature</label>
                        <select name="eFeature" id="eFeature" class="form-select">
                           <option value="">Select Feature</option>
                           <option value="Yes" @if(isset($offers)) @if($offers->eFeature ==
                           'Yes') selected @endif @endif>Yes</option>
                           <option value="No" @if(isset($offers)) @if($offers->eFeature == 'No')
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
                           <option value="Active" @if(isset($offers)) @if($offers->eStatus == 'Active')
                           selected @endif @endif>Active</option>
                           <option value="Inactive" @if(isset($offers)) @if($offers->eStatus ==
                           'Inactive') selected @endif @endif>Inactive</option>
                           <option value="Pending" @if(isset($offers)) @if($offers->eStatus ==
                           'Pending') selected @endif @endif>Pending</option>
                        </select>
                        <div id="eStatus_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Status
                        </div>
                     </div>


                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Description</label>
                        <textarea  name="tDescription" id="tDescription" class="form-control"
                           placeholder="Enter Description"
                           value="@if(isset($offers)){{$offers->tDescription}}@endif">@if(isset($offers)){{$offers->tDescription}}@endif</textarea> 
                        <div id="tDescription_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Description</div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                            <label>Image </label>
                            <input class="form-control media_image only_image" accept="image/jpg, image/jpeg, image/png, image/svg" type="file" id="vImage"
                                name="vImage">

                            <img style="width: 100px; border-radius: 10px;margin-top: 7px; display:none;" class="vImage_preview_img" id="vImage_preview"
                                src="#" alt="your image" />

                            @if(isset($offers) && $offers->vImage !='' &&
                            file_exists(public_path()."/uploads/offer/".$offers->vImage))


                            <!-- for image -->
                            <img style="width: 100px; border-radius: 10px;margin-top: 7px;" id="image_display"
                                value="@if(old('vImage') == 'vImage') selected @endif"
                                src="{{asset('uploads/offer/'.$offers->vImage)}}">
                            
                            @elseif(isset($offers))
                            <!-- default image -->
                            
                            <div id="image_none">
                                <img  style="display: block;" height="100" width="100" class="d-block rounded"
                                    src="{{ asset('admin/assets/img/no_image.png') }}" alt="No photo">
                            </div>
                          
                            <!-- selected image -->
                            <img style="width: 100px;display:none;border-radius: 10px;margin-top: 7px;" class="image_Preview"
                                id="vMiddleImage_preview" src="#" alt="your image" />

                            @endif
                           

                            @if(!(isset($offers)))
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
                                Please Select offers
                            </div>
                      </div>
                      
                  </div>
               </div>
               <div class="card-footer col-12 align-self-end d-inline-block mt-0 text-left">
                  <a href="javascript:;" class="btn btn-primary submit" id="save">Submit</a>
                  <a href="javascript:;" class="btn btn-primary loading" style="display: none;">
                  <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>Loading...
                  </a>
                  <a href="{{url('admin/offer')}}" class="btn-info btn">Back</a>
               </div>
              </div>
            </form>
             @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
         </div>
     </div>
</div>
@endsection
@section('custom-css')
<style></style>
@endsection
@section('custom-js')
  
<script type="text/javascript">
 
 var type = $('#eType').val();
 if(type == "Offers")
 {
    $('.offerpercentage').show();
    $('.offerstartdate').show();
    $('.offerenddate').show();
    $('#vTitle').attr('placeholder','Ex. Service Fee Till');
 }else if(type == "Driver Offer" || type == "Rider offer" )
 {
    $('.offerpercentage').hide();
    $('.offerstartdate').hide();
    $('.offerenddate').hide();
    $('#vTitle').attr('placeholder','Enter Title');
 }

 $("#eType").change(function(){
     var type = $(this).val();
     if(type == "Offers")
     {
        $('.offerpercentage').show();
        $('.offerstartdate').show();
        $('.offerenddate').show();
        $('#vTitle').attr('placeholder','Ex. Service Fee Till');
     }else if(type == "Driver Offer" || type == "Rider offer" )
     {
        $('.offerpercentage').hide();
        $('.offerstartdate').hide();
        $('.offerenddate').hide();
        $('#vTitle').attr('placeholder','Enter Title');
     }
});

 $(document).on('keypress', '#vPercentage', function(e) {
       var charCode = (e.which) ? e.which : event.keyCode
       if (String.fromCharCode(charCode).match(/[^0-9]/g))
           return false;
 });

document.querySelector('#vPercentage').addEventListener('input', function(e){
  let int = e.target.value.slice(0, e.target.value.length - 1);
  if (int.includes('%')) {
    e.target.value = '%';
  }
  else if(int.length >= 3 && int.length <= 4 && !int.includes('.')){
    e.target.value = int.slice(0,2) + '.' + int.slice(2,3) + '%';
    e.target.setSelectionRange(4, 4);
  }
  else if(int.length >= 5 & int.length <= 6){
    let whole = int.slice(0, 2);
    let fraction = int.slice(3, 5);
    e.target.value = whole + '.' + fraction + '%';
  }
  else {
    e.target.value = int + '%';
    e.target.setSelectionRange(e.target.value.length-1, e.target.value.length-1);
  }
  console.log(getInt(e.target.value));
});

function getInt(val){
  let v = parseFloat(val);
  if(v % 1 === 0){
    return v;  
  }else{
    let n = v.toString().split('.').join('');
    return parseInt(n);
  }
}

 $(".vImage_preview_img").hide();
// ------------ hide and show image or video or default image code start ---------------->
$("#vImage").change(function() { // Check is a input type button
    var fileName = $("#vImage").val();


    if (this.files && this.files[0] && this.files[0].name.match(/\.(jpg|jpeg|png|svg)$/) ) {
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
  const imgExtensions = ['jpg', 'png','jpeg','svg'];
  const name = event.target.files[0].name;
  const lastDot = name.lastIndexOf('.');

  const ext = name.substring(lastDot + 1);

   if (imgExtensions.includes(ext)) {
   $("#vImage_preview").show().attr("src", fileUrl);
  }

}
// ----------------- get link code end ----------------->

   $(document).on('click', '.submit', function() {
       var vUniqueCode = $("#vUniqueCode").val();
       var vTitle      = $("#vTitle").val();
       var eStatus     = $("#eStatus").val();
       var eType       = $("#eType").val();
       var vImage      = $("#vImage").val();
       var eFeature    = $("#eFeature").val();
       var tDescription = $.trim($("#tDescription").val());


       var error = false;

       if($('.offerpercentage').css('display') != 'none')
       {    var vPercentage    = $("#vPercentage").val();
            if (vPercentage.length == 0) {
            $("#vPercentage_error").show();
               error = true;
            } else {
               $("#vPercentage_error").hide();
            }
       }

       if($('.offerstartdate').css('display') != 'none')
       {    var vStartDate    = $("#vStartDate").val();
            if (vStartDate.length == 0) {
            $("#vStartDate_error").show();
               error = true;
            } else {
               $("#vStartDate_error").hide();
            }
       }
       if($('.offerenddate').css('display') != 'none')
       {    var vEndDate    = $("#vEndDate").val();
            if (vEndDate.length == 0) {
            $("#vEndDate_error").show();
               error = true;
            } else {
               $("#vEndDate_error").hide();
            }
       }
   
       if (eType.length == 0) {
           $("#eType_error").show();
           error = true;
       } else {
           $("#eType_error").hide();
       }
       if (vTitle.length == 0) {
           $("#vTitle_error").show();
           error = true;
       } else {
           $("#vTitle_error").hide();
       }
       @if(!(isset($offers)))
       if (vImage.length == 0) {
           $("#vImage_error").show();
           error = true;
       } else {
           $("#vImage_error").hide();
       }
       @endif
  

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