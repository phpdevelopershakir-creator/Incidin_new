<?php
if($questiontitles[29]->status==0)
{

  ?>
@if(Auth::user()->can('30.question'))
@php
$countries=DB::table('countries')->get()    

@endphp

<?php 
$q30_status=[
  1=>"Excess",
  2=>"Adequate",
  3=>"Inadequate",
  4=>"None",
  5=>"Other (Specify)"

];
$protection_services=[
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
<div class="col-md-12 question30">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
         <span class="numbering">30</span>.
           @if (isset($questiontitles [29]))
         {{ $questiontitles[29]->title }}
         @endif
      </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="icheck-primary">
        <?php if(isset($question_30_data->q30_checked_value)) {?>
        <input 
        type="radio" 
        id="q30radioPrimary1" 
        class="thirten_status" 
        name="is_host_country_nationals_q30" 
        <?=(isset($question_30_data->q30_checked_value) && $question_30_data->q30_checked_value=="1")?"checked":"" ;?>
        value="1">
        <?php }else {?>
        <input type="radio" id="q30radioPrimary1" class="thirten_status" name="is_host_country_nationals_q30" checked value="1">
        <?php }?>
        <label for="q30radioPrimary1">
          Yes
        </label>
      </div>
      <div class="icheck-primary">
        <input 
        type="radio" 
        id="q30radioPrimary2" 
        class="thirten_status" 
        name="is_host_country_nationals_q30"  
        <?=(isset($question_30_data->q30_checked_value) && $question_30_data->q30_checked_value=="0")?"checked":"" ;?>

        value="0">
        <label for="q30radioPrimary2">
          No
        </label>
      </div>

 
      <div class="icheck-primary input-group mb-3">
          <input 
          type="radio" 
          id="q30radioPrimary3" 
          class="thirten_status" 
          name="is_host_country_nationals_q30" 
          <?=(isset($question_30_data->q30_checked_value) && $question_30_data->q30_checked_value=="2")?"checked":"" ;?>
          value="2">
          <label for="q30radioPrimary3">
            Others
          </label>
          <span class=" col-md-6 mt--4 <?=(isset($question_30_data->q30_checked_value)   && ($question_30_data->q30_checked_value=='2')) ? '' : 'othersText' ;?>" style="margin-top:-8px;">
            <input 
            type="text" 
            id="q30others"  
            placeholder="Others "  
            class="form-control" 
            value="<?=(isset($question_30_data->others) && $question_30_data->others)?$question_30_data->others:"";?>"
            name="host_country_nationals_others_q30">
          </span>
        </div>
      <div id ="30_question_view" class="card-body row <?=(isset($question_30_data->q30_checked_value) && ($question_30_data->q30_checked_value=="2" || $question_30_data->q30_checked_value=="0"))?"visibility":"";?>">
        <table id="addRowQ30" class="table table-bordered text-center">
          <thead class="">
            <tr>
              <th rowspan="2" style="text-align: center; margin: bottom 45%;">Protection Services</th>
              <th rowspan="2">Status of coverage</th>
              <th colspan="6">Current Coverage of Foreign VoTs</th>
              <!-- <th rowspan="2">Origin of VoTs</th> -->
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

            <?php if(isset($question_30_data->q30_data) && count($question_30_data->q30_data)>0){ $i=1; ?>

            @foreach($question_30_data->q30_data as $q30)
            <tr class="q30QRow" id="q30row<?=$i;?>">
              <td>
                <select class="form-control protection_services_q30" name="protection_services_q30[]" id="">
                  <option value="">--choose an item--</option>
                  @foreach($protection_services as $key=>$item)
                      <option <?=(isset($q30) &&  !empty($q30) && $q30->protection==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                  @endforeach
                </select>
              </td>
              <td><select class="form-control status_coverage_q30" id="q30_status_coveraged" name="status_coverage_q30[]" >
                <option value="">choose an item</option>
                @foreach($q30_status as $key=>$item)
                      <option <?=(isset($q30) &&  !empty($q30) && $q30->status_id==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                @endforeach
                
                 
                  
                </select><br>
                  <input  
                  type="input" 
                  id="status_coverage_other" 
                  name="q30_other_specify[]" 
                  class="form-control <?=(isset($q30->status_id) && $q30->status_id==5)?'':'otherSpecify';?>" 
                  value="<?=(isset($q30->other))?$q30->other:"";?>"
                  placeholder="Other (Specify)"></td>

            <td><input  class="form-control current_coverage_foreign_vots_men" value="<?=isset($q30->men) && $q30->men?$q30->men:"";?>" type='number' data-type="current_coverage_foreign_vots_men" id='current_coverage_foreign_vots_men_<?=$i;?>' name="current_coverage_foreign_vots_men[]" for="<?=$i;?>"/></td> 
            <td><input class="form-control current_coverage_foreign_vots_women" value="<?=isset($q30->women) && $q30->women?$q30->women:"";?>" type='number' id='current_coverage_foreign_vots_women_<?=$i;?>' name="current_coverage_foreign_vots_women[]" for="<?=$i;?>"/></td>
            <td><input class="form-control current_coverage_foreign_vots_third_gender" value="<?=isset($q30->third_gender) && $q30->third_gender?$q30->third_gender:"";?>" type='number' data-type="current_coverage_foreign_vots_third_gender" id='current_coverage_foreign_vots_third_gender_<?=$i;?>' name="current_coverage_foreign_vots_third_gender[]" for="<?=$i;?>"/></td> 
            <td><input class="form-control current_coverage_foreign_vots_boy" value="<?=isset($q30->boy) && $q30->boy?$q30->boy:"";?>" type='number' id='current_coverage_foreign_vots_boy_<?=$i;?>' name="current_coverage_foreign_vots_boy[]" for="<?=$i;?>"/></td>
            <td><input class="form-control current_coverage_foreign_vots_girl" value="<?=isset($q30->girl) && $q30->girl?$q30->girl:"";?>" type='number' data-type="current_coverage_foreign_vots_girl" id='current_coverage_foreign_vots_girl_<?=$i;?>' name="current_coverage_foreign_vots_girl[]" for="<?=$i;?>"/></td> 
            <td><input class="form-control current_coverage_foreign_vots_total" value="<?=isset($q30->total) && $q30->total?$q30->total:"";?>" type='text' id='current_coverage_foreign_vots_total_<?=$i;?>' name='current_coverage_foreign_vots_total[]' for='<?=$i;?>' readonly/></td>
            <td>
            <?php if($i==1) { ?>
              <button id="addRowDatasQ30" type="button" class="btn btn-sm btn-primary">+</i></button>
              <?php } else { ?>
              <button type="button" name="remove" id="<?= $i;?>" class="btn btn-danger q30btn_remove cicle">-</button>
              <?php } ?> 
            </td>

            </tr>



          <?php $i++; ?>
          @endforeach
        <?php }else { ?> 
            <tr class="q30QRow">
              <td>
                <select class="form-control protection_services_q30" name="protection_services_q30[]" id="">
                  <option value="">--choose an item--</option>
                  @foreach($protection_services as $key=>$item)
                      <option <?=(isset($q30) &&  !empty($q30) && $q30->protection==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                  @endforeach
                </select>
              </td>
              <td><select class="form-control status_coverage_q30" id="q30_status_coveraged" name="status_coverage_q30[]" >
                <option value="">choose an item</option>
                @foreach($q30_status as $key=>$item)
                      <option <?=(isset($q30) &&  !empty($q30) && $q30->status_id==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
                @endforeach
                
                 
                  
                </select><br>
                  <input  type="input" id="status_coverage_other" name="q30_other_specify[]" class="form-control otherSpecify" placeholder="Other (Specify)"></td>

            <td><input  class="form-control current_coverage_foreign_vots_men" type='number' data-type="current_coverage_foreign_vots_men" id='current_coverage_foreign_vots_men_1' name="current_coverage_foreign_vots_men[]" for="1"/></td> 
            <td><input class="form-control current_coverage_foreign_vots_women" type='number' id='current_coverage_foreign_vots_women_1' name="current_coverage_foreign_vots_women[]" for="1"/></td>
            <td><input class="form-control current_coverage_foreign_vots_third_gender" type='number' data-type="current_coverage_foreign_vots_third_gender" id='current_coverage_foreign_vots_third_gender_1' name="current_coverage_foreign_vots_third_gender[]" for="1"/></td> 
            <td><input class="form-control current_coverage_foreign_vots_boy" type='number' id='current_coverage_foreign_vots_boy_1' name="current_coverage_foreign_vots_boy[]" for="1"/></td>
            <td><input class="form-control current_coverage_foreign_vots_girl" type='number' data-type="current_coverage_foreign_vots_girl" id='current_coverage_foreign_vots_girl_1' name="current_coverage_foreign_vots_girl[]" for="1"/></td> 
            <td><input class="form-control current_coverage_foreign_vots_total" type='text' id='current_coverage_foreign_vots_total_1' name='current_coverage_foreign_vots_total[]' for='1' readonly/></td>
            <td><button id="addRowDatasQ30" type="button" class="btn btn-sm btn-primary">+</i></button></td>

            </tr>
            <?php } ?>
          </tbody>


        </table>
      </div>
      <br/>
      <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question30">Save</button>       
      </p>
    </div>
  </div>
</div>
@endif
<?php }
  ?>
<script>
 $(document).ready(function(){
        $(".thirten_status").on("click",function(){
          // alert("HI")
            var statusvalue = $("input[name='is_host_country_nationals_q30']:checked").val();
            $('.question30').find('.othersText').hide()
            $('.question30').find('#q30others').val("")
            if(statusvalue == '1'){
              $('.question30').find('#30_question_view').show()
              $('.question30').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question30').find('#30_question_view').hide()
              $('.question30').find('span').removeClass('othersText')
              $('.question30').find('span').show()
            }else{
              $('.question30').find('#30_question_view').hide()
              $('.question30').find('span').addClass('othersText')

            }
        });
  // var rowCount = 1;
  $("#addRowDatasQ30").click(function(){
    let rowCount =$('.q30QRow').length+1;
    $("#addRowQ30").append(
      
    '<tr class="q30QRow" id="q30row'+rowCount+'">'+
    
    `<td>
      <select class="form-control" name="protection_services_q30[]" id="">
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
        <option value="15">Referral</option>
      </select>
    </td>
    <td>
      <select class="form-control status_coverage_q30" data-id="${rowCount}" id="q30_status_coverages_${rowCount}" name="status_coverage_q30[]" >
        <option value="">choose an item</option>
        <option value="1">Excess</option>
        <option value="2">Adequate</option>
        <option value="3">Inadequate</option>
        <option value="4">None</option>
        <option value="5">Other (Specify) </option>          
      </select><br>
        <input  class="form-control status_coverage_others_specify otherSpecify" type="input" data-type="status_coverage_others" id="status_coverage_others_${rowCount}" name="q30_other_specify[]" for="${rowCount}" placeholder="Other (Specify)" />
    </td>`+
    '<td><input class="form-control current_coverage_foreign_vots_men" type="number" data-type="current_coverage_foreign_vots_men" id="current_coverage_foreign_vots_men_'+rowCount+'" name="current_coverage_foreign_vots_men[]" for="'+rowCount+'"/></td>'+
    '<td><input class="form-control current_coverage_foreign_vots_women" type="number" data-type="current_coverage_foreign_vots_women" id="current_coverage_foreign_vots_women_'+rowCount+'" name="current_coverage_foreign_vots_women[]" for="'+rowCount+'"/></td>'+
    '<td><input class="form-control current_coverage_foreign_vots_third_gender" type="number" data-type="current_coverage_foreign_vots_third_gender" id="current_coverage_foreign_vots_third_gender_'+rowCount+'" name="current_coverage_foreign_vots_third_gender[]" for="'+rowCount+'"/></td>'+
    '<td><input class="form-control current_coverage_foreign_vots_boy" type="number" data-type="current_coverage_foreign_vots_boy" id="current_coverage_foreign_vots_boy_'+rowCount+'" name="current_coverage_foreign_vots_boy[]" for="'+rowCount+'"/></td>'+
    '<td><input class="form-control current_coverage_foreign_vots_girl" type="number" data-type="current_coverage_foreign_vots_girl" id="current_coverage_foreign_vots_girl_'+rowCount+'" name="current_coverage_foreign_vots_girl[]" for="'+rowCount+'"/></td>'+
    '<td><input class="form-control current_coverage_foreign_vots_total" type="number" data-type="current_coverage_foreign_vots_total" id="current_coverage_foreign_vots_total_'+rowCount+'" name="current_coverage_foreign_vots_total[]" for="'+rowCount+'" readonly="true"/></td>'+
    '<td><button type="button" name="remove" id="'+rowCount+'" class="btn btn-danger q30btn_remove cicle">-</button></td>'+

         
    '</tr>'
      
    )
  });
  $(document).on('click', '.q30btn_remove', function() {
        var button_id = $(this).attr('id');
        $('#q30row'+button_id+'').remove();
      });

  $("#addRowQ30").on('input', 'input.current_coverage_foreign_vots_men,input.current_coverage_foreign_vots_women,input.current_coverage_foreign_vots_third_gender,input.current_coverage_foreign_vots_boy,input.current_coverage_foreign_vots_girl', function() {
        getTotalCost($(this).attr("for"));
      });
     
 // Using a new index rather than your global variable i
 function getTotalCost(ind) {
    var man = $('#current_coverage_foreign_vots_men_'+ind).val()||0;
    var woman = $('#current_coverage_foreign_vots_women_'+ind).val()||0;
    var third_gender = $('#current_coverage_foreign_vots_third_gender_'+ind).val()||0;
    var boy = $('#current_coverage_foreign_vots_boy_'+ind).val()||0;
    var girl = $('#current_coverage_foreign_vots_girl_'+ind).val()||0;

    var totNumber = parseInt(man) + parseInt(woman)+parseInt(third_gender)+parseInt(boy) + parseInt(girl);
    var tot = totNumber;
    $('#current_coverage_foreign_vots_total_'+ind).val(tot)||0;
    
    calculateSubTotal();
      }

    function calculateSubTotal() {
      var subtotal = 0;
      $('.current_coverage_foreign_vots_total').each(function() {
        subtotal += parseFloat($(this).val());
      });
      
    }     

  });
    $('#q30_status_coveraged').on("change",function(){
      
          $('.question30').find('#status_coverage_other').hide()
          $('.question30').find('#status_coverage_other').val("")
          if($(this).val()==="5"){
            $('.question30').find('#status_coverage_other').show()
          }
        });


    $(document).on("change",".status_coverage_q30",function(){
      var specify_id = $(this).attr('data-id')
      // alert($(this).attr('data-id'))
      $(this).each(function(index,element){
          $('.question30').find('#status_coverage_others_'+specify_id).hide()
          $('.question30').find('#status_coverage_others_'+specify_id).val("")
          if($(this).val()==="5"){
            $('.question30').find('#status_coverage_others_'+specify_id).show()
          }
      })
      
    });

    $(document).on("click",'#temp-save-question30',function() {
      var protection_service = [],
          status_ids=[],
          q30_other_specifies=[],
          q30_data=[],
          q30_men=[],
          q30_women=[],
          q30_third_gender=[],
          q30_boys=[],
          q30_girls=[],
          q30_totals=[];     
      let yes_no_value=$("input[type='radio'][name='is_host_country_nationals_q30']:checked").val()
      if(yes_no_value=='1'){
        $('select[name="protection_services_q30[]"]').each(function() {
          let protection ={
            protection:$(this).val()
          }             
          protection_service.push(protection);
        });
        $('select[name="status_coverage_q30[]"]').each(function() {
          let status_id ={
            status_id:$(this).val()
          }             
          status_ids.push(status_id);
        });
        $('input[name="q30_other_specify[]"]').each(function() {
          let other ={
            other:$(this).val()
          }             
          q30_other_specifies.push(other);
        });
        $('input[name="current_coverage_foreign_vots_men[]"]').each(function() {
          let men ={
            men:$(this).val()
          }             
          q30_men.push(men);
        });
        $('input[name="current_coverage_foreign_vots_women[]"]').each(function() {
          let women ={
            women:$(this).val()
          }             
          q30_women.push(women);
        });
        $('input[name="current_coverage_foreign_vots_third_gender[]"]').each(function() {
          let third_gender ={
            third_gender:$(this).val()
          }             
          q30_third_gender.push(third_gender);
        });
        $('input[name="current_coverage_foreign_vots_boy[]"]').each(function() {
          let boy ={
            boy:$(this).val()
          }             
          q30_boys.push(boy);
        });
        $('input[name="current_coverage_foreign_vots_girl[]"]').each(function() {
          let girl ={
            girl:$(this).val()
          }             
          q30_girls.push(girl);
        });
        $('input[name="current_coverage_foreign_vots_total[]"]').each(function() {
          let total ={
            total:$(this).val()
          }             
          q30_totals.push(total);
        });
        if(protection_service.length>0){
          jQuery.each(protection_service, function(index, item) {
            let newObj = { ...item, 
              status_id:status_ids[index].status_id,
              other:q30_other_specifies[index].other,
              men:q30_men[index].men,
              women:q30_women[index].women,
              third_gender:q30_third_gender[index].third_gender,
              boy:q30_boys[index].boy,
              girl:q30_girls[index].girl,
              total:q30_totals[index].total
            };
            q30_data.push(newObj)
          });
        }
      }
      let new_data={
        q30_data:q30_data,
        q30_checked_value:yes_no_value,
        others:$("input[name='host_country_nationals_others_q30']").val()
      }  
      // console.log(new_data)
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
                'question30':new_data,
                'question_no':'30',
              },
              url: "/superadmin/case/temp-save-question40to60",             
              success: function(response){ 
                if (response){
                  alert("Question 30 has been saved temporary")
                }else{
                  alert("Not Saved")
                }
              }
      });
  });

 
</script>
