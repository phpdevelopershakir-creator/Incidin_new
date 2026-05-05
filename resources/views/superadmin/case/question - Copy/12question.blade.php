<?php
if($questiontitles[11]->status==0)
{

  ?>
@if(Auth::user()->can('12.question'))
<style>
.othersText
{
  display: none;
}
.visibility
{
  display: none;
}
</style>
    <div class="col-md-12 question12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
      <span class="numbering">12</span>.
           @if (isset($questiontitles [11]))
         {{ $questiontitles[11]->title }}

         @endif
          </h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool"  data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="icheck-primary">
            <?php if(isset($question_12_data->q12_checked_value)) { ?>
            <input type="radio" id="radioTwelve1"  class="twelve_status" name="is_recruitment_measures_q12" <?=(isset($question_12_data->q12_checked_value)   && $question_12_data->q12_checked_value=='1') ? 'checked' : '' ;?>  value="1">
            <?php } else { ?>
            <input type="radio" id="radioTwelve1"  class="twelve_status" name="is_recruitment_measures_q12" checked  value="1">
           <?php } ?>
            <label for="radioTwelve1">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input type="radio" id="radioTwelve2"  class="twelve_status" name="is_recruitment_measures_q12" <?=(isset($question_12_data->q12_checked_value)   && $question_12_data->q12_checked_value=='0') ? 'checked' : '' ;?>  value="0">
            <label for="radioTwelve2">
              No
            </label>
          </div>

          <div class="icheck-primary input-group mb-3">
            <input type="radio" id="radioTwelve3" <?=(isset($question_12_data->q12_checked_value)   && $question_12_data->q12_checked_value=='2') ? 'checked' : '' ;?> class="twelve_status" name="is_recruitment_measures_q12"  value="2">
            <label for="radioTwelve3">
              Others
            </label><span class="col-md-6 mt--4  <?=(isset($question_12_data->q12_checked_value)   && ($question_12_data->q12_checked_value=='2')) ? '' : 'othersText' ;?>" style="margin-top:-8px;">
            <input type="text" id="q12others" value="<?=(isset($question_12_data->others)) ? $question_12_data->others : '' ;?>" placeholder="Others "  class="form-control" name="recruitment_measures_others_q12"></span>
          </div>
          @php
          $counties=DB::table('countries')->get();
          @endphp

        <div id="twevel_question_view" class="card-body row  <?=(isset($question_12_data->q12_checked_value)   && ($question_12_data->q12_checked_value=='2' || $question_12_data->q12_checked_value=='0')) ? 'visibility' : '' ;?>" >
        <table id="addRowQ12" class="table table-bordered text-center">
            <thead>
              <tr>
                <th scope="col">Country</th>
                <th scope="col">Instrument</th>
                <th scope="col">Attach/Upload/Summary</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php if(isset($question_12_data->q12_data) && count($question_12_data->q12_data)>0){ $i=0; ?>
          @foreach($question_12_data->q12_data  as $q12)
              <tr class="q12Qrow" id="row<?=$i?>">
                <td >
                  <select name="country_id_q12[]" id="" class="form-control q12Input">
                    <option value="" disabled selected>---Choose County--</option>
                    @foreach ($counties as $item)
                      <option <?=(isset($q12)  &&  !empty($q12) && $q12->country==$item->id) ? 'selected' : '' ;?>  value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
                </td>
                <td> <select name="instrument[]" id="" class="form-control q12Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option <?=(isset($q12)  &&  !empty($q12) && $q12->instrument=='1') ? 'selected' : '' ;?>  value="1">Bil-Lateral Agreement</option>
                    <option <?=(isset($q12)  &&  !empty($q12) && $q12->instrument=='2') ? 'selected' : '' ;?> value="2">Mutual Legal Arrangement</option>
                    <option <?=(isset($q12)  &&  !empty($q12) && $q12->instrument=='3') ? 'selected' : '' ;?> value="3">MoU</option>
                    <option <?=(isset($q12)  &&  !empty($q12) && $q12->instrument=='4') ? 'selected' : '' ;?> value="4">Trade Treaty</option>
                    <option <?=(isset($q12)  &&  !empty($q12) && $q12->instrument=='5') ? 'selected' : '' ;?> value="5">G to G agreement</option>
                  </select> </td>
                <td> <input type="file" name="upload_summary[]" class="form-control"> </td>
                <td>
                  <?php if($i==0) { ?>
                  <button id="addRowDatasQ12" type="button" class="btn btn-sm btn-primary">+</i>
                  <?php } else { ?>
                  <button type="button" name="remove" id="<?= $i;?>" class="btn btn-danger btn_remove cicle">-</button>
                   <?php } ?> 
                </button></td>
              
              </tr>
              <?php $i++; ?>
          @endforeach
        <?php }else { ?> 
          <tr class="q12Qrow">
                <td scope="row">
                  <select name="country_id_q12[]" id="" class="form-control q12Input">
                    <option value="" disabled selected>---Choose County--</option>
                    @foreach ($counties as $item)
                      <option  value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
                </td>
                <td> <select name="instrument[]" id="" class="form-control q12Input">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="1">Bil-Lateral Agreement</option>
                    <option value="2">Mutual Legal Arrangement</option>
                    <option value="3">MoU</option>
                    <option value="4">Trade Treaty</option>
                    <option value="5">G to G agreement</option>
                  </select> </td>
                <td> <input type="file" name="upload_summary[]" class="form-control"> </td>
                <td><button id="addRowDatasQ12" type="button" class="btn btn-sm btn-primary">+</i></button></td>
              
        </tr>
              <?php } ?> 
            </tbody>
        </table>
       
     
        </div>
        <div class="col-md-12"> 
       <br/> 
        <p class="text-right">
        <button type="button" class="btn btn-success" id="temp-save-question12">Save</button>       
      </p>
        </div>
        </div>
      </div>
    </div>
    @endif


    <?php }
  ?>
