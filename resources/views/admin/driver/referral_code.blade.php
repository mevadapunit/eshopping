@extends('layouts.app.admin-app')
@if(isset($referral_codes))
@section('title', 'Referral Code Edit- '.env('APP_NAME'))
@else
@section('title', 'Referral Code Add- '.env('APP_NAME'))
@endif
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-md-12">
          <div class="row">
          <div class="col-md-12">   
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item mt-2 me-3">
                        <spna class="col-sm-6 ">
                            <h5>Edit Driver</h5>
                        </spna>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="{{route('admin.driver.edit',$referral_codes->vUniqueCode)}}"
                        ><i class="bx bx-user me-1"></i> Profile</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="{{url('admin/driver/tax_edit',$referral_codes->vUniqueCode)}}"><i class='bx bx-receipt'></i> Tax Details</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('admin/driver/bankdetails_edit',$referral_codes->vUniqueCode)}}"
                        ><i class="bx bx-link-alt me-1"></i> Bank Details</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="{{url('admin/driver/vehicle_edit',$referral_codes->vUniqueCode)}}"><i class="bx bx-car me-1"></i> Vehicle</a
                      >
                    </li>
                     <li class="nav-item">
                      <a class="nav-link" href="{{url('admin/driver/document_edit',$referral_codes->vUniqueCode)}}"><i class='bx bx-file'></i> Document</a
                      >
                    </li>
                   <li class="nav-item">
                     <a class="nav-link" href="{{url('admin/driver/vehicle_images',$referral_codes->vUniqueCode)}}"><i class='bx bx-image-add'></i>Vehicle Images</a
                      >
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="{{url('admin/driver/training_video_verification',$referral_codes->vUniqueCode)}}"><i class='bx bx-show-alt'></i>Video Status</a
                      >
                    </li>
                    <li class="nav-item">
                     <a class="nav-link active" href="{{url('admin/driver/referral_code',$referral_codes->vUniqueCode)}}"><i class='bx bxs-network-chart'></i>Raferral</a
                      >
                    </li>
                  </ul>
            
            <form action="{{url('admin/driver/referral_code_store')}}" name="frm" id="frm" method="post"
               enctype="multipart/form-data">
               @csrf
             <div class="card mb-4">
               <div class="card-body">
                 <input type="hidden" id="vUniqueCode" name="vUniqueCode"
                     value="@if(isset($referral_codes)){{$referral_codes->vUniqueCode}}@endif">
                  <div class="row g-3">
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Referral Code</label>
                        <input type="text" readonly name="vReferralCode" id="vReferralCode" class="form-control"
                           placeholder="Referral Code"
                           value="@if(isset($referral_codes)){{$referral_codes->vReferralCode}}@endif">
                        <div id="vReferralCode_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Referral Code
                        </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-12 col-md-6">
                        <label>Join Referral</label>
                        <input type="text" @if(isset($appliedCodeData))@if($appliedCodeData != null) readonly @endif @endif name="vJoinReferralCode" id="vJoinReferralCode" class="form-control" placeholder="Enter Join Referral Code"
                           value="@if(isset($appliedCodeData) && $appliedCodeData != null){{$appliedCodeData->vReferralCode}}@endif">
                        <div id="vJoinReferralCode_success" class="error mt-1" style="color:green;display: none;"><i class='bx bxs-check-circle' style='color:#01bd28'  ></i> Referral Code Found , Submit it for Apply.
                        </div>
                        <div id="vJoinReferralCode_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Referral Code
                        </div>
                        <div id="vJoinReferralCode_valid_error" class="error mt-1" style="color:red;display: none;">
                           Please Enter Valid Referral Code
                        </div>
                     </div>
                  </div>
               </div>
               @if($appliedCodeData == null) 
               <div class="card-footer col-12 align-self-end d-inline-block mt-0 text-left">
                  <a href="javascript:;" class="btn btn-primary submit" id="save">Submit</a>
                  <a href="javascript:;" class="btn btn-primary loading" style="display: none;">
                  <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>Loading...
                  </a>
                  <a href="{{url('admin/driver')}}" class="btn-info btn">Back</a>
               </div>
               @endif
              
            </div>
          </form>
      </div>
   </div>
</div>
</div> 

