<?php
if($questiontitles[21]->status==0)
{

  ?>
@if(Auth::user()->can('22.question'))
<?php
$q22_status=[
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
<style>
  .othersText{
    display:none
  }
  .visibility{
    display:none
  }
</style>
<div class="col-md-12 question22">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
         <span class="numbering">22</span>.
           @if (isset($questiontitles [21]))
         {{ $questiontitles[21]->title }}
         @endif

      </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="icheck-primary">
      <?php if(isset($question_22_data->q22_checked_value)) {?>

        <input 
        type="radio" 
        id="q22radioThree1" 
        class="status" 
        <?=(isset($question_22_data->q22_checked_value) && $question_22_data->q22_checked_value=="1")?"checked":"" ;?> 
        name="is_proactive_victim_identification_q22"  value="1">
        <?php }else {?>
        
        <input type="radio" id="q22radioThree1" class="status" checked name="is_proactive_victim_identification_q22"  value="1">
        <?php }?>
        
        <label for="q22radioThree1">
          Yes
        </label>
      </div>
      <div class="icheck-primary">
        <input  
        type="radio" 
        id="q22radioThree2" 
        class="status" 
        <?=(isset($question_22_data->q22_checked_value) && $question_22_data->q22_checked_value=="0")?"checked":"" ;?> 
        name="is_proactive_victim_identification_q22"  value="0">
        <label for="q22radioThree2">
          No
        </label>
      </div>

      <div class="icheck-primary input-group mb-3">
        <input 
        type="radio" 
        id="q22radioThree3" 
        class="status" 
        <?=(isset($question_22_data->q22_checked_value) && $question_22_data->q22_checked_value=="2")?"checked":"" ;?> 

        name="is_proactive_victim_identification_q22"  value="2">
        <label for="q22radioThree3">
          Others
        </label><span class="col-md-6 mt--4 <?=(isset($question_22_data->q22_checked_value) && $question_22_data->q22_checked_value=="2")?"":"othersText" ;?>" style="margin-top:-8px;">
            <input 
            type="text" 
            id="q22others"  
            placeholder="Others "  
            class="form-control" 
            value="<?=(isset($question_22_data->others) && $question_22_data->others)?$question_22_data->others:"";?>"

            name="proactive_victim_identification_others_q22"></span>
      </div>
      <div id ="22_question_view" class="<?=(isset($question_22_data->q22_checked_value)) && ($question_22_data->q22_checked_value=="2" || $question_22_data->q22_checked_value=="0" )?"visibility":"" ;?>">
      <table class="table table-bordered table-white">
        <thead>
          <tr>
            <th scope="col">Main document/Procedure</th>
            <th scope="col">Description of change/Status</th>
            <th scope="col">Attach/Upload</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Victim Identification Guidelines of PSD/MoHA</th>
            <input type="hidden" name="q22_main_document_procedure[]" value="1">
            <td> <select name="q22_status_id[]" id="q22_victim_identification_psd" class="form-control q22Input">
                <!-- @include('superadmin.case.helper.options') -->
                <option value="" disabled selected>---Choose an item--</option>
                @foreach($q22_status as $key=>$item)
                    <option <?=(isset($question_22_data->q22_data) &&  !empty($question_22_data->q22_data) && $question_22_data->q22_data->q22_victim_identification_psd==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                @endforeach
            
              </select><br>
                  <input  
                  type="input" 
                  id="q22_victim_psd" 
                  name="q22_others_specify[]" 
                  class="form-control q22Input <?=(isset($question_22_data->q22_data->q22_victim_identification_psd) && $question_22_data->q22_data->q22_victim_identification_psd==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_22_data->q22_data->q22_victim_psd))?$question_22_data->q22_data->q22_victim_psd:"";?>"
                  placeholder="Other (Specify)"> </td>
            <td> <input type="file" name="upload_file_q22[]" class="form-control"> </td>
          </tr>
          <tr>
            <th scope="row">PSHT Act’s Rule on VoT identification</th>
            <input type="hidden" name="q22_main_document_procedure[]" value="2">
            <td> <select name="q22_status_id[]" id="q22_psht_identification" class="form-control q22Input">
                <!-- @include('superadmin.case.helper.options') -->
                <option value="" disabled selected>---Choose an item--</option>

                @foreach($q22_status as $key=>$item)
                    <option <?=(isset($question_22_data->q22_data) &&  !empty($question_22_data->q22_data) && $question_22_data->q22_data->q22_psht_identification==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                @endforeach
              </select><br>
                  <input  
                  type="input" 
                  id="q22_psht_act" 
                  name="q22_others_specify[]" 
                  class="form-control q22Input <?=(isset($question_22_data->q22_data->q22_psht_identification) && $question_22_data->q22_data->q22_psht_identification==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_22_data->q22_data->q22_psht_act))?$question_22_data->q22_data->q22_psht_act:"";?>"
                  placeholder="Other (Specify)"> </td>
            <td> <input type="file" name="upload_file_q22[]" class="form-control"> </td>
          </tr>
          <tr>
            <th scope="row">Victim identification checklist of MoSW</th>
            <input type="hidden" name="q22_main_document_procedure[]" value="3">
            <td> <select name="q22_status_id[]" id="q22_identification_mosw" class="form-control q22Input">
            <!-- @include('superadmin.case.helper.options') -->
            <option value="" disabled selected>---Choose an item--</option>

                @foreach($q22_status as $key=>$item)
                    <option <?=(isset($question_22_data->q22_data) &&  !empty($question_22_data->q22_data) && $question_22_data->q22_data->q22_identification_mosw==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                @endforeach
              </select><br>
                  <input  
                  type="input" 
                  id="q22_victim_identification" 
                  name="q22_others_specify[]" 
                  class="form-control q22Input <?=(isset($question_22_data->q22_data->q22_identification_mosw) && $question_22_data->q22_data->q22_identification_mosw==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_22_data->q22_data->q22_victim_identification))?$question_22_data->q22_data->q22_victim_identification:"";?>"
                  placeholder="Other (Specify)"> </td>
            <td> <input type="file" name="upload_file_q22[]" class="form-control"> </td>
          </tr>
          <tr>
            <th scope="row">VoT identification under NRM of MoHA</th>
            <input type="hidden" name="q22_main_document_procedure[]" value="4">
            <td> <select name="q22_status_id[]" id="q22_vot_identification_nrm_moha" class="form-control q22Input">
              <!-- @include('superadmin.case.helper.options') -->
              <option value="" disabled selected>---Choose an item--</option>

              @foreach($q22_status as $key=>$item)
                    <option <?=(isset($question_22_data->q22_data) &&  !empty($question_22_data->q22_data) && $question_22_data->q22_data->q22_vot_identification_nrm_moha==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                @endforeach
              </select><br>
                  <input  
                  type="input" 
                  id="q22_vot_identification_nrm" 
                  name="q22_others_specify[]" 
                  class="form-control q22Input <?=(isset($question_22_data->q22_data->q22_vot_identification_nrm_moha) && $question_22_data->q22_data->q22_vot_identification_nrm_moha==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_22_data->q22_data->q22_vot_identification_nrm))?$question_22_data->q22_data->q22_vot_identification_nrm:"";?>"
                  placeholder="Other (Specify)"> </td>
            <td> <input type="file" name="upload_file_q22[]" class="form-control"> </td>
          </tr>
          <tr>
            <th scope="row">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner">
                <input 
                type="text" 
                id="q22Other1"
                name="q22_main_document_procedure[]" 
                value="<?=(isset($question_22_data->q22_data->q22Other1))?$question_22_data->q22_data->q22Other1:"";?>"
                class="form-control q22Input" width="100%">
              </div>
            </th>
            <td> <select name="q22_status_id[]" id="q22_twenty_two_1" class="form-control q22Input">
               <!-- @include('superadmin.case.helper.options') -->
               <option value="" disabled selected>---Choose an item--</option>

               @foreach($q22_status as $key=>$item)
                    <option <?=(isset($question_22_data->q22_data) &&  !empty($question_22_data->q22_data) && $question_22_data->q22_data->q22_twenty_two_1==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                @endforeach
              </select><br>
                  <input  
                  type="input" 
                  id="q22_others_specify1" 
                  name="q22_others_specify[]" 
                  class="form-control q22Input <?=(isset($question_22_data->q22_data->q22_twenty_two_1) && $question_22_data->q22_data->q22_twenty_two_1==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_22_data->q22_data->q22_others_specify1))?$question_22_data->q22_data->q22_others_specify1:"";?>"
                  placeholder="Other (Specify)"> </td>
            <td> <input type="file" name="upload_file_q22[]" class="form-control"> </td>
          </tr>

          <tr>
            <th scope="row">

              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner">
                <input 
                type="text" 
                name="q22_main_document_procedure[]" 
                id="q22Other2"        
                value="<?=(isset($question_22_data->q22_data->q22Other2))?$question_22_data->q22_data->q22Other2:"";?>"
                class="form-control q22Input" width="100%">
              </div>


            </th>
            <td> <select name="q22_status_id[]" id="q22_twenty_two_2" class="form-control q22Input">
            <!-- @include('superadmin.case.helper.options') -->
            <option value="" disabled selected>---Choose an item--</option>

                @foreach($q22_status as $key=>$item)
                    <option <?=(isset($question_22_data->q22_data) &&  !empty($question_22_data->q22_data) && $question_22_data->q22_data->q22_twenty_two_2==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                @endforeach
              </select><br>
                  <input  
                  type="input" 
                  id="q22_others_specify2" 
                  name="q22_others_specify[]" 
                  class="form-control q22Input <?=(isset($question_22_data->q22_data->q22_twenty_two_2) && $question_22_data->q22_data->q22_twenty_two_2==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_22_data->q22_data->q22_others_specify2))?$question_22_data->q22_data->q22_others_specify2:"";?>"
                  placeholder="Other (Specify)"> </td>
            <td> <input type="file" name="upload_file_q22[]" class="form-control"> </td>
          </tr>
          <tr>
            <th scope="row">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner">
                <input 
                type="text" 
                name="q22_main_document_procedure[]" 
                id="q22Other3"
                value="<?=(isset($question_22_data->q22_data->q22Other3))?$question_22_data->q22_data->q22Other3:"";?>"
                class="form-control q22Input" width="100%">
              </div>
            </th>
            <td> <select name="q22_status_id[]" id="q22_twenty_two_3" class="form-control q22Input">
                  <!-- @include('superadmin.case.helper.options') -->
                <option value="" disabled selected>---Choose an item--</option>

                  @foreach($q22_status as $key=>$item)
                    <option <?=(isset($question_22_data->q22_data) &&  !empty($question_22_data->q22_data) && $question_22_data->q22_data->q22_twenty_two_3==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                @endforeach
              </select><br>
                  <input  
                  type="input" 
                  id="q22_others_specify3" 
                  name="q22_others_specify[]" 
                  class="form-control q22Input <?=(isset($question_22_data->q22_data->q22_twenty_two_3) && $question_22_data->q22_data->q22_twenty_two_3==9)?'':'otherSpecify';?>" 
                  value="<?=(isset($question_22_data->q22_data->q22_others_specify2))?$question_22_data->q22_data->q22_others_specify2:"";?>"
                  value="<?=(isset($question_22_data->q22_data->q22_others_specify3))?$question_22_data->q22_data->q22_others_specify3:"";?>"

                  placeholder="Other (Specify)"> </td>
            <td> <input type="file" name="upload_file_q22[]" class="form-control"> </td>
          </tr>
        </tbody>
      </table>
    </div>
      <br/>
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question22">Save</button>       
        </p>
    </div>
  </div>
</div>
@endif
<?php }
  ?>
<script>

$(function(){
  $(document).on("click",'#temp-save-question22',function() {


    let yes_no_value=$("input[type='radio'][name='is_proactive_victim_identification_q22']:checked").val()

    var q22_data={
      
    }
    if(yes_no_value=="1"){
      $('.q22Input').each(function() {
        Object.assign(q22_data,{[$(this).attr('id')]:$(this).val()})   
      });

    }

    var new_data={
      q22_data:q22_data,
      q22_checked_value:yes_no_value,
      others:$("input[name='proactive_victim_identification_others_q22']").val()

    }
      // console.log(new_data)
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
              'question22':new_data,
              'question_no':'22'
            },
            url: "/superadmin/case/temp-save-question40to60",             
            success: function(response){ 
              if(response){
                alert("Question 22 has been saved temporary")

              }else{
                alert("Not Saved")
              }
            }
    });
  }); 
}); 

</script>