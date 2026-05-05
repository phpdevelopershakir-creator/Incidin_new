<?php
if($questiontitles[6]->status==0)
{

  ?>
@if(Auth::user()->can('7.question'))
<style>
  .visibility{
    display:none;
  }
  .othersText{
    display:none;
  }
</style>
   <div class="col-md-12 question7">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
          <span class="numbering">7</span>.
           @if (isset($questiontitles [6]))
         {{ $questiontitles[6]->title }}

         @endif
          </h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="icheck-primary">
          <?php if(isset($question_7_data->q7_checked_value)) { ?>
            <input 
            type="radio" 
            id="radioSeven1" 
            class="sevenstatus" 
            name="is_address_trafficking_q7" 
            <?=(isset($question_7_data->q7_checked_value) && $question_7_data->q7_checked_value=="1")?"checked":"" ;?>    
            value="1">
            <?php }else { ?>
            
            <input type="radio" id="radioSeven1" class="sevenstatus" name="is_address_trafficking_q7" checked value="1">
            <?php } ?>    
            
            <label for="radioSeven1">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input  
            type="radio" 
            id="radioSeven2" 
            class="sevenstatus" 
            name="is_address_trafficking_q7"  
            <?=(isset($question_7_data->q7_checked_value) && $question_7_data->q7_checked_value=="0")?"checked":"" ;?>    

            value="0">
            <label for="radioSeven2">
              No
            </label>
          </div>
          <div class="icheck-primary icheck-primary input-group">
            <input 
            type="radio" 
            id="radioSeven3" 
            class="sevenstatus" 
            name="is_address_trafficking_q7"  
            <?=(isset($question_7_data->q7_checked_value) && $question_7_data->q7_checked_value=="2")?"checked":"" ;?>    
            value="2">
            <label for="radioSeven3">
              Others 
            </label> </label> <span class=" col-md-6 mt--4 <?=(isset($question_7_data->q7_checked_value) && $question_7_data->q7_checked_value=="2")? "" :"othersText" ;?>" >
            <input 
            type="text" 
            id="q7others"   
            placeholder="Others "  
            class="form-control " 
            value="<?=(isset($question_7_data->others) && $question_7_data->others) ? $question_7_data->others:'' ?>" 
            name="address_trafficking_others_q7"></span>
          </div>
          <div id="seven_question_view" class="<?=(isset($question_7_data->q7_checked_value)) && ($question_7_data->q7_checked_value=="2" || $question_7_data->q7_checked_value=="0" )?"visibility":"" ;?>">
          <table class="table table-bordered table-white">
            <thead>
              <tr>
                <th>Duration of NPA</th>
                <th>Attach/Upload</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th><input type="text" value="<?= isset($question_7_data->q7_data->duration_npa) ? $question_7_data->q7_data->duration_npa :''   ?>" name="duration_npa" class="form-control q7Input"> </th>
                <td> <input type="file" name="attach_image" class="form-control"> </td>
              </tr>
            </tbody>
          </table>
        </div>
          <br/>
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question7">Save</button>       
          </p>
         
        </div>
      </div>
    </div> 
    @endif
<?php }
  ?>
    <script>

$(function(){
  $(document).on("click",'#temp-save-question7',function() {
    
    let yes_no_value=$("input[type='radio'][name='is_address_trafficking_q7']:checked").val()
    var q7_data={}

    if(yes_no_value=="1"){
    $('.q7Input').each(function() {
      Object.assign(q7_data,{[$(this).attr('name')]:$(this).val()}) 
     });
    }
    let new_data={
      q7_data:q7_data,
      q7_checked_value:yes_no_value,
      others:$("input[name='address_trafficking_others_q7']").val()

    }
    //  console.log(new_data);
    $.ajax({    //create an ajax request to display.php
            type: "POST",
            data:{
              "_token": "{{ csrf_token() }}",
              'q7_data':new_data,
              'question_no':'7',
            },
            url: "/superadmin/case/temp-save-question",             
            success: function(response){ 
              alert("Question 7 has been saved temporary")
            }
    });
  }); 
}); 

</script>