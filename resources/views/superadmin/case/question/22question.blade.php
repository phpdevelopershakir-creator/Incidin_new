<?php
if (($questiontitles[21]->status ?? null) == 1) {

?>
  <style>
    .othersText {
      display: none
    }

    .visibility {
      display: none
    }
  </style>

  <div class="card question22">
    <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0 card-title" style="color: {{ isset($question_22_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-22" aria-expanded="false"
          aria-controls="collapse-4">
          22.{{ $questiontitles[21]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-22" class="collapse" role="tabpane22" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div class="icheck-primary">
          <?php if (isset($question_22_data->q22_checked_value)) { ?>
            <input
              type="radio"
              id="radioTwentyTwo1"
              class="twentytwo_status"
              name="is_crime_justice_q22"
              <?= (isset($question_22_data->q22_checked_value) && $question_22_data->q22_checked_value == "1") ? "checked" : ""; ?>

              value="1">
          <?php } else { ?>
            <input type="radio" id="radioTwentyTwo1" class="twentytwo_status" name="is_crime_justice_q22" checked value="1">
          <?php } ?>
          <label for="radioTwentyTwo1">
            Yes
          </label>
        </div>
        <div class="icheck-primary">
          <input
            type="radio"
            id="radioTwentyTwo2"
            class="twentytwo_status"
            name="is_crime_justice_q22"
            <?= (isset($question_22_data->q22_checked_value) && $question_22_data->q22_checked_value == "0") ? "checked" : ""; ?>
            value="0">
          <label for="radioTwentyTwo2">
            No
          </label>
        </div>

        <div class="icheck-primary input-group mb-3">

          <input
            type="radio"
            id="radioTwentyTwo3"
            class="twentytwo_status"
            name="is_crime_justice_q22"
            <?= (isset($question_22_data->q22_checked_value) && $question_22_data->q22_checked_value == "2") ? "checked" : ""; ?>
            value="2">
          <label for="radioTwentyTwo3">
            Others
          </label><span class=" col-md-6 mt--4 <?= (isset($question_22_data->q22_checked_value) && $question_22_data->q22_checked_value == "2") ? "" : "othersText"; ?>" style="margin-top:-8px;">
            <input
              type="text"
              id="q22others"
              placeholder="Others "
              class="form-control"
              value="<?= (isset($question_22_data->others) && $question_22_data->others) ? $question_22_data->others : ""; ?>"

              name="others_crime_justice_q22"></span>
        </div>

        <div id="twenty_two_question_view" class="<?= (isset($question_22_data->q22_checked_value)) && ($question_22_data->q22_checked_value == "2" || $question_22_data->q22_checked_value == "0") ? "visibility" : ""; ?>">
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
                  <input type="text" name="name_q22[]" id="q22Name{{$i}}" class="form-control q22Input"
                    value="{{ $question_22_data->q22_data->{'q22Name'.$i} ?? '' }}">
                </td>

                <td>
                  <input type="text" name="operator_q22[]" id="q22Operator{{$i}}" class="form-control q22Input"
                    value="{{ $question_22_data->q22_data->{'q22Operator'.$i} ?? '' }}">
                </td>

                <td>
                  <input type="number" name="capacity_men_q22[]" id="q22Men{{$i}}" class="form-control question22rowmen q22Input"
                    value="{{ $question_22_data->q22_data->{'q22Men'.$i} ?? 0 }}">
                </td>

                <td>
                  <input type="number" name="capacity_women_q22[]" id="q22Women{{$i}}" class="form-control question22rowWomen q22Input"
                    value="{{ $question_22_data->q22_data->{'q22Women'.$i} ?? 0 }}">
                </td>



                <td>

                  <input type="text" name="capacity_total_q22[]" id="rowTotal{{$i}}"
                    class="form-control q22Input" readonly
                    value="{{ $question_22_data->q22_data->{'rowTotal'.$i} ?? 0 }}">
                </td>

                <td>
                  <input type="text" name="is_specialized_q22[]" id="q22Trafficking{{$i}}" class="form-control q22Input"
                    value="{{ $question_22_data->q22_data->{'q22Trafficking'.$i} ?? '' }}">
                </td>
                <td>
                  <input type="text" name="eligible_victims_q22[]" id="q22Victims{{$i}}" class="form-control q22Input"
                    value="{{ $question_22_data->q22_data->{'q22Victims'.$i} ?? '' }}">
                </td>
                <td>
                  <input type="text" name="note_q22[]" id="q22Note{{$i}}" class="form-control q22Input"
                    value="{{ $question_22_data->q22_data->{'q22Note'.$i} ?? '' }}">
                </td>
                </tr>
                @endfor

                <tr>
                  <th colspan="2">Total</th>
                  <td><input type="text" id="total_men_q22" class="form-control q22Input" readonly></td>
                  <td><input type="text" id="total_women_q22" class="form-control q22Input" readonly></td>
                  <td><input type="text" id="grand_total_q22" class="form-control q22Input" readonly></td>
                </tr>
            </tbody>
          </table>
        </div>
        <br />
        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question22">Save</button>
        </p>

      </div>
    </div>
  </div>
<?php } ?>
<script>
  // ================================
  // ✅ Calculate Row + Grand Total
  // ================================
  function calculateQ22Totals() {
    let totalMen = 0;
    let totalWomen = 0;

    for (let i = 1; i <= 4; i++) {
      let men = Number($('#q22Men' + i).val()) || 0;
      let women = Number($('#q22Women' + i).val()) || 0;

      let rowTotal = men + women;

      // ✅ Update row total
      $('#rowTotal' + i).val(rowTotal);

      totalMen += men;
      totalWomen += women;
    }

    // ✅ Update bottom totals
    $('#total_men_q22').val(totalMen);
    $('#total_women_q22').val(totalWomen);
    $('#grand_total_q22').val(totalMen + totalWomen);
  }


  // ============================================
  // ✅ LIVE Row Calculation (MOST IMPORTANT FIX)
  // ============================================
  $(document).on('input', '.question22rowmen, .question22rowWomen', function() {

    let row = $(this).closest('tr');

    let men = Number(row.find('.question22rowmen').val()) || 0;
    let women = Number(row.find('.question22rowWomen').val()) || 0;

    let total = men + women;

    // ✅ Only current row update
    row.find('input[id^="rowTotal"]').val(total);

    // ✅ Update grand total
    calculateQ22Totals();
  });


  // ================================
  // ✅ Page Load এ run
  // ================================
  $(document).ready(function() {
    calculateQ22Totals();
  });


  // ===================================
  // ✅ Collapse open হলে calculate
  // ===================================
  $('#Question-22').on('shown.bs.collapse', function() {
    calculateQ22Totals();
  });
</script>




<script>
  $(document).on("click", "#temp-save-question22", function() {

    calculateQ22Totals();

    let q22_data = {};
    $('.q22Input').each(function() {
      if (this.id) {
        q22_data[this.id] = $(this).val();
      }
    });

    $.post("/superadmin/case/temp-save-question40to60", {

      _token: "{{ csrf_token() }}",
      question_no: 22,
      question22: {
        q22_checked_value: $("input[name='is_crime_justice_q22']:checked").val(),
        q22_data: q22_data,
        others: $("input[name='others_crime_justice_q22']").val()
      }
    }, function() {
      alert("Question 22 Temp Saved ✅");
    });
  });
</script>



<script>
  $(document).ready(function() {
    $(".twentytwo_status").on("click", function() {
      var statusvalue = $("input[name='is_crime_justice_q22']:checked").val();
      $('.question22').find('.othersText').hide()
      $('.question22').find('#q22others').val("")
      if (statusvalue == '1') {
        $('.question22').find('#twenty_two_question_view').show()
        $('.question22').find('span').addClass('othersText')
      } else if (statusvalue == "2") {
        $('.question22').find('#twenty_two_question_view').hide()
        $('.question22').find('span').removeClass('othersText')
        $('.question22').find('span').show()
      } else {
        $('.question22').find('#twenty_two_question_view').hide()
        $('.question22').find('span').addClass('othersText')

      }
    });
  });
</script>