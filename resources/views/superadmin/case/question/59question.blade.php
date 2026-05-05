
<style>
  .othersText{
    display:none
  }
  .visibility{
    display:none
  }
</style>

<div class="card question59">
<?php
$activities = [
    'Courtyard meeting',
    'Bazar / Hatt meeting',
    'CTC meeting',
    'Consultation',
    'Poster',
    'Leaflet',
    'Booklet',
    'SMS',
    'Newsletter',
    'Billboard',
    'Folk show',
    'Film show',
    'Miking',
    'Web campaign',
    'Others (Specify)',
    'Others (Specify)',
    'Others (Specify)',
    'Others (Specify)',
];
?>


  <?php
$training_location=[ 
  1 => "Dhaka",
  2 => "Chattogram",
  3 => "Khulna",
  4 => "Rajshahi",
  5 => "Barishal",
  6 => "Sylhet",
  7 => "Rangpur",
  8 => "Mymensingh",
  9 => "National"
];
?>


      <div class="card-header" role="tab" id="heading-4">
        <h6 class="mb-0 card-title" style="color: {{ isset($question_59_data) ? 'blue' : 'green' }};">
          <a data-toggle="collapse" href="#Question-59" aria-expanded="false"
            aria-controls="collapse-4">
             59.Did front-line officials, including law enforcement, immigration, social services personnel, healthcare workers, and labor inspectors receive adequate training on use of the victim identification protocol or formal written procedures? (Tips: Please consider - Front-line officials of Police, Front-line officials of BGB, Front-line officials of Coastguard , Front-line officials of Ansar, Front-line officials of Immigration, DSS Officials, Labour Inspectors and similar officials of NGO workers, international organization staff, religious officials, and community leaders who come at first contact with VoTs)
          </a>
        </h6>
      </div>

      <div id="Question-59" class="collapse" role="tabpane59" aria-labelledby="heading-4"
        data-parent="#accordion-2">
        <div class="card-body">
<div class="icheck-primary">
        <?php if(isset($question_59_data->q59_checked_value)){?>
        <input 
        type="radio" 
        id="radioFiftyNine1" 
        class="fiftyninestatus" 
        name="is_conduct_awareness_activities_q59" 
        <?=(isset($question_59_data->q59_checked_value) && $question_59_data->q59_checked_value=="1")?"checked":"" ;?> 
 
        value="1">
        <?php }else {?>
        <input type="radio" id="radioFiftyNine1" class="fiftyninestatus" name="is_conduct_awareness_activities_q59" checked value="1">
        <?php }?>
        <label for="radioFiftyNine1">
          Yes
        </label>
      </div>
      <div class="icheck-primary">
        <input 
        type="radio" 
        id="radioFiftyNine2"  
        class="fiftyninestatus" 
        name="is_conduct_awareness_activities_q59"  
        <?=(isset($question_59_data->q59_checked_value) && $question_59_data->q59_checked_value=="0")?"checked":"" ;?> 
        value="0">
        <label for="radioFiftyNine2">
          No
        </label>
      </div>

      <div class="icheck-primary input-group mb-3">
  
        <input 
        type="radio" 
        id="radioFiftyNine3" 
        class="fiftyninestatus" 
        name="is_conduct_awareness_activities_q59"  
        <?=(isset($question_59_data->q59_checked_value) && $question_59_data->q59_checked_value=="2")?"checked":"" ;?> 
        value="2">
        <label for="radioFiftyNine3">
          Others
        </label><span class=" col-md-6 mt--4 <?=(isset($question_59_data->q59_checked_value) && $question_59_data->q59_checked_value=="2")?"":"othersText" ;?>" style="margin-top:-8px;">
            <input 
            type="text" 
            id="q59others"  
            placeholder="Others "  
            class="form-control" 
            value="<?=(isset($question_59_data->others) && $question_59_data->others)?$question_59_data->others:"";?>"

            name="other_conduct_awareness_activities_q59"></span>
      </div>

       <div id="fiftynine_question_view" class="<?=(isset($question_59_data->q59_checked_value)) && ($question_59_data->q59_checked_value=="2" || $question_59_data->q59_checked_value=="0" )?"visibility":"" ;?>">
      <table class="table table-bordered text-center" id="q15Table">
  <thead>
    <tr>
      <th>Types of Activities</th>
      <th>Men</th>
      <th>Women</th>
      <th>3rd Gender</th>
      <th>Boy</th>
      <th>Girl</th>
      <th>Total</th>
      <th>Location(multiple-Response)</th>

    </tr>
  </thead>
  <tbody>
@foreach($activities as $i => $activity)
<tr>
    <!-- Types of Activities -->
   
