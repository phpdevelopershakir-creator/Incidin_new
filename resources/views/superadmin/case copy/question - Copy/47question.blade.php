<?php
if($questiontitles[46]->status==0)
{

  ?>
@if(Auth::user()->can('47.question'))
<style>
  .othersText{
    display:none
  }
  .visibility{
    display:none
  }
</style>
<div class="col-md-12 question47">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
         <span class="numbering">47</span>.
           @if (isset($questiontitles [46]))
         {{ $questiontitles[46]->title }}
         @endif
    </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="icheck-primary">
      <?php if(isset($question_47_data->q47_checked_value)) {?>

      <input  
      type="radio" 
      id="q47radioThree1" 
      class="forty_seven_status" 
      name="is_courts_adequate_resources_q47" 
      <?=(isset($question_47_data->q47_checked_value) && $question_47_data->q47_checked_value=="1")?"checked":"" ;?>
 
      value="1">
      <?php }else {?>
        
      <input  type="radio" id="q47radioThree1" class="forty_seven_status" name="is_courts_adequate_resources_q47" checked value="1">
      <?php }?>
        
      <label for="q47radioThree1">
          Yes
        </label>
      </div>
      <div class="icheck-primary">
        <input  
        type="radio" 
        id="q47radioThree2" 
        class="forty_seven_status" 
        name="is_courts_adequate_resources_q47" 
      <?=(isset($question_47_data->q47_checked_value) && $question_47_data->q47_checked_value=="0")?"checked":"" ;?>
        value="0">
        <label for="q47radioThree2">
          No
        </label>
      </div>

      <div class="icheck-primary input-group mb-3">
        <input  
        type="radio" 
        id="q47radioThree3" 
        class="forty_seven_status" 
        name="is_courts_adequate_resources_q47" 
        <?=(isset($question_47_data->q47_checked_value) && $question_47_data->q47_checked_value=="2")?"checked":"" ;?>
        value="2">
        <label for="q47radioThree3">
          Others
        </label><span class="col-md-6 mt--4 <?=(isset($question_47_data->q47_checked_value)   && ($question_47_data->q47_checked_value=='2')) ? '' : 'othersText' ;?>" style="margin-top:-8px;">
        <input 
        type="text" 
        id="q47others"  
        placeholder="Others "  
        class="form-control" 
        value="<?=(isset($question_47_data->others) && $question_47_data->others)?$question_47_data->others:"";?>"
        name="courts_adequate_resources_others_q47"></span>
    
      </div>
      <div id="47_question_view" class="card-body row <?=(isset($question_47_data->q47_checked_value) && ($question_47_data->q47_checked_value=="2" || $question_47_data->q47_checked_value=="0"))?"visibility":"";?>">
      <table id="addRowQ47" class="table table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">Name of the Unit/Court</th>
            <th scope="col">Focus/Jurisdiction</th>
            <th scope="col">Location</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php if(isset($question_47_data->q47_data) && count($question_47_data->q47_data)>0){ $i=1; ?>
          @foreach($question_47_data->q47_data  as $q47)
          <tr class="q47QRow"  id="q47row<?=$i?>">

            <td> <input type="text" value="<?=(isset($q47->unit))?$q47->unit : ""?>" name="q47_name_unit[]" class="form-control"> </td>
            <td> <input type="text" value="<?=(isset($q47->jurisdict))?$q47->jurisdict : ""?>" name="q47_focus_jurisdiction[]" class="form-control"> </td>
            <td>
              <select name="q47_location_id[]" id="" class="form-control">
                  <option value=""  disabled selected>--Select District--</option>
            @foreach($districs  as $district)

            <option  <?=(isset($q47) &&  !empty($q47) && $q47->location==$district->id)? 'selected' : '' ;?>  value="{{ $district->id }}">{{$district->name}}</option>
           

            @endforeach
              </select>
            </td>
           <td>
            <?php if($i==1) {  ?>
            <button id="addRowDatasQ47" type="button" class="btn btn-sm btn-primary">+</i></button>
             <?php }else { ?>
              <button type="button" name="remove" id="<?= $i;?>" class="btn btn-danger q47btn_remove cicle">-</button></td>
              <?php } ?>
          </td>

          </tr>
          <?php $i++; ?>
          @endforeach
        <?php }else { ?>
          <tr class="q47QRow">

            <td> <input type="text" name="q47_name_unit[]" class="form-control"> </td>
            <td> <input type="text" name="q47_focus_jurisdiction[]" class="form-control"> </td>
            <td>
              <select name="q47_location_id[]" id="" class="form-control">
                  <option value=""  disabled selected>--Select District--</option>
            @foreach($districs  as $district)
            <option value="{{$district->id}}">{{$district->name}}</option>
           

            @endforeach
              </select>
            </td>
           <td><button id="addRowDatasQ47" type="button" class="btn btn-sm btn-primary">+</i></button></td>

          </tr>
        <?php } ?>
          

        

        </tbody>
      </table>
    </div>
    <p class="text-right">
        <button type="button" class="btn btn-success" id="temp-save-question47">Save</button>       
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
  $("#addRowDatasQ47").click(function(){
    let rowCount =$(".q47QRow").length+1;
    $("#addRowQ47").append(
      
    '<tr class="q47QRow" id="q47row'+rowCount+'">'+
    
    `<td> <input type="text" name="q47_name_unit[]" class="form-control"> </td>
      <td> <input type="text" name="q47_focus_jurisdiction[]" class="form-control"> </td>`+
      `<td>
        <select name="q47_location_id[]" id="" class="form-control">
            <option value=""  disabled selected>--Select District--</option>
          @foreach($districs as $district)
          <option value="{{$district->id}}">{{$district->name}}</option>
          

          @endforeach
        </select>
      </td>`+
    '<td><button type="button" name="remove" id="'+rowCount+'" class="btn btn-danger q47btn_remove cicle">-</button></td>'+

         
    '</tr>'
      
    )
  });
  $(document).on('click', '.q47btn_remove', function() {
        var button_id = $(this).attr('id');
        $('#q47row'+button_id+'').remove();
      });

  $(document).on("click",'#temp-save-question47',function() {
          var q47_units = [],jurisdictions=[],q47_locations=[];
          var q47_data=[];
          let yes_no_value=$("input[type='radio'][name='is_courts_adequate_resources_q47']:checked").val();
        if(yes_no_value=='1'){
          $('input[name="q47_name_unit[]"]').each(function() {
            if($(this).val()){
              let unit ={
                unit:$(this).val()
              }
              q47_units.push(unit);
            }
           
          });
          $('input[name="q47_focus_jurisdiction[]"]').each(function() {
              let jurisdiction ={
                jurisdict:$(this).val()
              }
              jurisdictions.push(jurisdiction);
            
           
          });
          $('select[name="q47_location_id[]"]').each(function() {
              let q1location ={
                location:$(this).val()
              }             
              q47_locations.push(q1location);
           });
           
          if(q47_units.length>0){
            jQuery.each(q47_units, function(index, item) {
              let newObj = { ...item, location:q47_locations[index].location,jurisdict:jurisdictions[index].jurisdict};
              // item[index]["jurisdict"]=jurisdictions[index].jurisdict
              q47_data.push(newObj)
            });
          }
        }
        let new_data={
            q47_data:q47_data,
            q47_checked_value:yes_no_value,
            others:$("input[name='courts_adequate_resources_others_q47']").val()
          }  
        // console.log(new_data);
          $.ajax({    //create an ajax request to display.php
                  type: "POST",
                  data:{
                    "_token": "{{ csrf_token() }}",
                    'question47':new_data,
                    'question_no':'47',
                  },
                  url: "/superadmin/case/temp-save-question40to60",             
                  success: function(response){ 
                    alert("Question 47 has been saved temporary")
                  }
          });
    });

});

</script>