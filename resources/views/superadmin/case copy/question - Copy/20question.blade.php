<?php
if($questiontitles[19]->status==0)
{

  ?>
@if(Auth::user()->can('20.question'))
<style>
  .othersText{
    display:none
  }
  .visibility{
    display:none
  }
</style>
<div class="col-md-12 question20">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
        <span class="numbering">20</span>.
           @if (isset($questiontitles [19]))
         {{ $questiontitles[19]->title }}

         @endif
      </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    @php
    $counties=DB::table('countries')->get();
    @endphp

    <div class="card-body">
    <div class="form-group clearfix">
          <div class="icheck-primary">
     <?php if(isset($question_20_data->q20_checked_value)){?>

          <input 
          type="radio" 
          id="q20radioPrimary1" 
          class="twentystatus" 
          name="is_peacekeeping_q20" 
          <?=(isset($question_20_data->q20_checked_value) && $question_20_data->q20_checked_value=="1")?"checked":"" ;?> 

          value="1">
        <?php }else {?>
          
          <input type="radio" id="q20radioPrimary1" class="twentystatus" name="is_peacekeeping_q20" checked="" value="1">
       <?php }?>
          
          <label for="q20radioPrimary1">
          Yes
          </label>
          </div>
          <div class="icheck-primary">
          <input 
          type="radio" 
          id="q20radioPrimary2" 
          class="twentystatus" 
          name="is_peacekeeping_q20" 
          <?=(isset($question_20_data->q20_checked_value) && $question_20_data->q20_checked_value=="0")?"checked":"" ;?> 

          value="0">
          <label for="q20radioPrimary2">
          No
          </label>
          </div>
          <div class="icheck-primary input-group mb-3">
          <input 
          type="radio" 
          id="q20radioPrimary3" 
          class="twentystatus" 
          name="is_peacekeeping_q20" 
          <?=(isset($question_20_data->q20_checked_value) && $question_20_data->q20_checked_value=="2")?"checked":"" ;?> 

          value="2">
          <label for="q20radioPrimary3">
          Others
          </label><span class="col-md-6 mt--4 <?=(isset($question_20_data->q20_checked_value) && $question_20_data->q20_checked_value=="2")?"":"othersText" ;?>" >
            <input 
            type="text" 
            id="q20others"  
            placeholder="Others "  
            class="form-control" 
            value="<?=(isset($question_20_data->others) && $question_20_data->others)?$question_20_data->others:"";?>"

            name="peacekeeping_others_q20"></span>
          </div>
    </div>
     <div id ="twenty_question_view" class="card-body row <?=(isset($question_20_data->q20_checked_value)) && ($question_20_data->q20_checked_value=="2" || $question_20_data->q20_checked_value=="0" )?"visibility":"" ;?>">
      <table id="addRowQ20" class="table table-bordered text-center">
        <thead class="">
          <tr>
            <th rowspan="3" style="text-align: center; margin: bottom 45%;">Country where
              posted</th>
            <th rowspan="3">Description</th>
            <th colspan="4">Number of Cases</th>
            <th></th>
          </tr>
          <tr>
            <th>Men</th>
            <th>Women</th>
            <th>3rd  Gender</th>
            <th>Total</th>
            <th>Action</th>
          </tr>
</thead>
<tbody>
<?php if(isset($question_20_data->q20_data) && count($question_20_data->q20_data)>0){ $i=1; ?>
          @foreach($question_20_data->q20_data  as $q20)
          <tr class="q20QRow" id="q20row<?=$i?>">
            <td> <select name="q20_country_id[]" id="" class="form-control">
                   <option value="" disabled selected>---Choose County--</option>
              @foreach ($counties as $item)
              <option <?=(isset($q20)  &&  !empty($q20) && $q20->country==$item->id ) ? 'selected' : '' ;?>  value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
              </select></td>
            <td><input type="text" name="q20_description[]" id="" value="<?=(isset($q20->description) && !empty($q20->description))?$q20->description:"";?>"  class="form-control description"></td>
            <td><input  class="form-control q20_number_cases_men" value="<?=(isset($q20->men) && !empty($q20->men))?$q20->men:"";?>" type='number' data-type="q20_number_cases_men" id='q20_number_cases_men_<?= $i;?>' name="q20_number_cases_men[]" for="<?= $i;?>"/></td> 
            <td><input class="form-control q20_number_cases_women" value="<?=(isset($q20->women) && !empty($q20->women))?$q20->women:"";?>" type='number' id='q20_number_cases_women_<?= $i;?>' name="q20_number_cases_women[]" for="<?= $i;?>"/></td>
            <td><input class="form-control q20_number_cases_third_gender" value="<?=(isset($q20->third_gender) && !empty($q20->third_gender))?$q20->third_gender:"";?>" type='number' data-type="q20_number_cases_third_gender" id='q20_number_cases_third_gender_<?= $i;?>' name="q20_number_cases_third_gender[]" for="<?= $i;?>"/></td> 
            <td><input class="form-control q20_number_cases_total" value="<?=(isset($q20->total) && !empty($q20->total))?$q20->total:"";?>" type='text' id='q20_number_cases_total_<?= $i;?>' name='q20_number_cases_total[]' for='<?= $i;?>' readonly/></td>
            <td>
            <?php if($i==1) {  ?>
              <button id="addRowDatasQ20" type="button" class="btn btn-sm btn-primary">+</i></button>
              <?php }else { ?>
              <button type="button" name="remove" id="<?= $i;?>" class="btn btn-danger q20btn_remove cicle">-</button></td>
              <?php } ?>
            </td>

          </tr>



          <?php $i++; ?>
          @endforeach
        <?php }else { ?>
          <tr class="q20QRow">
            <td> <select name="q20_country_id[]" id="" class="form-control">
                   <option value="" disabled selected>---Choose County--</option>
              @foreach ($counties as $item)
              <option value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
              </select></td>
            <td><input type="text" name="q20_description[]" id="" class="form-control description"></td>
            <td><input  class="form-control q20_number_cases_men" type='number' data-type="q20_number_cases_men" id='q20_number_cases_men_1' name="q20_number_cases_men[]" for="1"/></td> 
            <td><input class="form-control q20_number_cases_women" type='number' id='q20_number_cases_women_1' name="q20_number_cases_women[]" for="1"/></td>
            <td><input class="form-control q20_number_cases_third_gender" type='number' data-type="q20_number_cases_third_gender" id='q20_number_cases_third_gender_1' name="q20_number_cases_third_gender[]" for="1"/></td> 
            <td><input class="form-control q20_number_cases_total" type='text' id='q20_number_cases_total_1' name='q20_number_cases_total[]' for='1' readonly/></td>
            <td><button id="addRowDatasQ20" type="button" class="btn btn-sm btn-primary">+</i></button></td>

          </tr>
          <?php } ?>
        
</tbody>


      </table>
      </div>  
      <br>
      <p class="text-right">
        <button type="button" class="btn btn-success" id="temp-save-question20">Save</button>       
      </p>
    </div>
  </div>
</div>  
@endif
<?php }
  ?>
