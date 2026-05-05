<?php
if(($questiontitles[8]->status ?? null)==1)
{

  ?>
<style>
  .visibility{
    display:none;
  }
  .othersText{
    display:none;
  }


.radio-group-vertical {
    display: flex;
    flex-direction: column;
    gap: 8px;
    font-family: Arial, sans-serif;
}

.radio-group-vertical label {
    cursor: pointer;
    font-size: 15px;
}

.radio-group-vertical input[type="radio"] {
    accent-color: #0d6efd;
    margin-right: 6px;
}


</style>

<div class="card question9">
        <div class="card-header" role="tab" id="heading-4">
        <h6 class="card-title" style="color: {{ isset($question_9_data) ? 'blue' : 'green' }};">
            <a data-toggle="collapse" href="#Question-9" aria-expanded="false"
              aria-controls="collapse-4">
                 9.{{ $questiontitles[8]->title }}           
            </a>
          </h6>
        </div>

        <div id="Question-9" class="collapse" role="tabpane9" aria-labelledby="heading-4"
          data-parent="#accordion-2">
            <div class="card-body">
          <div class="icheck-primary">
          <?php if(isset($question_9_data->q9_checked_value)) { ?>
            <input 
            type="radio" 
            id="radioNine1" 
            class="ninestatus" 
            name="is_exclusively_trafficking_q9" 
            <?=(isset($question_9_data->q9_checked_value) && $question_9_data->q9_checked_value=="1")?"checked":"" ;?>    
            value="1">
            <?php }else { ?>
            
            <input type="radio" id="radioNine1" class="ninestatus" name="is_exclusively_trafficking_q9" checked value="1">
            <?php } ?>    
            
            <label for="radioTe1">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input  
            type="radio" 
            id="radioNine2" 
            class="ninestatus" 
            name="is_exclusively_trafficking_q9"  
            <?=(isset($question_9_data->q9_checked_value) && $question_9_data->q9_checked_value=="0")?"checked":"" ;?>    

            value="0">
            <label for="radioNine2">
              No
            </label>
          </div>
          <div class="icheck-primary icheck-primary input-group">
            <input 
            type="radio" 
            id="radioNine3" 
            class="ninestatus" 
            name="is_exclusively_trafficking_q9"  
            <?=(isset($question_9_data->q9_checked_value) && $question_9_data->q9_checked_value=="2")?"checked":"" ;?>    
            value="2">
            <label for="radioNine3">
              Others 
            </label> </label> <span class=" col-md-6 mt--4 <?=(isset($question_9_data->q9_checked_value) && $question_9_data->q9_checked_value=="2")? "" :"othersText" ;?>" >
            <input 
            type="text" 
            id="q9others"   
            placeholder=""  
            class="form-control " 
            value="<?=(isset($question_9_data->others) && $question_9_data->others) ? $question_9_data->others:'' ?>" 
            name="other_exclusively_trafficking_q9"></span>
          </div>
          <div id="nine_question_view" class="<?=(isset($question_9_data->q9_checked_value)) && ($question_9_data->q9_checked_value=="2" || $question_9_data->q9_checked_value=="0" )?"visibility":"" ;?>">
           

     

       <!-- table  Start -->
        <b>
           Note: if you selet yes a text box will  open for give your opinion  </b>
       <table id="addRowQ9" class="table table-bordered text-center">
        
        <thead style="background-color:#ccc; font-weight:bold; text-align:center;">
          <tr >
            <th scope="col">Description</th>
            <th scope="col">Please Select Yes/No</th>
           <th scope="col">Opinion</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        
        
          
        
          <!-- test -->
             <tr class="qe9NoOfRow">
             <td data-title="police_station" style="text-align: left;">
                 Police Station
                <input type="hidden" class="form-control" name="court_title_q9[]" value="Police Station">
              </td>
               <td>
                <div class="radio-group-vertical">
                       <label>
                <input type="radio"
                       name="shakir_radio"
                       value="1"
                       onchange="setCourtTypeQ9(this)">
                Yes
            </label>

            <label>
                <input type="radio"
                       name="shakir_radio"
                       value="0"
                       onchange="setCourtTypeQ9(this)">

                No
            </label>

            <input type="hidden" name="court_type_q9[]"  class="courtTypeHolder7">
                </div>
            </td>

            <td >
        <input type="text" name="court_description_q9[]" class="form-control desc-td" style="display:none;"
         value="<?= (isset($question_9_data->q7_data->police_station)) ? $question_9_data->q7_data->police_station : ""; ?>">
    </td>
       <!-- Text Input -->
            <td>
             &nbsp;
            </td>
                  
            </tr>
            <tr class="qe9NoOfRow">
             <td data-title="cid" style="text-align: left;">
                 CID
                <input type="hidden" class="form-control" name="court_title_q9[]" value="CID">
              </td>
               <td>
                <div class="radio-group-vertical">
                      <label>
                <input type="radio"
                       name="shakirtwo_radio"
                       value="1"
                       onchange="setCourtTypeQ9(this)">
                Yes
            </label>

            <label>
                <input type="radio"
                       name="shakirtwo_radio"
                       value="0"
                       onchange="setCourtTypeQ9(this)">
                No
            </label>

    
            <input type="hidden" name="court_type_q9[]" class="courtTypeHolder7">
                </div>
            </td>

    <td >
        <input type="text" name="court_description_q9[]" class="form-control desc-td" style="display:none;"
        value="<?= (isset($question_9_data->q7_data->cid)) ? $question_9_data->q7_data->cid : ""; ?>">
    </td>
            <td>
             &nbsp;
            </td>

            </tr>
            <tr class="qe9NoOfRow">
             <td data-title="rab" style="text-align: left;">
                 RAB
                <input type="hidden" class="form-control" name="court_title_q9[]" value="RAB">
              </td>
               <td>
                  <div class="radio-group-vertical">
                   <label>
                <input type="radio"
                       name="shakirthree_radio"
                       value="1"
                       onchange="setCourtTypeQ9(this)">
                Yes
            </label>

            <label>
                <input type="radio"
                       name="shakirthree_radio"
                       value="0"
                       onchange="setCourtTypeQ9(this)">
                No
            </label>

            
            <input type="hidden" name="court_type_q9[]" class="courtTypeHolder7">
            </div>
            </td>
         <td >
        <input type="text" name="court_description_q9[]" class="form-control desc-td" style="display:none;"
        value="<?= (isset($question_9_data->q7_data->rab)) ? $question_9_data->q7_data->rab : ""; ?>">
    </td>
    
            <td>
             &nbsp;
            </td>
            </tr>
            <tr class="qe9NoOfRow">
             <td data-title="sb" style="text-align: left;">
                 SB
                <input type="hidden" class="form-control" name="court_title_q9[]" value="SB">
              </td>
                <td>
                <div class="radio-group-vertical">
                      <label>
                <input type="radio"
                       name="shakirfour_radio"
                       value="1"
                       onchange="setCourtTypeQ9(this)">
                Yes
            </label>

            <label>
                <input type="radio"
                       name="shakirfour_radio"
                       value="0"
                       onchange="setCourtTypeQ9(this)">
                No
            </label>

            <input type="hidden" name="court_type_q9[]" class="courtTypeHolder7">
                </div>
            </td>

    <td >
        <input type="text" name="court_description_q9[]" class="form-control desc-td" style="display:none;"
        value="<?= (isset($question_9_data->q7_data->sb)) ? $question_9_data->q7_data->sb : ""; ?>">
    </td>
            <td>
             &nbsp;
            </td>
            </tr>
            <tr class="qe9NoOfRow">
             <td data-title="prosecution_offices" style="text-align: left;">
                 Prosecution offices (SPP)
                <input type="hidden" class="form-control" name="court_title_q9[]" value="Prosecution offices (SPP)">
              </td>
               <td>
               <div class="radio-group-vertical">
                  <label>
                <input type="radio"
                       name="shakirfive_radio"
                       value="1"
                       onchange="setCourtTypeQ9(this)">
                Yes
            </label>

            <label>
                <input type="radio"
                       name="shakirfive_radio"
                       value="0"
                       onchange="setCourtTypeQ9(this)">
                No
            </label>

            
            <input type="hidden" name="court_type_q9[]" class="courtTypeHolder7">
            </div>
            </td>
            <td >
        <input type="text" name="court_description_q9[]" class="form-control desc-td" style="display:none;"
        value="<?= (isset($question_9_data->q7_data->prosecution_offices)) ? $question_9_data->q7_data->prosecution_offices : ""; ?>">
    </td>
       
            <td>
             &nbsp;
            </td>
            </tr>
             <tr class="qe9NoOfRow">
             <td data-title="special_tribunal" style="text-align: left;">
                 Special Tribunal
                <input type="hidden" class="form-control" name="court_title_q9[]" value="Special Tribunal">
              </td>
                <td>
                <div class="radio-group-vertical">
                      <label>
                <input type="radio"
                       name="shakirsix_radio"
                       value="1"
                       onchange="setCourtTypeQ9(this)">
                Yes
            </label>

            <label>
                <input type="radio"
                       name="shakirsix_radio"
                       value="0"
                       onchange="setCourtTypeQ9(this)">
                No
            </label>

            
            <input type="hidden" name="court_type_q9[]" class="courtTypeHolder7">
                </div>
            </td>

    <td >
        <input type="text" name="court_description_q9[]" class="form-control desc-td" style="display:none;"
        value="<?= (isset($question_9_data->q7_data->special_tribunal)) ? $question_9_data->q7_data->special_tribunal : ""; ?>">
    </td>

            <td>
             &nbsp;
            </td>
            </tr>
          <!-- test end -->
<?php if(isset($question_9_data->q7_other_data) && is_array($question_9_data->q7_other_data) && count($question_9_data->q7_other_data) > 0){ ?>
                
          @foreach($question_9_data->q7_other_data as $index => $other_data)
          <tr class="qe9NoOfRowOthers" id="row{{$index}}">
           <td>
              <input type="text" name="court_title_q9[]"  class="form-control" value="{{$other_data->court_title_q9}}" placeholder="Others Specific">
            </td>
              <td>
                <div class="radio-group-vertical">
                      <label>
                <input type="radio"
                       name="shakirseven_radio"
                       value="1"
                       onchange="setCourtTypeQ9(this)">
                Yes
            </label>

            <label>
                <input type="radio"
                       name="shakirseven_radio"
                       value="0"
                       onchange="setCourtTypeQ9(this)">
                No
            </label>

            <!-- FINAL HOLDER (important) -->
            <input type="hidden" name="court_type_q9[]" class="courtTypeHolder7">
                </div>
            </td>

   <td >
        <input type="text" name="court_description_q9[]" value="{{$other_data->court_description_q9}}"  class="form-control desc-td" style="display:none;">
    </td>
       <!-- Text Input -->
            <td>
             &nbsp;
            </td>
            
             <td>
              @if($loop->first )
            <!-- Only one row → Add button -->
            <button type="button" id="addRowDatasQ9" class="btn btn-sm btn-primary addRowQ9">+</button>
        @else
            <!-- More than one row → Remove button -->
             <button type="button" name="remove" id="{{ $index }}" class="btn btn-danger btn_remove cicle">-</button>
            
        @endif
            
            </td>

          </tr>
          @endforeach
         
          <?php } else { ?> 
            <tr class="qe9NoOfRowOthers">
           <td>
              <input type="text" name="court_title_q9[]"  class="form-control"  placeholder="Others Specific">
            </td>
             <td>
                  <div class="radio-group-vertical">
                 <label>
                <input type="radio"
                       name="shakireight_radio"
                       value="1"
                       onchange="setCourtTypeQ9(this)">
                Yes
            </label>

            <label>
                <input type="radio"
                       name="shakireight_radio"
                       value="0"
                       onchange="setCourtTypeQ9(this)">
                No
            </label>

            <!-- FINAL HOLDER (important) -->
            <input type="hidden" name="court_type_q9[]" class="courtTypeHolder7">
            </div>
            </td>
           <td >
        <input type="text" name="court_description_q9[]" class="form-control desc-td" style="display:none;">
    </td>
       <!-- Text Input -->
            <td>
             &nbsp;
            </td>
            
            <td>
              
            <!-- Only one row → Add button -->
            <button type="button" id="addRowDatasQ9" class="btn btn-sm btn-primary addRowQ9">+</button>
     
           
            
            </td>

          </tr>
            <?php 
            
          } ?>



        </tbody>
      </table>
    
   
             


        </div>
         <br/>
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question9">Save</button>       
          </p>
          </div>
        </div>
          </div>
 <?php } ?> 
         

          <script>
