<?php
if (($questiontitles[23]->status ?? null) == 1) {

?>
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
    $protection_Lists = [
      1 => "Economic Support/Asset Transfer",
      2 => "Micro Credit",
      3 => "Livelihood Training",
      4 => "Job Placement",
      5 => "Health Care",
      6 => "Psychosocial Care",
      7 => "Shelter",
      8 => "Social Safetynet",
      9 => "Information Support",
      10 => "Mainstream Education",
      11 => "Non Formal Education",
      12 => "Technical Education",
      13 => "Life Skill",
      14 => "Family Reunion",
      15 => "Referral"
    ];
    ?>

    <?php
    $protection_qualites = [
      1 => "Excellent",
      2 => "As per Standard",
      3 => "Below Standard"
    ];
    ?>
    <?php
    $protection_coverages = [
      1 => "Excess",
      2 => "Adequate",
      3 => "Inadequate",
      4 => "None"
    ];
    ?>
    <?php
    $protection_locations = [
      1 => "Barishal",
      2 => "Chattogram",
      3 => "Dhaka",
      4 => "Khulna",
      5 => "Mymensingh",
      6 => "Rajshahi",
      7 => "Rangpur",
      8 => "Sylhet",
      9 => "National"
    ];
    ?>

    <div class="card-header" role="tab" id="heading-4">

      <h6 class="card-title" style="color: {{ isset($question_24_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-24" aria-expanded="false"
          aria-controls="collapse-4">
          24.{{ $questiontitles[23]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-24" class="collapse" role="tabpane24" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div class="icheck-primary">
          <?php if (isset($question_24_data->q24_checked_value)) { ?>
            <input
              type="radio"
              id="radioTwentyFour1"
              class="twentyfourstatus"
              name="is_specialized_trafficking_victims_q24"
              <?= (isset($question_24_data->q24_checked_value) && $question_24_data->q24_checked_value == "1") ? "checked" : ""; ?>
              value="1">
          <?php } else { ?>

            <input type="radio" id="radioTwentyFour1" class="twentyfourstatus" name="is_specialized_trafficking_victims_q24" checked value="1">
          <?php } ?>

          <label for="radioTwentyFour1">
            Yes
          </label>
        </div>
        <div class="icheck-primary">
          <input
            type="radio"
            id="radioTwentyFour2"
            class="twentyfourstatus"
            name="is_specialized_trafficking_victims_q24"
            <?= (isset($question_24_data->q24_checked_value) && $question_24_data->q24_checked_value == "0") ? "checked" : ""; ?>

            value="0">
          <label for="radioTwentyFour2">
            No
          </label>
        </div>
        <div class="icheck-primary icheck-primary input-group">
          <input
            type="radio"
            id="radioTwentyFour3"
            class="twentyfourstatus"
            name="is_specialized_trafficking_victims_q24"
            <?= (isset($question_24_data->q24_checked_value) && $question_24_data->q24_checked_value == "2") ? "checked" : ""; ?>
            value="2">
          <label for="radioTwentyFour3">
            Others
          </label> </label> <span class=" col-md-6 mt--4 <?= (isset($question_24_data->q24_checked_value) && $question_24_data->q24_checked_value == "2") ? "" : "othersText"; ?>">
            <input
              type="text"
              id="q24others"
              placeholder="Others "
              class="form-control "
              value="<?= (isset($question_24_data->others) && $question_1_data->others) ? $question_24_data->others : '' ?>"
              name="other_specialized_trafficking_victims_q24"></span>
        </div>



        <div id="24_question_view" class="<?= (isset($question_24_data->q24_checked_value)   && ($question_24_data->q24_checked_value == '0')) ? 'visibility' : ''; ?>">

          <!-- table  Start -->
          <table id="addRowQ28" class="table table-bordered text-center">

            <thead>
              <tr>
                <th rowspan="2">Protection Services</th>
                <th rowspan="2">Quality</th>
                <th colspan="6">Quality of Current Coverage</th>
                <th rowspan="2">Location</th>
                <th>Action</th>
              </tr>
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>TG</th>
                <th>Boy</th>
                <th>Girl</th>
                <th>Total</th>

              </tr>
            </thead>
            <tbody>
              <?php if (isset($question_24_data->q28_data) && count($question_24_data->q28_data) > 0) {
                $i = 0; ?>
                @foreach($question_24_data->q28_data as $q28)
                <tr class="qe24NoOfRow" id="row<?= $i; ?>">
                  <td>
                    <select name="specialized_trafficking_victims_protection_q24[]" id="q28TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($protection_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->specialized_trafficking_victims_protection_q24 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>
                  <td>
                    <select name="specialized_trafficking_victims_quality_q24[]" id="q28TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($protection_qualites as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->specialized_trafficking_victims_quality_q24 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>



                  <td>
                    <input type="number" name="specialized_trafficking_victims_men_q24[]" class="form-control specialized_trafficking_victims_men_q24">
                  </td>



                  <td>
                    <input type="number" name="specialized_trafficking_victims_women_q24[]" class="form-control specialized_trafficking_victims_women_q24">
                  </td>
                  <td>
                    <input type="number" name="specialized_trafficking_victims_tg_q24[]" class="form-control specialized_trafficking_victims_tg_q24">

                  </td>


                  <td>
                    <input type="number" name="specialized_trafficking_victims_boy_q24[]" class="form-control specialized_trafficking_victims_boy_q24">

                  </td>
                  <td>
                    <input type="number" name="specialized_trafficking_victims_girl_q24[]" class="form-control specialized_trafficking_victims_girl_q24">

                  </td>

                  <td><input type="text" name="specialized_trafficking_victims_total_q24[]" class="form-control specialized_trafficking_victims_total_q24" readonly></td>


                  <td scope="col">
                    <select name="specialized_trafficking_victims_location_q24[][]" id="" class="form-control q9Input multiSelect" multiple="multiple">
                      @include('superadmin.case.helper.location')
                    </select>
                  </td>




                  <td>
                    <?php if ($i == 0) { ?>
                      <button id="addRowDatasq24" type="button" class="btn btn-sm btn-primary">+</i></button>
                    <?php } else { ?>
                      <button type="button" name="remove" id="<?= $i; ?>" class="btn btn-danger btn_remove cicle">-</button>
                  </td>
                <?php
                    } ?>
                </td>

                </tr>
                <?php $i++; ?>
                @endforeach

              <?php } else { ?>
                <!-- test -->
                <tr class="qe24NoOfRow">
                  <td>
                    <select name="specialized_trafficking_victims_protection_q24[]" id="q28TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($protection_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->specialized_trafficking_victims_protection_q24 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>


                  <td>
                    <select name="specialized_trafficking_victims_quality_q24[]" id="q28TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($protection_qualites as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->specialized_trafficking_victims_quality_q24 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>
                  <td>

                    <input type="number" name="specialized_trafficking_victims_men_q24[]" class="form-control specialized_trafficking_victims_men_q24">


                  </td>

                  <td>
                    <input type="number" name="specialized_trafficking_victims_women_q24[]" class="form-control specialized_trafficking_victims_women_q24">

                  </td>

                  <td>
                    <input type="number" name="specialized_trafficking_victims_tg_q24[]" class="form-control specialized_trafficking_victims_tg_q24">

                  </td>

                  <td>
                    <input type="number" name="specialized_trafficking_victims_boy_q24[]" class="form-control specialized_trafficking_victims_boy_q24">

                  </td>
                  <td>
                    <input type="number" name="specialized_trafficking_victims_girl_q24[]" class="form-control specialized_trafficking_victims_girl_q24">

                  </td>

                  <td><input type="text" name="specialized_trafficking_victims_total_q24[]" class="form-control specialized_trafficking_victims_total_q24" readonly></td>
                  <td scope="col">
                    <select name="specialized_trafficking_victims_location_q24[][]" id="" class="form-control q9Input multiSelect" multiple="multiple">
                      @include('superadmin.case.helper.location')
                    </select>
                  </td>



                </tr>

                <tr class="qe24NoOfRow">
                  <td>
                    <select name="specialized_trafficking_victims_protection_q24[]" id="q28TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($protection_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->specialized_trafficking_victims_protection_q24 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>


                  <td>
                    <select name="specialized_trafficking_victims_quality_q24[]" id="q28TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($protection_qualites as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->specialized_trafficking_victims_quality_q24 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>
                  <td>
                    <input type="number" name="specialized_trafficking_victims_men_q24[]" class="form-control specialized_trafficking_victims_men_q24">

                  </td>

                  <td>
                    <input type="number" name="specialized_trafficking_victims_women_q24[]" class="form-control specialized_trafficking_victims_women_q24">

                  </td>

                  <td>
                    <input type="number" name="specialized_trafficking_victims_tg_q24[]" class="form-control specialized_trafficking_victims_tg_q24">

                  </td>

                  <td>
                    <input type="number" name="specialized_trafficking_victims_boy_q24[]" class="form-control specialized_trafficking_victims_boy_q24">

                  </td>
                  <td>
                    <input type="number" name="specialized_trafficking_victims_girl_q24[]" class="form-control specialized_trafficking_victims_girl_q24">

                  </td>

                  <td><input type="text" name="specialized_trafficking_victims_total_q24[]" class="form-control specialized_trafficking_victims_total_q24" readonly></td>
                  <td scope="col">
                    <select name="specialized_trafficking_victims_location_q24[][]" id="" class="form-control q9Input multiSelect" multiple="multiple">
                      @include('superadmin.case.helper.location')
                    </select>
                  </td>




                </tr>

                <tr class="qe24NoOfRow">
                  <td>
                    <select name="specialized_trafficking_victims_protection_q24[]" id="q28TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($protection_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->specialized_trafficking_victims_protection_q24 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>


                  <td>
                    <select name="specialized_trafficking_victims_quality_q24[]" id="q28TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($protection_qualites as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->specialized_trafficking_victims_quality_q24 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>
                  <td>
                    <input type="number" name="specialized_trafficking_victims_men_q24[]" class="form-control specialized_trafficking_victims_men_q24">

                  </td>

                  <td>
                    <input type="number" name="specialized_trafficking_victims_women_q24[]" class="form-control specialized_trafficking_victims_women_q24">

                  </td>

                  <td>
                    <input type="number" name="specialized_trafficking_victims_tg_q24[]" class="form-control specialized_trafficking_victims_tg_q24">

                  </td>

                  <td>
                    <input type="number" name="specialized_trafficking_victims_boy_q24[]" class="form-control specialized_trafficking_victims_boy_q24">

                  </td>
                  <td>
                    <input type="number" name="specialized_trafficking_victims_girl_q24[]" class="form-control specialized_trafficking_victims_girl_q24">

                  </td>

                  <td><input type="text" name="specialized_trafficking_victims_total_q24[]" class="form-control specialized_trafficking_victims_total_q24" readonly></td>
                  <td scope="col">
                    <select name="specialized_trafficking_victims_location_q24[][]" id="" class="form-control q9Input multiSelect" multiple="multiple">
                      @include('superadmin.case.helper.location')
                    </select>
                  </td>

                </tr>







                <!-- test end -->
                <tr class="qe24NoOfRow">
                  <td>
                    <select name="specialized_trafficking_victims_protection_q24[]" id="q28TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($protection_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->specialized_trafficking_victims_protection_q24 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>


                  <td>
                    <select name="specialized_trafficking_victims_quality_q24[]" id="q28TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($protection_qualites as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->specialized_trafficking_victims_quality_q24 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  </td>
                  <td>
                    <input type="number" name="specialized_trafficking_victims_men_q24[]" class="form-control specialized_trafficking_victims_men_q24">

                  </td>

                  <td>
                    <input type="number" name="specialized_trafficking_victims_women_q24[]" class="form-control specialized_trafficking_victims_women_q24">

                  </td>

                  <td>
                    <input type="number" name="specialized_trafficking_victims_tg_q24[]" class="form-control specialized_trafficking_victims_tg_q24">

                  </td>

                  <td>
                    <input type="number" name="specialized_trafficking_victims_boy_q24[]" class="form-control specialized_trafficking_victims_boy_q24">

                  </td>
                  <td>
                    <input type="number" name="specialized_trafficking_victims_girl_q24[]" class="form-control specialized_trafficking_victims_girl_q24">

                  </td>

                  <td><input type="text" name="specialized_trafficking_victims_total_q24[]" class="form-control specialized_trafficking_victims_total_q24" readonly></td>
                  <td scope="col">
                    <select name="specialized_trafficking_victims_location_q24[][]" id="" class="form-control q9Input multiSelect" multiple="multiple">
                      @include('superadmin.case.helper.location')
                    </select>
                  </td>

                  <td><button id="addRowDatasq24" type="button" class="btn btn-sm btn-primary">+</i></button></td>

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
      $(".twentyfourstatus").on("click", function() {
        var statusvalue = $("input[name='is_specialized_trafficking_victims_q24']:checked").val();
        $('.question28').find('.othersText').hide()
        $('.question28').find('#q24others').val("")
        if (statusvalue == '1') {
          $('.question28').find('#24_question_view').show()
          $('.question28').find('span').addClass('othersText')
        } else if (statusvalue == "2") {
          $('.question28').find('#24_question_view').hide()
          $('.question28').find('span').removeClass('othersText')
          $('.question28').find('span').show()

        } else {
          $('.question28').find('#24_question_view').hide()
          $('.question28').find('span').addClass('othersText')


        }
      });
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $("#addRowDatasq24").click(function() {
        let rowCount = $('.qe24NoOfRow').length + 1
        $("#addRowQ28").append(
          '<tr class="qe24NoOfRow" id="row' + rowCount + '">' +
          `<td>
            
                    <select name="specialized_trafficking_victims_protection_q24[]" id="q28TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($protection_Lists as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->specialized_trafficking_victims_protection_q24 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
                  
        </td>` +
          `<td>
             <select name="specialized_trafficking_victims_quality_q24[]" id="q28TrainingResponse" class="form-control q10Input">
                      <option value="" disabled selected>---Choose an item--</option>
                      @foreach ($protection_qualites as $key => $training)
                      <option <?= (isset($q10)  &&  !empty($q10) && $q10->specialized_trafficking_victims_quality_q24 == $key) ? 'selected' : ''; ?> value="{{ $key }}">{{ $training }}</option>
                      @endforeach
                    </select>
        </td>` +
          `<td>
             <input type="number" name="specialized_trafficking_victims_men_q24[]" class="form-control specialized_trafficking_victims_men_q24">
        
        </td>` +
          `<td>
             <input type="number" name="specialized_trafficking_victims_women_q24[]" class="form-control specialized_trafficking_victims_women_q24">
           
        </td>` +
          `<td>
            <input type="number" name="specialized_trafficking_victims_tg_q24[]" class="form-control specialized_trafficking_victims_tg_q24">
             
        </td>` +
          `<td>
           <input type="number" name="specialized_trafficking_victims_boy_q24[]" class="form-control specialized_trafficking_victims_boy_q24">
             
        </td>` +
          `<td>
            <input type="number" name="specialized_trafficking_victims_girl_q24[]" class="form-control specialized_trafficking_victims_girl_q24">
            
        </td>` +
          `<td>
             <input type="text" name="specialized_trafficking_victims_total_q24[]"  class="form-control specialized_trafficking_victims_total_q24" readonly>
        </td>` +
          `<td scope="col">
                    <select name="specialized_trafficking_victims_location_q24[][]" id="" class="form-control q9Input  multiSelect" multiple="multiple">
                      @include('superadmin.case.helper.location')
                    </select>
                 
        </td>` +



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


  <script>
    $(document).on('input',
      '.specialized_trafficking_victims_men_q24, \
   .specialized_trafficking_victims_women_q24, \
   .specialized_trafficking_victims_tg_q24, \
   .specialized_trafficking_victims_boy_q24, \
   .specialized_trafficking_victims_girl_q24',
      function() {

        let row = $(this).closest('tr');

        let men = parseFloat(row.find('.specialized_trafficking_victims_men_q24').val()) || 0;
        let women = parseFloat(row.find('.specialized_trafficking_victims_women_q24').val()) || 0;
        let tg = parseFloat(row.find('.specialized_trafficking_victims_tg_q24').val()) || 0;
        let boy = parseFloat(row.find('.specialized_trafficking_victims_boy_q24').val()) || 0;
        let girl = parseFloat(row.find('.specialized_trafficking_victims_girl_q24').val()) || 0;

        let total = men + women + tg + boy + girl;

        row.find('.specialized_trafficking_victims_total_q24').val(total);
      });
  </script>


<?php } ?>