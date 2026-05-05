
@extends('layouts.app')

@section('content')

<style>
  
  #container {
    height: 300px;
    min-width: 250px;
    max-width: 800px;
    margin: 0 auto;
}

.loading {
    margin-top: 10em;
    text-align: center;
    color: gray;
}
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">
                {{ Auth::user()->user_type ?? '' }}:
                
              Admin Panel</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    @php
$districs=DB::table('districs')->get();
@endphp
    
@if(Auth::user()->can('1.question'))
<div class="col-md-12 question1">
    <div class="card card-outline collapsed-card">
      <div class="card-header">


        <h3 class="card-title">1. Is there any new
form of trafficking in your location?
          </h3>

    


        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
      
      <div class="card-body">
      <div class="icheck-primary">
            <input type="radio" id="radioOne1" class="trafficking_location_status" name="trafficking_location_status" checked  value="yes">
            <label for="radioOne1">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input type="radio" id="radioOne2"  class="trafficking_location_status" name="trafficking_location_status"  value="no">
            <label for="radioOne2">
              No
            </label>
          </div>
          <div id ="1_question_view">
        <table class="table" style="border: 0;">
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
              <td><select name="form_one_type" id="" class="form-control">
                  <option value="Forced sexual exploitation">Choose an Item</option>
                  <option value="Forced sexual exploitation">Forced sexual exploitation</option>
                  <option value="Trafficking for sexual visuals/pornography">Trafficking for sexual
                    visuals/pornography</option>
                  <option value="Web Enabled Trafficking">Web Enabled Trafficking</option>
                  <option value="Trafficking in Migrants">Trafficking in Migrants</option>
                  <option value="Organ Trafficking">Organ Trafficking</option>
                  <option value="Trafficking in Refugee">Trafficking in Refugee</option>
                  <option value="Other (Specify)">Other (Specify)</option>
                </select>
              </td>
              <td>
                <select name="form_one_location" id="" class="form-control">
                    <option value="" disabled selected>---Select Location--</option>
                  <option value="Barisal">  Barisal </option>
                 <option value="Chattogram">Chattogram </option>
                  <option value="Dhaka">Dhaka </option>
                   <option value="Khulna">Khulna </option>
                  <option value="Mymensingh">Mymensingh </option>
                    <option value="Rajshahi">Rajshahi </option>
                  <option value="Rangpur">Rangpur </option>
                  <option value="Sylhet">Sylhet </option>
                  <option value="National">National </option>
                  </select>
              </td>

            </tr>
            <tr>
              <td>New form # 2</td>
              <td><select name="form_two_type" id="" class="form-control">
                  <option value="Forced sexual exploitation">Choose an Item</option>
                  <option value="Forced sexual exploitation">Forced sexual exploitation</option>
                  <option value="Trafficking for sexual visuals/pornography">Trafficking for sexual
                    visuals/pornography</option>
                  <option value="Web Enabled Trafficking">Web Enabled Trafficking</option>
                  <option value="Trafficking in Migrants">Trafficking in Migrants</option>
                  <option value="Organ Trafficking">Organ Trafficking</option>
                  <option value="Trafficking in Refugee">Trafficking in Refugee</option>
                  <option value="Other (Specify)">Other (Specify)</option>
                </select>
              </td>
              <td>
                <select name="form_two_location" id="" class="form-control">
                    <option value="" disabled selected>---Select Location--</option>
                  <option value="Barisal">  Barisal </option>
                 <option value="Chattogram">Chattogram </option>
                  <option value="Dhaka">Dhaka </option>
                   <option value="Khulna">Khulna </option>
                  <option value="Mymensingh">Mymensingh </option>
                    <option value="Rajshahi">Rajshahi </option>
                  <option value="Rangpur">Rangpur </option>
                  <option value="Sylhet">Sylhet </option>
                  <option value="National">National </option>
                  </select>
              </td>

            </tr>
            <tr>
              <td>New form # 3</td>
              <td><select name="form_three_type" id="" class="form-control">
                  <option value="Forced sexual exploitation">Choose an Item</option>
                  <option value="Forced sexual exploitation">Forced sexual exploitation</option>
                  <option value="Trafficking for sexual visuals/pornography">Trafficking for sexual
                    visuals/pornography</option>
                  <option value="Web Enabled Trafficking">Web Enabled Trafficking</option>
                  <option value="Trafficking in Migrants">Trafficking in Migrants</option>
                  <option value="Organ Trafficking">Organ Trafficking</option>
                  <option value="Trafficking in Refugee">Trafficking in Refugee</option>
                  <option value="Other (Specify)">Other (Specify)</option>
                </select>
              </td>
              <td>
                <select name="form_three_location" id="" class="form-control">
                    <option value="" disabled selected>---Select Location--</option>
                  <option value="Barisal">  Barisal </option>
                 <option value="Chattogram">Chattogram </option>
                  <option value="Dhaka">Dhaka </option>
                   <option value="Khulna">Khulna </option>
                  <option value="Mymensingh">Mymensingh </option>
                    <option value="Rajshahi">Rajshahi </option>
                  <option value="Rangpur">Rangpur </option>
                  <option value="Sylhet">Sylhet </option>
                  <option value="National">National </option>
                  </select>
              </td>

            </tr>
            <tr>
              <td>New form # 4</td>
              <td><select name="form_four_type" id="" class="form-control">
                  <option value="Forced sexual exploitation">Choose an Item</option>
                  <option value="Forced sexual exploitation">Forced sexual exploitation</option>
                  <option value="Trafficking for sexual visuals/pornography">Trafficking for sexual
                    visuals/pornography</option>
                  <option value="Web Enabled Trafficking">Web Enabled Trafficking</option>
                  <option value="Trafficking in Migrants">Trafficking in Migrants</option>
                  <option value="Organ Trafficking">Organ Trafficking</option>
                  <option value="Trafficking in Refugee">Trafficking in Refugee</option>
                  <option value="Other (Specify)">Other (Specify)</option>
                </select>
              </td>
              <td>
                <select name="form_four_location" id="" class="form-control">
                    <option value="" disabled selected>---Select Location--</option>
                  <option value="Barisal">  Barisal </option>
                 <option value="Chattogram">Chattogram </option>
                  <option value="Dhaka">Dhaka </option>
                   <option value="Khulna">Khulna </option>
                  <option value="Mymensingh">Mymensingh </option>
                    <option value="Rajshahi">Rajshahi </option>
                  <option value="Rangpur">Rangpur </option>
                  <option value="Sylhet">Sylhet </option>
                  <option value="National">National </option>
                  </select>
              </td>

            </tr>
            <tr>
              <td>New form # 5</td>
              <td><select name="form_five_type" id="" class="form-control">
                  <option value="Forced sexual exploitation">Choose an Item</option>
                  <option value="Forced sexual exploitation">Forced sexual exploitation</option>
                  <option value="Trafficking for sexual visuals/pornography">Trafficking for sexual
                    visuals/pornography</option>
                  <option value="Web Enabled Trafficking">Web Enabled Trafficking</option>
                  <option value="Trafficking in Migrants">Trafficking in Migrants</option>
                  <option value="Organ Trafficking">Organ Trafficking</option>
                  <option value="Trafficking in Refugee">Trafficking in Refugee</option>
                  <option value="Other (Specify)">Other (Specify)</option>
                </select>
              </td>
              <td>
                <select name="form_five_location" id="" class="form-control">
                    <option value="" disabled selected>---Select Location--</option>
                  <option value="Barisal">  Barisal </option>
                 <option value="Chattogram">Chattogram </option>
                  <option value="Dhaka">Dhaka </option>
                   <option value="Khulna">Khulna </option>
                  <option value="Mymensingh">Mymensingh </option>
                    <option value="Rajshahi">Rajshahi </option>
                  <option value="Rangpur">Rangpur </option>
                  <option value="Sylhet">Sylhet </option>
                  <option value="National">National </option>
                  </select>
              </td>

            </tr>


          </tbody>

        </table>
       </div>


        <br>


      </div>
    </div>
  </div>

@endif




@if(Auth::user()->can('2.question'))
<style>
  .otherText{
    display:none
  }
