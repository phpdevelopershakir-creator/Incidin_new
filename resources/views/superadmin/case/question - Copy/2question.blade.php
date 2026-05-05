<?php
if($questiontitles[1]->status==0)
{

  ?>
@if(Auth::user()->can('2.question'))
<style>
  .otherText{
    display:none
  }
  .visibility{
    display:none
  }
</style>
<?php 
$vulnerable_list=[ 
  1 => "Migrant Men",
  2 => "Migrant Women",
  3 => "3rd  Gender",
  4 => "Girls of Poor Household",
  5 => "Boys of Poor Household",
  6 => "Men", 
  7 => "Women", 
  8 => "Children of Sex Worker",  
  9 => "Child Labour", 
  10 => "Street Children", 
  11 => "Other (Specify)" 
];

?>
<div class="col-md-12 question2">
    <div class="card card-outline collapsed-card">
      <div class="card-header">

        <h3 class="card-title">

             <span class="numbering">2</span>.
           @if (isset($questiontitles [1]))
         {{ $questiontitles[1]->title }}

         @endif


        </h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
      <div class="icheck-primary">
      <?php if(isset($question_2_data->q2_checked_value)) { ?>

            <input 
            type="radio" 
            id="radioTwo1" 
            class="sex_trafficking_force_labor_status" 
            name="is_sex_trafficking_location_q2" 
            <?=(isset($question_2_data->q2_checked_value)   && $question_2_data->q2_checked_value=='1') ? 'checked' : '' ;?>    
            value="1">
            <?php }else { ?>
            
            <input type="radio" id="radioTwo1" class="sex_trafficking_force_labor_status" name="is_sex_trafficking_location_q2" checked  value="1">
            <?php } ?>    
            
            <label for="radioTwo1">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input 
            type="radio" 
            id="radioTwo2"  
            class="sex_trafficking_force_labor_status" 
            name="is_sex_trafficking_location_q2"  
            <?=(isset($question_2_data->q2_checked_value)   && $question_2_data->q2_checked_value=='0') ? 'checked' : '' ;?>    

            value="0">
            <label for="radioTwo2">
              No
            </label>
          </div>
         <div id="2_question_view" class="<?=(isset($question_2_data->q2_checked_value)   && ($question_2_data->q2_checked_value=='0')) ? 'visibility' : '' ;?>">
        <table class="table table-bordered" style="border: 0;">
          <thead>
            <tr>
              <th text-align="center">Level of Risky community</th>
              <th text-align="center">Choose of vulnerable-list</th>
              <th text-align="center">Others (Specify)</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Most at risk</td>
              <input type="hidden" name="level_risky_community[]" value="1">
              <td><select name="choose_vulnerable_list_id[]" id="mostRiskSelect" class="form-control q2Input">
                <option value="">Choose an item.</option>
                @foreach   ($vulnerable_list as $key => $item)
                 <option  <?=(isset($question_2_data->q2_data->mostRiskSelect)  &&   $question_2_data->q2_data->mostRiskSelect==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                 @endforeach
                </select>
              </td>
              <td><input type="text" value="<?=(isset($question_2_data->q2_data->q2_others_specify_id1)  &&   $question_2_data->q2_data->q2_others_specify_id1) ? $question_2_data->q2_data->q2_others_specify_id1 : ''?>" name="others_specify_id[]" id="q2_others_specify_id1" class="form-control q2Input <?=(isset($question_2_data->q2_data->mostRiskSelect)  &&   $question_2_data->q2_data->mostRiskSelect==11) ? '' : 'otherText' ;?>"> </td>
            </tr>
            <tr>
              <td>Moderately at risk</td>
              <input type="hidden" name="level_risky_community[]" value="2">
              <td><select name="choose_vulnerable_list_id[]" id="moderateRiskSelect" class="form-control q2Input">
              <option value="">Choose an item.</option>
                @foreach   ($vulnerable_list as $key => $item)
                 <option  <?=(isset($question_2_data->q2_data->moderateRiskSelect)  &&   $question_2_data->q2_data->moderateRiskSelect==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                 @endforeach
                </select>
              </td>
              <td><input type="text" value="<?=(isset($question_2_data->q2_data->q2_others_specify_id2)  &&   $question_2_data->q2_data->q2_others_specify_id2) ? $question_2_data->q2_data->q2_others_specify_id2 : ''?>" name="others_specify_id[]" id="q2_others_specify_id2" class="form-control q2Input <?=(isset($question_2_data->q2_data->moderateRiskSelect)  &&   $question_2_data->q2_data->moderateRiskSelect==11) ? '' : 'otherText' ;?>"> </td>
            </tr>
            <tr>
              <td>Least at Risk</td>
              <input type="hidden" name="level_risky_community[]" value="3">
              <td><select name="choose_vulnerable_list_id[]"  class="form-control q2Input" id="leastRiskSelect" >
              <option value="">Choose an item.</option>
                @foreach   ($vulnerable_list as $key => $item)
                 <option <?=(isset($question_2_data->q2_data->leastRiskSelect)  &&   $question_2_data->q2_data->leastRiskSelect==$key) ? 'selected' : '' ;?> value="{{ $key }}">{{$item}}</option>
                 @endforeach
                </select>
              </td>
              <td><input type="text" value="<?=(isset($question_2_data->q2_data->q2_others_specify_id3)  &&   $question_2_data->q2_data->q2_others_specify_id3) ? $question_2_data->q2_data->q2_others_specify_id3 : ''?>"  name="others_specify_id[]" class="form-control q2Input <?=(isset($question_2_data->q2_data->moderateRiskSelect)  &&   $question_2_data->q2_data->leastRiskSelect==11) ? '' : 'otherText' ;?>" id="q2_others_specify_id3"> </td>
            </tr>
          </tbody>

        </table>
       </div>


        <br>
        <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question2">Save</button>       
        </p>


      </div>
    </div>
  </div>
  @endif
<?php }
  ?>
  <script>

$(function(){
  $(document).on("click",'#temp-save-question2',function() {
    let yes_no_value=$("input[type='radio'][name='is_sex_trafficking_location_q2']:checked").val()
    var q2_data={}
    if(yes_no_value==1){
    $('.q2Input').each(function() {
      Object.assign(q2_data,{[$(this).attr('id')]:$(this).val()}) 

     });
    }
    let new_data={
        q2_data:q2_data,
        q2_checked_value:yes_no_value,
      } 
      // console.log(new_data)
    $.ajax({    //create an ajax request to display.php
            type: "POST",
            data:{
              "_token": "{{ csrf_token() }}",
              'q2_data':new_data,
              'question_no':'2',
            },
            url: "/superadmin/case/temp-save-question",             
            success: function(response){ 
              if(response){
                alert("Question two has been saved temporary")
              }else{
                alert("Not Saved")
              }
            }
    });
  }); 
}); 

</script>