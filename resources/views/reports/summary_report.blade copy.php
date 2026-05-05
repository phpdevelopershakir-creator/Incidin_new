@extends('layouts.app')

@section('content')
<?php
use App\Helpers\helper;
?>

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
  <!-- <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Case Report String Data</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div> -->
      <!-- Content Header (Page header) -->
      <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Summary Report</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   
  
  <section class="content">
    <div class="container-fluid">
     
    
        <div class="row">
        <a style="margin:5px;" href="{{url('/superadmin/reports/summary_report_pdf')}}" target="_blank" class="btn btn-info float-right">PDF Dawnload</a>
   <!-- question no 1  Start -->
  
    <!-- question no 1  end -->

    <div class="col-md-12">
    <div class="card card-outline collapsed-card">
      <div class="card-header">

        <h3 class="card-title">1. New forms of Trafficking</h3>

        <div class="card-tools">
          <button id="q1-dashboard-data-view" type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
     
      <table class="table table-bordered" style="border: 0;">
          <thead>
            <tr>
              <th align="center">User</th>
              <th align="center">Date</th>
              <th align="center">Feedback</th>
            </tr>
          </thead>
          <tbody>
          @foreach($questionOneData as $questionOne)
          <tr>
             
            <td >
              {{$questionOne['name']}}
            </td>
             <td >
              {{$questionOne['created_at']}}
            </td>
           
            
            <td>
            
            <table>
          
            <tbody>
            <tr>
                <!-- <th align="center">Initiative to mitigate Risk</th> -->
                <th align="center">Type</th>
                <th align="center">Location</th>
              </tr>
            @foreach($questionOne["feedback"] as $feedback)
              <tr>
                <td>
                  {{helper::arraykeys_to_value($q1_question_type,$feedback->q1_type_id)}}
                </td>
                <td>
                {{helper::arraykeys_to_value($q1_locations,$feedback->q1_location_id)}}
                </td>
              </tr> 
              @endforeach   
            </tbody>  
           
           </table>   
            </td>
           
           

           </tr>
            
           @endforeach
            


          </tbody>

        </table>
   
        </div>
    </div>
    </div>

    <div class="col-md-12">
    <div class="card card-outline collapsed-card">
      <div class="card-header">

        <h3 class="card-title">2. Which identified groups are at particular risk of sex trafficking and forced labor?
</h3>

        <div class="card-tools">
          <button id="q1-dashboard-data-view" type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">

           
            <table class="table table-bordered" style="border: 0;">
              <thead>
                <tr>
                  <th align="center">User</th>
                  <th align="center">Date</th>
                  <th align="center">Feedback</th>
                </tr>
              </thead>
              <tbody>
              @foreach($question_two_data as $questiondata)
          <tr>
             
            <td >
              {{$questiondata['name']}}
            </td>
             <td >
              {{$questiondata['created_at']}}
            </td>
           
            
            <td>
            
            <table>
          
            <tbody>
            <tr>
                <!-- <th align="center">Initiative to mitigate Risk</th> -->
                <th align="center">Vulnerable list</th>
                <th align="center">Specify</th>
              </tr>
            @foreach($questiondata["feedback"] as $q2feedback)
            <tr>
                <td>
                  {{helper::arraykeys_to_value($q1_vulnerable_list,$q2feedback->choose_vulnerable_list_id)}}
                </td>
                <td>
                {{$q2feedback->others_specify_id}}
                </td>
              </tr> 
              @endforeach   
            </tbody>  
           
           </table>   
            </td>
           
           

           </tr>
            
           @endforeach
            
              </tbody>
              </table>  
            


   
        </div>
    </div>
    </div>


 <!-- question two end  -->

 <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">3.Is there any new risk and initiatives to mitigate the risk of trafficking
            associated with Climate Change
            (CC)?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
         
         
          
          <table class="table table-bordered" style="border: 0;">
          <thead>
            <tr>
              <th align="center">User</th>
              <th align="center">Date</th>
              <th align="center">Feedback</th>
            </tr>
          </thead>
          <tbody>
          @foreach($questionsThree as $question_three)
          <tr>
             
            <td >
              {{$question_three['name']}}
            </td>
             <td >
              {{$question_three['created_at']}}
            </td>
           
            
            <td>
            
            <table>
          
            <tbody>
              <tr>
                <th align="center">Initiative to mitigate Risk</th>
                <th align="center">Title of Project</th>
                <th align="center">Location</th>
                <th align="center">Beneficiary</th>
              </tr>
            @foreach($question_three["feedback"] as $q3feedback)
              <tr>
                <td>
                  {{helper::arraykeys_to_value($q3_migitate_risk,$q3feedback->q3_initiative_mitigate_risk)}}
                </td>
                <td>
                {{$q3feedback->q3_title_project_program}}
                </td>
                <td>
                {{helper::arraykeys_to_value($q3_locations,$q3feedback->q3_location_id)}}
                </td>
                <td>
                {{helper::arraykeys_to_value($q3_problem_beneficary,$q3feedback->q3_problem_id)}}
                </td>
              </tr> 
              @endforeach   
            </tbody>  
           
           </table>   
            </td>
           
           

           </tr>
            
           @endforeach
            


          </tbody>

        </table>

        </div>
      </div>
 </div> 
   
<!-- question no 4 end -->
<div class="col-md-12 question4">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">4.Did the National Authority convene?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
 

      
      <table class="table table-bordered" style="border: 0;">
          <thead>
            <tr>
              <th align="center">User</th>
              <th align="center">Date</th>
              <th align="center">Feedback</th>
            </tr>
          </thead>
          <tbody>
          @foreach($questionsFour as $question_four)
          <tr>
             
            <td >
              {{$question_four['name']}}
            </td>
             <td >
              {{$question_four['created_at']}}
            </td>
           
            
            <td>
            
            <table>
          
            <tbody>
              <!-- <tr>
            <th align="center">Meeting No</th>
            <th align="center">Key decisions</th>
            </tr> -->
              <tr>
                <!-- <th align="center">Initiative to mitigate Risk</th> -->
                <th align="center">Component</th>
                <th align="center">Issue</th>
                <th align="center">Remark</th>
              </tr>
            @foreach($question_four["feedback"] as $q4feedback)
            
            <tr>
            
                <td>
                  {{$q4feedback->meeting_no}}
                  </td>
                  <td>
                  {{$q4feedback->key_decisions}}
                  </td>
                 
            </tr>
              <tr>
                <!-- <td>
                {{$q4feedback->type_component_q4}}
                </td> -->
                <td>
                  {{helper::arraykeys_to_value($q4_components,$q4feedback->type_component)}}
                </td>
                <td>
                  {{helper::arraykeys_to_value($q4_type_issues,$q4feedback->type_issue_q4)}}
                </td>
                
                <td>
                {{helper::arraykeys_to_value($q4_remarks,$q4feedback->type_remark_q4)}}
                </td>
               
              </tr> 
              @endforeach   
            </tbody>  
           
           </table>   
            </td>
           
           

           </tr>
            
           @endforeach
            


          </tbody>

        </table>
    </div>
  </div>
</div> 

<div class="col-md-12 question5">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">5.Did your ministry/agency take steps to ensure policies did not further marginalize communities already overrepresented among trafficking victims?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
     
     
      <div id="five_question_view">
      
      <table class="table table-bordered" style="border: 0;">
          <thead>
            <tr>
              <th align="center">User</th>
              <th align="center">Date</th>
              <th align="center">Feedback</th>
            </tr>
          </thead>
          <tbody>
          @foreach($questionsFive as $question_five)
          <tr>
             
            <td >
              {{$question_five['name']}}
            </td>
             <td >
              {{$question_five['created_at']}}
            </td>
           
            
            <td>
            
            <table>
          
            <tbody>
              <!-- <tr>
            <th align="center">Meeting No</th>
            <th align="center">Key decisions</th>
            </tr> -->
              <tr>
                <!-- <th align="center">Initiative to mitigate Risk</th> -->
                <th align="center">Type of Policy tool</th>
                <th align="center">Title of the initiative</th>
                <th align="center">Objectives</th>
              </tr>
            @foreach($question_five["feedback"] as $q5feedback)
            
            
              <tr>
                <!-- <td>
                {{$q4feedback->type_component_q4}}
                </td> -->
                <td>
                  {{helper::arraykeys_to_value($q5_type_policy_tool,$q5feedback->type_policy_tool_id)}}
                </td>
                <td>
                  {{$q5feedback->title_the_initiative_id}}
                </td>
                
                <td>
                {{$q5feedback->objectives_id}}
                </td>
               
              </tr> 
              @endforeach   
            </tbody>  
           
           </table>   
            </td>
           
           

           </tr>
            
           @endforeach
            


          </tbody>

        </table>
    </div>
    </div>
  </div>
</div>

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
    
      
      <div id="six_question_view">
      <table class="table table-bordered table-white">
        <thead>
          <tr>
            <th scope="col">Type of preventive Action</th>
            <th scope="col">Allocation (in BDT)</th>


          </tr>
        </thead>
        <tbody>
    
          
        
        @foreach($questionsSix as $six)
          <tr>
            <th>
            @if ($six->type_preventive_action	 == 1)
            Total Allocation under NPA for prevention
            @elseif ($six->type_preventive_action	 == 2)
            Total Allocation utilized under NPA for prevention
            @elseif ($six->type_preventive_action	 == 3)
            Total allocation spent for Awareness activities
            @elseif ($six->type_preventive_action	 == 4)
            Total allocation spent for safety-net            
                @elseif ($six->type_preventive_action	 == 5)
                Total allocation spent for training to promote prevention 
            @elseif ($six->type_preventive_action	 == 6)
            Assessment of Allocation

            @endif
            
            </th>
            
            <td>
          
              {{$six->allocation_id}}
              
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    </div>
  </div>
</div>
    <!-- question no 6 end -->  
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
      
      
    
      <div id="seven_question_view">
      <table class="table table-bordered table-white">
        <thead>
          <tr>
            <th>Duration of NPA</th>
            <th>Attach/Upload</th>
          </tr>
        </thead>
        <tbody>
        @foreach($questionsSeven as $seven)
          <tr>
            <th>   {{$seven->duration_npa}} </th>
            <td> 
            <img id="logo" src="{{ asset($seven->attach_image) }}" width="50" height="50;" />
              
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      
      </div>
    </div>
  </div>
</div> 
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


   


     <table id="resources_funding" class="table table-bordered table-white">
       <thead>
         <tr>
           <th scope="col">Allocation</th>
           <th scope="col">Allocation</th>


         </tr>
       </thead>
       <tbody>
       @foreach($questionsEight as $eight)
         <tr>
           <th >
           @if ($eight->instrument	 == 1)
           Total Allocation under NPA
                @elseif ($eight->instrument	 == 2)
                Total Allocation utilized under NPA
                @elseif ($eight->instrument	 == 3)
                MoAssessment of Allocation
           
                @endif
           
          </th>

           <td> 
        
             
                {{$eight->allocation_status}}
        
           
          

           </td>
         </tr>
         @endforeach
       </tbody>
     </table>

   </div>
 </div>
</div> 
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
          
         


          <div id ="9_question_view">
      <table class="table table-bordered table-white">
        <thead>
          <tr>
            <th rowspan="2" scope="col">Types of Activities</th>
            <th colspan="7">Community (number covered)s</th>

            <!-- <th colspan="3">Total (number covered)</th> -->
      
          </tr>

          <tr>
            <th scope="col">M </th>
            <th scope="col">W</th>
            <th scope="col">3rd G</th>
            <th scope="col">B</th>
            <th scope="col">G</th>
            <th scope="col">T</th>
            <th>Location</th>
           
          </tr>
          @foreach($questionsNine as $nine)
          <tr>
            <td>
            @if ($nine->type_activities	 == 1)
            Courtyard meeting
                @elseif ($nine->type_activities	 == 2)
                Bazar/hatt meeting
                @elseif ($nine->type_activities	 == 3)
                CTC meeting
                @elseif ($nine->type_activities	 == 4)
                Consultation
                @elseif ($nine->type_activities	 == 5)
                Poster
                @elseif ($nine->type_activities	 == 6)
                leaflet
                @elseif ($nine->type_activities	 == 7)
                Booklet
                @elseif ($nine->type_activities	 == 8)
                SMS	
                @elseif ($nine->type_activities	 == 9)
                Newsletter	
                @elseif ($nine->type_activities	 == 10)
                Billboard
                @elseif ($nine->type_activities	 == 11)
                Folk show
                @elseif ($nine->type_activities	 == 12)
                Film show
                @elseif ($nine->type_activities	 == 13)
                Miking
                @elseif ($nine->type_activities	 == 14)
                Web campaign
                @else
                 {{$nine->type_activities}}
                  @endif
             
             </td>
           
            <th >
            {{$nine->type_activities_men}}
             
            </th>
            <th >   {{$nine->type_activities_women}}</th>
            <th > {{$nine->type_activities_third_gender}}</th>
            <th>{{$nine->type_activities_boy}} </th>
            <th >{{$nine->type_activities_girl}} </th>
            <th >{{$nine->type_activities_total}}  </th>
            <th >
            @if ($nine->type_activities_location == 1)
                Barisal
                @elseif ($nine->type_activities_location == 2)
                Chattogram
                @elseif ($nine->type_activities_location == 3)
                Dhaka
                @elseif ($nine->type_activities_location == 4)
                Khulna
                @elseif ($nine->type_activities_location == 5)
                Mymensingh
                @elseif ($nine->type_activities_location == 6)
                Rajshahi
                @elseif ($nine->type_activities_location == 7)
                Rangpur
                @elseif ($nine->type_activities_location == 8)
                Sylhet
                @elseif ($nine->type_activities_location == 9)
                National
                @endif
              
            </th>
        
          </tr>
          @endforeach


        </thead>
      </table>
          </div>
    </div>
  </div>
