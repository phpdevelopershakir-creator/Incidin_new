   <style>
  .visibility{
    display:none;
  }
  .othersText{
    display:none;
  }
</style>
      <div class="card question60">
        <?php
    $training_responses=[ 
      1 => "Government Official",
      2 => "Immigration Authority",
      3 => "Law Enforcing Personnel",
      4 => "Border Control Force",
      5 => "Judiciary",
      6 => "Diplomats"
    ];
    ?>
        <div class="card-header" role="tab" id="heading-4">
            <h6 class="card-title" style="color: {{ isset($question_60_data) ? 'blue' : 'black' }};">
            <a data-toggle="collapse" href="#Question-60" aria-expanded="false"
                aria-controls="collapse-4">
             60.What resources (funding or in-kind) did the government devote to implement new/updated or existing national action plans?
            </a>
            </h6>
        </div>

        <div id="Question-60" class="collapse" role="tabpane60" aria-labelledby="heading-4"
            data-parent="#accordion-2">
            <div class="card-body">
              <div class="icheck-primary">
      <?php if(isset($question_60_data->q60_checked_value)) { ?>

      <input  
      type="radio" 
      id="radioSixty1" 
      class="sixty_status" 
      name="is_governments_on_trafficking_q60" 
      <?=(isset($question_60_data->q60_checked_value)   && $question_60_data->q60_checked_value=='1') ? 'checked' : '' ;?>   
      value="1">
      <?php }else { ?>

        <input  type="radio" id="radioSixty1"  class="sixty_status" name="is_governments_on_trafficking_q60" checked value="1">
        <?php } ?>    
        
        <label for="radioSixty1">
          Yes
        </label>
      </div>
      <div class="icheck-primary">
        <input 
        type="radio" 
        id="radioSixty2" 
        class="sixty_status" 
        name="is_governments_on_trafficking_q60"  
      <?=(isset($question_60_data->q60_checked_value)   && $question_60_data->q60_checked_value=='0') ? 'checked' : '' ;?>   
        value="0">
        <label for="radioSixty2">
          No
        </label>
      </div>
            </div>
            @php
      $counties=DB::table('countries')->get();
      @endphp
      <div id="sixty_question_view" class="card-body row <?=(isset($question_60_data->q60_checked_value)   && ($question_60_data->q60_checked_value=='0')) ? 'visibility' : '' ;?>">
      <table id="addRowq60" class="table table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">Country</th>
            <th scope="col">Target group of Training
              (multiple response)</th>
            <th scope="col">Total coverage</th>
            <th>Action</th>


          </tr>
        </thead>
        <tbody>
        <?php if(isset($question_60_data->q60_data) && count($question_60_data->q60_data)>0){ $i=0; ?>
          @foreach($question_60_data->q60_data  as $q60)
          <tr class="qe60NoOfRow" id="row<?=$i;?>">
            <td scope="row">
              <select name="trafficking_country[]" id="q60CountryId" class="form-control q60Input ">
              <option value="" disabled selected>---Choose County--</option>
              @foreach ($counties as $item)
              <option <?=(isset($q60)  &&  !empty($q60) && $q60->country==$item->id) ? 'selected' : '' ;?> value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
              </select>
            </td>
            <td>
              <select name="trafficking_target_group[]" id="q60TrainingResponse" class="form-control q60Input">
                <option value="" disabled selected>---Choose an item--</option>
                @foreach ($training_responses as $key => $training)
                <option <?=(isset($q60)  &&  !empty($q60) && $q60->trafficking_target_group==$key) ? 'selected' : '' ;?> value="{{ $key }}">{{ $training }}</option>
                @endforeach
              </select>
            </td>
            <td> <input type="text" name="trafficking_total_coverage[]" value="<?=(isset($q60)  &&  !empty($q60) && $q60->total_coverage) ? $q60->total_coverage : '' ;?>" id="q60traficTotal" class="form-control q60Input"> </td>
            <td>
              <?php if($i==0){ ?>
              <button id="addRowDatasq60" type="button" class="btn btn-sm btn-primary">+</i></button>
               <?php }else{ ?>
                <button type="button" name="remove" id="<?= $i; ?>" class="btn btn-danger btn_remove cicle">-</button></td>
               <?php 
               }?>
            </td>

          </tr>
          <?php $i++; ?>
          @endforeach
        <?php }else { ?>
          <tr class="qe60NoOfRow">
            <td scope="row">
              <select name="trafficking_country[]" id="q60CountryId" class="form-control q60Input ">
              <option value="" disabled selected>---Choose County--</option>
              @foreach ($counties as $item)
              <option  value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
              </select>
            </td>
            <td>
              <select name="trafficking_target_group[]" id="q60TrainingResponse" class="form-control q60Input">
                <option value="" disabled selected>---Choose an item--</option>
                @foreach ($training_responses as $key => $training)
                <option  value="{{ $key }}">{{ $training }}</option>
                @endforeach
              </select>
            </td>
            <td> <input type="text"   name="trafficking_total_coverage[]" id="q60traficTotal" class="form-control q60Input"> </td>
            <td><button id="addRowDatasq60" type="button" class="btn btn-sm btn-primary">+</i></button></td>

          </tr>
         <?php } ?> 
        </tbody>
      </table>
        </div>
     <br/>
     <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question60">Save</button>       
          </p>
        </div>

        
        </div>

  <script>
