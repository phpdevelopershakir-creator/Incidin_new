<?php
if (($questiontitles[12]->status ?? null) == 1) {

?>
  <style>
    .othersText {
      display: none
    }

    .visibility {
      display: none
    }
  </style>

  <div class="card question13">
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
      <h6 class="mb-0 card-title" style="color: {{ isset($question_13_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-13" aria-expanded="false"
          aria-controls="collapse-4">
          13.{{ $questiontitles[12]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-13" class="collapse" role="tabpane13" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div class="icheck-primary">
          <?php if (isset($question_13_data->q13_checked_value)) { ?>
            <input
              type="radio"
              id="radioThirteen1"
              class="thirteen_status"
              name="is_formal_written_procedures_13q"
              <?= (isset($question_13_data->q13_checked_value) && $question_13_data->q13_checked_value == "1") ? "checked" : ""; ?>

              value="1">
          <?php } else { ?>
            <input type="radio" id="radioThirteen1" class="thirteen_status" name="is_formal_written_procedures_13q" checked value="1">
          <?php } ?>
          <label for="radioThirteen1">
            Yes
          </label>
        </div>
        <div class="icheck-primary">
          <input
            type="radio"
            id="radioThirteen2"
            class="thirteen_status"
            name="is_formal_written_procedures_13q"
            <?= (isset($question_13_data->q13_checked_value) && $question_13_data->q13_checked_value == "0") ? "checked" : ""; ?>
            value="0">
          <label for="radioThirteen2">
            No
          </label>
        </div>

        <div class="icheck-primary input-group mb-3">

          <input
            type="radio"
            id="radioThirteen3"
            class="thirteen_status"
            name="is_formal_written_procedures_13q"
            <?= (isset($question_13_data->q13_checked_value) && $question_13_data->q13_checked_value == "2") ? "checked" : ""; ?>
            value="2">
          <label for="radioThirteen3">
            Others
          </label><span class=" col-md-6 mt--4 <?= (isset($question_13_data->q13_checked_value) && $question_13_data->q13_checked_value == "2") ? "" : "othersText"; ?>" style="margin-top:-8px;">
            <input
              type="text"
              id="q13others"
              placeholder="Others "
              class="form-control"
              value="<?= (isset($question_13_data->others) && $question_13_data->others) ? $question_13_data->others : ""; ?>"

              name="others_formal_written_procedures_13q"></span>
        </div>

        <div id="thirteen_question_view" class="<?= (isset($question_13_data->q13_checked_value)) && ($question_13_data->q13_checked_value == "2" || $question_13_data->q13_checked_value == "0") ? "visibility" : ""; ?>">
          <table class="table table-bordered text-center" id="q13Table">
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
                  <input type="text" name="development_partner_q13[]" class="form-control q13Input" value="{{ $question_13_data->q15_data->development_partner_q13[$i] ?? '' }}" min="0">
                </td>

                <td>
                  <input type="number" name="men_q13[]" class="form-control men-input q13Input" value="{{ $question_13_data->q15_data->men[$i] ?? 0 }}" min="0">
                </td>
                <td>
                  <input type="number" name="women_q13[]" class="form-control women-input q13Input" value="{{ $question_13_data->q15_data->women[$i] ?? 0 }}" min="0">
                </td>
                <td>
                  <input type="number" name="third_gender_q13[]" class="form-control tg-input q13Input" value="{{ $question_13_data->q15_data->tg[$i] ?? 0 }}" min="0">
                </td>
                <td>
                  <input type="text" name="total_q13[]" class="form-control total-input q13Input" value="{{ $question_13_data->q15_data->total[$i] ?? 0 }}" readonly>
                </td>
                </tr>
                @endfor
            </tbody>
          </table>
          <br>
          <table class="table table-bordered text-center" id="q13Table">
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
                  <input type="text" name="development_partner_q13[]" class="form-control q13Input" value="{{ $question_13_data->q15_data->development_partner_q13[$i] ?? '' }}" min="0">
                </td>

                <td>
                  <input type="number" name="men_q13[]" class="form-control men-input q13Input" value="{{ $question_13_data->q15_data->men[$i] ?? 0 }}" min="0">
                </td>
                <td>
                  <input type="number" name="women_q13[]" class="form-control women-input q13Input" value="{{ $question_13_data->q15_data->women[$i] ?? 0 }}" min="0">
                </td>
                <td>
                  <input type="number" name="third_gender_q13[]" class="form-control tg-input q13Input" value="{{ $question_13_data->q15_data->tg[$i] ?? 0 }}" min="0">
                </td>
                <td>
                  <input type="text" name="total_q13[]" class="form-control total-input q13Input" value="{{ $question_13_data->q15_data->total[$i] ?? 0 }}" readonly>
                </td>
                </tr>
                @endfor
            </tbody>
          </table>
          <br>
          <table class="table table-bordered text-center" id="q13Table">
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
                  <input type="text" name="development_partner_q13[]" class="form-control q13Input" value="{{ $question_13_data->q15_data->development_partner_q13[$i] ?? '' }}" min="0">
                </td>

                <td>
                  <input type="number" name="men_q13[]" class="form-control men-input q13Input" value="{{ $question_13_data->q15_data->men[$i] ?? 0 }}" min="0">
                </td>
                <td>
                  <input type="number" name="women_q13[]" class="form-control women-input q13Input" value="{{ $question_13_data->q15_data->women[$i] ?? 0 }}" min="0">
                </td>
                <td>
                  <input type="number" name="third_gender_q13[]" class="form-control tg-input q13Input" value="{{ $question_13_data->q15_data->tg[$i] ?? 0 }}" min="0">
                </td>
                <td>
                  <input type="text" name="total_q13[]" class="form-control total-input q13Input" value="{{ $question_13_data->q15_data->total[$i] ?? 0 }}" readonly>
                </td>
                </tr>
                @endfor
            </tbody>
          </table>
          <br>
          <table class="table table-bordered text-center" id="q13Table">
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
                  <input type="text" name="development_partner_q13[]" class="form-control q13Input" value="{{ $question_13_data->q15_data->development_partner_q13[$i] ?? '' }}" min="0">
                </td>

                <td>
                  <input type="number" name="men_q13[]" class="form-control men-input q13Input" value="{{ $question_13_data->q15_data->men[$i] ?? 0 }}" min="0">
                </td>
                <td>
                  <input type="number" name="women_q13[]" class="form-control women-input q13Input" value="{{ $question_13_data->q15_data->women[$i] ?? 0 }}" min="0">
                </td>
                <td>
                  <input type="number" name="third_gender_q13[]" class="form-control tg-input q13Input" value="{{ $question_13_data->q15_data->tg[$i] ?? 0 }}" min="0">
                </td>
                <td>
                  <input type="text" name="total_q13[]" class="form-control total-input q13Input" value="{{ $question_13_data->q15_data->total[$i] ?? 0 }}" readonly>
                </td>
                </tr>
                @endfor
            </tbody>
          </table>



        </div>
        <br />

        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question13">
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
      $(".thirteen_status").on("click", function() {
        var statusvalue = $("input[name='is_formal_written_procedures_13q']:checked").val();
        $('.question13').find('.othersText').hide()
        $('.question13').find('#q13others').val("")
        if (statusvalue == '1') {
          $('.question13').find('#thirteen_question_view').show()
          $('.question13').find('span').addClass('othersText')
        } else if (statusvalue == "2") {
          $('.question13').find('#thirteen_question_view').hide()
          $('.question13').find('span').removeClass('othersText')
          $('.question13').find('span').show()
        } else {
          $('.question13').find('#thirteen_question_view').hide()
          $('.question13').find('span').addClass('othersText')

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
    $(document).on('change', '.thirteen_status', function() {
      let v = $(this).val();
      $('.othersText').hide();
      $('#thirteen_question_view').hide();

      if (v === '1') {
        $('#thirteen_question_view').show();
      } else if (v === '2') {
        $('.othersText').show();
      }
    });
    // SAVE BUTTON
    $(document).on('click', '#temp-save-question13', function() {

      let yesNo = $('input[name="is_formal_written_procedures_13q"]:checked').val();
      let others = $('input[name="others_formal_written_procedures_13q"]').val();

      let rows = [];

      $('#q13Table tbody tr').each(function() {
        rows.push({
          category_trainee: $(this).find('select[name="category_trainee[]"]').val(),
          number_traning: $(this).find('input[name="number_traning[]"]').val(),
          development_partner_q13: $(this).find('input[name="development_partner_q13[]"]').val(),
          men: $(this).find('input[name="men_q13[]"]').val(),
          women: $(this).find('input[name="women_q13[]"]').val(),
          tg: $(this).find('input[name="third_gender_q13[]"]').val(),
          total: $(this).find('input[name="total_q13[]"]').val(),
        });
      });

      $.ajax({
        url: "/superadmin/case/temp-save-question",
        method: "POST",
        data: {
          _token: $('meta[name="csrf-token"]').attr('content'),
          question_no: 15,
          question13: JSON.stringify({
            q13_checked_value: yesNo,
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