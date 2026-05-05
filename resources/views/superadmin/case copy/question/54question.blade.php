<?php
if (($questiontitles[53]->status ?? null) == 1) {

?>
  <style>
    .othersText {
      display: none;
    }

    .visibility {
      display: none;
    }
  </style>

  <div class="card question54">



    <div class="card-header" role="tab" id="heading-18">
      <h6 class="card-title" style="color: {{ isset($question_54_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-54" aria-expanded="false" aria-controls="collapse-18">
          54.{{ $questiontitles[53]->title }}
      </h6>
    </div>

    <div id="Question-54" class="collapse" role="tabpane54" aria-labelledby="heading-18" data-parent="#accordion-2">
      <div class="card-body">

        <!-- YES / NO / OTHERS -->
        <div class="icheck-primary">
          <input type="radio" class="fiftyfour_status" id="q54_yes" name="is_ministry_agency_organization_54q" value="1" {{ ($question_54_data->q54radioFifthFour3_checked_value ?? "1") == "1" ? 'checked' : '' }}>
          <label for="q54_yes">Yes</label>
        </div>
        <div class="icheck-primary">
          <input type="radio" class="fiftyfour_status" id="q54_no" name="is_ministry_agency_organization_54q" value="0" {{ ($question_54_data->q54radioFifthFour3_checked_value ?? "") == "0" ? 'checked' : '' }}>
          <label for="q54_no">No</label>
        </div>
        <div class="icheck-primary input-group mb-3">
          <input type="radio" class="fiftyfour_status" id="q54_others" name="is_ministry_agency_organization_54q" value="2" {{ ($question_54_data->q54radioFifthFour3_checked_value ?? "") == "2" ? 'checked' : '' }}>
          <label for="q54_others">Others</label>
          <span class="col-md-6 mt--4 {{ ($question_54_data->q54radioFifthFour3_checked_value ?? "") == "2" ? '' : 'othersText'}}">
            <input type="text" id="q54radioThree3others" class="form-control" placeholder="Others" name="others_ministry_agency_organization_54q" value="{{ $question_54_data->others ?? '' }}">
          </span>
        </div>

        <!-- TABLE SECTION -->
        <div id="fifthfour_question_view" class="{{ isset($question_54_data->q54radioFifthFour3_checked_value) && in_array($question_54_data->q54radioFifthFour3_checked_value, ['0','2']) ? 'visibility':'' }}">
          <table id="addRowq54radioThree3" class="table table-bordered text-center">
            <thead>
              <!-- <tr>
              <th rowspan="7">Coverage</th>
              <th colspan="2">Category of Trainee</th>
              <th colspan="2">Number of Training</th>
              <th colspan="2">Training Contents</th>
            </tr> -->
              <tr>
                <td>Category of Trainee</td>
                <th>Number of Training</th>
                <th>Training Contents</th>
                <th>Men</th>
                <th>Women</th>
                <th>Third Gender</th>
                <th>Total</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php $i = 1; @endphp
              @if(isset($question_54_data->q54radioFiftyFour3_data))
              @foreach($question_54_data->q54radioFiftyFour3_data as $q54)
              <tr class="q54radioFiftyFour3QRow" id="q54row{{$i}}">
                <td>
                  <input type="text" name="category_trainee[]"
                    class="form-control  mt-1 category_trainee"
                    placeholder="Category Trainee">
                </td>

                <td>
                  <input type="number" name="number_training[]"
                    class="form-control  mt-1 number_training"
                    placeholder="Number Trainee">
                </td>

                <td>
                  <input type="text" name="training_contents[]"
                    class="form-control  mt-1 training_contents"
                    placeholder="Training Contents">
                </td>
                <td><input type="number" name="men_54[]" class="form-control men_54" min="0" value="{{ $q54->men ?? 0 }}"></td>
                <td><input type="number" name="women_54[]" class="form-control women_54" min="0" value="{{ $q54->women ?? 0 }}"></td>
                <td><input type="number" name="third_gender_54[]" class="form-control third_gender_54" min="0" value="{{ $q54->third_gender ?? 0 }}"></td>
                <td><input type="number" name="total_54[]" class="form-control total_54" readonly value="{{ $q54->total ?? 0 }}"></td>



                <td>
                  @if($i == 1)
                  <button type="button" class="btn btn-sm btn-primary" id="addRowDatasq54radioThree3">+</button>
                  @else
                  <button type="button" class="btn btn-danger q54radioThree3btn_remove">-</button>
                  @endif
                </td>
              </tr>
              @php $i++; @endphp
              @endforeach
              @else
              <tr class="q54radioFiftyFour3QRow" id="q54row1">
                <td>
                  <input type="text" name="category_trainee[]"
                    class="form-control  mt-1 category_trainee"
                    placeholder="Category Trainee">
                </td>

                <td>
                  <input type="number" name="number_training[]"
                    class="form-control  mt-1 number_training"
                    placeholder="Number Trainee">
                </td>

                <td>
                  <input type="text" name="training_contents[]"
                    class="form-control  mt-1 training_contents"
                    placeholder="Training Contents">
                </td>
                <td><input type="number" name="men_54[]" class="form-control men_54" min="0" value="0"></td>
                <td><input type="number" name="women_54[]" class="form-control women_54" min="0" value="0"></td>
                <td><input type="number" name="third_gender_54[]" class="form-control third_gender_54" min="0" value="0"></td>
                <td><input type="number" name="total_54[]" class="form-control total_54" readonly value="0"></td>


                <td><button type="button" class="btn btn-sm btn-primary" id="addRowDatasq54radioThree3">+</button></td>
              </tr>
              @endif
            </tbody>
          </table>
        </div>

        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question54">Save</button>
        </p>

      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {

      /* =====================
         YES / NO / OTHERS
      ====================== */
      function toggleq54Sections() {
        let val = $("input[name='is_ministry_agency_organization_54q']:checked").val();

        if (val === "1") { // Yes
          $("#fifthfour_question_view").show();
          $(".othersText").hide();

        } else if (val === "2") { // Others
          $("#fifthfour_question_view").hide();
          $(".othersText").show();

        } else { // No
          $("#fifthfour_question_view").hide();
          $(".othersText").hide();
        }
      }

      toggleq54Sections();
      $(".fiftyfour_status").on("change", toggleq54Sections);


      /* =====================
         ADD ROW
      ====================== */
      $(document).on("click", "#addRowDatasq54radioThree3", function() {

        let rowCount = $(".q54radioFiftyFour3QRow").length + 1;
        let newRow = $("#addRowq54radioThree3 tbody tr:first").clone();

        newRow.attr("id", "q54row" + rowCount);

        // clear text inputs
        newRow.find(".category_trainee").val("");
        newRow.find(".number_training").val("");
        newRow.find(".training_contents").val("");

        // reset numbers
        newRow.find(".men_54, .women_54, .third_gender_54, .total_54").val(0);

        // SHOW text inputs (IMPORTANT)
        newRow.find(".type54Input").show();

        // change button
        newRow.find("button")
          .removeClass("btn-primary")
          .addClass("btn-danger q54radioThree3btn_remove")
          .text("-");

        $("#addRowq54radioThree3 tbody").append(newRow);
      });


      /* =====================
         REMOVE ROW
      ====================== */
      $(document).on("click", ".q54radioThree3btn_remove", function() {
        $(this).closest("tr").remove();
        calculateTotals();
      });


      /* =====================
         AUTO TOTAL
      ====================== */
      $(document).on(
        "input",
        ".men_54, .women_54, .third_gender_54",
        function() {
          calculateTotals();
        }
      );

      function calculateTotals() {
        $(".q54radioFiftyFour3QRow").each(function() {
          let men = parseInt($(this).find(".men_54").val()) || 0;
          let women = parseInt($(this).find(".women_54").val()) || 0;
          let third = parseInt($(this).find(".third_gender_54").val()) || 0;

          $(this).find(".total_54").val(men + women + third);
        });
      }


      /* =====================
         TEMP SAVE
      ====================== */
      $("#temp-save-question54").click(function() {

        calculateTotals();

        let yes_no_value = $("input[name='is_ministry_agency_organization_54q']:checked").val();
        let tableData = [];

        $(".q54radioFiftyFour3QRow").each(function() {
          tableData.push({
            category_trainee: $(this).find(".category_trainee").val(),
            number_training: $(this).find(".number_training").val(),
            training_contents: $(this).find(".training_contents").val(),
            men: $(this).find(".men_54").val(),
            women: $(this).find(".women_54").val(),
            third_gender: $(this).find(".third_gender_54").val(),
            total: $(this).find(".total_54").val()
          });
        });

        $.ajax({
          url: "/superadmin/case/temp-save-question",
          type: "POST",
          data: {
            _token: "{{ csrf_token() }}",
            question54: {
              q54radioFiftyFour3_data: tableData,
              q54radioFifthFour3_checked_value: yes_no_value,
              others: $("#q54radioThree3others").val()
            },
            question_no: 54
          },
          success: function() {
            $('.question54 .card-title').css('color', 'green');
            alert("Question 54 Temp Saved!");
          }
        });

      });

    });
  </script>
<?php } ?>