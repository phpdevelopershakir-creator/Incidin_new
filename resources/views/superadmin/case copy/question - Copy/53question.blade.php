<?php
if($questiontitles[52]->status==0)
{

  ?>
@if(Auth::user()->can('53.question'))
<?php
  $number_cases = [
  1 =>'Health support', 
  2 =>'Compensation', 
  3 =>'Training', 
  4 =>'Psycho-social care',   
  5 =>'Shelter',   
  6 =>'Victim protection',
  7=>'Others (Specify)'
 ];
 ?>
<style>
  .othersText{
    display:none
  }
  .visibility{
    display:none
  }
</style>
    <div class="col-md-12 question53">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
             <span class="numbering">53</span>.
           @if (isset($questiontitles [52]))
         {{ $questiontitles[52]->title }}
         @endif
        </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">

 <div class="icheck-primary">
      <?php if(isset($question_53_data->q53_checked_value)) {?>

      <input 
      type="radio" 
      id="q53radioPrimary1" 
      class="fifty_three_status" 
      name="is_vots_received_assistance_q53" 
      <?=(isset($question_53_data->q53_checked_value) && $question_53_data->q53_checked_value=="1")?"checked":"" ;?>
 
      value="1">
      <?php }else {?>
     
      <input type="radio" id="q53radioPrimary1" class="fifty_three_status" name="is_vots_received_assistance_q53" checked value="1">
      <?php }?>
     
      <label for="q53radioPrimary1">
        Yes
      </label>
    </div>
    <div class="icheck-primary">
      <input 
      type="radio" 
      id="q53radioPrimary2" 
      class="fifty_three_status"
      name="is_vots_received_assistance_q53" 
      <?=(isset($question_53_data->q53_checked_value) && $question_53_data->q53_checked_value=="0")?"checked":"" ;?>

       value="0">
      <label for="q53radioPrimary2">
        No
      </label>
    </div>
    <div class="icheck-primary input-group mb-3">
      <input 
      type="radio" 
      id="q53radioPrimary3" 
      class="fifty_three_status" 
      name="is_vots_received_assistance_q53"  
      <?=(isset($question_53_data->q53_checked_value) && $question_53_data->q53_checked_value=="2")?"checked":"" ;?>

      value="2">
      <label for="q53radioPrimary3">
        Others
      </label><span class="col-md-6 mt--4 <?=(isset($question_53_data->q53_checked_value)   && ($question_53_data->q53_checked_value=='2')) ? '' : 'othersText' ;?>" style="margin-top:-8px;">
            <input 
            type="text" 
            id="q53others"  
            placeholder="Others "  
            class="form-control" 
            value="<?=(isset($question_53_data->others) && $question_53_data->others)?$question_53_data->others:"";?>"
            name="vots_received_assistance_others_q53"></span>
        
    </div>
    <div id ="53_question_view" class="<?=(isset($question_53_data->q53_checked_value) && ($question_53_data->q53_checked_value=="2" || $question_53_data->q53_checked_value=="0"))?"visibility":"";?>">
          <table id="addRowQ53" class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th rowspan="2" style="text-align: center; margin: bottom 45%;">Number of Case</th>
                <th colspan="6">Individual Coverage</th>
                <th></th>

              </tr>
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>3rd Gender</th>
                <th>Boy</th>
                <th>Girl</th>
                <th>Total</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php if(isset($question_53_data->q53_data) && count($question_53_data->q53_data)>0){ $i=1; ?>
              @foreach($question_53_data->q53_data  as $q53)
              <tr class="q53NoOfRow" id="rowOne<?=$i?>">
                <td>
                  <select name="number_of_case[]" id="q53_number_of_case" class="form-control q54Case">
                  <option  value=""  disabled selected>--Select number of case --</option>  
                      @foreach ($number_cases as $key => $item)
                      <option <?=(isset($q53)  &&  !empty($q53) && $q53->number_case==$key) ? 'selected' : '' ;?> value="{{ $key }}">{{$item}}</option>
                      @endforeach
                
                  </select><br>
                    <input  
                    type="input" 
                    value="<?= isset($q53->other) ? $q53->other :'' ;?>"  
                    id="q53_others_specify" name="q53_other_specify[]" 
                    class="form-control <?=(isset($q53->number_case) && $q53->number_case==7)?'':'otherSpecify';?>"
                    placeholder="Other (Specify)">

                  </td>
        
                  <td><input type="text" value="<?=isset($q53->men) && $q53->men?$q53->men:"";?>" name="q53_individual_coverage_men[]" id="q53_individual_coverage_men_<?=$i;?>" class="form-control q53Co q53_individual_coverage_men" for="<?=$i;?>"></td>
                  <td><input type="text" value="<?=isset($q53->women) && $q53->women?$q53->women:"";?>" name="q53_individual_coverage_women[]" id="q53_individual_coverage_women_<?=$i;?>" class="form-control q53Co q53_individual_coverage_women" for="<?=$i;?>"></td>
                  <td><input type="text" value="<?=isset($q53->third_gender) && $q53->third_gender?$q53->third_gender:"";?>" name="q53_individual_coverage_third_gender[]" id="q53_individual_coverage_third_gender_<?=$i;?>" class="form-control q53Co q53_individual_coverage_third_gender" for="<?=$i;?>"></td>
                  <td><input type="text" value="<?=isset($q53->boy) && $q53->boy?$q53->boy:"";?>" name="q53_individual_coverage_boy[]" id="q53_individual_coverage_boy_<?=$i;?>" class="form-control q53Co q53_individual_coverage_boy" for="<?=$i;?>"></td>
                  <td><input type="text" value="<?=isset($q53->girl) && $q53->girl?$q53->girl:"";?>" name="q53_individual_coverage_girl[]" id="q53_individual_coverage_girl_<?=$i;?>" class="form-control q53Co q53_individual_coverage_girl" for="<?=$i;?>"></td>
                  <td><input type="text" value="<?=isset($q53->total) && $q53->total?$q53->total:"";?>" name="q53_individual_coverage_total[]" id="q53_individual_coverage_total_<?=$i;?>" class="form-control q53_individual_coverage_total" readonly="true" for="<?=$i;?>"></td>
                  <td>
                  <?php if($i==1) {  ?>
                    <button id="addRowDatasQ53" type="button" class="btn btn-primary">+</i></button>
                    <?php }else { ?>
                  <button type="button" name="remove" id="<?=$i;?>" class="btn btn-danger q53btn_remove cicle">-</button></td>
                
                  <?php } ?>
                  </td>
                
                </tr>

                <?php $i++; ?>
                  @endforeach
                <?php }else { ?>
                <tr class="q53NoOfRow">
                <td>
                  <select name="number_of_case[]" id="q53_number_of_case" class="form-control q54Case">
                  <option  value=""  disabled selected>--Select number of case --</option>  
                      @foreach ($number_cases as $key => $item)
                      <option value="{{ $key }}">{{$item}}</option>
                      @endforeach
                
                  </select><br>
                    <input  type="input" id="q53_others_specify" name="q53_other_specify[]" class="form-control otherSpecify" placeholder="Other (Specify)">

                  </td>
        
                  <td><input type="text" name="q53_individual_coverage_men[]" id="q53_individual_coverage_men_1" class="form-control q53Co q53_individual_coverage_men" for="1"></td>
                  <td><input type="text" name="q53_individual_coverage_women[]" id="q53_individual_coverage_women_1" class="form-control q53Co q53_individual_coverage_women" for="1"></td>
                  <td><input type="text" name="q53_individual_coverage_third_gender[]" id="q53_individual_coverage_third_gender_1" class="form-control q53Co q53_individual_coverage_third_gender" for="1"></td>
                  <td><input type="text" name="q53_individual_coverage_boy[]" id="q53_individual_coverage_boy_1" class="form-control q53Co q53_individual_coverage_boy" for="1"></td>
                  <td><input type="text" name="q53_individual_coverage_girl[]" id="q53_individual_coverage_girl_1" class="form-control q53Co q53_individual_coverage_girl" for="1"></td>
                  <td><input type="text" name="q53_individual_coverage_total[]" id="q53_individual_coverage_total_1" class="form-control q53_individual_coverage_total" readonly="true" for="1"></td>
                  <td><button id="addRowDatasQ53" type="button" class="btn btn-primary">+</i></button></td>
                
                </tr>
                <?php } ?>

              </tbody>
          </table>
        </div>
            <br>
            <p class="text-right">
            <button type="button" class="btn btn-success" id="temp-save-question53">Save</button>       
          </p>
        </div>
      </div>
    </div>
    @endif

    <?php }
  ?>
    <script>
      $(function(){
        // var rowCount= 1;
        $("#addRowDatasQ53").click(function(){
          let rowCount =$('.q53NoOfRow').length+1;
          $("#addRowQ53").append(
            `<tr class="q53NoOfRow" id="rowOne${rowCount}">`+
            ` <td>
                <select name="number_of_case[]" id="q53_number_of_case" data-id="${rowCount}" class="form-control q53_number_of_case q54Case">
                  <option  value=""  disabled selected>--Select number of case --</option>  
                  <option value="1">Health support</option>   
                  <option value="2">Compensation</option>   
                  <option value="3">Training</option>   
                  <option value="4">Psycho-social care</option>   
                  <option value="5">Shelter</option>   
                  <option value="6">Victim protection</option>   
                  <option value="7">Others (Specify)</option>   
                </select><br>
                  <input  type="input" id="q53_others_specify_${rowCount}" name="q53_other_specify[]" class="form-control otherSpecify" placeholder="Other (Specify)" for="${rowCount}">

                </td>`+
                
                `<td><input type="text" name="q53_individual_coverage_men[]" id="q53_individual_coverage_men_${rowCount}" class="form-control q53Col q53_individual_coverage_men" for="${rowCount}"></td>
                <td><input type="text" name="q53_individual_coverage_women[]" id="q53_individual_coverage_women_${rowCount}" class="form-control q53Col q53_individual_coverage_women" for="${rowCount}"></td>
                <td><input type="text" name="q53_individual_coverage_third_gender[]" id="q53_individual_coverage_third_gender_${rowCount}" class="form-control q53Col q53_individual_coverage_third_gender" for="${rowCount}"></td>
                <td><input type="text" name="q53_individual_coverage_boy[]" id="q53_individual_coverage_boy_${rowCount}" class="form-control q53Col q53_individual_coverage_boy" for="${rowCount}"></td>
                <td><input type="text" name="q53_individual_coverage_girl[]" id="q53_individual_coverage_girl_${rowCount}" class="form-control q53Col q53_individual_coverage_girl" for="${rowCount}"></td>
                <td><input type="text" name="q53_individual_coverage_total[]" id="q53_individual_coverage_total_${rowCount}" class="form-control q53_individual_coverage_total" readonly="true" for="${rowCount}"></td>`+
                `<td><button type="button" name="remove" id="${rowCount}" class="btn btn-danger q53btn_remove circle">-</button></td>`+

            `</tr>`
          )
        });
        $(document).on('click', '.q53btn_remove', function() {
        var button_id = $(this).attr('id');
        $('#rowOne'+button_id+'').remove();
      });

  $("#addRowQ53").on('input', 'input.q53_individual_coverage_men,input.q53_individual_coverage_women,input.q53_individual_coverage_third_gender,input.q53_individual_coverage_boy,input.q53_individual_coverage_girl', function() {
        getTotalCost($(this).attr("for"));
      });
     
 // Using a new index rather than your global variable i
 function getTotalCost(ind) {
    var man = $('#q53_individual_coverage_men_'+ind).val()||0;
    var woman = $('#q53_individual_coverage_women_'+ind).val()||0;
    var third_gender = $('#q53_individual_coverage_third_gender_'+ind).val()||0;
    var boy = $('#q53_individual_coverage_boy_'+ind).val()||0;
    var girl = $('#q53_individual_coverage_girl_'+ind).val()||0;

    var totNumber = parseInt(man) + parseInt(woman)+parseInt(third_gender)+parseInt(boy) + parseInt(girl);
    var tot = totNumber;
    $('#q53_individual_coverage_total_'+ind).val(tot)||0;
    
    calculateSubTotal();
      }

  function calculateSubTotal() {
    var subtotal = 0;
    $('.q53_individual_coverage_total').each(function() {
      subtotal += parseFloat($(this).val());
    });
    
  };
  $('#q53_number_of_case').on("change",function(){
      
      $('.question53').find('#q53_others_specify').hide()
      $('.question53').find('#q53_others_specify').val("")
      if($(this).val()==="7"){
        $('.question53').find('#q53_others_specify').show()
      }
    });


$(document).on("change",".q53_number_of_case",function(){
  var specify_id = $(this).attr('data-id')
  // alert($(this).attr('data-id'))
  $(this).each(function(index,element){
      $('.question53').find('#q53_others_specify_'+specify_id).hide()
      $('.question53').find('#q53_others_specify_'+specify_id).val("")
      if($(this).val()==="7"){
        $('.question53').find('#q53_others_specify_'+specify_id).show()
      }
  }) 
}); 


$(document).on("click",'#temp-save-question53',function() {
    var q53_number_case = [],
      q53_other_specifies=[],
      q53_men=[],
      q53_women=[],
      q53_third_gender=[],
      q53_boys=[],
      q53_girls=[],
      q53_total=[];
      var q53_data=[];
      let yes_no_value=$("input[type='radio'][name='is_vots_received_assistance_q53']:checked").val()
      if(yes_no_value=='1'){
          $('select[name="number_of_case[]"]').each(function() {
              let number_case ={
                number_case:$(this).val()
              }
            q53_number_case.push(number_case);
          });
          $('input[name="q53_other_specify[]"]').each(function() {
              let other ={
                other:$(this).val()
              }
              q53_other_specifies.push(other);
              
           
              });
          $('input[name="q53_individual_coverage_men[]"]').each(function() {
        
              let men ={
                men:$(this).val()
              }
              q53_men.push(men);
          
           
          });
          $('input[name="q53_individual_coverage_women[]"]').each(function() {
            
              let women ={
                women:$(this).val()
              }
              q53_women.push(women);
          
           
          });
          $('input[name="q53_individual_coverage_third_gender[]"]').each(function() {
          
              let third_gender ={
                third_gender:$(this).val()
              }
              q53_third_gender.push(third_gender);
            
           
          });
          $('input[name="q53_individual_coverage_boy[]"]').each(function() {
           
              let boy ={
                boy:$(this).val()
              }
              q53_boys.push(boy);
            
           
          });
          $('input[name="q53_individual_coverage_girl[]"]').each(function() {
            
              let girl ={
                girl:$(this).val()
              }
              q53_girls.push(girl);
            
           
          });
          $('input[name="q53_individual_coverage_total[]"]').each(function() {
            
              let total ={
                total:$(this).val()
              }
              q53_total.push(total);
            
           
          });
      

    if(q53_number_case.length>0){
    jQuery.each(q53_number_case, function(index, item) {
      let newObj = { ...item, 
        number_case:q53_number_case[index].number_case,
        other:q53_other_specifies[index].other,
        men:q53_men[index].men,
        women:q53_women[index].women,
        third_gender:q53_third_gender[index].third_gender,
        boy:q53_boys[index].boy,
        girl:q53_girls[index].girl,
        total:q53_total[index].total
    };
    // item[index]["jurisdict"]=jurisdictions[index].jurisdict
        q53_data.push(newObj)
      });
    }
      }
let new_data={
        q53_data:q53_data,
        q53_checked_value:yes_no_value,
        others:$("input[name='vots_received_assistance_others_q53']").val()
      }  
      // console.log(new_data)
$.ajax({    //create an ajax request to display.php
        type: "POST",
        data:{
          "_token": "{{ csrf_token() }}",
          'question53':new_data,
          'question_no':'53',
        },
        url: "/superadmin/case/temp-save-question40to60",             
        success: function(response){ 
          if(response){
            alert("Question 53 has been saved temporary")
          }else{
            alert("Not Saved")
          }
        }
});

})
      })
    </script>