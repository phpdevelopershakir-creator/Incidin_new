<?php
if (($questiontitles[22]->status ?? null) == 1) {

?>
  <style>
    .visibility {
      display: none;
    }

    .othersText {
      display: none;
    }
  </style>

  <div class="card question16">
    <?php
    $training_status = [
      1 => "Enforced",
      2 => "Updated and enforced",
      3 => "Stricter enforcement",
      4 => "Increases efforts"
    ];
    ?>



    <div class="card-header" role="tab" id="heading-4">
      <h6 class="card-title" style="color: {{ isset($question_16_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-23" aria-expanded="false"
          aria-controls="collapse-4">
          23.{{ $questiontitles[22]->title }}

        </a>
      </h6>
    </div>

    <div id="Question-23" class="collapse" role="tabpane23" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div class="icheck-primary">
          <?php if (isset($question_16_data->q16_checked_value)) { ?>
            <input
              type="radio"
              id="radioTwentyThree1"
              class="twenththreestatus"
              name="is_speak_law_enforcement_23q"
              <?= (isset($question_16_data->q16_checked_value) && $question_16_data->q16_checked_value == "1") ? "checked" : ""; ?>
              value="1">
          <?php } else { ?>

            <input type="radio" id="radioTwentyThree1" class="twenththreestatus" name="is_speak_law_enforcement_23q" checked value="1">
          <?php } ?>

          <label for="radioTwentyThree1">
            Yes
          </label>
        </div>
        <div class="icheck-primary">
          <input
            type="radio"
            id="radioTwentyThree2"
            class="twenththreestatus"
            name="is_speak_law_enforcement_23q"
            <?= (isset($question_16_data->q16_checked_value) && $question_16_data->q16_checked_value == "0") ? "checked" : ""; ?>

            value="0">
          <label for="radioTwentyThree2">
            No
          </label>
        </div>
        <div class="icheck-primary icheck-primary input-group">
          <input
            type="radio"
            id="radioTwentyThree3"
            class="twenththreestatus"
            name="is_speak_law_enforcement_23q"
            <?= (isset($question_16_data->q16_checked_value) && $question_16_data->q16_checked_value == "2") ? "checked" : ""; ?>
            value="2">
          <label for="radioTwentyThree3">
            Others
          </label> </label> <span class=" col-md-6 mt--4 <?= (isset($question_16_data->q16_checked_value) && $question_16_data->q16_checked_value == "2") ? "" : "othersText"; ?>">
            <input
              type="text"
              id="q23others"
              placeholder="Others "
              class="form-control "
              value="<?= (isset($question_16_data->others) && $question_1_data->others) ? $question_16_data->others : '' ?>"
              name="others_speak_law_enforcement_23q"></span>
        </div>



        <div id="23_question_view" class="<?= (isset($question_16_data->q16_checked_value)   && ($question_16_data->q16_checked_value == '0')) ? 'visibility' : ''; ?>">

          <!-- table  Start -->
          <table id="addRowQ16" class="table table-bordered text-center">

            <thead>

            </thead>
            <tbody>


              <!-- test -->


              <tr class="qe16NoOfRow">
                <td>
                  <p>As per the approved NRM structure, the VoTs can directly reach social service providers. However, for identification they need to interact with law enforcing actors (Police).</p>
                  <input type="hidden" name="title_description" value="As per the approved NRM structure, the VoTs can directly reach social service providers. However, for identification they need to interact with law enforcing actors (Police).">
                </td>

                <td> <input type="file" name="document_upload_q23" class="form-control"> </td>


              </tr>
              <!-- test end -->


            </tbody>
          </table>




        </div>
        <br />
        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question16">Save</button>
        </p>
      </div>
    </div>
  </div>


  <script type="text/javascript">
    $(document).ready(function() {
      $(".twenththreestatus").on("click", function() {
        var statusvalue = $("input[name='is_speak_law_enforcement_23q']:checked").val();
        $('.question16').find('.othersText').hide()
        $('.question16').find('#q23others').val("")
        if (statusvalue == '1') {
          $('.question16').find('#23_question_view').show()
          $('.question16').find('span').addClass('othersText')
        } else if (statusvalue == "2") {
          $('.question16').find('#23_question_view').hide()
          $('.question16').find('span').removeClass('othersText')
          $('.question16').find('span').show()

        } else {
          $('.question16').find('#23_question_view').hide()
          $('.question16').find('span').addClass('othersText')


        }
      });
    });
  </script>

<?php } ?>