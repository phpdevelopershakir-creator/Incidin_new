<?php
if(($questiontitles[4]->status ?? null)==1)
{

  ?>
  <?php
$q24_status=[
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
  <div class="card question24">
    <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0 card-title" style="color: {{ isset($question_24_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-5" aria-expanded="false"
          aria-controls="collapse-4">
     
          5.{{ $questiontitles[4]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-5" class="collapse" role="tabpane5" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
          <div class="icheck-primary">
          <?php if(isset($question_24_data->q24_checked_value)) {?>
            <input 
            type="radio" 
            id="q24radioPrimary1" 
            class="twenty_four_status" 
            name="is_complicit_official_q5" 
            <?=(isset($question_24_data->q24_checked_value) && $question_24_data->q24_checked_value=="1")?"checked":"" ;?> 
 
            value="1">
            <?php }else {?>
            <input type="radio" id="q24radioPrimary1" class="twenty_four_status" name="is_complicit_official_q5" checked value="1">
            <?php }?>
            <label for="q24radioPrimary1">
              Yes
            </label>
        </div>
        <div class="icheck-primary">
            <input 
            type="radio" 
            id="q24radioPrimary2" 
            class="twenty_four_status" 
            name="is_complicit_official_q5" 
            <?=(isset($question_24_data->q24_checked_value) && $question_24_data->q24_checked_value=="0")?"checked":"" ;?> 

            value="0">
            <label for="q24radioPrimary2">
              No
            </label>
        </div>

        <div class="icheck-primary input-group mb-3">
            <input 
            type="radio" 
            id="q24radioPrimary3" 
            class="twenty_four_status" 
            name="is_complicit_official_q5"  
            <?=(isset($question_24_data->q24_checked_value) && $question_24_data->q24_checked_value=="2")?"checked":"" ;?> 

            value="2">
            <label for="q24radioPrimary3">
              Others
            </label><span class=" col-md-6 mt--4 <?=(isset($question_24_data->q24_checked_value) && $question_24_data->q24_checked_value=="2")?"":"othersText" ;?>" style="margin-top:-8px;">
            <input 
            type="text" 
            id="q24others"  
            placeholder="Others "  
            class="form-control" 
            value="<?=(isset($question_24_data->others) && $question_24_data->others)?$question_24_data->others:"";?>"

            name="others_complicit_official_q5"></span>
        </div>
        <div id ="24_question_view" class="<?=(isset($question_24_data->q24_checked_value)) && ($question_24_data->q24_checked_value=="2" || $question_24_data->q24_checked_value=="0" )?"visibility":"" ;?>">
          <table class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th rowspan="2" style="text-align: center; vertical-align: middle;">Ministry/Department Municipality body</th>
                <!-- <th rowspan="2">Description of change/Status</th> -->
                <th colspan="4">Measures Taken</th>

              </tr>
              <tr>
                <th>Investigation (numbwer)</th>
                <th>Prosecution (number)</th>
                <th>Conviction or Sentencing (number)</th>
                <th>Administrative Measures (numbwer)</th>
            
              </tr>
              <tr>
          

                 <td>
    <input type="text" name="official_title[]" id="q24Title1" class="form-control q24Input" value="<?=(isset($question_24_data->q24_data->q24Title1))?$question_24_data->q24_data->q24Title1:"";?>">
  </td>
              
                <td><input type="number" name="official_investigation[]" id="q24Men1" value="<?=(isset($question_24_data->q24_data->q24Men1))?$question_24_data->q24_data->q24Men1:"";?>" class="form-control question24RowMen question24Col1 q24Input" min="0">
                     <p style="color:red">{{ $errors->first('official_investigation.0') }}</p>
                </td>
                <td><input type="number" name="official_prosecution[]" id="q24Women1" value="<?=(isset($question_24_data->q24_data->q24Women1))?$question_24_data->q24_data->q24Women1:"";?>"  class="form-control question24RowWomen question24Col1 q24Input" min="0">
               <p style="color:red">{{ $errors->first('official_prosecution.0') }}</p>
                </td>
                <td><input type="number" name="official_conviction[]" id="q24Boy1" value="<?=(isset($question_24_data->q24_data->q24Boy1))?$question_24_data->q24_data->q24Boy1:"";?>"  class="form-control question24RowBoys question24Col1 q24Input" min="0">
                 <p style="color:red">{{ $errors->first('official_conviction.0') }}</p>
                </td>
                <td><input type="number" name="official_administrative[]" id="q24Girl1" value="<?=(isset($question_24_data->q24_data->q24Girl1))?$question_24_data->q24_data->q24Girl1:"";?>" class="form-control  question24RowGirls question24Col1 q24Input" min="0">
                  <p style="color:red">{{ $errors->first('official_administrative.0') }}</p>
                </td>
              

              </tr>
              <tr>
                <td>
    <input type="text" name="official_title[]" id="q24Title2" class="form-control q24Input" value="<?=(isset($question_24_data->q24_data->q24Title2))?$question_24_data->q24_data->q24Title2:"";?>">
  </td>
                
                
                <td><input type="number" name="official_investigation[]" id="q24Men2" value="<?=(isset($question_24_data->q24_data->q24Men2))?$question_24_data->q24_data->q24Men2:"";?>"  class="form-control question24RowMen question24Col2 q24Input q24Input" min="0">
                  <p style="color:red">{{ $errors->first('official_investigation.0') }}</p>
                </td>
                <td><input type="number" name="official_prosecution[]" id="q24Women2" value="<?=(isset($question_24_data->q24_data->q24Women2))?$question_24_data->q24_data->q24Women2:"";?>"  class="form-control question24RowWomen question24Col2 q24Input q24Input" min="0">
                  <p style="color:red">{{ $errors->first('official_prosecution.0') }}</p>
                </td>
                <td><input type="number" name="official_conviction[]" id="q24Boy2" value="<?=(isset($question_24_data->q24_data->q24Boy2))?$question_24_data->q24_data->q24Boy2:"";?>"  class="form-control question24RowBoys question24Col2 q24Input q24Input" min="0">
                    <p style="color:red">{{ $errors->first('official_conviction.0') }}</p>
                </td>
                <td><input type="number" name="official_administrative[]" id="q24Girl2" value="<?=(isset($question_24_data->q24_data->q24Girl2))?$question_24_data->q24_data->q24Girl2:"";?>"  class="form-control question24RowGirls question24Col2 q24Input q24Input" min="0">
                  <p style="color:red">{{ $errors->first('official_administrative.0') }}</p>
                </td>
               
              </tr>

              <tr>

                 <td>
    <input type="text" name="official_title[]" id="q24Title3" class="form-control q24Input" value="<?=(isset($question_24_data->q24_data->q24Title3))?$question_24_data->q24_data->q24Title3:"";?>">
  </td>
          
            
                <td><input type="number" name="official_investigation[]" id="q24Men3" value="<?=(isset($question_24_data->q24_data->q24Men3))?$question_24_data->q24_data->q24Men3:"";?>"  class="form-control  question24RowMen question24Col3 q24Input" min="0">
               <p style="color:red">{{ $errors->first('official_investigation.0') }}</p>
                </td>
                <td><input type="number" name="official_prosecution[]" id="q24Women3" value="<?=(isset($question_24_data->q24_data->q24Women3))?$question_24_data->q24_data->q24Women3:"";?>"  class="form-control question24RowWomen question24Col3 q24Input" min="0">
<p style="color:red">{{ $errors->first('official_prosecution.0') }}</p>
                </td>
                <td><input type="number" name="official_conviction[]" id="q24Boy3" value="<?=(isset($question_24_data->q24_data->q24Boy3))?$question_24_data->q24_data->q24Boy3:"";?>"  class="form-control question24RowBoys question24Col3 q24Input" min="0">
<p style="color:red">{{ $errors->first('official_conviction.0') }}</p>
                </td>
                <td><input type="number" name="official_administrative[]" id="q24Girl3" value="<?=(isset($question_24_data->q24_data->q24Girl3))?$question_24_data->q24_data->q24Girl3:"";?>"  class="form-control question24RowGirls question24Col3 q24Input" min="0">
<p style="color:red">{{ $errors->first('official_administrative.0') }}</p>
                </td>
                
              </tr>

              <tr>

                   <td>
  <input type="text" name="official_title[]" id="q24Title4" class="form-control q24Input" value="<?=(isset($question_24_data->q24_data->q24Title4))?$question_24_data->q24_data->q24Title4:"";?>">
</td>
                
                <td><input type="number" name="official_investigation[]" id="q24Men4" value="<?=(isset($question_24_data->q24_data->q24Men4))?$question_24_data->q24_data->q24Men4:"";?>"  class="form-control question24RowMen question24Col4 q24Input q24Input" min="0">
                  <p style="color:red">{{ $errors->first('official_investigation.0') }}</p>
                </td>
                <td><input type="number" name="official_prosecution[]" id="q24Women4" value="<?=(isset($question_24_data->q24_data->q24Women4))?$question_24_data->q24_data->q24Women4:"";?>"  class="form-control question24RowWomen question24Col4 q24Input q24Input" min="0">
                <p style="color:red">{{ $errors->first('official_prosecution.0') }}</p> 
                </td>
                <td><input type="number" name="official_conviction[]" id="q24Boy4" value="<?=(isset($question_24_data->q24_data->q24Boy4))?$question_24_data->q24_data->q24Boy4:"";?>"  class="form-control  question24RowBoys question24Col4 q24Input q24Input" min="0">
<p style="color:red">{{ $errors->first('official_conviction.0') }}</p> 
                </td>
                <td><input type="number" name="official_administrative[]" id="q24Girl4" value="<?=(isset($question_24_data->q24_data->q24Girl4))?$question_24_data->q24_data->q24Girl4:"";?>"  class="form-control question24RowGirls question24Col4 q24Input q24Input" min="0">
                  <p style="color:red">{{ $errors->first('official_administrative.0') }}</p> 
                </td>
              </tr>


             



             
              <tr>

                <td >Total</td>
                <td><input type="number"  id="q24MenTotal" value="<?=(isset($question_24_data->q24_data->q24MenTotal))?$question_24_data->q24_data->q24MenTotal:"";?>"  class="form-control q24gTotal q24Input" readonly="true"></td>
                <td><input type="number"  id="q24WomenTotal" value="<?=(isset($question_24_data->q24_data->q24WomenTotal))?$question_24_data->q24_data->q24WomenTotal:"";?>"  class="form-control q24gTotal q24Input" readonly="true"></td>
                <td><input type="number"   id="q24BoysTotal" value="<?=(isset($question_24_data->q24_data->q24BoysTotal))?$question_24_data->q24_data->q24BoysTotal:"";?>" class="form-control q24gTotal q24Input" readonly="true"></td>
                <td><input type="number"  id="q24GirlsTotal" value="<?=(isset($question_24_data->q24_data->q24GirlsTotal))?$question_24_data->q24_data->q24GirlsTotal:"";?>"  class="form-control q24gTotal q24Input" readonly="true"></td>
               
              </tr>
            </thead>


          </table>
        </div>
<p class="text-right">
      <button type="button" class="btn btn-success" id="temp-save-question24">Save</button>       
    </p>
        
      </div>
    </div>
  </div> 
  <?php } ?> 
  <script>
   $(document).ready(function(){
        $(".twenty_four_status").on("click",function(){
          // alert($("input[class*='twenty_four_status']:checked").val()) // using attr (class name)
          // $("input[name='is_complicit_official_q5']:checked").val() // using attr (name) 
            var statusvalue = $("input[class='twenty_four_status']:checked").val();
            // alert(statusvalue)
            $('.question24').find('.othersText').hide()
            $('.question24').find('#q24others').val("")
            if(statusvalue == '1'){
              $('.question24').find('#24_question_view').show()
              $('.question24').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question24').find('#24_question_view').hide()
              $('.question24').find('span').removeClass('othersText')
              $('.question24').find('span').show()
            }else{
              $('.question24').find('#24_question_view').hide()
              $('.question24').find('span').addClass('othersText')

            }
        });

$(document).on("click",'#temp-save-question24',function() {


    let yes_no_value=$("input[type='radio'][name='is_complicit_official_q5']:checked").val()

    var q24_data={
      
    }
    if(yes_no_value=="1"){
      $('.q24Input').each(function() {
        Object.assign(q24_data,{[$(this).attr('id')]:$(this).val()})   
      });

    }
    var new_data={
      q24_data:q24_data,
      q24_checked_value:yes_no_value,
      others:$("input[name='others_complicit_official_q5']").val()

    }

  // console.log(new_data)
  $.ajax({    //create an ajax request to display.php
          type: "POST",
          data:{
            "_token": "{{ csrf_token() }}",
          'question24':new_data,
          'question_no':'24'
        },
        url: "/superadmin/case/temp-save-question40to60",             
        success: function(response){ 
          if(response){
            $('.question24.card-title').css('color', 'green');
            alert("Question 5 has been saved temporary")

          }else{
            alert("Not Saved")
          }
        }
});
});
    });
</script>
