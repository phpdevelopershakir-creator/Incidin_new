<?php
if (($questiontitles[22]->status ?? null) == 1) {

?>
  <style>
    .visibility {
      display: none;
    }

    .othersText {
      display: none;
    }
  </style>

  <div class="card question23">
    <div class="card-header" role="tab" id="heading-4">
      <h6 class="card-title" style="color: {{ isset($question_23_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-23" aria-expanded="false"
          aria-controls="collapse-4">
          23.{{ $questiontitles[22]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-23" class="collapse" role="tabpane23" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">


        <!-- YES -->
        <div class="icheck-primary">
          <input type="radio" id="radioYes" class="twentythreestatus"
            name="is_involved_directly_trafficking_23q"
            value="1"
            <?= (!isset($question_23_data) || $question_23_data->q23_checked_value == '1') ? 'checked' : '' ?>>



          <label for="radioYes">Yes</label>
        </div>



        <!-- NO -->
        <div class="icheck-primary">
          <input type="radio" id="radioNo" class="twentythreestatus"
            name="is_involved_directly_trafficking_23q"
            value="0"
            <?= (isset($question_23_data) && $question_23_data->q23_checked_value == '0') ? 'checked' : '' ?>>
          <label for="radioNo">No</label>
        </div>

        <!-- OTHERS -->
        <div class="icheck-primary">
          <input type="radio" id="radioOthers" class="twentythreestatus"
            name="is_involved_directly_trafficking_23q"
            value="2"
            <?= (isset($question_23_data) && $question_23_data->q23_checked_value == '2') ? 'checked' : '' ?>>
          <label for="radioOthers">Others</label>
        </div>

        <!-- OTHERS INPUT -->
        <div id="others_q23"
          class="<?= (isset($question_23_data) && $question_23_data->q23_checked_value == '2') ? '' : 'visibility' ?>">
          <div class="row">
            <div class="col-md-6">
              <input type="text"
                class="form-control mt-2 q23-others-input"
                name="others_involved_directly_trafficking_2q"
                placeholder="Others details"
                value="<?= isset($question_23_data->others) ? $question_23_data->others : '' ?>">
            </div>
            <div class="col-md-6">
              <input type="file" class="form-control mt-2">
            </div>
          </div>
        </div>

        <!-- YES EXTRA INPUT -->

        <div id="yes_extra_q23" class="visibility">
          <div class="row">
            <div class="col-md-6">
              <input type="text"
                class="form-control mt-2 q23-yes-input"
                placeholder="Provide Yes details"
                value="{{ $question_23_data->q23_data->involved_directly_trafficking_title ?? '' }}">
            </div>

            <div class="col-md-6">
              <input type="file" class="form-control mt-2">
            </div>
          </div>
        </div>


      </div>

      <p class="text-right">
        <button type="button" class="btn btn-success" id="temp-save-question23">Save</button>
      </p>
    </div>
  </div>


<?php } ?>
<script type="text/javascript">
  $(document).ready(function() {

    function toggleQ23() {
      let val = $("input[name='is_involved_directly_trafficking_23q']:checked").val();

      // fallback (if somehow nothing checked)
      if (!val) {
        val = '1';
        $('#radioYes').prop('checked', true);
      }

      $('#yes_extra_q23').hide();
      $('#others_q23').hide();

      if (val === '1') {
        $('#yes_extra_q23').show();
      } else if (val === '2') {
        $('#others_q23').show();
      }
    }

    $('.twentythreestatus').on('change', toggleQ23);

    // 🔥 page load e auto run
    toggleQ23();
  });
</script>

<script>
  $(document).on("click", "#temp-save-question23", function() {

    let checkedValue = $("input[name='is_involved_directly_trafficking_23q']:checked").val();

    let q23_data = {};

    // YES selected
    if (checkedValue == '1') {
      q23_data.involved_directly_trafficking_title = $('.q23-yes-input').val();
    }

    // OTHERS selected
    if (checkedValue == '2') {
      q23_data.others = $('.q23-others-input').val();
    }

    let new_data = {
      q23_checked_value: checkedValue,
      q23_data: q23_data
    };

    $.ajax({
      type: "POST",
      url: "/superadmin/case/temp-save-question",
      data: {
        _token: "{{ csrf_token() }}",
        question_no: 23,
        q23_data: new_data
      },
      success: function(response) {
        alert("Question 23 saved temporarily");
      }
    });
  });
</script>