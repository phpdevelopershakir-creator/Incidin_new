<?php
if($questiontitles[43]->status==0)
{

  ?>
@if(Auth::user()->can('44.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
             <span class="numbering">44</span>.
           @if (isset($questiontitles [43]))
         {{ $questiontitles[43]->title }}
         @endif
            44.Did any allegedly complicit officials face criminal investigations,
            prosecutions, convictions, or sentencing?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div id="fourty_four_question_view" class="card-body row">
          <table id="addRowQ44" class="table table-bordered text-center">
            <thead>
              <tr>
                <th rowspan="2" scope="col">Ministry/Department</th>
                <th colspan="4">Number of Official Accused</th>
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

        <?php 
        $totalMen=0;
        $totalWomen=0;
        $totalThirdG=0;
        $totalSubTotal=0;
        
        if(isset($question_44_data->q44_data) && count($question_44_data->q44_data)>0){ $i=1; ?>
          @foreach($question_44_data->q44_data  as $q44)
           <?php 
           $totalMen +=$q44->men;
           $totalWomen +=$q44->women;
           $totalThirdG +=$q44->third_gender;
           $totalSubTotal +=$q44->total;
           ?>
          <tr id="q44row<?=$i?>">
              
            
              <td><input type="text" value="<?=(isset($q44->ministry))?$q44->ministry:""?>" name="ministry_department[]" class="form-control ministry_department"></td>

              <td><input class="form-control number_official_accused_men" type='number' data-type="number_official_accused_men" id='number_official_accused_men_<?= $i ?>' value="<?=(isset($q44->men))?$q44->men:""?>" name="number_official_accused_men[]" for="<?= $i ?>"/></td> 
              <td><input class="form-control number_official_accused_women" type='number' id='number_official_accused_women_<?=$i?>' value="<?=(isset($q44->women))?$q44->women:""?>" name="number_official_accused_women[]" for="<?= $i ?>"/></td>
              <td><input class="form-control number_official_accused_third_gender" type='number' data-type="number_official_accused_third_gender" id='number_official_accused_third_gender_<?=$i?>' value="<?=(isset($q44->third_gender))?$q44->third_gender:""?>" name="number_official_accused_third_gender[]" for="<?= $i ?>"/></td> 
              <td><input class="form-control number_official_accused_total" type='text' id='number_official_accused_total_<?=$i?>' value="<?=(isset($q44->total))?$q44->total:""?>" name='number_official_accused_total[]' for="<?= $i ?>" readonly/></td>
              <td>
              <?php if($i==1) {  ?>
                <button id="addRowDatasQ44" type="button" class="btn btn-sm btn-primary">+</i></button>
              
                <?php }else { ?>
              <button type="button" name="remove" id="<?=$i;?>" class="btn btn-danger q44btn_remove cicle">-</button></td>
              <?php } ?>
              </td>

            
            <?php $i++; ?>
            @endforeach
            
          </tr>
            <?php }else { ?>
              <tr>
              <td><input type="text" name="ministry_department[]" class="form-control ministry_department"></td>

              <td><input  class="form-control number_official_accused_men" type='number' data-type="number_official_accused_men" id='number_official_accused_men_1' name="number_official_accused_men[]" for="1"/></td> 
              <td><input class="form-control number_official_accused_women" type='number' id='number_official_accused_women_1' name="number_official_accused_women[]" for="1"/></td>
              <td><input class="form-control number_official_accused_third_gender" type='number' data-type="number_official_accused_third_gender" id='number_official_accused_third_gender_1' name="number_official_accused_third_gender[]" for="1"/></td> 
              <td><input class="form-control number_official_accused_total" type='text' id='number_official_accused_total_1' name='number_official_accused_total[]' for='1' readonly/></td>
              <td><button id="addRowDatasQ44" type="button" class="btn btn-sm btn-primary">+</i></button></td>

            </tr>
             
      
            <?php } ?>
            <tr>
                
                <td>Total</td>
                <td><input type="text" value="<?=(isset($totalMen) && $totalMen > 0) ? $totalMen : '' ;?>"  name="q44_grand_total_men" data-type="q44_grand_total_men" id="q44_grand_total_men_1" class="form-control q44_grand_total_men" for="1" readonly></td>
                <td><input type="text"  value="<?=(isset($totalWomen) && $totalWomen > 0) ? $totalWomen : '' ;?>" name="q44_grand_total_women" data-type="q44_grand_total_women"  id="q44_grand_total_women_1" class="form-control q44_grand_total_women" for="1" readonly></td>
                <td><input type="text"  value="<?=(isset($totalThirdG) && $totalThirdG > 0) ? $totalThirdG : '' ;?>"  name="q44_grand_total_third_gender" data-type="q44_grand_total_third_gender" id="q44_grand_total_third_gender_1" class="form-control q44_grand_total_third_gender" for="1" readonly></td>
                <td><input type="text" value="<?=(isset($totalSubTotal) && $totalSubTotal > 0) ? $totalSubTotal : '' ;?>"  name="q44_grand_total_total" data-type="q44_grand_total_total" id="q44_grand_total_total_1" class="form-control q44_grand_total_total" for="1" readonly></td>

              </tr>
            </tbody>
          </table>
          <br>
          <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question44">Save</button>       
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
  $("#addRowDatasQ44").click(function(){
    var rowCount=$('.ministry_department').length+1;
    $("#addRowQ44").find('tr:last').prev().after(
      
    '<tr id="q44row'+rowCount+'">'+
    `<td><input type="text" name="ministry_department[]" class="form-control ministry_department"></td>`+

    '<td><input class="form-control number_official_accused_men" type="number" data-type="number_official_accused_men" id="number_official_accused_men_'+rowCount+'" name="number_official_accused_men[]" for="'+rowCount+'"/></td>'+
    '<td><input class="form-control number_official_accused_women" type="number" data-type="number_official_accused_women" id="number_official_accused_women_'+rowCount+'" name="number_official_accused_women[]" for="'+rowCount+'"/></td>'+
    '<td><input class="form-control number_official_accused_third_gender" type="number" data-type="number_official_accused_third_gender" id="number_official_accused_third_gender_'+rowCount+'" name="number_official_accused_third_gender[]" for="'+rowCount+'"/></td>'+
    '<td><input class="form-control number_official_accused_total" type="number" data-type="number_official_accused_total" id="number_official_accused_total_'+rowCount+'" name="number_official_accused_total[]" for="'+rowCount+'" readonly="true"/></td>'+
          
    '<td><button type="button" name="remove" id="'+rowCount+'" class="btn btn-danger q44btn_remove cicle">-</button></td>'+
 
         
    '</tr>'
      
    )
  });
  $(document).on('click', '.q44btn_remove', function() {
    var button_id = $(this).attr('id');
        $('#q44row'+button_id+'').remove();
        calculateGrandSubTotalMen();
        getGrandTotalWomenCost()
        getGrandTotalThirdGenderCost()
        calculateGrandSubTotal()
      });

  $("#addRowQ44").on('input', 'input.number_official_accused_men,input.number_official_accused_women,input.number_official_accused_third_gender', function() {
  
    getTotalCost($(this).attr("for"));
      });
    // Using a new index rather than your global variable i
    function getTotalCost(ind) {
        var man = $('#number_official_accused_men_'+ind).val()||0;
        var woman = $('#number_official_accused_women_'+ind).val()||0;
        var third_gender = $('#number_official_accused_third_gender_'+ind).val()||0;
        

        var totNumber = parseInt(man) + parseInt(woman)+parseInt(third_gender);
        var tot = totNumber;
        $('#number_official_accused_total_'+ind).val(tot)||0;
        calculateSubTotal();
          }

      function calculateSubTotal() {
        var subtotal = 0;
        $('.number_official_accused_total').each(function() {
          subtotal += parseFloat($(this).val());
        });
        
      }
    // ******grand total man
    $("#addRowQ44").on('input', 'input.number_official_accused_men', function() {
      // alert(getGrandTotalMenCost($(this).attr("input")))
      getGrandTotalMenCost($(this).attr("for"));
          });
    function getGrandTotalMenCost(ind) {
      var man = $('#number_official_accused_men_'+ind).val()||0;
      
      var totNumberMan = parseInt(man) ;
      $('#q44_grand_total_men_'+ind).val(totNumberMan)||0;
      
      calculateGrandSubTotalMen();
          }

      function calculateGrandSubTotalMen() {
        var subtotal = 0;
        $('.number_official_accused_men').each(function() {
          subtotal += parseFloat($(this).val())||0;
        });
        $(".q44_grand_total_men").val(subtotal)||0;
        // alert(subtotal)
      };
      // ******grand total women
    $("#addRowQ44").on('input', 'input.number_official_accused_women', function() {
      getGrandTotalWomenCost($(this).attr("for"));
          });
    function getGrandTotalWomenCost(ind) {
        var woman = $('#number_official_accused_women_'+ind).val()||0;
        var totNumberWoman =  parseInt(woman);
        $('#q44_grand_total_women_'+ind).val(totNumberWoman)||0;


        calculateGrandSubTotalWomen();
          }

      function calculateGrandSubTotalWomen() {
        var subtotal = 0;
        $('.number_official_accused_women').each(function() {
          subtotal += parseFloat($(this).val())||0;
        });
        $(".q44_grand_total_women").val(subtotal)||0;
      }
      // ******grand total third gender
    $("#addRowQ44").on('input', 'input.number_official_accused_third_gender', function() {
      getGrandTotalThirdGenderCost($(this).attr("for"));
          });
    function getGrandTotalThirdGenderCost(ind) {
        var third_gender = $('#number_official_accused_third_gender_'+ind).val()||0;
        var totNumberThridGender =parseInt(third_gender);

        $('#q44_grand_total_third_gender_'+ind).val(totNumberThridGender)||0;

        calculateGrandSubTotalThirdGender();
          }

      function calculateGrandSubTotalThirdGender() {
        var subtotal = 0;
        $('.number_official_accused_third_gender').each(function() {
          subtotal += parseFloat($(this).val())||0;
        });
        $(".q44_grand_total_third_gender").val(subtotal)||0;

      }
      // ******grand total total
    $("#addRowQ44").on('input', 'input.number_official_accused_men,input.number_official_accused_women,input.number_official_accused_third_gender', function() {
      getGrandTotalCost($(this).attr("for"));
          });
    function getGrandTotalCost(ind) {
        var man = $('#number_official_accused_men_'+ind).val()||0;
        var woman = $('#number_official_accused_women_'+ind).val()||0;
        var third_gender = $('#number_official_accused_third_gender_'+ind).val()||0;
        

        var totNumberTotal = parseInt(man) + parseInt(woman)+parseInt(third_gender);

        $('#q44_grand_total_total_'+ind).val(totNumberTotal)||0;

        calculateGrandSubTotal();
          }

      function calculateGrandSubTotal() {
        
        var subtotal = 0;
        $('.number_official_accused_total').each(function() {
          subtotal += parseFloat($(this).val())||0;
        });
        $(".q44_grand_total_total").val(subtotal)||0;

      }

  //Temporary Save 
  $(document).on("click",'#temp-save-question44',function() {
          var q44_ministry = [],
              q44_men=[],
              q44_women=[],
              q44_third_gender=[],
              q44_total=[],
              q44_man_total=[],
              q44_women_total=[],
              q44_third_gender_total=[],
              q44_grand_total=[],
              q44_data=[];
          $('input[name="ministry_department[]"]').each(function() {
            if($(this).val()){
              let ministry ={
                ministry:$(this).val()
              }
              q44_ministry.push(ministry);
            }
           
          });
          var mens = 0;
          $('input[name="number_official_accused_men[]"]').each(function() {

              let men ={
                men:$(this).val()
              }
             
              mens +=parseFloat($(this).val())
              q44_men.push(men);
              
          });
          // console.log(q44_men,mens);
          var womens =0;
          $('input[name="number_official_accused_women[]"]').each(function() {
              let women ={
                women:$(this).val()
              }             
              womens +=parseFloat($(this).val())
              q44_women.push(women);
              

           });
           var third_genders =0;
           $('input[name="number_official_accused_third_gender[]"]').each(function() {
              let third_gender ={
                third_gender:$(this).val()
              }             
              third_genders +=parseFloat($(this).val())
              q44_third_gender.push(third_gender);

           });
           var totals = 0;
           $('input[name="number_official_accused_total[]"]').each(function() {
              let total ={
                total:$(this).val()
              }             
              totals +=parseFloat($(this).val())
              q44_total.push(total);


           });
          
          
           
          if(q44_ministry.length>0){
            jQuery.each(q44_ministry, function(index, item) {
              let newObj = { 
                    ...item, 
                    men:q44_men[index].men,
                    women:q44_women[index].women,
                    third_gender:q44_third_gender[index].third_gender,
                    total:q44_total[index].total,
                  };
              // item[index]["jurisdict"]=jurisdictions[index].jurisdict
             
              q44_data.push(newObj)
            });
          }
          let new_data={
            q44_data:q44_data
          }
          // console.log(new_data)
   
          $.ajax({    //create an ajax request to display.php
                  type: "POST",
                  data:{
                    "_token": "{{ csrf_token() }}",
                    'question44':new_data,
                    'question_no':'44',
                  },
                  url: "/superadmin/case/temp-save-question40to60",             
                  success: function(response){ 
                    alert("Question 44 has been saved temporary")
                  }
          });
    })
 
})

</script>  