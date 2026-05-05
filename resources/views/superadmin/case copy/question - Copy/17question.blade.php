<?php
if($questiontitles[16]->status==0)
{

  ?>
@if(Auth::user()->can('17.question'))
<?php
$q17_status=[
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
    <div class="col-md-12 question17">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
             <span class="numbering">17</span>.
           @if (isset($questiontitles [16]))
         {{ $questiontitles[16]->title }}

         @endif
          </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <!-- <div class="icheck-primary"> 
            <input type="radio" id="radioFifteen1"  class="seventeen_status" name="is_child_sex_tourism_q17" checked  value="1">
            <label for="radioFifteen1">
              Yes
            </label>
          </div> -->
          <div class="icheck-primary">
      <?php if(isset($question_17_data->q17_checked_value)) {?>
       <input 
       type="radio" 
       id="radioNineteen1"  
       class="seventeen_status" 
       name="is_child_sex_tourism_q17" 
       <?=(isset($question_17_data->q17_checked_value) && $question_17_data->q17_checked_value=="1")?"checked":"" ;?> 
 
       value="1">
       <?php }else {?>
       
       <input type="radio" id="radioNineteen1"  class="seventeen_status" name="is_child_sex_tourism_q17" checked value="1">
       <?php }?>
       
       <label for="radioNineteen1">
         Yes
       </label>
     </div>
     <div class="icheck-primary">
       <input 
       type="radio" 
       id="radioNineteen2"  
       class="seventeen_status" 
       name="is_child_sex_tourism_q17" 
       <?=(isset($question_17_data->q17_checked_value) && $question_17_data->q17_checked_value=="0")?"checked":"" ;?> 
       type="checkbox" value="0">
       <label for="radioNineteen2">
         No
       </label>
     </div>

     <div class="icheck-primary input-group mb-3">
       <input 
       type="radio" 
       id="radioNineteen3"  
       class="seventeen_status" 
       name="is_child_sex_tourism_q17" 
       <?=(isset($question_17_data->q17_checked_value) && $question_17_data->q17_checked_value=="2")?"checked":"" ;?> 

       type="checkbox" value="2">
       <label for="radioNineteen3">
         Others
       </label><span class=" col-md-6 mt--4 <?=(isset($question_17_data->q17_checked_value) && $question_17_data->q17_checked_value=="2")?"":"othersText" ;?>" style="margin-top:-8px;">
            <input 
            type="text" 
            id="q17others"  
            placeholder="Others "  
            class="form-control" 
            value="<?=(isset($question_17_data->others) && $question_17_data->others)?$question_17_data->others:""?>"
            name="child_sex_tourism_others_q17"></span>
     </div>
         
         <div id="seventeen_question_view" class="<?=(isset($question_17_data->q17_checked_value)) && ($question_17_data->q17_checked_value=="2" || $question_17_data->q17_checked_value=="0" )?"visibility":"" ;?>">
          <table class="table table-bordered table-white">
            <thead>
              <tr>
                <th scope="col">Action</th>
                <th scope="col">Status</th>
                <th scope="col">Please upload a summary note or any other relevant document.</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Awareness raising on forced prostitution and
                  trafficking among citizens</th>
                  <input type="hidden" name="action_no_q17[]"  value="1">
                <td> <select name="status_id_q17[]" id="q17_awareness_raising_forced_prostitution" class="form-control q17Input">
                <!-- @include('superadmin.case.helper.17status') -->
                <option value="" selected>---Choose an item--</option>
                  
                @foreach($q17_status as $key=>$item)
                    <option <?=(isset($question_17_data->q17_data) &&  !empty($question_17_data->q17_data) && $question_17_data->q17_data->q17_awareness_raising_forced_prostitution==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                  @endforeach
                  </select> <br>
                  <input  
                  type="input" 
                  id="q17_awareness_raising_prostitution" 
                  name="q17_awareness_raising_other_specify[]" 
                  class="form-control q17Input <?=(isset($question_17_data->q17_data->q17_awareness_raising_forced_prostitution) && $question_17_data->q17_data->q17_awareness_raising_forced_prostitution==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_17_data->q17_data->q17_awareness_raising_prostitution))?$question_17_data->q17_data->q17_awareness_raising_prostitution:"";?>"
                  placeholder="Other (Specify)">
                </td>
                <td> <input type="file" name="upload_relevant_document[]" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">Awareness raising on legal measures against
                  sexual exploitation of trafficked individuals</th>
                  <input type="hidden" name="action_no_q17[]"  value="2">
                <td> <select name="status_id_q17[]" id="q17_awareness_raising_forced_trafficked" class="form-control q17Input">
                <!-- @include('superadmin.case.helper.17status') -->
                <option value="" selected>---Choose an item--</option>
                  
                @foreach($q17_status as $key=>$item)
                    <option <?=(isset($question_17_data->q17_data) &&  !empty($question_17_data->q17_data) && $question_17_data->q17_data->q17_awareness_raising_forced_trafficked==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                  @endforeach
                  </select><br>
                  <input  
                  type="input" 
                  id="q17_awareness_raising_exploitation" 
                  name="q17_awareness_raising_other_specify[]" 
                  class="form-control q17Input <?=(isset($question_17_data->q17_data->q17_awareness_raising_forced_trafficked) && $question_17_data->q17_data->q17_awareness_raising_forced_trafficked==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_17_data->q17_data->q17_awareness_raising_exploitation))?$question_17_data->q17_data->q17_awareness_raising_exploitation:"";?>"
                  placeholder="Other (Specify)">
                 </td>
                <td> <input type="file" name="upload_relevant_document[]" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">Legal actions against foreign podophiles/sex-
                  tourists (clients on underaged girls/VoTs)</th>
                  <input type="hidden" name="action_no_q17[]"  value="3">
                <td> <select name="status_id_q17[]" id="q17_legal_action_foreign" class="form-control q17Input">
                <!-- @include('superadmin.case.helper.17status') -->
                <option value="" selected>---Choose an item--</option>
                  
                @foreach($q17_status as $key=>$item)
                    <option <?=(isset($question_17_data->q17_data) &&  !empty($question_17_data->q17_data) && $question_17_data->q17_data->q17_legal_action_foreign==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                  @endforeach
                  </select> <br>
                  <input  
                  type="input" 
                  id="q17_awareness_raising_foreign" 
                  name="q17_awareness_raising_other_specify[]" 
                  class="form-control q17Input <?=(isset($question_17_data->q17_data->q17_legal_action_foreign) && $question_17_data->q17_data->q17_legal_action_foreign==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_17_data->q17_data->q17_awareness_raising_foreign))?$question_17_data->q17_data->q17_awareness_raising_foreign:"";?>"
                  placeholder="Other (Specify)">
                </td>
                <td> <input type="file" name="upload_relevant_document[]" class="form-control"> </td>
              </tr>

            </tbody>
          </table>
        </div>
        <br/>
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question17">Save</button>       
        </p>
      </div>
    </div>
    @endif
<?php }
  ?>
    <script>

$(function(){
  $(document).on("click",'#temp-save-question17',function() {


    let yes_no_value=$("input[type='radio'][name='is_child_sex_tourism_q17']:checked").val()

    var q17_data={
      
    }
    if(yes_no_value=="1"){
      $('.q17Input').each(function() {
        Object.assign(q17_data,{[$(this).attr('id')]:$(this).val()})   
      });

    }
    let new_data={
      q17_data:q17_data,
      q17_checked_value:yes_no_value,
      others:$("input[name='child_sex_tourism_others_q17']").val()

    }
    
      // console.log(new_data)
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
              'question17':new_data,
              'question_no':'17'
            },
            url: "/superadmin/case/temp-save-question",             
            success: function(response){ 
              if(response){
                alert("Question 17 has been saved temporary")

              }else{
                alert("Not Saved")
              }
            }
    });
  }); 
}); 

</script>