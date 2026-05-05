   <style>
  .visibility{
    display:none;
  }
  .othersText{
    display:none;
  }
</style>
   <div class="card">
        <div class="card-header" role="tab" id="heading-4">
            <h6 class="card-title" style="color: {{ isset($question_8_data) ? 'blue' : 'black' }};">
            <a data-toggle="collapse" href="#Question-8" aria-expanded="false"
                aria-controls="collapse-4">
                8.Did these units/courts have adequate resources?
            </a>
            </h6>
        </div>

        <div id="Question-8" class="collapse" role="tabpane8" aria-labelledby="heading-4"
            data-parent="#accordion-2">
            <div class="card-body">
                <div class="icheck-primary">
                <?php if(isset($question_8_data->q8_checked_value)) { ?>
                    
                <input 
                    type="radio" 
                    id="radioEightYes" 
                    class="eightstatus" 
                    name="is_devote_implementation_q8" 
                    <?=(isset($question_8_data->q8_checked_value) && $question_8_data->q8_checked_value=="1")?"checked":"" ;?>    
                    value="1">
                    <?php }else { ?>
                            
                    <input type="radio" id="radioEightYes" class="eightstatus" name="is_devote_implementation_q8" checked value="1">
                    <?php } ?>    
                        
                <label for="radioEightYes">
                        Yes
                        </label>
                    </div>
                    <div class="icheck-primary">
                    <input  
                    type="radio" 
                    id="radioEightNo" 
                    class="eightstatus" 
                    name="is_devote_implementation_q8"  
                    <?=(isset($question_8_data->q8_checked_value) && $question_8_data->q8_checked_value=="0")?"checked":"" ;?>    
                    value="0">
                    <label for="radioEightNo">
                        No
                    </label>
                    </div>

            </div>
            <table id="resources_funding" class="table table-bordered table-white <?=(isset($question_8_data->q8_checked_value)) && ($question_8_data->q8_checked_value=="2" || $question_8_data->q8_checked_value=="0" )?"visibility":"" ;?>">
       <thead>
         <tr>
           <th scope="col">Allocation</th>
           <th scope="col">Allocation</th>


         </tr>
       </thead>
       <tbody>
         <tr>
           <th scope="row">Total Allocation under NPA </th>
           <input type="hidden" name="allocation_under_npa[]" value="1">
           <td> <input type="text" id="totalAllocateIunderNpa" value ="<?= isset($question_8_data->q8_data->totalAllocateIunderNpa) ? $question_8_data->q8_data->totalAllocateIunderNpa :''   ?>" name="allocation_status[]" class="form-control q8Input"> </td>
         </tr>
         <tr>
           <th scope="row">Total Allocation utilized under NPA </th>
           <input type="hidden"name="allocation_under_npa[]" value="2">
           <td> <input type="text" id="totalAllocateNpa" value ="<?= isset($question_8_data->q8_data->totalAllocateNpa) ? $question_8_data->q8_data->totalAllocateNpa :''   ?>"  name="allocation_status[]" class="form-control q8Input"> </td>

         </tr>
         <tr>
           <th scope="row">Assessment of Allocation </th>
           <input type="hidden" name="allocation_under_npa[]" value="3">
           <td> <select name="allocation_status[]" id="q8_ases_allocate" class="form-control q8Input">
              <option <?= isset($question_8_data->q8_data->q8_ases_allocate) && $question_8_data->q8_data->q8_ases_allocate=='Excess' ? 'selected' :''   ?> value="Excess">Excess</option>
               <option <?= isset($question_8_data->q8_data->q8_ases_allocate) && $question_8_data->q8_data->q8_ases_allocate=='Adequate' ? 'selected' :''   ?> value="Adequate">Adequate</option>
               <option <?= isset($question_8_data->q8_data->q8_ases_allocate) && $question_8_data->q8_data->q8_ases_allocate=='Inadequate' ? 'selected' :''   ?> value="Inadequate">Inadequate</option>
               <option <?= isset($question_8_data->q8_data->q8_ases_allocate) && $question_8_data->q8_data->q8_ases_allocate=='None' ? 'selected' :''   ?>  value="None">None</option>
             </select>
           </td>
         </tr>
       </tbody>
     </table>
     <br/>
     <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question8">Save</button>       
          </p>
        </div>

        
        </div>

        
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>

<script>
  $(function(){
    $(".eightstatus").on("click",function(){
            var statusvalue = $("input[name='is_devote_implementation_q8']:checked").val();
            if(statusvalue == '1'){
              $('#resources_funding').show()
            }
            else{
              $('#resources_funding').hide()
            }
        });
$(document).on("click",'#temp-save-question8',function() {
let yes_no_value=$("input[type='radio'][name='is_devote_implementation_q8']:checked").val();
var q8_data={}

if(yes_no_value=="1"){
$('.q8Input').each(function() {
  Object.assign(q8_data,{[$(this).attr('id')]:$(this).val()}) 
 });
}
let new_data={
      q8_data:q8_data,
      q8_checked_value:yes_no_value,
      others:$("input[name='address_trafficking_others_q7']").val()

    }
  // console.log(new_data);
$.ajax({    //create an ajax request to display.php
        type: "POST",
        data:{
          "_token": "{{ csrf_token() }}",
          'q8_data':new_data,
          'question_no':'8',
        },
        url: "/superadmin/case/temp-save-question",             
        success: function(response){ 
          if(response){
            $('.question8.card-title').css('color', 'blue');
            alert("Question 8 has been saved temporary")

          }else{
            alert("Not Saved")
          }
        }
});
}); 
  })
</script>

