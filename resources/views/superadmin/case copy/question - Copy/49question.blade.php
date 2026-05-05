<?php
if($questiontitles[48]->status==0)
{

  ?>
@if(Auth::user()->can('49.question'))
<?php 
 $category_trainees = [
  1 =>'Judges of Separate Special TIP Tribunal', 
  2 =>'Judges of Special TIP Tribunal', 
  3 =>'PP of Separate Special TIP Tribunal', 
  4 =>'PP of Special TIP Tribunal',   
  5 =>'Judges',
  6 =>'PP',   
  7 =>'Lawyers',
  8 =>'Court Officials'
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
 $divisions = [
  1 =>'Barisal', 
  2 =>'Chattogram', 
  3 =>'Dhaka', 
  4 =>'Khulna',   
  5 =>'Mymensingh',   
  6 =>'Rajshahi',
  7=>'Rangpur',
  8=>'Sylhet'
 ];
 ?>
    <!-- question no 48 end -->
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
           <span class="numbering">49</span>.
           @if (isset($questiontitles [48]))
         {{ $questiontitles[48]->title }}
         @endif

             </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div id="q49_question_view" class="card-body row">



          <table id="addRowQ49" class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th rowspan="2" style="text-align: center; margin: bottom 45%;">Category of Trainee </th>
                <th rowspan="2">Training Contents </th>
                <th rowspan="2">Number of Training</th>
                <th rowspan="2">Location</th>
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
              <thead>
            <tbody>
            <?php if(isset($question_49_data->q49_data) && count($question_49_data->q49_data)>0){ $i=1; ?>
              @foreach($question_49_data->q49_data  as $q49)
              <tr id="q49row<?=$i?>">
                <td>
                <select name="q49_category_trainee[]" id="q49_category_trainee" class="form-control q49_category_trainee">
                    @foreach ($category_trainees as $key => $item)
                    <option  <?=(isset($q49)  &&  !empty($q49) && $q49->cate_trainee==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                    @endforeach
                  </select> 
                </td>
                <td> <select name="q49_training_contents[]" id="q49_training_contents" class="form-control q49_training_contents">
                    @foreach ($training_content as $key => $item)
                    <option  <?=(isset($q49)  &&  !empty($q49) && $q49->train_content==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                    @endforeach
                  </select> </td>
                <td><input type="text" value="{{$q49->num_train}}" name="q49_number_of_training[]" id="q49_number_of_training" class="form-control q49_number_of_training"></td>
                <td> <select name="q49_location_id[]" id="q49_location_id" class="form-control q49_location_id">
                       <option value="" disabled selected>--Select Country--</option>
                    @foreach ($divisions as $key => $item)
                    <option  <?=(isset($q49)  &&  !empty($q49) && $q49->q49location==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                    @endforeach
                  </select> </td>
                  <td><input type="text" value="<?=(isset($q49->develop_partner))?$q49->develop_partner:""?>" name="q49_development_partner[]" id="q49_development_partner" class="form-control q49_development_partner"></td>
                  <td><input  class="form-control q49_coverage_men" value="<?=(isset($q49->men))?$q49->men:""?>" type='number' data-type="q49_coverage_men" id='q49_coverage_men_<?=$i;?>' name="q49_coverage_men[]" for="<?=$i;?>"/></td> 
                  <td><input class="form-control q49_coverage_women" value="<?=(isset($q49->women))?$q49->women:""?>" type='number' id='q49_coverage_women_<?=$i;?>' name="q49_coverage_women[]" for="<?=$i;?>"/></td>
                  <td><input class="form-control q49_coverage_third_gender" value="<?=(isset($q49->third_gender))?$q49->third_gender:""?>" type='number' data-type="q49_coverage_third_gender" id='q49_coverage_third_gender_<?=$i;?>' name="q49_coverage_third_gender[]" for="<?=$i;?>"/></td> 
                  <td><input class="form-control q49_coverage_total" type='text' value="<?=(isset($q49->total))?$q49->total:""?>" id='q49_coverage_total_<?=$i;?>' name='q49_coverage_total[]' for='<?=$i;?>' readonly/></td>
                <td>
                <?php if($i==1) {  ?>
                  <button id="addRowDatasQ49" type="button" class="btn btn-sm btn-primary">+</i></button>
                  <?php }else { ?>
                  <button type="button" name="remove" id="<?=$i;?>" class="btn btn-danger q49btn_remove cicle">-</button></td>
                
                  <?php } ?>
                </td>
              
                </tr>
           
                <?php $i++; ?>
                  @endforeach
                <?php }else { ?>

                <tr>
                <td>
                <select name="q49_category_trainee[]" id="q49_category_trainee" class="form-control q49_category_trainee">
                    @foreach ($category_trainees as $key => $item)
                    <option  <?=(isset($q49)  &&  !empty($q49) && $q49->cate_trainee==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                    @endforeach
                  </select> 
                </td>
                <td> <select name="q49_training_contents[]" id="q49_training_contents" class="form-control q49_training_contents">
                    @foreach ($training_content as $key => $item)
                    <option  <?=(isset($q49)  &&  !empty($q49) && $q49->train_content==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                    @endforeach
                  </select> </td>
                <td><input type="text" name="q49_number_of_training[]" id="q49_number_of_training" class="form-control q49_number_of_training"></td>
                <td> <select name="q49_location_id[]" id="q49_location_id" class="form-control q49_location_id">
                       <option value="" disabled selected>--Select Country--</option>
                    @foreach ($divisions as $key => $item)
                    <option  <?=(isset($q49)  &&  !empty($q49) && $q49->q49location==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                    @endforeach
                  </select> </td>
                  <td><input type="text" name="q49_development_partner[]" id="q49_development_partner" class="form-control q49_development_partner"></td>
                  <td><input  class="form-control q49_coverage_men" type='number' data-type="q49_coverage_men" id='q49_coverage_men_1' name="q49_coverage_men[]" for="1"/></td> 
                  <td><input class="form-control q49_coverage_women" type='number' id='q49_coverage_women_1' name="q49_coverage_women[]" for="1"/></td>
                  <td><input class="form-control q49_coverage_third_gender" type='number' data-type="q49_coverage_third_gender" id='q49_coverage_third_gender_1' name="q49_coverage_third_gender[]" for="1"/></td> 
                  <td><input class="form-control q49_coverage_total" type='text' id='q49_coverage_total_1' name='q49_coverage_total[]' for='1' readonly/></td>
                <td><button id="addRowDatasQ49" type="button" class="btn btn-sm btn-primary">+</i></button></td>
              
                </tr>
                <?php } ?>




          </tbody>
          </table>
          <br>
          <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question49">Save</button>       
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
  $("#addRowDatasQ49").click(function(){
    let rowCount = $('.q49_category_trainee').length+1;
    $("#addRowQ49").append(
      
    '<tr id="q49row'+rowCount+'">'+
    
      `<td>
          <select name="q49_category_trainee[]" id="q49_category_trainee" class="form-control q49_category_trainee">
          <option value="1">Judges of Separate Special TIP Tribunal</option>
              <option value="2">Judges of Special TIP Tribunal</option>
              <option value="3">PP of Separate Special TIP Tribunal</option>
              <option value="4">PP of Special TIP Tribunal</option>
              <option value="5">Judges</option>
              <option value="6">PP</option>
              <option value="7">Lawyers </option>
              <option value="8">Court Officials</option>
            </select> 
        </td>
      <td> <select name="q49_training_contents[]" id="q49_training_contents" class="form-control q49_training_contents">
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
        <td><input type="text" name="q49_number_of_training[]" id="q49_number_of_training" class="form-control q49_number_of_training"></td>
        <td> <select name="q49_location_id[]" id="q49_location_id" class="form-control q49_location_id">
                <option value="" disabled selected>--Select Country--</option>
            <option value="1">Barisal</option>
            <option value="2">Chattogram</option>
            <option value="3">Dhaka</option>
            <option value="4">Khulna</option>
            <option value="5">Mymensingh</option>
            <option value="6">Rajshahi</option>
            <option value="7">Rangpur</option>
            <option value="8">Sylhet</option>
          </select> </td>
          <td><input type="text" name="q49_development_partner[]" id="q49_development_partner" class="form-control q49_development_partner"></td>`+
          '<td><input class="form-control q49_coverage_men" type="number" data-type="q49_coverage_men" id="q49_coverage_men_'+rowCount+'" name="q49_coverage_men[]" for="'+rowCount+'"/></td>'+
           '<td><input class="form-control q49_coverage_women" type="number" data-type="q49_coverage_women" id="q49_coverage_women_'+rowCount+'" name="q49_coverage_women[]" for="'+rowCount+'"/></td>'+
           '<td><input class="form-control q49_coverage_third_gender" type="number" data-type="q49_coverage_third_gender" id="q49_coverage_third_gender_'+rowCount+'" name="q49_coverage_third_gender[]" for="'+rowCount+'"/></td>'+
           '<td><input class="form-control q49_coverage_total" type="number" data-type="q49_coverage_total" id="q49_coverage_total_'+rowCount+'" name="q49_coverage_total[]" for="'+rowCount+'" readonly="true"/></td>'+
          '<td><button type="button" name="remove" id="'+rowCount+'" class="btn btn-danger q49btn_remove cicle">-</button></td>'+

         
    '</tr>'
      
    )
  });
  $(document).on('click', '.q49btn_remove', function() {
        var button_id = $(this).attr('id');
        $('#q49row'+button_id+'').remove();
      });
  $("#addRowQ49").on('input', 'input.q49_coverage_men,input.q49_coverage_women,input.q49_coverage_third_gender', function() {
        getTotalCost($(this).attr("for"));
      });
 // Using a new index rather than your global variable i
 function getTotalCost(ind) {
    var man = $('#q49_coverage_men_'+ind).val()||0;
    var woman = $('#q49_coverage_women_'+ind).val()||0;
    var third_gender = $('#q49_coverage_third_gender_'+ind).val()||0;


    var totNumber = parseInt(man) + parseInt(woman)+parseInt(third_gender);
    var tot = totNumber;
    $('#q49_coverage_total_'+ind).val(tot)||0;
    calculateSubTotal();
      }

  function calculateSubTotal() {
    var subtotal = 0;
    $('.q49_coverage_total').each(function() {
      subtotal += parseFloat($(this).val());
    });
    
  }

  //Temporary Save
  $(document).on("click",'#temp-save-question49',function() {
          var category_trainee = [],
              training_content=[],
              q49_location=[],
              number_training=[],
              development_partner=[],
              q49_men=[],
              q49_women=[],
              q49_third_gender=[],
              q49_total=[];
              
          $('select[name="q49_category_trainee[]"]').each(function() {
              let cate_trainee ={
                cate_trainee:$(this).val()
              }             
              category_trainee.push(cate_trainee);
           });
           $('select[name="q49_training_contents[]"]').each(function() {
              let train_content ={
                train_content:$(this).val()
              }             
              training_content.push(train_content);
           });
           $('select[name="q49_location_id[]"]').each(function() {
              let q49location ={
                q49location:$(this).val()
              }             
              q49_location.push(q49location);
           });
           $('input[name="q49_number_of_training[]"]').each(function() {
              let num_train ={
                num_train:$(this).val()
              }             
              number_training.push(num_train);
           });
          $('input[name="q49_development_partner[]"]').each(function() {
            
              let develop_partner ={
                develop_partner:$(this).val()
              }
              development_partner.push(develop_partner);
           
           
          });
          $('input[name="q49_coverage_men[]"]').each(function() {
              let men ={
                men:$(this).val()
              }
              q49_men.push(men);
            
           
          });
          $('input[name="q49_coverage_women[]"]').each(function() {
              let women ={
                women:$(this).val()
              }
              q49_women.push(women);
            
           
          });
          $('input[name="q49_coverage_third_gender[]"]').each(function() {
              let third_gender ={
                third_gender:$(this).val()
              }
              q49_third_gender.push(third_gender);
            
           
          });
          $('input[name="q49_coverage_total[]"]').each(function() {
              let total ={
                total:$(this).val()
              }
              q49_total.push(total);
            
           
          });
          
           var q49_data=[];
          if(category_trainee.length>0){
            jQuery.each(category_trainee, function(index, item) {
              let newObj = { ...item, 
                train_content:training_content[index].train_content,
                q49location:q49_location[index].q49location,
                num_train:number_training[index].num_train,
                develop_partner:development_partner[index].develop_partner,
                men:q49_men[index].men,
                women:q49_women[index].women,
                third_gender:q49_third_gender[index].third_gender,
                total:q49_total[index].total,

              
              };
              // item[index]["jurisdict"]=jurisdictions[index].jurisdict
              q49_data.push(newObj)
            });
          }
          let new_data ={
            q49_data:q49_data
          }
          // console.log(new_data)
          $.ajax({    //create an ajax request to display.php
                  type: "POST",
                  data:{
                    "_token": "{{ csrf_token() }}",
                    'question49':new_data,
                    'question_no':'49',
                  },
                  url: "/superadmin/case/temp-save-question40to60",             
                  success: function(response){ 
                    if(response){
                      alert("Question 49 has been saved temporary")

                    }else{
                      alert("Not Saved")
                    }
                  }
          });
    });
 
})

</script>  