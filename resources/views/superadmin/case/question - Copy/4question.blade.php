<?php
if($questiontitles[3]->status==0)
{

  ?>

@if(Auth::user()->can('4.question'))
<?php 
$remarks =[
  1=>"Satisfactory",
  2=>"Planned",
  3=>"Discontinued",
  4=>"Completed"
];

$issues =[
  1=>"Policy",
  2=>"Law",
  3=>"Awareness",
  4=>"Economic Support",
  5=>"Technology Transfer",
  6=>"Psychosocial Care",
  7=>"Legal Aid",
  8=>"Health Care",
  9=>"Shelter",
  10=>"Technical Training",
  11=>"Education",
  12=>"Lifeskill Training",
  13=>"Research",
  14=>"Others",
];
?>
 <style>
.visibility
{
  display: none;
}
</style>
<!-- question no 4 end -->
<div class="col-md-12 question4">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
           <span class="numbering">4</span>.
           @if (isset($questiontitles [3]))
         {{ $questiontitles[3]->title }}

         @endif
  
    </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
    <div class="icheck-primary">
            <?php if(isset($question_4_data->q4_checked_value)) { ?>
            <input type="radio" id="radioFourYes" class="fourstatus" name="is_national_authority_q4" 
            <?=(isset($question_4_data->q3_data->q4_checked_value)   && $question_4_data->q4_checked_value=='1') ? 'checked' : '' ;?> 
            value="1">
            <?php }else { ?>
              <input type="radio" id="radioFourYes" class="fourstatus" name="is_national_authority_q4" checked value="1">
            <?php } ?>
            <label for="radioFourYes">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input  type="radio" id="radioFourNo" class="fourstatus" name="is_national_authority_q4" 
            <?=(isset($question_4_data->q4_checked_value)   && $question_4_data->q4_checked_value=='0') ? 'checked' : '' ;?> 
            value="0">
            <label for="radioFourNo">
              No
            </label>
          </div>


      <table id="National_Authority" class="table table-bordered <?=(isset($question_4_data->q4_checked_value)   && ($question_4_data->q4_checked_value=='0')) ? 'visibility' : '' ;?>" border="2">
        <thead>
          <tr>
            <th scope="col">Meeting no</th>
            <th colspan="3" scope="col">Key decisions</th>
            <th scope="col">Upload</th>
          </tr>
          <tr>
            <th scope="col" style="vertical-align: top;">
              <input type="text" value="<?=(isset($question_4_data->q4_data->q4_meeting_no)) ? $question_4_data->q4_data->q4_meeting_no:'' ?>" name="meeting_no[]"  id="q4_meeting_no" class="form-control q4Input" placeholder="Meting No ">
            </th>
            <th colspan="3" scope="col">
              <textarea cols="2" name="key_decisions[]" id="q4_key_decision"  class="form-control q4Input">
              <?=(isset($question_4_data->q4_data->q4_key_decision)) ?htmlspecialchars($question_4_data->q4_data->q4_key_decision):'' ?>
              </textarea>
            </th>
            <th scope="col" style="vertical-align: top;">
              <input type="file" name="upload_photo[]" class="form-control q4Input">
            </th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <th rowspan="13" scope="row">First</th>
            <input type="hidden" name="type_component_q4[]" value="1">
            <td>Component</td>
            <td>Issue</td>
            <td>Remark</td>

          </tr>
          <tr>
            <th scope="row">Prevention</th>
            <input type="hidden" name="type_component[]" value="1">
            <td> <select name="type_issue_q4[]" id="q4_prevention_first_issue" class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_prevention_first_issue) && $question_4_data->q4_data->q4_prevention_first_issue==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select> <br>
                  <input  type="input" value="<?=(isset($question_4_data->q4_data->prevention_first_issue) && $question_4_data->q4_data->prevention_first_issue)? $question_4_data->q4_data->prevention_first_issue : '' ;?>" id="prevention_first_issue" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_prevention_first_issue) && $question_4_data->q4_data->q4_prevention_first_issue=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"></td>
            <td> <select name="type_remark_q4[]" id="preventRemarks5" class="form-control q4Input">
            <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->preventRemarks5) && $question_4_data->q4_data->preventRemarks5==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">Protection</th>
            <input type="hidden" name="type_component[]" value="2">
            <td> <select name="type_issue_q4[]" id="q4_protection_first_issue_one"  class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_protection_first_issue_one) && $question_4_data->q4_data->q4_protection_first_issue_one==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input value="<?=(isset($question_4_data->q4_data->protection_first_issue_one) && $question_4_data->q4_data->protection_first_issue_one)? $question_4_data->q4_data->protection_first_issue_one : '' ;?> " type="input" id="protection_first_issue_one" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_protection_first_issue_one) && $question_4_data->q4_data->q4_protection_first_issue_one=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="protRemarks5" class="form-control q4Input">
            <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->protRemarks5) && $question_4_data->q4_data->protRemarks5==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">Prosecution</th>
            <input type="hidden" name="type_component[]" value="3">
            <td> <select name="type_issue_q4[]" id="q4_prosecution_first_issue" class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_prosecution_first_issue) && $question_4_data->q4_data->q4_prosecution_first_issue==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" value="<?=(isset($question_4_data->q4_data->prosecution_first_issue) && $question_4_data->q4_data->prosecution_first_issue)? $question_4_data->q4_data->prosecution_first_issue : '' ;?>" id="prosecution_first_issue" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_prosecution_first_issue) && $question_4_data->q4_data->q4_prosecution_first_issue=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="prosRemarks5"  class="form-control q4Input">
             
                 <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->prosRemarks5) && $question_4_data->q4_data->prosRemarks5==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">Protection</th>
            <input type="hidden" name="type_component[]" value="4">
            <td> <select name="type_issue_q4[]" id="q4_protection_first_issue_two"  class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_protection_first_issue_two) && $question_4_data->q4_data->q4_protection_first_issue_two==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" value="<?=(isset($question_4_data->q4_data->protection_first_issue_two) && $question_4_data->q4_data->protection_first_issue_two)? $question_4_data->q4_data->protection_first_issue_two : '' ;?>" id="protection_first_issue_two" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_protection_first_issue_two) && $question_4_data->q4_data->q4_protection_first_issue_two=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="protReamrks4"  class="form-control q4Input">
                <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->protReamrks4) && $question_4_data->q4_data->protReamrks4==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">Partnership</th>
            <input type="hidden" name="type_component[]" value="5">
            <td> <select name="type_issue_q4[]" id="q4_partnership_first_issue"  class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_partnership_first_issue) && $question_4_data->q4_data->q4_partnership_first_issue==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" value="<?=(isset($question_4_data->q4_data->partnership_first_issue) && $question_4_data->q4_data->partnership_first_issue)? $question_4_data->q4_data->partnership_first_issue : '' ;?>" id="partnership_first_issue" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_partnership_first_issue) && $question_4_data->q4_data->q4_partnership_first_issue=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="partnerq4Remarks3" class="form-control q4Input">
                 <option value="" disabled selected>---Select Remark--</option>
              @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->partnerq4Remarks3) && $question_4_data->q4_data->partnerq4Remarks3==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">M&amp;E (NPA)</th>
            <input type="hidden" name="type_component[]" value="6">
            <td> <select name="type_issue_q4[]" id="q4_mnpa_first_issue"  class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_mnpa_first_issue) && $question_4_data->q4_data->q4_mnpa_first_issue==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" id="mnpa_first_issue" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_others_specify_two) && $question_4_data->q4_data->q4_others_specify_two=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="menam3Remarks3" class="form-control q4Input">
          <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->menam3Remarks3) && $question_4_data->q4_data->menam3Remarks3==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">NPA</th>
            <input type="hidden" name="type_component[]" value="7">
            <td> <select name="type_issue_q4[]" id="q4_npa_first_issue"  class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_npa_first_issue) && $question_4_data->q4_data->q4_npa_first_issue==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" value="<?= (isset($question_4_data->q4_data->npa_first_issue) && $question_4_data->q4_data->npa_first_issue) ? $question_4_data->q4_data->npa_first_issue : '' ?>" id="npa_first_issue" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_npa_first_issue) && $question_4_data->q4_data->q4_npa_first_issue=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="npa3Remarks"  class="form-control q4Input">
                 <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->npa3Remarks) && $question_4_data->q4_data->npa3Remarks==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">NRM</th>
            <input type="hidden" name="type_component[]" value="8">
            <td> <select name="type_issue_q4[]" id="q4_nrm_first_issue"  class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_nrm_first_issue) && $question_4_data->q4_data->q4_nrm_first_issue==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" value="<?= (isset($question_4_data->q4_data->nrm_first_issue) && $question_4_data->q4_data->nrm_first_issue) ? $question_4_data->q4_data->nrm_first_issue : '' ?>" id="nrm_first_issue" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_nrm_first_issue) && $question_4_data->q4_data->q4_nrm_first_issue=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="nrm_remark" class="form-control q4Input">
             
               <option value="" disabled selected>---Select Remark--</option>
              @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->nrm_remark) && $question_4_data->q4_data->nrm_remark==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">MLA</th>
            <input type="hidden" name="type_component[]" value="9">
            <td> <select name="type_issue_q4[]" id="q4_mla_first_issue"  class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_mla_first_issue) && $question_4_data->q4_data->q4_mla_first_issue==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input value="<?=(isset($question_4_data->q4_data->mla_first_issue) && $question_4_data->q4_data->mla_first_issue)? 'selected' : '' ;?>" type="input" id="mla_first_issue" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_mla_first_issue) && $question_4_data->q4_data->q4_mla_first_issue=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="mla2remarks2" class="form-control q4Input">
                 <option value="" disabled selected>---Select Remark--</option>
                 @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->mla2remarks2) && $question_4_data->q4_data->mla2remarks2==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">TIP Report</th>
            <input type="hidden" name="type_component[]" value="10">
            <td> <select name="type_issue_q4[]" id="q4_tip_report_first_issue"  class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_tip_report_first_issue) && $question_4_data->q4_data->q4_tip_report_first_issue==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" value="<?= (isset($question_4_data->q4_data->tip_report_first_issue) && !empty($question_4_data->q4_data) && $question_4_data->q4_data->tip_report_first_issue) ? $question_4_data->q4_data->tip_report_first_issue : '' ?>" id="tip_report_first_issue" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_tip_report_first_issue) && $question_4_data->q4_data->q4_tip_report_first_issue=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]"  id="tipStatus" class="form-control q4Input">
               <option value="" disabled selected>---Select Remark--</option>
               @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->tipStatus) && $question_4_data->q4_data->tipStatus==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" value="<?=(isset($question_4_data->q4_data->q4Otherspecify1)) ? $question_4_data->q4_data->q4Otherspecify1:'' ?>" id="q4Otherspecify1" name="type_component[]" class="form-control q4Input" width="100%"> </div>
            </th>
            <td> <select name="type_issue_q4[]" id="q4_others_specify_first_issue_one"  class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_others_specify_first_issue_one) && $question_4_data->q4_data->q4_others_specify_first_issue_one==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" value="<?=(isset($question_4_data->q4_data->others_specify_first_issue_one) && $question_4_data->q4_data->others_specify_first_issue_one) ? $question_4_data->q4_data->others_specify_first_issue_one : '' ;?> " id="others_specify_first_issue_one" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4Otherspecify1) && $question_4_data->q4_data->q4Otherspecify1=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="otherSpeciryremarks2" class="form-control q4Input">
                 <option value="" disabled selected>---Select Remark--</option>
                 @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->otherSpeciryremarks2) && $question_4_data->q4_data->otherSpeciryremarks2==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>

          <tr>
            <th scope="row">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" id="otherSpecify2" value="<?=(isset($question_4_data->q4_data->otherSpecify2)) ? $question_4_data->q4_data->otherSpecify2:'' ?>" name="type_component[]" class="form-control q4Input" width="100%"> </div>
            </th>
            <td> <select name="type_issue_q4[]" id="q4_others_specify_first_issue_two" class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_others_specify_first_issue_two) && $question_4_data->q4_data->q4_others_specify_first_issue_two==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" value="<?=(isset($question_4_data->q4_data->others_specify_first_issue_two) && $question_4_data->q4_data->others_specify_first_issue_two)? $question_4_data->q4_data->others_specify_first_issue_two : '' ;?>"  id="others_specify_first_issue_two"  name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->otherSpecify2) && $question_4_data->q4_data->otherSpecify2=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="otspecifyreamrk"  class="form-control q4Input">
             <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->otspecifyreamrk) && $question_4_data->q4_data->otspecifyreamrk==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>


        </tbody>


        <tbody>
          <tr>
            <th rowspan="13" scope="row">Second</th>
            <input type="hidden" name="type_component_q4[]" value="2">
            <td>Decision</td>
            <td>Issue</td>
            <td>Remark</td>
            <td rowspan="13"> </td>
          </tr>
          <tr>
            <th scope="row">Prevention</th>
            <input type="hidden" name="type_component[]" value="1">
            <td> <select name="type_issue_q4[]" id="q4_prevention_second_issue"  class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_prevention_second_issue) && $question_4_data->q4_data->q4_prevention_second_issue==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" value="<?=(isset($question_4_data->q4_data->q4_prevention_second_issue) && $question_4_data->q4_data->prevention_second_issue)? 'selected' : '' ;?>" id="prevention_second_issue" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_prevention_second_issue) && $question_4_data->q4_data->q4_prevention_second_issue=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="prev2remarks2" class="form-control q4Input">
                 <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->prev2remarks2) && $question_4_data->q4_data->prev2remarks2==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">Protection</th>
            <input type="hidden" name="type_component[]" value="2">
            <td> <select name="type_issue_q4[]" id="q4_protection_second_issue_one"  class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_protection_second_issue_one) && $question_4_data->q4_data->q4_protection_second_issue_one==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" value="<?=(isset($question_4_data->q4_data->protection_second_issue_one) && $question_4_data->q4_data->protection_second_issue_one)? $question_4_data->q4_data->protection_second_issue_one : '' ;?>" id="protection_second_issue_one" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_protection_second_issue_one) && $question_4_data->q4_data->q4_protection_second_issue_one=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="prot2remarks2"  class="form-control q4Input">
                <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->prot2remarks2) && $question_4_data->q4_data->prot2remarks2==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">Prosecution</th>
            <input type="hidden" name="type_component[]" value="3">
            <td> <select name="type_issue_q4[]" id="q4_prosecution_second_issue"  class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_prosecution_second_issue) && $question_4_data->q4_data->q4_prosecution_second_issue==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" value="<?=(isset($question_4_data->q4_data->prosecution_second_issue) && $question_4_data->q4_data->prosecution_second_issue)? 'selected' : '' ;?>" id="prosecution_second_issue" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_prosecution_second_issue) && $question_4_data->q4_data->q4_prosecution_second_issue=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]"  id="pros2remarks2" class="form-control q4Input">
                <option value=""  disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->pros2remarks2) && $question_4_data->q4_data->pros2remarks2==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">Protection</th>
            <input type="hidden" name="type_component[]" value="4">
            <td> <select name="type_issue_q4[]" id="q4_protection_second_issue_two" class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_protection_second_issue_two) && $question_4_data->q4_data->q4_protection_second_issue_two==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" value="<?=(isset($question_4_data->q4_data->protection_second_issue_two) && $question_4_data->q4_data->protection_second_issue_two) ? $question_4_data->q4_data->protection_second_issue_two : '' ;?>" id="protection_second_issue_two" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_protection_second_issue_two) && $question_4_data->q4_data->q4_protection_second_issue_two=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="pro2remrks2" class="form-control q4Input">
                <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->pro2remrks2) && $question_4_data->q4_data->pro2remrks2==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">Partnership</th>
            <input type="hidden" name="type_component[]" value="5">
            <td> <select name="type_issue_q4[]" id="q4_partnership_second_issue"  class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_partnership_second_issue) && $question_4_data->q4_data->q4_partnership_second_issue==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" value="<?=(isset($question_4_data->q4_data->partnership_second_issue) && $question_4_data->q4_data->partnership_second_issue)? $question_4_data->q4_data->partnership_second_issue : '' ;?>" id="partnership_second_issue" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_partnership_second_issue) && $question_4_data->q4_data->q4_partnership_second_issue=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="parnter2reanrks2" class="form-control q4Input">
                <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->parnter2reanrks2) && $question_4_data->q4_data->parnter2reanrks2==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">M&amp;E (NPA)</th>
            <input type="hidden" name="type_component[]" value="6">
            <td> <select name="type_issue_q4[]" id="q4_mnpa_second_issue"  class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_mnpa_second_issue) && $question_4_data->q4_data->q4_mnpa_second_issue==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" value="<?=(isset($question_4_data->q4_data->mnpa_second_issue) && $question_4_data->q4_data->mnpa_second_issue)? $question_4_data->q4_data->mnpa_second_issue : '' ;?>" id="mnpa_second_issue" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_mnpa_second_issue) && $question_4_data->q4_data->q4_mnpa_second_issue=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="me1Remarks2" class="form-control q4Input">
              <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->me1Remarks2) && $question_4_data->q4_data->me1Remarks2==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">NPA</th>
            <input type="hidden" name="type_component[]" value="7">
            <td> <select name="type_issue_q4[]" id="q4_npa_second_issue"  class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_npa_second_issue) && $question_4_data->q4_data->q4_npa_second_issue==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" value="<?=(isset($question_4_data->q4_data->npa_second_issue) && $question_4_data->q4_data->npa_second_issue)? 'selected' : '' ;?>" id="npa_second_issue" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_npa_second_issue) && $question_4_data->q4_data->q4_npa_second_issue=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="npa1Remarks2" class="form-control q4Input">
               <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->npa1Remarks2) && $question_4_data->q4_data->npa1Remarks2==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">NRM</th>
            <input type="hidden" name="type_component[]" value="8">
            <td> <select name="type_issue_q4[]" id="q4_nrm_second_issue"  class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_nrm_second_issue) && $question_4_data->q4_data->q4_nrm_second_issue==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" id="nrm_second_issue" value="<?=(isset($question_4_data->q4_data->nrm_second_issue) && $question_4_data->q4_data->nrm_second_issue)? $question_4_data->q4_data->nrm_second_issue : '' ;?>" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_nrm_second_issue) && $question_4_data->q4_data->q4_nrm_second_issue=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="nrm1remarks" class="form-control q4Input">
                 <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->nrm1remarks) && $question_4_data->q4_data->nrm1remarks==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">MLA</th>
            <input type="hidden" name="type_component[]" value="9">
            <td> <select name="type_issue_q4[]" id="q4_mla_second_issue"  class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_mla_second_issue) && $question_4_data->q4_data->q4_mla_second_issue==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" id="mla_second_issue" value="<?=(isset($question_4_data->q4_data->mla_second_issue) && $question_4_data->q4_data->mla_second_issue) ? $question_4_data->q4_data->mla_second_issue : '' ;?>" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_mla_second_issue) && $question_4_data->q4_data->q4_mla_second_issue=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="mla1Remarks1" class="form-control q4Input">
                <option value=""  disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->mla1Remarks1) && $question_4_data->q4_data->mla1Remarks1==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">TIP Report</th>
            <input type="hidden" name="type_component[]" value="10">
            <td> <select name="type_issue_q4[]" id="q4_tip_report_second_issue"  class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_tip_report_second_issue) && $question_4_data->q4_data->q4_tip_report_second_issue==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" id="tip_report_second_issue" value="<?=(isset($question_4_data->q4_data->tip_report_second_issue) && $question_4_data->q4_data->tip_report_second_issue) ? $question_4_data->q4_data->tip_report_second_issue : '' ;?>" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_tip_report_second_issue) && $question_4_data->q4_data->q4_tip_report_second_issue=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="tip1Remarks"  class="form-control q4Input">
               <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->tip1Remarks) && $question_4_data->q4_data->tip1Remarks==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" value="<?=(isset($question_4_data->q4_data->otherspecifySec1)) ? $question_4_data->q4_data->otherspecifySec1:'' ?>" id="otherspecifySec1" name="type_component[]" class="form-control q4Input" width="100%"> </div>
            </th>
            <td> <select name="type_issue_q4[]" id="q4_others_specify_second_issue_one"  class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_others_specify_second_issue_one) && $question_4_data->q4_data->q4_others_specify_second_issue_one==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" value="<?=(isset($question_4_data->q4_data->others_specify_second_issue_one) && $question_4_data->q4_data->others_specify_second_issue_one)? $question_4_data->q4_data->others_specify_second_issue_one : '' ;?>" id="others_specify_second_issue_one" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_others_specify_second_issue_one) && $question_4_data->q4_data->q4_others_specify_second_issue_one=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="otherSp2Reamrks1"  class="form-control q4Input">
                 <option value=""  disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->otherSp2Reamrks1) && $question_4_data->q4_data->otherSp2Reamrks1==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>

          <tr>
            <th scope="row">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" value="<?=(isset($question_4_data->q4_data->otherspecifySec2)) ? $question_4_data->q4_data->otherspecifySec2:'' ?>" name="type_component[]" class="form-control q4Input" id="otherspecifySec2" width="100%"> </div>
            </th>
            <td> <select name="type_issue_q4[]" id="q4_others_specify_second_issue_two"  class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_others_specify_second_issue_two) && $question_4_data->q4_data->q4_others_specify_second_issue_two==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" value="<?=(isset($question_4_data->q4_data->others_specify_second_issue_two) && $question_4_data->q4_data->others_specify_second_issue_two)? $question_4_data->q4_data->others_specify_second_issue_two : '' ;?>" id="others_specify_second_issue_two" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_others_specify_second_issue_two) && $question_4_data->q4_data->q4_others_specify_second_issue_two=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="otherSp1remarks1"  class="form-control q4Input">
                 <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->otherSp1remarks1) && $question_4_data->q4_data->otherSp1remarks1==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>


        </tbody>

        <tbody>
          <tr>
            <th rowspan="13" scope="row">Third</th>
            <input type="hidden" name="type_component_q4[]" value="3">
            <td>Decision</td>
            <td>Issue</td>
            <td>Remark</td>
            <td rowspan="13"> </td>
          </tr>
          <tr>
            <th scope="row">Prevention</th>
            <input type="hidden" name="type_component[]" value="1">
            <td> <select name="type_issue_q4[]" id="q4_prevention_third_issue" class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_prevention_third_issue) && $question_4_data->q4_data->q4_prevention_third_issue==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input value="<?=(isset($question_4_data->q4_data->prevention_third_issue) && $question_4_data->q4_data->prevention_third_issue)? $question_4_data->q4_data->prevention_third_issue : '' ;?>" type="input" id="prevention_third_issue" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_prevention_third_issue) && $question_4_data->q4_data->q4_prevention_third_issue=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="preventremarks1" class="form-control q4Input">
                 <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->preventremarks1) && $question_4_data->q4_data->preventremarks1==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">Protection</th>
            <input type="hidden" name="type_component[]" value="2">
            <td> <select name="type_issue_q4[]" id="q4_protection_third_issue_one" class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_protection_third_issue_one) && $question_4_data->q4_data->q4_protection_third_issue_one==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input value="<?= (isset($question_4_data->q4_data->protection_third_issue_one) && $question_4_data->q4_data->protection_third_issue_one) ? $question_4_data->q4_data->protection_third_issue_one :'' ?>" type="input" id="protection_third_issue_one" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_protection_third_issue_one) && $question_4_data->q4_data->q4_protection_third_issue_one=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="protectReamrks1" class="form-control q4Input">
                 <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->protectReamrks1) && $question_4_data->q4_data->protectReamrks1==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">Prosecution</th>
            <input type="hidden" name="type_component[]" value="3">
            <td> <select name="type_issue_q4[]" id="q4_prosecution_third_issue"  class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_prosecution_third_issue) && $question_4_data->q4_data->q4_prosecution_third_issue==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" value="<?=(isset($question_4_data->q4_data->prosecution_third_issue) && $question_4_data->q4_data->prosecution_third_issue)? $question_4_data->q4_data->prosecution_third_issue : '' ;?> " id="prosecution_third_issue" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_prosecution_third_issue) && $question_4_data->q4_data->q4_prosecution_third_issue=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)">  </td>
            <td> <select name="type_remark_q4[]" id="prosStatus" class="form-control q4Input">
               <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->prosStatus) && $question_4_data->q4_data->prosStatus==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">Protection</th>
            <input type="hidden" name="type_component[]" value="4">
            <td> <select name="type_issue_q4[]" id="q4_protection_third_issue_two"  class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_protection_third_issue_two) && $question_4_data->q4_data->q4_protection_third_issue_two==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" id="protection_third_issue_two" value="<?=(isset($question_4_data->q4_data->protection_third_issue_two) && $question_4_data->q4_data->protection_third_issue_two) ? $question_4_data->q4_data->protection_third_issue_two : '' ;?>" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_protection_third_issue_two) && $question_4_data->q4_data->q4_protection_third_issue_two=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="protectRemarks"  class="form-control q4Input">
                <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->protectRemarks) && $question_4_data->q4_data->protectRemarks==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">Partnership</th>
            <input type="hidden" name="type_component[]" value="5">
            <td> <select name="type_issue_q4[]" id="q4_partnership_third_issue" class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_partnership_third_issue) && $question_4_data->q4_data->q4_partnership_third_issue==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input <?=(isset($question_4_data->q4_data->partnership_third_issue) && $question_4_data->q4_data->partnership_third_issue)? $question_4_data->q4_data->partnership_third_issue : '' ;?> type="input" id="partnership_third_issue" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_partnership_third_issue) && $question_4_data->q4_data->q4_partnership_third_issue=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="partnerRemarks"  class="form-control q4Input">
             <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->partnerRemarks) && $question_4_data->q4_data->partnerRemarks==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">M&amp;E (NPA)</th>
            <input type="hidden" name="type_component[]" value="6">
            <td> <select name="type_issue_q4[]" id="q4_mnpa_third_issue" class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_mnpa_third_issue) && $question_4_data->q4_data->q4_mnpa_third_issue==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" value="<?=(isset($question_4_data->q4_data->mnpa_third_issue) && $question_4_data->q4_data->mnpa_third_issue)? $question_4_data->q4_data->mnpa_third_issue : '' ;?>" id="mnpa_third_issue" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_others_specify_two) && $question_4_data->q4_data->q4_others_specify_two=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)">  </td>
            <td> <select name="type_remark_q4[]" id="menpaStatus1" class="form-control q4Input">
                 <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->menpaStatus1) && $question_4_data->q4_data->menpaStatus1==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">NPA</th>
            <input type="hidden" name="type_component[]" value="7">
            <td> <select name="type_issue_q4[]" id="q4_npa_third_issue" class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_npa_third_issue) && $question_4_data->q4_data->q4_npa_third_issue==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input value="<?= (isset($question_4_data->q4_data->npa_third_issue) && $question_4_data->q4_data->npa_third_issue) ? $question_4_data->q4_data->npa_third_issue :'' ?>" type="input" id="npa_third_issue" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_npa_third_issue) && $question_4_data->q4_data->q4_npa_third_issue=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="npaRemarks"  class="form-control q4Input">
             <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->npaRemarks) && $question_4_data->q4_data->npaRemarks==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">NRM</th>
            <input type="hidden" name="type_component[]" value="8">
            <td> <select name="type_issue_q4[]" id="q4_nrm_third_issue" class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_nrm_third_issue) && $question_4_data->q4_data->q4_nrm_third_issue==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select> <br>
                  <input value="<?=(isset($question_4_data->q4_data->nrm_third_issue) && $question_4_data->q4_data->nrm_third_issue)? $question_4_data->q4_data->nrm_third_issue : '' ;?>"  type="input" id="nrm_third_issue" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_nrm_third_issue) && $question_4_data->q4_data->q4_nrm_third_issue=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"></td>
            <td> <select name="type_remark_q4[]" id="nrmRemarks"  class="form-control q4Input">
              <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->nrmRemarks) && $question_4_data->q4_data->nrmRemarks==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">MLA</th>
            <input type="hidden" name="type_component[]" value="9">
            <td> <select name="type_issue_q4[]" id="q4_mla_third_issue"  class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_mla_third_issue) && $question_4_data->q4_data->q4_mla_third_issue==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input value="<?=(isset($question_4_data->q4_data->mla_third_issue)) ? $question_4_data->q4_data->mla_third_issue : '' ;?>" type="input" id="mla_third_issue" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_mla_third_issue) && $question_4_data->q4_data->q4_mla_third_issue=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="mlaRemarks5"  class="form-control q4Input">
               <option value="" disabled selected>---Select Remark--</option>
                  @foreach ($remarks as  $key => $remark)             
                    <option <?=(isset($question_4_data->q4_data->mlaRemarks5) && $question_4_data->q4_data->mlaRemarks5==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
                  @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">TIP Report</th>
            <input type="hidden" name="type_component[]" value="10">
            <td> <select name="type_issue_q4[]" id="q4_tip_report_third_issue" class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_tip_report_third_issue) && $question_4_data->q4_data->q4_tip_report_third_issue==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  value="<?=(isset($question_4_data->q4_data->tip_report_third_issue) && $question_4_data->q4_data->tip_report_third_issue) ? $question_4_data->q4_data->tip_report_third_issue : '' ;?>" type="input" id="tip_report_third_issue" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_tip_report_third_issue) && $question_4_data->q4_data->q4_tip_report_third_issue=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="tipRemarks5" class="form-control q4Input">
               <option value="" disabled selected>---Select Remark--</option>
               @foreach ($remarks as  $key => $remark)             
                    <option <?=(isset($question_4_data->q4_data->tipRemarks5) && $question_4_data->q4_data->tipRemarks5==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
                  @endforeach
              </select> </td>
          </tr>
          <tr>
            <th scope="row">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" value="<?=(isset($question_4_data->q4_data->otherSpcify11)) ? $question_4_data->q4_data->otherSpcify11:'' ?>" id="otherSpcify11" name="type_component[]" class="form-control q4Input" width="100%"> </div>
            </th>
            <td> <select name="type_issue_q4[]" id="q4_others_specify_third_issue_one" class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_others_specify_third_issue_one) && $question_4_data->q4_data->q4_others_specify_third_issue_one==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input value="<?=(isset($question_4_data->q4_data->others_specify_third_issue_one))? $question_4_data->q4_data->others_specify_third_issue_one : '' ;?>"  type="input" id="others_specify_third_issue_one" name="type_component_others_specify_q4[]" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_others_specify_third_issue_one) && $question_4_data->q4_data->q4_others_specify_third_issue_one=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="otherSpecify51"  class="form-control q4Input">
               <option value="" disabled selected>---Select Remark--</option>
               @foreach ($remarks as  $key => $remark)             
                    <option <?=(isset($question_4_data->q4_data->otherSpecify51) && $question_4_data->q4_data->otherSpecify51==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
                  @endforeach
              </select> </td>
          </tr>

          <tr>
            <th scope="row">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" id="otherSpecify12" value="<?=(isset($question_4_data->q4_data->otherSpecify12)) ? $question_4_data->q4_data->otherSpecify12:'' ?>" name="type_component[]" class="form-control q4Input" width="100%"> </div>
            </th>
            <td> <select name="type_issue_q4[]" id="q4_others_specify_third_issue_two" class="form-control q4Input">
              <option value="" disabled selected>---Select Issue--</option>
              @foreach ($issues as  $key => $issue)             
                <option <?=(isset($question_4_data->q4_data->q4_others_specify_third_issue_two) && $question_4_data->q4_data->q4_others_specify_third_issue_two==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$issue}}</option>           
              @endforeach
              </select><br>
                  <input  type="input" id="others_specify_third_issue_two" name="type_component_others_specify_q4[]" value="<?= (isset($question_4_data->q4_data->others_specify_third_issue_two) && $question_4_data->q4_data->others_specify_third_issue_two) ? $question_4_data->q4_data->others_specify_third_issue_two :'' ?>" class="form-control q4Input <?= (isset($question_4_data->q4_data->q4_others_specify_third_issue_two) && $question_4_data->q4_data->q4_others_specify_third_issue_two=='14') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)"> </td>
            <td> <select name="type_remark_q4[]" id="otherspcfy4remarks" class="form-control q4Input">
              <option value="" disabled selected>---Select Remark--</option>
            @foreach ($remarks as  $key => $remark)             
                <option <?=(isset($question_4_data->q4_data->otherspcfy4remarks) && $question_4_data->q4_data->otherspcfy4remarks==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$remark}}</option>           
              @endforeach
              </select> </td>
          </tr>
        </tbody>
      </table>
      <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question4">Save</button>       
        </p>
    </div>
  
  </div>
</div> 
@endif

<?php }
  ?>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>

<script>
  $(function(){
    $(".fourstatus").on("click",function(){
            var statusvalue = $("input[name='is_national_authority_q4']:checked").val();
            if(statusvalue == '1'){
              $('#National_Authority').show()
            }
            else{
              $('#National_Authority').hide()
            }
        });
  })
</script>
<!-- question no 4 end -->

<script>

$(function(){
  $(document).on("click",'#temp-save-question4',function() {
    let yes_no_value=$("input[type='radio'][name='is_national_authority_q4']:checked").val()
    var q4_data={}
    if(yes_no_value==1){
      $('.q4Input').each(function() {
        Object.assign(q4_data,{[$(this).attr('id')]:$(this).val()}) 
      });
    }
     let new_data={
        q4_data:q4_data,
        q4_checked_value:yes_no_value,
      }  
      // console.log(new_data)
    $.ajax({    //create an ajax request to display.php
            type: "POST",
            data:{
              "_token": "{{ csrf_token() }}",
              'question4':new_data,
              'question_no':'4',
            },
            url: "/superadmin/case/temp-save-question",             
            success: function(response){ 
              alert("Question four has been saved temporary")
            }
    });
  }); 
}); 

</script>