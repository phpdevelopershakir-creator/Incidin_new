<?php
if($questiontitles[50]->status==0)
{

  ?>
@if(Auth::user()->can('51.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
              <span class="numbering">51</span>.
           @if (isset($questiontitles [50]))
         {{ $questiontitles[50]->title }}
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
                <th>Categories of VoTs</th>
                <th>Number of Cases</th>
                <th>Total amount Compensation in BDT</th>

              </tr>
              <tr>
        
              </tr>
              <tr>
                <td> 
                  <input type="hidden" name="q51_type[]" value="1"> 
                  Man
              </td>
                <td><input type="text" id="q51_men_1" value="<?= isset($question_51_data->q51_data->q51_men_1) ? $question_51_data->q51_data->q51_men_1 :''   ?>" name="q51_number_case[]" class="form-control q51Input q51NumberCase"></td>
                <td><input type="text" id="q51_men_2" name="q51_total_case[]" value="<?= isset($question_51_data->q51_data->q51_men_2) ? $question_51_data->q51_data->q51_men_2 :''   ?>"  class="form-control q51Input q51ColAmount"></td>
       
              </tr>
              <tr>
                <td> 
                <input type="hidden" name="q51_type[]" value="2"> 
                Women
              </td>
                <td><input type="text" id="q51_women_1" name="q51_number_case[]" value="<?= isset($question_51_data->q51_data->q51_women_1) ? $question_51_data->q51_data->q51_women_1 :''   ?>" class="form-control q51Input q51NumberCase"></td>
                <td><input type="text" id="q51_women_2" value="<?= isset($question_51_data->q51_data->q51_women_2) ? $question_51_data->q51_data->q51_women_2 :''   ?>" name="q51_total_case[]"  class="form-control q51Input q51ColAmount"></td>
       
              </tr>
              <tr>
                <td> 
                <input type="hidden" name="q51_type[]" value="3"> 
                3RD Gender
              </td>
                <td><input type="text" id="q51_3rdg_1" value="<?= isset($question_51_data->q51_data->q51_3rdg_1) ? $question_51_data->q51_data->q51_3rdg_1 :''   ?>" name="q51_number_case[]" class="form-control q51Input q51NumberCase"></td>
                <td><input type="text" id="q51_3rdg_2" name="q51_total_case[]" value="<?= isset($question_51_data->q51_data->q51_3rdg_2) ? $question_51_data->q51_data->q51_3rdg_2 :''   ?>" class="form-control q51Input q51ColAmount"></td>
       
              </tr>
              <tr>
                <td> 
                <input type="hidden" name="q51_type[]" value="4"> 
                Boy
              </td>
                <td><input type="text" value="<?= isset($question_51_data->q51_data->q51_boy_1) ? $question_51_data->q51_data->q51_boy_1 :''   ?>" id="q51_boy_1" name="q51_number_case[]" class="form-control q51Input q51NumberCase"></td>
                <td><input type="text" value="<?= isset($question_51_data->q51_data->q51_boy_2) ? $question_51_data->q51_data->q51_boy_2 :''   ?>" id="q51_boy_2" name="q51_total_case[]"  class="form-control q51Input q51ColAmount"></td>
       
              </tr>
              <tr>
                <td> 
                <input type="hidden" name="q51_type[]" value="6"> 
                Girl
              </td>
                <td><input type="text" id="q51_girl_1" name="q51_number_case[]" value="<?= isset($question_51_data->q51_data->q51_girl_1) ? $question_51_data->q51_data->q51_girl_1 :''   ?>" class="form-control q51Input q51NumberCase"></td>
                <td><input type="text" id="q51_girl_2" name="q51_total_case[]" value="<?= isset($question_51_data->q51_data->q51_girl_2) ? $question_51_data->q51_data->q51_girl_2 :''   ?>" class="form-control q51Input q51ColAmount"></td>
       
              </tr>
              <tr>
                <td> 
                Total
              </td>
                <td><input type="text" name=""  value="<?= isset($question_51_data->q51_data->q51NumberCaseTotal) ? $question_51_data->q51_data->q51NumberCaseTotal :''   ?>" id="q51NumberCaseTotal" class="form-control q51Input" readonly="true"></td>
                <td><input type="text" name="" value="<?= isset($question_51_data->q51_data->q51ColAmountTotal) ? $question_51_data->q51_data->q51ColAmountTotal :''   ?>" id="q51ColAmountTotal" class="form-control q51Col q51Input" readonly="true"></td>
       
              </tr>
            </thead>


          </table>
          <br/>
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question51">Save</button>       
            </p>
        </div>
      </div>
    </div>
    @endif
<?php }
  ?>
    <script>

$(function(){
  $(document).on("click",'#temp-save-question51',function() {

    var q51_data={}
    $('.q51Input').each(function() {
      Object.assign(q51_data,{[$(this).attr('id')]:$(this).val()}) 
     });
     let new_data = {
      q51_data:q51_data
     }
    $.ajax({    //create an ajax request to display.php
            type: "POST",
            data:{
              "_token": "{{ csrf_token() }}",
              'q51_data':new_data,
              'question_no':'51',
            },
            url: "/superadmin/case/temp-save-question40to60",             
            success: function(response){ 
              if(response){
                alert("Question 51 has been saved temporary")

              }else{
                alert("Not Saved")
              }
            }
    });
  }); 
}); 

</script>