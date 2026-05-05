<?php
if($questiontitles[26]->status==0)
{

  ?>
@if(Auth::user()->can('27.question'))
 <!-- question no 27 Start  -->
  <?php
  $q27_divisions=[
    1=>"Barisal",
    2=>"Chattogram",
    3=>"Dhaka",
    4=>"Khulna",
    5=>"Mymensingh",
    6=>"Rajshahi",
    7=>"Rangpur",
    8=>"Sylhet",
    9=>"National",
  ];
  ?>
 <div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
         <span class="numbering">27</span>.
           @if (isset($questiontitles [26]))
         {{ $questiontitles[26]->title }}
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
            <th rowspan="2">Location</th>
            <th rowspan="2">Type of Facility</th>
            <th rowspan="2">Number of Facility</th>
            <th colspan="3">Number of children</th>
          </tr>

          <tr>
            <th>Boy</th>
            <th>Girl</th>
            <th>Total</th>
          </tr>
        </thead>
        <tr>
          <td rowspan="2">
            <select name="location_id_q27[]" id="q27LocationOne" class="form-control q27Input">
              <option value="" disabled selected>--Select Location--</option>
              @foreach($q27_divisions as $key=>$item)
                <option <?=(isset($question_27_data->q27_data) &&  !empty($question_27_data->q27_data) && $question_27_data->q27_data->q27LocationOne==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
              @endforeach
            </select>
              <input type="hidden" name="location_id_q27[]" id="q27LocationHiddenOne" 
         value="{{ isset($question_27_data->q27_data->q27LocationOne) ? $question_27_data->q27_data->q27LocationOne : '' }}">
          </td>
          <td>Shelter</td>
          <input type="hidden" name="type_facility[]" value="1">
          <td><input type="text" name="number_facility[]" id="q27FacilityOne" value="<?= isset($question_27_data->q27_data->q27FacilityOne) ? $question_27_data->q27_data->q27FacilityOne :''   ?>" class="form-control q27Input"> </td>
          <td><input type="number" name="number_children_boy_q27[]" id="q27BoyOne" value="<?= isset($question_27_data->q27_data->q27BoyOne) ? $question_27_data->q27_data->q27BoyOne :''   ?>" class="form-control  question27RowBoys question27Col1 q27Input"> </td>
          <td><input type="number" name="number_children_girl_q27[]" id="q27GirlOne" value="<?= isset($question_27_data->q27_data->q27GirlOne) ? $question_27_data->q27_data->q27GirlOne :''   ?>" class="form-control question27RowGirls question27Col1 q27Input"> </td>
          <td><input type="text" name="number_children_total_q27[]"  id="question27Col1" value="<?= isset($question_27_data->q27_data->question27Col1) ? $question_27_data->q27_data->question27Col1 :''   ?>"  class="form-control q27Total q27Input" readonly="true"> </td>
        </tr>
        <tr>
          <td>Development Center</td>
          <input type="hidden" name="type_facility[]" value="2">
          <td><input type="text" name="number_facility[]" id="q27FacilityTwo" value="<?= isset($question_27_data->q27_data->q27FacilityTwo) ? $question_27_data->q27_data->q27FacilityTwo :''   ?>" class="form-control  q27Input"> </td>
          <td><input type="text" name="number_children_boy_q27[]" id="q27BoyTwo" value="<?= isset($question_27_data->q27_data->q27BoyTwo) ? $question_27_data->q27_data->q27BoyTwo :''   ?>" class="form-control question27RowBoys question27Col2  q27Input"> </td>
          <td><input type="text" name="number_children_girl_q27[]" id="q27GirlTwo" value="<?= isset($question_27_data->q27_data->q27GirlTwo) ? $question_27_data->q27_data->q27GirlTwo :''   ?>" class="form-control question27RowGirls question27Col2  q27Input"> </td>
          <td><input type="text" name="number_children_total_q27[]" id="question27Col2" value="<?= isset($question_27_data->q27_data->question27Col2) ? $question_27_data->q27_data->question27Col2 :''   ?>"  class="form-control q27Total  q27Input" readonly="true"> </td>
        </tr>
        <tr>
          <td rowspan="2">
            <select name="location_id_q27[]" id="q27LocationTwo" class="form-control q27Input">
            <option value="" disabled selected>--Select Location--</option>
              @foreach($q27_divisions as $key=>$item)
                <option <?=(isset($question_27_data->q27_data) &&  !empty($question_27_data->q27_data) && $question_27_data->q27_data->q27LocationTwo==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
              @endforeach
            </select>
              <input type="hidden" name="location_id_q27[]" id="q27LocationHiddenTwo" 
         value="{{ isset($question_27_data->q27_data->q27LocationTwo) ? $question_27_data->q27_data->q27LocationTwo : '' }}">
          </td>

          <td>Shelter</td>
          <input type="hidden" name="type_facility[]" value="1">
          <td><input type="text" name="number_facility[]" id="q27FacilityThree" value="<?= isset($question_27_data->q27_data->q27FacilityThree) ? $question_27_data->q27_data->q27FacilityThree :''   ?>" class="form-control q27Input"> </td>
          <td><input type="text" name="number_children_boy_q27[]" id="q27BoyThree" value="<?= isset($question_27_data->q27_data->q27BoyThree) ? $question_27_data->q27_data->q27BoyThree :''   ?>" class="form-control question27RowBoys question27Col3 q27Input"> </td>
          <td><input type="text" name="number_children_girl_q27[]" id="q27GirlThree" value="<?= isset($question_27_data->q27_data->q27GirlThree) ? $question_27_data->q27_data->q27GirlThree :''   ?>" class="form-control  question27RowGirls question27Col3 q27Input"> </td>
          <td><input type="text" name="number_children_total_q27[]" id="question27Col3" value="<?= isset($question_27_data->q27_data->question27Col3) ? $question_27_data->q27_data->question27Col3 :''   ?>"  class="form-control q27Total q27Input" readonly="true"> </td>
        </tr>
        <tr>
          <td>Development Center</td>
          <input type="hidden" name="type_facility[]" value="2">
          <td><input type="text" name="number_facility[]" id="q27FacilityFour" value="<?= isset($question_27_data->q27_data->q27FacilityFour) ? $question_27_data->q27_data->q27FacilityFour :''   ?>" class="form-control q27Input"> </td>
          <td><input type="text" name="number_children_boy_q27[]" id="q27BoyFour" value="<?= isset($question_27_data->q27_data->q27BoyFour) ? $question_27_data->q27_data->q27BoyFour :''   ?>" class="form-control question27RowBoys question27Col4 q27Input"> </td>
          <td><input type="text" name="number_children_girl_q27[]" id="q27GirlFour" value="<?= isset($question_27_data->q27_data->q27GirlFour) ? $question_27_data->q27_data->q27GirlFour :''   ?>" class="form-control question27RowGirls question27Col4 q27Input"> </td>
          <td><input type="text" name="number_children_total_q27[]" id="question27Col4" value="<?= isset($question_27_data->q27_data->question27Col4) ? $question_27_data->q27_data->question27Col4 :''   ?>"  class="form-control q27Total q27Input" readonly="true"> </td>
        </tr>

        <tr>
          <td rowspan="2">
            <select name="location_id_q27[]" id="q27LocationThree" class="form-control q27Input">
            <option value="" disabled selected>--Select Location--</option>
            @foreach($q27_divisions as $key=>$item)
                <option <?=(isset($question_27_data->q27_data) &&  !empty($question_27_data->q27_data) && $question_27_data->q27_data->q27LocationThree==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
            @endforeach
            </select>
            <input type="hidden" name="location_id_q27[]" id="q27LocationHiddenThree" 
         value="{{ isset($question_27_data->q27_data->q27LocationThree) ? $question_27_data->q27_data->q27LocationThree : '' }}">

          </td>

          <td>Shelter</td>
          <input type="hidden" name="type_facility[]" value="1">
          <td><input type="text" name="number_facility[]" id="q27FacilityFive" value="<?= isset($question_27_data->q27_data->q27FacilityFive) ? $question_27_data->q27_data->q27FacilityFive :''   ?>" class="form-control q27Input"> </td>
          <td><input type="text" name="number_children_boy_q27[]" id="q27BoyFive" value="<?= isset($question_27_data->q27_data->q27BoyFive) ? $question_27_data->q27_data->q27BoyFive :''   ?>" class="form-control question27RowBoys question27Col5 q27Input"> </td>
          <td><input type="text" name="number_children_girl_q27[]" id="q27GirlFive" value="<?= isset($question_27_data->q27_data->q27GirlFive) ? $question_27_data->q27_data->q27GirlFive :''   ?>" class="form-control  question27RowGirls question27Col5 q27Input"> </td>
          <td><input type="text" name="number_children_total_q27[]" id="question27Col5" value="<?= isset($question_27_data->q27_data->question27Col5) ? $question_27_data->q27_data->question27Col5 :''   ?>"  class="form-control q27Total q27Input" readonly="true"> </td>
        </tr>
        <tr>
          <td>Development Center</td>
          <input type="hidden" name="type_facility[]" value="2">
          <td><input type="text" name="number_facility[]" id="q27FacilitySix" value="<?= isset($question_27_data->q27_data->q27FacilitySix) ? $question_27_data->q27_data->q27FacilitySix :''   ?>" class="form-control q27Input"> </td>
          <td><input type="text" name="number_children_boy_q27[]" id="q27BoySix" value="<?= isset($question_27_data->q27_data->q27BoySix) ? $question_27_data->q27_data->q27BoySix :''   ?>" class="form-control question27RowBoys question27Col6 q27Input"> </td>
          <td><input type="text" name="number_children_girl_q27[]" id="q27GirlSix" value="<?= isset($question_27_data->q27_data->q27GirlSix) ? $question_27_data->q27_data->q27GirlSix :''   ?>" class="form-control question27RowGirls question27Col6 q27Input"> </td>
          <td><input type="text" name="number_children_total_q27[]"  id="question27Col6" value="<?= isset($question_27_data->q27_data->question27Col6) ? $question_27_data->q27_data->question27Col6 :''   ?>"  class="form-control q27Total q27Input" readonly="true"> </td>
        </tr>

        <tr>
          <td rowspan="2">
            <select name="location_id_q27[]" id="q27LocationFour" class="form-control q27Input">
            <option value="" disabled selected>--Select Location--</option>
              @foreach($q27_divisions as $key=>$item)
                <option <?=(isset($question_27_data->q27_data) &&  !empty($question_27_data->q27_data) && $question_27_data->q27_data->q27LocationFour==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
              @endforeach
            </select>
                 <input type="hidden" name="location_id_q27[]" id="q27LocationHiddenFour" 
         value="{{ isset($question_27_data->q27_data->q27LocationFour) ? $question_27_data->q27_data->q27LocationFour : '' }}">
          
          </td>

          <td>Shelter</td>
          <input type="hidden" name="type_facility[]" value="1">
          <td><input type="text" name="number_facility[]" id="q27FacilitySeven" value="<?= isset($question_27_data->q27_data->q27FacilitySeven) ? $question_27_data->q27_data->q27FacilitySeven :''   ?>" class="form-control q27Input"> </td>
          <td><input type="text" name="number_children_boy_q27[]" id="q27BoySeven" value="<?= isset($question_27_data->q27_data->q27BoySeven) ? $question_27_data->q27_data->q27BoySeven :''   ?>" class="form-control question27RowBoys question27Col7 q27Input"> </td>
          <td><input type="text" name="number_children_girl_q27[]" id="q27GirlSeven" value="<?= isset($question_27_data->q27_data->q27GirlSeven) ? $question_27_data->q27_data->q27GirlSeven :''   ?>" class="form-control question27RowGirls question27Col7 q27Input"> </td>
          <td><input type="text" name="number_children_total_q27[]"  id="question27Col7" value="<?= isset($question_27_data->q27_data->question27Col7) ? $question_27_data->q27_data->question27Col7 :''   ?>"  class="form-control q27Total q27Input" readonly="true"> </td>
        </tr>
        <tr>
          <td>Development Center</td>
          <input type="hidden" name="type_facility[]" value="2">
          <td><input type="text" name="number_facility[]" id="q27FacilityEight" value="<?= isset($question_27_data->q27_data->q27FacilityEight) ? $question_27_data->q27_data->q27FacilityEight :''   ?>" class="form-control q27Input"> </td>
          <td><input type="text" name="number_children_boy_q27[]" id="q27BoyEight" value="<?= isset($question_27_data->q27_data->q27BoyEight) ? $question_27_data->q27_data->q27BoyEight :''   ?>" class="form-control question27RowBoys question27Col8 q27Input"> </td>
          <td><input type="text" name="number_children_girl_q27[]" id="q27GirlEight" value="<?= isset($question_27_data->q27_data->q27GirlEight) ? $question_27_data->q27_data->q27GirlEight :''   ?>" class="form-control  question27RowGirls question27Col8 q27Input"> </td>
          <td><input type="text" name="number_children_total_q27[]" id="question27Col8" value="<?= isset($question_27_data->q27_data->question27Col8) ? $question_27_data->q27_data->question27Col8 :''   ?>"  class="form-control q27Total q27Input" readonly="true"> </td>
        </tr>


        <tr>
          <td rowspan="2">
            <select name="location_id_q27[]" id="q27LocationFive" class="form-control q27Input">
            <option value="" disabled selected>--Select Location--</option>
              @foreach($q27_divisions as $key=>$item)
                <option <?=(isset($question_27_data->q27_data) &&  !empty($question_27_data->q27_data) && $question_27_data->q27_data->q27LocationFive==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
              @endforeach
            </select>
             <input type="hidden" name="location_id_q27[]" id="q27LocationHiddenFive" 
         value="{{ isset($question_27_data->q27_data->q27LocationFive) ? $question_27_data->q27_data->q27LocationFive : '' }}">
          </td>

          <td>Shelter</td>
          <input type="hidden" name="type_facility[]" value="1">
          <td><input type="text" name="number_facility[]" id="q27FacilityNine" value="<?= isset($question_27_data->q27_data->q27FacilityNine) ? $question_27_data->q27_data->q27FacilityNine :''   ?>" class="form-control q27Input"> </td>
          <td><input type="text" name="number_children_boy_q27[]" id="q27BoyNine" value="<?= isset($question_27_data->q27_data->q27BoyNine) ? $question_27_data->q27_data->q27BoyNine :''   ?>" class="form-control question27RowBoys question27Col9 q27Input"> </td>
          <td><input type="text" name="number_children_girl_q27[]" id="q27GirlNine" value="<?= isset($question_27_data->q27_data->q27GirlNine) ? $question_27_data->q27_data->q27GirlNine :''   ?>" class="form-control  question27RowGirls question27Col9 q27Input"> </td>
          <td><input type="text" name="number_children_total_q27[]" id="question27Col9" value="<?= isset($question_27_data->q27_data->question27Col9) ? $question_27_data->q27_data->question27Col9 :''   ?>"  class="form-control q27Total q27Input" readonly="true"> </td>
        </tr>
        <tr>
          <td>Development Center</td>
          <input type="hidden" name="type_facility[]" value="2">
          <td><input type="text" name="number_facility[]" id="q27FacilityTen" value="<?= isset($question_27_data->q27_data->q27FacilityTen) ? $question_27_data->q27_data->q27FacilityTen :''   ?>" class="form-control q27Input"> </td>
          <td><input type="text" name="number_children_boy_q27[]" id="q27BoyTen" value="<?= isset($question_27_data->q27_data->q27BoyTen) ? $question_27_data->q27_data->q27BoyTen :''   ?>" class="form-control question27RowBoys question27Co20 q27Input"> </td>
          <td><input type="text" name="number_children_girl_q27[]" id="q27GirlTen" value="<?= isset($question_27_data->q27_data->q27GirlTen) ? $question_27_data->q27_data->q27GirlTen :''   ?>" class="form-control  question27RowGirls question27Co20 q27Input"> </td>
          <td><input type="text" name="number_children_total_q27[]" id="question27Co20" value="<?= isset($question_27_data->q27_data->question27Co20) ? $question_27_data->q27_data->question27Co20 :''   ?>"  class="form-control q27Total q27Input" readonly="true"> </td>
        </tr>

        <tr>
          <td rowspan="2">
            <select name="location_id_q27[]" id="q27LocationSix" class="form-control q27Input">
            <option value="" disabled selected>--Select Location--</option>
              @foreach($q27_divisions as $key=>$item)
                <option <?=(isset($question_27_data->q27_data) &&  !empty($question_27_data->q27_data) && $question_27_data->q27_data->q27LocationSix==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
              @endforeach
            </select>
            <input type="hidden" name="location_id_q27[]" id="q27LocationHiddenSix" 
         value="{{ isset($question_27_data->q27_data->q27LocationSix) ? $question_27_data->q27_data->q27LocationSix : '' }}">
          </td>

          <td>Shelter</td>
          <input type="hidden" name="type_facility[]" value="1">
          <td><input type="text" name="number_facility[]" id="q27FacilityEleven" value="<?= isset($question_27_data->q27_data->q27FacilityEleven) ? $question_27_data->q27_data->q27FacilityEleven :''   ?>" class="form-control q27Input"> </td>
          <td><input type="text" name="number_children_boy_q27[]" id="q27BoyEleven" value="<?= isset($question_27_data->q27_data->q27BoyEleven) ? $question_27_data->q27_data->q27BoyEleven :''   ?>" class="form-control question27RowBoys question27Co21 q27Input"> </td>
          <td><input type="text" name="number_children_girl_q27[]" id="q27GirlEleven" value="<?= isset($question_27_data->q27_data->q27GirlEleven) ? $question_27_data->q27_data->q27GirlEleven :''   ?>" class="form-control  question27RowGirls question27Co21 q27Input"> </td>
          <td><input type="text" name="number_children_total_q27[]" id="question27Co21" value="<?= isset($question_27_data->q27_data->question27Co21) ? $question_27_data->q27_data->question27Co21 :''   ?>"  class="form-control q27Total q27Input" readonly="true"> </td>
        </tr>
        <tr>
          <td>Development Center</td>
          <input type="hidden" name="type_facility[]" value="2">
          <td><input type="text" name="number_facility[]" id="q27FacilityTwelve" value="<?= isset($question_27_data->q27_data->q27FacilityTwelve) ? $question_27_data->q27_data->q27FacilityTwelve :''   ?>" class="form-control q27Input"> </td>
          <td><input type="text" name="number_children_boy_q27[]" id="q27BoyTwelve" value="<?= isset($question_27_data->q27_data->q27BoyTwelve) ? $question_27_data->q27_data->q27BoyTwelve :''   ?>" class="form-control question27RowBoys question27Co22 q27Input"> </td>
          <td><input type="text" name="number_children_girl_q27[]" id="q27GirlTwelve" value="<?= isset($question_27_data->q27_data->q27GirlTwelve) ? $question_27_data->q27_data->q27GirlTwelve :''   ?>" class="form-control  question27RowGirls question27Co22 q27Input"> </td>
          <td><input type="text" name="number_children_total_q27[]" id="question27Co22" value="<?= isset($question_27_data->q27_data->question27Co22) ? $question_27_data->q27_data->question27Co22 :''   ?>"  class="form-control q27Total q27Input" readonly="true"> </td>
        </tr>


        <tr>
          <td rowspan="2">
            <select name="location_id_q27[]" id="q27LocationSeven" class="form-control q27Input">
            <option value="" disabled selected>--Select Location--</option>
              @foreach($q27_divisions as $key=>$item)
                <option <?=(isset($question_27_data->q27_data) &&  !empty($question_27_data->q27_data) && $question_27_data->q27_data->q27LocationSeven==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
              @endforeach
            </select>

            <input type="hidden" name="location_id_q27[]" id="q27LocationHiddenSeven" 
         value="{{ isset($question_27_data->q27_data->q27LocationSeven) ? $question_27_data->q27_data->q27LocationSeven : '' }}">
          </td>

          <td>Shelter</td>
          <input type="hidden" name="type_facility[]" value="1">
          <td><input type="text" name="number_facility[]" id="q27FacilityThirteen" value="<?= isset($question_27_data->q27_data->q27FacilityThirteen) ? $question_27_data->q27_data->q27FacilityThirteen :''   ?>" class="form-control q27Input"> </td>
          <td><input type="text" name="number_children_boy_q27[]" id="q27BoyThirteen" value="<?= isset($question_27_data->q27_data->q27BoyThirteen) ? $question_27_data->q27_data->q27BoyThirteen :''   ?>" class="form-control question27RowBoys question27Co25 q27Input"> </td>
          <td><input type="text" name="number_children_girl_q27[]" id="q27GirlThirteen" value="<?= isset($question_27_data->q27_data->q27GirlThirteen) ? $question_27_data->q27_data->q27GirlThirteen :''   ?>" class="form-control  question27RowGirls question27Co25 q27Input"> </td>
          <td><input type="text" name="number_children_total_q27[]" id="question27Co25" value="<?= isset($question_27_data->q27_data->question27Co25) ? $question_27_data->q27_data->question27Co25 :''   ?>"  class="form-control q27Total q27Input" readonly="true"> </td>
        </tr>
        <tr>
          <td>Development Center</td>
          <input type="hidden" name="type_facility[]" value="2">
          <td><input type="text" name="number_facility[]" id="q27FacilityFourteen" value="<?= isset($question_27_data->q27_data->q27FacilityFourteen) ? $question_27_data->q27_data->q27FacilityFourteen :''   ?>" class="form-control q27Input"> </td>
          <td><input type="text" name="number_children_boy_q27[]" id="q27BoyFourteen" value="<?= isset($question_27_data->q27_data->q27BoyFourteen) ? $question_27_data->q27_data->q27BoyFourteen :''   ?>" class="form-control question27RowBoys question27Co24 q27Input"> </td>
          <td><input type="text" name="number_children_girl_q27[]" id="q27GirlFourteen" value="<?= isset($question_27_data->q27_data->q27GirlFourteen) ? $question_27_data->q27_data->q27GirlFourteen :''   ?>" class="form-control  question27RowGirls question27Co24 q27Input"> </td>
          <td><input type="text" name="number_children_total_q27[]" id="question27Co24" value="<?= isset($question_27_data->q27_data->question27Co24) ? $question_27_data->q27_data->question27Co24 :''   ?>"  class="form-control q27Total q27Input" readonly="true"> </td>
        </tr>

        <tr>
          <td rowspan="2">
            <select name="location_id_q27[]" id="q27LocationEight" class="form-control q27Input">
            <option value="" disabled selected>--Select Location--</option>
              @foreach($q27_divisions as $key=>$item)
                <option <?=(isset($question_27_data->q27_data) &&  !empty($question_27_data->q27_data) && $question_27_data->q27_data->q27LocationEight==$key) ? 'selected' : '' ;?>  value="{{$key}}">{{$item}}</option>
              @endforeach
            </select>
              <input type="hidden" name="location_id_q27[]" id="q27LocationHiddenEight" 
         value="{{ isset($question_27_data->q27_data->q27LocationEight) ? $question_27_data->q27_data->q27LocationEight : '' }}">
          </td>

          <td>Shelter</td>
          <input type="hidden" name="type_facility[]" value="1">
          <td><input type="text" name="number_facility[]" id="q27FacilityFiveteen" value="<?= isset($question_27_data->q27_data->q27FacilityFiveteen) ? $question_27_data->q27_data->q27FacilityFiveteen :''   ?>" class="form-control q27Input"> </td>
          <td><input type="text" name="number_children_boy_q27[]" id="q27BoyFiveteen" value="<?= isset($question_27_data->q27_data->q27BoyFiveteen) ? $question_27_data->q27_data->q27BoyFiveteen :''   ?>" class="form-control question27RowBoys question27Co26 q27Input"> </td>
          <td><input type="text" name="number_children_girl_q27[]" id="q27GirlFiveteen" value="<?= isset($question_27_data->q27_data->q27GirlFiveteen) ? $question_27_data->q27_data->q27GirlFiveteen :''   ?>" class="form-control  question27RowGirls question27Co26 q27Input"> </td>
          <td><input type="text" name="number_children_total_q27[]" id="question27Co26" value="<?= isset($question_27_data->q27_data->question27Co26) ? $question_27_data->q27_data->question27Co26 :''   ?>"  class="form-control q27Total q27Input" readonly="true"> </td>
        </tr>
        <tr>
          <td>Development Center</td>
          <input type="hidden" name="type_facility[]" value="2">
          <td><input type="text" name="number_facility[]" id="q27FacilitySixteen" value="<?= isset($question_27_data->q27_data->q27FacilitySixteen) ? $question_27_data->q27_data->q27FacilitySixteen :''   ?>" class="form-control q27Input"> </td>
          <td><input type="text" name="number_children_boy_q27[]" id="q27BoySixteen" value="<?= isset($question_27_data->q27_data->q27BoySixteen) ? $question_27_data->q27_data->q27BoySixteen :''   ?>" class="form-control question27RowBoys question27Co27 q27Input"> </td>
          <td><input type="text" name="number_children_girl_q27[]" id="q27GirlSixteen" value="<?= isset($question_27_data->q27_data->q27GirlSixteen) ? $question_27_data->q27_data->q27GirlSixteen :''   ?>" class="form-control  question27RowGirls question27Co27 q27Input"> </td>
          <td><input type="text" name="number_children_total_q27[]" id="question27Co27" value="<?= isset($question_27_data->q27_data->question27Co27) ? $question_27_data->q27_data->question27Co27 :''   ?>"  class="form-control q27Total q27Input" readonly="true"> </td>
        </tr>

      </table>
      <br/>
      <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question27">Save</button>       
      </p>
    </div>
  </div>
</div>
<!-- question no 27 end -->
@endif
<?php }
  ?>

<script>

$(function(){
  $(document).on("click",'#temp-save-question27',function() {



    var q27_data={
    }
 
      $('.q27Input').each(function() {
        Object.assign(q27_data,{[$(this).attr('id')]:$(this).val()})   
      });

    let new_data={
      q27_data:q27_data 
    }
      // console.log(new_data)
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
              'question27':new_data,
              'question_no':'27'
            },
            url: "/superadmin/case/temp-save-question40to60",             
            success: function(response){ 
              if(response){
                alert("Question 27 has been saved temporary")

              }else{
                alert("Not Saved")
              }
            }
    });
  }); 
}); 

</script>
<script type="text/javascript">

$(document).ready(function(){
  $('#q27LocationOne').on('change', function(){
    let selectedValue = $(this).val();
    $('#q27LocationHiddenOne').val(selectedValue);
  });
});

$(document).ready(function(){
  $('#q27LocationTwo').on('change', function(){
    let selectedValue = $(this).val();
    $('#q27LocationHiddenTwo').val(selectedValue);
  });
});

$(document).ready(function(){
  $('#q27LocationThree').on('change', function(){
    let selectedValue = $(this).val();
    $('#q27LocationHiddenThree').val(selectedValue);
  });
});

$(document).ready(function(){
  $('#q27LocationFour').on('change', function(){
    let selectedValue = $(this).val();
    $('#q27LocationHiddenFour').val(selectedValue);
  });
});

$(document).ready(function(){
  $('#q27LocationFive').on('change', function(){
    let selectedValue = $(this).val();
    $('#q27LocationHiddenFive').val(selectedValue);
  });
});
$(document).ready(function(){
  $('#q27LocationSix').on('change', function(){
    let selectedValue = $(this).val();
    $('#q27LocationHiddenSix').val(selectedValue);
  });
});
$(document).ready(function(){
  $('#q27LocationSeven').on('change', function(){
    let selectedValue = $(this).val();
    $('#q27LocationHiddenSeven').val(selectedValue);
  });
});
$(document).ready(function(){
  $('#q27LocationEight').on('change', function(){
    let selectedValue = $(this).val();
    $('#q27LocationHiddenEight').val(selectedValue);
  });
});

</script>