<?php
if($questiontitles[5]->status==0)
{

  ?>
@if(Auth::user()->can('6.question'))
<style>
  .visibility{
    display:none;
  }
</style>
     <div class="col-md-12 question6">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
             <span class="numbering">6</span>.
           @if (isset($questiontitles [5]))
         {{ $questiontitles[5]->title }}

         @endif
          </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="icheck-primary">
            <?php if(isset($question_6_data->q6_checked_value)) {?>
            <input 
            type="radio" 
            id="radioSix1"  
            class="sixstatus" 
            name="is_prevention_efforts_q6" 
            <?=(isset($question_6_data->q6_checked_value) && $question_6_data->q6_checked_value=="1")?"checked":"" ;?>     
            value="1">
            <?php }else {?>
            
            <input type="radio" id="radioSix1"  class="sixstatus" name="is_prevention_efforts_q6" checked  value="1">
            <?php }?>
            
            <label for="radioSix1">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input  
            type="radio" 
            id="radioSix2"  
            class="sixstatus"  
            name="is_prevention_efforts_q6"  
            <?=(isset($question_6_data->q6_checked_value) && $question_6_data->q6_checked_value=="0")?"checked":"" ;?>     
            value="0">
            <label for="radioSix2">
              No
            </label>
          </div>
          <div id="six_question_view" class="<?=(isset($question_6_data->q6_checked_value)   && ($question_6_data->q6_checked_value=='0')) ? 'visibility' : '' ;?>">
          <table class="table table-bordered table-white">
            <thead>
              <tr>
                <th scope="col">Type of preventive Action</th>
                <th scope="col">Allocation (in BDT)</th>


              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Total Allocation under NPA for prevention</th>
                <input type="hidden" name="type_preventive_action[]" value="1"> 
                <td> <input type="text" name="allocation_id[]" value="<?=(isset($question_6_data->q6_data->q6NpaPrevention)  &&   $question_6_data->q6_data->q6NpaPrevention) ? $question_6_data->q6_data->q6NpaPrevention : ''?>" id="q6NpaPrevention" class="form-control q6Input"> </td>


              </tr>
              <tr>
                <th scope="row">Total Allocation utilized under NPA for prevention</th>
                <input type="hidden" name="type_preventive_action[]" value="2"> 
                <td> <input type="text" name="allocation_id[]" value="<?=(isset($question_6_data->q6_data->q6UNpaPrevention)  &&   $question_6_data->q6_data->q6UNpaPrevention) ? $question_6_data->q6_data->q6UNpaPrevention : ''?>" id="q6UNpaPrevention" class="form-control q6Input"> </td>

              </tr>
              <tr>
                <th scope="row">Total allocation spent for Awareness activities</th>
                <input type="hidden" name="type_preventive_action[]" value="3"> 
                <td> <input type="text" value="<?=(isset($question_6_data->q6_data->q6awrnessallocate)  &&   $question_6_data->q6_data->q6awrnessallocate) ? $question_6_data->q6_data->q6awrnessallocate : ''?>" id="q6awrnessallocate" name="allocation_id[]" class="form-control q6Input"> </td>
              </tr>
              <tr>
                <th scope="row">Total allocation spent for safety-net</th>
                <input type="hidden" name="type_preventive_action[]" value="4"> 
                <td> <input type="text" value="<?=(isset($question_6_data->q6_data->q6SpentAlloc)  &&   $question_6_data->q6_data->q6SpentAlloc) ? $question_6_data->q6_data->q6SpentAlloc : ''?>" id="q6SpentAlloc" name="allocation_id[]" class="form-control q6Input"> </td>
              </tr>
              <tr>
                <th scope="row">Total allocation spent for training to promote prevention</th>
                <input type="hidden" name="type_preventive_action[]" value="5"> 
                <td> <input type="text" name="allocation_id[]" value="<?=(isset($question_6_data->q6_data->q6PromoPrev)  &&   $question_6_data->q6_data->q6PromoPrev) ? $question_6_data->q6_data->q6PromoPrev : ''?>" id="q6PromoPrev" class="form-control q6Input"> </td>
              </tr>
              <tr>
                <th scope="row">Assessment of Allocation</th>
                <input type="hidden" name="type_preventive_action[]" value="6"> 
                <td>
                  <select name="allocation_id[]" id="q6assesAllocate" class="form-control q6Input">
                  <option value="" disabled selected>---Select Please--</option>
                    <option <?=(isset($question_6_data->q6_data->q6assesAllocate)  &&   $question_6_data->q6_data->q6assesAllocate=='Excess') ? 'selected' : ''?> value="Excess">Excess</option>
                    <option <?=(isset($question_6_data->q6_data->q6assesAllocate)  &&   $question_6_data->q6_data->q6assesAllocate=='Adequate') ? 'selected' : ''?>  value="Adequate">Adequate</option>
                    <option <?=(isset($question_6_data->q6_data->q6assesAllocate)  &&   $question_6_data->q6_data->q6assesAllocate=='Inadequate') ? 'selected' : ''?> value="Inadequate">Inadequate</option>
                    <option  <?=(isset($question_6_data->q6_data->q6assesAllocate)  &&   $question_6_data->q6_data->q6assesAllocate=='None') ? 'selected' : ''?> value="None">None</option>
                  </select>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
          <br>
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question6">Save</button>       
          </p>
        </div>
      </div>
    </div>
    <!-- question no 6 end -->
    @endif

    <?php }
  ?>
  
<script>
    $(function(){
  $(document).on("click",'#temp-save-question6',function() {
    
    let yes_no_value=$("input[type='radio'][name='is_prevention_efforts_q6']:checked").val()
    var q6_data={}

    if(yes_no_value=="1"){
    $('.q6Input').each(function() {
      Object.assign(q6_data,{[$(this).attr('id')]:$(this).val()}) 

     });
    }
    let new_data={
      q6_data:q6_data,
      q6_checked_value:yes_no_value,

    }
    // console.log(new_data)
    $.ajax({    //create an ajax request to display.php
            type: "POST",
            data:{
              "_token": "{{ csrf_token() }}",
              'q6_data':new_data,
              'question_no':'6',
            },
            url: "/superadmin/case/temp-save-question",             
            success: function(response){ 
              if(response){
                alert("Question six has been saved temporary")
              }else{
                alert("Not Saved")
              }
            }
    });
  }); 
}); 
</script>