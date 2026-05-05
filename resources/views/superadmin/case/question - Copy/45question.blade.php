<?php
if($questiontitles[44]->status==0)
{

  ?>
@if(Auth::user()->can('45.question'))
<style>
  .othersText{
    display:none
  }
  .visibility{
    display:none
  }
</style>
    <div class="col-md-12 question45" >
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
           <span class="numbering">45</span>.
           @if (isset($questiontitles [44]))
         {{ $questiontitles[44]->title }}
         @endif
          </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="icheck-primary">
          <?php if(isset($question_45_data->q45_checked_value)){?>

          <input 
          id="q45radioPrimary1" 
          class="forty_five_status" 
          name="is_border_security_measures_q45" 
          type="radio" 
          <?=(isset($question_45_data->q45_checked_value)   && $question_45_data->q45_checked_value=='1') ? 'checked' : '' ;?>  
 
          value="1">
          <?php } else { ?>
            
          <input id="q45radioPrimary1" class="forty_five_status" name="is_border_security_measures_q45" type="radio" checked value="1">
          <?php } ?>
            
          <label for="q45radioPrimary1">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input 
            id="q45radioPrimary2" 
            class="forty_five_status" 
            name="is_border_security_measures_q45" 
            type="radio" 
            <?=(isset($question_45_data->q45_checked_value)   && $question_45_data->q45_checked_value=='0') ? 'checked' : '' ;?>  
            value="0">
            <label for="q45radioPrimary2">
              No
            </label>
          </div>

          <!-- <div class="form-check">
            <input class="form-check-input forty_five_status" name="forty_five_status" type="radio" value="Others">
            <label class="form-check-label">
              Others
            </label>
          </div> -->
        <div class="icheck-primary input-group mb-3">
          <input 
          type="radio" 
          id="q45radioPrimary3" 
          class="forty_five_status" 
          name="is_border_security_measures_q45" 
          <?=(isset($question_45_data->q45_checked_value)   && $question_45_data->q45_checked_value=='2') ? 'checked' : '' ;?>  
          value="2">
          <label for="q45radioPrimary3">
            Others
          </label><span class="col-md-6 mt--4 <?=(isset($question_45_data->q45_checked_value)   && ($question_45_data->q45_checked_value=='2')) ? '' : 'othersText' ;?>" style="margin-top:-8px;">
            <input 
            type="text" 
            id="q45others"  
            placeholder="Others "  
            class="form-control" 
            value="<?=(isset($question_45_data->others)) ? $question_45_data->others : '' ;?>" 
            name="border_security_measures_others_q45"></span>
        </div>
          <table id="45_question_view" class="table table-bordered table-white <?=(isset($question_45_data->q45_checked_value)   && ($question_45_data->q45_checked_value=='2' || $question_45_data->q45_checked_value=='0')) ? 'visibility' : '' ;?>">
            <thead>
              <tr>
                <th scope="col">Ministry/Department</th>
                <th scope="col">Measures Taken</th>
              </tr>
            </thead>
            <tbody>
              <tr>
  
                <td> <input type="text" id="q45MinistryOne" value="<?= isset($question_45_data->q45_data->q45MinistryOne) ? $question_45_data->q45_data->q45MinistryOne :''   ?>" name="q45_ministry_department[]" class="form-control q45Input"> </td>
                <td> <input type="text" id="q45TakenOne" value="<?= isset($question_45_data->q45_data->q45TakenOne) ? $question_45_data->q45_data->q45TakenOne :''   ?>" name="q45_measures_taken[]" class="form-control q45Input"> </td>
              </tr>

              <tr>

                <td> <input type="text" id="q45MinistryTwo" value="<?= isset($question_45_data->q45_data->q45MinistryTwo) ? $question_45_data->q45_data->q45MinistryTwo :''   ?>" name="q45_ministry_department[]" class="form-control q45Input"> </td>
                <td> <input type="text" id="q45TakenTwo" value="<?= isset($question_45_data->q45_data->q45TakenTwo) ? $question_45_data->q45_data->q45TakenTwo :''   ?>" name="q45_measures_taken[]" class="form-control q45Input"> </td>
              </tr>

              <tr>

                <td> <input type="text" id="q45MinistryThree" value="<?= isset($question_45_data->q45_data->q45MinistryThree) ? $question_45_data->q45_data->q45MinistryThree :''   ?>" name="q45_ministry_department[]" class="form-control q45Input"> </td>
                <td> <input type="text" id="q45TakenThree" value="<?= isset($question_45_data->q45_data->q45TakenThree) ? $question_45_data->q45_data->q45TakenThree :''   ?>" name="q45_measures_taken[]" class="form-control q45Input"> </td>
              </tr>

            </tbody>
          </table>
          <br/>
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question45">Save</button>       
            </p>
        </div>
      </div>
    </div>
    @endif
    <?php }
  ?>
    <script>

  $(function(){
    $(document).on("click",'#temp-save-question45',function() {

      var q45_data={}
      // alert($(this).attr('id'))
      let yes_no_value=$("input[type='radio'][name='is_border_security_measures_q45']:checked").val()
      if(yes_no_value=='1'){
      $('.q45Input').each(function() {
        Object.assign(q45_data,{[$(this).attr('id')]:$(this).val()}) 

       });
      }
       let new_data ={
        q45_data:q45_data,
        q45_checked_value:yes_no_value,
        others:$("input[name=border_security_measures_others_q45]").val()
       }
      //  console.log(new_data)
       
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
                'question45':new_data,
                'question_no':'45',
              },
              url: "/superadmin/case/temp-save-question40to60",             
              success: function(response){
                if(response){
                  alert("Question 45 has been saved temporary")

                } else{
                  alert("Not Saved")
                }
              }
      });
    }); 
  }); 

</script>