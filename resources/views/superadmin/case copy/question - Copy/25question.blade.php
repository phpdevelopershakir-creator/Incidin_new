<?php
if($questiontitles[24]->status==0)
{

  ?>
@if(Auth::user()->can('25.question'))
<?php 
$q25_status=[
  1=>"New",
  2=>"Existing"
];
$protections=[
  1=>"Economic Support/assest transfer",
  2=>"Micro Credit",
  3=>"Livelihood Training",
  4=>"Job placement", 
  5=>"Health care", 
  6=>"Psychosocial care",
  7=>"Shelter",
  8=>"Social safetynet", 
  9=>"Information support", 
  10=>"Mainstream education", 
  11=>"Non Formal Education", 
  12=>"Technical Education", 
  13=>"Life skill",
  14=>"Family reunion",
  15=>"Referral"
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
<div class="col-md-12 question25">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
         <span class="numbering">25</span>.
           @if (isset($questiontitles [24]))
         {{ $questiontitles[24]->title }}

         @endif

      </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="icheck-primary">
        <?php if(isset($question_25_data->q25_checked_value)){ ?>
        <input  
          type="radio" 
          id="radioPrimary11"  
          class="twenty_five_status" 
          name="is_victim_care_your_ministry_q25" 
          <?=(isset($question_25_data->q25_checked_value) && $question_25_data->q25_checked_value =="1")?"checked":"";?> 
          value="1">
        <?php }else { ?>
        <input  type="radio" id="radioPrimary11"  class="twenty_five_status" name="is_victim_care_your_ministry_q25" checked value="1">
        <?php } ?>
        <label for="radioPrimary11">
          Yes
        </label>
      </div>
      <div class="icheck-primary">
        <input 
        type="radio" 
        id="radioPrimary22" 
        class="twenty_five_status" 
        name="is_victim_care_your_ministry_q25" 
        <?=(isset($question_25_data->q25_checked_value) && $question_25_data->q25_checked_value =="0")?"checked":"";?> 

        value="0">
        <label for="radioPrimary22">
          No
        </label>
      </div>

      <div class="icheck-primary input-group mb-3">
        <input 
          type="radio" 
          id="radioPrimary33" 
          class="twenty_five_status" 
          name="is_victim_care_your_ministry_q25" 
          <?=(isset($question_25_data->q25_checked_value) && $question_25_data->q25_checked_value =="2")?"checked":"";?> 

          value="2">
        <label for="radioPrimary33">
          Others
        </label><span class=" col-md-6 mt--4 <?=(isset($question_25_data->q25_checked_value) && $question_25_data->q25_checked_value=="2")?"":"othersText" ;?>" style="margin-top:-8px;">
            <input 
              type="text" 
              id="q25others"  
              placeholder="Others "  
              class="form-control" 
              value="<?=(isset($question_25_data->others))?$question_25_data->others:"" ;?>"
              name="victim_care_your_ministry_others_q25">
          </span>
        
      </div>
      <div id ="25_question_view" class="card-body row <?=(isset($question_25_data->q25_checked_value)   && ($question_25_data->q25_checked_value=='2' || $question_25_data->q25_checked_value=='0')) ? 'visibility' : '' ;?>">
      <table id="addRowQ25" class="table table-bordered text-center">
        <thead class="">
          <tr>
            <th rowspan="3" style="text-align: center; margin: bottom 45%;">Protection Services</th>
            <th rowspan="3">Status</th>
            <th colspan="6">Current Coverage of VoTs</th>
            <th></th>
          </tr>
          <tr>
            <th>Men</th>
            <th>Women</th>
            <th>3rd Gender</th>
            <th>Boy</th>
            <th>Girls</th>
            <th>Total</th>
            <th>Action</th>
          </tr>
</thead>
<tbody>
  <?php if(isset($question_25_data->q25_data) && count($question_25_data->q25_data)>0){ $i=1; ?>

      @foreach($question_25_data->q25_data as $q25)
          <tr class="q25QRow" id="q25row<?=$i;?>">
            <td><select name="protection_services_q25[]" id="" class="form-control protection_services_q25">
                <option value="">--choose an item--</option>
                @foreach($protections as $key=>$item)
                      <option <?=(isset($q25) &&  !empty($q25) && $q25->protection==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                @endforeach
              
              </select></td>
            <td><select name="q25_status_id[]" id="" class="form-control q25_status_id">
                <option value="">Select Status</option>
                @foreach($q25_status as $key=>$item)
                      <option <?=(isset($q25) &&  !empty($q25) && $q25->status_id==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                @endforeach

              </select></td>

            <td><input  class="form-control q25_current_coverage_vots_men" value="<?= isset($q25->men) && $q25->men ? $q25->men:"";?>" type='number' data-type="q25_current_coverage_vots_men" id='q25_current_coverage_vots_men_<?= $i;?>' name="q25_current_coverage_vots_men[]" for="<?= $i;?>"/></td> 
            <td><input class="form-control q25_current_coverage_vots_women" value="<?= isset($q25->women) && $q25->women ? $q25->women:"";?>" type='number' id='q25_current_coverage_vots_women_<?= $i;?>' name="q25_current_coverage_vots_women[]" for="<?= $i;?>"/></td>
            <td><input class="form-control q25_current_coverage_vots_third_gender" value="<?= isset($q25->third_gender) && $q25->third_gender ? $q25->third_gender:"";?>" type='number' data-type="q25_current_coverage_vots_third_gender" id='q25_current_coverage_vots_third_gender_<?= $i;?>' name="q25_current_coverage_vots_third_gender[]" for="<?= $i;?>"/></td> 
            <td><input class="form-control q25_current_coverage_vots_boy" value="<?= isset($q25->boy) && $q25->boy ? $q25->boy:"";?>" type='number' id='q25_current_coverage_vots_boy_<?= $i;?>' name="q25_current_coverage_vots_boy[]" for="<?= $i;?>"/></td>
            <td><input class="form-control q25_current_coverage_vots_girl" value="<?= isset($q25->girl) && $q25->girl ? $q25->girl:"";?>" type='number' data-type="q25_current_coverage_vots_girl" id='q25_current_coverage_vots_girl_<?= $i;?>' name="q25_current_coverage_vots_girl[]" for="<?= $i;?>"/></td> 
            <td><input class="form-control q25_current_coverage_vots_total" value="<?= isset($q25->total) && $q25->total ? $q25->total:"";?>" type='text' id='q25_current_coverage_vots_total_<?= $i;?>' name='q25_current_coverage_vots_total[]' for='<?= $i;?>' readonly/></td>
            <td>
            <?php if($i==1) { ?>
              <button id="addRowDatasQ25" type="button" class="btn btn-sm btn-primary">+</i></button>
              <?php } else { ?>
              <button type="button" name="remove" id="<?= $i;?>" class="btn btn-danger q25btn_remove cicle">-</button>
              <?php } ?> 

            </td>


          </tr>
          <?php $i++; ?>
          @endforeach
        <?php }else { ?> 
        
          <tr class="q25QRow">
            <td><select name="protection_services_q25[]" id="" class="form-control protection_services_q25">
                <option value="">--choose an item--</option>
                @foreach($protections as $key=>$item)
                      <option <?=(isset($q25) &&  !empty($q25) && $q25->protection==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                @endforeach
              
              </select></td>
            <td><select name="q25_status_id[]" id="" class="form-control q25_status_id">
                <option value="">Select Status</option>
                @foreach($q25_status as $key=>$item)
                      <option <?=(isset($q25) &&  !empty($q25) && $q25->status_id==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                @endforeach

              </select></td>

            <td><input  class="form-control q25_current_coverage_vots_men" type='number' data-type="q25_current_coverage_vots_men" id='q25_current_coverage_vots_men_1' name="q25_current_coverage_vots_men[]" for="1"/></td> 
            <td><input class="form-control q25_current_coverage_vots_women" type='number' id='q25_current_coverage_vots_women_1' name="q25_current_coverage_vots_women[]" for="1"/></td>
            <td><input class="form-control q25_current_coverage_vots_third_gender" type='number' data-type="q25_current_coverage_vots_third_gender" id='q25_current_coverage_vots_third_gender_1' name="q25_current_coverage_vots_third_gender[]" for="1"/></td> 
            <td><input class="form-control q25_current_coverage_vots_boy" type='number' id='q25_current_coverage_vots_boy_1' name="q25_current_coverage_vots_boy[]" for="1"/></td>
            <td><input class="form-control q25_current_coverage_vots_girl" type='number' data-type="q25_current_coverage_vots_girl" id='q25_current_coverage_vots_girl_1' name="q25_current_coverage_vots_girl[]" for="1"/></td> 
            <td><input class="form-control q25_current_coverage_vots_total" type='text' id='q25_current_coverage_vots_total_1' name='q25_current_coverage_vots_total[]' for='1' readonly/></td>
            <td><button id="addRowDatasQ25" type="button" class="btn btn-sm btn-primary">+</i></button></td>


          </tr>
         <?php } ?>
      
         
        
</tbody>


      </table>
    </div>
    <br/>
    <p class="text-right">
        <button type="button" class="btn btn-success" id="temp-save-question25">Save</button>       
    </p>

    </div>
  </div>
</div>
@endif
<?php }
  ?>
<script>
  $(document).ready(function(){
        $(".twenty_five_status").on("click",function(){
            var statusvalue = $("input[name='is_victim_care_your_ministry_q25']:checked").val();
            $('.question25').find('#25_question_view').hide()
            $('.question25').find('#q25others').val("")
            
            if(statusvalue == '1'){
              $('.question25').find('#25_question_view').show()
              $('.question25').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question25').find('#25_question_view').hide()
              $('.question25').find('span').removeClass('othersText')
              $('.question25').find('span').show()
            }else{
              $('.question25').find('#25_question_view').hide()
              $('.question25').find('span').addClass('othersText')

            }
        });

        // var rowCount = 1;
  $("#addRowDatasQ25").click(function(){
    let rowCount = $(".q25QRow").length+1;
    $("#addRowQ25").append(
      
    '<tr class="q25QRow" id="q25row'+rowCount+'">'+
    
  `<td>
    <select name="protection_services_q25[]" id="" class="form-control">
        <option value="">--choose an item--</option>
        <option value="1">Economic Support/assest transfer</option>
        <option value="2">Micro Credit</option>
        <option value="3">Livelihood Training</option>
        <option value="4">Job placement</option>
        <option value="5">Health care</option>
        <option value="6">Psychosocial care</option>
        <option value="7">Shelter</option>
        <option value="8">Social safetynet</option>
        <option value="9">Information support</option>
        <option value="10">Mainstream education</option>
        <option value="11">Non Formal Education</option>
        <option value="12">Technical Education</option>
        <option value="13">Life skill</option>
        <option value="14">Family reunion</option>
        <option value="15 ">Referral </option>
      </select>
    </td>
    <td>
      <select name="q25_status_id[]" id="" class="form-control">
          <option value="">Select Status</option>
          <option value="1">New</option>
          <option value="2">Existing </option>

      </select>
    </td>`+
    '<td><input class="form-control q25_current_coverage_vots_men" type="number" data-type="q25_current_coverage_vots_men" id="q25_current_coverage_vots_men_'+rowCount+'" name="q25_current_coverage_vots_men[]" for="'+rowCount+'"/></td>'+
    '<td><input class="form-control q25_current_coverage_vots_women" type="number" data-type="q25_current_coverage_vots_women" id="q25_current_coverage_vots_women_'+rowCount+'" name="q25_current_coverage_vots_women[]" for="'+rowCount+'"/></td>'+
    '<td><input class="form-control q25_current_coverage_vots_third_gender" type="number" data-type="q25_current_coverage_vots_third_gender" id="q25_current_coverage_vots_third_gender_'+rowCount+'" name="q25_current_coverage_vots_third_gender[]" for="'+rowCount+'"/></td>'+
    '<td><input class="form-control q25_current_coverage_vots_boy" type="number" data-type="q25_current_coverage_vots_boy" id="q25_current_coverage_vots_boy_'+rowCount+'" name="q25_current_coverage_vots_boy[]" for="'+rowCount+'"/></td>'+
    '<td><input class="form-control q25_current_coverage_vots_girl" type="number" data-type="q25_current_coverage_vots_girl" id="q25_current_coverage_vots_girl_'+rowCount+'" name="q25_current_coverage_vots_girl[]" for="'+rowCount+'"/></td>'+
    '<td><input class="form-control q25_current_coverage_vots_total" type="number" data-type="q25_current_coverage_vots_total" id="q25_current_coverage_vots_total_'+rowCount+'" name="q25_current_coverage_vots_total[]" for="'+rowCount+'" readonly="true"/></td>'+
    '<td><button type="button" name="remove" id="'+rowCount+'" class="btn btn-danger q25btn_remove cicle">-</button></td>'+

         
    '</tr>'
      
    )
  });
  $(document).on('click', '.q25btn_remove', function() {
        var button_id = $(this).attr('id');
        $('#q25row'+button_id+'').remove();
      });

  $("#addRowQ25").on('input', 'input.q25_current_coverage_vots_men,input.q25_current_coverage_vots_women,input.q25_current_coverage_vots_third_gender,input.q25_current_coverage_vots_boy,input.q25_current_coverage_vots_girl', function() {
        getTotalCost($(this).attr("for"));
      });
 // Using a new index rather than your global variable i
 function getTotalCost(ind) {
    var man = $('#q25_current_coverage_vots_men_'+ind).val()||0;
    var woman = $('#q25_current_coverage_vots_women_'+ind).val()||0;
    var third_gender = $('#q25_current_coverage_vots_third_gender_'+ind).val()||0;
    var boy = $('#q25_current_coverage_vots_boy_'+ind).val()||0;
    var girl = $('#q25_current_coverage_vots_girl_'+ind).val()||0;

    var totNumber = parseInt(man) + parseInt(woman)+parseInt(third_gender)+parseInt(boy) + parseInt(girl);
    var tot = totNumber;
    $('#q25_current_coverage_vots_total_'+ind).val(tot)||0;
    calculateSubTotal();
      }

  function calculateSubTotal() {
    var subtotal = 0;
    $('.q25_current_coverage_vots_total').each(function() {
      subtotal += parseFloat($(this).val());
    });
    
  }

  $(document).on("click",'#temp-save-question25',function() {
      var protection_serives = [],
          status_ids=[],
          q25_data=[],
          q25_men=[],
          q25_women=[],
          q25_third_gender=[],
          q25_boys=[],
          q25_girls=[],
          q25_totals=[];     
      let yes_no_value=$("input[type='radio'][name='is_victim_care_your_ministry_q25']:checked").val()
      if(yes_no_value=='1'){
        $('select[name="protection_services_q25[]"]').each(function() {
          let protection ={
            protection:$(this).val()
          }             
          protection_serives.push(protection);
        });
        $('select[name="q25_status_id[]"]').each(function() {
          let status_id ={
            status_id:$(this).val()
          }             
          status_ids.push(status_id);
        });
        $('input[name="q25_current_coverage_vots_men[]"]').each(function() {
          let men ={
            men:$(this).val()
          }             
          q25_men.push(men);
        });
        $('input[name="q25_current_coverage_vots_women[]"]').each(function() {
          let women ={
            women:$(this).val()
          }             
          q25_women.push(women);
        });
        $('input[name="q25_current_coverage_vots_third_gender[]"]').each(function() {
          let third_gender ={
            third_gender:$(this).val()
          }             
          q25_third_gender.push(third_gender);
        });
        $('input[name="q25_current_coverage_vots_boy[]"]').each(function() {
          let boy ={
            boy:$(this).val()
          }             
          q25_boys.push(boy);
        });
        $('input[name="q25_current_coverage_vots_girl[]"]').each(function() {
          let girl ={
            girl:$(this).val()
          }             
          q25_girls.push(girl);
        });
        $('input[name="q25_current_coverage_vots_total[]"]').each(function() {
          let total ={
            total:$(this).val()
          }             
          q25_totals.push(total);
        });
        if(protection_serives.length>0){
          jQuery.each(protection_serives, function(index, item) {
            let newObj = { ...item, 
              status_id:status_ids[index].status_id,
              men:q25_men[index].men,
              women:q25_women[index].women,
              third_gender:q25_third_gender[index].third_gender,
              boy:q25_boys[index].boy,
              girl:q25_girls[index].girl,
              total:q25_totals[index].total
            };
            q25_data.push(newObj)
          });
        }
      }
      let new_data={
        q25_data:q25_data,
        q25_checked_value:yes_no_value,
        others:$("input[name='victim_care_your_ministry_others_q25']").val()
      }  
      // console.log(new_data)
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
                'question25':new_data,
                'question_no':'25',
              },
              url: "/superadmin/case/temp-save-question40to60",             
              success: function(response){ 
                if (response){
                  alert("Question 25 has been saved temporary")
                }else{
                  alert("Not Saved")
                }
              }
      });
  });

    });
</script>