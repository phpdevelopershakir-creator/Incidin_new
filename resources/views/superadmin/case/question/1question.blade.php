   
<?php
if(($questiontitles[0]->status ?? null)==1)
{

  ?>
<style>
  .visibility{
    display:none;
  }
  .othersText{
    display:none;
  }
</style>

<div class="card question1">
  <?php
$training_responses=[ 
  1 => "PSHT 2012",
  2 => "Rule of PSHTA (2017)",
  3 => "OEMA 2013",
  4 => "Children Act",
  5 => "Labour Act",
  6 => "MLA in Criminal Matter 2012",
  7 => "Human Organ Transfer Rule 1999"
];
?>

  <?php
$training_status=[ 
  1 => "Revised",
  2 => "Abolished"
];
?>

  <?php
$training_responses_two=[ 
  1 => "Planned",
  2 => "On Process of Need Assessment",
  3 => "Drafted",
  4 => "Under Review of MoLJPA",
  5 => "Waiting to be enacted",
  6 => "Enforced"
];
?>

        <div class="card-header" role="tab" id="heading-4">
        <h6 class="card-title" style="color: {{ isset($question_1_data_one) ? 'blue' : 'green' }};">
            <a data-toggle="collapse" href="#Question-1" aria-expanded="false"
              aria-controls="collapse-4">
               1.{{ $questiontitles[0]->title }}

            </a>
          </h6>
        </div>

        <div id="Question-1" class="collapse" role="tabpane1" aria-labelledby="heading-4"
          data-parent="#accordion-2">
            <div class="card-body">
          <div class="icheck-primary">
          <?php if(isset($question_1_data_one->q1_checked_value)) { ?>
            <input 
            type="radio" 
            id="radioOne1" 
            class="onestatus" 
            name="is_supreme_court_q1" 
            <?=(isset($question_1_data_one->q1_checked_value) && $question_1_data_one->q1_checked_value=="1")?"checked":"" ;?>    
            value="1">
            <?php }else { ?>
            
            <input type="radio" id="radioOne1" class="onestatus" name="is_supreme_court_q1" checked value="1">
            <?php } ?>    
            
            <label for="radioOne1">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input  
            type="radio" 
            id="radioOne2" 
            class="onestatus" 
            name="is_supreme_court_q1"  
            <?=(isset($question_1_data_one->q1_checked_value) && $question_1_data_one->q1_checked_value=="0")?"checked":"" ;?>    

            value="0">
            <label for="radioOne2">
              No
            </label>
          </div>
          <div class="icheck-primary icheck-primary input-group">
            <input 
            type="radio" 
            id="radioOne3" 
            class="onestatus" 
            name="is_supreme_court_q1"  
            <?=(isset($question_1_data_one->q1_checked_value) && $question_1_data_one->q1_checked_value=="2")?"checked":"" ;?>    
            value="2">
            <label for="radioOne3">
              Others 
            </label> </label> <span class=" col-md-6 mt--4 <?=(isset($question_1_data_one->q1_checked_value) && $question_1_data_one->q1_checked_value=="2")? "" :"othersText" ;?>" >
            <input 
            type="text" 
            id="q7others"   
            placeholder="Others "  
            class="form-control " 
            value="<?=(isset($question_1_data_one->others) && $question_1_data->others) ? $question_1_data_one->others:'' ?>" 
            name="others_supreme_court_q1"></span>
          </div>
          <div id="1_question_view" class="<?=(isset($question_1_data_one->q1_checked_value)) && ($question_1_data_one->q1_checked_value=="2" || $question_1_data_one->q1_checked_value=="0" )?"visibility":"" ;?>">
           

      <div id ="1_question_view" class="<?=(isset($question_1_data_one->q1_checked_value)   && ($question_1_data_one->q1_checked_value=='0')) ? 'visibility' : '' ;?>">

       <!-- table  Start -->
       <table id="addRowQ10" class="table table-bordered text-center">
        
        <thead>
          <tr>
            <th scope="col">Title of The New Low</th>
            <th scope="col">Contents of Change/Status</th>
            <th scope="col">Attach/Upload Pdf</th>
            <th>Action</th>


          </tr>
        </thead>
        <tbody>
        <?php if(isset($question_1_data_one->q10_data) && count($question_1_data_one->q10_data)>0){ $i=0; ?>
          @foreach($question_1_data_one->q10_data  as $q10)
          <tr class="qe1NoOfRow" id="row<?=$i;?>">
             <select name="supreme_court_title[]" id="q1TrainingResponse" class="form-control q10Input">
                <option value="" disabled selected>---Choose an item--</option>
                @foreach ($training_responses as $key => $training)
                <option <?=(isset($q10)  &&  !empty($q10) && $q10->supreme_court_title==$key) ? 'selected' : '' ;?> value="{{ $key }}">{{ $training }}</option>
                @endforeach
              </select>
            </td>
            <td>
              <select name="supreme_court_status[]" id="q1TrainingResponse" class="form-control q10Input">
                <option value="" disabled selected>---Choose an item--</option>
                @foreach ($training_status as $key => $training)
                <option <?=(isset($q10)  &&  !empty($q10) && $q10->supreme_court_status==$key) ? 'selected' : '' ;?> value="{{ $key }}">{{ $training }}</option>
                @endforeach
              </select>
            </td>
            <td> <input type="file" name="supreme_court_image[]"  class="form-control"> </td>
            <td>
              <?php if($i==0){ ?>
              <button id="addRowDatasQ1" type="button" class="btn btn-sm btn-primary">+</i></button>
               <?php }else{ ?>
                <button type="button" name="remove" id="<?= $i; ?>" class="btn btn-danger btn_remove cicle">-</button></td>
               <?php 
               }?>
            </td>

          </tr>
          <?php $i++; ?>
          @endforeach
          <tr>
            <td>How</td>
          </tr>
        <?php }else { ?>
          <!-- test -->
             <tr class="qe1NoOfRow">
           <td>
              <select name="supreme_court_title[]" id="q1TrainingResponse" class="form-control q10Input">
                <option value="" disabled selected>---Choose an item--</option>
                @foreach ($training_responses as $key => $training)
                <option  value="{{ $key }}">{{ $training }}</option>
                @endforeach
              </select>
            </td>
            <td>
              <select name="supreme_court_status[]" id="q1TrainingResponse" class="form-control q10Input">
                <option value="" disabled selected>---Choose an item--</option>
                @foreach ($training_status as $key => $training)
                <option  value="{{ $key }}">{{ $training }}</option>
                @endforeach
              </select>
            </td>
            <td> <input type="file" name="supreme_court_image[]"  class="form-control"> </td>
            

          </tr>
          <!-- test end -->
          <tr class="qe1NoOfRow">
           <td>
              <input type="text" name="supreme_court_title[]"  class="form-control" placeholder="Others Specific">
            </td>
            <td>
              <select name="supreme_court_status[]" id="q1TrainingResponse" class="form-control q10Input">
                <option value="" disabled selected>---Choose an item--</option>
                @foreach ($training_status as $key => $training)
                <option  value="{{ $key }}">{{ $training }}</option>
                @endforeach
              </select>
            </td>
            <td> <input type="file" name="supreme_court_image[]"  class="form-control"> </td>
            <td><button id="addRowDatasQ1" type="button" class="btn btn-sm btn-primary">+</i></button></td>

          </tr>
         <?php } ?> 
        </tbody>
      </table>
      <hr/>
        <!-- table  end -->

        <!-- table 2 Start -->
      <table id="addRow2Q10" class="table table-bordered text-center">
        <h5>New Low</h5>
        <thead>
          <tr>
            <th scope="col">Title of The New Low</th>
            <th scope="col">Status</th>
            <th scope="col">Attach/Upload Pdf</th>
            <th>Action</th>


          </tr>
        </thead>
        <tbody>
          
        <?php if(isset($question_1_data->q10_data) && count($question_1_data->q10_data)>0){ $i=0; ?>
          @foreach($question_1_data->q10_data  as $q10)
          <tr class="qe1NoOfRow2" id="row<?=$i;?>">
            <td> <input type="text" name="supreme_court_title_two[]" value="<?=(isset($q10)  &&  !empty($q10) && $q10->total_coverage) ? $q10->total_coverage : '' ;?>" id="q10traficTotal" class="form-control q10Input"> </td>
            <td>
              <select name="supreme_court_status_two[]" id="q1TrainingResponse" class="form-control q10Input">
                <option value="" disabled selected>---Choose an item--</option>
                @foreach ($training_responses_two as $key => $training)
                <option <?=(isset($q10)  &&  !empty($q10) && $q10->supreme_court_status_two==$key) ? 'selected' : '' ;?> value="{{ $key }}">{{ $training }}</option>
                @endforeach
              </select>
            </td>
            <td> <input type="file" name="supreme_court_image_two[]"  class="form-control"> </td>
            <td>
              <?php if($i==0){ ?>
              <button id="addRowDatas2Q10" type="button" class="btn btn-sm btn-primary">+</i></button>
               <?php }else{ ?>
                <button type="button" name="remove" id="<?= $i; ?>" class="btn btn-danger btn_remove cicle">-</button></td>
               <?php 
               }?>
            </td>

          </tr>
          <?php $i++; ?>
          @endforeach

        <?php }else { ?>
          
          <tr class="qe1NoOfRow2">
           <td> <input type="text" name="supreme_court_title_two[]" value="<?=(isset($q10)  &&  !empty($q10) && $q10->total_coverage) ? $q10->total_coverage : '' ;?>" id="q10traficTotal" class="form-control q10Input"> </td>
            <td>
              <select name="supreme_court_status_two[]" id="q1TrainingResponse" class="form-control q10Input">
                <option value="" disabled selected>---Choose an item--</option>
                @foreach ($training_responses_two as $key => $training)
                <option  value="{{ $key }}">{{ $training }}</option>
                @endforeach
              </select>
            </td>
            <td> <input type="file" name="supreme_court_image_two[]"  class="form-control"> </td>
            <td><button id="addRowDatasQ21" type="button" class="btn btn-sm btn-primary">+</i></button></td>

          </tr>
         <?php } ?> 
        </tbody>
      </table>

      <!-- table 2 end -->
    </div>
             


        </div>
         <br/>
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question1">Save</button>       
          </p>
          </div>
        </div>
          </div>

           <?php } ?> 
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>

