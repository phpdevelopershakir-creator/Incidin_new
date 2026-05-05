<?php
if (($questiontitles[46]->status ?? null) == 1) {

?>
  <style>
    .visibility {
      display: none;
    }

    .othersText {
      display: none;
    }
  </style>

  <div class="card question47">
    <?php
    $status_Lists = [
      1 => "Firmly implemented enforced",
      2 => "Reformed",
      3 => "Planned",
      4 => "Drafted",
      5 => "Updated",
      6 => "Partially enforced",
      7 => "Expanded us"

    ];
    ?>

    <div class="card-header" role="tab" id="heading-4">

      <h6 class="card-title" style="color: {{ isset($question_47_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-47" aria-expanded="false"
          aria-controls="collapse-4">
          47.{{ $questiontitles[46]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-47" class="collapse" role="tabpane47" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div class="icheck-primary">
          <?php if (isset($question_47_data->q47_checked_value)) { ?>
            <input
              type="radio"
              id="radioFiftySeven1"
              class="fiftysevenstatus"
              name="is_government_change_regulated_q47"
              <?= (isset($question_47_data->q47_checked_value) && $question_47_data->q47_checked_value == "1") ? "checked" : ""; ?>
              value="1">
          <?php } else { ?>

            <input type="radio" id="radioFiftySeven1" class="fiftysevenstatus" name="is_government_change_regulated_q47" checked value="1">
          <?php } ?>

          <label for="radioFiftySeven1">
            Yes
          </label>
        </div>
        <div class="icheck-primary">
          <input
            type="radio"
            id="radioFiftySeven2"
            class="fiftysevenstatus"
            name="is_government_change_regulated_q47"
            <?= (isset($question_47_data->q47_checked_value) && $question_47_data->q47_checked_value == "0") ? "checked" : ""; ?>

            value="0">
          <label for="radioFiftySeven2">
            No
          </label>
        </div>
        <div class="icheck-primary icheck-primary input-group">
          <input
            type="radio"
            id="radioFiftySeven3"
            class="fiftysevenstatus"
            name="is_government_change_regulated_q47"
            <?= (isset($question_47_data->q47_checked_value) && $question_47_data->q47_checked_value == "2") ? "checked" : ""; ?>
            value="2">
          <label for="radioFiftySeven3">
            Others
          </label> </label> <span class=" col-md-6 mt--4 <?= (isset($question_47_data->q47_checked_value) && $question_47_data->q47_checked_value == "2") ? "" : "othersText"; ?>">
            <input
              type="text"
              id="q52others"
              placeholder="Others "
              class="form-control "
              value="<?= (isset($question_47_data->others) && $question_47_data->others) ? $question_47_data->others : '' ?>"
              name="other_government_change_regulated_q47"></span>
        </div>



        <div id="47_question_view" class="<?= (isset($question_47_data->q47_checked_value)   && ($question_47_data->q47_checked_value == '0')) ? 'visibility' : ''; ?>">

          <!-- table  Start -->
          <table id="addRowQ47" class="table table-bordered text-center">

            <thead>

              <tr>
                <th>Original Document/Approach</th>
                <th>Description of Change</th>

              </tr>
            </thead>
            <tbody>
              <?php if (isset($question_47_data->q47_data) && count($question_47_data->q47_data) > 0) {
                $i = 0; ?>
                @foreach($question_47_data->q47_data as $q47)
                <tr class="qe47NoOfRow" id="row<?= $i; ?>">
                  <td>

                    <input type="text" name="government_change_regulated_title_q47[]" class="form-control government_change_regulated_title_q47">
                  </td>

                  <td>
                    <select name="government_change_regulated_status_q47[]" id="q47TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_change_regulated_status_q47 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>

                  <td>
                    <?php if ($i == 0) { ?>
                      <button id="addRowDatasq47" type="button" class="btn btn-sm btn-primary">+</i></button>
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
                <tr class="qe47NoOfRow">
                  <td>
                    <p>OEMA 2013</p>
                    <input type="hidden" name="government_change_regulated_title_q47[]" value="1" class="form-control commercial_title_q51">
                  </td>

                  <td>
                    <select name="government_change_regulated_status_q47[]" id="q47TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_change_regulated_status_q47 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>

                  </td>


                </tr>

                <tr class="qe47NoOfRow">

                  <td>
                    <p>Employee-paid-model</p>

                    <input type="hidden" name="government_change_regulated_title_q47[]" value="2" class="form-control government_change_regulated_title_q47">
                  </td>



                  <td>
                    <select name="government_change_regulated_status_q47[]" id="q47TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_change_regulated_status_q47 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>



                </tr>

                <tr class="qe47NoOfRow">

                  <td>
                    <p>Employer-paid-model</p>
                    <input type="hidden" name="government_change_regulated_title_q47[]" value="3" class="form-control government_change_regulated_title_q47">
                  </td>



                  <td>
                    <select name="government_change_regulated_status_q47[]" id="q47TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_change_regulated_status_q47 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>



                </tr>
                <tr class="qe47NoOfRow">

                  <td>
                    <p>Fair recruitment cost notification</p>
                    <input type="hidden" name="government_change_regulated_title_q47[]" value="4" class="form-control government_change_regulated_title_q47">
                  </td>



                  <td>
                    <select name="government_change_regulated_status_q47[]" id="q47TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_change_regulated_status_q47 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>



                </tr>

                <tr class="qe47NoOfRow">

                  <td>
                    <p>Ranking of Recruiting Agents</p>
                    <input type="hidden" name="government_change_regulated_title_q47[]" value="5" class="form-control government_change_regulated_title_q47">
                  </td>



                  <td>
                    <select name="government_change_regulated_status_q47[]" id="q47TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_change_regulated_status_q47 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>



                </tr>


                <tr class="qe47NoOfRow">

                  <td>
                    <p>Licensing of Recruiting Agents</p>
                    <input type="hidden" name="government_change_regulated_title_q47[]" value="6" class="form-control government_change_regulated_title_q47">
                  </td>



                  <td>
                    <select name="government_change_regulated_status_q47[]" id="q47TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_change_regulated_status_q47 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>



                </tr>
                <tr class="qe47NoOfRow">

                  <td>
                    <p>Registration of Informal Recruiting Agents</p>
                    <input type="hidden" name="government_change_regulated_title_q47[]" value="7" class="form-control government_change_regulated_title_q47">
                  </td>



                  <td>
                    <select name="government_change_regulated_status_q47[]" id="q47TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_change_regulated_status_q47 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>



                </tr>
                <tr class="qe47NoOfRow">

                  <td>
                    <p>Zero Migration Cost Approach</p>
                    <input type="hidden" name="government_change_regulated_title_q47[]" value="8" class="form-control government_change_regulated_title_q47">
                  </td>



                  <td>
                    <select name="government_change_regulated_status_q47[]" id="q47TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_change_regulated_status_q47 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>



                </tr>



                <!-- test end -->
                <tr class="qe47NoOfRow">
                  <td>

                    <input type="text" name="government_change_regulated_title_q47[]" class="form-control government_change_regulated_title_q47" placeholder="Others Specific">
                  </td>

                  <td>
                    <select name="government_change_regulated_status_q47[]" id="q47TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_change_regulated_status_q47 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>



                  <td><button id="addRowDatasq47" type="button" class="btn btn-sm btn-primary">+</i></button></td>

                </tr>
              <?php } ?>
            </tbody>
          </table>

        </div>
        <br />
        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question47">Save</button>
        </p>
      </div>
    </div>
  </div>


  <script type="text/javascript">
    $(document).ready(function() {
      $(".fiftysevenstatus").on("click", function() {
        var statusvalue = $("input[name='is_government_change_regulated_q47']:checked").val();
        $('.question47').find('.othersText').hide()
        $('.question47').find('#q52others').val("")
        if (statusvalue == '1') {
          $('.question47').find('#47_question_view').show()
          $('.question47').find('span').addClass('othersText')
        } else if (statusvalue == "2") {
          $('.question47').find('#47_question_view').hide()
          $('.question47').find('span').removeClass('othersText')
          $('.question47').find('span').show()

        } else {
          $('.question47').find('#47_question_view').hide()
          $('.question47').find('span').addClass('othersText')


        }
      });
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $("#addRowDatasq47").click(function() {
        let rowCount = $('.qe47NoOfRow').length + 1
        $("#addRowQ47").append(
          '<tr class="qe47NoOfRow" id="row' + rowCount + '">' +

          `<td>
             <input type="text" name="government_change_regulated_title_q47[]"  class="form-control government_change_regulated_title_q47" placeholder="Others Specific" >
        </td>` +
          `<td>
          <select name="government_change_regulated_status_q47[]" id="q47TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($status_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->government_change_regulated_status_q47 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
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