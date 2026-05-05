<?php
if (($questiontitles[43]->status ?? null) == 1) {

?>

  <style>
    .othersText {
      display: none
    }

    .visibility {
      display: none;
    }
  </style>
  <div class="card question44">
    <?php
    $q44_status = [
      1 => "Excess",
      2 => "Adequate",
      3 => "Inadequate",
      4 => "None"

    ];
    ?>
    <div class="card-header" role="tab" id="heading-4">
      <h6 class="card-title" style="color: {{ isset($question_44_data) ? 'blue' : 'black' }};">
        <a data-toggle="collapse" href="#Question-44" aria-expanded="false"
          aria-controls="collapse-4">
          44.{{ $questiontitles[43]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-44" class="collapse" role="tabpane44" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div class="icheck-primary">
          <?php if (isset($question_44_data->q44_checked_value)) { ?>

            <input
              type="radio"
              id="radioFoutyFour1"
              class="fourtyfour_status"
              name="is_awareness_campaigns_research_projects_q44"
              <?= (isset($question_44_data->q44_checked_value) && $question_44_data->q44_checked_value == "1") ? "checked" : ""; ?>

              value="1">
          <?php } else { ?>

            <input type="radio" id="radioFoutyFour1" class="fourtyfour_status" name="is_awareness_campaigns_research_projects_q44" checked value="1">
          <?php } ?>

          <label for="radioFoutyFour1">
            Yes
          </label>
        </div>
        <div class="icheck-primary">

          <input
            type="radio"
            id="radioFourtyFour2"
            class="fourtyfour_status"
            name="is_awareness_campaigns_research_projects_q44"
            <?= (isset($question_44_data->q44_checked_value) && $question_44_data->q44_checked_value == "0") ? "checked" : ""; ?>

            value="0">
          <label for="radioFourtyFour2">
            No
          </label>
        </div>

        <div class="icheck-primary input-group mb-3">
          <input
            type="radio"
            id="radioFourtyFour3"
            class="fourtyfour_status"
            name="is_awareness_campaigns_research_projects_q44"
            <?= (isset($question_44_data->q44_checked_value) && $question_44_data->q44_checked_value == "2") ? "checked" : ""; ?>

            value="2">
          <label for="radioFourtyFour3">
            Others
          </label><span class="col-md-6 mt--4 <?= (isset($question_44_data->q44_checked_value) && $question_44_data->q44_checked_value == "2") ? "" : "othersText"; ?>">
            <input
              type="text"
              id="q44others"
              placeholder="Others "
              class="form-control"
              value="<?= (isset($question_44_data->others) && $question_44_data->others) ? $question_44_data->others : "" ?>"

              name="other_awareness_campaigns_research_projects_q44"></span>
        </div>
        <div id="fourtyfour_question_view" class="<?= (isset($question_44_data->q44_checked_value)) && ($question_44_data->q44_checked_value == "2" || $question_44_data->q44_checked_value == "0") ? "visibility" : ""; ?>">
          <table class="table table-white table-bordered">
            <thead>
              <tr>
                <th scope="col">Type of preventive Action</th>
                <th scope="col">Allocation (in BDT)</th>
              </tr>
            </thead>
            <tbody>



              <tr>
                <th scope="row">Total Allocation under NPA for prevention</th>
                <input type="hidden" name="awareness_campaigns_research_projects_title_q44[]" value="1">
                <td>
                  <input type="text" name="awareness_campaigns_research_projects_status_q44[]" class="form-control">
                </td>
              </tr>
              <tr>
                <th scope="row">Total Allocation utilized under NPA for prevention</th>
                <input type="hidden" name="awareness_campaigns_research_projects_title_q44[]" value="2">
                <td>
                  <input type="text" name="awareness_campaigns_research_projects_status_q44[]" class="form-control">
                </td>
              </tr>
              <tr>
                <th scope="row">Total allocation spent for Awareness activities</th>
                <input type="hidden" name="awareness_campaigns_research_projects_title_q44[]" value="3">
                <td>
                  <input type="text" name="awareness_campaigns_research_projects_status_q44[]" class="form-control">
                </td>
              </tr>
              <tr>
                <th scope="row">Total allocation spent for safety-net</th>
                <input type="hidden" name="awareness_campaigns_research_projects_title_q44[]" value="4">
                <td>
                  <input type="text" name="awareness_campaigns_research_projects_status_q44[]" class="form-control">
                </td>
              </tr>
              <tr>
                <th scope="row">Total allocation spent for training to promote prevention</th>
                <input type="hidden" name="awareness_campaigns_research_projects_title_q44[]" value="5">
                <td>
                  <input type="text" name="awareness_campaigns_research_projects_status_q44[]" class="form-control">
                </td>
              </tr>
              <tr>
                <th scope="row">Assessment of Allocation</th>
                <input type="hidden" name="awareness_campaigns_research_projects_title_q44[]" value="6">
                <td>
                  <select name="awareness_campaigns_research_projects_status_q44[]" id="q44Description" class="form-control q14Input">
                    <!-- @include('superadmin.case.helper.11change') -->
                    <option value="" selected>---Choose an item--</option>

                    @foreach($q44_status as $key=>$item)
                    <option <?= (isset($question_44_data->q44_data) &&  !empty($question_44_data->q44_data) && $question_44_data->q44_data->q44Description == $key) ? 'selected' : ''; ?> value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select>
                </td>
              </tr>





            </tbody>
          </table>
        </div>
        <br />
        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question44">Save</button>
        </p>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {

      $(".fourtyfour_status").on("change", function() {

        let statusvalue = $("input[name='is_awareness_campaigns_research_projects_q44']:checked").val();

        // reset
        $('.question44 .othersText').hide();
        $('#q44others').val('');

        if (statusvalue == '1') {
          // YES
          $('#fourtyfour_question_view').removeClass('visibility').show();
          $('.question44 span').addClass('othersText').hide();

        } else if (statusvalue == '2') {
          // OTHERS
          $('#fourtyfour_question_view').addClass('visibility').hide();
          $('.question44 span').removeClass('othersText').show();

        } else {
          // NO
          $('#fourtyfour_question_view').addClass('visibility').hide();
          $('.question44 span').addClass('othersText').hide();
        }
      });

    });
  </script>



  <script>
    $(function() {
      $(document).on("click", '#temp-save-question44', function() {


        let yes_no_value = $("input[type='radio'][name='is_awareness_campaigns_research_projects_q44']:checked").val()

        var q44_data = {}
        if (yes_no_value == "1") {
          $('.q14Input').each(function() {
            Object.assign(q44_data, {
              [$(this).attr('id')]: $(this).val()
            })
          });

        }
        let new_data = {
          q44_data: q44_data,
          q44_checked_value: yes_no_value,
          others: $("input[name='other_government_devote_implement_q14']").val()

        }

        // console.log(new_data)
        $.ajax({ //create an ajax request to display.php
          type: "POST",
          data: {
            "_token": "{{ csrf_token() }}",
            'question44': new_data,
            'question_no': '44'
          },
          url: "/superadmin/case/temp-save-question",
          success: function(response) {
            if (response) {
              alert("Question 44 has been saved temporary")

            } else {
              alert("Not Saved")
            }
          }
        });
      });
    });
  </script>
<?php } ?>