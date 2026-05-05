<?php
if (($questiontitles[16]->status ?? null) == 1) {

?>
  <style>
    .visibility {
      display: none;
    }

    .othersText {
      display: none;
    }
  </style>

  <div class="card question17">
    <?php
    $Status_Lists = [
      1 => "Enforced",
      2 => "Updated and enforced",
      3 => "Stricter enforcement",
      4 => "Increases efforts"
    ];
    ?>

    <div class="card-header" role="tab" id="heading-4">

      <h6 class="card-title" style="color: {{ isset($question_17_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-17" aria-expanded="false"
          aria-controls="collapse-4">
          17.{{ $questiontitles[16]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-17" class="collapse" role="tabpane17" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div class="icheck-primary">
          <?php if (isset($question_17_data->q17_checked_value)) { ?>
            <input
              type="radio"
              id="radioSeventeen1"
              class="seventeenstatus"
              name="is_report_country_narrative_protection_q17"
              <?= (isset($question_17_data->q17_checked_value) && $question_17_data->q17_checked_value == "1") ? "checked" : ""; ?>
              value="1">
          <?php } else { ?>

            <input type="radio" id="radioSeventeen1" class="seventeenstatus" name="is_report_country_narrative_protection_q17" checked value="1">
          <?php } ?>

          <label for="radioSeventeen1">
            Yes
          </label>
        </div>
        <div class="icheck-primary">
          <input
            type="radio"
            id="radioSeventeen2"
            class="seventeenstatus"
            name="is_report_country_narrative_protection_q17"
            <?= (isset($question_17_data->q17_checked_value) && $question_17_data->q17_checked_value == "0") ? "checked" : ""; ?>

            value="0">
          <label for="radioSeventeen2">
            No
          </label>
        </div>
        <div class="icheck-primary icheck-primary input-group">
          <input
            type="radio"
            id="radioSeventeen3"
            class="seventeenstatus"
            name="is_report_country_narrative_protection_q17"
            <?= (isset($question_17_data->q17_checked_value) && $question_17_data->q17_checked_value == "2") ? "checked" : ""; ?>
            value="2">
          <label for="radioSeventeen3">
            Others
          </label> </label> <span class=" col-md-6 mt--4 <?= (isset($question_17_data->q17_checked_value) && $question_17_data->q17_checked_value == "2") ? "" : "othersText"; ?>">
            <input
              type="text"
              id="q17others"
              placeholder="Others "
              class="form-control "
              value="<?= (isset($question_17_data->others) && $question_1_data->others) ? $question_17_data->others : '' ?>"
              name="other_report_country_narrative_protection_q17"></span>
        </div>



        <div id="17_question_view" class="<?= (isset($question_17_data->q17_checked_value)   && ($question_17_data->q17_checked_value == '0')) ? 'visibility' : ''; ?>">

          <!-- table  Start -->
          <table id="addRowQ17" class="table table-bordered text-center">

            <thead>
              <tr>
                <th rowspan="2">Title of Original Guideline</th>
                <th rowspan="2">Description of change/Status</th>
                <th colspan="4">VoT referred</th>

                <th>Action</th>
              </tr>
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>TG</th>
                <th>Total</th>

              </tr>
            </thead>
            <tbody>
              <?php if (isset($question_17_data->q28_data) && count($question_17_data->q28_data) > 0) {
                $i = 0; ?>
                @foreach($question_17_data->q28_data as $q28)
                <tr class="qe17NoOfRow" id="row<?= $i; ?>">

                  <td>
                    <p>Referral desk established at women and Child Repression Prevention Tribunals,Anti-Trafficking Tribunals, and District tribunals</p>
                    <input type="hidden" name="report_country_narrative_protection_title_q17[]" value="1" class="form-control report_country_narrative_protection_title_q17">
                  </td>
                  <td>
                    <select name="report_country_narrative_protection_description_q17[]" id="q54TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($Status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->report_country_narrative_protection_description_q17 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>

                  <td><input type="text" name="report_country_narrative_protection_men_q17[]" class="form-control report_country_narrative_protection_men_q17"></td>

                  </td>
                  <td><input type="text" name="report_country_narrative_protection_women_q17[]" class="form-control report_country_narrative_protection_women_q17"></td>

                  </td>
                  <td><input type="text" name="report_country_narrative_protection_tg_q17[]" class="form-control report_country_narrative_protection_tg_q17"></td>

                  </td>
                  <td><input type="text" name="report_country_narrative_protection_total_q17[]" class="form-control report_country_narrative_protection_total_q17" readonly></td>

                  </td>

                  <td>
                    <?php if ($i == 0) { ?>
                      <button id="addRowDatasq17" type="button" class="btn btn-sm btn-primary">+</i></button>
                    <?php } else { ?>
                      <button type="button" name="remove" id="<?= $i; ?>" class="btn btn-danger btn_remove cicle">-</button>
                  </td>
                <?php
                    } ?>
                </td>

                </tr>
                <?php $i++; ?>
                @endforeach

              <?php } else { ?>
                <!-- test -->
                <tr class="qe17NoOfRow">
                  <td>
                    <p>Referral desk established at women and Child Repression Prevention Tribunals,Anti-Trafficking Tribunals, and District tribunals</p>
                    <input type="hidden" name="report_country_narrative_protection_title_q17[]" value="1" class="form-control report_country_narrative_protection_title_q17">
                  </td>
                  <td>
                    <select name="report_country_narrative_protection_description_q17[]" id="q54TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($Status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->report_country_narrative_protection_description_q17 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>


                  <td><input type="text" name="report_country_narrative_protection_men_q17[]" class="form-control report_country_narrative_protection_men_q17"></td>


                  <td><input type="text" name="report_country_narrative_protection_women_q17[]" class="form-control report_country_narrative_protection_women_q17"></td>


                  <td><input type="text" name="report_country_narrative_protection_tg_q17[]" class="form-control report_country_narrative_protection_tg_q17"></td>


                  <td><input type="text" name="report_country_narrative_protection_total_q17[]" class="form-control report_country_narrative_protection_total_q17" readonly></td>




                </tr>

                <tr class="qe17NoOfRow">
                  <td>

                    <p>National Referral Mechanism Guideline</p>
                    <input type="hidden" name="report_country_narrative_protection_title_q17[]" value="2" class="form-control report_country_narrative_protection_title_q17">
                  </td>
                  <td>
                    <select name="report_country_narrative_protection_description_q17[]" id="q54TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($Status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->report_country_narrative_protection_description_q17 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>




                  <td><input type="text" name="report_country_narrative_protection_men_q17[]" class="form-control report_country_narrative_protection_men_q17"></td>


                  <td><input type="text" name="report_country_narrative_protection_women_q17[]" class="form-control report_country_narrative_protection_women_q17"></td>


                  <td><input type="text" name="report_country_narrative_protection_tg_q17[]" class="form-control report_country_narrative_protection_tg_q17"></td>


                  <td><input type="text" name="report_country_narrative_protection_total_q17[]" class="form-control report_country_narrative_protection_total_q17" readonly></td>




                </tr>

                <tr class="qe17NoOfRow">
                  <td>

                    <p>National Referral Mechanism SOP</p>
                    <input type="hidden" name="report_country_narrative_protection_title_q17[]" value="3" class="form-control report_country_narrative_protection_title_q17">
                  </td>
                  <td>
                    <select name="report_country_narrative_protection_description_q17[]" id="q54TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($Status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->report_country_narrative_protection_description_q17 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>





                  <td><input type="text" name="report_country_narrative_protection_men_q17[]" class="form-control report_country_narrative_protection_men_q17"></td>


                  <td><input type="text" name="report_country_narrative_protection_women_q17[]" class="form-control report_country_narrative_protection_women_q17"></td>


                  <td><input type="text" name="report_country_narrative_protection_tg_q17[]" class="form-control report_country_narrative_protection_tg_q17"></td>


                  <td><input type="text" name="report_country_narrative_protection_total_q17[]" class="form-control report_country_narrative_protection_total_q17" readonly></td>

                </tr>

                <tr class="qe17NoOfRow">
                  <td>

                    <p>Digital Referral Mechanism of MoHA</p>
                    <input type="hidden" name="report_country_narrative_protection_title_q17[]" value="4" class="form-control report_country_narrative_protection_title_q17">
                  </td>
                  <td>
                    <select name="report_country_narrative_protection_description_q17[]" id="q54TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($Status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->report_country_narrative_protection_description_q17 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>





                  <td><input type="text" name="report_country_narrative_protection_men_q17[]" class="form-control report_country_narrative_protection_men_q17"></td>


                  <td><input type="text" name="report_country_narrative_protection_women_q17[]" class="form-control report_country_narrative_protection_women_q17"></td>


                  <td><input type="text" name="report_country_narrative_protection_tg_q17[]" class="form-control report_country_narrative_protection_tg_q17"></td>


                  <td><input type="text" name="report_country_narrative_protection_total_q17[]" class="form-control report_country_narrative_protection_total_q17" readonly></td>

                </tr>



                <!-- test end -->
                <tr class="qe17NoOfRow">
                  <td><input type="text" name="report_country_narrative_protection_title_q17[]" class="form-control report_country_narrative_protection_title_q17" placeholder="Others Specific"></td>



                  <td>
                    <select name="report_country_narrative_protection_description_q17[]" id="q54TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($Status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->report_country_narrative_protection_description_q17 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>

                  </td>
                  <td><input type="text" name="report_country_narrative_protection_men_q17[]" class="form-control report_country_narrative_protection_men_q17"></td>

                  </td>
                  <td><input type="text" name="report_country_narrative_protection_women_q17[]" class="form-control report_country_narrative_protection_women_q17"></td>

                  </td>
                  <td><input type="text" name="report_country_narrative_protection_tg_q17[]" class="form-control report_country_narrative_protection_tg_q17"></td>

                  </td>
                  <td><input type="text" name="report_country_narrative_protection_total_q17[]" class="form-control report_country_narrative_protection_total_q17" readonly></td>

                  </td>

                  <td><button id="addRowDatasq17" type="button" class="btn btn-sm btn-primary">+</i></button></td>

                </tr>
              <?php } ?>
            </tbody>
          </table>




        </div>
        <br />
        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question17">Save</button>
        </p>
      </div>
    </div>
  </div>


  <script type="text/javascript">
    $(document).ready(function() {
      $(".seventeenstatus").on("click", function() {
        var statusvalue = $("input[name='is_report_country_narrative_protection_q17']:checked").val();
        $('.question17').find('.othersText').hide()
        $('.question17').find('#q17others').val("")
        if (statusvalue == '1') {
          $('.question17').find('#17_question_view').show()
          $('.question17').find('span').addClass('othersText')
        } else if (statusvalue == "2") {
          $('.question17').find('#17_question_view').hide()
          $('.question17').find('span').removeClass('othersText')
          $('.question17').find('span').show()

        } else {
          $('.question17').find('#17_question_view').hide()
          $('.question17').find('span').addClass('othersText')


        }
      });
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $("#addRowDatasq17").click(function() {
        let rowCount = $('.qe17NoOfRow').length + 1
        $("#addRowQ17").append(
          '<tr class="qe17NoOfRow" id="row' + rowCount + '">' +
          `<td>
             <input type="text" name="report_country_narrative_protection_title_q17[]"  class="form-control report_country_narrative_protection_title_q17" placeholder="Others Specific">
        </td>` +
          `<td>
            <select name="report_country_narrative_protection_description_q17[]" id="q54TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($Status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->report_country_narrative_protection_description_q17 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
        </td>` +
          `<td>
             <input type="text" name="report_country_narrative_protection_men_q17[]"  class="form-control report_country_narrative_protection_men_q17" >
        </td>` +
          `<td>
             <input type="text" name="report_country_narrative_protection_women_q17[]"  class="form-control report_country_narrative_protection_women_q17" >
        </td>` +
          `<td>
             <input type="text" name="report_country_narrative_protection_tg_q17[]"  class="form-control report_country_narrative_protection_tg_q17" >
        </td>` +
          `<td>
             <input type="text" name="report_country_narrative_protection_total_q17[]"  class="form-control report_country_narrative_protection_total_q17" readonly>
        </td>` +



          '<td><button type="button" name="remove" id="' + rowCount + '" class="btn btn-danger btn_remove cicle">-</button></td>' +

          '</tr>'
        )
      });
      $(document).on('click', '.btn_remove', function() {
        var button_id = $(this).attr('id');
        $('#row' + button_id + '').remove();
      });

    })
  </script>

  <script>
    $(document).on('input', '.report_country_narrative_protection_men_q17, .report_country_narrative_protection_women_q17, .report_country_narrative_protection_tg_q17', function() {

      let row = $(this).closest('tr');

      let men = parseFloat(row.find('.report_country_narrative_protection_men_q17').val()) || 0;
      let women = parseFloat(row.find('.report_country_narrative_protection_women_q17').val()) || 0;
      let tg = parseFloat(row.find('.report_country_narrative_protection_tg_q17').val()) || 0;

      let total = men + women + tg;

      row.find('.report_country_narrative_protection_total_q17').val(total);
    });
  </script>

<?php } ?>