<td>
    <input
        type="text"
        name="number_traning_59[]"
        class="form-control"
        value="{{ $activity }}"
        {{ $activity === 'Others (Specify)' ? '' : 'readonly' }}
    >
</td>
    <td>
        <input type="number" name="men_q59[]" class="form-control men-input q59Input"
               value="{{ $question_59_data->q59_data->men[$i] ?? 0 }}" min="0">
    </td>

    <td>
        <input type="number" name="women_q59[]" class="form-control women-input q59Input"
               value="{{ $question_59_data->q59_data->women[$i] ?? 0 }}" min="0">
    </td>

    <td>
        <input type="number" name="third_gender_q59[]" class="form-control tg-input q59Input"
               value="{{ $question_59_data->q59_data->tg[$i] ?? 0 }}" min="0">
    </td>

    <td>
        <input type="number" name="boy_q59[]" class="form-control boy-input q59Input"
               value="{{ $question_59_data->q59_data->boy[$i] ?? 0 }}" min="0">
    </td>

    <td>
        <input type="number" name="girl_q59[]" class="form-control girl-input q59Input"
               value="{{ $question_59_data->q59_data->girl[$i] ?? 0 }}" min="0">
    </td>

    <td>
        <input type="text" name="total_q59[]" class="form-control total-input q59Input"
               value="{{ $question_59_data->q59_data->total[$i] ?? 0 }}" readonly>
    </td>

    <td>
        <select name="location_id{{ $i }}[]" class="form-control multiSelect" multiple>
            @foreach($training_location as $id => $loc)
                <option value="{{ $id }}"
                    @if(isset($question_59_data->q59_data->{'location_id'.$i}) 
                        && in_array($id, $question_59_data->q59_data->{'location_id'.$i}))
                        selected
                    @endif
                >
                    {{ $loc }}
                </option>
            @endforeach
        </select>
    </td>
</tr>
@endforeach
</tbody>


</table>

    </div>
    <br/>
    <p class="text-right">
                <button type="button" class="btn btn-success" id="temp-save-question59">Save</button>
            </p>

        </div>
      </div>
    </div>


<script>
  $(document).on('input', '.men-input, .women-input, .tg-input, .boy-input, .girl-input', function() {
    let row = $(this).closest('tr');
    let men = parseInt(row.find('.men-input').val()) || 0;
    let women = parseInt(row.find('.women-input').val()) || 0;
    let tg = parseInt(row.find('.tg-input').val()) || 0;
    let boy = parseInt(row.find('.boy-input').val()) || 0;
    let girl = parseInt(row.find('.girl-input').val()) || 0;
    row.find('.total-input').val(men + women + tg + boy +girl);
});

</script>
    <script>
$(document).on("click", "#temp-save-question59", function () {

    let yes_no_value = $("input[name='is_conduct_awareness_activities_q59']:checked").val();
    let q59_data = [];

    $('#q15Table tbody tr').each(function () {
        q59_data.push({
            number_traning: $(this).find('input[name="number_traning[]"]').val(),
            men: $(this).find('input[name="men_q59[]"]').val(),
            women: $(this).find('input[name="women_q59[]"]').val(),
            tg: $(this).find('input[name="third_gender_q59[]"]').val(),
            boy: $(this).find('input[name="boy_q59[]"]').val(),
            girl: $(this).find('input[name="girl_q59[]"]').val(),
            total: $(this).find('input[name="total_q59[]"]').val(),
            location_id: $(this).find('select').val()
        });
    });

    $.ajax({
        type: "POST",
        url: "/superadmin/case/temp-save-question40to60",
        data: {
            _token: "{{ csrf_token() }}",
            question_no: 59,
            question59: {
                q59_checked_value: yes_no_value,
                others: $("input[name='other_conduct_awareness_activities_q59']").val(),
                q59_data: q59_data
            }
        },
        success: function () {
            alert("Question 59 saved temporarily");
        },
        error: function (xhr) {
            console.log(xhr.responseText);
            alert("Save failed");
        }
    });
});

</script>
<script>
    $(document).ready(function(){
        $(".fiftyninestatus").on("click",function(){
            var statusvalue = $("input[name='is_conduct_awareness_activities_q59']:checked").val();
            $('.question59').find('.othersText').hide()         
            $('.question59').find('#q59others').val("")   
            if(statusvalue == '1'){
              $('.question59').find('#fiftynine_question_view').show()
              $('.question59').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question59').find('#fiftynine_question_view').hide()
              $('.question59').find('span').removeClass('othersText')
              $('.question59').find('span').show()
            }else{
              $('.question59').find('#fiftynine_question_view').hide()
              $('.question59').find('span').addClass('othersText')

            }
        });
    });

</script>

