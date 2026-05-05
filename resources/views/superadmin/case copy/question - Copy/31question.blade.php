<?php
if($questiontitles[30]->status==0)
{

  ?>
@if(Auth::user()->can('31.question'))
<?php 
$implementer_traffick = [
  1 =>'MoWCA', 
  2 =>'MoHA', 
  3 =>'MoSW', 
  4 =>'MoEWOE',   
  5 =>'MoLJPA',   
  6 =>'INCIDIN Bangladesh',
  7 =>'Ask',
  8 =>'BNWLA',
  9 =>'DAM'
];
$internal_traffick = [
  1 =>'Government run/ free', 
  2 =>'Government supported', 
  3 =>'NGO RUN', 
  4 =>'Others Specify'
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
<div class="col-md-12 question31">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
          <span class="numbering">31</span>.
           @if (isset($questiontitles [30]))
         {{ $questiontitles[30]->title }}
         @endif
      </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
  
    <div class="card-body">
      <div class="icheck-primary">
        <?php if(isset($question_31_data_one->q31_checked_value)){?>
        <input 
        type="radio" 
        id="radioThirty1" 
        class="thirty_one_status" 
        name="is_foreign_victims_legally_entitled_q31" 
        <?=(isset($question_31_data_one->q31_checked_value)   && $question_31_data_one->q31_checked_value=='1') ? 'checked' : '' ;?>  
        value="1">
        <?php } else { ?>
        <input type="radio" id="radioThirty1" class="thirty_one_status" name="is_foreign_victims_legally_entitled_q31" checked value="1">
          <?php } ?>
        <label for="radioThirty1">
          Yes
        </label>
      </div>
      <div class="icheck-primary">
        <input 
        type="radio" 
        id="radioThirty2" 
        class="thirty_one_status" 
        name="is_foreign_victims_legally_entitled_q31" 
        <?=(isset($question_31_data_one->q31_checked_value)   && $question_31_data_one->q31_checked_value=='0') ? 'checked' : '' ;?> 
        value="0">
        <label for="radioThirty2">
          No
        </label>
      </div>

      <div class="icheck-primary input-group mb-3">
        <input 
        type="radio" 
        id="radioThirty3" 
        class="thirty_one_status" 
        name="is_foreign_victims_legally_entitled_q31" 
        <?=(isset($question_31_data_one->q31_checked_value)   && $question_31_data_one->q31_checked_value=='2') ? 'checked' : '' ;?> 
        value="2">
        <label for="radioThirty3">
          Others
        </label><span class=" col-md-6 mt--4 <?=(isset($question_31_data_one->q31_checked_value)   && ($question_31_data_one->q31_checked_value=='2')) ? '' : 'othersText' ;?>" style="margin-top:-8px;">
        <input 
        type="text" 
        id="q31others"  
        placeholder="Others "  
        class="form-control " 
        value="<?=(isset($question_31_data_one->others)) ? $question_31_data_one->others : '' ;?>" 
        name="foreign_victims_legally_entitled_others_id_q31"></span>
      </div>
  
  <div id="31_question_view" class="<?=(isset($question_31_data_one->q31_checked_value)   && ($question_31_data_one->q31_checked_value=='2' || $question_31_data_one->q31_checked_value=='0')) ? 'visibility' : '' ;?>">
    <div class="card-body" >
        <table id="addRowQ31Internal" class="table table-bordered text-center">
            <thead class="">
                <tr>
                  <th rowspan="2" style="text-align: center; margin: bottom 45%;">Types of Hotlines</th>
                  <th rowspan="2">Implementer</th>
                  <th rowspan="2">Hotline number</th>
                  <th colspan="8">Coverage</th>
                </tr>
                <tr>
                  <th>Men</th>
                  <th>Women</th>
                  <th>3rd Gender</th>
                  <th>Boy</th>
                  <th>Girls</th>
                  <th>Total</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td colspan="10" text-align:"center">Internal Trafficking</td>
                 <input type="hidden" name="q31_type[]" value="1">


                </tr>

                <?php if(isset($question_31_data_one->q31_data_one) && count($question_31_data_one->q31_data_one)>0){ $i=1; ?>
                  @foreach($question_31_data_one->q31_data_one  as $q31A)
                  <tr class="q31AQrow" id="q31ArowOne<?=$i?>">
                  <td><select name="q31_internal_traffick_type_of_hotlines[]" id="q31_internal_traffick_type_of_hotlines" class="form-control q31InternalTraffickA">
                    @foreach ($internal_traffick as $key => $item)
                      <option <?=(isset($q31A)  &&  !empty($q31A) && $q31A->type_hotline==$key) ? 'selected' : '' ;?> value="{{ $key }}">{{$item}}</option>
                      @endforeach
                    </select><br>
                  <input  type="input" id="q31_internal_traffick_others_specify" value="<?=(isset($q31A->other_one)) ? $q31A->other_one : '' ;?>" name="foreign_victims_legally_entitled_others_q31[]" class="form-control q31OtherA <?=(isset($q31A->type_hotline)  &&   $q31A->type_hotline==4) ? '' : 'otherSpecify' ;?>" placeholder="Other (Specify)">

                  </td>

                    <td><select name="q31_implementer_traffick[]" id="" class="form-control q31ImplementTraffickA">
                      @foreach ($implementer_traffick as $key => $item)
                      <option <?=(isset($q31A)  &&  !empty($q31A) && $q31A->implementer_one==$key) ? 'selected' : '' ;?> value="{{ $key }}">{{$item}}</option>
                      @endforeach
                    </select></td>



                  <td><input type="text" value="<?=(isset($q31A->hotline_num_one)) ? $q31A->hotline_num_one : '' ;?>" name="q31_traffick_hotline_number[]" id="" class="form-control q31HotlineNumA" placeholder="Hotline number"></td>
                  <td><input type="number" value="<?=(isset($q31A->men_one)) ? $q31A->men_one : '' ;?>" name="q31_traffick_men[]" id="q31_internal_traffick_men_<?= $i;?>" class="form-control question31RowMen question31Col1 q31_internal_traffick_men q31MenA" for="<?= $i;?>"></td>
                  <td><input type="number" value="<?=(isset($q31A->female_one)) ? $q31A->female_one : '' ;?>" name="q31_traffick_women[]" id="q31_internal_traffick_women_<?= $i;?>" class="form-control question31RowWomen question31Col1 q31_internal_traffick_women q31WomenA" for="<?= $i;?>"></td>
                  <td><input type="number" value="<?=(isset($q31A->third_gender_one)) ? $q31A->third_gender_one : '' ;?>" name="q31_traffick_third_gender[]" id="q31_internal_traffick_third_gender_<?= $i;?>" class="form-control question31Row3rdGender question31Col1 q31_internal_traffick_third_gender q313rdGA" for="<?= $i;?>"></td>
                  <td><input type="number" value="<?=(isset($q31A->boy_one)) ? $q31A->boy_one : '' ;?>" name="q31_traffick_boys[]" id="q31_internal_traffick_boys_<?= $i;?>" class="form-control  question31RowBoys question31Col1 q31_internal_traffick_boys q31BoyA" for="<?= $i;?>"></td>
                  <td><input type="number" value="<?=(isset($q31A->girl_one)) ? $q31A->girl_one : '' ;?>" name="q31_traffick_girls[]" id="q31_internal_traffick_girls_<?= $i;?>" class="form-control question31RowGirls question31Col1 q31_internal_traffick_girls q31GirlA" for="<?= $i;?>"></td>
                  <td><input type="text" value="<?=(isset($q31A->total_one)) ? $q31A->total_one : '' ;?>" name="q31_traffick_total[]" id="q31_internal_traffick_total_<?= $i;?>" class="form-control q31Total q31_internal_traffick_total q31TotalA" readonly="true" for="<?= $i;?>"> </td>
                
                  <td>
                  <?php if($i==1) {  ?>

                    <button id="addRowDatasQ31Internal" type="button" class="btn btn-primary">+</i></button>
                    <?php }else { ?>
                  <button type="button" name="remove" id="<?=$i;?>" class="btn btn-danger q31Abtn_remove_intern cicle">-</button></td>
                
                  <?php } ?>
                  </td>
                </tr>
                <?php $i++; ?>
                  @endforeach
                <?php }else { ?>
                <tr class="q31AQrow">
                  <td><select name="q31_internal_traffick_type_of_hotlines[]" id="q31_internal_traffick_type_of_hotlines" class="form-control q31InternalTraffickA">
                    @foreach ($internal_traffick as $key => $item)
                      <option <?=(isset($q31)  &&  !empty($q31) && $q31->internal_traff==$key) ? 'selected' : '' ;?> value="{{ $key }}">{{$item}}</option>
                      @endforeach
                    </select><br>
                  <input  type="input" id="q31_internal_traffick_others_specify" name="foreign_victims_legally_entitled_others_q31[]" class="form-control otherSpecify q31OtherA" placeholder="Other (Specify)">

                  </td>

                    <td><select name="q31_implementer_traffick[]" id="" class="form-control q31ImplementTraffickA">
                      @foreach ($implementer_traffick as $key => $item)
                      <option <?=(isset($q31)  &&  !empty($q31) && $q31->implementer_traff==$key) ? 'selected' : '' ;?> value="{{ $key }}">{{$item}}</option>
                      @endforeach
                    </select></td>



                  <td><input type="text" name="q31_traffick_hotline_number[]" id="" class="form-control q31HotlineNumA" placeholder="Hotline number"></td>
                  <td><input type="number" name="q31_traffick_men[]" id="q31_internal_traffick_men_1" class="form-control question31RowMen question31Col1 q31_internal_traffick_men q31MenA" for="1"></td>
                  <td><input type="number" name="q31_traffick_women[]" id="q31_internal_traffick_women_1" class="form-control question31RowWomen question31Col1 q31_internal_traffick_women q31WomenA" for="1"></td>
                  <td><input type="number" name="q31_traffick_third_gender[]" id="q31_internal_traffick_third_gender_1" class="form-control question31Row3rdGender question31Col1 q31_internal_traffick_third_gender q313rdGA" for="1"></td>
                  <td><input type="number" name="q31_traffick_boys[]" id="q31_internal_traffick_boys_1" class="form-control  question31RowBoys question31Col1 q31_internal_traffick_boys q31BoyA" for="1"></td>
                  <td><input type="number" name="q31_traffick_girls[]" id="q31_internal_traffick_girls_1" class="form-control question31RowGirls question31Col1 q31_internal_traffick_girls q31GirlA" for="1"></td>
                  <td><input type="text" name="q31_traffick_total[]" id="q31_internal_traffick_total_1" class="form-control q31Total q31_internal_traffick_total q31TotalA" readonly="true" for="1"> </td>
                
                  <td>
                    <button id="addRowDatasQ31Internal" type="button" class="btn btn-primary">+</i></button>
                  </td>
                </tr>
                <?php } ?>
  
              </tbody>
          </table>
          <br>
          <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question31A">Save</button>       
        </p>
    </div>
        
    
          
        

         
    <div class="card-body">
        <table id="addRowQ31International" class="table table-bordered text-center">
          <thead>
              <tr>
                <th rowspan="2" style="text-align: center; margin: bottom 45%;">Types of Hotlines</th>
                <th rowspan="2">Implementer</th>
                <th rowspan="2">Hotline number</th>
                <th colspan="8">Coverage</th>
              </tr>
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>3rd Gender</th>
                <th>Boy</th>
                <th>Girls</th>
                <th>Total</th>
                <th>Action</th>
              </tr>
          </thead>
          <tbody>
          
              <tr>
                <td colspan="10">International Trafficking</td>
                <input type="hidden" name="q31_type[]" value="2">
              </tr>
              <?php if(isset($question_31_data_two->q31_data_two) && count($question_31_data_two->q31_data_two)>0){ $i=1; ?>
                @foreach($question_31_data_two->q31_data_two  as $q31B)
              <tr class="q31BQrow" id="q31BrowTwo<?=$i?>">
            
                <td><select name="q31_traffick_type_of_hotlines[]" id="q31_international_traffick_type_of_hotlines" class="form-control q31InternalTraffickB">
                      @foreach ($internal_traffick as $key => $item)
                      <option <?=(isset($q31B)  &&  !empty($q31B) && $q31B->traffick_type==$key) ? 'selected' : '' ;?> value="{{ $key }}">{{$item}}</option>
                      @endforeach
                  </select><br>
                  <input  type="input" id="q31_international_traffick_others_specify" value="<?=(isset($q31B->other_two)) ? $q31B->other_two : '' ;?>" name="q31_traffick_others_specify[]" class="form-control q31OtherB <?=(isset($q31B->traffick_type)  &&   $q31B->traffick_type==4) ? '' : 'otherSpecify' ;?>" placeholder="Other (Specify)">

                </td>
                  <td><select name="q31_implementer_traffick[]" id="" class="form-control q31ImplementTraffickB">
                      @foreach ($implementer_traffick as $key => $item)
                      <option <?=(isset($q31B)  &&  !empty($q31B) && $q31B->implementer_two==$key) ? 'selected' : '' ;?> value="{{ $key }}">{{$item}}</option>
                      @endforeach
                        
                        </select></td>
                <td><input type="text" value="<?=(isset($q31B->hotline_num_two)) ? $q31B->hotline_num_two : '' ;?>" name="q31_traffick_hotline_number[]" id="" class="form-control q31HotlineNumB" placeholder="Hotline number"></td>
                <td><input name="q31_traffick_men[]" value="<?=(isset($q31B->men_two)) ? $q31B->men_two : '' ;?>" type="number" id="q31_international_traffick_men_<?= $i;?>" class="form-control internationalRowMen internationalTrack1 q31_international_traffick_men q31MenB" for="<?= $i;?>"></td>
                <td><input type="number" value="<?=(isset($q31B->female_two)) ? $q31B->female_two : '' ;?>" name="q31_traffick_women[]" id="q31_international_traffick_women_<?= $i;?>" class="form-control internationalRowWomen internationalTrack1 q31_international_traffick_women q31WomenB" for="<?= $i;?>"></td>
                <td><input type="number" value="<?=(isset($q31B->third_gender_two)) ? $q31B->third_gender_two : '' ;?>" name="q31_traffick_third_gender[]" id="q31_international_traffick_third_gender_<?= $i;?>" class="form-control internationalRow3rdGender internationalTrack1 q31_international_traffick_third_gender q313rdGB" for="<?= $i;?>"></td>
                <td><input type="number" value="<?=(isset($q31B->boy_two)) ? $q31B->boy_two : '' ;?>" name="q31_traffick_boys[]" id="q31_international_traffick_boys_<?= $i;?>" class="form-control  internationalRowBoys internationalTrack1 q31_international_traffick_boys q31BoyB" for="<?= $i;?>"></td>
                <td><input type="number" value="<?=(isset($q31B->girl_two)) ? $q31B->girl_two : '' ;?>" name="q31_traffick_girls[]" id="q31_international_traffick_girls_<?= $i;?>" class="form-control internationalRowGirls internationalTrack1 q31_international_traffick_girls q31GirlB" for="<?= $i;?>"></td>
                <td><input type="text" value="<?=(isset($q31B->total_two)) ? $q31B->total_two : '' ;?>" name="q31_traffick_total[]" id="q31_international_traffick_total_<?= $i;?>" class="form-control q31Total2 combineTotal q31_international_traffick_total q31TotalB" readonly="true" for="<?= $i;?>"> </td>
                <td>
                <?php if($i==1) { ?>
                  <button id="addRowDatasQ31International" type="button" class="btn btn-primary">+</i></button>
                  <?php } else { ?>
                  <button type="button" name="remove" id="<?= $i;?>" class="btn btn-danger q31Bbtn_remove_international cicle">-</button>
                   <?php } ?> 
                </td>
              
              </tr>


              <?php $i++; ?>
                @endforeach
              <?php }else { ?>
              <!-- <tr class="q31BQrow">
                <td colspan="10">International Trafficking</td>
                <input type="hidden" name="q31_type[]" value="2">
              </tr> -->
              <tr class="q31BQrow">
                <td><select name="q31_traffick_type_of_hotlines[]" id="q31_international_traffick_type_of_hotlines" class="form-control q31InternalTraffickB">
                  <option value="1">Government run/free</option>
                  <option value="2">Government supported</option>
                  <option value="3">NGO run</option>
                  <option value="4">Others (Specify)</option>
                  </select><br>
                  <input  type="input" id="q31_international_traffick_others_specify" name="q31_traffick_others_specify[]" class="form-control q31OtherB otherSpecify " placeholder="Other (Specify)">

                </td>
                  <td><select name="q31_implementer_traffick[]" id="" class="form-control q31ImplementTraffickB">
                        <option value="1">MoWCA</option>
                        <option value="2">MoHA</option>
                        <option value="3">MoSW</option>
                        <option value="4">MoEWOE</option>
                        <option value="5">MoLJPA</option>
                        <option value="6">INCIDIN Bangladesh</option>
                        <option value="7">Ask</option>
                        <option value="8">BNWLA</option>
                        <option value="9">DAM</option>
                        </select></td>
                <td><input type="text" name="q31_traffick_hotline_number[]" id="" class="form-control q31HotlineNumB" placeholder="Hotline number"></td>
                <td><input name="q31_traffick_men[]" type="number" id="q31_international_traffick_men_1" class="form-control internationalRowMen internationalTrack1 q31_international_traffick_men q31MenB" for="1"></td>
                <td><input type="number" name="q31_traffick_women[]" id="q31_international_traffick_women_1" class="form-control internationalRowWomen internationalTrack1 q31_international_traffick_women q31WomenB" for="1"></td>
                <td><input type="number" name="q31_traffick_third_gender[]" id="q31_international_traffick_third_gender_1" class="form-control internationalRow3rdGender internationalTrack1 q31_international_traffick_third_gender q313rdGB" for="1"></td>
                <td><input type="number" name="q31_traffick_boys[]" id="q31_international_traffick_boys_1" class="form-control  internationalRowBoys internationalTrack1 q31_international_traffick_boys q31BoyB" for="1"></td>
                <td><input type="number" name="q31_traffick_girls[]" id="q31_international_traffick_girls_1" class="form-control internationalRowGirls internationalTrack1 q31_international_traffick_girls q31GirlB" for="1"></td>
                <td><input type="text" name="q31_traffick_total[]" id="q31_international_traffick_total_1" class="form-control q31Total2 combineTotal q31_international_traffick_total q31TotalB" readonly="true" for="1"> </td>
                <td><button id="addRowDatasQ31International" type="button" class="btn btn-primary">+</i></button></td>
              
              </tr>
              <?php } ?> 
            
            </tbody>
        </table>
        <br>
        <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question31B">Save</button>       
        </p>
      </div>
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
    $(document).ready(function(){
      $(".thirty_one_status").on("click",function(){
            var statusvalue = $("input[name='is_foreign_victims_legally_entitled_q31']:checked").val();
            //console.log(statusvalue)
            $('.question31').find('.othersText').hide()
            $('.question31').find('#q31others').val('')
            if(statusvalue == '1'){
              $('.question31').find('#31_question_view').show()
              $('.question31').find('span').addClass('othersText')
            }else if (statusvalue=='2'){
              $('.question31').find('#31_question_view').hide()
              $('.question31').find('span').removeClass('othersText')
              $('.question31').find('span').show()
          }else{
              $('.question31').find('#31_question_view').hide()
              $('.question31').find('span').addClass('othersText')

            }
        });
   
   
      //add row internal traffick
      // var rowCountOne = 1;
      $("#addRowDatasQ31Internal").click(function(){
            let rowCountOne =$('.q31AQrow').length+1;
            $("#addRowQ31Internal").append(
                `<tr class="q31AQrow" id="q31ArowOne${rowCountOne}">`+
                `
                <td><select name="q31_traffick_type_of_hotlines[]" data-id="${rowCountOne}" class="form-control q31_internal_traffick_type_of_hotlines q31InternalTraffickA">
                    <option value="1">Government run/ free</option>
                    <option value="2">Government supported</option>
                    <option value="3">NGO RUN</option>
                    <option value="4">Others Specify</option>
                    </select><br>
                  <input  type="input" id="q31_internal_traffick_others_specify_${rowCountOne}" name="q31_traffick_others_specify[]" class="form-control otherSpecify q31OtherA" placeholder="Other (Specify)" for="${rowCountOne}">

                  </td>`+
                        
                    `<td><select name="q31_implementer_traffick[]" id="" class="form-control q31ImplementTraffickA">
                    <option value="1">MoWCA</option>
                    <option value="2">MoHA</option>
                    <option value="3">MoSW</option>
                    <option value="4">MoEWOE</option>
                    <option value="5">MoLJPA</option>
                    <option value="6">INCIDIN Bangladesh</option>
                    <option value="7">Ask</option>
                    <option value="8">BNWLA</option>
                    <option value="9">DAM</option>
                    </select></td>`+

                  `<input type="hidden" name="q31_type[]" value="1" class="form-control">`+
                  `<td><input type="text" name="q31_traffick_hotline_number[]" id="" class="form-control q31HotlineNumA" placeholder="Hotline number"></td>`+
                  `<td><input name="q31_traffick_men[]" type="number" id="q31_internal_traffick_men_${rowCountOne}" class="form-control question31RowMen question31Col1 q31_internal_traffick_men q31MenA" for="${rowCountOne}"></td>`+
                  `<td><input type="number" name="q31_traffick_women[]" id="q31_internal_traffick_women_${rowCountOne}" class="form-control question31RowWomen question31Col1 q31_internal_traffick_women q31WomenA" for="${rowCountOne}"></td>`+
                  `<td><input type="number" name="q31_traffick_third_gender[]" id="q31_internal_traffick_third_gender_${rowCountOne}" class="form-control question31Row3rdGender question31Col1 q31_internal_traffick_third_gender q313rdGA" for="${rowCountOne}"></td>`+
                  `<td><input type="number" name="q31_traffick_boys[]" id="q31_internal_traffick_boys_${rowCountOne}" class="form-control  question31RowBoys question31Col1 q31_internal_traffick_boys q31BoyA" for="${rowCountOne}"></td>`+
                  `<td><input type="number" name="q31_traffick_girls[]" id="q31_internal_traffick_girls_${rowCountOne}" class="form-control question31RowGirls question31Col1 q31_internal_traffick_girls q31GirlA" for="${rowCountOne}"></td>`+
                  `<td><input type="text" name="q31_traffick_total[]" id="q31_internal_traffick_total_${rowCountOne}" class="form-control q31Total q31_internal_traffick_total q31TotalA" readonly="true" for="${rowCountOne}"> </td>`+
                  `<td><button type="button" name="remove" id="${rowCountOne}" class="btn btn-danger q31Abtn_remove_intern">-</button></td>
                
                `+
                `</tr>`
            )
        });
      $(document).on('click', '.q31Abtn_remove_intern', function() {
        var button_id = $(this).attr('id');
        $('#q31ArowOne'+button_id+'').remove();
      });
    $("#addRowQ31Internal").on('input', 'input.q31_internal_traffick_men,input.q31_internal_traffick_women,input.q31_internal_traffick_third_gender,input.q31_internal_traffick_boys,input.q31_internal_traffick_girls', function() {
      // alert($(this).attr("for"))  
      getTotalCost($(this).attr("for"));
      });
 // Using a new index rather than your global variable i
 function getTotalCost(ind) {
    var man = $('#q31_internal_traffick_men_'+ind).val()||0;
    var woman = $('#q31_internal_traffick_women_'+ind).val()||0;
    var third_gender = $('#q31_internal_traffick_third_gender_'+ind).val()||0;
    var boys = $('#q31_internal_traffick_boys_'+ind).val() ||0;
    var girls = $('#q31_internal_traffick_girls_'+ind).val() ||0;


    var totNumber = parseInt(man) + parseInt(woman)+parseInt(third_gender)+parseInt(boys)+parseInt(girls);
    var tot = totNumber;
    $('#q31_internal_traffick_total_'+ind).val(tot)||0;
    calculateSubTotal();
      }

  function calculateSubTotal() {
    var subtotal = 0;
    $('.q31_internal_traffick_total').each(function() {
      subtotal += parseFloat($(this).val());
    });
    
  }
  $('#q31_internal_traffick_type_of_hotlines').on("change",function(){
      
      $('.question31').find('#q31_internal_traffick_others_specify').hide()
      $('.question31').find('#q31_internal_traffick_others_specify').val("")
      if($(this).val()==="4"){
        $('.question31').find('#q31_internal_traffick_others_specify').show()
      }
    });
    $(document).on("change",".q31_internal_traffick_type_of_hotlines",function(){
      var specify_id = $(this).attr('data-id')
      // alert($(this).attr('data-id'))
      $(this).each(function(index,element){
          $('.question31').find('#q31_internal_traffick_others_specify_'+specify_id).hide()
          $('.question31').find('#q31_internal_traffick_others_specify_'+specify_id).val("")
          if($(this).val()==="4"){
            $('.question31').find('#q31_internal_traffick_others_specify_'+specify_id).show()
          }
      })
    });

    // Temporary Save
$(document).on("click",'#temp-save-question31A',function() {
          var q31_type_hotline_one = [],
              q31_other_specifies=[],
              q31_implementer_one = [],
              q31_hotline_num_one = [],
              q31_men_one=[],
              q31_female_one=[],
              q31_third_gender_one=[],
              q31_boy_one=[],
              q31_girl_one=[],
              q31_total_one=[],
              q31_data_one=[];
        let yes_no_value=$("input[type='radio'][name='is_foreign_victims_legally_entitled_q31']:checked").val()
        if(yes_no_value=='1'){
          $('.q31InternalTraffickA').each(function() {
            if($(this).val()){
              let type_hotline ={
                type_hotline:$(this).val()
              }
              q31_type_hotline_one.push(type_hotline);
            }
           
          });
          $('.q31OtherA').each(function() {
              let other_one ={
                other_one:$(this).val()
              }
              q31_other_specifies.push(other_one);
            
           
          });
          $('.q31ImplementTraffickA').each(function(){
            let implementer_one={
              implementer_one:$(this).val()
            }
            q31_implementer_one.push(implementer_one)
          });
          $('.q31HotlineNumA').each(function(){
            let hotline_num_one={
              hotline_num_one:$(this).val()
            }
            q31_hotline_num_one.push(hotline_num_one)
          });
          $('.q31MenA').each(function() {
              let men_one ={
                men_one:$(this).val()
              }
              q31_men_one.push(men_one);
            
           
          });
          $('.q31WomenA').each(function() {
              let female_one ={
                female_one:$(this).val()
              }             
              q31_female_one.push(female_one);
           });
           $('.q313rdGA').each(function() {
              let third_gender_one ={
                third_gender_one:$(this).val()
              }             
              q31_third_gender_one.push(third_gender_one);
           });
           $('.q31BoyA').each(function() {
              let boy_one ={
                boy_one:$(this).val()
              }             
              q31_boy_one.push(boy_one);
           });
           $('.q31GirlA').each(function() {
              let girl_one ={
                girl_one:$(this).val()
              }             
              q31_girl_one.push(girl_one);
           });
           $('.q31TotalA').each(function() {
              let total_one ={
                total_one:$(this).val()
              }             
              q31_total_one.push(total_one);
           });
          
           
          if(q31_type_hotline_one.length>0){
            jQuery.each(q31_type_hotline_one, function(index, item) {
              let newObj = { ...item, 
                other_one:q31_other_specifies[index].other_one,
                implementer_one:q31_implementer_one[index].implementer_one,
                hotline_num_one:q31_hotline_num_one[index].hotline_num_one,
                men_one:q31_men_one[index].men_one,
                female_one:q31_female_one[index].female_one,
                third_gender_one:q31_third_gender_one[index].third_gender_one,
                boy_one:q31_boy_one[index].boy_one,
                girl_one:q31_girl_one[index].girl_one,
                total_one:q31_total_one[index].total_one,
              };
              // item[index]["jurisdict"]=jurisdictions[index].jurisdict
              
              q31_data_one.push(newObj)
            });
          }
        }
        let new_data = {
          q31_data_one:q31_data_one,
          q31_checked_value:yes_no_value,
          others:$("input[name=foreign_victims_legally_entitled_others_q31]").val()
        }
        // console.log(new_data)
          $.ajax({    //create an ajax request to display.php
                  type: "POST",
                  data:{
                    "_token": "{{ csrf_token() }}",
                    'question31A':new_data,
                    'question_no':'31A',
                  },
                  url: "/superadmin/case/temp-save-question40to60",             
                  success: function(response){ 
                    if(response){
                      alert("Question 31 has been saved temporary")

                    }else{
                      alert("Not Saved")
                    }
                  }
          });
    });

   
})
$(function(){
  //add row internationl traffick
  var rowCountTwo = 1;
      $("#addRowDatasQ31International").click(function(){
            let rowCountTwo =$('.q31BQrow').length+1;
            $("#addRowQ31International").append(
                `<tr class="q31BQrow" id="q31BrowTwo${rowCountTwo}">`+
                `
                <td><select name="q31_traffick_type_of_hotlines[]" data-id="${rowCountTwo}" class="form-control q31_international_traffick_type_of_hotlines q31InternalTraffickB">
                    <option value="1">Government run/ free</option>
                    <option value="2">Government supported</option>
                    <option value="3">NGO RUN</option>
                    <option value="4">Others Specify</option>
                    </select><br>
                  <input  type="input" id="q31_international_traffick_others_specify_${rowCountTwo}" name="q31_traffick_others_specify[]" class="form-control otherSpecify q31OtherB" placeholder="Other (Specify)" for="${rowCountTwo}">

                  </td>`+
                  `<input type="hidden" name="q31_type[]" value="2" class="form-control">`+
                    `<td><select name="q31_implementer_traffick[]" id="" class="form-control q31ImplementTraffickB">
                    <option value="1">MoWCA</option>
                    <option value="2">MoHA</option>
                    <option value="3">MoSW</option>
                    <option value="4">MoEWOE</option>
                    <option value="5">MoLJPA</option>
                    <option value="6">INCIDIN Bangladesh</option>
                    <option value="7">Ask</option>
                    <option value="8">BNWLA</option>
                    <option value="9">DAM</option>
                    </select></td>`+



                  `<td><input type="text" name="q31_traffick_hotline_number[]" id="" class="form-control q31HotlineNumB" placeholder="Hotline number"></td>`+
                  `<td><input name="q31_traffick_men[]" type="number" id="q31_international_traffick_men_${rowCountTwo}" class="form-control question31RowMen question31Col1 q31_international_traffick_men q31MenB" for="${rowCountTwo}"></td>`+
                  `<td><input type="number" name="q31_traffick_women[]" id="q31_international_traffick_women_${rowCountTwo}" class="form-control question31RowWomen question31Col1 q31_international_traffick_women q31WomenB" for="${rowCountTwo}"></td>`+
                  `<td><input type="number" name="q31_traffick_third_gender[]" id="q31_international_traffick_third_gender_${rowCountTwo}" class="form-control question31Row3rdGender question31Col1 q31_international_traffick_third_gender q313rdGB" for="${rowCountTwo}"></td>`+
                  `<td><input type="number" name="q31_traffick_boys[]" id="q31_international_traffick_boys_${rowCountTwo}" class="form-control  question31RowBoys question31Col1 q31_international_traffick_boys q31BoyB" for="${rowCountTwo}"></td>`+
                  `<td><input type="number" name="q31_traffick_girls[]" id="q31_international_traffick_girls_${rowCountTwo}" class="form-control question31RowGirls question31Col1 q31_international_traffick_girls q31GirlB" for="${rowCountTwo}"></td>`+
                  `<td><input type="text" name="q31_traffick_total[]" id="q31_international_traffick_total_${rowCountTwo}" class="form-control q31Total2 combineTotal q31_international_traffick_total q31TotalB" readonly="true" for="${rowCountTwo}"> </td>`+
                  `<td><button type="button" name="remove" id="${rowCountTwo}" class="btn btn-danger q31Bbtn_remove_international">-</button></td>
                
                `+
                `</tr>`
            )
        });
      $(document).on('click', '.q31Bbtn_remove_international', function() {
        var button_id = $(this).attr('id');
        $('#q31BrowTwo'+button_id+'').remove();
      });
    $("#addRowQ31International").on('input', 'input.q31_international_traffick_men,input.q31_international_traffick_women,input.q31_international_traffick_third_gender,input.q31_international_traffick_boys,input.q31_international_traffick_girls', function() {
      // alert($(this).attr("for"))  
      getTotalCost($(this).attr("for"));
      });
 // Using a new index rather than your global variable i
 function getTotalCost(ind) {
    var man = $('#q31_international_traffick_men_'+ind).val()||0;
    var woman = $('#q31_international_traffick_women_'+ind).val()||0;
    var third_gender = $('#q31_international_traffick_third_gender_'+ind).val()||0;
    var boys = $('#q31_international_traffick_boys_'+ind).val() ||0;
    var girls = $('#q31_international_traffick_girls_'+ind).val() ||0;


    var totNumber = parseInt(man) + parseInt(woman)+parseInt(third_gender)+parseInt(boys)+parseInt(girls);
    var tot = totNumber;
    $('#q31_international_traffick_total_'+ind).val(tot)||0;
    calculateSubTotal();
      }

  function calculateSubTotal() {
    var subtotal = 0;
    $('.q31_international_traffick_total').each(function() {
      subtotal += parseFloat($(this).val());
    });
    
  };
  $('#q31_international_traffick_type_of_hotlines').on("change",function(){
      
      $('.question31').find('#q31_international_traffick_others_specify').hide()
      $('.question31').find('#q31_international_traffick_others_specify').val("")
      if($(this).val()==="4"){
        $('.question31').find('#q31_international_traffick_others_specify').show()
      }
    });
    $(document).on("change",".q31_international_traffick_type_of_hotlines",function(){
      var specify_id = $(this).attr('data-id')
      // alert($(this).attr('data-id'))
      $(this).each(function(index,element){
          $('.question31').find('#q31_international_traffick_others_specify_'+specify_id).hide()
          $('.question31').find('#q31_international_traffick_others_specify_'+specify_id).val("")
          if($(this).val()==="4"){
            $('.question31').find('#q31_international_traffick_others_specify_'+specify_id).show()
          }
      })
    });
    // Temporary Save
$(document).on("click",'#temp-save-question31B',function() {
          var q31_type_hotline_two = [],
              q31_other_specifies_two=[],
              q31_implementer_two = [],
              q31_hotline_num_two = [],
              q31_men_two=[],
              q31_female_two=[],
              q31_third_gender_two=[],
              q31_boy_two=[],
              q31_girl_two=[],
              q31_total_two=[],
              q31_data_two=[];
        let yes_no_value=$("input[type='radio'][name='is_foreign_victims_legally_entitled_q31']:checked").val()
        if(yes_no_value=='1'){
          $('.q31InternalTraffickB').each(function() {
            if($(this).val()){
              let traffick_type ={
                traffick_type:$(this).val()
              }
              q31_type_hotline_two.push(traffick_type);
            }
           
          });
          $('.q31OtherB').each(function() {
              let other_two ={
                other_two:$(this).val()
              }
              q31_other_specifies_two.push(other_two);
            
           
          });
          $('.q31ImplementTraffickB').each(function(){
            let implementer_two={
              implementer_two:$(this).val()
            }
            q31_implementer_two.push(implementer_two)
          });
          $('.q31HotlineNumB').each(function(){
            let hotline_num_two={
              hotline_num_two:$(this).val()
            }
            q31_hotline_num_two.push(hotline_num_two)
          });
          $('.q31MenB').each(function() {
              let men_two ={
                men_two:$(this).val()
              }
              q31_men_two.push(men_two);
            
           
          });
          $('.q31WomenB').each(function() {
              let female_two ={
                female_two:$(this).val()
              }             
              q31_female_two.push(female_two);
           });
           $('.q313rdGB').each(function() {
              let third_gender_two ={
                third_gender_two:$(this).val()
              }             
              q31_third_gender_two.push(third_gender_two);
           });
           $('.q31BoyB').each(function() {
              let boy_two ={
                boy_two:$(this).val()
              }             
              q31_boy_two.push(boy_two);
           });
           $('.q31GirlB').each(function() {
              let girl_two ={
                girl_two:$(this).val()
              }             
              q31_girl_two.push(girl_two);
           });
           $('.q31TotalB').each(function() {
              let total_two ={
                total_two:$(this).val()
              }             
              q31_total_two.push(total_two);
           });
          
           
          if(q31_type_hotline_two.length>0){
            jQuery.each(q31_type_hotline_two, function(index, item) {
              let newObj = { ...item, 
                other_two:q31_other_specifies_two[index].other_two,
                implementer_two:q31_implementer_two[index].implementer_two,
                hotline_num_two:q31_hotline_num_two[index].hotline_num_two,
                men_two:q31_men_two[index].men_two,
                female_two:q31_female_two[index].female_two,
                third_gender_two:q31_third_gender_two[index].third_gender_two,
                boy_two:q31_boy_two[index].boy_two,
                girl_two:q31_girl_two[index].girl_two,
                total_two:q31_total_two[index].total_two,
              };
              // item[index]["jurisdict"]=jurisdictions[index].jurisdict
              q31_data_two.push(newObj)
            });
          }
        }
        let new_data_two = {
          q31_data_two:q31_data_two,
          q31_checked_value:yes_no_value,
          others:$("input[name=foreign_victims_legally_entitled_others_q31]").val()
        }
   
          $.ajax({    //create an ajax request to display.php
                  type: "POST",
                  data:{
                    "_token": "{{ csrf_token() }}",
                    'question31B':new_data_two,
                    'question_no':'31B',
                  },
                  url: "/superadmin/case/temp-save-question40to60",             
                  success: function(response){ 
                    if(response){
                      alert("Question 31 has been saved temporary")
                      
                    }else{
                      alert("Not Saved")
                    }
                  }
          });
    });
})
</script>
