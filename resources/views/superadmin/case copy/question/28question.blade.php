<style>
  .visibility {
    display: none;
  }

  .othersText {
    display: none;
  }
</style>

<div class="card question28">

  <?php
  $overall_quality = [];
  ?>


  <?php
  $training_status = [
    1 => "Staff are well trained on trauma informed service",
    2 => "Staff are properly trained on victim centric care",
    3 => "Staff are inadequately trained on trauma informed service",
    4 => "Staff are not trained on trauma informed service",
    5 => 'Staff are inadequately trained on victim centric care',
    6 => 'Staff are not trained on victim centric care'
  ];
  ?>



  <div class="card-header" role="tab" id="heading-4">
    <h6 class="card-title" style="color: {{ isset($question_28_data) ? 'blue' : 'green' }};">
      <a data-toggle="collapse" href="#Question-28" aria-expanded="false"
        aria-controls="collapse-4">
        28.Describe the overall quality of care? Did service providers receive adequate training on providing care to trauma survivors? Did service providers have the knowledge and skills to support victims through a consistent victim-centered approach?
      </a>
    </h6>
  </div>

  <div id="Question-28" class="collapse" role="tabpane28" aria-labelledby="heading-4"
    data-parent="#accordion-2">
    <div class="card-body">
      <div class="icheck-primary">
        <?php if (isset($question_28_data->q28_checked_value)) { ?>
          <input
            type="radio"
            id="radioTwentyEight1"
            class="twentyeightstatus"
            name="is_victim_centered_approach_28q"
            <?= (isset($question_28_data->q28_checked_value) && $question_28_data->q28_checked_value == "1") ? "checked" : ""; ?>
            value="1">
        <?php } else { ?>

          <input type="radio" id="radioTwentyEight1" class="twentyeightstatus" name="is_victim_centered_approach_28q" checked value="1">
        <?php } ?>

        <label for="radioTwentyEight1">
          Yes
        </label>
      </div>
      <div class="icheck-primary">
        <input
          type="radio"
          id="radioTwentyEight2"
          class="twentyeightstatus"
          name="is_victim_centered_approach_28q"
          <?= (isset($question_28_data->q28_checked_value) && $question_28_data->q28_checked_value == "0") ? "checked" : ""; ?>

          value="0">
        <label for="radioTwentyEight2">
          No
        </label>
      </div>
      <div class="icheck-primary icheck-primary input-group">
        <input
          type="radio"
          id="radioTwentyEight3"
          class="twentyeightstatus"
          name="is_victim_centered_approach_28q"
          <?= (isset($question_28_data->q28_checked_value) && $question_28_data->q28_checked_value == "2") ? "checked" : ""; ?>
          value="2">
        <label for="radioTwentyEight3">
          Others
        </label> </label> <span class=" col-md-6 mt--4 <?= (isset($question_28_data->q28_checked_value) && $question_28_data->q28_checked_value == "2") ? "" : "othersText"; ?>">
          <input
            type="text"
            id="q28others"
            placeholder="Others "
            class="form-control "
            value="<?= (isset($question_28_data->others) && $question_1_data->others) ? $question_28_data->others : '' ?>"
            name="others_victim_centered_approach_28q"></span>
      </div>



      <div id="28_question_view" class="<?= (isset($question_28_data->q28_checked_value)   && ($question_28_data->q28_checked_value == '0')) ? 'visibility' : ''; ?>">

        <!-- table  Start -->
        <table id="addRowQ28" class="table table-bordered text-center">

          <thead>
            <tr>
              <th scope="col">Overall Quality of Care</th>
              <th scope="col">Why</th>
              <th>Action</th>


            </tr>
          </thead>
          <tbody>
            <?php if (isset($question_28_data->q28_data) && count($question_28_data->q28_data) > 0) {
              $i = 0; ?>
              @foreach($question_28_data->q28_data as $q28)
              <tr class="qe28NoOfRow" id="row<?= $i; ?>">

                <select name="overall_quality_car[]" id="q28TrainingResponse" class="form-control q28Input">
                  <option value="" disabled selected>---Choose an item--</option>
                  @foreach ($overall_quality as $key => $training)
                  <option <?= (isset($q28)  &&  !empty($q28) && $q28->overall_quality_car == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                  @endforeach
                </select>
                </td>
                <td>
                  <select name="why_q28[]" id="q28TrainingResponse" class="form-control q28Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach ($training_status as $key => $training)
                    <option <?= (isset($q28)  &&  !empty($q28) && $q28->why_q28 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                    @endforeach
                  </select>
                </td>

                <td>
                  <?php if ($i == 0) { ?>
                    <button id="addRowDatasq28" type="button" class="btn btn-sm btn-primary">+</i></button>
                  <?php } else { ?>
                    <button type="button" name="remove" id="<?= $i; ?>" class="btn btn-danger btn_remove cicle">-</button>
                </td>
              <?php
                  } ?>
              </td>

              </tr>
              <?php $i++; ?>
              @endforeach
              <tr>
                <td>How</td>
              </tr>
            <?php } else { ?>
              <!-- test -->
              <tr class="qe28NoOfRow">
                <td>

                  <select name="overall_quality_car[]" id="q28TrainingResponse" class="form-control q28Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach ($overall_quality as $key => $training)
                    <option <?= (isset($q28)  &&  !empty($q28) && $q28->overall_quality_car == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                    @endforeach
                  </select>
                <td>
                  <select name="why_q28[]" id="q28TrainingResponse" class="form-control q28Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach ($training_status as $key => $training)
                    <option value="{{ $key }}">{{ $training }}</option>
                    @endforeach
                  </select>
                </td>
              </tr>





              <!-- test end -->
              <tr class="qe28NoOfRow">
                <td>

                  <input type="text" name="overall_quality_car[]" class="form-control" placeholder="Others Specific">
                </td>
                <td>
                  <select name="why_q28[]" id="q28TrainingResponse" class="form-control q28Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    @foreach ($training_status as $key => $training)
                    <option value="{{ $key }}">{{ $training }}</option>
                    @endforeach
                  </select>
                </td>

                <td><button id="addRowDatasq28" type="button" class="btn btn-sm btn-primary">+</i></button></td>

              </tr>
            <?php } ?>
          </tbody>
        </table>




      </div>
      <br />
      <p class="text-right">
        <button type="button" class="btn btn-success" id="temp-save-question28">Save</button>
      </p>
    </div>
  </div>
</div>


<script type="text/javascript">
  $(document).ready(function() {
    $(".twentyeightstatus").on("click", function() {
      var statusvalue = $("input[name='is_victim_centered_approach_28q']:checked").val();
      $('.question28').find('.othersText').hide()
      $('.question28').find('#q28others').val("")
      if (statusvalue == '1') {
        $('.question28').find('#28_question_view').show()
        $('.question28').find('span').addClass('othersText')
      } else if (statusvalue == "2") {
        $('.question28').find('#28_question_view').hide()
        $('.question28').find('span').removeClass('othersText')
        $('.question28').find('span').show()

      } else {
        $('.question28').find('#28_question_view').hide()
        $('.question28').find('span').addClass('othersText')


      }
    });
  });
</script>
<script type="text/javascript">
  $(function() {
    $("#addRowDatasq28").click(function() {
      let rowCount = $('.qe28NoOfRow').length + 1
      $("#addRowQ28").append(
        '<tr class="qe28NoOfRow" id="row' + rowCount + '">' +
        `<td>
             <input type="text" name="overall_quality_car[]"  class="form-control" placeholder="Others Specific">
        </td>` +
        '<td>' +
        '<select name="why_q28[]" id="q28TrainingResponse" class="form-control q28Input">' +
        '<option value="" disabled selected>---Choose an item--</option>' +
        '<option value="1">Staff are well trained on trauma informed service</option>' +
        '<option value="2">Staff are properly trained on victim centric care </option>' +
        '<option value="3">Staff are inadequately trained on trauma informed service </option>' +
        '<option value="4">Staff are not trained on trauma informed service </option>' +
        '<option value="5">Staff are inadequately trained on victim centric care </option>' +
        '<option value="6">Staff are not trained on victim centric care</option>' +


        '</select>' +
        '</td>' +


        '<td><button type="button" name="remove" id="' + rowCount + '" class="btn btn-danger btn_remove cicle">-</button></td>' +

        '</tr>'
      )
    });
    $(document).on('click', '.btn_remove', function() {
      var button_id = $(this).attr('id');
      $('#row' + button_id + '').remove();
    });

  })
</script>