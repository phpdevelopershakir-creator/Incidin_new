<?php
if($questiontitles[32]->status==0)
{

  ?>
@if(Auth::user()->can('33.question'))
<style>
  .othersText{
    display:none
  }
  .visibility{
    display:none
  }
</style>
    <div class="col-md-12 question33">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
              <span class="numbering">33</span>.
           @if (isset($questiontitles [32]))
         {{ $questiontitles[32]->title }}
         @endif
        
          </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="icheck-primary">
      <?php if(isset($question_33_data->q33_checked_value)) { ?>

          <input 
          type="radio" 
          id="q33radioNineteen1" 
          class="thirty_three_status" 
          name="is_participating_victims_provided_q33" 
          <?=(isset($question_33_data->q33_checked_value) && $question_33_data->q33_checked_value=="1")?"checked":"" ;?>    
 
          value="1">
          <?php }else {?>
          <input type="radio" id="q33radioNineteen1" class="thirty_three_status" name="is_participating_victims_provided_q33" checked value="1">
          <?php }?>  
          <label for="q33radioNineteen1">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input 
            type="radio" 
            id="q33radioNineteen2" 
            class="thirty_three_status" 
            name="is_participating_victims_provided_q33"  
            <?=(isset($question_33_data->q33_checked_value) && $question_33_data->q33_checked_value=="0")?"checked":"" ;?>    
            value="0">
           <label for="q33radioNineteen2">
              No
            </label>
          </div>

          <div class="icheck-primary input-group mb-3">
            <input 
            type="radio" 
            id="q33radioNineteen3" 
            class="thirty_three_status" 
            name="is_participating_victims_provided_q33"  
            <?=(isset($question_33_data->q33_checked_value) && $question_33_data->q33_checked_value=="2")?"checked":"" ;?>    
            value="2">
            <label for="q33radioNineteen3">
              Others
            </label><span class="col-md-6 mt--4 <?=(isset($question_33_data->q33_checked_value) && $question_33_data->q33_checked_value=="2")? "" :"othersText" ;?>" style="margin-top:-8px;">
            <input 
            type="text" 
            id="q33others"  
            placeholder="Others "  
            class="form-control" 
            value="<?=(isset($question_33_data->others) && $question_33_data->others) ? $question_33_data->others:'' ?>" 
            name="participating_victims_provided_others_q33"></span>
        
          </div>
            <div id="33_question_view" class="<?=(isset($question_33_data->q33_checked_value) && ($question_33_data->q33_checked_value=="2" || $question_33_data->q33_checked_value=="0"))?"visibility":"";?>">
          <table class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th colspan="6" style="text-align: center; margin: bottom 45%;">VoT participating in investigation
                  Provided with Witness Protection </th>
              </tr>
              <tr>
                <td colspan="6" text-align:"center">Internal Trafficking</td>
                <input type="hidden" name="q33_type[]" value="1">
              </tr>
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>3rd Gender</th>
                <th>Boy</th>
                <th>Girls</th>
                <th>Total</th>
              </tr>


              <tr>
                <td><input type="number" name="q33_trafficking_men[]" id="q33Men1" value="<?= isset($question_33_data->q33_data->q33Men1) ? $question_33_data->q33_data->q33Men1 :'' ?>" class="form-control question33RowMen question33Col1 q33Input" ></td>
                <td><input type="number" name="q33_trafficking_women[]" id="q33Women1" value="<?= isset($question_33_data->q33_data->q33Women1) ? $question_33_data->q33_data->q33Women1 :'' ?>" class="form-control question33RowWomen question33Col1 q33Input"></td>
                <td><input type="number" name="q33_trafficking_third_gender[]" id="q333rdG1" value="<?= isset($question_33_data->q33_data->q333rdG1) ? $question_33_data->q33_data->q333rdG1 :'' ?>" class="form-control question33Row3rdGender question33Col1 q33Input"></td>
                <td><input type="number" name="q33_trafficking_boy[]" id="q33Boy1" value="<?= isset($question_33_data->q33_data->q33Boy1) ? $question_33_data->q33_data->q33Boy1 :'' ?>" class="form-control question33RowBoys question33Col1 q33Input"></td>
                <td><input type="number" name="q33_trafficking_girl[]" id="q33Girl1" value="<?= isset($question_33_data->q33_data->q33Girl1) ? $question_33_data->q33_data->q33Girl1 :'' ?>" class="form-control question33RowGirls question33Col1 q33Input"></td>
                <td><input type="text" name="q33_trafficking_total[]" id="question33Col1" value="<?= isset($question_33_data->q33_data->question33Col1) ? $question_33_data->q33_data->question33Col1 :'' ?>" class="form-control q33Total q33Input" readonly="true"></td>

              </tr>

              <tr>
                <td colspan="6" text-align:"center">International Trafficking</td>
                <input type="hidden" name="q33_type[]" value="2">
              </tr>
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>3rd Gender</th>
                <th>Boy</th>
                <th>Girls</th>
                <th>Total</th>
              </tr>
              <tr>
                <td><input type="text" name="q33_trafficking_men[]" id="q33Men2" value="<?= isset($question_33_data->q33_data->q33Men2) ? $question_33_data->q33_data->q33Men2 :'' ?>" class="form-control question33RowMen question33Col2 q33Input"></td>
                <td><input type="text" name="q33_trafficking_women[]" id="q33Women2" value="<?= isset($question_33_data->q33_data->q33Women2) ? $question_33_data->q33_data->q33Women2 :'' ?>" class="form-control question33RowWomen question33Col2 q33Input"></td>
                <td><input type="text" name="q33_trafficking_third_gender[]" id="q333rdG2" value="<?= isset($question_33_data->q33_data->q333rdG2) ? $question_33_data->q33_data->q333rdG2 :'' ?>" class="form-control question33Row3rdGender question33Col2 q33Input"></td>
                <td><input type="text" name="q33_trafficking_boy[]" id="q33Boy2" value="<?= isset($question_33_data->q33_data->q33Boy2) ? $question_33_data->q33_data->q33Boy2 :'' ?>" class="form-control question33RowBoys question33Col2 q33Input"></td>
                <td><input type="text" name="q33_trafficking_girl[]" id="q33Girl2" value="<?= isset($question_33_data->q33_data->q33Girl2) ? $question_33_data->q33_data->q33Girl2 :'' ?>" class="form-control question33RowGirls question33Col2 q33Input"></td>
                <td><input type="text" name="q33_trafficking_total[]" id="question33Col2" value="<?= isset($question_33_data->q33_data->question33Col2) ? $question_33_data->q33_data->question33Col2 :'' ?>" class="form-control q33Total q33Input" readonly="true"></td>


              </tr>
              <tr>
                <td colspan="6" text-align:"center">Total</td>
              </tr>
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>3rd Gender</th>
                <th>Boy</th>
                <th>Girls</th>
                <th>Total</th>
              </tr>
              <tr>
                <td><input type="text" name="" id="q33MenTotal" value="<?= isset($question_33_data->q33_data->q33MenTotal) ? $question_33_data->q33_data->q33MenTotal :'' ?>" class="form-control q33gTotal q33Input" readonly="true"></td>
                <td><input type="text" name="" id="q33WomenTotal" value="<?= isset($question_33_data->q33_data->q33WomenTotal) ? $question_33_data->q33_data->q33WomenTotal :'' ?>" class="form-control q33gTotal q33Input" readonly="true"></td>
                <td><input type="text" name="" id="q33TrdGTotal" value="<?= isset($question_33_data->q33_data->q33TrdGTotal) ? $question_33_data->q33_data->q33TrdGTotal :'' ?>" class="form-control q33gTotal  q33Input" readonly="true"></td>
                <td><input type="text" name="" id="q33BoysTotal" value="<?= isset($question_33_data->q33_data->q33BoysTotal) ? $question_33_data->q33_data->q33BoysTotal :'' ?>" class="form-control q33gTotal q33Input" readonly="true"></td>
                <td><input type="text" name="" id="q33GirlsTotal" value="<?= isset($question_33_data->q33_data->q33GirlsTotal) ? $question_33_data->q33_data->q33GirlsTotal :'' ?>" class="form-control q33gTotal q33Input" readonly="true"></td>
                <td><input type="text" name="" id="q33gTotal" value="<?= isset($question_33_data->q33_data->q33gTotal) ? $question_33_data->q33_data->q33gTotal :'' ?>" class="form-control q33Input" readonly="true"></td>
              </tr>
            </thead>
          </table>
        </div>
          <br/>
            <p class="text-right">
                <button type="button" class="btn btn-success" id="temp-save-question33">Save</button>       
            </p>
        </div>
      </div>
    </div> 
    @endif
    
<?php }
  ?>
    <script>
       $(document).ready(function(){
        $(".thirty_three_status").on("click",function(){
            var statusvalue = $("input[name='is_participating_victims_provided_q33']:checked").val();
            $('.question33').find('.othersText').hide()
            $('.question33').find('#q33others').val("")
            if(statusvalue == '1'){
              $('.question33').find('#33_question_view').show()
              $('.question33').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question33').find('#33_question_view').hide()
              $('.question33').find('span').removeClass('othersText')
              $('.question33').find('span').show()
            }else{
              $('.question33').find('#33_question_view').hide()
              $('.question33').find('span').addClass('othersText')

            }
        });

         //temporary save
$(document).on("click",'#temp-save-question33',function() {
  let yes_no_value=$("input[type='radio'][name='is_participating_victims_provided_q33']:checked").val()

var q33_data={}
// alert($(this).attr('id'))
if(yes_no_value=='1'){

  $('.q33Input').each(function() {
    Object.assign(q33_data,{[$(this).attr('id')]:$(this).val()}) 

  });
}
    let new_data={
        q33_data:q33_data,
        q33_checked_value:yes_no_value,
        others:$("input[name='participating_victims_provided_others_q33']").val()
      }  
    // console.log(new_data)
$.ajax({    //create an ajax request to display.php
        type: "POST",
        data:{
          "_token": "{{ csrf_token() }}",
          'question33':new_data,
          'question_no':'33',
        },
        url: "/superadmin/case/temp-save-question40to60",             
        success: function(response){ 
          if(response){
            alert("Question 33 has been saved temporary")

          }else{
            alert("Not Saved")
          }
        }
});
});
    });
    </script>