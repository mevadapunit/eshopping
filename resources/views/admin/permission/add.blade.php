@extends('layouts.app.admin-app')
@if(isset($permissions))
@section('title', 'Permission Edit- '.env('APP_NAME'))
@else
@section('title', 'Permission Add- '.env('APP_NAME'))
@endif
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-md-12">
         <div class="row mb-2">
            <div class="col-sm-6 mt-2">
                <h5>{{ isset($permissions) ? 'Edit' : 'Add' }} Permission</h5>
            </div>
         </div>
         <form action="{{route('admin.permission.store')}}" name="frm" id="frm" method="post"
               enctype="multipart/form-data">
               @csrf
             <div class="card mb-4">
                <div class="card-body">
                  <input type="hidden" id="vUniqueCode" name="vUniqueCode"
                     value="@if(isset($permissions)){{$permissions->vUniqueCode}}@endif">
                  <input type="hidden" id="iModuleIds" name="iModuleIds"
                     value="@if(isset($permissions)){{$permissions->iModuleId}}@endif">

                  <div class="row g-3">
                   
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                           <label>Role</label>
                           <select id="iRoleId" name="iRoleId" class="form-select">
                               <option value="">Select Role</option>
                               @foreach($roles as $value)
                               <option value="{{$value->iRoleId}}" @if(isset($permissions)) @if($permissions->iRoleId == $value->iRoleId) selected @endif @endif>{{$value->vRole}}</option>
                               @endforeach
                           </select>
                           <div id="iRoleId_error" class="error mt-1" style="color:red;display: none;">
                               Please Select Role</div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                          <div class="form-group">
                              <label>User Name</label>
                              <select id="iUserId" name="iUserId[]" class="form-select selecteduser" multiple>
                              </select>
                              <div id="iUserId_error" class="error mt-1" style="color:red;display: none;">Please Select User Name
                              </div>
                          </div>
                     </div> 
                     
                     <div class="form-group col-xl-6 col-lg-12 col-md-6 selecttwo-input">
                           <label>Module</label> 
                           <select id="iModuleId" name="iModuleId"  data-live-search="true" class="form-select selectedmodule">
                               <option value="">Select Module</option>
                               @foreach($modules as $value)
                               <option  value="{{$value->iModuleId}}" @if(isset($permissions)) @if($permissions->iModuleId == $value->iModuleId) selected @endif @endif>{{$value->vModule}}</option>
                               @endforeach
                           </select>
                           <div id="iModuleId_error" class="error mt-1" style="color:red;display: none;">
                               Please Select Module</div>
                     </div>
                    
                    <div class="form-check col-xl-6 col-lg-12 col-md-6 p-4 ">
                      <input class="form-check-input" @if(isset($eCheckALL)) @if($eCheckALL =='Yes') checked @endif @endif  type="checkbox" value="Yes" name="eCheckALL" id="eCheckALL">
                      <label class="form-check-label" for="eCheckALL">
                       Select All Users 
                      </label>
                    </div>

                     
                     <div  class="form-group col-xl-6 col-lg-12 col-md-6">
                        
                     <div class="form-check form-check-inline col-xl-2 col-lg-12 col-md-2">
                           <div class="form-check">
                            <input style="width: 18px;height: 18px;" class="form-check-input check" type="checkbox" value="Yes" @if(isset($permissions)) @if($permissions->eRead =='Yes') checked @endif @endif  id="eRead" name="eRead">
                            <label class="form-check-label" for="eRead"> Read </label>
                          </div>
                     </div>
                     <div class="form-check form-check-inline col-xl-2 col-lg-12 col-md-2">
                          <div class="form-check">
                            <input style="width: 18px;height: 18px;" class="form-check-input check" type="checkbox" value="Yes" @if(isset($permissions)) @if($permissions->eWrite =='Yes') checked @endif @endif  id="eWrite" name="eWrite">
                            <label class="form-check-label" for="eWrite"> Write </label>
                          </div>
                     </div>
                     <div class="form-check form-check-inline col-xl-2 col-lg-12 col-md-2">
                          <div class="form-check">
                            <input style="width: 18px;height: 18px;" class="form-check-input check" type="checkbox" value="Yes" @if(isset($permissions)) @if($permissions->eDelete =='Yes') checked @endif @endif  id="eDelete" name="eDelete">
                            <label class="form-check-label" for="eDelete"> Delete </label>
                          </div>
                     </div>
                     <div id="eCheck_error" class="error mt-1" style="color:red;display: none;">Please Select At least one permission.
                              </div>
                     </div>

                    @if(isset($permissions))
                    <div class="form-group col-xl-2 col-lg-12 col-md-2" hidden>
                     <select id="iUid">
                        @foreach($permissions->iUserId as $key=> $values) 
                         <option value="{{$values->iUserId}}">{{$values->iUserId}}</option>
                        
                        @endforeach
                     </select>
                    </div>
                    @endif
                  </div>
               </div>
               <div class="card-footer col-12 align-self-end d-inline-block mt-0 text-left">
                  <a href="javascript:;" class="btn btn-primary submit" id="save">Submit</a>
                  <a href="javascript:;" class="btn btn-primary loading" style="display: none;">
                  <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>Loading...
                  </a>
                  <a href="{{url('admin/permission')}}" class="btn-info btn">Back</a>
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
var iRoleId = $("#iRoleId").val();
if(iRoleId != ''){
    $('#iModuleId option').each(function() {
       $(this).attr('disabled',false);
    })
    $.ajax({
        url:"{{url('admin/permission/get_module_by_role')}}",
        type: "POST",
        data: {
            iRoleId: iRoleId,
            _token: '{{csrf_token()}}'
        },

        dataType : 'json',
        success: function(result){
    
            if(result.iModuleId != null){ 
                if(result.iModuleId.length > 0){
                  $.each(result.iModuleId,function(key,value){
                     $('#iModuleId option').each(function() {
                        if($(this).val() == value){
                        $(this).prop('disabled', Number($(this).val()) == value)
                        }
                     })
                  });
                }
            }else {
                $('#iModuleId option').each(function() {
                    $(this).attr('disabled',false);
                })
            }
        }
    });
}

 $(document).on('change','#iRoleId',function()
 {
    var iRoleId = $(this).val();
    if(iRoleId != ''){
        $('#iModuleId option').each(function() {
           $(this).attr('disabled',false);
        })
        $.ajax({
            url:"{{url('admin/permission/get_module_by_role')}}",
            type: "POST",
            data: {
                iRoleId: iRoleId,
                _token: '{{csrf_token()}}'
            },

            dataType : 'json',
            success: function(result){
        
                if(result.iModuleId != null){ 
                    if(result.iModuleId.length > 0){
                      $.each(result.iModuleId,function(key,value){
                         $('#iModuleId option').each(function() {
                            if($(this).val() == value){
                            $(this).prop('disabled', Number($(this).val()) == value)
                            }
                         })
                      });
                    }
                }else {
                    $('#iModuleId option').each(function() {
                        $(this).attr('disabled',false);
                    })
                }
            }
        });
    }
});


