<?php
if($questiontitles[20]->status==0)
{

  ?>
@if(Auth::user()->can('21.question'))
<?php
$q21_status=[
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
<div class="col-md-12 question21">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
         <span class="numbering">21</span>.
           @if (isset($questiontitles [20]))
         {{ $questiontitles[20]->title }}

         @endif
   
      </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="icheck-primary">
      <?php if(isset($question_21_data->q21_checked_value)) {?>

        <input 
        type="radio" 
        id="q21radioThree1" 
        class="twenty_one_status" 
        <?=(isset($question_21_data->q21_checked_value) && $question_21_data->q21_checked_value=="1")?"checked":"" ;?> 
        name="is_standard_procedures_victim_q21"  value="1">
        <?php }else {?>
        
        <input type="radio" id="q21radioThree1" class="twenty_one_status" checked name="is_standard_procedures_victim_q21"  value="1">
        <?php }?>
        
        <label for="q21radioThree1">
          Yes
        </label>
      </div>
      <div class="icheck-primary">
        <input 
        type="radio" 
        id="q21radioThree2" 
        class="twenty_one_status" 
        <?=(isset($question_21_data->q21_checked_value) && $question_21_data->q21_checked_value=="0")?"checked":"" ;?> 
        name="is_standard_procedures_victim_q21"  value="0">
        <label for="q21radioThree2">
          No
        </label>
      </div>

      <div class="icheck-primary input-group mb-3">
        <input 
        type="radio" 
        id="q21radioThree3" 
        class="twenty_one_status" 
        <?=(isset($question_21_data->q21_checked_value) && $question_21_data->q21_checked_value=="2")?"checked":"" ;?> 
        name="is_standard_procedures_victim_q21"  value="2">
        <label for="q21radioThree3">
          Others
        </label><span class=" col-md-6 mt--4 <?=(isset($question_21_data->q21_checked_value) && $question_21_data->q21_checked_value=="2")?"":"othersText" ;?>" style="margin-top:-8px;">
            <input 
            type="text" 
            id="q21others"  
            placeholder="Others "  
            class="form-control" 
            value="<?=(isset($question_21_data->others) && $question_21_data->others)?$question_21_data->others:"";?>"
            name="standard_procedures_victim_others_q21"></span>
      </div>
      <div id ="21_question_view" class="card-body <?=(isset($question_21_data->q21_checked_value)) && ($question_21_data->q21_checked_value=="2" || $question_21_data->q21_checked_value=="0" )?"visibility":"" ;?>">
      <table class="table table-bordered table-white">
        <thead>
          <tr>
            <th scope="col">Main document/Procedure</th>
            <th scope="col">Description of change/Status</th>
            <th scope="col">Attach/Upload</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>PSHT Act 2012 on VoT identification</th>
            <input type="hidden" name="q21_main_document_procedure[]" value="1">
            <td> <select name="q21_status_id[]" id="q21_psht_identification" class="form-control q21Input">
                <option value="" disabled selected>---Choose an item--</option>
                  @foreach($q21_status as $key=>$item)
                    <option <?=(isset($question_21_data->q21_data) &&  !empty($question_21_data->q21_data) && $question_21_data->q21_data->q21_psht_identification==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                  @endforeach
              </select><br>
                  <input  
                  type="input" 
                  id="q21_psht_act" 
                  name="q21_others_specify[]" 
                  class="form-control q21Input <?=(isset($question_21_data->q21_data->q21_psht_identification) && $question_21_data->q21_data->q21_psht_identification==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_21_data->q21_data->q21_psht_act))?$question_21_data->q21_data->q21_psht_act:"";?>"
                  placeholder="Other (Specify)">
                 </td>
            <td> <input type="file" name="upload_file_21[]" class="form-control"> </td>
          </tr>
          <tr>
            <th scope="row">NRM guideline on VoT identification</th>
            <input type="hidden" name="q21_main_document_procedure[]" value="2">
            <td> <select name="q21_status_id[]" id="q21_nrm_identification" class="form-control q21Input">
                <option value="" disabled selected>---Choose an item--</option>
                  @foreach($q21_status as $key=>$item)
                    <option <?=(isset($question_21_data->q21_data) &&  !empty($question_21_data->q21_data) && $question_21_data->q21_data->q21_nrm_identification==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                  @endforeach
              </select> <br>
                  <input  
                  type="input" 
                  id="q21_nrm_guideline" 
                  name="q21_others_specify[]" 
                  class="form-control q21Input <?=(isset($question_21_data->q21_data->q21_nrm_identification) && $question_21_data->q21_data->q21_nrm_identification==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_21_data->q21_data->q21_nrm_guideline))?$question_21_data->q21_data->q21_nrm_guideline:"";?>"
                  placeholder="Other (Specify)"></td>
            <td> <input type="file" name="upload_file_21[]" class="form-control"> </td>
          </tr>
          <tr>
            <th scope="row">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" name="q21_main_document_procedure[]" id="q21Other1" value="<?=isset($question_21_data->q21_data->q21Other1) && $question_21_data->q21_data->q21Other1?$question_21_data->q21_data->q21Other1:""?>" class="form-control q21Input" width="100%"> </div>
            </th>
            <td> <select name="q21_status_id[]" id="q21_twenty_1" class="form-control q21Input">
                <option value="" disabled selected>---Choose an item--</option>
                  @foreach($q21_status as $key=>$item)
                    <option <?=(isset($question_21_data->q21_data) &&  !empty($question_21_data->q21_data) && $question_21_data->q21_data->q21_twenty_1==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                  @endforeach
              </select><br>
                  <input  
                  type="input" 
                  id="q21_others_specifiy1" 
                  name="q21_others_specify[]" 
                  class="form-control q21Input <?=(isset($question_21_data->q21_data->q21_twenty_1) && $question_21_data->q21_data->q21_twenty_1==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_21_data->q21_data->q21_others_specifiy1))?$question_21_data->q21_data->q21_others_specifiy1:"";?>"
                  placeholder="Other (Specify)"> </td>
            <td> <input type="file" name="upload_file_21[]" class="form-control"> </td>
          </tr>
          <tr>
            <th scope="row">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" name="q21_main_document_procedure[]" id="q21Other2" value="<?=isset($question_21_data->q21_data->q21Other2) && $question_21_data->q21_data->q21Other2 ? $question_21_data->q21_data->q21Other2:""?>" class="form-control q21Input" width="100%"> </div>
            </th>
            <td> <select name="q21_status_id[]" id="q21_twenty_2" class="form-control q21Input">
                <option value="" disabled selected>---Choose an item--</option>
                  @foreach($q21_status as $key=>$item)
                    <option <?=(isset($question_21_data->q21_data) &&  !empty($question_21_data->q21_data) && $question_21_data->q21_data->q21_twenty_2==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                  @endforeach
              </select> <br>
                  <input  
                  type="input" 
                  id="q21_others_specifiy2" 
                  name="q21_others_specify[]" 
                  class="form-control q21Input <?=(isset($question_21_data->q21_data->q21_twenty_2) && $question_21_data->q21_data->q21_twenty_2==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_21_data->q21_data->q21_others_specifiy2))?$question_21_data->q21_data->q21_others_specifiy2:"";?>"
                  placeholder="Other (Specify)"> </td></td>
            <td> <input type="file" name="upload_file_21[]" class="form-control"> </td>
          </tr>
          <tr>
            <th scope="row">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" name="q21_main_document_procedure[]" id="q21Other3" value="<?=isset($question_21_data->q21_data->q21Other3) && $question_21_data->q21_data->q21Other3 ? $question_21_data->q21_data->q21Other3:""?>" class="form-control q21Input" width="100%"> </div>
            </th>
            <td> <select name="q21_status_id[]" id="q21_twenty_3" class="form-control q21Input">
                <option value="" disabled selected>---Choose an item--</option>
                  @foreach($q21_status as $key=>$item)
                    <option <?=(isset($question_21_data->q21_data) &&  !empty($question_21_data->q21_data) && $question_21_data->q21_data->q21_twenty_3==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                  @endforeach
              </select><br>
                  <input  
                  type="input" 
                  id="q21_others_specifiy3" 
                  name="q21_others_specify[]" 
                  class="form-control q21Input <?=(isset($question_21_data->q21_data->q21_twenty_3) && $question_21_data->q21_data->q21_twenty_3==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_21_data->q21_data->q21_others_specifiy3))?$question_21_data->q21_data->q21_others_specifiy3:"";?>"
                  placeholder="Other (Specify)"> </td> </td>
            <td> <input type="file" name="upload_file_21[]" class="form-control"> </td>
          </tr>
        </tbody>
      </table>
    </div>
        <br/>
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question21">Save</button>       
        </p>
    </div>
  </div>
</div>
@endif
<?php }
  ?>
<script>

$(function(){
  $(document).on("click",'#temp-save-question21',function() {


    let yes_no_value=$("input[type='radio'][name='is_standard_procedures_victim_q21']:checked").val()

    var q21_data={
    }
    if(yes_no_value=="1"){
      $('.q21Input').each(function() {
        Object.assign(q21_data,{[$(this).attr('id')]:$(this).val()})   
      });

    }
    let new_data={
      q21_data:q21_data,
      q21_checked_value:yes_no_value,
      others:$("input[name='standard_procedures_victim_others_q21']").val()

    }
    
      // console.log(new_data)
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
              'question21':new_data,
              'question_no':'21'
            },
            url: "/superadmin/case/temp-save-question40to60",             
            success: function(response){ 
              if(response){
                alert("Question 21 has been saved temporary")

              }else{
                alert("Not Saved")
              }
            }
    });
  }); 
}); 

</script>