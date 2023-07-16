@extends('layouts.app.admin-app')
@section('title', 'Activity Log Listing- '.env('APP_NAME'))
@section('content')

<!-- Main content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row d-flex"> 
       <div class="d-flex gap-3 top-input-space">

    <h5 class="space">
        Activity Log
    </h5>    
   
    <div class="d-flex flex-wrap right-side-top">
        <div class="space">  
            <select name="iUserId"  data-live-search="true" id="selecteddriver"class="form-select selecteddriver">
                <option value="">Select Driver</option>
                @foreach($riderData as $values)
                  <option  value="{{$values->iUserId}}">{{$values->vFirstName}}{{" "}}{{$values->vLastName}}</option>
                @endforeach
            </select>
        </div>
        <div class="space">  
            <select name="iUserId"    data-live-search="true"  id="selectedrider"class="form-select  selectedrider">
                <option value="">Select Rider</option>
                @foreach($driverData as $values)
                  <option  value="{{$values->iUserId}}">{{$values->vFirstName}}{{" "}}{{$values->vLastName}}</option>
                @endforeach
            </select>
        </div>
    </div>

</div>
</div>
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card-body">
                <section  id="table_record">
               </section>
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


    function filter(vUniqueCode,iUserId ,vPages)
    {

        var vUniqueCode      = vUniqueCode;
        var iUserId          = iUserId;
        var pages            = vPages;
        var iUserId          = iUserId;

        $("#table_record").html('');
        $("#ajax-loader").show();
        setTimeout(function() {
        $.ajax({
           url: "{{url('admin/log/ajax_listing')}}",
           type: "POST",
           headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
           data: {vUniqueCode:vUniqueCode,pages:pages,iUserId:iUserId,},
           success: function(response) {
               $("#table_record").html(response);
               $('#selectall').prop('checked', false); 
               $("#ajax-loader").hide();
           }
       });
       }, 1000);
    }

    $(document).ready(function() {
        
         filter("", "", "");

   });


   $(document).on("change", "#selecteddriver", function() {
        var iUserId    = $(this).val();
         $("#selectedrider").select2('destroy').val("").select2();
        filter("", iUserId, "");
    });

   $(document).on("change", "#selectedrider", function() {
        var iUserId    = $(this).val(); 
        $("#selecteddriver").select2('destroy').val("").select2();
        filter("", iUserId, "");
    });
    
     $(document).on('click', '.ajax_page', function() {
        var vPages     = $(this).data("pages");
        filter("", "", vPages);
     
    });


</script>
<script type="text/javascript">
    $('#selecteddriver').select2();
    $(".selecteddriver").select2({             
       placeholder: "Select Driver"            
    });

    $('#selecteddriver').select2().on('select2:open', function(e){
    $('.select2-search__field').attr('placeholder', 'Search...');
    })

    $('#selectedrider').select2();
    $(".selectedrider").select2({             
       placeholder: "Select Rider"            
    });

    $('#selectedrider').select2().on('select2:open', function(e){
    $('.select2-search__field').attr('placeholder', 'Search...');
    })
</script>
@endsection