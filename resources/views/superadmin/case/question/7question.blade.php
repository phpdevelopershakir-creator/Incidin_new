<?php
if (($questiontitles[6]->status ?? null) == 1) {

?>
  <style>
    .othersText {
      display: none
    }

    .visibility {
      display: none
    }
  </style>

  <div class="card question7">
    <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0 card-title" style="color: {{ isset($question_7_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-7" aria-expanded="false"
          aria-controls="collapse-4">
          7.{{ $questiontitles[6]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-7" class="collapse" role="tabpane7" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div class="icheck-primary">
          <?php if (isset($question_7_data->q7_checked_value)) { ?>
            <input
              type="radio"
              id="radioSeven1"
              class="seven_status"
              name="is_exclusively_dedicated_trafficking_q7"
              <?= (isset($question_7_data->q7_checked_value) && $question_7_data->q7_checked_value == "1") ? "checked" : ""; ?>

              value="1">
          <?php } else { ?>
            <input type="radio" id="radioSeven1" class="seven_status" name="is_exclusively_dedicated_trafficking_q7" checked value="1">
          <?php } ?>
          <label for="radioSeven1">
            Yes
          </label>
        </div>
        <div class="icheck-primary">
          <input
            type="radio"
            id="radioSeven2"
            class="seven_status"
            name="is_exclusively_dedicated_trafficking_q7"
            <?= (isset($question_7_data->q7_checked_value) && $question_7_data->q7_checked_value == "0") ? "checked" : ""; ?>
            value="0">
          <label for="radioSeven2">
            No
          </label>
        </div>

        <div class="icheck-primary input-group mb-3">

          <input
            type="radio"
            id="radioSeven3"
            class="seven_status"
            name="is_exclusively_dedicated_trafficking_q7"
            <?= (isset($question_7_data->q7_checked_value) && $question_7_data->q7_checked_value == "2") ? "checked" : ""; ?>
            value="2">
          <label for="radioSeven3">
            Others
          </label><span class=" col-md-6 mt--4 <?= (isset($question_7_data->q7_checked_value) && $question_7_data->q7_checked_value == "2") ? "" : "othersText"; ?>" style="margin-top:-8px;">
            <input
              type="text"
              id="q7others"
              placeholder="Others "
              class="form-control"
              value="<?= (isset($question_7_data->others) && $question_7_data->others) ? $question_7_data->others : ""; ?>"

              name="other_exclusively_dedicated_trafficking_q7"></span>
        </div>

        <div id="seven_question_view" class="<?= (isset($question_7_data->q7_checked_value)) && ($question_7_data->q7_checked_value == "2" || $question_7_data->q7_checked_value == "0") ? "visibility" : ""; ?>">
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
                  <input type="text" name="justice_title_q7[]" id="q7Title{{$i}}" class="form-control q7Input"
                    value="{{ $question_7_data->q7_data->{'q7Title'.$i} ?? '' }}">
                </td>

                <td>
                  <input type="number" name="justice_men_q7[]" id="q7Men{{$i}}" class="form-control question7rowmen q7Input"
                    value="{{ $question_7_data->q7_data->{'q7Men'.$i} ?? 0 }}">
                </td>

                <td>
                  <input type="number" name="justice_women_q7[]" id="q7Women{{$i}}" class="form-control question7rowWomen q7Input"
                    value="{{ $question_7_data->q7_data->{'q7Women'.$i} ?? 0 }}">
                </td>

                <td>
                  <input type="text" name="justice_total_q7[]" id="rowTotal{{$i}}" class="form-control q7Input" readonly>
                </td>
                </tr>
                @endfor

                <tr>
                  <th>Total</th>
                  <td><input type="text" id="total_men_q7" class="form-control q7Input" readonly></td>
                  <td><input type="text" id="total_women_q7" class="form-control q7Input" readonly></td>
                  <td><input type="text" id="grand_total_q7" class="form-control q7Input" readonly></td>
                </tr>
            </tbody>
          </table>
        </div>
        <br />
        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question7">Save</button>
        </p>

      </div>
    </div>
  </div>
<?php } ?>
<script>
  function calculateQ7Totals() {
    let totalMen = 0;
    let totalWomen = 0;

    for (let i = 1; i <= 4; i++) {
      let men = parseInt($('#q7Men' + i).val()) || 0;
      let women = parseInt($('#q7Women' + i).val()) || 0;

      $('#rowTotal' + i).val(men + women);

      totalMen += men;
      totalWomen += women;
    }

    $('#total_men_q7').val(totalMen);
    $('#total_women_q7').val(totalWomen);
    $('#grand_total_q7').val(totalMen + totalWomen);
  }

  $(document).on('input', '.question7rowmen,.question7rowWomen', calculateQ7Totals);
  $(document).ready(calculateQ7Totals);
</script>




<script>
  $(document).on("click", "#temp-save-question7", function() {

    calculateQ7Totals();

    let q7_data = {};
    $('.q7Input').each(function() {
      if (this.id) {
        q7_data[this.id] = $(this).val();
      }
    });

    $.post("/superadmin/case/temp-save-question", {
      _token: "{{ csrf_token() }}",
      question_no: 7,
      question7: {
        q7_checked_value: $("input[name='is_exclusively_dedicated_trafficking_q7']:checked").val(),
        q7_data: q7_data,
        others: $("input[name='other_exclusively_dedicated_trafficking_q7']").val()
      }
    }, function() {
      alert("Question 7 Temp Saved ✅");
    });
  });
</script>



<script>
  $(document).ready(function() {
    $(".seven_status").on("click", function() {
      var statusvalue = $("input[name='is_exclusively_dedicated_trafficking_q7']:checked").val();
      $('.question7').find('.othersText').hide()
      $('.question7').find('#q7others').val("")
      if (statusvalue == '1') {
        $('.question7').find('#seven_question_view').show()
        $('.question7').find('span').addClass('othersText')
      } else if (statusvalue == "2") {
        $('.question7').find('#seven_question_view').hide()
        $('.question7').find('span').removeClass('othersText')
        $('.question7').find('span').show()
      } else {
        $('.question7').find('#seven_question_view').hide()
        $('.question7').find('span').addClass('othersText')

      }
    });
  });
</script>