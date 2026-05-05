<?php
if($questiontitles[37]->status==0)
{

  ?>
@if(Auth::user()->can('38.question'))
<style>
  .othersText{
    display:none
  }
  .visibility{
    display:none
  }
</style>
<div class="col-md-12 question38">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
          <span class="numbering">38</span>.
           @if (isset($questiontitles [37]))
         {{ $questiontitles[37]->title }}
         @endif
      </h3>
        @php
        $counties=DB::table('countries')->get();
        @endphp
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>

     


    </div>
   
    <div class="card-body">
      <div class="icheck-primary">
      <?php if(isset($question_38_data->q38_checked_value)) { ?>

        <input 
        type="radio" 
        id="q38radioPrimary1" 
        class="thirty_eight_status" 
        name="is_law_enforcement_activities_q38" 
        <?=(isset($question_38_data->q38_checked_value)   && $question_38_data->q38_checked_value=='1') ? 'checked' : '' ;?> 
 
        value="1">
        <?php }else {?>
        <input type="radio" id="q38radioPrimary1" class="thirty_eight_status" name="is_law_enforcement_activities_q38" checked value="1">
        <?php }?>
        <label for="q38radioPrimary1">
          Yes
        </label>
      </div>
      <div class="icheck-primary">
        <input 
        type="radio" 
        id="q38radioPrimary2" 
        class="thirty_eight_status" 
        name="is_law_enforcement_activities_q38"  
        <?=(isset($question_38_data->q38_checked_value)   && $question_38_data->q38_checked_value=='0') ? 'checked' : '' ;?> 

        value="0">
        <label for="q38radioPrimary2">
          No
        </label>
      </div>
      <div class="icheck-primary input-group mb-3">
        <input 
        type="radio" 
        id="q38radioPrimary3" 
        class="thirty_eight_status" 
        name="is_law_enforcement_activities_q38"  
        <?=(isset($question_38_data->q38_checked_value)   && $question_38_data->q38_checked_value=='2') ? 'checked' : '' ;?> 

        value="2">
        <label for="q38radioPrimary3">
          Others
        </label><span class="col-md-6 mt--4 <?=(isset($question_38_data->q38_checked_value)   && ($question_38_data->q38_checked_value=='2')) ? '' : 'othersText' ;?>" style="margin-top:-8px;">
            <input 
            type="text" 
            id="q38others"  
            placeholder="Others "  
            class="form-control" 
            value="<?=(isset($question_38_data->others)) ? $question_38_data->others : '' ;?>"
            name="law_enforcement_activities_others_q38"></span>
        
      </div>
      <div id ="38_question_view" class="card-body row <?=(isset($question_38_data->q38_checked_value)   && ($question_38_data->q38_checked_value=='2' || $question_38_data->q38_checked_value=='0')) ? 'visibility' : '' ;?>">
      <table id="addRowQ38" class="table table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">Country</th>
            <th scope="col">Sex Trafficking</th>
            <th scope="col">Labour Trafficking</th>
            <th scope="col">Other/Unspecific Trafficking</th>
            <th scope="col">Total</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php if(isset($question_38_data->q38_data) && count($question_38_data->q38_data)>0){ $i=1; ?>
          @foreach($question_38_data->q38_data  as $q38)
          <tr id="q38row<?=$i?>">
        
            <td>
              <select name="q38_country_id[]" id="" class="form-control q38_country_id">
                <option value="" disabled selected>---Choose County--</option>
                @foreach ($counties as $item)
                <option <?=(isset($q38) &&  !empty($q38) && $q38->country==$item->id)? 'selected' : '' ;?> value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
              </select>
            </td>

            <td><input  class="form-control sex_trafficking" type='number' value="{{$q38->sex_traffick}}" data-type="sex_trafficking" id='sex_trafficking_<?= $i ?>' name="sex_trafficking[]" for="<?= $i ?>"/></td> 
            <td><input class="form-control labour_trafficking" type='number' value="{{$q38->labour_traffick}}" id='labour_trafficking_<?= $i ?>' name="labour_trafficking[]" for="<?= $i ?>"/></td>
            <td><input class="form-control other_unspecific_trafficking" type='number' value="{{$q38->other_traffick}}" data-type="other_unspecific_trafficking" id='other_unspecific_trafficking_<?= $i ?>' name="other_unspecific_trafficking[]" for="<?= $i ?>"/></td> 
            <td><input class="form-control total" type='text' value="{{$q38->total}}" id='total_<?= $i ?>' name='total[]' for='<?= $i ?>' readonly/></td>
            <td>
            <?php if($i==1) {  ?>
              <button id="addRowDatasQ38" type="button" class="btn btn-sm btn-primary">+</i></button>
              <?php }else { ?>
              <button type="button" name="remove" id="<?=$i;?>" class="btn btn-danger q38btn_remove cicle">-</button></td>
              <?php } ?>
            </td>
          
          </tr>
          <?php $i++; ?>
          @endforeach
          <?php }else { ?>

          <tr>
            <td>
              <select name="q38_country_id[]" id="" class="form-control q38_country_id">
                <option value="" disabled selected>---Choose County--</option>
                @foreach ($counties as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
              </select>
            </td>

            <td><input  class="form-control sex_trafficking" type='number' data-type="sex_trafficking" id='sex_trafficking_1' name="sex_trafficking[]" for="1"/></td> 
            <td><input class="form-control labour_trafficking" type='number' id='labour_trafficking_1' name="labour_trafficking[]" for="1"/></td>
            <td><input class="form-control other_unspecific_trafficking" type='number' data-type="other_unspecific_trafficking" id='other_unspecific_trafficking_1' name="other_unspecific_trafficking[]" for="1"/></td> 
            <td><input class="form-control total" type='text' id='total_1' name='total[]' for='1' readonly/></td>
            <td><button id="addRowDatasQ38" type="button" class="btn btn-sm btn-primary">+</i></button></td>
          
          </tr>
          <?php } ?>
     




        </tbody>
      </table>
      
      </div>
      <br>
      <p class="text-right">
      <button type="button" class="btn btn-success" id="temp-save-question38">Save</button>       
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
  $("#addRowDatasQ38").click(function(){
    var rowCount =$('.q38_country_id').length+1;
    $("#addRowQ38").append(
      
    '<tr id="q38row'+rowCount+'">'+
    
    `<td>
      <select name="q38_country_id[]" id="" class="form-control q38_country_id">
        <option value="" disabled selected>---Choose County--</option>
        @foreach ($counties as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
      </select>
    </td>`+

    '<td><input class="form-control sex_trafficking" type="number" data-type="sex_trafficking" id="sex_trafficking_'+rowCount+'" name="sex_trafficking[]" for="'+rowCount+'"/></td>'+
    '<td><input class="form-control labour_trafficking" type="number" data-type="labour_trafficking" id="labour_trafficking_'+rowCount+'" name="labour_trafficking[]" for="'+rowCount+'"/></td>'+
    '<td><input class="form-control other_unspecific_trafficking" type="number" data-type="other_unspecific_trafficking" id="other_unspecific_trafficking_'+rowCount+'" name="other_unspecific_trafficking[]" for="'+rowCount+'"/></td>'+

    '<td><input class="form-control total" type="number" data-type="total" id="total_'+rowCount+'" name="total[]" for="'+rowCount+'" readonly="true"/></td>'+
    
    '<td><button type="button" name="remove" id="'+rowCount+'" class="btn btn-danger q38btn_remove cicle">-</button></td>'+

         
    '</tr>'
      
    )
  });
  $(document).on('click', '.q38btn_remove', function() {
        var button_id = $(this).attr('id');
        $('#q38row'+button_id+'').remove();
      });

$("#addRowQ38").on('input', 'input.sex_trafficking,input.labour_trafficking,input.other_unspecific_trafficking', function() {
        getTotalCost($(this).attr("for"));
      });
 // Using a new index rather than your global variable i
 function getTotalCost(ind) {
    var man = $('#sex_trafficking_'+ind).val()||0;
    var woman = $('#labour_trafficking_'+ind).val()||0;
    var third_gender = $('#other_unspecific_trafficking_'+ind).val()||0;
   

    var totNumber = parseInt(man) + parseInt(woman)+parseInt(third_gender);
    var tot = totNumber;
    $('#total_'+ind).val(tot)||0;
    calculateSubTotal();
      }

  function calculateSubTotal() {
    var subtotal = 0;
    $('.total').each(function() {
      subtotal += parseFloat($(this).val());
    });
    // alert(subtotal)
  } 
//Temporary Save 
$(document).on("click",'#temp-save-question38',function() {
          var q38_countries = [],
              q38_sex_trafficks=[],
              q38_labour_trafficks=[],
              q38_other_trafficks=[],
              q38_totals=[],
              q38_data=[];
          let yes_no_value=$("input[type='radio'][name='is_law_enforcement_activities_q38']:checked").val()
          if(yes_no_value=='1'){
              $('select[name="q38_country_id[]"]').each(function() {
            if($(this).val()){
              let country ={
                country:$(this).val()
              }
              q38_countries.push(country);
            }
           
          });
          $('input[name="sex_trafficking[]"]').each(function() {

              let sex_traffick ={
                sex_traffick:$(this).val()
              }
             
              q38_sex_trafficks.push(sex_traffick);
              
          });
          $('input[name="labour_trafficking[]"]').each(function() {
              let labour_traffick ={
                labour_traffick:$(this).val()
              }             
              q38_labour_trafficks.push(labour_traffick);
              

           });
           $('input[name="other_unspecific_trafficking[]"]').each(function() {
              let other_traffick ={
                other_traffick:$(this).val()
              }             
              q38_other_trafficks.push(other_traffick);

           });
           $('input[name="total[]"]').each(function() {
              let total ={
                total:$(this).val()
              }             
              q38_totals.push(total);


           });
          
          
           
          if(q38_countries.length>0){
            jQuery.each(q38_countries, function(index, item) {
              let newObj = { 
                    ...item, 
                    country:q38_countries[index].country,
                    sex_traffick:q38_sex_trafficks[index].sex_traffick,
                    labour_traffick:q38_labour_trafficks[index].labour_traffick,
                    other_traffick:q38_other_trafficks[index].other_traffick,
                    total:q38_totals[index].total,
                  };
              // item[index]["jurisdict"]=jurisdictions[index].jurisdict
             
              q38_data.push(newObj)
            });
          }
        }
          let new_data = {
            q38_data:q38_data,
            q38_checked_value:yes_no_value,
            others:$("input[name='law_enforcement_activities_others_q38']").val()

          }

          // console.log(new_data)
   
          $.ajax({    //create an ajax request to display.php
                  type: "POST",
                  data:{
                    "_token": "{{ csrf_token() }}",
                    'question38':new_data,
                    'question_no':'38',
                  },
                  url: "/superadmin/case/temp-save-question40to60",             
                  success: function(response){ 
                    if(response){
                      alert("Question 38 has been saved temporary")

                    }else{
                      alert("Not Saved")
                    }
                  }
          });
    })
 
})

</script>  