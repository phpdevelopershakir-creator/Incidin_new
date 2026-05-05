<?php
if($questiontitles[9]->status==0)
{

  ?>
@if(Auth::user()->can('10.question'))
<style>
.visibility
{
  display: none;
}
</style>
<div class="col-md-12 question10">
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
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
         <span class="numbering">10</span>.
           @if (isset($questiontitles [9]))
         {{ $questiontitles[9]->title }}

         @endif
       
      </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="icheck-primary">
      <?php if(isset($question_10_data->q10_checked_value)) { ?>

      <input  
      type="radio" 
      id="radioTen1" 
      class="tenfifty_status" 
      name="is_governments_on_trafficking_q10" 
      <?=(isset($question_10_data->q10_checked_value)   && $question_10_data->q10_checked_value=='1') ? 'checked' : '' ;?>   
      value="1">
      <?php }else { ?>

        <input  type="radio" id="radioTen1"  class="tenfifty_status" name="is_governments_on_trafficking_q10" checked value="1">
        <?php } ?>    
        
        <label for="radioTen1">
          Yes
        </label>
      </div>
      <div class="icheck-primary">
        <input 
        type="radio" 
        id="radioTen2" 
        class="tenfifty_status" 
        name="is_governments_on_trafficking_q10"  
      <?=(isset($question_10_data->q10_checked_value)   && $question_10_data->q10_checked_value=='0') ? 'checked' : '' ;?>   
        value="0">
        <label for="radioTen2">
          No
        </label>
      </div>
      @php
      $counties=DB::table('countries')->get();
      @endphp
      <div id="ten_question_view" class="card-body row <?=(isset($question_10_data->q10_checked_value)   && ($question_10_data->q10_checked_value=='0')) ? 'visibility' : '' ;?>">
      <table id="addRowQ10" class="table table-bordered text-center">
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
        <?php if(isset($question_10_data->q10_data) && count($question_10_data->q10_data)>0){ $i=0; ?>
          @foreach($question_10_data->q10_data  as $q10)
          <tr class="qe10NoOfRow" id="row<?=$i;?>">
            <td scope="row">
              <select name="trafficking_country[]" id="q10CountryId" class="form-control q10Input ">
              <option value="" disabled selected>---Choose County--</option>
              @foreach ($counties as $item)
              <option <?=(isset($q10)  &&  !empty($q10) && $q10->country==$item->id) ? 'selected' : '' ;?> value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
              </select>
            </td>
            <td>
              <select name="trafficking_target_group[]" id="q10TrainingResponse" class="form-control q10Input">
                <option value="" disabled selected>---Choose an item--</option>
                @foreach ($training_responses as $key => $training)
                <option <?=(isset($q10)  &&  !empty($q10) && $q10->trafficking_target_group==$key) ? 'selected' : '' ;?> value="{{ $key }}">{{ $training }}</option>
                @endforeach
              </select>
            </td>
            <td> <input type="text" name="trafficking_total_coverage[]" value="<?=(isset($q10)  &&  !empty($q10) && $q10->total_coverage) ? $q10->total_coverage : '' ;?>" id="q10traficTotal" class="form-control q10Input"> </td>
            <td>
              <?php if($i==0){ ?>
              <button id="addRowDatasQ10" type="button" class="btn btn-sm btn-primary">+</i></button>
               <?php }else{ ?>
                <button type="button" name="remove" id="<?= $i; ?>" class="btn btn-danger btn_remove cicle">-</button></td>
               <?php 
               }?>
            </td>

          </tr>
          <?php $i++; ?>
          @endforeach
        <?php }else { ?>
          <tr class="qe10NoOfRow">
            <td scope="row">
              <select name="trafficking_country[]" id="q10CountryId" class="form-control q10Input ">
              <option value="" disabled selected>---Choose County--</option>
              @foreach ($counties as $item)
              <option  value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
              </select>
            </td>
            <td>
              <select name="trafficking_target_group[]" id="q10TrainingResponse" class="form-control q10Input">
                <option value="" disabled selected>---Choose an item--</option>
                @foreach ($training_responses as $key => $training)
                <option  value="{{ $key }}">{{ $training }}</option>
                @endforeach
              </select>
            </td>
            <td> <input type="text"   name="trafficking_total_coverage[]" id="q10traficTotal" class="form-control q10Input"> </td>
            <td><button id="addRowDatasQ10" type="button" class="btn btn-sm btn-primary">+</i></button></td>

          </tr>
         <?php } ?> 
        </tbody>
      </table>
    </div>
    <p class="text-right">
        <button type="button" class="btn btn-success" id="temp-save-question10">Save</button>       
      </p>
    </div>
  </div>
</div>
@endif
<?php }
  ?>