<script>
$(function(){
  var rowCount = 1;
  $("#addRowDatasQ20").click(function(){
    let rowCount = $('.q20QRow').length+1;
    $("#addRowQ20").append(
      
    '<tr class="q20QRow" id="q20row'+rowCount+'">'+
    
 
    `<td> 
      <select name="q20_country_id[]" id="" class="form-control">
        <option value="" disabled selected>---Choose County--</option>
        @foreach ($counties as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
      </select>
    </td>`+
    '<td><input type="text" name="q20_description[]"  class="form-control description"/></td>'+
    '<td><input class="form-control q20_number_cases_men" type="number" data-type="q20_number_cases_men" id="q20_number_cases_men_'+rowCount+'" name="q20_number_cases_men[]" for="'+rowCount+'"/></td>'+
    '<td><input class="form-control q20_number_cases_women" type="number" data-type="q20_number_cases_women" id="q20_number_cases_women_'+rowCount+'" name="q20_number_cases_women[]" for="'+rowCount+'"/></td>'+
    '<td><input class="form-control q20_number_cases_third_gender" type="number" data-type="q20_number_cases_third_gender" id="q20_number_cases_third_gender_'+rowCount+'" name="q20_number_cases_third_gender[]" for="'+rowCount+'"/></td>'+
    '<td><input class="form-control q20_number_cases_total" type="number" data-type="q20_number_cases_total" id="q20_number_cases_total_'+rowCount+'" name="q20_number_cases_total[]" for="'+rowCount+'" readonly="true"/></td>'+
    '<td><button type="button" name="remove" id="'+rowCount+'" class="btn btn-danger q20btn_remove cicle">-</button></td>'+

         
    '</tr>'
      
    )
  });
  $(document).on('click', '.q20btn_remove', function() {
        var button_id = $(this).attr('id');
        $('#q20row'+button_id+'').remove();
      });
      $("#addRowQ20").on('input', 'input.q20_number_cases_men,input.q20_number_cases_women,input.q20_number_cases_third_gender', function() {
    
        getTotalCost($(this).attr("for"));
      });
 // Using a new index rather than your global variable i
 function getTotalCost(ind) {
    var man = $('#q20_number_cases_men_'+ind).val()||0;
    var woman = $('#q20_number_cases_women_'+ind).val()||0;
    var third_gender = $('#q20_number_cases_third_gender_'+ind).val()||0;


    var totNumber = parseInt(man) + parseInt(woman)+parseInt(third_gender);
    var tot = totNumber;
    $('#q20_number_cases_total_'+ind).val(tot)||0;
    calculateSubTotal();
      }

  function calculateSubTotal() {
    var subtotal = 0;
    $('.q20_number_cases_total').each(function() {
      subtotal += parseFloat($(this).val());
    });
    
  }

  $(document).on("click",'#temp-save-question20',function() {
          var countries = [],
              q20_description=[],
              q20_men=[],
              q20_women=[],
              q20_third_gender=[],
              q20_total=[];
              
          $('select[name="q20_country_id[]"]').each(function() {
              let country ={
                country:$(this).val()
              }             
              countries.push(country);
           });

          $('input[name="q20_description[]"]').each(function() {
            if($(this).val()){
              let description ={
                description:$(this).val()
              }
              q20_description.push(description);
            }
           
          });
          $('input[name="q20_number_cases_men[]"]').each(function() {
              let men ={
                men:$(this).val()
              }
              q20_men.push(men);
            
           
          });
          $('input[name="q20_number_cases_women[]"]').each(function() {
              let women ={
                women:$(this).val()
              }
              q20_women.push(women);
            
           
          });
          $('input[name="q20_number_cases_third_gender[]"]').each(function() {
              let third_gender ={
                third_gender:$(this).val()
              }
              q20_third_gender.push(third_gender);
            
           
          });
          $('input[name="q20_number_cases_total[]"]').each(function() {
              let total ={
                total:$(this).val()
              }
              q20_total.push(total);
            
           
          });
          let yes_no_value=$("input[type='radio'][name='is_peacekeeping_q20']:checked").val()

          var q20_data=[];
          if(yes_no_value=="1"){

         
          if(countries.length>0){
            jQuery.each(countries, function(index, item) {
              let newObj = { ...item, 
                country:countries[index].country,
                description:q20_description[index].description,
                men:q20_men[index].men,
                women:q20_women[index].women,
                third_gender:q20_third_gender[index].third_gender,
                total:q20_total[index].total,

              
              };
              // item[index]["jurisdict"]=jurisdictions[index].jurisdict
              q20_data.push(newObj)
            });
          }
        }
          let new_data ={
            q20_data:q20_data,
            q20_checked_value:yes_no_value,
            others:$("input[name='peacekeeping_others_q20']").val()

          }
          // console.log(new_data)
          $.ajax({    //create an ajax request to display.php
                  type: "POST",
                  data:{
                    "_token": "{{ csrf_token() }}",
                    'question20':new_data,
                    'question_no':'20',
                  },
                  url: "/superadmin/case/temp-save-question20to40",             
                  success: function(response){ 
                    if (response){

                      alert("Question 20 has been saved temporary")
                    }else{
                      alert("Not Saved")
                    }
                  }
          });
    });
 
})

</script>  