<?php
if(($questiontitles[1]->status ?? null)==1)
{

  ?>
<style>
  .visibility{
    display:none;
  }
  .othersText{
    display:none;
  }
</style>

<div class="card question2">
        <div class="card-header" role="tab" id="heading-4">
        <h6 class="card-title" style="color: {{ isset($question_2_data) ? 'blue' : 'green' }};">
            <a data-toggle="collapse" href="#Question-2" aria-expanded="false"
              aria-controls="collapse-4">
              2.{{ $questiontitles[1]->title }}
            </a>
          </h6>
        </div>

        <div id="Question-2" class="collapse" role="tabpane2" aria-labelledby="heading-4"
          data-parent="#accordion-2">
            <div class="card-body">
      
         
        <!-- YES -->
<div class="icheck-primary">
  <input type="radio" id="radioYes" class="twostatus"
       name="is_involved_directly_trafficking_2q"
       value="1"
       <?= (!isset($question_2_data) || $question_2_data->q2_checked_value=='1') ? 'checked' : '' ?>>



    <label for="radioYes">Yes</label>
</div>



<!-- NO -->
<div class="icheck-primary">
    <input type="radio" id="radioNo" class="twostatus"
           name="is_involved_directly_trafficking_2q"
           value="0"
           <?= (isset($question_2_data) && $question_2_data->q2_checked_value=='0') ? 'checked' : '' ?>>
    <label for="radioNo">No</label>
</div>

<!-- OTHERS -->
<div class="icheck-primary">
    <input type="radio" id="radioOthers" class="twostatus"
           name="is_involved_directly_trafficking_2q"
           value="2"
           <?= (isset($question_2_data) && $question_2_data->q2_checked_value=='2') ? 'checked' : '' ?>>
    <label for="radioOthers">Others</label>
</div>

<!-- OTHERS INPUT -->
<div id="others_q2"
     class="<?= (isset($question_2_data) && $question_2_data->q2_checked_value=='2') ? '' : 'visibility' ?>">
    <input type="text"
           class="form-control mt-2 q2-others-input"
           name="others_involved_directly_trafficking_2q"
           placeholder="Others details"
             value="<?= isset($question_2_data->others) ? $question_2_data->others : '' ?>">
</div>

<!-- YES EXTRA INPUT -->
 <div id="yes_extra_q2" class="visibility">
        <input type="text" class="form-control mt-2 q2-yes-input"
          placeholder="Provide Yes details"
          value="{{ $question_2_data->q2_data->involved_directly_trafficking_title ?? '' }}">
      </div>

          
        </div>
        
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question2">Save</button>       
          </p>
          </div>
        </div>
     

<?php } ?> 
<script type="text/javascript">
$(document).ready(function () {

    function toggleQ2() {
        let val = $("input[name='is_involved_directly_trafficking_2q']:checked").val();

        // fallback (if somehow nothing checked)
        if (!val) {
            val = '1';
            $('#radioYes').prop('checked', true);
        }

        $('#yes_extra_q2').hide();
        $('#others_q2').hide();

        if (val === '1') {
            $('#yes_extra_q2').show();
        }
        else if (val === '2') {
            $('#others_q2').show();
        }
    }

    $('.twostatus').on('change', toggleQ2);

    // 🔥 page load e auto run
    toggleQ2();
});


</script>

 <script>
$(document).on("click", "#temp-save-question2", function () {

    let checkedValue = $("input[name='is_involved_directly_trafficking_2q']:checked").val();

    let q2_data = {};

    // YES selected
    if (checkedValue == '1') {
        q2_data.involved_directly_trafficking_title = $('.q2-yes-input').val();
    }

    // OTHERS selected
    if (checkedValue == '2') {
        q2_data.others = $('.q2-others-input').val();
    }

    let new_data = {
        q2_checked_value: checkedValue,
        q2_data: q2_data
    };

    $.ajax({
        type: "POST",
        url: "/superadmin/case/temp-save-question",
        data: {
            _token: "{{ csrf_token() }}",
            question_no: 2,
            q2_data: new_data
        },
        success: function (response) {
            alert("Question 2 saved temporarily");
        }
    });
});

</script>



 