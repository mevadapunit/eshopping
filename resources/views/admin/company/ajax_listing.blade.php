@if(($data->count()))
@foreach($data as $key => $value)

<tr>
   <td>
      @if(isset($permission) && ($permission->eWrite == "Yes" || $permission->eDelete == "Yes"))
      <div class="checkbox">
         <input id="vUniqueCode_{{$value->vUniqueCode}}" type="checkbox" name="vUniqueCode[]" class="checkboxall form-check-input" value="{{$value->vUniqueCode}}">
         <label for="vUniqueCode_{{$value->vUniqueCode}}">&nbsp;</label>
      </div>
      @endif
   </td>

   <td class="text-left">
      @if(!empty($value->vCompany))
      {{$value->vCompany}}
      @else
      {{ "N/A" }}
      @endif

   </td>
     <td class="text-center">
      @if(!empty($value->eFeature))
      <span class=" @if($value->eFeature == 'Yes')badge bg-label-info me-1 @elseif($value->eFeature == 'No') badge bg-label-secondary me-1 @endif">{{$value->eFeature}}</span>
       @else
      {{ "N/A" }}
      @endif
   </td>

   <td class="text-center"><span class=" @if($value->eStatus == 'Active')badge bg-label-primary me-1 @elseif($value->eStatus == 'Pending') badge bg-label-warning me-1  @else badge bg-label-danger me-1 @endif">{{$value->eStatus}}</span>
   </td>
   <td>
      @if(isset($permission) && $permission != null && ($permission->eWrite == "Yes" || $permission->eDelete == "Yes"))
      @if($value->eDelete == 'No')
      <div class="bottom-btn text-center">
         @if($permission->eWrite == "Yes")
         <a href="{{url('admin/company/edit',$value->vUniqueCode)}}" data-toggle="tooltip_edit" title="Edit Data" data-id="{{$value->vUniqueCode}}" class="btn btn-outline-primary btn-sm me-1"><i class='bx bx-edit-alt pt-1 pb-1'></i></a>
         @endif
         @if($permission->eDelete == "Yes")
         <a href="javascript:void(0)" data-id="{{$value->vUniqueCode}}" data-toggle="tooltip_delete"  title="Delete Data" class="btn btn-outline-danger btn-sm delete"><i class='bx bx-trash pt-1 pb-1' ></i></a>
         @endif
      </div>
      @endif
      @endif
   </td>
</tr>
@endforeach
@if(!empty($paging))
<tr>
   <td colspan="7" align="center">
      <div  class="paginations">
         <?php echo $paging;?>
      </div>
   </td>
</tr>
@endif
@else
<tr class="text-center">
   <td colspan="9">No Record Found</td>
</tr>
@endif
<script type="text/javascript">
  $(function () {
  $('[data-toggle="tooltip_edit"]').tooltip({delay: { "show": 500, "hide": 100 }})
  $('[data-toggle="tooltip_delete"]').tooltip({delay: { "show": 500, "hide": 100 }})
})
</script>