</div>
<div class="col-md-12 question10">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">10.Did your ministry/agency carry out any efforts to raise awareness or train
        foreign governments on trafficking?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
     
     
     
      <div id="ten_question_view" class="card-body row">
      
      <table id="addRowQ10" class="table table-bordered" style="border: 0;">
          <thead>
            <tr>
              <th align="center">User</th>
              <th align="center">Date</th>
              <th align="center">Feedback</th>
            </tr>
          </thead>
          <tbody>
          @foreach($questionsTen as $question_ten)
          <tr>
             
            <td >
              {{$question_ten['name']}}
            </td>
             <td >
              {{$question_ten['created_at']}}
            </td>
           
            
            <td>
            
            <table>
          
            <tbody>
              <!-- <tr>
            <th align="center">Meeting No</th>
            <th align="center">Key decisions</th>
            </tr> -->
              <tr>
                <!-- <th align="center">Initiative to mitigate Risk</th> -->
                <th align="center">Country</th>
                <th align="center">Target group of Training</th>
                <th align="center">Total coverage</th>
              </tr>
            @foreach($question_ten["feedback"] as $q10feedback)
            
            
              <tr>
                <!-- <td>
                {{$q4feedback->type_component_q4}}
                </td> -->
                <td>
                  {{$q10feedback->country}}
                </td>
                <td>
                  {{helper::arraykeys_to_value($q10_target_groups,$q10feedback->trafficking_target_group)}}
                </td>
                
                <td>
                {{$q10feedback->trafficking_total_coverage}}
                </td>
               
              </tr> 
              @endforeach   
            </tbody>  
           
           </table>   
            </td>
           
           

           </tr>
            
           @endforeach
            


          </tbody>

        </table>
    </div>
    </div>
  </div>
</div>
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
    
      <div id="eleven_question_view">
      
      <table class="table table-bordered" style="border: 0;">
          <thead>
            <tr>
              <th align="center">User</th>
              <th align="center">Date</th>
              <th align="center">Feedback</th>
            </tr>
          </thead>
          <tbody>
          @foreach($questionsEleven as $question_eleven)
          <tr>
             
            <td >
              {{$question_eleven['name']}}
            </td>
             <td >
              {{$question_eleven['created_at']}}
            </td>
           
            
            <td>
            
            <table>
          
            <tbody>
              <!-- <tr>
            <th align="center">Meeting No</th>
            <th align="center">Key decisions</th>
            </tr> -->
              <tr>
                <!-- <th align="center">Initiative to mitigate Risk</th> -->
                <th align="center">Original Document/Approach</th>
                <th align="center">Description of Change</th>
              </tr>
            @foreach($question_eleven["feedback"] as $q11feedback)
            
            
              <tr>
                
              <td>
                  {{helper::arraykeys_to_value($q11_orgianal_approach,$q11feedback->original_approach)}}
                </td>
                <td>
                  {{helper::arraykeys_to_value($q11_description_changes,$q11feedback->description_change)}}
                </td>
                
               
              </tr> 
              @endforeach   
            </tbody>  
           
           </table>   
            </td>
           
           

           </tr>
            
           @endforeach
            


          </tbody>

        </table>
    </div>
    </div>
  </div>
</div>

<div class="col-md-12 question12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">12.Any new agreements, with a transparent oversight mechanism, with other countries
        on safe and
        responsible labor recruitment that included measures</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
    
    

    


      <div id="twevel_question_view" class="card-body row">
     
      <table id="addRowQ12" class="table table-bordered" style="border: 0;">
          <thead>
            <tr>
              <th align="center">User</th>
              <th align="center">Date</th>
              <th align="center">Feedback</th>
            </tr>
          </thead>
          <tbody>
          @foreach($questionsTwelve as $question_twelve)
          <tr>
             
            <td >
              {{$question_twelve['name']}}
            </td>
             <td >
              {{$question_twelve['created_at']}}
            </td>
           
            
            <td>
            
            <table>
          
            <tbody>
              <!-- <tr>
            <th align="center">Meeting No</th>
            <th align="center">Key decisions</th>
            </tr> -->
              <tr>
                <!-- <th align="center">Initiative to mitigate Risk</th> -->
                <th align="center">Country</th>
                <th align="center">Instrument</th>
              </tr>
            @foreach($question_twelve["feedback"] as $q12feedback)
            
            
              <tr>
                
                <td>
                  {{$q12feedback->country}}
                </td>
              <td>
                  {{helper::arraykeys_to_value($q12_instruments,$q12feedback->instrument)}}
                </td>
                
               
              </tr> 
              @endforeach   
            </tbody>  
           
           </table>   
            </td>
           
           

           </tr>
            
           @endforeach
            


          </tbody>

        </table>
    </div>
    </div>
  </div>
</div>
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
     

      <table class="table table-bordered" style="border: 0;">
          <thead>
            <tr>
              <th align="center">User</th>
              <th align="center">Date</th>
              <th align="center">Feedback</th>
            </tr>
          </thead>
          <tbody>
          @foreach($questionsThirteen as $question_thirteen)
          <tr>
             
            <td >
              {{$question_thirteen['name']}}
            </td>
             <td >
              {{$question_thirteen['created_at']}}
            </td>
           
            
            <td>
            
            <table>
          
            <tbody>
              <!-- <tr>
            <th align="center">Meeting No</th>
            <th align="center">Key decisions</th>
            </tr> -->
              <tr>
                <!-- <th align="center">Initiative to mitigate Risk</th> -->
                <th align="center">Action Level</th>
                <th align="center">Type of Action</th>
              </tr>
            @foreach($question_thirteen["feedback"] as $q13feedback)
            
            
              <tr>
                
                <td>
                  {{helper::arraykeys_to_value($q13_action_levels, $q13feedback->q13_action_level)}}
                </td>
              <td>
                  {{helper::arraykeys_to_value($q13_national_type_actions,$q13feedback->q13_national_type_action)}}
                </td>
                
               
              </tr> 
              @endforeach   
            </tbody>  
           
           </table>   
            </td>
           
           

           </tr>
            
           @endforeach
            


          </tbody>

        </table>
    </div>
  </div>
</div>

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
    

    
      <div id="fourteen_question_view">
      <table class="table table-bordered table-white">
        <thead>
          <tr>
            <th scope="col">Action</th>
            <th scope="col">Attach/Upload/Summary</th>
          </tr>
        </thead>
        <tbody>
        @foreach($questionsFourteen as $fourteen)
          <tr>
            <th >
            @if ($fourteen->q14_action_no	 == 1)
            Strict Monitoring of impacts of policies
            @elseif ($fourteen->q14_action_no	 == 2)
            Promotion of safe migration
            @elseif ($fourteen->q14_action_no	 == 3)
            Awareness raising of vulnerable groups
            @elseif ($fourteen->q14_action_no	 == 4)
            Expansion of safety-net for vulnerable groups
            @elseif ($fourteen->q14_action_no	 == 5)
            Promotion of skilling among vulnerable groups
      
            {{$fourteen->q14_action_no}}
            @endif
            
            </th>
      
            <td> 
            <img id="logo" src="{{ asset($fourteen->q14_upload_summary) }}" width="50" height="50;" />
      
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      

    </div>
    </div>
  </div>
</div>
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
      

      
      <div id="fifteen_question_view">
      
      <table class="table table-bordered" style="border: 0;">
          <thead>
            <tr>
              <th align="center">User</th>
              <th align="center">Date</th>
              <th align="center">Feedback</th>
            </tr>
          </thead>
          <tbody>
          @foreach($questionsFifteen as $question_fifteen)
          <tr>
             
            <td >
              {{$question_fifteen['name']}}
            </td>
             <td >
              {{$question_fifteen['created_at']}}
            </td>
           
            
            <td>
            
            <table>
          
            <tbody>
              <!-- <tr>
            <th align="center">Meeting No</th>
            <th align="center">Key decisions</th>
            </tr> -->
              <tr>
                <!-- <th align="center">Initiative to mitigate Risk</th> -->
                <th align="center">Action/Tool</th>
                <th align="center">Status</th>
              </tr>
            @foreach($question_fifteen["feedback"] as $q15feedback)
            
            
              <tr>
                
                
                <td>
                  {{helper::arraykeys_to_value($q15_actions,$q15feedback->q15_action_no)}}
                </td>
              <td>
                  {{helper::arraykeys_to_value($q15_status,$q15feedback->q15_status_id)}}
                </td>
                
               
              </tr> 
              @endforeach   
            </tbody>  
           
           </table>   
            </td>
           
           

           </tr>
            
           @endforeach
            


          </tbody>

        </table>
    </div>
    </div>
  </div>
</div>
<div class="col-md-12 question16">
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


      
      <table class="table table-bordered" style="border: 0;">
          <thead>
            <tr>
              <th align="center">User</th>
              <th align="center">Date</th>
              <th align="center">Feedback</th>
            </tr>
          </thead>
          <tbody>
          @foreach($questionsSixteen as $question_sixteen)
          <tr>
             
            <td >
              {{$question_sixteen['name']}}
            </td>
             <td >
              {{$question_sixteen['created_at']}}
            </td>
           
            
            <td>
            
            <table>
          
            <tbody>
              <!-- <tr>
            <th align="center">Meeting No</th>
            <th align="center">Key decisions</th>
            </tr> -->
              <tr>
                <!-- <th align="center">Initiative to mitigate Risk</th> -->
                <th align="center">Action</th>
                <th align="center">Status</th>
              </tr>
            @foreach($question_sixteen["feedback"] as $q16feedback)
            
            
              <tr>
                
                
                <td>
                  {{helper::arraykeys_to_value($q16_actions,$q16feedback->q16_action_no)}}
                </td>
              <td>
                  {{helper::arraykeys_to_value($q16_status,$q16feedback->q16_status_id)}}
                </td>
                
               
              </tr> 
              @endforeach   
            </tbody>  
           
           </table>   
            </td>
           
           

           </tr>
            
           @endforeach
            


          </tbody>

        </table>
    </div>
  </div>
</div>
    


    
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
     
    
    

     
         
         <div id="seventeen_question_view">
          

          <table class="table table-bordered" style="border: 0;">
          <thead>
            <tr>
              <th align="center">User</th>
              <th align="center">Date</th>
              <th align="center">Feedback</th>
            </tr>
          </thead>
          <tbody>
          @foreach($questionsSeventeen as $question_seventeen)
          <tr>
             
            <td >
              {{$question_seventeen['name']}}
            </td>
             <td >
              {{$question_seventeen['created_at']}}
            </td>
           
            
            <td>
            
            <table>
          
            <tbody>
              <!-- <tr>
            <th align="center">Meeting No</th>
            <th align="center">Key decisions</th>
            </tr> -->
              <tr>
                <!-- <th align="center">Initiative to mitigate Risk</th> -->
                <th align="center">Action</th>
                <th align="center">Status</th>
              </tr>
            @foreach($question_seventeen["feedback"] as $q17feedback)
            
            
              <tr>
                
                <!-- <td>
                {{$q17feedback->q17_awareness_raising_other_specify}}
                </td> -->
                <td>
                  {{helper::arraykeys_to_value($q17_actions,$q17feedback->action_no_q17)}}
                </td>
              <td>
                  {{helper::arraykeys_to_value($q17_status,$q17feedback->status_id_q17)}}
                </td>
                
               
              </tr> 
              @endforeach   
            </tbody>  
           
           </table>   
            </td>
           
           

           </tr>
            
           @endforeach
            


          </tbody>

        </table>
        </div>
      </div>
    </div>
 


    
<div class="col-md-12 question18">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">18.Did the government train its diplomats not to engage in or facilitate
        trafficking?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      
     
       <div id="eightteen_question_view">
      <table>
        <br />
        <br />
        <thead>
          <tr>
            <th rowspan="2" scope="row">Category of Trainee</th>
            <th colspan="5" style="text-align: left">Coverage of Training</th>
          </tr>
          <tr>
            <th scope="row">Men</th>
            <th scope="col">Women</th>
            <th scope="col">3rd G</th>
            <th scope="col">Total</th>

          </tr>
        </thead>
        <tbody>
        @foreach($questionsEighteen as $eighteen)
          <tr>
          <td>
          @if ($eighteen->category_trainee_q18 == 1)
          Diplomats in foreign missions
                @elseif ($eighteen->category_trainee_q18 == 2)
                Labour Attaches
                @elseif ($eighteen->category_trainee_q18 == 3)
                MoFA officials within the country
                @endif
              </td>

      
            <td>   <div>   {{ $eighteen->coverage_training_men }}  </div>  </td>
            <td>   <div>   {{ $eighteen->coverage_training_women }}  </div>  </td>
            <td>   <div>   {{ $eighteen->coverage_training_third_gender }}  </div>  </td>
            <td>   <div>   {{ $eighteen->coverage_training_total }}  </div>  </td>
           

          </tr>

          @endforeach
       
        </tbody>
      </table>
    </div>
    </div>
  </div>
</div>


