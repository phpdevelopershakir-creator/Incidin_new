<?php
if($questiontitles[15]->status==0)
{

  ?>
@if(Auth::user()->can('16.question'))

<?php
$q16_status=[
  1=>"Enforced",
  2=>"Updated and enforced",
  3=>"Stricter enforcement",
  4=>"Increased efforts",
  5=>"Moderate Effortt",
  6=>"Less Effort",
  7=>"Poor Enforcement",
  8=>"Under Review",
  9=>"Other (Specify)"
];
?>
    <div class="col-md-12 question16">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
        <span class="numbering">16</span>.
           @if (isset($questiontitles [15]))
         {{ $questiontitles[15]->title }}

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
                <th scope="col">Action</th>
                <th scope="col">Status</th>
                <th scope="col">Please upload a summary note or any other relevant document.</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Awareness raising on forced prostitution and
                  trafficking among citizens</th>
                  <input type="hidden" name="q16_action_no[]" value="1">
                <td> <select name="q16_status_id[]" id="q16trafficking_status" class="form-control q16Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach($q16_status as $key=>$item)
                    <option <?=(isset($question_16_data->q16_data) &&  !empty($question_16_data->q16_data) && $question_16_data->q16_data->q16trafficking_status==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                  @endforeach
                  </select>   <br>
                  <input  
                  type="input" 
                  id="q16_trafficking_other_specify" 
                  name="q16_ation_others_specify[]" 
                  class="form-control q16Input <?=(isset($question_16_data->q16_data->q16trafficking_status) && $question_16_data->q16_data->q16trafficking_status==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_16_data->q16_data->q16_trafficking_other_specify))?$question_16_data->q16_data->q16_trafficking_other_specify:"";?>"
                  placeholder="Other (Specify)">

                
                </td>
                <td> <input type="file" name="q16_upload_summary_relevant[]" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">Awareness raising on legal measures against
                  sexual exploitation of trafficked individuals</th>
                    <input type="hidden" name="q16_action_no[]" value="2">
                <td> <select name="q16_status_id[]" id="q16_sexual_status" class="form-control q16Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach($q16_status as $key=>$item)
                    <option <?=(isset($question_16_data->q16_data) &&  !empty($question_16_data->q16_data) && $question_16_data->q16_data->q16_sexual_status==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                  @endforeach
                  </select> 
                  <br>
                  <input  
                  type="input" 
                  id="q16_sexual_other_specify" 
                  name="q16_ation_others_specify[]" 
                  class="form-control q16Input <?=(isset($question_16_data->q16_data->q16_sexual_status) && $question_16_data->q16_data->q16_sexual_status==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_16_data->q16_data->q16_sexual_other_specify))?$question_16_data->q16_data->q16_sexual_other_specify:"";?>"
                  placeholder="Other (Specify)">

                </td>
                <td> <input type="file" name="q16_upload_summary_relevant[]" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">Legal actions against podophiles/sex-tourists
                  (clients on underaged girls/VoTs)</th>
                    <input type="hidden" name="q16_action_no[]" value="3">
                <td> <select name="q16_status_id[]" class="form-control q16Input" id="q16LegalStatus">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach($q16_status as $key=>$item)
                    <option <?=(isset($question_16_data->q16_data) &&  !empty($question_16_data->q16_data) && $question_16_data->q16_data->q16LegalStatus==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select> <br>
                  <input  
                  type="input" 
                  id="q16_legal_other_specify" 
                  name="q16_ation_others_specify[]" 
                  class="form-control q16Input <?=(isset($question_16_data->q16_data->q16LegalStatus) && $question_16_data->q16_data->q16LegalStatus==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_16_data->q16_data->q16_legal_other_specify))?$question_16_data->q16_data->q16_legal_other_specify:"";?>" 
                  placeholder="Other (Specify)">
                </td>
                <td> <input type="file" name="q16_upload_summary_relevant[]" class="form-control"> </td>
              </tr>


              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="q16_action_no[]" id="q16Other1" value="<?=isset($question_16_data->q16_data->q16Other1) && $question_16_data->q16_data->q16Other1?$question_16_data->q16_data->q16Other1:""?>" class="form-control q16Input" width="100%"> </div>
                </th>
                <td> <select name="q16_status_id[]"  class="form-control q16Input" id="q16_other_status1">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach($q16_status as $key=>$item)
                    <option <?=(isset($question_16_data->q16_data) &&  !empty($question_16_data->q16_data) && $question_16_data->q16_data->q16_other_status1==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select> 
                  <br>
                  <input  
                  type="input" 
                  id="q16_other_specify1" 
                  name="q16_ation_others_specify[]" 
                  class="form-control q16Input <?=(isset($question_16_data->q16_data->q16_other_status1) && $question_16_data->q16_data->q16_other_status1==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_16_data->q16_data->q16_other_specify1))?$question_16_data->q16_data->q16_other_specify1:"";?>" 
                  placeholder="Other (Specify)">
                </td>
                <td> <input type="file" name="q16_upload_summary_relevant[]" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="q16_action_no[]" id="q16Other2" value="<?=isset($question_16_data->q16_data->q16Other2) && $question_16_data->q16_data->q16Other2?$question_16_data->q16_data->q16Other2:""?>" class="form-control q16Input" width="100%"> </div>
                </th>
                <td> <select name="q16_status_id[]"  class="form-control q16Input" id="q16_other_status2">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach($q16_status as $key=>$item)
                    <option <?=(isset($question_16_data->q16_data) &&  !empty($question_16_data->q16_data) && $question_16_data->q16_data->q16_other_status2==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select> <br/>
                  <input  
                  type="input" 
                  id="q16_other_specify2" 
                  name="q16_ation_others_specify[]" 
                  class="form-control q16Input <?=(isset($question_16_data->q16_data->q16_other_status2) && $question_16_data->q16_data->q16_other_status2==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_16_data->q16_data->q16_other_specify2))?$question_16_data->q16_data->q16_other_specify2:"";?>" 
                  placeholder="Other (Specify)">

                </td>
                <td> <input type="file" name="q16_upload_summary_relevant[]" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="q16_action_no[]" id="q16Other3" value="<?=isset($question_16_data->q16_data->q16Other3) && $question_16_data->q16_data->q16Other3?$question_16_data->q16_data->q16Other3:""?>" class="form-control q16Input" width="100%"> </div>
                </th>
                <td> <select name="q16_status_id[]" id="q16_other_status3" class="form-control q16Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach($q16_status as $key=>$item)
                    <option <?=(isset($question_16_data->q16_data) &&  !empty($question_16_data->q16_data) && $question_16_data->q16_data->q16_other_status3==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select> <br/>
                  <input  
                  type="input" 
                  id="q16_other_specify3" 
                  name="q16_ation_others_specify[]" 
                  class="form-control q16Input <?=(isset($question_16_data->q16_data->q16_other_status3) && $question_16_data->q16_data->q16_other_status3==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_16_data->q16_data->q16_other_specify3))?$question_16_data->q16_data->q16_other_specify3:"";?>"
                  placeholder="Other (Specify)">

                </td>
                <td> <input type="file" name="q16_upload_summary_relevant[]" class="form-control"> </td>
              </tr>
            </tbody>
          </table>
          <br/>
          <p class="text-right">
            <button type="button" class="btn btn-success" id="temp-save-question16">Save</button>       
          </p>
        </div>
      </div>
    </div>
    @endif
<?php }
  ?>

    <script>

$(function(){
  $(document).on("click",'#temp-save-question16',function() {

    var q16_data={

    }
      $('.q16Input').each(function() {
        Object.assign(q16_data,{[$(this).attr('id')]:$(this).val()})   
      });


      let new_data={
      q16_data:q16_data,

    }
      // console.log(new_data)
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
              'question16':new_data,
              'question_no':'16'
            },
            url: "/superadmin/case/temp-save-question",             
            success: function(response){ 
              if(response){
                alert("Question 16 has been saved temporary")

              }else{
                alert("Not Saved")
              }
            }
    });
  }); 
}); 

</script>