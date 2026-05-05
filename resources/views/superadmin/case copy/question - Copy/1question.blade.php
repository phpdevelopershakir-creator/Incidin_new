
   
<?php
if($questiontitles[0]->status==0)
{

  ?>
@if(Auth::user()->can('1.question'))
<style>
.visibility
{
  display: none;
}
</style>


<div class="col-md-12 question1">
    <div class="card card-outline collapsed-card">
      <div class="card-header">


        <h3 class="card-title">
          <span class="numbering">1</span>.
           
         {{ $questiontitles[0]->title }}

       
         
       </h3>
        

    


        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
      
    <div class="card-body">
      <div class="icheck-primary">
             <?php if(isset($question_1_data->q1_checked_value)) { ?>

            <input 
            type="radio" 
            id="radioOne1" 
            class="trafficking_location_status" 
            name="is_trafficking_location_q1" 
            <?=(isset($question_1_data->q1_checked_value)   && $question_1_data->q1_checked_value=='1') ? 'checked' : '' ;?>  
            value="1">
            <?php }else { ?>
           
            <input type="radio" id="radioOne1" class="trafficking_location_status" name="is_trafficking_location_q1" checked  value="1">
            <?php } ?>    
            
            <label for="radioOne1">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input 
            type="radio" 
            id="radioOne2"  
            class="trafficking_location_status" 
            name="is_trafficking_location_q1"  
            <?=(isset($question_1_data->q1_checked_value)   && $question_1_data->q1_checked_value=='0') ? 'checked' : '' ;?>  

            value="0">
            <label for="radioOne2">
              No
            </label>
          </div>
          <div id ="1_question_view" class="<?=(isset($question_1_data->q1_checked_value)   && ($question_1_data->q1_checked_value=='0')) ? 'visibility' : '' ;?>">
        <table class="table table-bordered" style="border: 0;">
          <thead>
            <tr>
              <th align="center">New form of Trafficking</th>
              <th align="center">Type</th>
              <th align="center">Location</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td>New form # 1</td>
              <input type="hidden" name="trafficking_form_no[]" value="1">
              <td><select name="q1_type_id[]" id="q1_new_from_1"  class="form-control q1Input ">
              <option value="0">Choose an Item</option>
                 @foreach   ($types as $key => $item)
                 <option  <?=(isset($question_1_data->q1_data->q1_new_from_1) && $question_1_data->q1_data->q1_new_from_1==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                 @endforeach
                </select><br>
                  <input  
                  type="input"  
                         
                  id="q1_trafficking_other_specify1" 
                  name="q1_trafficking_other_specify[]" 
                  class="form-control q1Input <?= (isset($question_1_data->q1_data->q1_new_from_1) && $question_1_data->q1_data->q1_new_from_1=='7') ? '' :'otherSpecify' ?>"
                  value="<?=(isset($question_1_data->q1_data->q1_trafficking_other_specify1)) ? $question_1_data->q1_data->q1_trafficking_other_specify1:'' ?>"
                  placeholder="Other (Specify)">
                
              </td>
              <td>
                <select name="q1_location_id[]" id="q1Location1" class="form-control q1Input">
                <option value="" disabled selected>---Select Location--</option>  
                @foreach ($locations as $key => $item)
                  <option  <?=(isset($question_1_data->q1_data->q1Location1) && $question_1_data->q1_data->q1Location1==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                 @endforeach
                  </select>
              </td>

            </tr>
            <tr>
              <td>New form # 2</td>
              <input type="hidden" name="trafficking_form_no[]" value="2">
              <td><select name="q1_type_id[]" id="q1_new_from_2"  class="form-control q1Input">
              <option value="0">Choose an Item</option>
                 @foreach   ($types as $key => $item)
                 <option  <?=(isset($question_1_data->q1_data->q1_new_from_2) && $question_1_data->q1_data->q1_new_from_2==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                 @endforeach
                </select><br>
                  <input  
                  type="input" 
                  id="q1_trafficking_other_specify2" 
                  name="q1_trafficking_other_specify[]" 
                  class="form-control q1Input <?= (isset($question_1_data->q1_data->q1_new_from_2) && $question_1_data->q1_data->q1_new_from_2=='7') ? '' :'otherSpecify' ?>"
                  value="<?=(isset($question_1_data->q1_data->q1_trafficking_other_specify2)) ? $question_1_data->q1_data->q1_trafficking_other_specify2:'' ?>"
                  placeholder="Other (Specify)">
                
              </td>
              <td>
                <select name="q1_location_id[]" id="q1Location2"  class="form-control q1Input">
                <option value="" disabled selected>---Select Location--</option>  
                @foreach ($locations as $key => $item)
                  <option  <?=(isset($question_1_data->q1_data->q1Location2) && $question_1_data->q1_data->q1Location2==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                 @endforeach
                  </select>
              </td>

            </tr>
            <tr>
              <td>New form # 3</td>
              <input type="hidden" name="trafficking_form_no[]" value="3">
              <td><select name="q1_type_id[]" id="q1_new_from_3" class="form-control q1Input ">
              <option value="0">Choose an Item</option>
                 @foreach   ($types as $key => $item)
                 <option  <?=(isset($question_1_data->q1_data->q1_new_from_3) && $question_1_data->q1_data->q1_new_from_3==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                 @endforeach
                </select><br>
                  <input  
                  type="input" 
                  id="q1_trafficking_other_specify3" 
                  name="q1_trafficking_other_specify[]" 
                  class="form-control q1Input <?= (isset($question_1_data->q1_data->q1_new_from_3) && $question_1_data->q1_data->q1_new_from_3=='7') ? '' :'otherSpecify' ?>"
                  value="<?=(isset($question_1_data->q1_data->q1_trafficking_other_specify3)) ? $question_1_data->q1_data->q1_trafficking_other_specify3:'' ?>"
                  placeholder="Other (Specify)">
                
              </td>
              <td>
                <select name="q1_location_id[]" id="q1Location3"  class="form-control q1Input">
                <option value="" disabled selected>---Select Location--</option>  
                @foreach ($locations as $key => $item)
                  <option  <?=(isset($question_1_data->q1_data->q1Location3) && $question_1_data->q1_data->q1Location3==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                 @endforeach
                  </select>
              </td>

            </tr>
            <tr>
              <td>New form # 4</td>
              <input type="hidden" name="trafficking_form_no[]" value="4">
              <td><select name="q1_type_id[]" id="q1_new_from_4" class="form-control q1Input">
              <option value="0">Choose an Item</option>
                 @foreach   ($types as $key => $item)
                 <option  <?=(isset($question_1_data->q1_data->q1_new_from_4) && $question_1_data->q1_data->q1_new_from_4==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                 @endforeach
                </select><br>
                  <input 
                  type="input" 
                  id="q1_trafficking_other_specify4" 
                  name="q1_trafficking_other_specify[]" 
                  class="form-control q1Input <?= (isset($question_1_data->q1_data->q1_new_from_4) && $question_1_data->q1_data->q1_new_from_4=='7') ? '' :'otherSpecify' ?>"
                  value="<?=(isset($question_1_data->q1_data->q1_trafficking_other_specify4)) ? $question_1_data->q1_data->q1_trafficking_other_specify4:'' ?>"
                  placeholder="Other (Specify)">
                
              </td>
              <td>
                <select name="q1_location_id[]" id="q1Location4"  class="form-control q1Input">
                <option value="" disabled selected>---Select Location--</option>  
                @foreach ($locations as $key => $item)
                  <option  <?=(isset($question_1_data->q1_data->q1Location4) && $question_1_data->q1_data->q1Location4==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                 @endforeach
                  </select>
              </td>

            </tr>
            <tr>
              <td>New form # 5</td>
              <input type="hidden" name="trafficking_form_no[]" value="5">
              <td><select name="q1_type_id[]" id="q1_new_from_5" class="form-control q1Input">
              <option value="0">Choose an Item</option>
                 @foreach   ($types as $key => $item)
                 <option  <?=(isset($question_1_data->q1_data->q1_new_from_5) && $question_1_data->q1_data->q1_new_from_5==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                 @endforeach
                </select><br>
                  <input  
                  type="input"
                  id="q1_trafficking_other_specify5" 
                  name="q1_trafficking_other_specify[]" 
                  class="form-control q1Input <?= (isset($question_1_data->q1_data->q1_new_from_5) && $question_1_data->q1_data->q1_new_from_5=='7') ? '' :'otherSpecify' ?>"
                  value="<?=(isset($question_1_data->q1_data->q1_trafficking_other_specify5)) ? $question_1_data->q1_data->q1_trafficking_other_specify5:'' ?>"
                  placeholder="Other (Specify)">
                
              </td>
              <td>
                <select name="q1_location_id[]" id="q1Location5" class="form-control q1Input">
                <option value="" disabled selected>---Select Location--</option>  
                @foreach ($locations as $key => $item)
                  <option  <?=(isset($question_1_data->q1_data->q1Location5) && $question_1_data->q1_data->q1Location5==$key)? 'selected' : '' ;?>  value="{{ $key }}">{{$item}}</option>
                 @endforeach
                  </select>
              </td>

            </tr>


          </tbody>

        </table>
        
       </div>


       <br>
        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question1">Save</button>       
        </p>


      </div>
    </div>
  </div>
  @endif
<?php }
  ?>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>

<script>
      $(function(){
        $(".trafficking_location_status").on("click",function(){
          
            var statusvalue = $("input[name='is_trafficking_location_q1']:checked").val();
            if(statusvalue == '1'){
              $('.question1').find('#1_question_view').show()
            }else{
              $('.question1').find('#1_question_view').hide()
            }
        });
    });
  
    //Question 1 save temporary by Onlick Event
    $(document).on("click",'#temp-save-question1',function() {
    
    let yes_no_value=$("input[type='radio'][name='is_trafficking_location_q1']:checked").val()
    var q1_data={}
    if(yes_no_value==1){
      $('.q1Input').each(function() {
        Object.assign(q1_data,{[$(this).attr('id')]:$(this).val()}) 

      });
    }
     let new_data={
        q1_data:q1_data,
        q1_checked_value:yes_no_value,
      } 
      // console.log(new_data)
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
                'question1':new_data,
                'question_no':'1',
              },
              url: "/superadmin/case/temp-save-question",             
              success: function(response){ 
                if(response){
                  alert("Question 1 has been saved temporary")
                  
                }else{
                  alert("Not Saved")
                }
              }
      });
    });  
              
    $('#q1_new_from_1').on("change",function(){
          // alert($(this).val())
          $('.question1').find('#q1_trafficking_other_specify1').hide()
          $('.question1').find('#q1_trafficking_other_specify1').val("")
         
          if($(this).val()==='7'){
            $('.question1').find('#q1_trafficking_other_specify1').show()
          }

        });
        $('#q1_new_from_2').on("change",function(){
          // alert($(this).val())
          $('.question1').find('#q1_trafficking_other_specify2').hide()
          $('.question1').find('#q1_trafficking_other_specify2').val("")
          if($(this).val()==='7'){
            $('.question1').find('#q1_trafficking_other_specify2').show()
          }

        });
        $('#q1_new_from_3').on("change",function(){
          // alert($(this).val())
          $('.question1').find('#q1_trafficking_other_specify3').hide()
          $('.question1').find('#q1_trafficking_other_specify3').val("")
          if($(this).val()==='7'){
            $('.question1').find('#q1_trafficking_other_specify3').show()
          }

        });
        $('#q1_new_from_4').on("change",function(){
          // alert($(this).val())
          $('.question1').find('#q1_trafficking_other_specify4').hide()
          $('.question1').find('#q1_trafficking_other_specify4').val("")
          if($(this).val()==='7'){
            $('.question1').find('#q1_trafficking_other_specify4').show()
          }

        });
        $('#q1_new_from_5').on("change",function(){
          // alert($(this).val())
          $('.question1').find('#q1_trafficking_other_specify5').hide()
          $('.question1').find('#q1_trafficking_other_specify5').val("")
          if($(this).val()==='7'){
            $('.question1').find('#q1_trafficking_other_specify5').show()
          }

        });
</script>