<div class="col-md-12 question19">
 <div class="card card-outline collapsed-card">
   <div class="card-header">
     <h3 class="card-title">19.If there were allegations that a diplomat representing the government abroad engaged in or facilitated trafficking, did the government seek criminal accountability?<h3>
     <div class="card-tools">
       <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
       </button>
     </div>
   </div>
  
   <div class="card-body">
     
   

     
    <div id="nineteen_question_view" class="card-body row">
     

     <table id="addRowQ19" class="table table-bordered" style="border: 0;">
          <thead>
            <tr>
              <th align="center">User</th>
              <th align="center">Date</th>
              <th align="center">Feedback</th>
            </tr>
          </thead>
          <tbody>
          @foreach($questionsNineteen as $question_nineteen)
          <tr>
             
            <td >
              {{$question_nineteen['name']}}
            </td>
             <td >
              {{$question_nineteen['created_at']}}
            </td>
           
            
            <td>
            
            <table>
          
            <tbody>
              <!-- <tr>
            <th align="center">Meeting No</th>
            <th align="center">Key decisions</th>
            </tr> -->
              <tr>
                <!-- <th align="center">Initiative to mitigate Risk</th> -->
                <th align="center">Country</th>
                <th align="center">Description</th>
                <th align="center">Men</th>
                <th align="center">Women</th>
                <th align="center">Third Gender</th>
                <th align="center">Total</th>
              </tr>
            @foreach($question_nineteen["feedback"] as $q19feedback)
            
            
              <tr>
                
                <td>
                {{$q19feedback->country}}
                </td>
                <td>
                  {{$q19feedback->q19_description}}
                </td>
              <td>
                  {{$q19feedback->q19_number_cases_men}}
                </td>
                <td>
                  {{$q19feedback->q19_number_cases_women}}
                </td>
                <td>
                  {{$q19feedback->q19_number_cases_third_gender}}
                </td>
                <td>
                  {{$q19feedback->q19_number_cases_total}}
                </td>
                
               
              </tr> 
              @endforeach   
            </tbody>  
           
           </table>   
            </td>
           
           

           </tr>
            
           @endforeach
            


          </tbody>

        </table>
   </div>
   </div>
 </div>
</div> 






<div class="col-md-12 question20">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">20.Did the government provide anti-trafficking training to its nationals deployed
        abroad on
        peacekeeping or other similar missions?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    
    <div class="card-body">
    <div class="form-group clearfix">
  
         
         
     <div id ="twenty_question_view" class="card-body row">
      

      <table id="addRowQ20" class="table table-bordered" style="border: 0;">
          <thead>
            <tr>
              <th align="center">User</th>
              <th align="center">Date</th>
              <th align="center">Feedback</th>
            </tr>
          </thead>
          <tbody>
          @foreach($questionsTwenty as $question_twenty)
          <tr>
             
            <td >
              {{$question_twenty['name']}}
            </td>
             <td >
              {{$question_twenty['created_at']}}
            </td>
           
            
            <td>
            
            <table>
          
            <tbody>
              <!-- <tr>
            <th align="center">Meeting No</th>
            <th align="center">Key decisions</th>
            </tr> -->
              <tr>
                <!-- <th align="center">Initiative to mitigate Risk</th> -->
                <th align="center">Country</th>
                <th align="center">Description</th>
                <th align="center">Men</th>
                <th align="center">Women</th>
                <th align="center">Third Gender</th>
                <th align="center">Total</th>
              </tr>
            @foreach($question_twenty["feedback"] as $q20feedback)
            
            
              <tr>
                
                <td>
                {{$q20feedback->country}}
                </td>
                <td>
                  {{$q20feedback->q20_description}}
                </td>
              <td>
                  {{$q20feedback->q20_number_cases_men}}
                </td>
                <td>
                  {{$q20feedback->q20_number_cases_women}}
                </td>
                <td>
                  {{$q20feedback->q20_number_cases_third_gender}}
                </td>
                <td>
                  {{$q20feedback->q20_number_cases_total}}
                </td>
                
               
              </tr> 
              @endforeach   
            </tbody>  
           
           </table>   
            </td>
           
           

           </tr>
            
           @endforeach
            


          </tbody>

        </table>
      </div>  
    </div>
  </div>
</div>  





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
        @foreach($questionsTwentyOne as $twentyone)
          <tr>
            <td>
            @if ($twentyone->q21_main_document_procedure	 == 1)
            PSHT Act 2012 on VoT identification
                @elseif ($twentyone->q21_main_document_procedure	 == 2)
                NRM guideline on VoT identification
                @else
           
                 {{$twentyone->q21_main_document_procedure}}
                  @endif
              
            </td>
            
            <td>   
            @if ($twentyone->q21_status_id	 == 1)
            Enforced
                @elseif ($twentyone->q21_status_id	 == 2)
                Updated and enforced
                @elseif ($twentyone->q21_status_id	 == 3)
                Updated and enforced
                @elseif ($twentyone->q21_status_id	 == 4)
                Increased efforts
                @elseif ($twentyone->q21_status_id	 == 5)
                Moderate Effortt
                @elseif ($twentyone->q21_status_id	 == 6)
                Less Effort
                @elseif ($twentyone->q21_status_id	 == 7)
                Poor Enforcement
                @elseif ($twentyone->q21_status_id	 == 8)
                Under Review

       @elseif ($twentyone->q21_status_id	 == 9)
       Other (Specify)
       @else
                 {{$twentyone->q21_others_specify}}
                  @endif
           

                  
                 </td>
            <td>
            <img id="logo" src="{{ asset($twentyone->upload_file_21) }}" width="50" height="50;" />
             </td>
          </tr>
          @endforeach
         
        </tbody>
      </table>
      </div>
    </div>
  </div>
</div>



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
        @foreach($questionsTwentyTwo as $twentytwo)
          <tr>
            <th>
            @if ($twentytwo->q22_main_document_procedure	 == 1)
            Victim Identification Guidelines of PSD/MoHA
                @elseif ($twentytwo->q22_main_document_procedure	 == 2)
                PSHT Act’s Rule on VoT Identification
                @elseif ($twentytwo->q22_main_document_procedure	 == 3)
                Victim identification checklist of MoSW
                @elseif ($twentytwo->q22_main_document_procedure	 == 4)
                VoT identification under NRM of MoHA
           


                @else
           
                 {{$twentytwo->q22_main_document_procedure}}
                  @endif
              
             
            </th>
       
            <td> 
            @if ($twentytwo->q22_status_id	 == 1)
            Enforced
                @elseif ($twentytwo->q22_status_id	 == 2)
                Updated and enforced
                @elseif ($twentytwo->q22_status_id	 == 3)
                Stricter enforcement
                @elseif ($twentytwo->q22_status_id	 == 4)
                Increased efforts
                @elseif ($twentytwo->q22_status_id	 == 5)
                Moderate Effortt
                @elseif ($twentytwo->q22_status_id	 == 6)
                Less Effort
                @elseif ($twentytwo->q22_status_id	 == 7)
                Poor Enforcement
                @elseif ($twentytwo->q22_status_id	 == 8)
                Under Review
                @elseif ($twentytwo->q22_status_id	 == 9)
                Other (Specify)
                @else
           
                 {{$twentytwo->q22_others_specify}}
                  @endif
    </td>
            <td> 
            <img id="logo" src="{{ asset($twentytwo->upload_file_q22) }}" width="50" height="50;" />
              
             </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      </div>
    </div>
  </div>
</div>



    <!-- question 23  start -->
    <div class="col-md-12 question23">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">23. Is there any update on the existing approach of screening conducted by law enforcement, immigration, and social services personnel for indicators of trafficking, including of migrants, other vulnerable groups, and when detaining or arresting individuals in commercial sex?  </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div id="23_question_view">
          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Main document/Procedure</th>
                <th scope="col">Description of change/Status</th>
                <th scope="col">Attach/Upload</th>
              </tr>
            </thead>
            <tbody>
            @foreach($questionsTwentyThree as $twentythree)
              <tr>
                <td>
                @if ($twentythree->q23_main_document_procedure	 == 1)
                Screening via checklist of MoSW     
                @elseif ($twentythree->q23_main_document_procedure	 == 2)
                Victim Identification Guidelines of PSD/MoHA
                @elseif ($twentythree->q23_main_document_procedure	 == 3)
                Screening carried out by Police as per PSHTA

           


                @else
           
                 {{$twentythree->q23_main_document_procedure}}
                  @endif
              
                 
                </td>
              
                <td>
                @if ($twentythree->q23_status_id	 == 1)
            Enforced
                @elseif ($twentythree->q23_status_id	 == 2)
                Updated and enforced
                @elseif ($twentythree->q23_status_id	 == 3)
                Updated and enforced
                @elseif ($twentythree->q23_status_id	 == 4)
                Increased efforts
                @elseif ($twentythree->q23_status_id	 == 5)
                Moderate Effortt
                @elseif ($twentythree->q23_status_id	 == 6)
                Less Effort
                @elseif ($twentythree->q23_status_id	 == 7)
                Poor Enforcement
                @elseif ($twentythree->q23_status_id	 == 8)
                Under Review

       @elseif ($twentythree->q23_status_id	 == 9)
       Other (Specify)
       @else
                 {{$twentythree->q23_others_specify}}
                  @endif
              </td>
                <td> 
                <img id="logo" src="{{ asset($twentythree->upload_file_q23) }}" width="50" height="50;" />
                 
                 </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
    <!-- question 23 end -->
   
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
        
    
        <div id ="24_question_view">
          <table class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th rowspan="2" style="text-align: center; vertical-align: middle;">Title of Origin Guidelines</th>
                <th rowspan="2">Description of change/Status</th>
                <th colspan="6">VoT referred</th>

              </tr>
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>Boys</th>
                <th>Girls</th>
                <th>3rd G</th>
                <th>Total</th>
              </tr>
              @foreach($questionsTwentyFour as $twentyfour)
              <tr>
                <td>
                @if ($twentyfour->q24_title_origin_guidelines	 == 1)
                Referral desk established at women and
Child Repression Prevention Tribunals,
Anti-Trafficking Tribunals, and District tribunals
                @elseif ($twentyfour->q24_title_origin_guidelines	 == 2)
                National Referral Mechanism Guideline
                @elseif ($twentyfour->q24_title_origin_guidelines	 == 3)
                National Referral Mechanism SOP
                @elseif ($twentyfour->q24_title_origin_guidelines	 == 4)
                Digital Referral Mechanism of MoHA
                @endif
                  
                </td>
             
                <td>
                @if ($twentyfour->q24_description_change_status	 == 1)
            Enforced
                @elseif ($twentyfour->q24_description_change_status	 == 2)
                Updated and enforced
                @elseif ($twentyfour->q24_description_change_status	 == 3)
                Updated and enforced
                @elseif ($twentyfour->q24_description_change_status	 == 4)
                Increased efforts
                @elseif ($twentyfour->q24_description_change_status	 == 5)
                Moderate Effortt
                @elseif ($twentyfour->q24_description_change_status	 == 6)
                Less Effort
                @elseif ($twentyfour->q24_description_change_status	 == 7)
                Poor Enforcement
                @elseif ($twentyfour->q24_description_change_status	 == 8)
                Under Review

       @elseif ($twentyfour->q24_description_change_status	 == 9)
       Other (Specify)
       @else
                 {{$twentyfour->q24_others_specify}}
                  @endif
                </td>
                <td>
                {{$twentyfour->men_q24}}
                  
                </td>
                <td>  {{$twentyfour->women_q24}}</td>
                <td> {{$twentyfour->boy_q24}}</td>
                <td>{{$twentyfour->girl_q24}}</td>
                <td>{{$twentyfour->third_gender_q24}}</td>
                <td>{{$twentyfour->total_q24}}</td>

              </tr>
              @endforeach

             




            </thead>


          </table>
        </div>
      </div>
    </div>
  </div>


 
<div class="col-md-12 question25">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">25.Were there any new (or changes to preexisting) procedures or services available
        for victim care at your ministry/agency/organization?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
     

     
      <div id ="25_question_view" class="card-body row">
      <table id="addRowQ25" class="table table-bordered text-center">
        <thead class="">
          <tr>
            <th rowspan="3" style="text-align: center; margin: bottom 45%;">Protection Services</th>
            <th rowspan="3">Status</th>
            <th colspan="6">Current Coverage of VoTs</th>
          </tr>
          <tr>
            <th>Men</th>
            <th>Women</th>
            <th>3rd G</th>
            <th>Boy</th>
            <th>Girls</th>
            <th>Total</th>
          </tr>
