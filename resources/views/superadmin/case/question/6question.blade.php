<?php
if (($questiontitles[5]->status ?? null) == 1) {

?>
  <style>
    .othersText {
      display: none;
    }

    .visibility {
      display: none;
    }
  </style>

  <div class="card question6">
    <div class="card-header" role="tab" id="heading-4">

      <h6 class="card-title" style="color: {{ isset($question_6_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-6" aria-expanded="false"
          aria-controls="collapse-4">
          6.{{ $questiontitles[5]->title }}
        </a>
      </h6>
    </div>


    <div id="Question-6" class="collapse" role="tabpane6" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">

        <!-- YES -->
        <div class="icheck-primary">
          <input type="radio" class="six_status" id="q6_yes"
            name="is_unit_court_q6"
            value="1"
            {{ ($question_6_data->q6radioSix3_checked_value ?? "1") == "1" ? 'checked' : '' }}>
          <label for="q6_yes">Yes</label>
        </div>

        <!-- NO -->
        <div class="icheck-primary">
          <input type="radio" class="six_status" id="q6_no"
            name="is_unit_court_q6"
            value="0"
            {{ ($question_6_data->q6radioSix3_checked_value ?? "") == "0" ? 'checked' : '' }}>
          <label for="q6_no">No</label>
        </div>

        <!-- OTHERS -->
        <div class="icheck-primary input-group mb-3">
          <input type="radio" class="six_status" id="q6_others"
            name="others_unit_court_q6"
            value="2"
            {{ ($question_6_data->q6radioSix3_checked_value ?? "") == "2" ? 'checked' : '' }}>
          <label for="q6_others">Others</label>

          <span class="col-md-6 mt--4 {{ ($question_6_data->q6radioSix3_checked_value ?? "") == "2" ? '' : 'othersText'}}">
            <input type="text" id="q6radioThree3others" class="form-control"
              placeholder="Others"
              name="others_forced_labor_q6"
              value="{{ $question_6_data->others ?? '' }}">
          </span>
        </div>



        <!-- TABLE SECTION -->
        <div id="six_question_view"
          class="card-body row {{ isset($question_6_data->q6radioSix3_checked_value) && in_array($question_6_data->q6radioSix3_checked_value, ['0','2']) ? 'visibility':'' }}">

          <table id="addRowq6radioThree3" class="table table-bordered text-center">
            <thead>
              <tr>
                <th rowspan="2">Ministry/Department</th>
                <th colspan="3">Number of Official Accused</th>
                <th>Response</th>
                <th>Action</th>
              </tr>
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>Total</th>
                <th>Response</th>
              </tr>
            </thead>

            <tbody>
              @php $i=1; @endphp

              @if(isset($question_6_data->q6radioSix3_data))
              @foreach($question_6_data->q6radioSix3_data as $q6)
              <tr class="q6radioSix6QRow" id="q6row{{ $i }}">
                <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"
                    value="{{ $q6->title }}"></td>

                <td><input type="number" name="labor_men_q6[]" id="labor_men_q6_{{ $i }}" class="form-control labor_men_q6"
                    value="{{ $q6->men }}" min="0"></td>

                <td><input type="number" name="labor_women_q6[]" id="labor_women_q6_{{ $i }}" class="form-control labor_women_q6"
                    value="{{ $q6->women }}" min="0"></td>

                <td><input type="number" name="labor_total_q6[]" readonly id="labor_total_q6_{{ $i }}" class="form-control labor_total_q6"
                    value="{{ $q6->total }}"></td>

                <td><input type="text" name="labor_response_q6[]" class="form-control labor_response_q6"
                    value="{{ $q6->response }}"></td>

                <td>
                  @if($i == 1)
                  <button type="button" class="btn btn-sm btn-primary" id="addRowDatasq6radioThree3">+</button>
                  @else
                  <button type="button" id="{{ $i }}" class="btn btn-danger q6radioThree3btn_remove">-</button>
                  @endif
                </td>
              </tr>
              @php $i++; @endphp
              @endforeach
              @else
              <tr class="q6radioSix6QRow" id="q6row1">
                <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

                <td>
                  <input type="number" name="labor_men_q6[]" id="labor_men_q6_1" class="form-control labor_men_q6" min="0">
                  <p style="color:red">{{ $errors->first('labor_men_q6.0') }}</p>
                </td>

                <td>
               
                  <input type="number" name="labor_women_q6[]" id="labor_women_q6_1" class="form-control labor_women_q6" min="0">
                  <p style="color:red">{{ $errors->first('labor_women.0') }}</p>
                </td>

                <td><input type="number" name="labor_total_q6[]" id="labor_total_q6_1" class="form-control labor_total_q6" readonly></td>

                <td><input type="text" name="labor_response_q6[]" class="form-control labor_response_q6"></td>

                <td>
                  <button type="button" class="btn btn-sm btn-primary" id="addRowDatasq6radioThree3">+</button>
                </td>
              </tr>
              @endif
            </tbody>
          </table>

        </div>

        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question6">Save</button>
        </p>

      </div>
    </div>
  </div>
<?php } ?>
<script>
  $(document).ready(function() {

    // ⬅️ Add new row
    $("#addRowDatasq6radioThree3").click(function() {
      let rowCount = $(".q6radioSix6QRow").length + 1;

      $("#addRowq6radioThree3 tbody").append(`
        <tr class="q6radioSix6QRow" id="q6row${rowCount}">
            <td><input type="text" name="labor_title_q6[]" class="form-control labor_title_q6"></td>

            <td><input type="number" name="labor_men_q6[]" id="labor_men_q6_${rowCount}" class="form-control labor_men_q6" min="0"></td>

            <td><input type="number" name="labor_women_q6[]" id="labor_women_q6_${rowCount}" class="form-control labor_women_q6" min="0"></td>

            <td><input type="number" name="labor_total_q6[]" readonly id="labor_total_q6_${rowCount}"
                class="form-control labor_total_q6"></td>

            <td><input type="text" name="labor_response_q6[]" class="form-control labor_response_q6"></td>

            <td><button type="button" id="${rowCount}" class="btn btn-danger q6radioThree3btn_remove">-</button></td>
        </tr>
    `);
    });

    // ⬅️ Remove row
    $(document).on("click", ".q6radioThree3btn_remove", function() {
      let id = $(this).attr("id");
      $("#q6row" + id).remove();
    });

    // ⬅️ Auto calculate totals

    $("#addRowq6radioThree3").on("input", ".labor_men_q6, .labor_women_q6", function() {
      let row = $(this).attr("id").split("_")[3];
      let men = $("#labor_men_q6_" + row).val() || 0;
      let women = $("#labor_women_q6_" + row).val() || 0;

      $("#labor_total_q6_" + row).val(parseInt(men) + parseInt(women));
    });

    // ⬅️ Yes / No / Others behavior
    $(".six_status").on("click", function() {
      let value = $("input[name='is_unit_court_q6']:checked").val();

      $(".othersText").hide();
      $("#six_question_view").hide();

      if (value === "1") {
        $("#six_question_view").show();
      } else if (value === "2") {
        $(".othersText").show();
      }
    });

    // ⬅️ SAVE BUTTON
    $("#temp-save-question6").click(function() {

      let yes_no_value = $("input[name='is_unit_court_q6']:checked").val();

      let tableData = [];

      $(".q6radioSix6QRow").each(function() {
        tableData.push({
          title: $(this).find(".labor_title_q6").val(),
          men: $(this).find(".labor_men_q6").val(),
          women: $(this).find(".labor_women_q6").val(),
          total: $(this).find(".labor_total_q6").val(),
          response: $(this).find(".labor_response_q6").val(),
        });
      });

      let saveData = {
        q6radioSix3_data: tableData,
        q6_checked_value: yes_no_value,
        others: $("#q6radioThree3others").val(),
      };

      $.ajax({
        url: "/superadmin/case/temp-save-question",
        type: "POST",
        data: {
          _token: "{{ csrf_token() }}",
          question6: saveData,
          question_no: "3",
        },
        success: function(response) {
          $('.question6.card-title').css('color', 'green');
          alert("Question 6 has been saved temporarily");
        }
      });

    });

  });
</script>




<script type="text/javascript">
  $(document).ready(function() {
    $(".six_status").on("click", function() {
      var statusvalue = $("input[name='is_unit_court_q6']:checked").val();
      // alert(statusvalue)
      $('.question6').find('.othersText').hide()
      $('.question6').find('#q6radioThree3others').val("")
      if (statusvalue == '1') {
        $('.question6').find('#six_question_view').show()
        $('.question6').find('span').addClass('othersText')
      } else if (statusvalue == "2") {
        $('.question6').find('#six_question_view').hide()
        $('.question6').find('span').removeClass('othersText')
        $('.question6').find('span').show()
      } else {
        $('.question6').find('#six_question_view').hide()
        $('.question6').find('span').addClass('othersText')
      }
    });
  });
</script>