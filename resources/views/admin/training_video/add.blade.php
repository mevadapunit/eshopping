@extends('layouts.app.admin-app')
@if(isset($training_video))
@section('title', 'Training Video Edit- '.env('APP_NAME'))
@else
@section('title', 'Training Video Add- '.env('APP_NAME'))
@endif
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-md-12">
         <div class="row mb-2">
            <div class="col-sm-6 mt-2">
                <h5>{{ isset($training_video) ? 'Edit' : 'Add' }} Training Video</h5>
            </div>
        </div>
        
        <form action="{{route('admin.training_video.store')}}" name="frm" id="frm" method="post"
               enctype="multipart/form-data">
               @csrf
            <div class="card mb-4">
              <div class="card-body">
                  <input type="hidden" id="vUniqueCode" name="vUniqueCode"
                     value="@if(isset($training_video)){{$training_video->vUniqueCode}}@endif">
                  <div class="row g-3">
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                            <label>Training Video </label>
                            <input class="form-control media_image only_image" accept="video/mp4, video/mkv, video/webm" type="file" id="vFile"
                                name="vFile">

                          
                           <video  style="width: 150px;border-radius: 5px;margin-top: 7px;display:none;" class="vFile_preview_img " id="vFile_preview" controls>
                               <source  class="vFile_preview_img " id="vFile_preview"
                                src="#" alt="your video"> Your browser does not support HTML video.
                           </video>

                           
                            @if(isset($training_video) && $training_video->vFile !='' &&
                            file_exists(public_path()."/uploads/training_video/".$training_video->vFile))
                            

                            <!-- for video -->
                          
                            <video  id="image_display" style="width: 150px;border-radius: 10px;margin-top: 7px;" controls >
                               <source id="image_display"
                                src="{{asset('uploads/training_video/'.$training_video->vFile)}}"> Your browser does not support HTML video.
                           </video>
                            
                            @elseif(isset($training_video))
                            <!-- default image -->
                            <div id="image_none">
                                <img style="width: 100px;  border-radius: 10px;margin-top: 7px;"
                                    src="{{ asset('admin/assets/img/no_image.png') }}" alt="No photo">
                            </div>
                            <!-- selected video -->
                           
                            <video style="width: 150px;display:none;border-radius: 10px;margin-top: 7px;" controls>
                               <source id="vMiddleImage_preview" src="#" alt="your video"> Your browser does not support HTML video.
                           </video>

                            @endif
                           

                            @if(!(isset($training_video)))
                            <!-- default image -->
                            <div id="image_none">
                                <img style="width: 100px; display: block;"
                                    src="{{ asset('admin/assets/img/no_image.png') }}" alt="No photo">
                            </div>
                            <!-- selected video -->
                            <video style="width: 100px;display:none;border-radius: 10px;margin-top: 7px;" controls>
                               <source id="vMiddleImage_preview" src="#" alt="your video"> Your browser does not support HTML video.
                            </video>


                            @endif
                            <div id="vFile_error" class="error mt-1" style="color:red;display: none;">
                                Please Select Training Video
                            </div>

                        </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                            <label>Title</label>
                            <input type="text" name="vTitle" id="vTitle" class="form-control"
                               placeholder="Enter Title"
                               value="@if(isset($training_video)){{$training_video->vTitle}}@endif">
                            <div id="vTitle_error" class="error mt-1" style="color:red;display: none;">
                               Please Enter Title
                            </div>
                     </div>
                     <div class="form-group col-xl-12 col-lg-12 col-md-12">
                             <label>Training Description</label>
                             <textarea class="form-control" id="tDescription" name="tDescription" placeholder="Enter Training Description">@if(!empty($training_video->tDescription)) {{$training_video->tDescription}} @endif</textarea>
                             <div id="tDescription_error" class="error mt-1" style="color:red;display: none;">Please Enter Training Description
                             </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Status</label>
                        <select name="eStatus" id="eStatus" class="form-select">
                           <option value="">Select Status</option>
                           <option value="Active" @if(isset($training_video)) @if($training_video->eStatus == 'Active')
                           selected @endif @endif>Active</option>
                           <option value="Inactive" @if(isset($training_video)) @if($training_video->eStatus ==
                           'Inactive') selected @endif @endif>Inactive</option>
                           <option value="Pending" @if(isset($training_video)) @if($training_video->eStatus ==
                           'Pending') selected @endif @endif>Pending</option>
                        </select>
                        <div id="eStatus_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Status
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Feature</label>
                        <select name="eFeature" id="eFeature" class="form-select">
                           <option value="">Select Feature</option>
                           <option value="Yes" @if(isset($training_video)) @if($training_video->eFeature ==
                           'Yes') selected @endif @endif>Yes</option>
                           <option value="No" @if(isset($training_video)) @if($training_video->eFeature == 'No')
                           selected @endif @endif>No</option>
                        </select>
                        <div id="eFeature_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Feature
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card-footer col-12 align-self-end d-inline-block mt-0 text-left">
                  <a href="javascript:;" class="btn btn-primary submit" id="save">Submit</a>
                  <a href="javascript:;" class="btn btn-primary loading" style="display: none;">
                  <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>Loading...
                  </a>
                  <a href="{{url('admin/trainingvideo')}}" class="btn-info btn">Back</a>
               </div>
             </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('custom-css')
