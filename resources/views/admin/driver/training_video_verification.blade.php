@extends('layouts.app.admin-app')
@if(isset($training_videos))
@section('title', 'Video Status- '.env('APP_NAME'))
@else
@section('title', 'Video Status- '.env('APP_NAME'))
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
                    <a class="nav-link " href="{{url('admin/driver/vehicle_images',$vUniqueCode)}}"><i class='bx bx-image-add'></i>Vehicle Images</a
                      >
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="{{url('admin/driver/training_video_verification',$vUniqueCode)}}"><i class='bx bx-show-alt'></i>Video Status</a
                      >
                    </li>
                     <li class="nav-item">
                     <a class="nav-link" href="{{url('admin/driver/referral_code',$vUniqueCode)}}"><i class='bx bxs-network-chart'></i>Raferral</a
                      >
                    </li>
                  </ul>
         
         @if(count($training_videos) != 0)
            <form action="{{url('admin/driver/vehicle_images_store')}}" name="frm" id="frm" method="post"
               enctype="multipart/form-data">
               @csrf
              <div class="card mb-4">
               <div class="card-body">  
                  <input type="hidden" id="iUserId" name="iUserId"  value="@if(isset($userData->iUserId)){{$userData->iUserId}}@endif">
                  <input type="hidden" id="vUniqueCode" name="vUniqueCode"  value="@if(isset($vUniqueCode)){{$vUniqueCode}}@endif">
                  <div class="row g-3">
	                 
	                  @foreach($training_videos as $value)         
	                    @if(isset($training_videos) && $value->vFile !='' &&
	                    file_exists(public_path()."/uploads/training_video/".$value->vFile))
                        <div class="form-group col-xl-6 col-lg-12 col-md-6 "> 
	                    <video  id="image_display" style="width: 500px;border-radius: 10px;" controls >
	                       <source id="image_display"
	                        src="{{asset('uploads/training_video/'.$value->vFile)}}">support HTML video.
	                    </video>
	                    <div style="margin-bottom: 15px;">
	                    	<span class=" @if($value->eStatus == 'Complete')badge bg-success @elseif($value->eStatus == 'Pending')badge bg-warning  @else badge bg-label-danger me-1 @endif">@if($value->eStatus == 'Complete')<i class='bx bx-show-alt'></i>@elseif($value->eStatus == 'Pending')<i class='bx bx-low-vision'></i>@endif{{$value->eStatus}}</span>
	                    </div>
	                    </div>
	                    @elseif(!isset($training_video))
	                    <div id="image_none">
	                        <img style="width: 100px;  border-radius: 10px;margin-top: 7px;"
	                            src="{{ asset('admin/assets/img/no_image.png') }}" alt="No photo">
	                    </div>
	                    @endif
	                    
	                  @endforeach
	                 

                  </div>
               </div>
           
             </div>
            </form>
            @else
            <div class="card mb-4">
               <table class="text-center">
	                 <tr class="text-center">
	                   <td colspan="9">No Data Found</td>
	                 </tr>
	            </table>
	        </div>
            @endif
         </div>
    </div>
</div>
@endsection

@section('custom-js')
<script type="text/javascript">
  $(function () {
  $('[data-toggle="tooltip_edit"]').tooltip({delay: { "show": 500, "hide": 100 }})
  $('[data-toggle="tooltip_delete"]').tooltip({delay: { "show": 500, "hide": 100 }})
})
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