<?php
if($questiontitles[13]->status==0)
{

  ?>
@if(Auth::user()->can('14.question'))
<style>
  .othersText{
    display:none
  }
  .visibility{
    display:none
  }
</style>
    <div class="col-md-12 question14">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
             <span class="numbering">14</span>.
           @if (isset($questiontitles [13]))
         {{ $questiontitles[13]->title }}

         @endif
          </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="icheck-primary">
          <?php if(isset($question_14_data->q14_checked_value)) {?>

            <input 
            type="radio" 
            id="radioFourteen1"  
            class="fourteen_status" 
            name="is_facilitate_trafficking_q14" 
            <?=(isset($question_14_data->q14_checked_value) && $question_14_data->q14_checked_value=="1")?"checked":"" ;?>  
            value="1">
            <?php }else {?>
            <input type="radio" id="radioFourteen1"  class="fourteen_status" name="is_facilitate_trafficking_q14" checked value="1">
            <?php }?>
            
            <label for="radioFourteen1">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input 
            type="radio" 
            id="radioFourteen2" 
            class="fourteen_status" 
            name="is_facilitate_trafficking_q14"
            <?=(isset($question_14_data->q14_checked_value) && $question_14_data->q14_checked_value=="0")?"checked":"" ;?>  
            value="0">
            <label for="radioFourteen2">
              No
            </label>
          </div>

          <div class="icheck-primary input-group mb-3">
            <input 
            type="radio" 
            id="radioFourteen3" 
            class="fourteen_status" 
            name="is_facilitate_trafficking_q14"  
            <?=(isset($question_14_data->q14_checked_value) && $question_14_data->q14_checked_value=="2")?"checked":"" ;?>  
            value="2">
            <label for="radioFourteen3">
              Others
            </label><span class="col-md-6 mt--4 <?=(isset($question_14_data->q14_checked_value) && $question_14_data->q14_checked_value=="2")?"":"othersText" ;?>">
            <input 
            type="text" 
            id="q14others"  
            placeholder="Others "  
            class="form-control" 
            value="<?=(isset($question_14_data->others) && $question_14_data->others)?$question_14_data->others:""?>"
            name="is_facilitate_trafficking_others_q14"></span>
          </div>
          <div id="fourteen_question_view" class="<?=(isset($question_14_data->q14_checked_value)) && ($question_14_data->q14_checked_value=="2" || $question_14_data->q14_checked_value=="0" )?"visibility":"" ;?>">
          <table class="table table-bordered table-white">
            <thead>
              <tr>
                <th scope="col">Action</th>
                <th scope="col">Attach/Upload/Summary</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Strict Monitoring of impacts of policies</th>
                <input type="hidden" name="q14_action_no[]" value="1">
                <td> <input type="file" name="q14_upload_summary[]" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">Promotion of safe migration</th>
                <input type="hidden" name="q14_action_no[]" value="2">
                <td> <input type="file" name="q14_upload_summary[]" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">Awareness raising of vulnerable groups</th>
                <input type="hidden" name="q14_action_no[]" value="3">
                <td> <input type="file" name="q14_upload_summary[]" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">Expansion of safety-net for vulnerable groups</th>
                <input type="hidden" name="q14_action_no[]" value="4">
                <td> <input type="file" name="q14_upload_summary[]" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">Promotion of skilling among vulnerable groups</th>
                <input type="hidden" name="q14_action_no[]" value="5">
                <td> <input type="file" name="q14_upload_summary[]" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner">
                     <input type="text" name="q14_action_no[]" id="q14Other1" value="<?=(isset($question_14_data->q14_data->q14Other1))?$question_14_data->q14_data->q14Other1:"";?>" class="form-control q14Input" width="100%"> </div>
                </th>
                <td> <input type="file" name="q14_upload_summary[]" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="q14_action_no[]" id="q14Other2" value="<?=(isset($question_14_data->q14_data->q14Other2))?$question_14_data->q14_data->q14Other2:"";?>" class="form-control q14Input" width="100%"> </div>
                </th>
                <td> <input type="text" name="q14_attach[]" id="q14Other3" value="<?=(isset($question_14_data->q14_data->q14Other3))?$question_14_data->q14_data->q14Other3:"";?>" class="form-control q14Input"> </td>
     

              </tr>
              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="q14_action_no[]" id="q14Other4" value="<?=(isset($question_14_data->q14_data->q14Other4))?$question_14_data->q14_data->q14Other4:"";?>" class="form-control q14Input" width="100%"> </div>
                </th>
                <td> <input type="text" name="q14_attach[]" id="q14Other5" value="<?=(isset($question_14_data->q14_data->q14Other5))?$question_14_data->q14_data->q14Other5:"";?>" class="form-control q14Input"></td>
     

              </tr>
            </tbody>
          </table>
          

        </div>
        <br/>
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question14">Save</button>       
        </p>
        </div>
      </div>
    </div>
    @endif

<?php }
  ?>
    <script>

$(function(){
  $(document).on("click",'#temp-save-question14',function() {


    let yes_no_value=$("input[type='radio'][name='is_facilitate_trafficking_q14']:checked").val()

    var q14_data={
    }
    if(yes_no_value=="1"){
      $('.q14Input').each(function() {
        Object.assign(q14_data,{[$(this).attr('id')]:$(this).val()})   
      });

    }
    let new_data={
      q14_data:q14_data,
      q14_checked_value:yes_no_value,
      others:$("input[name='is_facilitate_trafficking_others_q14']").val()

    }
    
      // console.log(new_data)
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
              'question14':new_data,
              'question_no':'14'
            },
            url: "/superadmin/case/temp-save-question",             
            success: function(response){ 
              if(response){
                alert("Question 14 has been saved temporary")

              }else{
                alert("Not Saved")
              }
            }
    });
  }); 
}); 

</script>