


@if(Auth::user()->can('3.question'))
<?php 
$beneficiaries=[
  1=>"Men",
  2=>"Women",
  3=>"3rd G",
  4=>"Rural Poor",
  5=>"Urban Poor"
];
$risks=[
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
  12=>"Research", 
  13=>"Other Specify"

];

?>
 <style>
.visibility
{
  display: none;
}
</style>
<div class="col-md-12 question3">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
        <span class="numbering">3</span>.
           @if (isset($questiontitles [2]))
         {{ $questiontitles[2]->title }}

         @endif
      </h3>
     

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="icheck-primary">
      <?php if(isset($question_3_data->q3_checked_value)) { ?>
        <input type="radio" id="radioThree1" class="threestatus" name="is_sex_trafficking_climate_cgn_q3" <?=(isset($question_3_data->q3_checked_value)   && $question_3_data->q3_checked_value=='1') ? 'checked' : '' ;?>  value="1">
      <?php }else { ?>
        <input type="radio" id="radioThree1" class="threestatus" name="is_sex_trafficking_climate_cgn_q3" checked  value="1">

      <?php } ?>    
        <label for="radioThree1">
          Yes
        </label>
      </div>
      <div class="icheck-primary">
        <input type="radio" id="radioThree2" class="threestatus" <?=(isset($question_3_data->q3_checked_value)   && $question_3_data->q3_checked_value=='0') ? 'checked' : '' ;?> name="is_sex_trafficking_climate_cgn_q3"  value="0">
        <label for="radioThree2">
          No
        </label>
      </div>
      <div id ="three_question_view" class="<?=(isset($question_3_data->q3_checked_value)   && ($question_3_data->q3_checked_value=='0')) ? 'visibility' : '' ;?>">
      <table class="table table-bordered table-white" style="border: none;">
        <thead>
          <tr>
            <th scope="col">Risk associated with Climate Change</th>
            <th scope="col">Initiative to mitigate Risk</th>
            <th scope="col">Title of Project/Program/Policy/ Law</th>
            <th scope="col">Location</th>
            <th scope="col">Beneficiary</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Displacement</th>
            <input type="hidden" name="q3_risk_associated_climate_change[]" value="1">
            <td>
              <select name="q3_initiative_mitigate_risk[]" id="q3_initiative_mitigate_risk"  class="form-control q3Input">
                
                  <option value="" disabled selected>---Initiative to mitigate Risk--</option>    
                @foreach ($risks as $key => $risk)
                  <option  <?=(isset($question_3_data->q3_data->q3_initiative_mitigate_risk) && $question_3_data->q3_data->q3_initiative_mitigate_risk==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$risk}}</option>
                 @endforeach
              </select>
              <br>
                  <input  type="input" id="initiative_mitigate_risk" value="<?=(isset($question_3_data->q3_data->initiative_mitigate_risk)) ? $question_3_data->q3_data->initiative_mitigate_risk:'' ?>" name="q3_others_specify[]" class="form-control q3Input <?= (isset($question_3_data->q3_data->q3_initiative_mitigate_risk) && $question_3_data->q3_data->q3_initiative_mitigate_risk=='13') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)">
            </td>


            <td>
              <input type="text" name="q3_title_project_program[]" id="q3_title_project1" value="<?=(isset($question_3_data->q3_data->q3_title_project1)) ? $question_3_data->q3_data->q3_title_project1:'' ?>" class="form-control q3Input">
            </td>
           
            <td>
             
             

              <select name="q3_location_id[]" id="location1" class="form-control q3Input">
              <option value="" disabled selected>---Select Location--</option>  
                @foreach ($locations as $key => $item)
                  <option  <?=(isset($question_3_data->q3_data->location1) && $question_3_data->q3_data->location1==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                 @endforeach
              </select>
            </td>
            <td>
              <select name="q3_problem_id[]" id="beneficiary1"  class="form-control q3Input">
              <option value="" disabled selected>---Select Beneficiary--</option>
                @foreach ($beneficiaries as $key => $benificiary)
                    <option  <?=(isset($question_3_data->q3_data->beneficiary1) && $question_3_data->q3_data->beneficiary1==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$benificiary}}</option>
                 @endforeach
              </select>

            </td>
          </tr>
          <tr>
            <th scope="row">Loss of livelihood</th>
            <input type="hidden" name="q3_risk_associated_climate_change[]" value="2">
            <td>
              <select name="q3_initiative_mitigate_risk[]" id="q3_loss_livelihood" class="form-control q3Input">
            
               <option value="" disabled selected>---Initiative to mitigate Risk--</option>    
                @foreach ($risks as $key => $risk)
                  <option  <?=(isset($question_3_data->q3_data->q3_loss_livelihood) && !empty($question_3_data->q3_data) &&$question_3_data->q3_data->q3_loss_livelihood==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$risk}}</option>
                 @endforeach
              </select><br>
                  <input  type="input" id="loss_livelihood" value="<?=(isset($question_3_data->q3_data->loss_livelihood)) ? $question_3_data->q3_data->loss_livelihood:'' ?>" name="q3_others_specify[]" class="form-control  q3Input <?= (isset($question_3_data->q3_data->q3_loss_livelihood) && $question_3_data->q3_data->q3_loss_livelihood=='13') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)">
            </td>
            <td><input type="text" name="q3_title_project_program[]"  id="q3_title_project2" value="<?=(isset($question_3_data->q3_data->q3_title_project2)) ? $question_3_data->q3_data->q3_title_project2:'' ?>"class="form-control q3Input"></td>
           
            <td>
              <select name="q3_location_id[]" id="location2" class="form-control q3Input">
              <option value="" disabled selected>---Select Location--</option>  
                @foreach ($locations as $key => $item)
                  <option  <?=(isset($question_3_data->q3_data->location2) && $question_3_data->q3_data->location2==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                 @endforeach
              </select>
            </td>
            <td>
              <select name="q3_problem_id[]" id="benificiary2" class="form-control q3Input">
              <option value="" disabled selected>---Select Beneficiary--</option>
              @foreach ($beneficiaries as $key => $benificiary)
                  <option  <?=(isset($question_3_data->q3_data->benificiary2) && $question_3_data->q3_data->benificiary2==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$benificiary}}</option>
                 @endforeach
              </select>

            </td>
          </tr>
          <tr>
            <th scope="row">Loss of arable land</th>
            <input type="hidden" name="q3_risk_associated_climate_change[]" value="3">
            <td>
              <select name="q3_initiative_mitigate_risk[]" value="<?=(isset($question_3_data->q3_data->q3_loss_arable_land)) ? $question_3_data->q3_data->q3_loss_arable_land:'' ?>"   id="q3_loss_arable_land"  class="form-control q3Input">
                
               <option value="" disabled selected>---Initiative to mitigate Risk--</option>    
                @foreach ($risks as $key => $risk)
                <option  <?=(isset($question_3_data->q3_data) && $question_3_data->q3_data->q3_loss_arable_land==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$risk}}</option>
                 @endforeach
              </select>
              <br>
                  <input  type="input" id="loss_arable_land" value="<?=(isset($question_3_data->q3_data->loss_arable_land)) ? $question_3_data->q3_data->loss_arable_land:'' ?>"   id="q3_loss_arable_land"  name="q3_others_specify[]" class="form-control q3Input <?= (isset($question_3_data->q3_data->q3_loss_arable_land) && $question_3_data->q3_data->q3_loss_arable_land=='13') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)">
            </td>
            <td> <input type="threeten" name="q3_title_project_program[]" id="q3_title_project3" value="<?=(isset($question_3_data->q3_data->q3_title_project3)) ? $question_3_data->q3_data->q3_title_project3:'' ?>" class="form-control q3Input"> </td>
           
            <td>
              <select name="q3_location_id[]" id="location3" class="form-control q3Input">
              <option value="" disabled selected>---Select Location--</option>  
                @foreach ($locations as $key => $item)
                  <option  <?=(isset($question_3_data->q3_data->location3) && $question_3_data->q3_data->location3==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                 @endforeach
              </select>
            </td>
            <td>
              <select name="q3_problem_id[]" id="benificiary3" class="form-control q3Input">
              <option value="" disabled selected>---Select Beneficiary--</option>
              @foreach ($beneficiaries as $key => $benificiary)
                  <option  <?=(isset($question_3_data->q3_data->benificiary3) && $question_3_data->q3_data->benificiary3==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$benificiary}}</option>
                 @endforeach
              </select>

            </td>
          </tr>
          <tr>
            <th scope="row">Loss in agriculture</th>
            <input type="hidden" name="q3_risk_associated_climate_change[]" value="4">
            <td><select name="q3_initiative_mitigate_risk[]" id="q3_loss_agriculture"  class="form-control q3Input">
             <option value="" disabled selected>---Initiative to mitigate Risk--</option>    
                @foreach ($risks as $key => $risk)
                  <option  <?=(isset($question_3_data->q3_data->q3_loss_agriculture) && $question_3_data->q3_data->q3_loss_agriculture==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$risk}}</option>
                 @endforeach
              </select><br>
                  <input  type="input" id="loss_agriculture" value="<?=(isset($question_3_data->q3_data->loss_agriculture)) ? $question_3_data->q3_data->loss_agriculture:'' ?>" name="q3_others_specify[]" class="form-control q3Input <?= (isset($question_3_data->q3_data->q3_loss_agriculture) && $question_3_data->q3_data->q3_loss_agriculture=='13') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)">
            </td>

            <td> <input name="q3_title_project_program[]" id="q3_title_project4" value="<?=(isset($question_3_data->q3_data->q3_title_project4)) ? $question_3_data->q3_data->q3_title_project4:'' ?>" type="text" class="form-control q3Input"> </td>
           
            <td><select name="q3_location_id[]" id="location4"  class="form-control q3Input">
            <option value="" disabled selected>---Select Location--</option>  
                @foreach ($locations as $key => $item)
                  <option  <?=(isset($question_3_data->q3_data->location4) &&  $question_3_data->q3_data->location4==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                 @endforeach
              </select></td>

              <td>
              <select name="q3_problem_id[]" id="benificiary4" class="form-control q3Input">
              <option value="" disabled selected>---Select Beneficiary--</option>
              @foreach ($beneficiaries as $key => $benificiary)
                  <option  <?=(isset($question_3_data->q3_data->benificiary4) && $question_3_data->q3_data->benificiary4==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$benificiary}}</option>
                 @endforeach
              </select>

            </td>

          </tr>
          <tr>
            <th scope="row">Debt</th>
            <input type="hidden" name="q3_risk_associated_climate_change[]" value="5">
            <td>
              <select name="q3_initiative_mitigate_risk[]" id="q3_risk_associated_debt"  class="form-control q3Input">
              <option value="" disabled selected>---Initiative to mitigate Risk--</option>    
                @foreach ($risks as $key => $risk)
                  <option  <?=(isset($question_3_data->q3_data->q3_risk_associated_debt) && $question_3_data->q3_data->q3_risk_associated_debt==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$risk}}</option>
                 @endforeach
              </select><br>
                  <input  type="input" id="risk_associated_debt" name="q3_others_specify[]" value="<?=(isset($question_3_data->q3_data->risk_associated_debt)) ? $question_3_data->q3_data->risk_associated_debt:'' ?>" class="form-control q3Input <?= (isset($question_3_data->q3_data->q3_risk_associated_debt) && $question_3_data->q3_data->q3_risk_associated_debt=='13') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)">
            </td>
            <td> <input type="text" name="q3_title_project_program[]" id="q3_title_project5" value="<?=(isset($question_3_data->q3_data->q3_title_project5)) ? $question_3_data->q3_data->q3_title_project5:'' ?>" class="form-control q3Input"> </td>
           
            <td>
              <select name="q3_location_id[]" id="location5" class="form-control q3Input">
              <option value="" disabled selected>---Select Location--</option>  
                @foreach ($locations as $key => $item)
                  <option  <?=(isset($question_3_data->q3_data->location5) && $question_3_data->q3_data->location5==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                 @endforeach
              </select>
            </td>
            <td>
              <select name="q3_problem_id[]" id="benificiary5" class="form-control q3Input">
              <option value="" disabled selected>---Select Beneficiary--</option>
              @foreach ($beneficiaries as $key => $benificiary)
                  <option  <?=(isset($question_3_data->q3_data->benificiary5) && $question_3_data->q3_data->benificiary5==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$benificiary}}</option>
                 @endforeach
              </select>

            </td>
          </tr>
          <tr>
            <th scope="row">Increased poverty</th>
            <input type="hidden" name="q3_risk_associated_climate_change[]" value="6">
            <td>
              <select name="q3_initiative_mitigate_risk[]" id="q3_increased_poverty"  class="form-control q3Input">
               <option value="" disabled selected>---Initiative to mitigate Risk--</option>    
                @foreach ($risks as $key => $risk)
                  <option  <?=(isset($question_3_data->q3_data->q3_increased_poverty) && $question_3_data->q3_data->q3_increased_poverty==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$risk}}</option>
                 @endforeach
              </select>
              <br>
                  <input  type="input" id="risk_increased_poverty" value="<?=(isset($question_3_data->q3_data->risk_increased_poverty)) ? $question_3_data->q3_data->risk_increased_poverty:'' ?>" name="q3_others_specify[]" class="form-control q3Input <?= (isset($question_3_data->q3_data->q3_increased_poverty) && $question_3_data->q3_data->q3_increased_poverty=='13') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)">
            </td>
            <td> <input type="text" name="q3_title_project_program[]" id="q3_title_project6" value="<?=(isset($question_3_data->q3_data->q3_title_project6)) ? $question_3_data->q3_data->q3_title_project6 :'' ?>" class="form-control q3Input"> </td>
            
            <td><select name="q3_location_id[]" id="location6" class="form-control q3Input">
            <option value="" disabled selected>---Select Location--</option>  
                @foreach ($locations as $key => $item)
                  <option  <?=(isset($question_3_data->q3_data->location6) && $question_3_data->q3_data->location6==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                 @endforeach
              </select>
            </td>
            <td>
              <select name="q3_problem_id[]" id="benificiary6" class="form-control q3Input">
              <option value="" disabled selected>---Select Beneficiary--</option>
              @foreach ($beneficiaries as $key => $benificiary)
                  <option  <?=(isset($question_3_data->q3_data->benificiary6) && $question_3_data->q3_data->benificiary6==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$benificiary}}</option>
                 @endforeach
              </select>

            </td>
          </tr>
          <tr>
            <th scope="row">Loss of housing</th>
            <input type="hidden" name="q3_risk_associated_climate_change[]" value="7">
            <td>
              <select name="q3_initiative_mitigate_risk[]" id="q3_loss_housing"  class="form-control q3Input">
               <option value="" disabled selected>---Initiative to mitigate Risk--</option>    
                @foreach ($risks as $key => $risk)
                  <option  <?=(isset($question_3_data->q3_data->q3_loss_housing) && $question_3_data->q3_data->q3_loss_housing==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$risk}}</option>
                 @endforeach
              </select><br>
                  <input  type="input" id="risk_loss_housing" value="<?=(isset($question_3_data->q3_data->risk_loss_housing)) ? $question_3_data->q3_data->risk_loss_housing:'' ?>" name="q3_others_specify[]" class="form-control q3Input <?= (isset($question_3_data->q3_data->q3_loss_housing) && $question_3_data->q3_data->q3_loss_housing=='13') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)">
            </td>
            <td> <input type="text" id="q3_title_project7" value="<?=(isset($question_3_data->q3_data->q3_title_project7)) ? $question_3_data->q3_data->q3_title_project7:'' ?>"  name="q3_title_project_program[]" class="form-control q3Input"> </td>
          
            <td>
              <select name="q3_location_id[]" id="location7"  class="form-control q3Input">
              <option value="" disabled selected>---Select Location--</option>  
                @foreach ($locations as $key => $item)
                  <option  <?=(isset($question_3_data->q3_data->location7) && $question_3_data->q3_data->location7==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                 @endforeach
              </select>
            </td>
            <td>
              <select name="q3_problem_id[]" id="benificiary7" class="form-control q3Input">
              <option value="" disabled selected>---Select Beneficiary--</option>
              @foreach ($beneficiaries as $key => $benificiary)
                  <option  <?=(isset($question_3_data->q3_data->benificiary7) && $question_3_data->q3_data->benificiary7==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$benificiary}}</option>
                 @endforeach
              </select>

            </td>
          </tr>
          <tr>
            <th scope="row">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" value="<?=(isset($question_3_data->q3_data->q3_risk_associated_7) && $question_3_data->q3_data->q3_risk_associated_7) ? $question_3_data->q3_data->q3_risk_associated_7:'' ?>" id="q3_risk_associated_7" name="q3_risk_associated_climate_change[]" class="form-control q3Input" width="100%"> </div>
            </th>
            <td>
              <select name="q3_initiative_mitigate_risk[]" id="q3_others_specify_one"  class="form-control q3Input">
               <option value="" disabled selected>---Initiative to mitigate Risk--</option>    
                @foreach ($risks as $key => $risk)
                  <option  <?=(isset($question_3_data->q3_data->q3_others_specify_one) && $question_3_data->q3_data->q3_others_specify_one==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$risk}}</option>
                 @endforeach
              </select><br>
                  <input  type="input" id="others_specify_one" name="q3_others_specify[]" value="<?=(isset($question_3_data->q3_data->others_specify_one) && $question_3_data->q3_data->others_specify_one) ? $question_3_data->q3_data->others_specify_one:'' ?>" class="form-control q3Input <?= (isset($question_3_data->q3_data->q3_others_specify_one) && $question_3_data->q3_data->q3_others_specify_one=='13') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)">
            </td>
            <td> <input type="text" name="q3_title_project_program[]" value="<?=(isset($question_3_data->q3_data->q3_title_project_7) && $question_3_data->q3_data->q3_title_project_7) ? $question_3_data->q3_data->q3_title_project_7:'' ?>" id="q3_title_project_7" class="form-control q3Input"> </td>
          
            <td><select name="q3_location_id[]" id="location8" class="form-control q3Input">
            <option value="" disabled selected>---Select Location--</option>  
                @foreach ($locations as $key => $item)
                  <option  <?=(isset($question_3_data->q3_data->location8) && $question_3_data->q3_data->location8==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                 @endforeach
              </select>
            </td>
            <td>
              <select name="q3_problem_id[]" id="benificiary8" class="form-control q3Input">
              <option value="" disabled selected>---Select Beneficiary--</option>
              @foreach ($beneficiaries as $key => $benificiary)
                  <option  <?=(isset($question_3_data->q3_data->benificiary8) && $question_3_data->q3_data->benificiary8==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$benificiary}}</option>
                 @endforeach
              </select>

            </td>
          </tr>
          <tr>
            <th scope="row">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" value="<?=(isset($question_3_data->q3_data->q3_risk_8) && $question_3_data->q3_data->q3_risk_8) ? $question_3_data->q3_data->q3_risk_8:'' ?>" name="q3_risk_associated_climate_change[]" id="q3_risk_8" class="form-control q3Input" width="100%"> </div>
            </th>
            <td>
              <select name="q3_initiative_mitigate_risk[]" id="q3_others_specify_two"  class="form-control q3Input">
               <option value="" disabled selected>---Initiative to mitigate Risk--</option>    
                @foreach ($risks as $key => $risk)
                  <option  <?=(isset($question_3_data->q3_data->q3_others_specify_two) && $question_3_data->q3_data->q3_others_specify_two==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$risk}}</option>
                 @endforeach
              </select><br>
                  <input  type="input" id="others_specify_two" name="q3_others_specify[]" value="<?=(isset($question_3_data->q3_data->others_specify_two) && $question_3_data->q3_data->others_specify_two) ? $question_3_data->q3_data->others_specify_two:'' ?>" class="form-control q3Input <?= (isset($question_3_data->q3_data->q3_others_specify_two) && $question_3_data->q3_data->q3_others_specify_two=='13') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)">
            </td>
            <td> <input type="text" name="q3_title_project_program[]" id="q3_title_project_9" value="<?=(isset($question_3_data->q3_data->q3_title_project_9) && $question_3_data->q3_data->q3_title_project_9) ? $question_3_data->q3_data->q3_title_project_9:'' ?>" class="form-control q3Input"> </td>
            
            <td>
              <select name="q3_location_id[]" id="location9"  class="form-control q3Input">
              <option value="" disabled selected>---Select Location--</option>  
                @foreach ($locations as $key => $item)
                <option  <?=(isset($question_3_data->q3_data->location9) && $question_3_data->q3_data->location9==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                 @endforeach
              </select>
              <br>
                  <input  type="input" id="others_specify_two1" name="q3_others_specify[]" value="<?=(isset($question_3_data->q3_data->others_specify_two1) && $question_3_data->q3_data->others_specify_two1) ? $question_3_data->q3_data->others_specify_two1:'' ?>" class="form-control q3Input <?= (isset($question_3_data->q3_data->location9) && $question_3_data->q3_data->location9=='13') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)">
            </td>
            <td>
              <select name="q3_problem_id[]" id="beneficiary9" class="form-control q3Input">
              <option value="" disabled selected>---Select Beneficiary--</option>
              @foreach ($beneficiaries as $key => $benificiary)
                  <option   <?=(isset($question_3_data->q3_data->beneficiary9) && $question_3_data->q3_data->beneficiary9==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$benificiary}}</option>
                 @endforeach
              </select>

            </td>
          </tr>
           <tr>
            <th scope="row">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" value="<?=(isset($question_3_data->q3_data->q3_risk_associate_10) && $question_3_data->q3_data->q3_risk_associate_10) ? $question_3_data->q3_data->q3_risk_associate_10:'' ?>" id="q3_risk_associate_10" name="q3_risk_associated_climate_change[]" value="<?=(isset($question_3_data->q3_data->others_specify_three) && $question_3_data->q3_data->others_specify_three) ? $question_3_data->q3_data->others_specify_three:'' ?>" class="form-control q3Input" width="100%"> </div>
            </th>
            <td>
              <select name="q3_initiative_mitigate_risk[]" id="q3_others_specify_three"  class="form-control q3Input">
               <option value="" disabled selected>---Initiative to mitigate Risk--</option>    
                @foreach ($risks as $key => $risk)
                  <option  <?=(isset($question_3_data->q3_data->q3_others_specify_three) && $question_3_data->q3_data->q3_others_specify_three==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$risk}}</option>
                 @endforeach
              </select>
              <br>
                  <input  type="input" id="others_specify_three" value="<?=(isset($question_3_data->q3_data->others_specify_three) && $question_3_data->q3_data->others_specify_three) ? $question_3_data->q3_data->others_specify_three:'' ?>" name="q3_others_specify[]" class="form-control q3Input <?= (isset($question_3_data->q3_data->q3_loss_livelihood) && $question_3_data->q3_data->q3_loss_livelihood=='13') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)">
            </td>
            <td> <input type="text" value="<?=(isset($question_3_data->q3_data->q3_title_project10)) ? $question_3_data->q3_data->q3_title_project10:'' ?>" name="q3_title_project_program[]" id="q3_title_project10" class="form-control q3Input"> </td>

           
            <td>
              <select name="q3_location_id[]" id="location10"  class="form-control q3Input">
            <option value="" disabled selected>---Select Location--</option>  
                @foreach ($locations as $key => $item)
                  <option  <?=(isset($question_3_data->q3_data->location10) && $question_3_data->q3_data->location10==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                 @endforeach
              </select>
              <br>
                  <input  type="input" id="others_specify_three1" value="<?=(isset($question_3_data->q3_data->others_specify_three1) && $question_3_data->q3_data->others_specify_three1) ? $question_3_data->q3_data->others_specify_three1:'' ?>" name="q3_others_specify[]" class="form-control q3Input <?= (isset($question_3_data->q3_data->location10) && $question_3_data->q3_data->location10=='13') ? '' :'otherSpecify' ?>" placeholder="Other (Specify)">
            </td>
            <td>
              <select name="q3_problem_id[]" id="beneficiary10"   class="form-control q3Input">
              <option value="" disabled selected>---Select Beneficiary--</option>
                 
                @foreach ($beneficiaries as $key => $benificiary)
                  <option  <?=(isset($question_3_data->q3_data->beneficiary10) && $question_3_data->q3_data->beneficiary10==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$benificiary}}</option>
                 @endforeach
              
              </select>

            </td>
          </tr> 

          




        </tbody>
      </table>
    
    </div>
    <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question3">Save</button>       
        </p>
    </div>
  </div>
</div>

@endif

<script>

$(function(){
  $(document).on("click",'#temp-save-question3',function() {
    let yes_no_value=$("input[type='radio'][name='is_sex_trafficking_climate_cgn_q3']:checked").val()
    var q3_data={}
    if(yes_no_value==1){
      $('.q3Input').each(function() {
        Object.assign(q3_data,{[$(this).attr('id')]:$(this).val()}) 

      });
    }
     let new_data={
        q3_data:q3_data,
        q3_checked_value:yes_no_value,
      }  
    $.ajax({    //create an ajax request to display.php
            type: "POST",
            data:{
              "_token": "{{ csrf_token() }}",
              'question3':new_data,
              'question_no':'3',
            },
            url: "/superadmin/case/temp-save-question",             
            success: function(response){ 
              alert("Question 3 has been saved temporary")
            }
    });
  }); 
}); 

</script>