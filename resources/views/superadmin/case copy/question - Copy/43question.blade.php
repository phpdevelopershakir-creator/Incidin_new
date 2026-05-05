<?php
if($questiontitles[42]->status==0)
{

  ?>
@if(Auth::user()->can('43.question'))
<?php 
 $nature_arrange = [
  1 =>'MoU', 
  2 =>'Treaties', 
  3 =>'MAL', 
  4 =>'UN Convention',   
  5 =>'Regional Cooperation Initiative',   
  6 =>'Bilateral Cooperation Initiative'
 ];

$focus_on = [
  1 =>'Prevent', 
  2 =>'Prosecution', 
  3 =>'Repatriation', 
  4 =>'Extradition',   
  5 =>'Investigation',   
  6 =>'Support to VoT',
  7 =>'Monitoring',
  8 =>'Legal Aid',
  9 =>'Labour Market Cooperation'

];
$status_on = [
  1 =>'Planned', 
  2 =>'Agreed', 
  3 =>'Signed', 
  4 =>'In Placed',   
  5 =>'Under study',   
  6 =>'On process'

];

?>

<style>
  .othersText{
    display:none
  }
  .visibility{
    display:none
  }
</style>
    <!-- qestion no 42 end -->
    <div class="col-md-12 question43">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
              <span class="numbering">43</span>.
           @if (isset($questiontitles [42]))
         {{ $questiontitles[42]->title }}
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
        <?php if(isset($question_43_data->q43_checked_value)) {?>

          <input 
          type="radio" 
          id="q43radioThree1" 
          class="fourty_three_status" 
          name="is_regional_enforcement_coordination_q43" 
          <?=(isset($question_43_data->q43_checked_value) && $question_43_data->q43_checked_value=="1")?"checked":"" ;?> 
          value="1">
        <?php }else {?>
            
          <input type="radio" id="q43radioThree1" class="fourty_three_status" name="is_regional_enforcement_coordination_q43" checked value="1">
        <?php }?>
            
          <label for="q43radioThree1">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input 
            type="radio" 
            id="q43radioThree2" 
            class="fourty_three_status" 
            name="is_regional_enforcement_coordination_q43" 
            <?=(isset($question_43_data->q43_checked_value) && $question_43_data->q43_checked_value=="0")?"checked":"" ;?> 
            value="0" >
            <label for="q43radioThree2">
              No
            </label>
          </div>

          <!-- <div class="form-check">
            <input type="radio" id="radioThree3"  class="fourty_three_status" name="fourty_three_status" value="Others">
            <label for="radioThree3">
              Others
            </label>
          </div> -->
          <div class="icheck-primary input-group mb-3" >
          <input 
          type="radio" 
          id="q43radioPrimary3" 
          class="fourty_three_status" 
          name="is_regional_enforcement_coordination_q43" 
          <?=(isset($question_43_data->q43_checked_value) && $question_43_data->q43_checked_value=="2")?"checked":"" ;?> 
          value="2">
          <label for="q43radioPrimary3">
            Others
          </label><span class="col-md-6 mt--4 <?=(isset($question_43_data->q43_checked_value)   && ($question_43_data->q43_checked_value=='2')) ? '' : 'othersText' ;?>" style="margin-top:-8px;">
            <input 
            type="text" 
            id="q43others"  
            placeholder="Others "  
            class="form-control" 
            value="<?=(isset($question_43_data->others) && $question_43_data->others)?$question_43_data->others:"";?>"
            name="regional_enforcement_coordination_others_q43"></span>
        </div>
          <div id="43_question_view" class="card-body row <?=(isset($question_43_data->q43_checked_value) && ($question_43_data->q43_checked_value=="2" || $question_43_data->q43_checked_value=="0"))?"visibility":"";?>">
          <table id="addRowQ43" class="table table-bordered text-center">
            <thead>
              <tr>
                <th scope="col">Country</th>
                <th scope="col">Nature of Arrangement</th>
                <th scope="col">Focus</th>
                <th scope="col">Status</th>
                <th scope="col">Please upload a summary note or any other relevant document</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php if(isset($question_43_data->q43_data) && count($question_43_data->q43_data)>0){ $i=1; ?>
          @foreach($question_43_data->q43_data  as $q43)
          <tr class="q43QRow" id="q43row<?=$i?>">
                <td>
                  <select name="q43_country_id[]" id="" class="form-control">
                    <option value="" disabled selected>---Choose County--</option>
                    @foreach ($counties as $item)
                    <option <?=(isset($q43) &&  !empty($q43) && $q43->location==$item->id)? 'selected' : '' ;?>  value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
                </td>
                <td><select name="q43_nature_arrangement_id[]" id="" class="form-control">
                    <option value="0">--Choose an item--</option>
                    @foreach ($nature_arrange as $key => $item)
                  <option  <?=(isset($q43)  &&  !empty($q43) && $q43->arrange==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                    @endforeach
                    
                  </select></td>
                <td><select name="q43_focus_id[]" id="" class="form-control">
                    <option value="0">--choose an item--</option>
                    @foreach   ($focus_on as $key => $item)
                  <option  <?=(isset($q43)  &&  !empty($q43) && $q43->focus_id==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                    @endforeach
                    
                  </select></td>
                <td><select name="q43_status_id[]" id="" class="form-control">
                    @foreach   ($status_on as $key => $item)
                    <option  <?=(isset($q43)  &&  !empty($q43) && $q43->status_id==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                    @endforeach    
              
                  </select></td>
                <td><input type="file" name="upload_document[]" class="form-control"></td>
                <td>
                <?php if($i==1) {  ?>
                  <button id="addRowDatasQ43" type="button" class="btn btn-sm btn-primary">+</i></button>
                  <?php }else { ?>
                  <button type="button" name="remove" id="<?=$i;?>" class="btn btn-danger q43btn_remove cicle">-</button></td>
                
                  <?php } ?>
                </td>

              </tr>
              <?php $i++; ?>
          @endforeach
        <?php }else { ?>
              <tr class="q43QRow">
                <td>
                  <select name="q43_country_id[]" id="" class="form-control">
                    <option value="" disabled selected>---Choose County--</option>
                    @foreach ($counties as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
                </td>
                <td><select name="q43_nature_arrangement_id[]" id="" class="form-control">
                    <option value="0">--Choose an item--</option>
                    @foreach ($nature_arrange as $key => $item)
                  <option  <?=(isset($q43)  &&  !empty($q43) && $q43->arrange==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                    @endforeach
                  </select></td>
                <td><select name="q43_focus_id[]" id="" class="form-control">
                    <option value="0">--choose an item--</option>
                    @foreach   ($focus_on as $key => $item)
                    <option  <?=(isset($q43)  &&  !empty($q43) && $q43->focus_id==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                    @endforeach
                  </select></td>
                <td><select name="q43_status_id[]" id="" class="form-control">
                    @foreach   ($status_on as $key => $item)
                    <option  <?=(isset($q43)  &&  !empty($q43) && $q43->status_id==$key) ? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                    @endforeach 
                  </select></td>
                <td><input type="file" name="upload_document[]" class="form-control"></td>
                <td><button id="addRowDatasQ43" type="button" class="btn btn-sm btn-primary">+</i></button></td>

              </tr>
                <?php } ?>
           

            </tbody>
          </table>
        </div>
        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question43">Save</button>       
        </p>
        </div>
        </div>
      </div>
    </div>
    <script>
 $(function(){
        $(".fourty_three_status").on("click",function(){
          // alert("HI")
            var statusvalue = $("input[name='is_regional_enforcement_coordination_q43']:checked").val();
            $('.question43').find('.othersText').hide()
            $('.question43').find('#q43others').val("")
            if(statusvalue == '1'){
              $('.question43').find('#43_question_view').show()
              $('.question43').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question43').find('#43_question_view').hide()
              $('.question43').find('span').removeClass('othersText')
              $('.question43').find('span').show()
            }else{
              $('.question43').find('#43_question_view').hide()
              $('.question43').find('span').addClass('othersText')

            }
        });


      var rowCount = 1;
    $("#addRowDatasQ43").click(function(){
      let rowCount =(".q43QRow").length+1;
      $("#addRowQ43").append(
        
      '<tr class="q43QRow" id="q43row'+rowCount+'">'+
      
      `<td>
          <select name="q43_country_id[]" id="" class="form-control">
            <option value="" disabled selected>---Choose County--</option>
            @foreach ($counties as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
          </select>
        </td>`+
        `<td><select name="q43_nature_arrangement_id[]" id="" class="form-control">
            <option value="0">--Choose an item--</option>
            <option value="1">MoU</option>
            <option value="2">Treaties</option>
            <option value="3">MAL</option>
            <option value="4">UN Convention</option>
            <option value="5">Regional Cooperation Initiatiev</option>
            <option value="6">Bilateral Cooperation Initiative</option>
          </select></td>
          <td><select name="q43_focus_id[]" id="" class="form-control">
              <option value="0">--choose an item--</option>
              <option value="1">Prevent</option>
              <option value="2">Prosecution</option>
              <option value="3">Repatriation</option>
              <option value="4">Extradition</option>
              <option value="5">Investigation</option>
              <option value="6">Support to VoT</option>
              <option value="7">Monitoring</option>
              <option value="8">Legal Aid</option>
              <option value="9">Labour Market Cooperation</option>
            </select></td>
          <td><select name="q43_status_id[]" id="" class="form-control">
              <option value="1">Planned</option>
              <option value="2">Agreed</option>
              <option value="3">Signed</option>
              <option value="4">In Placed</option>
              <option value="5">Under study</option>
              <option value="6">On process</option>
            </select></td>
          <td><input type="file" name="upload_document[]" class="form-control"></td>`+
        '<td><button type="button" name="remove" id="'+rowCount+'" class="btn btn-danger q43btn_remove cicle">-</button></td>'+

          
      '</tr>'
        
      )
    });
    $(document).on('click', '.q43btn_remove', function() {
        var button_id = $(this).attr('id');
        $('#q43row'+button_id+'').remove();
      });


    $(document).on("click",'#temp-save-question43',function() {
          var country_location = [],
              nature_arrange=[],
              focus_ids=[],
              status_ids =[],
              q43_data=[];
          let yes_no_value=$("input[type='radio'][name='is_regional_enforcement_coordination_q43']:checked").val()
          if(yes_no_value=='1'){
          $('select[name="q43_country_id[]"]').each(function() {
            
            let location = {
              location:$(this).val()
            }
            country_location.push(location);
           });
           $('select[name="q43_nature_arrangement_id[]"]').each(function() {
            let arrange = {
              arrange:$(this).val()
            }
            nature_arrange.push(arrange);   
           });
           $('select[name="q43_focus_id[]"]').each(function() {
            let focus_id = {
              focus_id:$(this).val()
            }
            focus_ids.push(focus_id);   
           });
              
          
           $('select[name="q43_status_id[]"]').each(function() {

            let status_id = {
              status_id:$(this).val()
            }
            status_ids.push(status_id);   
           });
            
          
          
          
          if(country_location.length>0){
            jQuery.each(country_location, function(index, item) {
              let newObj = { 
                ...item, 
                location:country_location[index].location,
                arrange:nature_arrange[index].arrange,
                focus_id:focus_ids[index].focus_id,
                status_id:status_ids[index].status_id
              }
              // item[index]["jurisdict"]=jurisdictions[index].jurisdict
              q43_data.push(newObj)
            });
          }
        }
      let new_data={
        q43_data:q43_data,
        q43_checked_value:yes_no_value,
        others:$("input[name='regional_enforcement_coordination_others_q43']").val()
      }  
      // console.log(new_data)
          $.ajax({    //create an ajax request to display.php
                  type: "POST",
                  data:{
                    "_token": "{{ csrf_token() }}",
                    'question43':new_data,
                    'question_no':'43',
                  },
                  url: "/superadmin/case/temp-save-question40to60",             
                  success: function(response){ 
                    alert("Question 43 has been saved temporary")
                  }
          });
    });
});


</script>
@endif
<?php }
  ?>