</style>
<div class="col-md-12 question2">
    <div class="card card-outline collapsed-card">
      <div class="card-header">

        <h3 class="card-title">2. Which identified groups are at particular risk of sex trafficking and forced
          labor?</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
      <div class="icheck-primary">
            <input type="radio" id="radioTwo1" class="sex_trafficking_force_labor_status" name="sex_trafficking_force_labor_status" checked  value="yes">
            <label for="radioTwo1">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input type="radio" id="radioTwo2"  class="sex_trafficking_force_labor_status" name="sex_trafficking_force_labor_status"  value="no">
            <label for="radioTwo2">
              No
            </label>
          </div>
         <div id="2_question_view">
        <table class="table" style="border: 0;">
          <thead>
            <tr>
              <th align="center">Level of Risky community</th>
              <th align="center">Choose of vulnerable-list</th>
              <th align="center">Others (Specify)</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Most at risk</td>
              <td><select name="most_rick_type" id="" class="form-control">
                  <option value="">Choose an item.</option>
                  <option value="Migrant Men">Migrant Men</option>
                  <option value="Migrant Women">Migrant Women</option>
                  <option value="Third Gender">Third Gender</option>
                  <option value="Girls of Poor Household">Girls of Poor Household</option>
                  <option value="Boys of Poor Household">Boys of Poor Household</option>
                  <option value="Men">Men</option>
                  <option value="Women">Women</option>
                  <option value="Children of Sex Worker">Children of Sex Worker</option>
                  <option value="Child Labour">Child Labour</option>
                  <option value="Street Children">Street Children</option>
                  <option value="Other (Specify)">Other (Specify)</option>
                </select>
              </td>
              <td><input type="text" name="most_rick_other" id="" class="form-control"> </td>
            </tr>
            <tr>
              <td>Moderately at risk</td>
              <td><select name="moderately_rick_type" id="" class="form-control">
                  <option value="">Choose an item.</option>
                  <option value="Migrant Men">Migrant Men</option>
                  <option value="Migrant Women">Migrant Women</option>
                  <option value="Third Gender">Third Gender</option>
                  <option value="Girls of Poor Household">Girls of Poor Household</option>
                  <option value="Boys of Poor Household">Boys of Poor Household</option>
                  <option value="Men">Men</option>
                  <option value="Women">Women</option>
                  <option value="Children of Sex Worker">Children of Sex Worker</option>
                  <option value="Child Labour">Child Labour</option>
                  <option value="Street Children">Street Children</option>
                  <option value="Other (Specify)">Other (Specify)</option>
                </select>
              </td>
              <td><input type="text" name="moderately_rick_other" id="" class="form-control"> </td>
            </tr>
            <tr>
              <td>Least at Risk</td>
              <td><select name="least_rick_type"  class="form-control" id="leastRiskSelect" >
                  <option value="">Choose an item.</option>
                  <option value="Migrant Men">Migrant Men</option>
                  <option value="Migrant Women">Migrant Women</option>
                  <option value="Third Gender">Third Gender</option>
                  <option value="Girls of Poor Household">Girls of Poor Household</option>
                  <option value="Boys of Poor Household">Boys of Poor Household</option>
                  <option value="Men">Men</option>
                  <option value="Women">Women</option>
                  <option value="Children of Sex Worker">Children of Sex Worker</option>
                  <option value="Child Labour">Child Labour</option>
                  <option value="Street Children">Street Children</option>
                  <option value="Other (Specify)">Other (Specify)</option>
                </select>
              </td>
              <td><input type="text"  name="two_six" class="form-control otherText" id="leastRiskOther"> </td>
            </tr>
          </tbody>

        </table>
       </div>


        <br>


      </div>
    </div>
  </div>
  @endif

  @if(Auth::user()->can('9.question'))
