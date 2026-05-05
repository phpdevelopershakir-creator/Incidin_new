<?php
if (($questiontitles[48]->status ?? null) == 1) {

?>
  <style>
    .visibility {
      display: none;
    }

    .othersText {
      display: none;
    }
  </style>

  <div class="card question49">
    <?php
    $Instruments_Lists = [
      1 => "Bil-lateral Agreement",
      2 => "SOP",
      3 => "Mutual Legal Arrangement",
      4 => "MoU",
      5 => "Trade Treaty",
      6 => "G to G Agreement",

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

      <h6 class="card-title" style="color: {{ isset($question_49_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-49" aria-expanded="false"
          aria-controls="collapse-4">
          49.{{ $questiontitles[48]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-49" class="collapse" role="tabpane49" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div class="icheck-primary">
          <?php if (isset($question_49_data->q49_checked_value)) { ?>
            <input
              type="radio"
              id="radioFoutyNine1"
              class="fourtyninestatus"
              name="is_government_agreements_transparent_q49"
              <?= (isset($question_49_data->q49_checked_value) && $question_49_data->q49_checked_value == "1") ? "checked" : ""; ?>
              value="1">
          <?php } else { ?>

            <input type="radio" id="radioFoutyNine1" class="fourtyninestatus" name="is_government_agreements_transparent_q49" checked value="1">
          <?php } ?>

          <label for="radioFoutyNine1">
            Yes
          </label>
        </div>
        <div class="icheck-primary">
          <input
            type="radio"
            id="radioFourtyNine2"
            class="fourtyninestatus"
            name="is_government_agreements_transparent_q49"
            <?= (isset($question_49_data->q49_checked_value) && $question_49_data->q49_checked_value == "0") ? "checked" : ""; ?>

            value="0">
          <label for="radioFourtyNine2">
            No
          </label>
        </div>
        <div class="icheck-primary icheck-primary input-group">
          <input
            type="radio"
            id="radioFourtyNine3"
            class="fourtyninestatus"
            name="is_government_agreements_transparent_q49"
            <?= (isset($question_49_data->q49_checked_value) && $question_49_data->q49_checked_value == "2") ? "checked" : ""; ?>
            value="2">
          <label for="radioFourtyNine3">
            Others
          </label> </label> <span class=" col-md-6 mt--4 <?= (isset($question_49_data->q49_checked_value) && $question_49_data->q49_checked_value == "2") ? "" : "othersText"; ?>">
            <input
              type="text"
              id="q49others"
              placeholder="Others "
              class="form-control "
              value="<?= (isset($question_49_data->others) && $question_49_data->others) ? $question_49_data->others : '' ?>"
              name="other_government_agreements_transparent_q49"></span>
        </div>



        <div id="49_question_view" class="<?= (isset($question_49_data->q49_checked_value)   && ($question_49_data->q49_checked_value == '0')) ? 'visibility' : ''; ?>">

          <!-- table  Start -->
          <table id="addRowQ49" class="table table-bordered text-center">

            <thead>

              <tr>
                <th>Country</th>
                <th>Instruments</th>
                <th>Attach/Upload Summary</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
              <?php if (isset($question_49_data->q28_data) && count($question_49_data->q28_data) > 0) {
                $i = 0; ?>
                @foreach($question_49_data->q28_data as $q28)
                <tr class="qe49NoOfRow" id="row<?= $i; ?>">
                  <td>
                    <select name="government_agreements_transparent_country_q49[]" id="q49TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($country_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_agreements_transparent_country_q49 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>

                  <td>
                    <select name="government_agreements_transparent_status_q49[]" id="q49TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($Instruments_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_agreements_transparent_status_q49 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>

                  <td><input type="file" name="document_upload_q49[]" class="form-control document_upload_q49"></td>

                  <td>
                    <?php if ($i == 0) { ?>
                      <button id="addRowDatasq52" type="button" class="btn btn-sm btn-primary">+</i></button>
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
                <tr class="qe49NoOfRow">
                  <td>
                    <select name="government_agreements_transparent_country_q49[]" id="q49TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($country_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_agreements_transparent_country_q49 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>


                  <td>
                    <select name="government_agreements_transparent_status_q49[]" id="q49TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($Instruments_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_agreements_transparent_status_q49 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>

                  </td>

                  </td>
                  <td>

                    <input type="file" name="document_upload_q49[]" class="form-control document_upload_q49">
                  </td>




                </tr>

                <tr class="qe49NoOfRow">



                  <td>
                    <select name="government_agreements_transparent_country_q49[]" id="q49TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($country_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_agreements_transparent_country_q49 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>




                  <td>
                    <select name="government_agreements_transparent_status_q49[]" id="q49TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($Instruments_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_agreements_transparent_status_q49 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>
                  <td><input type="file" name="document_upload_q49[]" class="form-control document_upload_q49"></td>
                </tr>

                <tr class="qe49NoOfRow">
                  <td>
                    <select name="government_agreements_transparent_country_q49[]" id="q49TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($country_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_agreements_transparent_country_q49 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>


                  <td>
                    <select name="government_agreements_transparent_status_q49[]" id="q49TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($Instruments_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_agreements_transparent_status_q49 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>


                  <td><input type="file" name="document_upload_q49[]" class="form-control document_upload_q49"></td>

                </tr>


                <!-- test end -->
                <tr class="qe49NoOfRow">
                  <td>

                    <input type="text" name="government_agreements_transparent_country_q49[]" class="form-control government_agreements_transparent_country_q49" placeholder="Others Specific">
                  </td>





                  <td>
                    <select name="government_agreements_transparent_status_q49[]" id="q49TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($Instruments_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_agreements_transparent_status_q49 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>
                  <td><input type="file" name="document_upload_q49[]" class="form-control document_upload_q49"></td>
                  <td><button id="addRowDatasq52" type="button" class="btn btn-sm btn-primary">+</i></button></td>

                </tr>
              <?php } ?>
            </tbody>
          </table>




        </div>
        <br />
        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question49">Save</button>
        </p>
      </div>
    </div>
  </div>


  <script type="text/javascript">
    $(document).ready(function() {
      $(".fourtyninestatus").on("click", function() {
        var statusvalue = $("input[name='is_government_agreements_transparent_q49']:checked").val();
        $('.question49').find('.othersText').hide()
        $('.question49').find('#q49others').val("")
        if (statusvalue == '1') {
          $('.question49').find('#49_question_view').show()
          $('.question49').find('span').addClass('othersText')
        } else if (statusvalue == "2") {
          $('.question49').find('#49_question_view').hide()
          $('.question49').find('span').removeClass('othersText')
          $('.question49').find('span').show()

        } else {
          $('.question49').find('#49_question_view').hide()
          $('.question49').find('span').addClass('othersText')


        }
      });
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $("#addRowDatasq52").click(function() {
        let rowCount = $('.qe49NoOfRow').length + 1
        $("#addRowQ49").append(
          '<tr class="qe49NoOfRow" id="row' + rowCount + '">' +

          `<td>
             <input type="text" name="government_agreements_transparent_country_q49[]"  class="form-control government_agreements_transparent_country_q49" placeholder="Others Specific" >
        </td>` +
          `<td>
          <select name="government_agreements_transparent_status_q49[]" id="q49TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($Instruments_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_agreements_transparent_status_q49 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
        </td>` +

          `<td>
             <input type="file" name="document_upload_q49[]"  class="form-control" >
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