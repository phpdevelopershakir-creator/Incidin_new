<?php
if (($questiontitles[11]->status ?? null) == 1) {

?>
  <style>
    .othersText {
      display: none
    }

    .visibility {
      display: none
    }
  </style>

  <div class="card question15">
    <?php
    $training_responses = [
      1 => "Front-line officials of  Police",
      2 => "Front-line officials of  BGB",
      3 => "Front-line officials of  Coastguard",
      4 => "Front-line officials of  Police",
      5 => "Front-line officials of  Ansar",
      6 => "Front-line officials of  DSS",
      7 => "Front-line officials of  INGO",
      8 => "Front-line officials of  UN Agencies",
      9 => "Community Leaders",
    ];
    ?>

    <?php
    $training_location = [
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
      <h6 class="mb-0 card-title" style="color: {{ isset($question_12_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-12" aria-expanded="false"
          aria-controls="collapse-4">
          12.{{ $questiontitles[11]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-12" class="collapse" role="tabpane12" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div class="icheck-primary">
          <?php if (isset($question_12_data->q12_checked_value)) { ?>
            <input
              type="radio"
              id="radioTwelve1"
              class="twelve_status"
              name="is_formal_written_procedures_12q"
              <?= (isset($question_12_data->q12_checked_value) && $question_12_data->q12_checked_value == "1") ? "checked" : ""; ?>

              value="1">
          <?php } else { ?>
            <input type="radio" id="radioTwelve1" class="twelve_status" name="is_formal_written_procedures_12q" checked value="1">
          <?php } ?>
          <label for="radioTwelve1">
            Yes
          </label>
        </div>
        <div class="icheck-primary">
          <input
            type="radio"
            id="radioTwelve2"
            class="twelve_status"
            name="is_formal_written_procedures_12q"
            <?= (isset($question_12_data->q12_checked_value) && $question_12_data->q12_checked_value == "0") ? "checked" : ""; ?>
            value="0">
          <label for="radioTwelve2">
            No
          </label>
        </div>

        <div class="icheck-primary input-group mb-3">

          <input
            type="radio"
            id="radioTwelve3"
            class="twelve_status"
            name="is_formal_written_procedures_12q"
            <?= (isset($question_12_data->q12_checked_value) && $question_12_data->q12_checked_value == "2") ? "checked" : ""; ?>
            value="2">
          <label for="radioTwelve3">
            Others
          </label><span class=" col-md-6 mt--4 <?= (isset($question_12_data->q12_checked_value) && $question_12_data->q12_checked_value == "2") ? "" : "othersText"; ?>" style="margin-top:-8px;">
            <input
              type="text"
              id="q15others"
              placeholder="Others "
              class="form-control"
              value="<?= (isset($question_12_data->others) && $question_12_data->others) ? $question_12_data->others : ""; ?>"

              name="others_formal_written_procedures_12q"></span>
        </div>

        <div id="fifteen_question_view" class="<?= (isset($question_12_data->q12_checked_value)) && ($question_12_data->q12_checked_value == "2" || $question_12_data->q12_checked_value == "0") ? "visibility" : ""; ?>">
          <table class="table table-bordered text-center" id="q12Table">
            <h4>A. new investigations</h4>
            <thead>
              <tr>
                <th>Country/Region/International Law Enforcement Organization</th>
                <th>Sex Trafficking</th>
                <th>Labour Trafficking</th>
                <th>Other/Unspecific Trafficking</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              @for($i=0;$i<3;$i++)

                <tr>




                <td>
                  <input type="text" name="development_partner[]" class="form-control q15Input" value="{{ $question_12_data->q15_data->development_partner[$i] ?? '' }}" min="0">
                </td>

                <td>
                  <input type="number" name="men_q15[]" class="form-control men-input q15Input" value="{{ $question_12_data->q15_data->men[$i] ?? 0 }}" min="0">
                </td>
                <td>
                  <input type="number" name="women_q15[]" class="form-control women-input q15Input" value="{{ $question_12_data->q15_data->women[$i] ?? 0 }}" min="0">
                </td>
                <td>
                  <input type="number" name="third_gender_q15[]" class="form-control tg-input q15Input" value="{{ $question_12_data->q15_data->tg[$i] ?? 0 }}" min="0">
                </td>
                <td>
                  <input type="text" name="total_q15[]" class="form-control total-input q15Input" value="{{ $question_12_data->q15_data->total[$i] ?? 0 }}" readonly>
                </td>
                </tr>
                @endfor
            </tbody>
          </table>
          <br>
          <table class="table table-bordered text-center" id="q12Table">
            <h4>B. new prosecutions</h4>
            <thead>
              <tr>
                <th>Country/Region/International Law Enforcement Organization</th>
                <th>Sex Trafficking</th>
                <th>Labour Trafficking</th>
                <th>Other/Unspecific Trafficking</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              @for($i=0;$i<3;$i++)

                <tr>




                <td>
                  <input type="text" name="development_partner[]" class="form-control q15Input" value="{{ $question_12_data->q15_data->development_partner[$i] ?? '' }}" min="0">
                </td>

                <td>
                  <input type="number" name="men_q15[]" class="form-control men-input q15Input" value="{{ $question_12_data->q15_data->men[$i] ?? 0 }}" min="0">
                </td>
                <td>
                  <input type="number" name="women_q15[]" class="form-control women-input q15Input" value="{{ $question_12_data->q15_data->women[$i] ?? 0 }}" min="0">
                </td>
                <td>
                  <input type="number" name="third_gender_q15[]" class="form-control tg-input q15Input" value="{{ $question_12_data->q15_data->tg[$i] ?? 0 }}" min="0">
                </td>
                <td>
                  <input type="text" name="total_q15[]" class="form-control total-input q15Input" value="{{ $question_12_data->q15_data->total[$i] ?? 0 }}" readonly>
                </td>
                </tr>
                @endfor
            </tbody>
          </table>
          <br>
          <table class="table table-bordered text-center" id="q12Table">
            <h4>C. New repatriations</h4>
            <thead>
              <tr>
                <th>Country/Region/International Law Enforcement Organization</th>
                <th>Sex Trafficking</th>
                <th>Labour Trafficking</th>
                <th>Other/Unspecific Trafficking</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              @for($i=0;$i<3;$i++)

                <tr>




                <td>
                  <input type="text" name="development_partner[]" class="form-control q15Input" value="{{ $question_12_data->q15_data->development_partner[$i] ?? '' }}" min="0">
                </td>

                <td>
                  <input type="number" name="men_q15[]" class="form-control men-input q15Input" value="{{ $question_12_data->q15_data->men[$i] ?? 0 }}" min="0">
                </td>
                <td>
                  <input type="number" name="women_q15[]" class="form-control women-input q15Input" value="{{ $question_12_data->q15_data->women[$i] ?? 0 }}" min="0">
                </td>
                <td>
                  <input type="number" name="third_gender_q15[]" class="form-control tg-input q15Input" value="{{ $question_12_data->q15_data->tg[$i] ?? 0 }}" min="0">
                </td>
                <td>
                  <input type="text" name="total_q15[]" class="form-control total-input q15Input" value="{{ $question_12_data->q15_data->total[$i] ?? 0 }}" readonly>
                </td>
                </tr>
                @endfor
            </tbody>
          </table>
          <br>
          <table class="table table-bordered text-center" id="q12Table">
            <h4>D. New extraditions</h4>
            <thead>
              <tr>
                <th>Country/Region/International Law Enforcement Organization</th>
                <th>Sex Trafficking</th>
                <th>Labour Trafficking</th>
                <th>Other/Unspecific Trafficking</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              @for($i=0;$i<3;$i++)

                <tr>




                <td>
                  <input type="text" name="development_partner[]" class="form-control q15Input" value="{{ $question_12_data->q15_data->development_partner[$i] ?? '' }}" min="0">
                </td>

                <td>
                  <input type="number" name="men_q15[]" class="form-control men-input q15Input" value="{{ $question_12_data->q15_data->men[$i] ?? 0 }}" min="0">
                </td>
                <td>
                  <input type="number" name="women_q15[]" class="form-control women-input q15Input" value="{{ $question_12_data->q15_data->women[$i] ?? 0 }}" min="0">
                </td>
                <td>
                  <input type="number" name="third_gender_q15[]" class="form-control tg-input q15Input" value="{{ $question_12_data->q15_data->tg[$i] ?? 0 }}" min="0">
                </td>
                <td>
                  <input type="text" name="total_q15[]" class="form-control total-input q15Input" value="{{ $question_12_data->q15_data->total[$i] ?? 0 }}" readonly>
                </td>
                </tr>
                @endfor
            </tbody>
          </table>



        </div>
        <br />

        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question15">
            Save
          </button>

        </p>

      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    $(document).on('input', '.men-input, .women-input, .tg-input', function() {
      let row = $(this).closest('tr');
      let men = parseInt(row.find('.men-input').val()) || 0;
      let women = parseInt(row.find('.women-input').val()) || 0;
      let tg = parseInt(row.find('.tg-input').val()) || 0;
      row.find('.total-input').val(men + women + tg);
    });
  </script>



  <script>
    $(document).ready(function() {
      $(".twelve_status").on("click", function() {
        var statusvalue = $("input[name='is_formal_written_procedures_12q']:checked").val();
        $('.question15').find('.othersText').hide()
        $('.question15').find('#q15others').val("")
        if (statusvalue == '1') {
          $('.question15').find('#fifteen_question_view').show()
          $('.question15').find('span').addClass('othersText')
        } else if (statusvalue == "2") {
          $('.question15').find('#fifteen_question_view').hide()
          $('.question15').find('span').removeClass('othersText')
          $('.question15').find('span').show()
        } else {
          $('.question15').find('#fifteen_question_view').hide()
          $('.question15').find('span').addClass('othersText')

        }
      });
    });
  </script>

  <script>
    // CSRF SETUP (MOST IMPORTANT)
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
      }
    });

    // AUTO TOTAL
    $(document).on('input', '.men-input, .women-input, .tg-input', function() {
      let row = $(this).closest('tr');
      let men = parseInt(row.find('.men-input').val()) || 0;
      let women = parseInt(row.find('.women-input').val()) || 0;
      let tg = parseInt(row.find('.tg-input').val()) || 0;
      row.find('.total-input').val(men + women + tg);
    });

    // SHOW / HIDE
    $(document).on('change', '.twelve_status', function() {
      let v = $(this).val();
      $('.othersText').hide();
      $('#fifteen_question_view').hide();

      if (v === '1') {
        $('#fifteen_question_view').show();
      } else if (v === '2') {
        $('.othersText').show();
      }
    });
    // SAVE BUTTON
    $(document).on('click', '#temp-save-question15', function() {

      let yesNo = $('input[name="is_formal_written_procedures_12q"]:checked').val();
      let others = $('input[name="others_formal_written_procedures_12q"]').val();

      let rows = [];

      $('#q12Table tbody tr').each(function() {
        rows.push({
          category_trainee: $(this).find('select[name="category_trainee[]"]').val(),
          number_traning: $(this).find('input[name="number_traning[]"]').val(),
          development_partner: $(this).find('input[name="development_partner[]"]').val(),
          men: $(this).find('input[name="men_q15[]"]').val(),
          women: $(this).find('input[name="women_q15[]"]').val(),
          tg: $(this).find('input[name="third_gender_q15[]"]').val(),
          total: $(this).find('input[name="total_q15[]"]').val(),
        });
      });

      $.ajax({
        url: "/superadmin/case/temp-save-question",
        method: "POST",
        data: {
          _token: $('meta[name="csrf-token"]').attr('content'),
          question_no: 15,
          question15: JSON.stringify({
            q12_checked_value: yesNo,
            others: others,
            rows: rows
          })
        },
        success: function() {
          alert("Saved Successfully");
        }
      });
    });
  </script>


<?php } ?>