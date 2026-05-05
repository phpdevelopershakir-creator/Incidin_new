   
<?php
if(($questiontitles[3]->status ?? null)==1)
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

<div class="card question4">
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
        <h6 class="card-title" style="color: {{ isset($question_4_data_one) ? 'blue' : 'green' }};">
            <a data-toggle="collapse" href="#Question-4" aria-expanded="false"
              aria-controls="collapse-4">
               4.{{ $questiontitles[3]->title }}

            </a>
          </h6>
        </div>

        <div id="Question-4" class="collapse" role="tabpane4" aria-labelledby="heading-4"
          data-parent="#accordion-2">
            <div class="card-body">
          <div class="icheck-primary">
          <?php if(isset($question_4_data_one->q4_checked_value)) { ?>
            <input 
            type="radio" 
            id="radioSeven1" 
            class="sevenstatus" 
            name="is_supreme_court_q4" 
            <?=(isset($question_4_data_one->q4_checked_value) && $question_4_data_one->q4_checked_value=="1")?"checked":"" ;?>    
            value="1">
            <?php }else { ?>
            
            <input type="radio" id="radioSeven1" class="sevenstatus" name="is_supreme_court_q4" checked value="1">
            <?php } ?>    
            
            <label for="radioSeven1">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input  
            type="radio" 
            id="radioSeven2" 
            class="sevenstatus" 
            name="is_supreme_court_q4"  
            <?=(isset($question_4_data_one->q4_checked_value) && $question_4_data_one->q4_checked_value=="0")?"checked":"" ;?>    

            value="0">
            <label for="radioSeven2">
              No
            </label>
          </div>
          <div class="icheck-primary icheck-primary input-group">
            <input 
            type="radio" 
            id="radioSeven3" 
            class="sevenstatus" 
            name="is_supreme_court_q4"  
            <?=(isset($question_4_data_one->q4_checked_value) && $question_4_data_one->q4_checked_value=="2")?"checked":"" ;?>    
            value="2">
            <label for="radioSeven3">
              Others 
            </label> </label> <span class=" col-md-6 mt--4 <?=(isset($question_4_data_one->q4_checked_value) && $question_4_data_one->q4_checked_value=="2")? "" :"othersText" ;?>" >
            <input 
            type="text" 
            id="q4others"   
            placeholder="Others "  
            class="form-control " 
            value="<?=(isset($question_4_data_one->others) && $question_1_data->others) ? $question_4_data_one->others:'' ?>" 
            name="others_supreme_court_q1"></span>
          </div>
          <div id="four_question_view" class="<?=(isset($question_4_data_one->q4_checked_value)) && ($question_4_data_one->q4_checked_value=="2" || $question_4_data_one->q4_checked_value=="0" )?"visibility":"" ;?>">
           

      <div id ="four_question_view" class="<?=(isset($question_4_data_one->q4_checked_value)   && ($question_4_data_one->q4_checked_value=='0')) ? 'visibility' : '' ;?>">

       <!-- table  Start -->
       <table id="addRowq4" class="table table-bordered text-center">
        
        <thead>
          <tr>
            <th scope="col">Title of The New Low</th>
            <th scope="col">Contents of Change/Status</th>
            <th scope="col">Attach/Upload Pdf</th>
            <th>Action</th>


          </tr>
        </thead>
        <tbody>
        <?php if(isset($question_4_data_one->q4_data) && count($question_4_data_one->q4_data)>0){ $i=0; ?>
          @foreach($question_4_data_one->q4_data  as $q4)
          <tr class="qe4NoOfRow" id="row<?=$i;?>">
             <select name="supreme_court_title[]" id="q4TrainingResponse" class="form-control q4Input">
                <option value="" disabled selected>---Choose an item--</option>
                @foreach ($training_responses as $key => $training)
                <option <?=(isset($q4)  &&  !empty($q4) && $q4->supreme_court_title==$key) ? 'selected' : '' ;?> value="{{ $key }}">{{ $training }}</option>
                @endforeach
              </select>
            </td>
            <td>
              <select name="supreme_court_status[]" id="q4TrainingResponse" class="form-control q4Input">
                <option value="" disabled selected>---Choose an item--</option>
                @foreach ($training_status as $key => $training)
                <option <?=(isset($q4)  &&  !empty($q4) && $q4->supreme_court_status==$key) ? 'selected' : '' ;?> value="{{ $key }}">{{ $training }}</option>
                @endforeach
              </select>
            </td>
            <td> <input type="file" name="supreme_court_image[]"  class="form-control"> </td>
            <td>
              <?php if($i==0){ ?>
              <button id="addRowDatasq4" type="button" class="btn btn-sm btn-primary">+</i></button>
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
             <tr class="qe4NoOfRow">
           <td>
              <select name="supreme_court_title[]" id="q4TrainingResponse" class="form-control q4Input">
                <option value="" disabled selected>---Choose an item--</option>
                @foreach ($training_responses as $key => $training)
                <option  value="{{ $key }}">{{ $training }}</option>
                @endforeach
              </select>
            </td>
            <td>
              <select name="supreme_court_status[]" id="q4TrainingResponse" class="form-control q4Input">
                <option value="" disabled selected>---Choose an item--</option>
                @foreach ($training_status as $key => $training)
                <option  value="{{ $key }}">{{ $training }}</option>
                @endforeach
              </select>
            </td>
            <td> <input type="file" name="supreme_court_image[]"  class="form-control"> </td>
            

          </tr>
          <!-- test end -->
          <tr class="qe4NoOfRow">
           <td>
              <input type="text" name="supreme_court_title[]"  class="form-control" placeholder="Others Specific">
            </td>
            <td>
              <select name="supreme_court_status[]" id="q4TrainingResponse" class="form-control q4Input">
                <option value="" disabled selected>---Choose an item--</option>
                @foreach ($training_status as $key => $training)
                <option  value="{{ $key }}">{{ $training }}</option>
                @endforeach
              </select>
            </td>
            <td> <input type="file" name="supreme_court_image[]"  class="form-control"> </td>
            <td><button id="addRowDatasq4" type="button" class="btn btn-sm btn-primary">+</i></button></td>

          </tr>
         <?php } ?> 
        </tbody>
      </table>
      <hr/>
        <!-- table  end -->

        <!-- table 2 Start -->
      <table id="addRow2q4" class="table table-bordered text-center">
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
          
        <?php if(isset($question_4_data->q4_data) && count($question_4_data->q4_data)>0){ $i=0; ?>
          @foreach($question_4_data->q4_data  as $q4)
          <tr class="qe4NoOfRow2" id="row<?=$i;?>">
            <td> <input type="text" name="supreme_court_title_two[]" value="<?=(isset($q4)  &&  !empty($q4) && $q4->total_coverage) ? $q4->total_coverage : '' ;?>" id="q4traficTotal" class="form-control q4Input"> </td>
            <td>
              <select name="supreme_court_status_two[]" id="q4TrainingResponse" class="form-control q4Input">
                <option value="" disabled selected>---Choose an item--</option>
                @foreach ($training_responses_two as $key => $training)
                <option <?=(isset($q4)  &&  !empty($q4) && $q4->supreme_court_status_two==$key) ? 'selected' : '' ;?> value="{{ $key }}">{{ $training }}</option>
                @endforeach
              </select>
            </td>
            <td> <input type="file" name="supreme_court_image_two[]"  class="form-control"> </td>
            <td>
              <?php if($i==0){ ?>
              <button id="addRowDatas2q4" type="button" class="btn btn-sm btn-primary">+</i></button>
               <?php }else{ ?>
                <button type="button" name="remove" id="<?= $i; ?>" class="btn btn-danger btn_remove cicle">-</button></td>
               <?php 
               }?>
            </td>

          </tr>
          <?php $i++; ?>
          @endforeach

        <?php }else { ?>
          
          <tr class="qe4NoOfRow2">
           <td> <input type="text" name="supreme_court_title_two[]" value="<?=(isset($q4)  &&  !empty($q4) && $q4->total_coverage) ? $q4->total_coverage : '' ;?>" id="q4traficTotal" class="form-control q4Input"> </td>
            <td>
              <select name="supreme_court_status_two[]" id="q4TrainingResponse" class="form-control q4Input">
                <option value="" disabled selected>---Choose an item--</option>
                @foreach ($training_responses_two as $key => $training)
                <option  value="{{ $key }}">{{ $training }}</option>
                @endforeach
              </select>
            </td>
            <td> <input type="file" name="supreme_court_image_two[]"  class="form-control"> </td>
            <td><button id="addRowDatasQ24" type="button" class="btn btn-sm btn-primary">+</i></button></td>

          </tr>
         <?php } ?> 
        </tbody>
      </table>

      <!-- table 2 end -->
    </div>
             


        </div>
         <br/>
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question4">Save</button>       
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
        $(".sevenstatus").on("click",function(){
            var statusvalue = $("input[name='is_supreme_court_q4']:checked").val();
            $('.question4').find('.othersText').hide()
            $('.question4').find('#q4others').val("")
            if(statusvalue == '1'){
              $('.question4').find('#four_question_view').show()
              $('.question4').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question4').find('#four_question_view').hide()
              $('.question4').find('span').removeClass('othersText')
              $('.question4').find('span').show()

            }
            else{
              $('.question4').find('#four_question_view').hide()
              $('.question4').find('span').addClass('othersText')


            }
        });
    });

