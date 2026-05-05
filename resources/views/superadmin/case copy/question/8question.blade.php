<?php
if (($questiontitles[7]->status ?? null) == 1) {

?>
    <style>
        .visibility {
            display: none;
        }

        .othersText {
            display: none;
        }
    </style>

    <div class="card question8">
        <div class="card-header" role="tab" id="heading-4">
            <h6 class="card-title" style="color: {{ isset($question_eight_data) ? 'blue' : 'green' }};">
                <a data-toggle="collapse" href="#Question-8" aria-expanded="false"
                    aria-controls="collapse-4">
                    8.{{ $questiontitles[7]->title }}
                </a>
            </h6>
        </div>

        <div id="Question-8" class="collapse" role="tabpane8" aria-labelledby="heading-4"
            data-parent="#accordion-2">
            <div class="card-body">


                <!-- YES -->
                <div class="icheck-primary">
                    <input type="radio" id="radioYes" class="eightstatus"
                        name="is_involved_directly_trafficking_8q"
                        value="1"
                        <?= (!isset($question_eight_data) || $question_eight_data->q8_checked_value == '1') ? 'checked' : '' ?>>



                    <label for="radioYes">Yes</label>
                </div>



                <!-- NO -->
                <div class="icheck-primary">
                    <input type="radio" id="radioNo" class="eightstatus"
                        name="is_involved_directly_trafficking_8q"
                        value="0"
                        <?= (isset($question_eight_data) && $question_eight_data->q8_checked_value == '0') ? 'checked' : '' ?>>
                    <label for="radioNo">No</label>
                </div>

                <!-- OTHERS -->
                <div class="icheck-primary">
                    <input type="radio" id="radioOthers" class="eightstatus"
                        name="is_involved_directly_trafficking_8q"
                        value="2"
                        <?= (isset($question_eight_data) && $question_eight_data->q8_checked_value == '2') ? 'checked' : '' ?>>
                    <label for="radioOthers">Others</label>
                </div>

                <!-- OTHERS INPUT -->
                <div id="others_q8"
                    class="<?= (isset($question_eight_data) && $question_eight_data->q8_checked_value == '2') ? '' : 'visibility' ?>">
                    <input type="text"
                        class="form-control mt-2 q8-others-input"
                        name="others_involved_directly_trafficking_2q"
                        placeholder="Others details"
                        value="<?= isset($question_eight_data->others) ? $question_eight_data->others : '' ?>">
                </div>

                <!-- YES EXTRA INPUT -->
                <div id="yes_extra_q8" class="visibility">
                    <input type="text" class="form-control mt-2 q8-yes-input"
                        placeholder="Provide Yes details"
                        value="{{ $question_eight_data->q8_data->involved_directly_trafficking_title ?? '' }}">
                </div>


            </div>

            <p class="text-right">
                <button type="button" class="btn btn-success" id="temp-save-question8">Save</button>
            </p>
        </div>
    </div>


<?php } ?>
<script type="text/javascript">
    $(document).ready(function() {

        function toggleQ8() {
            let val = $("input[name='is_involved_directly_trafficking_8q']:checked").val();

            // fallback (if somehow nothing checked)
            if (!val) {
                val = '1';
                $('#radioYes').prop('checked', true);
            }

            $('#yes_extra_q8').hide();
            $('#others_q8').hide();

            if (val === '1') {
                $('#yes_extra_q8').show();
            } else if (val === '2') {
                $('#others_q8').show();
            }
        }

        $('.eightstatus').on('change', toggleQ8);

        // 🔥 page load e auto run
        toggleQ8();
    });
</script>

<script>
    $(document).on("click", "#temp-save-question8", function() {

        let checkedValue = $("input[name='is_involved_directly_trafficking_8q']:checked").val();

        let q8_data = {};

        // YES selected
        if (checkedValue == '1') {
            q8_data.involved_directly_trafficking_title = $('.q8-yes-input').val();
        }

        // OTHERS selected
        if (checkedValue == '2') {
            q8_data.others = $('.q8-others-input').val();
        }

        let new_data = {
            q8_checked_value: checkedValue,
            q8_data: q8_data
        };

        $.ajax({
            type: "POST",
            url: "/superadmin/case/temp-save-question",
            data: {
                _token: "{{ csrf_token() }}",
                question_no: 8,
                q8_data: new_data
            },
            success: function(response) {
                alert("Question 8 saved temporarily");
            }
        });
    });
</script>