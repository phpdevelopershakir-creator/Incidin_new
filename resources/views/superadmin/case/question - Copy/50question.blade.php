<?php
if($questiontitles[49]->status==0)
{

  ?>
@if(Auth::user()->can('50.question'))
<style>
  .othersText{
    display:none
  }
  .visibility{
    display:none
  }
</style>
    <div class="col-md-12 question50">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
              <span class="numbering">50</span>.
           @if (isset($questiontitles [49]))
         {{ $questiontitles[49]->title }}
         @endif
          </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">


          <div class="icheck-primary">
            <?php if(isset($question_50_data->q50_checked_value)) {?>

              <input 
              type="radio" 
              id="q50radioThree1" 
              class="fity_one" 
              name="is_spend_prosecution_efforts_q50" 
              <?=(isset($question_50_data->q50_checked_value) && $question_50_data->q50_checked_value=="1")?"checked":"" ;?>
              value="1">
              <?php }else {?>
            
            <input type="radio" id="q50radioThree1" class="fity_one" name="is_spend_prosecution_efforts_q50" checked  value="1">
            <?php }?>
            
            <label for="q50radioThree1">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input 
            type="radio" 
            id="q50radioThree2"  
            class="fity_one" 
            name="is_spend_prosecution_efforts_q50"  
            <?=(isset($question_50_data->q50_checked_value) && $question_50_data->q50_checked_value=="0")?"checked":"" ;?>

            value="0">
            <label for="q50radioThree2">
              No
            </label>
          </div>
          <div class="icheck-primary input-group mb-3">
            <input 
            type="radio" 
            id="q50radioThree3" 
            class="fity_one" 
            name="is_spend_prosecution_efforts_q50"  
            <?=(isset($question_50_data->q50_checked_value) && $question_50_data->q50_checked_value=="2")?"checked":"" ;?>
            value="2">
            <label for="q50radioThree3">
              Others
            </label><span class=" col-md-6 mt--4 <?=(isset($question_50_data->q50_checked_value)   && ($question_50_data->q50_checked_value=='2')) ? '' : 'othersText' ;?>" style="margin-top:-8px;">
            <input 
            type="text" 
            id="q50others"  
            placeholder="Others "  
            class="form-control" 
            value="<?=(isset($question_50_data->others) && $question_50_data->others)?$question_50_data->others:"";?>"
            name="spend_prosecution_efforts_others_q50"></span>
        
          </div>
            <div id="50_question_view" class="<?=(isset($question_50_data->q50_checked_value) && ($question_50_data->q50_checked_value=="2" || $question_50_data->q50_checked_value=="0"))?"visibility":"";?>">
          <table class="table table-bordered table-white">
            <thead>
              <tr>
                <th scope="col">Type of preventive Action</th>
                <th scope="col">Allocation (in BDT)</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td> Total Allocation under NPA for prosecution</td>
                <input type="hidden" name="type_preventive_action_q50[]" value="1">
                <td> <input type="text" name="total_allocation_under_npa_prosecution_q50[]" id="q50npros" value="<?=(isset($question_50_data->q50_data->q50npros)  &&   $question_50_data->q50_data->q50npros) ? $question_50_data->q50_data->q50npros : ''?>" class="form-control q50Input"> </td>
              </tr>

              <tr>
                <td> Total Allocation utilized under NPA for prosecution</td>
                <input type="hidden" name="type_preventive_action_q50[]" value="2">
                <td> <input type="text" name="total_allocation_under_npa_prosecution_q50[]" value="<?=(isset($question_50_data->q50_data->q50npapros)  &&   $question_50_data->q50_data->q50npapros) ? $question_50_data->q50_data->q50npapros : ''?>" id="q50npapros" class="form-control q50Input"> </td>
              </tr>

              <tr>
                <td> Total allocation spent for prosecution training</td>
                <input type="hidden" name="type_preventive_action_q50[]" value="3">
                <td> <input type="text" name="total_allocation_under_npa_prosecution_q50[]" id="q50pros_tarining" value="<?=(isset($question_50_data->q50_data->q50pros_tarining)  &&   $question_50_data->q50_data->q50pros_tarining) ? $question_50_data->q50_data->q50pros_tarining : ''?>" class="form-control q50Input"> </td>
              </tr>

              <tr>
                <td> Assessment of Allocation </td>
                <input type="hidden" name="type_preventive_action_q50[]" value="4">
                <td><select name="total_allocation_under_npa_prosecution_q50[]" id="q5_allocation"class="form-control q50Input">
                    <option <?=(isset($question_50_data->q50_data->q5_allocation)  &&   $question_50_data->q50_data->q5_allocation=='Excess') ? 'selected' : ''?> value="Excess">Excess</option>
                    <option <?=(isset($question_50_data->q50_data->q5_allocation)  &&   $question_50_data->q50_data->q5_allocation=='Adequate') ? 'selected' : ''?> value="Adequate">Adequate</option>
                    <option <?=(isset($question_50_data->q50_data->q5_allocation)  &&   $question_50_data->q50_data->q5_allocation=='Inadequate') ? 'selected' : ''?> value="Inadequate">Inadequate</option>
                    <option <?=(isset($question_50_data->q50_data->q5_allocation)  &&   $question_50_data->q50_data->q5_allocation=='None') ? 'selected' : ''?> value="None">None</option>
                  </select></td>
              </tr>


            </tbody>
          </table>
        </div>
          <br>
        <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question50">Save</button>       
        </p>
        </div>
      </div>
    </div>
    @endif
<?php }
  ?>
    <script>

$(function(){
  $(document).on("click",'#temp-save-question50',function() {
    var q50_data={}
    let yes_no_value=$("input[type='radio'][name='is_spend_prosecution_efforts_q50']:checked").val()
  if(yes_no_value=='1'){
    $('.q50Input').each(function() {
      Object.assign(q50_data,{[$(this).attr('id')]:$(this).val()}) 
     });
    }
     let new_data={
        q50_data:q50_data,
        q50_checked_value:yes_no_value,
        others:$("input[name='spend_prosecution_efforts_others_q50']").val()
      }  
      // console.log(new_data)
    $.ajax({    //create an ajax request to display.php
            type: "POST",
            data:{
              "_token": "{{ csrf_token() }}",
              'q50_data':new_data,
              'question_no':'50',
            },
            url: "/superadmin/case/temp-save-question40to60",          
            success: function(response){ 
              if(response){
                alert("Question 50 has been saved temporary")
              }else{
                alert("Not Saved")
              }
            }
    });
  }); 
}); 

</script>