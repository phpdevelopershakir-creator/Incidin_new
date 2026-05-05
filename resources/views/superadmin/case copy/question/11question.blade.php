<?php
if (($questiontitles[10]->status ?? null) == 1) {

?>
  <style>
    .visibility {
      display: none;
    }

    .othersText {
      display: none;
    }
  </style>

  <div class="card question11">
    <div class="card-header" role="tab" id="heading-11">
      <h6 class="card-title" style="color: {{ isset($question_11_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-11" aria-expanded="false">
          11.{{ $questiontitles[10]->title }} </a>
      </h6>
    </div>

    <div id="Question-11" class="collapse" data-parent="#accordion-2">
      <div class="card-body">

        <!-- YES -->
        <div class="icheck-primary">
          <input type="radio"
            id="q11_yes"
            class="elevenstatus"
            name="is_forced_labor_supply_chains_11q"
            value="1"
            {{ (!isset($question_11_data->q11_checked_value) || $question_11_data->q11_checked_value == 1) ? 'checked' : '' }}>
          <label for="q11_yes">Yes</label>
        </div>

        <!-- NO -->
        <div class="icheck-primary">
          <input type="radio"
            id="q11_no"
            class="elevenstatus"
            name="is_forced_labor_supply_chains_11q"
            value="0"
            {{ (isset($question_11_data->q11_checked_value) && $question_11_data->q11_checked_value == 0) ? 'checked' : '' }}>
          <label for="q11_no">No</label>
        </div>

        <!-- OTHERS -->
        <div class="icheck-primary">
          <input type="radio"
            id="q11_others"
            class="elevenstatus"
            name="is_forced_labor_supply_chains_11q"
            value="2"
            {{ (isset($question_11_data->q11_checked_value) && $question_11_data->q11_checked_value == 2) ? 'checked' : '' }}>
          <label for="q11_others">Others</label>
        </div>

        <!-- ONE COMMON INPUT (Always Visible) -->
        <div class="mt-3">
          <input type="text"
            name="forced_labor_supply_chains_title"
            class="form-control q11-yes-input"
            placeholder="Provide details (for Yes / No / Others)"
            value="{{ $question_11_data->forced_labor_supply_chains_title ?? '' }}">

        </div>

      </div>

      <p class="text-right">
        <button type="button"
          class="btn btn-success"
          id="temp-save-question11">
          Save
        </button>
      </p>
    </div>
  </div>



  <script>
    $(document).on("click", "#temp-save-question11", function() {
      let checkedValue = $("input[name='is_forced_labor_supply_chains_11q']:checked").val();

      if (!checkedValue) {
        alert('Please select Yes / No / Others');
        return;
      }

      let q11_data = {
        forced_labor_supply_chains_title: $('.q11-yes-input').val() || null
      };

      let new_data = {
        q11_checked_value: checkedValue,
        q11_data: q11_data
      };


      $.ajax({
        type: "POST",
        url: "/superadmin/case/temp-save-question",
        data: {
          _token: "{{ csrf_token() }}",
          question_no: 11,
          q11_checked_value: checkedValue,
          forced_labor_supply_chains_title: $('.q11-yes-input').val()
        },
        success: function() {
          alert("Saved");
        }
      });

    });
  </script>
<?php } ?>