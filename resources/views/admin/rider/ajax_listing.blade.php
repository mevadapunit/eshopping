@if(($data->count()))

<div class="row row-cols-1 row-cols-md-3 g-4 mb-5 user-list-box">
  @foreach($data as $key => $value)
        <div class="col-md-3 col-lg-3">
          <div class="card h-100 position-relative" style="box-shadow:0 3px 15px 5px #aaaaaa80;">
            @if($permission != null && ($permission->eWrite == "Yes" || $permission->eDelete == "Yes"))
            <div class="checkbox">
               <input id="vUniqueCode_{{$value->vUniqueCode}}" type="checkbox" data-toggle="tooltip_checkbox" title="Select For Action" name="vUniqueCode[]" class="checkboxall form-check-input" value="{{$value->vUniqueCode}}">
            </div>
            @endif
            <div class="image-box">
              @if(!empty($value->vImage) && file_exists(public_path()."/uploads/user/".$value->vImage))
              <a href="{{asset('uploads/user/'.$value->vImage)}}" target="_blank">
              <img alt="{{$value->vImage}}" class="card-img-top" src="{{asset('uploads/user/'.$value->vImage)}}" alt="Card image cap" /></a>
              @else
                 @if($value->eGender == "Male" || $value->eGender == "Other")
                   <img alt="no-image" class="card-img-top" src="{{ asset('admin/assets/img/avatars/male.jpg') }}">
                @elseif($value->eGender == "Female")
                  <img alt="no-image" class="card-img-top"  src="{{ asset('admin/assets/img/avatars/female.jpg') }}">
                @endif
              @endif
            </div>
            <div class="user-status-box">
               @if($value->eStatus == 'Active')
              <a title="Current Status" data-toggle="tooltip_status" class="user-activity active">Active</a>
              @elseif($value->eStatus == 'Inactive')
              <a title="Current Status" data-toggle="tooltip_status" class="user-activity inactive">Inactive</a>
              @elseif($value->eStatus == 'Pending')
              <a title="Current Status" data-toggle="tooltip_status" class="user-activity pending">Pending</a>
              @endif
            </div>
            <div class="card-body">
              <h5 class="card-title"> <span  data-toggle="tooltip_name" title="Name"> @if(!empty($value->vFirstName) && !empty($value->vLastName)){{$value->vFirstName}} {{$value->vLastName}}
              @else
              {{ "N/A" }}
              @endif
              </span>
              </h5>

              <p class="card-text" title="Emial" data-toggle="tooltip_emaildata"><i class='bx bx-envelope' ></i> @if(!empty($value->vEmail))
              {{ strtolower(trans($value->vEmail))}}
              @else
              {{ "N/A" }}
              @endif</p>
              <p class="card-text" title="Phone" data-toggle="tooltip_phonedata"> <i class='bx bx-phone'></i> @if(!empty($value->vPhone))
              {{$value->vPhone}}
              @else
              {{ "N/A" }}
              @endif</p>
              @if($permission != null && ($permission->eWrite == "Yes" || $permission->eDelete == "Yes"))
              <div class="bottom-btn">
                @if($permission->eWrite == "Yes")
                <a href="{{url('admin/rider/edit',$value->vUniqueCode)}}" data-toggle="tooltip_edit" title="Edit Account" data-id="{{$value->vUniqueCode}}" class="btn btn-outline-primary btn-sm"><i class='bx bx-edit-alt pt-1 pb-1'></i></a>
                @endif
                @if($permission->eDelete == "Yes")
                @if($value->eDelete == "Yes")
                <a href="javascript:void(0)" data-id="{{$value->vUniqueCode}}" data-toggle="tooltip_recover"  title="Recover Account" class="btn btn-outline-danger btn-sm recover"><i class='bx bx-log-out-circle pt-1 pb-1'></i></a>
                @elseif($value->eDelete == "No")
                <a href="javascript:void(0)" data-id="{{$value->vUniqueCode}}" data-toggle="tooltip_delete"  title="Delete Account" class="btn btn-outline-danger btn-sm delete"><i class='bx bx-trash pt-1 pb-1' ></i></a>
                @endif
                @endif
                @if($permission != null && $permission->eWrite == "Yes")
                <div class="dropdown">
                 <button type="button" data-toggle="tooltip_changestatus"  title="Change Status" class="btn btn btn-outline-secondary btn-sm dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                 <i class='bx bx-info-circle pt-1 pb-1'></i>
                 </button>
                 <div class="dropdown-menu">
                    <a class="dropdown-item eStatus" href="javascript:void(0)" data-id="{{$value->vUniqueCode}}" data-value="Active">Active</a>
                    <a class="dropdown-item eStatus" href="javascript:void(0)" data-id="{{$value->vUniqueCode}}" data-value="Inactive">Inactive</a>
                    <a class="dropdown-item eStatus" href="javascript:void(0)" data-id="{{$value->vUniqueCode}}" data-value="Pending">Pending</a>
                 </div>
              </div>
                <a href="{{url('admin/rider/change_password',$value->vUniqueCode)}}" data-toggle="tooltip_password" title="Change Password" data-id="{{$value->vUniqueCode}}" class="btn btn-outline-info btn-sm"><i class='bx bx-lock-open-alt pt-1 pb-1'></i></a>
                @endif
              </div>
              @endif
            </div>
          </div>
        </div> 
        @endforeach             
</div>
                            
@if(!empty($paging))
<div class="text-center row">
   
  <div   class="paginations col-md-12">
      <?php echo $paging?>
  </div>
    
</div>
@endif
@else
<div class="text-center row">
   <div class="col-md-12 mt-5">No Record Found</div>
</div>
@endif


<script type="text/javascript">
  $(function () {
  $('[data-toggle="tooltip_edit"]').tooltip({delay: { "show": 500, "hide": 100 }})
  $('[data-toggle="tooltip_delete"]').tooltip({delay: { "show": 500, "hide": 100 }})
  $('[data-toggle="tooltip_recover"]').tooltip({delay: { "show": 500, "hide": 100 }})
  $('[data-toggle="tooltip_password"]').tooltip({delay: { "show": 500, "hide": 100 }})
  $('[data-toggle="tooltip_name"]').tooltip({delay: { "show": 500, "hide": 100 }})
  $('[data-toggle="tooltip_emaildata"]').tooltip({delay: { "show": 500, "hide": 100 }})
  $('[data-toggle="tooltip_phonedata"]').tooltip({delay: { "show": 500, "hide": 100 }})
  $('[data-toggle="tooltip_status"]').tooltip({delay: { "show": 500, "hide": 100 }})
  $('[data-toggle="tooltip_checkbox"]').tooltip({delay: { "show": 500, "hide": 100 }}) 
  $('[data-toggle="tooltip_changestatus"]').tooltip({delay: { "show": 500, "hide": 100 }}) 
})
</script>

