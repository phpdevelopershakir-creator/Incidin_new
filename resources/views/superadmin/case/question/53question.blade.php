<?php
if (($questiontitles[54]->status ?? null) == 1) {

?>
  <style>
    .visibility {
      display: none;
    }

    .othersText {
      display: none;
    }
  </style>

  <div class="card question53">


    <div class="card-header" role="tab" id="heading-4">

      <h6 class="card-title" style="color: {{ isset($question_53_data) ? 'blue' : 'green' }};">
        <a data-toggle="collapse" href="#Question-53" aria-expanded="false"
          aria-controls="collapse-4">
          53.{{ $questiontitles[52]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-53" class="collapse" role="tabpane53" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div class="icheck-primary">
          <?php if (isset($question_53_data->q53_checked_value)) { ?>
            <input
              type="radio"
              id="radioFiftyThree1"
              class="fiftythreestatus"
              name="is_government_train_diplomat_q53"
              <?= (isset($question_53_data->q53_checked_value) && $question_53_data->q53_checked_value == "1") ? "checked" : ""; ?>
              value="1">
          <?php } else { ?>

            <input type="radio" id="radioFiftyThree1" class="fiftythreestatus" name="is_government_train_diplomat_q53" checked value="1">
          <?php } ?>

          <label for="radioFiftyThree1">
            Yes
          </label>
        </div>
        <div class="icheck-primary">
          <input
            type="radio"
            id="radioFiftyThree2"
            class="fiftythreestatus"
            name="is_government_train_diplomat_q53"
            <?= (isset($question_53_data->q53_checked_value) && $question_53_data->q53_checked_value == "0") ? "checked" : ""; ?>

            value="0">
          <label for="radioFiftyThree2">
            No
          </label>
        </div>
        <div class="icheck-primary icheck-primary input-group">
          <input
            type="radio"
            id="radioFiftyThree3"
            class="fiftythreestatus"
            name="is_government_train_diplomat_q53"
            <?= (isset($question_53_data->q53_checked_value) && $question_53_data->q53_checked_value == "2") ? "checked" : ""; ?>
            value="2">
          <label for="radioFiftyThree3">
            Others
          </label> </label> <span class=" col-md-6 mt--4 <?= (isset($question_53_data->q53_checked_value) && $question_53_data->q53_checked_value == "2") ? "" : "othersText"; ?>">
            <input
              type="text"
              id="q28others"
              placeholder="Others "
              class="form-control "
              value="<?= (isset($question_53_data->others) && $question_1_data->others) ? $question_53_data->others : '' ?>"
              name="other_government_train_diplomat_q53"></span>
        </div>



        <div id="53_question_view" class="<?= (isset($question_53_data->q53_checked_value)   && ($question_53_data->q53_checked_value == '0')) ? 'visibility' : ''; ?>">

          <!-- table  Start -->
          <table id="addRowQ53" class="table table-bordered text-center">

            <thead>
              <tr>
                <th rowspan="2">Category of Trainee</th>
                <th colspan="4">Coverage of Training</th>
                <th>Action</th>
              </tr>
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>TG</th>
                <th>Total</th>

              </tr>
            </thead>
            <tbody>
              <?php if (isset($question_53_data->q28_data) && count($question_53_data->q28_data) > 0) {
                $i = 0; ?>
                @foreach($question_53_data->q28_data as $q28)
                <tr class="qe53NoOfRow" id="row<?= $i; ?>">
                  <td>

                    <input type="text" name="government_title_q53[]" class="form-control government_title_q53">
                  </td>

                  <td><input type="text" name="government_men_q53[]" class="form-control government_men_q53"></td>


                  <td><input type="text" name="government_women_q53[]" class="form-control government_women_q53"></td>


                  <td><input type="text" name="government_tg_q53[]" class="form-control government_tg_q53"></td>


                  <td><input type="text" name="government_total_q53[]" class="form-control government_total_q53"></td>



                  <td>
                    <?php if ($i == 0) { ?>
                      <button id="addRowDatasq53" type="button" class="btn btn-sm btn-primary">+</i></button>
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
                <tr class="qe53NoOfRow">
                  <td>
                    <p>Diplomats in foreign missions</p>
                    <input type="hidden" name="government_title_q53[]" value="1" class="form-control government_title_q53">
                  </td>



                  <td>
                    <input type="text" name="government_men_q53[]" class="form-control government_men_q53">
                  </td>


                  <td><input type="text" name="government_women_q53[]" class="form-control government_women_q53"></td>


                  <td><input type="text" name="government_tg_q53[]" class="form-control government_tg_q53"></td>

                  <
                    <td>

                    <input type="text" name="government_total_q53[]" class="form-control government_total_q53" readonly>
                    </td>

                </tr>

                <tr class="qe53NoOfRow">






                  <td>
                    <p>Labour Attaches</p>

                    <input type="hidden" name="government_title_q53[]" value="2" class="form-control government_title_q53">
                  </td>


                  <td><input type="text" name="government_men_q53[]" class="form-control government_men_q53"></td>


                  <td><input type="text" name="government_women_q53[]" class="form-control government_women_q53"></td>


                  <td><input type="text" name="government_tg_q53[]" class="form-control government_tg_q53"></td>


                  <td><input type="text" name="government_total_q53[]" class="form-control government_total_q53" readonly></td>




                </tr>

                <tr class="qe53NoOfRow">





                  <td>
                    <p>MoFA officials within the country</p>
                    <input type="hidden" name="government_title_q53[]" value="3" class="form-control government_title_q53">
                  </td>

                  <td><input type="text" name="government_men_q53[]" class="form-control government_men_q53"></td>

                  <td><input type="text" name="government_women_q53[]" class="form-control government_women_q53"></td>


                  <td><input type="text" name="government_tg_q53[]" class="form-control government_tg_q53"></td>


                  <td><input type="text" name="government_total_q53[]" class="form-control government_total_q53" readonly></td>




                </tr>







                <!-- test end -->
                <tr class="qe53NoOfRow">
                  <td>

                    <input type="text" name="government_title_q53[]" class="form-control government_title_q53" placeholder="Others Specific">
                  </td>



                  <td><input type="text" name="government_men_q53[]" class="form-control government_men_q53"></td>


                  <td><input type="text" name="government_women_q53[]" class="form-control government_women_q53"></td>


                  <td><input type="text" name="government_tg_q53[]" class="form-control government_tg_q53"></td>


                  <td><input type="text" name="government_total_q53[]" class="form-control government_total_q53" readonly></td>



                  <td><button id="addRowDatasq53" type="button" class="btn btn-sm btn-primary">+</i></button></td>

                </tr>
              <?php } ?>
            </tbody>
          </table>




        </div>
        <br />
        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question53">Save</button>
        </p>
      </div>
    </div>
  </div>


  <script type="text/javascript">
    $(document).ready(function() {
      $(".fiftythreestatus").on("click", function() {
        var statusvalue = $("input[name='is_government_train_diplomat_q53']:checked").val();
        $('.question53').find('.othersText').hide()
        $('.question53').find('#q28others').val("")
        if (statusvalue == '1') {
          $('.question53').find('#53_question_view').show()
          $('.question53').find('span').addClass('othersText')
        } else if (statusvalue == "2") {
          $('.question53').find('#53_question_view').hide()
          $('.question53').find('span').removeClass('othersText')
          $('.question53').find('span').show()

        } else {
          $('.question53').find('#53_question_view').hide()
          $('.question53').find('span').addClass('othersText')


        }
      });
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $("#addRowDatasq53").click(function() {
        let rowCount = $('.qe53NoOfRow').length + 1
        $("#addRowQ53").append(
          '<tr class="qe53NoOfRow" id="row' + rowCount + '">' +
          `<td>
             <input type="text" name="government_title_q53[]"  class="form-control" placeholder="Others Specific" >
        </td>` +
          `<td>
             <input type="text" name="government_men_q53[]"  class="form-control government_men_q53" >
        </td>` +
          `<td>
             <input type="text" name="government_women_q53[]"  class="form-control government_women_q53" >
        </td>` +
          `<td>
             <input type="text" name="government_tg_q53[]"  class="form-control government_tg_q53" >
        </td>` +
          `<td>
             <input type="text" name="government_total_q53[]"  class="form-control government_total_q53" readonly>
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
    $(document).on('input', '.government_men_q53, .government_women_q53, .government_tg_q53', function() {

      let row = $(this).closest('tr');

      let men = parseFloat(row.find('.government_men_q53').val()) || 0;
      let women = parseFloat(row.find('.government_women_q53').val()) || 0;
      let tg = parseFloat(row.find('.government_tg_q53').val()) || 0;

      let total = men + women + tg;

      row.find('.government_total_q53').val(total);
    });
  </script>
<?php } ?>