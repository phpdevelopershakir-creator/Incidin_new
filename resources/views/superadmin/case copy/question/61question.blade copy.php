
<?php
$q11_status=[
  1=>"Firmly Implemented/enforced",
  2=>"Reformed",
  3=>"Planned",
  4=>"Drafted",
  5=>"Updated",
  6=>"Partially enforced",
  7=>"Expanded use",
  8=>"Prohibited by law",
  9=>"Prohibitated by circular",
  10=>"Strictly monitored"

];
?>
<style>
  .othersText{
    display:none
  }
.visibility
{
  display: none;
}
</style>
    <div class="col-md-12 question11">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
             61.
            </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="icheck-primary">
              <?php if(isset($question_11_data->q11_checked_value)) {?>

            <input 
            type="radio" 
            id="radioEleven1"  
            class="eleven_status" 
            name="is_labor_recruitment_q11" 
            <?=(isset($question_11_data->q11_checked_value) && $question_11_data->q11_checked_value=="1")?"checked":"" ;?> 
 
            value="1">
              <?php }else {?>
            
            <input type="radio" id="radioEleven1"  class="eleven_status" name="is_labor_recruitment_q11" checked value="1">
              <?php }?>
            
            <label for="radioEleven1">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input 
            type="radio" 
            id="radioEleven2"  
            class="eleven_status" 
            name="is_labor_recruitment_q11"
            <?=(isset($question_11_data->q11_checked_value) && $question_11_data->q11_checked_value=="0")?"checked":"" ;?> 

            value="0">
            <label for="radioEleven2">
              No
            </label>
          </div>

          <div class="icheck-primary input-group mb-3">
            <input 
            type="radio" 
            id="radioEleven3"  
            class="eleven_status" 
            name="is_labor_recruitment_q11"
            <?=(isset($question_11_data->q11_checked_value) && $question_11_data->q11_checked_value=="2")?"checked":"" ;?> 

            value="2">
            <label for="radioEleven3">
              Others
            </label><span class="col-md-6 mt--4 <?=(isset($question_11_data->q11_checked_value) && $question_11_data->q11_checked_value=="2")?"":"othersText" ;?>">
            <input 
            type="text" 
            id="q11others"  
            placeholder="Others "  
            class="form-control" 
            value="<?=(isset($question_11_data->others) && $question_11_data->others)?$question_11_data->others:""?>"

            name="labor_recruitment_others_q11"></span>
          </div>
          <div id="eleven_question_view" class="<?=(isset($question_11_data->q11_checked_value)) && ($question_11_data->q11_checked_value=="2" || $question_11_data->q11_checked_value=="0" )?"visibility":"" ;?>">
          <table class="table table-white table-bordered">
            <thead>
              <tr>
                <th scope="col">Original Document/Approach</th>
                <th scope="col">Description of Change</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">OEMA 2013</th>
                <input type="hidden" name="original_approach[]" value="1"> 
                <td> <select name="description_change[]" id="q11Description1" class="form-control q11Input">
                <!-- @include('superadmin.case.helper.11change') -->
                <option value="" selected>---Choose an item--</option>
                  
                @foreach($q11_status as $key=>$item)
                    <option <?=(isset($question_11_data->q11_data) &&  !empty($question_11_data->q11_data) && $question_11_data->q11_data->q11Description1==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                  @endforeach
                  </select> </td>
              </tr>
              <tr>
                <th scope="row">Employee-paid-model</th>
                <input type="hidden" name="original_approach[]" value="2"> 
                <td> <select name="description_change[]" id="q11Description2" class="form-control q11Input">
                <!-- @include('superadmin.case.helper.11change') -->
                <option value="" selected>---Choose an item--</option>
                  
                  @foreach($q11_status as $key=>$item)
                      <option <?=(isset($question_11_data->q11_data) &&  !empty($question_11_data->q11_data) && $question_11_data->q11_data->q11Description2==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select></td>
              </tr>
             
              <tr>
                <th scope="row">Fair recruitment cost notification</th>
                <input type="hidden" name="original_approach[]" value="3"> 
                <td> <select name="description_change[]" id="q11Description3" class="form-control q11Input">
                <!-- @include('superadmin.case.helper.11change') -->
                <option value="" selected>---Choose an item--</option>
                  
                  @foreach($q11_status as $key=>$item)
                      <option <?=(isset($question_11_data->q11_data) &&  !empty($question_11_data->q11_data) && $question_11_data->q11_data->q11Description3==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select> </td>
              </tr>
              <tr>
                <th scope="row">Ranking of Recruiting Agents</th>
                <input type="hidden" name="original_approach[]" value="4">
                <td> <select name="description_change[]" id="q11Description4" class="form-control q11Input">
                <!-- @include('superadmin.case.helper.11change') -->
                <option value="" selected>---Choose an item--</option>
                  
                  @foreach($q11_status as $key=>$item)
                      <option <?=(isset($question_11_data->q11_data) &&  !empty($question_11_data->q11_data) && $question_11_data->q11_data->q11Description4==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select></td>
              </tr>
              <tr>
                <th scope="row">Licensing of Recruiting Agents</th>
                <input type="hidden" name="original_approach[]" value="5">
                <td> <select name="description_change[]" id="q11Description5" class="form-control q11Input">
                <!-- @include('superadmin.case.helper.11change') -->
                <option value="" selected>---Choose an item--</option>
                  
                  @foreach($q11_status as $key=>$item)
                      <option <?=(isset($question_11_data->q11_data) &&  !empty($question_11_data->q11_data) && $question_11_data->q11_data->q11Description5==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach

                  </select></td>
              </tr>
              <tr>
                <th scope="row">Registration of Informal Recruiting Agents</th>
                <input type="hidden" name="original_approach[]" value="6">
                <td> <select name="description_change[]" id="q11Description6" class="form-control q11Input">
                <!-- @include('superadmin.case.helper.11change') -->
                <option value="" selected>---Choose an item--</option>
                  
                  @foreach($q11_status as $key=>$item)
                      <option <?=(isset($question_11_data->q11_data) &&  !empty($question_11_data->q11_data) && $question_11_data->q11_data->q11Description6==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select> </td>
              </tr>
              <tr>
                <th scope="row">Zero Migration Cost Approach</th>
                <input type="hidden" name="original_approach[]" value="7">
                <td> <select name="description_change[]" id="q11Description7" class="form-control q11Input">
                <!-- @include('superadmin.case.helper.11change') -->
                <option value="" selected>---Choose an item--</option>
                  
                  @foreach($q11_status as $key=>$item)
                      <option <?=(isset($question_11_data->q11_data) &&  !empty($question_11_data->q11_data) && $question_11_data->q11_data->q11Description7==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select></td>
              </tr>

              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="original_approach[]" id="q11Other1" value="<?=(isset($question_11_data->q11_data->q11Other1))?$question_11_data->q11_data->q11Other1:"";?>" class="form-control q11Input" width="100%"> </div>
                </th>
                <td> <select name="description_change[]" id="q11Description8" class="form-control q11Input">
                <!-- @include('superadmin.case.helper.11change') -->
                <option value="" selected>---Choose an item--</option>
                  
                  @foreach($q11_status as $key=>$item)
                      <option <?=(isset($question_11_data->q11_data) &&  !empty($question_11_data->q11_data) && $question_11_data->q11_data->q11Description8==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select> </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="original_approach[]" id="q11Other2" value="<?=(isset($question_11_data->q11_data->q11Other2))?$question_11_data->q11_data->q11Other2:"";?>" class="form-control q11Input" width="100%"> </div>
                </th>
                <td> <select name="description_change[]" id="q11Description9" class="form-control q11Input">
                <!-- @include('superadmin.case.helper.11change') -->
                <option value="" selected>---Choose an item--</option>
                  
                  @foreach($q11_status as $key=>$item)
                      <option <?=(isset($question_11_data->q11_data) &&  !empty($question_11_data->q11_data) && $question_11_data->q11_data->q11Description9==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select> </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="original_approach[]" id="q11Other3" value="<?=(isset($question_11_data->q11_data->q11Other3))?$question_11_data->q11_data->q11Other3:"";?>" class="form-control q11Input" width="100%"> </div>
                </th>
                <td> <select name="description_change[]" id="q11Description10" class="form-control q11Input">
                <!-- @include('superadmin.case.helper.11change') -->
                <option value="" selected>---Choose an item--</option>
                   
                @foreach($q11_status as $key=>$item)
                      <option <?=(isset($question_11_data->q11_data) &&  !empty($question_11_data->q11_data) && $question_11_data->q11_data->q11Description10==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select> </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="original_approach[]" id="q11Other4" value="<?=(isset($question_11_data->q11_data->q11Other4))?$question_11_data->q11_data->q11Other4:"";?>" class="form-control q11Input" width="100%"> </div>
                </th>
                <td> <input type="text" name="description_change[]" id="q11DescriptionChange" value="<?=(isset($question_11_data->q11_data->q11DescriptionChange))?$question_11_data->q11_data->q11DescriptionChange:"";?>" class="form-control q11Input"> </td>
              </tr>
            </tbody>
          </table>
        </div>
        <br/>
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question11">Save</button>       
        </p>
        </div>
      </div>
    </div>
  

  ?>
    <script>

$(function(){
  $(document).on("click",'#temp-save-question11',function() {


    let yes_no_value=$("input[type='radio'][name='is_labor_recruitment_q11']:checked").val()

    var q11_data={
    }
    if(yes_no_value=="1"){
      $('.q11Input').each(function() {
        Object.assign(q11_data,{[$(this).attr('id')]:$(this).val()})   
      });

    }
    let new_data={
      q11_data:q11_data,
      q11_checked_value:yes_no_value,
      others:$("input[name='labor_recruitment_others_q11']").val()

    }
    
      // console.log(new_data)
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
              'question11':new_data,
              'question_no':'11'
            },
            url: "/superadmin/case/temp-save-question",             
            success: function(response){ 
              if(response){
                alert("Question 11 has been saved temporary")

              }else{
                alert("Not Saved")
              }
            }
    });
  }); 
}); 

</script>