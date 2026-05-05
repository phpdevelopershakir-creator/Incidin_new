<?php
if (($questiontitles[52]->status ?? null) == 1) {

?>
  <style>
    .othersText {
      display: none;
    }

    .visibility {
      display: none;
    }

    .type3Input {
      display: none;
    }
  </style>

  <div class="card question53">

    <?php
    $number_cases = [
      1 => 'Health support',
      2 => 'Compensation',
      3 => 'Training',
      4 => 'Psycho-social care',
      5 => 'Shelter',
      6 => 'Victim protection',
      7 => 'Others (Specify)'
    ];
    ?>


    <div class="card-header" role="tab" id="heading-18">
      <h6 class="card-title" style="color: {{ isset($question_53_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-53" aria-expanded="false" aria-controls="collapse-18">
          53.{{ $questiontitles[52]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-53" class="collapse" role="tabpane53" aria-labelledby="heading-18" data-parent="#accordion-2">
      <div class="card-body">

        <!-- YES / NO / OTHERS -->
        <div class="icheck-primary">
          <input type="radio" class="fiftythree_status" id="q53_yes" name="is_vots_received_assistance_53q" value="1" {{ ($question_53_data->q53radioFifthThree3_checked_value ?? "1") == "1" ? 'checked' : '' }}>
          <label for="q53_yes">Yes</label>
        </div>
        <div class="icheck-primary">
          <input type="radio" class="fiftythree_status" id="q53_no" name="is_vots_received_assistance_53q" value="0" {{ ($question_53_data->q53radioFifthThree3_checked_value ?? "") == "0" ? 'checked' : '' }}>
          <label for="q53_no">No</label>
        </div>
        <div class="icheck-primary input-group mb-3">
          <input type="radio" class="fiftythree_status" id="q53_others" name="is_vots_received_assistance_53q" value="2" {{ ($question_53_data->q53radioFifthThree3_checked_value ?? "") == "2" ? 'checked' : '' }}>
          <label for="q53_others">Others</label>
          <span class="col-md-6 mt--4 {{ ($question_53_data->q53radioFifthThree3_checked_value ?? "") == "2" ? '' : 'othersText'}}">
            <input type="text" id="q53radioThree3others" class="form-control" placeholder="Others" name="others_vots_received_assistance_53q" value="{{ $question_53_data->others ?? '' }}">
          </span>
        </div>

        <!-- TABLE SECTION -->
        <div id="fifththree_question_view" class="{{ isset($question_53_data->q53radioFifthThree3_checked_value) && in_array($question_53_data->q53radioFifthThree3_checked_value, ['0','2']) ? 'visibility':'' }}">
          <table id="addRowq53radioThree3" class="table table-bordered text-center">
            <thead>
              <tr>
                <th rowspan="7">Number of Case</th>
                <th colspan="2">Number of Case</th>
              </tr>
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>Third Gender</th>
                <th>Boy</th>
                <th>Girl</th>
                <th>Total</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php $i = 1; @endphp
              @if(isset($question_53_data->q53radioFiftyThree3_data))
              @foreach($question_53_data->q53radioFiftyThree3_data as $q53)
              <tr class="q53radioEighteen3QRow" id="q53row{{$i}}">
                <td>
                  <select name="number_case_title[]" class="form-control type_vot">
                    @foreach($number_cases as $key => $val)
                    <option value="{{ $key }}" {{ $q53->number_case_title == $key ? 'selected' : '' }}>{{ $val }}</option>
                    @endforeach
                  </select>
                  <input type="text" name="number_case_other[]" class="form-control type3Input mt-1" placeholder="Specify Other" value="{{ $q53->type_vot == 7 ? $q53->type_vot_other ?? '' : '' }}">
                </td>
                <td><input type="number" name="men_53[]" class="form-control men_53" min="0" value="{{ $q53->men ?? 0 }}"></td>
                <td><input type="number" name="women_53[]" class="form-control women_53" min="0" value="{{ $q53->women ?? 0 }}"></td>
                <td><input type="number" name="third_gender_53[]" class="form-control third_gender_53" min="0" value="{{ $q53->third_gender ?? 0 }}"></td>
                <td><input type="number" name="boy_53[]" class="form-control boy_53" min="0" value="{{ $q53->boy ?? 0 }}"></td>
                <td><input type="number" name="girl_53[]" class="form-control girl_53" min="0" value="{{ $q53->girl ?? 0 }}"></td>
                <td><input type="number" name="total_53[]" class="form-control total_53" readonly value="{{ $q53->total ?? 0 }}"></td>



                <td>
                  @if($i == 1)
                  <button type="button" class="btn btn-sm btn-primary" id="addRowDatasq53radioThree3">+</button>
                  @else
                  <button type="button" class="btn btn-danger q53radioThree3btn_remove">-</button>
                  @endif
                </td>
              </tr>
              @php $i++; @endphp
              @endforeach
              @else
              <tr class="q53radioEighteen3QRow" id="q53row1">
                <td>
                  <select name="number_case_title[]" class="form-control type_vot">
                    @foreach($number_cases as $key => $val)
                    <option value="{{ $key }}">{{ $val }}</option>
                    @endforeach
                  </select>
                  <input type="text" name="number_case_other[]" class="form-control type3Input mt-1" placeholder="Specify Other">
                </td>
                <td><input type="number" name="men_53[]" class="form-control men_53" min="0" value="0"></td>
                <td><input type="number" name="women_53[]" class="form-control women_53" min="0" value="0"></td>
                <td><input type="number" name="third_gender_53[]" class="form-control third_gender_53" min="0" value="0"></td>
                <td><input type="number" name="boy_53[]" class="form-control boy_53" min="0" value="0"></td>
                <td><input type="number" name="girl_53[]" class="form-control girl_53" min="0" value="0"></td>
                <td><input type="number" name="total_53[]" class="form-control total_53" readonly value="0"></td>


                <td><button type="button" class="btn btn-sm btn-primary" id="addRowDatasq53radioThree3">+</button></td>
              </tr>
              @endif
            </tbody>
          </table>
        </div>

        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question53">Save</button>
        </p>

      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {

      function toggleq53Sections() {
        let val = $("input[name='is_vots_received_assistance_53q']:checked").val();
        if (val === "1") { // Yes
          $("#fifththree_question_view").show();
          $(".othersText").hide();
        } else if (val === "2") { // Others
          $(".othersText").show();
          $("#fifththree_question_view").hide();
        } else { // No
          $("#fifththree_question_view").hide();
          $(".othersText").hide();
        }
      }

      // Run on page load
      toggleq53Sections();

      // Run on click
      $(".fiftythree_status").on("change", toggleq53Sections);

    });
  </script>
  <script>
    $(document).ready(function() {

      // Add new row
      $(document).on("click", "#addRowDatasq53radioThree3", function() {
        let rowCount = $(".q53radioEighteen3QRow").length + 1;
        let newRow = $("#addRowq53radioThree3 tbody tr:first").clone();

        newRow.attr("id", "q53row" + rowCount);

        newRow.find("input").val(0);
        newRow.find("select").prop("selectedIndex", 0);
        newRow.find(".type3Input").hide();

        newRow.find("button")
          .removeClass("btn-primary")
          .addClass("btn-danger q53radioThree3btn_remove")
          .text("-");

        $("#addRowq53radioThree3 tbody").append(newRow);
      });

      // Remove row
      $(document).on("click", ".q53radioThree3btn_remove", function() {
        $(this).closest("tr").remove();
        calculateTotals();
      });

      // Auto calculate total
      $(document).on(
        "input",
        ".men_53, .women_53, .third_gender_53, .boy_53, .girl_53",
        function() {
          calculateTotals();
        }
      );

      function calculateTotals() {
        $(".q53radioEighteen3QRow").each(function() {
          let men = parseInt($(this).find(".men_53").val()) || 0;
          let women = parseInt($(this).find(".women_53").val()) || 0;
          let third = parseInt($(this).find(".third_gender_53").val()) || 0;
          let boy = parseInt($(this).find(".boy_53").val()) || 0;
          let girl = parseInt($(this).find(".girl_53").val()) || 0;

          $(this).find(".total_53").val(
            men + women + third + boy + girl
          );
        });
      }

      // Show Other input
      $(document).on("change", ".type_vot", function() {
        if ($(this).val() == "7") {
          $(this).siblings(".type3Input").show();
        } else {
          $(this).siblings(".type3Input").hide().val("");
        }
      });

    });
  </script>

  <script>
    // Temp save
    $("#temp-save-question53").click(function() {
    calculateTotals(); // force calculation before save
    let yes_no_value = $("input[name='is_vots_received_assistance_53q']:checked").val();
    let tableData = [];
    $(".q53radioEighteen3QRow").each(function() {
      tableData.push({
        type_vot: $(this).find(".type_vot").val(),
        type_vot_other: $(this).find(".type3Input").val(),
        men: $(this).find(".men_53").val(),
        women: $(this).find(".women_53").val(),
        third_gender: $(this).find(".third_gender_53").val(),
        boy: $(this).find(".boy_53").val(),
        girl: $(this).find(".girl_53").val(),
        total: $(this).find(".total_53").val(),

      });
    });

    let saveData = {
      q53radioFiftyThree3_data: tableData,
      q53radioFifthThree3_checked_value: yes_no_value,
      others: $("#q53radioThree3others").val()
    };

    $.ajax({
      url: "/superadmin/case/temp-save-question",
      type: "POST",
      data: {
        _token: "{{ csrf_token() }}",
        question53: saveData,
        question_no: 18
      },
      success: function() {
        $('.question53.card-title').css('color', 'green');
        alert("Question 18 Temp Saved!");
      }
    });
    });

    });
  </script>
<?php } ?>