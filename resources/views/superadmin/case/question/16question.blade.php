<?php
if (($questiontitles[15]->status ?? null) == 1) {

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
        <a data-toggle="collapse" href="#Question-16" aria-expanded="false"
          aria-controls="collapse-4">
          16.{{ $questiontitles[15]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-16" class="collapse" role="tabpane16" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div class="icheck-primary">
          <?php if (isset($question_16_data->q16_checked_value)) { ?>
            <input
              type="radio"
              id="radioSixteen1"
              class="sixteenstatus"
              name="is_victim_identification_protocol_16q"
              <?= (isset($question_16_data->q16_checked_value) && $question_16_data->q16_checked_value == "1") ? "checked" : ""; ?>
              value="1">
          <?php } else { ?>

            <input type="radio" id="radioSixteen1" class="sixteenstatus" name="is_victim_identification_protocol_16q" checked value="1">
          <?php } ?>

          <label for="radioSixteen1">
            Yes
          </label>
        </div>
        <div class="icheck-primary">
          <input
            type="radio"
            id="radioSixteen2"
            class="sixteenstatus"
            name="is_victim_identification_protocol_16q"
            <?= (isset($question_16_data->q16_checked_value) && $question_16_data->q16_checked_value == "0") ? "checked" : ""; ?>

            value="0">
          <label for="radioSixteen2">
            No
          </label>
        </div>
        <div class="icheck-primary icheck-primary input-group">
          <input
            type="radio"
            id="radioSixteen3"
            class="sixteenstatus"
            name="is_victim_identification_protocol_16q"
            <?= (isset($question_16_data->q16_checked_value) && $question_16_data->q16_checked_value == "2") ? "checked" : ""; ?>
            value="2">
          <label for="radioSixteen3">
            Others
          </label> </label>
          <span class=" col-md-6 mt--4 <?= (isset($question_16_data->q16_checked_value) && $question_16_data->q16_checked_value == "2") ? "" : "othersText"; ?>">
            <input
              type="text"
              id="q16others"
              placeholder="Others "
              class="form-control "
              value="<?= (isset($question_16_data->others) && $question_16_data->others) ? $question_16_data->others : '' ?>"
              name="others_victim_identification_protocol_16q"></span>
        </div>
        <div id="sixteen_question_view" class="<?= (isset($question_16_data->q16_checked_value)) && ($question_16_data->q16_checked_value == "2" || $question_16_data->q16_checked_value == "0") ? "visibility" : ""; ?>">




          <!-- table  Start -->
          <table id="addRowQ16" class="table table-bordered text-center">

            <thead>
              <tr>
                <th scope="col">Main document/Procedure</th>
                <th scope="col">Description of change/Status</th>
                <th scope="col">Attach/Upload Pdf</th>
                <th>Action</th>


              </tr>
            </thead>
            <tbody>




              <!-- test -->
              <tr class="qe16NoOfRow">
                <td data-title="screen_carry">
                  <p>Screening carried out by Police as per PSHTA</p>
                  <input type="hidden" name="main_document[]" value="Screening carried out by Police as per PSHTA">

                </td>
                <td>
                  <select name="description_change[]" id="q16TrainingResponse" class="form-control q16Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach ($training_status as $key => $training)
                    <option <?= (isset($q16)  &&  !empty($q16) && $q16->description_change == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                    @endforeach
                  </select>


                </td>
                <td> <input type="file" name="document_image_q16[]" class="form-control"> </td>

              </tr>


              <tr class="qe16NoOfRow">
                <td data-title="screen_viva">
                  <p>Screening via checklist of MoSW</p>
                  <input type="hidden" name="main_document[]" value="Screening via checklist of MoSW">

                </td>
                <td>
                  <select name="description_change[]" id="q16TrainingResponse" class="form-control q16Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach ($training_status as $key => $training)
                    <option <?= (isset($q16)  &&  !empty($q16) && $q16->description_change == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                    @endforeach
                  </select>

                </td>
                <td> <input type="file" name="document_image_q16[]" class="form-control"> </td>
              </tr>
              <!-- test end -->
              <?php if (isset($question_16_data->q16_other_data) && is_array($question_16_data->q16_other_data) && count($question_16_data->q16_other_data) > 0) { ?>

                @foreach($question_16_data->q16_other_data as $index => $other_data)
                <tr class="qe16NoOfRowOthers" id="row{{$index}}">
                  <td>
                    <input type="text" name="main_document[]" class="form-control" value="{{$other_data->main_document}}" placeholder="Others Specific">
                  </td>
                  <td>
                    <select name="description_change[]" id="q16TrainingResponse" class="form-control q16Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($training_status as $key => $training)
                      <option <?= (isset($q16)  &&  !empty($q16) && $q16->description_change == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>


                  </td>
                  <td> <input type="file" name="document_image_q16[]" class="form-control"> </td>
                  <td>
                    @if($loop->first )
                    <!-- Only one row → Add button -->
                    <button type="button" id="addRowDatasQ16" class="btn btn-sm btn-primary addRowQ16">+</button>
                    @else
                    <!-- More than one row → Remove button -->
                    <button type="button" name="remove" id="{{ $index }}" class="btn btn-danger btn_remove cicle">-</button>

                    @endif

                  </td>

                </tr>
                @endforeach

              <?php } else { ?>
                <tr class="qe16NoOfRowOthers">
                  <td>
                    <input type="text" name="main_document[]" class="form-control" placeholder="Others Specific">
                  </td>
                  <td>
                    <select name="description_change[]" id="q16TrainingResponse" class="form-control q16Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($training_status as $key => $training)
                      <option <?= (isset($q16)  &&  !empty($q16) && $q16->description_change == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>

                  </td>
                  <td> <input type="file" name="document_image_q16[]" class="form-control"> </td>
                  <td>

                    <!-- Only one row → Add button -->
                    <button type="button" id="addRowDatasQ16" class="btn btn-sm btn-primary addRowQ16">+</button>
                  </td>
                </tr>
              <?php

              } ?>
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
  <script>
    $(document).ready(function() {

      function toggleSixQuestionView() {
        let statusvalue = $("input[name='is_victim_identification_protocol_16q']:checked").val();
        if (statusvalue == '1') {
          // Yes → show table
          $('#sixteen_question_view').show();
          $('.othersText').hide();
        } else if (statusvalue == '2') {
          // Others → hide table, show others input
          $('#sixteen_question_view').hide();
          $('.othersText').show();
        } else {
          // No → hide both
          $('#sixteen_question_view').hide();
          $('.othersText').hide();
        }
      }

      // On radio click
      $(".sixteenstatus").on("click", function() {
        toggleSixQuestionView();
      });

      // Trigger on page load
      toggleSixQuestionView();

      // Add new row
      $(document).on('click', '#addRowDatasQ16', function() {

        $('#addRowQ16').append(`
        <tr class="qe16NoOfRowOthers">
            <td>
             <input type="text" name="main_document[]"  class="form-control" placeholder="Others Specific">
           </td>
            <td>
              <select name="description_change[]" id="q16TrainingResponse" class="form-control q16Input">
                <option value="" disabled selected>---Choose an item--</option>
                <option value="1">Enforced</option>
                <option value="2">Updated and enforced</option>
                 <option value="3">Stricter enforcement</option>
                  <option value="4">Increases efforts</option>
              </select>
           </td>
            <td>
             <input type="file" name="document_image_q16[]"  class="form-control" placeholder="Others Specific">
           </td>
            <td>
                <button type="button" class="btn btn-danger btn_remove cicle">-</button>
            </td>
        </tr>
    `);
      });

      // Remove row
      $(document).on('click', '.btn_remove', function() {

        // Prevent deleting first row
        if ($(this).closest('tr').hasClass('first-row')) {
          return false;
        }

        $(this).closest('tr').remove();
      });

      $(document).on("click", '#temp-save-question16', function() {

        let yes_no_value = $("input[name='is_victim_identification_protocol_16q']:checked").val();
        let q16_data = {};

        // YES selected
        if (yes_no_value == "1") {

          $('tr.qe16NoOfRow').each(function() {
            let title = $(this).find('input[name="main_document[]"]').val();
            let description = $(this).find('select[name="description_change[]"]').val();

            if (title && description) {
              q16_data[title] = description;
            }
          });
        }

        // Others rows
        let courtData = [];

        $('tr.qe16NoOfRowOthers').each(function() {
          let title = $(this).find('input[name="main_document[]"]').val();
          let description = $(this).find('select[name="description_change[]"]').val();

          if (title || description) {
            courtData.push({
              main_document: title,
              description_change: description
            });
          }
        });

        let new_data = {
          q16_data: q16_data,
          q16_checked_value: yes_no_value,
          q16_other_data: courtData,
        };

        console.log('new_data:', new_data);
        $.ajax({
          type: "POST",
          url: "/superadmin/case/temp-save-question",
          data: {
            _token: "{{ csrf_token() }}",
            q16_data: new_data,
            question_no: '16'
          },
          success: function(response) {
            alert("Question 16 temp saved successfully");
          },
          error: function(xhr) {
            console.log(xhr.responseText);
            alert("Temp save failed");
          }
        });
      });


    });
  </script>


<?php } ?>