<?php
if($questiontitles[41]->status==0)
{

  ?>
@if(Auth::user()->can('42.question'))
<?php 
$division_on = [
  1 =>'Barisal', 
  2 =>'Chattogram', 
  3 =>'Dhaka', 
  4 =>'Khulna',   
  5 =>'Mymensingh',   
  6 =>'Rajshahi',
  7 =>'Sylhet'
];

?>
<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
          <span class="numbering">42</span>.
           @if (isset($questiontitles [41]))
         {{ $questiontitles[41]->title }}
         @endif
    </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <h2>Conviction of Internal Trafficking by Division</h2>
      <h3>Total number of persons convicted of trafficking for Sexual exploitation</h3>
      <input type="hidden" name="q42_type[]" value="1">
      <table id="addRowQ42Sexual" class="table table-bordered text-center">
        <thead>
          <tr>
            <th>Division</th>
            <th>Male</th>
            <th>Female</th>
            <th>3rd Gender</th>
            <th>Total</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php if(isset($question_42_data_one->q42_data_one) && count($question_42_data_one->q42_data_one)>0){ $i=1; ?>
          @foreach($question_42_data_one->q42_data_one  as $q42_one)
          <tr id="rowOne<?=$i?>">
            <td>
              <select name="q42_sexual_exploitation_division_id[]" id="" class="form-control q42_sexual_exploitation_division_id q42DivisionA">
                <option value="0">--Select Division--</option>
                @foreach ($division_on as $key => $item)
                  <option  <?=(isset($q42_one)  &&  !empty($q42_one) && $q42_one->division==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                @endforeach
               
                </select>
                  
              </td>
            <td><input type="text" value="<?=(isset($q42_one->men_one))?$q42_one->men_one:""?>" name="q42_sexual_men[]" id="q42_sexual_exploit_male_<?= $i ?>" class="form-control q42_sexual_exploit_male q42MenA" for="<?= $i ?>"></td>
            <td><input type="text" value="<?=(isset($q42_one->female_one))?$q42_one->female_one:""?>" name="q42_sexual_women[]" id="q42_sexual_exploit_female_<?= $i ?>" class="form-control q42_sexual_exploit_female q42WomenA" for="<?= $i ?>"></td>
            <td><input type="text" value="<?=(isset($q42_one->third_gender_one))?$q42_one->third_gender_one:""?>" name="q42_sexual_third_gender[]" id="q42_sexual_exploit_third_gender_<?= $i ?>" class="form-control q42_sexual_exploit_third_gender q423rdGA" for="<?= $i ?>"></td>
            <td><input type="text" value="<?=(isset($q42_one->total_one))?$q42_one->total_one:""?>" name="q42_sexual_total[]" id="q42_sexual_exploit_total_<?= $i ?>" class="form-control q42_sexual_exploit_total q42TotalA" readonly="true" for="<?= $i ?>"></td>
            <td>
            <?php if($i==1) {  ?>
              <button id="addRowDatasQ42Sexual" type="button" class="btn btn-primary">+</i></button>
              <?php }else { ?>
                  <button type="button" name="remove" id="<?=$i;?>" class="btn btn-danger sexual_btn_remove cicle">-</button></td>
                
              <?php } ?>
            </td>
          
          </tr>
          <?php $i++; ?>
          @endforeach

          <?php }else { ?>
          <tr>
            <td>
              <select name="q42_sexual_exploitation_division_id[]" id="" class="form-control q42_sexual_exploitation_division_id q42DivisionA">
                <option value="0">--Select Division--</option>
                @foreach ($division_on as $key => $item)
                  <option  <?=(isset($q42_one)  &&  !empty($q42_one) && $q42_one->division==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                @endforeach
               
                </select>
                  
              </td>
            <td><input type="text" name="q42_sexual_men[]" id="q42_sexual_exploit_male_1" class="form-control q42_sexual_exploit_male q42MenA" for="1"></td>
            <td><input type="text" name="q42_sexual_women[]" id="q42_sexual_exploit_female_1" class="form-control q42_sexual_exploit_female q42WomenA" for="1"></td>
            <td><input type="text" name="q42_sexual_third_gender[]" id="q42_sexual_exploit_third_gender_1" class="form-control q42_sexual_exploit_third_gender q423rdGA" for="1"></td>
            <td><input type="text" name="q42_sexual_total[]" id="q42_sexual_exploit_total_1" class="form-control q42_sexual_exploit_total q42TotalA" readonly="true" for="1"></td>
            <td><button id="addRowDatasQ42Sexual" type="button" class="btn btn-primary">+</i></button></td>
          
          </tr>
          <?php } ?>
        
        </tbody>
      </table>
      <br>
      <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question42A">Save</button>       
      </p>
</div>
      
      <div class="card-body">
      <h3>Total number of persons convicted for labour Trafficking</h3>
      <input type="hidden" name="q42_type[]" value="2">
      <table id="addRowQ42Labour" class="table table-bordered text-center">
        <thead>
          <tr>
            <th>Division</th>
            <th>Male</th>
            <th>Female</th>
            <th>3rd Gender</th>
            <th>Total</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php if(isset($question_42_data_two->q42_data_two) && count($question_42_data_two->q42_data_two)>0){ $i=1; ?>
          @foreach($question_42_data_two->q42_data_two  as $q42_two)
          <tr id="rowTwo<?=$i?>">
            <td>
              <select name="q42_sexual_exploitation_division_id[]" id="" class="form-control q42_labour_traffick_division_id q42DivisionB">
                <option value="">--Select Division--</option>
                @foreach ($division_on as $key => $item)
                  <option  <?=(isset($q42_two)  &&  !empty($q42_two) && $q42_two->division==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                    @endforeach
                
                </select>
            </td>
            <td><input type="text" value="<?=(isset($q42_two->men_two))?$q42_two->men_two:""?>" name="q42_sexual_men[]" id="q42_labour_traffick_male_<?= $i ?>" class="form-control q42_labour_traffick_male q42MenB" for="<?= $i ?>"></td>
            <td><input type="text" value="<?=(isset($q42_two->female_two))?$q42_two->female_two:""?>" name="q42_sexual_women[]" id="q42_labour_traffick_female_<?= $i ?>" class="form-control q42_labour_traffick_female q42WomenB" for="<?= $i ?>"></td>
            <td><input type="text" value="<?=(isset($q42_two->third_gender_two))?$q42_two->third_gender_two:""?>" name="q42_sexual_third_gender[]" id="q42_labour_traffick_third_gender_<?= $i ?>" class="form-control q42_labour_traffick_third_gender q423rdGB" for="<?= $i ?>"></td>
            <td><input type="text" value="<?=(isset($q42_two->total_two))?$q42_two->total_two:""?>" name="q42_sexual_total[]" id="q42_labour_traffick_total_<?= $i ?>" class="form-control q42_labour_traffick_total q42TotalB" readonly="true" for="<?= $i ?>"></td>
            <td>
            <?php if($i==1) {  ?>
              <button id="addRowDatasQ42Labour" type="button" class="btn btn-primary">+</i></button>
              <?php }else { ?>
                  <button type="button" name="remove" id="<?=$i;?>" class="btn btn-danger labour_btn_remove cicle">-</button></td>
                
              <?php } ?>
            </td>
          </tr>

          <?php $i++; ?>
          @endforeach

          <?php }else { ?>
          <tr>
            <td>
              <select name="q42_sexual_exploitation_division_id[]" id="" class="form-control q42_labour_traffick_division_id q42DivisionB">
                <option value="">--Select Division--</option>
                @foreach ($division_on as $key => $item)
                  <option  <?=(isset($q42_two)  &&  !empty($q42_two) && $q42_two->division==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                    @endforeach
                
                </select>
            </td>
            <td><input type="text" name="q42_sexual_men[]" id="q42_labour_traffick_male_1" class="form-control q42_labour_traffick_male q42MenB" for="1"></td>
            <td><input type="text" name="q42_sexual_women[]" id="q42_labour_traffick_female_1" class="form-control q42_labour_traffick_female q42WomenB" for="1"></td>
            <td><input type="text" name="q42_sexual_third_gender[]" id="q42_labour_traffick_third_gender_1" class="form-control q42_labour_traffick_third_gender q423rdGB" for="1"></td>
            <td><input type="text" name="q42_sexual_total[]" id="q42_labour_traffick_total_1" class="form-control q42_labour_traffick_total q42TotalB" readonly="true" for="1"></td>
            <td><button id="addRowDatasQ42Labour" type="button" class="btn btn-primary">+</i></button></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <br>
      <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question42B">Save</button>       
      </p>
</div>
<div class="card-body">
      <h3>Total number of persons convicted of trafficking for International Trafficking</h3>
      <input type="hidden" name="q42_type[]" value="3">
      <table id="addRowQ42International" class="table table-bordered text-center">
        <thead>
          <tr>
            <th>Division</th>
            <th>Male</th>
            <th>Female</th>
            <th>3rd Gender</th>
            <th>Total</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php if(isset($question_42_data_three->q42_data_three) && count($question_42_data_three->q42_data_three)>0){ $i=1; ?>
          @foreach($question_42_data_three->q42_data_three  as $q42_three)
          <tr id="rowThree<?=$i?>">
            <td>
              <select name="q42_sexual_exploitation_division_id[]" id="" class="form-control q42_international_traffick_division_id q42DivisionC">
                <option value="">--Select Division--</option>
                @foreach ($division_on as $key => $item)
                  <option  <?=(isset($q42_three)  &&  !empty($q42_three) && $q42_three->division==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                @endforeach
                
              </select>
            </td>
            <td><input type="text" value="<?=(isset($q42_three->men_three))?$q42_three->men_three:""?>" name="q42_sexual_men[]" id="q42_international_traffick_male_<?= $i ?>" class="form-control q42_international_traffick_male q42MenC" for="<?= $i ?>"></td>
            <td><input type="text" value="<?=(isset($q42_three->female_three))?$q42_three->female_three:""?>" name="q42_sexual_women[]" id="q42_international_traffick_female_<?= $i ?>" class="form-control q42_international_traffick_female q42WomenC" for="<?= $i ?>"></td>
            <td><input type="text" value="<?=(isset($q42_three->third_gender_three))?$q42_three->third_gender_three:""?>" name="q42_sexual_third_gender[]" id="q42_international_traffick_third_gender_<?= $i ?>" class="form-control q42_international_traffick_third_gender q423rdGC" for="<?= $i ?>"></td>
            <td><input type="text" value="<?=(isset($q42_three->total_three))?$q42_three->total_three:""?>" name="q42_sexual_total[]" id="q42_international_traffick_total_<?= $i ?>" class="form-control q42_international_traffick_total q42TotalC" readonly="true" for="<?= $i ?>"></td>
            <td>
            <?php if($i==1) {  ?>
              <button id="addRowDatasQ42International" type="button" class="btn btn-primary">+</i></button>
              <?php }else { ?>
                  <button type="button" name="remove" id="<?=$i;?>" class="btn btn-danger btn_remove_international cicle">-</button></td>
                
              <?php } ?>
            </td>
          </tr>
          <?php $i++; ?>
          @endforeach

          <?php }else { ?>

          <tr>
            <td>
              <select name="q42_sexual_exploitation_division_id[]" id="" class="form-control q42_international_traffick_division_id q42DivisionC">
                <option value="">--Select Division--</option>
                @foreach ($division_on as $key => $item)
                  <option  <?=(isset($q42_three)  &&  !empty($q42_three) && $q42_three->division==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                @endforeach
                
              </select>
            </td>
            <td><input type="text" name="q42_sexual_men[]" id="q42_international_traffick_male_1" class="form-control q42_international_traffick_male q42MenC" for="1"></td>
            <td><input type="text" name="q42_sexual_women[]" id="q42_international_traffick_female_1" class="form-control q42_international_traffick_female q42WomenC" for="1"></td>
            <td><input type="text" name="q42_sexual_third_gender[]" id="q42_international_traffick_third_gender_1" class="form-control q42_international_traffick_third_gender q423rdGC" for="1"></td>
            <td><input type="text" name="q42_sexual_total[]" id="q42_international_traffick_total_1" class="form-control q42_international_traffick_total q42TotalC" readonly="true" for="1"></td>
            <td><button id="addRowDatasQ42International" type="button" class="btn btn-primary">+</i></button></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <br>
      <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question42C">Save</button>       
      </p>
</div>
    </div>
  </div>
</div>

@endif
<?php }
  ?>
<script>

  $(function(){
    // var rowCountOne = 1;
    //Start Sexual Exploitation
    $('#addRowDatasQ42Sexual').click(function(){
      let rowCountOne = $('.q42DivisionA').length+1;
      $('#addRowQ42Sexual').append(
        `<tr id="rowOne${rowCountOne}">`+
        `<td>
              <select name="q42_sexual_exploitation_division_id[]" id="q42_sexual_exploitation_division_id" class="form-control q42DivisionA">
                <option value="">--Select Division--</option>
                <option value="1">Barisal</option>
                <option value="2">Chattogram</option>
                <option value="3">Dhaka</option>
                <option value="4">Khulna</option>
                <option value="5">Mymensingh</option>
                <option value="6">Rajshahi</option>
                <option value="7">Sylhet</option>
                </select>
                  
              </td>`+
              `<input type="hidden" name="q42_type[]" value="1" class="form-control">`+
            `<td><input type="text" name="q42_sexual_men[]" id="q42_sexual_exploit_male_${rowCountOne}" class="form-control q42_sexual_exploit_male q42MenA" for="${rowCountOne}"></td>`+
            `<td><input type="text" name="q42_sexual_women[]" id="q42_sexual_exploit_female_${rowCountOne}" class="form-control q42_sexual_exploit_female q42WomenA" for="${rowCountOne}"></td>`+
            `<td><input type="text" name="q42_sexual_third_gender[]" id="q42_sexual_exploit_third_gender_${rowCountOne}" class="form-control q42_sexual_exploit_third_gender q423rdGA" for="${rowCountOne}"></td>`+
            `<td><input type="text" name="q42_sexual_total[]" id="q42_sexual_exploit_total_${rowCountOne}" class="form-control q42_sexual_exploit_total q42TotalA" readonly="true" for="${rowCountOne}"></td>`+
            `<td><button type="button" name="remove" id="${rowCountOne}" class="btn btn-danger sexual_btn_remove">-</button></td>
        `+
        `</tr>`
      )
    });
    $(document).on('click', '.sexual_btn_remove', function() {
        var button_id = $(this).attr('id');
        $('#rowOne'+button_id+'').remove();
      });
  $("#addRowQ42Sexual").on('input', 'input.q42_sexual_exploit_male,input.q42_sexual_exploit_female,input.q42_sexual_exploit_third_gender', function() {
        getTotalCost($(this).attr("for"));
      });
 // Using a new index rather than your global variable i
 function getTotalCost(ind) {
    var man = $('#q42_sexual_exploit_male_'+ind).val()||0;
    var woman = $('#q42_sexual_exploit_female_'+ind).val()||0;
    var third_gender = $('#q42_sexual_exploit_third_gender_'+ind).val()||0;

    var totNumber = parseInt(man) + parseInt(woman)+parseInt(third_gender);
    var tot = totNumber;
    $('#q42_sexual_exploit_total_'+ind).val(tot)||0;
    calculateSubTotal();
      }

  function calculateSubTotal() {
    var subtotal = 0;
    $('.q42_sexual_exploit_total').each(function() {
      subtotal += parseFloat($(this).val());
    });
    
  } 

// Temporary Save
$(document).on("click",'#temp-save-question42A',function() {
          var q42_division_one = [],q42_men_one=[],q42_female_one=[],q42_third_gender_one=[],q42_total_one=[],q42_type_one=[];
          $('.q42DivisionA').each(function() {
            if($(this).val()){
              let division ={
                division:$(this).val()
              }
              q42_division_one.push(division);
            }
           
          });
          // $('.q42Men').each(function() {
          //     let type_one ={
          //       type_one:1
          //     }
          //     q42_type_one.push(type_one);
            
           
          // });
          $('.q42MenA').each(function() {
              let men_one ={
                men_one:$(this).val()
              }
              q42_men_one.push(men_one);
            
           
          });
          $('.q42WomenA').each(function() {
              let female_one ={
                female_one:$(this).val()
              }             
              q42_female_one.push(female_one);
           });
           $('.q423rdGA').each(function() {
              let third_gender_one ={
                third_gender_one:$(this).val()
              }             
              q42_third_gender_one.push(third_gender_one);
           });
           $('.q42TotalA').each(function() {
              let total_one ={
                total_one:$(this).val()
              }             
              q42_total_one.push(total_one);
           });
           var q42_data_one=[];
          if(q42_division_one.length>0){
            jQuery.each(q42_division_one, function(index, item) {
              let newObj = { ...item, 
                division:q42_division_one[index].division,
                men_one:q42_men_one[index].men_one,
                female_one:q42_female_one[index].female_one,
                third_gender_one:q42_third_gender_one[index].third_gender_one,
                total_one:q42_total_one[index].total_one,
              };
              // item[index]["jurisdict"]=jurisdictions[index].jurisdict
              q42_data_one.push(newObj)
            });
          }

          let new_data={
            q42_data_one:q42_data_one
          }
          // console.log(new_data)
          $.ajax({    //create an ajax request to display.php
                  type: "POST",
                  data:{
                    "_token": "{{ csrf_token() }}",
                    'question42A':new_data,
                    'question_no':'42A',
                  },
                  url: "/superadmin/case/temp-save-question40to60",             
                  success: function(response){ 
                    if(response){
                      alert("Question 42 has been saved temporary")

                    }else{
                      alert("Not Saved")
                    }
                  }
          });
    });


  });
  //End Sexual Exploitation

  //Start Labour Trafficking
  $(function(){
    // var rowCountTwo = 1;
 
 
  $('#addRowDatasQ42Labour').click(function(){
      let rowCountTwo= $('.q42DivisionB').length+1;
      $('#addRowQ42Labour').append(
        `<tr id="rowTwo${rowCountTwo}">`+
        `<td>
              <select name="q42_sexual_exploitation_division_id[]" id="q42_labour_traffick_division_id" class="form-control q42DivisionB">
                <option value="">--Select Division--</option>
                <option value="1">Barisal</option>
                <option value="2">Chattogram</option>
                <option value="3">Dhaka</option>
                <option value="4">Khulna</option>
                <option value="5">Mymensingh</option>
                <option value="6">Rajshahi</option>
                <option value="7">Sylhet</option>
                </select>
                  
              </td>`+
              `<input type="hidden" name="q42_type[]" value="2" class="form-control">`+
            `<td><input type="text" name="q42_sexual_men[]" id="q42_labour_traffick_male_${rowCountTwo}" class="form-control q42_labour_traffick_male q42MenB" for="${rowCountTwo}"></td>
            <td><input type="text" name="q42_sexual_women[]" id="q42_labour_traffick_female_${rowCountTwo}" class="form-control q42_labour_traffick_female q42WomenB" for="${rowCountTwo}"></td>
            <td><input type="text" name="q42_sexual_third_gender[]" id="q42_labour_traffick_third_gender_${rowCountTwo}" class="form-control q42_labour_traffick_third_gender q423rdGB" for="${rowCountTwo}"></td>
            <td><input type="text" name="q42_sexual_total[]" id="q42_labour_traffick_total_${rowCountTwo}" class="form-control q42_labour_traffick_total q42TotalB" readonly="true" for="${rowCountTwo}"></td>
            <td><button type="button" name="remove" id="${rowCountTwo}" class="btn btn-danger labour_btn_remove">-</button></td>
        `+
        `</tr>`
      )
    });
    $(document).on('click', '.labour_btn_remove', function() {
        var button_id = $(this).attr('id');
        $('#rowTwo'+button_id+'').remove();
      });
  $("#addRowQ42Labour").on('input', 'input.q42_labour_traffick_male,input.q42_labour_traffick_female,input.q42_labour_traffick_third_gender', function() {
        getTotalCost($(this).attr("for"));
      });
 // Using a new index rather than your global variable i
 function getTotalCost(ind) {
    var man = $('#q42_labour_traffick_male_'+ind).val()||0;
    var woman = $('#q42_labour_traffick_female_'+ind).val()||0;
    var third_gender = $('#q42_labour_traffick_third_gender_'+ind).val()||0;

    var totNumber = parseInt(man) + parseInt(woman)+parseInt(third_gender);
    var tot = totNumber;
    $('#q42_labour_traffick_total_'+ind).val(tot)||0;
    calculateSubTotal();
      }

  function calculateSubTotal() {
    var subtotal = 0;
    $('.q42_labour_traffick_total').each(function() {
      subtotal += parseFloat($(this).val());
    });
    
  }
  // Temporary Save
$(document).on("click",'#temp-save-question42B',function() {
          var q42_division_two = [],q42_men_two=[],q42_female_two=[],q42_third_gender_two=[],q42_total_two=[],q42_type_two=[];
          $('.q42DivisionB').each(function() {
            if($(this).val()){
              let division ={
                division:$(this).val()
              }
              q42_division_two.push(division);
            }
           
          });

          $('.q42MenB').each(function() {
              let men_two ={
                men_two:$(this).val()
              }
              q42_men_two.push(men_two);
            
           
          });
          $('.q42WomenB').each(function() {
              let female_two ={
                female_two:$(this).val()
              }             
              q42_female_two.push(female_two);
           });
           $('.q423rdGB').each(function() {
              let third_gender_two ={
                third_gender_two:$(this).val()
              }             
              q42_third_gender_two.push(third_gender_two);
           });
           $('.q42TotalB').each(function() {
              let total_two ={
                total_two:$(this).val()
              }             
              q42_total_two.push(total_two);
           });
           var q42_data_two=[];
          if(q42_division_two.length>0){
            jQuery.each(q42_division_two, function(index, item) {
              let newObj = { ...item, 
                division:q42_division_two[index].division,
                men_two:q42_men_two[index].men_two,
                female_two:q42_female_two[index].female_two,
                third_gender_two:q42_third_gender_two[index].third_gender_two,
                total_two:q42_total_two[index].total_two,
              };
              // item[index]["jurisdict"]=jurisdictions[index].jurisdict
              q42_data_two.push(newObj)
            });
          }

          let new_data={
            q42_data_two:q42_data_two
          }
          // console.log(new_data)
          $.ajax({    //create an ajax request to display.php
                  type: "POST",
                  data:{
                    "_token": "{{ csrf_token() }}",
                    'question42B':new_data,
                    'question_no':'42B',
                  },
                  url: "/superadmin/case/temp-save-question40to60",             
                  success: function(response){ 
                    if(response){
                      alert("Question 42 has been saved temporary")

                    }else{
                      alert("Not Saved")
                    }
                  }
          });
    }); 
})
  //End Labour Trafficking
//Start International Trafficking
$(function(){
  // var rowCountThree=1;

$('#addRowDatasQ42International').click(function(){
      let rowCountThree = $('.q42DivisionC').length+1;
      $('#addRowQ42International').append(
        `<tr id="rowThree${rowCountThree}">`+
        `<td>
              <select name="q42_sexual_exploitation_division_id[]" id="q42_international_traffick_division_id" class="form-control q42DivisionC">
                <option value="">--Select Division--</option>
                <option value="1">Barisal</option>
                <option value="2">Chattogram</option>
                <option value="3">Dhaka</option>
                <option value="4">Khulna</option>
                <option value="5">Mymensingh</option>
                <option value="6">Rajshahi</option>
                <option value="7">Sylhet</option>
                </select>
                  
              </td>`+
              `<input type="hidden" name="q42_type[]" value="3" class="form-control">`+
            `<td><input type="text" name="q42_sexual_men[]" id="q42_international_traffick_male_${rowCountThree}" class="form-control q42_international_traffick_male q42MenC" for="${rowCountThree}"></td>
            <td><input type="text" name="q42_sexual_women[]" id="q42_international_traffick_female_${rowCountThree}" class="form-control q42_international_traffick_female q42WomenC" for="${rowCountThree}"></td>
            <td><input type="text" name="q42_sexual_third_gender[]" id="q42_international_traffick_third_gender_${rowCountThree}" class="form-control q42_international_traffick_third_gender q423rdGC" for="${rowCountThree}"></td>
            <td><input type="text" name="q42_sexual_total[]" id="q42_international_traffick_total_${rowCountThree}" class="form-control q42_international_traffick_total q42TotalC" readonly="true" for="${rowCountThree}"></td>
            <td><button type="button" name="remove" id="${rowCountThree}" class="btn btn-danger btn_remove_international">-</button></td>
        `+
        `</tr>`
      )
    });
    $(document).on('click', '.btn_remove_international', function() {
        var button_id = $(this).attr('id');
        $('#rowThree'+button_id+'').remove();
      });
  $("#addRowQ42International").on('input', 'input.q42_international_traffick_male,input.q42_international_traffick_female,input.q42_international_traffick_third_gender', function() {
        getTotalCost($(this).attr("for"));
      });
 // Using a new index rather than your global variable i
 function getTotalCost(ind) {
    var man = $('#q42_international_traffick_male_'+ind).val()||0;
    var woman = $('#q42_international_traffick_female_'+ind).val()||0;
    var third_gender = $('#q42_international_traffick_third_gender_'+ind).val()||0;

    var totNumber = parseInt(man) + parseInt(woman)+parseInt(third_gender);
    var tot = totNumber;
    $('#q42_international_traffick_total_'+ind).val(tot)||0;
    calculateSubTotal();
      }

  function calculateSubTotal() {
    var subtotal = 0;
    $('.q42_international_traffick_total').each(function() {
      subtotal += parseFloat($(this).val());
    });
    
  }
  
  // Temporary Save
$(document).on("click",'#temp-save-question42C',function() {
          var q42_division_three = [],q42_men_three=[],q42_female_three=[],q42_third_gender_three=[],q42_total_three=[],q42_type_three=[];
          $('.q42DivisionC').each(function() {
            if($(this).val()){
              let division ={
                division:$(this).val()
              }
              q42_division_three.push(division);
            }
           
          });
          $('.q42MenC').each(function() {
              let men_three ={
                men_three:$(this).val()
              }
              q42_men_three.push(men_three);
            
           
          });
          $('.q42WomenC').each(function() {
              let female_three ={
                female_three:$(this).val()
              }             
              q42_female_three.push(female_three);
           });
           $('.q423rdGC').each(function() {
              let third_gender_three ={
                third_gender_three:$(this).val()
              }             
              q42_third_gender_three.push(third_gender_three);
           });
           $('.q42TotalC').each(function() {
              let total_three ={
                total_three:$(this).val()
              }             
              q42_total_three.push(total_three);
           });
           var q42_data_three=[];
          if(q42_division_three.length>0){
            jQuery.each(q42_division_three, function(index, item) {
              let newObj = { ...item, 
                division:q42_division_three[index].division,
                men_three:q42_men_three[index].men_three,
                female_three:q42_female_three[index].female_three,
                third_gender_three:q42_third_gender_three[index].third_gender_three,
                total_three:q42_total_three[index].total_three,
              };
              // item[index]["jurisdict"]=jurisdictions[index].jurisdict
              q42_data_three.push(newObj)
            });
          }
          let new_data={
            q42_data_three:q42_data_three
          }
          // console.log(new_data)
          $.ajax({    //create an ajax request to display.php
                  type: "POST",
                  data:{
                    "_token": "{{ csrf_token() }}",
                    'question42C':new_data,
                    'question_no':'42C',
                  },
                  url: "/superadmin/case/temp-save-question40to60",             
                  success: function(response){ 
                    if(response){
                      alert("Question 42 has been saved temporary")

                    }else{
                      alert("Not Saved")
                    }
                  }
          });
    }); 
  //End International Trafficking
  })
</script>