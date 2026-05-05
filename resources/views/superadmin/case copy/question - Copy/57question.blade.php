<?php
if($questiontitles[56]->status==0)
{

  ?>
@if(Auth::user()->can('57.question'))
<br> <br>
<?php 
$area_of_research=[ 
  1 => "Area of Research",
  2 => "Prevention",
  3 => "Protection",
  4 => "Prosecution",
  5 => "Participation",
  6 => "Midterm Evaluation of NPA", 
  7 => "End evaluation of NPA", 
  8 => "Best practice",  
  9 => "Baseline", 
  10 => "Annual Countrhy TIP Report", 
  11 => "MRM" 
];
$status=[ 
  1 => "Completed",
  2 => "Draft",
  3 => "On-Going",
  4 => "Approved Plan",
  5 => "Proposed"
];

?>
<h4 style="padding-Left:10px; font-weight:bold">MONITORING AND EVALUATION</h4>

 <div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
          <span class="numbering">57</span>.
           @if (isset($questiontitles [56]))
         {{ $questiontitles[56]->title }}
         @endif
      </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-bordered table-white">
        <thead>
          <tr>
           
            <th scope="col">Research title</th>
            <th scope="col">Area of Research</th>
            <th scope="col">Status</th>
            <th scope="col">Research Location</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            
            <td> <input type="text" value="<?= isset($question_57_data->q57_data->research_title1) ? $question_57_data->q57_data->research_title1 :''   ?>" name="research_title[]" id="research_title1" class="form-control q57Input">  </td>
            <td>
               <select name="q57_area_research[]" id="q57_area1" class="form-control q57Input">
               <option  value="0" >Choose an Item </option>
                @foreach ($area_of_research as $key => $reasearchData)
                  <option <?= isset($question_57_data->q57_data->q57_area1) && $question_57_data->q57_data->q57_area1==$key ? 'selected' :''   ?> value="{{ $key }}">{{ $reasearchData }}</option>
                  @endforeach
              </select> 
            </td>
            <td>
              <select name="q57_status_id[]" id="q57_status1" class="form-control q57Input">
               <option value="0">Select Status</option>
                  @foreach ($status as $key => $sta_data)
                  <option <?= isset($question_57_data->q57_data->q57_status1) && $question_57_data->q57_data->q57_status1==$key ? 'selected' :''   ?> value="{{ $key }}">{{ $sta_data }}</option>
                  @endforeach
             </select> 
           </td>
            <td> 
              <select name="q57_research_location_id[]" id="q57_reaserch_loc_1" class="form-control q57Input">
                @foreach ($divisions as $division)
                <option <?= isset($question_57_data->q57_data->q57_reaserch_loc_1) && $question_57_data->q57_data->q57_reaserch_loc_1==$division->id ? 'selected' :''   ?> value="{{ $division->id }}">{{ $division->name }}</option>
                @endforeach
            
              
              </select>   
            </td>
          </tr>
          <tr>
           
            <td> 
            <input type="text" value="<?= isset($question_57_data->q57_data->research_title2) ? $question_57_data->q57_data->research_title2 :''   ?>" name="research_title[]" id="research_title2" class="form-control q57Input"> 
            </td>
            <td>
              <select name="q57_area_research[]" id="q57_area2" class="form-control q57Input">
              <option  value="0" >Choose an Item </option>
              @foreach ($area_of_research as $key => $reasearchData)
                <option  <?= isset($question_57_data->q57_data->q57_area2) && $question_57_data->q57_data->q57_area2==$key ? 'selected' :''   ?> value="{{ $key }}">{{ $reasearchData }}</option>
                @endforeach
             </select> 
           </td>
           <td>
            <select name="q57_status_id[]" id="q57_status2" class="form-control q57Input">
             <option value="0">Select Status</option>
               @foreach ($status as $key => $sta_data)
                <option <?= isset($question_57_data->q57_data->q57_status2) && $question_57_data->q57_data->q57_status2==$key ? 'selected' :''   ?> value="{{ $key }}">{{ $sta_data }}</option>
                @endforeach
           </select> 
         </td>
            <td> 
              <select name="q57_research_location_id[]" id="q57_reaserch_loc_2" class="form-control q57Input">
                @foreach ($divisions as $division)
                <option <?= isset($question_57_data->q57_data->q57_reaserch_loc_2) && $question_57_data->q57_data->q57_reaserch_loc_2==$division->id ? 'selected' :''   ?> value="{{ $division->id }}">{{ $division->name }}</option>
                @endforeach
            
              
              </select>
            </td>
          </tr>
        




        </tbody>
      </table>
      <br/>
       <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question57">Save</button>       
        </p>
    </div>
  </div>
</div>
@endif

<?php }
  ?>
<script>

$(function(){
  $(document).on("click",'#temp-save-question57',function() {

    var q57_data={}
    $('.q57Input').each(function() {
      Object.assign(q57_data,{[$(this).attr('id')]:$(this).val()})   
     });
     let new_data ={
      q57_data:q57_data
     }
    //  console.log(new_data)
    $.ajax({    //create an ajax request to display.php
            type: "POST",
            data:{
              "_token": "{{ csrf_token() }}",
              'q57_data':new_data,
              'question_no':'57',
            },
            url: "/superadmin/case/temp-save-question40to60",             
            success: function(response){ 
              alert("Question 57 has been saved temporary")
            }
    });
  }); 
}); 

</script>