$(document).ready(function(){

    function toggleNineQuestionView() {
        let statusvalue = $("input[name='is_exclusively_trafficking_q9']:checked").val();
        if(statusvalue == '1'){
            // Yes → show table
            $('#nine_question_view').show();
            $('.othersText').hide();
        } else if(statusvalue == '2'){
            // Others → hide table, show others input
            $('#nine_question_view').hide();
            $('.othersText').show();
        } else {
            // No → hide both
            $('#nine_question_view').hide();
            $('.othersText').hide();
        }
    }

    // On radio click
    $(".ninestatus").on("click", function(){
        toggleNineQuestionView();
    });

    // Trigger on page load
    toggleNineQuestionView();

    // Add new row
    $(document).on('click', '#addRowDatasQ9', function () {

    $('#addRowQ9').append(`
        <tr class="qe9NoOfRowOthers">
            <td>
                <input type="text" name="court_title_q9[]" class="form-control q7Input" placeholder="Others Specific">
            </td>

              <td>
                <div class="radio-group-vertical">
                      <label>
                <input type="radio"
                       name="shakirnine_radio"
                       value="1"
                       onchange="setCourtTypeQ9(this)">
                Yes
            </label>

            <label>
                <input type="radio"
                       name="shakirnine_radio"
                       value="0"
                       onchange="setCourtTypeQ9(this)">
                No
            </label>

            <!-- FINAL HOLDER (important) -->
            <input type="hidden" name="court_type_q9[]" class="courtTypeHolder7">
                </div>
            </td>

    
    <td >
        <input type="text" name="court_description_q9[]" class="form-control desc-td" style="display:none;">
    </td>
       <!-- Text Input -->
            <td>
             &nbsp;
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
    $(document).on("click", '#temp-save-question9', function() {
        let yes_no_value = $("input[name='is_exclusively_trafficking_q9']:checked").val();
        let q7_data = {};

        if(yes_no_value == "1"){
        
             // Object to hold title -> description

          $('tr.qe9NoOfRow').each(function() {
              let title =$(this).find('td[data-title]').data('title');      // hidden input
              let description = $(this).find('input[name="court_description_q9[]"]').val(); // text input

              q7_data[title] = description; // set key-value pair
          });

          
        }
        
        let courtData = [];

      $('tr.qe9NoOfRowOthers').each(function () {
          let title = $(this).find('input[name="court_title_q9[]"]').val();
          let description = $(this).find('input[name="court_description_q9[]"]').val();

          if (title || description) {
              courtData.push({
                  court_title_q9: title,
                  court_description_q9: description
              });
          }
      });

        let new_data = {
            q7_data: q7_data,
            q9_checked_value: yes_no_value,
            q7_other_data:courtData,
        };

        $.ajax({
            type: "POST",
            url: "/superadmin/case/temp-save-question",
            data: {
                "_token": "{{ csrf_token() }}",
                'q7_data': new_data,
                'question_no':'7'
            },
            success: function(response){
                if(response){
                    $('.question9.card-title').css('color', 'green');
                    alert("Question 9 has been saved temporarily");
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
 <script>
$(document).on('change', '.radio-group-vertical input[type=radio]', function () {
    let row = $(this).closest('tr');
    let textTd = row.find('.desc-td');

    if ($(this).val() === '1') {
        textTd.show();
    } else {
        textTd.hide();
        textTd.find('input').val('');
    }
});
</script>


 <script>
function setCourtTypeQ9(radio) {
    let row = radio.closest('tr');
    let hiddenInput = row.querySelector('.courtTypeHolder7');

    if (hiddenInput) {
        hiddenInput.value = radio.value;
    }
}


</script>



 