</thead>
<tbody>
@foreach($questionsTwentyFive as $twentyfive)
          <tr>
            <td>
            @if ($twentyfive->protection_services_q25	 == 1)
            Economic Support/assest transfer
                @elseif ($twentyfive->protection_services_q25	 == 2)
                Micro Credit
                @elseif ($twentyfive->protection_services_q25	 == 3)
                Livelihood Training
                @elseif ($twentyfive->protection_services_q25	 == 4)
                Job placement
                @elseif ($twentyfive->protection_services_q25	 == 5)
                Health care
                @elseif ($twentyfive->protection_services_q25	 == 6)
                Psychosocial care
                @elseif ($twentyfive->protection_services_q25	 == 7)
                Shelter
                @elseif ($twentyfive->protection_services_q25	 == 8)
                Social safetynet
                @elseif ($twentyfive->protection_services_q25	 == 9)
                Information support
                @elseif ($twentyfive->protection_services_q25	 == 10)
                Mainstream education
                @elseif ($twentyfive->protection_services_q25	 == 11)
                Non Formal Education
                @elseif ($twentyfive->protection_services_q25	 == 12)
                Technical Education
                @elseif ($twentyfive->protection_services_q25	 == 13)
                Life skill
                @elseif ($twentyfive->protection_services_q25	 == 14)
                Family reunion
                @elseif ($twentyfive->protection_services_q25	 == 15)
                Referral
            @endif
              
            </td>
            <td>
              @if($twentyfive->	q25_status_id==1)
              New
              @elseif($twentyfive->	q25_status_id==2)
              Existing
              @endif
             
            </td>

            <td>
            {{$twentyfive->q25_current_coverage_vots_men}}
            </td> 
            <td>
            {{$twentyfive->q25_current_coverage_vots_women}}
            </td>
            <td>
            {{$twentyfive->q25_current_coverage_vots_third_gender}}
            </td> 
            <td>
            {{$twentyfive->q25_current_coverage_vots_boy}}
            <td>
            {{$twentyfive->q25_current_coverage_vots_girl}}
            </td> 
            <td>
            {{$twentyfive->q25_current_coverage_vots_total}}
            </td>


          </tr>
          @endforeach
  
</tbody>


      </table>
      </div>

    </div>
  </div>
</div>



       <!-- question no 26 Start  -->
       <div class="col-md-12 question26">
        <div class="card card-outline collapsed-card">
          <div class="card-header">
            <h3 class="card-title">26.What was the quality of care?</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
          
           
        
          <div id="26_question_view">
            <table id="addRowQ26" cellpadding=0 celspecing=0 width="100%" class="table table-bordered text-center" >
              <thead class="">
                <tr>
                  <th>Protection Services</th>
                  <th>Quality</th>
                  <th>Location</th>

                </tr>
              </thead>
                <tbody>
          @foreach($questionsTwentySix as $twentysix)
          <tr>
                <td>
                  @if ($twentysix->protection_services == 1)
                  Economic Support/assest transfer
                  @elseif ($twentysix->protection_services == 2)
                  Micro Credit
                  @elseif ($twentysix->protection_services == 3)
                  Livelihood Training
                  @elseif ($twentysix->protection_services == 4)
                  Job placement
                  @elseif ($twentysix->protection_services == 5)
                  Health care
                  @elseif ($twentysix->protection_services == 6)
                  Psychosocial care
                  @elseif ($twentysix->protection_services == 7)
                  Shelter
                  @elseif ($twentysix->protection_services == 8)
                  Social safetynet
                  @elseif ($twentysix->protection_services == 9)
                  Information support
                  @elseif ($twentysix->protection_services == 10)
                  Mainstream education
                  @elseif ($twentysix->protection_services == 11)
                  Non Formal Education
                  @elseif ($twentysix->protection_services == 12)
                  Technical Education
                  @elseif ($twentysix->protection_services == 13)
                  Life skill
                  @elseif ($twentysix->protection_services == 14)
                  Family reunion
                  @elseif ($twentysix->protection_services == 15)
                  Referral
                  @endif
                  </td>
                  <td>
                  @if($twentysix->	q26_quality_id==1)
                  Excellent
                  @elseif($twentysix->	q26_quality_id==2)
                  As per standard
                  @elseif($twentysix->	q26_quality_id==3)
                  below standard
                  @endif
                    
                  </td>
                  <td>
                  {{$twentysix->distric->name ?? ''}}
                 
                   
                  </td>

                </tr>
             
              
             

         @endforeach
         
</tbody>


            </table>
            </div>
          </div>
        </div>
      </div>
      <!-- question no 26 end  -->
    
    
 <!-- question no 27 Start  -->
 <div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">27.Where were child victims placed (e.g., in shelters, foster care, or child
        development centers), and what kind of specialized care did they receive? Please describe coverage?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <table class="table">
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
        @foreach($questionsTwentySeven as $twentyseven)
        <tr>
          <td>
          @if ($twentyseven->location_id_q27	 == 1)
          Barisal
                @elseif ($twentyseven->location_id_q27	 == 2)
                Chattogram
                @elseif ($twentyseven->location_id_q27	 == 3)
                Dhaka
                @elseif ($twentyseven->location_id_q27	 == 4)
                Khulna
                @elseif ($twentyseven->location_id_q27	 == 5)
                Mymensingh
                @elseif ($twentyseven->location_id_q27	 ==6)
                Rajshahi
                @elseif ($twentyseven->location_id_q27	 == 7)
                Rangpur
                @elseif ($twentyseven->location_id_q27	 == 8)
                Sylhet
                @elseif ($twentyseven->location_id_q27	 == 9)
                National
                @endif
           
          </td>
          <td>@if ($twentyseven->type_facility == 1)
          Shelter
                @elseif ($twentyseven->type_facility == 2)
                Development Center	
         
                @endif

            
          </td>
          <td >{{$twentyseven->number_facility}}  </td>
          <td >{{$twentyseven->number_children_boy_q27}}  </td>
          <td >{{$twentyseven->number_children_girl_q27}}  </td>
          <td >{{$twentyseven->number_children_total_q27}}  </td>
     
        </tr>
       

        @endforeach

      </table>
    </div>
  </div>
</div>
<!-- question no 27 end -->


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
              @foreach($questionsTwentyEight as $twentyeight)
              <tr>
<td>
              @if ($twentyeight->identification_type == 1)
Victims identified by government
                @elseif ($twentyeight->identification_type == 2)
                Total victims identified by the government	
                @elseif ($twentyeight->identification_type == 3)
                Men
                @elseif ($twentyeight->identification_type == 4)
                Women
                @elseif ($twentyeight->identification_type == 5)
                3rd G
                @elseif ($twentyeight->identification_type == 6)
                Boys (under 18)
                @elseif ($twentyeight->identification_type == 7)
                Girls (under 18)
                @elseif ($twentyeight->identification_type == 8)
                Persons with disabilities
                @elseif ($twentyeight->identification_type == 9)
                LGBTQI+ persons
                @elseif ($twentyeight->identification_type == 10)
                Foreign nationals (if available, from what countries?)
                @endif </td>
                <td>{{$twentyeight->identification_sex_trafficking}} </td>
                <td>{{$twentyeight->identification_forced_labor}} </td>
                <td>{{$twentyeight->identification_other_traficking}} </td>
                <td>{{$twentyeight->identification_unspecified_traficking}} </td>
                
              </tr>
         
             


<tr>
  <td>@if ($twentyeight->referral_type == 1)
Victims identified by government
                @elseif ($twentyeight->referral_type == 2)
                Total victims identified by the government	
                @elseif ($twentyeight->referral_type == 3)
                Men
                @elseif ($twentyeight->referral_type == 4)
                Women
                @elseif ($twentyeight->referral_type == 5)
                3rd G
                @elseif ($twentyeight->referral_type == 6)
                Boys (under 18)
                @elseif ($twentyeight->referral_type == 7)
                Girls (under 18)
                @elseif ($twentyeight->referral_type == 8)
                Persons with disabilities
                @elseif ($twentyeight->referral_type == 9)
                LGBTQI+ persons
                @elseif ($twentyeight->referral_type == 10)
                Foreign nationals (if available, from what countries?)
                @endif</td>
                <td>{{$twentyeight->referral_sex_trafficking}} </td>
                <td>{{$twentyeight->referral_forced_labor}} </td>
                <td>{{$twentyeight->referral_other_traficking}} </td>
                <td>{{$twentyeight->referral_unspecified_traficking}} </td>
                
              </tr>
         

<tr>
  <td>@if ($twentyeight->victims_type == 1)
Victims identified by government
                @elseif ($twentyeight->victims_type == 2)
                Total victims identified by the government	
                @elseif ($twentyeight->victims_type == 3)
                Men
                @elseif ($twentyeight->victims_type == 4)
                Women
                @elseif ($twentyeight->victims_type == 5)
                3rd G
                @elseif ($twentyeight->victims_type == 6)
                Boys (under 18)
                @elseif ($twentyeight->victims_type == 7)
                Girls (under 18)
                @elseif ($twentyeight->victims_type == 8)
                Persons with disabilities
                @elseif ($twentyeight->victims_type == 9)
                LGBTQI+ persons
                @elseif ($twentyeight->victims_type == 10)
                Foreign nationals (if available, from what countries?)
                @endif</td>
                <td>{{$twentyeight->victims_sex_trafficking}} </td>
                <td>{{$twentyeight->victims_forced_labor}} </td>
                <td>{{$twentyeight->victims_other_traficking}} </td>
                <td>{{$twentyeight->victims_unspecified_traficking}} </td>
                
              </tr>

                <tr>
                  <td>@if ($twentyeight->repatriated_type == 1)
victims repatriated by host government
                @elseif ($twentyeight->repatriated_type == 2)
                victims repatriated by foreign government
                @elseif ($twentyeight->repatriated_type == 3)
                victims repatriated by NGOs/INGOs/UN agencies
         
            
                @endif</td>
                <td>{{$twentyeight->repatriated_sex_trafficking}} </td>
                <td>{{$twentyeight->repatriated_forced_labor}} </td>
                <td>{{$twentyeight->repatriated_other_traficking}} </td>
                <td>{{$twentyeight->repatriated_unspecified_traficking}} </td>
                
              </tr>
         


         

              @endforeach

      
            </tbody>
          </table>
         
        </div>
      </div>
    </div>



   
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
            @foreach($questionsTwentyNine as $twentynine)
              <tr>
                <th>
                @if ($twentynine->type_protection_action	 == 1)
                Total Allocation under NPA for protection
                @elseif ($twentynine->type_protection_action	 == 2)
                Total allocation spent for different protection services
                @elseif ($twentynine->type_protection_action	 == 3)
                Assessment of Allocation
                @endif
                
                </th>
            
                <td>
                @if ($twentynine->total_allocation_under_npa_protection	 == 1)
                Excess
                @elseif ($twentynine->total_allocation_under_npa_protection	 == 2)
                Adequate
                @elseif ($twentynine->total_allocation_under_npa_protection	 == 3)
                Inadequate
                @elseif ($twentynine->total_allocation_under_npa_protection	 == 4)
                None
                @else
                 {{$twentynine->total_allocation_under_npa_protection}}
                  @endif
              
                  

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    


  
<style>
.otherSpecify{
  display:none;
}
</style>
<div class="col-md-12 question30">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">30.Were foreign victims legally entitled to the same benefits as host country
        nationals?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div id ="30_question_view" class="card-body row">
        <table id="addRowQ30" class="table table-bordered text-center">
          <thead class="">
            <tr>
              <th rowspan="2" style="text-align: center; margin: bottom 45%;">Protection Services</th>
              <th rowspan="2">Status of coverage</th>
              <th colspan="6">Current Coverage of Foreign VoTs</th>
            </tr>
            <tr>
              <th>Men</th>
              <th>Women</th>
              <th>3rd G</th>
              <th>Boy</th>
              <th>Girls</th>
              <th>Total</th>
            </tr>
</thead>
<tbody>
@foreach($questionsThirty as $thirty)

            <tr>
              <td>
              @if ($thirty->protection_services_q30 == 1)
                  Economic Support/assest transfer
                  @elseif ($thirty->protection_services_q30 == 2)
                  Micro Credit
                  @elseif ($thirty->protection_services_q30 == 3)
                  Livelihood Training
                  @elseif ($thirty->protection_services_q30 == 4)
                  Job placement
                  @elseif ($thirty->protection_services_q30 == 5)
                  Health care
                  @elseif ($thirty->protection_services_q30 == 6)
                  Psychosocial care
                  @elseif ($thirty->protection_services_q30 == 7)
                  Shelter
                  @elseif ($thirty->protection_services_q30 == 8)
                  Social safetynet
                  @elseif ($thirty->protection_services_q30 == 9)
                  Information support
                  @elseif ($thirty->protection_services_q30 == 10)
                  Mainstream education
                  @elseif ($thirty->protection_services_q30 == 11)
                  Non Formal Education
                  @elseif ($thirty->protection_services_q30 == 12)
                  Technical Education
                  @elseif ($thirty->protection_services_q30 == 13)
                  Life skill
                  @elseif ($thirty->protection_services_q30 == 14)
                  Family reunion
                  @elseif ($thirty->protection_services_q30 == 15)
                  Referral
                  @endif
                
              </td>
              <td>
              @if($thirty->	status_coverage_q30==1)
              Excess
              @elseif($thirty->	status_coverage_q30==2)
              Adequate
              @elseif($thirty->	status_coverage_q30==3)
              Inadequate
              @elseif($thirty->	status_coverage_q30==4)
              None
              @elseif($thirty->	status_coverage_q30==5)
              {{$thirty->q30_other_specify}}
              @endif
</td>
<td>
            {{$thirty->current_coverage_foreign_vots_men}}
            </td> 
            <td>
            {{$thirty->current_coverage_foreign_vots_women}}
            </td>
            <td>
            {{$thirty->current_coverage_foreign_vots_third_gender}}
            </td> 
            <td>
            {{$thirty->current_coverage_foreign_vots_boy}}
            <td>
            {{$thirty->current_coverage_foreign_vots_girl}}
            </td> 
            <td>
            {{$thirty->current_coverage_foreign_vots_total}}
            </td>

            </tr>
  @endforeach
          </tbody>


        </table>
      </div>
    </div>
  </div>
</div>




<style>
  .otherSpecify{
    display:none;
  }
