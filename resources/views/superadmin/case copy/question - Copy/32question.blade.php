<?php
if($questiontitles[31]->status==0)
{

  ?>
@if(Auth::user()->can('32.question'))
<style>
  .othersText{
    display:none
  }
  .visibility{
    display:none
  }
</style>
<div class="col-md-12 question32">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
          <span class="numbering">32</span>.
           @if (isset($questiontitles [31]))
         {{ $questiontitles[31]->title }}
         @endif
      32.Did VoT participated in investigation and prosecution?
    </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="icheck-primary">
      <?php if(isset($question_32_data->q32_checked_value)) { ?>

        <input  
        type="radio" 
        id="q32radioPrimary1" 
        class="thirty_two_status" 
        name="is_investigation_prosecution_q32" 
        <?=(isset($question_32_data->q32_checked_value) && $question_32_data->q32_checked_value=="1")?"checked":"" ;?>    
        value="1">
        <?php }else { ?>
        
        <input  type="radio" id="q32radioPrimary1" class="thirty_two_status" name="is_investigation_prosecution_q32" checked value="1">
        <?php } ?>    
        
        <label for="q32radioPrimary1">
          Yes
        </label>
      </div>
      <div class="icheck-primary">
        <input  
        type="radio" 
        id="q32radioPrimary2" 
        class="thirty_two_status" 
        name="is_investigation_prosecution_q32"  
        <?=(isset($question_32_data->q32_checked_value) && $question_32_data->q32_checked_value=="0")?"checked":"" ;?>    
        value="0">
        <label for="q32radioPrimary2">
          No
        </label>
      </div>

      <div class="icheck-primary input-group mb-3">
        <input  
        type="radio" 
        id="q32radioPrimary3" 
        class="thirty_two_status" 
        name="is_investigation_prosecution_q32" 
        <?=(isset($question_32_data->q32_checked_value) && $question_32_data->q32_checked_value=="2")?"checked":"" ;?>    
        value="2">
        <label for="q32radioPrimary3">
          Others
        </label><span class=" col-md-6 mt--4 <?=(isset($question_32_data->q32_checked_value) && $question_32_data->q32_checked_value=="2")? "" :"othersText" ;?>" style="margin-top:-8px;">
            <input 
            type="text" 
            id="q32others"  
            placeholder="Others "  
            class="form-control" 
            value="<?=(isset($question_32_data->others) && $question_32_data->others) ? $question_32_data->others:'' ?>" 
            name="investigation_prosecution_others_q32"></span>
       
      </div>
      <div id ="32_question_view" class="<?=(isset($question_32_data->q32_checked_value) && ($question_32_data->q32_checked_value=="2" || $question_32_data->q32_checked_value=="0"))?"visibility":"";?>">
      <table class="table table-bordered text-center">
        <thead class="">
          <tr>
            <th colspan="6" style="text-align: center; margin: bottom 45%;">VoT participating in
              investigation/prosecution </th>
          </tr>
          <tr>
            <td colspan="6" text-align:"center">Internal Trafficking</td>
            <input type="hidden" name="q32_type[]" value="1">
          </tr>
          <tr>
            <th>Men</th>
            <th>Women</th>
            <th>3rd Gender</th>
            <th>Boy</th>
            <th>girls</th>
            <th>Total</th>
          </tr>

          <tr>
            <td><input type="number" name="q32_internal_trafficking_men[]" id="q32Men1" value="<?= isset($question_32_data->q32_data->q32Men1) ? $question_32_data->q32_data->q32Men1 :'' ?>" class="form-control question32RowMen question32Col1 q32Input"></td>
            <td><input type="number" name="q32_trafficking_women[]" id="q32Women1" value="<?= isset($question_32_data->q32_data->q32Women1) ? $question_32_data->q32_data->q32Women1 :'' ?>" class="form-control question32RowWomen question32Col1 q32Input"></td>
            <td><input type="number" name="q32_trafficking_third_gender[]" id="q323rdG1" value="<?= isset($question_32_data->q32_data->q323rdG1) ? $question_32_data->q32_data->q323rdG1 :'' ?>" class="form-control question32Row3rdGender question32Col1 q32Input"></td>
            <td><input type="number" name="q32_trafficking_boy[]" id="q32Boy1" value="<?= isset($question_32_data->q32_data->q32Boy1) ? $question_32_data->q32_data->q32Boy1 :'' ?>" class="form-control question32RowBoys question32Col1 q32Input"></td>
            <td><input type="number" name="q32_trafficking_girl[]" id="q32Girl1" value="<?= isset($question_32_data->q32_data->q32Girl1) ? $question_32_data->q32_data->q32Girl1 :'' ?>" class="form-control question32RowGirls question32Col1 q32Input"></td>
            <td><input type="text" name="q32_trafficking_total[]" id="question32Col1" value="<?= isset($question_32_data->q32_data->question32Col1) ? $question_32_data->q32_data->question32Col1 :'' ?>" class="form-control q32Total q32Input" readonly></td>
          </tr>

          <tr>
            <td colspan="6" text-align:"center">International Trafficking</td>
            <input type="hidden" name="q32_type[]" value="2">
          </tr>
          <tr>
            <th>Men</th>
            <th>Women</th>
            <th>3rd Gender</th>
            <th>Boy</th>
            <th>girls</th>
            <th>Total</th>
          </tr>
          <tr>
            <td><input type="number" name="q32_internal_trafficking_men[]" id="q32Men2" value="<?= isset($question_32_data->q32_data->q32Men2) ? $question_32_data->q32_data->q32Men2 :'' ?>" class="form-control question32RowMen question32Col2 q32Input"></td>
            <td><input type="number" name="q32_trafficking_women[]" id="q32Women2" value="<?= isset($question_32_data->q32_data->q32Women2) ? $question_32_data->q32_data->q32Women2 :'' ?>"  class="form-control question32RowWomen question32Col2 q32Input"></td>
            <td><input type="number" name="q32_trafficking_third_gender[]" id="q323rdG2" value="<?= isset($question_32_data->q32_data->q323rdG2) ? $question_32_data->q32_data->q323rdG2 :'' ?>" class="form-control question32Row3rdGender question32Col2 q32Input"></td>
            <td><input type="number" name="q32_trafficking_boy[]" id="q32Boy2" value="<?= isset($question_32_data->q32_data->q32Boy2) ? $question_32_data->q32_data->q32Boy2 :'' ?>" class="form-control question32RowBoys question32Col2 q32Input"></td>
            <td><input type="number" name="q32_trafficking_girl[]" id="q32Girl2" value="<?= isset($question_32_data->q32_data->q32Girl2) ? $question_32_data->q32_data->q32Girl2 :'' ?>" class="form-control question32RowGirls question32Col2 q32Input"></td>
            <td><input type="text" name="q32_trafficking_total[]" id="question32Col2" value="<?= isset($question_32_data->q32_data->question32Col2) ? $question_32_data->q32_data->question32Col2 :'' ?>" class="form-control q32Total q32Input" readonly></td>

          </tr>
          <tr>
            <td colspan="6" text-align:"center">Total</td>
          </tr>
          <tr>
            <th>Men</th>
            <th>Women</th>
            <th>3rd Gender</th>
            <th>Boy</th>
            <th>girls</th>
            <th>Total</th>
          </tr>
          <tr>
            <td><input type="text" name="" id="q32MenTotal" value="<?= isset($question_32_data->q32_data->q32MenTotal) ? $question_32_data->q32_data->q32MenTotal :'' ?>" class="form-control q32gTotal q32Input" readonly="true"></td>
            <td><input type="text" name="" id="q32WomenTotal" value="<?= isset($question_32_data->q32_data->q32WomenTotal) ? $question_32_data->q32_data->q32WomenTotal :'' ?>" class="form-control q32gTotal q32Input" readonly="true"></td>
            <td><input type="text" name="" id="q32TrdGTotal" value="<?= isset($question_32_data->q32_data->q32TrdGTotal) ? $question_32_data->q32_data->q32TrdGTotal :'' ?>" class="form-control q32gTotal q32Input" readonly="true"></td>
            <td><input type="text" name="" id="q32BoysTotal" value="<?= isset($question_32_data->q32_data->q32BoysTotal) ? $question_32_data->q32_data->q32BoysTotal :'' ?>" class="form-control q32gTotal q32Input" readonly="true"></td>
            <td><input type="text" name=""  id="q32GirlsTotal" value="<?= isset($question_32_data->q32_data->q32GirlsTotal) ? $question_32_data->q32_data->q32GirlsTotal :'' ?>" class="form-control q32gTotal q32Input" readonly="true"></td>
            <td><input type="text" name="" id="q32gTotal" value="<?= isset($question_32_data->q32_data->q32gTotal) ? $question_32_data->q32_data->q32gTotal :'' ?>" class="form-control" readonly="true"></td>

          </tr>
        </thead>
      </table>
    </div>
      <br/>
        <p class="text-right">
            <button type="button" class="btn btn-success" id="temp-save-question32">Save</button>       
        </p>

    </div>
  </div>
</div>
@endif
<?php }
  ?>
