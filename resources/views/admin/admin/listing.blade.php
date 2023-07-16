@extends('layouts.app.admin-app')
@section('title', 'Admin Listing- '.env('APP_NAME'))
@section('content')
<!-- Main content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="d-flex justify-content-between flex-wrap gap-3 top-input-space"> 
        
    <h5 class="space">
       Admin
    </h5> 
    <div class="d-flex flex-wrap right-side-top">
        <div class="space">  
           <input type="text" class="search form-control" id="keyword" name="search" placeholder="Keyword...">
        </div>
        @if(isset($permission) && $permission != null && ($permission->eWrite == "Yes" || $permission->eDelete == "Yes"))   
        <div class="space">  
            <select name="eStatus"  id="eStatus" class="form-select">
                <option value="">Action</option>
                @if($permission->eWrite == "Yes")
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
                <option value="Pending">Pending</option>
                @endif
                @if($permission->eDelete == "Yes")
                <option value="delete">Delete</option>
                <option value="Recover">Recover</option>
                @endif
            </select>
        </div>
        @endif
        <div class="space"><select class="form-select" name="eStatus" id="eStatus_search">
                  <option value="">Status</option>
                  <option value="Active">Active</option>
                  <option value="Inactive">Inactive</option>
                  <option value="Pending">Pending</option>
             </select>
        </div>
        <div class="space">
            <select name="eDeleted" id="eDeleted" class="form-select">
                <option value="">Deleted</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>
        @if($permission != null && $permission->eWrite == "Yes")
        <div class="space">
                 <a href="{{route('admin.admin.add')}}"  data-toggle="tooltip_add" title="Add New Admin" class="btn btn-primary">+ Add</a>
        </div>
        <div class="space">
                 <a href="javascript:;" data-toggle="tooltip_download_data" title="Download Excel" class="btn btn-primary dawnload_excel"><i class='bx bx-download'></i></a>
                 <a href="javascript:;" class="btn btn-primary loading" style="display: none;">
                  <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                  </a>
        </div>
        @endif
    </div>
