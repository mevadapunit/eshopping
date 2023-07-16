@extends('layouts.app.admin-app')
@section('title', 'Contact Listing- '.env('APP_NAME'))
@section('content')

<!-- Main content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="d-flex gap-3 top-input-space">
    <h5 class="space">
        Contact
    </h5>    
</div>
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card-body table-responsive">
               <table class="table table-bordered">
                  <thead>
                     <tr>
                        <th class="text-center search-input">File</th>
                        <th class="text-center"><input placeholder="Name" id="vKeyword" type="text" name="vFirstName" class="search form-control"></th>
                        <th><input placeholder="Subject" id="vSubject" type="text" name="vSubject" class="search form-control"></th>
                        <th><input placeholder="Email" id="vEmail" type="text" name="vEmail" class="search form-control"></th>
                        <th><input placeholder="Phone" id="vPhone" type="text" name="vPhone" class="phone form-control"></th>
                      
                     </tr>
                  </thead>
                  <tbody id="table_record" class="table-border-bottom-0">
                  </tbody>
               </table>
               <div class="text-center">
                  <div class="spinner-border m-5 text-warning" role="status" class="text-center" id="ajax-loader" style="display:none;">
                     <span class="visually-hidden">Loading...</span>
                  </div>
               </div>
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

    $("#vPhone").keypress(function (e){
        var charCode = (e.which) ? e.which : e.keyCode;
        if(charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
    });
    $(document).on("keyup", ".phone", function(e) {
        var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
        if((keyCode >= 37 && keyCode <= 40) || (keyCode == 8 || keyCode == 9 || keyCode == 13) || (keyCode >= 48 && keyCode <= 57)) {
            filter("", "search", "");
        }else{

          return false;
        }
    });
 
    function filter(vUniqueCode, vAction, vPages)
    {
        var vUniqueCode      = vUniqueCode;
        var vAction          = vAction;
        var pages            = vPages;
        var vKeyword         = $("#vKeyword").val();
        var vSubject         = $("#vSubject").val();
        var vEmail           = $("#vEmail").val();
        var vPhone           = $("#vPhone").val();
        $("#table_record").html('');
        $("#ajax-loader").show();
        setTimeout(function() {
        $.ajax({
           url: "{{url('admin/contact/ajax_listing')}}",
           type: "POST",
           headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
           data: {vUniqueCode:vUniqueCode, vAction:vAction, pages:pages,vPhone:vPhone,vEmail:vEmail,vSubject:vSubject,vKeyword:vKeyword},
           success: function(response) {
               $("#table_record").html(response);
               $('#selectall').prop('checked', false); 
               $("#ajax-loader").hide();
           }
       });
       }, 1000);
    }

    $(document).ready(function() {
         filter("", "search", "");

    });

    $(document).on("keyup", ".search", function() {
        filter("", "search", "");
    });

    $(document).on('click', '.ajax_page', function() {
        var vPages           = $(this).data("pages");
        filter("", "search", vPages);
     
    });

</script>
@endsection