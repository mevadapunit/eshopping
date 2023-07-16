@extends('layouts.app.admin-app')
@if(isset($pagebuilders))
@section('title', 'Page BUilder Edit- '.env('APP_NAME'))
@else
@section('title', 'Page BUilder Add- '.env('APP_NAME'))
@endif
@section('content')

<style>
    .book-ride-card-wrap {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}
.book-card.img img {
    border-radius: 10px;
    overflow: hidden;
}

.book-ride-card-wrap .book-card:nth-child(2) {
    margin-top: 50px;
}
.book-ride-card-wrap .book-card:nth-child(3) {
    margin-top: -50px;
}
@media only screen and (max-width: 767px){
    .book-ride-card-wrap .book-card:nth-child(2) {
    margin-top: 0px;
}
.book-ride-card-wrap .book-card:nth-child(3) {
    margin-top: 0px;
}
.book-card.img img {
    max-width: 150px;
}
}
</style>

<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-md-12">
         <div class="row mb-2">
            <div class="col-sm-6 mt-2">
                <h5>{{ isset($pagebuilders) ? 'Edit' : 'Add' }} Page Builder</h5>
            </div>
         </div>
         <form action="{{url('admin/pagebuilder/store')}}" name="frm" id="frm" method="post"
               enctype="multipart/form-data">
               @csrf
              <div class="card mb-4">
                <div class="card-body">
                  <input type="hidden" id="vUniqueCode" name="vUniqueCode"
                     value="@if(isset($pagebuilders)){{$pagebuilders->vUniqueCode}}@endif">
                  <div class="row g-3">
                    <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Type</label>
                        <select name="eType" id="eType" class="form-select" @if(isset($pagebuilders)) disabled @endif>
                           <option value="">Select Type</option>
                           <option value="Image" @if(isset($pagebuilders)) @if($pagebuilders->eType ==
                           'Image') selected @endif @endif>Image</option>
                           <option value="Video" @if(isset($pagebuilders)) @if($pagebuilders->eType ==
                           'Video') selected @endif @endif>Video</option>
                           <option value="Image With Text" @if(isset($pagebuilders)) @if($pagebuilders->eType == 'Image With Text')
                           selected @endif @endif>Image With Text</option>
                        </select>
                        <div id="eType_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Feature
                        </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-12 col-md-6 typetextwithimage" style="display:none">
                        <label>Title</label>
                        <input type="text" name="vTitle" id="vTitle" class="form-control"
                           placeholder="Enter Title"
                           value="@if(isset($pagebuilders)){{$pagebuilders->vTitle}}@endif">
                        <div id="vTitle_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Title
                        </div>
                    </div>

                    <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Order</label>
                        <select name="iOrder" id="iOrder" class="form-select">
                           @for($i=1; $i<=10; $i++)
                           <option value="{{$i}}"  @if(isset($pagebuilders)) @if($pagebuilders->iOrder ==
                           $i) selected @endif @endif>{{$i}}</option>
                           @endfor
                        </select>
                        <div id="iOrder_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Order</div>
                    </div>

                    <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Menu</label>
                        <select name="eMenu" id="eMenu" class="form-select">
                           <option value="">Select Menu</option>
                           <option value="HOME" @if(isset($pagebuilders)) @if($pagebuilders->eMenu ==
                           'HOME') selected @endif @endif>HOME</option>
                           <option value="ABOUT US" @if(isset($pagebuilders)) @if($pagebuilders->eMenu == 'ABOUT US')
                           selected @endif @endif>ABOUT US</option>
                           <option value="RIDE WITH US" @if(isset($pagebuilders)) @if($pagebuilders->eMenu ==
                           'RIDE WITH US') selected @endif @endif>RIDE WITH US</option>
                           <option value="AIRPORT GUIDE" @if(isset($pagebuilders)) @if($pagebuilders->eMenu ==
                           'AIRPORT GUIDE') selected @endif @endif>AIRPORT GUIDE</option>
                           <option value="USER GUIDE" @if(isset($pagebuilders)) @if($pagebuilders->eMenu ==
                           'USER GUIDE') selected @endif @endif>USER GUIDE</option>
                           <option value="CONTACT US" @if(isset($pagebuilders)) @if($pagebuilders->eMenu ==
                           'CONTACT US') selected @endif @endif>CONTACT US</option>
                           <option value="AIRPORT GUIDE RIDE" @if(isset($pagebuilders)) @if($pagebuilders->eMenu ==
                           'AIRPORT GUIDE RIDE') selected @endif @endif>AIRPORT GUIDE RIDE</option>
                           <option value="DRIVE WITH US" @if(isset($pagebuilders)) @if($pagebuilders->eMenu ==
                           'DRIVE WITH US') selected @endif @endif>DRIVE WITH US</option>
                           <option value="SYDNEY" @if(isset($pagebuilders)) @if($pagebuilders->eMenu ==
                           'SYDNEY') selected @endif @endif>SYDNEY</option>
                           <option value="HOBART" @if(isset($pagebuilders)) @if($pagebuilders->eMenu ==
                           'HOBART') selected @endif @endif>HOBART</option>
                           <option value="PERTH" @if(isset($pagebuilders)) @if($pagebuilders->eMenu ==
                           'PERTH') selected @endif @endif>PERTH</option>
                           <option value="CANBERRA" @if(isset($pagebuilders)) @if($pagebuilders->eMenu ==
                           'CANBERRA') selected @endif @endif>CANBERRA</option>
                           <option value="MELBOURNE" @if(isset($pagebuilders)) @if($pagebuilders->eMenu ==
                           'MELBOURNE') selected @endif @endif>MELBOURNE</option>
                           <option value="ADELAIDE" @if(isset($pagebuilders)) @if($pagebuilders->eMenu ==
                           'ADELAIDE') selected @endif @endif>ADELAIDE</option>
                           <option value="DARWIN" @if(isset($pagebuilders)) @if($pagebuilders->eMenu ==
                           'DARWIN') selected @endif @endif>DARWIN</option>
                        </select>
                        <div id="eMenu_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Menu
                        </div>
                    </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Feature</label>
                        <select name="eFeature" id="eFeature" class="form-select">
                           <option value="">Select Feature</option>
                           <option value="Yes" @if(isset($pagebuilders)) @if($pagebuilders->eFeature ==
                           'Yes') selected @endif @endif>Yes</option>
                           <option value="No" @if(isset($pagebuilders)) @if($pagebuilders->eFeature == 'No')
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
                           <option value="Active" @if(isset($pagebuilders)) @if($pagebuilders->eStatus == 'Active')
                           selected @endif @endif>Active</option>
                           <option value="Inactive" @if(isset($pagebuilders)) @if($pagebuilders->eStatus ==
                           'Inactive') selected @endif @endif>Inactive</option>
                           <option value="Pending" @if(isset($pagebuilders)) @if($pagebuilders->eStatus ==
                           'Pending') selected @endif @endif>Pending</option>
                        </select>
                        <div id="eStatus_error" class="error mt-1" style="color:red;display: none;">
                           Please Select Status
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6 typeimage" style="display:none">
                            <label>File </label>
                            <input class="form-control media_image only_image" accept="image/jpg, image/jpeg, image/png" type="file" id="vImage"
                                name="vImage">

                            <img style="width: 100px; border-radius: 10px;margin-top: 7px; display:none;" class="vImage_preview_img" id="vImage_preview"
                                src="#" alt="your image" />

                            @if(isset($pagebuilders) && $pagebuilders->vFile !='' &&
                            file_exists(public_path()."/uploads/page_builder/".$pagebuilders->vFile))


                            <!-- for image -->
                            <img style="width: 100px; border-radius: 10px;margin-top: 7px;" id="image_display"
                                value="@if(old('vFile') == 'vFile') selected @endif"
                                src="{{asset('uploads/page_builder/'.$pagebuilders->vFile)}}">

                            @elseif(isset($pagebuilders))
                            <!-- default image -->

                            <div id="image_none">
                                <img  style="display: block;" height="100" width="100" class="d-block rounded"
                                    src="{{ asset('admin/assets/img/no_image.png') }}" alt="No photo">
                            </div>

                            <!-- selected image -->
                            <img style="width: 100px;display:none;border-radius: 10px;margin-top: 7px;" class="image_Preview"
                                 src="#" alt="your image" />

                            @endif


                            @if(!(isset($pagebuilders)))
                            <!-- default image -->
                            <div id="image_none">
                                <img style="width: 100px; display: block;"
                                    src="{{ asset('admin/assets/img/no_image.png') }}" alt="No photo">
                            </div>
                            <!-- selected image -->
                            <img style="width: 100px;display:none;" class="image_Preview"
                                 src="#" alt="your image" />
                            @endif
                            <div id="vImage_error" class="error mt-1" style="color:red;display: none;">
                                Please Select Image
                            </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6 typevideo"  style="display:none">
                            <label>File </label>
                            <input class="form-control media_image only_image" accept="video/mp4, video/mpeg, video/mkv, video/avi , video/mov" type="file" id="vVideo"
                                name="vVideo">

                            <video style="width: 100px; border-radius: 10px;margin-top: 7px; display:none;" class="vVideo_preview_img" id="vVideo_preview" controls src="#" alt="your image"> </video>

                            @if(isset($pagebuilders) && $pagebuilders->vFile !='' &&
                            file_exists(public_path()."/uploads/page_builder/".$pagebuilders->vFile))


                            <!-- for image -->
                            <video style="width: 100px; border-radius: 10px;margin-top: 7px;" id="video_display"
                                value="@if(old('vFile') == 'vFile') selected @endif" controls
                                src="{{asset('uploads/page_builder/'.$pagebuilders->vFile)}}"></video>

                            @elseif(isset($pagebuilders))
                            <!-- default image -->

                            <div id="video_none">
                                <img  style="display: block;" height="100" width="100" class="d-block rounded"
                                    src="{{ asset('admin/assets/img/no_image.png') }}" alt="No photo">
                            </div>

                            <!-- selected image -->
                            <video style="width: 100px;display:none;border-radius: 10px;margin-top: 7px;" class="image_Preview"
                               controls  src="#" alt="your image" ></video>

                            @endif


                            @if(!(isset($pagebuilders)))
                            <!-- default image -->
                            <div id="video_none">
                                <img style="width: 100px; display: block;"
                                    src="{{ asset('admin/assets/img/no_image.png') }}" alt="No photo">
                            </div>
                            <!-- selected image -->
                            <video style="width: 100px;display:none;" class="video_Preview"
                                 src="#" alt="your image" > </video>
                            @endif
                            <div id="vVideo_error" class="error mt-1" style="color:red;display: none;">
                                Please Select Video
                            </div>
                     </div>

                     <div class="form-group col-xl-12 col-lg-12 col-md-12 typetextwithimage" style="display:none;">
                        <label>Description</label>
                        <textarea  name="tDescription" id="tDescription" class="form-control"
                           placeholder="Enter Description"
                           value="@if(isset($pagebuilders)){{$pagebuilders->tDescription}}@endif">@if(isset($pagebuilders)){{$pagebuilders->tDescription}}@endif</textarea>
                        <div id="tDescription_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Description
                        </div>
                    </div>

                    <input type="hidden" name="eTypeEdit" id="eTypeEdit" value="@if(isset($datatype)){{$datatype}}@else {{'null'}}@endif">
                  </div>
               </div>
               <div class="card-footer col-12 align-self-end d-inline-block mt-0 text-left">
                  <a href="javascript:;" class="btn btn-primary submit" id="save">Submit</a>
                  <a href="javascript:;" class="btn btn-primary loading" style="display: none;">
                  <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>Loading...
                  </a>
                  <a href="{{url('admin/pagebuilder')}}" class="btn-info btn">Back</a>
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
    @if(isset($pagebuilders))
    <div class="row">
       <div class="col-md-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <h3 class="text-center">Preview</h3><hr>
                    @if(isset($datatype) && $datatype != null && $datatype == "Image")
                    <div class="row mt-5 g-3">
                    <div class="col-xl-8 col-lg-9 mx-auto">
                        <div class="book-ride-card-wrap about ">
                                @if($pagebuilderdata != null)
                                @foreach($pagebuilderdata as $key=>$values)
                                <div class="book-card card img">
                                    <img src="{{asset('/uploads/page_builder/'.$values->vFile)}}" alt="about-img"  class="img-fluid" @if($datamenu!= null && $datamenu == "ABOUT US") width="310" height="220" @endif @if($datamenu!= null && $datamenu == "AIRPORT GUIDE RIDE") width="677" height="411" @endif>
                                </div>
                                @endforeach
                                @if($datamenu!= null && $datamenu == "ABOUT US")
                                @for($i= count($pagebuilderdata) ; $i < 4; $i++)
                                <div class="book-card card img">
                                    <img src="{{asset('admin/assets/img/no_image.png')}}" alt="about-img"  class="img-fluid" width="310" height="220">
                                </div>
                                @endfor
                                @endif
                                @endif
                                
                                <!-- <div class="book-card card img">
                                    <img src="{{asset('admin/assets/img/no_image.png')}}" alt="about-img"  class="img-fluid" width="310" height="220">
                                </div>
                                <div class="book-card card img">
                                    <img src="{{asset('admin/assets/img/no_image.png')}}" alt="about-img"  class="img-fluid" width="310" height="220">
                                </div> -->
                        </div>
                    </div>
                  </div>
                  @endif
                  @if(isset($datatype) && $datatype != null && $datatype == "Video")
                  <div class="row mt-5 g-3 ">
                    <div class="d-flex mx-auto" style="gap:20px;justify-content: center;">
                      @if($pagebuilderdata != null)
                      @foreach($pagebuilderdata as $key=>$values)
                      <div class="video"  style="max-width:400px;">
                        <video src="{{asset('/uploads/page_builder/'.$values->vFile)}}" controls alt="about-img"  class="img-fluid" width="380" height="220"></video>
                      </div>
                      @endforeach
                      @for($i= count($pagebuilderdata) ; $i < 2; $i++)
                      <div class="book-card card img">
                        <img src="{{asset('admin/assets/img/no_image.png')}}" alt="about-img"  class="img-fluid" width="310" height="220">
                      </div>
                      @endfor
                      @endif
                    </div>
                  </div>
                  @endif
                  @if(isset($datatype) && $datatype != null && $datatype == "Image With Text")
                  @foreach($pagebuilderdata as $key=>$values)
                  <div class="tetx-img mt-5">
                    <h2 class="mx-auto" style="max-width:1100px;text-align:center; color:#040818;">{{$values->vTitle}}</i></h2>
                        
                        <div class="row g-3 mt-3" style="align-items: center;">
                            <div class="col-md-6">
                            <img src="{{asset('/uploads/page_builder/'.$values->vFile)}}" alt="about-img"  class="img-fluid" width="610" height="220">
                            </div>
                            <div class="col-md-6">
                                {!! $values->tDescription !!}

                            </div>
                        </div>
                  </div>
                  @endforeach
                  @endif
                </div>
            </div>
        </div>
    </div>
    @endif
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

    @if(isset($pagebuilders))
       $('#eType').prop('disabled', true);
    @endif

    var type = '@if(isset($pagebuilders) && $pagebuilders->eType !=''){{$pagebuilders->eType}}@endif';

    if(type == "Image")
    {
        $('#vVideo').val('');
        $('.typeimage').show();
        $('.typevideo').hide();
        $('#vVideo_preview').hide();
    }
    if(type == "Video")
    {
        $('#vImage').val('');
        $('.typevideo').show();
        $('.typeimage').hide();
        $('#vImage_preview').hide();
        $('.typetextwithimage').hide();

    }
    else if(type == "Image With Text")
    {
        $('#vImage').val('');
        $('#vImage_preview').hide();
        $('.typetextwithimage').show();
        $('.typeimage').show();
        $('.typevideo').hide();
    }

    $("#eType").change(function(){
        var type = $(this).val();
        if(type == "Image")
        {
            $('#vVideo').val('');
            $('.typeimage').show();
            $('.typevideo').hide();
            $('#vVideo_preview').hide();
        }
        if(type == "Video")
        {
            $('#vImage').val('');
            $('.typevideo').show();
            $('.typeimage').hide();
            $('#vImage_preview').hide();
            $('.typetextwithimage').hide();

        }
        else if(type == "Image With Text")
        {
            $('#vImage').val('');
            $('#vImage_preview').hide();
            $('.typetextwithimage').show();
            $('.typeimage').show();
            $('.typevideo').hide();
        }
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

$(".vVideo_preview_img").hide();
// ------------ hide and show image or video or default image code start ---------------->
$("#vVideo").change(function() { // Check is a input type button
    var fileName = $("#vVideo").val();


    if (this.files && this.files[0] && this.files[0].name.match(/\.(mp4|mov|mpeg|avi)$/) ) {
    if(fileName) { // returns true if the string is not empty
       // alert(fileName + " was selected");
        //alert("image selected");
         $("#vVideo_error").hide();
         $("#video_display").hide();  //default image
         $("#vVideo_preview").show();
         $("#video_none").hide();
    } else { // no file was selected

        $("#video_display").show(); //default image
        $("#vVideo_preview").hide(); // selected image
        //alert("no file selected");
    }


   }
});

// ---------------------- get url link in image or video start preview ------------>

vVideo.onchange = evt => {
  $( "#vVideo_preview" ).removeClass("vVideo_preview_img")
  $( "#video_display" ).addClass("vVideo_preview_img")
  const fileUrl = window.URL.createObjectURL(event.target.files[0]);
  const imgExtensions = ['mp4', 'mov','mpeg', 'mov'];
  const name = event.target.files[0].name;
  const lastDot = name.lastIndexOf('.');

  const ext = name.substring(lastDot + 1);

   if (imgExtensions.includes(ext)) {
   $("#vVideo_preview").show().attr("src", fileUrl);
  }

}
// ----------------- get link code end ----------------->



   $(document).on('click', '.submit', function() {
       var vUniqueCode = $("#vUniqueCode").val();
       var vTitle      = $("#vTitle").val();
       var eStatus     = $("#eStatus").val();
       var eFeature    = $("#eFeature").val();
       var eMenu       = $("#eMenu").val();
       var vLogo       = $("#vLogo").val();
       var eType       = $("#eType").val();
       tDescription    = tinyMCE.get('tDescription').getContent();

       var error = false;

        if(eType == "Image With Text")
        {
            if(vTitle.length == 0) {
               $("#vTitle_error").show();
               error = true;
            }else {
               $("#vTitle_error").hide();
            }

            if(tDescription.length == 0) {
               $("#tDescription_error").show();
               error = true;
            }else {
               $("#tDescription_error").hide();
            }
        }


       if (eType.length == 0) {
           $("#eType_error").show();
           error = true;
       } else {
           $("#eType_error").hide();
       }

       if (eMenu.length == 0) {
           $("#eMenu_error").show();
           error = true;
       } else {
           $("#eMenu_error").hide();
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
