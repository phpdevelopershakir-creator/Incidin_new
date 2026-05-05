<?php
if(($questiontitles[5]->status ?? null)==1)
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

<div class="card question6">
        <div class="card-header" role="tab" id="heading-4">
        <h6 class="card-title" style="color: {{ isset($question_6_data) ? 'blue' : 'green' }};">
            <a data-toggle="collapse" href="#Question-6" aria-expanded="false"
              aria-controls="collapse-4">
              6.{{ $questiontitles[5]->title }}
            </a>
          </h6>
        </div>

        <div id="Question-6" class="collapse" role="tabpane6" aria-labelledby="heading-4"
          data-parent="#accordion-2">
            <div class="card-body">
          <div class="icheck-primary">
          <?php if(isset($question_6_data->q6_checked_value)) { ?>
            <input 
            type="radio" 
            id="radioSix1" 
            class="sixstatus" 
            name="is_unit_court_q6" 
            <?=(isset($question_6_data->q6_checked_value) && $question_6_data->q6_checked_value=="1")?"checked":"" ;?>    
            value="1">
            <?php }else { ?>
            
            <input type="radio" id="radioSix1" class="sixstatus" name="is_unit_court_q6" checked value="1">
            <?php } ?>    
            
            <label for="radioSix1">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input  
            type="radio" 
            id="radioSix2" 
            class="sixstatus" 
            name="is_unit_court_q6"  
            <?=(isset($question_6_data->q6_checked_value) && $question_6_data->q6_checked_value=="0")?"checked":"" ;?>    

            value="0">
            <label for="radioSix2">
              No
            </label>
          </div>
          <div class="icheck-primary icheck-primary input-group">
            <input 
            type="radio" 
            id="radioSix3" 
            class="sixstatus" 
            name="is_unit_court_q6"  
            <?=(isset($question_6_data->q6_checked_value) && $question_6_data->q6_checked_value=="2")?"checked":"" ;?>    
            value="2">
            <label for="radioSix3">
              Others 
            </label> </label> <span class=" col-md-6 mt--4 <?=(isset($question_6_data->q6_checked_value) && $question_6_data->q6_checked_value=="2")? "" :"othersText" ;?>" >
            <input 
            type="text" 
            id="q6others"   
            placeholder="Others "  
            class="form-control " 
            value="<?=(isset($question_6_data->others) && $question_6_data->others) ? $question_6_data->others:'' ?>" 
            name="others_unit_court_q6"></span>
          </div>
          <div id="six_question_view" class="<?=(isset($question_6_data->q6_checked_value)) && ($question_6_data->q6_checked_value=="2" || $question_6_data->q6_checked_value=="0" )?"visibility":"" ;?>">
           

     

       <!-- table  Start -->
       <table id="addRowQ6" class="table table-bordered text-center">
        
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col"></th>
        
            <th>Action</th>


          </tr>
        </thead>
        <tbody>
        
        
          
        
          <!-- test -->
             <tr class="qe6NoOfRow">
             <td data-title="police_station">
                 Police Station
                <input type="hidden" class="form-control" name="court_title[]" value="Police Station">
              </td>
              <td>
                   <input type="text" name="court_description[]" id="q6Title1" class="form-control q6Input" 
    value="<?= (isset($question_6_data->q6_data->police_station)) ? $question_6_data->q6_data->police_station : ""; ?>">
           
         
              </td>
           
            </tr>
            <tr class="qe6NoOfRow">
             <td data-title="cid">
                 CID
                <input type="hidden" class="form-control" name="court_title[]" value="CID">
              </td>
              <td>
                 <input type="text" name="court_description[]" id="q6Title2" class="form-control q6Input" 
    value="<?= (isset($question_6_data->q6_data->cid)) ? $question_6_data->q6_data->cid : ""; ?>">
                
              </td>
            </tr>
            <tr class="qe6NoOfRow">
             <td data-title="rab">
                 RAB
                <input type="hidden" class="form-control" name="court_title[]" value="RAB">
              </td>
              <td>
                 <input type="text" name="court_description[]" id="q6Title3" class="form-control q6Input" 
    value="<?= (isset($question_6_data->q6_data->rab)) ? $question_6_data->q6_data->rab : ""; ?>">
                
              </td>
            </tr>
            <tr class="qe6NoOfRow">
             <td data-title="sb">
                 SB
                <input type="hidden" class="form-control" name="court_title[]" value="SB">
              </td>
              <td>
                 <input type="text" name="court_description[]" id="q6Title4" class="form-control q6Input" 
  value="<?= (isset($question_6_data->q6_data->sb)) ? $question_6_data->q6_data->sb : ""; ?>">
             
              </td>
            </tr>
            <tr class="qe6NoOfRow">
             <td data-title="prosecution_offices">
                 Prosecution offices (SPP)
                <input type="hidden" class="form-control" name="court_title[]" value="Prosecution offices (SPP)">
              </td>
              <td>
                 <input type="text" name="court_description[]" id="q6Title5" class="form-control q6Input" 
      value="<?= (isset($question_6_data->q6_data->prosecution_offices)) ? $question_6_data->q6_data->prosecution_offices : ""; ?>">
                
              </td>
            </tr>
             <tr class="qe6NoOfRow">
             <td data-title="special_tribunal">
                 Special Tribunal
                <input type="hidden" class="form-control" name="court_title[]" value="Special Tribunal">
              </td>
              <td>
                 <input type="text" name="court_description[]" id="q6Title6" class="form-control q6Input" 
    value="<?= (isset($question_6_data->q6_data->q6Title6)) ? $question_6_data->q6_data->q6Title6 : ""; ?>">
                
              </td>
            </tr>
          <!-- test end -->
