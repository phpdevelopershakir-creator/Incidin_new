<?php
if (($questiontitles[10]->status ?? null) == 1) {

?>
  <style>
    .visibility {
      display: none;
    }

    .othersText {
      display: none;
    }
  </style>

  <div class="card question11">
    <?php
    $target_Lists = [
      1 => "Govemment Official",
      2 => "Immigration authority",
      3 => "Law Enforcing Personnel",
      4 => "Border Control Force",
      5 => "Judiciary",
      6 => "Diplomat",

    ];
    ?>

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

      <h6 class="card-title" style="color: {{ isset($question_11_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-11" aria-expanded="false"
          aria-controls="collapse-4">
          11.{{ $questiontitles[10]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-11" class="collapse" role="tabpane11" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div class="icheck-primary">
          <?php if (isset($question_11_data->q11_checked_value)) { ?>
            <input
              type="radio"
              id="radioEleven1"
              class="elevenstatus"
              name="is_government_agreements_transparent_q11"
              <?= (isset($question_11_data->q11_checked_value) && $question_11_data->q11_checked_value == "1") ? "checked" : ""; ?>
              value="1">
          <?php } else { ?>

            <input type="radio" id="radioEleven1" class="elevenstatus" name="is_government_agreements_transparent_q11" checked value="1">
          <?php } ?>

          <label for="radioEleven1">
            Yes
          </label>
        </div>
        <div class="icheck-primary">
          <input
            type="radio"
            id="radioEleven2"
            class="elevenstatus"
            name="is_government_agreements_transparent_q11"
            <?= (isset($question_11_data->q11_checked_value) && $question_11_data->q11_checked_value == "0") ? "checked" : ""; ?>

            value="0">
          <label for="radioEleven2">
            No
          </label>
        </div>
        <div class="icheck-primary icheck-primary input-group">
          <input
            type="radio"
            id="radioEleven3"
            class="elevenstatus"
            name="is_government_agreements_transparent_q11"
            <?= (isset($question_11_data->q11_checked_value) && $question_11_data->q11_checked_value == "2") ? "checked" : ""; ?>
            value="2">
          <label for="radioEleven3">
            Others
          </label> </label> <span class=" col-md-6 mt--4 <?= (isset($question_11_data->q11_checked_value) && $question_11_data->q11_checked_value == "2") ? "" : "othersText"; ?>">
            <input
              type="text"
              id="q11others"
              placeholder="Others "
              class="form-control "
              value="<?= (isset($question_11_data->others) && $question_11_data->others) ? $question_11_data->others : '' ?>"
              name="other_government_agreements_transparent_q11"></span>
        </div>



        <div id="11_question_view" class="<?= (isset($question_11_data->q11_checked_value)   && ($question_11_data->q11_checked_value == '0')) ? 'visibility' : ''; ?>">

          <!-- table  Start -->
          <table id="addRowQ11" class="table table-bordered text-center">

            <thead>

              <tr>
                <th>Country</th>
                <th>Target group of Training (multiple response)</th>
                <th>Total coverage</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
              <?php if (isset($question_11_data->q28_data) && count($question_11_data->q28_data) > 0) {
                $i = 0; ?>
                @foreach($question_11_data->q28_data as $q28)
                <tr class="qe11NoOfRow" id="row<?= $i; ?>">
                  <td>
                    <select name="government_agreements_transparent_country_q11[]" id="q49TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($country_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_agreements_transparent_country_q11 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>

                  <td>
                    <select name="government_agreements_transparent_status_q11[]" id="q49TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($target_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_agreements_transparent_status_q11 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>

                  <td><input type="number" name="government_agreements_transparent_total_q11[]" class="form-control government_agreements_transparent_total_q11"></td>

                  <td>
                    <?php if ($i == 0) { ?>
                      <button id="addRowDatasq11" type="button" class="btn btn-sm btn-primary">+</i></button>
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
                <tr class="qe11NoOfRow">
                  <td>
                    <select name="government_agreements_transparent_country_q11[]" id="q49TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($country_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_agreements_transparent_country_q11 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>


                  <td>
                    <select name="government_agreements_transparent_status_q11[]" id="q49TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($target_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_agreements_transparent_status_q11 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>

                  </td>

                  </td>
                  <td>

                    <input type="number" name="government_agreements_transparent_total_q11[]" class="form-control government_agreements_transparent_total_q11">
                  </td>

                </tr>



                <!-- test end -->
                <tr class="qe11NoOfRow">
                  <td>

                    <input type="text" name="government_agreements_transparent_country_q11[]" class="form-control government_agreements_transparent_country_q11" placeholder="Others Specific">
                  </td>





                  <td>
                    <select name="government_agreements_transparent_status_q11[]" id="q49TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($target_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_agreements_transparent_status_q11 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>
                  <td><input type="number" name="government_agreements_transparent_total_q11[]" class="form-control government_agreements_transparent_total_q11"></td>
                  <td><button id="addRowDatasq11" type="button" class="btn btn-sm btn-primary">+</i></button></td>

                </tr>
              <?php } ?>
            </tbody>
          </table>




        </div>
        <br />
        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question11">Save</button>
        </p>
      </div>
    </div>
  </div>


  <script type="text/javascript">
    $(document).ready(function() {
      $(".elevenstatus").on("click", function() {
        var statusvalue = $("input[name='is_government_agreements_transparent_q11']:checked").val();
        $('.question11').find('.othersText').hide()
        $('.question11').find('#q11others').val("")
        if (statusvalue == '1') {
          $('.question11').find('#11_question_view').show()
          $('.question11').find('span').addClass('othersText')
        } else if (statusvalue == "2") {
          $('.question11').find('#11_question_view').hide()
          $('.question11').find('span').removeClass('othersText')
          $('.question11').find('span').show()

        } else {
          $('.question11').find('#11_question_view').hide()
          $('.question11').find('span').addClass('othersText')


        }
      });
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $("#addRowDatasq11").click(function() {
        let rowCount = $('.qe11NoOfRow').length + 1
        $("#addRowQ11").append(
          '<tr class="qe11NoOfRow" id="row' + rowCount + '">' +

          `<td>
             <input type="text" name="government_agreements_transparent_country_q11[]"  class="form-control government_agreements_transparent_country_q11" placeholder="Others Specific" >
        </td>` +
          `<td>
          <select name="government_agreements_transparent_status_q11[]" id="q49TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($target_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_agreements_transparent_status_q11 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
        </td>` +

          `<td>
             <input type="number" name="government_agreements_transparent_total_q11[]"  class="form-control" >
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