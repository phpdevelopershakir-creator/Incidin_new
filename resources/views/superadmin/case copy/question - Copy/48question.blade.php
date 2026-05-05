<?php
if($questiontitles[47]->status==0)
{

  ?>
@if(Auth::user()->can('48.question'))
<?php 
 $category_trainees = [
  1 =>'Police', 
  2 =>'CID', 
  3 =>'RAB', 
  4 =>'Ansar',   
  5 =>'VDP',
  6 =>'Coast Guard',   
  7 =>'BGB',
  8 =>'Immigration'
 ];
 $training_content = [
  1 =>'PSHT', 
  2 =>'PSHT Act 2012', 
  3 =>'Rule of PSHT Act', 
  4 =>'TIP Investigation',   
  5 =>'Victim Withess Protection',   
  6 =>'TIP and MLA',
  7=>'Role of Police',
  8=>'NPA',
  9=>'NRM',
  10=>'VoT identification Guideline'
 ];
 
 ?>
<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
         <span class="numbering">48</span>.
           @if (isset($questiontitles [47]))
         {{ $questiontitles[47]->title }}
         @endif 
      </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div if="q48_question_view" class="card-body row">



      <table id="addRowQ48" class="table table-bordered text-center">
        <thead class="">
          <tr>
            <th rowspan="2" style="text-align: center; margin: bottom 45%;">Category of Trainee </th>
            <th rowspan="2">Training Contents </th>
            <th rowspan="2">Number of Training</th>
            <th rowspan="2">Location
            </th>
            <th rowspan="2">Development Partner</th>
            <th colspan="4">Coverage</th>
            <th></th>
          </tr>
          <tr>
            <th>Men</th>
            <th>Women</th>
            <th>3rd Gender</th>
            <th>Total</th>
            <th>Action</th>
          </tr>
      </thead>
      <tbody>
      <?php if(isset($question_48_data->q48_data) && count($question_48_data->q48_data)>0){ $i=1; ?>
          @foreach($question_48_data->q48_data  as $q48)
          <tr id="q48row<?=$i?>">
            <td>
            <select name="category_trainee[]" id="category_trainee" class="form-control category_trainee">
            <option value=""  disabled selected>--Select Category of Trainee--</option>
                    @foreach ($category_trainees as $key => $item)
                    <option  <?=(isset($q48)  &&  !empty($q48) && $q48->cate_trainee==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                    @endforeach
              </select>
            </td>
            <td> <select name="training_contents[]" id="training_contents" class="form-control training_contents">
            <option value=""  disabled selected>--Select Training Contents--</option>
                    @foreach ($training_content as $key => $item)
                    <option  <?=(isset($q48)  &&  !empty($q48) && $q48->train_content==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                    @endforeach
              </select> </td>
            <td> <input type="text" value="{{$q48->num_train}}" name="number_of_training[]" id="number_of_training" class="form-control number_of_training"> </td>
            <td> <select name="q48_location_id[]" id="q48_location_id" class="form-control q48_location_id">
            <option value=""  disabled selected>--Select District--</option>
               @foreach($districs as $distric)
                <option <?=(isset($q48)  &&  !empty($q48) && $q48->q48location==$distric->id) ? 'selected' : '' ;?> value="{{$distric->id}}">{{$distric->name}}</option>
               

                @endforeach
              </select> </td>
            <td><input type="text" value="<?=(isset($q48->develop_partner))?$q48->develop_partner:""?>" name="development_partner[]" id="development_partner" class="form-control development_partner"></td>
            <td><input  class="form-control q48_coverage_men" value="<?=(isset($q48->men))?$q48->men:""?>" type='number' data-type="q48_coverage_men" id='q48_coverage_men_<?= $i ?>' name="q48_coverage_men[]" for="<?= $i ?>"/></td> 
            <td><input class="form-control q48_coverage_women" value="<?=(isset($q48->women))?$q48->women:""?>" type='number' id='q48_coverage_women_<?= $i ?>' name="q48_coverage_women[]" for="<?= $i ?>"/></td>
            <td><input class="form-control q48_coverage_third_gender" value="<?=(isset($q48->third_gender))?$q48->third_gender:""?>" type='number' data-type="q48_coverage_third_gender" id='q48_coverage_third_gender_<?= $i ?>' name="q48_coverage_third_gender[]" for="<?= $i ?>"/></td> 
            <td><input class="form-control q48_coverage_total" value="<?=(isset($q48->total))?$q48->total:""?>" type='text' id='q48_coverage_total_<?= $i ?>' name='q48_coverage_total[]' for='<?= $i ?>' readonly/></td>
            <td>
            <?php if($i==1) {  ?>
              <button id="addRowDatasQ48" type="button" class="btn btn-sm btn-primary">+</i></button>
              <?php }else { ?>
              <button type="button" name="remove" id="<?= $i;?>" class="btn btn-danger q48btn_remove cicle">-</button></td>
              <?php } ?>
            </td>
          
          </tr>

        <?php $i++; ?>
          @endforeach
        <?php }else { ?>
          <tr>
            <td>
            <select name="category_trainee[]" id="category_trainee" class="form-control category_trainee">
            <option value=""  disabled selected>--Select Category of Trainee--</option>
                    @foreach ($category_trainees as $key => $item)
                    <option  <?=(isset($q48)  &&  !empty($q48) && $q48->cate_trainee==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                    @endforeach
              </select>
            </td>
            <td> <select name="training_contents[]" id="training_contents" class="form-control training_contents">
            <option value=""  disabled selected>--Select Country--</option>
                    @foreach ($training_content as $key => $item)
                    <option  <?=(isset($q48)  &&  !empty($q48) && $q48->train_content==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                    @endforeach
              </select> </td>
            <td> <input type="text" name="number_of_training[]" id="number_of_training" class="form-control number_of_training"> </td>
            <td> <select name="q48_location_id[]" id="q48_location_id" class="form-control q48_location_id">
            <option value=""  disabled selected>--Select District--</option>
               @foreach($districs as $distric)
                <option value="{{$distric->id}}">{{$distric->name}}</option>
               

                @endforeach
              </select> </td>
            <td><input type="text" name="development_partner[]" id="development_partner" class="form-control development_partner"></td>
            <td><input  class="form-control q48_coverage_men" type='number' data-type="q48_coverage_men" id='q48_coverage_men_1' name="q48_coverage_men[]" for="1"/></td> 
            <td><input class="form-control q48_coverage_women" type='number' id='q48_coverage_women_1' name="q48_coverage_women[]" for="1"/></td>
            <td><input class="form-control q48_coverage_third_gender" type='number' data-type="q48_coverage_third_gender" id='q48_coverage_third_gender_1' name="q48_coverage_third_gender[]" for="1"/></td> 
            <td><input class="form-control q48_coverage_total" type='text' id='q48_coverage_total_1' name='q48_coverage_total[]' for='1' readonly/></td>
            <td><button id="addRowDatasQ48" type="button" class="btn btn-sm btn-primary">+</i></button></td>
          
          </tr>
          <?php } ?>
      </tbody>
      </table>
      <br>
      <p class="text-right">
        <button type="button" class="btn btn-success" id="temp-save-question48">Save</button>       
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
  $("#addRowDatasQ48").click(function(){
    let rowCount = $('.category_trainee').length+1;
    $("#addRowQ48").append(
      
  '<tr id="q48row'+rowCount+'">'+
    
    `<td>
      <select name="category_trainee[]" id="category_trainee" class="form-control category_trainee">
      <option value=""  disabled selected>--Select Category of Trainee--</option>
          <option value="1">Police</option>
          <option value="2">CID</option>
          <option value="3">RAB</option>
          <option value="4">Ansar</option>
          <option value="5">VDP</option>
          <option value="6">Coast Guard</option>
          <option value="7">BGB </option>
          <option value="8">Immigration</option>
        </select>
      </td>
    <td> <select name="training_contents[]" id="training_contents" class="form-control training_contents">
      <option value=""  disabled selected>--Select Country--</option>
          <option value="1">PSHT</option>
          <option value="2">PSHT Act 2012</option>
          <option value="3">Rule of PSHT Act</option>
          <option value="4">TIP Investigation</option>
          <option value="5">Victim Withess Protection</option>
          <option value="6">TIP and MLA</option>
          <option value="7">Role of Police </option>
          <option value="8">NPA</option>
          <option value="9">NRM</option>
          <option value="10">VoT identification Guideline</option>
        </select> </td>
        <td> <input type="text" name="number_of_training[]" id="number_of_training" class="form-control number_of_training"> </td>`+
      `<td> <select name="q48_location_id[]" id="q48_location_id" class="form-control q48_location_id">
      <option value=""  disabled selected>--Select District--</option>
          @foreach($districs as $distric)
          <option value="{{$distric->id}}">{{$distric->name}}</option>
          

          @endforeach
        </select> </td>`+
      `<td><input type="text" name="development_partner[]" id="development_partner" class="form-control development_partner"></td>`+
      '<td><input class="form-control q48_coverage_men" type="number" data-type="q48_coverage_men" id="q48_coverage_men_'+rowCount+'" name="q48_coverage_men[]" for="'+rowCount+'"/></td>'+
      '<td><input class="form-control q48_coverage_women" type="number" data-type="q48_coverage_women" id="q48_coverage_women_'+rowCount+'" name="q48_coverage_women[]" for="'+rowCount+'"/></td>'+
      '<td><input class="form-control q48_coverage_third_gender" type="number" data-type="q48_coverage_third_gender" id="q48_coverage_third_gender_'+rowCount+'" name="q48_coverage_third_gender[]" for="'+rowCount+'"/></td>'+
      '<td><input class="form-control q48_coverage_total" type="number" data-type="q48_coverage_total" id="q48_coverage_total_'+rowCount+'" name="q48_coverage_total[]" for="'+rowCount+'" readonly="true"/></td>'+
      '<td><button type="button" name="remove" id="'+rowCount+'" class="btn btn-danger q48btn_remove cicle">-</button></td>'+

         
    '</tr>'
      
    )
  });
  $(document).on('click', '.q48btn_remove', function() {
        var button_id = $(this).attr('id');
        $('#q48row'+button_id+'').remove();
      });
  $("#addRowQ48").on('input', 'input.q48_coverage_men,input.q48_coverage_women,input.q48_coverage_third_gender', function() {
        getTotalCost($(this).attr("for"));
      });
 // Using a new index rather than your global variable i
 function getTotalCost(ind) {
    var man = $('#q48_coverage_men_'+ind).val()||0;
    var woman = $('#q48_coverage_women_'+ind).val()||0;
    var third_gender = $('#q48_coverage_third_gender_'+ind).val()||0;


    var totNumber = parseInt(man) + parseInt(woman)+parseInt(third_gender);
    var tot = totNumber;
    $('#q48_coverage_total_'+ind).val(tot)||0;
    calculateSubTotal();
      }

  function calculateSubTotal() {
    var subtotal = 0;
    $('.q48_coverage_total').each(function() {
      subtotal += parseFloat($(this).val());
    });
    
  }

  $(document).on("click",'#temp-save-question48',function() {
          var category_trainee = [],
              training_content=[],
              q48_location=[],
              number_training=[],
              development_partner=[],
              q48_men=[],
              q48_women=[],
              q48_third_gender=[],
              q48_total=[];
              
          $('select[name="category_trainee[]"]').each(function() {
              let cate_trainee ={
                cate_trainee:$(this).val()
              }             
              category_trainee.push(cate_trainee);
           });
           $('select[name="training_contents[]"]').each(function() {
              let train_content ={
                train_content:$(this).val()
              }             
              training_content.push(train_content);
           });
           $('select[name="q48_location_id[]"]').each(function() {
              let q48location ={
                q48location:$(this).val()
              }             
              q48_location.push(q48location);
           });
           $('input[name="number_of_training[]"]').each(function() {
              let num_train ={
                num_train:$(this).val()
              }             
              number_training.push(num_train);
           });
          $('input[name="development_partner[]"]').each(function() {
            if($(this).val()){
              let develop_partner ={
                develop_partner:$(this).val()
              }
              development_partner.push(develop_partner);
            }
           
          });
          $('input[name="q48_coverage_men[]"]').each(function() {
              let men ={
                men:$(this).val()
              }
              q48_men.push(men);
            
           
          });
          $('input[name="q48_coverage_women[]"]').each(function() {
              let women ={
                women:$(this).val()
              }
              q48_women.push(women);
            
           
          });
          $('input[name="q48_coverage_third_gender[]"]').each(function() {
              let third_gender ={
                third_gender:$(this).val()
              }
              q48_third_gender.push(third_gender);
            
           
          });
          $('input[name="q48_coverage_total[]"]').each(function() {
              let total ={
                total:$(this).val()
              }
              q48_total.push(total);
            
           
          });
          
           var q48_data=[];
          if(category_trainee.length>0){
            jQuery.each(category_trainee, function(index, item) {
              let newObj = { ...item, 
                train_content:training_content[index].train_content,
                q48location:q48_location[index].q48location,
                num_train:number_training[index].num_train,
                develop_partner:development_partner[index].develop_partner,
                men:q48_men[index].men,
                women:q48_women[index].women,
                third_gender:q48_third_gender[index].third_gender,
                total:q48_total[index].total,

              
              };
              // item[index]["jurisdict"]=jurisdictions[index].jurisdict
              q48_data.push(newObj)
            });
          }
          let new_data ={
            q48_data:q48_data
          }
          // console.log(new_data)
          $.ajax({    //create an ajax request to display.php
                  type: "POST",
                  data:{
                    "_token": "{{ csrf_token() }}",
                    'question48':new_data,
                    'question_no':'48',
                  },
                  url: "/superadmin/case/temp-save-question40to60",             
                  success: function(response){ 
                    if (response){

                      alert("Question 48 has been saved temporary")
                    }else{
                      alert("Not Saved")
                    }
                  }
          });
    });
 
})

</script>  