var iRoleId = $("#iRoleId").val();
if(iRoleId != ''){
    $("#iUserId").html('');
    $.ajax({
        url:"{{url('admin/permission/get_user_by_role')}}",
        type: "POST",
        data: {
            iRoleId: iRoleId,
            _token: '{{csrf_token()}}'
        },

        dataType : 'json',
        success: function(result){

                var allUids = $.map($('#iUid option'), function(e) { return e.value; });
                var arr =[];
                $.each(allUids,function(key,value){

                    arr[key] = parseInt(value);
                });
        
                $.each(result.userdata,function(key,value){

                        const isInArray = allUids.includes(value.iUserId);
                       
                        if (arr.includes(value.iUserId)) 
                        {  
                            @if(isset($eCheckALL) && $eCheckALL == "No")
                               $("#iUserId").append('<option selected value="'+value.iUserId+'">'+value.vFirstName+' '+value.vLastName+'</option>');
                            @else
                               $("#iUserId").append('<option value="'+value.iUserId+'">'+value.vFirstName+' '+value.vLastName+'</option>');
                            @endif
                        }else{
                            
                            $("#iUserId").append('<option value="'+value.iUserId+'">'+value.vFirstName+' '+value.vLastName+'</option>');
                        }
                    
                });
           
        }
    });
}
$(document).on('change','#iRoleId',function()
{
        var iRoleId = $("#iRoleId").val();
        if(iRoleId != ''){
            $("#iUserId").html('');
            $.ajax({
                url:"{{url('admin/permission/get_user_by_role')}}",
                type: "POST",
                data: {
                    iRoleId: iRoleId,
                    _token: '{{csrf_token()}}'
                },

                dataType : 'json',
                success: function(result){
                    @if(isset($users))
                    $.each(result.userdata,function(key,value){
                        $("#iUserId").append('<option value="'+value.iUserId+'">'+value.vFirstName+' '+value.vLastName+'</option>');
                    });
                    @else
                    $.each(result.userdata,function(key,value){
                        $("#iUserId").append('<option value="'+value.iUserId+'">'+value.vFirstName+' '+value.vLastName+'</option>');
                    });
                    @endif
                }
            });
        }
});

$( document ).ready(function() {
    var iRoleId = $("#iRoleId").val();
    if(iRoleId.length == 0)
    {
        $("#iModuleId").attr('disabled', true);
    }
    else
    {
        $("#iModuleId").attr('disabled', false);
    }   
    
    $('#iRoleId').on('change', function() {
       var values = $(this).val();
       if(values.length != 0){ 
         $('.selectedmodule').attr('disabled', false);
       }else{
         $(".selectedmodule").attr('disabled', true);
       }
    });
}); 
$('.selecteduser').select2();   
$('.selectedmodule').select2();
$(".selectedmodule").select2({             
 placeholder: "Select Module"            
});



   $(document).on('click', '.submit', function() {
       var vUniqueCode = $("#vUniqueCode").val();
       var iRoleId     = $('#iRoleId').find(":selected").val();
       var iModuleId   = $('#iModuleId').find(":selected").val();
       var iUserId     = $('#iUserId').find(":selected").val();
       var error = false;
       
       if($("#eRead").is(':checked') || $("#eWrite").is(':checked') || $("#eDelete").is(':checked'))
        {
          $("#eCheck_error").hide(); 
        }else
        {
          $("#eCheck_error").show();
          error = true;
        }
      if($("#eCheckALL").is(':checked'))
      {
         $("#iUserId_error").hide();
      }
      else{

       if (iUserId == undefined) {
           $("#iUserId_error").show();
           error = true;
       } else {
           $("#iUserId_error").hide();
       }

      }

       if (iRoleId.length == 0) {
           $("#iRoleId_error").show();
           error = true;
       } else {
           $("#iRoleId_error").hide();
       }

       if (iModuleId.length == 0) {
           $("#iModuleId_error").show();
           error = true;
       } else {
           $("#iModuleId_error").hide();
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