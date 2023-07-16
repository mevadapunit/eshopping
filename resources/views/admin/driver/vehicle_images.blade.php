@extends('layouts.app.admin-app')
@if(isset($vehicle_images))
@section('title', 'Vehicle Images Edit- '.env('APP_NAME'))
@else
@section('title', 'Vehicle Images Add- '.env('APP_NAME'))
@endif
@section('content')
@section('custom-css')
<style></style>
@endsection
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                     <li class="nav-item mt-2 me-3">
                        <spna class="col-sm-6 ">
                            <h5>Edit Driver</h5>
                        </spna>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="{{route('admin.driver.edit',$vUniqueCode)}}"
                        ><i class="bx bx-user me-1"></i> Profile</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link  " href="{{route('admin.driver.tax_edit',$vUniqueCode)}}"
                        ><i class='bx bx-receipt'></i> Tax Details</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('admin/driver/bankdetails_edit',$vUniqueCode)}}"
                        ><i class="bx bx-link-alt me-1"></i> Bank Details</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('admin/driver/vehicle_edit',$vUniqueCode)}}"><i class="bx bx-car me-1"></i> Vehicle</a
                      >
                    </li>
                      <li class="nav-item">
                      <a class="nav-link" href="{{url('admin/driver/document_edit',$vUniqueCode)}}"><i class='bx bx-file'></i> Document</a
                      >
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="{{url('admin/driver/vehicle_images',$vUniqueCode)}}"><i class='bx bx-image-add'></i>Vehicle Images</a
                      >
                    </li>
                    <li class="nav-item">
                     <a class="nav-link" href="{{url('admin/driver/training_video_verification',$vUniqueCode)}}"><i class='bx bx-show-alt'></i>Video Status</a
                      >
                    </li>
                     <li class="nav-item">
                     <a class="nav-link" href="{{url('admin/driver/referral_code',$vUniqueCode)}}"><i class='bx bxs-network-chart'></i>Raferral</a
                      >
                    </li>
                  </ul>
          
            <form action="{{url('admin/driver/vehicle_images_store')}}" name="frm" id="frm" method="post"
               enctype="multipart/form-data">
               @csrf
              <div class="card mb-4">
               <div class="card-body">  
                  <input type="hidden" id="iUserId" name="iUserId"  value="@if(isset($userData->iUserId)){{$userData->iUserId}}@endif">
                  <input type="hidden" id="vUniqueCode" name="vUniqueCode"  value="@if(isset($vUniqueCode)){{$vUniqueCode}}@endif">
                  <div class="row g-3">
                   
                        <div class="form-group col-xl-6 col-lg-12 col-md-6">
                            <label>Images</label>
                            <input class="form-control media_image only_image gallery" accept="image/jpg, image/jpeg, image/png" multiple type="file" id="vImage" name="vImage[]">
                  
                       
                            <div  class="gallery_preview preview-image-box"></div>
                            <div class="bottomline_{{$userData->iUserId}}" style="display:none"><hr></div>
                            <div class="submit-image-box">
                             
                                @foreach($vehicle_images as $key=>$values)
                               
                                
                                @if(isset($vehicle_images) && $values->vImage!= null  &&  file_exists(public_path()."/uploads/vehicle_images/".$values->vImage))
                                
                                <!-- for image -->
                                <div class="submit-image">
                                  <a href="{{asset('uploads/vehicle_images/'.$values->vImage)}}" target="_blank">
                                    <img style="width: 100px; border-radius: 10px;margin-top: 7px;" id="image_display" src="{{asset('uploads/vehicle_images/'.$values->vImage)}}"></a>
                                    <span>
                                      <a  data-id="{{$values->iDriverVehicleImageId}}" data-toggle="tooltip_delete"  title="Delete Image" class="btn btn-outline-danger delete_images" href="javascript:;"><i class="bx bx-trash"></i></a>
                                    </span>
                                </div>
                                @endif

                                @endforeach
                     
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

@section('custom-js')
<script type="text/javascript">
  $(function () {
  $('[data-toggle="tooltip_delete"]').tooltip({delay: { "show": 500, "hide": 100 }})
})
</script>
<script type="text/javascript">

$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {
         
        if (input.files) {

            var filesAmount = input.files.length;
            for (i = 0; i < filesAmount; i++) {

                var reader = new FileReader();

                reader.onload = function(event) {
                  var results = event.target.result.split(';').map(e => e.split('/'));
        
                   if(results[0][1] == "jpg" || results[0][1] == "jpeg" || results[0][1] == "png"){
                      $($.parseHTML('<img class="image_preview" style="width: 100px; border-radius: 10px;margin-top: 7px;">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                   }
                }
                
                $('.bottomline_{{$userData->iUserId}}').show();
                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('.gallery').on('change', function() {
        $('.image_preview').attr('src', '');
        imagesPreview(this, 'div.gallery_preview');
    });
});

$(document).ready(function() {

   $(".delete_images").on("click", function(){
     if (confirm('Are you sure delete this image?')) {
      var iDriverVehicleImageId = $(this).attr("data-id");

       $.ajax({
          url: "{{ route('admin.driver.remove_image') }}",
          data: {"iDriverVehicleImageId": iDriverVehicleImageId,"_token": "{{ csrf_token() }}"},
          type: 'post',
          success: function(result){
              location.reload();
          }
       });
     }
   });
});

</script>

<script type="text/javascript">

$(document).on('click', '.submit', function() {
   var vUniqueCode   = $("#vUniqueCode").val();
   var error         = false;
      
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