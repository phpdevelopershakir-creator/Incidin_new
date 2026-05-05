<?php
if($questiontitles[58]->status==0)
{

  ?>
@if(Auth::user()->can('59.question'))
<style type="text/css">


</style>
<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
          <span class="numbering">59</span>.
           @if (isset($questiontitles [58]))
         {{ $questiontitles[58]->title }}
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
            <th >1</th>
            <th><input type="text" value="<?= isset($question_59_data->q59_data->q59_one) ? $question_59_data->q59_data->q59_one :''   ?>" name="q59_one" class="form-control q59Input"></th>
          </tr>
          <tr>
            <th >2</th>
            <th><input value="<?= isset($question_59_data->q59_data->q59_two) ? $question_59_data->q59_data->q59_two :''   ?>"  type="text" name="q59_two" class="form-control q59Input" ></th>
          </tr>
          <tr>
            <th >3</th>
            <th><input  value="<?= isset($question_59_data->q59_data->q59_three) ? $question_59_data->q59_data->q59_three :''   ?>" type="text" name="q59_three" class="form-control q59Input" ></th>
          </tr>
          <tr>
            <th >4</th>
            <th><input value="<?= isset($question_59_data->q59_data->q59_five) ? $question_59_data->q59_data->q59_four :''   ?>" type="text" name="q59_four" class="form-control q59Input" ></th>
          </tr>
          <tr>
            <th >5</th>
            <th><input value="<?= isset($question_59_data->q59_data->q59_five) ? $question_59_data->q59_data->q59_five :''   ?>" type="text" name="q59_five" class="form-control q59Input" ></th>
          </tr>
        
       
        </thead>
      </table>
      <br>
      <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question59">Save</button>       
        </p>
    </div>
  </div>
</div>
@endif
<?php }
  ?>


<script>

  $(function(){
    $(document).on("click",'#temp-save-question59',function() {
      var q59_data={}
      $('.q59Input').each(function() {
        Object.assign(q59_data,{[$(this).attr('name')]:$(this).val()})   
       });
      let new_data = {
        q59_data:q59_data
      }
      //  console.log(new_data)
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
                'q59_data':new_data,
                'question_no':'59',
              },
              url: "/superadmin/case/temp-save-question40to60",             
              success: function(response){
                if(response){
                  alert("Question 59 has been saved temporary")
                  
                } else{
                  alert("Not Saved")
                }
              }
      });
    }); 
  }); 

</script>