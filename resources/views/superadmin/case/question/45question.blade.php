<?php
if (($questiontitles[44]->status ?? null) == 1) {

?>
  <style>
    .visibility {
      display: none;
    }

    .othersText {
      display: none;
    }
  </style>

  <div class="card question45">

    <div class="card-header" role="tab" id="heading-4">
      <h6 class="card-title" style="color: {{ isset($question_45_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-45" aria-expanded="false"
          aria-controls="collapse-4">
          45.{{ $questiontitles[44]->title }}

        </a>
      </h6>
    </div>

    <div id="Question-45" class="collapse" role="tabpane45" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div class="icheck-primary">
          <?php if (isset($question_45_data->q45_checked_value)) { ?>
            <input
              type="radio"
              id="radioFourtyFive1"
              class="fourtyfivestatus"
              name="is_national_plan_trafficking_q45"
              <?= (isset($question_45_data->q45_checked_value) && $question_45_data->q45_checked_value == "1") ? "checked" : ""; ?>
              value="1">
          <?php } else { ?>

            <input type="radio" id="radioFourtyFive1" class="fourtyfivestatus" name="is_national_plan_trafficking_q45" checked value="1">
          <?php } ?>

          <label for="radioFourtyFive1">
            Yes
          </label>
        </div>
        <div class="icheck-primary">
          <input
            type="radio"
            id="radioFourtyFive2"
            class="fourtyfivestatus"
            name="is_national_plan_trafficking_q45"
            <?= (isset($question_45_data->q45_checked_value) && $question_45_data->q45_checked_value == "0") ? "checked" : ""; ?>

            value="0">
          <label for="radioFourtyFive2">
            No
          </label>
        </div>
        <div class="icheck-primary icheck-primary input-group">
          <input
            type="radio"
            id="radioFourtyFive3"
            class="fourtyfivestatus"
            name="is_national_plan_trafficking_q45"
            <?= (isset($question_45_data->q45_checked_value) && $question_45_data->q45_checked_value == "2") ? "checked" : ""; ?>
            value="2">
          <label for="radioFourtyFive3">
            Others
          </label> </label> <span class=" col-md-6 mt--4 <?= (isset($question_45_data->q45_checked_value) && $question_45_data->q45_checked_value == "2") ? "" : "othersText"; ?>">
            <input
              type="text"
              id="q45others"
              placeholder="Others "
              class="form-control "
              value="<?= (isset($question_45_data->others) && $question_1_data->others) ? $question_45_data->others : '' ?>"
              name="other_national_plan_trafficking_q45"></span>
        </div>



        <div id="45_question_view" class="<?= (isset($question_45_data->q45_checked_value)   && ($question_45_data->q45_checked_value == '0')) ? 'visibility' : ''; ?>">

          <!-- table  Start -->
          <table class="table table-bordered text-center">

            <thead>
              <tr>
                <td>Duration of NPA</td>
                <td>Attach/Upload</td>
              </tr>
            </thead>
            <tbody>


              <!-- test -->


              <tr>
                <td>

                  <input type="text" name="national_plan_trafficking_q45_title_q45" class="form-control">
                </td>

                <td> <input type="file" name="document_upload_q45" class="form-control"> </td>

              </tr>




            </tbody>
          </table>
          <br>
          <div>
            <textarea name="national_plan_trafficking_q45_description_q45" id="" class="form-control"></textarea>
          </div>




        </div>
        <br />
        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question45">Save</button>
        </p>
      </div>
    </div>
  </div>


  <script type="text/javascript">
    $(document).ready(function() {
      $(".fourtyfivestatus").on("click", function() {
        var statusvalue = $("input[name='is_national_plan_trafficking_q45']:checked").val();
        $('.question45').find('.othersText').hide()
        $('.question45').find('#q45others').val("")
        if (statusvalue == '1') {
          $('.question45').find('#45_question_view').show()
          $('.question45').find('span').addClass('othersText')
        } else if (statusvalue == "2") {
          $('.question45').find('#45_question_view').hide()
          $('.question45').find('span').removeClass('othersText')
          $('.question45').find('span').show()

        } else {
          $('.question45').find('#45_question_view').hide()
          $('.question45').find('span').addClass('othersText')


        }
      });
    });
  </script>
<?php } ?>