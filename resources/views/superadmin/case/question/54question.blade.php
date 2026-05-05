<?php
if (($questiontitles[53]->status ?? null) == 1) {

?>
  <style>
    .visibility {
      display: none;
    }

    .othersText {
      display: none;
    }
  </style>

  <div class="card question54">
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

      <h6 class="card-title" style="color: {{ isset($question_54_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-54" aria-expanded="false"
          aria-controls="collapse-4">
          54.{{ $questiontitles[53]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-54" class="collapse" role="tabpane54" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div class="icheck-primary">
          <?php if (isset($question_54_data->q54_checked_value)) { ?>
            <input
              type="radio"
              id="radioFiftyFour1"
              class="fittyfourstatus"
              name="is_country_diplomats_allegedly_q54"
              <?= (isset($question_54_data->q54_checked_value) && $question_54_data->q54_checked_value == "1") ? "checked" : ""; ?>
              value="1">
          <?php } else { ?>

            <input type="radio" id="radioFiftyFour1" class="fittyfourstatus" name="is_country_diplomats_allegedly_q54" checked value="1">
          <?php } ?>

          <label for="radioFiftyFour1">
            Yes
          </label>
        </div>
        <div class="icheck-primary">
          <input
            type="radio"
            id="radioFiftyFour2"
            class="fittyfourstatus"
            name="is_country_diplomats_allegedly_q54"
            <?= (isset($question_54_data->q54_checked_value) && $question_54_data->q54_checked_value == "0") ? "checked" : ""; ?>

            value="0">
          <label for="radioFiftyFour2">
            No
          </label>
        </div>
        <div class="icheck-primary icheck-primary input-group">
          <input
            type="radio"
            id="radioFiftyFour3"
            class="fittyfourstatus"
            name="is_country_diplomats_allegedly_q54"
            <?= (isset($question_54_data->q54_checked_value) && $question_54_data->q54_checked_value == "2") ? "checked" : ""; ?>
            value="2">
          <label for="radioFiftyFour3">
            Others
          </label> </label> <span class=" col-md-6 mt--4 <?= (isset($question_54_data->q54_checked_value) && $question_54_data->q54_checked_value == "2") ? "" : "othersText"; ?>">
            <input
              type="text"
              id="q28others"
              placeholder="Others "
              class="form-control "
              value="<?= (isset($question_54_data->others) && $question_1_data->others) ? $question_54_data->others : '' ?>"
              name="other_country_diplomats_allegedly_q54"></span>
        </div>



        <div id="54_question_view" class="<?= (isset($question_54_data->q54_checked_value)   && ($question_54_data->q54_checked_value == '0')) ? 'visibility' : ''; ?>">

          <!-- table  Start -->
          <table id="addRowQ54" class="table table-bordered text-center">

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
              <?php if (isset($question_54_data->q28_data) && count($question_54_data->q28_data) > 0) {
                $i = 0; ?>
                @foreach($question_54_data->q28_data as $q28)
                <tr class="qe54NoOfRow" id="row<?= $i; ?>">
                  <td>
                    <select name="country_diplomat_name_q54[]" id="q54TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($country_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->country_diplomat_name_q54 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>



                  <td><input type="text" name="country_diplomat_description_q54[]" class="form-control country_diplomat_description_q54"></td>

                  </td>
                  <td><input type="text" name="country_diplomat_men_q54[]" class="form-control country_diplomat_men_q54"></td>

                  </td>
                  <td><input type="text" name="country_diplomat_women_q54[]" class="form-control country_diplomat_women_q54"></td>

                  </td>
                  <td><input type="text" name="country_diplomat_tg_q54[]" class="form-control country_diplomat_tg_q54"></td>

                  </td>
                  <td><input type="text" name="country_diplomat_total_q54[]" class="form-control country_diplomat_total_q54"></td>

                  </td>

                  <td>
                    <?php if ($i == 0) { ?>
                      <button id="addRowDatasq54" type="button" class="btn btn-sm btn-primary">+</i></button>
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
                <tr class="qe54NoOfRow">
                  <td>
                    <select name="country_diplomat_name_q54[]" id="q54TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($country_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->country_diplomat_name_q54 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>





                  <td><input type="text" name="country_diplomat_description_q54[]" class="form-control country_diplomat_description_q54"></td>

                  </td>
                  <td><input type="text" name="country_diplomat_men_q54[]" class="form-control country_diplomat_men_q54"></td>

                  </td>
                  <td><input type="text" name="country_diplomat_women_q54[]" class="form-control country_diplomat_women_q54"></td>

                  </td>
                  <td><input type="text" name="country_diplomat_tg_q54[]" class="form-control country_diplomat_tg_q54"></td>

                  </td>
                  <td><input type="text" name="country_diplomat_total_q54[]" class="form-control country_diplomat_total_q54"></td>

                  </td>


                </tr>

                <tr class="qe54NoOfRow">
                  <td>
                    <select name="country_diplomat_name_q54[]" id="q54TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($country_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->country_diplomat_name_q54 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>

                  <td><input type="text" name="country_diplomat_description_q54[]" class="form-control country_diplomat_description_q54"></td>

                  </td>
                  <td><input type="text" name="country_diplomat_men_q54[]" class="form-control country_diplomat_men_q54"></td>

                  </td>
                  <td><input type="text" name="country_diplomat_women_q54[]" class="form-control country_diplomat_women_q54"></td>

                  </td>
                  <td><input type="text" name="country_diplomat_tg_q54[]" class="form-control country_diplomat_tg_q54"></td>

                  </td>
                  <td><input type="text" name="country_diplomat_total_q54[]" class="form-control country_diplomat_total_q54"></td>

                  </td>


                </tr>

                <tr class="qe54NoOfRow">
                  <td>
                    <select name="country_diplomat_name_q54[]" id="q54TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($country_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->country_diplomat_name_q54 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>


                  <td><input type="text" name="country_diplomat_description_q54[]" class="form-control country_diplomat_description_q54"></td>

                  </td>
                  <td><input type="text" name="country_diplomat_men_q54[]" class="form-control country_diplomat_men_q54"></td>

                  </td>
                  <td><input type="text" name="country_diplomat_women_q54[]" class="form-control country_diplomat_women_q54"></td>

                  </td>
                  <td><input type="text" name="country_diplomat_tg_q54[]" class="form-control country_diplomat_tg_q54"></td>

                  </td>
                  <td><input type="text" name="country_diplomat_total_q54[]" class="form-control country_diplomat_total_q54"></td>

                  </td>


                </tr>


                <!-- test end -->
                <tr class="qe54NoOfRow">
                  <td><input type="text" name="country_diplomat_name_q54[]" class="form-control country_diplomat_name_q54" placeholder="Others Specific"></td>



                  <td><input type="text" name="country_diplomat_description_q54[]" class="form-control country_diplomat_description_q54"></td>

                  </td>
                  <td><input type="text" name="country_diplomat_men_q54[]" class="form-control country_diplomat_men_q54"></td>

                  </td>
                  <td><input type="text" name="country_diplomat_women_q54[]" class="form-control country_diplomat_women_q54"></td>

                  </td>
                  <td><input type="text" name="country_diplomat_tg_q54[]" class="form-control country_diplomat_tg_q54"></td>

                  </td>
                  <td><input type="text" name="country_diplomat_total_q54[]" class="form-control country_diplomat_total_q54"></td>

                  </td>

                  <td><button id="addRowDatasq54" type="button" class="btn btn-sm btn-primary">+</i></button></td>

                </tr>
              <?php } ?>
            </tbody>
          </table>




        </div>
        <br />
        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question54">Save</button>
        </p>
      </div>
    </div>
  </div>


  <script type="text/javascript">
    $(document).ready(function() {
      $(".fittyfourstatus").on("click", function() {
        var statusvalue = $("input[name='is_country_diplomats_allegedly_q54']:checked").val();
        $('.question54').find('.othersText').hide()
        $('.question54').find('#q28others').val("")
        if (statusvalue == '1') {
          $('.question54').find('#54_question_view').show()
          $('.question54').find('span').addClass('othersText')
        } else if (statusvalue == "2") {
          $('.question54').find('#54_question_view').hide()
          $('.question54').find('span').removeClass('othersText')
          $('.question54').find('span').show()

        } else {
          $('.question54').find('#54_question_view').hide()
          $('.question54').find('span').addClass('othersText')


        }
      });
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $("#addRowDatasq54").click(function() {
        let rowCount = $('.qe54NoOfRow').length + 1
        $("#addRowQ54").append(
          '<tr class="qe54NoOfRow" id="row' + rowCount + '">' +
          `<td>
             <input type="text" name="country_diplomat_name_q54[]"  class="form-control country_diplomat_name_q54" placeholder="Others Specific">
        </td>` +
          `<td>
             <input type="text" name="country_diplomat_description_q54[]"  class="form-control country_diplomat_description_q54" >
        </td>` +
          `<td>
             <input type="text" name="country_diplomat_men_q54[]"  class="form-control country_diplomat_men_q54" >
        </td>` +
          `<td>
             <input type="text" name="country_diplomat_women_q54[]"  class="form-control country_diplomat_women_q54" >
        </td>` +
          `<td>
             <input type="text" name="country_diplomat_tg_q54[]"  class="form-control country_diplomat_tg_q54" >
        </td>` +
          `<td>
             <input type="text" name="country_diplomat_total_q54[]"  class="form-control country_diplomat_total_q54" >
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
    $(document).on('input', '.country_diplomat_men_q54, .country_diplomat_women_q54, .country_diplomat_tg_q54', function() {

      let row = $(this).closest('tr');

      let men = parseFloat(row.find('.country_diplomat_men_q54').val()) || 0;
      let women = parseFloat(row.find('.country_diplomat_women_q54').val()) || 0;
      let tg = parseFloat(row.find('.country_diplomat_tg_q54').val()) || 0;

      let total = men + women + tg;

      row.find('.country_diplomat_total_q54').val(total);
    });
  </script>

<?php } ?>