</style>
<div class="col-md-12 question31">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">31.Were foreign victims legally entitled to the same benefits as host country
        nationals?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
  
    <div class="card-body">
      
  <div id="31_question_view">
    <div class="card-body">
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
                  <th>3rd G</th>
                  <th>Boy</th>
                  <th>Girls</th>
                  <th>Total</th>
                </tr>
            </thead>
            <tbody>
          @foreach($questionsThiryOne as $thirtyone)

                <tr>

                  <td colspan="10">
                    @if($thirtyone->	q31_type==1)
                    Internal Trafficking
                    @elseif($thirtyone->	q31_type==2)
                    International Trafficking
                    @endif  
                  </td>
                 


                </tr>

                <tr>
                  <td>
                  @if ($thirtyone->q31_traffick_type_of_hotlines == 1)
                  Government run/ free
                  @elseif ($thirtyone->q31_traffick_type_of_hotlines == 2)
                  Government supported
                  @elseif ($thirtyone->q31_traffick_type_of_hotlines == 3)
                  NGO RUN
                  @elseif ($thirtyone->q31_traffick_type_of_hotlines == 4)
                  {{$thirtyone->q31_traffick_others_specify}}                  
                  @endif
                    
                  </td>

                    <td>
                    @if ($thirtyone->q31_implementer_traffick == 1)
                    MoWCA
                  @elseif ($thirtyone->q31_implementer_traffick == 2)
                  MoHA
                  @elseif ($thirtyone->q31_implementer_traffick == 3)
                  MoSW
                  @elseif ($thirtyone->q31_implementer_traffick == 4)
                  MoEWOE
                  @elseif ($thirtyone->q31_implementer_traffick == 5)
                  MoLJPA
                  @elseif ($thirtyone->q31_implementer_traffick == 6)
                  INCIDIN Bangladesh
                  @elseif ($thirtyone->q31_implementer_traffick == 7)
                  Ask
                  @elseif ($thirtyone->q31_implementer_traffick == 8)
                  BNWLA
                  @elseif ($thirtyone->q31_implementer_traffick == 9)
                  DAM
                  @endif
                     
                  </td>


                  <td>
            {{$thirtyone->q31_traffick_hotline_number}}
            </td> 
                  <td>
            {{$thirtyone->q31_traffick_men}}
            </td> 
            <td>
            {{$thirtyone->q31_traffick_women}}
            </td>
            <td>
            {{$thirtyone->q31_traffick_third_gender}}
            </td> 
            <td>
            {{$thirtyone->q31_traffick_boys}}
            <td>
            {{$thirtyone->q31_traffick_girls}}
            </td> 
            <td>
            {{$thirtyone->q31_traffick_total}}
            </td>
                
            </tr>
          @endforeach
              </tbody>
          </table>
    </div>
        
    
          
        


  
          
    
     
</div>
  </div>
</div>





<div class="col-md-12 question32">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">32.Did VoT participated in investigation and prosecution?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
     

    
      <div id ="32_question_view">
      <table class="table table-bordered text-center">
        <thead class="">
          <tr>
            <th colspan="6" style="text-align: center; margin: bottom 45%;">VoT participating in
              investigation/prosecution </th>
          </tr>
          <!-- <tr>
            <td colspan="6" text-align:"center">Internal Trafficking</td>
            <input type="hidden" name="q32_type[]" value="1">
          </tr> -->
          <tr>
            <th>Men</th>
            <th>Women</th>
            <th>3rd G</th>
            <th>Boy</th>
            <th>girls</th>
            <th>Total</th>
          </tr>
  </thead>
  <tbody>
  @foreach($questionsThirtyTwo as $thirtytwo)

<tr>

  <td colspan="10">
    @if($thirtytwo->	q32_type==1)
    Internal Trafficking
    @elseif($thirtytwo->	q32_type==2)
    International Trafficking
    @endif  
  </td>
 


</tr>

<tr>

 
  <td>
{{$thirtytwo->q32_internal_trafficking_men}}
</td> 
<td>
{{$thirtytwo->q32_trafficking_women}}
</td>
<td>
{{$thirtytwo->q32_trafficking_third_gender}}
</td> 
<td>
{{$thirtytwo->q32_trafficking_boy}}
<td>
{{$thirtytwo->q32_trafficking_girl}}
</td> 
<td>
{{$thirtytwo->q32_trafficking_total}}
</td>

</tr>
@endforeach

        </tbody>
      </table>
      </div>

    </div>
  </div>
</div>


    <div class="col-md-12 question33">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">33.Were participating victims provided any forms of witness protection? If “Yes’,
            how many?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <div id="33_question_view">
          <table class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th colspan="6" style="text-align: center; margin: bottom 45%;">VoT participating in investigation
                  Provided with Witness Protection </th>
              </tr>
              <!-- <tr>
                <td colspan="6" text-align:"center">Internal Trafficking</td>
                <input type="hidden" name="q33_type[]" value="1">
              </tr> -->
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>3rd G</th>
                <th>Boy</th>
                <th>Girls</th>
                <th>Total</th>
              </tr>
      </thead>
      <tbody>
          @foreach($questionsThirtyThree as $thirtythree)

          <tr>

            <td colspan="10">
              @if($thirtythree->	q33_type==1)
              Internal Trafficking
              @elseif($thirtythree->	q33_type==2)
              International Trafficking
              @endif  
            </td>
          


          </tr>

          <tr>

          
            <td>
          {{$thirtythree->q33_trafficking_men}}
          </td> 
          <td>
          {{$thirtythree->q33_trafficking_women}}
          </td>
          <td>
          {{$thirtythree->q33_trafficking_third_gender}}
          </td> 
          <td>
          {{$thirtythree->q33_trafficking_boy}}
          <td>
          {{$thirtythree->q33_trafficking_girl}}
          </td> 
          <td>
          {{$thirtythree->q33_trafficking_total}}
          </td>

          </tr>
          @endforeach
      </tbody>

             
          </table>
        </div>
        </div>
      </div>
    </div> 
  
  
    
<style>
  .otherSpecify{
    display:none
  }
</style>
<div class="col-md-12 question34">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">34.Did your ministry/agency/organization take any steps to avoid
        re-traumatization
        of victims in
        investigation and prosecution? Please describe.</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
        <div id="34_question_view" class="card-body row">
      <table id="addRowQ34" class="table table-bordered text-center">
        <thead class="">
          <tr>
            <th rowspan="2" style="text-align: center; vertical-align: middle;">Location
              </th>
            <th rowspan="2" style="vertical-align: middle;">Types of Assistance</th>
            <th colspan="6">Coverage</th>
          </tr>
          <tr>
            <th>Men</th>
            <th>Women</th>
            <th>3rd G</th>
            <th>Boys</th>
            <th>Girls</th>
            <th>Total</th>
          </tr>
</thead>
<tbody>
@foreach($questionsThirtyFour as $thirtyfour)

          <tr>
            <td> 
            @if ($thirtyfour->	location_id_q34 == 1)
            Barisal
            @elseif ($thirtyfour->	location_id_q34 == 2)
            Chattogram
            @elseif ($thirtyfour->	location_id_q34 == 3)
            Dhaka
            @elseif ($thirtyfour->	location_id_q34 == 4)
            Khulna
            @elseif ($thirtyfour->	location_id_q34 == 5)
            Mymensingh
            @elseif ($thirtyfour->	location_id_q34 == 6)
            Rajshahi
            @elseif ($thirtyfour->	location_id_q34 == 7)
            Rangpur
            @elseif ($thirtyfour->	location_id_q34 == 8)
            Sylhet
            @elseif ($thirtyfour->	location_id_q34 == 9)
            National
            @endif
            </td>
            <td>
            @if ($thirtyfour->types_assistance_q34 == 1)
            Psychosocial Counselling
            @elseif ($thirtyfour->types_assistance_q34 == 2)
            Shelter
            @elseif ($thirtyfour->types_assistance_q34 == 3)
            Assistance to persons with disability
            @elseif ($thirtyfour->types_assistance_q34 == 4)
            Testimony via video or written statements
            @elseif ($thirtyfour->types_assistance_q34 == 5)
            {{$thirtyfour->q34_other_specify}}            
            @endif
            
            </td>

             
            <td>
            {{$thirtyfour->q34_coverage_men}}
            </td> 
            <td>
            {{$thirtyfour->q34_coverage_women}}
            </td>
            <td>
            {{$thirtyfour->q34_coverage_third_gender}}
            </td> 
            <td>
            {{$thirtyfour->q34_coverage_boy}}
            <td>
            {{$thirtyfour->q34_coverage_girl}}
            </td> 
            <td>
            {{$thirtyfour->q34_coverage_total}}
            </td>
          
          </tr>
         @endforeach
        </tbody>
      </table>
        </div>
    </div>
  </div>
</div>



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
      <div id="35_question_view">
          <h3>Reform of Existing Law</h3>
          <table class="table table-white table-bordered">
            <thead>
              <tr>
                <th scope="col">Title of the law</th>
                <th scope="col">Contents of Change/Status</th>
                <th scope="col">Attach/Upload</th>
              </tr>
            </thead>
            <tbody>
          @foreach($questionsThirtyFive as $thirtyfive)
              <tr>
                <td>
                @if($thirtyfive->	reform_existing_law_q35_one==1)
                PSHT 2012
                @elseif($thirtyfive->	reform_existing_law_q35_one==2)
                Rule of PSHTA (2017)
                @elseif($thirtyfive->	reform_existing_law_q35_one==3)
                OEMA 2013
                @elseif($thirtyfive->	reform_existing_law_q35_one==4)
                Children's Act
                @elseif($thirtyfive->	reform_existing_law_q35_one==5)
                Labour Act
                @elseif($thirtyfive->	reform_existing_law_q35_one==6)
                MLA in Criminal Matter 2012
                @elseif($thirtyfive->	reform_existing_law_q35_one==7)
                Human Organ Transfer Rule 1999
                @elseif($thirtyfive->	reform_existing_law_q35_one==8)
                Passport Act 1920
                @elseif($thirtyfive->	reform_existing_law_q35_one==9)
                Bangladesh Passport Order 1973
               
                @else
                {{$thirtyfive->	reform_existing_law_q35_one}}
              @endif 
                

                </td>

                <td> 
                @if($thirtyfive->	contents_status_id_q35_one==1)
                Revised
                @elseif($thirtyfive->	contents_status_id_q35_one==2)
                Abolished
                @endif 
                  
               

                </td>
                <td>
                <img id="logo" src="{{ asset($thirtyfive->attach_upload_one) }}" width="50" height="50;" />

                </td>
                

              
              </tr>
              @endforeach
            </tbody>
          </table>

          <h3>New Law</h3>
          <table class="table table-white table-bordered">
            <thead>
              <tr>
                <th scope="col">Title of the New law</th>
                <th scope="col">Status</th>
                <th scope="col">Attach/Upload</th>
              </tr>
            </thead>
            <tbody>
            @foreach($questionsThirtyFive as $thirtyfive)

            <tr>
            <td>{{$thirtyfive->q35_title}}</td>
              <td>
                @if($thirtyfive->	status_id_q35_two==1)
                Planned
                @elseif($thirtyfive->	status_id_q35_two==2)
                On process of need assessment
                @elseif($thirtyfive->	status_id_q35_two==3)
                Waiting to be enacted
                @elseif($thirtyfive->	status_id_q35_two==4)
                Enacted
                @elseif($thirtyfive->	status_id_q35_two==5)
                Enforced
                @endif  
              </td>
              <td>
                  <img id="logo" src="{{ asset($thirtyfive->attach_upload_q35_two) }}" width="50" height="50;" />

                </td>


            </tr>
              
            @endforeach
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div> 
    

  
<!-- question no 36 Start -->
<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">36.Please list the number of individuals or cases, investigation, prosecution,
        or conviction for sex trafficking, labour trafficking/forced labour and other forms of trafficking
        (e.g.
        organ trafficking). </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <h3>Investigations</h3>
      <table cellpadding=0 celspecing=0 width="100%" class="table table-white table-bordered">
        <thead>

          <tr align="center">
            <th>Type of TIP Cases investigated</th>
            <th>Category of coverage</th>
            <th>Men</th>
            <th>Women</th>
            <th>3rd G</th>
            <th>Boys</th>
            <th>Girls</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
        @foreach($questionsThirtySix as $thirtysix)
        <tr>
        <!-- <td rowspan=3>Total individuals convicted</td> -->
        <td>
        @if ($thirtysix->q36_type_cases_investigated == 1)
        Individuals/cases (new this reporting period)
        @elseif ($thirtysix->q36_type_cases_investigated == 2)
        Individuals/cases investigated (ongoing from the previous reporting period)
        @elseif ($thirtysix->q36_type_cases_investigated == 3)
        Individuals/cases investigated (new this reporting period)
        @elseif ($thirtysix->q36_type_cases_investigated == 4)
        Individuals/cases investigated (ongoing from the previous reporting period)
        @elseif ($thirtysix->q36_type_cases_investigated == 5)
        Individuals/cases investigated (new this reporting period)
        @elseif ($thirtysix->q36_type_cases_investigated == 6)
        Individuals/cases investigated (ongoing from the previous reporting period)           
        @endif
        </td>
        <td>
        @if ($thirtysix->q36_category_coverage == 1)
        Number of Victims of Sex Trafficking Cases
        @elseif ($thirtysix->q36_category_coverage == 2)
        Number of Victims of Labour Trafficking Cases
        @elseif ($thirtysix->q36_category_coverage == 3)
        Number of Victims of Other/unspecified Trafficking Cases
                          
        @endif
        </td>
          <!-- <td>{{$thirtysix->q40_category_coverage}}</td> -->
          <td>{{$thirtysix->q36_new_report_sex_trafficking_cases_men}}</td>
          <td>{{$thirtysix->q36_new_report_sex_trafficking_cases_women}}</td>
          <td>{{$thirtysix->q36_new_report_sex_trafficking_cases_third_gender}}</td>
          <td>{{$thirtysix->q36_new_report_sex_trafficking_cases_boy}}</td>
          <td>{{$thirtysix->q36_new_report_sex_trafficking_cases_girl}}</td>
          <td>{{$thirtysix->q36_new_report_sex_trafficking_cases_total}}</td>
          
        </tr>
        @endforeach
        </tbody>
       



      </table>

    </div>
  </div>
