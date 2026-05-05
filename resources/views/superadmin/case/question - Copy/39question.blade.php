<?php
if($questiontitles[38]->status==0)
{

  ?>
@if(Auth::user()->can('39.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
              <span class="numbering">39</span>.
           @if (isset($questiontitles [38]))
         {{ $questiontitles[38]->title }}
         @endif
        </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-white">
            <thead>
              <tr>
                <th scope="col">Type of Cases reaching verdict </th>
                <th scope="col">Number of Cases</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> Total number of cases of Internal Trafficking having conviction </td>
                <input type="hidden" name="type_cases_reaching_verdict[]" value="1">
                <td> <input type="text" name="number_of_cases[]" id="q39ColCase1" value="<?=(isset($question_39_data->q39_data->q39ColCase1)  &&   $question_39_data->q39_data->q39ColCase1) ? $question_39_data->q39_data->q39ColCase1 : ''?>" class="form-control q39Input"> </td>
              </tr>

              <tr>
                <td> Total number of cases of International Trafficking having conviction </td>
                <input type="hidden" name="type_cases_reaching_verdict[]" value="2">
                <td> <input type="text" name="number_of_cases[]" id="q39ColCase2" value="<?=(isset($question_39_data->q39_data->q39ColCase2)  &&   $question_39_data->q39_data->q39ColCase2) ? $question_39_data->q39_data->q39ColCase2 : ''?>" class="form-control q39Input"> </td>
              </tr>

              <tr>
                <td> Total number of cases of Internal Trafficking having acquittal </td>
                <input type="hidden" name="type_cases_reaching_verdict[]" value="3">
                <td> <input type="text" name="number_of_cases[]" id="q39ColCase3" value="<?=(isset($question_39_data->q39_data->q39ColCase3)  &&   $question_39_data->q39_data->q39ColCase3) ? $question_39_data->q39_data->q39ColCase3 : ''?>" class="form-control q39Input"> </td>
              </tr>
              <tr>
                <td>Total number of cases of International Trafficking having acquittal </td>
                <input type="hidden" name="type_cases_reaching_verdict[]" value="4">
                <td><input type="text" name="number_of_cases[]" id="q39ColCase4" value="<?=(isset($question_39_data->q39_data->q39ColCase4)  &&   $question_39_data->q39_data->q39ColCase4) ? $question_39_data->q39_data->q39ColCase4 : ''?>" class="form-control q39Input"></td>
              </tr>

              <tr>
                <td>Among the total number of person convicted- the number of foreign citizen </td>
                <input type="hidden" name="type_cases_reaching_verdict[]" value="5">
                <td> 
                  
                <input type="text" name="number_of_cases[]" id="q39ColCase5" value="<?=(isset($question_39_data->q39_data->q39ColCase5)  &&   $question_39_data->q39_data->q39ColCase5) ? $question_39_data->q39_data->q39ColCase5 : ''?>" class="form-control q39Input">
                 </td>
              </tr>
            </tbody>
          </table>

          <table class="table table-white">
            <thead>

            </thead>
            <tbody>
            </tbody>
          </table>
          <br>
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question39">Save</button>       
          </p>
        </div>
      </div>
    </div> 
    @endif
<?php }
  ?>
    <script>
    $(function(){
  $(document).on("click",'#temp-save-question39',function() {

    var q39_data={}
    $('.q39Input').each(function() {
      Object.assign(q39_data,{[$(this).attr('id')]:$(this).val()}) 

     });
     let new_data = {
      q39_data:q39_data
     }
    //  console.log(new_data)
    $.ajax({    //create an ajax request to display.php
            type: "POST",
            data:{
              "_token": "{{ csrf_token() }}",
              'question39':new_data,
              'question_no':'39',
            },
            url: "/superadmin/case/temp-save-question40to60",             
            success: function(response){ 
              if(response){
                alert("Question 39 has been saved temporary")
              }else{
                alert("Not Saved")
              }
            }
    });
  }); 
}); 
</script>