<div class="col-md-12 question9">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">9.Did the ministry/agency/organization fund and/or conduct awareness activities?
      </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
          <div class="icheck-primary">
            <input type="radio" id="radioPrimary1" class="nine_status" name="nine_status" checked  value="yes">
            <label for="radioPrimary1">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input type="radio" id="radioPrimary2"  class="nine_status" name="nine_status"  value="no">
            <label for="radioPrimary2">
              No
            </label>
          </div>
          <div class="icheck-primary input-group mb-3">
            <input type="radio" id="radioPrimary3" class="nine_status" name="nine_status"  value="others">
            <label for="radioPrimary3">
              Others &nbsp            </label> <span class="othersText col-md-6 mt--4" style="margin-top:-8px;display:none">
            <input type="text" id="q9others"   placeholder="Others "  class="form-control" name="others"></span>
          </div>

          <div id ="9_question_view">
      <table class="table table-white">
        <thead>
          <tr>
            <th rowspan="2" scope="col">Types of Activities</th>
            <th colspan="6">Community (number covered)s</th>

            <!-- <th colspan="3">Total (number covered)</th> -->
            <th scope="col">Location</th>
          </tr>

          <tr>
            <th scope="col">M </th>
            <th scope="col">W</th>
            <th scope="col">3rd G</th>
            <th scope="col">B</th>
            <th scope="col">G</th>
            <th scope="col">T</th>

            <!-- <th scope="col">M </th>
            <th scope="col">F</th>
            <th scope="col">T</th> -->
            <th></th>
           
          </tr>
          <tr>
            <th scope="col">Courtyard meeting </th>
            <input type="hidden" name="courtyard_meeting" value="1">
            <th scope="col"><input name="nine_two" type="text" class="form-control question9RowMen question9Col1"></th>
            <th scope="col"><input name="nine_three" type="text" class="form-control question9RowWomen question9Col1"></th>
            <th scope="col"><input name="nine_four" type="text" class="form-control question9Row3rdGender question9Col1"></th>
            <th scope="col"><input name="nine_five" type="text" class="form-control question9RowBoys question9Col1"></th>
            <th scope="col"><input  name="nine_six" type="text" class="form-control  question9RowGirls question9Col1 "></th>
            <th scope="col"><input name="nine_seven" type="text" id="question9Col1"  class="form-control q9Total" readonly="true"></th>
            <!-- <th scope="col"><input name="nine_eight" type="text" class="form-control question9RowMen question10Col1"></th>
            <th scope="col"><input name="nine_nine" type="text" class="form-control question9RowWomen question10Col1"></th>
            <th scope="col"><input name="nine_ten" type="text" id="question10Col1"  class="form-control q10Total" readonly></th> -->
            <th scope="col">
              <select name="nine_eleven[]" id="" class="form-control multiSelect" multiple="multiple">
                <option value="Barisal">Barisal </option>
                <option value="Chattogram">Chattogram </option>
                <option value="Dhaka">Dhaka </option>
                <option value="Khulna">Khulna </option>
                <option value="Mymensingh">Mymensingh </option>
                <option value="Rajshahi">Rajshahi </option>
                <option value="Rangpur">Rangpur </option>
                <option value="Sylhet">Sylhet </option>
                <option value="National">National </option>
              </select>
            </th>
          </tr>
          <tr>
            <th scope="col">Bazar/hatt meeting</th>
            <input type="hidden" name="bazar_hatt_meeting" value="1">
            <th scope="col"><input name="nine_twelve" type="text" class="form-control question9RowMen question9Col2"></th>
            <th scope="col"><input name="nine_thirteen" type="text" class="form-control question9RowWomen question9Col2"></th>
            <th scope="col"><input name="nine_fourteen" type="text" class="form-control question9Row3rdGender question9Col2"></th>
            <th scope="col"><input name="nine_fifteen" type="text" class="form-control question9RowBoys question9Col2"></th>
            <th scope="col"><input name="nine_sixteen" type="text" class="form-control question9RowGirls question9Col2"></th>
            <th scope="col"><input name="nine_seventeen" type="text" id="question9Col2"  class="form-control q9Total" readonly="true"></th>

            <!-- <th scope="col"><input name="nine_eighteen" type="text" class="form-control question9RowMen question10Col2"></th>
            <th scope="col"><input name="nine_nineteen" type="text" class="form-control question9RowWomen question10Col2"></th>
            <th scope="col"><input name="nine_twenty" type="text" id="question10Col2"  class="form-control q10Total" readonly></th> -->
            <th scope="col">
              <select name="nine_twenty_one[]" id="" class="form-control multiSelect" multiple="multiple">
                <option value="Barisal">Barisal </option>
                <option value="Chattogram">Chattogram </option>
                <option value="Dhaka">Dhaka </option>
                <option value="Khulna">Khulna </option>
                <option value="Mymensingh">Mymensingh </option>
                <option value="Rajshahi">Rajshahi </option>
                <option value="Rangpur">Rangpur </option>
                <option value="Sylhet">Sylhet </option>
                <option value="National">National </option>
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">CTC meeting </th>
            <input type="hidden" name="ctc_meeting" value="1">
            <th scope="col"><input name="nine_twenty_two" type="text" class="form-control question9RowMen question9Col3"></th>
            <th scope="col"><input name="nine_twenty_three" type="text" class="form-control question9RowWomen question9Col3"></th>
            <th scope="col"><input name="nine_twenty_four" type="text" class="form-control question9Row3rdGender question9Col3"></th>
            <th scope="col"><input name="nine_twenty_five" type="text" class="form-control question9RowBoys question9Col3"></th>
            <th scope="col"><input name="nine_twenty_six" type="text" class="form-control question9RowGirls question9Col3"></th>
            <th scope="col"><input name="nine_twenty_seven" type="text" id="question9Col3"  class="form-control q9Total" readonly="true"></th>

            <!-- <th scope="col"><input name="nine_twenty_eight" type="text" class="form-control  question10RowMen question10Col3"></th>
            <th scope="col"><input name="nine_twenty_night" type="text" class="form-control question10RowWomen question10Col3"></th>
            <th scope="col"><input name="nine_thirty" type="text" id="question10Col3"  class="form-control q10Total" readonly></th> -->
            <th scope="col">
              <select name="nine_thirty_one[]" id="" class="form-control multiSelect" multiple="multiple">
                <option value="Barisal">Barisal </option>
                <option value="Chattogram">Chattogram </option>
                <option value="Dhaka">Dhaka </option>
                <option value="Khulna">Khulna </option>
                <option value="Mymensingh">Mymensingh </option>
                <option value="Rajshahi">Rajshahi </option>
                <option value="Rangpur">Rangpur </option>
                <option value="Sylhet">Sylhet </option>
                <option value="National">National </option>
              </select>
            </th>
          </tr>
          <tr>
            <th scope="col">Consultation </th>
            <input type="hidden" name="consultation" value="1">
            <th scope="col"><input name="nine_thirty_two" type="text" class="form-control question9RowMen question9Col4"></th>
            <th scope="col"><input name="nine_thirty_three" type="text" class="form-control question9RowWomen question9Col4"></th>
            <th scope="col"><input name="nine_thirty_four" type="text" class="form-control question9Row3rdGender question9Col4"></th>
            <th scope="col"><input name="nine_thirty_five" type="text" class="form-control question9RowBoys question9Col4"></th>
            <th scope="col"><input name="nine_thirty_six" type="text" class="form-control question9RowGirls question9Col4"></th>
            <th scope="col"><input name="nine_thirty_seven" type="text"  id="question9Col4"  class="form-control q9Total" readonly="true"></th>

            <!-- <th scope="col"><input name="nine_thirty_eight" type="text" class="form-control question10RowMen question10Col4"></th>
            <th scope="col"><input name="nine_thirty_night" type="text" class="form-control question10RowWomen question10Col4"></th>
            <th scope="col"><input name="nine_forty" type="text"  id="question10Col4"  class="form-control q10Total" readonly></th> -->
            <th scope="col">
              <select name="nine_forty_one[]" id="" class="form-control multiSelect" multiple="multiple">
                <option value="Barisal">Barisal </option>
                <option value="Chattogram">Chattogram </option>
                <option value="Dhaka">Dhaka </option>
                <option value="Khulna">Khulna </option>
                <option value="Mymensingh">Mymensingh </option>
                <option value="Rajshahi">Rajshahi </option>
                <option value="Rangpur">Rangpur </option>
                <option value="Sylhet">Sylhet </option>
                <option value="National">National </option>
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">Poster </th>
            <input type="hidden" name="poster" value="1">
            <th scope="col"><input name="nine_forty_two" type="text" class="form-control question9RowMen question9Col5"></th>
            <th scope="col"><input name="nine_forty_three" type="text" class="form-control question9RowWomen question9Col5"></th>
            <th scope="col"><input name="nine_forty_four" type="text" class="form-control question9Row3rdGender question9Col5"></th>
            <th scope="col"><input name="nine_forty_five" type="text" class="form-control  question9RowBoys question9Col5"></th>
            <th scope="col"><input name="nine_forty_six" type="text" class="form-control question9RowGirls question9Col5"></th>
            <th scope="col"><input name="nine_forty_seven" type="text" id="question9Col5"  class="form-control q9Total" readonly="true"></th>

            <!-- <th scope="col"><input name="nine_forty_eight" type="text" class="form-control question10RowMen question10Col5"></th>
            <th scope="col"><input name="nine_forty_night" type="text" class="form-control question10RowWomen question10Col5"></th>
            <th scope="col"><input name="nine_fifty" type="text" id="question10Col5"  class="form-control q10Total" readonly></th> -->
            <th scope="col">
              <select name="nine1_two[]" id=""class="form-control multiSelect" multiple="multiple">
                <option value="Barisal">Barisal </option>
                <option value="Chattogram">Chattogram </option>
                <option value="Dhaka">Dhaka </option>
                <option value="Khulna">Khulna </option>
                <option value="Mymensingh">Mymensingh </option>
                <option value="Rajshahi">Rajshahi </option>
                <option value="Rangpur">Rangpur </option>
                <option value="Sylhet">Sylhet </option>
                <option value="National">National </option>
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">leaflet </th>
            <input type="hidden" name="leaflet" value="1">
            <th scope="col"><input name="nine1_three" type="text" class="form-control question9RowMen question9Col6"></th>
            <th scope="col"><input name="nine1_four" type="text" class="form-control question9RowWomen question9Col6"></th>
            <th scope="col"><input name="nine1_five" type="text" class="form-control question9Row3rdGender question9Col6"></th>
            <th scope="col"><input name="nine1_six" type="text" class="form-control  question9RowBoys question9Col6"></th>
            <th scope="col"><input name="nine1_seven" type="text" class="form-control question9RowGirls question9Col6"></th>
            <th scope="col"><input name="nine1_eight" type="text" id="question9Col6"  class="form-control q9Total" readonly="true"></th>

            <!-- <th scope="col"><input name="nine1_nine" type="text" class="form-control question10RowMen question10Col6"></th>
            <th scope="col"><input name="nine1_ten" type="text" class="form-control question10RowWomen question10Col6"></th>
            <th scope="col"><input name="nine1_eleven" type="text" id="question10Col6"  class="form-control q10Total" readonly></th> -->
            <th scope="col">
              <select name="nine1_twelve[]" id="" class="form-control multiSelect" multiple="multiple">
                <option value="Barisal">Barisal </option>
                <option value="Chattogram">Chattogram </option>
                <option value="Dhaka">Dhaka </option>
                <option value="Khulna">Khulna </option>
                <option value="Mymensingh">Mymensingh </option>
                <option value="Rajshahi">Rajshahi </option>
                <option value="Rangpur">Rangpur </option>
                <option value="Sylhet">Sylhet </option>
                <option value="National">National </option>
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">Booklet </th>
            <input type="hidden" name="booklet" value="1">
            <th scope="col"><input name="nine1_thirteen"  type="text" class="form-control question9RowMen question9Col7"></th>
            <th scope="col"><input name="nine1_fourteen"  type="text" class="form-control question9RowWomen question9Col7"></th>
            <th scope="col"><input name="nine1_fifteen"  type="text" class="form-control question9Row3rdGender question9Col7"></th>
            <th scope="col"><input name="nine1_sixteen"  type="text" class="form-control question9RowBoys question9Col7"></th>
            <th scope="col"><input name="nine1_seventeen"  type="text" class="form-control  question9RowGirls question9Col7"></th>
            <th scope="col"><input name="nine1_eighteen"  type="text" id="question9Col7"  class="form-control q9Total" readonly="true"></th>
            <!-- <th scope="col"><input name="nine1_nineteen"  type="text" class="form-control question10RowMen question10Col7"></th>
            <th scope="col"><input name="nine1_twenty"  type="text" class="form-control question10RowWomen question10Col7"></th>
            <th scope="col"><input name="nine1_twenty_one" type="text" id="question10Col7"  class="form-control q10Total" readonly ></th> -->
            <th scope="col">
              <select name="nine1_twenty_two[]" id="" class="form-control multiSelect" multiple="multiple">
                <option value="Barisal">Barisal </option>
                <option value="Chattogram">Chattogram </option>
                <option value="Dhaka">Dhaka </option>
                <option value="Khulna">Khulna </option>
                <option value="Mymensingh">Mymensingh </option>
                <option value="Rajshahi">Rajshahi </option>
                <option value="Rangpur">Rangpur </option>
                <option value="Sylhet">Sylhet </option>
                <option value="National">National </option>
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">SMS </th>
            <input type="hidden" name="sms" value="1">
            <th scope="col"><input name="nine1_twenty_three" type="text" class="form-control question9RowMen question9Col8"></th>
            <th scope="col"><input name="nine1_twenty_four" type="text" class="form-control question9RowWomen question9Col8"></th>
            <th scope="col"><input name="nine1_twenty_five" type="text" class="form-control question9Row3rdGender question9Col8"></th>
            <th scope="col"><input name="nine1_twenty_six" type="text" class="form-control  question9RowBoys question9Col8"></th>
            <th scope="col"><input name="nine1_twenty_seven" type="text" class="form-control  question9RowGirls question9Col8"></th>
            <th scope="col"><input name="nine1_twenty_eight" type="text"  id="question9Col8"  class="form-control q9Total" readonly="true"></th>


            <!-- <th scope="col"><input name="nine1_twenty_night" type="text" class="form-control question10RowMen question10Col8"></th>
            <th scope="col"><input name="nine1_thirty" type="text" class="form-control question10RowWomen question10Col8"></th>
            <th scope="col"><input name="nine1_thirty_one" type="text" id="question10Col8"  class="form-control q10Total" readonly></th> -->
            <th scope="col">
              <select name="nine1_thirty_two" id="" class="form-control multiSelect" multiple="multiple">
                <option value="Barisal">Barisal </option>
                <option value="Chattogram">Chattogram </option>
                <option value="Dhaka">Dhaka </option>
                <option value="Khulna">Khulna </option>
                <option value="Mymensingh">Mymensingh </option>
                <option value="Rajshahi">Rajshahi </option>
                <option value="Rangpur">Rangpur </option>
                <option value="Sylhet">Sylhet </option>
                <option value="National">National </option>
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">Newsletter </th>
            <input type="hidden" name="newsletter" value="1">
            <th scope="col"><input name="nine1_thirty_three"  type="text" class="form-control question9RowMen question9Col9"></th>
            <th scope="col"><input name="nine1_thirty_four" type="text" class="form-control question9RowWomen question9Col9"></th>
            <th scope="col"><input name="nine1_thirty_five" type="text" class="form-control  question9Row3rdGender question9Col9"></th>
            <th scope="col"><input name="nine1_thirty_six" type="text" class="form-control question9RowBoys question9Col9"></th>
            <th scope="col"><input name="nine1_thirty_seven" type="text" class="form-control question9RowGirls question9Col9"></th>
            <th scope="col"><input name="nine1_thirty_eight" type="text" id="question9Col9"  class="form-control q9Total" readonly="true"></th>

            <!-- <th scope="col"><input name="nine1_thirty_night" type="text" class="form-control question10RowMen question10Col9"></th>
            <th scope="col"><input name="nine1_forty" type="text" class="form-control question10RowWomen question10Col9"></th>
            <th scope="col"><input name="nine1_forty_one" type="text"  id="question10Col9"  class="form-control q10Total" readonly></th> -->
            <th scope="col">
              <select name="nine1_forty_two[]" id="" class="form-control multiSelect" multiple="multiple">
                <option value="Barisal">Barisal </option>
                <option value="Chattogram">Chattogram </option>
                <option value="Dhaka">Dhaka </option>
                <option value="Khulna">Khulna </option>
                <option value="Mymensingh">Mymensingh </option>
                <option value="Rajshahi">Rajshahi </option>
                <option value="Rangpur">Rangpur </option>
                <option value="Sylhet">Sylhet </option>
                <option value="National">National </option>
              </select>
            </th>
          </tr>
          <tr>
            <th scope="col">Billboard </th>
            <input type="hidden" name="billboard" value="1">
            <th scope="col"><input name="nine1_forty_three" type="text" class="form-control question9RowMen question9Co20"></th>
            <th scope="col"><input name="nine1_forty_four" type="text" class="form-control question9RowWomen question9Co20"></th>
            <th scope="col"><input name="nine1_forty_five" type="text" class="form-control question9Row3rdGender question9Co20"></th>
            <th scope="col"><input name="nine1_forty_six" type="text" class="form-control question9RowBoys question9Co20"></th>
            <th scope="col"><input name="nine1_forty_seven" type="text" class="form-control question9RowGirls question9Co20"></th>
            <th scope="col"><input name="nine1_forty_eight" type="text" id="question9Co20"  class="form-control q9Total" readonly="true"></th>

            <!-- <th scope="col"><input name="nine1_forty_night" type="text" class="form-control question10RowMen question10Co20"></th>
            <th scope="col"><input name="nine1_fifty" type="text" class="form-control question10RowWomen question10Co20"></th>
            <th scope="col"><input name="nine2_one" type="text" id="question10Co20"  class="form-control q10Total" readonly></th> -->
            <th scope="col">
              <select name="nine2_two[]" id="" class="form-control multiSelect" multiple="multiple">
                <option value="Barisal">Barisal </option>
                <option value="Chattogram">Chattogram </option>
                <option value="Dhaka">Dhaka </option>
                <option value="Khulna">Khulna </option>
                <option value="Mymensingh">Mymensingh </option>
                <option value="Rajshahi">Rajshahi </option>
                <option value="Rangpur">Rangpur </option>
                <option value="Sylhet">Sylhet </option>
                <option value="National">National </option>
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">Folk show </th>
            <input type="hidden" name="folk_show" value="1">
            <th scope="col"><input name="nine2_three" type="text" class="form-control question9RowMen question9Co21"></th>
            <th scope="col"><input name="nine2_four"  type="text" class="form-control question9RowWomen question9Co21"></th>
            <th scope="col"><input name="nine2_five"  type="text" class="form-control question9Row3rdGender question9Co21"></th>
            <th scope="col"><input name="nine2_six"  type="text" class="form-control question9RowBoys question9Co21"></th>
            <th scope="col"><input name="nine2_seven"  type="text" class="form-control question9RowGirls question9Co21"></th>
            <th scope="col"><input name="nine2_eight"  type="text" id="question9Co21"  class="form-control q9Total" readonly="true"></th>

            <!-- <th scope="col"><input name="nine2_nine" type="text" class="form-control question10RowMen question10Co21"></th>
            <th scope="col"><input name="nine2_ten"  type="text" class="form-control question10RowWomen question10Co21"></th>
            <th scope="col"><input name="nine2_eleven" type="text" id="question10Co21"  class="form-control q10Total" readonly></th> -->
            <th scope="col">
              <select name="nine2_twelve[]" id="" class="form-control multiSelect" multiple="multiple">
                <option value="Barisal">Barisal </option>
                <option value="Chattogram">Chattogram </option>
                <option value="Dhaka">Dhaka </option>
                <option value="Khulna">Khulna </option>
                <option value="Mymensingh">Mymensingh </option>
                <option value="Rajshahi">Rajshahi </option>
                <option value="Rangpur">Rangpur </option>
                <option value="Sylhet">Sylhet </option>
                <option value="National">National </option>
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">Film show </th>
            <input type="hidden" name="film_show" value="1">
            <th scope="col"><input name="nine2_thirteen" type="text" class="form-control question9RowMen question9Co22"></th>
            <th scope="col"><input name="nine2_fourteen" type="text" class="form-control question9RowWomen question9Co22"></th>
            <th scope="col"><input name="nine2_fifteen" type="text" class="form-control question9Row3rdGender question9Co22"></th>
            <th scope="col"><input name="nine2_sixteen" type="text" class="form-control question9RowBoys question9Co22"></th>
            <th scope="col"><input name="nine2_seventeen" type="text" class="form-control question9RowGirls question9Co22"></th>
            <th scope="col"><input name="nine2_eighteen" type="text" id="question9Co22"  class="form-control q9Total" readonly="true"></th>

            <!-- <th scope="col"><input name="nine2_nineteen" type="text" class="form-control question10RowMen question10Co22"></th>
            <th scope="col"><input  name="nine2_twenty" type="text" class="form-control question10RowWomen question10Co22"></th>
            <th scope="col"><input name="nine2_twenty_one" type="text" id="question10Co22"  class="form-control q10Total" readonly></th> -->
            <th scope="col">
              <select name="nine2_twenty_two[]" id="" class="form-control multiSelect" multiple="multiple">
                <option value="Barisal">Barisal </option>
                <option value="Chattogram">Chattogram </option>
                <option value="Dhaka">Dhaka </option>
                <option value="Khulna">Khulna </option>
                <option value="Mymensingh">Mymensingh </option>
                <option value="Rajshahi">Rajshahi </option>
                <option value="Rangpur">Rangpur </option>
                <option value="Sylhet">Sylhet </option>
                <option value="National">National </option>
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">Miking </th>
            <input type="hidden" name="miking" value="1">
            <th scope="col"><input name="nine2_twenty_three" type="text" class="form-control question9RowMen question9Co23"></th>
            <th scope="col"><input name="nine2_twenty_four"  type="text" class="form-control question9RowWomen question9Co23"></th>
            <th scope="col"><input name="nine2_twenty_five" type="text" class="form-control question9Row3rdGender question9Co23"></th>
            <th scope="col"><input name="nine2_twenty_six"  type="text" class="form-control question9RowBoys question9Co23"></th>
            <th scope="col"><input name="nine2_twenty_seven"  type="text" class="form-control question9RowGirls question9Co23"></th>
            <th scope="col"><input name="nine2_twenty_eight" type="text"  id="question9Co23"  class="form-control q9Total" readonly="true"></th>

            <!-- <th scope="col"><input name="nine2_twenty_night" type="text" class="form-control question10RowMen question10Co23"></th>
            <th scope="col"><input name="nine2_thirty" type="text" class="form-control question10RowWomen question10Co23"></th>
            <th scope="col"><input name="nine2_thirty_one" type="text" id="question10Co23"  class="form-control q10Total" readonly></th> -->
            <th scope="col">
              <select name="nine2_thirty_two[]" id="" class="form-control multiSelect" multiple="multiple">
                <option value="Barisal">Barisal </option>
                <option value="Chattogram">Chattogram </option>
                <option value="Dhaka">Dhaka </option>
                <option value="Khulna">Khulna </option>
                <option value="Mymensingh">Mymensingh </option>
                <option value="Rajshahi">Rajshahi </option>
                <option value="Rangpur">Rangpur </option>
                <option value="Sylhet">Sylhet </option>
                <option value="National">National </option>
              </select>
            </th>
          </tr>
          <tr>
            <th scope="col">Web campaign </th>
            <input type="hidden" name="web_campaign" value="1">
            <th scope="col"><input name="nine2_thirty_three" type="text" class="form-control question9RowMen question9Co24"></th>
            <th scope="col"><input name="nine2_thirty_four"  type="text" class="form-control question9RowWomen question9Co24"></th>
            <th scope="col"><input name="nine2_thirty_five"  type="text" class="form-control question9Row3rdGender question9Co24"></th>
            <th scope="col"><input name="nine2_thirty_six"  type="text" class="form-control question9RowBoys question9Co24"></th>
            <th scope="col"><input name="nine2_thirty_seven" type="text" class="form-control question9RowGirls question9Co24"></th>
            <th scope="col"><input name="nine2_thirty_eight"  type="text" id="question9Co24"  class="form-control q9Total" readonly="true"></th>

            <!-- <th scope="col"><input name="nine2_thirty_night" type="text" class="form-control question10RowMen question10Co24"></th>
            <th scope="col"><input name="nine2_forty" type="text" class="form-control question10RowWomen question10Co24"></th>
            <th scope="col"><input name="nine2_forty_one" type="text" id="question10Co24"  class="form-control q10Total" readonly></th> -->
            <th scope="col">
              <select name="nine2_forty_two[]" id="" class="form-control multiSelect" multiple="multiple">
                <option value="Barisal">Barisal </option>
                <option value="Chattogram">Chattogram </option>
                <option value="Dhaka">Dhaka </option>
                <option value="Khulna">Khulna </option>
                <option value="Mymensingh">Mymensingh </option>
                <option value="Rajshahi">Rajshahi </option>
                <option value="Rangpur">Rangpur </option>
                <option value="Sylhet">Sylhet </option>
                <option value="National">National </option>
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input name="nine2_forty_three" type="text" class="form-control" width="100%"> </div>
            </th>
            <th scope="col"><input name="nine2_forty_four" type="text" class="form-control question9RowMen question9Co25"></th>
            <th scope="col"><input name="nine2_forty_five" type="text" class="form-control question9RowWomen question9Co25"></th>
            <th scope="col"><input name="nine2_forty_six"  type="text" class="form-control question9Row3rdGender question9Co25"></th>
            <th scope="col"><input name="nine2_forty_seven"  type="text" class="form-control question9RowBoys question9Co25"></th>
            <th scope="col"><input name="nine2_forty_eight"  type="text" class="form-control  question9RowGirls question9Co25"></th>
            <th scope="col"><input name="nine2_forty_night"  type="text"  id="question9Co25"  class="form-control q9Total" readonly="true"></th>

            <!-- <th scope="col"><input name="nine2_fifty" type="text" class="form-control question10RowMen question10Co25"></th>
            <th scope="col"><input name="nine3_one" type="text" class="form-control question10RowWomen question10Co25"></th>
            <th scope="col"><input name="nine3_two" type="text" id="question10Co25"  class="form-control q10Total" readonly></th> -->
            <th scope="col">
              <select name="nine3_three[]" id="" class="form-control multiSelect" multiple="multiple">
                <option value="Barisal">Barisal </option>
                <option value="Chattogram">Chattogram </option>
                <option value="Dhaka">Dhaka </option>
                <option value="Khulna">Khulna </option>
                <option value="Mymensingh">Mymensingh </option>
                <option value="Rajshahi">Rajshahi </option>
                <option value="Rangpur">Rangpur </option>
                <option value="Sylhet">Sylhet </option>
                <option value="National">National </option>
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" name="nine3_four" class="form-control" width="100%"> </div>
            </th>
            <th scope="col"><input name="nine3_five"  type="text" class="form-control question9RowMen question9Co26"></th>
            <th scope="col"><input  name="nine3_six"  type="text" class="form-control question9RowWomen question9Co26"></th>
            <th scope="col"><input name="nine3_seven"  type="text" class="form-control question9Row3rdGender question9Co26"></th>
            <th scope="col"><input name="nine3_eight"  type="text" class="form-control question9RowBoys question9Co26"></th>
            <th scope="col"><input name="nine3_nine"  type="text" class="form-control question9RowGirls question9Co26"></th>
            <th scope="col"><input name="nine3_ten"  type="text" id="question9Co26"  class="form-control q9Total" readonly="true"></th>
