<style>
.visibility
{
  display: none;
}
</style>
<div class="col-md-12 questionsuperadmin">
    <div class="card card-outline collapsed-card">
      <div class="card-header">
        <h3 class="card-title">
           @if(session()->get('lang') == 'bangla')
            আপনার এলাকায় কি নতুন কোন ধরণের পাচারের ঘটনা ঘটেছে?
          @else
          
         Only Super Admin
          </h3>
@endif
    
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
      
    <div class="card-body">
      <div class="icheck-primary">
             <?php if(isset($question_s_data->qs_checked_value)) { ?>

            <input 
            type="radio" 
            id="radioOne1" 
            class="superadmin_location_status" 
            name="is_trafficking_location_q1" 
            <?=(isset($question_s_data->qs_checked_value)   && $question_s_data->qs_checked_value=='1') ? 'checked' : '' ;?>  
            value="1">
            <?php }else { ?>
           
            <input type="radio" id="radioOne1" class="trafficking_location_status" name="is_trafficking_location_q1" checked  value="1">
            <?php } ?>    
            
            <label for="radioOne1">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input 
            type="radio" 
            id="radioOne2"  
            class="trafficking_location_status" 
            name="is_trafficking_location_q1"  
            <?=(isset($question_s_data->qs_checked_value)   && $question_s_data->qs_checked_value=='0') ? 'checked' : '' ;?>  

            value="0">
            <label for="radioOne2">
              No
            </label>
          </div>
          <div id ="1_question_view" class="<?=(isset($question_s_data->qs_checked_value)   && ($question_s_data->qs_checked_value=='0')) ? 'visibility' : '' ;?>">
        <table class="table table-bordered" style="border: 0;">
          <thead>
            <tr>
             


            </tr>
          </thead>
          <tbody>
            <tr>
     

              <textarea class="form-control"></textarea>
           
             
            

            </tr>

          </tbody>
        </table>
       </div>
      </div>
    </div>
  </div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>

<script>
      $(function(){
        $(".trafficking_location_status").on("click",function(){
          
            var statusvalue = $("input[name='is_trafficking_location_q1']:checked").val();
            if(statusvalue == '1'){
              $('.questionsuperadmin').find('#1_question_view').show()
            }else{
              $('.questionsuperadmin').find('#1_question_view').hide()
            }
        });
    });
  
</script>