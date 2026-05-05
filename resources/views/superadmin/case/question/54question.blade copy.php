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

  <div class="card question28">
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

      <h6 class="card-title" style="color: {{ isset($question_6_data) ? 'blue' : 'green' }};">
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
          <?php if (isset($question_28_data->q28_checked_value)) { ?>
            <input
              type="radio"
              id="radioTwentyEight1"
              class="twentyeightstatus"
              name="is_victim_centered_approach_28q"
              <?= (isset($question_28_data->q28_checked_value) && $question_28_data->q28_checked_value == "1") ? "checked" : ""; ?>
              value="1">
          <?php } else { ?>

            <input type="radio" id="radioTwentyEight1" class="twentyeightstatus" name="is_victim_centered_approach_28q" checked value="1">
          <?php } ?>

          <label for="radioTwentyEight1">
            Yes
          </label>
        </div>
        <div class="icheck-primary">
          <input
            type="radio"
            id="radioTwentyEight2"
            class="twentyeightstatus"
            name="is_victim_centered_approach_28q"
            <?= (isset($question_28_data->q28_checked_value) && $question_28_data->q28_checked_value == "0") ? "checked" : ""; ?>

            value="0">
          <label for="radioTwentyEight2">
            No
          </label>
        </div>
        <div class="icheck-primary icheck-primary input-group">
          <input
            type="radio"
            id="radioTwentyEight3"
            class="twentyeightstatus"
            name="is_victim_centered_approach_28q"
            <?= (isset($question_28_data->q28_checked_value) && $question_28_data->q28_checked_value == "2") ? "checked" : ""; ?>
            value="2">
          <label for="radioTwentyEight3">
            Others
          </label> </label> <span class=" col-md-6 mt--4 <?= (isset($question_28_data->q28_checked_value) && $question_28_data->q28_checked_value == "2") ? "" : "othersText"; ?>">
            <input
              type="text"
              id="q28others"
              placeholder="Others "
              class="form-control "
              value="<?= (isset($question_28_data->others) && $question_1_data->others) ? $question_28_data->others : '' ?>"
              name="others_victim_centered_approach_28q"></span>
        </div>



        <div id="28_question_view" class="<?= (isset($question_28_data->q28_checked_value)   && ($question_28_data->q28_checked_value == '0')) ? 'visibility' : ''; ?>">

          <!-- table  Start -->
          <table id="addRowQ28" class="table table-bordered text-center">

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
              <?php if (isset($question_28_data->q28_data) && count($question_28_data->q28_data) > 0) {
                $i = 0; ?>
                @foreach($question_28_data->q28_data as $q28)
                <tr class="qe28NoOfRow" id="row<?= $i; ?>">
                  <td>
                    <select name="supreme_court_title[]" id="q10TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($country_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->supreme_court_title == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>



                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>
                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>
                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>
                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>
                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>

                  <td>
                    <?php if ($i == 0) { ?>
                      <button id="addRowDatasq28" type="button" class="btn btn-sm btn-primary">+</i></button>
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
                <tr class="qe28NoOfRow">
                  <td>
                    <select name="supreme_court_title[]" id="q10TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($country_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->supreme_court_title == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>





                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>
                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>
                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>
                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>
                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>


                </tr>

                <tr class="qe28NoOfRow">
                  <td>
                    <select name="supreme_court_title[]" id="q10TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($country_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->supreme_court_title == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>





                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>
                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>
                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>
                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>
                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>


                </tr>

<tr class="qe28NoOfRow">
                  <td>
                    <select name="supreme_court_title[]" id="q10TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($country_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->supreme_court_title == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>





                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>
                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>
                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>
                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>
                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>


                </tr>







                <!-- test end -->
                <tr class="qe28NoOfRow">
                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6" placeholder="Others Specific"></td>





                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>
                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>
                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>
                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>
                  <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                  </td>

                  <td><button id="addRowDatasq28" type="button" class="btn btn-sm btn-primary">+</i></button></td>

                </tr>
              <?php } ?>
            </tbody>
          </table>




        </div>
        <br />
        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question28">Save</button>
        </p>
      </div>
    </div>
  </div>


  <script type="text/javascript">
    $(document).ready(function() {
      $(".twentyeightstatus").on("click", function() {
        var statusvalue = $("input[name='is_victim_centered_approach_28q']:checked").val();
        $('.question28').find('.othersText').hide()
        $('.question28').find('#q28others').val("")
        if (statusvalue == '1') {
          $('.question28').find('#28_question_view').show()
          $('.question28').find('span').addClass('othersText')
        } else if (statusvalue == "2") {
          $('.question28').find('#28_question_view').hide()
          $('.question28').find('span').removeClass('othersText')
          $('.question28').find('span').show()

        } else {
          $('.question28').find('#28_question_view').hide()
          $('.question28').find('span').addClass('othersText')


        }
      });
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $("#addRowDatasq28").click(function() {
        let rowCount = $('.qe28NoOfRow').length + 1
        $("#addRowQ28").append(
          '<tr class="qe28NoOfRow" id="row' + rowCount + '">' +
          `<td>
             <input type="text" name="overall_quality_car[]"  class="form-control" placeholder="Others Specific">
        </td>` +
          `<td>
             <input type="text" name="overall_quality_car[]"  class="form-control" >
        </td>` +
          `<td>
             <input type="text" name="overall_quality_car[]"  class="form-control" >
        </td>` +
          `<td>
             <input type="text" name="overall_quality_car[]"  class="form-control" >
        </td>` +
          `<td>
             <input type="text" name="overall_quality_car[]"  class="form-control" >
        </td>` +
          `<td>
             <input type="text" name="overall_quality_car[]"  class="form-control" >
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
<?php } ?>