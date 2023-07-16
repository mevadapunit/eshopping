@if(($data->count()))

 
<!-- Section: Timeline -->

 @foreach($data as $key => $value)
  <ul class="timeline "> 
    <li class="timeline-item" @if($value->eStatus == "success") style="--my-color-var: #218838;" @elseif($value->eStatus == "primary") style="--my-color-var: #007bff;" @elseif($value->eStatus == "warning") style="--my-color-var: #e0a800;" @elseif($value->eStatus == "danger") style="--my-color-var: #c82333;" @endif >
      <h5 class="fw-bold">@if($value->vLog) {{$value->vLog}} @else {{N\A}} @endif</h5>
      <p class="text-muted ">@if($value->dtAddedDate) {{$value->dtAddedDate}} @else {{"N\A"}} @endif</p>
      <!-- <p class="text-muted">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit
        necessitatibus adipisci, ad alias, voluptate pariatur officia
        repellendus repellat inventore fugit perferendis totam dolor
        voluptas et corrupti distinctio maxime corporis optio?
      </p> -->
    </li>
  </ul>

<!-- Section: Timeline -->
@endforeach
@if(!empty($paging))
<div>
   <div colspan="7" align="center">
      <div  class="paginations">
         <?php echo $paging;?>
      </div>
   </div>
</div>
@endif
@else
<div class="text-center">
   <div colspan="9">No Record Found</div>
</div>
@endif


<style type="text/css">
.timeline-item:after {
  background-color: var(--my-color-var);
  left: -38px;
  border-radius: 50%;
  height: 11px;
  width: 11px;
  content: "";
}
</style>

<script type="text/javascript"></script>