</div>
<!-- question no 36 End -->

            <!-- question no 37 Start -->
            <style>
              
            </style>  
            <div class="col-md-12">
                <div class="card card-outline collapsed-card">
                  <div class="card-header">
                    <h3 class="card-title">37. Please list the number of individuals or cases prosecution for sex
                      trafficking, labour trafficking/forced labour and other forms of trafficking (e.g. organ
                      trafficking). </h3>
  
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3>Prosecution</h3>
                    <table cellpadding=0 celspecing=0 width="100%">
                      <thead>

                        <tr>
                          <td colspan="2"> Type of TIP Cases investigated
                          </td>
                          <td class="col-md-2">M</td>
                          <td class="col-md-2">W</td>
                          <td class="col-md-2">3rd G</td>
                          <td class="col-md-2">B</td>
                          <td class="col-md-2">G</td>
                          <td class="col-md-2">T</td>
    
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($questionsThirtySeven as $thirtyseven)
                        <tr>
                       
                        <td>
                        @if ($thirtyseven->q37_type_cases_investigated == 1)
                          Number of cases prosecuted
                        @elseif ($thirtyseven->q37_type_cases_investigated == 2)
                          Number of cases prosecuted (ongoing from the previous reporting period)
                        @elseif ($thirtyseven->q37_type_cases_investigated == 3)
                          Number of cases prosecuted (new this reporting period)
                        @elseif ($thirtyseven->q37_type_cases_investigated == 4)
                          Number of individuals prosecuted
                        @elseif ($thirtyseven->q37_type_cases_investigated == 5)
                          Number of individuals i prosecuted (ongoing from the previous reporting period)
                        @elseif ($thirtyseven->q37_type_cases_investigated == 6)
                          Number of individuals prosecuted (new this reporting period)  
                        @elseif ($thirtyseven->q37_type_cases_investigated == 7)
                          Number of individuals cases under PSHT Act 2012
                        @elseif ($thirtyseven->q37_type_cases_investigated == 8)
                          Number of cases prosecuted under non-trafficking laws (OEMA/PC)   
                        @elseif ($thirtyseven->q37_type_cases_investigated == 9)
                          Number of individuals prosecuted under PSHT Act 2012
                        @elseif ($thirtyseven->q37_type_cases_investigated == 10)
                          Number of individuals prosecuted under non-trafficking laws (OEMA/PC)
                        @endif
                        </td>
                        <td>
                        @if ($thirtyseven->q37_category_coverage == 1)
                        Number of Victims of Sex Trafficking Cases
                        @elseif ($thirtyseven->q37_category_coverage == 2)
                        Number of Victims of Labour Trafficking Cases
                        @elseif ($thirtyseven->q37_category_coverage == 3)
                        Number of Victims of Other/unspecified Trafficking Cases
                                          
                        @endif
                        </td>
                          <!-- <td>{{$thirtyseven->q40_category_coverage}}</td> -->
                          <td>{{$thirtyseven->q37_new_report_sex_trafficking_cases_men}}</td>
                          <td>{{$thirtyseven->q37_new_report_sex_trafficking_cases_women}}</td>
                          <td>{{$thirtyseven->q37_new_report_sex_trafficking_cases_third_gender}}</td>
                          <td>{{$thirtyseven->q37_new_report_sex_trafficking_cases_boy}}</td>
                          <td>{{$thirtyseven->q37_new_report_sex_trafficking_cases_girl}}</td>
                          <td>{{$thirtyseven->q37_new_report_sex_trafficking_cases_total}}</td>
                          
                        </tr>
                        @endforeach
                      </tbody>
  
          </table>

        </div>
      </div>
    </div>
    <!-- question no 37 End -->

   

<div class="col-md-12 question38">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">38.Did the government cooperate with foreign counterparts on any law enforcement
        activities?</h3>
       
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>

     


    </div>
   
    <div class="card-body">
      <div id ="38_question_view" class="card-body row">
      <table id="addRowQ38" class="table table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">Country</th>
            <th scope="col">Sex Trafficking</th>
            <th scope="col">Labour Trafficking</th>
            <th scope="col">Other/Unspecific Trafficking</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
            @foreach($questionsThirtyEight as $thirtyeight)

            <tr>
            <td>
            {{$thirtyeight->country->name ?? ''}}
            

            </td>

            <td>
            {{$thirtyeight->sex_trafficking}}
            </td> 
            <td>
            {{$thirtyeight->labour_trafficking}}
            </td>
            <td>
            {{$thirtyeight->other_unspecific_trafficking}}
            </td> 
            <td>
            {{$thirtyeight->total}}
            </td>  
          
          </tr>
          @endforeach
        </tbody>
      </table>
      </div>
    </div>
  </div>
</div> 



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
          <table class="table table-white table-bordered">
            <thead>
              <tr>
                <th scope="col">Type of Cases reaching verdict </th>
                <th scope="col">Number of Cases</th>
              </tr>
            </thead>
            <tbody>
          @foreach($questionsThirtyNine as $thirtynine)
          <tr>

          
          <td>
          @if($thirtynine->	type_cases_reaching_verdict==1)
          Total number of cases of Internal Trafficking having conviction
          @elseif($thirtynine->	type_cases_reaching_verdict==2)
          Total number of cases of International Trafficking having conviction
          @elseif($thirtynine->	type_cases_reaching_verdict==3)
          Total number of cases of Internal Trafficking having acquittal
          @elseif($thirtynine->	type_cases_reaching_verdict==4)
          Total number of cases of International Trafficking having acquittal
          @elseif($thirtynine->	type_cases_reaching_verdict==5)
          Among the total number of person convicted- the number of foreign citizen
          @endif  
          </td>
          <td>{{$thirtynine->number_of_cases}}</td>
          </tr>
          @endforeach
              
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
            <thead>
              <tr>
                <td colspan="2"> Conviction Status
                </td>
                <td>M</td>
                <td>W</td>
                <td>3rd G</td>
                <td>B</td>
                <td>G</td>
                <!-- <td>T</td> -->
                <td>Total</td>
              </tr>
            </thead>
            <tbody>
        @foreach($questionsFourty as $forty)
        <tr>
        <!-- <td rowspan=3>Total individuals convicted</td> -->
        <td>
        @if ($forty->q40_type_cases_investigated == 1)
        Total individuals convicted
        @elseif ($forty->q40_type_cases_investigated == 2)
        Individuals convicted under PSHT Act 2012
        @elseif ($forty->q40_type_cases_investigated == 3)
        individuals convicted under non-trafficking laws (OEMA/PC)
        @elseif ($forty->q40_type_cases_investigated == 4)
        Convictions newly upheld on appeal
        @elseif ($forty->q40_type_cases_investigated == 5)
        Convictions newly overturned on appeal
        @elseif ($forty->q40_type_cases_investigated == 6)
        Individuals acquitted             
        @endif
        </td>
        <td>
        @if ($forty->q40_category_coverage == 1)
        Number of Victims of Sex Trafficking Cases
        @elseif ($forty->q40_category_coverage == 2)
        Number of Victims of Labour Trafficking Cases
        @elseif ($forty->q40_category_coverage == 3)
        Number of Victims of Other/unspecified Trafficking Cases
                          
        @endif
        </td>
          <!-- <td>{{$forty->q40_category_coverage}}</td> -->
          <td>{{$forty->q40_new_report_sex_trafficking_cases_men}}</td>
          <td>{{$forty->q40_new_report_sex_trafficking_cases_women}}</td>
          <td>{{$forty->q40_new_report_sex_trafficking_cases_third_gender}}</td>
          <td>{{$forty->q40_new_report_sex_trafficking_cases_boy}}</td>
          <td>{{$forty->q40_new_report_sex_trafficking_cases_girl}}</td>
          <td>{{$forty->q40_new_report_sex_trafficking_cases_total}}</td>
          
        </tr>
        @endforeach
            </tbody>
            

          </table>
        </div>
      </div>
    </div> 
  
  
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">41.Please provide details on Court Proceedings by District:</h3>

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
            </tr>
        </thead>
      <tbody>
      @foreach($questionsFortyOne as $fortyone)

            <tr>
              
            <td>
            {{$fortyone->distric->name ?? ''}}
            

            </td>

            <td>
            {{$fortyone->previous_cases}}
            </td> 
            <td>
            {{$fortyone->received_cases}}
            </td>
            <td>
            {{$fortyone->total_cases}}
            </td> 
            <td>
            {{$fortyone->disposed_cases}}
            </td>  
            <td>
            {{$fortyone->transferred_cases}}
            </td>  
            <td>
            {{$fortyone->pending_cases}}
            </td>  
            <td>
            {{$fortyone->cases_more_than_five_year_old}}
            </td>  
            </tr>
          


@endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
 

      
    
<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">42.Conviction of Internal Trafficking by Division</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <h2>Conviction of Internal Trafficking by Division</h2>
      <!-- <h3>Total number of persons convicted of trafficking for Sexual exploitation</h3> -->
      <input type="hidden" name="q42_type[]" value="1">
      <table id="addRowQ42Sexual" class="table table-bordered text-center">
        <thead>
          <tr>
            <th>Division</th>
            <th>Male</th>
            <th>Female</th>
            <th>3rd G</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
        @foreach($questionsFortyTwo as $fortytwo)

              <tr>

                <td colspan="10">
                  @if($fortytwo->	q42_type==1)
                  Total number of persons convicted of trafficking for Sexual exploitation
                  @elseif($fortytwo->	q42_type==2)
                  Total number of persons convicted for labour Trafficking
                  @elseif($fortytwo->	q42_type==3)
                  Total number of persons convicted of trafficking for International Trafficking
                  @endif  
                </td>
              


              </tr>

              <tr>
              <td>
                  @if ($fortytwo->q42_sexual_exploitation_division_id == 1)
                  Barisal
                @elseif ($fortytwo->q42_sexual_exploitation_division_id == 2)
                Chattogram
                @elseif ($fortytwo->q42_sexual_exploitation_division_id == 3)
                Dhaka
                @elseif ($fortytwo->q42_sexual_exploitation_division_id == 4)
                Khulna
                @elseif ($fortytwo->q42_sexual_exploitation_division_id == 5)
                Mymensingh
                @elseif ($fortytwo->q42_sexual_exploitation_division_id == 6)
                Rajshahi
                @elseif ($fortytwo->q42_sexual_exploitation_division_id == 7)
                Sylhet
                @endif
                  
                </td>
               
                <td>
              {{$fortytwo->q42_sexual_men}}
              </td> 
              <td>
              {{$fortytwo->q42_sexual_women}}
              </td>
              <td>
              {{$fortytwo->q42_sexual_third_gender}}
              </td> 
              <td>
              {{$fortytwo->q42_sexual_total}}
              </td>

              </tr>
              @endforeach
         

        
        </tbody>
      </table>
</div>
      
     
    </div>
  </div>
</div>



    <!-- qestion no 42 end -->
    <div class="col-md-12 question43">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">43.Were there any new bilateral, multilateral, or regional enforcement coordination
            arrangements/ treaties/MoU/MLA with foreign counterparts?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
  
        <div class="card-body">

          <div id="43_question_view" class="card-body row">
          <table id="addRowQ43" class="table table-bordered text-center">
            <thead>
              <tr>
                <th scope="col">Country</th>
                <th scope="col">Nature of Arrangement</th>
                <th scope="col">Focus</th>
                <th scope="col">Status</th>
                <th scope="col">Please upload a summary note or any other relevant document</th>
              </tr>
            </thead>
            <tbody>
        @foreach($questionsFortyThree as $fortythree)

              <tr>
                <td>
                {{$fortythree->country->name ?? ''}}
            
                 
                </td>
                <td>
                  @if($fortythree->	q43_nature_arrangement_id==1)
                  MoU
                  @elseif($fortythree->	q43_nature_arrangement_id==2)
                  Treaties
                  @elseif($fortythree->	q43_nature_arrangement_id==3)
                  MAL
                  @elseif($fortythree->	q43_nature_arrangement_id==4)
                  UN Convention
                  @elseif($fortythree->	q43_nature_arrangement_id==5)
                  Regional Cooperation Initiatiev
                  @elseif($fortythree->	q43_nature_arrangement_id==6)
                  Bilateral Cooperation Initiative
                  @endif  
                 
                </td>
                <td>
                @if($fortythree->	q43_focus_id==1)
                Prevent
                @elseif($fortythree->	q43_focus_id==2)
                Prosecution
                @elseif($fortythree->	q43_focus_id==3)
                Repatriation
                @elseif($fortythree->	q43_focus_id==4)
                Extradition
                @elseif($fortythree->	q43_focus_id==5)
                Investigation
                @elseif($fortythree->	q43_focus_id==6)
                Support to VoT
                @elseif($fortythree->	q43_focus_id==7)
                Monitoring
                @elseif($fortythree->	q43_focus_id==8)
                Legal Aid
                @elseif($fortythree->	q43_focus_id==9)
                Labour Market Cooperation
                @endif  
               
                </td>
                <td>
                @if($fortythree->	q43_status_id==1)
                Planned
                @elseif($fortythree->	q43_status_id==2)
                Agreed
                @elseif($fortythree->	q43_status_id==3)
                Signed
                @elseif($fortythree->	q43_status_id==4)
                In Placed
                @elseif($fortythree->	q43_status_id==5)
                Under study
                @elseif($fortythree->	q43_status_id==6)
                On process
                @endif
                  
                </td>
                <td>
                <img id="logo" src="{{ asset($fortythree->upload_document) }}" width="50" height="50;" />

                  
           </td>

              </tr>

           
