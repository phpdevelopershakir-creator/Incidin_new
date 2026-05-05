<?php
if (($questiontitles[7]->status ?? null) == 1) {

?>
  <?php
  $q24_status = [
    1 => "Enforced",
    2 => "Updated and enforced",
    3 => "Stricter enforcement",
    4 => "Increased efforts",
    5 => "Moderate Effortt",
    6 => "Less Effort",
    7 => "Poor Enforcement",
    8 => "Under Review",
    9 => "Other (Specify)"
  ];
  ?>
  <style>
    .othersText {
      display: none
    }

    .visibility {
      display: none
    }
  </style>
  <div class="card question8">
    <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0 card-title" style="color: {{ isset($question_8_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-8" aria-expanded="false"
          aria-controls="collapse-4">
          8.{{ $questiontitles[7]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-8" class="collapse" role="tabpane8" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div class="icheck-primary">
          <?php if (isset($question_8_data->q8_checked_value)) { ?>
            <input
              type="radio"
              id="q8radioPrimary1"
              class="eight_status"
              name="is_involved_directly_trafficking_8q"
              <?= (isset($question_8_data->q8_checked_value) && $question_8_data->q8_checked_value == "1") ? "checked" : ""; ?>

              value="1">
          <?php } else { ?>
            <input type="radio" id="q8radioPrimary1" class="eight_status" name="is_involved_directly_trafficking_8q" checked value="1">
          <?php } ?>
          <label for="q8radioPrimary1">
            Yes
          </label>
        </div>
        <div class="icheck-primary">
          <input
            type="radio"
            id="q8radioPrimary2"
            class="eight_status"
            name="is_involved_directly_trafficking_8q"
            <?= (isset($question_8_data->q8_checked_value) && $question_8_data->q8_checked_value == "0") ? "checked" : ""; ?>

            value="0">
          <label for="q8radioPrimary2">
            No
          </label>
        </div>

        <div class="icheck-primary input-group mb-3">
          <input
            type="radio"
            id="q8radioPrimary3"
            class="eight_status"
            name="is_involved_directly_trafficking_8q"
            <?= (isset($question_8_data->q8_checked_value) && $question_8_data->q8_checked_value == "2") ? "checked" : ""; ?>

            value="2">
          <label for="q8radioPrimary3">
            Others
          </label><span class=" col-md-6 mt--4 <?= (isset($question_8_data->q8_checked_value) && $question_8_data->q8_checked_value == "2") ? "" : "othersText"; ?>" style="margin-top:-8px;">
            <input
              type="text"
              id="q8others"
              placeholder="Others "
              class="form-control"
              value="<?= (isset($question_8_data->others) && $question_8_data->others) ? $question_8_data->others : ""; ?>"

              name="other_involved_directly_trafficking_8q"></span>
        </div>
        <div id="8_question_view" class="<?= (isset($question_8_data->q8_checked_value)) && ($question_8_data->q8_checked_value == "2" || $question_8_data->q8_checked_value == "0") ? "visibility" : ""; ?>">
          <table class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th rowspan="2" style="text-align: center; vertical-align: middle;">Ministry/Department Municipality body</th>
                <!-- <th rowspan="2">Description of change/Status</th> -->
                <th colspan="4">Measures Taken</th>

              </tr>
              <tr>
                <th>Investigation (numbwer)</th>
                <th>Prosecution (number)</th>
                <th>Conviction or Sentencing (number)</th>
                <th>Administrative Measures (numbwer)</th>

              </tr>
              <?php for ($i = 1; $i <= 4; $i++) { ?>
                <tr>
                  <td>
                    <input type="text" name="official_title_q8[]" id="q8Title<?= $i ?>"
                      class="form-control q8Input"
                      value="<?= $question_8_data->q8_data->{'q8Title' . $i} ?? '' ?>">
                  </td>

                  <td>
                    <input type="number" name="official_investigation_q8[]" id="q8Men<?= $i ?>"
                      value="<?= $question_8_data->q8_data->{'q8Men' . $i} ?? '' ?>"
                      class="form-control question8RowMen q8Input" min="0">
                  </td>

                  <td>
                    <input type="number" name="official_prosecution_q8[]" id="q8Women<?= $i ?>"
                      value="<?= $question_8_data->q8_data->{'q8Women' . $i} ?? '' ?>"
                      class="form-control question8RowWomen q8Input" min="0">
                  </td>

                  <td>
                    <input type="number" name="official_conviction_q8[]" id="q8Boy<?= $i ?>"
                      value="<?= $question_8_data->q8_data->{'q8Boy' . $i} ?? '' ?>"
                      class="form-control question8RowBoys q8Input" min="0">
                  </td>

                  <td>
                    <input type="number" name="official_administrative_q8[]" id="q8Girl<?= $i ?>"
                      value="<?= $question_8_data->q8_data->{'q8Girl' . $i} ?? '' ?>"
                      class="form-control question8RowGirls q8Input" min="0">
                  </td>
                </tr>
              <?php } ?>



              <tr>

                <td>Total</td>
                <td><input type="number" id="q8MenTotal" value="<?= (isset($question_8_data->q8_data->q8MenTotal)) ? $question_8_data->q8_data->q8MenTotal : ""; ?>" class="form-control q8gTotal q8Input" readonly="true"></td>
                <td><input type="number" id="q8WomenTotal" value="<?= (isset($question_8_data->q8_data->q8WomenTotal)) ? $question_8_data->q8_data->q8WomenTotal : ""; ?>" class="form-control q8gTotal q8Input" readonly="true"></td>
                <td><input type="number" id="q8BoysTotal" value="<?= (isset($question_8_data->q8_data->q8BoysTotal)) ? $question_8_data->q8_data->q8BoysTotal : ""; ?>" class="form-control q8gTotal q8Input" readonly="true"></td>
                <td><input type="number" id="q8GirlsTotal" value="<?= (isset($question_8_data->q8_data->q8GirlsTotal)) ? $question_8_data->q8_data->q8GirlsTotal : ""; ?>" class="form-control q8gTotal q8Input" readonly="true"></td>

              </tr>
            </thead>


          </table>
        </div>
        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question8">Save</button>
        </p>

      </div>
    </div>
  </div>
<?php } ?>

<script>
  $(document).on("input", ".q8Input", function() {

    let men = 0,
      women = 0,
      boys = 0,
      girls = 0;

    $(".question8RowMen").each(function() {
      men += parseInt($(this).val()) || 0;
    });

    $(".question8RowWomen").each(function() {
      women += parseInt($(this).val()) || 0;
    });

    $(".question8RowBoys").each(function() {
      boys += parseInt($(this).val()) || 0;
    });

    $(".question8RowGirls").each(function() {
      girls += parseInt($(this).val()) || 0;
    });

    $("#q8MenTotal").val(men);
    $("#q8WomenTotal").val(women);
    $("#q8BoysTotal").val(boys);
    $("#q8GirlsTotal").val(girls);
  });
</script>
<script>
  $(document).ready(function() {
    $(".eight_status").on("click", function() {
      // alert($("input[class*='eight_status']:checked").val()) // using attr (class name)
      // $("input[name='is_involved_directly_trafficking_8q']:checked").val() // using attr (name) 

      var statusvalue = $("input.eight_status:checked").val();
      // alert(statusvalue)
      $('.question8').find('.othersText').hide()
      $('.question8').find('#q8others').val("")
      if (statusvalue == '1') {
        $('.question8').find('#8_question_view').show()
        $('.question8').find('span').addClass('othersText')
      } else if (statusvalue == "2") {
        $('.question8').find('#8_question_view').hide()
        $('.question8').find('span').removeClass('othersText')
        $('.question8').find('span').show()
      } else {
        $('.question8').find('#8_question_view').hide()
        $('.question8').find('span').addClass('othersText')

      }
    });


  });
</script>

<script>
  $(document).on("click", '#temp-save-question8', function() {

    let yes_no_value = $("input.eight_status:checked").val();

    var q8_data = {}
    if (yes_no_value == "1") {
      $('.q8Input').each(function() {
        Object.assign(q8_data, {
          [$(this).attr('id')]: $(this).val()
        })
      });

    }
    let new_data = {
      q8_data: q8_data,
      q8_checked_value: yes_no_value,
      others: $("input[name='other_involved_directly_trafficking_8q']").val()

    }






    $.ajax({
      type: "POST",
      url: "/superadmin/case/temp-save-question",
      data: JSON.stringify({
        _token: "{{ csrf_token() }}",
        question8: new_data,
        question_no: '8'
      }),
      contentType: "application/json",
      success: function(response) {
        console.log(response);

        if (response.status == 200) {
          alert("Question 8 saved");
        } else {
          alert("Question 8 saved");
        }
      },
      error: function(err) {
        console.log(err);
      }
    });

  });
</script>