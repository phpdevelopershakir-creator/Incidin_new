<?php
if (($questiontitles[13]->status ?? null) == 1) {

?>

  <style>
    .othersText {
      display: none
    }

    .visibility {
      display: none;
    }
  </style>
  <div class="card question63">
    <?php
    $q11_status = [
      1 => "Victim Identification Guidelines of PSD/MoHA",
      2 => "PSHT Act’s Rule on VoT identification",
      3 => "Victim identification checklist of MoSW",
      4 => "VoT identification under NRM of MoHA"

    ];
    ?>
    <div class="card-header" role="tab" id="heading-4">
      <h6 class="card-title" style="color: {{ isset($question_61_data) ? 'blue' : 'black' }};">
        <a data-toggle="collapse" href="#Question-14" aria-expanded="false"
          aria-controls="collapse-4">
          14.{{ $questiontitles[13]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-14" class="collapse" role="tabpane14" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div class="icheck-primary">
          <?php if (isset($question_61_data->q61_checked_value)) { ?>

            <input
              type="radio"
              id="radioSixtyThree1"
              class="sixtythree_status"
              name="is_government_devote_implement_q63"
              <?= (isset($question_61_data->q61_checked_value) && $question_61_data->q61_checked_value == "1") ? "checked" : ""; ?>

              value="1">
          <?php } else { ?>

            <input type="radio" id="radioSixtyThree1" class="sixtythree_status" name="is_government_devote_implement_q63" checked value="1">
          <?php } ?>

          <label for="radioSixtyThree1">
            Yes
          </label>
        </div>
        <div class="icheck-primary">
          <input
            type="radio"
            id="radioSixtyThree2"
            class="sixtythree_status"
            name="is_government_devote_implement_q63"
            <?= (isset($question_61_data->q61_checked_value) && $question_61_data->q61_checked_value == "0") ? "checked" : ""; ?>

            value="0">
          <label for="radioSixtyThree2">
            No
          </label>
        </div>

        <div class="icheck-primary input-group mb-3">
          <input
            type="radio"
            id="radioSixtyThree3"
            class="sixtythree_status"
            name="is_government_devote_implement_q63"
            <?= (isset($question_61_data->q61_checked_value) && $question_61_data->q61_checked_value == "2") ? "checked" : ""; ?>

            value="2">
          <label for="radioSixtyThree3">
            Others
          </label><span class="col-md-6 mt--4 <?= (isset($question_61_data->q61_checked_value) && $question_61_data->q61_checked_value == "2") ? "" : "othersText"; ?>">
            <input
              type="text"
              id="q61others"
              placeholder="Others "
              class="form-control"
              value="<?= (isset($question_61_data->others) && $question_61_data->others) ? $question_61_data->others : "" ?>"

              name="other_government_devote_implement_q63"></span>
        </div>
        <div id="sixtythree_question_view" class="<?= (isset($question_61_data->q61_checked_value)) && ($question_61_data->q61_checked_value == "2" || $question_61_data->q61_checked_value == "0") ? "visibility" : ""; ?>">
          <table class="table table-white table-bordered">
            <thead>
              <tr>
                <th scope="col">Original Document/Approach</th>
                <th scope="col">Description of Change</th>
              </tr>
            </thead>
            <tbody>



              <tr>
                <th scope="row">Victim Identification Guidelines of PSD/MoHA</th>
                <input type="hidden" name="original_approach_q63[]" value="4">
                <td> <select name="description_change_q63[]" id="q11Description4" class="form-control q61Input">
                    <!-- @include('superadmin.case.helper.11change') -->
                    <option value="" selected>---Choose an item--</option>

                    @foreach($q11_status as $key=>$item)
                    <option <?= (isset($question_61_data->q11_data) &&  !empty($question_61_data->q11_data) && $question_61_data->q11_data->q11Description4 == $key) ? 'selected' : ''; ?> value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select></td>
              </tr>
              <tr>
                <th scope="row">PSHT Act’s Rule on VoT identification</th>
                <input type="hidden" name="original_approach_q63[]" value="5">
                <td> <select name="description_change_q63[]" id="q11Description5" class="form-control q61Input">
                    <!-- @include('superadmin.case.helper.11change') -->
                    <option value="" selected>---Choose an item--</option>

                    @foreach($q11_status as $key=>$item)
                    <option <?= (isset($question_61_data->q11_data) &&  !empty($question_61_data->q11_data) && $question_61_data->q11_data->q11Description5 == $key) ? 'selected' : ''; ?> value="{{$key}}">{{$item}}</option>
                    @endforeach

                  </select></td>
              </tr>
              <tr>
                <th scope="row">Victim identification checklist of MoSW</th>
                <input type="hidden" name="original_approach_q63[]" value="6">
                <td> <select name="description_change_q63[]" id="q11Description6" class="form-control q61Input">
                    <!-- @include('superadmin.case.helper.11change') -->
                    <option value="" selected>---Choose an item--</option>

                    @foreach($q11_status as $key=>$item)
                    <option <?= (isset($question_61_data->q11_data) &&  !empty($question_61_data->q11_data) && $question_61_data->q11_data->q11Description6 == $key) ? 'selected' : ''; ?> value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select> </td>
              </tr>
              <tr>
                <th scope="row">VoT identification under NRM of MoHA</th>
                <input type="hidden" name="original_approach_q63[]" value="7">
                <td> <select name="description_change_q63[]" id="q11Description7" class="form-control q61Input">
                    <!-- @include('superadmin.case.helper.11change') -->
                    <option value="" selected>---Choose an item--</option>

                    @foreach($q11_status as $key=>$item)
                    <option <?= (isset($question_61_data->q11_data) &&  !empty($question_61_data->q11_data) && $question_61_data->q11_data->q11Description7 == $key) ? 'selected' : ''; ?> value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select></td>
              </tr>

              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="original_approach_q63[]" id="q11Other1" value="<?= (isset($question_61_data->q11_data->q11Other1)) ? $question_61_data->q11_data->q11Other1 : ""; ?>" class="form-control q61Input" width="100%"> </div>
                </th>
                <td> <select name="description_change_q63[]" id="q11Description8" class="form-control q61Input">
                    <!-- @include('superadmin.case.helper.11change') -->
                    <option value="" selected>---Choose an item--</option>

                    @foreach($q11_status as $key=>$item)
                    <option <?= (isset($question_61_data->q11_data) &&  !empty($question_61_data->q11_data) && $question_61_data->q11_data->q11Description8 == $key) ? 'selected' : ''; ?> value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select> </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="original_approach_q63[]" id="q11Other2" value="<?= (isset($question_61_data->q11_data->q11Other2)) ? $question_61_data->q11_data->q11Other2 : ""; ?>" class="form-control q61Input" width="100%"> </div>
                </th>
                <td> <select name="description_change_q63[]" id="q11Description9" class="form-control q61Input">
                    <!-- @include('superadmin.case.helper.11change') -->
                    <option value="" selected>---Choose an item--</option>

                    @foreach($q11_status as $key=>$item)
                    <option <?= (isset($question_61_data->q11_data) &&  !empty($question_61_data->q11_data) && $question_61_data->q11_data->q11Description9 == $key) ? 'selected' : ''; ?> value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select> </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="original_approach_q63[]" id="q11Other3" value="<?= (isset($question_61_data->q11_data->q11Other3)) ? $question_61_data->q11_data->q11Other3 : ""; ?>" class="form-control q61Input" width="100%"> </div>
                </th>
                <td> <select name="description_change_q63[]" id="q11Description10" class="form-control q61Input">
                    <!-- @include('superadmin.case.helper.11change') -->
                    <option value="" selected>---Choose an item--</option>

                    @foreach($q11_status as $key=>$item)
                    <option <?= (isset($question_61_data->q11_data) &&  !empty($question_61_data->q11_data) && $question_61_data->q11_data->q11Description10 == $key) ? 'selected' : ''; ?> value="{{$key}}">{{$item}}</option>
                    @endforeach
                  </select> </td>
              </tr>

            </tbody>
          </table>
        </div>
        <br />
        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question63">Save</button>
        </p>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {

      $(".sixtythree_status").on("change", function() {

        let statusvalue = $("input[name='is_government_devote_implement_q63']:checked").val();

        // reset
        $('.question63 .othersText').hide();
        $('#q61others').val('');

        if (statusvalue == '1') {
          // YES
          $('#sixtythree_question_view').removeClass('visibility').show();
          $('.question63 span').addClass('othersText').hide();

        } else if (statusvalue == '2') {
          // OTHERS
          $('#sixtythree_question_view').addClass('visibility').hide();
          $('.question63 span').removeClass('othersText').show();

        } else {
          // NO
          $('#sixtythree_question_view').addClass('visibility').hide();
          $('.question63 span').addClass('othersText').hide();
        }
      });

    });
  </script>



  <script>
    $(function() {
      $(document).on("click", '#temp-save-question63', function() {


        let yes_no_value = $("input[type='radio'][name='is_government_devote_implement_q63']:checked").val()

        var q11_data = {}
        if (yes_no_value == "1") {
          $('.q61Input').each(function() {
            Object.assign(q11_data, {
              [$(this).attr('id')]: $(this).val()
            })
          });

        }
        let new_data = {
          q11_data: q11_data,
          q61_checked_value: yes_no_value,
          others: $("input[name='other_government_devote_implement_q63']").val()

        }

        // console.log(new_data)
        $.ajax({ //create an ajax request to display.php
          type: "POST",
          data: {
            "_token": "{{ csrf_token() }}",
            'question63': new_data,
            'question_no': '11'
          },
          url: "/superadmin/case/temp-save-question",
          success: function(response) {
            if (response) {
              alert("Question 63 has been saved temporary")

            } else {
              alert("Not Saved")
            }
          }
        });
      });
    });
  </script>
<?php } ?>