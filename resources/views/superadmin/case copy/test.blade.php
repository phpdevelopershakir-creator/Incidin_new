@extends('layouts.app')
@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/classic/ckeditor.js"></script>
@php
$districs=DB::table('districs')->get();
@endphp

</style>
<style>
  table {
    width: 100%;
    border-spacing: 0;
    border-collapse: collapse;
  }

  td,
  th {
    padding: 0.5rem 1rem;
    border: solid 1px;
  }

  th {
    background-color: #eee;
  }

  .divNew {
    padding-top: 0.1rem;
    display: inline-table;
  }
</style>



<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Case Create New</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <form action="{{url('superadmin/case/store')}}" id="form" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">

          <input type="hidden" name="caseid" value="{{ date('ymdhis') }}">
          <h4 style="text-align:center;">SITUATION OF HUMAN TRAFFICKING  </h4>
          @include('superadmin.case.question.1question')
          @include('superadmin.case.question.2question')
        
   
          @include('superadmin.case.question.3question') 

    <h4>PREVENTION </h4>
   

     @include('superadmin.case.question.4question') 
     @include('superadmin.case.question.5question')
    <!-- question no 6 Start -->
    @if(Auth::user()->can('6.question'))
     <div class="col-md-12 question6">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">6.How much funding (in the local currency) did your ministry/agency/organization
            spend on
            prevention efforts (e.g., awareness campaigns, research projects, national action plan
            implementation, etc.)?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="form-check">
            <input type="radio" id="radioSix1"  class="sixstatus" name="sixstatus" checked  value="yes">
            <label for="radioSix1">
              Yes
            </label>
          </div>
          <div class="form-check">
            <input  type="radio" id="radioSix2"  class="sixstatus"  name="sixstatus"  value="no">
            <label for="radioSix2">
              No
            </label>
          </div>
          <div id="six_question_view">
          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Type of preventive Action</th>
                <th scope="col">Allocation (in BDT)</th>


              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Total Allocation under NPA for prevention</th>
                <td> <input type="text" name="sixone" class="form-control"> </td>


              </tr>
              <tr>
                <th scope="row">Total Allocation utilized under NPA for prevention</th>
                <td> <input type="text" name="sixtwo" class="form-control"> </td>

              </tr>
              <tr>
                <th scope="row">Total allocation spent for Awareness activities</th>
                <td> <input type="text" name="sixthree" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">Total allocation spent for safety-net</th>
                <td> <input type="text" name="sixfour" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">Total allocation spent for training to promote prevention</th>
                <td> <input type="text" name="sixfive" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">Assessment of Allocation</th>
                <td>
                  <select name="sixsix" id="" class="form-control">
                    <option value="Excess">Excess</option>
                    <option value="Adequate">Adequate</option>
                    <option value="Inadequate">Inadequate</option>
                    <option value="None">None</option>
                  </select>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
    <!-- question no 6 end -->
    @endif


    <!-- question no 7 Start -->
    @if(Auth::user()->can('7.question'))
   <div class="col-md-12 question7">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">7.Did your ministry/agency update or create a new national action plan to address
            trafficking? If yes,
            please provide a copy (in English, if available) and note the timeline.</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="form-check">
            <input type="radio" id="radioSeven1" class="sevenstatus" name="sevenstatus" checked value="yes">
            <label for="radioSeven1">
              Yes
            </label>
          </div>
          <div class="form-check">
            <input  type="radio" id="radioSeven2" class="sevenstatus" name="sevenstatus"  value="no">
            <label for="radioSeven2">
              No
            </label>
          </div>
          <div class="form-check">
            <input type="radio" id="radioSeven3" class="sevenstatus" name="sevenstatus"  value="Others">
            <label for="radioSeven3">
              Others
            </label>
          </div>
          <div id="seven_question_view">
          <table class="table table-white">
            <thead>
              <tr>
                <th>Duration of NPA</th>
                <th>Attach/Upload</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th><input type="text" name="seventitle" class="form-control"> </th>
                <td> <input type="file" name="sevenphoto" class="form-control"> </td>
              </tr>
            </tbody>
          </table>
          
          </div>
        </div>
      </div>
    </div> 
    @endif
    <!-- question no 7 end -->



    <!-- question no 8 Start -->
    @if(Auth::user()->can('8.question'))
     <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">8.What resources (funding or in-kind contributions) did your
            ministry/agency/organization devote
            towards implementation of new/updated or existing plans?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">

  <div class="form-check">
            <input class="form-check-input" name="" type="checkbox" value="yes">
            <label class="form-check-label">
              Yes
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="" type="checkbox" value="no">
            <label class="form-check-label">
              No
            </label>
          </div>


          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Allocation</th>
                <th scope="col">Allocation</th>


              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Total Allocation under NPA </th>
                <td> <input type="text" name="eight_one" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">Total Allocation utilized under NPA </th>
                <td> <input type="text" name="eight_two" class="form-control"> </td>

              </tr>
              <tr>
                <th scope="row">Assessment of Allocation </th>
                <td> <select name="eightstatus" id="" class="form-control">
                    <option value="Excess">Excess</option>
                    <option value="Adequate">Adequate</option>
                    <option value="Inadequate">Inadequate</option>
                    <option value="None">None</option>
                  </select>
                </td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>
    </div> 
    @endif
    <!-- question no 8 end -->




    <!-- question no 9 Start -->
  @include('superadmin.case.question.9question')
    <!-- question no 10 end -->
    @include('superadmin.case.question.10question')
    <!-- question no 10 end -->


    <!-- question no 11 Start  -->
    @if(Auth::user()->can('11.question'))
    <div class="col-md-12 question11">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">11.Were there any changes to how your ministry/agency
             regulated and oversaw labor recruitment for licensed and unlicensed recruitment agencies,
              individual recruiters, and sub-brokers</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="form-check">
            <input type="radio" id="radioEleven1"  class="eleven_status" name="eleven_status" checked value="yes">
            <label for="radioEleven1">
              Yes
            </label>
          </div>
          <div class="form-check">
            <input type="radio" id="radioEleven2"  class="eleven_status" name="eleven_status"  value="no">
            <label for="radioEleven2">
              No
            </label>
          </div>

          <div class="form-check">
            <input type="radio" id="radioEleven3"  class="eleven_status" name="eleven_status"  value="Others">
            <label for="radioEleven3">
              Others
            </label>
          </div>
          <div id="eleven_question_view">
          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Original Document/Approach</th>
                <th scope="col">Description of Change</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">OEMA 2013</th>
                <td> <select name="eleven_one" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Firmly Implemented/enforced">Firmly Implemented/enforced</option>
                    <option value="Reformed">Reformed</option>
                    <option value="Planned">Planned</option>
                    <option value="Drafted">Drafted</option>
                    <option value="Updated">Updated</option>
                    <option value="Partially enforced">Partially enforced</option>
                    <option value="Expanded use">Expanded use</option>
                    <option value="Prohibited by law">Prohibited by law</option>
                    <option value="Prohibitated by circular">Prohibitated by circular</option>
                    <option value="Strictly monitored">Strictly monitored</option>
                  </select> </td>
              </tr>
              <tr>
                <th scope="row">Employee-paid-model</th>
                <td> <select name="eleven_two" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Firmly Implemented/enforced">Firmly Implemented/enforced</option>
                    <option value="Reformed">Reformed</option>
                    <option value="Planned">Planned</option>
                    <option value="Drafted">Drafted</option>
                    <option value="Updated">Updated</option>
                    <option value="Partially enforced">Partially enforced</option>
                    <option value="Expanded use">Expanded use</option>
                    <option value="Prohibited by law">Prohibited by law</option>
                    <option value="Prohibitated by circular">Prohibitated by circular</option>
                    <option value="Strictly monitored">Strictly monitored</option>
                  </select></td>
              </tr>
              <tr>
                <th scope="row">Employer-paid-model</th>
                <td> <select name="eleven_three" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Firmly Implemented/enforced">Firmly Implemented/enforced</option>
                    <option value="Reformed">Reformed</option>
                    <option value="Planned">Planned</option>
                    <option value="Drafted">Drafted</option>
                    <option value="Updated">Updated</option>
                    <option value="Partially enforced">Partially enforced</option>
                    <option value="Expanded use">Expanded use</option>
                    <option value="Prohibited by law">Prohibited by law</option>
                    <option value="Prohibitated by circular">Prohibitated by circular</option>
                    <option value="Strictly monitored">Strictly monitored</option>
                  </select> </td>
              </tr>
              <tr>
                <th scope="row">Fair recruitment cost notification</th>
                <td> <select name="eleven_four" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Firmly Implemented/enforced">Firmly Implemented/enforced</option>
                    <option value="Reformed">Reformed</option>
                    <option value="Planned">Planned</option>
                    <option value="Drafted">Drafted</option>
                    <option value="Updated">Updated</option>
                    <option value="Partially enforced">Partially enforced</option>
                    <option value="Expanded use">Expanded use</option>
                    <option value="Prohibited by law">Prohibited by law</option>
                    <option value="Prohibitated by circular">Prohibitated by circular</option>
                    <option value="Strictly monitored">Strictly monitored</option>
                  </select> </td>
              </tr>
              <tr>
                <th scope="row">Ranking of Recruiting Agents</th>
                <td> <select name="eleven_five" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Firmly Implemented/enforced">Firmly Implemented/enforced</option>
                    <option value="Reformed">Reformed</option>
                    <option value="Planned">Planned</option>
                    <option value="Drafted">Drafted</option>
                    <option value="Updated">Updated</option>
                    <option value="Partially enforced">Partially enforced</option>
                    <option value="Expanded use">Expanded use</option>
                    <option value="Prohibited by law">Prohibited by law</option>
                    <option value="Prohibitated by circular">Prohibitated by circular</option>
                    <option value="Strictly monitored">Strictly monitored</option>
                  </select></td>
              </tr>
              <tr>
                <th scope="row">Licensing of Recruiting Agents</th>
                <td> <select name="eleven_six" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Firmly Implemented/enforced">Firmly Implemented/enforced</option>
                    <option value="Reformed">Reformed</option>
                    <option value="Planned">Planned</option>
                    <option value="Drafted">Drafted</option>
                    <option value="Updated">Updated</option>
                    <option value="Partially enforced">Partially enforced</option>
                    <option value="Expanded use">Expanded use</option>
                    <option value="Prohibited by law">Prohibited by law</option>
                    <option value="Prohibitated by circular">Prohibitated by circular</option>
                    <option value="Strictly monitored">Strictly monitored</option>
                  </select></td>
              </tr>
              <tr>
                <th scope="row">Registration of Informal Recruiting Agents</th>
                <td> <select name="eleven_seven" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Firmly Implemented/enforced">Firmly Implemented/enforced</option>
                    <option value="Reformed">Reformed</option>
                    <option value="Planned">Planned</option>
                    <option value="Drafted">Drafted</option>
                    <option value="Updated">Updated</option>
                    <option value="Partially enforced">Partially enforced</option>
                    <option value="Expanded use">Expanded use</option>
                    <option value="Prohibited by law">Prohibited by law</option>
                    <option value="Prohibitated by circular">Prohibitated by circular</option>
                    <option value="Strictly monitored">Strictly monitored</option>
                  </select> </td>
              </tr>
              <tr>
                <th scope="row">Zero Migration Cost Approach</th>
                <td> <select name="eleven_eight" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Firmly Implemented/enforced">Firmly Implemented/enforced</option>
                    <option value="Reformed">Reformed</option>
                    <option value="Planned">Planned</option>
                    <option value="Drafted">Drafted</option>
                    <option value="Updated">Updated</option>
                    <option value="Partially enforced">Partially enforced</option>
                    <option value="Expanded use">Expanded use</option>
                    <option value="Prohibited by law">Prohibited by law</option>
                    <option value="Prohibitated by circular">Prohibitated by circular</option>
                    <option value="Strictly monitored">Strictly monitored</option>
                  </select></td>
              </tr>

              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="eleven_night" class="form-control" width="100%"> </div>
                </th>
                <td> <select name="eleven_ten" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Firmly Implemented/enforced">Firmly Implemented/enforced</option>
                    <option value="Reformed">Reformed</option>
                    <option value="Planned">Planned</option>
                    <option value="Drafted">Drafted</option>
                    <option value="Updated">Updated</option>
                    <option value="Partially enforced">Partially enforced</option>
                    <option value="Expanded use">Expanded use</option>
                    <option value="Prohibited by law">Prohibited by law</option>
                    <option value="Prohibitated by circular">Prohibitated by circular</option>
                    <option value="Strictly monitored">Strictly monitored</option>
                  </select> </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="othersone" class="form-control" width="100%"> </div>
                </th>
                <td> <select name="eleven_eleven" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Firmly Implemented/enforced">Firmly Implemented/enforced</option>
                    <option value="Reformed">Reformed</option>
                    <option value="Planned">Planned</option>
                    <option value="Drafted">Drafted</option>
                    <option value="Updated">Updated</option>
                    <option value="Partially enforced">Partially enforced</option>
                    <option value="Expanded use">Expanded use</option>
                    <option value="Prohibited by law">Prohibited by law</option>
                    <option value="Prohibitated by circular">Prohibitated by circular</option>
                    <option value="Strictly monitored">Strictly monitored</option>
                  </select> </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="eleven_otherstwo" class="form-control" width="100%"> </div>
                </th>
                <td> <select name="eleven_twleve" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Firmly Implemented/enforced">Firmly Implemented/enforced</option>
                    <option value="Reformed">Reformed</option>
                    <option value="Planned">Planned</option>
                    <option value="Drafted">Drafted</option>
                    <option value="Updated">Updated</option>
                    <option value="Partially enforced">Partially enforced</option>
                    <option value="Expanded use">Expanded use</option>
                    <option value="Prohibited by law">Prohibited by law</option>
                    <option value="Prohibitated by circular">Prohibitated by circular</option>
                    <option value="Strictly monitored">Strictly monitored</option>
                  </select> </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="eleven_otherstwo" class="form-control" width="100%"> </div>
                </th>
                <td> <input type="text" name="eleven_thirteen" class="form-control"> </td>
              </tr>
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
    @endif
    <!-- question no 11 end -->


    <!-- question no 12 Start -->
    @include('superadmin.case.question.12question')
    <!-- question no 12 end -->


    <!-- question no 13 Start -->
    @if(Auth::user()->can('13.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">13.Did your ministry/agency/organization take tangible action to prevent forced
            labor in domestic or
            global supply chains?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <table class="table" border="2">
            <thead>
              <tr>

                <th scope="col">Action Level</th>
                <th scope="col">Type of Action (Multiple Response)</th>
                <th scope="col">Attach/Upload/Summary</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <th rowspan="4" scope="row">National</th>
                <td> <select name="thirteen_one" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Reform of Labour Law">Reform of Labour Law</option>
                    <option value="Stricter Enforcement of law">Stricter Enforcement of law</option>
                    <option value="Research">Research</option>
                    <option value="Stricter monitoring">Stricter monitoring</option>
                    <option value="Training of Factory Inspectors">Training of Factory Inspectors</option>
                    <option value="Training of Trade Unions">Training of Trade Unions</option>
                    <option value="Training of entrepreneurs">Training of entrepreneurs</option>
                    <option value="Increased legal action">Increased legal action</option>
                  </select>
                </td>
                <td> <input type="file" name="thirteen_photo" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="thirteen_two" class="form-control" width="100%"> </div>
                </th>
                <input type="text" name="thirteen_three" class="form-control" style="float: left;"> </td>
                </td>
                <td> <input type="file" name="thirteen_photo1" class="form-control"> </td>

              </tr>
              <tr>
                <td> Others (Specify)
                  <input type="text" name="thirteen_four" class="form-control">
                </td>
                </td>
                <td> <input type="file" name="thirteen_photo3" class="form-control"> </td>
              </tr>
              <tr>
                <td> Others (Specify)
                  <input type="text" name="thirteen_five" class="form-control">
                </td>
                </td>
                <td> <input type="file" name="thirteen_photo4" class="form-control"> </td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <th rowspan="4" scope="row">Global</th>
                <td> <select name="thirteen_six" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Reform of Labour Law">Reform of Labour Law</option>
                    <option value="Stricter Enforcement of law">Stricter Enforcement of law</option>
                    <option value="Research">Research</option>
                    <option value="Stricter monitoring">Stricter monitoring</option>
                    <option value="Training of Factory Inspectors">Training of Factory Inspectors</option>
                    <option value="Training of Trade Unions">Training of Trade Unions</option>
                    <option value="Training of entrepreneurs">Training of entrepreneurs</option>
                    <option value="Increased legal action">Increased legal action</option>
                  </select> </td>
                <td> <input type="file" name="thirteen_photo5" class="form-control"> </td>
              </tr>
              <tr>
                <td> Others (Specify)
                  <input type="text" name="thirteen_seven" class="form-control">
                </td>
                </td>
                <td> <input type="file" name="thirteen_photo6" class="form-control"> </td>

              </tr>
              <tr>
                <td> Others (Specify)
                  <input type="text" name="thirteen_eight" class="form-control">
                </td>
                </td>
                <td> <input type="file" name="thirteen_photo7" class="form-control"> </td>
              </tr>
              <tr>
                <td> Others (Specify)
                  <input type="text" name="thirteen_nine" class="form-control">
                </td>
                </td>
                <td> <input type="file" name="thirteen_photo8" class="form-control"> </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endif
    <!-- question no 13 end -->


    <!-- question no 14 Start -->
    @if(Auth::user()->can('14.question'))
    <div class="col-md-12 question14">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">14.Did your ministry/agency make any new efforts to ensure its trade or migration
            policies did not
            facilitate trafficking?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="form-check">
            <input type="radio" id="radioFourteen1"  class="fourteen_status" name="fourteen_status" checked value="yes">
            <label for="radioFourteen1">
              Yes
            </label>
          </div>
          <div class="form-check">
            <input type="radio" id="radioFourteen2" class="fourteen_status" name="fourteen_status" value="no">
            <label for="radioFourteen2">
              No
            </label>
          </div>

          <div class="form-check">
            <input type="radio" id="radioFourteen3" class="fourteen_status" name="fourteen_status"  value="Others">
            <label for="radioFourteen3">
              Others
            </label>
          </div>
          <div id="fourteen_question_view">
          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Action</th>
                <th scope="col">Attach/Upload/Summary</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Strict Monitoring of impacts of policies</th>
                <td> <input type="file" name="fourteen_photo" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">Promotion of safe migration</th>
                <td> <input type="file" name="fourteen_photo1" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">Awareness raising of vulnerable groups</th>
                <td> <input type="file" name="fourteen_photo2" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">Expansion of safety-net for vulnerable groups</th>
                <td> <input type="file" name="fourteen_photo3" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">Promotion of skilling among vulnerable groups</th>
                <td> <input type="file" name="fourteen_photo4" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner">
                     <input type="text" name="fourteen_one" class="form-control" width="100%"> </div>
                </th>
                <td> <input type="file" name="fourteen_photo5" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="fourteen_two" class="form-control" width="100%"> </div>
                </th>
                <td> <input type="text" name="fourteen_three" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="fourteen_four" class="form-control" width="100%"> </div>
                </th>
                <td> <input type="text" name="fourteen_five" class="form-control"></td>
              </tr>
            </tbody>
          </table>
          

        </div>
        </div>
      </div>
    </div>
    @endif
    <!-- question no 14 end -->


    <!-- question no 15 Start -->
    @if(Auth::user()->can('15.question'))
    <div class="col-md-12 question15">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">15.Did government/your ministry/agency make any efforts to prohibit and prevent
            trafficking in the
            supply chains of its own public procurement?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="form-check">
            <input type="radio" id="radioFifteen1" class="fifteen_status" name="fifteen_status" checked  value="yes">
            <label for="radioFifteen1">
              Yes
            </label>
          </div>
          <div class="form-check">
            <input type="radio" id="radioFifteen2" class="fifteen_status" name="fifteen_status"  value="no">
            <label for="radioFifteen2">
              No
            </label>
          </div>

          <div class="form-check">
            <input type="radio" id="radioFifteen3" class="fifteen_status" name="fifteen_status"  value="Others">
            <label for="radioFifteen3">
              Others
            </label>
          </div>
         <div id="fifteen_question_view">
          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Action/Tool</th>
                <th scope="col">Status</th>
                <th scope="col">Attach/Upload/Summary</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Procurement Policy</th>
                <td> <select name="fifteen_one" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Enforced">Enforced</option>
                    <option value="Updated and enforced">Updated and enforced</option>
                    <option value="Stricter enforcement">Stricter enforcement</option>
                    <option value="Increases efforts">Increases efforts</option>
                  </select> </td>
                <td> <input type="file" name="fifteen_photo" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">Anti-Corruption measures</th>
                <td> <select name="fifteen_two" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Enforced">Enforced</option>
                    <option value="Updated and enforced">Updated and enforced</option>
                    <option value="Stricter enforcement">Stricter enforcement</option>
                    <option value="Increases efforts">Increases efforts</option>
                  </select> </td>
                <td> <input type="file" name="fifteen_photo1" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">Capacity building of government officials</th>
                <td> <select name="fifteen_three" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Enforced">Enforced</option>
                    <option value="Updated and enforced">Updated and enforced</option>
                    <option value="Stricter enforcement">Stricter enforcement</option>
                    <option value="Increases efforts">Increases efforts</option>
                  </select> </td>
                <td> <input type="file" name="fifteen_photo2" class="form-control"> </td>
              </tr>


              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="fifteen_four" class="form-control" width="100%"> </div>
                </th>
                <td> <select name="fifteen_five" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Enforced">Enforced</option>
                    <option value="Updated and enforced">Updated and enforced</option>
                    <option value="Stricter enforcement">Stricter enforcement</option>
                    <option value="Increases efforts">Increases efforts</option>
                  </select> </td>
                <td> <input type="file" name="fifteen_photo3" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="fifteen_six" class="form-control" width="100%"> </div>
                </th>
                <td> <select name="fifteen_seven" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Enforced">Enforced</option>
                    <option value="Updated and enforced">Updated and enforced</option>
                    <option value="Stricter enforcement">Stricter enforcement</option>
                    <option value="Increases efforts">Increases efforts</option>
                  </select> </td>
                <td> <input type="file" name="fifteen_photo4" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="fifteen_eight" class="form-control" width="100%"> </div>
                </th>
                <td> <select name="fifteen_nine" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Enforced">Enforced</option>
                    <option value="Updated and enforced">Updated and enforced</option>
                    <option value="Stricter enforcement">Stricter enforcement</option>
                    <option value="Increases efforts">Increases efforts</option>
                  </select> </td>
                <td> <input type="file" name="fifteen_photo5" class="form-control"> </td>
              </tr>
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
    @endif
    <!-- question no 15 end -->
    @if(Auth::user()->can('16.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">16.What measures not mentioned elsewhere did the government/your
            ministry/agency/organizations
            take to reduce the demand for commercial sex acts? [NOTE: Measures should target consumers –
            not suppliers or facilitators – of commercial sex. Law enforcement efforts against brothels or
            individuals in prostitution are not considered efforts to reduce the demand for commercial sex. END
            NOTE.]</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">


          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Action/Tool</th>
                <th scope="col">Status</th>
                <th scope="col">Please upload a summary note or any other relevant document.</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Awareness raising on forced prostitution and
                  trafficking among citizens</th>
                <td> <select name="sixteen_one" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Enforced">Enforced</option>
                    <option value="Updated and enforced">Updated and enforced</option>
                    <option value="Stricter enforcement">Stricter enforcement</option>
                    <option value="Increases efforts">Increases efforts</option>
                  </select> </td>
                <td> <input type="file" name="sixteen_photo" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">Awareness raising on legal measures against
                  sexual exploitation of trafficked individuals</th>
                <td> <select name="sixteen_two" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Enforced">Enforced</option>
                    <option value="Updated and enforced">Updated and enforced</option>
                    <option value="Stricter enforcement">Stricter enforcement</option>
                    <option value="Increases efforts">Increases efforts</option>
                  </select> </td>
                <td> <input type="file" name="sixteen_photo1" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">Legal actions against podophiles/sex-tourists
                  (clients on underaged girls/VoTs)</th>
                <td> <select name="sixteen_three" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Enforced">Enforced</option>
                    <option value="Updated and enforced">Updated and enforced</option>
                    <option value="Stricter enforcement">Stricter enforcement</option>
                    <option value="Increases efforts">Increases efforts</option>
                  </select> </td>
                <td> <input type="file" name="sixteen_photo2" class="form-control"> </td>
              </tr>


              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="sixteen_four" class="form-control" width="100%"> </div>
                </th>
                <td> <select name="sixteen_five" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Enforced">Enforced</option>
                    <option value="Updated and enforced">Updated and enforced</option>
                    <option value="Stricter enforcement">Stricter enforcement</option>
                    <option value="Increases efforts">Increases efforts</option>
                  </select> </td>
                <td> <input type="file" name="sixteen_photo3" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="sixteen_six" class="form-control" width="100%"> </div>
                </th>
                <td> <select name="sixteen_seven" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Enforced">Enforced</option>
                    <option value="Updated and enforced">Updated and enforced</option>
                    <option value="Stricter enforcement">Stricter enforcement</option>
                    <option value="Increases efforts">Increases efforts</option>
                  </select> </td>
                <td> <input type="file" name="sixteen_photo4" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="sixteen_eight" class="form-control" width="100%"> </div>
                </th>
                <td> <select name="sixteen_nine" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Enforced">Enforced</option>
                    <option value="Updated and enforced">Updated and enforced</option>
                    <option value="Stricter enforcement">Stricter enforcement</option>
                    <option value="Increases efforts">Increases efforts</option>
                  </select> </td>
                <td> <input type="file" name="sixteen_photo5" class="form-control"> </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endif
    <!-- question no 15 end -->
    <!-- question no 16 end -->
    @if(Auth::user()->can('17.question'))
    <div class="col-md-12 question17">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">17.Did the government make any efforts to reduce its nationals’ or foreigners’
            participation in
            international and domestic child sex tourism?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="form-check"> 
            <input type="radio" id="radioFifteen1"  class="seventeen_status" name="seventeen_status" checked  value="yes">
            <label for="radioFifteen1">
              Yes
            </label>
          </div>
          <div class="form-check">
            <input type="radio" id="radioFifteen2"   class="seventeen_status" name="seventeen_status"  value="no">
            <label for="radioFifteen2">
              No
            </label>
          </div>

          <div class="form-check">
            <input  type="radio" id="radioFifteen3"  class="seventeen_status" name="seventeen_status"  value="Others">
            <label for="radioFifteen3">
              Others
            </label>
          </div>
         <div id="seventeen_question_view">
          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Action/Tool</th>
                <th scope="col">Status</th>
                <th scope="col">Please upload a summary note or any other relevant document.</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Awareness raising on forced prostitution and
                  trafficking among citizens</th>
                <td> <select name="seventeen_one" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Enforced">Enforced</option>
                    <option value="Updated and enforced">Updated and enforced</option>
                    <option value="Stricter enforcement">Stricter enforcement</option>
                    <option value="Increases efforts">Increases efforts</option>
                  </select> </td>
                <td> <input type="file" name="seventeen_photo" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">Awareness raising on legal measures against
                  sexual exploitation of trafficked individuals</th>
                <td> <select name="seventeen_two" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Enforced">Enforced</option>
                    <option value="Updated and enforced">Updated and enforced</option>
                    <option value="Stricter enforcement">Stricter enforcement</option>
                    <option value="Increases efforts">Increases efforts</option>
                  </select> </td>
                <td> <input type="file" name="seventeen_photo1" class="form-control"> </td>
              </tr>
              <tr>
                <th scope="row">Legal actions against foreign podophiles/sex-
                  tourists (clients on underaged girls/VoTs)</th>
                <td> <select name="seventeen_three" id="" class="form-control">
                    <option value="" disabled selected>---Choose an item--</option>
                    <option value="Enforced">Enforced</option>
                    <option value="Updated and enforced">Updated and enforced</option>
                    <option value="Stricter enforcement">Stricter enforcement</option>
                    <option value="Increases efforts">Increases efforts</option>
                  </select> </td>
                <td> <input type="file" name="seventeen_photo2" class="form-control"> </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endif
    <!-- question no 17 end -->

    <!-- question no 18 Start -->
    
   @include('superadmin.case.question.18question')
    <!-- question no 18 end -->

    <!-- question no 19 Start -->
 @include('superadmin.case.question.19question')
    <!-- question no 19 end -->

    <!-- question no 20 Start -->
    @include('superadmin.case.question.20question')
    <!-- question no 20 end -->

    <!-- question no 21 Start -->
    <h4>PROTECTION </h4>
    @include('superadmin.case.question.21question')
    <!-- question no 21 end -->

    <!-- question no 22 Start -->
    @include('superadmin.case.question.22question')
    <!-- question 22 end -->



    <!-- question 23  start -->
    @include('superadmin.case.question.23question')
    <!-- question 23 end -->
    <!-- question 24 -->
    
    <!-- question 24 end -->
    @include('superadmin.case.question.24question')

    <!-- question 25 start  -->
   @include('superadmin.case.question.25question')
    <!-- question no 25 end  -->


    <!-- question no 26 Start  -->
    @include('superadmin.case.question.26question')
    <!-- question no 26 end  -->


    <!-- question no 27 Start  -->
    @include('superadmin.case.question.27question')
    <!-- question no 27 end -->


    <!-- question no 28 Start  -->
    @if(Auth::user()->can('28.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">28.Please provide an overview of the Protection Services available for the VoTs.
          </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-white">
            <thead>
              <tr>
                <th colspan="6" scope="col">Identification of Vots</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Victims identified by government</th>
                <td> Sex Trafficking </td>
                <td> Forced Labor </td>
                <td>Other Trafficking (Specify) </td>
                <td>Unspecified Trafficking </td>
              </tr>

              <tr>
                <td>Total victims identified by the government</th>
                <td> <input type="text" name="twenty_eight_one" class="form-control"> </td>
                <td><input type="text" name="twenty_eight_two"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight_three"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight_four"  class="form-control"> </td>
              </tr>
              <tr>
                <td>Men</th>
                <td> <input type="text" name="twenty_eight_five" class="form-control"> </td>
                <td><input type="text" name="twenty_eight_six"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight_seven"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight_eight" class="form-control"> </td>
              </tr>

              <tr>
                <td>Women</th>
                <td> <input type="text" name="twenty_eight_nine"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight_ten"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight_eleven"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight_twelve"  class="form-control"> </td>
              </tr>
              <tr>
                <td>3rd G</th>
                <td> <input type="text" name="twenty_eight_thirteen"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight_fourteen"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight_fifteen"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight_sixteen" class="form-control"> </td>
              </tr>

              <tr>
                <td>Boys (under 18)</th>
                <td> <input type="text" name="twenty_eight_seventeen"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight_eighteen"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight_nineteen"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight_twenty"  class="form-control"> </td>
              </tr>

              <tr>
                <td>Girls (under 18)</th>
                <td> <input type="text" name="twenty_eight_twenty_one"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight_twenty_two"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight_twenty_three"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight_twenty_four"  class="form-control"> </td>
              </tr>


              <tr>
                <td>Persons with disabilities</th>
                <td> <input type="text" name="twenty_eight_twenty_five"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight_twenty_six"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight_twenty_seven"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight_twenty_eight"  class="form-control"> </td>
              </tr>

              <tr>
                <td>LGBTQI+ persons</th>
                <td> <input type="text" name="twenty_eight_twenty_night"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight_thirty"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight_thirty_one"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight_thirty_two"  class="form-control"> </td>
              </tr>

              <tr>
                <td>Foreign nationals (if available, from what countries?)</th>
                <td> <input type="text" name="twenty_eight_thirty_three"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight_thirty_four" class="form-control"> </td>
                <td><input type="text" name="twenty_eight_thirty_five"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight_thirty_six"  class="form-control"> </td>
              </tr>
            </tbody>
          </table>
          <table class="table table-white">
            <thead>
              <tr>
                <th colspan="6" scope="col">Referral of VoTs for Service and Care</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Victims identified by government</th>
                <td> Sex Trafficking </td>
                <td> Forced Labor </td>
                <td>Other Trafficking (Specify) </td>
                <td>Unspecified Trafficking </td>
              </tr>

              <tr>
                <td>Total victims identified by the government</th>
                <td> <input type="text" name="twenty_eight2_one" class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_two"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_three"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_four"  class="form-control"> </td>
              </tr>
              <tr>
                <td>Men</th>
                <td> <input type="text" name="twenty_eight2_five"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_six"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_seven"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_eight" class="form-control"> </td>
              </tr>

              <tr>
                <td>Women</th>
                <td> <input type="text" name="twenty_eight2_nine"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_ten"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_eleven" class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_twelve"  class="form-control"> </td>
              </tr>
              <tr>
                <td>3rd G</th>
                <td> <input type="text" name="twenty_eight2_thirteen"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_fourteen"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_fifteen"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_sixteen" class="form-control"> </td>
              </tr>

              <tr>
                <td>Boys (under 18)</th>
                <td> <input type="text" name="twenty_eight2_seventeen" class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_eighteen"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_nineteen" class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_twenty" class="form-control"> </td>
              </tr>

              <tr>
                <td>Girls (under 18)</th>
                <td> <input type="text" name="twenty_eight2_twenty_one"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_twenty_two"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_twenty_three"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_twenty_four" class="form-control"> </td>
              </tr>


              <tr>
                <td>Persons with disabilities</th>
                <td> <input type="text" name="twenty_eight2_twenty_five" class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_twenty_six"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_twenty_seven"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_twenty_eight" class="form-control"> </td>
              </tr>

              <tr>
                <td>LGBTQI+ persons</th>
                <td> <input type="text" name="twenty_eight2_twenty_night"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_thirty"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_thirty_one"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_thirty_two" class="form-control"> </td>
              </tr>

              <tr>
                <td>Foreign nationals (if available, from what countries?)</th>
                <td> <input type="text" name="twenty_eight2_thirty_three"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_thirty_four"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_thirty_five"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight2_thirty_six" class="form-control"> </td>
              </tr>
            </tbody>
          </table>
          <table class="table table-white">
            <thead>
              <tr>
                <th colspan="6" scope="col">Services (indicate whether victims received services from NGOs,
                  International Organizations (INGOs/UN agencies), or the government, if available) </th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Victims identified by government</th>
                <td> Sex Trafficking </td>
                <td> Forced Labor </td>
                <td>Other Trafficking (Specify) </td>
                <td>Unspecified Trafficking </td>
              </tr>

              <tr>
                <td>Total victims identified by the government</th>
                <td> <input type="text" name="twenty_eight3_one" class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_two" class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_three" class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_four"  class="form-control"> </td>
              </tr>
              <tr>
                <td>Men</th>
                <td> <input type="text" name="twenty_eight3_five"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_six"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_seven"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_eight"  class="form-control"> </td>
              </tr>

              <tr>
                <td>Women</th>
                <td> <input type="text" name="twenty_eight3_nine"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_ten"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_eleven"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_twelve"  class="form-control"> </td>
              </tr>
              <tr>
                <td>3rd G</th>
                <td> <input type="text" name="twenty_eight3_thirteen"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_fourteen"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_fifteen"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_sixteen"  class="form-control"> </td>
              </tr>

              <tr>
                <td>Boys (under 18)</th>
                <td> <input type="text" name="twenty_eight3_seventeen"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_eighteen"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_nineteen" class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_twenty"  class="form-control"> </td>
              </tr>

              <tr>
                <td>Girls (under 18)</th>
                <td> <input type="text" name="twenty_eight3_twenty_one" class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_twenty_two"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_twenty_three"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_twenty_four"  class="form-control"> </td>
              </tr>


              <tr>
                <td>Persons with disabilities</th>
                <td> <input type="text" name="twenty_eight3_twenty_five"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_twenty_six"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_twenty_seven"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_twenty_eight" class="form-control"> </td>
              </tr>

              <tr>
                <td>LGBTQI+ persons</th>
                <td> <input type="text" name="twenty_eight3_twenty_night" class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_thirty" class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_thirty_one" class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_thirty_two" class="form-control"> </td>
              </tr>

              <tr>
                <td>Foreign nationals (if available, from what countries?)</th>
                <td> <input type="text" name="twenty_eight3_thirty_three" class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_thirty_four"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_thirty_five"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight3_thirty_six" class="form-control"> </td>
              </tr>
            </tbody>
          </table>
          <table class="table table-white">
            <thead>
              <tr>
                <th colspan="6" scope="col">Additional Victim Information </th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Victims repatriated to source country (if applicable)</th>
                <td> Sex Trafficking </td>
                <td> Forced Labor </td>
                <td>Other Trafficking (Specify) </td>
                <td>Unspecified Trafficking </td>
              </tr>

              <tr>
                <td>victims repatriated by host government</th>
                <td> <input type="text" name="twenty_eight4_one"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight4_two"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight4_three"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight4_four"  class="form-control"> </td>
              </tr>
              <tr>
                <td>victims repatriated by foreign government</th>
                <td> <input type="text" name="twenty_eight4_five"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight4_six"  class="form-control"> </td>
                <td><input type="text"  name="twenty_eight4_seven"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight4_eight" class="form-control"> </td>
              </tr>

              <tr>
                <td>victims repatriated by NGOs/INGOs/UN agencies</th>
                <td> <input type="text" name="twenty_eight4_nine"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight4_ten"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight4_eleven"  class="form-control"> </td>
                <td><input type="text" name="twenty_eight4_twelve" class="form-control"> </td>
              </tr>


            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endif
    <!-- question no 28 end please recheck  -->

    <!-- question no 29 end -->
    @if(Auth::user()->can('29.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">29.How much funding (in the local currency) did the ministry/agency/organization
            spend on protection
            efforts?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Type of protection Action</th>
                <th scope="col">Allocation (in BDT)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Total Allocation under NPA for protection</th>
                <td> <input type="text" name="twenty_nine_one" class="form-control"> </td>
              </tr>

              <tr>
                <th scope="row">Total allocation spent for different protection services</th>
                <td> <input type="text" name="twenty_nine_two" class="form-control"> </td>
              </tr>

              <tr>
                <th scope="row">Assessment of Allocation</th>
                <td>
                  <select class="form-control" name="twenty_nine_status" id="">
                    <option value="Excess">Select Please</option>
                    <option value="Excess">Excess</option>
                    <option value="Adequate">Adequate</option>
                    <option value="Inadequate">Inadequate</option>
                    <option value="None">None</option>
                  </select>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endif
    <!-- question no 29 end -->


    <!-- question no 30 Start -->
    @include('superadmin.case.question.30question')
    <!-- question no 30 end -->

    <!-- question no 31 Start -->
    @include('superadmin.case.question.shakir')
    <!-- question no 31 end -->

    <!-- question no 32 Start -->
    <h4>PROSECUTION</h4>
    @include('superadmin.case.question.32question')
    <!-- question no 32 End -->


    <!-- question no 33 Start -->
    @include('superadmin.case.question.33question')
    <!-- question no 33 end -->

    <!-- question no 34 Start -->
    @include('superadmin.case.question.34question')
    <!-- question no 34 end -->
    <!-- question no 35 Start -->
    @if(Auth::user()->can('35.question'))
     <div class="col-md-12 question35">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">35.Have there been any changes to preexisting anti-trafficking legislation during
            the reporting period
            (amendments to laws or penal codes, new laws, official circular/ decrees, supreme court precedents,
            etc.)?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="form-check">
            <input type="radio" id="radioTen1"  class="thirty_five_status" name="thirty_five_status"  value="yes">
            <label for="radioTen1">
              Yes
            </label>
          </div>
          <div class="form-check">
            <input type="radio" id="radioTen2"  class="thirty_five_status" name="thirty_five_status"  checked value="no" >
            <label for="radioTen2">
              No
            </label>
          </div>

          <div class="form-check">
            <input type="radio" id="radioTen3"  class="thirty_five_status" name="thirty_five_status"  value="Others">
            <label for="radioTen3">
              Others
            </label>
          </div>
          <div id="35_question_view" style="display:none">
          <h3>Reform of Existing Law</h3>
          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Title of the law</th>
                <th scope="col">Contents of Change/Status</th>
                <th scope="col">Attach/Upload</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <select name="thirty_five_one" id="" class="form-control">
                    <option value="">--choose an item--</option>
                    <option value="PSHT 2012">PSHT 2012</option>
                    <option value="Rule of PSHTA (2017)">Rule of PSHTA (2017)</option>
                    <option value="OEMA 2013">OEMA 2013</option>
                    <option value="Children's Act">Children's Act</option>
                    <option value="Labour Act">Labour Act</option>
                    <option value="MLA in Criminal Matter 2012">MLA in Criminal Matter 2012</option>
                    <option value="Human Organ Transfer Rule 1999">Human Organ Transfer Rule 1999</option>
                    <option value="Passport Act 1920">Passport Act 1920</option>
                    <option value="RBangladesh Passport Order 1973">Bangladesh Passport Order 1973</option>
                  </select>

                </td>
                <td> 
                  <select name="thirty_five_two" class="form-control" id="">
                  <option value="">--choose an item--</option>
                    <option value="Revised">Revised</option>
                    <option value="Abolished">Abolished</option>
                  </select>
               

                </td>
                <td> <input type="file" name="thirty_five_photo" class="form-control"> </td>
              </tr>

              <tr>
                <td scope="row">
                  <select name="thirty_five_three" id="" class="form-control">
                <option value="">--choose an item--</option>
                    <option value="PSHT 2012">PSHT 2012</option>
                    <option value="Rule of PSHTA (2017)">Rule of PSHTA (2017)</option>
                    <option value="OEMA 2013">OEMA 2013</option>
                    <option value="Children's Act">Children's Act</option>
                    <option value="Labour Act">Labour Act</option>
                    <option value="MLA in Criminal Matter 2012">MLA in Criminal Matter 2012</option>
                    <option value="Human Organ Transfer Rule 1999">Human Organ Transfer Rule 1999</option>
                    <option value="Passport Act 1920">Passport Act 1920</option>
                    <option value="RBangladesh Passport Order 1973">Bangladesh Passport Order 1973</option>
                  </select>

                </td>
               <td> 
                  <select name="thirty_five_four" class="form-control" id="">
                  <option value="">--choose an item--</option>
                    <option value="Revised">Revised</option>
                    <option value="Abolished">Abolished</option>
                  </select>
               

                </td>
                <td> <input type="file" name="thirty_five_photo2"  class="form-control"> </td>
              </tr>
              <tr>
                <td scope="row">
                  <select name="thirty_five_five" id="" class="form-control">
                  <option value="">--choose an item--</option>
                    <option value="PSHT 2012">PSHT 2012</option>
                    <option value="Rule of PSHTA (2017)">Rule of PSHTA (2017)</option>
                    <option value="OEMA 2013">OEMA 2013</option>
                    <option value="Children's Act">Children's Act</option>
                    <option value="Labour Act">Labour Act</option>
                    <option value="MLA in Criminal Matter 2012">MLA in Criminal Matter 2012</option>
                    <option value="Human Organ Transfer Rule 1999">Human Organ Transfer Rule 1999</option>
                    <option value="Passport Act 1920">Passport Act 1920</option>
                    <option value="RBangladesh Passport Order 1973">Bangladesh Passport Order 1973</option>
                  </select>

                </td>
               <td> 
                  <select name="thirty_five_six" class="form-control" id="">
                  <option value="">--choose an item--</option>
                    <option value="Revised">Revised</option>
                    <option value="Abolished">Abolished</option>
                  </select>
               

                </td>
                <td> <input type="file" name="thirty_five_photo3" class="form-control"> </td>
              </tr>
              <tr>
                <td scope="row">
                  <select name="thirty_five_seven" id="" class="form-control">
                  <option value="">--choose an item--</option>
                    <option value="PSHT 2012">PSHT 2012</option>
                    <option value="Rule of PSHTA (2017)">Rule of PSHTA (2017)</option>
                    <option value="OEMA 2013">OEMA 2013</option>
                    <option value="Children's Act">Children's Act</option>
                    <option value="Labour Act">Labour Act</option>
                    <option value="MLA in Criminal Matter 2012">MLA in Criminal Matter 2012</option>
                    <option value="Human Organ Transfer Rule 1999">Human Organ Transfer Rule 1999</option>
                    <option value="Passport Act 1920">Passport Act 1920</option>
                    <option value="RBangladesh Passport Order 1973">Bangladesh Passport Order 1973</option>
                  </select>

                </td>
               <td> 
                  <select name="thirty_five_eight" class="form-control" id="">
                  <option value="">--choose an item--</option>
                    <option value="Revised">Revised</option>
                    <option value="Abolished">Abolished</option>
                  </select>
               

                </td>
                <td> <input type="file" name="thirty_five_photo4" class="form-control"> </td>
              </tr>
              <tr>
                <td scope="row">
                  <select name="thirty_five_nine" id="" class="form-control">
                  <option value="">--choose an item--</option>
                    <option value="PSHT 2012">PSHT 2012</option>
                    <option value="Rule of PSHTA (2017)">Rule of PSHTA (2017)</option>
                    <option value="OEMA 2013">OEMA 2013</option>
                    <option value="Children's Act">Children's Act</option>
                    <option value="Labour Act">Labour Act</option>
                    <option value="MLA in Criminal Matter 2012">MLA in Criminal Matter 2012</option>
                    <option value="Human Organ Transfer Rule 1999">Human Organ Transfer Rule 1999</option>
                    <option value="Passport Act 1920">Passport Act 1920</option>
                    <option value="RBangladesh Passport Order 1973">Bangladesh Passport Order 1973</option>
                  </select>

                </td>
               <td> 
                  <select name="thirty_five_ten" class="form-control" id="">
                  <option value="">--choose an item--</option>
                    <option value="Revised">Revised</option>
                    <option value="Abolished">Abolished</option>
                  </select>
               

                </td>
                <td> <input type="file" name="thirty_five_photo5" class="form-control"> </td>
              </tr>
              <tr>
                <td scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="thirty_five_eleven" class="form-control" width="100%"> </div>
                </td>
               <td> 
                  <select name="thirty_five_twelve" class="form-control" id="">
                  <option value="">--choose an item--</option>
                    <option value="Revised">Revised</option>
                    <option value="Abolished">Abolished</option>
                  </select>
               

                </td>
                <td> <input type="file" name="thirty_five_photo6" class="form-control"> </td>
              </tr>
              <tr>
                <td scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="thirty_five_thirteen" class="form-control" width="100%"> </div>
                </td>
               <td> 
                  <select name="thirty_five_fourteen" class="form-control" id="">
                  <option value="">--choose an item--</option>
                    <option value="Revised">Revised</option>
                    <option value="Abolished">Abolished</option>
                  </select>
               

                </td>
                <td> <input type="file" name="thirty_five_photo7" class="form-control"> </td>
              </tr>
              <tr>
                <td scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="thirty_five_fifteen" class="form-control" width="100%"> </div>
                </td>
               <td> 
                  <select name="thirty_five_sixteen" class="form-control" id="">
                  <option value="">--choose an item--</option>
                    <option value="Revised">Revised</option>
                    <option value="Abolished">Abolished</option>
                  </select>
               

                </td>
                <td> <input type="file" name="thirty_five_photo8" class="form-control"> </td>
              </tr>
            </tbody>
          </table>

          <h3>New Law</h3>
          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Title of the New law</th>
                <th scope="col">Status</th>
                <th scope="col">Attach/Upload</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> <input name="thirty_five2_one" type="text" class="form-control"> </td>
                <td>
                  <select class="form-control" name="thirty_five2_two">
                  <option>Choose an item</option>
                    <option value="Planned">Planned</option>
                    <option value="On process of need assessment">On process of need assessment</option>
                    <option value="Waiting to be enacted">Waiting to be enacted</option>
                    <option value="Enacted">Enacted</option>
                    <option value="Enforced">Enforced</option>
                  </select>
                </td>
                <td> <input type="file" name="thirty_five2_photo" class="form-control">
                </td>
              </tr>

              <tr>
                <td> <input type="text" name="thirty_five2_three" class="form-control"> </td>
                <td>
                  <select class="form-control" name="thirty_five2_four">
                    <option>Choose an item</option>
                    <option value="Planned">Planned</option>
                    <option value="On process of need assessment">On process of need assessment</option>
                    <option value="Waiting to be enacted">Waiting to be enacted</option>
                    <option value="Enacted">Enacted</option>
                    <option value="Enforced">Enforced</option>
                  </select>
                </td>
                <td> <input type="file" name="thirty_five2_photo2" class="form-control">
                </td>
              </tr>
              <tr>
                <td> <input type="text" name="thirty_five2_five" class="form-control"> </td>
                <td>
                  <select class="form-control" name="thirty_five2_six">
                  <option>Choose an item</option>
                    <option value="Planned">Planned</option>
                    <option value="On process of need assessment">On process of need assessment</option>
                    <option value="Waiting to be enacted">Waiting to be enacted</option>
                    <option value="Enacted">Enacted</option>
                    <option value="Enforced">Enforced</option>
                  </select>
                </td>
                <td> <input type="file" name="thirty_five2_photo3" class="form-control"></td>
              </tr>
              <tr>
                <td> <input type="text" name="thirty_five2_seven" class="form-control"> </td>
                <td>
                  <select class="form-control" name="thirty_five2_eight">
                  <option>Choose an item</option>
                    <option value="Planned">Planned</option>
                    <option value="On process of need assessment">On process of need assessment</option>
                    <option value="Waiting to be enacted">Waiting to be enacted</option>
                    <option value="Enacted">Enacted</option>
                    <option value="Enforced">Enforced</option>
                  </select>
                </td>
                <td> <input type="file" name="thirty_five2_photo4" class="form-control"></td>
              </tr>
              <tr>
                <td> <input type="text" name="thirty_five2_nine" class="form-control"> </td>
                <td>
                  <select class="form-control" name="thirty_five2_ten">
                  <option>Choose an item</option>
                    <option value="Planned">Planned</option>
                    <option value="On process of need assessment">On process of need assessment</option>
                    <option value="Waiting to be enacted">Waiting to be enacted</option>
                    <option value="Enacted">Enacted</option>
                    <option value="Enforced">Enforced</option>
                  </select>
                </td>
                <td> <input type="file" name="thirty_five2_photo5" class="form-control"></td>
              </tr>
              <tr>
                <td> <input type="text" name="thirty_five2_eleven" class="form-control"> </td>
                <td>
                  <select class="form-control" name="thirty_five2_twelve">
                  <option>Choose an item</option>
                    <option value="Planned">Planned</option>
                    <option value="On process of need assessment">On process of need assessment</option>
                    <option value="Waiting to be enacted">Waiting to be enacted</option>
                    <option value="Enacted">Enacted</option>
                    <option value="Enforced">Enforced</option>
                  </select>
                </td>
                <td> <input type="file"  name="thirty_five2_photo6" class="form-control"></td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div> 
    @endif
    <!-- question no 35 End -->

    <!-- question no 36 Start -->
    @include('superadmin.case.question.36question')
    <!-- question no 36 End -->


    <!-- question no 37 Start -->
    @include('superadmin.case.question.37question')
 
    <!-- question no 37 End -->

    <!-- question no 38 Start -->
 @include('superadmin.case.question.38question')
    <!-- question no 38 End -->

    <!-- question no 39 Start -->
    @if(Auth::user()->can('39.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">39.Conviction of Trafficking Cases</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Type of Cases reaching verdict </th>
                <th scope="col">Number of Cases</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> Total number of cases of Internal Trafficking having conviction </td>
                <td> <input type="text" name="thirty_nine_one" class="form-control"> </td>
              </tr>

              <tr>
                <td> Total number of cases of International Trafficking having conviction </td>
                <td> <input type="text" name="thirty_nine_two" class="form-control"> </td>
              </tr>

              <tr>
                <td> Total number of cases of Internal Trafficking having acquittal </td>
                <td> <input type="text" name="thirty_nine_three" class="form-control"> </td>
              </tr>
              <tr>
                <td>Total number of cases of International Trafficking having acquittal </td>
                <td><input type="text" name="thirty_nine_four" class="form-control"></td>
              </tr>

              <tr>
                <td>Among the total number of person convicted- the number of foreign citizen </td>
                <td> <select name="thirty_nine_status" id="" class="form-control">
                    <option value="male">Male</option>
                    <option value="female">FeMale</option>
                  </select> </td>
              </tr>
            </tbody>
          </table>

          <table class="table table-white">
            <thead>

            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div> 
    @endif



    <!-- question no 39 end -->
    @if(Auth::user()->can('40.question'))
   <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">40. Conviction Status</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <h3>Conviction Status</h3>
          <table cellpadding=0 celspecing=0 width="100%">
            <tr>
              <td colspan="2"> Conviction Status
              </td>
              <td>M</td>
              <td>W</td>
              <td>3rd G</td>
              <td>B</td>
              <td>G</td>
              <td>T</td>
              <td>Total</td>
            </tr>
            <tr>
              <td rowspan=3>Total individuals convicted</td>
              <td>Number of Victims of Sex Trafficking Cases</td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>Number of Victims of Labour Trafficking Cases/td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td><input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"></td>
            </tr>
            <tr>
              <td> Number of Victims of Other/unspecified Trafficking Cases*</td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"></td>
            </tr>
            <tr>
              <td rowspan=3>Individuals convicted under
                PSHT Act 2012

              </td>
              <td>Number of Victims of Sex Trafficking Cases</td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>Number of Victims of Labour Trafficking Cases</td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td><input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"></td>
            </tr>
            <tr>
              <td> Number of Victims of Other/unspecified Trafficking Cases</td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"></td>
            </tr>

            <tr>
              <td rowspan=3>individuals convicted under non-trafficking laws
                (OEMA/PC)


              </td>
              <td>Number of Victims of Sex Trafficking Cases</td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>Number of Victims of Labour Trafficking Cases</td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td><input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>Number of Victims of Other/unspecified Trafficking Cases</td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"></td>
            </tr>
            <tr>
              <td rowspan=3>Convictions newly upheld on appeal
              </td>
              <td>Number of Victims of Sex Trafficking Cases</td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>Number of Victims of Labour Trafficking Cases</td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td><input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"></td>
            </tr>
            <tr>
              <td> Number of Victims of Other/unspecified Trafficking Cases</td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"></td>
            </tr>
            <tr>
              <td rowspan=3>Convictions newly overturned on appeal</td>
              <td>Number of Victims of Sex Trafficking Cases</td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>Number of Victims of Labour Trafficking Cases</td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td><input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"></td>
            </tr>
            <tr>
              <td> Number of Victims of Other/unspecified Trafficking Cases</td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"></td>
            </tr>
            <tr>
              <td rowspan=3>Individuals acquitted</td>
              <td>Number of Victims of Sex Trafficking Cases</td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"></td>
              <td> <input type="text" name="" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>Number of Victims of Labour Trafficking Cases</td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td><input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>Number of Victims of Other/unspecified Trafficking Cases</td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"> </td>
              <td> <input type="text" name="" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>Please Attach/Upload Description of sentencing data</td>
              <td colspan="2"> <input type="file" name="" id="" class="form-control"> </td>
              <td colspan="6"></td>

            </tr>

          </table>
        </div>
      </div>
    </div> 
    @endif
    <!-- question no 40 end -->
    @if(Auth::user()->can('41.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">41.Please provide details on Court Proceedings by District:</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <h3>Please provide details on Court Proceedings by District:</h3>
          <table cellpadding=0 celspecing=0 width="100%">
            <tr>
              <td> l#</td>
              <td>District</td>
              <td>Previous Cases</td>
              <td>Previous Cases</td>
              <td>Received Cases</td>
              <td>Total Cases</td>
              <td>Disposed Cases</td>
              <td>Transferred Cases</td>
              <td>Pending Cases</td>
              <td>Cases more than five year - old</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Dhaka</td>
              <td><input type="text" name="forty_one_one" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_two" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_three" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_four" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_five" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_six" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_eight" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Narayongonj</td>
              <td><input type="text" name="forty_one_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_ten" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_eleven" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_twelve" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_thirteen" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_fourteen" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_fifteen" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_sixteen" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Gazipur </td>
              <td><input type="text" name="forty_one_seventeen" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_eighteen" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_nineteen" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_twenty" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_twenty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_twenty_two" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_twenty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_twenty_four" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>4</td>
              <td>Manikgonj</td>
              <td><input type="text" name="forty_one_twenty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_twenty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_twenty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_twenty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_twenty_night" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_thirty" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_thirty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_thirty_two" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>5</td>
              <td>Munshigonj</td>
              <td><input type="text" name="forty_one_thirty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_thirty_four" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_thirty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_thirty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_thirty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_thirty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_thirty_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty_one_forty" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>6</td>
              <td>Narshindi</td>
              <td><input type="text" name="forty2_one" id="" class="form-control"></td>
              <td><input type="text" name="forty2_two" id="" class="form-control"></td>
              <td><input type="text" name="forty2_three" id="" class="form-control"></td>
              <td><input type="text" name="forty2_four" id="" class="form-control"></td>
              <td><input type="text" name="forty2_five" id="" class="form-control"></td>
              <td><input type="text" name="forty2_six" id="" class="form-control"></td>
              <td><input type="text" name="forty2_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty2_eight" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>7</td>
              <td>Tangail </td>
              <td><input type="text" name="forty2_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty2_ten" id="" class="form-control"></td>
              <td><input type="text" name="forty2_eleven" id="" class="form-control"></td>
              <td><input type="text" name="forty2_twelve" id="" class="form-control"></td>
              <td><input type="text" name="forty2_thirteen" id="" class="form-control"></td>
              <td><input type="text" name="forty2_fourteen" id="" class="form-control"></td>
              <td><input type="text" name="forty2_fifteen" id="" class="form-control"></td>
              <td><input type="text" name="forty2_sixteen" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>8</td>
              <td>Kishorgonj</td>
              <td><input type="text" name="forty2_seventeen" id="" class="form-control"></td>
              <td><input type="text" name="forty2_eighteen" id="" class="form-control"></td>
              <td><input type="text" name="forty2_nineteen" id="" class="form-control"></td>
              <td><input type="text" name="forty2_twenty" id="" class="form-control"></td>
              <td><input type="text" name="forty2_twenty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty2_twenty_two" id="" class="form-control"></td>
              <td><input type="text" name="forty2_twenty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty2_twenty_four" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>9</td>
              <td>Faridpur</td>
              <td><input type="text" name="forty2_twenty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty2_twenty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty2_twenty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty2_twenty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty2_twenty_night" id="" class="form-control"></td>
              <td><input type="text" name="forty2_thirty" id="" class="form-control"></td>
              <td><input type="text" name="forty2_thirty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty2_thirty_two" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>10</td>
              <td>Rajbari</td>
              <td><input type="text" name="forty2_thirty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty2_thirty_four" id="" class="form-control"></td>
              <td><input type="text" name="forty2_thirty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty2_thirty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty2_thirty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty2_thirty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty2_thirty_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty2_forty" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>11</td>
              <td>Gopalgonj</td>
              <td><input type="text" name="forty3_one" id="" class="form-control"></td>
              <td><input type="text" name="forty3_two" id="" class="form-control"></td>
              <td><input type="text" name="forty3_three" id="" class="form-control"></td>
              <td><input type="text" name="forty3_four" id="" class="form-control"></td>
              <td><input type="text" name="forty3_five" id="" class="form-control"></td>
              <td><input type="text" name="forty3_six" id="" class="form-control"></td>
              <td><input type="text" name="forty3_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty3_eight" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>12</td>
              <td>Shariatpur</td>
              <td><input type="text" name="forty3_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty3_ten" id="" class="form-control"></td>
              <td><input type="text" name="forty3_eleven" id="" class="form-control"></td>
              <td><input type="text" name="forty3_twelve" id="" class="form-control"></td>
              <td><input type="text" name="forty3_thirteen" id="" class="form-control"></td>
              <td><input type="text" name="forty3_fourteen" id="" class="form-control"></td>
              <td><input type="text" name="forty3_fifteen" id="" class="form-control"></td>
              <td><input type="text" name="forty3_sixteen" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>13</td>
              <td>Madaripur</td>
              <td><input type="text" name="forty3_seventeen" id="" class="form-control"></td>
              <td><input type="text" name="forty3_eighteen" id="" class="form-control"></td>
              <td><input type="text" name="forty3_nineteen" id="" class="form-control"></td>
              <td><input type="text" name="forty3_twenty" id="" class="form-control"></td>
              <td><input type="text" name="forty3_twenty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty3_twenty_two" id="" class="form-control"></td>
              <td><input type="text" name="forty3_twenty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty3_twenty_four" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>14</td>
              <td>Chattogram</td>
              <td><input type="text" name="forty3_twenty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty3_twenty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty3_twenty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty3_twenty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty3_twenty_night" id="" class="form-control"></td>
              <td><input type="text" name="forty3_thirty" id="" class="form-control"></td>
              <td><input type="text" name="forty3_thirty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty3_thirty_two" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>15</td>
              <td>Coxsbazar</td>
              <td><input type="text" name="forty3_thirty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty3_thirty_four" id="" class="form-control"></td>
              <td><input type="text" name="forty3_thirty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty3_thirty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty3_thirty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty3_thirty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty3_thirty_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty3_forty" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>16</td>
              <td>Rangamati</td>
              <td><input type="text" name="forty4_one" id="" class="form-control"></td>
              <td><input type="text" name="forty4_two" id="" class="form-control"></td>
              <td><input type="text" name="forty4_three" id="" class="form-control"></td>
              <td><input type="text" name="forty4_four" id="" class="form-control"></td>
              <td><input type="text" name="forty4_five" id="" class="form-control"></td>
              <td><input type="text" name="forty4_six" id="" class="form-control"></td>
              <td><input type="text" name="forty4_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty4_eight" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>17</td>
              <td>Bandarban</td>
              <td><input type="text" name="forty4_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty4_ten" id="" class="form-control"></td>
              <td><input type="text" name="forty4_eleven" id="" class="form-control"></td>
              <td><input type="text" name="forty4_twelve" id="" class="form-control"></td>
              <td><input type="text" name="forty4_thirteen" id="" class="form-control"></td>
              <td><input type="text" name="forty4_fourteen" id="" class="form-control"></td>
              <td><input type="text" name="forty4_fifteen" id="" class="form-control"></td>
              <td><input type="text" name="forty4_sixteen" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>18</td>
              <td>Khagrachhari</td>
              <td><input type="text" name="forty4_seventeen" id="" class="form-control"></td>
              <td><input type="text" name="forty4_eighteen" id="" class="form-control"></td>
              <td><input type="text" name="forty4_nineteen" id="" class="form-control"></td>
              <td><input type="text" name="forty4_twenty" id="" class="form-control"></td>
              <td><input type="text" name="forty4_twenty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty4_twenty_two" id="" class="form-control"></td>
              <td><input type="text" name="forty4_twenty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty4_twenty_four" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>19</td>
              <td>Noakhali</td>
              <td><input type="text" name="forty4_twenty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty4_twenty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty4_twenty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty4_twenty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty4_twenty_night" id="" class="form-control"></td>
              <td><input type="text" name="forty4_thirty" id="" class="form-control"></td>
              <td><input type="text" name="forty4_thirty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty4_thirty_two" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>20</td>
              <td>Feni</td>
              <td><input type="text" name="forty4_thirty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty4_thirty_four" id="" class="form-control"></td>
              <td><input type="text" name="forty4_thirty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty4_thirty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty4_thirty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty4_thirty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty4_thirty_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty4_forty" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>21</td>
              <td>Lakshmipur</td>
              <td><input type="text" name="forty5_one" id="" class="form-control"></td>
              <td><input type="text" name="forty5_two" id="" class="form-control"></td>
              <td><input type="text" name="forty5_three" id="" class="form-control"></td>
              <td><input type="text" name="forty5_four" id="" class="form-control"></td>
              <td><input type="text" name="forty5_five" id="" class="form-control"></td>
              <td><input type="text" name="forty5_six" id="" class="form-control"></td>
              <td><input type="text" name="forty5_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty5_eight" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>22</td>
              <td>Cumilla</td>
              <td><input type="text" name="forty5_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty5_ten" id="" class="form-control"></td>
              <td><input type="text" name="forty5_eleven" id="" class="form-control"></td>
              <td><input type="text" name="forty5_twelve" id="" class="form-control"></td>
              <td><input type="text" name="forty5_thirteen" id="" class="form-control"></td>
              <td><input type="text" name="forty5_fourteen" id="" class="form-control"></td>
              <td><input type="text" name="forty5_fifteen" id="" class="form-control"></td>
              <td><input type="text" name="forty5_sixteen" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>23</td>
              <td>Brahmanbaria</td>
              <td><input type="text" name="forty5_seventeen" id="" class="form-control"></td>
              <td><input type="text" name="forty5_eighteen" id="" class="form-control"></td>
              <td><input type="text" name="forty5_nineteen" id="" class="form-control"></td>
              <td><input type="text" name="forty5_twenty" id="" class="form-control"></td>
              <td><input type="text" name="forty5_twenty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty5_twenty_two" id="" class="form-control"></td>
              <td><input type="text" name="forty5_twenty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty5_twenty_four" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>24</td>
              <td>Chandpur</td>
              <td><input type="text" name="forty5_twenty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty5_twenty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty5_twenty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty5_twenty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty5_twenty_night" id="" class="form-control"></td>
              <td><input type="text" name="forty5_thirty" id="" class="form-control"></td>
              <td><input type="text" name="forty5_thirty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty5_thirty_two" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>25</td>
              <td>Rajshahi</td>
              <td><input type="text" name="forty5_thirty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty5_thirty_four" id="" class="form-control"></td>
              <td><input type="text" name="forty5_thirty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty5_thirty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty5_thirty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty5_thirty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty5_thirty_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty5_forty" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>26</td>
              <td>Chapainawabganj</td>
              <td><input type="text" name="forty6_one" id="" class="form-control"></td>
              <td><input type="text" name="forty6_two" id="" class="form-control"></td>
              <td><input type="text" name="forty6_three" id="" class="form-control"></td>
              <td><input type="text" name="forty6_four" id="" class="form-control"></td>
              <td><input type="text" name="forty6_five" id="" class="form-control"></td>
              <td><input type="text" name="forty6_six" id="" class="form-control"></td>
              <td><input type="text" name="forty6_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty6_eight" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>27</td>
              <td>Naogaon</td>
              <td><input type="text" name="forty6_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty6_ten" id="" class="form-control"></td>
              <td><input type="text" name="forty6_eleven" id="" class="form-control"></td>
              <td><input type="text" name="forty6_twelve" id="" class="form-control"></td>
              <td><input type="text" name="forty6_thirteen" id="" class="form-control"></td>
              <td><input type="text" name="forty6_fourteen" id="" class="form-control"></td>
              <td><input type="text" name="forty6_fifteen" id="" class="form-control"></td>
              <td><input type="text" name="forty6_sixteen" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>28</td>
              <td>Natore</td>
              <td><input type="text" name="forty6_seventeen" id="" class="form-control"></td>
              <td><input type="text" name="forty6_eighteen" id="" class="form-control"></td>
              <td><input type="text" name="forty6_nineteen" id="" class="form-control"></td>
              <td><input type="text" name="forty6_twenty" id="" class="form-control"></td>
              <td><input type="text" name="forty6_twenty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty6_twenty_two" id="" class="form-control"></td>
              <td><input type="text" name="forty6_twenty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty6_twenty_four" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>29</td>
              <td>Bogura</td>
              <td><input type="text" name="forty6_twenty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty6_twenty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty6_twenty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty6_twenty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty6_twenty_night" id="" class="form-control"></td>
              <td><input type="text" name="forty6_thirty" id="" class="form-control"></td>
              <td><input type="text" name="forty6_thirty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty6_thirty_two" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>30</td>
              <td>Joypurhat</td>
              <td><input type="text" name="forty6_thirty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty6_thirty_four" id="" class="form-control"></td>
              <td><input type="text" name="forty6_thirty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty6_thirty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty6_thirty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty6_thirty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty6_thirty_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty6_forty" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>31</td>
              <td>Pabna</td>
              <td><input type="text" name="forty7_one" id="" class="form-control"></td>
              <td><input type="text" name="forty7_two" id="" class="form-control"></td>
              <td><input type="text" name="forty7_three" id="" class="form-control"></td>
              <td><input type="text" name="forty7_four" id="" class="form-control"></td>
              <td><input type="text" name="forty7_five" id="" class="form-control"></td>
              <td><input type="text" name="forty7_six" id="" class="form-control"></td>
              <td><input type="text" name="forty7_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty7_eight" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>32</td>
              <td>Sirajganj</td>
              <td><input type="text" name="forty7_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty7_ten" id="" class="form-control"></td>
              <td><input type="text" name="forty7_eleven" id="" class="form-control"></td>
              <td><input type="text" name="forty7_twelve" id="" class="form-control"></td>
              <td><input type="text" name="forty7_thirteen" id="" class="form-control"></td>
              <td><input type="text" name="forty7_fourteen" id="" class="form-control"></td>
              <td><input type="text" name="forty7_fifteen" id="" class="form-control"></td>
              <td><input type="text" name="forty7_sixteen" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>33</td>
              <td>Khulna</td>
              <td><input type="text" name="forty7_seventeen" id="" class="form-control"></td>
              <td><input type="text" name="forty7_eighteen" id="" class="form-control"></td>
              <td><input type="text" name="forty7_nineteen" id="" class="form-control"></td>
              <td><input type="text" name="forty7_twenty" id="" class="form-control"></td>
              <td><input type="text" name="forty7_twenty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty7_twenty_two" id="" class="form-control"></td>
              <td><input type="text" name="forty7_twenty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty7_twenty_four" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>34</td>
              <td>Bagerhat</td>
              <td><input type="text" name="forty7_twenty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty7_twenty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty7_twenty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty7_twenty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty7_twenty_night" id="" class="form-control"></td>
              <td><input type="text" name="forty7_thirty" id="" class="form-control"></td>
              <td><input type="text" name="forty7_thirty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty7_thirty_two" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>35</td>
              <td>Jashore</td>
              <td><input type="text" name="forty7_thirty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty7_thirty_four" id="" class="form-control"></td>
              <td><input type="text" name="forty7_thirty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty7_thirty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty7_thirty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty7_thirty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty7_thirty_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty7_forty" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>36</td>
              <td>Kushtia</td>
              <td><input type="text" name="forty8_one" id="" class="form-control"></td>
              <td><input type="text" name="forty8_two" id="" class="form-control"></td>
              <td><input type="text" name="forty8_three" id="" class="form-control"></td>
              <td><input type="text" name="forty8_four" id="" class="form-control"></td>
              <td><input type="text" name="forty8_five" id="" class="form-control"></td>
              <td><input type="text" name="forty8_six" id="" class="form-control"></td>
              <td><input type="text" name="forty8_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty8_eight" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>37</td>
              <td>Jhenaidah</td>
              <td><input type="text" name="forty8_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty8_ten" id="" class="form-control"></td>
              <td><input type="text" name="forty8_eleven" id="" class="form-control"></td>
              <td><input type="text" name="forty8_twelve" id="" class="form-control"></td>
              <td><input type="text" name="forty8_thirteen" id="" class="form-control"></td>
              <td><input type="text" name="forty8_fourteen" id="" class="form-control"></td>
              <td><input type="text" name="forty8_fifteen" id="" class="form-control"></td>
              <td><input type="text" name="forty8_sixteen" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>38</td>
              <td>Satkhira</td>
              <td><input type="text" name="forty8_seventeen" id="" class="form-control"></td>
              <td><input type="text" name="forty8_eighteen" id="" class="form-control"></td>
              <td><input type="text" name="forty8_nineteen" id="" class="form-control"></td>
              <td><input type="text" name="forty8_twenty" id="" class="form-control"></td>
              <td><input type="text" name="forty8_twenty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty8_twenty_two" id="" class="form-control"></td>
              <td><input type="text" name="forty8_twenty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty8_twenty_four" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>39</td>
              <td>Chuadanga</td>
              <td><input type="text" name="forty8_twenty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty8_twenty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty8_twenty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty8_twenty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty8_twenty_night" id="" class="form-control"></td>
              <td><input type="text" name="forty8_thirty" id="" class="form-control"></td>
              <td><input type="text" name="forty8_thirty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty8_thirty_two" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>40</td>
              <td>Magura</td>
              <td><input type="text" name="forty8_thirty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty8_thirty_four" id="" class="form-control"></td>
              <td><input type="text" name="forty8_thirty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty8_thirty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty8_thirty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty8_thirty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty8_thirty_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty8_forty" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>41</td>
              <td>Narail</td>
              <td><input type="text" name="forty9_one" id="" class="form-control"></td>
              <td><input type="text" name="forty9_two" id="" class="form-control"></td>
              <td><input type="text" name="forty9_three" id="" class="form-control"></td>
              <td><input type="text" name="forty9_four" id="" class="form-control"></td>
              <td><input type="text" name="forty9_five" id="" class="form-control"></td>
              <td><input type="text" name="forty9_six" id="" class="form-control"></td>
              <td><input type="text" name="forty9_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty9_eight" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>42</td>
              <td>Meherpur</td>
              <td><input type="text" name="forty9_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty9_ten" id="" class="form-control"></td>
              <td><input type="text" name="forty9_eleven" id="" class="form-control"></td>
              <td><input type="text" name="forty9_twelve" id="" class="form-control"></td>
              <td><input type="text" name="forty9_thirteen" id="" class="form-control"></td>
              <td><input type="text" name="forty9_fourteen" id="" class="form-control"></td>
              <td><input type="text" name="forty9_fifteen" id="" class="form-control"></td>
              <td><input type="text" name="forty9_sixteen" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>43</td>
              <td>Barishal</td>
              <td><input type="text" name="forty9_seventeen" id="" class="form-control"></td>
              <td><input type="text" name="forty9_eighteen" id="" class="form-control"></td>
              <td><input type="text" name="forty9_nineteen" id="" class="form-control"></td>
              <td><input type="text" name="forty9_twenty" id="" class="form-control"></td>
              <td><input type="text" name="forty9_twenty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty9_twenty_two" id="" class="form-control"></td>
              <td><input type="text" name="forty9_twenty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty9_twenty_four" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>44</td>
              <td>Bhola</td>
              <td><input type="text" name="forty9_twenty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty9_twenty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty9_twenty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty9_twenty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty9_twenty_night" id="" class="form-control"></td>
              <td><input type="text" name="forty9_thirty" id="" class="form-control"></td>
              <td><input type="text" name="forty9_thirty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty9_thirty_two" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>45</td>
              <td>Patuakhali</td>
              <td><input type="text" name="forty9_thirty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty9_thirty_four" id="" class="form-control"></td>
              <td><input type="text" name="forty9_thirty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty9_thirty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty9_thirty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty9_thirty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty9_thirty_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty9_forty" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>46</td>
              <td>Jhalakathi</td>
              <td><input type="text" name="forty10_one" id="" class="form-control"></td>
              <td><input type="text" name="forty10_two" id="" class="form-control"></td>
              <td><input type="text" name="forty10_three" id="" class="form-control"></td>
              <td><input type="text" name="forty10_four" id="" class="form-control"></td>
              <td><input type="text" name="forty10_five" id="" class="form-control"></td>
              <td><input type="text" name="forty10_six" id="" class="form-control"></td>
              <td><input type="text" name="forty10_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty10_eight" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>47</td>
              <td>Pirojpur</td>
              <td><input type="text" name="forty10_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty10_ten" id="" class="form-control"></td>
              <td><input type="text" name="forty10_eleven" id="" class="form-control"></td>
              <td><input type="text" name="forty10_twelve" id="" class="form-control"></td>
              <td><input type="text" name="forty10_thirteen" id="" class="form-control"></td>
              <td><input type="text" name="forty10_fourteen" id="" class="form-control"></td>
              <td><input type="text" name="forty10_fifteen" id="" class="form-control"></td>
              <td><input type="text" name="forty10_sixteen" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>48</td>
              <td>Barguna</td>
              <td><input type="text" name="forty10_seventeen" id="" class="form-control"></td>
              <td><input type="text" name="forty10_eighteen" id="" class="form-control"></td>
              <td><input type="text" name="forty10_nineteen" id="" class="form-control"></td>
              <td><input type="text" name="forty10_twenty" id="" class="form-control"></td>
              <td><input type="text" name="forty10_twenty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty10_twenty_two" id="" class="form-control"></td>
              <td><input type="text" name="forty10_twenty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty10_twenty_four" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>49</td>
              <td>Sylhet</td>
              <td><input type="text" name="forty10_twenty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty10_twenty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty10_twenty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty10_twenty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty10_twenty_night" id="" class="form-control"></td>
              <td><input type="text" name="forty10_thirty" id="" class="form-control"></td>
              <td><input type="text" name="forty10_thirty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty10_thirty_two" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>50</td>
              <td>Sunamganj</td>
              <td><input type="text" name="forty10_thirty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty10_thirty_four" id="" class="form-control"></td>
              <td><input type="text" name="forty10_thirty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty10_thirty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty10_thirty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty10_thirty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty10_thirty_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty10_forty" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>51</td>
              <td>Moulvibazar</td>
              <td><input type="text" name="forty11_one" id="" class="form-control"></td>
              <td><input type="text" name="forty11_two" id="" class="form-control"></td>
              <td><input type="text" name="forty11_three" id="" class="form-control"></td>
              <td><input type="text" name="forty11_four" id="" class="form-control"></td>
              <td><input type="text" name="forty11_five" id="" class="form-control"></td>
              <td><input type="text" name="forty11_six" id="" class="form-control"></td>
              <td><input type="text" name="forty11_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty11_eight" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>52</td>
              <td>Habiganj</td>
              <td><input type="text" name="forty11_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty11_ten" id="" class="form-control"></td>
              <td><input type="text" name="forty11_eleven" id="" class="form-control"></td>
              <td><input type="text" name="forty11_twelve" id="" class="form-control"></td>
              <td><input type="text" name="forty11_thirteen" id="" class="form-control"></td>
              <td><input type="text" name="forty11_fourteen" id="" class="form-control"></td>
              <td><input type="text" name="forty11_fifteen" id="" class="form-control"></td>
              <td><input type="text" name="forty11_sixteen" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>53</td>
              <td>Rangpur </td>
              <td><input type="text" name="forty11_seventeen" id="" class="form-control"></td>
              <td><input type="text" name="forty11_eighteen" id="" class="form-control"></td>
              <td><input type="text" name="forty11_nineteen" id="" class="form-control"></td>
              <td><input type="text" name="forty11_twenty" id="" class="form-control"></td>
              <td><input type="text" name="forty11_twenty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty11_twenty_two" id="" class="form-control"></td>
              <td><input type="text" name="forty11_twenty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty11_twenty_four" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>54</td>
              <td>Gaibandha</td>
              <td><input type="text" name="forty11_twenty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty11_twenty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty11_twenty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty11_twenty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty11_twenty_night" id="" class="form-control"></td>
              <td><input type="text" name="forty11_thirty" id="" class="form-control"></td>
              <td><input type="text" name="forty11_thirty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty11_thirty_two" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>55</td>
              <td>Kurigram</td>
              <td><input type="text" name="forty11_thirty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty11_thirty_four" id="" class="form-control"></td>
              <td><input type="text" name="forty11_thirty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty11_thirty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty11_thirty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty11_thirty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty11_thirty_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty11_forty" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>56</td>
              <td>Nilphamari</td>
              <td><input type="text" name="forty12_one" id="" class="form-control"></td>
              <td><input type="text" name="forty12_two" id="" class="form-control"></td>
              <td><input type="text" name="forty12_three" id="" class="form-control"></td>
              <td><input type="text" name="forty12_four" id="" class="form-control"></td>
              <td><input type="text" name="forty12_five" id="" class="form-control"></td>
              <td><input type="text" name="forty12_six" id="" class="form-control"></td>
              <td><input type="text" name="forty12_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty12_eight" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>57</td>
              <td>Lalmonirhat</td>
              <td><input type="text" name="forty12_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty12_ten" id="" class="form-control"></td>
              <td><input type="text" name="forty12_eleven" id="" class="form-control"></td>
              <td><input type="text" name="forty12_twelve" id="" class="form-control"></td>
              <td><input type="text" name="forty12_thirteen" id="" class="form-control"></td>
              <td><input type="text" name="forty12_fourteen" id="" class="form-control"></td>
              <td><input type="text" name="forty12_fifteen" id="" class="form-control"></td>
              <td><input type="text" name="forty12_sixteen" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>58</td>
              <td>Dinajpur</td>
              <td><input type="text" name="forty12_seventeen" id="" class="form-control"></td>
              <td><input type="text" name="forty12_eighteen" id="" class="form-control"></td>
              <td><input type="text" name="forty12_nineteen" id="" class="form-control"></td>
              <td><input type="text" name="forty12_twenty" id="" class="form-control"></td>
              <td><input type="text" name="forty12_twenty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty12_twenty_two" id="" class="form-control"></td>
              <td><input type="text" name="forty12_twenty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty12_twenty_four" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>59</td>
              <td>Thakurgaon</td>
              <td><input type="text" name="forty12_twenty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty12_twenty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty12_twenty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty12_twenty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty12_twenty_night" id="" class="form-control"></td>
              <td><input type="text" name="forty12_thirty" id="" class="form-control"></td>
              <td><input type="text" name="forty12_thirty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty12_thirty_two" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>60</td>
              <td>Panchagarh</td>
              <td><input type="text" name="forty12_thirty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty12_thirty_four" id="" class="form-control"></td>
              <td><input type="text" name="forty12_thirty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty12_thirty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty12_thirty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty12_thirty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty12_thirty_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty12_forty" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>61</td>
              <td>Mymensingh</td>
              <td><input type="text" name="forty13_one" id="" class="form-control"></td>
              <td><input type="text" name="forty13_two" id="" class="form-control"></td>
              <td><input type="text" name="forty13_three" id="" class="form-control"></td>
              <td><input type="text" name="forty13_four" id="" class="form-control"></td>
              <td><input type="text" name="forty13_five" id="" class="form-control"></td>
              <td><input type="text" name="forty13_six" id="" class="form-control"></td>
              <td><input type="text" name="forty13_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty13_eight" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>62</td>
              <td>Jamalpur</td>
              <td><input type="text" name="forty12_nine" id="" class="form-control"></td>
              <td><input type="text" name="forty12_ten" id="" class="form-control"></td>
              <td><input type="text" name="forty12_eleven" id="" class="form-control"></td>
              <td><input type="text" name="forty12_twelve" id="" class="form-control"></td>
              <td><input type="text" name="forty12_thirteen" id="" class="form-control"></td>
              <td><input type="text" name="forty12_fourteen" id="" class="form-control"></td>
              <td><input type="text" name="forty12_fifteen" id="" class="form-control"></td>
              <td><input type="text" name="forty12_sixteen" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>63</td>
              <td>Sherpur</td>
              <td><input type="text" name="forty13_seventeen" id="" class="form-control"></td>
              <td><input type="text" name="forty13_eighteen" id="" class="form-control"></td>
              <td><input type="text" name="forty13_nineteen" id="" class="form-control"></td>
              <td><input type="text" name="forty13_twenty" id="" class="form-control"></td>
              <td><input type="text" name="forty13_twenty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty13_twenty_two" id="" class="form-control"></td>
              <td><input type="text" name="forty13_twenty_three" id="" class="form-control"></td>
              <td><input type="text" name="forty13_twenty_four" id="" class="form-control"></td>
            </tr>
            <tr>
              <td>64</td>
              <td>Netrokona</td>
              <td><input type="text" name="forty13_twenty_five" id="" class="form-control"></td>
              <td><input type="text" name="forty13_twenty_six" id="" class="form-control"></td>
              <td><input type="text" name="forty13_twenty_seven" id="" class="form-control"></td>
              <td><input type="text" name="forty13_twenty_eight" id="" class="form-control"></td>
              <td><input type="text" name="forty13_twenty_night" id="" class="form-control"></td>
              <td><input type="text" name="forty13_thirty" id="" class="form-control"></td>
              <td><input type="text" name="forty13_thirty_one" id="" class="form-control"></td>
              <td><input type="text" name="forty13_thirty_two" id="" class="form-control"></td>
            </tr>





          </table>
        </div>
      </div>
    </div>
    @endif
    <!-- qestion no 41 end -->
  @include('superadmin.case.question.42question')

  @include('superadmin.case.question.43question')


    <!-- question no 43 end -->

    @if(Auth::user()->can('44.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">44.Did any allegedly complicit officials face criminal investigations,
            prosecutions, convictions, or sentencing?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-white">
            <thead>
              <tr>
                <th rowspan="2" scope="col">Ministry/Department</th>
                <th colspan="3">Number of Official Accused</th>
                <th rowspan="2">Measures Taken</th>

              </tr>
              <tr>
                <td>Men</td>
                <td>Women</td>
                <td>Total</td>

              </tr>
              <tr>
                <td><input type="text" name="forty_four_one" class="form-control"></td>
                <td><input type="text" name="forty_four_two" class="form-control"></td>
                <td><input type="text" name="forty_four_three" class="form-control"></td>
                <td><input type="text" name="forty_four_four" class="form-control"></td>
                <td><input type="text" name="forty_four_five" class="form-control"></td>

              </tr>
              <tr>
                <td><input type="text" name="forty_four_six" class="form-control"></td>
                <td><input type="text" name="forty_four_seven" class="form-control"></td>
                <td><input type="text" name="forty_four_eight" class="form-control"></td>
                <td><input type="text" name="forty_four_nine" class="form-control"></td>
                <td><input type="text" name="forty_four_ten" class="form-control"></td>

              </tr>
              <tr>
                <td><input type="text" name="forty_four_eleven" class="form-control"></td>
                <td><input type="text" name="forty_four_twelve" class="form-control"></td>
                <td><input type="text" name="forty_four_thirteen" class="form-control"></td>
                <td><input type="text" name="forty_four_fourteen" class="form-control"></td>
                <td><input type="text" name="forty_four_fifteen" class="form-control"></td>

              </tr>
              <tr>
                <td><input type="text" name="forty_four_sixteen" class="form-control"></td>
                <td><input type="text" name="forty_four_seventeen" class="form-control"></td>
                <td><input type="text" name="forty_four_eighteen" class="form-control"></td>
                <td><input type="text" name="forty_four_nineteen" class="form-control"></td>
                <td><input type="text" name="forty_four_twenty" class="form-control"></td>

              </tr>

            </thead>
          </table>
        </div>
      </div>
    </div>
    @endif
    <!-- question no 44 end -->

    @if(Auth::user()->can('45.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">45.Did the government take any new to ensure that its policies, regulations, and
            agreements relating to
            migration, labor, trade, border security measures, and investment did not facilitate trafficking?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="form-check">
            <input class="form-check-input" name="forty_five_status" type="checkbox" value="yes">
            <label class="form-check-label">
              Yes
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="forty_five_status" type="checkbox" value="no">
            <label class="form-check-label">
              No
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" name="forty_five_status" type="checkbox" value="Others">
            <label class="form-check-label">
              Others
            </label>
          </div>

          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Ministry/Department</th>
                <th scope="col">Measures Taken</th>
              </tr>
            </thead>
            <tbody>
              <tr>

                <td> <input type="text" name="forty_five_one" class="form-control"> </td>
                <td> <input type="text" name="forty_five_two" class="form-control"> </td>
              </tr>

              <tr>

                <td> <input type="text" name="forty_five_three" class="form-control"> </td>
                <td> <input type="text" name="forty_five_four" class="form-control"> </td>
              </tr>

              <tr>

                <td> <input type="text" name="forty_five_five" class="form-control"> </td>
                <td> <input type="text" name="forty_five_six" class="form-control"> </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endif
    <!-- question no 45 end -->
    @if(Auth::user()->can('46.question'))


    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">46.Is there any change to government unit(s) and/or courts responsible for
            investigating, prosecuting,
            and/or hearing trafficking cases. Please describe-</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="form-check">
            <input class="form-check-input" name="forty_sixe_status" type="checkbox" value="yes">
            <label class="form-check-label">
              Yes
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="forty_sixe_status" type="checkbox" value="no">
            <label class="form-check-label">
              No
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" name="forty_sixe_status" type="checkbox" value="Others">
            <label class="form-check-label">
              Others
            </label>
          </div>

          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Name of the Unit/Court</th>
                <th scope="col">Focus/Jurisdiction</th>
                <th scope="col">Location</th>
              </tr>
            </thead>
            <tbody>
              <tr>

                <td> <input type="text" name="forty_sixe_one" class="form-control"> </td>
                <td> <input type="text" name="forty_sixe_two" class="form-control"> </td>
                <td>
                  <select name="forty_sixe_three" id="" class="form-control">
                    <option>--Select District--</option>
                @foreach($districs as $distric)
                <option value="">{{$distric->name}}</option>
               

                @endforeach
                  </select>
                </td>
              </tr>

              <tr>


                <td> <input type="text" name="forty_sixe_four" class="form-control"> </td>
                <td> <input type="text" name="forty_sixe_five" class="form-control"> </td>
                <td><select name="forty_sixe_six" id="" class="form-control">
                  <option>--Select District--</option>
                  @foreach($districs as $distric)
                  <option value="">{{$distric->name}}</option>
                 
  
                  @endforeach
                  </select></td>
              </tr>

              <tr>

                <td> <input type="text" name="forty_sixe_seven" class="form-control"> </td>
                <td> <input type="text" name="forty_sixe_eight" class="form-control"> </td>
                <td> <select name="forty_sixe_nine" id="" class="form-control">
                  <option>--Select District--</option>
                  @foreach($districs as $distric)
                  <option value="">{{$distric->name}}</option>
                 
  
                  @endforeach
                  </select> </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endif
    <!-- question no 46 end -->
    @if(Auth::user()->can('47.question'))

    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">47.Did these units/courts have adequate resources? Please describe any update?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="form-check">
            <input class="form-check-input" name="forty_seven_status" type="checkbox" value="yes">
            <label class="form-check-label">
              Yes
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="forty_seven_status" type="checkbox" value="no">
            <label class="form-check-label">
              No
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" name="forty_seven_status" type="checkbox" value="Others">
            <label class="form-check-label">
              Others
            </label>
          </div>

          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Name of the Unit/Court</th>
                <th scope="col">Focus/Jurisdiction</th>
                <th scope="col">Location</th>
              </tr>
            </thead>
            <tbody>
              <tr>

                <td> <input type="text" name="forty_seven_one" class="form-control"> </td>
                <td> <input type="text" name="forty_seven_two" class="form-control"> </td>
                <td>
                  <select name="forty_seven_three" id="" class="form-control">
                    <option>--Select District--</option>
                    @foreach($districs as $distric)
                    <option value="">{{$distric->name}}</option>
                   
    
                    @endforeach
                  </select>
                </td>
              </tr>

              <tr>


                <td> <input type="text" name="forty_seven_four" class="form-control"> </td>
                <td> <input type="text" name="forty_seven_fives" class="form-control"> </td>
                <td><select name="forty_seven_six" id="" class="form-control">
                  <option>--Select District--</option>
                @foreach($districs as $distric)
                <option value="">{{$distric->name}}</option>
               

                @endforeach
                  </select></td>
              </tr>

              <tr>

                <td> <input type="text" name="forty_seven_seven" class="form-control"> </td>
                <td> <input type="text" name="forty_seven_eight" class="form-control"> </td>
                <td> <select name="forty_seven_nine" id="" class="form-control">
                  <option>--Select District--</option>
                @foreach($districs as $distric)
                <option value="">{{$distric->name}}</option>
               

                @endforeach
                  </select> </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endif
    <!-- question no 47 -->


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
                <th rowspan="2">Training Contents (Multiple-Response)</th>
                <th rowspan="2">Number of Training</th>
                <th rowspan="2">Location
                  (multiple-Response)
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
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
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
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>

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
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
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
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>

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
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
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
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>

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
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
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
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>

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
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
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
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>

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
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
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
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>

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
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
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
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>

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
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
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
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>

              </tr>






            </thead>


          </table>
        </div>
      </div>
    </div>



    <!-- question no 48 end -->
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">49.Did the government/your ministry/department/organization train judiciary and
            court officials on anti-trafficking enforcement, policies, and laws? </h3>

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
                <th rowspan="2">Training Contents (Multiple-Response)</th>
                <th rowspan="2">Number of Training</th>
                <th rowspan="2">Location(multiple-Response)</th>
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
                <td rowspan="2">Judges of Separate Special TIP Tribunal</td>
                <td> <select name="" id="" class="form-control">
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
                       <option>--Select Country--</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Sylhet">Sylhet</option>
                  </select> </td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
              </tr>
              <tr>
                <td> <select name="" id="" class="form-control">
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
                       <option>--Select Country--</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Sylhet">Sylhet</option>
                  </select> </td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>

              </tr>

              <tr>
                <td rowspan="2">Judges of Special TIP Tribunal</td>
                <td> <select name="" id="" class="form-control">
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
                       <option>--Select Country--</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Sylhet">Sylhet</option>
                  </select> </td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
              </tr>
              <tr>
                <td> <select name="" id="" class="form-control">
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
                       <option>--Select Country--</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Sylhet">Sylhet</option>
                  </select> </td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>

              </tr>
              <tr>
                <td rowspan="2">PP of Separate Special TIP Tribunal</td>
                <td> <select name="" id="" class="form-control">
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
                       <option>--Select Country--</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Sylhet">Sylhet</option>
                  </select> </td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
              </tr>
              <tr>
                <td> <select name="" id="" class="form-control">
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
                       <option>--Select Country--</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Sylhet">Sylhet</option>
                  </select> </td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>

              </tr>
              <tr>
                <td rowspan="2">PP of Special TIP Tribunal</td>
                <td> <select name="" id="" class="form-control">
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
                       <option>--Select Country--</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Sylhet">Sylhet</option>
                  </select> </td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
              </tr>
              <tr>
                <td> <select name="" id="" class="form-control">
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
                       <option>--Select Country--</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Sylhet">Sylhet</option>
                  </select> </td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>

              </tr>
              <tr>
                <td rowspan="2">Judges</td>
                <td> <select name="" id="" class="form-control">
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
                       <option>--Select Country--</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Sylhet">Sylhet</option>
                  </select> </td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
              </tr>
              <tr>
                <td> <select name="" id="" class="form-control">
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
                       <option>--Select Country--</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Sylhet">Sylhet</option>
                  </select> </td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>

              </tr>
              <tr>
                <td rowspan="2">PP</td>
                <td> <select name="" id="" class="form-control">
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
                       <option>--Select Country--</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Sylhet">Sylhet</option>
                  </select> </td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
              </tr>
              <tr>
                <td> <select name="" id="" class="form-control">
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
                       <option>--Select Country--</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Sylhet">Sylhet</option>
                  </select> </td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>

              </tr>
              <tr>
                <td rowspan="2">Lawyers</td>
                <td> <select name="" id="" class="form-control">
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
                       <option>--Select Country--</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Sylhet">Sylhet</option>
                  </select> </td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
              </tr>
              <tr>
                <td> <select name="" id="" class="form-control">
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
                       <option>--Select Country--</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Sylhet">Sylhet</option>
                  </select> </td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>

              </tr>
              <tr>
                <td rowspan="2">Court Officials</td>
                <td> <select name="" id="" class="form-control">
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
                       <option>--Select Country--</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Sylhet">Sylhet</option>
                  </select> </td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
              </tr>
              <tr>
                <td> <select name="" id="" class="form-control">
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
                       <option>--Select Country--</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Sylhet">Sylhet</option>
                  </select> </td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>

              </tr>






            </thead>


          </table>
        </div>
      </div>
    </div>
    @endif
    <!-- question no 49 end -->
    @if(Auth::user()->can('50.question'))

    <div class="col-md-12 question50">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">50.How much funding (in the local currency) did the government spend on prosecution efforts (e.g.,
            awareness campaigns, research projects, national action plan implementation, etc.)?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">


          <div class="form-check">
            <input type="radio" id="radioThree1" class="fity_one" name="fity_one" checked  value="yes">
            <label for="radioThree1">
              Yes
            </label>
          </div>
          <div class="form-check">
            <input type="radio" id="radioThree2"  class="fity_one" name="fity_one"  value="no">
            <label for="radioThree2">
              No
            </label>
          </div>
          <div class="form-check">
            <input type="radio" id="radioThree3" class="fity_one" name="fity_one"  value="no">
            <label for="radioThree3">
              Others
            </label>
          </div>
            <div id="50_question_view">
          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Type of preventive Action</th>
                <th scope="col">Allocation (in BDT)</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td> Total Allocation under NPA for prosecution</td>
                <td> <input type="text" name="fifty_title1" class="form-control"> </td>
              </tr>

              <tr>
                <td> Total Allocation utilized under NPA for prosecution</td>
                <td> <input type="text" name="fifty_sort1" class="form-control"> </td>
              </tr>

              <tr>
                <td> Total allocation spent for prosecution training</td>
                <td> <input type="text" name="fifty_long_desc1" class="form-control"> </td>
              </tr>

              <tr>
                <td> Assessment of Allocation </td>
                <td><select name="fifty_new_status1" id="" class="form-control">
                    <option value="Excess">Excess</option>
                    <option value="Adequate">Adequate</option>
                    <option value="Inadequate">Inadequate</option>
                    <option value="None">None</option>
                  </select></td>
              </tr>


            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
    @endif
    <!-- question no 50 end -->

    @if(Auth::user()->can('51.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">51.Did courts order restitution?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">



          <table class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th rowspan="2" style="text-align: center; margin: bottom 45%;">Number of Case</th>
                <th rowspan="2">Total amount in BDT</th>
                <th colspan="6">Individual Coverage</th>

              </tr>
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>3rd G</th>
                <th>Boy</th>
                <th>Girl</th>
                <th>Total</th>
              </tr>
              <tr>
                <td> <input type="text" name="fifty_one_number_case" class="form-control"> </td>
                <td><input type="text" name="fifty_one_total_amount" class="form-control"></td>
                <td><input type="text" name="fifty_one_men"  class="form-control q51Col"></td>
                <td><input type="text" name="fifty_one_women" class="form-control q51Col"></td>
                <td><input type="text" name="fifty_one_tg"  class="form-control q51Col"></td>
                <td><input type="text" name="fifty_one_boy"  class="form-control q51Col"></td>
                <td><input type="text" name="fifty_one_girl" class="form-control q51Col"></td>
                <td><input type="text" name="fifty_one_total" id="q51Total"  class="form-control " readonly="true"></td>
              </tr>
            </thead>


          </table>
        </div>
      </div>
    </div>
    @endif
    <!-- question no 51end -->




    @if(Auth::user()->can('52.question'))
    <div class="col-md-12 question52">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">52.How much did ministry/agency/organization allocate in victim compensation fund (National Fund)?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="form-check">
            <input type="radio" id="radioThree1" class="fifty_two_status" name="fifty_two_status" checked value="yes">
            <label for="radioThree1">
              Yes
            </label>
          </div>
          <div class="form-check">
            <input type="radio" id="radioThree2"  class="fifty_two_status" name="fifty_two_status" value="no">
            <label for="radioThree2">
              No
            </label>
          </div>
          <div class="form-check">
            <input type="radio" id="radioThree3"  class="fifty_two_status" name="fifty_two_status"  value="no">
            <label for="radioThree3">
              Others
            </label>
          </div>
          <div id ="52_question_view">
          <table class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th style="text-align: center; margin: bottom 45%;">BDT</th>
                <th><input type="text" name="fifty_two_one13" class="form-control"></th>
              </tr>
              <tr>
                <th style="text-align: center; margin: bottom 45%;">MoHA</th>
                <th><input type="text" name="fifty_moha" class="form-control"></th>
              </tr>
              <tr>
                <th style="text-align: center; margin: bottom 45%;">MoLJPA</th>
                <th><input type="text" name="fifty_moljpa" class="form-control"></th>
              </tr>
            </thead>
          </table>
        </div>
        </div>
      </div>
    </div>
    <!-- question no 52 end -->
@endif
@if(Auth::user()->can('53.question'))
    <div class="col-md-12 question53">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">53.How many VoTs received assistance? How much in total (in BDT).</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">

 <div class="form-check">
      <input type="radio" id="radioPrimary1" class="fifty_three_status" name="fifty_three_status" checked value="yes">
      <label for="radioPrimary1">
        Yes
      </label>
    </div>
    <div class="form-check">
      <input type="radio" id="radioPrimary2" class="fifty_three_status" name="fifty_three_status"  value="no">
      <label for="radioPrimary2">
        No
      </label>
    </div>
    <div class="form-check">
      <input type="radio" id="radioPrimary3" class="fifty_three_status" name="fifty_three_status"  value="Others">
      <label for="radioPrimary3">
        Others
      </label>
    </div>
    <div id ="53_question_view">
          <table class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th rowspan="2" style="text-align: center; margin: bottom 45%;">Number of Case</th>
                <th rowspan="2">Total amount in BDT</th>
                <th colspan="6">Individual Coverage</th>

              </tr>
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>3rd G</th>
                <th>Boy</th>
                <th>Girl</th>
                <th>Total</th>
              </tr>
              <tr>
                <td> <input type="text" name="fifty_three_one14" class="form-control "> </td>
                <td><input type="text" name="fifty_three_two15" class="form-control "></td>
                <td><input type="text" name="fifty_three_three16" id="" class="form-control q53Col"></td>
                <td><input type="text" name="fifty_three_four17" id="" class="form-control q53Col"></td>
                <td><input type="text" name="fifty_three_five18" id="" class="form-control q53Col"></td>
                <td><input type="text" name="fifty_three_six19" id="" class="form-control q53Col"></td>
                <td><input type="text" name="fifty_three_seven20" id="" class="form-control q53Col"></td>
                <td><input type="text" name="fifty_three_eight21" id="q53Total" class="form-control " readonly="true"></td>
              </tr>
            </thead>
          </table>
    </div>
        </div>
      </div>
    </div>
    @endif
    <!-- question no 53 end -->


<h4>PARTNERSHIP </h4>
@if(Auth::user()->can('54.question'))
 {{-- <div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">54.Did ministry/agency/organization train law enforcing agencies and judiciary?
      </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">



      <table class="table table-bordered text-center">
        <thead class="">
          <tr>
            <th rowspan="2" style="text-align: center; margin: bottom 45%;">Category of Trainee</th>
            <th rowspan="2">Number of Training</th>
            <th rowspan="2">Training Contents</th>
            <th colspan="6">Coverage</th>

          </tr>
          <tr>
            <th>Men</th>
            <th>Women</th>
            <th>Total</th>
          </tr>
          <tr>
            <td> <input type="text" name="fifty_four_one22" class="form-control"> </td>
            <td><input type="text" name="fifty_four_two23" class="form-control"></td>
            <td><input type="text" name="fifty_four_three24" id="" class="form-control"></td>
            <td><input type="text" name="fifty_four_four25" id="" class="form-control"></td>
            <td><input type="text" name="fifty_four_five26" id="" class="form-control"></td>
            <td><input type="text" name="fifty_four_six27" id="" class="form-control"></td>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</div>  --}}

@endif
@if(Auth::user()->can('57.question'))
<h4>MONITORING AND EVALUATION</h4>

 <div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">57.Did the ministry/agency/organization undertake or support any new projects to research or assess
        trafficking issues within the country or its nationals abroad, and/or publicize its efforts to combat
        trafficking?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-white">
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
            
            <td> <input type="text" name="fifty_seven_one" class="form-control">  </td>
            <td>
               <select name="fifty_seven_two" id="" class="form-control">
                <option value="">Area of Research </option>
                <option value="Prevention">Prevention</option>
                <option value="Protection">Protection</option>
                <option value="Prosecution">Prosecution</option>
                <option value="Participation">Participation </option>
                <option value="Midterm Evaluation of NPA">Midterm Evaluation of NPA </option>
                <option value="End evaluation of NPA">End evaluation of NPA  </option>
                <option value="Best practice">Best practice  </option>
                <option value="Baseline">Baseline </option>
                <option value="Annual Countrhy TIP Report">Annual Countrhy TIP Report </option>
                <option value="MRM">MRM </option>
              </select> 
            </td>
            <td>
              <select name="fifty_seven_three" id="" class="form-control">
               <option value="">Select Status</option>
               <option value="Completed">Completed</option>
               <option value="Draft">Draft</option>
               <option value="On-Going">On-Going </option>
               <option value="Approved Plan">Approved Plan </option>
               <option value="Proposed">Proposed </option>
             </select> 
           </td>
            <td> 
              <select name="fifty_seven_four" id="" class="form-control">
                @foreach ($divisions as $division)
                <option value="{{ $division->bn_name }}">{{ $division->name }}</option>
                @endforeach
            
              
              </select>   
            </td>
          </tr>
          <tr>
           
            <td> 
            <input type="text" name="fifty_seven_five" class="form-control"> 
            </td>
            <td>
              <select name="fifty_seven_six" id="" class="form-control">
               <option value="Prevention">Area of Research </option>
               <option value="Prevention">Prevention</option>
               <option value="Protection">Protection</option>
               <option value="Prosecution">Prosecution</option>
               <option value="Participation">Participation </option>
               <option value="Midterm Evaluation of NPA">Midterm Evaluation of NPA </option>
               <option value="End evaluation of NPA">End evaluation of NPA  </option>
               <option value="Best practice">Best practice  </option>
               <option value="Baseline">Baseline </option>
               <option value="Annual Countrhy TIP Report">Annual Countrhy TIP Report </option>
               <option value="MRM">MRM </option>
             </select> 
           </td>
           <td>
            <select name="fifty_seven_seven" id="" class="form-control">
             <option value="">Select Status</option>
             <option value="Completed">Completed</option>
             <option value="Draft">Draft</option>
             <option value="On-Going">On-Going </option>
             <option value="Approved Plan">Approved Plan </option>
             <option value="Proposed">Proposed </option>
           </select> 
         </td>
            <td> 
              <select name="fifty_seven_eight" id="" class="form-control">
                @foreach ($divisions as $division)
                <option value="{{ $division->bn_name }}">{{ $division->name }}</option>
                @endforeach
            
              
              </select>
            </td>
          </tr>
        




        </tbody>
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
            <th style="text-align: center; margin: bottom 45%;">BDT</th>
            <th><input type="text" name="fifty_two_one13" class="form-control"></th>
          </tr>
          <tr>
            <th style="text-align: center; margin: bottom 45%;">Source</th>
            <th><input type="text" name="fifty_moha" class="form-control" placeholder="Govt. Budget"></th>
          </tr>
          <tr>
            <th style="text-align: center; margin: bottom 45%;">Assessment of Allocation</th>
            <th><input type="text" name="assessment_allocation" class="form-control" placeholder="Govt. Budget"></th>
          </tr>
          <tr>
            <th style="text-align: center; margin: bottom 45%;">Others</th>
            <th><input type="text" name="others" class="form-control" placeholder="Govt. Budget"></th>
          </tr>
          
        </thead>
      </table>
    </div>
  </div>
</div>
    @endif  
    <h4>RECOMMENDATIONS  </h4> 
    @if(Auth::user()->can('59.question'))

<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">59.Please provide general recommendations for addressing human trafficking.</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-bordered text-center">
        <thead class="">
          <tr>
            <th >1</th>
            <th><input type="text" name="fifty_nine_one" class="form-control"></th>
          </tr>
          <tr>
            <th >2</th>
            <th><input type="text" name="fifty_nine_two" class="form-control" ></th>
          </tr>
          <tr>
            <th >3</th>
            <th><input type="text" name="fifty_nine_three" class="form-control" ></th>
          </tr>
          <tr>
            <th >4</th>
            <th><input type="text" name="fifty_nine_four" class="form-control" ></th>
          </tr>
          <tr>
            <th >5</th>
            <th><input type="text" name="fifty_nine_five" class="form-control" ></th>
          </tr>
          <tr>
            <th >6</th>
            <th><input type="text" name="fifty_nine_six" class="form-control" ></th>
          </tr>
          <tr>
            <th >7</th>
            <th><input type="text" name="fifty_nine_seven" class="form-control" ></th>
          </tr>
          <tr>
            <th >8</th>
            <th><input type="text" name="fifty_nine_eight" class="form-control" ></th>
          </tr>
       
        </thead>
      </table>
    </div>
  </div>
</div>
@endif
<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">

      <h3 class="card-title">60</h3>

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


<button type="submit " class="btn btn-primary" >Upload & Save</button>
{{-- <button type="submit " class="btn btn-primary" id="uploadsave">Upload & Save</button> --}}
</form>
</section>



</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>


<script>
  ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .then( editor => {
                  console.log( editor );
          } )
          .catch( error => {
                  console.error( error );
          } );
</script>
<script>
  $(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    
    // Event listeners for each group of inputs
    $(document).on('input', '.number-input', function() {
      updateTotal('.number-input', '#totalSum');
      updateTotal('.question18rowmen', '#eighteen_twenty_eight');
      updateTotal('.granTotal', '#eighteen_thirty_one');
    });

    $(document).on('input', '.question18rowWomen', function() {
      updateTotal('.question18rowWomen', '#eighteen_twenty_nine');
      updateTotal('.granTotal', '#eighteen_thirty_one');

    });
    

    $(document).on('input', '.question18rowTransGender', function() {
      updateTotal('.question18rowTransGender', '#eighteen_thirty');
      updateTotal('.granTotal', '#eighteen_thirty_one');

    });

    

    $(document).on('input', '.number-input2', function() {
      updateTotal('.number-input2', '#totalSum1');
      updateTotal('.question18rowmen', '#eighteen_twenty_eight');
      updateTotal('.granTotal', '#eighteen_thirty_one');

    });

    $(document).on('input', '.number-input3', function() {
      updateTotal('.number-input3', '#totalSum2');
      updateTotal('.question18rowmen', '#eighteen_twenty_eight');
      updateTotal('.granTotal', '#eighteen_thirty_one');

    });

    $(document).on('input', '.number-input4', function() {
      updateTotal('.number-input4', '#totalSum3');
      updateTotal('.question18rowmen', '#eighteen_twenty_eight');
      updateTotal('.granTotal', '#eighteen_thirty_one');

    });

    $(document).on('input', '.number-input5', function() {
      updateTotal('.number-input5', '#totalSum4');
    });

    $(document).on('input', '.number-input6', function() {
      updateTotal('.number-input6', '#totalSum5');
    });



    // Initial calculation for each group
    updateTotal('.number-input', '#totalSum');
    updateTotal('.number-input2', '#totalSum1');
    updateTotal('.number-input3', '#totalSum2');
    updateTotal('.number-input4', '#totalSum3');
    updateTotal('.number-input5', '#totalSum4');
    updateTotal('.number-input6', '#input6');

    

    $(document).ready(function(){
        $(".twentystatus").on("click",function(){
            var statusvalue = $("input[name='twenty_status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question20').find('#twenty_question_view').show()
            }else{
              $('.question20').find('#twenty_question_view').hide()
            }
        });
    });

    $(document).ready(function(){
        $(".threestatus").on("click",function(){
            var statusvalue = $("input[name='threestatus']:checked").val();
            if(statusvalue == 'yes'){
              $('.question3').find('#three_question_view').show()
            }else{
              $('.question3').find('#three_question_view').hide()
            }
        });
    });

    $(document).ready(function(){
        $(".fivestatus").on("click",function(){
            var statusvalue = $("input[name='fivestatus']:checked").val();
            if(statusvalue == 'yes'){
              $('.question5').find('#five_question_view').show()
            }else{
              $('.question5').find('#five_question_view').hide()
            }
        });
    });

    $(document).ready(function(){
        $(".sixstatus").on("click",function(){
            var statusvalue = $("input[name='sixstatus']:checked").val();
            if(statusvalue == 'yes'){
              $('.question6').find('#six_question_view').show()
            }else{
              $('.question6').find('#six_question_view').hide()
            }
        });
    });

    $(document).ready(function(){
        $(".sevenstatus").on("click",function(){
            var statusvalue = $("input[name='sevenstatus']:checked").val();
            if(statusvalue == 'yes'){
              $('.question7').find('#seven_question_view').show()
            }else{
              $('.question7').find('#seven_question_view').hide()
            }
        });
    });

    $(document).ready(function(){
        $(".tenfifty_status").on("click",function(){
            var statusvalue = $("input[name='tenfifty_status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question10').find('#ten_question_view').show()
            }else{
              $('.question10').find('#ten_question_view').hide()
            }
        });
    });

    $(document).ready(function(){
        $(".eleven_status").on("click",function(){
            var statusvalue = $("input[name='eleven_status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question11').find('#eleven_question_view').show()
            }else{
              $('.question11').find('#eleven_question_view').hide()
            }
        });
    });

    $(document).ready(function(){
        $(".twelve_status").on("click",function(){
            var statusvalue = $("input[name='twelve_status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question12').find('#twevel_question_view').show()
            }else{
              $('.question12').find('#twevel_question_view').hide()
            }
        });
    });

       $(document).ready(function(){
        $(".fourteen_status").on("click",function(){
            var statusvalue = $("input[name='fourteen_status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question14').find('#fourteen_question_view').show()
            }else{
              $('.question14').find('#fourteen_question_view').hide()
            }
          });
       });

       $(document).ready(function(){
        $(".fifteen_status").on("click",function(){
            var statusvalue = $("input[name='fifteen_status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question15').find('#fifteen_question_view').show()
            }else{
              $('.question15').find('#fifteen_question_view').hide()
            }
        });
    });

    $(document).ready(function(){
        $(".seventeen_status").on("click",function(){
            var statusvalue = $("input[name='seventeen_status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question17').find('#seventeen_question_view').show()
            }else{
              $('.question17').find('#seventeen_question_view').hide()
            }
        });
    });


    $(document).ready(function(){
        $(".eighteen_status").on("click",function(){
            var statusvalue = $("input[name='eighteen_status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question18').find('#eightteen_question_view').show()
            }else{
              $('.question18').find('#eightteen_question_view').hide()
            }
        });
    });

    $(document).ready(function(){
        $(".nineteen_status").on("click",function(){
            var statusvalue = $("input[name='nineteen_status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question19').find('#nineteen_question_view').show()
            }else{
              $('.question19').find('#nineteen_question_view').hide()
            }
        });
    });

    $(document).ready(function(){
        $(".twenty_one_status").on("click",function(){
            var statusvalue = $("input[name='twenty_one_status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question21').find('#21_question_view').show()
            }else{
              $('.question21').find('#21_question_view').hide()
            }
        });
    });

    $(document).ready(function(){
        $(".status").on("click",function(){
            var statusvalue = $("input[name='status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question22').find('#22_question_view').show()
            }else{
              $('.question22').find('#22_question_view').hide()
            }
        });
    });

    $(document).ready(function(){
        $(".twenty_three_status").on("click",function(){
            var statusvalue = $("input[name='twenty_three_status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question23').find('#23_question_view').show()
            }else{
              $('.question23').find('#23_question_view').hide()
            }
        });
    });

    $(document).ready(function(){
        $(".fourty_three_status").on("click",function(){
            var statusvalue = $("input[name='fourty_three_status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question43').find('#43_question_view').show()
            }else{
              $('.question43').find('#43_question_view').hide()
            }
        });
    });

    $(document).ready(function(){
        $(".fity_one").on("click",function(){
            var statusvalue = $("input[name='fity_one']:checked").val();
            if(statusvalue == 'yes'){
              $('.question50').find('#50_question_view').show()
            }else{
              $('.question50').find('#50_question_view').hide()
            }
        });
    });


    $(document).ready(function(){
        $(".fifty_two_status").on("click",function(){
            var statusvalue = $("input[name='fifty_two_status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question52').find('#52_question_view').show()
            }else{
              $('.question52').find('#52_question_view').hide()
            }
        });
    });
    $(document).ready(function(){
        $(".nine_status").on("click",function(){
            var statusvalue = $("input[name='nine_status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question9').find('#9_question_view').show()
            }else{
              $('.question9').find('#9_question_view').hide()
            }
        });
    });

    $(document).ready(function(){
        $(".thirten_status").on("click",function(){
            var statusvalue = $("input[name='thirten_status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question30').find('#30_question_view').show()
            }else{
              $('.question30').find('#30_question_view').hide()
            }
        });
    });

    $(document).ready(function(){
        $(".thirty_three_status").on("click",function(){
            var statusvalue = $("input[name='thirty_three_status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question33').find('#33_question_view').show()
            }else{
              $('.question33').find('#33_question_view').hide()
            }
        });
    });
    $(document).ready(function(){
        $(".thirty34_fifty_status").on("click",function(){
            var statusvalue = $("input[name='thirty34_fifty_status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question34').find('#34_question_view').show()
            }else{
              $('.question34').find('#34_question_view').hide()
            }
        });
    });
    $(document).ready(function(){
        $(".thirty_five_status").on("click",function(){
            var statusvalue = $("input[name='thirty_five_status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question35').find('#35_question_view').show()
            }else{
              $('.question35').find('#35_question_view').hide()
            }
        });
    });

    

    $(document).ready(function(){
        $(".thirty_one_status").on("click",function(){
            var statusvalue = $("input[name='thirty_one_status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question31').find('#31_question_view').show()
            }else{
              $('.question31').find('#31_question_view').hide()
            }
        });
    });


    $(document).ready(function(){
        $(".thirty_eight_status").on("click",function(){
            var statusvalue = $("input[name='thirty_eight_status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question38').find('#38_question_view').show()
            }else{
              $('.question38').find('#38_question_view').hide()
            }
        });
    });


    $(document).ready(function(){
        $(".fifty_three_status").on("click",function(){
            var statusvalue = $("input[name='fifty_three_status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question53').find('#53_question_view').show()
            }else{
              $('.question53').find('#53_question_view').hide()
            }
        });
    });

    $(document).ready(function(){
        $(".twenty_four_status").on("click",function(){
            var statusvalue = $("input[name='twenty_four_status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question24').find('#24_question_view').show()
            }else{
              $('.question24').find('#24_question_view').hide()
            }
        });
    });

    $(document).ready(function(){
        $(".twenty_six_status").on("click",function(){
            var statusvalue = $("input[name='twenty_six_status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question26').find('#26_question_view').show()
            }else{
              $('.question26').find('#26_question_view').hide()
            }
        });
    });

    $(document).ready(function(){
        $(".thirty_two_status").on("click",function(){
            var statusvalue = $("input[name='thirty_two_status']:checked").val();
            if(statusvalue == 'yes'){
              $('.question32').find('#32_question_view').show()
            }else{
              $('.question32').find('#32_question_view').hide()
            }
        });
    });


    


    

    
    
    

//19 question calculation
    $(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    
    $(document).on('input', '.question19ColMen', function() {
      updateTotal('.question19ColMen', '#menRowSum');
      updateTotal('.gTotal', '#gTotal');
    });

    $(document).on('input', '.question19Col1', function() {
      updateTotal('.question19Col1', '#question19Col1');
      updateTotal('.gTotal', '#gTotal');
    });

    $(document).on('input', '.question19Col2', function() {
      updateTotal('.question19Col2', '#question19Col2');
      updateTotal('.gTotal', '#gTotal');
    });

    $(document).on('input', '.question19Col3', function() {
      updateTotal('.question19Col3', '#question19Col3');
      updateTotal('.gTotal', '#gTotal');
    });
    $(document).on('input', '.question19Col4', function() {
      updateTotal('.question19Col4', '#question19Col4');
      updateTotal('.gTotal', '#gTotal');
    });
    $(document).on('input', '.question19Col5', function() {
      updateTotal('.question19Col5', '#question19Col5');
      updateTotal('.gTotal', '#gTotal');
    });

    

    $(document).on('input', '.question19rowmen', function() {
      updateTotal('.question19rowmen', '#question19rowMenTotal');
      updateTotal('.gTotal', '#gTotal');

    });

    $(document).on('input', '.question19rowWomen', function() {
      updateTotal('.question19rowWomen', '#question19rowWomenTotal');
      updateTotal('.gTotal', '#gTotal');
    });
    

    $(document).on('input', '.question19row3rdG', function() {
      updateTotal('.question19row3rdG', '#question19row3rdGTotal');
      updateTotal('.gTotal', '#gTotal');

    });    
    
  })
  //19 question calculation end

  //34 question start

  $(document).ready(function() {

 // A function to update the total for a specific group of inputs
 function updateTotal(inputsClass, totalId) {
 let sum = 0;
 $(inputsClass).each(function() {
 sum += parseFloat($(this).val()) || 0;
 });
 $(totalId).val(sum);
 }
 
 $(document).on('input', '.question34Col1', function() {
 updateTotal('.question34Col1', '#question34Col1');
 // updateTotal('.gTotal', '#gTotal');
 });

 $(document).on('input', '.question34Col2', function() {
 updateTotal('.question34Col2', '#question34Col2');
 // updateTotal('.gTotal', '#gTotal');
 });

 $(document).on('input', '.question34Col3', function() {
 updateTotal('.question34Col3', '#question34Col3');
 // updateTotal('.gTotal', '#gTotal');
 });

 $(document).on('input', '.question34Col4', function() {
 updateTotal('.question34Col4', '#question34Col4');
 //updateTotal('.gTotal', '#gTotal');
 });
 $(document).on('input', '.question34Col5', function() {
 updateTotal('.question34Col5', '#question34Col5');
 //updateTotal('.gTotal', '#gTotal');
 });
 $(document).on('input', '.question34Col6', function() {
 updateTotal('.question34Col6', '#question34Col6');
 // updateTotal('.gTotal', '#gTotal');
 });

 $(document).on('input', '.question34Col7', function() {
 updateTotal('.question34Col7', '#question34Col7');
 // updateTotal('.gTotal', '#gTotal');
 });

})

//question 24
$(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    

    $(document).on('input', '.question24Col1', function() {
      updateTotal('.question24Col1', '#question24Col1');
      updateTotal('.q24gTotal', '#q24gTotal');
    });

    $(document).on('input', '.question24Col2', function() {
      updateTotal('.question24Col2', '#question24Col2');
      updateTotal('.q24gTotal', '#q24gTotal');
    });
    $(document).on('input', '.question24Col3', function() {
      updateTotal('.question24Col3', '#question24Col3');
      updateTotal('.q24gTotal', '#q24gTotal');
    });
    $(document).on('input', '.question24Col4', function() {
      updateTotal('.question24Col4', '#question24Col4');
      updateTotal('.q24gTotal', '#q24gTotal');
    });
    $(document).on('input', '.question24Col5', function() {
      updateTotal('.question24Col5', '#question24Col5');
      updateTotal('.q24gTotal', '#q24gTotal');
    });
    $(document).on('input', '.question24Col6', function() {
      updateTotal('.question24Col6', '#question24Col6');
      updateTotal('.q24gTotal', '#q24gTotal');
    });
    $(document).on('input', '.question24Col7', function() {
      updateTotal('.question24Col7', '#question24Col7');
      updateTotal('.q24gTotal', '#q24gTotal');
    });


    $(document).on('input', '.question24RowMen', function() {
      updateTotal('.question24RowMen', '#q24MenTotal');
      updateTotal('.q24gTotal', '#q24gTotal');

    });

    $(document).on('input', '.question24RowWomen', function() {
      updateTotal('.question24RowWomen', '#q24WomenTotal');
      updateTotal('.q24gTotal', '#q424gTotal');
    });
    

    $(document).on('input', '.question24Row3rdGender', function() {
      updateTotal('.question24Row3rdGender', '#q24TrdGTotal');
      updateTotal('.q24gTotal', '#q24gTotal');

    });    

    $(document).on('input', '.question24RowBoys', function() {
      updateTotal('.question24RowBoys', '#q24BoysTotal');
      updateTotal('.q24gTotal', '#q24gTotal');
    });
    

    $(document).on('input', '.question24RowGirls', function() {
      updateTotal('.question24RowGirls', '#q24GirlsTotal');
      updateTotal('.q24gTotal', '#q24gTotal');

    });    
    
  })
  //question 24
//Question 32
$(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    

    $(document).on('input', '.question32Col1', function() {
      updateTotal('.question32Col1', '#question32Col1');
      updateTotal('.q32gTotal', '#q32gTotal');
    });

    $(document).on('input', '.question32Col2', function() {
      updateTotal('.question32Col2', '#question32Col2');
      updateTotal('.q32gTotal', '#q32gTotal');
    });

    $(document).on('input', '.question32RowMen', function() {
      updateTotal('.question32RowMen', '#q32MenTotal');
      updateTotal('.q32gTotal', '#q32gTotal');

    });

    $(document).on('input', '.question32RowWomen', function() {
      updateTotal('.question32RowWomen', '#q32WomenTotal');
      updateTotal('.q32gTotal', '#q32gTotal');
    });
    

    $(document).on('input', '.question32Row3rdGender', function() {
      updateTotal('.question32Row3rdGender', '#q32TrdGTotal');
      updateTotal('.q32gTotal', '#q32gTotal');

    });    

    $(document).on('input', '.question32RowBoys', function() {
      updateTotal('.question32RowBoys', '#q32BoysTotal');
      updateTotal('.q32gTotal', '#q32gTotal');
    });
    

    $(document).on('input', '.question32RowGirls', function() {
      updateTotal('.question32RowGirls', '#q32GirlsTotal');
      updateTotal('.q32gTotal', '#q32gTotal');

    });    
    
  })
  // end question 32


//Question 33

$(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    

    $(document).on('input', '.question33Col1', function() {
      updateTotal('.question33Col1', '#question33Col1');
      updateTotal('.q33gTotal', '#q33gTotal');
    });

    $(document).on('input', '.question33Col2', function() {
      updateTotal('.question33Col2', '#question33Col2');
      updateTotal('.q33gTotal', '#q33gTotal');
    });

    $(document).on('input', '.question33RowMen', function() {
      updateTotal('.question33RowMen', '#q33MenTotal');
      updateTotal('.q33gTotal', '#q33gTotal');

    });

    $(document).on('input', '.question33RowWomen', function() {
      updateTotal('.question33RowWomen', '#q33WomenTotal');
      updateTotal('.q33gTotal', '#q33gTotal');
    });
    

    $(document).on('input', '.question33Row3rdGender', function() {
      updateTotal('.question33Row3rdGender', '#q33TrdGTotal');
      updateTotal('.q33gTotal', '#q33gTotal');

    });    

    $(document).on('input', '.question33RowBoys', function() {
      updateTotal('.question33RowBoys', '#q33BoysTotal');
      updateTotal('.q33gTotal', '#q33gTotal');
    });
    

    $(document).on('input', '.question33RowGirls', function() {
      updateTotal('.question33RowGirls', '#q33GirlsTotal');
      updateTotal('.q33gTotal', '#q33gTotal');

    });    
    

    
    
  })


  $(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    

    $(document).on('input', '.q38Col1', function() {
      updateTotal('.q38Col1', '#q38Col1');
    });

    $(document).on('input', '.q38Col2', function() {
      updateTotal('.q38Col2', '#q38Col2');
    });

    $(document).on('input', '.q38Col3', function() {
      updateTotal('.q38Col3', '#q38Col3');
    });

  });

 

  //34 question end


    // Question  51

    $(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    

    $(document).on('input', '.q51Col', function() {
      updateTotal('.q51Col', '#q51Total');
    });

  });

//Question 32

//24 question 

//19 question calculation




  // Question  53

  $(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    

    $(document).on('input', '.q53Col', function() {
      updateTotal('.q53Col', '#q53Total');
    });

  });

    
  $(document).ready(function() {
          $('.multiSelect').select2({
          placeholder: "--- Select Location ---"
        });
    });
    
  });
</script>


@endsection