<!-- 
            <th scope="col"><input name="nine3_eleven" type="text" class="form-control question10RowMen question10Co26"></th>
            <th scope="col"><input name="nine3_twelve" type="text" class="form-control question10RowWomen question10Co26"></th>
            <th scope="col"><input name="nine3_thirteen" type="text"  id="question10Co26"  class="form-control q10Total" readonly></th> -->
            <th scope="col">
              <select name="nine3_fourteen[]" id="" class="form-control multiSelect" multiple="multiple">
                <option value="Barisal">Barisal </option>
                <option value="Chattogram">Chattogram </option>
                <option value="Dhaka">Dhaka </option>
                <option value="Khulna">Khulna </option>
                <option value="Mymensingh">Mymensingh </option>
                <option value="Rajshahi">Rajshahi </option>
                <option value="Rangpur">Rangpur </option>
                <option value="Sylhet">Sylhet </option>
                <option value="National">National </option>
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input name="nine3_fifteen" type="text" class="form-control" width="100%"> </div>
            </th>
            <th scope="col"><input name="nine3_sixteen" type="text" class="form-control question9RowMen question9Co27"></th>
            <th scope="col"><input name="nine3_seventeen"  type="text" class="form-control question9RowWomen question9Co27"></th>
            <th scope="col"><input name="nine3_eighteen"  type="text" class="form-control question9Row3rdGender question9Co27"></th>
            <th scope="col"><input name="nine3_nineteen"  type="text" class="form-control question9RowBoys question9Co27"></th>
            <th scope="col"><input name="nine3_twenty"  type="text" class="form-control question9RowGirls question9Co27"></th>
            <th scope="col"><input name="nine3_twenty_one"  type="text" id="question9Co27"  class="form-control q9Total" readonly="true"></th>

            <!-- <th scope="col"><input name="nine3_twenty_two"  type="text" class="form-control question10RowMen question10Co27"></th>
            <th scope="col"><input name="nine3_twenty_three"  type="text" class="form-control question10RowWomen question10Co27"></th>
            <th scope="col"><input name="nine3_twenty_four"  type="text" id="question10Co27"  class="form-control q10Total" readonly></th> -->
            <th scope="col">
              <select name="nine3_twenty_five[]" id="" class="form-control multiSelect" multiple="multiple">
                <option value="Barisal">Barisal </option>
                <option value="Chattogram">Chattogram </option>
                <option value="Dhaka">Dhaka </option>
                <option value="Khulna">Khulna </option>
                <option value="Mymensingh">Mymensingh </option>
                <option value="Rajshahi">Rajshahi </option>
                <option value="Rangpur">Rangpur </option>
                <option value="Sylhet">Sylhet </option>
                <option value="National">National </option>
              </select>
            </th>
          </tr>

          <tr>
            <th scope="col">Total </th>
            <th scope="col"><input name="nine3_twenty_six" id="q9MenTotal" type="text" class="form-control q9gTotal" readonly="true"></th>
            <th scope="col"><input name="nine3_twenty_seven" id="q9WomenTotal" type="text" class="form-control q9gTotal" readonly="true"></th>
            <th scope="col"><input name="nine3_twenty_eight" id="q9TrdGTotal" type="text" class="form-control q9gTotal" readonly="true"></th>
            <th scope="col"><input name="nine3_twenty_night" id="q9BoysTotal" type="text" class="form-control q9gTotal" readonly="true"></th>
            <th scope="col"><input name="nine3_thirty" id="q9GirlsTotal" type="text" class="form-control q9gTotal" readonly="true"></th>
            <th scope="col"><input name="nine3_thirty_one" type="text" id="q9gTotal"  class="form-control" readonly="true"></th>

            <!-- <th scope="col"><input name="nine3_thirty_two" type="text" class="form-control question10RowMen question10Co28"></th>
            <th scope="col"><input name="nine3_thirty_three"  type="text" class="form-control  question10RowWomen question10Co28"></th>
            <th scope="col"><input name="nine3_thirty_four"  type="text" id="question10Co28"  class="form-control q10Total" readonly></th> -->
            <th scope="col">
                  <select name="nine3_twenty_five[]" id="" class="form-control multiSelect" multiple="multiple">
                <option value="Barisal">Barisal </option>
                <option value="Chattogram">Chattogram </option>
                <option value="Dhaka">Dhaka </option>
                <option value="Khulna">Khulna </option>
                <option value="Mymensingh">Mymensingh </option>
                <option value="Rajshahi">Rajshahi </option>
                <option value="Rangpur">Rangpur </option>
                <option value="Sylhet">Sylhet </option>
                <option value="National">National </option>
              </select>
            </th>
          </tr>


        </thead>
      </table>
          </div>
    </div>
  </div>