$(function () {

  /* ===============================
     YES / NO SHOW – HIDE
  =============================== */
  $(document).on('change', '.sixty_status', function () {
    let val = $(this).val();
    if (val == '1') {
      $('#sixty_question_view').removeClass('visibility');
    } else {
      $('#sixty_question_view').addClass('visibility');
    }
  });

  /* ===============================
     ADD ROW
  =============================== */
  $(document).on('click', '#addRowDatasq60', function () {
    let rowCount = $('.qe60NoOfRow').length + 1;

    $('#addRowq60 tbody').append(`
      <tr class="qe60NoOfRow" id="row${rowCount}">
        <td>
          <select name="trafficking_country[]" class="form-control q60Input">
            <option value="" disabled selected>---Choose Country--</option>
            @foreach ($counties as $item)
              <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
          </select>
        </td>

        <td>
          <select name="trafficking_target_group[]" class="form-control q60Input">
            <option value="" disabled selected>---Choose an item--</option>
            <option value="1">Government Official</option>
            <option value="2">Immigration Authority</option>
            <option value="3">Law Enforcing Personnel</option>
            <option value="4">Border Control Force</option>
            <option value="5">Judiciary</option>
            <option value="6">Diplomats</option>
          </select>
        </td>

        <td>
          <input type="text" name="trafficking_total_coverage[]" class="form-control q60Input">
        </td>

        <td>
          <button type="button" class="btn btn-danger btn_remove" data-id="${rowCount}">-</button>
        </td>
      </tr>
    `);
  });

  /* ===============================
     REMOVE ROW
  =============================== */
  $(document).on('click', '.btn_remove', function () {
    let id = $(this).data('id');
    $('#row' + id).remove();
  });

  /* ===============================
     TEMP SAVE (QUESTION 60)
  =============================== */
 $(document).on('click', '#temp-save-question60', function () {

  let q60_data = [];
  let yes_no_value = $("input[name='is_governments_on_trafficking_q60']:checked").val();

  if (yes_no_value == "1") {
    $('.qe60NoOfRow').each(function () {

      let country = $(this).find("select[name='trafficking_country[]']").val();
      let group   = $(this).find("select[name='trafficking_target_group[]']").val();
      let total   = $(this).find("input[name='trafficking_total_coverage[]']").val();

      // ✔️ partial data হলেও push হবে
      if (country || group || total) {
        q60_data.push({
          country: country ?? '',
          trafficking_target_group: group ?? '',
          total_coverage: total ?? ''
        });
      }
    });
  }

  $.ajax({
    type: "POST",
    url: "/superadmin/case/temp-save-question40to60",
    data: {
      _token: "{{ csrf_token() }}",
      question_no: 60,
      question60: {
        q60_checked_value: yes_no_value,
        q60_data: q60_data
      }
    },
    success: function () {
      alert("Question 60 temporary saved");
    },
    error: function () {
      alert("Save failed");
    }
  });
});


});
</script>