<script>
  $(document).ready(function(){
        $(".thirty_two_status").on("click",function(){
            var statusvalue = $("input[name='is_investigation_prosecution_q32']:checked").val();
            $('.question32').find('.othersText').hide()
            $('.question32').find('#q32others').val("")
            
            if(statusvalue == '1'){
              $('.question32').find('#32_question_view').show()
              $('.question32').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question32').find('#32_question_view').hide()
              $('.question32').find('span').removeClass('othersText')
              $('.question32').find('span').show()
            }else{
              $('.question32').find('#32_question_view').hide()
              $('.question32').find('span').addClass('othersText')

            }
        });


        //temporary save
$(document).on("click",'#temp-save-question32',function() {
  let yes_no_value=$("input[type='radio'][name='is_investigation_prosecution_q32']:checked").val()

  
    var q32_data={}
    // alert($(this).attr('id'))
    if(yes_no_value=='1'){

    $('.q32Input').each(function() {
      Object.assign(q32_data,{[$(this).attr('id')]:$(this).val()}) 

    });
  }
    let new_data={
        q32_data:q32_data,
        q32_checked_value:yes_no_value,
        others:$("input[name='investigation_prosecution_others_q32']").val()
      }  
    // console.log(new_data)
    $.ajax({    //create an ajax request to display.php
            type: "POST",
            data:{
              "_token": "{{ csrf_token() }}",
              'question32':new_data,
              'question_no':'32',
            },
            url: "/superadmin/case/temp-save-question40to60",             
            success: function(response){ 
              if(response){
                alert("Question 32 has been saved temporary")

              }else{
                alert("Not Saved")
              }
            }
    });
}); 
    });
  </script>