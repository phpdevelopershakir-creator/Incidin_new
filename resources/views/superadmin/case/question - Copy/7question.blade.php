<style>
  .visibility{
    display:none;
  }
  .othersText{
    display:none;
  }
</style>

<div class="card question7">
        <div class="card-header" role="tab" id="heading-4">
        <h6 class="card-title" style="color: {{ isset($question_7_data) ? 'blue' : 'black' }};">
            <a data-toggle="collapse" href="#Question-7" aria-expanded="false"
              aria-controls="collapse-4">
               7.Were any of these units and their staff exclusively dedicated to trafficking, or was trafficking among various responsibilities/mandates?
            </a>
          </h6>
        </div>

        <div id="Question-7" class="collapse" role="tabpane7" aria-labelledby="heading-4"
          data-parent="#accordion-2">
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
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>
       <script type="text/javascript">

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
               $('.question7.card-title').css('color', 'blue');
              alert("Question 7 has been saved temporary")
            }
    });
  }); 
}); 
</script>

<script type="text/javascript">
$(document).ready(function(){
        $(".sevenstatus").on("click",function(){
            var statusvalue = $("input[name='is_address_trafficking_q7']:checked").val();
            $('.question7').find('.othersText').hide()
            $('.question7').find('#q7others').val("")
            if(statusvalue == '1'){
              $('.question7').find('#seven_question_view').show()
              $('.question7').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question7').find('#seven_question_view').hide()
              $('.question7').find('span').removeClass('othersText')
              $('.question7').find('span').show()

            }
            else{
              $('.question7').find('#seven_question_view').hide()
              $('.question7').find('span').addClass('othersText')


            }
        });
    });

</script>
 