<script type="text/javascript">
$(document).ready(function(){
        $(".onestatus").on("click",function(){
            var statusvalue = $("input[name='is_supreme_court_q1']:checked").val();
            $('.question1').find('.othersText').hide()
            $('.question1').find('#q7others').val("")
            if(statusvalue == '1'){
              $('.question1').find('#1_question_view').show()
              $('.question1').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question1').find('#1_question_view').hide()
              $('.question1').find('span').removeClass('othersText')
              $('.question1').find('span').show()

            }
            else{
              $('.question1').find('#1_question_view').hide()
              $('.question1').find('span').addClass('othersText')


            }
        });
    });

</script>
<script type="text/javascript">
  $(function(){
   $("#addRowDatasQ1").click(function(){
      let rowCount =$('.qe1NoOfRow').length+1
      $("#addRowQ10").append(
        '<tr class="qe1NoOfRow" id="row'+rowCount+'">'+
        `<td>
             <input type="text" name="supreme_court_title[]"  class="form-control" placeholder="Others Specific">
        </td>`+
          '<td>'+
              '<select name="supreme_court_status[]" id="q1TrainingResponse" class="form-control q10Input">'+
                '<option value="" disabled selected>---Choose an item--</option>'+
                '<option value="1">Revised</option>'+
                '<option value="2">Abolished</option>'+
              '</select>'+
           '</td>'+
            '<td> <input type="file" name="supreme_court_image[]" class="form-control q10Input total_coverage_q10" id="q10traficTotal" for="'+rowCount+'"> </td>'+

            '<td><button type="button" name="remove" id="'+rowCount+'" class="btn btn-danger btn_remove cicle">-</button></td>'+

          '</tr>'
      )
    });
    $(document).on('click', '.btn_remove', function() {
        var button_id = $(this).attr('id');
        $('#row'+button_id+'').remove();
    });

    })
