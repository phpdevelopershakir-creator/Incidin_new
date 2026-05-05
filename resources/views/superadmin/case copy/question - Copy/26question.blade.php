<?php
if($questiontitles[25]->status==0)
{

  ?>
@if(Auth::user()->can('26.question'))
<style>
  .othersText{
    display:none
  }
  .visibility{
    display:none
  }
</style>
       <!-- question no 26 Start  -->
       <div class="col-md-12 question26">
        <div class="card card-outline collapsed-card">
          <div class="card-header">
            <h3 class="card-title">
               <span class="numbering">26</span>.
           @if (isset($questiontitles [25]))
         {{ $questiontitles[25]->title }}

         @endif
     
          </h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="icheck-primary">
            <?php if(isset($question_26_data->q26_checked_value)) { ?>

              <input type="radio" id="q26radioPrimary11" class="twenty_six_status" name="is_the_quality_care_q26" <?=(isset($question_26_data->q26_checked_value)   && $question_26_data->q26_checked_value=='1') ? 'checked' : '' ;?> value="1">
              <?php } else { ?>
              <input type="radio" id="q26radioPrimary11" class="twenty_six_status" name="is_the_quality_care_q26" checked value="1">
              <?php } ?>
              
              <label for="q26radioPrimary11">
                Yes
              </label>
            </div>
            <div class="icheck-primary">
              <input type="radio" id="q26radioPrimary22" class="twenty_six_status" name="is_the_quality_care_q26" <?=(isset($question_26_data->q26_checked_value)   && $question_26_data->q26_checked_value=='0') ? 'checked' : '' ;?>  value="0">
              <label for="q26radioPrimary22">
                No
              </label>
            </div>
          <div class="icheck-primary input-group mb-3">
            <input type="radio" id="q26radioPrimary33" class="twenty_six_status" name="is_the_quality_care_q26" <?=(isset($question_26_data->q26_checked_value)   && $question_26_data->q26_checked_value=='2') ? 'checked' : '' ;?> value="2">
            <label for="q26radioPrimary33">
              Others
            </label>
              <span class=" col-md-6 mt--4 <?=(isset($question_26_data->q26_checked_value)   && ($question_26_data->q26_checked_value=='2')) ? '' : 'othersText' ;?>" style="margin-top:-8px;">
            <input type="text" id="q26others"  placeholder="Others "  class="form-control" value="<?=(isset($question_26_data->others)) ? $question_26_data->others : '' ;?>" name="the_quality_care_others_q26"></span>
          </div>
          <div id="26_question_view" class="card-body row <?=(isset($question_26_data->q26_checked_value)   && ($question_26_data->q26_checked_value=='2' || $question_26_data->q26_checked_value=='0')) ? 'visibility' : '' ;?>">
            <table id="addRowQ26" cellpadding=0 celspecing=0 width="100%" class="table table-bordered text-center" >
              <thead class="">
                <tr>
                  <th>Protection Services</th>
                  <th>Quality</th>
                  <th>Location</th>
                  <th>Action</th>

                </tr>
              </thead>
                <tbody>

                <?php if(isset($question_26_data->q26_data) && count($question_26_data->q26_data)>0){ $i=0; ?>
                  @foreach($question_26_data->q26_data  as $q26)
                  <tr class="q26Qrow" id="q26row<?=$i?>">
                  <td>
                    <select name="protection_services[]" id="" class="form-control">
                      <option value="">--choose an item--</option>
                      <option <?=(isset($q26)  &&  !empty($q26) && $q26->protection=='1') ? 'selected' : '' ;?> value="1">Economic Support/assest transfer</option>
                      <option <?=(isset($q26)  &&  !empty($q26) && $q26->protection=='2') ? 'selected' : '' ;?> value="2">Micro Credit</option>
                      <option <?=(isset($q26)  &&  !empty($q26) && $q26->protection=='3') ? 'selected' : '' ;?> value="3">Livelihood Training</option>
                      <option <?=(isset($q26)  &&  !empty($q26) && $q26->protection=='4') ? 'selected' : '' ;?> value="4">Job placement</option>
                      <option <?=(isset($q26)  &&  !empty($q26) && $q26->protection=='5') ? 'selected' : '' ;?> value="5">Health care</option>
                      <option <?=(isset($q26)  &&  !empty($q26) && $q26->protection=='6') ? 'selected' : '' ;?> value="6">Psychosocial care</option>
                      <option <?=(isset($q26)  &&  !empty($q26) && $q26->protection=='7') ? 'selected' : '' ;?> value="7">Shelter</option>
                      <option <?=(isset($q26)  &&  !empty($q26) && $q26->protection=='8') ? 'selected' : '' ;?> value="8">Social safetynet</option>
                      <option <?=(isset($q26)  &&  !empty($q26) && $q26->protection=='9') ? 'selected' : '' ;?> value="9">Information support</option>
                      <option <?=(isset($q26)  &&  !empty($q26) && $q26->protection=='10') ? 'selected' : '' ;?> value="10">Mainstream education</option>
                      <option <?=(isset($q26)  &&  !empty($q26) && $q26->protection=='11') ? 'selected' : '' ;?> value="11">Non Formal Education</option>
                      <option <?=(isset($q26)  &&  !empty($q26) && $q26->protection=='12') ? 'selected' : '' ;?> value="12">Technical Education</option>
                      <option <?=(isset($q26)  &&  !empty($q26) && $q26->protection=='13') ? 'selected' : '' ;?> value="13">Life skill</option>
                      <option <?=(isset($q26)  &&  !empty($q26) && $q26->protection=='14') ? 'selected' : '' ;?> value="14">Family reunion</option>
                      <option <?=(isset($q26)  &&  !empty($q26) && $q26->protection=='15') ? 'selected' : '' ;?> value="15">Referral</option>
                    </select>
                  </td>
                  <td>
                    <select name="q26_quality_id[]" id="" class="form-control">
                      <option value="">--choose an item--</option>
                      <option <?=(isset($q26)  &&  !empty($q26) && $q26->quality=='1') ? 'selected' : '' ;?>  value="1">Excellent</option>
                      <option <?=(isset($q26)  &&  !empty($q26) && $q26->quality=='2') ? 'selected' : '' ;?>  value="2">As per standard</option>
                      <option <?=(isset($q26)  &&  !empty($q26) && $q26->quality=='3') ? 'selected' : '' ;?>  value="3">below standard</option>
                    </select>
                  </td>
                  <td>
                    <select name="q26_location_id[]" id="" class="form-control">
                      <option value="">--Select District--</option>
                      @foreach($districs as $distric)
                      <option <?=(isset($q26) &&  !empty($q26) && $q26->location==$distric->id) ? 'selected' : '' ;?>  value="{{$distric->id}}">{{$distric->name}}</option>
                      @endforeach
       
                    </select>
                  </td>
                  <td>
                  <?php if($i==0) { ?>
                    <button id="addRowDatasQ26" type="button" class="btn btn-primary">+</i></button>
                    <?php } else { ?>
                  <button type="button" name="remove" id="<?= $i;?>" class="btn btn-danger q26btn_remove cicle">-</button>
                   <?php } ?> 
                  </td>

                </tr>
             


                <?php $i++; ?>
                  @endforeach
                <?php }else { ?> 
                  <tr class="q26Qrow">

                  <td>
                    <select name="protection_services[]" id="" class="form-control">
                      <option value="">--choose an item--</option>
                      <option value="1">Economic Support/assest transfer</option>
                      <option value="2">Micro Credit</option>
                      <option value="3">Livelihood Training</option>
                      <option value="4">Job placement</option>
                      <option value="5">Health care</option>
                      <option value="6">Psychosocial care</option>
                      <option value="7">Shelter</option>
                      <option value="8">Social safetynet</option>
                      <option value="9">Information support</option>
                      <option value="10">Mainstream education</option>
                      <option value="11">Non Formal Education</option>
                      <option value="12">Technical Education</option>
                      <option value="13">Life skill</option>
                      <option value="14">Family reunion</option>
                      <option value="15">Referral</option>
                    </select>
                  </td>
                  <td>
                    <select name="q26_quality_id[]" id="" class="form-control">
                      <option value="">--choose an item--</option>
                      <option value="1">Excellent</option>
                      <option value="2">As per standard</option>
                      <option value="3">below standard</option>
                    </select>
                  </td>
                  <td>
                    <select name="q26_location_id[]" id="" class="form-control">
                      <option value="">--Select District--</option>
                      @foreach($districs as $distric)
                      <option value="{{$distric->id}}">{{$distric->name}}</option>
                      @endforeach
       
                    </select>
                  </td>
                  <td><button id="addRowDatasQ26" type="button" class="btn btn-primary">+</i></button></td>

                </tr>
                <?php } ?> 
              
             

         
         
            </tbody>
            </table>
          </div>
            <br/> 
              <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question26">Save</button>       
            </p>
          </div>
        </div>
      </div>
      <!-- question no 26 end  -->
      <script>
        $(function(){
  // var rowCount = 1;
  $("#addRowDatasQ26").click(function(){
    let rowCount =$('q26Qrow').length +1;
    $("#addRowQ26").append(
      
    '<tr class="q26Qrow" id="q26row'+rowCount+'">'+
    `<td>
        <select name="protection_services[]" id="" class="form-control">
          <option value="">--choose an item--</option>
          <option value="1">Economic Support/assest transfer</option>
          <option value="3">Micro Credit</option>
          <option value="4">Livelihood Training</option>
          <option value="5">Job placement</option>
          <option value="6">Health care</option>
          <option value="7">Psychosocial care</option>
          <option value="8">Shelter</option>
          <option value="9">Social safetynet</option>
          <option value="10">Information support</option>
          <option value="11">Mainstream education</option>
          <option value="12">Non Formal Education</option>
          <option value="13">Technical Education</option>
          <option value="14">Life skill</option>
          <option value="15">Family reunion</option>
          <option value="16">Referral</option>
        </select>
      </td>
      <td>
        <select name="q26_quality_id[]" id="" class="form-control">
          <option value="">--choose an item--</option>
          <option value="1">Excellent</option>
          <option value="2">As per standard</option>
          <option value="3">below standard</option>
        </select>
      </td>`+
    `<td>
       <select name="q26_location_id[]" id="" class="form-control">
         <option value="">--Select Location--</option>
          @foreach($districs as $distric)
          <option value="{{$distric->id}}">{{$distric->name}}</option>
          @endforeach
        </select>
      </td>`+
      
      '<td><button type="button" name="remove" id="'+rowCount+'" class="btn btn-danger q26btn_remove cicle">-</button></td>'+

         
    '</tr>'
      
    )
  });
  $(document).on('click', '.q26btn_remove', function() {
        var button_id = $(this).attr('id');
        $('#q26row'+button_id+'').remove();
      });

 
})
 $(document).ready(function(){
        $(".twenty_six_status").on("click",function(){
          var statusvalue = $("input[name='is_the_quality_care_q26']:checked").val();
          // alert(statusvalue)
            $('.question26').find('.othersText').hide()
            $('.question26').find('#q26others').val("")
            if(statusvalue =='1'){
              $('.question26').find('#26_question_view').show()
              $('.question26').find('span').addClass('othersText')

            }else if(statusvalue=="2"){
              $('.question26').find('#26_question_view').hide()
              $('.question26').find('span').removeClass('othersText')
              $('.question26').find('span').show()
            }else{
              $('.question26').find('#26_question_view').hide()
              $('.question26').find('span').addClass('othersText')

            }
        });
    $(document).on("click",'#temp-save-question26',function() {
      var protection_services = [],
      qualities=[],locations=[],q26_data=[];     
      let yes_no_value=$("input[type='radio'][name='is_the_quality_care_q26']:checked").val()
      if(yes_no_value=='1'){
        $('select[name="protection_services[]"]').each(function() {
          let protection ={
            protection:$(this).val()
          }             
          protection_services.push(protection);
        });
        $('select[name="q26_quality_id[]"]').each(function() {
          let quality ={
            quality:$(this).val()
          }             
          qualities.push(quality);
        });
        $('select[name="q26_location_id[]"]').each(function() {
          let location ={
            location:$(this).val()
          }             
          locations.push(location);
        });
        if(protection_services.length>0){
          jQuery.each(protection_services, function(index, item) {
            let newObj = { ...item, 
              quality:qualities[index].quality,
              location:locations[index].location,


            };
            q26_data.push(newObj)
          });
        }
      }
      let new_data={
        q26_data:q26_data,
        q26_checked_value:yes_no_value,
        others:$("input[name='the_quality_care_others_q26']").val()
      }  
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
                'question26':new_data,
                'question_no':'26',
              },
              url: "/superadmin/case/temp-save-question40to60",             
              success: function(response){ 
                if (response){
                  alert("Question 26 has been saved temporary")
                }else{
                  alert("Not Saved")
                }
              }
      });
  });
    });

    </script>

@endif
<?php }
  ?>