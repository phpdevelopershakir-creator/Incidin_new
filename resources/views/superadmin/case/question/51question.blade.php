<?php
if (($questiontitles[50]->status ?? null) == 1) {

?>
  <style>
    .visibility {
      display: none;
    }

    .othersText {
      display: none;
    }
  </style>

  <div class="card question51">
    <?php
    $status_Lists = [
      1 => "Enforced",
      2 => "Updated and enforced",
      3 => "Stricter enforcement",
      4 => "Increases efforts"

    ];
    ?>

    <div class="card-header" role="tab" id="heading-4">

      <h6 class="card-title" style="color: {{ isset($question_51_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-51" aria-expanded="false"
          aria-controls="collapse-4">
          51.{{ $questiontitles[50]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-51" class="collapse" role="tabpane51" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div class="icheck-primary">
          <?php if (isset($question_51_data->q51_checked_value)) { ?>
            <input
              type="radio"
              id="radioFiftyOne1"
              class="fiftyonestatus"
              name="is_commercial_sex_demands_q51"
              <?= (isset($question_51_data->q51_checked_value) && $question_51_data->q51_checked_value == "1") ? "checked" : ""; ?>
              value="1">
          <?php } else { ?>

            <input type="radio" id="radioFiftyOne1" class="fiftyonestatus" name="is_commercial_sex_demands_q51" checked value="1">
          <?php } ?>

          <label for="radioFiftyOne1">
            Yes
          </label>
        </div>
        <div class="icheck-primary">
          <input
            type="radio"
            id="radioFiftyOne2"
            class="fiftyonestatus"
            name="is_commercial_sex_demands_q51"
            <?= (isset($question_51_data->q51_checked_value) && $question_51_data->q51_checked_value == "0") ? "checked" : ""; ?>

            value="0">
          <label for="radioFiftyOne2">
            No
          </label>
        </div>
        <div class="icheck-primary icheck-primary input-group">
          <input
            type="radio"
            id="radioFiftyOne3"
            class="fiftyonestatus"
            name="is_commercial_sex_demands_q51"
            <?= (isset($question_51_data->q51_checked_value) && $question_51_data->q51_checked_value == "2") ? "checked" : ""; ?>
            value="2">
          <label for="radioFiftyOne3">
            Others
          </label> </label> <span class=" col-md-6 mt--4 <?= (isset($question_51_data->q51_checked_value) && $question_51_data->q51_checked_value == "2") ? "" : "othersText"; ?>">
            <input
              type="text"
              id="q51others"
              placeholder="Others "
              class="form-control "
              value="<?= (isset($question_51_data->others) && $question_51_data->others) ? $question_51_data->others : '' ?>"
              name="other_commercial_sex_demands_q51"></span>
        </div>



        <div id="51_question_view" class="<?= (isset($question_51_data->q51_checked_value)   && ($question_51_data->q51_checked_value == '0')) ? 'visibility' : ''; ?>">

          <!-- table  Start -->
          <table id="addRowQ51" class="table table-bordered text-center">

            <thead>

              <tr>
                <th>Action</th>
                <th>Status</th>
                <th>Attach/Upload Summary</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
              <?php if (isset($question_51_data->q28_data) && count($question_51_data->q28_data) > 0) {
                $i = 0; ?>
                @foreach($question_51_data->q28_data as $q28)
                <tr class="qe51NoOfRow" id="row<?= $i; ?>">
                  <td>

                    <input type="text" name="commercial_title_q51[]" class="form-control commercial_title_q51">
                  </td>




                  <td>
                    <select name="commercial_status_q51[]" id="q51TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->commercial_status_q51 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>


                  <td><input type="file" name="document_upload_q51[]" class="form-control document_upload_q51"></td>



                  <td>
                    <?php if ($i == 0) { ?>
                      <button id="addRowDatasq51" type="button" class="btn btn-sm btn-primary">+</i></button>
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
                <tr class="qe51NoOfRow">
                  <td>
                    <p>Awareness raising on forced prostitution and trafficking among citizens</p>
                    <input type="hidden" name="commercial_title_q51[]" value="1" class="form-control commercial_title_q51">
                  </td>

                  <td>
                    <select name="commercial_status_q51[]" id="q51TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->commercial_status_q51 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>

                  </td>

                  </td>
                  <td>

                    <input type="file" name="document_upload_q51[]" class="form-control document_upload_q51">
                  </td>
                </tr>

                <tr class="qe51NoOfRow">

                  <td>
                    <p>Awareness raising on legal measures against sexual
                      exploitation of trafficked individuals</p>

                    <input type="hidden" name="commercial_title_q51[]" value="2" class="form-control commercial_title_q51">
                  </td>



                  <td>
                    <select name="commercial_status_q51[]" id="q51TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->commercial_status_q51 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>

                  <td><input type="file" name="document_upload_q51[]" class="form-control document_upload_q51"></td>

                </tr>

                <tr class="qe51NoOfRow">

                  <td>
                    <p>Legal actions against foreign podophiles/sex-tourists
                      (clients on underaged girls/VoTs)</p>
                    <input type="hidden" name="commercial_title_q51[]" value="3" class="form-control commercial_title_q51">
                  </td>



                  <td>
                    <select name="commercial_status_q51[]" id="q51TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->commercial_status_q51 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>

                  <td><input type="file" name="document_upload_q51[]" class="form-control document_upload_q51"></td>

                </tr>

                <!-- test end -->
                <tr class="qe51NoOfRow">
                  <td>

                    <input type="text" name="commercial_title_q51[]" class="form-control commercial_title_q51" placeholder="Others Specific">
                  </td>

                  <td>
                    <select name="commercial_status_q51[]" id="q51TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->commercial_status_q51 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>


                  <td><input type="file" name="document_upload_q51[]" class="form-control document_upload_q51"></td>



                  <td><button id="addRowDatasq51" type="button" class="btn btn-sm btn-primary">+</i></button></td>

                </tr>
              <?php } ?>
            </tbody>
          </table>

        </div>
        <br />
        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question51">Save</button>
        </p>
      </div>
    </div>
  </div>


  <script type="text/javascript">
    $(document).ready(function() {
      $(".fiftyonestatus").on("click", function() {
        var statusvalue = $("input[name='is_commercial_sex_demands_q51']:checked").val();
        $('.question51').find('.othersText').hide()
        $('.question51').find('#q51others').val("")
        if (statusvalue == '1') {
          $('.question51').find('#51_question_view').show()
          $('.question51').find('span').addClass('othersText')
        } else if (statusvalue == "2") {
          $('.question51').find('#51_question_view').hide()
          $('.question51').find('span').removeClass('othersText')
          $('.question51').find('span').show()

        } else {
          $('.question51').find('#51_question_view').hide()
          $('.question51').find('span').addClass('othersText')


        }
      });
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $("#addRowDatasq51").click(function() {
        let rowCount = $('.qe51NoOfRow').length + 1
        $("#addRowQ51").append(
          '<tr class="qe51NoOfRow" id="row' + rowCount + '">' +

          `<td>
             <input type="text" name="commercial_title_q51[]"  class="form-control" placeholder="Others Specific" >
        </td>` +
          `<td>
          <select name="commercial_status_q51[]" id="q51TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->commercial_status_q51 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
        </td>` +

          `<td>
             <input type="file" name="document_upload_q51[]"  class="form-control" >
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