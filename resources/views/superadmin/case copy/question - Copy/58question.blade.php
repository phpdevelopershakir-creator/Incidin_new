<?php
if($questiontitles[57]->status==0)
{

  ?>
@if(Auth::user()->can('58.question'))
     
<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
        <span class="numbering">58</span>.
           @if (isset($questiontitles [57]))
         {{ $questiontitles[57]->title }}
         @endif
    </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-bordered text-center">
        <thead class="">
          <tr>
            <th align="left">BDT</th>
            
            <th><input type="text" value="<?= isset($question_58_data->q58_data->q58_bdt) ? $question_58_data->q58_data->q58_bdt :''   ?>" name="q58_bdt" placeholder="BDT" class="form-control q58Input"></th>
          </tr>
          <tr>
            <th align="left">Source</th>
       
            <th><input value="<?= isset($question_58_data->q58_data->q58_source) ? $question_58_data->q58_data->q58_source :''   ?>" type="text" name="q58_source" class="form-control q58Input" placeholder="Source"></th>
          </tr>
          <tr>
            <th align="left">Assessment of Allocation</th>
      
            <th><input type="text" value="<?= isset($question_58_data->q58_data->q58_assessment_allocation) ? $question_58_data->q58_data->q58_assessment_allocation :''   ?>" name="q58_assessment_allocation" class="form-control q58Input" placeholder="Assessment of Allocation"></th>
          </tr>
          <tr>
            <th align="left">Others</th>
      
            <th><input value="<?= isset($question_58_data->q58_data->others_total) ? $question_58_data->q58_data->others_total :''   ?>" type="text" name="others_total" class="form-control q58Input" placeholder="Others"></th>
          </tr>
          
        </thead>
      </table>
      <br/>
       <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question58">Save</button>       
        </p>
    </div>
  </div>
</div>
    @endif  

<?php }
  ?>
    <script>

  $(function(){
    $(document).on("click",'#temp-save-question58',function() {

      var q58_data={}
      $('.q58Input').each(function() {
        Object.assign(q58_data,{[$(this).attr('name')]:$(this).val()})   
       });
       let new_data ={
        q58_data:q58_data
       }
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
                'q58_data':new_data,
                'question_no':'58',
              },
              url: "/superadmin/case/temp-save-question40to60",             
              success: function(response){ 
                alert("Question 58 has been saved temporary")
              }
      });
    }); 
  }); 

</script>