@endforeach
            </tbody>
          </table>
          </div>
        </div>
        </div>
      </div>
    </div>

   
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
        <div id="fourty_four_question_view" class="card-body row">
          <table id="addRowQ44" class="table table-bordered text-center">
            <thead>
              <tr>
                <th rowspan="2" scope="col">Ministry/Department</th>
                <th colspan="4">Number of Official Accused</th>

              </tr>
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>3rd G</th>
                <th>Total</th>
                </tr>
            </thead>
        <tbody>
        @foreach($questionsFortyFour as $fortyfour)

              
              <tr>
              <td>
              {{$fortyfour->ministry_department}}
              </td> 
              <td>
              {{$fortyfour->number_official_accused_men}}
              </td>
              <td>
              {{$fortyfour->number_official_accused_women}}
              </td> 
              <td>
              {{$fortyfour->number_official_accused_third_gender}}
              </td>
              <td>
              {{$fortyfour->number_official_accused_total}}
              </td>
              
              </tr>
             
              @endforeach
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
 

    <div class="col-md-12 question45" >
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
          
        
       
       
          <table id="45_question_view" class="table table-white table-bordered">
            <thead>
              <tr>
                <th scope="col">Ministry/Department</th>
                <th scope="col">Measures Taken</th>
              </tr>
            </thead>
            <tbody>
              @foreach($questionsFortyFive as $fortyfive)

              <tr>
              <td>{{$fortyfive->q45_ministry_department}}</td>
              <td>{{$fortyfive->q45_measures_taken}}</td>

             
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>


 


<div class="col-md-12 question46">
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

     <div id="46_question_view" class="card-body row">
      <table id="addRowQ46" class="table table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">Name of the Unit/Court</th>
            <th scope="col">Focus/Jurisdiction</th>
            <th scope="col">Location</th>
          </tr>
        </thead>
        <tbody>
        @foreach($questionsFortySix as $fortysix)

          <tr>
          <td>
              {{$fortysix->q46_unit_court}}
              </td> 
              <td>
              {{$fortysix->q46_focus_jurisdiction}}
              </td>
              <td>
              {{$fortysix->distric->name ?? ''}}
            
              </td> 
          </tr>

@endforeach
        </tbody>
      </table>
     </div>
    </div>
  </div>
</div>



<div class="col-md-12 question47">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">47.Did these units/courts have adequate resources? Please describe any update?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      
     
    
      <div id="47_question_view" class="card-body row">
      <table id="addRowQ47" class="table table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">Name of the Unit/Court</th>
            <th scope="col">Focus/Jurisdiction</th>
            <th scope="col">Location</th>
          </tr>
        </thead>
        <tbody>
        @foreach($questionsFortySeven as $fortyseven)

        <tr>
        <td>
            {{$fortyseven->q47_name_unit}}
            </td> 
            <td>
            {{$fortyseven->q47_focus_jurisdiction}}
            </td>
            <td>
            {{$fortyseven->distric->name ?? ''}}
    
            </td> 
        </tr>

      @endforeach
         

        

        </tbody>
      </table>
      </div>
    </div>
  </div>
</div>



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
    <div if="q48_question_view" class="card-body row">



      <table id="addRowQ48" class="table table-bordered text-center">
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
</thead>
<tbody>
@foreach($questionsFortyEight as $fortyeight)

          <tr>
            <td>
            @if($fortyeight->	category_trainee==1)
            Police
            @elseif($fortyeight->	category_trainee==2)
            CID
            @elseif($fortyeight->	category_trainee==3)
            RAB
            @elseif($fortyeight->	category_trainee==4)
            Ansar
            @elseif($fortyeight->	category_trainee==5)
            VDP
            @elseif($fortyeight->	category_trainee==6)
            Coast Guard
            @elseif($fortyeight->	category_trainee==7)
            BGB
            @elseif($fortyeight->	category_trainee==8)
            Immigration
            @endif  
           
            </td>
            <td>
            @if($fortyeight->	category_trainee==1)
            PSHT
            @elseif($fortyeight->	category_trainee==2)
            PSHT Act 2012
            @elseif($fortyeight->	category_trainee==3)
            Rule of PSHT Act
            @elseif($fortyeight->	category_trainee==4)
            TIP Investigation
            @elseif($fortyeight->	category_trainee==5)
            Victim Withess Protection
            @elseif($fortyeight->	category_trainee==6)
            TIP and MLA
            @elseif($fortyeight->	category_trainee==7)
            Role of Police
            @elseif($fortyeight->	category_trainee==8)
            NPA
            @elseif($fortyeight->	category_trainee==9)
            NRM
            @elseif($fortyeight->	category_trainee==10)
            VoT identification Guideline
            @endif  
              
            </td>
            <td>
            {{$fortyeight->number_of_training}}
            </td> 
            <td>
            {{$fortyeight->q48_location_id}}
            </td>
            <td>
            {{$fortyeight->development_partner}}
            </td>
            <td>
            {{$fortyeight->q48_coverage_men}}
            </td>
            <td>
            {{$fortyeight->q48_coverage_women}}
            </td>
            <td>
            {{$fortyeight->q48_coverage_third_gender}}
            </td>
            <td>
            {{$fortyeight->q48_coverage_total}}
            </td>
            
          </tr>
        @endforeach
      </tbody>
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
    <div id="q49_question_view" class="card-body row">



      <table id="addRowQ49" class="table table-bordered text-center">
        <thead class="">
          <tr>
            <th rowspan="2" style="text-align: center; margin: bottom 45%;">Category of Trainee </th>
            <th rowspan="2">Training Contents </th>
            <th rowspan="2">Number of Training</th>
            <th rowspan="2">Location</th>
            <th rowspan="2">Development Partner</th>
            <th colspan="4">Coverage</th>
          </tr>
          <tr>
            <th>Men</th>
            <th>Women</th>
            <th>3rd G</th>
            <th>Total</th>
          </tr>
          <thead>
        <tbody>
    @foreach($questionsFortyNine as $fortynine)
      <tr>
        <td>
        @if($fortynine->	q49_category_trainee==1)
        Judges of Separate Special TIP Tribunal
        @elseif($fortynine->	q49_category_trainee==2)
        Judges of Special TIP Tribunal
        @elseif($fortynine->	q49_category_trainee==3)
        PP of Separate Special TIP Tribunal
        @elseif($fortynine->	q49_category_trainee==4)
        PP of Special TIP Tribunal
        @elseif($fortynine->	q49_category_trainee==5)
        Judges
        @elseif($fortynine->	q49_category_trainee==6)
        PP
        @elseif($fortynine->	q49_category_trainee==7)
        Lawyers
        @elseif($fortynine->	q49_category_trainee==8)
        Court Officials
        @endif  
       
        </td>
        <td>
        @if($fortynine->	q49_training_contents==1)
        PSHT
        @elseif($fortynine->	q49_training_contents==2)
        PSHT Act 2012
        @elseif($fortynine->	q49_training_contents==3)
        Rule of PSHT Act
        @elseif($fortynine->	q49_training_contents==4)
        TIP Investigation
        @elseif($fortynine->	q49_training_contents==5)
        Victim Withess Protection
        @elseif($fortynine->	q49_training_contents==6)
        TIP and MLA
        @elseif($fortynine->	q49_training_contents==7)
        Role of Police
        @elseif($fortynine->	q49_training_contents==8)
        NPA
        @elseif($fortynine->	q49_training_contents==9)
        NRM
        @elseif($fortynine->	q49_training_contents==10)
        VoT identification Guideline
        @endif  
          
        </td>
        <td>{{$fortynine->q49_number_of_training}}</td>

        <td>
        @if($fortynine->		q49_location_id==1)
        Barisal
        @elseif($fortynine->		q49_location_id==2)
        Chattogram
        @elseif($fortynine->		q49_location_id==3)
        Dhaka
        @elseif($fortynine->		q49_location_id==4)
        Khulna
        @elseif($fortynine->		q49_location_id==5)
        Mymensingh
        @elseif($fortynine->		q49_location_id==6)
        Rajshahi
        @elseif($fortynine->		q49_location_id==7)
        Rangpur
        @elseif($fortynine->		q49_location_id==8)
        Sylhet
        @endif  
          
        </td>
        <td>
        {{$fortynine->q49_development_partner}}
        </td> 
        <td>
        {{$fortynine->q49_coverage_men}}
        </td>
        <td>
        {{$fortynine->q49_coverage_women}}
        </td>
        <td>
        {{$fortynine->q49_coverage_third_gender}}
        </td>
        <td>
        {{$fortynine->q49_coverage_total}}
        </td>
        
        
      </tr>
         




@endforeach

      </tbody>
      </table>
    </div>
  </div>
</div>


 

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

            <div id="50_question_view">
          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Type of preventive Action</th>
                <th scope="col">Allocation (in BDT)</th>

              </tr>
            </thead>
            <tbody>
          @foreach($questionsFifty as $fifty)
          <tr>
            <td>
              @if ($fifty->type_preventive_action_q50 == 1)
              Total Allocation under NPA for prosecution
              @elseif ($fifty->type_preventive_action_q50 == 2)
              Total Allocation utilized under NPA for prosecution
              @elseif ($fifty->type_preventive_action_q50 == 3)
              Total allocation spent for prosecution training
              @elseif ($fifty->type_preventive_action_q50 == 4)
              Assessment of Allocation
              
              @endif
              </td>
            
              
              
            </td>
            <td>{{$fifty->total_allocation_under_npa_prosecution_q50}}</td>
            

          </tr>
          @endforeach
              

            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
  


   
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
                <th>Categories of VoTs</th>
                <th>Number of Cases</th>
                <th>Total amount Compensation in BDT</th>

              </tr>
            </thead>
            <tbody>
            @foreach($questionsFiftyOne as $fiftyone)
          <tr>
            <td>
              @if ($fiftyone->q51_type == 1)
              Man
              @elseif ($fiftyone->q51_type == 2)
              Women
              @elseif ($fiftyone->q51_type == 3)
              3RD G
              @elseif ($fiftyone->q51_type == 4)
              Boy
              @elseif ($fiftyone->q51_type == 5)
              Girl
              @elseif ($fiftyone->q51_type == 6)
              Total
              @endif
              </td>
            
            <td>{{$fiftyone->q51_number_case}}</td>
            <td>{{$fiftyone->q51_total_case}}</td>

            

          </tr>
          @endforeach
            </tbody>
              


          </table>
        </div>
      </div>
    </div>
   

 
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

          <div id ="52_question_view">
          <table class="table table-bordered text-center">
            <thead></thead>
            <tbody>
            @foreach($questionsFiftyTwo as $fiftytwo)
          <tr>
            <td>
              @if ($fiftytwo->q52_type == 1)
              BDT
              @elseif ($fiftytwo->q52_type == 2)
              MoHA
              @elseif ($fiftytwo->q52_type == 3)
              MoLJPA
              
              @endif
              </td>
            
            <td>{{$fiftytwo->q52_bdt}}</td>
           

            

          </tr>
          @endforeach
            </tbody>
            
          </table>
        </div>
        </div>
      </div>
    </div>
    <!-- question no 52 end -->


 
<style>
  .otherSpecify{
    display:none;
  }