<script>

  $(function(){
    // var rowCount = 1;
    $("#addRowDatasQ10").click(function(){
      let rowCount =$('.qe10NoOfRow').length+1
      $("#addRowQ10").append(
        '<tr class="qe10NoOfRow" id="row'+rowCount+'">'+
        `<td>
              <select name="trafficking_country[]" id="q10CountryId" class="form-control q10Input">
              '<option value="" disabled selected>---Choose County--</option>
              @foreach ($counties as $item)
              <option value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach 
              </select>
        </td>`+
          '<td>'+
              '<select name="trafficking_target_group[]" id="q10TrainingResponse" class="form-control q10Input">'+
                '<option value="" disabled selected>---Choose an item--</option>'+
                '<option value="1">Government Official</option>'+
                '<option value="2">Immigration Authority</option>'+
                '<option value="3">Law Enforcing Personnel</option>'+
                '<option value="4">Border Control Force</option>'+
                '<option value="5">Judiciary</option>'+
                '<option value="6">Diplomats</option>'+
              '</select>'+
           '</td>'+
            '<td> <input type="text" name="trafficking_total_coverage[]" class="form-control q10Input total_coverage_q10" id="q10traficTotal" for="'+rowCount+'"> </td>'+

            '<td><button type="button" name="remove" id="'+rowCount+'" class="btn btn-danger btn_remove cicle">-</button></td>'+

          '</tr>'
      )
    });
    $(document).on('click', '.btn_remove', function() {
        var button_id = $(this).attr('id');
        $('#row'+button_id+'').remove();
    });
  
    $(document).on("click",'#temp-save-question10',function() {
          var traficking_countries = [],
          trafficking_target_group=[],
          trafficking_total_coverage=[]       
          $('select[name="trafficking_country[]"]').each(function() {
              let country ={
                country:$(this).val()
              }             
              traficking_countries.push(country);
           });
           $('select[name="trafficking_target_group[]"]').each(function() {
              let target_group ={
                target_group:$(this).val()
              }             
              trafficking_target_group.push(target_group);
           });
           $('input[name="trafficking_total_coverage[]"]').each(function() {
              let coverage ={
                total_coverage:$(this).val()
              }             
              trafficking_total_coverage.push(coverage);
           });
        //  console.log(traficking_countries)
          
           var q10_data=[];
          let yes_no_value=$("input[type='radio'][name='is_governments_on_trafficking_q10']:checked").val()
          
        if(yes_no_value=="1"){
          if(traficking_countries.length>0){
            jQuery.each(traficking_countries, function(index, item) {
              let newObj = { ...item, 
                total_coverage:trafficking_total_coverage[index].total_coverage,
                trafficking_target_group:trafficking_target_group[index].target_group
              };
              // item[index]["jurisdict"]=jurisdictions[index].jurisdict
              q10_data.push(newObj)
            });
          }
        }
        let new_data={
          q10_data:q10_data,
          q10_checked_value:yes_no_value,

        }
      // console.log(new_data)
          $.ajax({    //create an ajax request to display.php
                  type: "POST",
                  data:{
                    "_token": "{{ csrf_token() }}",
                    'question10':new_data,
                    'question_no':'10',
                  },
                  url: "/superadmin/case/temp-save-question",             
                  success: function(response){ 
                    if (response){

                      alert("Question Ten has been saved temporary")
                    }else{
                      alert("Not Saved")
                    }
                  }
          });
    });

   
  })
 
</script>

