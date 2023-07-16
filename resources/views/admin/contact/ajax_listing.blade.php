@if(($data->count()))
@foreach($data as $key => $value)

<tr>

   @if($value->vType != null && $value->vType =="jpeg" || $value->vType =="jpg" || $value->vType =="png" || $value->vType =="webp" || $value->vType =="svg" || $value->vType =="gif")
      <td class="text-center">
       @if($value->vFile !='' && file_exists(public_path()."/uploads/contactus/".$value->vFile))
       <a href="{{asset('/uploads/contactus/'.$value->vFile)}}" target="_blank">
       <img style="width: 90px;border-radius: 10px;"  src="{{asset('uploads/contactus/'.$value->vFile)}}" data-toggle="tooltip_image" title="Image File, click to open"></a>
       @else
       <div class="text-center">
        <img style="width: 90px;border-radius: 10px;" src="{{ asset('admin/assets/img/no_image.png') }}" alt="No photo">
       </div>
       @endif
      </td>
   @elseif($value->vType != null &&  $value->vType =="pdf")  
       <td class="text-center">
       @if($value->vFile !='' && file_exists(public_path()."/uploads/contactus/".$value->vFile))
       <a href="{{asset('/uploads/contactus/'.$value->vFile)}}" target="_blank">
       <img style="width: 90px;border-radius: 10px;"  src="{{asset('admin/assets/img/pdf_file_preview.png')}}" data-toggle="tooltip_pdf" title="Pdf File, click to open"></a>
       @else
       <div class="text-center">
        <img style="width: 90px;border-radius: 10px;" src="{{ asset('admin/assets/img/no_image.png') }}" alt="No photo">
       </div>
       @endif
      </td>
   @elseif($value->vType != null &&  ($value->vType =="doc" || $value->vType =="docx"))
         <td class="text-center">
          @if($value->vFile !='' && file_exists(public_path()."/uploads/contactus/".$value->vFile))
          <a href="{{asset('/uploads/contactus/'.$value->vFile)}}" target="_blank">
          <img style="width: 90px;border-radius: 10px;"  src="{{asset('admin/assets/img/document_preview.png')}}" data-toggle="tooltip_doc" title="Doc File, click to open"></a>
          @else
          <div class="text-center">
           <img style="width: 90px;border-radius: 10px;" src="{{ asset('admin/assets/img/no_image.png') }}" alt="No photo">
          </div>
          @endif
         </td>
   @endif

   <td class="text-left">
      @if(!empty($value->vName))
      {{$value->vName}}
      @else
      {{ "N/A" }}
      @endif

   </td>
   <td class="text-left">
      @if(!empty($value->vSubject))
      {{$value->vSubject}}
      @else
      {{ "N/A" }}
      @endif

   </td>
   <td class="text-left">
      @if(!empty($value->vEmail))
      {{$value->vEmail}}
      @else
      {{ "N/A" }}
      @endif

   </td>
   <td class="text-left">
      @if(!empty($value->vPhone))
      {{$value->vPhone}}
      @else
      {{ "N/A" }}
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
  $('[data-toggle="tooltip_pdf"]').tooltip({delay: { "show": 500, "hide": 100 }})
  $('[data-toggle="tooltip_doc"]').tooltip({delay: { "show": 500, "hide": 100 }}) 
  $('[data-toggle="tooltip_image"]').tooltip({delay: { "show": 500, "hide": 100 }}) 
})
</script>