<?php
if($questiontitles[28]->status==0)
{

  ?>
@if(Auth::user()->can('29.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
          <span class="numbering">29</span>.
           @if (isset($questiontitles [28]))
         {{ $questiontitles[28]->title }}

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
                <th scope="col">Type of protection Action</th>
                <th scope="col">Allocation (in BDT)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Total Allocation under NPA for protection</th>
                <input type="hidden" name="type_protection_action[]" value="1">
                <td> <input type="text" value="<?=(isset($question_29_data->q29_data->q29_npa_protection)  &&   $question_29_data->q29_data->q29_npa_protection) ? $question_29_data->q29_data->q29_npa_protection : ''?>" name="total_allocation_under_npa_protection[]" id="q29_npa_protection" class="form-control q29Input"> </td>
              </tr>

              <tr>
                <th scope="row">Total allocation spent for different protection services</th>
                <input type="hidden" name="type_protection_action[]" value="2">
                <td> <input type="text" value="<?=(isset($question_29_data->q29_data->q29_protection_servc)  &&   $question_29_data->q29_data->q29_protection_servc) ? $question_29_data->q29_data->q29_protection_servc : ''?>" name="total_allocation_under_npa_protection[]" id="q29_protection_servc" class="form-control q29Input"> </td>
              </tr>

              <tr>
                <th scope="row">Assessment of Allocation</th>
                <input type="hidden" name="type_protection_action[]" value="3">
                <td>
                  <select class="form-control q29Input" name="total_allocation_under_npa_protection[]" id="q29_asses_allocate">
                    <option value="" disabled selected>Select Please</option>
                    <option <?=(isset($question_29_data->q29_data->q29_asses_allocate)  &&   $question_29_data->q29_data->q29_asses_allocate=='Excess') ? 'selected' : ''?> value="Excess">Excess</option>
                    <option <?=(isset($question_29_data->q29_data->q29_asses_allocate)  &&   $question_29_data->q29_data->q29_asses_allocate=='Adequate') ? 'selected' : ''?> value="Adequate">Adequate</option>
                    <option <?=(isset($question_29_data->q29_data->q29_asses_allocate)  &&   $question_29_data->q29_data->q29_asses_allocate=='Inadequate') ? 'selected' : ''?> value="Inadequate">Inadequate</option>
                    <option <?=(isset($question_29_data->q29_data->q29_asses_allocate)  &&   $question_29_data->q29_data->q29_asses_allocate=='None') ? 'selected' : ''?> value="None">None</option>
                  </select>
                </td>
              </tr>
            </tbody>
          </table>
          <br>
        <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question29">Save</button>       
        </p>
        </div>
      </div>
    </div>
    @endif
<?php }
  ?>
    <script>

$(function(){
  $(document).on("click",'#temp-save-question29',function() {
    var q29_data={}
    $('.q29Input').each(function() {
      Object.assign(q29_data,{[$(this).attr('id')]:$(this).val()}) 
     });
     let new_data = {
      q29_data:q29_data
     }
    $.ajax({    //create an ajax request to display.php
            type: "POST",
            data:{
              "_token": "{{ csrf_token() }}",
              'q29_data':new_data,
              'question_no':'29',
            },
            url: "/superadmin/case/temp-save-question20to40",          
            success: function(response){ 
              if(response){
                alert("Question 29 has been saved temporary")
              }else{
                alert("Not Saved")
              }
            }
    });
  }); 
}); 

</script>