</div>
@endif

@if(Auth::user()->can('21.question'))
<div class="col-md-12 question21">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">21.Were there any new (or changes to preexisting) formal/standard procedures for
        victim identification
        at your ministry/agency/organization?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="icheck-primary">
        <input type="radio" id="q21radioThree1" class="twenty_one_status" checked name="twenty_one_status"  value="yes">
        <label for="q21radioThree1">
          Yes
        </label>
      </div>
      <div class="icheck-primary">
        <input type="radio" id="q21radioThree2" class="twenty_one_status" name="twenty_one_status"  value="no">
        <label for="q21radioThree2">
          No
        </label>
      </div>

      <div class="icheck-primary input-group mb-3">
        <input type="radio" id="q21radioThree3" class="twenty_one_status" name="twenty_one_status"  value="Others">
        <label for="q21radioThree3">
          Others
        </label><span class="othersText col-md-6 mt--4" style="margin-top:-8px;display:none">
            <input type="text" id="q21others"  placeholder="Others "  class="form-control" name="q21others"></span>
      </div>
      <div id ="21_question_view">
      <table class="table table-white">
        <thead>
          <tr>
            <th scope="col">Main document/Procedure</th>
            <th scope="col">Description of change/Status</th>
            <th scope="col">Attach/Upload</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>PSHT Act 2012 on VoT identification</th>
            <td> <select name="twenty_one_one" id="" class="form-control">
                <option value="" disabled selected>---Choose an item--</option>
                <option value="Enforced">Enforced</option>
                <option value="Updated and enforced">Updated and enforced</option>
                <option value="Stricter enforcement">Stricter enforcement</option>
                <option value="Increased efforts">Increased efforts</option>
                <option value="Moderate Effort">Moderate Effortt</option>
                <option value="Less Effort">Less Effort</option>
                <option value="Poor Enforcement">Poor Enforcement</option>
                <option value="Under Review">Under Review</option>
                <option value="Other (Specify) ">Other (Specify) </option>
              </select> </td>
            <td> <input type="file" name="twenty_one_photo" class="form-control"> </td>
          </tr>
          <tr>
            <th scope="row">NRM guideline on VoT identification</th>
            <td> <select name="twenty_one_two" id="" class="form-control">
                <option value="" disabled selected>---Choose an item--</option>
                <option value="Enforced">Enforced</option>
                <option value="Updated and enforced">Updated and enforced</option>
                <option value="Stricter enforcement">Stricter enforcement</option>
                <option value="Increased efforts">Increased efforts</option> 
                <option value="Moderate Effort">Moderate Effortt</option>
                    <option value="Less Effort">Less Effort</option>
                    <option value="Poor Enforcement">Poor Enforcement</option>
                    <option value="Under Review">Under Review</option>
                <option value="Other (Specify) ">Other (Specify) </option>
              </select> </td>
            <td> <input type="file" name="twenty_one_photo1" class="form-control"> </td>
          </tr>
          <tr>
            <th scope="row">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" name="twenty_one_three" class="form-control" width="100%"> </div>
            </th>
            <td> <select name="twenty_one_four" id="" class="form-control">
                <option value="" disabled selected>---Choose an item--</option>
                <option value="Enforced">Enforced</option>
                <option value="Updated and enforced">Updated and enforced</option>
                <option value="Stricter enforcement">Stricter enforcement</option>
                <option value="Increased efforts">Increased efforts</option> 
                <option value="Moderate Effort">Moderate Effortt</option>
                <option value="Less Effort">Less Effort</option>
                <option value="Poor Enforcement">Poor Enforcement</option>
                <option value="Under Review">Under Review</option>
                <option value="Other (Specify) ">Other (Specify) </option>
              </select> </td>
            <td> <input type="file" name="twenty_one_photo2" class="form-control"> </td>
          </tr>
          <tr>
            <th scope="row">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" name="twenty_one_five" class="form-control" width="100%"> </div>
            </th>
            <td> <select name="twenty_one_six" id="" class="form-control">
                <option value="" disabled selected>---Choose an item--</option>
                <option value="Enforced">Enforced</option>
                <option value="Updated and enforced">Updated and enforced</option>
                <option value="Stricter enforcement">Stricter enforcement</option>
                <option value="Increased efforts">Increased efforts</option> 
                <option value="Moderate Effort">Moderate Effortt</option>
                <option value="Less Effort">Less Effort</option>
                <option value="Poor Enforcement">Poor Enforcement</option>
                <option value="Under Review">Under Review</option>
                <option value="Other (Specify) ">Other (Specify) </option>
              </select> </td>
            <td> <input type="file" name="twenty_one_photo3" class="form-control"> </td>
          </tr>
          <tr>
            <th scope="row">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" name="twenty_one_seven" class="form-control" width="100%"> </div>
            </th>
            <td> <select name="twenty_one_eight" id="" class="form-control">
                <option value="" disabled selected>---Choose an item--</option>
                <option value="Enforced">Enforced</option>
                <option value="Updated and enforced">Updated and enforced</option>
                <option value="Stricter enforcement">Stricter enforcement</option>
                <option value="Increased efforts">Increased efforts</option> 
                <option value="Moderate Effort">Moderate Effortt</option>
                <option value="Less Effort">Less Effort</option>
                <option value="Poor Enforcement">Poor Enforcement</option>
                <option value="Under Review">Under Review</option>
                <option value="Other (Specify) ">Other (Specify) </option>
              </select> </td>
            <td> <input type="file" name="twenty_one_photo4" class="form-control"> </td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>
  </div>
