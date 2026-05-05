<?php
if($questiontitles[4]->status==0)
{

  ?>

@if(Auth::user()->can('5.question'))
<?php
$q5_type_policy=[
  1=>'National Policy',
  2=>'National Strategy',
  3=>'National Plan',
  4=>'Regional Arrangement',
  5=>'Economic Policy'
];
?>
<div class="col-md-12 question5">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
         <span class="numbering">5</span>.
           @if (isset($questiontitles [4]))
         {{ $questiontitles[4]->title }}

         @endif
     
    </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="icheck-primary">
      <?php if(isset($question_5_data->q5_checked_value)) {?>

        <input 
        type="radio" 
        id="radioFive1"  
        class="fivestatus" 
        name="is_trafficking_overrepresented_q5" 
        <?=(isset($question_5_data->q5_checked_value) && $question_5_data->q5_checked_value=="1")?"checked":"" ;?>   
        value="1">
        <?php }else {?>
        <input type="radio" id="radioFive1"  class="fivestatus" name="is_trafficking_overrepresented_q5" checked=""  value="1">
        <?php }?>
        <label for="radioFive1">
          Yes
        </label>
      </div>
      <div class="icheck-primary">
        <input 
        type="radio" 
        id="radioFive2" 
        class="fivestatus" 
        name="is_trafficking_overrepresented_q5"  
        <?=(isset($question_5_data->q5_checked_value) && $question_5_data->q5_checked_value=="0")?"checked":"" ;?>   
        value="0">
        <label for="radioFive2">
          No
        </label>
      </div>
      <div id="five_question_view" class="<?=(isset($question_5_data->q5_checked_value)   && ($question_5_data->q5_checked_value=='0')) ? 'visibility' : '' ;?>">
      <table class="table table-bordered table-white">
        <thead>
          <tr>
            <th scope="col">Type of Policy tool</th>
            <th scope="col">Title of the initiative</th>
            <th scope="col">Objectives</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <select name="type_policy_tool_id[]" id="q5Type1"  class="form-control q5Input">
                  <option value="" disabled selected>---Choose an item--</option>
                    @foreach($q5_type_policy as $key=>$item)
                      <option <?=(isset($question_5_data->q5_data) &&  !empty($question_5_data->q5_data) && $question_5_data->q5_data->q5Type1==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
              </select>
            </td>

            <td><input type="text" name="title_the_initiative_id[]" id="q5Title1" value="<?=(isset($question_5_data->q5_data->q5Title1))?$question_5_data->q5_data->q5Title1:"";?>"  class="form-control q5Input"></td>
            <td><input type="text" name="objectives_id[]" id="q5Obj1" value="<?=(isset($question_5_data->q5_data->q5Obj1))?$question_5_data->q5_data->q5Obj1:"";?>" class="form-control q5Input"></td>
          </tr>
          <tr>
            <td> <select name="type_policy_tool_id[]" id="q5Type2" class="form-control q5Input">
                  <option value="" disabled selected>---Choose an item--</option>
                    @foreach($q5_type_policy as $key=>$item)
                      <option <?=(isset($question_5_data->q5_data) &&  !empty($question_5_data->q5_data) && $question_5_data->q5_data->q5Type2==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
              </select>
            </td>

            <td><input type="text" name="title_the_initiative_id[]" id="q5Title2" value="<?=(isset($question_5_data->q5_data->q5Title2))?$question_5_data->q5_data->q5Title2:"";?>" class="form-control q5Input"></td>
            <td><input type="text" name="objectives_id[]" id="q5Obj2" value="<?=(isset($question_5_data->q5_data->q5Obj2))?$question_5_data->q5_data->q5Obj2:"";?>" class="form-control q5Input"></td>
          </tr>
          <tr>
            <td> <select name="type_policy_tool_id[]" id="q5Type3"  class="form-control q5Input">
                  <option value="" disabled selected>---Choose an item--</option>
                    @foreach($q5_type_policy as $key=>$item)
                      <option <?=(isset($question_5_data->q5_data) &&  !empty($question_5_data->q5_data) && $question_5_data->q5_data->q5Type3==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
              </select>
            </td>

            <td><input type="text" name="title_the_initiative_id[]" id="q5Title3" value="<?=(isset($question_5_data->q5_data->q5Title3))?$question_5_data->q5_data->q5Title3:"";?>" class="form-control q5Input"></td>
            <td><input type="text" name="objectives_id[]" id="q5Obj3" value="<?=(isset($question_5_data->q5_data->q5Obj3))?$question_5_data->q5_data->q5Obj3:"";?>" class="form-control q5Input"></td>
          </tr>
          <tr>
            <td> <select name="type_policy_tool_id[]" id="q5Type4"  class="form-control q5Input">
                  <option value="" disabled selected>---Choose an item--</option>
                    @foreach($q5_type_policy as $key=>$item)
                      <option <?=(isset($question_5_data->q5_data) &&  !empty($question_5_data->q5_data) && $question_5_data->q5_data->q5Type4==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
              </select>
            </td>

            <td><input type="text" name="title_the_initiative_id[]" id="q5Title4" value="<?=(isset($question_5_data->q5_data->q5Title4))?$question_5_data->q5_data->q5Title4:"";?>" class="form-control q5Input"></td>
            <td><input type="text" name="objectives_id[]" id="q5Obj4" value="<?=(isset($question_5_data->q5_data->q5Obj4))?$question_5_data->q5_data->q5Obj4:"";?>" class="form-control q5Input"></td>
          </tr>
          <tr>
            <td> <select name="type_policy_tool_id[]" id="q5Type5" class="form-control q5Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach($q5_type_policy as $key=>$item)
                      <option <?=(isset($question_5_data->q5_data) &&  !empty($question_5_data->q5_data) && $question_5_data->q5_data->q5Type5==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
              </select>
            </td>

            <td><input type="text" name="title_the_initiative_id[]" id="q5Title5" value="<?=(isset($question_5_data->q5_data->q5Title5))?$question_5_data->q5_data->q5Title5:"";?>" class="form-control q5Input"></td>
            <td><input type="text" name="objectives_id[]" id="q5Obj5" value="<?=(isset($question_5_data->q5_data->q5Obj5))?$question_5_data->q5_data->q5Obj5:"";?>" class="form-control q5Input"></td>
          </tr>
         
       





          <tr>
            <th scope="row">Others-1 (Specify)
              <input type="text" name="type_policy_tool_id[]" id="q5Other1" value="<?=(isset($question_5_data->q5_data->q5Other1))?$question_5_data->q5_data->q5Other1:"";?>" class="form-control q5Input">
            </th>
            <td><input type="text" name="title_the_initiative_id[]" id="q5Title6" value="<?=(isset($question_5_data->q5_data->q5Title6))?$question_5_data->q5_data->q5Title6:"";?>" class="form-control q5Input"></td>
            <td><input type="text" name="objectives_id[]" id="q5Obj6" value="<?=(isset($question_5_data->q5_data->q5Obj6))?$question_5_data->q5_data->q5Obj6:"";?>" class="form-control q5Input"></td>
          </tr>
          <tr>
            <th scope="row">Others-2 (Specify)
              <input type="text" name="type_policy_tool_id[]" id="q5Other2" value="<?=(isset($question_5_data->q5_data->q5Other2))?$question_5_data->q5_data->q5Other2:"";?>" class="form-control q5Input">
            </th>
            <td><input type="text" name="title_the_initiative_id[]" id="q5Title7" value="<?=(isset($question_5_data->q5_data->q5Title7))?$question_5_data->q5_data->q5Title7:"";?>" class="form-control q5Input"> </td>
            <td><input type="text" name="objectives_id[]" id="q5Obj7" value="<?=(isset($question_5_data->q5_data->q5Obj7))?$question_5_data->q5_data->q5Obj7:"";?>" class="form-control q5Input"></td>
          </tr>
          <tr>
            <th scope="row">Others-3 (Specify)
              <input type="text" name="type_policy_tool_id[]" id="q5Other3" value="<?=(isset($question_5_data->q5_data->q5Other3))?$question_5_data->q5_data->q5Other3:"";?>" class="form-control q5Input">
            </th>
            <td><input type="text" name="title_the_initiative_id[]" id="q5Title8" value="<?=(isset($question_5_data->q5_data->q5Title8))?$question_5_data->q5_data->q5Title8:"";?>" class="form-control q5Input"></td>
            <td><input type="text" name="objectives_id[]" id="q5Obj8" value="<?=(isset($question_5_data->q5_data->q5Obj8))?$question_5_data->q5_data->q5Obj8:"";?>" class="form-control q5Input"></td>
          </tr>
        </tbody>
      </table>
    </div>
    <br/>
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question5">Save</button>       
        </p>
    </div>
  </div>
</div>
@endif
<?php }
  ?>
<script>

$(function(){
  $(document).on("click",'#temp-save-question5',function() {


    let yes_no_value=$("input[type='radio'][name='is_trafficking_overrepresented_q5']:checked").val()

    var q5_data={
    }
    if(yes_no_value=="1"){
      $('.q5Input').each(function() {
        Object.assign(q5_data,{[$(this).attr('id')]:$(this).val()})   
      });

    }
    let new_data={
      q5_data:q5_data,
      q5_checked_value:yes_no_value,

    }
    
      // console.log(new_data)
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
              'question5':new_data,
              'question_no':'5'
            },
            url: "/superadmin/case/temp-save-question",             
            success: function(response){ 
              if(response){
                alert("Question 5 has been saved temporary")

              }else{
                alert("Not Saved")
              }
            }
    });
  }); 
}); 

</script>