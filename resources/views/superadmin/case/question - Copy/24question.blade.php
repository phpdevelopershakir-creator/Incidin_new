<?php
if($questiontitles[23]->status==0)
{

  ?>
@if(Auth::user()->can('24.question'))
<?php
$q24_status=[
  1=>"Enforced",
  2=>"Updated and enforced",
  3=>"Stricter enforcement",
  4=>"Increased efforts",
  5=>"Moderate Effortt",
  6=>"Less Effort",
  7=>"Poor Enforcement",
  8=>"Under Review",
  9=>"Other (Specify)"
];
?>
<style>
  .othersText{
    display:none
  }
  .visibility{
    display:none
  }
</style>
<div class="col-md-12 question24">
    <div class="card card-outline collapsed-card">
      <div class="card-header">
        <h3 class="card-title">
           <span class="numbering">24</span>.
           @if (isset($questiontitles [23]))
         {{ $questiontitles[23]->title }}

         @endif

        </h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="icheck-primary">
          <?php if(isset($question_24_data->q24_checked_value)) {?>
            <input 
            type="radio" 
            id="q24radioPrimary1" 
            class="twenty_four_status" 
            name="victim_protected_services_q24" 
            <?=(isset($question_24_data->q24_checked_value) && $question_24_data->q24_checked_value=="1")?"checked":"" ;?> 
 
            value="1">
            <?php }else {?>
            <input type="radio" id="q24radioPrimary1" class="twenty_four_status" name="victim_protected_services_q24" checked value="1">
            <?php }?>
            <label for="q24radioPrimary1">
              Yes
            </label>
        </div>
        <div class="icheck-primary">
            <input 
            type="radio" 
            id="q24radioPrimary2" 
            class="twenty_four_status" 
            name="victim_protected_services_q24" 
            <?=(isset($question_24_data->q24_checked_value) && $question_24_data->q24_checked_value=="0")?"checked":"" ;?> 

            value="0">
            <label for="q24radioPrimary2">
              No
            </label>
        </div>

        <div class="icheck-primary input-group mb-3">
            <input 
            type="radio" 
            id="q24radioPrimary3" 
            class="twenty_four_status" 
            name="victim_protected_services_q24"  
            <?=(isset($question_24_data->q24_checked_value) && $question_24_data->q24_checked_value=="2")?"checked":"" ;?> 

            value="2">
            <label for="q24radioPrimary3">
              Others
            </label><span class=" col-md-6 mt--4 <?=(isset($question_24_data->q24_checked_value) && $question_24_data->q24_checked_value=="2")?"":"othersText" ;?>" style="margin-top:-8px;">
            <input 
            type="text" 
            id="q24others"  
            placeholder="Others "  
            class="form-control" 
            value="<?=(isset($question_24_data->others) && $question_24_data->others)?$question_24_data->others:"";?>"

            name="victim_referral_protected_services_others_q24"></span>
        </div>
        <div id ="24_question_view" class="<?=(isset($question_24_data->q24_checked_value)) && ($question_24_data->q24_checked_value=="2" || $question_24_data->q24_checked_value=="0" )?"visibility":"" ;?>">
          <table class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th rowspan="2" style="text-align: center; vertical-align: middle;">Title of Origin Guidelines</th>
                <th rowspan="2">Description of change/Status</th>
                <th colspan="6">VoT referred</th>

              </tr>
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>Boys</th>
                <th>Girls</th>
                <th>3rd Gender</th>
                <th>Total</th>
              </tr>
              <tr>
                <td>Referral desk established at women and <br /> Child Repression Prevention Tribunals,
                  <br />Anti-Trafficking Tribunals, and District tribunals
                </td>
                <input type="hidden" name="q24_title_origin_guidelines[]" value="1">
                <td><select name="q24_description_change_status[]" id="q24_referral_desk_established" class="form-control q24Input">
                <!-- @include('superadmin.case.helper.options')  -->
                <option value="" disabled selected>---Choose an item--</option>
                  
                @foreach($q24_status as $key=>$item)
                    <option <?=(isset($question_24_data->q24_data) &&  !empty($question_24_data->q24_data) && $question_24_data->q24_data->q24_referral_desk_established==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                  @endforeach

                  </select> <br>
                  <input  
                  type="input" 
                  id="referral_desk_established" 
                  name="q24_others_specify[]" 
                  class="form-control q24Input <?=(isset($question_24_data->q24_data->q24_referral_desk_established) && $question_24_data->q24_data->q24_referral_desk_established==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_24_data->q24_data->referral_desk_established))?$question_24_data->q24_data->referral_desk_established:"";?>"
                  
                  placeholder="Other (Specify)"></td>
                <td><input type="number" name="men_q24[]" id="q24Men1" value="<?=(isset($question_24_data->q24_data->q24Men1))?$question_24_data->q24_data->q24Men1:"";?>" class="form-control question24RowMen question24Col1 q24Input"></td>
                <td><input type="number" name="women_q24[]" id="q24Women1" value="<?=(isset($question_24_data->q24_data->q24Women1))?$question_24_data->q24_data->q24Women1:"";?>"  class="form-control question24RowWomen question24Col1 q24Input"></td>
                <td><input type="number" name="boy_q24[]" id="q24Boy1" value="<?=(isset($question_24_data->q24_data->q24Boy1))?$question_24_data->q24_data->q24Boy1:"";?>"  class="form-control question24RowBoys question24Col1 q24Input"></td>
                <td><input type="number" name="girl_q24[]" id="q24Girl1" value="<?=(isset($question_24_data->q24_data->q24Girl1))?$question_24_data->q24_data->q24Girl1:"";?>" class="form-control  question24RowGirls question24Col1 q24Input"></td>
                <td><input type="number" name="third_gender_q24[]" id="q243rdG1" value="<?=(isset($question_24_data->q24_data->q243rdG1))?$question_24_data->q24_data->q243rdG1:"";?>" class="form-control question24Row3rdGender question24Col1 q24Input"></td>
                <td><input type="text" name="total_q24[]"  id="question24Col1" value="<?=(isset($question_24_data->q24_data->question24Col1))?$question_24_data->q24_data->question24Col1:"";?>"  class="form-control q24Total q24Input" readonly="true"></td>

              </tr>
              <tr>
                <td>National Referral Mechanism Guideline</td>
                <input type="hidden" name="q24_title_origin_guidelines[]" value="2">
                <td><select name="q24_description_change_status[]" id="q24_national_referral_mechanism"  class="form-control q24Input q24Input">
                <!-- @include('superadmin.case.helper.options') -->
                <option value="" disabled selected>---Choose an item--</option>
                  
                @foreach($q24_status as $key=>$item)
                    <option <?=(isset($question_24_data->q24_data) &&  !empty($question_24_data->q24_data) && $question_24_data->q24_data->q24_national_referral_mechanism==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                  @endforeach
                  </select><br>
                  <input  
                  type="input" 
                  id="national_referral_mechanism" 
                  name="q24_others_specify[]" 
                  class="form-control q24Input <?=(isset($question_24_data->q24_data->q24_national_referral_mechanism) && $question_24_data->q24_data->q24_national_referral_mechanism==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_24_data->q24_data->national_referral_mechanism))?$question_24_data->q24_data->national_referral_mechanism:"";?>"
                  
                  placeholder="Other (Specify)"> </td>
                <td><input type="number" name="men_q24[]" id="q24Men2" value="<?=(isset($question_24_data->q24_data->q24Men2))?$question_24_data->q24_data->q24Men2:"";?>"  class="form-control question24RowMen question24Col2 q24Input q24Input"></td>
                <td><input type="number" name="women_q24[]" id="q24Women2" value="<?=(isset($question_24_data->q24_data->q24Women2))?$question_24_data->q24_data->q24Women2:"";?>"  class="form-control question24RowWomen question24Col2 q24Input q24Input"></td>
                <td><input type="number" name="boy_q24[]" id="q24Boy2" value="<?=(isset($question_24_data->q24_data->q24Boy2))?$question_24_data->q24_data->q24Boy2:"";?>"  class="form-control question24RowBoys question24Col2 q24Input q24Input"></td>
                <td><input type="number" name="girl_q24[]" id="q24Girl2" value="<?=(isset($question_24_data->q24_data->q24Girl2))?$question_24_data->q24_data->q24Girl2:"";?>"  class="form-control question24RowGirls question24Col2 q24Input q24Input"></td>
                <td><input type="number" name="third_gender_q24[]" id="q243rdG2" value="<?=(isset($question_24_data->q24_data->q243rdG2))?$question_24_data->q24_data->q243rdG2:"";?>"  class="form-control question24Row3rdGender question24Col2 q24Input q24Input"></td>
                <td><input type="text" name="total_q24[]"  id="question24Col2" value="<?=(isset($question_24_data->q24_data->question24Col2))?$question_24_data->q24_data->question24Col2:"";?>"  class="form-control q30Total q24Input q24Input" readonly="true"></td>
              </tr>

              <tr>

                <td>National Referral Mechanism SOP</td>
                
                <input type="hidden" name="q24_title_origin_guidelines[]" value="3">
                <td>
                  <select name="q24_description_change_status[]" id="q24_national_referral_sop"  class="form-control q24Input">
                  <!-- @include('superadmin.case.helper.options') -->
                  <option value="" disabled selected>---Choose an item--</option>
                  
                  @foreach($q24_status as $key=>$item)
                    <option <?=(isset($question_24_data->q24_data) &&  !empty($question_24_data->q24_data) && $question_24_data->q24_data->q24_national_referral_sop==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                  @endforeach
                  </select>
                  <br>
                  <input  
                  type="input" 
                  id="national_referral_sop" 
                  name="q24_others_specify[]" 
                  class="form-control q24Input <?=(isset($question_24_data->q24_data->q24_national_referral_sop) && $question_24_data->q24_data->q24_national_referral_sop==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_24_data->q24_data->national_referral_sop))?$question_24_data->q24_data->national_referral_sop:"";?>"
                  
                  placeholder="Other (Specify)">
                 </td>
                <td><input type="number" name="men_q24[]" id="q24Men3" value="<?=(isset($question_24_data->q24_data->q24Men3))?$question_24_data->q24_data->q24Men3:"";?>"  class="form-control  question24RowMen question24Col3 q24Input"></td>
                <td><input type="number" name="women_q24[]" id="q24Women3" value="<?=(isset($question_24_data->q24_data->q24Women3))?$question_24_data->q24_data->q24Women3:"";?>"  class="form-control question24RowWomen question24Col3 q24Input"></td>
                <td><input type="number" name="boy_q24[]" id="q24Boy3" value="<?=(isset($question_24_data->q24_data->q24Boy3))?$question_24_data->q24_data->q24Boy3:"";?>"  class="form-control question24RowBoys question24Col3 q24Input"></td>
                <td><input type="number" name="girl_q24[]" id="q24Girl3" value="<?=(isset($question_24_data->q24_data->q24Girl3))?$question_24_data->q24_data->q24Girl3:"";?>"  class="form-control question24RowGirls question24Col3 q24Input"></td>
                <td><input type="number" name="third_gender_q24[]" id="q243rdG3" value="<?=(isset($question_24_data->q24_data->q243rdG3))?$question_24_data->q24_data->q243rdG3:"";?>"  class="form-control question24Row3rdGender question24Col3 q24Input"></td>
                <td><input type="text" name="total_q24[]" id="question24Col3" value="<?=(isset($question_24_data->q24_data->question24Col3))?$question_24_data->q24_data->question24Col3:"";?>" class="form-control q24Total q24Input" readonly="true"></td>
              </tr>

              <tr>

                <td>Digital Referral Mechanism of MoHA</td>
                <input type="hidden" name="q24_title_origin_guidelines[]" value="4">
                <td><select name="q24_description_change_status[]" id="q24_digital_referral_moha" class="form-control q24Input q24Input">
                <!-- @include('superadmin.case.helper.options') -->
                <option value="" disabled selected>---Choose an item--</option>
                  
                @foreach($q24_status as $key=>$item)
                    <option <?=(isset($question_24_data->q24_data) &&  !empty($question_24_data->q24_data) && $question_24_data->q24_data->q24_digital_referral_moha==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                  @endforeach
                </select><br>
                  <input  
                  type="input" 
                  id="digital_referral_moha" 
                  name="q24_others_specify[]" 
                  class="form-control q24Input <?=(isset($question_24_data->q24_data->q24_digital_referral_moha) && $question_24_data->q24_data->q24_digital_referral_moha==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_24_data->q24_data->digital_referral_moha))?$question_24_data->q24_data->digital_referral_moha:"";?>"
                  
                  placeholder="Other (Specify)"> </td>
                <td><input type="number" name="men_q24[]" id="q24Men4" value="<?=(isset($question_24_data->q24_data->q24Men4))?$question_24_data->q24_data->q24Men4:"";?>"  class="form-control question24RowMen question24Col4 q24Input q24Input"></td>
                <td><input type="number" name="women_q24[]" id="q24Women4" value="<?=(isset($question_24_data->q24_data->q24Women4))?$question_24_data->q24_data->q24Women4:"";?>"  class="form-control question24RowWomen question24Col4 q24Input q24Input"></td>
                <td><input type="number" name="boy_q24[]" id="q24Boy4" value="<?=(isset($question_24_data->q24_data->q24Boy4))?$question_24_data->q24_data->q24Boy4:"";?>"  class="form-control  question24RowBoys question24Col4 q24Input q24Input"></td>
                <td><input type="number" name="girl_q24[]" id="q24Girl4" value="<?=(isset($question_24_data->q24_data->q24Girl4))?$question_24_data->q24_data->q24Girl4:"";?>"  class="form-control question24RowGirls question24Col4 q24Input q24Input"></td>
                <td><input type="number" name="third_gender_q24[]" id="q243rdG4" value="<?=(isset($question_24_data->q24_data->q243rdG4))?$question_24_data->q24_data->q243rdG4:"";?>"  class="form-control question24Row3rdGender question24Col4 q24Input q24Input"></td>
                <td><input type="text" name="total_q24[]" id="question24Col4" value="<?=(isset($question_24_data->q24_data->question24Col4))?$question_24_data->q24_data->question24Col4:"";?>"   class="form-control q24Total q24Input q24Input" readonly="true"></td>
              </tr>


              <tr>

                <td>
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="q24_title_origin_guidelines[]" id="q24Other1" value="<?=(isset($question_24_data->q24_data->q24Other1))?$question_24_data->q24_data->q24Other1:"";?>"  class="form-control q24Input" width="100%"> </div>

                </td>
                <td><select name="q24_description_change_status[]" id="q24_others_specify_one" class="form-control q24Input">
                <!-- @include('superadmin.case.helper.options') -->
                <option value="" disabled selected>---Choose an item--</option>
                  
                @foreach($q24_status as $key=>$item)
                    <option <?=(isset($question_24_data->q24_data) &&  !empty($question_24_data->q24_data) && $question_24_data->q24_data->q24_others_specify_one==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                  @endforeach
                </select><br>
                  <input  
                  type="input" 
                  id="others_specify_one" 
                  name="q24_others_specify[]" 
                  class="form-control q24Input <?=(isset($question_24_data->q24_data->q24_others_specify_one) && $question_24_data->q24_data->q24_others_specify_one==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_24_data->q24_data->others_specify_one))?$question_24_data->q24_data->others_specify_one:"";?>"
                  
                  placeholder="Other (Specify)"> </td>
                <td><input type="number" name="men_q24[]" id="q24Men5" value="<?=(isset($question_24_data->q24_data->q24Men5))?$question_24_data->q24_data->q24Men5:"";?>"  class="form-control question24RowMen question24Col5 q24Input"></td>
                <td><input type="number" name="women_q24[]" id="q24Women5" value="<?=(isset($question_24_data->q24_data->q24Women5))?$question_24_data->q24_data->q24Women5:"";?>"  class="form-control question24RowWomen question24Col5 q24Input"></td>
                <td><input type="number" name="boy_q24[]" id="q24Boy5" value="<?=(isset($question_24_data->q24_data->q24Boy5))?$question_24_data->q24_data->q24Boy5:"";?>"  class="form-control question24RowBoys question24Col5 q24Input"></td>
                <td><input type="number" name="girl_q24[]" id="q24Girl5" value="<?=(isset($question_24_data->q24_data->q24Girl5))?$question_24_data->q24_data->q24Girl5:"";?>"  class="form-control question24RowGirls question24Col5 q24Input"></td>
                <td><input type="number" name="third_gender_q24[]" id="q243rdG5" value="<?=(isset($question_24_data->q24_data->q243rdG5))?$question_24_data->q24_data->q243rdG5:"";?>"  class="form-control question24Row3rdGender question24Col5 q24Input"></td>
                <td><input type="text" name="total_q24[]" id="question24Col5" value="<?=(isset($question_24_data->q24_data->question24Col5))?$question_24_data->q24_data->question24Col5:"";?>"  class="form-control q24Total q24Input" readonly="true"> </td>
              </tr>


              <tr>

                <td>
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="q24_title_origin_guidelines[]" id="q24Other2" value="<?=(isset($question_24_data->q24_data->q24Other2))?$question_24_data->q24_data->q24Other2:"";?>" class="form-control q24Input" width="100%"> </div>

                </td>
                <td><select name="q24_description_change_status[]" id="q24_others_specify_two" class="form-control q24Input">
                <!-- @include('superadmin.case.helper.options') -->
                <option value="" disabled selected>---Choose an item--</option>
                  
                @foreach($q24_status as $key=>$item)
                    <option <?=(isset($question_24_data->q24_data) &&  !empty($question_24_data->q24_data) && $question_24_data->q24_data->q24_others_specify_two==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                  @endforeach
                  </select><br>
                  <input  
                  type="input" 
                  id="others_specify_two" 
                  name="q24_others_specify[]" 
                  class="form-control q24Input <?=(isset($question_24_data->q24_data->q24_others_specify_two) && $question_24_data->q24_data->q24_others_specify_two==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_24_data->q24_data->others_specify_two))?$question_24_data->q24_data->others_specify_two:"";?>"
                  
                  placeholder="Other (Specify)"> </td>
                <td><input type="number" name="men_q24[]" id="q24Men6" value="<?=(isset($question_24_data->q24_data->q24Men6))?$question_24_data->q24_data->q24Men6:"";?>"  class="form-control question24RowMen question24Col6 q24Input"></td>
                <td><input type="number" name="women_q24[]" id="q24Women6" value="<?=(isset($question_24_data->q24_data->q24Women6))?$question_24_data->q24_data->q24Women6:"";?>"  class="form-control question24RowWomen question24Col6 q24Input"></td>
                <td><input type="number" name="boy_q24[]" id="q24Boy6" value="<?=(isset($question_24_data->q24_data->q24Boy6))?$question_24_data->q24_data->q24Boy6:"";?>"  class="form-control question24RowBoys question24Col6 q24Input"></td>
                <td><input type="number" name="girl_q24[]" id="q24Girl6" value="<?=(isset($question_24_data->q24_data->q24Girl6))?$question_24_data->q24_data->q24Girl6:"";?>"  class="form-control question24RowGirls question24Col6 q24Input"></td>
                <td><input type="number" name="third_gender_q24[]" id="q243rdG6" value="<?=(isset($question_24_data->q24_data->q243rdG6))?$question_24_data->q24_data->q243rdG6:"";?>"  class="form-control question24Row3rdGender question24Col6 q24Input"></td>
                <td><input type="text" name="total_q24[]" id="question24Col6" value="<?=(isset($question_24_data->q24_data->question24Col6))?$question_24_data->q24_data->question24Col6:"";?>"  class="form-control q24Total q24Input" readonly="true"></td>
              </tr>

              <tr>

                <td>
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="q24_title_origin_guidelines[]" id="q24Other3" value="<?=(isset($question_24_data->q24_data->q24Other3))?$question_24_data->q24_data->q24Other3:"";?>" class="form-control q24Input" width="100%"> </div>

                </td>
                <td><select name="q24_description_change_status[]" id="q24_others_specify_three" class="form-control q24Input">
                <!-- @include('superadmin.case.helper.options') -->
                <option value="" disabled selected>---Choose an item--</option>
                  
                @foreach($q24_status as $key=>$item)
                    <option <?=(isset($question_24_data->q24_data) &&  !empty($question_24_data->q24_data) && $question_24_data->q24_data->q24_others_specify_three==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                  @endforeach
                </select><br>
                  <input  
                  type="input" 
                  id="others_specify_three" 
                  name="q24_others_specify[]" 
                  class="form-control q24Input <?=(isset($question_24_data->q24_data->q24_others_specify_three) && $question_24_data->q24_data->q24_others_specify_three==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_24_data->q24_data->others_specify_three))?$question_24_data->q24_data->others_specify_three:"";?>"
                  
                  placeholder="Other (Specify)"> </td>
                <td><input type="number" name="men_q24[]" id="q24Men7" value="<?=(isset($question_24_data->q24_data->q24Men7))?$question_24_data->q24_data->q24Men7:"";?>"  class="form-control question24RowMen question24Col7 q24Input"></td>
                <td><input type="number" name="women_q24[]" id="q24Women7" value="<?=(isset($question_24_data->q24_data->q24Women7))?$question_24_data->q24_data->q24Women7:"";?>"  class="form-control question24RowWomen question24Col7 q24Input"></td>
                <td><input type="number" name="boy_q24[]" id="q24Boy7" value="<?=(isset($question_24_data->q24_data->q24Boy7))?$question_24_data->q24_data->q24Boy7:"";?>"  class="form-control question24RowBoys question24Col7 q24Input"></td>
                <td><input type="number" name="girl_q24[]" id="q24Girl7" value="<?=(isset($question_24_data->q24_data->q24Girl7))?$question_24_data->q24_data->q24Girl7:"";?>"  class="form-control question24RowGirls question24Col7 q24Input"></td>
                <td><input type="number" name="third_gender_q24[]" id="q243rdG7" value="<?=(isset($question_24_data->q24_data->q243rdG7))?$question_24_data->q24_data->q243rdG7:"";?>"  class="form-control question24Row3rdGender question24Col7 q24Input"></td>
                <td><input type="text" name="total_q24[]" id="question24Col7" value="<?=(isset($question_24_data->q24_data->question24Col7))?$question_24_data->q24_data->question24Col7:"";?>" class="form-control q24Total q24Input" readonly="true"></td>
              </tr>
              <tr>

                <td colspan="2">Total</td>
                <td><input type="number"  id="q24MenTotal" value="<?=(isset($question_24_data->q24_data->q24MenTotal))?$question_24_data->q24_data->q24MenTotal:"";?>"  class="form-control q24gTotal q24Input" readonly="true"></td>
                <td><input type="number"  id="q24WomenTotal" value="<?=(isset($question_24_data->q24_data->q24WomenTotal))?$question_24_data->q24_data->q24WomenTotal:"";?>"  class="form-control q24gTotal q24Input" readonly="true"></td>
                <td><input type="number"   id="q24BoysTotal" value="<?=(isset($question_24_data->q24_data->q24BoysTotal))?$question_24_data->q24_data->q24BoysTotal:"";?>" class="form-control q24gTotal q24Input" readonly="true"></td>
                <td><input type="number"  id="q24GirlsTotal" value="<?=(isset($question_24_data->q24_data->q24GirlsTotal))?$question_24_data->q24_data->q24GirlsTotal:"";?>"  class="form-control q24gTotal q24Input" readonly="true"></td>
                <td><input type="number"   id="q24TrdGTotal" value="<?=(isset($question_24_data->q24_data->q24TrdGTotal))?$question_24_data->q24_data->q24TrdGTotal:"";?>"  class="form-control q24gTotal q24Input" readonly="true"></td>
                <td><input type="text"  id="q24gTotal" value="<?=(isset($question_24_data->q24_data->q24gTotal))?$question_24_data->q24_data->q24gTotal:"";?>" class="form-control q24Input" readonly="true"></td>
              </tr>
            </thead>


          </table>
        </div>
        <br/>
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question24">Save</button>       
        </p>
      </div>
    </div>
  </div>
  @endif

<?php }
  ?>
<script>
   $(document).ready(function(){
        $(".twenty_four_status").on("click",function(){
          // alert($("input[class*='twenty_four_status']:checked").val()) // using attr (class name)
          // $("input[name='victim_protected_services_q24']:checked").val() // using attr (name) 
            var statusvalue = $("input[class='twenty_four_status']:checked").val();
            // alert(statusvalue)
            $('.question24').find('.othersText').hide()
            $('.question24').find('#q24others').val("")
            if(statusvalue == '1'){
              $('.question24').find('#24_question_view').show()
              $('.question24').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question24').find('#24_question_view').hide()
              $('.question24').find('span').removeClass('othersText')
              $('.question24').find('span').show()
            }else{
              $('.question24').find('#24_question_view').hide()
              $('.question24').find('span').addClass('othersText')

            }
        });

$(document).on("click",'#temp-save-question24',function() {


    let yes_no_value=$("input[type='radio'][name='victim_protected_services_q24']:checked").val()

    var q24_data={
      
    }
    if(yes_no_value=="1"){
      $('.q24Input').each(function() {
        Object.assign(q24_data,{[$(this).attr('id')]:$(this).val()})   
      });

    }
    var new_data={
      q24_data:q24_data,
      q24_checked_value:yes_no_value,
      others:$("input[name='victim_referral_protected_services_others_q24']").val()

    }

  // console.log(new_data)
  $.ajax({    //create an ajax request to display.php
          type: "POST",
          data:{
            "_token": "{{ csrf_token() }}",
          'question24':new_data,
          'question_no':'24'
        },
        url: "/superadmin/case/temp-save-question40to60",             
        success: function(response){ 
          if(response){
            alert("Question 24 has been saved temporary")

          }else{
            alert("Not Saved")
          }
        }
});
});
    });
</script>