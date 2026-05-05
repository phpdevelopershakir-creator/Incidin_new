<?php
if($questiontitles[53]->status==0)
{

  ?>
@if(Auth::user()->can('54.question'))
 <div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
          <span class="numbering">54</span>.
           @if (isset($questiontitles [53]))
         {{ $questiontitles[53]->title }}
         @endif
      </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body row">



      <table id="addRow" class="table table-bordered text-center">
        <thead>
          <tr>
            <th rowspan="2" style="text-align: center; margin: bottom 45%;">Category of Trainee</th>
            <th rowspan="2">Number of Training</th>
            <th rowspan="2">Training Contents</th>
            <th colspan="6">Coverage</th>
            <tr>
            <th>Men</th>
            <th>Women</th>
            <th>3rd Gender</th>
            <th>Total</th>
            <th></th>
          </tr>
          </tr>
        </thead>
        <tbody>
        <?php if(isset($question_54_data->q54_data) && count($question_54_data->q54_data)>0){ $i=1; ?>
              @foreach($question_54_data->q54_data  as $q54)
            <tr id="q54row<?=$i?>">
          
            <td> <input type="text" value="<?=isset($q54->cate_train) && $q54->cate_train?$q54->cate_train:"";?>" name="category_trainee_54[]" class="form-control q54Input category_trainee"> </td>
            <td><input type="text" value="<?=isset($q54->num_train) && $q54->num_train?$q54->num_train:"";?>" name="number_of_training_54[]" class="form-control q54Input"></td>
            <td><input type="text" value="<?=isset($q54->trian_contents) && $q54->trian_contents?$q54->trian_contents:"";?>" name="training_contents_54[]" id="" class="form-control q54Input"></td>
            <!-- <td><input type="text" name="men_q54[]" id="" class="form-control question54RowMen question54Col1"></td>
            <td><input type="text" name="women_q54[]" id="" class="form-control question54RowWomen question54Col1"></td>
            <td><input type="text" name="third_gender_q54[]" id="" class="form-control question54Row3rdGender question54Col1"></td>
            <td><input class="form-control total_q54" type="text" id="total_q54'" name="total_q54[]" readonly='true'/> </td> -->
            <!-- <td><input type="text" name="total_q54[]" id="question54Col1" class="form-control q54gTotal" readonly='true'></td> -->
            <td><input  class="form-control man_q54 q54Input" type='number' value="<?=isset($q54->men) && $q54->men?$q54->men:"";?>" data-type="man_q54" id='man_q54_<?= $i;?>' name="men_q54[]" for="<?= $i;?>"/></td> 
              <td><input class="form-control woman_q54 q54Input" type='number' value="<?=isset($q54->women) && $q54->women?$q54->women:"";?>" id='woman_q54_<?= $i;?>' name="women_q54[]" for="<?= $i;?>"/></td>
              <td><input class="form-control third_gender_q54 q54Input" type='number' value="<?=isset($q54->third_gender) && $q54->third_gender?$q54->third_gender:"";?>" data-type="third_gender_q54" id='third_gender_q54_<?= $i;?>' name="third_gender_q54[]" for="<?= $i;?>"/></td> 
              <td><input class="form-control total_q54 q54Input" type='text' value="<?=isset($q54->total) && $q54->total?$q54->total:"";?>" id='total_q54_<?= $i;?>' name='total_q54[]' for='<?= $i;?>' readonly/></td>
            <td>
            <?php if($i==1) {  ?>
              <button id="addRowDatas" type="button" class="btn btn-sm btn-primary">+</i></button>
              <?php }else { ?>
              <button type="button" name="remove" id="<?= $i;?>" class="btn btn-danger q54btn_remove cicle">-</button></td>
              <?php } ?>
            </td>
            
          </tr>
          <?php $i++; ?>
          @endforeach
        <?php }else { ?>

          <tr>
          
            <td> <input type="text" name="category_trainee_54[]" class="form-control q54Input category_trainee"> </td>
            <td><input type="text" name="number_of_training_54[]" class="form-control q54Input"></td>
            <td><input type="text" name="training_contents_54[]" id="" class="form-control q54Input"></td>
            <!-- <td><input type="text" name="men_q54[]" id="" class="form-control question54RowMen question54Col1"></td>
            <td><input type="text" name="women_q54[]" id="" class="form-control question54RowWomen question54Col1"></td>
            <td><input type="text" name="third_gender_q54[]" id="" class="form-control question54Row3rdGender question54Col1"></td>
            <td><input class="form-control total_q54" type="text" id="total_q54'" name="total_q54[]" readonly='true'/> </td> -->
            <!-- <td><input type="text" name="total_q54[]" id="question54Col1" class="form-control q54gTotal" readonly='true'></td> -->
            <td><input  class="form-control man_q54 q54Input" type='number' data-type="man_q54" id='man_q54_1' name="men_q54[]" for="1"/></td> 
              <td><input class="form-control woman_q54 q54Input" type='number' id='woman_q54_1' name="women_q54[]" for="1"/></td>
              <td><input class="form-control third_gender_q54 q54Input" type='number' data-type="third_gender_q54" id='third_gender_q54_1' name="third_gender_q54[]" for="1"/></td> 
              <td><input class="form-control total_q54 q54Input" type='text' id='total_q54_1' name='total_q54[]' for='1' readonly/></td>
            <td><button id="addRowDatas" type="button" class="btn btn-sm btn-primary">+</i></button></td>
          </tr>
          <?php } ?>

        </tbody>
      </table>
      <br/>
       <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question54">Save</button>       
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
    
      $('#addRowDatas').click(function() {
        let rowCount = $('.category_trainee').length+1;
        $('#addRow').append(
          '<tr id="q54row'+rowCount+'">'+
          '<td> <input type="text" name="category_trainee_54[]" class="form-control q54Input category_trainee"> </td>'+
          '<td><input type="text" name="number_of_training_54[]" class="form-control q54Input"></td>'+
          '<td><input type="text" name="training_contents_54[]" id="" class="form-control q54Input"></td>'+
          // '<input class="form-control" type="hidden" data-type="product_id" id="product_id_'+rowCount+'" name="product_id[]" for="'+rowCount+'"/>'+
          '<td><input class="form-control man_q54" type="number" data-type="man_q54" id="man_q54_'+rowCount+'" name="men_q54[]" for="'+rowCount+'"/></td>'+
            '<td><input class="form-control woman_q54" type="number" class="woman_q54" id="woman_q54_'+rowCount+'" name="women_q54[]" for="'+rowCount+'"/> </td>'+
            '<td><input class="form-control third_gender_q54" type="number" class="third_gender_q54" id="third_gender_q54_'+rowCount+'" name="third_gender_q54[]" for="'+rowCount+'"/> </td>'+
            '<td><input class="form-control total_q54" type="text" id="total_q54_'+rowCount+'" name="total_q54[]"  for="'+rowCount+'" readonly/> </td>'+
            '<td><button type="button" name="remove" id="'+rowCount+'" class="btn btn-danger q54btn_remove cicle">-</button></td>'+
            '</tr>');
    });

      // Add a generic event listener for any change on quantity or price classed inputs
      $("#addRow").on('input', 'input.man_q54,input.woman_q54,input.third_gender_q54', function() {
        getTotalCost($(this).attr("for"));
      });

      $(document).on('click', '.q54btn_remove', function() {
        var button_id = $(this).attr('id');
        $('#q54row'+button_id+'').remove();
      });

      // Using a new index rather than your global variable i
      function getTotalCost(ind) {
        var man = $('#man_q54_'+ind).val()||0;
        var woman = $('#woman_q54_'+ind).val()||0;
        var third_gender = $('#third_gender_q54_'+ind).val()||0;


        var totNumber = parseInt(man) + parseInt(woman)+parseInt(third_gender);
        var tot = totNumber;
        $('#total_q54_'+ind).val(tot)||0;
        calculateSubTotal();
      }

      function calculateSubTotal() {
        var subtotal = 0;
        $('.total_q54').each(function() {
          subtotal += parseFloat($(this).val());
        });
        
      }
});
$(document).on("click",'#temp-save-question54',function() {
  var q54_cate_train = [],
      q54_num_train=[],
      q54_trian_contents=[],
      q54_men=[],
      q54_women=[],
      q54_third_gender=[],
      q54_total=[]
      ;
          $('input[name="category_trainee_54[]"]').each(function() {
              let cate_train ={
                cate_train:$(this).val()
              }
              q54_cate_train.push(cate_train);
            
           
          });
          $('input[name="number_of_training_54[]"]').each(function() {
              let num_train ={
                num_train:$(this).val()
              }
              q54_num_train.push(num_train);
            
           
          });
          $('input[name="training_contents_54[]"]').each(function() {
              let trian_contents ={
                trian_contents:$(this).val()
              }
              q54_trian_contents.push(trian_contents);
            
           
          });
          $('input[name="men_q54[]"]').each(function() {
            
              let men ={
                men:$(this).val()
              }
              q54_men.push(men);
          
           
          });
          $('input[name="women_q54[]"]').each(function() {
              let women ={
                women:$(this).val()
              }
              q54_women.push(women);
            
           
          });
          $('input[name="third_gender_q54[]"]').each(function() {
              let third_gender ={
                third_gender:$(this).val()
              }
              q54_third_gender.push(third_gender);
            
           
          });
          $('input[name="total_q54[]"]').each(function() {
              let total ={
                total:$(this).val()
              }
              q54_total.push(total);
            
           
          });
var q54_data=[]
if(q54_cate_train.length>0){
  jQuery.each(q54_cate_train, function(index, item) {
    let newObj = { ...item, 
      cate_train:q54_cate_train[index].cate_train,
      num_train:q54_num_train[index].num_train,
      trian_contents:q54_trian_contents[index].trian_contents,
      men:q54_men[index].men,
      women:q54_women[index].women,
      third_gender:q54_third_gender[index].third_gender,
      total:q54_total[index].total,

    
    };
    // item[index]["jurisdict"]=jurisdictions[index].jurisdict
    q54_data.push(newObj)
  });
}
let new_data = {
  q54_data:q54_data
}
//  console.log(new_data)
$.ajax({    //create an ajax request to display.php
        type: "POST",
        data:{
          "_token": "{{ csrf_token() }}",
          'question54':new_data,
          'question_no':'54',
        },
        url: "/superadmin/case/temp-save-question40to60",             
        success: function(response){ 
          if(response){
            alert("Question 54 has been saved temporary")
          }else{
            alert("Not Saved")
          }
        }
});
}); 
</script>
