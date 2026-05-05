<?php
if (($questiontitles[20]->status ?? null) == 1) {

?>
  <style>
    .othersText {
      display: none
    }

    .visibility {
      display: none
    }
  </style>

  <div class="card question21">
    <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0 card-title" style="color: {{ isset($question_21_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-21" aria-expanded="false"
          aria-controls="collapse-4">
          21.{{ $questiontitles[20]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-21" class="collapse" role="tabpane21" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div class="icheck-primary">
          <?php if (isset($question_21_data->q21_checked_value)) { ?>
            <input
              type="radio"
              id="radioTwentyOne1"
              class="twentyone_status"
              name="is_crime_justice_q21"
              <?= (isset($question_21_data->q21_checked_value) && $question_21_data->q21_checked_value == "1") ? "checked" : ""; ?>

              value="1">
          <?php } else { ?>
            <input type="radio" id="radioTwentyOne1" class="twentyone_status" name="is_crime_justice_q21" checked value="1">
          <?php } ?>
          <label for="radioTwentyOne1">
            Yes
          </label>
        </div>
        <div class="icheck-primary">
          <input
            type="radio"
            id="radioTwentyOne2"
            class="twentyone_status"
            name="is_crime_justice_q21"
            <?= (isset($question_21_data->q21_checked_value) && $question_21_data->q21_checked_value == "0") ? "checked" : ""; ?>
            value="0">
          <label for="radioTwentyOne2">
            No
          </label>
        </div>

        <div class="icheck-primary input-group mb-3">

          <input
            type="radio"
            id="radioTwentyOne3"
            class="twentyone_status"
            name="is_crime_justice_q21"
            <?= (isset($question_21_data->q21_checked_value) && $question_21_data->q21_checked_value == "2") ? "checked" : ""; ?>
            value="2">
          <label for="radioTwentyOne3">
            Others
          </label><span class=" col-md-6 mt--4 <?= (isset($question_21_data->q21_checked_value) && $question_21_data->q21_checked_value == "2") ? "" : "othersText"; ?>" style="margin-top:-8px;">
            <input
              type="text"
              id="q21others"
              placeholder="Others "
              class="form-control"
              value="<?= (isset($question_21_data->others) && $question_21_data->others) ? $question_21_data->others : ""; ?>"

              name="others_crime_justice_q21"></span>
        </div>

        <div id="twentyone_question_view" class="<?= (isset($question_21_data->q21_checked_value)) && ($question_21_data->q21_checked_value == "2" || $question_21_data->q21_checked_value == "0") ? "visibility" : ""; ?>">
          <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th rowspan="2">Name of the Shalters </th>
                <th rowspan="2">Operators </th>
                <th colspan="3">Capacity </th>
                <th rowspan="2">Specialized for Trafficking? </th>
                <th rowspan="2">Eligible Victims</th>
                <th rowspan="2">Note</th>
              </tr>
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>Total</th>
              </tr>
            </thead>

            <tbody>
              @for($i=1;$i<=4;$i++)
                <tr>
                <td>
                  <input type="text" name="justice_name_q21[]" id="q21Name{{$i}}" class="form-control q21Input"
                    value="{{ $question_21_data->q21_data->{'q21Name'.$i} ?? '' }}">
                </td>

                <td>
                  <input type="text" name="justice_operators_q21[]" id="q21Operator{{$i}}" class="form-control q21Input"
                    value="{{ $question_21_data->q21_data->{'q21Operator'.$i} ?? '' }}">
                </td>

                <td>
                  <input type="number" name="justice_men_q21[]" id="q21Men{{$i}}" class="form-control question21rowmen q21Input"
                    value="{{ $question_21_data->q21_data->{'q21Men'.$i} ?? 0 }}">
                </td>

                <td>
                  <input type="number" name="justice_women_q21[]" id="q21Women{{$i}}" class="form-control question21rowWomen q21Input"
                    value="{{ $question_21_data->q21_data->{'q21Women'.$i} ?? 0 }}">
                </td>



                <td>
                  <input type="text" name="justice_total_q21[]" id="rowTotal{{$i}}" class="form-control q21Input" readonly>
                </td>

                <td>
                  <input type="text" name="justice_trafficking_q21[]" id="q21Trafficking{{$i}}" class="form-control q21Input"
                    value="{{ $question_21_data->q21_data->{'q21Trafficking'.$i} ?? '' }}">
                </td>
                <td>
                  <input type="text" name="justice_victims_q21[]" id="q21Victims{{$i}}" class="form-control q21Input"
                    value="{{ $question_21_data->q21_data->{'q21Victims'.$i} ?? '' }}">
                </td>
                <td>
                  <input type="text" name="justice_note_q21[]" id="q21Note{{$i}}" class="form-control q21Input"
                    value="{{ $question_21_data->q21_data->{'q21Note'.$i} ?? '' }}">
                </td>
                </tr>
                @endfor

                <tr>
                  <th colspan="2">Total</th>
                  <td><input type="text" id="total_men_q21" class="form-control q21Input" readonly></td>
                  <td><input type="text" id="total_women_q21" class="form-control q21Input" readonly></td>
                  <td><input type="text" id="grand_total_q21" class="form-control q21Input" readonly></td>
                </tr>
            </tbody>
          </table>
        </div>
        <br />
        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question21">Save</button>
        </p>

      </div>
    </div>
  </div>
<?php } ?>
<script>
function calculateQ21Totals() {
    let totalMen = 0;
    let totalWomen = 0;

    for (let i = 1; i <= 4; i++) {
        let men = parseInt($('#q21Men' + i).val()) || 0;
        let women = parseInt($('#q21Women' + i).val()) || 0;

        $('#rowTotal' + i).val(men + women);

        totalMen += men;
        totalWomen += women;
    }

    $('#total_men_q21').val(totalMen);
    $('#total_women_q21').val(totalWomen);
    $('#grand_total_q21').val(totalMen + totalWomen);
}

$(document).on('input', '.question21rowmen, .question21rowWomen', calculateQ21Totals);
$(document).ready(function() {
    calculateQ21Totals();
});
</script>





<script>
  $(document).on("click", "#temp-save-question21", function() {

    calculateQ21Totals();

    let q21_data = {};
    $('.q21Input').each(function() {
      if (this.id) {
        q21_data[this.id] = $(this).val();
      }
    });

    $.post("/superadmin/case/temp-save-question", {
      _token: "{{ csrf_token() }}",
      question_no: 21,
      question21: {
        q21_checked_value: $("input[name='is_crime_justice_q21']:checked").val(),
        q21_data: q21_data,
        others: $("input[name='others_crime_justice_q21']").val()
      }
    }, function() {
      alert("Question 21 Temp Saved ");
    });
  });
</script>



<script>
  $(document).ready(function() {
    $(".twentyone_status").on("click", function() {
      var statusvalue = $("input[name='is_crime_justice_q21']:checked").val();
      $('.question21').find('.othersText').hide()
      $('.question21').find('#q21others').val("")
      if (statusvalue == '1') {
        $('.question21').find('#twentyone_question_view').show()
        $('.question21').find('span').addClass('othersText')
      } else if (statusvalue == "2") {
        $('.question21').find('#twentyone_question_view').hide()
        $('.question21').find('span').removeClass('othersText')
        $('.question21').find('span').show()
      } else {
        $('.question21').find('#twentyone_question_view').hide()
        $('.question21').find('span').addClass('othersText')

      }
    });
  });
</script>