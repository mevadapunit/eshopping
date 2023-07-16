@extends('layouts.app.admin-app')
@if(isset($document_upload))
@section('title', 'Document Edit- '.env('APP_NAME'))
@else
@section('title', 'Document Add- '.env('APP_NAME'))
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
                      <a class="nav-link active" href="{{url('admin/driver/document_edit',$vUniqueCode)}}"><i class='bx bx-file'></i> Document</a
                      >
                    </li>
                    <li class="nav-item">
                     <a class="nav-link" href="{{url('admin/driver/vehicle_images',$vUniqueCode)}}"><i class='bx bx-image-add'></i>Vehicle Images</a
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
           
            @if(isset($document_upload))
            <form action="{{url('admin/driver/upload_document')}}" name="frm" id="frm" method="post"
               enctype="multipart/form-data">
               @csrf
             <div class="card mb-4">
               <div class="card-body">
                  <input type="hidden" id="vUniqueCode" name="vUniqueCode"  value="@if(isset($vUniqueCode)){{$vUniqueCode}}@endif">
                  <div class="row g-3">

                     @foreach($document_upload as $datafields)
                        
                       <div class="form-group col-xl-6 col-lg-12 col-md-6">
                            <label>{{$str = substr($datafields, 1);}}</label>
                            <input class="form-control media_image only_image gallery_{{$datafields}}" accept="image/jpg, image/jpeg, image/png, application/pdf" multiple type="file" id="vImage" name="{{$datafields}}[]"> 
                       
                            <div  class="gallery_{{$datafields}} preview-image-box"></div>
                            <div class="bottomline_{{$datafields}}" style="display:none"><hr></div>
                            <div class="submit-image-box">
                         

                            <div class="form-group col-xl-12 col-lg-12 col-md-12">
                                <label>Status {{$str = substr($datafields, 1);}}</label>
                                <select name="eDocumentStatus_{{$datafields}}" id="eDocumentStatus" class="form-select">
                                   <option value="">Select Status</option>
                                   <option value="Under Review">Under Review</option>
                                   <option value="Verified">Verified</option>
                                   <option value="Rejected">Rejected</option>
                                </select>
                                <div id="eDocumentStatus_error" class="error mt-1" style="color:red;display: none;">
                                   Please Select Status
                                 </div>
                            </div>

                            <div class="form-group col-xl-12 col-lg-12 col-md-12 reasonshowhide" style="display:none" >
                                <label>Reason {{$str = substr($datafields, 1);}}</label>
                                <input type="text" name="vRejectedReasons_{{$datafields}}" id="vRejectedReason" class="form-control"
                                   placeholder="Enter Reason Of Rejection"
                                   value="@if(isset($driver)){{$driver->vRejectedReason}}@endif">
                                <div id="vRejectedReason_error" class="error mt-1" style="color:red;display: none;">
                                   Please Enter Reason
                                </div>
                            </div>
   
                            @if(isset($document_images))   
                                @foreach($document_images as $key=>$values)
                                <?php  //dd($values); ?>
                                
                                @if(isset($document_images) && $values->vFile!= null && $values->vDocumentType == $datafields &&  file_exists(public_path()."/uploads/document/".$values->vFile))
                                
                                <!-- for image -->
                                <div class="submit-image" >
                                    <?php 
                                    $expload =  explode(".",$values->vFile);
                                    $extention = end($expload);  
                                    ?>
                                    @if($extention != "pdf" )
                                    <a href="{{asset('uploads/document/'.$values->vFile)}}" target="_blank">
                                    <img title="{{$values->vFile}}" data-toggle="tooltip_imagename" style="width: 100px; border-radius: 10px;margin-top: 7px;" id="image_display" value="@if(old('{{$values->vDocumentType}}') == '{{$datafields}}') selected @endif" src="{{asset('uploads/document/'.$values->vFile)}}"></a>
                                    @elseif($extention == "pdf" )
                                    <a href="{{asset('uploads/document/'.$values->vFile)}}" target="_blank">

                                    <img title="{{$values->vFile}}" data-toggle="tooltip_filename" src="{{asset('admin/assets/img/pdf_file_preview.png')}}" style="width: 100px;height:100px; border-radius: 10px;margin-top: 7px;" type="application/pdf">
                                    </a>

                                    @endif
                                    <div class="bottom-btn">
                                      <a  data-id="{{$values->iUserDocumentFileId}}" data-toggle="tooltip_delete"  title="Delete Document" class="btn btn-outline-danger delete_document" href="javascript:;"><i class="bx bx-trash"></i></a>

                                      <div class="dropdown">
                                        <button type="button" data-toggle="tooltip_changestatus"  title="Change Status" class="btn btn btn-outline-secondary btn-sm dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                         <i class='bx bx-info-circle pt-1 pb-1'></i>
                                         </button>
                                        <div class="dropdown-menu dropdown-menu-end" style="min-width: 5rem !important;" aria-labelledby="orederStatistics">
                                          <a class="dropdown-item documentstatus" data-id="{{$values->iUserDocumentFileId}}" data-value="Verified" href="javascript:void(0);">Verified</a>
                                          <a class="dropdown-item documentstatus" data-id="{{$values->iUserDocumentFileId}}" data-value="Under Review" href="javascript:void(0);">Under Review</a>
                                          <a class="dropdown-item documentstatus" data-id="{{$values->iUserDocumentFileId}}" data-value="Rejected" href="javascript:void(0);">Rejected</a>
                                        </div>
                                      </div>
                                    </div>
                                   
                                    
                              

                                    @if($values->eDocumentStatus == "Verified")
                                    <span>
                                        <i class='bx bxs-badge-check' data-id="{{$values->iUserDocumentFileId}}"  data-toggle="tooltip_verifiedstatus" title="Verified" style="color:#71dd37;"></i>
                                    </span>
                                    @endif
                                    @if($values->eDocumentStatus == "Under Review")
                                    <span>
                                        <i class='bx bxs-file-find'  data-id="{{$values->iUserDocumentFileId}}" data-toggle="tooltip_underreview" title="Under Review" style="color:#ffab00"></i>
                                    </span>
                                    @endif
                                    @if($values->eDocumentStatus == "Rejected")
                                    <span>
                                        <i class='bx bxs-x-circle'  data-id="{{$values->iUserDocumentFileId}}"  data-toggle="tooltip_rejected" title="Rejected" style="color:#ff3e1d;"></i>


                                    </span>
                                    @endif
                                </div>
                                @endif
           
                                @endforeach
                                
                            @endif
                           
                            </div>

                        </div>
                       @endforeach 
                                              
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
            @endif
            @if(!isset($document_upload))
            <div class="card mb-4">
            <table>
                 <tr class="text-center">
                   <td colspan="9">No Document Found</td>
                 </tr>
            </table>
            </div>
            @endif
           
           <form action="{{url('admin/driver/upload_document')}}" name="popupfrm" id="popupfrm" method="post" enctype="multipart/form-data">
               @csrf
            <!-- popup -->
            <div class="mt-3">
        
                <!-- Modal -->
                <div class="modal fade" id="modalCenter" tabindex="-1" style="display: none;" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Rejected</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col mb-3">
                            <label for="vRejectionReason" class="form-label">Reason</label>
                            <input type="text" name="vRejectionReason" id="vRejectionReason" class="form-control" placeholder="Enter Reason">
                            <div id="vRejectionReason_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Rejection Reason.
                          </div>
                          </div>
                          
                        </div>
                      <input type="hidden" id="iUserDocumentFileId" name="iUserDocumentFileId">
                      <input type="hidden" id="eDocumentStatuspopup" name="eDocumentStatuspopup">
                      <input type="hidden" id="vUniqueCodepopup" name="vUniqueCodepopup">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                          Close
                        </button>
                        <button type="button" class="btn btn-primary popupsubmit">Submit Changes</button>
                      </div>
                    </div>
                  </div>
                </div>
            </div> 
        </form>
            <!-- popup end -->
   </div>
