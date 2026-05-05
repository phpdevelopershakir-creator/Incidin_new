<?php
if($questiontitles[22]->status==0)
{

  ?>
@if(Auth::user()->can('23.question'))
    <!-- question 23  start -->
<?php
$q23_status=[
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
    <div class="col-md-12 question23">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
         <span class="numbering">23</span>.
           @if (isset($questiontitles [22]))
         {{ $questiontitles[22]->title }}

         @endif
           </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="icheck-primary">
            <?php if(isset($question_23_data->q23_data->q23_checked_value)) {?>

            <input 
            type="radio" 
            id="q23radioThree1" 
            class="twenty_three_status" 
            name="is_detaining_arresting_individuals_q23" 
            <?=(isset($question_23_data->q23_checked_value) && $question_23_data->q23_checked_value=="1")?"checked":"" ;?> 
 
            value="1">
            <?php }else {?>
            
            <input type="radio" id="q23radioThree1" class="twenty_three_status" name="is_detaining_arresting_individuals_q23" checked value="1">
            <?php }?>
            
            <label for="q23radioThree1">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input 
            type="radio" 
            id="q23radioThree2" 
            class="twenty_three_status" 
            name="is_detaining_arresting_individuals_q23"  
            <?=(isset($question_23_data->q23_checked_value) && $question_23_data->q23_checked_value=="0")?"checked":"" ;?> 

            value="0">
            <label for="q23radioThree2">
              No
            </label>
          </div>

          <div class="icheck-primary  input-group mb-3">
            <input 
            type="radio" 
            id="q23radioThree3" 
            class="twenty_three_status" 
            name="is_detaining_arresting_individuals_q23" 
            <?=(isset($question_23_data->q23_checked_value) && $question_23_data->q23_checked_value=="2")?"checked":"" ;?> 

            value="2">
            <label for="q23radioThree3">
              Others
            </label><span class="col-md-6 mt--4 <?=(isset($question_23_data->q23_checked_value) && $question_23_data->q23_checked_value=="2")?"":"othersText" ;?>" style="margin-top:-8px;">
            <input 
            type="text" 
            id="q23others"  
            placeholder="Others "  
            class="form-control" 
            value="<?=(isset($question_23_data->others) && $question_23_data->others)?$question_23_data->others:"";?>"

            name="detaining_arresting_individuals_others_q23"></span>
          </div>
          <div id="23_question_view" class="<?=(isset($question_23_data->q23_checked_value)) && ($question_23_data->q23_checked_value=="2" || $question_23_data->q23_checked_value=="0" )?"visibility":"" ;?>">
          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Main document/Procedure</th>
                <th scope="col">Description of change/Status</th>
                <th scope="col">Attach/Upload</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Screening via checklist of MoSW</td>
                <input type="hidden" name="q23_main_document_procedure[]" value="1">
                <td> <select name="q23_status_id[]" id="q23_screen_mosw" class="form-control q23Input">
                  <option value="" disabled selected>---Choose an item--</option>
                  @foreach($q23_status as $key=>$item)
                    <option <?=(isset($question_23_data->q23_data) &&  !empty($question_23_data->q23_data) && $question_23_data->q23_data->q23_screen_mosw==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                  @endforeach

                </select><br>
                  <input  
                  type="input" 
                  id="q23_screen_via_mosw" 
                  name="q23_others_specify[]" 
                  class="form-control q23Input <?=(isset($question_23_data->q23_data->q23_screen_mosw) && $question_23_data->q23_data->q23_screen_mosw==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_23_data->q23_data->q23_screen_via_mosw))?$question_23_data->q23_data->q23_screen_via_mosw:"";?>"
                  placeholder="Other (Specify)"> </td>
                <td> <input type="file" name="upload_file_q23[]" class="form-control"> </td>
              </tr>
              <tr>
                <td>Victim Identification Guidelines of PSD/MoHA</td>
                <input type="hidden" name="q23_main_document_procedure[]" value="2">
                <td><select name="q23_status_id[]" id="q23_victim_identification_psd" class="form-control q23Input">
                  <option value="" disabled selected>---Choose an item--</option>
                  @foreach($q23_status as $key=>$item)
                    <option <?=(isset($question_23_data->q23_data) &&  !empty($question_23_data->q23_data) && $question_23_data->q23_data->q23_victim_identification_psd==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                  @endforeach
                </select> <br>
                  <input  
                  type="input" 
                  id="q23_victim_identification_guideline" 
                  name="q23_others_specify[]" 
                  class="form-control q23Input <?=(isset($question_23_data->q23_data->q23_victim_identification_psd) && $question_23_data->q23_data->q23_victim_identification_psd==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_23_data->q23_data->q23_victim_identification_guideline))?$question_23_data->q23_data->q23_victim_identification_guideline:"";?>"
                  
                  placeholder="Other (Specify)"></td>
                <td> <input type="file" name="upload_file_q23[]" class="form-control"> </td>
              </tr>
              <tr>
                <td>Screening carried out by Police as per PSHTA</td>
                <input type="hidden" name="q23_main_document_procedure[]" value="3">
                <td><select name="q23_status_id[]" id="q23_screen_carried_police" class="form-control q23Input">
                  <option value="" disabled selected>---Choose an item--</option>
                  @foreach($q23_status as $key=>$item)
                    <option <?=(isset($question_23_data->q23_data) &&  !empty($question_23_data->q23_data) && $question_23_data->q23_data->q23_screen_carried_police==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                  @endforeach
                </select><br>
                  <input  
                  type="input" 
                  id="q23_screen_carried_pshta" 
                  name="q23_others_specify[]" 
                  class="form-control q23Input <?=(isset($question_23_data->q23_data->q23_screen_carried_police) && $question_23_data->q23_data->q23_screen_carried_police==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_23_data->q23_data->q23_screen_carried_pshta))?$question_23_data->q23_data->q23_screen_carried_pshta:"";?>"
                  placeholder="Other (Specify)"> </td>
                <td> <input type="file" name="upload_file_q23[]" class="form-control"> </td>
              </tr>

              <tr>
                <td scope="row">
                  <div class="RightContaner">
                    <div class="RightContaner"> Others (Specify)</div>
                    <div class="LeftContaner"> <input type="text" name="q23_main_document_procedure[]" id="q23Other1" value="<?=(isset($question_23_data->q23_data->q23Other1))?$question_23_data->q23_data->q23Other1:"";?>" class="form-control q23Input" width="100%"> </div>
                  </div>
                </td>
                <td> 
                  <select name="q23_status_id[]" id="q23_twenty_three_1" class="form-control q23Input">
                  <option value="" disabled selected>---Choose an item--</option>
                  @foreach($q23_status as $key=>$item)
                    <option <?=(isset($question_23_data->q23_data) &&  !empty($question_23_data->q23_data) && $question_23_data->q23_data->q23_twenty_three_1==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                  @endforeach
                </select><br>
                  <input  
                  type="input" 
                  id="q23_others_specify1" 
                  name="q23_others_specify[]" 
                  class="form-control q23Input <?=(isset($question_23_data->q23_data->q23_twenty_three_1) && $question_23_data->q23_data->q23_twenty_three_1==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_23_data->q23_data->q23_others_specify1))?$question_23_data->q23_data->q23_others_specify1:"";?>"
                  placeholder="Other (Specify)">
              </td>
                <td> <input type="file" name="upload_file_q23[]" class="form-control"> </td>
              </tr>
              <tr>
                <td scope="row">
                  <div class="RightContaner">
                    <div class="RightContaner"> Others (Specify)</div>
                    <div class="LeftContaner"> <input type="text" name="q23_main_document_procedure[]" id="q23Other2" value="<?=(isset($question_23_data->q23_data->q23Other2))?$question_23_data->q23_data->q23Other2:"";?>" class="form-control q23Input" width="100%"> </div>
                  </div>
                </td>
                <td> 
                  <select name="q23_status_id[]" id="q23_twenty_three_2" class="form-control q23Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach($q23_status as $key=>$item)
                    <option <?=(isset($question_23_data->q23_data) &&  !empty($question_23_data->q23_data) && $question_23_data->q23_data->q23_twenty_three_2==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select><br>
                  <input  
                  type="input" 
                  id="q23_others_specify2" 
                  name="q23_others_specify[]" 
                  class="form-control q23Input <?=(isset($question_23_data->q23_data->q23_twenty_three_2) && $question_23_data->q23_data->q23_twenty_three_2==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_23_data->q23_data->q23_others_specify2))?$question_23_data->q23_data->q23_others_specify2:"";?>"
                  placeholder="Other (Specify)">
                 </td>
                <td> <input type="file" name="upload_file_q23[]" class="form-control"> </td>
              </tr>
              <tr>
                <td scope="row">
                  <div class="RightContaner">
                    <div class="RightContaner"> Others (Specify)</div>
                    <div class="LeftContaner"> <input type="text" name="q23_main_document_procedure[]" id="q23Other3" value="<?=(isset($question_23_data->q23_data->q23Other3))?$question_23_data->q23_data->q23Other3:"";?>" class="form-control q23Input" width="100%"> </div>
                  </div>
                </td>
                <td>
                  <select name="q23_status_id[]" id="q23_twenty_three_3" class="form-control q23Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach($q23_status as $key=>$item)
                    <option <?=(isset($question_23_data->q23_data) &&  !empty($question_23_data->q23_data) && $question_23_data->q23_data->q23_twenty_three_3==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select><br>
                  <input  
                  type="input" 
                  id="q23_others_specify3" 
                  name="q23_others_specify[]" 
                  class="form-control q23Input <?=(isset($question_23_data->q23_data->q23_twenty_three_3) && $question_23_data->q23_data->q23_twenty_three_3==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_23_data->q23_data->q23_others_specify3))?$question_23_data->q23_data->q23_others_specify3:"";?>"
                  placeholder="Other (Specify)">
                 </td>
                <td> <input type="file" name="upload_file_q23[]" class="form-control"> </td>
              </tr>
            </tbody>
          </table>
          </div>
          <br/>
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question23">Save</button>       
        </p>
        </div>
      </div>
    </div>
    <!-- question 23 end -->
@endif

<?php }
  ?>
<script>

$(function(){
  $(document).on("click",'#temp-save-question23',function() {


    let yes_no_value=$("input[type='radio'][name='is_detaining_arresting_individuals_q23']:checked").val()

    var q23_data={
      
    }
    if(yes_no_value=="1"){
      $('.q23Input').each(function() {
        Object.assign(q23_data,{[$(this).attr('id')]:$(this).val()})   
      });

    }
    var new_data={
      q23_data:q23_data,
      q23_checked_value:yes_no_value,
      others:$("input[name='detaining_arresting_individuals_others_q23']").val()

    }
    
      // console.log(new_data)
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
              'question23':new_data,
              'question_no':'23'
            },
            url: "/superadmin/case/temp-save-question40to60",             
            success: function(response){ 
              if(response){
                alert("Question 23 has been saved temporary")

              }else{
                alert("Not Saved")
              }
            }
    });
  }); 
}); 

</script>