<?php
if (($questiontitles[13]->status ?? null) == 1) {

?>
  <style>
    .visibility {
      display: none;
    }

    .othersText {
      display: none;
    }
  </style>

  <div class="card question14">
    <?php
    $status_Lists = [
      1 => "Enforced",
      2 => "Updated and enforced",
      3 => "Stricter enforcement",
      4 => "Increases efforts",


    ];
    ?>




    <div class="card-header" role="tab" id="heading-4">

      <h6 class="card-title" style="color: {{ isset($question_14_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-14" aria-expanded="false"
          aria-controls="collapse-4">
          14.{{ $questiontitles[13]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-14" class="collapse" role="tabpane14" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div class="icheck-primary">
          <?php if (isset($question_14_data->q14_checked_value)) { ?>
            <input
              type="radio"
              id="radioFourteen1"
              class="fourteen_status"
              name="is_government_devote_implement_q14"
              <?= (isset($question_14_data->q14_checked_value) && $question_14_data->q14_checked_value == "1") ? "checked" : ""; ?>
              value="1">
          <?php } else { ?>

            <input type="radio" id="radioFourteen1" class="fourteen_status" name="is_government_devote_implement_q14" checked value="1">
          <?php } ?>

          <label for="radioFourteen1">
            Yes
          </label>
        </div>
        <div class="icheck-primary">
          <input
            type="radio"
            id="radioFourteen2"
            class="fourteen_status"
            name="is_government_devote_implement_q14"
            <?= (isset($question_14_data->q14_checked_value) && $question_14_data->q14_checked_value == "0") ? "checked" : ""; ?>

            value="0">
          <label for="radioFourteen2">
            No
          </label>
        </div>
        <div class="icheck-primary icheck-primary input-group">
          <input
            type="radio"
            id="radioFourteen3"
            class="fourteen_status"
            name="is_government_devote_implement_q14"
            <?= (isset($question_14_data->q14_checked_value) && $question_14_data->q14_checked_value == "2") ? "checked" : ""; ?>
            value="2">
          <label for="radioFourteen3">
            Others
          </label> </label> <span class=" col-md-6 mt--4 <?= (isset($question_14_data->q14_checked_value) && $question_14_data->q14_checked_value == "2") ? "" : "othersText"; ?>">
            <input
              type="text"
              id="q14others"
              placeholder="Others "
              class="form-control "
              value="<?= (isset($question_14_data->others) && $question_14_data->others) ? $question_14_data->others : '' ?>"
              name="other_government_devote_implement_q14"></span>
        </div>



        <div id="14_question_view" class="<?= (isset($question_14_data->q14_checked_value)   && ($question_14_data->q14_checked_value == '0')) ? 'visibility' : ''; ?>">

          <!-- table  Start -->
          <table id="addRowQ14" class="table table-bordered text-center">

            <thead>

              <tr>
                <th>Main document/ Procedure</th>
                <th>Description of change/ Status</th>
                <th>Attach/Upload Summary</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
              <?php if (isset($question_14_data->q28_data) && count($question_14_data->q28_data) > 0) {
                $i = 0; ?>
                @foreach($question_14_data->q28_data as $q28)
                <tr class="qe14NoOfRow" id="row<?= $i; ?>">

                  <th scope="row">PSHT Act's Rule on VoT identification</th>
                  <input type="hidden" name="original_approach_q14[]" value="1">


                  <td>
                    <select name="description_change_q14[]" id="q49TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->description_change_q14 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>

                  <td><input type="file" name="document_upload_q14[]" class="form-control document_upload_q14"></td>

                  <td>
                    <?php if ($i == 0) { ?>
                      <button id="addRowDatasq14" type="button" class="btn btn-sm btn-primary">+</i></button>
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
                <tr class="qe14NoOfRow">

                  <th scope="row">Victim Identification Guidelines of PSD/MoHA</th>
                  <input type="hidden" name="original_approach_q14[]" value="1">


                  <td>
                    <select name="description_change_q14[]" id="q49TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->description_change_q14 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>
                  <td>
                    <input type="file" name="document_upload_q14[]" class="form-control document_upload_q14">
                  </td>

                </tr>

                <tr class="qe14NoOfRow">

                  <th scope="row">PSHT Act's Rule on VoT identification</th>
                  <input type="hidden" name="original_approach_q14[]" value="2">


                  <td>
                    <select name="description_change_q14[]" id="q49TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->description_change_q14 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>

                  <td><input type="file" name="document_upload_q14[]" class="form-control document_upload_q14"></td>
                </tr>

                <tr class="qe14NoOfRow">

                  <th scope="row">Victim identification checklist of MoSW</th>
                  <input type="hidden" name="original_approach_q14[]" value="3">



                  <td>
                    <select name="description_change_q14[]" id="q49TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->description_change_q14 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>


                  <td><input type="file" name="document_upload_q14[]" class="form-control document_upload_q14"></td>

                </tr>

                <tr class="qe14NoOfRow">

                  <th scope="row">VoT identification under NRM of MoHA</th>
                  <input type="hidden" name="original_approach_q14[]" value="4">

                  <td>
                    <select name="description_change_q14[]" id="q49TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->description_change_q14 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>


                  <td><input type="file" name="document_upload_q14[]" class="form-control document_upload_q14"></td>

                </tr>


                <!-- test end -->
                <tr class="qe14NoOfRow">
                  <td>

                    <input type="text" name="original_approach_q14[]" class="form-control original_approach_q14" placeholder="Others Specific">
                  </td>


                  <td>
                    <select name="description_change_q14[]" id="q49TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->description_change_q14 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>
                  <td><input type="file" name="document_upload_q14[]" class="form-control document_upload_q14"></td>
                  <td><button id="addRowDatasq14" type="button" class="btn btn-sm btn-primary">+</i></button></td>

                </tr>
              <?php } ?>
            </tbody>
          </table>




        </div>
        <br />
        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question14">Save</button>
        </p>
      </div>
    </div>
  </div>


  <script type="text/javascript">
    $(document).ready(function() {
      $(".fourteen_status").on("click", function() {
        var statusvalue = $("input[name='is_government_devote_implement_q14']:checked").val();
        $('.question14').find('.othersText').hide()
        $('.question14').find('#q14others').val("")
        if (statusvalue == '1') {
          $('.question14').find('#14_question_view').show()
          $('.question14').find('span').addClass('othersText')
        } else if (statusvalue == "2") {
          $('.question14').find('#14_question_view').hide()
          $('.question14').find('span').removeClass('othersText')
          $('.question14').find('span').show()

        } else {
          $('.question14').find('#14_question_view').hide()
          $('.question14').find('span').addClass('othersText')


        }
      });
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $("#addRowDatasq14").click(function() {
        let rowCount = $('.qe14NoOfRow').length + 1
        $("#addRowQ14").append(
          '<tr class="qe14NoOfRow" id="row' + rowCount + '">' +

          `<td>
             <input type="text" name="original_approach_q14[]"  class="form-control original_approach_q14" placeholder="Others Specific" >
        </td>` +
          `<td>
          <select name="description_change_q14[]" id="q49TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->description_change_q14 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
        </td>` +

          `<td>
             <input type="file" name="document_upload_q14[]"  class="form-control" >
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