<?php
if (($questiontitles[19]->status ?? null) == 1) {

?>
  <style>
    .visibility {
      display: none;
    }

    .othersText {
      display: none;
    }
  </style>

  <div class="card question20">
    <?php
    $training_status = [
      1 => "Enforced",
      2 => "Updated and enforced",
      3 => "Stricter enforcement",
      4 => "Increases efforts"
    ];
    ?>



    <div class="card-header" role="tab" id="heading-18">
      <h6 class="card-title" style="color: {{ isset($question_20_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-20" aria-expanded="false" aria-controls="collapse-18">
          20.{{ $questiontitles[19]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-20" class="collapse" role="tabpane20" aria-labelledby="heading-18" data-parent="#accordion-2">
      <div class="card-body">
        <div class="icheck-primary">
          <?php if (isset($question_20_data->q20_checked_value)) { ?>
            <input
              type="radio"
              id="radioSixteen1"
              class="sixteenstatus"
              name="is_trafficking_victims_services_20q"
              <?= (isset($question_20_data->q20_checked_value) && $question_20_data->q20_checked_value == "1") ? "checked" : ""; ?>
              value="1">
          <?php } else { ?>

            <input type="radio" id="radioSixteen1" class="sixteenstatus" name="is_trafficking_victims_services_20q" checked value="1">
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
            name="is_trafficking_victims_services_20q"
            <?= (isset($question_20_data->q20_checked_value) && $question_20_data->q20_checked_value == "0") ? "checked" : ""; ?>

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
            name="is_trafficking_victims_services_20q"
            <?= (isset($question_20_data->q20_checked_value) && $question_20_data->q20_checked_value == "2") ? "checked" : ""; ?>
            value="2">
          <label for="radioSixteen3">
            Others
          </label> </label> <span class=" col-md-6 mt--4 <?= (isset($question_20_data->q20_checked_value) && $question_20_data->q20_checked_value == "2") ? "" : "othersText"; ?>">
            <input
              type="text"
              id="q20others"
              placeholder="Others "
              class="form-control "
              value="<?= (isset($question_20_data->others) && $question_1_data->others) ? $question_20_data->others : '' ?>"
              name="others_trafficking_victims_services_20q"></span>
        </div>



        <div id="20_question_view" class="<?= (isset($question_20_data->q20_checked_value)   && ($question_20_data->q20_checked_value == '0')) ? 'visibility' : ''; ?>">

          <!-- table  Start -->
          <table id="addRowQ20" class="table table-bordered text-center">

            <thead>
              <tr>
                <th scope="col">Main document/Procedure</th>
                <th scope="col">Description of change/Status</th>
                <th scope="col">Attach/Upload Pdf</th>
                <th>Action</th>


              </tr>
            </thead>
            <tbody>

              <tr class="qe20NoOfRow">
                <td data-title="refer_disk">
                  <p>Referral desk established at women and Child Repression Prevention Tribunals, Anti-Trafficking Tribunals, and District tribunals</p>
                  <input type="hidden" name="title_original_guideline[]" value="Referral desk established at women and Child Repression Prevention Tribunals, Anti-Trafficking Tribunals, and District tribunals">
                </td>
                <td>
                  <select name="description_change[]" id="q20TrainingResponse" class="form-control q20Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach ($training_status as $key => $training)
                    <option value="{{ $key }}">{{ $training }}</option>
                    @endforeach
                  </select>
                </td>
                <td> <input type="file" name="document_upload_q20[]" class="form-control"> </td>
              </tr>
              <tr class="qe20NoOfRow">
                <td data-title="nation_refer">
                  <p>National Referral Mechanism Guideline</p>
                  <input type="hidden" name="title_original_guideline[]" value="National Referral Mechanism Guideline">
                </td>
                <td>
                  <select name="description_change[]" id="q20TrainingResponse" class="form-control q20Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach ($training_status as $key => $training)
                    <option value="{{ $key }}">{{ $training }}</option>
                    @endforeach
                  </select>
                </td>
                <td> <input type="file" name="document_upload_q20[]" class="form-control"> </td>
              </tr>
              <tr class="qe20NoOfRow">
                <td data-title="nation_sop">
                  <p>National Referral Mechanism SOP</p>
                  <input type="hidden" name="title_original_guideline[]" value="National Referral Mechanism SOP">
                </td>
                <td>
                  <select name="description_change[]" id="q20TrainingResponse" class="form-control q20Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach ($training_status as $key => $training)
                    <option value="{{ $key }}">{{ $training }}</option>
                    @endforeach
                  </select>
                </td>
                <td> <input type="file" name="document_upload_q20[]" class="form-control"> </td>
              </tr>
              <tr class="qe20NoOfRow">
                <td data-title="digital_refer">
                  <p>Digital Referral Mechanism</p>
                  <input type="hidden" name="title_original_guideline[]" value="Digital Referral Mechanism">
                </td>
                <td>
                  <select name="description_change[]" id="q20TrainingResponse" class="form-control q20Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach ($training_status as $key => $training)
                    <option value="{{ $key }}">{{ $training }}</option>
                    @endforeach
                  </select>
                </td>
                <td> <input type="file" name="document_upload_q20[]" class="form-control"> </td>
              </tr>

              <?php if (isset($question_20_data->q20_other_data) && is_array($question_20_data->q20_other_data) && count($question_20_data->q20_other_data) > 0) { ?>

                @foreach($question_20_data->q20_other_data as $index => $other_data)
                <tr class="qe20NoOfRowOthers" id="row{{$index}}">
                  <td>
                    <input type="text" name="title_original_guideline[]" class="form-control" value="{{$other_data->title_original_guideline}}" placeholder="Others Specific">
                  </td>
                  <td>
                    <select name="description_change[]" id="q16TrainingResponse" class="form-control q16Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($training_status as $key => $training)
                      <option <?= (isset($q16)  &&  !empty($q16) && $q16->description_change == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>


                  </td>
                  <td> <input type="file" name="document_upload_q20[]" class="form-control"> </td>
                  <td>
                    @if($loop->first )
                    <!-- Only one row → Add button -->
                    <button type="button" id="addRowDatasQ20" class="btn btn-sm btn-primary addRowQ20">+</button>
                    @else
                    <!-- More than one row → Remove button -->
                    <button type="button" name="remove" id="{{ $index }}" class="btn btn-danger btn_remove cicle">-</button>

                    @endif

                  </td>

                </tr>
                @endforeach

              <?php } else { ?>
                <tr class="qe20NoOfRowOthers">
                  <td>
                    <input type="text" name="title_original_guideline[]" class="form-control" placeholder="Others Specific">
                  </td>
                  <td>
                    <select name="description_change[]" id="q16TrainingResponse" class="form-control q16Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($training_status as $key => $training)
                      <option <?= (isset($q16)  &&  !empty($q16) && $q16->description_change == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>

                  </td>
                  <td> <input type="file" name="document_upload_q20[]" class="form-control"> </td>
                  <td>

                    <!-- Only one row → Add button -->
                    <button type="button" id="addRowDatasQ20" class="btn btn-sm btn-primary addRowQ20">+</button>
                  </td>
                </tr>
              <?php

              } ?>
            </tbody>
          </table>




        </div>
        <br />
        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question20">Save</button>
        </p>
      </div>
    </div>
  </div>


  <script type="text/javascript">
    $(document).ready(function() {
      $(".sixteenstatus").on("click", function() {
        var statusvalue = $("input[name='is_trafficking_victims_services_20q']:checked").val();
        $('.question20').find('.othersText').hide()
        $('.question20').find('#q20others').val("")
        if (statusvalue == '1') {
          $('.question20').find('#20_question_view').show()
          $('.question20').find('span').addClass('othersText')
        } else if (statusvalue == "2") {
          $('.question20').find('#20_question_view').hide()
          $('.question20').find('span').removeClass('othersText')
          $('.question20').find('span').show()

        } else {
          $('.question20').find('#20_question_view').hide()
          $('.question20').find('span').addClass('othersText')


        }
      });
    });
  </script>
  <script type="text/javascript">
    // Add new row
    $(document).on('click', '#addRowDatasQ20', function() {

      $('#addRowQ20').append(`
        <tr class="qe20NoOfRowOthers">
            <td>
             <input type="text" name="title_original_guideline[]"  class="form-control" placeholder="Others Specific">
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
             <input type="file" name="document_upload_q20[]"  class="form-control" placeholder="Others Specific">
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

    //temp save
    $(document).on("click", '#temp-save-question20', function() {
      let yes_no_value = $("input[name='is_trafficking_victims_services_20q']:checked").val();
      let q20_data = {};

      if (yes_no_value == "1") {

        // Object to hold title -> description

        $('tr.qe6NoOfRow').each(function() {
          let title = $(this).find('td[data-title]').data('title'); // hidden input
          let description = $(this).find('input[name="description_change[]"]').val(); // text input

          q20_data[title] = description; // set key-value pair
        });


      }

      let courtData = [];

      $('tr.qe20NoOfRowOthers').each(function() {
        let title = $(this).find('input[name="title_original_guideline[]"]').val();
        let description = $(this).find('input[name="description_change[]"]').val();


        if (title || description) {
          courtData.push({
            title_original_guideline: title,
            description_change: description
          });
        }
      });

      let new_data = {
        q20_data: q20_data,
        q20_checked_value: yes_no_value,
        q20_other_data: courtData,
      };

      $.ajax({
        type: "POST",
        url: "/superadmin/case/temp-save-question",
        data: {
          "_token": "{{ csrf_token() }}",
          'q20_data': new_data,
          'question_no': '20'
        },
        success: function(response) {
          if (response) {
            $('.question20.card-title').css('color', 'green');
            alert("Question 6 has been saved temporarily");
          } else {
            alert("Not Saved");
          }
        },
        error: function(xhr) {
          console.log(xhr.responseText);
          alert("Save failed");
        }
      });
    });
  </script>
<?php } ?>