<?php
if($questiontitles[54]->status==0)
{

  ?>
@if(Auth::user()->can('55.question'))

<?php
  $type_acts = [
  1 =>'GO-NGO Coordination', 
  2 =>'Facilitation of CTC Members (Union)', 
  3 =>'Facilitation of CTC Members (Upazilla)', 
  4 =>'Facilitation of CTC Members (District)',   
  5 =>'Facilitation of Private Sector',   
  6 =>'Development Partners',
  7 =>'Networking Meeting',
  8 =>'Workshop/Conference/Seminar/Meeting',
  9 =>'MoU',
  10 =>'Meeting of DLAC (District)',
  11 =>'Meeting of DLAC (Upazilla)',
  12 =>'Facilitation with Police/Court/BLAS organizations',
  13 =>'Others (Specify)'
 ];
 ?>

<style>
.otherSpecify{
  display:none;
}
</style>
<div class="col-md-12 question55">
    <div class="card card-outline collapsed-card">
      <div class="card-header">
        <h3 class="card-title">
           <span class="numbering">55</span>.
           @if (isset($questiontitles [54]))
         {{ $questiontitles[54]->title }}
         @endif
        </h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body row">
        <div class="form-check">





          <table id="addRowQ55" class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th rowspan="2">Types of Activities</th>
                <th rowspan="2">District</th>
                <th rowspan="2">Number of Organizations covered</th>
                <th rowspan="2">Number of Events</th>
                <th colspan="6">Number of Individuals Covered</th>
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
              <?php if(isset($question_55_data->q55_data) && count($question_55_data->q55_data)>0){ $i=1; ?>
              @foreach($question_55_data->q55_data  as $q55)
              <tr class="q55NoOfRow" id="q55row<?=$i?>">
                <td>
                  <select name="q55_type_activities[]" id="q55_type_of_activities" class="form-control q55TypeAct">
                      <option  value="" disabled selected >--Select Types of Activities--</option>
                      @foreach ($type_acts as $key => $item)
                      <option <?=(isset($q55)  &&  !empty($q55) && $q55->type_act==$key) ? 'selected' : '' ;?> value="{{ $key }}">{{$item}}</option>
                      @endforeach
              
                    </select><br>
                  <input  
                  type="input" 
                  id="type_of_others" 
                  value="<?= isset($q55->other) ? $q55->other :'' ;?>"   
                  name="q55_othe_specify[]" 
                  class="form-control <?=(isset($q55->type_act) && $q55->type_act==13)?'':'otherSpecify';?>" 
                  placeholder="Other (Specify)"></td>
                  </td>
                  <td>
                  <select name="q55_district_id[]" id="" class="form-control">
                      <option value="" disabled selected>--Select District--</option>
                      @foreach($districs as $distric)
                      <option <?=(isset($q55)  &&  !empty($q55) && $q55->district==$distric->id) ? 'selected' : '' ;?> value="{{$distric->id}}">{{$distric->name}}</option>
                      @endforeach
                  </select>
                  </td>
                <td><input type="text" value="{{$q55->orgs_cover}}" name="q55_organizations_covered[]" id="q55_organizations_covered" class="form-control q55_organizations_covered"></td>
                <td><input type="text" value="{{$q55->num_event}}" name="q55_number_events[]" id="q55_number_events" class="form-control q55_number_events"></td>
                <td><input type="text" value="{{$q55->men}}" name="q55_individuals_covered_men[]" id="q55_individuals_covered_men_<?=$i;?>" class="form-control q55_individuals_covered_men" for="<?=$i;?>"></td>
                <td><input type="text" value="{{$q55->women}}" name="q55_individuals_covered_women[]" id="q55_individuals_covered_women_<?=$i;?>" class="form-control q55_individuals_covered_women" for="<?=$i;?>"></td>
                <td><input type="text" value="{{$q55->third_gender}}" name="q55_individuals_covered_third_gender[]" id="q55_individuals_covered_third_gender_<?=$i;?>" class="form-control q55_individuals_covered_third_gender" for="<?=$i;?>"></td>
                <td><input type="text" value="{{$q55->boy}}" name="q55_individuals_covered_boy[]" id="q55_individuals_covered_boy_<?=$i;?>" class="form-control q55_individuals_covered_boy" for="<?=$i;?>"></td>
                <td><input type="text" value="{{$q55->girl}}" name="q55_individuals_covered_girl[]" id="q55_individuals_covered_girl_<?=$i;?>" class="form-control q55_individuals_covered_girl" for="<?=$i;?>"></td>
                <td><input type="text" value="{{$q55->total}}" name="q55_individuals_covered_total[]" id="q55_individuals_covered_total_<?=$i;?>" class="form-control q55_individuals_covered_total" for="<?=$i;?>" readonly></td>
                <td>
                <?php if($i==1) {  ?>
                  <button id="addRowDatasQ55" type="button" class="btn btn-primary">+</i></button>
                  <?php }else { ?>
                  <button type="button" name="remove" id="<?=$i;?>" class="btn btn-danger q55btn_remove cicle">-</button></td>
                
                  <?php } ?>
                </td>
             
              </tr>

              
              <?php $i++; ?>
                  @endforeach
                <?php }else { ?>
              <tr class="q55NoOfRow">
                <td>
                  <select name="q55_type_activities[]" id="q55_type_of_activities" class="form-control q55TypeAct">
                      <option  value="" disabled selected >--Select Types of Activities--</option>
                      @foreach ($type_acts as $key => $item)
                      <option value="{{ $key }}">{{$item}}</option>
                      @endforeach
              
                    </select><br>
                  <input  type="input" id="type_of_others" name="q55_othe_specify[]" class="form-control otherSpecify" placeholder="Other (Specify)"></td>
                  </td>
                  <td>
                  <select name="q55_district_id[]" id="" class="form-control">
                      <option value="" disabled selected>--Select District--</option>
                      @foreach($districs as $distric)
                      <option value="{{$distric->id}}">{{$distric->name}}</option>
                      @endforeach
                  </select>
                  </td>
                <td><input type="text" name="q55_organizations_covered[]" id="q55_organizations_covered" class="form-control q55_organizations_covered"></td>
                <td><input type="text" name="q55_number_events[]" id="q55_number_events" class="form-control q55_number_events"></td>
                <td><input type="text" name="q55_individuals_covered_men[]" id="q55_individuals_covered_men_1" class="form-control q55_individuals_covered_men" for="1"></td>
                <td><input type="text" name="q55_individuals_covered_women[]" id="q55_individuals_covered_women_1" class="form-control q55_individuals_covered_women" for="1"></td>
                <td><input type="text" name="q55_individuals_covered_third_gender[]" id="q55_individuals_covered_third_gender_1" class="form-control q55_individuals_covered_third_gender" for="1"></td>
                <td><input type="text" name="q55_individuals_covered_boy[]" id="q55_individuals_covered_boy_1" class="form-control q55_individuals_covered_boy" for="1"></td>
                <td><input type="text" name="q55_individuals_covered_girl[]" id="q55_individuals_covered_girl_1" class="form-control q55_individuals_covered_girl" for="1"></td>
                <td><input type="text" name="q55_individuals_covered_total[]" id="q55_individuals_covered_total_1" class="form-control q55_individuals_covered_total" for="1" readonly></td>
                <td><button id="addRowDatasQ55" type="button" class="btn btn-primary">+</i></button></td>
             
              </tr>
              <?php } ?>



          </tbody>
          </table>
          <br>
            <p class="text-right">
            <button type="button" class="btn btn-success" id="temp-save-question55">Save</button>       
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
      // var rowCount = 1;
      $("#addRowDatasQ55").click(function(){
        let rowCount = $('.q55NoOfRow').length+1;
        $("#addRowQ55").append(
          '<tr class="q55NoOfRow" id="q55row' +rowCount+'">'+
          `
          <td>
            <select name="q55_type_activities[]" id="q55_type_of_activity_${rowCount}" data-id="${rowCount}" class="form-control q55_type_of_activity q55TypeAct">
                <option value="" disabled selected>--Select Types of Activities--</option>
                  <option value="1">GO-NGO Coordination</option>   
                  <option value="2">Facilitation of CTC Members (Union)</option>   
                  <option value="3">Facilitation of CTC Members (Upazilla)</option>   
                  <option value="4">Facilitation of CTC Members (District)</option>   
                  <option value="5">Facilitation of Private Sector</option>   
                  <option value="6">Development Partners</option>   
                  <option value="7">Networking Meeting</option>   
                  <option value="8">Workshop/Conference/Seminar/Meeting</option>   
                  <option value="9">MoU</option>   
                  <option value="10">Meeting of DLAC (District)</option>   
                  <option value="11">Meeting of DLAC (Upazilla)</option>   
                  <option value="12">Facilitation with Police/Court/BLAS organizations</option>   
                  <option value="13">Others (Specify)</option>   
              </select><br>
                  <input  type="input" id="type_of_activity_other_${rowCount}" data-id="${rowCount}" name="q55_othe_specify[]" class="form-control otherSpecify" placeholder="Other (Specify)"></td>
            </td>`+
            `<td>
            <select name="q55_district_id[]" id="" class="form-control">
                <option value="" disabled selected>--Select District--</option>
                @foreach($districs as $distric)
                <option value="{{$distric->id}}">{{$distric->name}}</option>
                @endforeach
            </select>
            </td>`+
          `<td><input type="text" name="q55_organizations_covered[]" id="q55_organizations_covered_${rowCount}" for="${rowCount}" class="form-control q55_organizations_covered"></td>
          <td><input type="text" name="q55_number_events[]" id="q55_number_events_${rowCount}" for="${rowCount}" class="form-control q55_number_events"></td>
          <td><input type="text" name="q55_individuals_covered_men[]" id="q55_individuals_covered_men_${rowCount}" for="${rowCount}" class="form-control q55_individuals_covered_men"></td>
          <td><input type="text" name="q55_individuals_covered_women[]" id="q55_individuals_covered_women_${rowCount}" for="${rowCount}" class="form-control q55_individuals_covered_women"></td>
          <td><input type="text" name="q55_individuals_covered_third_gender[]" id="q55_individuals_covered_third_gender_${rowCount}" for="${rowCount}" class="form-control q55_individuals_covered_third_gender"></td>
          <td><input type="text" name="q55_individuals_covered_boy[]" id="q55_individuals_covered_boy_${rowCount}" for="${rowCount}" class="form-control q55_individuals_covered_boy"></td>
          <td><input type="text" name="q55_individuals_covered_girl[]" id="q55_individuals_covered_girl_${rowCount}" for="${rowCount}" class="form-control q55_individuals_covered_girl"></td>
          <td><input type="text" name="q55_individuals_covered_total[]" id="q55_individuals_covered_total_${rowCount}" for="${rowCount}" class="form-control q55_individuals_covered_total" readonly></td>
          `+
          `<td><button type="button" name="remove" id="${rowCount}" class="btn btn-danger q55btn_remove cicle">-</button></td>`+


          '</tr>'
        )
      });
      // Add a generic event listener for any change on quantity or price classed inputs
      $("#addRowQ55").on('input', 'input.q55_individuals_covered_men,input.q55_individuals_covered_women,input.q55_individuals_covered_third_gender,input.q55_individuals_covered_boy,input.q55_individuals_covered_girl', function() {
        getTotalCost($(this).attr("for"));
      });

      $(document).on('click', '.q55btn_remove', function() {
        var button_id = $(this).attr('id');
        $('#q55row'+button_id+'').remove();
      });
      // Using a new index rather than your global variable i
      function getTotalCost(ind) {
        var man = $('#q55_individuals_covered_men_'+ind).val()||0;
        var woman = $('#q55_individuals_covered_women_'+ind).val()||0;
        var third_gender = $('#q55_individuals_covered_third_gender_'+ind).val()||0;
        var boy = $('#q55_individuals_covered_boy_'+ind).val() ||0;
        var girl = $('#q55_individuals_covered_girl_'+ind).val() ||0


        var totNumber = parseInt(man) + parseInt(woman)+parseInt(third_gender)+ parseInt(boy) + parseInt(girl);
        var tot = totNumber;
        $('#q55_individuals_covered_total_'+ind).val(tot)||0;
        calculateSubTotal();
      }

      function calculateSubTotal() {
        var subtotal = 0;
        $('.q55_individuals_covered_total').each(function() {
          subtotal += parseFloat($(this).val());
        });
        
      };
      $('#q55_type_of_activities').on("change",function(){
    
      
    $('.question55').find('#type_of_others').hide()
    $('.question55').find('#type_of_others').val("")
    if($(this).val()==="13"){
      $('.question55').find('#type_of_others').show()
    }
  });
  $(document).on("change",".q55_type_of_activity",function(){
      var specify_id= $(this).attr("data-id")
    $(this).each(function(index, element) {
    // do something with the id
    // console.log($(this).text())
      $('.question55').find('#type_of_activity_other_'+specify_id).hide()
      $('.question55').find('#type_of_activity_other_'+specify_id).val("")
      if($(this).val()==="13"){
        $('.question55').find('#type_of_activity_other_'+specify_id).show()
      } 
});
  });

  //Temporary Save
  $(document).on("click",'#temp-save-question55',function() {
    var q55_type_acts = [],
      q55_other_specifies=[],
      q55_number_of_orgs=[],
      q55_num_events=[],
      q55_districts=[],
      q55_men=[],
      q55_women=[],
      q55_third_gender=[],
      q55_boys=[],
      q55_girls=[],
      q55_total=[];
      var i = 1
          $('select[name="q55_type_activities[]"]').each(function() {
          
            let type_act ={
                 type_act:$(this).val()
              }
              q55_type_acts.push(type_act);
          });
          $('input[name="q55_othe_specify[]"]').each(function() {
              let other ={
                other:$(this).val()
              }
              q55_other_specifies.push(other);
           
              });
          

          $('select[name="q55_district_id[]"]').each(function() {
            if($(this).val()){
              let district ={
                district:$(this).val()
              }
              q55_districts.push(district);
            }
           
          });
          $('input[name="q55_organizations_covered[]"]').each(function() {
            if($(this).val()){
              let orgs_cover ={
                orgs_cover:$(this).val()
              }
              q55_number_of_orgs.push(orgs_cover);
            }
           
          });
          $('input[name="q55_number_events[]"]').each(function() {
            
              let num_event ={
                num_event:$(this).val()
              }
              q55_num_events.push(num_event);
          
           
          });
          $('input[name="q55_individuals_covered_men[]"]').each(function() {
            if($(this).val()){
              let men ={
                men:$(this).val()
              }
              q55_men.push(men);
            }
           
          });
          $('input[name="q55_individuals_covered_women[]"]').each(function() {
            if($(this).val()){
              let women ={
                women:$(this).val()
              }
              q55_women.push(women);
            }
           
          });
          $('input[name="q55_individuals_covered_third_gender[]"]').each(function() {
            if($(this).val()){
              let third_gender ={
                third_gender:$(this).val()
              }
              q55_third_gender.push(third_gender);
            }
           
          });
          $('input[name="q55_individuals_covered_boy[]"]').each(function() {
            if($(this).val()){
              let boy ={
                boy:$(this).val()
              }
              q55_boys.push(boy);
            }
           
          });
          $('input[name="q55_individuals_covered_girl[]"]').each(function() {
            if($(this).val()){
              let girl ={
                girl:$(this).val()
              }
              q55_girls.push(girl);
            }
           
          });
          $('input[name="q55_individuals_covered_total[]"]').each(function() {
            if($(this).val()){
              let total ={
                total:$(this).val()
              }
              q55_total.push(total);
            }
           
          });
var q55_data=[]
if(q55_type_acts.length>0){
  jQuery.each(q55_type_acts, function(index, item) {
    let newObj = { ...item, 
      type_act:q55_type_acts[index].type_act,
      other:q55_other_specifies[index].other,
      district:q55_districts[index].district,
      orgs_cover:q55_number_of_orgs[index].orgs_cover,
      num_event:q55_num_events[index].num_event,
      men:q55_men[index].men,
      women:q55_women[index].women,
      third_gender:q55_third_gender[index].third_gender,
      boy:q55_boys[index].boy,
      girl:q55_girls[index].girl,
      total:q55_total[index].total
    };
    // item[index]["jurisdict"]=jurisdictions[index].jurisdict
    q55_data.push(newObj)
  });
}
let new_data ={
  q55_data:q55_data
}
//  console.log(new_data)
$.ajax({    //create an ajax request to display.php
        type: "POST",
        data:{
          "_token": "{{ csrf_token() }}",
          'question55':new_data,
          'question_no':'55',
        },
        url: "/superadmin/case/temp-save-question40to60",             
        success: function(response){ 
          if(response){
            alert("Question 55 has been saved temporary")
          }else{
            alert("Not Saved")
          }
        }
});

})
    })
  </script>