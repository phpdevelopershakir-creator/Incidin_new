<?php
if($questiontitles[18]->status==0)
{

  ?>
@if(Auth::user()->can('19.question'))
<style>
  .othersText{
    display:none
  }
  .visibility{
    display:none
  }
</style>
<div class="col-md-12 question19">
 <div class="card card-outline collapsed-card">
   <div class="card-header">
     <h3 class="card-title">
       <span class="numbering">19</span>.
           @if (isset($questiontitles [18]))
         {{ $questiontitles[18]->title }}
         @endif

      <h3>
     <div class="card-tools">
       <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
       </button>
     </div>
   </div>
   @php
   $counties=DB::table('countries')->get();
   @endphp

   <div class="card-body">
     <div class="icheck-primary">
     <?php if(isset($question_19_data->q19_checked_value)){?>

       <input 
       type="radio" 
       id="q19radioNineteen1"  
       class="nineteen_status"
        name="is_criminal_accountability_q19" 
        <?=(isset($question_19_data->q19_checked_value) && $question_19_data->q19_checked_value=="1")?"checked":"" ;?> 
 
        value="1">
        <?php }else {?>
       
       <input type="radio" id="q19radioNineteen1"  class="nineteen_status" name="is_criminal_accountability_q19" checked value="1">
       <?php }?>
       
       <label for="q19radioNineteen1">
         Yes
       </label>
     </div>
     <div class="icheck-primary">
       <input 
       type="radio" 
       id="q19radioNineteen2"  
       class="nineteen_status" 
       <?=(isset($question_19_data->q19_checked_value) && $question_19_data->q19_checked_value=="0")?"checked":"" ;?> 

       name="is_criminal_accountability_q19" value="0">
       <label for="q19radioNineteen2">
         No
       </label>
     </div>

     <div class="icheck-primary input-group mb-3">
       <input 
       type="radio" 
       id="q19radioNineteen3"  
       class="nineteen_status" 
       name="is_criminal_accountability_q19" 
       <?=(isset($question_19_data->q19_checked_value) && $question_19_data->q19_checked_value=="2")?"checked":"" ;?> 

       value="2">
       <label for="q19radioNineteen3">
         Others
       </label><span class="col-md-6 mt--4 <?=(isset($question_19_data->q19_checked_value) && $question_19_data->q19_checked_value=="2")?"":"othersText" ;?>" >
            <input 
            type="text" 
            id="q19others"  
            placeholder="Others "  
            class="form-control" 
            
            value="<?=(isset($question_19_data->others) && $question_19_data->others)?$question_19_data->others:"";?>"

            name="is_criminal_accountability_others_q19"></span>
     </div>
    <div id="nineteen_question_view" class="card-body row <?=(isset($question_19_data->q19_checked_value)) && ($question_19_data->q19_checked_value=="2" || $question_19_data->q19_checked_value=="0" )?"visibility":"" ;?>">
     <table id="addRowQ19" class="table table-bordered text-center">
       <thead class="">
         <tr>
           <th rowspan="3" style="text-align: center; margin: bottom 45%;">Country where
             posted</th>
           <th rowspan="3">Description</th>
           <tr>
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
    <?php if(isset($question_19_data->q19_data) && count($question_19_data->q19_data)>0){ $i=1; ?>
          @foreach($question_19_data->q19_data  as $q19)
          <tr class="q19QRow" id="q19row<?=$i?>">
    
           <td> <select name="q19_country_id[]" class="form-control">
                <option value="" disabled selected>---Choose County--</option>
              @foreach ($counties as $item)
              <option <?=(isset($q19)  &&  !empty($q19) && $q19->country==$item->id ) ? 'selected' : '' ;?> value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
             </select></td>
           <td><input type="text" name="q19_description[]" value="<?=(isset($q19->description) && !empty($q19->description))?$q19->description:"";?>" class="form-control description"></td>
           <td><input  class="form-control q19_number_cases_men" type='number' data-type="q19_number_cases_men" value="<?=(isset($q19->men) && !empty($q19->men))?$q19->men:"";?>" id='q19_number_cases_men_<?=$i;?>' name="q19_number_cases_men[]" for="<?=$i;?>"/></td> 
            <td><input class="form-control q19_number_cases_women" type='number' id='q19_number_cases_women_<?=$i;?>' value="<?=(isset($q19->women) && !empty($q19->women))?$q19->women:"";?>" name="q19_number_cases_women[]" for="<?=$i;?>"/></td>
            <td><input class="form-control q19_number_cases_third_gender" type='number' data-type="q19_number_cases_third_gender" value="<?=(isset($q19->third_gender) && !empty($q19->third_gender))?$q19->third_gender:"";?>" id='q19_number_cases_third_gender_<?=$i;?>' name="q19_number_cases_third_gender[]" for="<?=$i;?>"/></td> 
            <td><input class="form-control q19_number_cases_total" type='text' id='q19_number_cases_total_<?=$i;?>' value="<?=(isset($q19->total) && !empty($q19->total))?$q19->total:"";?>" name='q19_number_cases_total[]' for='<?=$i;?>' readonly/></td>
           <td>
           <?php if($i==1) {  ?>
            <button id="addRowDatasQ19" type="button" class="btn btn-sm btn-primary">+</i></button>
            <?php }else { ?>
              <button type="button" name="remove" id="<?= $i;?>" class="btn btn-danger q19btn_remove cicle">-</button></td>
              <?php } ?>
          </td>

         </tr>


         <?php $i++; ?>
          @endforeach
        <?php }else { ?>
         <tr class="q19QRow">
    
           <td> <select name="q19_country_id[]" class="form-control">
                <option value="" disabled selected>---Choose County--</option>
              @foreach ($counties as $item)
              <option value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
             </select></td>
           <td><input type="text" name="q19_description[]"  class="form-control description"></td>
           <td><input  class="form-control q19_number_cases_men" type='number' data-type="q19_number_cases_men" id='q19_number_cases_men_1' name="q19_number_cases_men[]" for="1"/></td> 
            <td><input class="form-control q19_number_cases_women" type='number' id='q19_number_cases_women_1' name="q19_number_cases_women[]" for="1"/></td>
            <td><input class="form-control q19_number_cases_third_gender" type='number' data-type="q19_number_cases_third_gender" id='q19_number_cases_third_gender_1' name="q19_number_cases_third_gender[]" for="1"/></td> 
            <td><input class="form-control q19_number_cases_total" type='text' id='q19_number_cases_total_1' name='q19_number_cases_total[]' for='1' readonly/></td>
           <td><button id="addRowDatasQ19" type="button" class="btn btn-sm btn-primary">+</i></button></td>

         </tr>
         <?php } ?>
    </tbody>


     </table>
   </div>
   <br>
      <p class="text-right">
        <button type="button" class="btn btn-success" id="temp-save-question19">Save</button>       
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
  $("#addRowDatasQ19").click(function(){
    let rowCount = $('.q19QRow').length+1;
    $("#addRowQ19").append(
      
    '<tr class="q19QRow" id="q19row'+rowCount+'">'+
    
        
          `<td> <select name="q19_country_id[]" class="form-control">
                <option value="" disabled selected>---Choose County--</option>
              @foreach ($counties as $item)
              <option value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
             </select></td>`+
           '<td><input type="text" name="q19_description[]"  class="form-control description"/></td>'+
           '<td><input class="form-control q19_number_cases_men" type="number" data-type="q19_number_cases_men" id="q19_number_cases_men_'+rowCount+'" name="q19_number_cases_men[]" for="'+rowCount+'"/></td>'+
           '<td><input class="form-control q19_number_cases_women" type="number" data-type="q19_number_cases_women" id="q19_number_cases_women_'+rowCount+'" name="q19_number_cases_women[]" for="'+rowCount+'"/></td>'+
           '<td><input class="form-control q19_number_cases_third_gender" type="number" data-type="q19_number_cases_third_gender" id="q19_number_cases_third_gender_'+rowCount+'" name="q19_number_cases_third_gender[]" for="'+rowCount+'"/></td>'+
           '<td><input class="form-control q19_number_cases_total" type="number" data-type="q19_number_cases_total" id="q19_number_cases_total_'+rowCount+'" name="q19_number_cases_total[]" for="'+rowCount+'" readonly="true"/></td>'+
           '<td><button type="button" name="remove" id="'+rowCount+'" class="btn btn-danger q19btn_remove cicle">-</button></td>'+

         
    '</tr>'
      
    )
  });
  $(document).on('click', '.q19btn_remove', function() {
        var button_id = $(this).attr('id');
        $('#q19row'+button_id+'').remove();
      });
      $("#addRowQ19").on('input', 'input.q19_number_cases_men,input.q19_number_cases_women,input.q19_number_cases_third_gender', function() {
        getTotalCost($(this).attr("for"));
      });
 // Using a new index rather than your global variable i
 function getTotalCost(ind) {
    var man = $('#q19_number_cases_men_'+ind).val()||0;
    var woman = $('#q19_number_cases_women_'+ind).val()||0;
    var third_gender = $('#q19_number_cases_third_gender_'+ind).val()||0;


    var totNumber = parseInt(man) + parseInt(woman)+parseInt(third_gender);
    var tot = totNumber;
    $('#q19_number_cases_total_'+ind).val(tot)||0;
    calculateSubTotal();
      }

  function calculateSubTotal() {
    var subtotal = 0;
    $('.q19_number_cases_total').each(function() {
      subtotal += parseFloat($(this).val());
    });
    
  }
 

  $(document).on("click",'#temp-save-question19',function() {
          var countries = [],
              q19_description=[],
              q19_men=[],
              q19_women=[],
              q19_third_gender=[],
              q19_total=[];
              
          $('select[name="q19_country_id[]"]').each(function() {
              let country ={
                country:$(this).val()
              }             
              countries.push(country);
           });

          $('input[name="q19_description[]"]').each(function() {
            if($(this).val()){
              let description ={
                description:$(this).val()
              }
              q19_description.push(description);
            }
           
          });
          $('input[name="q19_number_cases_men[]"]').each(function() {
              let men ={
                men:$(this).val()
              }
              q19_men.push(men);
            
           
          });
          $('input[name="q19_number_cases_women[]"]').each(function() {
              let women ={
                women:$(this).val()
              }
              q19_women.push(women);
            
           
          });
          $('input[name="q19_number_cases_third_gender[]"]').each(function() {
              let third_gender ={
                third_gender:$(this).val()
              }
              q19_third_gender.push(third_gender);
            
           
          });
          $('input[name="q19_number_cases_total[]"]').each(function() {
              let total ={
                total:$(this).val()
              }
              q19_total.push(total);
            
           
          });
          let yes_no_value=$("input[type='radio'][name='is_criminal_accountability_q19']:checked").val()

          var q19_data=[];
          if(yes_no_value=="1"){

         
          if(countries.length>0){
            jQuery.each(countries, function(index, item) {
              let newObj = { ...item, 
                description:q19_description[index].description,
                men:q19_men[index].men,
                women:q19_women[index].women,
                third_gender:q19_third_gender[index].third_gender,
                total:q19_total[index].total,

              
              };
              // item[index]["jurisdict"]=jurisdictions[index].jurisdict
              q19_data.push(newObj)
            });
          }
        }
          let new_data ={
            q19_data:q19_data,
            q19_checked_value:yes_no_value,
            others:$("input[name='is_criminal_accountability_others_q19']").val()

          }
          // console.log(new_data)
          $.ajax({    //create an ajax request to display.php
                  type: "POST",
                  data:{
                    "_token": "{{ csrf_token() }}",
                    'question19':new_data,
                    'question_no':'19',
                  },
                  url: "/superadmin/case/temp-save-question",             
                  success: function(response){ 
                    if (response){

                      alert("Question 19 has been saved temporary")
                    }else{
                      alert("Not Saved")
                    }
                  }
          });
    });
})

</script>  