</div>
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card-body table-responsive">
               <div class="" id="table_record"></div>
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

    function filter(vUniqueCode, vAction, vPages ,eStatuschange)
    { 

        var pages           = vPages;
        var vUniqueCode     = vUniqueCode;
        var eStatuschange   = eStatuschange;
        var vAction         = vAction;
        var vPage           = vPage;
        var keyword         = $("#keyword").val();
        var eStatus         = $('#eStatus :selected').val();
        var eStatus_search  = $('#eStatus_search :selected').val();
        var eDeleted        = $("#eDeleted").val();
        $("#table_record").html('');
        $("#ajax-loader").show();
        setTimeout(function() {
        $.ajax({
           url: "{{url('admin/admin/ajax_listing')}}",
           type: "POST",
           headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
           data: {vUniqueCode:vUniqueCode, vAction:vAction,eStatuschange:eStatuschange,pages:pages,keyword:keyword, eStatus_search:eStatus_search,eStatus:eStatus,eDeleted:eDeleted},
           success: function(response) {
               $("#table_record").html(response);
               $('#selectall').prop('checked', false); 
               $("#ajax-loader").hide();
           }
       });
       }, 1000);
    }

    $(document).ready(function() {
         filter("", "search", "","");

   });
     $(document).on("keyup", ".search", function() {
        var value = $(this).val();
        filter("", "search", "","");
        
    });

     $(document).on("change", "#eStatus_search", function() {
        filter("", "search", "","");
    });

    $(document).on("change", "#eDeleted", function() {
        filter("", "delete", "","");
    });

      $(document).on('click', '.ajax_page', function() {
        var vPages           = $(this).data("pages");
        filter("", "search", vPages,"");
     
    });
   

     $(document).on('click', '#selectall', function() {
        if (this.checked) {
            $('.checkboxall').each(function() {
                $(".checkboxall").prop('checked', true);
            });
        } else {
            $('.checkboxall').each(function() {
                $(".checkboxall").prop('checked', false);
            });
        }
    });



   $(document).on('click', '.delete', function() {
        if (confirm('Are you sure delete this data?')) {
            
            var vUniqueCode = $(this).data("id");
           
            setTimeout(function() {
                filter(vUniqueCode, "delete", "","");
            }, 500);
        }
    });

    $(document).on('click', '.recover', function() {
        if (confirm('Are you sure recover this data?')) {
            vUniqueCode   = $(this).data("id");
           
            setTimeout(function() {
                filter(vUniqueCode, "recover", "","");
            }, 500);
        }
    });


    $(document).on('click', '.eStatus', function() {
            
        var eStatuschange    = $(this).data("value");
        if (confirm('Are you sure changes this status?')) {
            var vUniqueCode  = $(this).data("id");
           
            setTimeout(function() {
                filter(vUniqueCode, "status", "",eStatuschange);
            }, 500);
        }
     
    });

      $(document).on('change', '#eStatus', function() {
        if ($("#selectall").is(':checked') == true || $("input[name = 'vUniqueCode[]']").is(':checked') == true) {
            var eStatus   = $("#eStatus").val();

            if (eStatus == "delete") {

                if (confirm('Are you sure you want to delete?')) {

                        vUniqueCode = [];
                        $("input[name='vUniqueCode[]']:checked").each(function() {
                            vUniqueCode.push($(this).val());
                        });

                        var vUniqueCode = vUniqueCode.join(",");
                        $("#table_record").html('');

                        filter(vUniqueCode, "status", "","");
                }
            }
            else if(eStatus == "recover")
            {
                if(confirm('Are you sure recover data?')) {
                        vUniqueCode = [];
                        $("input[name='vUniqueCode[]']:checked").each(function() {
                            vUniqueCode.push($(this).val());
                        });

                        var vUniqueCode = vUniqueCode.join(",");
                        $("#table_record").html('');

                        filter(vUniqueCode, "status", "","");
                }
            }
            else {

                if (confirm('Are you sure changes this status?')) {
                        vUniqueCode = [];
                        $("input[name='vUniqueCode[]']:checked").each(function() {
                            vUniqueCode.push($(this).val());
                        });

                        var vUniqueCode = vUniqueCode.join(",");
                        $("#table_record").html('');

                        filter(vUniqueCode, "status", "","");
                }
            }
        } else {
            var eStatus   = $("#eStatus").val();
            if(eStatus.length != 0){
            alert('Please Select Data');
            }
        }
    });
$(".dawnload_excel").click(function(){    
 
        var eStatuschange   = eStatuschange;
        var eStatus         = $('#eStatus :selected').val();
        @if(isset($eStatus))
        var eStatus_search  ='{{$eStatus}}'
        @else
        var eStatus_search  = $('#eStatus_search :selected').val();
        @endif
        var eDeleted        = $("#eDeleted").val();
        var keyword         = $("#keyword").val();
        if(confirm('Are you sure Download Excel File?')) {
        $('.dawnload_excel').hide();
        $('.loading').show();
          setTimeout(function(){
            $.ajax({
               url: "{{url('admin/admin/admin_data_listing_excel')}}",
               type: "POST",
               headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
               data: {eStatuschange:eStatuschange,keyword:keyword, eStatus_search:eStatus_search,eStatus:eStatus,eDeleted:eDeleted},
                success: function(data)
                { 

                  if(data.length != 0)
                  {
                        $('.dawnload_excel').show();
                        $('.loading').hide();
                        var filename = data.filename;
                        const link = document.createElement('a');
                        link.setAttribute('href', '{{asset('uploads/excel/')}}'+'/'+filename+'');
                        link.setAttribute('download', filename);
                        link.click();

                  }else{

                       window.location.href = "{{url('admin/admin')}}";
                  }
                     
                },
               
           });
          }, 500);
        }    
});

 $(function () {
  $('[data-toggle="tooltip_download_data"]').tooltip({delay: { "show": 200, "hide": 50 }})
  $('[data-toggle="tooltip_add"]').tooltip({delay: { "show": 200, "hide": 50 }})
})
</script>
@endsection