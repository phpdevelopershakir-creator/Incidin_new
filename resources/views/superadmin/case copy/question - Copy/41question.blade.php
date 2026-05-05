<?php
if($questiontitles[40]->status==0)
{

  ?>
@if(Auth::user()->can('41.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
              <span class="numbering">41</span>.
           @if (isset($questiontitles [40]))
         {{ $questiontitles[40]->title }}
         @endif
        </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div id="fourty_one_question_view" class="card-body row">
          <h3>Please provide details on Court Proceedings by District:</h3>
    <table cellpadding=0 celspecing=0 width="100%" id="addRowQ41" class="table table-bordered text-center">
        <thead> 
          <tr>
              
              <th>District</th>
              <!-- <th>Previous Cases</th> -->
              <th>Previous Cases</th>
              <th>Received Cases</th>
              <th>Total Cases</th>
              <th>Disposed Cases</th>
              <th>Transferred Cases</th>
              <th>Pending Cases</th>
              <th>Cases more than five year - old</th>
              <th>Action</th>
            </tr>
        </thead>
      <tbody>
        <?php if(isset($question_41_data->q41_data) && count($question_41_data->q41_data)>0){$i=1; ?>
        @foreach($question_41_data->q41_data as $q41)
        <tr class="q41QRow" id="q41row<?=$i?>">
              
                <td>
                  <select name="q41_district_id[]" id="" class="form-control">
                    <option>--Select District--</option>
                    @foreach($districs as $distric)
                    <option <?=(isset($q41) &&  !empty($q41) && $q41->location==$distric->id)? 'selected' : '' ;?> value="{{$distric->id}}">{{$distric->name}}</option>
                    @endforeach
                  </select>
                </td>
              
                  <td><input type="text" value="<?=isset($q41->previous_case)? $q41->previous_case:"";?>" name="previous_cases[]" id="" class="form-control"></td>
                  <td><input type="text" value="<?=isset($q41->received_case)?$q41->received_case:"";?>" name="received_cases[]" id="" class="form-control"></td>
                  <td><input type="text" value="<?=isset($q41->total_case)?$q41->total_case:"";?>" name="total_cases[]" id="" class="form-control"></td>
                  <td><input type="text" value="<?=isset($q41->disposed_case)?$q41->disposed_case:"";?>" name="disposed_cases[]" id="" class="form-control"></td>
                  <td><input type="text" value="<?=isset($q41->transferred_case)?$q41->transferred_case:"";?>" name="transferred_cases[]" id="" class="form-control"></td>
                  <td><input type="text" value="<?=isset($q41->pending_case)?$q41->pending_case:"";?>" name="pending_cases[]" id="" class="form-control"></td>
                  <td><input type="text" value="<?=isset($q41->cases_more_than_five_year_olds)?$q41->cases_more_than_five_year_olds:"";?>" name="cases_more_than_five_year_old[]" id="" class="form-control"></td>
              <td>
              <?php if($i==1) {  ?>
                <button id="addRowDatasQ41" type="button" class="btn btn-sm btn-primary">+</i></button>
                <?php }else { ?>
              <button type="button" name="remove" id="<?= $i;?>" class="btn btn-danger q41btn_remove cicle">-</button></td>
              <?php } ?>
              </td>
            
            </tr>
            <?php $i++; ?>
            @endforeach
        <?php }else { ?>
            <tr class="q41QRow">
              
                <td>
                  <select name="q41_district_id[]" id="" class="form-control">
                    <option>--Select District--</option>
                    @foreach($districs as $distric)
                    <option value="{{$distric->id}}">{{$distric->name}}</option>
                    @endforeach
                  </select>
                </td>
              
                  <td><input type="text" name="previous_cases[]" id="" class="form-control"></td>
                  <td><input type="text" name="received_cases[]" id="" class="form-control"></td>
                  <td><input type="text" name="total_cases[]" id="" class="form-control"></td>
                  <td><input type="text" name="disposed_cases[]" id="" class="form-control"></td>
                  <td><input type="text" name="transferred_cases[]" id="" class="form-control"></td>
                  <td><input type="text" name="pending_cases[]" id="" class="form-control"></td>
                  <td><input type="text" name="cases_more_than_five_year_old[]" id="" class="form-control"></td>
              <td><button id="addRowDatasQ41" type="button" class="btn btn-sm btn-primary">+</i></button></td>
            
            </tr>
          <?php } ?>



            </tbody>
          </table>
          <br>
          <p class="text-right">
            <button type="button" class="btn btn-success" id="temp-save-question41">Save</button>       
          </p>
        </div>
      </div>
    </div>
    @endif
<?php }
  ?>
    <script>
$(function(){
  var rowCount = 1;
  $("#addRowDatasQ41").click(function(){
    let rowCount =('.q41QRow').length+1;
    $("#addRowQ41").append(
      
    '<tr class="q41QRow" id="q41row'+rowCount+'">'+
    
    `<td>
        <select name="q41_district_id[]" id="" class="form-control">
          <option>--Select District--</option>
          @foreach($districs as $distric)
          <option value="{{$distric->id}}">{{$distric->name}}</option>
          @endforeach
        </select>
      </td>`+
      `<td><input type="text" name="previous_cases[]" id="" class="form-control"></td>
      <td><input type="text" name="received_cases[]" id="" class="form-control"></td>
      <td><input type="text" name="total_cases[]" id="" class="form-control"></td>
      <td><input type="text" name="disposed_cases[]" id="" class="form-control"></td>
      <td><input type="text" name="transferred_cases[]" id="" class="form-control"></td>
      <td><input type="text" name="pending_cases[]" id="" class="form-control"></td>
      <td><input type="text" name="cases_more_than_five_year_old[]" id="" class="form-control"></td>`+
      '<td><button type="button" name="remove" id="'+rowCount+'" class="btn btn-danger q41btn_remove cicle">-</button></td>'+

         
    '</tr>'
      
    )
  });
  $(document).on('click', '.q41btn_remove', function() {
        var button_id = $(this).attr('id');
        $('#q41row'+button_id+'').remove();
      });

  //Temporary Data save
  $(document).on("click",'#temp-save-question41',function() {
          var q41District = [],//district /location id
              q41prevCase=[], // previous cases
              q41revCase=[], // received cases
              q41totalCase=[], // total cases
              q41dispCase=[], // disposed cases
              q41transCase=[], //transferred cases
              q41pendingCase=[], //pending cases
              q41caseMore=[], // cases more than five year old
               q41_data=[];
              
              
              
               $('select[name="q41_district_id[]"]').each(function() {
              let districts ={
                location:$(this).val()
              }             
              q41District.push(districts);
           });
          $('input[name="previous_cases[]"]').each(function() {
          
              let previous_cases ={
                previous_case:$(this).val()
              }
              q41prevCase.push(previous_cases);
            
           
          });
          $('input[name="received_cases[]"]').each(function() {
              let received_cases ={
                received_case:$(this).val()
              }
              q41revCase.push(received_cases);
            
           
          });
          $('input[name="total_cases[]"]').each(function() {
              let total_cases ={
                total_case:$(this).val()
              }
              q41totalCase.push(total_cases);
            
           
          });
          $('input[name="disposed_cases[]"]').each(function() {
              let disposed_cases ={
                disposed_case:$(this).val()
              }
              q41dispCase.push(disposed_cases);
            
           
          });
          $('input[name="transferred_cases[]"]').each(function() {
              let transferred_cases ={
                transferred_case:$(this).val()
              }
              q41transCase.push(transferred_cases);
            
           
          });
          $('input[name="pending_cases[]"]').each(function() {
              let pending_cases ={
                pending_case:$(this).val()
              }
              q41pendingCase.push(pending_cases);
            
           
          });
          $('input[name="cases_more_than_five_year_old[]"]').each(function() {
              let cases_more_than_five_year_old ={
                cases_more_than_five_year_olds:$(this).val()
              }
              q41caseMore.push(cases_more_than_five_year_old);
            
           
          });
          
          
          if(q41District.length>0){
            jQuery.each(q41District, function(index, item) {
              let newObj = { 
                ...item, 
                previous_case:q41prevCase[index].previous_case,
                received_case:q41revCase[index].received_case,
                total_case:q41totalCase[index].total_case,
                disposed_case:q41dispCase[index].disposed_case,
                transferred_case:q41transCase[index].transferred_case,
                pending_case:q41pendingCase[index].pending_case,
                cases_more_than_five_year_olds:q41caseMore[index].cases_more_than_five_year_olds
              };
              // item[index]["jurisdict"]=jurisdictions[index].jurisdict
              q41_data.push(newObj)
            });
          }

          let new_data = {
            q41_data:q41_data
          }
          // console.log(new_data)
          $.ajax({    //create an ajax request to display.php
                  type: "POST",
                  data:{
                    "_token": "{{ csrf_token() }}",
                    'question41':new_data,
                    'question_no':'41',
                  },
                  url: "/superadmin/case/temp-save-question40to60",             
                  success: function(response){ 
                    if(response){
                      alert("Question 41 has been saved temporary")

                    }else{
                      alert("Not Saved")
                    }
                  }
          });
    });

 
})

</script>  