</div>
@endif

@if(Auth::user()->can('22.question'))
<div class="col-md-12 question22">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">22.Is there any update on the existing formal written procedures to guide
        enforcement, immigration,
        and social services personnel in proactive victim identification?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="icheck-primary">
        <input type="radio" id="q22radioThree1" class="status" checked name="status"  value="yes">
        <label for="q22radioThree1">
          Yes
        </label>
      </div>
      <div class="icheck-primary">
        <input  type="radio" id="q22radioThree2"class="status" name="status"  value="no">
        <label for="q22radioThree2">
          No
        </label>
      </div>

      <div class="icheck-primary input-group mb-3">
        <input type="radio" id="q22radioThree3" class="status" name="status"  value="Others">
        <label for="q22radioThree3">
          Others
        </label><span class="othersText col-md-6 mt--4" style="margin-top:-8px;display:none">
            <input type="text" id="q22others"  placeholder="Others "  class="form-control" name="q22others"></span>
      </div>
      <div id ="22_question_view">
      <table class="table table-white">
        <thead>
          <tr>
            <th scope="col">Main document/Procedure</th>
            <th scope="col">Description of change/Status</th>
            <th scope="col">Attach/Upload</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Victim Identification Guidelines of PSD/MoHA</th>
            <td> <select name="twenty_two_one" id="" class="form-control">
                @include('superadmin.case.helper.options')
                 <!-- <option value="" disabled selected>---Choose an item--</option>
                <option value="Enforced">Enforced</option>
                <option value="Updated and enforced">Updated and enforced</option>
                <option value="Stricter enforcement">Stricter enforcement</option>
                <option value="Increased efforts">Increased efforts</option>
                <option value="Other (Specify) ">Other (Specify) </option>
                <option value="Moderate Effort">Moderate Effortt</option>
                <option value="Less Effort">Less Effort</option>
                <option value="Poor Enforcement">Poor Enforcement</option>
                <option value="Under Review">Under Review</option> -->
              </select> </td>
            <td> <input type="file" name="twenty_two_photo" class="form-control"> </td>
          </tr>
          <tr>
            <th scope="row">PSHT Act’s Rule on VoT identification</th>
            <td> <select name="twenty_two_two" id="" class="form-control">
                @include('superadmin.case.helper.options')
              </select> </td>
            <td> <input type="file" name="twenty_two_photo1" class="form-control"> </td>
          </tr>
          <tr>
            <th scope="row">Victim identification checklist of MoSW</th>
            <td> <select name="twenty_two_three" id="" class="form-control">
            @include('superadmin.case.helper.options')
              </select> </td>
            <td> <input type="file" name="twenty_two_photo2" class="form-control"> </td>
          </tr>
          <tr>
            <th scope="row">VoT identification under NRM of MoHA</th>
            <td> <select name="twenty_two_four" id="" class="form-control">
              @include('superadmin.case.helper.options')
              </select> </td>
            <td> <input type="file" name="twenty_two_photo3" class="form-control"> </td>
          </tr>
          <tr>
            <th scope="row">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner">
                <input type="text" name="twenty_two_five" class="form-control" width="100%">
              </div>
            </th>
            <td> <select name="twenty_two_six" id="" class="form-control">
               @include('superadmin.case.helper.options')
              </select> </td>
            <td> <input type="file" name="twenty_two_photo4" class="form-control"> </td>
          </tr>

          <tr>
            <th scope="row">

              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner">
                <input type="text" name="twenty_two_seven" class="form-control" width="100%">
              </div>


            </th>
            <td> <select name="twenty_two_eight" id="" class="form-control">
            @include('superadmin.case.helper.options')
              </select> </td>
            <td> <input type="file" name="twenty_two_photo5" class="form-control"> </td>
          </tr>
          <tr>
            <th scope="row">
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner">
                <input type="text" name="twenty_two_night" class="form-control" width="100%">
              </div>
            </th>
            <td> <select name="twenty_two_ten" id="" class="form-control">
                  @include('superadmin.case.helper.options')
              </select> </td>
            <td> <input type="file" name="twenty_two_photo6" class="form-control"> </td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>
  </div>
</div>
@endif

@if(Auth::user()->can('24.question'))
<div class="col-md-12 question24">
    <div class="card card-outline collapsed-card">
      <div class="card-header">
        <h3 class="card-title">24.Were there any new (or changes to preexing) formal/standard procedures for
          victim referral to protected services at your ministry/agency/organization ?</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="icheck-primary">
            <input type="radio" id="q24radioPrimary1" class="twenty_four_status" name="twenty_four_status" checked value="yes">
            <label for="q24radioPrimary1">
              Yes
            </label>
        </div>
        <div class="icheck-primary">
            <input type="radio" id="q24radioPrimary2" class="twenty_four_status" name="twenty_four_status"  value="no">
            <label for="q24radioPrimary2">
              No
            </label>
        </div>

        <div class="icheck-primary input-group mb-3">
            <input type="radio" id="q24radioPrimary3" class="twenty_four_status" name="twenty_four_status"  value="others">
            <label for="q24radioPrimary3">
              Others
            </label><span class="othersText col-md-6 mt--4" style="margin-top:-8px;display:none">
            <input type="text" id="q24others"  placeholder="Others "  class="form-control" name="q24others"></span>
        </div>
          <div class="row">
            <div class="col-md-12">

          
        <div class="col-lg-6 col-6">
        <section class="content">
            <div class="container-fluid">
            <div class="card card-info">
            <div class="card-header">
            <h3 class="card-title">1.	Pie chart on percentage distribution of men, women and 3rd G among total adult </h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
            </button>
            </div>
            </div>
            <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 504px;" width="1008" height="500" class="chartjs-render-monitor"></canvas>
            </div>

            </div>
            </div>
        </section>
        </div>
        <div class="col-lg-6 col-6">
        <section class="content">
          <div class="container-fluid">
          <div class="card card-success">
          <div class="card-header">
          <h3 class="card-title">2.Pie chart on percentage distribution of boy and girl among total children   </h3>
          <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
          </button>
          </div>
          </div>
          <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          <canvas id="pieChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 504px;" width="1008" height="500" class="chartjs-render-monitor"></canvas>
          </div>

          </div>
          </div>
      </section>
        
      </div>
      </div>
          </div>
    </div>
  </div>

  @endif
  @if(Auth::user()->can('48.question'))
