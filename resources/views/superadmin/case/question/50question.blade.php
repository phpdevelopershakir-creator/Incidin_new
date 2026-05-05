<?php
if (($questiontitles[49]->status ?? null) == 1) {

?>
  <style>
    .visibility {
      display: none;
    }

    .othersText {
      display: none;
    }
  </style>

  <div class="card question50">
    <?php
    $status_Lists = [
      1 => "Enforced",
      2 => "Updated and enforced",
      3 => "Stricter enforcement",
      4 => "Increases efforts"

    ];
    ?>

    <div class="card-header" role="tab" id="heading-4">

      <h6 class="card-title" style="color: {{ isset($question_50_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-50" aria-expanded="false"
          aria-controls="collapse-4">
          50.{{ $questiontitles[49]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-50" class="collapse" role="tabpane50" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div class="icheck-primary">
          <?php if (isset($question_50_data->q50_checked_value)) { ?>
            <input
              type="radio"
              id="radioFifty1"
              class="fiftystatus"
              name="is_exploitative_treatment_q50"
              <?= (isset($question_50_data->q50_checked_value) && $question_50_data->q50_checked_value == "1") ? "checked" : ""; ?>
              value="1">
          <?php } else { ?>

            <input type="radio" id="radioFifty1" class="fiftystatus" name="is_exploitative_treatment_q50" checked value="1">
          <?php } ?>

          <label for="radioFifty1">
            Yes
          </label>
        </div>
        <div class="icheck-primary">
          <input
            type="radio"
            id="radioFifty2"
            class="fiftystatus"
            name="is_exploitative_treatment_q50"
            <?= (isset($question_50_data->q50_checked_value) && $question_50_data->q50_checked_value == "0") ? "checked" : ""; ?>

            value="0">
          <label for="radioFifty2">
            No
          </label>
        </div>
        <div class="icheck-primary icheck-primary input-group">
          <input
            type="radio"
            id="radioFifty3"
            class="fiftystatus"
            name="is_exploitative_treatment_q50"
            <?= (isset($question_50_data->q50_checked_value) && $question_50_data->q50_checked_value == "2") ? "checked" : ""; ?>
            value="2">
          <label for="radioFifty3">
            Others
          </label> </label> <span class=" col-md-6 mt--4 <?= (isset($question_50_data->q50_checked_value) && $question_50_data->q50_checked_value == "2") ? "" : "othersText"; ?>">
            <input
              type="text"
              id="q50others"
              placeholder="Others "
              class="form-control "
              value="<?= (isset($question_50_data->others) && $question_50_data->others) ? $question_50_data->others : '' ?>"
              name="others_victim_centered_approach_q50"></span>
        </div>



        <div id="50_question_view" class="<?= (isset($question_50_data->q50_checked_value)   && ($question_50_data->q50_checked_value == '0')) ? 'visibility' : ''; ?>">

          <!-- table  Start -->
          <table id="addRowQ50" class="table table-bordered text-center">

            <thead>

              <tr>
                <th>Action</th>
                <th>Attach/Upload Summary</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
              <?php if (isset($question_50_data->q28_data) && count($question_50_data->q28_data) > 0) {
                $i = 0; ?>
                @foreach($question_50_data->q28_data as $q28)
                <tr class="qe50NoOfRow" id="row<?= $i; ?>">
                  <td>

                    <input type="text" name="exploitative_treatment_title_q50[]" class="form-control exploitative_treatment_title_q50">
                  </td>


                  <td><input type="file" name="document_upload_q50[]" class="form-control document_upload_q50"></td>

                  <td>
                    <?php if ($i == 0) { ?>
                      <button id="addRowDatasq50" type="button" class="btn btn-sm btn-primary">+</i></button>
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
                <tr class="qe50NoOfRow">
                  <td>
                    <p>Strict Monitoring of impacts of policies</p>
                    <input type="hidden" name="exploitative_treatment_title_q50[]" value="1" class="form-control exploitative_treatment_title_q50">
                  </td>

                  <td>

                    <input type="file" name="document_upload_q50[]" class="form-control document_upload_q50">
                  </td>




                </tr>

                <tr class="qe50NoOfRow">

                  <td>
                    <p>Promotion of safe migration</p>
                    <input type="hidden" name="exploitative_treatment_title_q50[]" value="2" class="form-control exploitative_treatment_title_q50">
                  </td>

                  <td><input type="file" name="document_upload_q50[]" class="form-control document_upload_q50"></td>

                </tr>

                <tr class="qe50NoOfRow">

                  <td>
                    <p>Awareness raising of vulnerable groups</p>
                    <input type="hidden" name="exploitative_treatment_title_q50[]" value="3" class="form-control exploitative_treatment_title_q50">
                  </td>


                  <td><input type="file" name="document_upload_q50[]" class="form-control document_upload_q50"></td>
                </tr>
                <tr class="qe50NoOfRow">
                  <td>
                    <p>Expansion of safety-net for vulnerable groups</p>
                    <input type="hidden" name="exploitative_treatment_title_q50[]" value="3" class="form-control exploitative_treatment_title_q50">
                  </td>
                  <td><input type="file" name="document_upload_q50[]" class="form-control document_upload_q50"></td>
                </tr>
                <tr class="qe50NoOfRow">

                  <td>
                    <p>Promotion of skilling among vulnerable groups</p>
                    <input type="hidden" name="exploitative_treatment_title_q50[]" value="4" class="form-control exploitative_treatment_title_q50">
                  </td>

                  <td><input type="file" name="document_upload_q50[]" class="form-control document_upload_q50"></td>
                </tr>


                <!-- test end -->
                <tr class="qe50NoOfRow">
                  <td>

                    <input type="text" name="exploitative_treatment_title_q50[]" class="form-control exploitative_treatment_title_q50" placeholder="Others Specific">
                  </td>

                  <td><input type="file" name="document_upload_q50[]" class="form-control document_upload_q50"></td>

                  <td><button id="addRowDatasq50" type="button" class="btn btn-sm btn-primary">+</i></button></td>

                </tr>
              <?php } ?>
            </tbody>
          </table>


        </div>
        <br />
        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question50">Save</button>
        </p>
      </div>
    </div>
  </div>


  <script type="text/javascript">
    $(document).ready(function() {
      $(".fiftystatus").on("click", function() {
        var statusvalue = $("input[name='is_exploitative_treatment_q50']:checked").val();
        $('.question50').find('.othersText').hide()
        $('.question50').find('#q50others').val("")
        if (statusvalue == '1') {
          $('.question50').find('#50_question_view').show()
          $('.question50').find('span').addClass('othersText')
        } else if (statusvalue == "2") {
          $('.question50').find('#50_question_view').hide()
          $('.question50').find('span').removeClass('othersText')
          $('.question50').find('span').show()

        } else {
          $('.question50').find('#50_question_view').hide()
          $('.question50').find('span').addClass('othersText')


        }
      });
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $("#addRowDatasq50").click(function() {
        let rowCount = $('.qe50NoOfRow').length + 1
        $("#addRowQ50").append(
          '<tr class="qe50NoOfRow" id="row' + rowCount + '">' +

          `<td>
             <input type="text" name="exploitative_treatment_title_q50[]"  class="form-control exploitative_treatment_title_q50" placeholder="Others Specific" >
        </td>` +


          `<td>
             <input type="file" name="document_upload_q50[]"  class="form-control document_upload_q50" >
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