<?php if(isset($question_6_data->q6_other_data) && is_array($question_6_data->q6_other_data) && count($question_6_data->q6_other_data) > 0){ ?>
                
          @foreach($question_6_data->q6_other_data as $index => $other_data)
          <tr class="qe6NoOfRowOthers" id="row{{$index}}">
           <td>
              <input type="text" name="court_title[]"  class="form-control" value="{{$other_data->court_title}}" placeholder="Others Specific">
            </td>
            <td>
               <input type="text" name="court_description[]" id="q6Title7" class="form-control q6Input" 
    value="{{$other_data->court_description}}">
              
            </td>
            
            <td>
              @if($loop->first )
            <!-- Only one row → Add button -->
            <button type="button" id="addRowDatasQ6" class="btn btn-sm btn-primary addRowQ6">+</button>
        @else
            <!-- More than one row → Remove button -->
             <button type="button" name="remove" id="{{ $index }}" class="btn btn-danger btn_remove cicle">-</button>
            
        @endif
            
            </td>

          </tr>
          @endforeach
         
          <?php } else { ?> 
            <tr class="qe6NoOfRowOthers">
           <td>
              <input type="text" name="court_title[]"  class="form-control"  placeholder="Others Specific">
            </td>
            <td>
               <input type="text" name="court_description[]" id="q6Title7" class="form-control">
              
            </td>
            
            <td>
              
            <!-- Only one row → Add button -->
            <button type="button" id="addRowDatasQ6" class="btn btn-sm btn-primary addRowQ6">+</button>
     
           
            
            </td>

          </tr>
            <?php 
            
          } ?>



        </tbody>
      </table>
    
   
             


        </div>
         <br/>
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question6">Save</button>       
          </p>
          </div>
        </div>
          </div>
<?php } ?> 
          <script>
$(document).ready(function(){

    function toggleSixQuestionView() {
        let statusvalue = $("input[name='is_unit_court_q6']:checked").val();
        if(statusvalue == '1'){
            // Yes → show table
            $('#six_question_view').show();
            $('.othersText').hide();
        } else if(statusvalue == '2'){
            // Others → hide table, show others input
            $('#six_question_view').hide();
            $('.othersText').show();
        } else {
            // No → hide both
            $('#six_question_view').hide();
            $('.othersText').hide();
        }
    }

    // On radio click
    $(".sixstatus").on("click", function(){
        toggleSixQuestionView();
    });

    // Trigger on page load
    toggleSixQuestionView();

    // Add new row
    $(document).on('click', '#addRowDatasQ6', function () {

    $('#addRowQ6').append(`
        <tr class="qe6NoOfRowOthers">
            <td>
                <input type="text" name="court_title[]" class="form-control q6Input" placeholder="Others Specific">
            </td>
            <td>
                <input type="text" name="court_description[]" class="form-control q6Input">
            </td>
            <td>
                <button type="button" class="btn btn-danger btn_remove cicle">-</button>
            </td>
        </tr>
    `);
});

    // Remove row
    $(document).on('click', '.btn_remove', function () {

    // Prevent deleting first row
    if ($(this).closest('tr').hasClass('first-row')) {
        return false;
    }

    $(this).closest('tr').remove();
});


    // Temp save
    $(document).on("click", '#temp-save-question6', function() {
        let yes_no_value = $("input[name='is_unit_court_q6']:checked").val();
        let q6_data = {};

        if(yes_no_value == "1"){
        
             // Object to hold title -> description

          $('tr.qe6NoOfRow').each(function() {
              let title =$(this).find('td[data-title]').data('title');      // hidden input
              let description = $(this).find('input[name="court_description[]"]').val(); // text input

              q6_data[title] = description; // set key-value pair
          });

          
        }
        
        let courtData = [];

      $('tr.qe6NoOfRowOthers').each(function () {
          let title = $(this).find('input[name="court_title[]"]').val();
          let description = $(this).find('input[name="court_description[]"]').val();

          if (title || description) {
              courtData.push({
                  court_title: title,
                  court_description: description
              });
          }
      });

        let new_data = {
            q6_data: q6_data,
            q6_checked_value: yes_no_value,
            q6_other_data:courtData,
        };

        $.ajax({
            type: "POST",
            url: "/superadmin/case/temp-save-question",
            data: {
                "_token": "{{ csrf_token() }}",
                'q6_data': new_data,
                'question_no':'6'
            },
            success: function(response){
                if(response){
                    $('.question6.card-title').css('color', 'green');
                    alert("Question 6 has been saved temporarily");
                } else {
                    alert("Not Saved");
                }
            },
            error: function(xhr){
                console.log(xhr.responseText);
                alert("Save failed");
            }
        });
    });

});

</script>







 