<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">48.Did the government/your ministry/department/ organization train law enforcement
        and border security officials on anti-trafficking enforcement, policies, and laws? </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">



      <table class="table table-bordered text-center">
        <thead class="">
          <tr>
            <th rowspan="2" style="text-align: center; margin: bottom 45%;">Category of Trainee </th>
            <th rowspan="2">Training Contents </th>
            <th rowspan="2">Number of Training</th>
            <th rowspan="2">Location
            </th>
            <th rowspan="2">Development Partner</th>
            <th colspan="4">Coverage</th>

          </tr>
          <tr>
            <th>Men</th>
            <th>Women</th>
            <th>3rd G</th>
            <th>Total</th>

          </tr>
          <tr>
            <td rowspan="2">Police</td>
            <td> <select name="" id="" class="form-control">
            <option>--Select Country--</option>
                <option value="PSHT">PSHT</option>
                <option value="PSHT Act 2012">PSHT Act 2012</option>
                <option value="Rule of PSHT Act">Rule of PSHT Act</option>
                <option value="TIP Investigation">TIP Investigation</option>
                <option value="Victim Withess Protection">Victim Withess Protection</option>
                <option value="TIP and MLA">TIP and MLA</option>
                <option value="Role of Police">Role of Police </option>
                <option value="NPA">NPA</option>
                <option value="NRM">NRM</option>
                <option value="VoT identification Guideline">VoT identification Guideline</option>
              </select> </td>
            <td> <input type="text" name="" id="" class="form-control"> </td>
            <td> <select name="" id="" class="form-control">
            <option>--Select District--</option>
               @foreach($districs as $distric)
                <option value="">{{$distric->name}}</option>
               

                @endforeach
              </select> </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td><input type="number" name="" id="" class="form-control question48RowMen question48Col1"></td>
            <td><input type="number" name="" id="" class="form-control question48RowWomen question48Col1"></td>
            <td><input type="number" name="" id="" class="form-control question48RowBoys question48Col1"></td>
            <td><input type="text" name="" id="question48Col1"  class="form-control q48Total" readonly></td>
          </tr>
          <tr>
            <td>
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" class="form-control" width="100%"> </div>
            </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
            <option>--Select District--</option>
            @foreach($districs as $distric)
            <option value="">{{$distric->name}}</option>
           

            @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Col2"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Col2"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Col2"></td>
              <td><input type="text" name="" id="question48Col2"  class="form-control q48Total" readonly></td>

          </tr>

          <tr>
            <td rowspan="2">CID</td>
            <td> <select name="" id="" class="form-control">
            <option>--Select Country--</option>
                <option value="PSHT">PSHT</option>
                <option value="PSHT Act 2012">PSHT Act 2012</option>
                <option value="Rule of PSHT Act">Rule of PSHT Act</option>
                <option value="TIP Investigation">TIP Investigation</option>
                <option value="Victim Withess Protection">Victim Withess Protection</option>
                <option value="TIP and MLA">TIP and MLA</option>
                <option value="Role of Police">Role of Police </option>
                <option value="NPA">NPA</option>
                <option value="NRM">NRM</option>
                <option value="VoT identification Guideline">VoT identification Guideline</option>
              </select> </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Col3"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Col3"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Col3"></td>
              <td><input type="text" name="" id="question48Col3"  class="form-control q48Total" readonly></td>
          </tr>
          <tr>
            <td>
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" class="form-control" width="100%"> </div>
            </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Col4"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Col4"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Col4"></td>
              <td><input type="text" name="" id="question48Col4"  class="form-control q48Total" readonly></td> 
             
           

          </tr>
          <tr>
            <td rowspan="2">RAB</td>
            <td> <select name="" id="" class="form-control">
            <option>--Select Country--</option>
                <option value="PSHT">PSHT</option>
                <option value="PSHT Act 2012">PSHT Act 2012</option>
                <option value="Rule of PSHT Act">Rule of PSHT Act</option>
                <option value="TIP Investigation">TIP Investigation</option>
                <option value="Victim Withess Protection">Victim Withess Protection</option>
                <option value="TIP and MLA">TIP and MLA</option>
                <option value="Role of Police">Role of Police </option>
                <option value="NPA">NPA</option>
                <option value="NRM">NRM</option>
                <option value="VoT identification Guideline">VoT identification Guideline</option>
              </select> </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Col5"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Col5"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Col5"></td>
              <td><input type="text" name="" id="question48Col5"  class="form-control q48Total" readonly></td>
          </tr>
          <tr>
            <td>
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" class="form-control" width="100%"> </div>
            </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Col6"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Col6"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Col6"></td>
              <td><input type="text" name="" id="question48Col6"  class="form-control q48Total" readonly></td>

          </tr>
          <tr>
            <td rowspan="2">Ansar</td>
            <td> <select name="" id="" class="form-control">
            <option>--Select Country--</option>
                <option value="PSHT">PSHT</option>
                <option value="PSHT Act 2012">PSHT Act 2012</option>
                <option value="Rule of PSHT Act">Rule of PSHT Act</option>
                <option value="TIP Investigation">TIP Investigation</option>
                <option value="Victim Withess Protection">Victim Withess Protection</option>
                <option value="TIP and MLA">TIP and MLA</option>
                <option value="Role of Police">Role of Police </option>
                <option value="NPA">NPA</option>
                <option value="NRM">NRM</option>
                <option value="VoT identification Guideline">VoT identification Guideline</option>
              </select> </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Col7"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Col7"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Col7"></td>
              <td><input type="text" name="" id="question48Col7"  class="form-control q48Total" readonly></td>
          </tr>
          <tr>
            <td>
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" class="form-control" width="100%"> </div>
            </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Col8"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Col8"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Col8"></td>
              <td><input type="text" name="" id="question48Col8"  class="form-control q48Total" readonly></td>

          </tr>
          <tr>
            <td rowspan="2">VDP</td>
            <td> <select name="" id="" class="form-control">
            <option>--Select Country--</option>
                <option value="PSHT">PSHT</option>
                <option value="PSHT Act 2012">PSHT Act 2012</option>
                <option value="Rule of PSHT Act">Rule of PSHT Act</option>
                <option value="TIP Investigation">TIP Investigation</option>
                <option value="Victim Withess Protection">Victim Withess Protection</option>
                <option value="TIP and MLA">TIP and MLA</option>
                <option value="Role of Police">Role of Police </option>
                <option value="NPA">NPA</option>
                <option value="NRM">NRM</option>
                <option value="VoT identification Guideline">VoT identification Guideline</option>
              </select> </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Col9"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Col9"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Col9"></td>
              <td><input type="text" name="" id="question48Col9"  class="form-control q48Total" readonly></td>
          </tr>
          <tr>
            <td>
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" class="form-control" width="100%"> </div>
            </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Co20"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Co20"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Co20"></td>
              <td><input type="text" name="" id="question48Co20"  class="form-control q48Total" readonly></td>

          </tr>
          <tr>
            <td rowspan="2">Coast Guard</td>
            <td> <select name="" id="" class="form-control">
            <option>--Select Country--</option>
                <option value="PSHT">PSHT</option>
                <option value="PSHT Act 2012">PSHT Act 2012</option>
                <option value="Rule of PSHT Act">Rule of PSHT Act</option>
                <option value="TIP Investigation">TIP Investigation</option>
                <option value="Victim Withess Protection">Victim Withess Protection</option>
                <option value="TIP and MLA">TIP and MLA</option>
                <option value="Role of Police">Role of Police </option>
                <option value="NPA">NPA</option>
                <option value="NRM">NRM</option>
                <option value="VoT identification Guideline">VoT identification Guideline</option>
              </select> </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Co21"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Co21"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Co21"></td>
              <td><input type="text" name="" id="question48Co21"  class="form-control q48Total" readonly></td>
          </tr>
          <tr>
            <td>
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" class="form-control" width="100%"> </div>
            </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Co22"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Co22"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Co22"></td>
              <td><input type="text" name="" id="question48Co22"  class="form-control q48Total" readonly></td>

          </tr>
          <tr>
            <td rowspan="2">BGB</td>
            <td> <select name="" id="" class="form-control">
            <option>--Select Country--</option>
                <option value="PSHT">PSHT</option>
                <option value="PSHT Act 2012">PSHT Act 2012</option>
                <option value="Rule of PSHT Act">Rule of PSHT Act</option>
                <option value="TIP Investigation">TIP Investigation</option>
                <option value="Victim Withess Protection">Victim Withess Protection</option>
                <option value="TIP and MLA">TIP and MLA</option>
                <option value="Role of Police">Role of Police </option>
                <option value="NPA">NPA</option>
                <option value="NRM">NRM</option>
                <option value="VoT identification Guideline">VoT identification Guideline</option>
              </select> </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Co23"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Co23"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Co23"></td>
              <td><input type="text" name="" id="question48Co23"  class="form-control q48Total" readonly></td>
          </tr>
          <tr>
            <td>
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" class="form-control" width="100%"> </div>
            </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Co24"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Co24"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Co24"></td>
              <td><input type="text" name="" id="question48Co24"  class="form-control q48Total" readonly></td>

          </tr>
          <tr>
            <td rowspan="2">Immigration</td>
            <td> <select name="" id="" class="form-control">
            <option>--Select Country--</option>
                <option value="PSHT">PSHT</option>
                <option value="PSHT Act 2012">PSHT Act 2012</option>
                <option value="Rule of PSHT Act">Rule of PSHT Act</option>
                <option value="TIP Investigation">TIP Investigation</option>
                <option value="Victim Withess Protection">Victim Withess Protection</option>
                <option value="TIP and MLA">TIP and MLA</option>
                <option value="Role of Police">Role of Police </option>
                <option value="NPA">NPA</option>
                <option value="NRM">NRM</option>
                <option value="VoT identification Guideline">VoT identification Guideline</option>
              </select> </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Co25"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Co25"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Co25"></td>
              <td><input type="text" name="" id="question48Co25"  class="form-control q48Total" readonly></td>
          </tr>
          <tr>
            <td>
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" class="form-control" width="100%"> </div>
            </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Co26"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Co26"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Co26"></td>
              <td><input type="text" name="" id="question48Co26"  class="form-control q48Total" readonly></td>

          </tr>






        </thead>


      </table>
    </div>
  </div>
</div>
@endif
@if(Auth::user()->can('58.question'))
     
<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">58.How much did the ministry/agency/organization spent on research/evaluation?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-bordered text-center">
        <thead class="">
          <tr>
            <th align="left">BDT</th>
            <th><input type="text" name="fifty_two_one13" class="form-control"></th>
          </tr>
          <tr>
            <th align="left">Source</th>
            <th><input type="text" name="fifty_moha" class="form-control" placeholder="Govt. Budget"></th>
          </tr>
          <tr>
            <th align="left">Assessment of Allocation</th>
            <th><input type="text" name="assessment_allocation" class="form-control" placeholder="Govt. Budget"></th>
          </tr>
          <tr>
            <th align="left">Others</th>
            <th><input type="text" name="others" class="form-control" placeholder="Govt. Budget"></th>
          </tr>
          
        </thead>
      </table>
    </div>
  </div>
