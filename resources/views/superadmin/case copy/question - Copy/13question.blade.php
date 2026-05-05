<?php
if($questiontitles[12]->status==0)
{

  ?>
@if(Auth::user()->can('13.question'))
<?php
$q13_type_status=[
  1=>"Reform of Labour Law",
  2=>"Stricter Enforcement of law",
  3=>"Research",
  4=>"Stricter monitoring",
  5=>"Training of Factory Inspectors",
  6=>"Training of Trade Unions",
  7=>"Training of entrepreneurs",
  8=>"Prohibited by law",
  9=>"Prohibitated by circular",
  10=>"Increased legal action"

];
?>
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
           <span class="numbering">13</span>.
           @if (isset($questiontitles [12]))
         {{ $questiontitles[12]->title }}

         @endif
          </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered" border="2">
            <thead>
              <tr>

                <th scope="col">Action Level</th>
                <th scope="col">Type of Action (Multiple Response)</th>
                <th scope="col">Attach/Upload/Summary</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <th rowspan="4" scope="row">National</th>
              <input type="hidden" name="q13_action_level[]" value="1">
              <input type="hidden" name="q13_action_level[]" value="1">
              <input type="hidden" name="q13_action_level[]" value="1">
              <input type="hidden" name="q13_action_level[]" value="1">
                <td> <select name="q13_national_type_action[]" id="q13Type1" class="form-control q13Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach($q13_type_status as $key=>$item)
                      <option <?=(isset($question_13_data->q13_data) &&  !empty($question_13_data->q13_data) && $question_13_data->q13_data->q13Type1==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select>
                </td>
                <td> <input type="file" name="q13_upload_summary[]" class="form-control"> </td>
              </tr>
              <tr>
                <td scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="q13_national_type_action[]" id="q13Other1" value="<?=(isset($question_13_data->q13_data->q13Other1))?$question_13_data->q13_data->q13Other1:"";?>" class="form-control q13Input q13Input" width="100%"> </div>
                </td>
                
                </td>
                <td> <input type="file" name="q13_upload_summary[]" class="form-control"> </td>

              </tr>
              <tr>
                <td> Others (Specify)
                  <input type="text" name="q13_national_type_action[]" id="q13Other2" value="<?=(isset($question_13_data->q13_data->q13Other2))?$question_13_data->q13_data->q13Other2:"";?>" class="form-control q13Input">
                </td>
                </td>
                <td> <input type="file" name="q13_upload_summary[]" class="form-control"> </td>
              </tr>
              <tr>
                <td> Others (Specify)
                  <input type="text" name="q13_national_type_action[]" id="q13Other3" value="<?=(isset($question_13_data->q13_data->q13Other3))?$question_13_data->q13_data->q13Other3:"";?>" class="form-control q13Input">
                </td>
                </td>
                <td> <input type="file" name="q13_upload_summary[]" class="form-control"> </td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <th rowspan="4" scope="row">Global</th>
                <input type="hidden" name="q13_action_level[]" value="2">
                <input type="hidden" name="q13_action_level[]" value="2">
                <input type="hidden" name="q13_action_level[]" value="2">
                <input type="hidden" name="q13_action_level[]" value="2">
                <td> <select name="q13_national_type_action[]" id="q13Type2" class="form-control q13Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach($q13_type_status as $key=>$item)
                      <option <?=(isset($question_13_data->q13_data) &&  !empty($question_13_data->q13_data) && $question_13_data->q13_data->q13Type2==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select> </td>
                <td> <input type="file" name="q13_upload_summary[]" class="form-control"> </td>
              </tr>
              <tr>
                <td> Others (Specify)
                  <input type="text" name="q13_national_type_action[]" id="q13Other4" value="<?=(isset($question_13_data->q13_data->q13Other4))?$question_13_data->q13_data->q13Other4:"";?>" class="form-control q13Input">
                </td>
                </td>
                <td> <input type="file" name="q13_upload_summary[]" class="form-control"> </td>

              </tr>
              <tr>
                <td> Others (Specify)
                  <input type="text" name="q13_national_type_action[]" id="q13Other5" value="<?=(isset($question_13_data->q13_data->q13Other5))?$question_13_data->q13_data->q13Other5:"";?>" class="form-control q13Input">
                </td>
                </td>
                <td> <input type="file" name="q13_upload_summary[]" class="form-control"> </td>
              </tr>
              <tr>
                <td> Others (Specify)
                  <input type="text" name="q13_national_type_action[]" id="q13Other6" value="<?=(isset($question_13_data->q13_data->q13Other6))?$question_13_data->q13_data->q13Other6:"";?>" class="form-control q13Input">
                </td>
                </td>
                <td> <input type="file" name="q13_upload_summary[]" class="form-control"> </td>
              </tr>
            </tbody>
          </table>
          <br/>
          <p class="text-right">
            <button type="button" class="btn btn-success" id="temp-save-question13">Save</button>       
          </p>
        </div>
      </div>
    </div>
    @endif
<?php }
  ?>
    <script>

$(function(){
  $(document).on("click",'#temp-save-question13',function() {

    var q13_data={
    }

      $('.q13Input').each(function() {
        Object.assign(q13_data,{[$(this).attr('id')]:$(this).val()})   
      });

    let new_data={
      q13_data:q13_data,

    }
    
      // console.log(new_data)
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
              'question13':new_data,
              'question_no':'13'
            },
            url: "/superadmin/case/temp-save-question",             
            success: function(response){ 
              if(response){
                alert("Question 13 has been saved temporary")

              }else{
                alert("Not Saved")
              }
            }
    });
  }); 
}); 

</script>