<style></style>
@endsection
@section('custom-js')
<script type="text/javascript" src="{{asset('admin/assets/js/tinymce/tinymce.min.js')}}"></script>
<script type="text/javascript">
  tinymce.init({
    selector: 'textarea',
    height: 150,
    menubar: false,
    plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code help wordcount'
    ],
    toolbar: 'insert | undo redo | formatselect fontselect fontsizeselect | bold italic underline backcolor forecolor | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent | removeformat | blockquote | help | code',
    content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
    ],
    theme_advanced_fonts : "Andale Mono=andale mono,times;"+
    "Arial=arial,helvetica,sans-serif;"+
    "Arial Black=arial black,avant garde;"+
    "Book Antiqua=book antiqua,palatino;"+
    "Comic Sans MS=comic sans ms,sans-serif;"+
    "Courier New=courier new,courier;"+
    "Georgia=georgia,palatino;"+
    "Helvetica=helvetica;"+
    "Impact=impact,chicago;"+
    "Symbol=symbol;"+
    "Tahoma=tahoma,arial,helvetica,sans-serif;"+
    "Terminal=terminal,monaco;"+
    "Times New Roman=times new roman,times;"+
    "Trebuchet MS=trebuchet ms,geneva;"+
    "Verdana=verdana,geneva;"+
    "Webdings=webdings;"+
    "Wingdings=wingdings,zapf dingbats",
    fontsize_formats: '11px 12px 14px 16px 18px 24px 36px 48px',
    textcolor_map: [
    "000000", "Black",
    "993300", "Burnt orange",
    "333300", "Dark olive",
    "003300", "Dark green",
    "003366", "Dark azure",
    "000080", "Navy Blue",
    "333399", "Indigo",
    "333333", "Very dark gray",
    "800000", "Maroon",
    "FF6600", "Orange",
    "808000", "Olive",
    "008000", "Green",
    "008080", "Teal",
    "0000FF", "Blue",
    "666699", "Grayish blue",
    "808080", "Gray",
    "FF0000", "Red",
    "FF9900", "Amber",
    "99CC00", "Yellow green",
    "339966", "Sea green",
    "33CCCC", "Turquoise",
    "3366FF", "Royal blue",
    "800080", "Purple",
    "999999", "Medium gray",
    "FF00FF", "Magenta",
    "FFCC00", "Gold",
    "FFFF00", "Yellow",
    "00FF00", "Lime",
    "00FFFF", "Aqua",
    "00CCFF", "Sky blue",
    "993366", "Red violet",
    "FFFFFF", "White",
    "FF99CC", "Pink",
    "FFCC99", "Peach",
    "FFFF99", "Light yellow",
    "CCFFCC", "Pale green",
    "CCFFFF", "Pale cyan",
    "99CCFF", "Light sky blue",
    "CC99FF", "Plum"
    ]
  });
</script>
<script type="text/javascript">
 
 $(".vFile_preview_img").hide();
// ------------ hide and show image or video or default image code start ---------------->
$("#vFile").change(function() { // Check is a input type button
    var fileName = $("#vFile").val();


    if (this.files && this.files[0] && this.files[0].name.match(/\.(mkv|mp4|webm)$/) ) {
    if(fileName) { // returns true if the string is not empty
       // alert(fileName + " was selected");
        //alert("image selected");
         $("#vFile_error").hide();
         $("#image_display").hide();  //default image
         $("#vFile_preview").show();
         $("#image_none").hide();
        // $("#vMiddleImage_preview").show();

    } else { // no file was selected


        $("#image_display").show(); //default image
        $("#vFile_preview").hide(); // selected image
        //alert("no file selected");
    }


   }
});

// ---------------------- get url link in image or video start preview ------------>

vFile.onchange = evt => {
  $( "#vFile_preview" ).removeClass("vFile_preview_img")
  $( "#image_display" ).addClass("vFile_preview_img")
  const fileUrl = window.URL.createObjectURL(event.target.files[0]);
  const imgExtensions = ['mkv', 'mp4','webm'];
  const name = event.target.files[0].name;
  const lastDot = name.lastIndexOf('.');

  const ext = name.substring(lastDot + 1);

   if (imgExtensions.includes(ext)) {
   $("#vFile_preview").show().attr("src", fileUrl);
  }

}
// ----------------- get link code end ----------------->
   $(document).on('click', '.submit', function() {
       var vUniqueCode = $("#vUniqueCode").val();
       var vFile       = $("#vFile").val();
       var eStatus     = $("#eStatus").val();
       var vTitle      = $("#vTitle").val();
       var eFeature    = $("#eFeature").val();
       tDescription    = tinyMCE.get('tDescription').getContent();

       var error = false;

       if (tDescription.length == 0) {
           $("#tDescription_error").show();
           error = true;
       } else {
           $("#tDescription_error").hide();
       }
       @if(!isset($training_video))
       if (vFile.length == 0) {
           $("#vFile_error").show();
           error = true;
       } else {
           $("#vFile_error").hide();
       }
       @endif
       if (vTitle.length == 0) {
           $("#vTitle_error").show();
           error = true;
       } else {
           $("#vTitle_error").hide();
       }
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