<?php
if (($questiontitles[18]->status ?? null) == 1) {

?>
<style>
  .othersText { display: none; }
  .type3Input { display: none; }
</style>

<div class="card question19">
  <?php
    $type_vot = [1 => "Sex Trafficing", 2 => "Forced labour", 3 => "Other Specify"];
    $protection_measures_taken = [1 => "Detained", 2 => "Referred to care", 3 => "Investigation"];
    $preventive_measures_taken = [1 => "Awareness Taising", 2 => "Stricter Border Control"];
  ?>
  <div class="card-header" role="tab" id="heading-19">
    <h6 class="card-title" style="color: {{ isset($question_19_data) ? 'blue' : 'green' }};">
      <a data-toggle="collapse" href="#Question-19" aria-expanded="false" aria-controls="collapse-19">
        19.{{ $questiontitles[18]->title }}
      </a>
    </h6>
  </div>

  <div id="Question-19" class="collapse" role="tabpanel" aria-labelledby="heading-19" data-parent="#accordion-2">
    <div class="card-body">

      <!-- YES / NO / OTHERS -->
      <div class="icheck-primary">
        <input type="radio" class="nineteen_status" id="q19_yes" name="is_sex_trafficking_forced_labor_country_19q" value="1" {{ ($question_19_data->q19radioNineteen3_checked_value ?? "1") == "1" ? 'checked' : '' }}>
        <label for="q19_yes">Yes</label>
      </div>
      <div class="icheck-primary">
        <input type="radio" class="nineteen_status" id="q19_no" name="is_sex_trafficking_forced_labor_country_19q" value="0" {{ ($question_19_data->q19radioNineteen3_checked_value ?? "") == "0" ? 'checked' : '' }}>
        <label for="q19_no">No</label>
      </div>
      <div class="icheck-primary input-group mb-3">
        <input type="radio" class="nineteen_status" id="q19_others" name="is_sex_trafficking_forced_labor_country_19q" value="2" {{ ($question_19_data->q19radioNineteen3_checked_value ?? "") == "2" ? 'checked' : '' }}>
        <label for="q19_others">Others</label>
        <span class="col-md-6 mt--4 {{ ($question_19_data->q19radioNineteen3_checked_value ?? "") == "2" ? '' : 'othersText' }}">
          <input type="text" id="q19radioThree3others" class="form-control" placeholder="Others" name="others_sex_trafficking_forced_labor_country_19q" value="{{ $question_19_data->others ?? '' }}">
        </span>
      </div>

      <!-- TABLE SECTION -->
      <div id="nineteen_question_view" class="{{ isset($question_19_data->q19radioNineteen3_checked_value) && in_array($question_19_data->q19radioNineteen3_checked_value, ['0','2']) ? 'd-none':'' }}">
        <table id="addRowq19radioNineteen3" class="table table-bordered text-center">
          <thead>
            <tr>
              <th>Type of VOT</th>
              <th>Men</th>
              <th>Women</th>
              <th>Third Gender</th>
              <th>Total</th>
              <th>Protection Measures</th>
              <th>Preventive Measures</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @php $i = 1; @endphp
            @if(isset($question_19_data->q19radioNineteen3_data))
              @foreach($question_19_data->q19radioNineteen3_data as $q19)
                <tr class="q19radioNineteen3QRow" id="q19row{{$i}}">
                  <td>
                    <select name="type_vot[]" class="form-control type_vot_two">
                      @foreach($type_vot as $key => $val)
                        <option value="{{ $key }}" {{ $q19->type_vot == $key ? 'selected' : '' }}>{{ $val }}</option>
                      @endforeach
                    </select>
                    <input type="text" class="form-control type3Input mt-1" placeholder="Specify Other" value="{{ $q19->type_vot == 3 ? $q19->type_vot_other ?? '' : '' }}">
                  </td>
                  <td><input type="number" name="men_19[]" class="form-control men_19" min="0" value="{{ $q19->men ?? 0 }}"></td>
                  <td><input type="number" name="women_19[]" class="form-control women_19" min="0" value="{{ $q19->women ?? 0 }}"></td>
                  <td><input type="number" name="third_gender_19[]" class="form-control third_gender_19" min="0" value="{{ $q19->third_gender ?? 0 }}"></td>
                  <td><input type="number" name="total_19[]" class="form-control total_19" readonly value="{{ $q19->total ?? 0 }}"></td>
                  <td>
                    <select name="protection_measures_taken[]" class="form-control">
                      <option value="" disabled selected>---Choose---</option>
                      @foreach($protection_measures_taken as $key => $val)
                        <option value="{{ $key }}" {{ isset($q19->protection_measures_taken) && $q19->protection_measures_taken == $key ? 'selected' : '' }}>{{ $val }}</option>
                      @endforeach
                    </select>
                  </td>
                  <td>
                    <select name="preventive_measures_taken[]" class="form-control">
                      <option value="" disabled selected>---Choose---</option>
                      @foreach($preventive_measures_taken as $key => $val)
                        <option value="{{ $key }}" {{ isset($q19->preventive_measures_taken) && $q19->preventive_measures_taken == $key ? 'selected' : '' }}>{{ $val }}</option>
                      @endforeach
                    </select>
                  </td>
                  <td>
                    @if($i == 1)
                      <button type="button" class="btn btn-sm btn-primary" id="addRowDatasq19radioNineteen3">+</button>
                    @else
                      <button type="button" class="btn btn-danger q19radioNineteen3btn_remove">-</button>
                    @endif
                  </td>
                </tr>
                @php $i++; @endphp
              @endforeach
            @else
              <tr class="q19radioNineteen3QRow" id="q19row1">
                <td>
                  <select name="type_vot[]" class="form-control type_vot_two">
                    @foreach($type_vot as $key => $val)
                      <option value="{{ $key }}">{{ $val }}</option>
                    @endforeach
                  </select>
                  <input type="text" class="form-control type3Input mt-1" placeholder="Specify Other">
                </td>
                <td><input type="number" name="men_19[]" class="form-control men_19" min="0" value="0"></td>
                <td><input type="number" name="women_19[]" class="form-control women_19" min="0" value="0"></td>
                <td><input type="number" name="third_gender_19[]" class="form-control third_gender_19" min="0" value="0"></td>
                <td><input type="number" name="total_19[]" class="form-control total_19" readonly value="0"></td>
                <td>
                  <select name="protection_measures_taken[]" class="form-control">
                    <option value="" disabled selected>---Choose---</option>
                    @foreach($protection_measures_taken as $key => $val)
                      <option value="{{ $key }}">{{ $val }}</option>
                    @endforeach
                  </select>
                </td>
                <td>
                  <select name="preventive_measures_taken[]" class="form-control">
                    <option value="" disabled selected>---Choose---</option>
                    @foreach($preventive_measures_taken as $key => $val)
                      <option value="{{ $key }}">{{ $val }}</option>
                    @endforeach
                  </select>
                </td>
                <td><button type="button" class="btn btn-sm btn-primary" id="addRowDatasq19radioNineteen3">+</button></td>
              </tr>
            @endif
          </tbody>
        </table>
      </div>

      <p class="text-right">
        <button type="button" class="btn btn-success" id="temp-save-question19">Save</button>
      </p>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){

  // Toggle Yes/No/Others
  function toggleq19Sections() {
    let val = $("input[name='is_sex_trafficking_forced_labor_country_19q']:checked").val();
    if(val === "1"){ 
      $("#nineteen_question_view").show();
      $(".othersText").hide();
    } else if(val === "2"){ 
      $(".othersText").show();
      $("#nineteen_question_view").hide();
    } else { 
      $("#nineteen_question_view").hide();
      $(".othersText").hide();
    }
  }
  toggleq19Sections();
  $(".nineteen_status").on("change", toggleq19Sections);

  // Show/hide type3Input
  function checkTypeVOT(row){
    if(row.find(".type_vot_two").val() == "3"){
      row.find(".type3Input").show();
    } else {
      row.find(".type3Input").hide().val("");
    }
  }
  $(".q19radioNineteen3QRow").each(function(){ checkTypeVOT($(this)); });
  $(document).on("change",".type_vot_two", function(){ checkTypeVOT($(this).closest("tr")); });

  // Add row
  $(document).on("click","#addRowDatasq19radioNineteen3",function(e){
    e.preventDefault();
    let newRow = $("#addRowq19radioNineteen3 tbody tr:first").clone(true, true);

    newRow.find("input, select").each(function(){
      if($(this).hasClass("type3Input")){
        $(this).val("").hide();
      } else if($(this).attr("type")=="number"){
        $(this).val(0);
      } else {
        $(this).val("");
      }
    });

    let rowCount = $(".q19radioNineteen3QRow").length + 1;
    newRow.attr("id","q19row"+rowCount);

    newRow.find("button")
      .removeClass("btn-primary")
      .addClass("btn-danger q19radioNineteen3btn_remove")
      .text("-");

    $("#addRowq19radioNineteen3 tbody").append(newRow);
  });

  // Remove row
  $(document).on("click",".q19radioNineteen3btn_remove", function(){
    if($(".q19radioNineteen3QRow").length > 1){
      $(this).closest("tr").remove();
      calculateTotals();
    } else {
      alert("At least one row is required.");
    }
  });

  // Auto total calculation
  $(document).on("input", ".men_19, .women_19, .third_gender_19", function(){ calculateTotals(); });
  function calculateTotals(){
    $(".q19radioNineteen3QRow").each(function(){
      let men = parseInt($(this).find(".men_19").val())||0;
      let women = parseInt($(this).find(".women_19").val())||0;
      let third = parseInt($(this).find(".third_gender_19").val())||0;
      $(this).find(".total_19").val(men+women+third);
    });
  }

  // Temp save
  $("#temp-save-question19").click(function(){
    calculateTotals();
    let yes_no_value = $("input[name='is_sex_trafficking_forced_labor_country_19q']:checked").val();
    let tableData = [];
    $(".q19radioNineteen3QRow").each(function(){
      tableData.push({
        type_vot: $(this).find(".type_vot_two").val(),
        type_vot_other: $(this).find(".type3Input").val(),
        men: $(this).find(".men_19").val(),
        women: $(this).find(".women_19").val(),
        third_gender: $(this).find(".third_gender_19").val(),
        total: $(this).find(".total_19").val(),
        protection_measures_taken: $(this).find("select[name='protection_measures_taken[]']").val(),
        preventive_measures_taken: $(this).find("select[name='preventive_measures_taken[]']").val(),
      });
    });

    let saveData = {
      q19radioNineteen3_data: tableData,
      q19radioNineteen3_checked_value: yes_no_value,
      others: $("#q19radioThree3others").val()
    };

    $.ajax({
      url:"/superadmin/case/temp-save-question",
      type:"POST",
      data:{
        _token:"{{ csrf_token() }}",
        question19: saveData,
        question_no:19
      },
      success:function(){
        $('.question19.card-title').css('color','green');
        alert("Question 19 Temp Saved!");
      }
    });
  });

});
</script>
<?php } ?>