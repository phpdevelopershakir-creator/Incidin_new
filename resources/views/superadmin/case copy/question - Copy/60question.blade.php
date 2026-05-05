<?php
if($questiontitles[59]->status==0)
{

  ?>
@if(Auth::user()->can('60.question'))
<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">

      <h3 class="card-title">
          <span class="numbering">60</span>.
           @if (isset($questiontitles [59]))
         {{ $questiontitles[59]->title }}
         @endif
    </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <textarea class="form-control q60Input"   id="summernote" name="description_60" placeholder="This is some sample content." rows="3">

        
        <?=(isset($question_60_data->q60_data->summernote))?$question_60_data->q60_data->summernote:"";?>
      </textarea>
      


      <br/>
       <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question60">Save</button>       
        </p>
    </div>
   
  </div>
</div>

@endif
<?php }
  ?>


<script>
$(function(){
  $(document).on("click",'#temp-save-question60',function() {
    // let values =$("textarea#summernote").val();
    // console.log(values)
    var q60_data={}
      $('.q60Input').each(function() {
        Object.assign(q60_data,{[$(this).attr('id')]:$(this).val()})   
       });
      let new_data = {
        q60_data:q60_data
      }
      //  console.log(new_data)
    $.ajax({    //create an ajax request to display.php
            type: "POST",
            data:{
              "_token": "{{ csrf_token() }}",
              'q60_data':new_data,
              'question_no':'60',
            },
            url: "/superadmin/case/temp-save-question40to60",             
            success: function(response){ 
              if(response){
                alert("Question 60 has been saved temporary")

              }else{
                alert("Not Saved")
              }
            }
    }); 
   
  }); 
  $.ajax({    //create an ajax request to display.php
            type: "GET",
            url: "/superadmin/case/get-temp-60-Question",             
            success: function(response){ 
                 $("textarea#summernote").val(response);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) { 
              alert("Status:Question 60 Data "); 
        }  
    }); 
}); 
// $("textarea#summernote").val("response");
</script>