</script>
<script type="text/javascript">
  $(function(){
   $("#addRowDatasq4").click(function(){
      let rowCount =$('.qe4NoOfRow').length+1
      $("#addRowq4").append(
        '<tr class="qe4NoOfRow" id="row'+rowCount+'">'+
        `<td>
             <input type="text" name="supreme_court_title[]"  class="form-control" placeholder="Others Specific">
        </td>`+
          '<td>'+
              '<select name="supreme_court_status[]" id="q4TrainingResponse" class="form-control q4Input">'+
                '<option value="" disabled selected>---Choose an item--</option>'+
                '<option value="1">Revised</option>'+
                '<option value="2">Abolished</option>'+
              '</select>'+
           '</td>'+
            '<td> <input type="file" name="supreme_court_image[]" class="form-control q4Input total_coverage_q4" id="q4traficTotal" for="'+rowCount+'"> </td>'+

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
    $("#addRowDatasQ24").click(function(){
      let rowCount =$('.qe4NoOfRow').length+1
      $("#addRow2q4").append(
        '<tr class="qe4NoOfRow" id="row'+rowCount+'">'+
        `<td>
             <input type="text" name="supreme_court_title_two[]" value="<?=(isset($q4)  &&  !empty($q4) && $q4->total_coverage) ? $q4->total_coverage : '' ;?>" id="q4traficTotal" class="form-control q4Input">
        </td>`+
          '<td>'+
              '<select name="supreme_court_status_two[]" id="q4TrainingResponse" class="form-control q4Input">'+
                '<option value="" disabled selected>---Choose an item--</option>'+
                '<option value="1">Planned</option>'+
                '<option value="2">On Process of Need Assessment</option>'+
                '<option value="3">Drafted</option>'+
                '<option value="4">Under Review of MoLJPA</option>'+
                '<option value="5">Waiting to be enacted</option>'+
                '<option value="6">Enforced</option>'+
              '</select>'+
           '</td>'+
            '<td> <input type="file" name="supreme_court_image_two[]" class="form-control q4Input total_coverage_q4" id="q4traficTotal" for="'+rowCount+'"> </td>'+

            '<td><button type="button" name="remove" id="'+rowCount+'" class="btn btn-danger btn_remove cicle">-</button></td>'+

          '</tr>'
      )
    });
    $(document).on('click', '.btn_remove', function() {
        var button_id = $(this).attr('id');
        $('#row'+button_id+'').remove();
    });
  
    $(document).on("click",'#temp-save-question4',function() {
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
          
           var q4_data=[];
          let yes_no_value=$("input[type='radio'][name='is_governments_on_trafficking_q4']:checked").val()
          
        if(yes_no_value=="1"){
          if(traficking_countries.length>0){
            jQuery.each(traficking_countries, function(index, item) {
              let newObj = { ...item, 
                total_coverage:trafficking_total_coverage[index].total_coverage,
                trafficking_target_group:trafficking_target_group[index].target_group
              };
              // item[index]["jurisdict"]=jurisdictions[index].jurisdict
              q4_data.push(newObj)
            });
          }
        }
        let new_data={
          q4_data:q4_data,
          q4_checked_value:yes_no_value,a

        }
      // console.log(new_data)
          $.ajax({    //create an ajax request to display.php
                  type: "POST",
                  data:{
                    "_token": "{{ csrf_token() }}",
                    'question4':new_data,
                    'question_no':'4',
                  },
                  url: "/superadmin/case/temp-save-question",             
                  success: function(response){ 
                    if (response){
                   $('.question4.card-title').css('color', 'blue');
                      alert("Question 4 has been saved temporary")
                    }else{
                      alert("Not Saved")
                    }
                  }
          });
    });

   
  })
 
</script>



 