<?php
if($questiontitles[45]->status==0)
{

  ?>
@if(Auth::user()->can('46.question'))

<style>
  .othersText{
    display:none
  }
  .visibility{
    display:none
  }
</style>
<div class="col-md-12 question46">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
          <span class="numbering">46</span>.
           @if (isset($questiontitles [45]))
         {{ $questiontitles[45]->title }}
         @endif

      </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    @php
        $counties=DB::table('countries')->get();
    @endphp
    <div class="card-body">
      <div class="icheck-primary">
      <?php if(isset($question_46_data->q46_checked_value)) {?>
        <input 
        type="radio" 
        id="q46radioThree1" 
        class="forty_sixe_status" 
        name="is_courts_responsible_investigating_q46" 
        <?=(isset($question_46_data->q46_checked_value) && $question_46_data->q46_checked_value=="1")?"checked":"" ;?>
 
        value="1">
        <?php }else {?>
        
        <input type="radio" id="q46radioThree1" class="forty_sixe_status" name="is_courts_responsible_investigating_q46" checked value="1">
        <?php }?>
        
        <label for="q46radioThree1">
          Yes
        </label>
      </div>
      <div class="icheck-primary">
        <input  
        type="radio" 
        id="q46radioThree2" 
        class="forty_sixe_status" 
        name="is_courts_responsible_investigating_q46"  
        <?=(isset($question_46_data->q46_checked_value) && $question_46_data->q46_checked_value=="0")?"checked":"" ;?>
        value="0">
        <label for="q46radioThree2">
          No
        </label>
      </div>


      <div class="icheck-primary input-group mb-3">
      <input 
      type="radio" 
      id="q46radioThree3" 
      class="forty_sixe_status" 
      name="is_courts_responsible_investigating_q46" 
      <?=(isset($question_46_data->q46_checked_value) && $question_46_data->q46_checked_value=="2")?"checked":"" ;?>
      value="2">
      <label for="q46radioThree3">
        Others
      </label><span class=" col-md-6 mt--4 <?=(isset($question_46_data->q46_checked_value)   && ($question_46_data->q46_checked_value=='2')) ? '' : 'othersText' ;?>" style="margin-top:-8px;">
        <input 
        type="text" 
        id="q46others"  
        placeholder="Others "  
        class="form-control"
        value="<?=(isset($question_46_data->others) && $question_46_data->others)?$question_46_data->others:"";?>"
        name="courts_responsible_investigating_others_q46"></span>
    </div>
     <div id="46_question_view" class="card-body row <?=(isset($question_46_data->q46_checked_value) && ($question_46_data->q46_checked_value=="2" || $question_46_data->q46_checked_value=="0"))?"visibility":"";?>">
      <table id="addRowQ46" class="table table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">Name of the Unit/Court</th>
            <th scope="col">Focus/Jurisdiction</th>
            <th scope="col">Location</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php if(isset($question_46_data->q46_data) && count($question_46_data->q46_data)>0){ $i=1; ?>
          @foreach($question_46_data->q46_data  as $q46)
          <tr class="q46QRow" id="q46row<?=$i?>">

            <td> <input type="text" value="<?=(isset($q46->unit))?$q46->unit : ""?>" name="q46_unit_court[]" class="form-control"> </td>
            <td> <input type="text" value="<?=(isset($q46->jurisdict))?$q46->jurisdict : ""?>" name="q46_focus_jurisdiction[]" class="form-control"> </td>
            <td>
              <select name="q46_location_id[]" id="" class="form-control">
                  <option value=""  disabled selected>--Select District--</option>
            @foreach($districs  as $district)

            <option  <?=(isset($q46) &&  !empty($q46) && $q46->location==$district->id)? 'selected' : '' ;?>  value="{{ $district->id }}">{{$district->name}}</option>
           

            @endforeach
              </select>
            </td>
           <td>
            <?php if($i==1) {  ?>
            <button id="addRowDatasQ46" type="button" class="btn btn-sm btn-primary">+</i></button>
             <?php }else { ?>
              <button type="button" name="remove" id="<?=$i;?>" class="btn btn-danger q46btn_remove cicle">-</button></td>
              <?php } ?>
          </td>

          </tr>
          <?php $i++; ?>
          @endforeach
        <?php }else { ?>
          <tr class="q46QRow">

            <td> <input type="text" name="q46_unit_court[]" class="form-control"> </td>
            <td> <input type="text" name="q46_focus_jurisdiction[]" class="form-control"> </td>
            <td>
              <select name="q46_location_id[]" id="" class="form-control">
                  <option value=""  disabled selected>--Select District--</option>
            @foreach($districs  as  $district)
            <option value="{{$district->id}}">{{$district->name}}</option>
     
            @endforeach
              </select>
            </td>
           <td><button id="addRowDatasQ46" type="button" class="btn btn-sm btn-primary">+</i></button></td>

          </tr>
        <?php } ?>
        </tbody>
      </table>


        </tbody>
      </table>
     </div>
     <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question46">Save</button>       
     </p>
    </div>
  </div>
</div>
@endif

<?php }
  ?>
