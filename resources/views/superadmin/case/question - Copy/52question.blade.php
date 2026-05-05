<?php
if($questiontitles[51]->status==0)
{

  ?>
@if(Auth::user()->can('52.question'))
<style>
  .othersText{
    display:none
  }
  .visibility{
    display:none
  }
</style>
    <div class="col-md-12 question52">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
              <span class="numbering">52</span>.
           @if (isset($questiontitles [51]))
         {{ $questiontitles[51]->title }}
         @endif
        </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="icheck-primary">
          <?php if(isset($question_52_data->q52_checked_value)) {?>

          <input 
          type="radio" 
          id="q52radioThree1" 
          class="fifty_two_status" 
          name="is_allocate_victim_compensation_q52" 
          <?=(isset($question_52_data->q52_checked_value) && $question_52_data->q52_checked_value=="1")?"checked":"" ;?>
 
          value="1">
          <?php }else {?>
            
          <input type="radio" id="q52radioThree1" class="fifty_two_status" name="is_allocate_victim_compensation_q52" checked value="1">
          <?php }?>
            
          <label for="q52radioThree1">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input 
            type="radio" 
            id="q52radioThree2"  
            class="fifty_two_status" 
            name="is_allocate_victim_compensation_q52" 
            <?=(isset($question_52_data->q52_checked_value) && $question_52_data->q52_checked_value=="0")?"checked":"" ;?>
            value="0">
            <label for="q52radioThree2">
              No
            </label>
          </div>
          <div class="icheck-primary input-group mb-3">
            <input 
            type="radio" 
            id="q52radioThree3"  
            class="fifty_two_status" 
            name="is_allocate_victim_compensation_q52"  
          <?=(isset($question_52_data->q52_checked_value) && $question_52_data->q52_checked_value=="2")?"checked":"" ;?>
            value="2">
            <label for="q52radioThree3">
              Others
            </label><span class="col-md-6 mt--4 <?=(isset($question_52_data->q52_checked_value)   && ($question_52_data->q52_checked_value=='2')) ? '' : 'othersText' ;?>" style="margin-top:-8px;">
            <input 
            type="text" 
            id="q52others"  
            placeholder="Others "  
            class="form-control" 
            value="<?=(isset($question_52_data->others) && $question_52_data->others)?$question_52_data->others:"";?>"
            name="allocate_victim_compensation_others_q52"></span>
        
          </div>
          <div id ="52_question_view" class="<?=(isset($question_52_data->q52_checked_value) && ($question_52_data->q52_checked_value=="2" || $question_52_data->q52_checked_value=="0"))?"visibility":"";?>">
          <table class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th style="text-align: center; margin: bottom 45%;">BDT</th>
                 <input type="hidden"  name="q52_type[]" value="1">
                <th><input type="text" value="<?= isset($question_52_data->q52_data->q52_bdt_1) ? $question_52_data->q52_data->q52_bdt_1 :''   ?>" id="q52_bdt_1" name="q52_bdt[]" class="form-control q52Input"></th>
              </tr>
              <tr>
                <th style="text-align: center; margin: bottom 45%;">MoHA</th>
                 <input type="hidden" name="q52_type[]" value="2">
                <th><input  value="<?= isset($question_52_data->q52_data->q52_bdt_2) ? $question_52_data->q52_data->q52_bdt_2 :''   ?>" type="text" id="q52_bdt_2" name="q52_bdt[]" class="form-control q52Input" ></th>
              </tr>
              <tr>
                <th style="text-align: center; margin: bottom 45%;">MoLJPA</th>
                 <input type="hidden" name="q52_type[]" value="3">
                <th><input  value="<?= isset($question_52_data->q52_data->q52_bdt_3) ? $question_52_data->q52_data->q52_bdt_3 :''   ?>" type="text" id="q52_bdt_3" name="q52_bdt[]" class="form-control q52Input"></th>
              </tr>
            </thead>
          </table>
        </div>
          <br/>
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question52">Save</button>       
            </p>
        </div>
      </div>
    </div>
    <!-- question no 52 end -->
@endif
<?php }
  ?>
<script>

$(function(){
  $(document).on("click",'#temp-save-question52',function() {

    var q52_data={}
    let yes_no_value=$("input[type='radio'][name='is_allocate_victim_compensation_q52']:checked").val()
  if(yes_no_value=='1'){
    $('.q52Input').each(function() {
      Object.assign(q52_data,{[$(this).attr('id')]:$(this).val()}) 

     });
    }
     let new_data={
        q52_data:q52_data,
        q52_checked_value:yes_no_value,
        others:$("input[name='allocate_victim_compensation_others_q52']").val()
      }  
      // console.log(new_data)
    $.ajax({    //create an ajax request to display.php
            type: "POST",
            data:{
              "_token": "{{ csrf_token() }}",
              'q52_data':new_data,
              'question_no':'52',
            },
            url: "/superadmin/case/temp-save-question40to60",             
            success: function(response){ 
              if(response){
                alert("Question 52 has been saved temporary")
              }else{
                alert("Not Saved")
              }
              
            }
    });
  }); 
}); 

</script>