</script>

<script>

  $(function(){
    // var rowCount = 1;
    $("#addRowDatasQ21").click(function(){
      let rowCount =$('.qe1NoOfRow').length+1
      $("#addRow2Q10").append(
        '<tr class="qe1NoOfRow" id="row'+rowCount+'">'+
        `<td>
             <input type="text" name="supreme_court_title_two[]" value="<?=(isset($q10)  &&  !empty($q10) && $q10->total_coverage) ? $q10->total_coverage : '' ;?>" id="q10traficTotal" class="form-control q10Input">
        </td>`+
          '<td>'+
              '<select name="supreme_court_status_two[]" id="q1TrainingResponse" class="form-control q10Input">'+
                '<option value="" disabled selected>---Choose an item--</option>'+
                '<option value="1">Planned</option>'+
                '<option value="2">On Process of Need Assessment</option>'+
                '<option value="3">Drafted</option>'+
                '<option value="4">Under Review of MoLJPA</option>'+
                '<option value="5">Waiting to be enacted</option>'+
                '<option value="6">Enforced</option>'+
              '</select>'+
           '</td>'+
            '<td> <input type="file" name="supreme_court_image_two[]" class="form-control q10Input total_coverage_q10" id="q10traficTotal" for="'+rowCount+'"> </td>'+

            '<td><button type="button" name="remove" id="'+rowCount+'" class="btn btn-danger btn_remove cicle">-</button></td>'+

          '</tr>'
      )
    });
    $(document).on('click', '.btn_remove', function() {
        var button_id = $(this).attr('id');
        $('#row'+button_id+'').remove();
    });
  
    $(document).on("click",'#temp-save-question1',function() {
          var traficking_countries = [],
          trafficking_target_group=[],
          trafficking_total_coverage=[]       
          $('select[name="trafficking_country[]"]').each(function() {
              let country ={
                country:$(this).val()
              }             
              traficking_countries.push(country);
           });
           $('select[name="trafficking_target_group[]"]').each(function() {
              let target_group ={
                target_group:$(this).val()
              }             
              trafficking_target_group.push(target_group);
           });
           $('input[name="trafficking_total_coverage[]"]').each(function() {
              let coverage ={
                total_coverage:$(this).val()
              }             
              trafficking_total_coverage.push(coverage);
           });
        //  console.log(traficking_countries)
          
           var q10_data=[];
          let yes_no_value=$("input[type='radio'][name='is_supreme_court_q1']:checked").val()
          
        if(yes_no_value=="1"){
          if(traficking_countries.length>0){
            jQuery.each(traficking_countries, function(index, item) {
              let newObj = { ...item, 
                total_coverage:trafficking_total_coverage[index].total_coverage,
                trafficking_target_group:trafficking_target_group[index].target_group
              };
              // item[index]["jurisdict"]=jurisdictions[index].jurisdict
              q10_data.push(newObj)
            });
          }
        }
        let new_data={
          q10_data:q10_data,
          q10_checked_value:yes_no_value,

        }
      // console.log(new_data)
          $.ajax({    //create an ajax request to display.php
                  type: "POST",
                  data:{
                    "_token": "{{ csrf_token() }}",
                    'question1':new_data,
                    'question_no':'10',
                  },
                  url: "/superadmin/case/temp-save-question",             
                  success: function(response){ 
                    if (response){
                   $('.question1.card-title').css('color', 'blue');
                      alert("Question 10 has been saved temporary")
                    }else{
                      alert("Not Saved")
                    }
                  }
          });
    });

   
  })
 
</script>



 