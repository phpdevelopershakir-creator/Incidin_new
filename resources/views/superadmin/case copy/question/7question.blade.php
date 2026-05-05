<?php
if(($questiontitles[3]->status ?? null)==1)
{

  ?>
<style>
  .othersText{
    display:none
  }
  .visibility{
    display:none
  }
</style>

<div class="card question4">
      <div class="card-header" role="tab" id="heading-4">
        <h6 class="mb-0 card-title" style="color: {{ isset($question_4_data) ? 'blue' : 'green' }};">
          <a data-toggle="collapse" href="#Question-4" aria-expanded="false"
            aria-controls="collapse-4">
            4.Were law enforcement, military, security, state or municipal employees, or other officials allegedly facilitating the crime or obstructing justice (e.g., taking bribes)? (Tips: Please provide information solely based on government documents cleared for public sharing and the answer can only be “YES” when the crime is a result of a national directive or policy, including state sponsored forced labor)
          </a>
        </h6>
      </div>

      <div id="Question-4" class="collapse" role="tabpane4" aria-labelledby="heading-4"
        data-parent="#accordion-2">
        <div class="card-body">
<div class="icheck-primary">
        <?php if(isset($question_4_data->q4_checked_value)){?>
        <input 
        type="radio" 
        id="radioFour1" 
        class="four_status" 
        name="is_crime_justice_q4" 
        <?=(isset($question_4_data->q4_checked_value) && $question_4_data->q4_checked_value=="1")?"checked":"" ;?> 
 
        value="1">
        <?php }else {?>
        <input type="radio" id="radioFour1" class="four_status" name="is_crime_justice_q4" checked value="1">
        <?php }?>
        <label for="radioFour1">
          Yes
        </label>
      </div>
      <div class="icheck-primary">
        <input 
        type="radio" 
        id="radioFour2"  
        class="four_status" 
        name="is_crime_justice_q4"  
        <?=(isset($question_4_data->q4_checked_value) && $question_4_data->q4_checked_value=="0")?"checked":"" ;?> 
        value="0">
        <label for="radioFour2">
          No
        </label>
      </div>

      <div class="icheck-primary input-group mb-3">
  
        <input 
        type="radio" 
        id="radioFour3" 
        class="four_status" 
        name="is_crime_justice_q4"  
        <?=(isset($question_4_data->q4_checked_value) && $question_4_data->q4_checked_value=="2")?"checked":"" ;?> 
        value="2">
        <label for="radioFour3">
          Others
        </label><span class=" col-md-6 mt--4 <?=(isset($question_4_data->q4_checked_value) && $question_4_data->q4_checked_value=="2")?"":"othersText" ;?>" style="margin-top:-8px;">
            <input 
            type="text" 
            id="q18others"  
            placeholder="Others "  
            class="form-control" 
            value="<?=(isset($question_4_data->others) && $question_4_data->others)?$question_4_data->others:"";?>"

            name="others_crime_justice_q4"></span>
      </div>

       <div id="four_question_view" class="<?=(isset($question_4_data->q4_checked_value)) && ($question_4_data->q4_checked_value=="2" || $question_4_data->q4_checked_value=="0" )?"visibility":"" ;?>">
       <table class="table table-bordered text-center">
        <thead>
          <tr>
            <th>Ministry</th>
            <th>Men</th>
            <th>Women</th>
            <th>Total</th>
          </tr>
        </thead>

        <tbody>
        @for($i=1;$i<=4;$i++)
        <tr>
          <td>
            <input type="text" name="justice_title[]" id="q4Title{{$i}}" class="form-control q4Input"
            value="{{ $question_4_data->q4_data->{'q4Title'.$i} ?? '' }}">
          </td>

          <td>
            <input type="number" name="justice_men[]" id="q4Men{{$i}}" class="form-control question4rowmen q4Input"
            value="{{ $question_4_data->q4_data->{'q4Men'.$i} ?? 0 }}">
          </td>

          <td>
            <input type="number" name="justice_women[]" id="q4Women{{$i}}" class="form-control question4rowWomen q4Input"
            value="{{ $question_4_data->q4_data->{'q4Women'.$i} ?? 0 }}">
          </td>

          <td>
            <input type="text" name="justice_total[]" id="rowTotal{{$i}}" class="form-control q4Input" readonly>
          </td>
        </tr>
        @endfor

        <tr>
          <th>Total</th>
          <td><input type="text" id="total_men_q4" class="form-control q4Input" readonly></td>
          <td><input type="text" id="total_women_q4" class="form-control q4Input" readonly></td>
          <td><input type="text" id="grand_total_q4" class="form-control q4Input" readonly></td>
        </tr>
        </tbody>
      </table>
    </div>
    <br/>
    <p class="text-right">
      <button type="button" class="btn btn-success" id="temp-save-question4">Save</button>       
    </p>

        </div>
      </div>
    </div>
  <?php } ?> 
<script>
function calculateQ4Totals(){
  let totalMen = 0;
  let totalWomen = 0;

  for(let i=1;i<=4;i++){
    let men = parseInt($('#q4Men'+i).val()) || 0;
    let women = parseInt($('#q4Women'+i).val()) || 0;

    $('#rowTotal'+i).val(men + women);

    totalMen += men;
    totalWomen += women;
  }

  $('#total_men_q4').val(totalMen);
  $('#total_women_q4').val(totalWomen);
  $('#grand_total_q4').val(totalMen + totalWomen);
}

$(document).on('input','.question4rowmen,.question4rowWomen',calculateQ4Totals);
$(document).ready(calculateQ4Totals);
</script>




 <script>

$(document).on("click","#temp-save-question4",function(){

  calculateQ4Totals();

  let q4_data = {};
  $('.q4Input').each(function(){
    if(this.id){
      q4_data[this.id] = $(this).val();
    }
  });

  $.post("/superadmin/case/temp-save-question",{
    _token:"{{ csrf_token() }}",
    question_no:4,
    question4:{
      q4_checked_value:$("input[name='is_crime_justice_q4']:checked").val(),
      q4_data:q4_data,
      others:$("input[name='others_crime_justice_q4']").val()
    }
  },function(){
    alert("Question 4 Temp Saved ✅");
  });
});
</script>



<script>
    $(document).ready(function(){
        $(".four_status").on("click",function(){
            var statusvalue = $("input[name='is_crime_justice_q4']:checked").val();
            $('.question4').find('.othersText').hide()         
            $('.question4').find('#q18others').val("")   
            if(statusvalue == '1'){
              $('.question4').find('#four_question_view').show()
              $('.question4').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question4').find('#four_question_view').hide()
              $('.question4').find('span').removeClass('othersText')
              $('.question4').find('span').show()
            }else{
              $('.question4').find('#four_question_view').hide()
              $('.question4').find('span').addClass('othersText')

            }
        });
    });

</script>
