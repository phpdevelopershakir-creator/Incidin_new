<?php
if(($questiontitles[2]->status ?? null)==1)
{

  ?>
<style>
  .othersText { display: none; }
  .visibility { display: none; }
</style>

<div class="card question3">
  <div class="card-header" role="tab" id="heading-4">
    
        <h6 class="card-title" style="color: {{ isset($question_3_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-3" aria-expanded="false"
          aria-controls="collapse-4">
          3.{{ $questiontitles[2]->title }}
        </a>
      </h6>
  </div>

  
   <div id="Question-3" class="collapse" role="tabpane3" aria-labelledby="heading-4"
      data-parent="#accordion-2">
    <div class="card-body">

      <!-- YES -->
      <div class="icheck-primary">
        <input type="radio" class="three_status" id="q3_yes"
          name="is_forced_labor_q3"
          value="1"
          {{ ($question_3_data->q3radioThree3_checked_value ?? "1") == "1" ? 'checked' : '' }} >
        <label for="q3_yes">Yes</label>
      </div>

      <!-- NO -->
      <div class="icheck-primary">
        <input type="radio" class="three_status" id="q3_no"
          name="is_forced_labor_q3"
          value="0"
          {{ ($question_3_data->q3radioThree3_checked_value ?? "") == "0" ? 'checked' : '' }} >
        <label for="q3_no">No</label>
      </div>

      <!-- OTHERS -->
      <div class="icheck-primary input-group mb-3">
        <input type="radio" class="three_status" id="q3_others"
          name="is_forced_labor_q3"
          value="2"
          {{ ($question_3_data->q3radioThree3_checked_value ?? "") == "2" ? 'checked' : '' }} >
        <label for="q3_others">Others</label>

        <span class="col-md-6 mt--4 {{ ($question_3_data->q3radioThree3_checked_value ?? "") == "2" ? '' : 'othersText'}}">
          <input type="text" id="q3radioThree3others" class="form-control"
           placeholder="Others"
           name="others_forced_labor_q3"
           value="{{ $question_3_data->others ?? '' }}">
        </span>
      </div>



      <!-- TABLE SECTION -->
      <div id="three_question_view"
        class="card-body row {{ isset($question_3_data->q3radioThree3_checked_value) && in_array($question_3_data->q3radioThree3_checked_value, ['0','2']) ? 'visibility':'' }}">

        <table id="addRowq3radioThree3" class="table table-bordered text-center">
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

          @if(isset($question_3_data->q3radioThree3_data))
            @foreach($question_3_data->q3radioThree3_data as $q3)
              <tr class="q3radioThree3QRow" id="q3row{{ $i }}">
                <td><input type="text" name="labor_title[]" class="form-control labor_title"
                   value="{{ $q3->title }}"></td>

                <td><input type="number" name="labor_men[]" id="labor_men_{{ $i }}" class="form-control labor_men"
                   value="{{ $q3->men }}" min="0"></td>

                <td><input type="number" name="labor_women[]" id="labor_women_{{ $i }}" class="form-control labor_women"
                   value="{{ $q3->women }}" min="0"></td>

                <td><input type="number" name="labor_total[]" readonly id="labor_total_{{ $i }}" class="form-control labor_total"
                   value="{{ $q3->total }}"></td>

                <td><input type="text" name="labor_response[]" class="form-control labor_response"
                   value="{{ $q3->response }}"></td>

                <td>
                  @if($i == 1)
                    <button type="button" class="btn btn-sm btn-primary" id="addRowDatasq3radioThree3">+</button>
                  @else
                    <button type="button" id="{{ $i }}" class="btn btn-danger q3radioThree3btn_remove">-</button>
                  @endif
                </td>
              </tr>
              @php $i++; @endphp
            @endforeach
          @else
              <tr class="q3radioThree3QRow" id="q3row1">
                <td><input type="text" name="labor_title[]" class="form-control labor_title"></td>

                <td>
                  <input type="number" name="labor_men[]" id="labor_men_1" class="form-control labor_men" min="0">
                  <p style="color:red">{{ $errors->first('labor_men.0') }}</p>
              </td>

                <td>
                  <input type="number" name="labor_women[]" id="labor_women_1" class="form-control labor_women" min="0">
                  <p style="color:red">{{ $errors->first('labor_women.0') }}</p>
              </td>

                <td><input type="number" name="labor_total[]" id="labor_total_1" class="form-control labor_total" readonly></td>

                <td><input type="text" name="labor_response[]" class="form-control labor_response"></td>

                <td>
                  <button type="button" class="btn btn-sm btn-primary" id="addRowDatasq3radioThree3">+</button>
                </td>
              </tr>
          @endif
          </tbody>
        </table>

      </div>

      <p class="text-right">
        <button type="button" class="btn btn-success" id="temp-save-question3">Save</button>
      </p>

    </div>
  </div>
</div>
  <?php } ?> 