</style>
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
    
    <div id ="53_question_view">
          <table id="addRowQ53" class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th rowspan="2" style="text-align: center; margin: bottom 45%;">Number of Case</th>
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
              </thead>
              <tbody>
          @foreach($questionsFiftyThree as $fiftythree)

              <tr>
                
              <td>
              @if ($fiftythree->number_of_case == 1)
              Health support
              @elseif ($fiftythree->number_of_case == 2)
              Compensation
              @elseif ($fiftythree->number_of_case == 3)
              Training
              @elseif ($fiftythree->number_of_case == 4)
              Psycho-social care
              @elseif ($fiftythree->number_of_case == 5)
              Shelter
              @elseif ($fiftythree->number_of_case == 6)
              Victim protection
              @elseif ($fiftythree->number_of_case == 7)
              {{$fiftythree->q53_other_specify}}
              @endif
                </td>
                <td>
            {{$fiftythree->q53_individual_coverage_men}}
            </td> 
            <td>
            {{$fiftythree->q53_individual_coverage_women}}
            </td>
            <td>
            {{$fiftythree->q53_individual_coverage_third_gender}}
            </td>
            <td>
            {{$fiftythree->q53_individual_coverage_boy}}
            </td>
            <td>
            {{$fiftythree->q53_individual_coverage_girl}}
            </td>
            <td>
            {{$fiftythree->q53_individual_coverage_total}}
            </td>
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>
        </div>
      </div>
    </div>
    
   
  
 <div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">54.Did ministry/agency/organization train law enforcing agencies and judiciary?
      </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body row">



      <table id="addRow" class="table table-bordered text-center">
        <thead>
          <tr>
            <th rowspan="2" style="text-align: center; margin: bottom 45%;">Category of Trainee</th>
            <th rowspan="2">Number of Training</th>
            <th rowspan="2">Training Contents</th>
            <th colspan="6">Coverage</th>
            <tr>
            <th>Men</th>
            <th>Women</th>
            <th>3rd G</th>
            <th>Total</th>
          </tr>
          </tr>
        </thead>
        <tbody>
        @foreach($questionsFiftyFour as $fiftyfour)

          <tr>
          <td>
              {{$fiftyfour->category_trainee_54}}
              </td> 
              <td>
              {{$fiftyfour->number_of_training_54}}
              </td>
              <td>
              {{$fiftyfour->training_contents_54}}
              </td> 
              <td>
              {{$fiftyfour->men_q54}}
              </td> 
              <td>
              {{$fiftyfour->women_q54}}
              </td> 
              <td>
              {{$fiftyfour->third_gender_q54}}
              </td> 
              <td>
              {{$fiftyfour->total_q54}}
              </td> 
          </tr>

      @endforeach
          
        </tbody>
      </table>
    </div>
  </div>
</div> 




<style>
.otherSpecify{
  display:none;
}
</style>
<div class="col-md-12 question55">
    <div class="card card-outline collapsed-card">
      <div class="card-header">
        <h3 class="card-title">55.Did ministry/agency/organization/CTC carried out partnership promotion actions?
        </h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body row">
        <div class="form-check">





          <table id="addRowQ55" class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th rowspan="2">Types of Activities</th>
                <th rowspan="2">District</th>
                <th rowspan="2">Number of Organizations covered</th>
                <th rowspan="2">Number of Events</th>
                <th colspan="6">Number of Individuals Covered</th>
              </tr>
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>3rd G</th>
                <th>Boy</th>
                <th>Girls</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
            @foreach($questionsFiftyFive as $fiftyfive)
          <tr>
            <td>
            @if($fiftyfive->q55_type_activities==1)
            GO-NGO Coordination
            @elseif($fiftyfive->q55_type_activities==2)
            Facilitation of CTC Members (Union)
            @elseif($fiftyfive->q55_type_activities==3)
            Facilitation of CTC Members (Upazilla)
            @elseif($fiftyfive->q55_type_activities==4)
            Facilitation of CTC Members (District)
            @elseif($fiftyfive->q55_type_activities==5)
            Facilitation of Private Sector
            @elseif($fiftyfive->q55_type_activities==6)
            Development Partners
            @elseif($fiftyfive->q55_type_activities==7)
            Networking Meeting
            @elseif($fiftyfive->q55_type_activities==8)
            Workshop/Conference/Seminar/Meeting
            @elseif($fiftyfive->q55_type_activities==9)
            MoU
            @elseif($fiftyfive->q55_type_activities==10)
            Meeting of DLAC (District)
            @elseif($fiftyfive->q55_type_activities==11)
            Meeting of DLAC (Upazilla)
            @elseif($fiftyfive->q55_type_activities==12)
            Facilitation with Police/Court/BLAS organizations
            @elseif($fiftyfive->q55_type_activities==13)
            {{$fiftyfive->q55_othe_specify}}
            @endif  
           
            </td>
            <td>
            {{$fiftyfive->distric->name ?? ''}}
          
            </td> 
            <td>
            {{$fiftyfive->q55_organizations_covered}}
            </td>
            <td>
            {{$fiftyfive->q55_number_events}}
            </td>
            <td>
            {{$fiftyfive->q55_individuals_covered_men}}
            </td>
            <td>
            {{$fiftyfive->q55_individuals_covered_women}}
            </td>
            <td>
            {{$fiftyfive->q55_individuals_covered_third_gender}}
            </td> 
            <td>
            {{$fiftyfive->q55_individuals_covered_boy}}
            </td>
            <td>
            {{$fiftyfive->q55_individuals_covered_girl}}
            </td>
            <td>
            {{$fiftyfive->q55_individuals_covered_total}}
            </td>
            
            </tr>
            @endforeach
          </tbody>
              
          </table>
        </div>
      </div>
    </div>
  </div>

 
 
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">56
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
                <th>Number of Meeting</th>
                <th>Union</th>
                <th>Upazila</th>
                <th>District</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
            @foreach($questionsFiftySix as $fiftysix)
              <tr>
                <td>
                @if($fiftysix->q56_type_of_meeting==1)
            GO-NGO Coordination
            @elseif($fiftysix->q56_type_of_meeting==2)
            Facilitation of CTC Members (Union)
            @elseif($fiftysix->q56_type_of_meeting==3)
            Facilitation of CTC Members (Upazilla)
            @elseif($fiftysix->q56_type_of_meeting==4)
            Facilitation of CTC Members (District)
            @elseif($fiftysix->q56_type_of_meeting==5)
            Facilitation of Private Sector
            @elseif($fiftysix->q56_type_of_meeting==6)
            Development Partners
            @elseif($fiftysix->q56_type_of_meeting==7)
            Networking Meeting
            @elseif($fiftysix->q56_type_of_meeting==8)
            Workshop/Conference/Seminar/Meeting
            @elseif($fiftysix->q56_type_of_meeting==9)
            MoU
            @elseif($fiftysix->q56_type_of_meeting==10)
            Meeting of DLAC (District)
            @elseif($fiftysix->q56_type_of_meeting==11)
            Meeting of DLAC (Upazilla)
            @elseif($fiftysix->q56_type_of_meeting==12)
            Number of Girl-participants	
            @elseif($fiftysix->q56_type_of_meeting==13)
            Referral of VoTs by CTC for assistance
            @elseif($fiftysix->q56_type_of_meeting==14)
            Total Number of Referral
            @elseif($fiftysix->q56_type_of_meeting==15)
            Total number of VoTs referred
            @elseif($fiftysix->q56_type_of_meeting==16)
            Number of Male VoTs
            @elseif($fiftysix->q56_type_of_meeting==17)
            Number of Female VoTs
            @elseif($fiftysix->q56_type_of_meeting==18)
            Number of 3RD G VoTs
            @elseif($fiftysix->q56_type_of_meeting==19)
            Number of Boy-VoTs			
            @elseif($fiftysix->q56_type_of_meeting==20)
            Number of Girl-VoTs		
            @elseif($fiftysix->q56_type_of_meeting==21)
            Direct Livelihood/Financial Assistance to VoTs
            @elseif($fiftysix->q56_type_of_meeting==22)
            Total number of VoTs supported
            @elseif($fiftysix->q56_type_of_meeting==23)
            Total number of VoTs supported
            @elseif($fiftysix->q56_type_of_meeting==24)
            Number of Male VoTs
            @elseif($fiftysix->q56_type_of_meeting==25)
            Number of Female VoTs
            @elseif($fiftysix->q56_type_of_meeting==26)
            Number of 3RD G VoTs
            @elseif($fiftysix->q56_type_of_meeting==27)
            Number of Boy-VoTs		
            @elseif($fiftysix->q56_type_of_meeting==28)
            Number of Girl-VoTs	
            @elseif($fiftysix->q56_type_of_meeting==29)
            Case monitoring by CTC
            @elseif($fiftysix->q56_type_of_meeting==30)
            Total Number TIP cases monitored
            @elseif($fiftysix->q56_type_of_meeting==31)
            Total number of VoTs’ case monitored
            @elseif($fiftysix->q56_type_of_meeting==32)
            Number of Male VoTs’ case monitored	
            @elseif($fiftysix->q56_type_of_meeting==33)
            Number of Female VoTs’ case monitored
            @elseif($fiftysix->q56_type_of_meeting==34)
            Number of 3RD G VoTs’ case monitored
            @elseif($fiftysix->q56_type_of_meeting==35)
            Number of Boy- VoTs’ case monitored	
            @elseif($fiftysix->q56_type_of_meeting==36)
            Number of Girl- VoTs’ case monitored	
            @elseif($fiftysix->q56_type_of_meeting==37)
            Resource Mobilization	
            @elseif($fiftysix->q56_type_of_meeting==38)
            Total resource mobilized (BDT)	
            @elseif($fiftysix->q56_type_of_meeting==39)
            Total Expenditure (BDT)		
            @elseif($fiftysix->q56_type_of_meeting==40)
            Source of fund	
            @elseif($fiftysix->q56_type_of_meeting==41)
            Attach/ Upload
            @endif  
                </th>
              



                <td>{{$fiftysix->q56_union}}</td>
                <td>{{$fiftysix->q56_upazila}}  </td>
                <td>{{$fiftysix->q56_district}}  </td>
                <td>{{$fiftysix->q56_total}}  </td>
              </tr>
              @endforeach
             
            </tbody>
          </table>
        
      
        </div>
      </div>
    </div>
 

   
<br> <br>
<h4 style="padding-Left:10px; font-weight:bold">MONITORING AND EVALUATION</h4>

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
      <table class="table table-white table-bordered">
        <thead>
          <tr>
           
            <th scope="col">Research title</th>
            <th scope="col">Area of Research</th>
            <th scope="col">Status</th>
            <th scope="col">Research Location</th>
          </tr>
        </thead>
        <tbody>
        @foreach($questionsFiftySeven as $fiftyseven)

        <tr>
          <td>{{$fiftyseven->research_title}}</td>
        <td>
        @if ($fiftyseven->q57_area_research == 1)
        Area of Research
        @elseif ($fiftyseven->q57_area_research == 2)
        Prevention
        @elseif ($fiftyseven->q57_area_research == 3)
        Protection
        @elseif ($fiftyseven->q57_area_research == 4)
        Prosecution
        @elseif ($fiftyseven->q57_area_research == 5)
        Participation
        @elseif ($fiftyseven->q57_area_research == 6)
        Midterm Evaluation of NPA
        @elseif ($fiftyseven->q57_area_research == 7)
        End evaluation of NPA
        @elseif ($fiftyseven->q57_area_research == 8)
        Best practice 
        @elseif ($fiftyseven->q57_area_research == 9)
        Baseline
        @elseif ($fiftyseven->q57_area_research == 10)
        Annual Countrhy TIP Report
        @elseif ($fiftyseven->q57_area_research == 11)
        MRM
        @endif
          </td>
          <td>
        @if ($fiftyseven->q57_status_id == 1)
        Completed
        @elseif ($fiftyseven->q57_status_id == 2)
        Draft
        @elseif ($fiftyseven->q57_status_id == 3)
        On-Going
        @elseif ($fiftyseven->q57_status_id == 4)
        Approved Plan
        @elseif ($fiftyseven->q57_status_id == 5)
        Proposed
        @endif
          </td>
          <td>{{$fiftyseven->q57_research_location_id}}</td>
        </tr>
        @endforeach
          
        </tbody>
      </table>
    </div>
  </div>
</div>

     
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
        <thead></thead>
<tbody>
        @foreach($questionsFiftyEight as $fiftyeight)
          <tr>
            <td>
              @if ($fiftyeight->spent_research == 1)
              BDT
              @elseif ($fiftyeight->spent_research == 2)
              Source
              @elseif ($fiftyeight->spent_research == 3)
              Assessment of Allocation
              @elseif ($fiftyeight->spent_research == 4)
              Others
              @endif
              </td>
            
            <td>{{$fiftyeight->q58_bdt}}</td>
            <td>{{$fiftyeight->q58_source}}</td>
            <td>{{$fiftyeight->q58_assessment_allocation}}</td>

           

            

          </tr>
          @endforeach
</tbody>
       
      </table>
    </div>
  </div>
</div>
   

     
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
        <thead></thead>
    <tbody>
    @foreach($questionsFiftyNine as $fiftyfine)
          <tr>
            <!-- <td>
              @if ($fiftyfine->q59_one == 1)
              1
              @elseif ($fiftyfine->q59_two == 2)
              2
              @elseif ($fiftyfine->q59_three == 3)
              3
              @elseif ($fiftyfine->q59_four == 4)
              4
              @elseif ($fiftyfine->q59_five == 5)
              5
              @elseif ($fiftyfine->q59_six == 6)
              6
              @elseif ($fiftyfine->q59_seven == 7)
              7
              @elseif ($fiftyfine->q59_eight == 8)
              8
              @endif
              </td> -->
            
            <td>{{$fiftyfine->q59_one}}</td>
            <td>{{$fiftyfine->q59_two}}</td>
            <td>{{$fiftyfine->q59_three}}</td>
            <td>{{$fiftyfine->q59_four}}</td>
            <td>{{$fiftyfine->q59_five}}</td>
            <td>{{$fiftyfine->q59_six}}</td>
            <td>{{$fiftyfine->q59_seven}}</td>
            <td>{{$fiftyfine->q59_eight}}</td>
            </tr>
            @endforeach
</tbody>
       
      </table>
    </div>
  </div>
</div>
  


     
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
      <table class="table table-bordered text-center">
        <thead></thead>
        <tbody>
        @foreach($questionsSixty as $sixty)
          <tr>
            
            
            <td>{{$sixty->description_60}}</td>
           

           

            

          </tr>
          @endforeach
        </tbody>
       
      </table>
    </div>
  </div>
</div>
   



</div>
</section>



</div>

@endsection