 <?php
if($questiontitles[17]->status==0)
{

  ?>
 @if(Auth::user()->can('18.question'))
 <style>
  .othersText{
    display:none
  }
  .visibility{
    display:none
  }
</style>
<div class="col-md-12 question18">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
         <span class="numbering">18</span>.
           @if (isset($questiontitles [17]))
         {{ $questiontitles[17]->title }}

         @endif

      </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="icheck-primary">
        <?php if(isset($question_18_data->q18_checked_value)){?>
        <input 
        type="radio" 
        id="radioEighteen1" 
        class="eighteen_status" 
        name="is_engage_trafficking_q18" 
        <?=(isset($question_18_data->q18_checked_value) && $question_18_data->q18_checked_value=="1")?"checked":"" ;?> 
 
        value="1">
        <?php }else {?>
        <input type="radio" id="radioEighteen1" class="eighteen_status" name="is_engage_trafficking_q18" checked value="1">
        <?php }?>
        <label for="radioEighteen1">
          Yes
        </label>
      </div>
      <div class="icheck-primary">
        <input 
        type="radio" 
        id="radioEighteen2"  
        class="eighteen_status" 
        name="is_engage_trafficking_q18"  
        <?=(isset($question_18_data->q18_checked_value) && $question_18_data->q18_checked_value=="0")?"checked":"" ;?> 
        value="0">
        <label for="radioEighteen2">
          No
        </label>
      </div>

      <div class="icheck-primary input-group mb-3">
  
        <input 
        type="radio" 
        id="radioEighteen3" 
        class="eighteen_status" 
        name="is_engage_trafficking_q18"  
        <?=(isset($question_18_data->q18_checked_value) && $question_18_data->q18_checked_value=="2")?"checked":"" ;?> 
        value="2">
        <label for="radioEighteen3">
          Others
        </label><span class=" col-md-6 mt--4 <?=(isset($question_18_data->q18_checked_value) && $question_18_data->q18_checked_value=="2")?"":"othersText" ;?>" style="margin-top:-8px;">
            <input 
            type="text" 
            id="q18others"  
            placeholder="Others "  
            class="form-control" 
            value="<?=(isset($question_18_data->others) && $question_18_data->others)?$question_18_data->others:"";?>"

            name="engage_trafficking_others_q18"></span>
      </div>  
       <div id="eightteen_question_view" class="<?=(isset($question_18_data->q18_checked_value)) && ($question_18_data->q18_checked_value=="2" || $question_18_data->q18_checked_value=="0" )?"visibility":"" ;?>">
      <table>
        <br />
        <br />
        <thead>
          <tr>
            <th rowspan="2" scope="row">Category of Trainee</th>
            <th colspan="5" style="text-align: left">Coverage of Training</th>
          </tr>
          <tr>
            <th scope="row">Men</th>
            <th scope="col">Women</th>
            <th scope="col">3rd  Gender</th>
            <th scope="col">Total</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Diplomats in foreign missions</th>
            <input type="hidden" name="category_trainee_q18[]" value="1">
            <td> <input type="number" name="coverage_training_men[]" id="q18Men1" value="<?=(isset($question_18_data->q18_data->q18Men1))?$question_18_data->q18_data->q18Men1:"";?>" class="form-control number-input question18rowmen q18Input" value="0" min="0"> </td>
            <td><input type="number" name="coverage_training_women[]" id="q18Women1" value="<?=(isset($question_18_data->q18_data->q18Women1))?$question_18_data->q18_data->q18Women1:"";?>"  class="form-control number-input question18rowWomen q18Input" value="0" min="0"></td>
            <td><input type="number" name="coverage_training_third_gender[]" id="q183rdG1" value="<?=(isset($question_18_data->q18_data->q183rdG1))?$question_18_data->q18_data->q183rdG1:"";?>"  class="form-control number-input question18row question18rowTransGender q18Input" value="0" min="0"></td>
            <td><input type="text" name="coverage_training_total[]" id="totalSum" value="<?=(isset($question_18_data->q18_data->totalSum))?$question_18_data->q18_data->totalSum:"";?>"  class="form-control question18row granTotal q18Input" readonly="true"></td>

          </tr>
          <tr>
            <th scope="row">Labour Attaches</th>
            <input type="hidden" name="category_trainee_q18[]" value="2">
            <td> <input type="number" name="coverage_training_men[]" id="q18Men2" value="<?=(isset($question_18_data->q18_data->q18Men2))?$question_18_data->q18_data->q18Men2:"";?>" class="form-control number-input2 question18rowmen q18Input" value="0" min="0"> </td>
            <td><input type="number" name="coverage_training_women[]" id="q18Women2" value="<?=(isset($question_18_data->q18_data->q18Women2))?$question_18_data->q18_data->q18Women2:"";?>" class="form-control number-input2 question18rowWomen q18Input" value="0" min="0"></td>
            <td><input type="number" name="coverage_training_third_gender[]" id="q183rdG2" value="<?=(isset($question_18_data->q18_data->q183rdG2))?$question_18_data->q18_data->q183rdG2:"";?>" class="form-control number-input2 question18rowTransGender q18Input" value="0" min="0"></td>
            <td><input type="text" name="coverage_training_total[]" id="totalSum1" value="<?=(isset($question_18_data->q18_data->totalSum1))?$question_18_data->q18_data->totalSum1:"";?>" class="form-control granTotal q18Input" readonly="true"></td>

          </tr>
          <tr>
            <th scope="row">MoFA officials within the country</th>
            <input type="hidden" name="category_trainee_q18[]" value="3">
            <td> <input type="text" name="coverage_training_men[]" id="q18Men3" value="<?=(isset($question_18_data->q18_data->q18Men3))?$question_18_data->q18_data->q18Men3:"";?>" class="form-control number-input3 question18rowmen q18Input" value="0" min="0"> </td>
            <td><input type="text" name="coverage_training_women[]" id="q18Women3" value="<?=(isset($question_18_data->q18_data->q18Women3))?$question_18_data->q18_data->q18Women3:"";?>" class="form-control number-input3 question18rowWomen q18Input" value="0" min="0"></td>
            <td><input type="text" name="coverage_training_third_gender[]" id="q183rdG3" value="<?=(isset($question_18_data->q18_data->q183rdG3))?$question_18_data->q18_data->q183rdG3:"";?>" class="form-control number-input3 question18rowTransGender q18Input" value="0" min="0"></td>
            <td><input type="text" name="coverage_training_total[]" id="totalSum2" value="<?=(isset($question_18_data->q18_data->totalSum2))?$question_18_data->q18_data->totalSum2:"";?>" class="form-control granTotal q18Input" readonly="true"></td>

          </tr>
          
         
          <tr>
            <th scope="row">Total</th> 
         
            <td> <input type="text"  id="eighteen_twenty_eight" value="<?=(isset($question_18_data->q18_data->eighteen_twenty_eight))?$question_18_data->q18_data->eighteen_twenty_eight:"";?>" class="form-control q18Input" readonly> </td>
            <td><input type="text"   id="eighteen_twenty_nine" value="<?=(isset($question_18_data->q18_data->eighteen_twenty_nine))?$question_18_data->q18_data->eighteen_twenty_nine:"";?>" class="form-control q18Input" readonly></td>
            <td><input type="text"   id="eighteen_thirty" value="<?=(isset($question_18_data->q18_data->eighteen_thirty))?$question_18_data->q18_data->eighteen_thirty:"";?>" class="form-control  q18Input" readonly></td>
            <td><input type="text"  id="eighteen_thirty_one" value="<?=(isset($question_18_data->q18_data->eighteen_thirty_one))?$question_18_data->q18_data->eighteen_thirty_one:"";?>" class="form-control q18Input" readonly></td>
          </tr>
        </tbody>
      </table>
    </div>
    <br/>
    <p class="text-right">
      <button type="button" class="btn btn-success" id="temp-save-question18">Save</button>       
    </p>
    </div>
  </div>
</div>

@endif
<?php }
  ?>
<script>

$(function(){
  $(document).on("click",'#temp-save-question18',function() {


    let yes_no_value=$("input[type='radio'][name='is_engage_trafficking_q18']:checked").val()

    var q18_data={

    }
    if(yes_no_value=="1"){
      $('.q18Input').each(function() {
        Object.assign(q18_data,{[$(this).attr('id')]:$(this).val()})   
      });

    }
    var new_data={
      q18_data:q18_data,
      q18_checked_value:yes_no_value,
      others:$("input[name='engage_trafficking_others_q18']").val()

    }
    
      // console.log(new_data)
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
              'question18':new_data,
              'question_no':'18'
            },
            url: "/superadmin/case/temp-save-question",             
            success: function(response){ 
              if(response){
                alert("Question 18 has been saved temporary")

              }else{
                alert("Not Saved")
              }
            }
    });
  }); 
}); 

</script>