</div>
    @endif  
    @if(Auth::user()->can('60.question'))
<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">

      <h3 class="card-title">60.Please provide any other information which could not be captured in the questionnaire (not more than 500)</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <textarea class="form-control" id="editor" name="description" placeholder="This is some sample content." rows="3"></textarea>
      


      <br>


    </div>
  </div>
</div>

@endif

    <!-- Main content -->
    @if(auth()->user()->status == 0)
   @include('superadmin.dashboard.ministry')
   @include('superadmin.dashboard.agency')
   @include('superadmin.dashboard.agencymoib')
   @include('superadmin.dashboard.ctc')
   @include('superadmin.dashboard.ngo')
   @include('superadmin.dashboard.ingo')
   @include('superadmin.dashboard.un')
   
@endif
@if(auth()->user()->status == 1)
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        {{-- @if(Auth::user()->can('count.prevention'))
          <div class="col-lg-4 col-6">
            <div class="small-box bg-info">
              <div class="inner">
              <h3 align="center"  style="color:black">Situation </h3>
              <div class="row">
               
                  <div class="col-md-6"  style="color:black">
                    10 Submission
                  </div>
                  <div class="col-md-6"  style="color:black">
                    10 Not Submission
                  </div>
                </div>
              </div>
              
              
            </div>
          </div> --}}
          
           {{-- @if(Auth::user()->can('count.protection'))
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3 align="center" style="color:black">Prevention </h3>
              <div class="row">
               
                  <div class="col-md-6"  style="color:black">
                    10 Submission
                  </div>
                  <div class="col-md-6"  style="color:black">
                    10 Not Submission
                  </div>
                </div>
              </div>
              
             
            </div>
          </div>
          @endif --}}
          
            {{-- @if(Auth::user()->can('count.procecution'))
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3 align="center">Protection</h3>
              <div class="row">
               
                  <div class="col-md-6">
                    10 Submission
                  </div>
                  <div class="col-md-6">
                    10 Not Submission
                  </div>
                </div>
              </div>
             
              
            </div>
          </div>
          @endif
           --}}
             {{-- @if(Auth::user()->can('count.procecution'))
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3 align="center">Prosecution</h3>
              <div class="row">
               
                  <div class="col-md-6">
                    10 Submission
                  </div>
                  <div class="col-md-6">
                    10 Not Submission
                  </div>
                </div>
              </div>
             
              
            </div>
          </div>
          @endif --}}
          
          
            {{-- <div class="col-lg-4 col-6">
            <div class="small-box bg-success">
              <div class="inner">
              <h3 align="center"  style="color:black">Partnership </h3>
              <div class="row">
               
                  <div class="col-md-6"  style="color:black">
                    10 Submission
                  </div>
                  <div class="col-md-6" style="color:black">
                    10 Not Submission
                  </div>
                </div>
              </div>
              
              
            </div>
          </div> --}}
          
          
            {{-- <div class="col-lg-4 col-6">
            <div class="small-box bg-info">
              <div class="inner">
              <h3 align="center"  style="color:black">M&E </h3>
              <div class="row">
               
                  <div class="col-md-6"  style="color:black">
                    10 Submission
                  </div>
                  <div class="col-md-6"  style="color:black">
                    10 Not Submission
                  </div>
                </div>
              </div>
              
              
            </div>
          </div> --}}
          
             {{-- <div class="col-lg-4 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
              <h3 align="center">
                Recommendations 
              </h3>
              <div class="row">
               
                  <div class="col-md-6">
                    10 Submission
                  </div>
                  <div class="col-md-6">
                    10 Not Submission
                  </div>
                </div>
              </div>
              
              
            </div>
          </div>
          @endif --}}

         
          <!-- ./col -->
        
          <!-- ./col -->

         
          {{-- @if(Auth::user()->can('count.total'))
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3 align="center"  style="color:black">Total</h3>
              <div class="row">
               
                  <div class="col-md-6"  style="color:black">
                    70 Submission
                  </div>
                  <div class="col-md-6"  style="color:black">
                    70 Not Submission
                  </div>
                </div>
              </div>
           
              
            </div>
          </div>
          @endif
             <div class="col-lg-4 col-6">
                 </div>
                 <div class="col-lg-3 col-6">
                 </div>

         <div class="col-lg-4 col-6">
                 </div>
                    <div class="col-lg-3 col-6">
                 </div> --}}
        {{-- @if(Auth::user()->can('count.case'))
          <div class="col-lg-4 col-6">
            <div class="small-box bg-white">
              <div class="inner">
                <a href="{{url('superadmin/case/create')}}"><p>Create Case </p></a>
                
        
              </div>
            </div>
          </div>
          @endif
        @if(Auth::user()->can('count.case'))
          <div class="col-lg-4 col-6">
            <div class="small-box bg-white">
              <div class="inner">
                <a href="{{url('superadmin/case/list')}}"><p>View Case </p></a>
                
        
              </div>
            </div>
          </div>
          @endif
          @if(Auth::user()->can('count.user'))
          <div class="col-lg-4 col-6">
            <div class="small-box bg-white">
              <div class="inner">
              <a href="{{url('superadmin/user/list')}}"><p>User List</h3></p>
        
              </div>
            </div>
          </div>
          @endif
          @if(Auth::user()->can('count.rolepermission'))
          <div class="col-lg-4 col-6">
            <div class="small-box bg-white">
              <div class="inner">
              <a href="{{url('superadmin/all/role/permission')}}"><p>Role & Permission </p></a>
        
              </div>
            </div>
          </div>
          @endif --}}
          {{-- @if(Auth::user()->can('count.report'))
          <div class="col-lg-4 col-6">
            <div class="small-box bg-white">
              <div class="inner">
              <a href=""><p>Reports </p></a>
        
              </div>
            </div>
          </div>
          @endif
        </div> --}}
        <!-- <div class="col-lg-6 col-6">
        <section class="content">
            <div class="container-fluid">
            <div class="card card-info">
            <div class="card-header">
            <h3 class="card-title">1.	Pie chart on percentage distribution of men, women and 3rd G among total adult </h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
            </button>
            </div>
            </div>
            <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 504px;" width="1008" height="500" class="chartjs-render-monitor"></canvas>
            </div>

            </div>
            </div>
        </section>
        </div>
        <div class="col-lg-6 col-6">
        <section class="content">
          <div class="container-fluid">
          <div class="card card-success">
          <div class="card-header">
          <h3 class="card-title">2.Pie chart on percentage distribution of boy and girl among total children   </h3>
          <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
          </button>
          </div>
          </div>
          <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          <canvas id="pieChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 504px;" width="1008" height="500" class="chartjs-render-monitor"></canvas>
          </div>

          </div>
          </div>
      </section>
        </div> -->

      </div>
    </section>
    @endif
  </div>


  <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>
    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script>
  (async () => {

const topology = await fetch(
    'https://code.highcharts.com/mapdata/countries/bd/bd-all.topo.json'
).then(response => response.json());

// Prepare demo data. The data is joined to map using value of 'hc-key'
// property by default. See API docs for 'joinBy' for more info on linking
// data and map.
const data = [
    ['bd-da', 10], ['bd-kh', 11], ['bd-ba', 12], ['bd-cg', 13],
    ['bd-sy', 14], ['bd-rj', 15], ['bd-rp', 16]
];

// Create the chart
Highcharts.mapChart('container', {
    chart: {
        map: topology
    },

    title: {
        text: ''
    },

    subtitle: {
        text: ': <a href="http://code.highcharts.com/mapdata/countries/bd/bd-all.topo.json">Bangladesh</a>'
    },

    mapNavigation: {
        enabled: true,
        buttonOptions: {
            verticalAlign: 'bottom'
        }
    },

    colorAxis: {
        min: 0
    },

    series: [{
        data: data,
        name: 'Random data',
        states: {
            hover: {
                color: '#BADA55'
            }
        },
        dataLabels: {
            enabled: true,
            format: '{point.name}'
        }
    }]
});

})();

    $(function () {
     
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
   

    $.ajax({    //create an ajax request to display.php
        type: "GET",
        url: "/pichart24",             
     //expect html to be returned                
        success: function(response){    

          var donutData        = {
      labels: [
          'Men',
          'Women',
          'Third Gender',
       
      ],
      datasets: [
        {
          data: [response.data.totalMenPercentage,response.data.totalWoMenPercentage,response.data.total3RDPercentage],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12'],
        }
      ]
    }
 //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }

          new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
      })


      
                      
           
            
        }

    });

    })
//2 NUMBER PICHART
$(function () {
     
     //Create pie or douhnut chart
     // You can switch between pie and douhnut using the method below.
    
 
     $.ajax({    //create an ajax request to display.php
         type: "GET",
         url: "/pichartadult",             
      //expect html to be returned                
         success: function(response){    
 
           var donutData        = {
       labels: [
           'Boys',
           'Girls',
        
       ],
       datasets: [
         {
           data: [response.data.totalBoyPercentage,response.data.totalGirlsPercentage],
           backgroundColor : ['#f56954', '#00a65a'],
         }
       ]
     }
  //- PIE CHART -
     //-------------
     // Get context with jQuery - using jQuery's .get() method.
     var pieChartCanvas = $('#pieChart2').get(0).getContext('2d')
     var pieData        = donutData;
     var pieOptions     = {
       maintainAspectRatio : false,
       responsive : true,
     }
 
           new Chart(pieChartCanvas, {
       type: 'pie',
       data: pieData,
       options: pieOptions
       })
 
 
       
                       
            
             
         }
 
     });
 
     })
    
   

</script>


@endsection