<script>
$(document).ready(function () {

// ⬅️ Add new row
$("#addRowDatasq3radioThree3").click(function () {
    let rowCount = $(".q3radioThree3QRow").length + 1;

    $("#addRowq3radioThree3 tbody").append(`
        <tr class="q3radioThree3QRow" id="q3row${rowCount}">
            <td><input type="text" name="labor_title[]" class="form-control labor_title"></td>

            <td><input type="number" name="labor_men[]" id="labor_men_${rowCount}" class="form-control labor_men" min="0"></td>

            <td><input type="number" name="labor_women[]" id="labor_women_${rowCount}" class="form-control labor_women" min="0"></td>

            <td><input type="number" name="labor_total[]" readonly id="labor_total_${rowCount}"
                class="form-control labor_total"></td>

            <td><input type="text" name="labor_response[]" class="form-control labor_response"></td>

            <td><button type="button" id="${rowCount}" class="btn btn-danger q3radioThree3btn_remove">-</button></td>
        </tr>
    `);
});

// ⬅️ Remove row
$(document).on("click", ".q3radioThree3btn_remove", function () {
    let id = $(this).attr("id");
    $("#q3row" + id).remove();
});

// ⬅️ Auto calculate totals
$("#addRowq3radioThree3").on("input", ".labor_men, .labor_women", function () {
    let row = $(this).attr("id").split("_")[2];
    let men = $("#labor_men_" + row).val() || 0;
    let women = $("#labor_women_" + row).val() || 0;

    $("#labor_total_" + row).val(parseInt(men) + parseInt(women));
});

// ⬅️ Yes / No / Others behavior
$(".three_status").on("click", function () {
    let value = $("input[name='is_forced_labor_q3']:checked").val();

    $(".othersText").hide();
    $("#three_question_view").hide();

    if (value === "1") {
        $("#three_question_view").show();
    } 
    else if (value === "2") {
        $(".othersText").show();
    }
});

// ⬅️ SAVE BUTTON
$("#temp-save-question3").click(function () {

    let yes_no_value = $("input[name='is_forced_labor_q3']:checked").val();

    let tableData = [];

    $(".q3radioThree3QRow").each(function () {
        tableData.push({
            title: $(this).find(".labor_title").val(),
            men: $(this).find(".labor_men").val(),
            women: $(this).find(".labor_women").val(),
            total: $(this).find(".labor_total").val(),
            response: $(this).find(".labor_response").val(),
        });
    });

    let saveData = {
        q3radioThree3_data: tableData,
        q3_checked_value: yes_no_value,
        others: $("#q3radioThree3others").val(),
    };

    $.ajax({
        url: "/superadmin/case/temp-save-question",
        type: "POST",
        data: {
            _token: "{{ csrf_token() }}",
            question3: saveData,
            question_no: "3",
        },
        success: function (response) {
          $('.question3.card-title').css('color', 'green');
            alert("Question 3 has been saved temporarily");
        }
    });

});

});
</script>


  

<script type="text/javascript">
   $(document).ready(function(){
        $(".three_status").on("click",function(){
          var statusvalue = $("input[name='is_forced_labor_q3']:checked").val();
          // alert(statusvalue)
            $('.question3').find('.othersText').hide()
            $('.question3').find('#q3radioThree3others').val("")
            if(statusvalue == '1'){
              $('.question3').find('#three_question_view').show()
              $('.question3').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question3').find('#three_question_view').hide()
              $('.question3').find('span').removeClass('othersText')
              $('.question3').find('span').show()
            }else{
              $('.question3').find('#three_question_view').hide()
              $('.question3').find('span').addClass('othersText')
            }
        });
    });
</script>