@php
$counties=DB::table('countries')->get();
@endphp
<script>

$(function(){
  $("#addRowDatasQ12").click(function(){
    let rowCount=$('.q12Qrow').length;
    $("#addRowQ12").append(
      
    '<tr class="q12Qrow" id="row'+rowCount+'">'+
      `
        <td scope="row">
          <select name="country_id_q12[]" id="" class="form-control q12Input">
            <option value="" disabled selected>---Choose County--</option>
            @foreach ($counties as $item)
              <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
          </select>
        </td>`+
        `<td> <select name="instrument[]" id="" class="form-control q12Input">
            <option value="" disabled selected>---Choose an item--</option>
            <option value="1">Bil-Lateral Agreement</option>
            <option value="2">Mutual Legal Arrangement</option>
            <option value="3">MoU</option>
            <option value="4">Trade Treaty</option>
            <option value="5">G to G agreement</option>
          </select> </td>`+
        `<td> <input type="file" name="upload_summary[]" class="form-control"> </td>`+
        '<td><button type="button" name="remove" id="'+rowCount+'" class="btn btn-danger btn_remove cicle">-</button></td>'+

    '</tr>'
      
    )
  });
  $(document).on('click', '.btn_remove', function() {
        var button_id = $(this).attr('id');
        $('#row'+button_id+'').remove();
      });
  $(document).on("click",'#temp-save-question12',function() {
      var countries = [],
      instruments=[],q12_data=[];     
      let yes_no_value=$("input[type='radio'][name='is_recruitment_measures_q12']:checked").val()
      if(yes_no_value=='1'){
        $('select[name="country_id_q12[]"]').each(function() {
          let country ={
            country:$(this).val()
          }             
          countries.push(country);
        });
        $('select[name="instrument[]"]').each(function() {
          let instrument ={
            instrument:$(this).val()
          }             
          instruments.push(instrument);
        });
        if(countries.length>0){
          jQuery.each(countries, function(index, item) {
            let newObj = { ...item, 
              instrument:instruments[index].instrument
            };
            q12_data.push(newObj)
          });
        }
      }
      let new_data={
        q12_data:q12_data,
        q12_checked_value:yes_no_value,
        others:$("input[name='recruitment_measures_others_q12']").val()
      }  
      // console.log(new_data)
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
                'question12':new_data,
                'question_no':'12',
              },
              url: "/superadmin/case/temp-save-question",             
              success: function(response){ 
                if (response){
                  alert("Question Twelve has been saved temporary")
                }else{
                  alert("Not Saved")
                }
              }
      });
  });
 
})

</script>    