<!-- question no 46 end -->
<script>
$(document).ready(function(){
        $(".forty_sixe_status").on("click",function(){
            var statusvalue = $("input[name='is_courts_responsible_investigating_q46']:checked").val();
            $('.question46').find('.othersText').hide()
            $('.question46').find('#q46others').val("")
            if(statusvalue == '1'){
              $('.question46').find('#46_question_view').show()
              $('.question46').find('span').addClass('othersText')

            }else if(statusvalue=="2"){
              $('.question46').find('#46_question_view').hide()
              $('.question46').find('span').removeClass('othersText')
              $('.question46').find('span').show()
            }else{
              $('.question46').find('#46_question_view').hide()
              $('.question46').find('span').addClass('othersText')
            }
        });

         


  // var rowCount = 1;
  $("#addRowDatasQ46").click(function(){
    let rowCount = $('.q46QRow').length+1;
    $("#addRowQ46").append(
      
    '<tr class="q46QRow" id="q46row'+rowCount+'">'+
    
    `<td> <input type="text" name="q46_unit_court[]" class="form-control"> </td>
      <td> <input type="text" name="q46_focus_jurisdiction[]" class="form-control"> </td>`+
      `<td>
        <select name="q46_location_id[]" id="" class="form-control">
           <option value=""  disabled selected>--Select District--</option>
      @foreach($districs as $key => $district)
      <option value="{{$district->id}}">{{$district->name}}</option>
      

      @endforeach
        </select>
      </td>`+
    '<td><button type="button" name="remove" id="'+rowCount+'" class="btn btn-danger q46btn_remove cicle">-</button></td>'+

         
    '</tr>'
      
    )
  });
  $(document).on('click', '.q46btn_remove', function() {
        var button_id = $(this).attr('id');
        $('#q46row'+button_id+'').remove();
      });

 // Temporary Save
 $(document).on("click",'#temp-save-question46',function() {
          var q46_units = [],jurisdictions=[],q46_locations=[],
          q46_data=[];
          
        let yes_no_value=$("input[type='radio'][name='is_courts_responsible_investigating_q46']:checked").val();
        if(yes_no_value=='1'){
          $('input[name="q46_unit_court[]"]').each(function() {
            if($(this).val()){
              let unit ={
                unit:$(this).val()
              }
              q46_units.push(unit);
            }
           
          });
          $('input[name="q46_focus_jurisdiction[]"]').each(function() {
              let jurisdiction ={
                jurisdict:$(this).val()
              }
              jurisdictions.push(jurisdiction);
            
           
          });
          $('select[name="q46_location_id[]"]').each(function() {
              let q1location ={
                location:$(this).val()
              }             
              q46_locations.push(q1location);
           });
          
          if(q46_units.length>0){
            jQuery.each(q46_units, function(index, item) {
              let newObj = { ...item, location:q46_locations[index].location,jurisdict:jurisdictions[index].jurisdict};
              // item[index]["jurisdict"]=jurisdictions[index].jurisdict
              q46_data.push(newObj)
            });
          }
        }
         
        let new_data={
            q46_data:q46_data,
            q46_checked_value:yes_no_value,
            others:$("input[name='courts_responsible_investigating_others_q46']").val()
          }  
        // console.log(new_data);
          $.ajax({    //create an ajax request to display.php
                  type: "POST",
                  data:{
                    "_token": "{{ csrf_token() }}",
                    'question46':new_data,
                    'question_no':'46',
                  },
                  url: "/superadmin/case/temp-save-question",             
                  success: function(response){
                    if(response){
                      alert("Question 46 has been saved temporary")

                    } else{
                      alert("Not Saved")
                    }
                  }
          });
    }); 

    });
</script>


