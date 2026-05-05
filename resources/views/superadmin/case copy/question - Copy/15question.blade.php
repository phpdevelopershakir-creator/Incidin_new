<?php
if($questiontitles[14]->status==0)
{

  ?>
@if(Auth::user()->can('15.question'))
<?php
$q15_status=[
  1=>"Enforced",
  2=>"Updated and enforced",
  3=>"Stricter enforcement",
  4=>"Increased efforts"
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
    <div class="col-md-12 question15">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
           <span class="numbering">15</span>.
           @if (isset($questiontitles [14]))
         {{ $questiontitles[14]->title }}

         @endif
          </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="icheck-primary">
            <?php if(isset($question_15_data->q15_checked_value)) {?>

            <input 
            type="radio" 
            id="radioFifteen1" 
            class="fifteen_status" 
            name="is_public_procurement_q15" 
            <?=(isset($question_15_data->q15_checked_value) && $question_15_data->q15_checked_value=="1")?"checked":"" ;?> 
  
            value="1">
            <?php }else {?>
           
            <input type="radio" id="radioFifteen1" class="fifteen_status" name="is_public_procurement_q15" checked  value="1">
            <?php }?>
            
            <label for="radioFifteen1">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input 
            type="radio" 
            id="radioFifteen2" 
            class="fifteen_status" 
            <?=(isset($question_15_data->q15_checked_value) && $question_15_data->q15_checked_value=="0")?"checked":"" ;?> 

            name="is_public_procurement_q15"  value="0">
            <label for="radioFifteen2">
              No
            </label>
          </div>

          <div class="icheck-primary input-group mb-3">
            <input 
            type="radio" 
            id="radioFifteen3" 
            class="fifteen_status" 
            name="is_public_procurement_q15"  
            <?=(isset($question_15_data->q15_checked_value) && $question_15_data->q15_checked_value=="2")?"checked":"" ;?> 

            value="2">
            <label for="radioFifteen3">
              Others
            </label><span class=" col-md-6 mt--4 <?=(isset($question_15_data->q15_checked_value) && $question_15_data->q15_checked_value=="2")?"":"othersText" ;?>" style="margin-top:-8px;">
            <input 
            type="text" 
            id="q15others"  
            placeholder="Others "  
            class="form-control" 
            value="<?=(isset($question_15_data->others) && $question_15_data->others)?$question_15_data->others:""?>"

            name="public_procurement_others_q15"></span>
       
          </div>
         <div id="fifteen_question_view" class="<?=(isset($question_15_data->q15_checked_value)) && ($question_15_data->q15_checked_value=="2" || $question_15_data->q15_checked_value=="0" )?"visibility":"" ;?>">
          <table class="table table-bordered table-white">
            <thead>
              <tr>
                <th scope="col">Action/Tool</th>
                <th scope="col">Status</th>
                <th scope="col">Attach/Upload/Summary</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Procurement Policy</th>
                <input type="hidden" name="q15_action_no[]" value="1">
                <td> <select name="q15_status_id[]" id="q15Status1" class="form-control q15Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach($q15_status as $key=>$item)
                    <option <?=(isset($question_15_data->q15_data) &&  !empty($question_15_data->q15_data) && $question_15_data->q15_data->q15Status1==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select> </td>
                <td> <input type="file" name="q15_upload_summary[]" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">Anti-Corruption measures</th>
                <input type="hidden" name="q15_action_no[]" value="2">
                <td> <select name="q15_status_id[]" id="q15Status2" class="form-control q15Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach($q15_status as $key=>$item)
                    <option <?=(isset($question_15_data->q15_data) &&  !empty($question_15_data->q15_data) && $question_15_data->q15_data->q15Status2==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select> </td>
                <td> <input type="file" name="q15_upload_summary[]" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">Capacity building of government officials</th>
                <input type="hidden" name="q15_action_no[]" value="3">
                <td> <select name="q15_status_id[]" id="q15Status3" class="form-control q15Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach($q15_status as $key=>$item)
                    <option <?=(isset($question_15_data->q15_data) &&  !empty($question_15_data->q15_data) && $question_15_data->q15_data->q15Status3==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select> </td>
                <td> <input type="file" name="q15_upload_summary[]" class="form-control"> </td>
              </tr>


              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="q15_action_no[]" id="q15Other1" value="<?=isset($question_15_data->q15_data->q15Other1) && $question_15_data->q15_data->q15Other1?$question_15_data->q15_data->q15Other1:""?>" class="form-control q15Input" width="100%"> </div>
                </th>
                <td> <select name="q15_status_id[]" id="q15Status4" class="form-control q15Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach($q15_status as $key=>$item)
                    <option <?=(isset($question_15_data->q15_data) &&  !empty($question_15_data->q15_data) && $question_15_data->q15_data->q15Status4==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select> </td>
                <td> <input type="file" name="q15_upload_summary[]" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="q15_action_no[]" id="q15Other2" value="<?=isset($question_15_data->q15_data->q15Other2) && $question_15_data->q15_data->q15Other2?$question_15_data->q15_data->q15Other2:""?>" class="form-control q15Input" width="100%"> </div>
                </th>
                <td> <select name="q15_status_id[]" id="q15Status5" class="form-control q15Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach($q15_status as $key=>$item)
                    <option <?=(isset($question_15_data->q15_data) &&  !empty($question_15_data->q15_data) && $question_15_data->q15_data->q15Status5==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select> </td>
                <td> <input type="file" name="q15_upload_summary[]" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="q15_action_no[]" id="q15Other1" value="<?=isset($question_15_data->q15_data->q15Other1) && $question_15_data->q15_data->q15Other1?$question_15_data->q15_data->q15Other1:""?>" class="form-control q15Input" width="100%"> </div>
                </th>
                <td> <select name="q15_status_id[]" id="q15Status6" class="form-control q15Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach($q15_status as $key=>$item)
                    <option <?=(isset($question_15_data->q15_data) &&  !empty($question_15_data->q15_data) && $question_15_data->q15_data->q15Status6==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select> </td>
                <td> <input type="file" name="q15_upload_summary[]" class="form-control"> </td>
              </tr>
            </tbody>
          </table>
        </div>
        <br/>
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question15">Save</button>       
        </p>
        </div>
      </div>
    </div>
    @endif

<?php }
  ?>
    <script>

$(function(){
  $(document).on("click",'#temp-save-question15',function() {


    let yes_no_value=$("input[type='radio'][name='is_public_procurement_q15']:checked").val()

    var q15_data={
      
    }
    if(yes_no_value=="1"){
      $('.q15Input').each(function() {
        Object.assign(q15_data,{[$(this).attr('id')]:$(this).val()})   
      });

    }
    var new_data={
      q15_data:q15_data,
      q15_checked_value:yes_no_value,
      others:$("input[name='public_procurement_others_q15']").val()

    }
    
      // console.log(new_data)
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
              'question15':new_data,
              'question_no':'15'
            },
            url: "/superadmin/case/temp-save-question",             
            success: function(response){ 
              if(response){
                alert("Question 15 has been saved temporary")

              }else{
                alert("Not Saved")
              }
            }
    });
  }); 
}); 

</script>