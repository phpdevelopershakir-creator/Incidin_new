<?php
if (($questiontitles[54]->status ?? null) == 1) {

?>
  <style>
    .visibility {
      display: none;
    }

    .othersText {
      display: none;
    }
  </style>

  <div class="card question55">
    <?php
    $country_Lists = [
      1 => "India",
      2 => "Nepal",
      3 => "Sri lanka",
      4 => "EU",
      5 => "USA",
      6 => "Saudi Arabia",
      7 => "Qatar",
      8 => "Lebanon",
      9 => "Irag",
      10 => "UAE",
      11 => "Thailand",
      12 => "Vietnam",
      13 => "Cambodia",
      14 => "South Africa",
      15 => "Brazil",
      16 => "UK"
    ];
    ?>

    <div class="card-header" role="tab" id="heading-4">

      <h6 class="card-title" style="color: {{ isset($question_55_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-55" aria-expanded="false"
          aria-controls="collapse-4">
          55.{{ $questiontitles[54]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-55" class="collapse" role="tabpane55" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div class="icheck-primary">
          <?php if (isset($question_55_data->q55_checked_value)) { ?>
            <input
              type="radio"
              id="radioFiftyFive1"
              class="fiftyfivestatus"
              name="is_government_provide_trafficking_q55"
              <?= (isset($question_55_data->q55_checked_value) && $question_55_data->q55_checked_value == "1") ? "checked" : ""; ?>
              value="1">
          <?php } else { ?>

            <input type="radio" id="radioFiftyFive1" class="fiftyfivestatus" name="is_government_provide_trafficking_q55" checked value="1">
          <?php } ?>

          <label for="radioFiftyFive1">
            Yes
          </label>
        </div>
        <div class="icheck-primary">
          <input
            type="radio"
            id="radioFiftyFive2"
            class="fiftyfivestatus"
            name="is_government_provide_trafficking_q55"
            <?= (isset($question_55_data->q55_checked_value) && $question_55_data->q55_checked_value == "0") ? "checked" : ""; ?>

            value="0">
          <label for="radioFiftyFive2">
            No
          </label>
        </div>
        <div class="icheck-primary icheck-primary input-group">
          <input
            type="radio"
            id="radioFiftyFive3"
            class="fiftyfivestatus"
            name="is_government_provide_trafficking_q55"
            <?= (isset($question_55_data->q55_checked_value) && $question_55_data->q55_checked_value == "2") ? "checked" : ""; ?>
            value="2">
          <label for="radioFiftyFive3">
            Others
          </label> </label> <span class=" col-md-6 mt--4 <?= (isset($question_55_data->q55_checked_value) && $question_55_data->q55_checked_value == "2") ? "" : "othersText"; ?>">
            <input
              type="text"
              id="q28others"
              placeholder="Others "
              class="form-control "
              value="<?= (isset($question_55_data->others) && $question_1_data->others) ? $question_55_data->others : '' ?>"
              name="other_government_provide_trafficking_q55"></span>
        </div>



        <div id="55_question_view" class="<?= (isset($question_55_data->q55_checked_value)   && ($question_55_data->q55_checked_value == '0')) ? 'visibility' : ''; ?>">

          <!-- table  Start -->
          <table id="addRowQ55" class="table table-bordered text-center">

            <thead>
              <tr>
                <th rowspan="2">Country where posted</th>
                <th rowspan="2">Description</th>
                <th colspan="4">Number of Cases</th>
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
              <?php if (isset($question_55_data->q28_data) && count($question_55_data->q28_data) > 0) {
                $i = 0; ?>
                @foreach($question_55_data->q28_data as $q28)
                <tr class="qe55NoOfRow" id="row<?= $i; ?>">
                  <td>
                    <select name="government_provide_name_q55[]" id="q55TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($country_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_provide_name_q55 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>



                  <td><input type="text" name="government_provide_description_q55[]" class="form-control government_provide_description_q55"></td>

                  </td>
                  <td><input type="text" name="government_provide_men_q55[]" class="form-control government_provide_men_q55"></td>

                  </td>
                  <td><input type="text" name="government_provide_women_q55[]" class="form-control government_provide_women_q55"></td>

                  </td>
                  <td><input type="text" name="government_provide_tg_q55[]" class="form-control government_provide_tg_q55"></td>

                  </td>
                  <td><input type="text" name="government_provide_total_q55[]" class="form-control government_provide_total_q55" readonly></td>

                  </td>

                  <td>
                    <?php if ($i == 0) { ?>
                      <button id="addRowDatasq55" type="button" class="btn btn-sm btn-primary">+</i></button>
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
                <tr class="qe55NoOfRow">
                  <td>
                    <select name="government_provide_name_q55[]" id="q55TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($country_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_provide_name_q55 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>





                  <td><input type="text" name="government_provide_description_q55[]" class="form-control government_provide_description_q55"></td>

                  </td>
                  <td><input type="text" name="government_provide_men_q55[]" class="form-control government_provide_men_q55"></td>

                  </td>
                  <td><input type="text" name="government_provide_women_q55[]" class="form-control government_provide_women_q55"></td>

                  </td>
                  <td><input type="text" name="government_provide_tg_q55[]" class="form-control government_provide_tg_q55"></td>

                  </td>
                  <td><input type="text" name="government_provide_total_q55[]" class="form-control government_provide_total_q55" readonly></td>

                  </td>


                </tr>

                <tr class="qe55NoOfRow">
                  <td>
                    <select name="government_provide_name_q55[]" id="q55TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($country_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_provide_name_q55 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>





                  <td><input type="text" name="government_provide_description_q55[]" class="form-control government_provide_description_q55"></td>

                  </td>
                  <td><input type="text" name="government_provide_men_q55[]" class="form-control government_provide_men_q55"></td>

                  </td>
                  <td><input type="text" name="government_provide_women_q55[]" class="form-control government_provide_women_q55"></td>

                  </td>
                  <td><input type="text" name="government_provide_tg_q55[]" class="form-control government_provide_tg_q55"></td>

                  </td>
                  <td><input type="text" name="government_provide_total_q55[]" class="form-control government_provide_total_q55" readonly></td>

                  </td>


                </tr>

                <tr class="qe55NoOfRow">
                  <td>
                    <select name="government_provide_name_q55[]" id="q55TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($country_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_provide_name_q55 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>





                  <td><input type="text" name="government_provide_description_q55[]" class="form-control government_provide_description_q55"></td>

                  </td>
                  <td><input type="text" name="government_provide_men_q55[]" class="form-control government_provide_men_q55"></td>

                  </td>
                  <td><input type="text" name="government_provide_women_q55[]" class="form-control government_provide_women_q55"></td>

                  </td>
                  <td><input type="text" name="government_provide_tg_q55[]" class="form-control government_provide_tg_q55"></td>

                  </td>
                  <td><input type="text" name="government_provide_total_q55[]" class="form-control government_provide_total_q55" readonly></td>

                  </td>


                </tr>







                <!-- test end -->
                <tr class="qe55NoOfRow">
                  <td><input type="text" name="government_provide_name_q55[]" class="form-control government_provide_name_q55" placeholder="Others Specific"></td>


                  <td><input type="text" name="government_provide_description_q55[]" class="form-control government_provide_description_q55"></td>


                  <td><input type="text" name="government_provide_men_q55[]" class="form-control government_provide_men_q55"></td>


                  <td><input type="text" name="government_provide_women_q55[]" class="form-control government_provide_women_q55"></td>


                  <td><input type="text" name="government_provide_tg_q55[]" class="form-control government_provide_tg_q55"></td>


                  <td><input type="text" name="government_provide_total_q55[]" class="form-control government_provide_total_q55" readonly></td>


                  <td><button id="addRowDatasq55" type="button" class="btn btn-sm btn-primary">+</i></button></td>

                </tr>
              <?php } ?>
            </tbody>
          </table>




        </div>
        <br />
        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question55">Save</button>
        </p>
      </div>
    </div>
  </div>


  <script type="text/javascript">
    $(document).ready(function() {
      $(".fiftyfivestatus").on("click", function() {
        var statusvalue = $("input[name='is_government_provide_trafficking_q55']:checked").val();
        $('.question55').find('.othersText').hide()
        $('.question55').find('#q28others').val("")
        if (statusvalue == '1') {
          $('.question55').find('#55_question_view').show()
          $('.question55').find('span').addClass('othersText')
        } else if (statusvalue == "2") {
          $('.question55').find('#55_question_view').hide()
          $('.question55').find('span').removeClass('othersText')
          $('.question55').find('span').show()

        } else {
          $('.question55').find('#55_question_view').hide()
          $('.question55').find('span').addClass('othersText')


        }
      });
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $("#addRowDatasq55").click(function() {
        let rowCount = $('.qe55NoOfRow').length + 1
        $("#addRowQ55").append(
          '<tr class="qe55NoOfRow" id="row' + rowCount + '">' +
          `<td>
             <input type="text" name="government_provide_name_q55[]"  class="form-control government_provide_name_q55" placeholder="Others Specific">
        </td>` +
          `<td>
             <input type="text" name="government_provide_description_q55[]"  class="form-control government_provide_description_q55" >
        </td>` +
          `<td>
             <input type="text" name="government_provide_men_q55[]"  class="form-control government_provide_men_q55" >
        </td>` +
          `<td>
             <input type="text" name="government_provide_women_q55[]"  class="form-control government_provide_women_q55" >
        </td>` +
          `<td>
             <input type="text" name="government_provide_tg_q55[]"  class="form-control government_provide_tg_q55" >
        </td>` +
          `<td>
             <input type="text" name="government_provide_total_q55[]"  class="form-control government_provide_total_q55" readonly>
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
    $(document).on('input', '.government_provide_men_q55, .government_provide_women_q55, .government_provide_tg_q55', function() {

      let row = $(this).closest('tr');

      let men = parseFloat(row.find('.government_provide_men_q55').val()) || 0;
      let women = parseFloat(row.find('.government_provide_women_q55').val()) || 0;
      let tg = parseFloat(row.find('.government_provide_tg_q55').val()) || 0;

      let total = men + women + tg;

      row.find('.government_provide_total_q55').val(total);
    });
  </script>


<?php } ?>