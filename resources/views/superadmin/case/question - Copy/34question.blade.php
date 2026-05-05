<?php
if($questiontitles[33]->status==0)
{

  ?>
@if(Auth::user()->can('34.question'))
<?php 
$loations =[
  1 =>'Barisal', 
  2 =>'Chattogram', 
  3 =>'Dhaka', 
  4 =>'Khulna',   
  5 =>'Mymensingh',
  6 =>'Rajshahi',
  7 =>'Rangpur',
  8 =>'Sylhet',
  9 =>'National'
];

$type_assists =[
  1 =>'Psychosocial Counselling', 
  2 =>'Shelter', 
  3 =>'Assistance to persons with disability', 
  4 =>'Testimony via video or written statements',   
  5 =>'Others Specify'
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
<div class="col-md-12 question34">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
         <span class="numbering">34</span>.
           @if (isset($questiontitles [33]))
         {{ $questiontitles[33]->title }}
         @endif
      </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
     <div class="icheck-primary">
     <?php if(isset($question_34_data->q34_checked_value)) { ?>

     <input 
     type="radio" 
     id="q34radioNineteen1" 
     class="thirty34_fifty_status" 
     name="is_avoid_re_traumatization_victims_q34" 
     <?=(isset($question_34_data->q34_checked_value) && $question_34_data->q34_checked_value=="1")?"checked":"" ;?>   
 
     value="1">
     <?php }else { ?>
           
     <input type="radio" id="q34radioNineteen1" class="thirty34_fifty_status" name="is_avoid_re_traumatization_victims_q34" checked value="1">
     <?php } ?>    
           
     <label for="q34radioNineteen1">
             Yes
           </label>
         </div>
         <div class="icheck-primary">
          <input 
          type="radio" 
          id="q34radioNineteen2"  
          class="thirty34_fifty_status" 
          name="is_avoid_re_traumatization_victims_q34" 
          <?=(isset($question_34_data->q34_checked_value) && $question_34_data->q34_checked_value=="0")?"checked":"" ;?>   

          value="0">
          <label for="q34radioNineteen2">
            No
          </label>
        </div>

        <div class="icheck-primary input-group mb-3">
          <input 
          type="radio" 
          id="q34radioNineteen3" 
          class="thirty34_fifty_status" 
          name="is_avoid_re_traumatization_victims_q34" 
         <?=(isset($question_34_data->q34_checked_value) && $question_34_data->q34_checked_value=="2")?"checked":"" ;?>   

          value="2">
          <label for="q34radioNineteen3">
            Others
          </label>
          

          <span class="col-md-6 mt--4 <?=(isset($question_34_data->q34_checked_value)   && ($question_34_data->q34_checked_value=='2')) ? '' : 'othersText' ;?>" style="margin-top:-8px">
            <input 
            type="text" 
            id="q34others"  
            placeholder="Others "  
            class="form-control" 
            value="<?=(isset($question_34_data->others) && $question_34_data->others)?$question_34_data->others:"";?>"
            name="avoid_re_traumatization_victims_others_q34">
          </span>
        </div>
        <div id="34_question_view" class="card-body row <?=(isset($question_34_data->q34_checked_value) &&($question_34_data->q34_checked_value=="2" || $question_34_data->q34_checked_value=="0"))?"visibility":"" ;?>">
      <table id="addRowQ34" class="table table-bordered text-center">
        <thead class="">
          <tr>
            <th rowspan="2" style="text-align: center; vertical-align: middle;">Location
              </th>
            <th rowspan="2" style="vertical-align: middle;">Types of Assistance</th>
            <th colspan="6">Coverage</th>
            <th></th>
          </tr>
          <tr>
            <th>Men</th>
            <th>Women</th>
            <th>3rd Gender</th>
            <th>Boys</th>
            <th>Girls</th>
            <th>Total</th>
            <th>Action</th>
          </tr>
</thead>
<tbody>
        <?php if(isset($question_34_data->q34_data) && count($question_34_data->q34_data)>0){ $i=1; ?>
          @foreach($question_34_data->q34_data  as $q34)
          <tr id="q34row<?=$i?>">
            <td> <select name="location_id_q34[]" id="" class="form-control location_id_q34" for="<?=$i;?>">
            @foreach ($locations as $key => $item)
              <option  <?=(isset($q34)  &&  !empty($q34) && $q34->location==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
            @endforeach
            
              </select>
            </td>
            <td>
            <select name="types_assistance_q34[]" id="q34_type_of_assistance" class="form-control types_assistance_q34" for="<?=$i;?>">
                @foreach ($type_assists as $key => $item)
                  <option  <?=(isset($q34)  &&  !empty($q34) && $q34->type_assist==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                @endforeach  
            
              </select><br>
                  <input  
                  type="input" 
                  id="type_of_assistance" 
                  value="<?= isset($q34->other)  ? $q34->other :'' ;?>" 
                  name="q34_other_specify[]" 
                  class="form-control <?=(isset($q34)  &&  !empty($q34) && $q34->type_assist==5) ? '' : 'otherSpecify' ;?>" 
                  placeholder="Other (Specify)">
            </td>

            <td><input  class="form-control q34_coverage_men" type='number' value="{{$q34->men}}" data-type="q34_coverage_men" id='q34_coverage_men_<?=$i;?>' name="q34_coverage_men[]" for="<?=$i;?>"/></td> 
            <td><input class="form-control q34_coverage_women" type='number' value="{{$q34->women}}" id='q34_coverage_women_<?=$i;?>' name="q34_coverage_women[]" for="<?=$i;?>"/></td>
            <td><input class="form-control q34_coverage_third_gender" type='number' value="{{$q34->third_gender}}" data-type="q34_coverage_third_gender" id='q34_coverage_third_gender_<?=$i;?>' name="q34_coverage_third_gender[]" for="<?=$i;?>"/></td> 
            <td><input class="form-control q34_coverage_boy" type='number' value="{{$q34->boy}}" id='q34_coverage_boy_<?=$i;?>' name="q34_coverage_boy[]" for="<?=$i;?>"/></td>
            <td><input class="form-control q34_coverage_girl" type='number' value="{{$q34->girl}}" data-type="q34_coverage_girl" id='q34_coverage_girl_<?=$i;?>' name="q34_coverage_girl[]" for="<?=$i;?>"/></td> 
            <td><input class="form-control q34_coverage_total" type='text' value="{{$q34->total}}" id='q34_coverage_total_<?=$i;?>' name='q34_coverage_total[]' for='<?=$i;?>' readonly/></td>
            <td>
            <?php if($i==1) {  ?>
              <button id="addRowDatasQ34" type="button" class="btn btn-sm btn-primary">+</i></button>
            
              <?php }else { ?>
                  <button type="button" name="remove" id="<?=$i;?>" class="btn btn-danger q34btn_remove cicle">-</button></td>
                
                  <?php } ?></td>
          
          </tr>
         

          <?php $i++; ?>
                  @endforeach
                <?php }else { ?>

          <tr>
            <td> <select name="location_id_q34[]" id="" class="form-control location_id_q34">
            @foreach ($locations as $key => $item)
              <option  <?=(isset($q34)  &&  !empty($q34) && $q34->location==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
            @endforeach
            
              </select>
            </td>
            <td>
            <select name="types_assistance_q34[]" id="q34_type_of_assistance" class="form-control types_assistance_q34">
                @foreach ($type_assists as $key => $item)
                  <option  <?=(isset($q34)  &&  !empty($q34) && $q34->type_assist==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                @endforeach  
          
              </select><br>
                  <input  
                  type="input" 
                  id="type_of_assistance" 
                  name="q34_other_specify[]" 
                  class="form-control otherSpecify" 
                  placeholder="Other (Specify)">
            </td>

            <td><input  class="form-control q34_coverage_men" type='number' data-type="q34_coverage_men" id='q34_coverage_men_1' name="q34_coverage_men[]" for="1"/></td> 
            <td><input class="form-control q34_coverage_women" type='number' id='q34_coverage_women_1' name="q34_coverage_women[]" for="1"/></td>
            <td><input class="form-control q34_coverage_third_gender" type='number' data-type="q34_coverage_third_gender" id='q34_coverage_third_gender_1' name="q34_coverage_third_gender[]" for="1"/></td> 
            <td><input class="form-control q34_coverage_boy" type='number' id='q34_coverage_boy_1' name="q34_coverage_boy[]" for="1"/></td>
            <td><input class="form-control q34_coverage_girl" type='number' data-type="q34_coverage_girl" id='q34_coverage_girl_1' name="q34_coverage_girl[]" for="1"/></td> 
            <td><input class="form-control q34_coverage_total" type='text' id='q34_coverage_total_1' name='q34_coverage_total[]' for='1' readonly/></td>
            <td>
              <button id="addRowDatasQ34" type="button" class="btn btn-sm btn-primary">+</i></button>
            </td>
          
          </tr>
          <?php } ?>

        </tbody>
      </table>
    </div>
        <br/>
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question34">Save</button>       
          </p>
    </div>
  </div>
</div>
@endif

<?php }
  ?>
<script>
$(document).ready(function(){
        $(".question34").on("click",function(){
            var statusvalue = $("input[name='is_avoid_re_traumatization_victims_q34']:checked").val();
            $('.question34').find('.othersText').hide()

            if(statusvalue == '1'){
              $('.question34').find('#34_question_view').show()
              $('.question34').find('span').addClass('othersText')
              $('.question34').find('#q34others').val("")

            }else if(statusvalue=="2"){
              $('.question34').find('#34_question_view').hide()
              $('.question34').find('span').removeClass('othersText')
              $('.question34').find('span').show()
            }else{
              $('.question34').find('#34_question_view').hide()
              $('.question34').find('span').addClass('othersText')
            $('.question34').find('#q34others').val("")


            }
        });
        // var rowCount = 1;
  $("#addRowDatasQ34").click(function(){
    let rowCount = $('.location_id_q34').length+1;
    $("#addRowQ34").append(
      
    '<tr id="q34row'+rowCount+'">'+
    
    `<td> <select name="location_id_q34[]" id="" class="form-control location_id_q34" for="${rowCount}">
      <option value="1">Barisal</option>
      <option value="2">Chattogram</option>   
      <option value="3">Dhaka</option>   
      <option value="4">Khulna</option>   
      <option value="5">Mymensingh</option>   
      <option value="6">Rajshahi</option>   
      <option value="7">Rangpur</option>   
      <option value="8">Sylhet</option>   
      <option value="9">National</option>   

        </select>
      </td>
      <td>
        <select name="types_assistance_q34[]" data-id="${rowCount}" id="q34_type_of_assistanced_${rowCount}" class="form-control types_assistanced_q34" for="${rowCount}">
        <option value="1">Psychosocial Counselling</option>   
        <option value="2">Shelter</option>   
        <option value="3">Assistance to persons with disability</option>   
        <option value="4">Testimony via video or written statements</option>   
        <option value="5">Others Specify</option>   
          
        
          </select><br/>
          <input class="form-control otherSpecify type_of_assistanced_specify" type="text" data-id="${rowCount}" data-type="type_of_assistanced" id="type_of_assistanced_${rowCount}" name="q34_other_specify[]" for="${rowCount}" placeholder="Others Specify"/>
      </td>`+
    '<td><input class="form-control q34_coverage_men" type="number" data-type="q34_coverage_men" id="q34_coverage_men_'+rowCount+'" name="q34_coverage_men[]" for="'+rowCount+'"/></td>'+
    '<td><input class="form-control q34_coverage_women" type="number" data-type="q34_coverage_women" id="q34_coverage_women_'+rowCount+'" name="q34_coverage_women[]" for="'+rowCount+'"/></td>'+
    '<td><input class="form-control q34_coverage_third_gender" type="number" data-type="q34_coverage_third_gender" id="q34_coverage_third_gender_'+rowCount+'" name="q34_coverage_third_gender[]" for="'+rowCount+'"/></td>'+
    '<td><input class="form-control q34_coverage_boy" type="number" data-type="q34_coverage_boy" id="q34_coverage_boy_'+rowCount+'" name="q34_coverage_boy[]" for="'+rowCount+'"/></td>'+
    '<td><input class="form-control q34_coverage_girl" type="number" data-type="q34_coverage_girl" id="q34_coverage_girl_'+rowCount+'" name="q34_coverage_girl[]" for="'+rowCount+'"/></td>'+
    '<td><input class="form-control q34_coverage_total" type="number" data-type="q34_coverage_total" id="q34_coverage_total_'+rowCount+'" name="q34_coverage_total[]" for="'+rowCount+'" readonly="true"/></td>'+


    '<td><button type="button" name="remove" id="'+rowCount+'" class="btn btn-danger q34btn_remove cicle">-</button></td>'+

         
    '</tr>'
      
    )
  });
  $(document).on('click', '.q34btn_remove', function() {
        var button_id = $(this).attr('id');
        $('#q34row'+button_id+'').remove();
      });
    
  

  $("#addRowQ34").on('input', 'input.q34_coverage_men,input.q34_coverage_women,input.q34_coverage_third_gender,input.q34_coverage_boy,input.q34_coverage_girl', function() {
        getTotalCost($(this).attr("for"));
      });
 // Using a new index rather than your global variable i
 function getTotalCost(ind) {
    var man = $('#q34_coverage_men_'+ind).val()||0;
    var woman = $('#q34_coverage_women_'+ind).val()||0;
    var third_gender = $('#q34_coverage_third_gender_'+ind).val()||0;
    var boy = $('#q34_coverage_boy_'+ind).val()||0;
    var girl = $('#q34_coverage_girl_'+ind).val()||0;

    var totNumber = parseInt(man) + parseInt(woman)+parseInt(third_gender)+parseInt(boy) + parseInt(girl);
    var tot = totNumber;
    $('#q34_coverage_total_'+ind).val(tot)||0;
    calculateSubTotal();
      }

  function calculateSubTotal() {
    var subtotal = 0;
    $('.q34_coverage_total').each(function() {
      subtotal += parseFloat($(this).val());
    });
    
  } 
  $('#q34_type_of_assistance').on("change",function(){
    
      
      $('.question34').find('#type_of_assistance').hide()
      $('.question34').find('#type_of_assistance').val("")
      if($(this).val()==="5"){
        $('.question34').find('#type_of_assistance').show()
      }
    });


    $(document).on("change",".types_assistanced_q34",function(){
      var specify_id= $(this).attr("data-id")
    $(this).each(function(index, element) {
    // do something with the id
    // console.log($(this).text())
      $('.question34').find('#type_of_assistanced_'+specify_id).hide()
      $('.question34').find('#type_of_assistanced_'+specify_id).val("")
      if($(this).val()==="5"){
        $('.question34').find('#type_of_assistanced_'+specify_id).show()
      } 
});
  });

//Temporary Save
$(document).on("click",'#temp-save-question34',function() {
          var q34_locations=[],
              q34_type_assists=[],
              q34_other_specifies=[],
              q34_men=[],
              q34_women=[],
              q34_third_gender=[],
              q34_boys=[],
              q34_girls=[],
              q34_total=[];
              
      let q34_data=[];
    
      let yes_no_value=$("input[type='radio'][name='is_avoid_re_traumatization_victims_q34']:checked").val()
      if(yes_no_value=="1"){
          $('select[name="location_id_q34[]"]').each(function() {
              let location ={
                location:$(this).val()
              }             
              q34_locations.push(location);
           });
           $('select[name="types_assistance_q34[]"]').each(function() {
              let type_assist ={
                type_assist:$(this).val()
              }             
              q34_type_assists.push(type_assist);
            
           });
           $('input[name="q34_other_specify[]"]').each(function() {
                let other ={
                      other:$(this).val()
                    }
                    q34_other_specifies.push(other);
              });
           
          $('input[name="q34_coverage_men[]"]').each(function() {
              let men ={
                men:$(this).val()
              }
              q34_men.push(men);
            
           
          });
          $('input[name="q34_coverage_women[]"]').each(function() {
              let women ={
                women:$(this).val()
              }
              q34_women.push(women);
            
           
          });
          $('input[name="q34_coverage_third_gender[]"]').each(function() {
              let third_gender ={
                third_gender:$(this).val()
              }
              q34_third_gender.push(third_gender);
            
           
          });
          $('input[name="q34_coverage_boy[]"]').each(function() {
              let boy ={
                boy:$(this).val()
              }
              q34_boys.push(boy);
            
           
          });
          $('input[name="q34_coverage_girl[]"]').each(function() {
              let girl ={
                girl:$(this).val()
              }
              q34_girls.push(girl);
            
           
          });
          $('input[name="q34_coverage_total[]"]').each(function() {
              let total ={
                total:$(this).val()
              }
              q34_total.push(total);
            
           
          });
          
         


          if(q34_locations.length>0){
            jQuery.each(q34_locations, function(index, item) {
              let newObj = { ...item, 
                location:q34_locations[index].location,
                type_assist:q34_type_assists[index].type_assist,
                other:q34_other_specifies[index].other,
                men:q34_men[index].men,
                women:q34_women[index].women,
                third_gender:q34_third_gender[index].third_gender,
                boy:q34_boys[index].boy,
                girl:q34_girls[index].girl,
                total:q34_total[index].total

              
              };
              // item[index]["jurisdict"]=jurisdictions[index].jurisdict
              q34_data.push(newObj)
            });
          }
        }
    var new_data={
      q34_data:q34_data,
      q34_checked_value:yes_no_value,
      others:$("input[name='avoid_re_traumatization_victims_others_q34']").val()
    }
        // console.log(new_data)
   
          $.ajax({    //create an ajax request to display.php
                  type: "POST",
                  data:{
                    "_token": "{{ csrf_token() }}",
                    'question34':new_data,
                    'question_no':'34',
                  },
                  url: "/superadmin/case/temp-save-question40to60",             
                  success: function(response){ 
                    if(response){
                      alert("Question 34 has been saved temporary")

                    }else{
                      alert("Not Saved")
                    }
                  }
          });
    });

    });

</script>