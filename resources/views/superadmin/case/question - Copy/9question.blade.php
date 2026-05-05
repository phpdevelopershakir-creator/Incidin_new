<?php
if($questiontitles[8]->status==0)
{

  ?>
@if(Auth::user()->can('9.question'))
<style>
  .othersText{
    display:none
  }
  .visibility{
    display:none
  }
</style>
<div class="col-md-12 question9">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
        <span class="numbering">9</span>.
           @if (isset($questiontitles [8]))
         {{ $questiontitles[8]->title }}

         @endif

      </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
          <div class="icheck-primary">
            <?php if(isset($question_9_data->q9_checked_value)) { ?>

            <input 
            type="radio" 
            id="radioPrimary1" 
            class="nine_status" 
            name="is_awareness_activities_q9" 
            <?=(isset($question_9_data->q9_checked_value) && $question_9_data->q9_checked_value=="1")?"checked":"" ;?>   
  
            value="1">
            <?php }else { ?>
            
            <input type="radio" id="radioPrimary1" class="nine_status" name="is_awareness_activities_q9" checked  value="1">
            <?php } ?>    
            
            <label for="radioPrimary1">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input 
            type="radio" 
            id="radioPrimary2"  
            class="nine_status" 
            name="is_awareness_activities_q9"  
            <?=(isset($question_9_data->q9_checked_value) && $question_9_data->q9_checked_value=="0")?"checked":"" ;?>   
            value="0">
            <label for="radioPrimary2">
              No
            </label>
          </div>
          <div class="icheck-primary input-group mb-3">
            <input 
            type="radio" 
            id="radioPrimary3" 
            class="nine_status" 
            name="is_awareness_activities_q9"  
            <?=(isset($question_9_data->q9_checked_value) && $question_9_data->q9_checked_value=="2")?"checked":"" ;?>   
            value="2">
            <label for="radioPrimary3">
              Others &nbsp            
            </label> <span class=" col-md-6 mt--4 <?=(isset($question_9_data->q9_checked_value) && $question_9_data->q9_checked_value=="2")? "" :"othersText" ;?>">
            <input 
            type="text" 
            value="<?=(isset($question_9_data->others) && $question_9_data->others) ? $question_9_data->others:'' ?>" 
            id="q9others"   
            placeholder="Others"  
            class="form-control" 
            name="awareness_activities_others_q9"></span>
          </div>

          <div id ="9_question_view" class="<?=(isset($question_9_data->q9_checked_value) &&($question_9_data->q9_checked_value=="2" || $question_9_data->q9_checked_value=="0"))?"visibility":"" ;?>">
      <table class="table table-bordered table-white">
        <thead>
          <tr>
            <th rowspan="2" scope="col">Types of Activities</th>
            <th colspan="6">Community (number covered)s</th>

            <!-- <th colspan="3">Total (number covered)</th> -->
            <th scope="col">Location</th>
          </tr>

          <tr>
            <th scope="col">M </th>
            <th scope="col">W</th>
            <th scope="col">3rd  Gender</th>
            <th scope="col">B</th>
            <th scope="col">G</th>
            <th scope="col">T</th>
            <th></th>
           
          </tr>
          <tr>
            <th scope="col">Courtyard meeting </th>
            <input type="hidden" name="type_activities[]" value="1">
            <th scope="col"><input name="type_activities_men[]" type="text" id="q9Men1" value="<?=(isset($question_9_data->q9_data->q9Men1)) ? $question_9_data->q9_data->q9Men1:'' ?>" class="form-control q9Input question9RowMen question9Col1"></th>
            <th scope="col"><input name="type_activities_women[]" type="text" id="q9Women1" value="<?=(isset($question_9_data->q9_data->q9Women1)) ? $question_9_data->q9_data->q9Women1:'' ?>" class="form-control q9Input question9RowWomen question9Col1"></th>
            <th scope="col"><input name="type_activities_third_gender[]" type="text" id="q93rdG1" value="<?=(isset($question_9_data->q9_data->q93rdG1)) ? $question_9_data->q9_data->q93rdG1:'' ?>" class="form-control q9Input question9Row3rdGender question9Col1"></th>
            <th scope="col"><input name="type_activities_boy[]" type="text" id="q9Boy1" value="<?=(isset($question_9_data->q9_data->q9Boy1)) ? $question_9_data->q9_data->q9Boy1:'' ?>" class="form-control q9Input question9RowBoys question9Col1"></th>
            <th scope="col"><input  name="type_activities_girl[]" type="text" id="q9Girl1" value="<?=(isset($question_9_data->q9_data->q9Girl1)) ? $question_9_data->q9_data->q9Girl1:'' ?>" class="form-control q9Input  question9RowGirls question9Col1 "></th>
            <th scope="col"><input name="type_activities_total[]" type="text" id="question9Col1" value="<?=(isset($question_9_data->q9_data->question9Col1)) ? $question_9_data->q9_data->question9Col1:'' ?>"  class="form-control q9Input q9Total" readonly="true"></th>
  
            <th scope="col">
              <select name="location_id0[]" id="" class="form-control q9Input multiSelect" multiple="multiple">
              @include('superadmin.case.helper.location')
              </select>
            </th>
          </tr>
          <tr>
            <th scope="col">Bazar/hatt meeting</th>
            <input type="hidden" name="type_activities[]" value="2">
            <th scope="col"><input name="type_activities_men[]" type="text" id="q9Men2" value="<?=(isset($question_9_data->q9_data->q9Men2)) ? $question_9_data->q9_data->q9Men2:'' ?>" class="form-control q9Input question9RowMen question9Col2"></th>
            <th scope="col"><input name="type_activities_women[]" type="text" id="q9Women2" value="<?=(isset($question_9_data->q9_data->q9Women2)) ? $question_9_data->q9_data->q9Women2:'' ?>" class="form-control q9Input question9RowWomen question9Col2"></th>
            <th scope="col"><input name="type_activities_third_gender[]" type="text" id="q93rdG2" value="<?=(isset($question_9_data->q9_data->q93rdG2)) ? $question_9_data->q9_data->q93rdG2:'' ?>" class="form-control q9Input question9Row3rdGender question9Col2"></th>
            <th scope="col"><input name="type_activities_boy[]" type="text" id="q9Boy2" value="<?=(isset($question_9_data->q9_data->q9Boy2)) ? $question_9_data->q9_data->q9Boy2:'' ?>" class="form-control q9Input question9RowBoys question9Col2"></th>
            <th scope="col"><input name="type_activities_girl[]" type="text" id="q9Girl2" value="<?=(isset($question_9_data->q9_data->q9Girl2)) ? $question_9_data->q9_data->q9Girl2:'' ?>" class="form-control q9Input question9RowGirls question9Col2"></th>
            <th scope="col"><input name="type_activities_total[]" type="text" id="question9Col2"  value="<?=(isset($question_9_data->q9_data->question9Col2)) ? $question_9_data->q9_data->question9Col2:'' ?>"  class="form-control q9Input q9Total" readonly="true"></th>

            <th scope="col">
              <select name="location_id1[]" id="" class="form-control q9Input multiSelect" multiple="multiple">
              @include('superadmin.case.helper.location')
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">CTC meeting </th>
            <input type="hidden" name="type_activities[]" value="3">
            <th scope="col"><input name="type_activities_men[]" type="text" id="q9Men3" value="<?=(isset($question_9_data->q9_data->q9Men3)) ? $question_9_data->q9_data->q9Men3:'' ?>" class="form-control q9Input question9RowMen question9Col3"></th>
            <th scope="col"><input name="type_activities_women[]" type="text" id="q9Women3" value="<?=(isset($question_9_data->q9_data->q9Women3)) ? $question_9_data->q9_data->q9Women3:'' ?>" class="form-control q9Input question9RowWomen question9Col3"></th>
            <th scope="col"><input name="type_activities_third_gender[]" type="text" id="q93rdG3" value="<?=(isset($question_9_data->q9_data->q93rdG3)) ? $question_9_data->q9_data->q93rdG3:'' ?>" class="form-control q9Input question9Row3rdGender question9Col3"></th>
            <th scope="col"><input name="type_activities_boy[]" type="text" id="q9Boy3" value="<?=(isset($question_9_data->q9_data->q9Boy3)) ? $question_9_data->q9_data->q9Boy3:'' ?>" class="form-control q9Input question9RowBoys question9Col3"></th>
            <th scope="col"><input name="type_activities_girl[]" type="text" id="q9Girl3" value="<?=(isset($question_9_data->q9_data->q9Girl3)) ? $question_9_data->q9_data->q9Girl3:'' ?>" class="form-control q9Input question9RowGirls question9Col3"></th>
            <th scope="col"><input name="type_activities_total[]" type="text" value="<?=(isset($question_9_data->q9_data->question9Col3)) ? $question_9_data->q9_data->question9Col3:'' ?>" id="question9Col3"  class="form-control q9Input q9Total" readonly="true"></th>

      
            <th scope="col">
              <select name="location_id2[]" id="" class="form-control q9Input multiSelect" multiple="multiple">
              @include('superadmin.case.helper.location')
              </select>
            </th>
          </tr>
          <tr>
            <th scope="col">Consultation </th>
            <input type="hidden" name="type_activities[]" value="4">
            <th scope="col"><input name="type_activities_men[]" type="text" id="q9Men4" value="<?=(isset($question_9_data->q9_data->q9Men4)) ? $question_9_data->q9_data->q9Men4:'' ?>" class="form-control q9Input question9RowMen question9Col4"></th>
            <th scope="col"><input name="type_activities_women[]" type="text" id="q9Women4" value="<?=(isset($question_9_data->q9_data->q9Women4)) ? $question_9_data->q9_data->q9Women4:'' ?>" class="form-control q9Input question9RowWomen question9Col4"></th>
            <th scope="col"><input name="type_activities_third_gender[]" type="text" id="q93rdG4" value="<?=(isset($question_9_data->q9_data->q93rdG4)) ? $question_9_data->q9_data->q93rdG4:'' ?>" class="form-control q9Input question9Row3rdGender question9Col4"></th>
            <th scope="col"><input name="type_activities_boy[]" type="text" id="q9Boy4" value="<?=(isset($question_9_data->q9_data->q9Boy4)) ? $question_9_data->q9_data->q9Boy4:'' ?>" class="form-control q9Input question9RowBoys question9Col4"></th>
            <th scope="col"><input name="type_activities_girl[]" type="text" id="q9Girl4" value="<?=(isset($question_9_data->q9_data->q9Girl4)) ? $question_9_data->q9_data->q9Girl4:'' ?>" class="form-control q9Input question9RowGirls question9Col4"></th>
            <th scope="col"><input name="type_activities_total[]" type="text" value="<?=(isset($question_9_data->q9_data->question9Col4)) ? $question_9_data->q9_data->question9Col4:'' ?>"  id="question9Col4"  class="form-control q9Input q9Total" readonly="true"></th>

            <th scope="col">
              <select name="location_id3[]" id="" class="form-control q9Input multiSelect" multiple="multiple">
              @include('superadmin.case.helper.location')
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">Poster </th>
            <input type="hidden" name="type_activities[]" value="5">
            <th scope="col"><input name="type_activities_men[]" type="text" id="q9Men5" value="<?=(isset($question_9_data->q9_data->q9Men5)) ? $question_9_data->q9_data->q9Men5:'' ?>" class="form-control q9Input question9RowMen question9Col5"></th>
            <th scope="col"><input name="type_activities_women[]" type="text" id="q9Women5" value="<?=(isset($question_9_data->q9_data->q9Women5)) ? $question_9_data->q9_data->q9Women5:'' ?>" class="form-control q9Input question9RowWomen question9Col5"></th>
            <th scope="col"><input name="type_activities_third_gender[]" type="text" id="q93rdG5" value="<?=(isset($question_9_data->q9_data->q93rdG5)) ? $question_9_data->q9_data->q93rdG5:'' ?>" class="form-control q9Input question9Row3rdGender question9Col5"></th>
            <th scope="col"><input name="type_activities_boy[]" type="text" id="q9Boy5" value="<?=(isset($question_9_data->q9_data->q9Boy5)) ? $question_9_data->q9_data->q9Boy5:'' ?>" class="form-control q9Input  question9RowBoys question9Col5"></th>
            <th scope="col"><input name="type_activities_girl[]" type="text" id="q9Girl5" value="<?=(isset($question_9_data->q9_data->q9Girl5)) ? $question_9_data->q9_data->q9Girl5:'' ?>" class="form-control q9Input question9RowGirls question9Col5"></th>
            <th scope="col"><input name="type_activities_total[]" type="text" value="<?=(isset($question_9_data->q9_data->question9Col5)) ? $question_9_data->q9_data->question9Col5:'' ?>" id="question9Col5"  class="form-control q9Input q9Total" readonly="true"></th>

      
            <th scope="col">
              <select name="location_id4[]" id=""class="form-control q9Input multiSelect" multiple="multiple">
              @include('superadmin.case.helper.location')
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">leaflet </th>
            <input type="hidden" name="type_activities[]" value="6">
            <th scope="col"><input name="type_activities_men[]" type="text" id="q9Men6" value="<?=(isset($question_9_data->q9_data->q9Men6)) ? $question_9_data->q9_data->q9Men6:'' ?>" class="form-control q9Input question9RowMen question9Col6"></th>
            <th scope="col"><input name="type_activities_women[]" type="text" id="q9Women6" value="<?=(isset($question_9_data->q9_data->q9Women6)) ? $question_9_data->q9_data->q9Women6:'' ?>" class="form-control q9Input question9RowWomen question9Col6"></th>
            <th scope="col"><input name="type_activities_third_gender[]" type="text" id="q93rdG6" value="<?=(isset($question_9_data->q9_data->q93rdG6)) ? $question_9_data->q9_data->q93rdG6:'' ?>" class="form-control q9Input question9Row3rdGender question9Col6"></th>
            <th scope="col"><input name="type_activities_boy[]" type="text" id="q9Boy6" value="<?=(isset($question_9_data->q9_data->q9Boy6)) ? $question_9_data->q9_data->q9Boy6:'' ?>" class="form-control q9Input  question9RowBoys question9Col6"></th>
            <th scope="col"><input name="type_activities_girl[]" type="text" id="q9Girl6" value="<?=(isset($question_9_data->q9_data->q9Girl6)) ? $question_9_data->q9_data->q9Girl6:'' ?>" class="form-control q9Input question9RowGirls question9Col6"></th>
            <th scope="col"><input name="type_activities_total[]" type="text" value="<?=(isset($question_9_data->q9_data->question9Col6)) ? $question_9_data->q9_data->question9Col6:'' ?>" id="question9Col6"  class="form-control q9Input q9Total" readonly="true"></th>

     
            <th scope="col">
              <select name="location_id5[]" id="" class="form-control q9Input multiSelect" multiple="multiple">
              @include('superadmin.case.helper.location')
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">Booklet </th>
            <input type="hidden" name="type_activities[]" value="7">
            <th scope="col"><input name="type_activities_men[]"  type="text" id="q9Men7" value="<?=(isset($question_9_data->q9_data->q9Men7)) ? $question_9_data->q9_data->q9Men7:'' ?>" class="form-control q9Input question9RowMen question9Col7"></th>
            <th scope="col"><input name="type_activities_women[]"  type="text" id="q9Women7" value="<?=(isset($question_9_data->q9_data->q9Women7)) ? $question_9_data->q9_data->q9Women7:'' ?>" class="form-control q9Input question9RowWomen question9Col7"></th>
            <th scope="col"><input name="type_activities_third_gender[]"  type="text" id="q93rdG7" value="<?=(isset($question_9_data->q9_data->q93rdG7)) ? $question_9_data->q9_data->q93rdG7:'' ?>" class="form-control q9Input question9Row3rdGender question9Col7"></th>
            <th scope="col"><input name="type_activities_boy[]"  type="text" id="q9Boy7" value="<?=(isset($question_9_data->q9_data->q9Boy7)) ? $question_9_data->q9_data->q9Boy7:'' ?>" class="form-control q9Input question9RowBoys question9Col7"></th>
            <th scope="col"><input name="type_activities_girl[]"  type="text" id="q9Girl7" value="<?=(isset($question_9_data->q9_data->q9Girl7)) ? $question_9_data->q9_data->q9Girl7:'' ?>" class="form-control q9Input  question9RowGirls question9Col7"></th>
            <th scope="col"><input name="type_activities_total[]"  type="text" value="<?=(isset($question_9_data->q9_data->question9Col7)) ? $question_9_data->q9_data->question9Col7:'' ?>" id="question9Col7"  class="form-control q9Input q9Total" readonly="true"></th>
           
            <th scope="col">
              <select name="location_id6[]" id="" class="form-control q9Input multiSelect" multiple="multiple">
              @include('superadmin.case.helper.location')
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">SMS </th>
            <input type="hidden" name="type_activities[]" value="8">
            <th scope="col"><input name="type_activities_men[]" type="text" id="q9Men8" value="<?=(isset($question_9_data->q9_data->q9Men8)) ? $question_9_data->q9_data->q9Men8:'' ?>" class="form-control q9Input question9RowMen question9Col8"></th>
            <th scope="col"><input name="type_activities_women[]" type="text" id="q9Women8" value="<?=(isset($question_9_data->q9_data->q9Women8)) ? $question_9_data->q9_data->q9Women8:'' ?>" class="form-control q9Input question9RowWomen question9Col8"></th>
            <th scope="col"><input name="type_activities_third_gender[]" type="text" id="q93rdG8" value="<?=(isset($question_9_data->q9_data->q93rdG8)) ? $question_9_data->q9_data->q93rdG8:'' ?>" class="form-control q9Input question9Row3rdGender question9Col8"></th>
            <th scope="col"><input name="type_activities_boy[]" type="text" id="q9Boy8" value="<?=(isset($question_9_data->q9_data->q9Boy8)) ? $question_9_data->q9_data->q9Boy8:'' ?>" class="form-control q9Input  question9RowBoys question9Col8"></th>
            <th scope="col"><input name="type_activities_girl[]" type="text" id="q9Girl8" value="<?=(isset($question_9_data->q9_data->q9Girl8)) ? $question_9_data->q9_data->q9Girl8:'' ?>" class="form-control q9Input  question9RowGirls question9Col8"></th>
            <th scope="col"><input name="type_activities_total[]" type="text" value="<?=(isset($question_9_data->q9_data->question9Col8)) ? $question_9_data->q9_data->question9Col8:'' ?>"  id="question9Col8"  class="form-control q9Input q9Total" readonly="true"></th>


            <th scope="col">
              <select name="location_id7[]" id="" class="form-control q9Input multiSelect" multiple="multiple">
              @include('superadmin.case.helper.location')
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">Newsletter </th>
            <input type="hidden" name="type_activities[]" value="9">
            <th scope="col"><input name="type_activities_men[]"  type="text" id="q9Men9" value="<?=(isset($question_9_data->q9_data->q9Men9)) ? $question_9_data->q9_data->q9Men9:'' ?>" class="form-control q9Input question9RowMen question9Col9"></th>
            <th scope="col"><input name="type_activities_women[]" type="text" id="q9Women9" value="<?=(isset($question_9_data->q9_data->q9Women9)) ? $question_9_data->q9_data->q9Women9:'' ?>" class="form-control q9Input question9RowWomen question9Col9"></th>
            <th scope="col"><input name="type_activities_third_gender[]" type="text" id="q93rdG9" value="<?=(isset($question_9_data->q9_data->q93rdG9)) ? $question_9_data->q9_data->q93rdG9:'' ?>" class="form-control q9Input  question9Row3rdGender question9Col9"></th>
            <th scope="col"><input name="type_activities_boy[]" type="text" id="q9Boy9" value="<?=(isset($question_9_data->q9_data->q9Boy9)) ? $question_9_data->q9_data->q9Boy9:'' ?>" class="form-control q9Input question9RowBoys question9Col9"></th>
            <th scope="col"><input name="type_activities_girl[]" type="text" id="q9Girl9" value="<?=(isset($question_9_data->q9_data->q9Girl9)) ? $question_9_data->q9_data->q9Girl9:'' ?>" class="form-control q9Input question9RowGirls question9Col9"></th>
            <th scope="col"><input name="type_activities_total[]" type="text" value="<?=(isset($question_9_data->q9_data->question9Col9)) ? $question_9_data->q9_data->question9Col9:'' ?>" id="question9Col9"  class="form-control q9Input q9Total" readonly="true"></th>

            
            <th scope="col">
              <select name="location_id8[]" id="" class="form-control q9Input multiSelect" multiple="multiple">
              @include('superadmin.case.helper.location')
              </select>
            </th>
          </tr>
          <tr>
            <th scope="col">Billboard </th>
            <input type="hidden" name="type_activities[]" value="10">
            <th scope="col"><input name="type_activities_men[]" type="text" id="q9Men10" value="<?=(isset($question_9_data->q9_data->q9Men10)) ? $question_9_data->q9_data->q9Men10:'' ?>" class="form-control q9Input question9RowMen question9Co20"></th>
            <th scope="col"><input name="type_activities_women[]" type="text" id="q9Women10" value="<?=(isset($question_9_data->q9_data->q9Women10)) ? $question_9_data->q9_data->q9Women10:'' ?>" class="form-control q9Input question9RowWomen question9Co20"></th>
            <th scope="col"><input name="type_activities_third_gender[]" type="text" id="q93rdG10" value="<?=(isset($question_9_data->q9_data->q93rdG10)) ? $question_9_data->q9_data->q93rdG10:'' ?>" class="form-control q9Input question9Row3rdGender question9Co20"></th>
            <th scope="col"><input name="type_activities_boy[]" type="text" id="q9Boy10" value="<?=(isset($question_9_data->q9_data->q9Boy10)) ? $question_9_data->q9_data->q9Boy10:'' ?>" class="form-control q9Input question9RowBoys question9Co20"></th>
            <th scope="col"><input name="type_activities_girl[]" type="text" id="q9Girl10" value="<?=(isset($question_9_data->q9_data->q9Girl10)) ? $question_9_data->q9_data->q9Girl10:'' ?>" class="form-control q9Input question9RowGirls question9Co20"></th>
            <th scope="col"><input name="type_activities_total[]" type="text" value="<?=(isset($question_9_data->q9_data->question9Co20)) ? $question_9_data->q9_data->question9Co20:'' ?>" id="question9Co20"  class="form-control q9Input q9Total" readonly="true"></th>

            
            <th scope="col">
              <select name="location_id9[]" id="" class="form-control q9Input multiSelect" multiple="multiple">
              @include('superadmin.case.helper.location')
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">Folk show </th>
            <input type="hidden" name="type_activities[]" value="11">
            <th scope="col"><input name="type_activities_men[]" type="text" id="q9Men11" value="<?=(isset($question_9_data->q9_data->q9Men11)) ? $question_9_data->q9_data->q9Men11:'' ?>" class="form-control q9Input question9RowMen question9Co21"></th>
            <th scope="col"><input name="type_activities_women[]"  type="text" id="q9Women11" value="<?=(isset($question_9_data->q9_data->q9Women11)) ? $question_9_data->q9_data->q9Women11:'' ?>" class="form-control q9Input question9RowWomen question9Co21"></th>
            <th scope="col"><input name="type_activities_third_gender[]"  type="text" id="q93rdG11" value="<?=(isset($question_9_data->q9_data->q93rdG11)) ? $question_9_data->q9_data->q93rdG11:'' ?>" class="form-control q9Input question9Row3rdGender question9Co21"></th>
            <th scope="col"><input name="type_activities_boy[]"  type="text" id="q9Boy11" value="<?=(isset($question_9_data->q9_data->q9Boy11)) ? $question_9_data->q9_data->q9Boy11:'' ?>" class="form-control q9Input question9RowBoys question9Co21"></th>
            <th scope="col"><input name="type_activities_girl[]"  type="text" id="q9Girl11" value="<?=(isset($question_9_data->q9_data->q9Girl11)) ? $question_9_data->q9_data->q9Girl11:'' ?>" class="form-control q9Input question9RowGirls question9Co21"></th>
            <th scope="col"><input name="type_activities_total[]"  type="text" value="<?=(isset($question_9_data->q9_data->question9Co21)) ? $question_9_data->q9_data->question9Co21:'' ?>" id="question9Co21"  class="form-control q9Input q9Total" readonly="true"></th>

           
            <th scope="col">
              <select name="location_id10[]" id="" class="form-control q9Input multiSelect" multiple="multiple">
              @include('superadmin.case.helper.location')
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">Film show </th>
            <input type="hidden" name="type_activities[]" value="12">
            <th scope="col"><input name="type_activities_men[]" type="text" id="q9Men12" value="<?=(isset($question_9_data->q9_data->q9Men12)) ? $question_9_data->q9_data->q9Men12:'' ?>" class="form-control q9Input question9RowMen question9Co22"></th>
            <th scope="col"><input name="type_activities_women[]" type="text" id="q9Women12" value="<?=(isset($question_9_data->q9_data->q9Women12)) ? $question_9_data->q9_data->q9Women12:'' ?>" class="form-control q9Input question9RowWomen question9Co22"></th>
            <th scope="col"><input name="type_activities_third_gender[]" type="text" id="q93rdG12" value="<?=(isset($question_9_data->q9_data->q93rdG12)) ? $question_9_data->q9_data->q93rdG12:'' ?>" class="form-control q9Input question9Row3rdGender question9Co22"></th>
            <th scope="col"><input name="type_activities_boy[]" type="text" id="q9Boy12" value="<?=(isset($question_9_data->q9_data->q9Boy12)) ? $question_9_data->q9_data->q9Boy12:'' ?>" class="form-control q9Input question9RowBoys question9Co22"></th>
            <th scope="col"><input name="type_activities_girl[]" type="text" id="q9Girl12" value="<?=(isset($question_9_data->q9_data->q9Girl12)) ? $question_9_data->q9_data->q9Girl12:'' ?>" class="form-control q9Input question9RowGirls question9Co22"></th>
            <th scope="col"><input name="type_activities_total[]" type="text" value="<?=(isset($question_9_data->q9_data->question9Co22)) ? $question_9_data->q9_data->question9Co22:'' ?>" id="question9Co22"  class="form-control q9Input q9Total" readonly="true"></th>

            
            <th scope="col">
              <select name="location_id11[]" id="" class="form-control q9Input multiSelect" multiple="multiple">
              @include('superadmin.case.helper.location')
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">Miking </th>
            <input type="hidden" name="type_activities[]" value="13">
            <th scope="col"><input name="type_activities_men[]" type="text" id="q9Men13" value="<?=(isset($question_9_data->q9_data->q9Men13)) ? $question_9_data->q9_data->q9Men13:'' ?>" class="form-control q9Input question9RowMen question9Co23"></th>
            <th scope="col"><input name="type_activities_women[]"  type="text" id="q9Women13" value="<?=(isset($question_9_data->q9_data->q9Women13)) ? $question_9_data->q9_data->q9Women13:'' ?>" class="form-control q9Input question9RowWomen question9Co23"></th>
            <th scope="col"><input name="type_activities_third_gender[]" type="text" id="q93rdG13" value="<?=(isset($question_9_data->q9_data->q93rdG13)) ? $question_9_data->q9_data->q93rdG13:'' ?>" class="form-control q9Input question9Row3rdGender question9Co23"></th>
            <th scope="col"><input name="type_activities_boy[]"  type="text" id="q9Boy13" value="<?=(isset($question_9_data->q9_data->q9Boy13)) ? $question_9_data->q9_data->q9Boy13:'' ?>" class="form-control q9Input question9RowBoys question9Co23"></th>
            <th scope="col"><input name="type_activities_girl[]"  type="text" id="q9Girl13" value="<?=(isset($question_9_data->q9_data->q9Girl13)) ? $question_9_data->q9_data->q9Girl13:'' ?>" class="form-control q9Input question9RowGirls question9Co23"></th>
            <th scope="col"><input name="type_activities_total[]" type="text" value="<?=(isset($question_9_data->q9_data->question9Co23)) ? $question_9_data->q9_data->question9Co23:'' ?>"  id="question9Co23"  class="form-control q9Input q9Total" readonly="true"></th>

            
            <th scope="col">
              <select name="location_id12[]" id="" class="form-control q9Input multiSelect" multiple="multiple">
              @include('superadmin.case.helper.location')
              </select>
            </th>
          </tr>
          <tr>
            <th scope="col">Web campaign </th>
            <input type="hidden" name="type_activities[]" value="14">
            <th scope="col"><input name="type_activities_men[]" type="text" id="q9Men14" value="<?=(isset($question_9_data->q9_data->q9Men14)) ? $question_9_data->q9_data->q9Men14:'' ?>" class="form-control q9Input question9RowMen question9Co24"></th>
            <th scope="col"><input name="type_activities_women[]"  type="text" id="q9Women14" value="<?=(isset($question_9_data->q9_data->q9Women14)) ? $question_9_data->q9_data->q9Women14:'' ?>" class="form-control q9Input question9RowWomen question9Co24"></th>
            <th scope="col"><input name="type_activities_third_gender[]"  type="text" id="q93rdG14" value="<?=(isset($question_9_data->q9_data->q93rdG14)) ? $question_9_data->q9_data->q93rdG14:'' ?>" class="form-control q9Input question9Row3rdGender question9Co24"></th>
            <th scope="col"><input name="type_activities_boy[]"  type="text" id="q9Boy14" value="<?=(isset($question_9_data->q9_data->q9Boy14)) ? $question_9_data->q9_data->q9Boy14:'' ?>" class="form-control q9Input question9RowBoys question9Co24"></th>
            <th scope="col"><input name="type_activities_girl[]" type="text" id="q9Girl14" value="<?=(isset($question_9_data->q9_data->q9Girl14)) ? $question_9_data->q9_data->q9Girl14:'' ?>" class="form-control q9Input question9RowGirls question9Co24"></th>
            <th scope="col"><input name="type_activities_total[]"  type="text" value="<?=(isset($question_9_data->q9_data->question9Co24)) ? $question_9_data->q9_data->question9Co24:'' ?>" id="question9Co24"  class="form-control q9Input q9Total" readonly="true"></th>

          
            <th scope="col">
              <select name="location_id13[]" id="" class="form-control q9Input multiSelect" multiple="multiple">
              @include('superadmin.case.helper.location')
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input name="type_activities[]" type="text" id="q9Other1" value="<?=(isset($question_9_data->q9_data->q9Other1)) ? $question_9_data->q9_data->q9Other1:'' ?>" class="form-control q9Input" width="100%"> </div>
            </th>
            <th scope="col"><input name="type_activities_men[]" type="text" id="q9Men15" value="<?=(isset($question_9_data->q9_data->q9Men15)) ? $question_9_data->q9_data->q9Men15:'' ?>" class="form-control q9Input question9RowMen question9Co25"></th>
            <th scope="col"><input name="type_activities_women[]" type="text" id="q9Women15" value="<?=(isset($question_9_data->q9_data->q9Women15)) ? $question_9_data->q9_data->q9Women15:'' ?>" class="form-control q9Input question9RowWomen question9Co25"></th>
            <th scope="col"><input name="type_activities_third_gender[]"  type="text" id="q93rdG15" value="<?=(isset($question_9_data->q9_data->q93rdG15)) ? $question_9_data->q9_data->q93rdG15:'' ?>" class="form-control q9Input question9Row3rdGender question9Co25"></th>
            <th scope="col"><input name="type_activities_boy[]"  type="text" id="q9Boy15" value="<?=(isset($question_9_data->q9_data->q9Boy15)) ? $question_9_data->q9_data->q9Boy15:'' ?>" class="form-control q9Input question9RowBoys question9Co25"></th>
            <th scope="col"><input name="type_activities_girl[]"  type="text" id="q9Girl15" value="<?=(isset($question_9_data->q9_data->q9Girl15)) ? $question_9_data->q9_data->q9Girl15:'' ?>" class="form-control q9Input  question9RowGirls question9Co25"></th>
            <th scope="col"><input name="type_activities_total[]"  type="text" value="<?=(isset($question_9_data->q9_data->question9Co25)) ? $question_9_data->q9_data->question9Co25:'' ?>"  id="question9Co25"  class="form-control q9Input q9Total" readonly="true"></th>

           
            <th scope="col">
              <select name="location_id14[]" id="" class="form-control q9Input multiSelect" multiple="multiple">
              @include('superadmin.case.helper.location')
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" id="q9Other2" value="<?=(isset($question_9_data->q9_data->q9Other2)) ? $question_9_data->q9_data->q9Other2:'' ?>" name="type_activities[]" class="form-control q9Input" width="100%"> </div>
            </th>
            <th scope="col"><input name="type_activities_men[]"  type="text" id="q9Men16" value="<?=(isset($question_9_data->q9_data->q9Men16)) ? $question_9_data->q9_data->q9Men16:'' ?>" class="form-control q9Input question9RowMen question9Co26"></th>
            <th scope="col"><input  name="type_activities_women[]"  type="text" id="q9Women16" value="<?=(isset($question_9_data->q9_data->q9Women16)) ? $question_9_data->q9_data->q9Women16:'' ?>" class="form-control q9Input question9RowWomen question9Co26"></th>
            <th scope="col"><input name="type_activities_third_gender[]"  type="text" id="q93rdG16" value="<?=(isset($question_9_data->q9_data->q93rdG16)) ? $question_9_data->q9_data->q93rdG16:'' ?>" class="form-control q9Input question9Row3rdGender question9Co26"></th>
            <th scope="col"><input name="type_activities_boy[]"  type="text" id="q9Boy16" value="<?=(isset($question_9_data->q9_data->q9Boy16)) ? $question_9_data->q9_data->q9Boy16:'' ?>" class="form-control q9Input question9RowBoys question9Co26"></th>
            <th scope="col"><input name="type_activities_girl[]"  type="text" id="q9Girl16" value="<?=(isset($question_9_data->q9_data->q9Girl16)) ? $question_9_data->q9_data->q9Girl16:'' ?>" class="form-control q9Input question9RowGirls question9Co26"></th>
            <th scope="col"><input name="type_activities_total[]"  type="text" value="<?=(isset($question_9_data->q9_data->question9Co26)) ? $question_9_data->q9_data->question9Co26:'' ?>" id="question9Co26"  class="form-control q9Input q9Total" readonly="true"></th>

            <th scope="col">
              <select name="location_id15[]" id="" class="form-control q9Input multiSelect" multiple="multiple">
              @include('superadmin.case.helper.location')
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input name="type_activities[]" type="text" id="q9Other3" value="<?=(isset($question_9_data->q9_data->q9Other3)) ? $question_9_data->q9_data->q9Other3:'' ?>" class="form-control q9Input" width="100%"> </div>
            </th>
            <th scope="col"><input name="type_activities_men[]" type="text" id="q9Men17" value="<?=(isset($question_9_data->q9_data->q9Men17)) ? $question_9_data->q9_data->q9Men17:'' ?>" class="form-control q9Input question9RowMen question9Co27"></th>
            <th scope="col"><input name="type_activities_women[]"  type="text" id="q9Women17" value="<?=(isset($question_9_data->q9_data->q9Women17)) ? $question_9_data->q9_data->q9Women17:'' ?>" class="form-control q9Input question9RowWomen question9Co27"></th>
            <th scope="col"><input name="type_activities_third_gender[]"  type="text" id="q93rdG17" value="<?=(isset($question_9_data->q9_data->q93rdG17)) ? $question_9_data->q9_data->q93rdG17:'' ?>" class="form-control q9Input question9Row3rdGender question9Co27"></th>
            <th scope="col"><input name="type_activities_boy[]"  type="text" id="q9Boy17" value="<?=(isset($question_9_data->q9_data->q9Boy17)) ? $question_9_data->q9_data->q9Boy17:'' ?>" class="form-control q9Input question9RowBoys question9Co27"></th>
            <th scope="col"><input name="type_activities_girl[]"  type="text" id="q9Girl17" value="<?=(isset($question_9_data->q9_data->q9Girl17)) ? $question_9_data->q9_data->q9Girl17:'' ?>" class="form-control q9Input question9RowGirls question9Co27"></th>
            <th scope="col"><input name="type_activities_total[]"  type="text" value="<?=(isset($question_9_data->q9_data->question9Co27)) ? $question_9_data->q9_data->question9Co27:'' ?>" id="question9Co27"  class="form-control q9Input q9Total" readonly="true"></th>

            
            
          </tr>

          <tr>
            <th scope="col">Total </th>
            <input type="hidden" name="total" value="1">
            <th scope="col"><input  id="q9MenTotal" type="text" value="<?=(isset($question_9_data->q9_data->q9MenTotal)) ? $question_9_data->q9_data->q9MenTotal:'' ?>" class="form-control q9Input q9gTotal" readonly="true"></th>
            <th scope="col"><input  id="q9WomenTotal" type="text" value="<?=(isset($question_9_data->q9_data->q9WomenTotal)) ? $question_9_data->q9_data->q9WomenTotal:'' ?>" class="form-control q9Input q9gTotal" readonly="true"></th>
            <th scope="col"><input  id="q9TrdGTotal" type="text" value="<?=(isset($question_9_data->q9_data->q9TrdGTotal)) ? $question_9_data->q9_data->q9TrdGTotal:'' ?>" class="form-control q9Input q9gTotal" readonly="true"></th>
            <th scope="col"><input  id="q9BoysTotal" type="text" value="<?=(isset($question_9_data->q9_data->q9BoysTotal)) ? $question_9_data->q9_data->q9BoysTotal:'' ?>" class="form-control q9Input q9gTotal" readonly="true"></th>
            <th scope="col"><input  id="q9GirlsTotal" type="text" value="<?=(isset($question_9_data->q9_data->q9GirlsTotal)) ? $question_9_data->q9_data->q9GirlsTotal:'' ?>" class="form-control q9Input q9gTotal" readonly="true"></th>
            <th scope="col"><input  type="text" value="<?=(isset($question_9_data->q9_data->q9gTotal)) ? $question_9_data->q9_data->q9gTotal:'' ?>" id="q9gTotal"  class="form-control q9Input" readonly="true"></th>

<!-- 
            <th scope="col">
                  <select name="location_id16[]" id="" class="form-control q9Input multiSelect" multiple="multiple">
                  @include('superadmin.case.helper.location')
              </select>
            </th> -->
          </tr>


        </thead>
      </table>
    </div>
          <br/>
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question9">Save</button>       
          </p>
    </div>
  </div>
</div>
@endif
<?php }
  ?>

<script>

$(function(){
  $(document).on("click",'#temp-save-question9',function() {


    let yes_no_value=$("input[type='radio'][name='is_awareness_activities_q9']:checked").val()

    var q9_data={
    }
    if(yes_no_value=="1"){
      $('.q9Input').each(function() {
        Object.assign(q9_data,{[$(this).attr('id')]:$(this).val()})   
      });

    }
    let new_data={
      q9_data:q9_data,
      q9_checked_value:yes_no_value,
      others:$("input[name='awareness_activities_others_q9']").val()

    }
    
      // console.log(new_data)
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
              'question9':new_data,
              'question_no':'9'
            },
            url: "/superadmin/case/temp-save-question",             
            success: function(response){ 
              if(response){
                alert("Question 9 has been saved temporary")

              }else{
                alert("Not Saved")
              }
            }
    });
  }); 
}); 

</script>