<?php
if (($questiontitles[4]->status ?? null) == 1) {

    $q5_checked = $question_5_data->q5_checked_value ?? null;
    $q5_data = $question_5_data->q5_data ?? null;
?>
    <style>
        .visibility {
            display: none;
        }
    </style>

    <div class="card question5">
        <div class="card-header">
            <h6 style="color: {{ isset($question_5_data) ? 'blue' : 'green' }};">
                <a data-toggle="collapse" href="#Question-5" aria-expanded="false"
                    aria-controls="collapse-4">
                    5.{{ $questiontitles[4]->title }}
                </a>
            </h6>
        </div>

        <div id="Question-5" class="collapse" role="tabpane5" aria-labelledby="heading-4"
            data-parent="#accordion-2">
            <div class="card-body">

                <!-- YES -->
                <input type="radio" id="radioYes" class="fivestatus"
                    name="is_complicit_official_q5"
                    value="1"
                    <?= (!$q5_checked || $q5_checked == '1') ? 'checked' : '' ?>>
                <label for="radioYes">Yes</label>

                <!-- NO -->
                <input type="radio" id="radioNo" class="fivestatus"
                    name="is_complicit_official_q5"
                    value="0"
                    <?= ($q5_checked === '0') ? 'checked' : '' ?>>
                <label for="radioNo">No</label>

                <!-- OTHERS -->
                <input type="radio" id="radioOthers" class="fivestatus"
                    name="is_complicit_official_q5"
                    value="2"
                    <?= ($q5_checked === '2') ? 'checked' : '' ?>>
                <label for="radioOthers">Others</label>

                <!-- OTHERS INPUT -->
                <div id="others_q5" class="<?= ($q5_checked === '2') ? '' : 'visibility' ?>">
                    <input type="text"
                        class="form-control mt-2 q5-others-input"
                        placeholder="Others details"
                        value="<?= $q5_data->others ?? '' ?>">
                </div>

                <!-- YES INPUT -->
                <div id="yes_extra_q5" class="<?= ($q5_checked === '1') ? '' : 'visibility' ?>">
                    <input type="text"
                        name="involved_directly_trafficking_title_q5"
                        class="form-control mt-2 q5-yes-input"
                        placeholder="Provide Yes details"
                        value="<?= $q5_data->involved_directly_trafficking_title_q5 ?? '' ?>">
                </div>

            </div>

            <p class="text-right">
                <button type="button" class="btn btn-success" id="temp-save-question5">Save</button>
            </p>
        </div>
    </div>

<?php } ?>
<script>
    $(document).ready(function() {

        function toggleq5() {
            let val = $("input[name='is_complicit_official_q5']:checked").val();

            if (!val) {
                val = '1';
                $('#radioYes').prop('checked', true);
            }

            $('#yes_extra_q5').hide();
            $('#others_q5').hide();

            if (val === '1') {
                $('#yes_extra_q5').show();
            } else if (val === '2') {
                $('#others_q5').show();
            }
        }

        $('.fivestatus').on('change', toggleq5);
        toggleq5();
    });
</script>

<script>
    $(document).on("click", "#temp-save-question5", function() {

        let checkedValue = $("input[name='is_complicit_official_q5']:checked").val();

        let q5_data = {};

        if (checkedValue == '1') {
            q5_data.involved_directly_trafficking_title = $('.q5-yes-input').val();
        }

        if (checkedValue == '2') {
            q5_data.others = $('.q5-others-input').val();
        }

        let new_data = {
            q5_checked_value: checkedValue,
            q5_data: q5_data
        };

        $.ajax({
            type: "POST",
            url: "/superadmin/case/temp-save-question",
            // data: {
            //     _token: "{{ csrf_token() }}",
            //     question_no: 5,
            //     q5_data: new_data
            // },
            data: {
                _token: "{{ csrf_token() }}",
                question_no: 5,
                question5: new_data // ✅ match controller
            },
            success: function(response) {
                if (response) {
                    $('.question5.card-title').css('color', 'blue');
                    alert("Question 5 has been saved temporary")
                } else {
                    alert("Not Saved")
                }
            }
        });
    });
</script>