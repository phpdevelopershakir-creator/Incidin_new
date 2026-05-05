<?php
if (($questiontitles[54]->status ?? null) == 1) {

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

  <div class="card question55">

    <?php
    $type_acts = [
      1 => 'GO-NGO Coordination',
      2 => 'Facilitation of CTC Members (Union)',
      3 => 'Facilitation of CTC Members (Upazilla)',
      4 => 'Facilitation of CTC Members (District)',
      5 => 'Facilitation of Private Sector',
      6 => 'Development Partners',
      7 => 'Networking Meeting',
      8 => 'Workshop/Conference/Seminar/Meeting',
      9 => 'MoU',
      10 => 'Meeting of DLAC (District)',
      11 => 'Meeting of DLAC (Upazilla)',
      12 => 'Facilitation with Police/Court/BLAS organizations',
      13 => 'Others (Specify)'
    ];
    ?>


    <div class="card-header" role="tab" id="heading-18">
      <h6 class="card-title" style="color: {{ isset($question_55_data) ? 'blue' : 'green' }}">
        <a data-toggle="collapse" href="#Question-55" aria-expanded="false" aria-controls="collapse-18">
          55.{{ $questiontitles[54]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-55" class="collapse" role="tabpane55" aria-labelledby="heading-18" data-parent="#accordion-2">
      <div class="card-body">

        <!-- YES / NO / OTHERS -->
        <div class="icheck-primary">
          <input type="radio" class="fiftyfive_status" id="q55_yes" name="is_ministry_agency_organization_ctc_55q" value="1" {{ ($question_55_data->q55radioFifthThree3_checked_value ?? "1") == "1" ? 'checked' : '' }}>
          <label for="q55_yes">Yes</label>
        </div>
        <div class="icheck-primary">
          <input type="radio" class="fiftyfive_status" id="q55_no" name="is_ministry_agency_organization_ctc_55q" value="0" {{ ($question_55_data->q55radioFifthThree3_checked_value ?? "") == "0" ? 'checked' : '' }}>
          <label for="q55_no">No</label>
        </div>
        <div class="icheck-primary input-group mb-3">
          <input type="radio" class="fiftyfive_status" id="q55_others" name="is_ministry_agency_organization_ctc_55q" value="2" {{ ($question_55_data->q55radioFifthThree3_checked_value ?? "") == "2" ? 'checked' : '' }}>
          <label for="q55_others">Others</label>
          <span class="col-md-6 mt--4 {{ ($question_55_data->q55radioFifthThree3_checked_value ?? "") == "2" ? '' : 'othersText'}}">
            <input type="text" id="q55radioThree3others" class="form-control" placeholder="Others" name="others_ministry_agency_organization_ctc_55q" value="{{ $question_55_data->others ?? '' }}">
          </span>
        </div>

        <!-- TABLE SECTION -->
        <div id="fiftyfive_question_view" class="{{ isset($question_55_data->q55radioFifthThree3_checked_value) && in_array($question_55_data->q55radioFifthThree3_checked_value, ['0','2']) ? 'visibility':'' }}">
          <table id="addRowq55radioThree3" class="table table-bordered text-center">
            <thead>
              <tr>
                <th rowspan="7">Types of Activities</th>
                <th rowspan="7">District</th>
                <th rowspan="7">Number of Organizations covered</th>
                <th rowspan="7">Number of Events</th>
                <th colspan="2">Number of Individuals Covered</th>
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
              @if(isset($question_55_data->q55radioFiftyThree3_data))

              @foreach($question_55_data->q55radioFiftyThree3_data as $q55)
              <tr class="q55radioFiftyFive3QRow" id="q55row{{$i}}">
                <td>
                  <select name="types_activities[]" class="form-control type_vot">
                    @foreach($type_acts as $key => $val)
                    <option value="{{ $key }}" {{ $q55->types_activities == $key ? 'selected' : '' }}>
                      {{ $val }}
                    </option>
                    @endforeach
                  </select>

                  <input type="text"
                    name="types_activities_other[]"
                    class="form-control type3Input mt-1"
                    placeholder="Specify Other"
                    value="{{ $q55->types_activities == 13 ? ($q55->types_activities_other ?? '') : '' }}">
                </td>
                <td>
                  <select name="distric_id[]" id="" class="form-control">
                    <option value="" disabled selected>--Select District--</option>
                    @foreach($districs as $distric)
                    <option <?= (isset($q55)  &&  !empty($q55) && $q55->district == $distric->id) ? 'selected' : ''; ?> value="{{$distric->id}}">{{$distric->name}}</option>
                    @endforeach
                  </select>
                </td>

                <td><input type="text" name="number_organizations_covered[]" id="number_organizations_covered" class="form-control number_organizations_covered"></td>


                <td><input type="text" name="number_events[]" id="number_events" class="form-control number_events"></td>


                <td><input type="number" name="men_55[]" class="form-control men_55" min="0" value="{{ $q55->men ?? 0 }}"></td>
                <td><input type="number" name="women_55[]" class="form-control women_55" min="0" value="{{ $q55->women ?? 0 }}"></td>
                <td><input type="number" name="third_gender_55[]" class="form-control third_gender_55" min="0" value="{{ $q55->third_gender ?? 0 }}"></td>
                <td><input type="number" name="boy_55[]" class="form-control boy_55" min="0" value="{{ $q55->boy ?? 0 }}"></td>
                <td><input type="number" name="girl_55[]" class="form-control girl_55" min="0" value="{{ $q55->girl ?? 0 }}"></td>
                <td><input type="number" name="total_55[]" class="form-control total_55" readonly value="{{ $q55->total ?? 0 }}"></td>



                <td>
                  @if($i == 1)
                  <button type="button" class="btn btn-sm btn-primary" id="addRowDatasq55radioThree3">+</button>
                  @else
                  <button type="button" class="btn btn-danger q55radioThree3btn_remove">-</button>
                  @endif
                </td>
              </tr>
              @php $i++; @endphp
              @endforeach
              @else
              <tr class="q55radioFiftyFive3QRow" id="q55row1">
                <td>
                  <select name="types_activities[]" class="form-control type_vot">
                    @foreach($type_acts as $key => $val)
                    <option value="{{ $key }}">{{ $val }}</option>
                    @endforeach
                  </select>

                  <input type="text"
                    name="types_activities_other[]"
                    class="form-control type3Input mt-1"
                    placeholder="Specify Other"
                    value="">
                </td>
                <td>
                  <select name="distric_id[]" id="" class="form-control">
                    <option value="" disabled selected>--Select District--</option>
                    @foreach($districs as $distric)
                    <option <?= (isset($q55)  &&  !empty($q55) && $q55->district == $distric->id) ? 'selected' : ''; ?> value="{{$distric->id}}">{{$distric->name}}</option>
                    @endforeach
                  </select>
                </td>

                <td><input type="text" name="number_organizations_covered[]" id="number_organizations_covered" class="form-control number_organizations_covered"></td>


                <td><input type="text" name="number_events[]" id="number_events" class="form-control number_events"></td>


                <td><input type="number" name="men_55[]" class="form-control men_55" min="0" value="0"></td>
                <td><input type="number" name="women_55[]" class="form-control women_55" min="0" value="0"></td>
                <td><input type="number" name="third_gender_55[]" class="form-control third_gender_55" min="0" value="0"></td>
                <td><input type="number" name="boy_55[]" class="form-control boy_55" min="0" value="0"></td>
                <td><input type="number" name="girl_55[]" class="form-control girl_55" min="0" value="0"></td>
                <td><input type="number" name="total_55[]" class="form-control total_55" readonly value="0"></td>


                <td>
                  <button type="button" class="btn btn-sm btn-primary addRowDatasq55radioThree3">+</button>


                </td>
              </tr>
              @endif
            </tbody>
          </table>
        </div>

        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question55">Save</button>
        </p>

      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {

      function toggleq55Sections() {
        let val = $("input[name='is_ministry_agency_organization_ctc_55q']:checked").val();
        if (val === "1") { // Yes
          $("#fiftyfive_question_view").show();
          $(".othersText").hide();
        } else if (val === "2") { // Others
          $(".othersText").show();
          $("#fiftyfive_question_view").hide();
        } else { // No
          $("#fiftyfive_question_view").hide();
          $(".othersText").hide();
        }
      }

      // Run on page load
      toggleq55Sections();

      // Run on click
      $(".fiftyfive_status").on("change", toggleq55Sections);

    });
  </script>
  <script>
    $(document).ready(function() {

      // Add new row
      $(document).on("click", ".addRowDatasq55radioThree3", function() {

        let rowCount = $(".q55radioFiftyFive3QRow").length + 1;
        let newRow = $("#addRowq55radioThree3 tbody tr:first").clone();

        newRow.attr("id", "q55row" + rowCount);

        // reset values
        newRow.find("input[type='number']").val(0);
        newRow.find("input[type='text']").val("");
        newRow.find("select").prop("selectedIndex", 0);
        newRow.find(".type3Input").hide();

        // change button
        newRow.find(".addRowDatasq55radioThree3")
          .removeClass("btn-primary addRowDatasq55radioThree3")
          .addClass("btn-danger q55radioThree3btn_remove")
          .text("-");

        $("#addRowq55radioThree3 tbody").append(newRow);
      });


      // Remove row
      $(document).on("click", ".q55radioThree3btn_remove", function() {
        $(this).closest("tr").remove();
        calculateTotals();
      });

      // Auto calculate total
      $(document).on(
        "input",
        ".men_55, .women_55, .third_gender_55, .boy_55, .girl_55",
        function() {
          calculateTotals();
        }
      );

      function calculateTotals() {
        $(".q55radioFiftyFive3QRow").each(function() {
          let men = parseInt($(this).find(".men_55").val()) || 0;
          let women = parseInt($(this).find(".women_55").val()) || 0;
          let third = parseInt($(this).find(".third_gender_55").val()) || 0;
          let boy = parseInt($(this).find(".boy_55").val()) || 0;
          let girl = parseInt($(this).find(".girl_55").val()) || 0;

          $(this).find(".total_55").val(
            men + women + third + boy + girl
          );
        });
      }

      // Show Other input
      $(document).on("change", ".type_vot", function() {
        if ($(this).val() == "13") {
          $(this).siblings(".type3Input").show();
        } else {
          $(this).siblings(".type3Input").hide().val("");
        }
      });

    });
  </script>

  <script>
    // Temp save
    $("#temp-save-question55").click(function() {
      calculateTotals(); // force calculation before save
      let yes_no_value = $("input[name='is_ministry_agency_organization_ctc_55q']:checked").val();
      let tableData = [];
      $(".q55radioFiftyFive3QRow").each(function() {
        tableData.push({
          type_vot: $(this).find(".type_vot").val(),
          type_vot_other: $(this).find(".type3Input").val(),
          men: $(this).find(".men_55").val(),
          women: $(this).find(".women_55").val(),
          third_gender: $(this).find(".third_gender_55").val(),
          boy: $(this).find(".boy_55").val(),
          girl: $(this).find(".girl_55").val(),
          total: $(this).find(".total_55").val(),

        });
      });

      let saveData = {
        q55radioFiftyThree3_data: tableData,
        q55radioFifthThree3_checked_value: yes_no_value,
        others: $("#q55radioThree3others").val()
      };

      $.ajax({
        url: "/superadmin/case/temp-save-question",
        type: "POST",
        data: {
          _token: "{{ csrf_token() }}",
          question55: saveData,
          question_no: 55
        },
        success: function() {
          $('.question55.card-title').css('color', 'green');
          alert("Question 55 Temp Saved!");
        }
      });
    });
  </script>
<?php } ?>