@if($appliedCodeData !=null && $codeapplied != null)
    <div class="row">
       <div class="col-md-12">
         <div class="card">
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                     <tr class="text-center"><h5>Joined Referral</h5></tr>
                     <tr>
                        <th class="text-center">Referred</th>
                        <th class="text-center">Referrer</th>
                        <th class="text-center">Date & Time</th>
                     </tr>
                    </thead>
                    <tbody id="table_record" class="table-border-bottom-0">
                        <tr>
                            <td class="text-center">
                                @if($referral_codes != null && $referral_codes->vFirstName != null && $referral_codes->vLastName != null )
                                {{$referral_codes->vFirstName}} {{$referral_codes->vLastName}}
                                @else
                                {{ "N/A" }}
                                @endif
                            </td>
                            <td class="text-center">
                                @if($appliedCodeData != null && $appliedCodeData->vFirstName != null && $appliedCodeData->vLastName != null) 
                                {{$appliedCodeData->vFirstName}} {{$appliedCodeData->vLastName}}
                                @else
                                {{ "N/A" }}
                                @endif
                            </td>
                            <td  class="text-center">
                                @if($codeapplied != null && $codeapplied->dtUpdatedDate == null && $codeapplied->dtAddedDate != null )
                                {{$codeapplied->dtAddedDate}}
                                @elseif($codeapplied->dtUpdatedDate != null)
                                {{$codeapplied->dtUpdatedDate}}
                                @else
                                {{ "N/A" }}
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
          </div>
        </div>
    </div>
@endif 
<br>
@if(count($usedCodeBy) != 0)
    <div class="row">
       <div class="col-md-12">
         <div class="card">
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                     <tr class="text-center"><h5>Referral History</h5></tr>
                     <tr>
                        <th class="text-center">Referred</th>
                        <th class="text-center">Referrer</th>
                        <th class="text-center">Date & Time</th>
                     </tr>
                    </thead>
                    <tbody id="table_record" class="table-border-bottom-0">
                        @foreach($usedCodeBy as $values)
                        <tr>
                            <td class="text-center">
                                @if($values->vFirstName != null && $values->vLastName != null )
                                {{$values->vFirstName}} {{$values->vLastName}}
                                @else
                                {{ "N/A" }}
                                @endif
                            </td>
                            <td  class="text-center">
                                @if($referral_codes != null && $referral_codes->vFirstName != null && $referral_codes->vLastName != null )
                                {{$referral_codes->vFirstName}} {{$referral_codes->vLastName}}
                                @else
                                {{ "N/A" }}
                                @endif
                            </td>
                            <td class="text-center">
                                @if($values->dtAddedDate != null && $values->dtUpdatedDate == null)
                                 {{$values->dtAddedDate}}
                                @elseif($values->dtUpdatedDate != null)
                                {{$values->dtUpdatedDate}}
                                @else
                                {{ "N/A" }}
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
<script type="text/javascript">
    @if($appliedCodeData == null)
    $('#vJoinReferralCode').keyup(function() {
        var vJoinReferralCode = $('#vJoinReferralCode').val();
         $.ajax({
                url:"{{route('admin.driver.check_referral_code')}}",
                type: "POST",
                data: {
                    vJoinReferralCode: vJoinReferralCode,
                    _token: '{{csrf_token()}}' 
                },

                dataType : 'json',
          success: function(result){
                  // console.log(result.vReferralCode);
                        var referralCode  ='{{$referral_codes->vReferralCode}}'
                        if(result.vReferralCode !== referralCode && result.vReferralCode !== undefined )
                        {
                                 $("#vJoinReferralCode_success").show();
                                 $("#vJoinReferralCode_valid_error").hide();
                                 $("#vJoinReferralCode_error").hide();
                                 error = true;
                        }else if(result.vReferralCode === referralCode)
                        {
                                 $("#vJoinReferralCode_valid_error").show();
                                 $("#vJoinReferralCode_success").hide();
                                 $("#vJoinReferralCode_error").hide();
                                 error = false;      
                        }else{
                                 $("#vJoinReferralCode_success").hide();
                                 error = false;
                        }
                    
                    }
          });
    });
    @endif
   $(document).on('click', '.submit', function() {
       var vJoinReferralCode = $("#vJoinReferralCode").val();

       var error              = false;
       
        if(vJoinReferralCode.length == 0)
        {  
            $("#vJoinReferralCode_error").show();
            $("#vJoinReferralCode_valid_error").hide();
            $("#vJoinReferralCode_success").hide();
               error = true; 

        }else{
            $("#vJoinReferralCode_error").hide();
            if($('#vJoinReferralCode_success').css('display') == 'none')
           {  
               $("#vJoinReferralCode_valid_error").show();
               $("#vJoinReferralCode_success").hide();
               error = true;
           } else {
              
               $("#vJoinReferralCode_valid_error").hide();
           }
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