</div>
</div>
@endsection

@section('custom-js')
<script type="text/javascript">
  $(function () {
  $('[data-toggle="tooltip_edit"]').tooltip({delay: { "show": 500, "hide": 100 }})
  $('[data-toggle="tooltip_delete"]').tooltip({delay: { "show": 500, "hide": 100 }})
  $('[data-toggle="tooltip_filename"]').tooltip({delay: { "show": 500, "hide": 100 }})
  $('[data-toggle="tooltip_imagename"]').tooltip({delay: { "show": 500, "hide": 100 }})
  $('[data-toggle="tooltip_verifiedstatus"]').tooltip({delay: { "show": 500, "hide": 100 }})
  $('[data-toggle="tooltip_underreview"]').tooltip({delay: { "show": 500, "hide": 100 }})
  $('[data-toggle="tooltip_rejected"]').tooltip({delay: { "show": 500, "hide": 100 }})
  $('[data-toggle="tooltip_status"]').tooltip({delay: { "show": 500, "hide": 100 }})
})
</script>
<script type="text/javascript">
@if(isset($document_upload))
@foreach($document_upload as $datafields)
$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {
         
        if (input.files) {
            var filesAmount = input.files.length;
            for (i = 0; i < filesAmount; i++) {

                var reader = new FileReader();

                reader.onload = function(event) {
                  var results = event.target.result.split(';').map(e => e.split('/'));
        
                   if(results[0][1] == "pdf"){
                    $($.parseHTML('<embed class="pdf_preview" style="width: 100px; border-radius: 10px;margin-top: 7px;">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                   }else{
                      $($.parseHTML('<img class="image_preview" style="width: 100px; border-radius: 10px;margin-top: 7px;">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                   }
                }
                 $('.bottomline_{{$datafields}}').show();
                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('.gallery_{{$datafields}}').on('change', function() {
        $('.image_preview').attr('src', '');
        $('.pdf_preview').attr('src', '');
        $('.bottomline_{{$datafields}}').hide();
        imagesPreview(this, 'div.gallery_{{$datafields}}');
    });
});
@endforeach
@endif

 $(document).ready(function() {

   $(".documentstatus").on("click", function(){
     if (confirm('Are you sure to change this status?')) {
        var iUserDocumentFileId = $(this).attr("data-id");
        $('#iUserDocumentFileId').val(iUserDocumentFileId);
        var eDocumentStatus     = $(this).attr("data-value");
        $('#eDocumentStatuspopup').val(eDocumentStatus);
        var vUniqueCode = $('#vUniqueCode').val();
        $('#vUniqueCodepopup').val(vUniqueCode);
          if(eDocumentStatus == "Rejected"){

            $('.modal').modal('show');

          }else
          {
                $.ajax({
                  url: "{{ route('admin.driver.change_documentstatus') }}",
                  data: {"iUserDocumentFileId": iUserDocumentFileId,"eDocumentStatus":eDocumentStatus,"_token": "{{ csrf_token() }}"},
                  type: 'post',
                  success: function(result){
                      location.reload();
                  }
                });
          }
      }
   });
 });

$("#eDocumentStatus").change(function(){
      var reason = $(this).val();
      if(reason == "Rejected")
      {
        $('.reasonshowhide').show();
        $('#vRejectedReason').val('');
      }
      else
      {
        $('.reasonshowhide').hide();
        $('#vRejectedReason').val('');
      }
});

 $(document).on('click', '.popupsubmit', function() {
       var vRejectionReason      = $.trim($("#vRejectionReason").val());
       var iUserDocumentFileId   = $("#iUserDocumentFileId").val();
       var eDocumentStatus       = $("#eDocumentStatuspopup").val();
       var vUniqueCodepopup      = $("#vUniqueCodepopup").val();
       
       var error                 = false;

       if (vRejectionReason.length == 0) {
           $("#vRejectionReason_error").show();
           error = true;
       } else {
           $("#vRejectionReason_error").hide();
       }

      if (error == true) {
         return false;
      } else {
         
         setTimeout(function() {
                    
                    $.ajax({
                      url: "{{ route('admin.driver.change_documentstatus') }}",
                      data: {"iUserDocumentFileId": iUserDocumentFileId,"eDocumentStatus":eDocumentStatus,"vRejectionReason":vRejectionReason
                      ,"_token": "{{ csrf_token() }}"},
                      type: 'post',
                      success: function(result){
                         // var url = '{{url("admin/driver/document_edit/", ":vUniqueCodepopup")}}';
                         // window.location.href = url;
                         location.reload();
                      }
                    });
            
         }, 100);
      }
   
});


  $(document).ready(function() {

   $(".delete_document").on("click", function(){
     if (confirm('Are you sure delete this document?')) {
      var iUserDocumentFileId = $(this).attr("data-id");

       $.ajax({
          url: "{{ route('admin.driver.remove_document') }}",
          data: {"iUserDocumentFileId": iUserDocumentFileId,"_token": "{{ csrf_token() }}"},
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
   var vDocumentType = $("#vDocumentType").val();
   var eStatus       = $("#eStatus").val();
   var eFeature      = $("#eFeature").val();
   var eDocumentStatus = $('#eDocumentStatus :selected').val();
   var error         = false;
     

   if (eDocumentStatus.length == 0) {
       error = true;
       $("#eDocumentStatus_error").show();
   } else {
       $("#eDocumentStatus_error").hide();
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