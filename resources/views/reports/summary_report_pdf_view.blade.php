<!doctype html>
<html lang="en">

<head>
  <?php
use App\Helpers\helper;
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Summary Report</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .block_container6>div {
      display: inline-block;
      vertical-align: middle;
      margin-left: 10px;
      margin-top: 5px;


    }

    .bloc6 {
      font-size: 16px;
    }

    .bloc61 {
      font-size: 16px;
      padding-left: 350px
    }
  </style>
</head>

<body>

  <h2 style="text-align: center;"> Summary Report </h2>

  <div class="row">
    <p style="text-align:center;"></p>
    <p style="text-align:center;"></p>
    <div class="card card-outline">
      <div class="card-header">

        <h3 class="card-title">1. New forms of Trafficking</h3>
      </div>
      <div class="card-body">

        <table class="table table-bordered" style="width:100%; border: 1px solid black;">
          <thead>
            <tr>
              <th style="border: 1px solid black; text-align:center;">User</th>
              <th style="border: 1px solid black; text-align:center;">Date</th>
              <th style="border: 1px solid black; text-align:center;">Feedback</th>
            </tr>
          </thead>
          <tbody>
            @foreach($questionOneData as $questionOne)
        <tr style="width:100%; border: 1px solid black;">

          <td style="width:100%; border: 1px solid black;">
          {{$questionOne['name']}}
          </td>
          <td style="width:100%; border: 1px solid black;">
          {{$questionOne['created_at']}}
          </td>


          <td>

          <table style="width:'100%',border: 1px solid black; text-align:center;">

            <tbody>
            <tr>
              <!-- <th align="center">Initiative to mitigate Risk</th> -->
              <th style="width:100%; border: 1px solid black;">Type</th>
              <th style="width:100%; border: 1px solid black;">Location</th>
            </tr>
            @foreach($questionOne["feedback"] as $feedback)
        <tr>
          <td style="width:100%; border: 1px solid black;">
          {{helper::arraykeys_to_value($q1_question_type, $feedback->q1_type_id)}}
          </td>
          <td style="width:100%; border: 1px solid black;">
          {{helper::arraykeys_to_value($q1_locations, $feedback->q1_location_id)}}
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
    <div class="card card-outline collapsed-card">
      <div class="card-header">

        <h3 class="card-title">2. Which identified groups are at particular risk of sex trafficking and forced labor?
        </h3>
      </div>
      <div class="card-body">


        <table class="table table-bordered" style="width:100%; border: 1px solid black;">
          <thead>
            <tr>
              <th style="width:100%; border: 1px solid black;">User</th>
              <th style="width:100%; border: 1px solid black;">Date</th>
              <th style="width:100%; border: 1px solid black;">Feedback</th>
            </tr>
          </thead>
          <tbody>
            @foreach($question_two_data as $questiondata)
        <tr>

          <td style="width:100%; border: 1px solid black;">
          {{$questiondata['name']}}
          </td>
          <td style="width:100%; border: 1px solid black;">
          {{$questiondata['created_at']}}
          </td>


          <td>

          <table style="width:100%; border: 1px solid black;">

            <tbody>
            <tr style="width:100%; border: 1px solid black;">
              <!-- <th align="center">Initiative to mitigate Risk</th> -->
              <th style="width:100%; border: 1px solid black;">Vulnerable list</th>
              <th style="width:100%; border: 1px solid black;">Specify</th>
            </tr>
            @foreach($questiondata["feedback"] as $q2feedback)
        <tr style="width:100%; border: 1px solid black;">
          <td style="width:100%; border: 1px solid black;">
          {{helper::arraykeys_to_value($q1_vulnerable_list, $q2feedback->choose_vulnerable_list_id)}}
          </td>
          <td style="width:100%; border: 1px solid black;">
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

    <div class="card card-outline collapsed-card">
      <div class="card-header">
        <h3 class="card-title">3.Is there any new risk and initiatives to mitigate the risk of trafficking
          associated with Climate Change
          (CC)?</h3>
      </div>
      <div class="card-body">



        <table class="table table-bordered" style="width:'100%',border: 1px solid black; text-align:center;">
          <thead>
            <tr style="width:100%; border: 1px solid black;">
              <th style="width:100%; border: 1px solid black;">User</th>
              <th style="width:100%; border: 1px solid black;">Date</th>
              <th style="width:100%; border: 1px solid black;">Feedback</th>
            </tr>
          </thead>
          <tbody>
            @foreach($questionsThree as $question_three)
        <tr style="width:100%; border: 1px solid black;">

          <td style="width:100%; border: 1px solid black;">
          {{$question_three['name']}}
          </td>
          <td style="width:100%; border: 1px solid black;">
          {{$question_three['created_at']}}
          </td>


          <td>

          <table style="width:100%; border: 1px solid black;">

            <tbody>
            <tr style="width:100%; border: 1px solid black;">
              <th style="width:100%; border: 1px solid black;">Initiative to mitigate Risk</th>
              <th style="width:100%; border: 1px solid black;">Title of Project</th>
              <th style="width:100%; border: 1px solid black;">Location</th>
              <th style="width:100%; border: 1px solid black;">Beneficiary</th>
            </tr>
            @foreach($question_three["feedback"] as $q3feedback)
        <tr style="width:100%; border: 1px solid black;">
          <td style="width:100%; border: 1px solid black;">
          {{helper::arraykeys_to_value($q3_migitate_risk, $q3feedback->q3_initiative_mitigate_risk)}}
          </td>
          <td style="width:100%; border: 1px solid black;">
          {{$q3feedback->q3_title_project_program}}
          </td>
          <td style="width:100%; border: 1px solid black;">
          {{helper::arraykeys_to_value($q3_locations, $q3feedback->q3_location_id)}}
          </td>
          <td style="width:100%; border: 1px solid black;">
          {{helper::arraykeys_to_value($q3_problem_beneficary, $q3feedback->q3_problem_id)}}
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

    <div class="col-md-12 question4">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">4.Did the National Authority convene?</h3>

      
    </div>
    <div class="card-body">
 

      
      <table class="table table-bordered" style="width:100%; border: 1px solid black;">
          <thead>
            <tr >
              <th style="border: 1px solid black; text-align:center;">User</th>
              <th style="border: 1px solid black; text-align:center;">Date</th>
              <th style="border: 1px solid black; text-align:center;">Feedback</th>
            </tr>
          </thead>
          <tbody>
          @foreach($questionsFour as $question_four)
          <tr>
             
            <td style="border: 1px solid black; text-align:center;">
              {{$question_four['name']}}
            </td>
             <td style="border: 1px solid black; text-align:center;">
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
                <th style="border: 1px solid black; text-align:center;">Component</th>
                <th style="border: 1px solid black; text-align:center;">Issue</th>
                <th style="border: 1px solid black; text-align:center;">Remark</th>
              </tr>
            @foreach($question_four["feedback"] as $q4feedback)
            
            <tr>
            
                <td style="border: 1px solid black; text-align:center;">
                  {{$q4feedback->meeting_no}}
                  </td>
                  <td style="border: 1px solid black; text-align:center;">
                  {{$q4feedback->key_decisions}}
                  </td>
                 
            </tr>
              <tr>
                <!-- <td>
                {{$q4feedback->type_component_q4}}
                </td> -->
                <td style="border: 1px solid black; text-align:center;">
                  {{helper::arraykeys_to_value($q4_components,$q4feedback->type_component)}}
                </td>
                <td style="border: 1px solid black; text-align:center;">
                  {{helper::arraykeys_to_value($q4_type_issues,$q4feedback->type_issue_q4)}}
                </td>
                
                <td style="border: 1px solid black; text-align:center;">
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

  
    </div>
    <div class="card-body">
     
     
      <div id="five_question_view">
      
      <table class="table table-bordered" style="width:100%; border: 1px solid black;">
          <thead>
            <tr>
              <th style="border: 1px solid black; text-align:center;">User</th>
              <th style="border: 1px solid black; text-align:center;">Date</th>
              <th style="border: 1px solid black; text-align:center;">Feedback</th>
            </tr>
          </thead>
          <tbody>
          @foreach($questionsFive as $question_five)
          <tr>
             
            <td style="border: 1px solid black; text-align:center;">
              {{$question_five['name']}}
            </td>
             <td style="border: 1px solid black; text-align:center;">
              {{$question_five['created_at']}}
            </td>
           
            
            <td>
            
            <table>
          
            <tbody>
              <!-- <tr>
            <th style="border: 1px solid black; text-align:center;">Meeting No</th>
            <th style="border: 1px solid black; text-align:center;">Key decisions</th>
            </tr> -->
              <tr>
                <!-- <th style="border: 1px solid black; text-align:center;">Initiative to mitigate Risk</th> -->
                <th style="border: 1px solid black; text-align:center;">Type of Policy tool</th>
                <th style="border: 1px solid black; text-align:center;">Title of the initiative</th>
                <th style="border: 1px solid black; text-align:center;">Objectives</th>
              </tr>
            @foreach($question_five["feedback"] as $q5feedback)
            
            
              <tr>
                <!-- <td>
                {{$q4feedback->type_component_q4}}
                </td> -->
                <td style="border: 1px solid black; text-align:center;">
                  {{helper::arraykeys_to_value($q5_type_policy_tool,$q5feedback->type_policy_tool_id)}}
                </td>
                <td style="border: 1px solid black; text-align:center;">
                  {{$q5feedback->title_the_initiative_id}}
                </td>
                
                <td style="border: 1px solid black; text-align:center;">
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

     
    </div>
    <div class="card-body">
    
      
      <div id="six_question_view">
      <table class="table table-bordered table-white" style="width:100%; border: 1px solid black;">
        <thead>
          <tr>
            <th style="border: 1px solid black; text-align:center;" scope="col">Type of preventive Action</th>
            <th style="border: 1px solid black; text-align:center;" scope="col">Allocation (in BDT)</th>


          </tr>
        </thead>
        <tbody>
    
          
        
        @foreach($questionsSix as $six)
          <tr>
            <th style="border: 1px solid black; text-align:center;">
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
            
            <td style="border: 1px solid black; text-align:center;">
          
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



<div class="col-md-12 question7">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">7.Did your ministry/agency update or create a new national action plan to address
        trafficking? If yes,
        please provide a copy (in English, if available) and note the timeline.</h3>

   
    </div>
    <div class="card-body">
      
      
    
      <div id="seven_question_view">
      <table class="table table-bordered table-white" style="width:100%; border: 1px solid black;">
        <thead>
          <tr>
            <th style="border: 1px solid black; text-align:center;">Duration of NPA</th>
            <th style="border: 1px solid black; text-align:center;">Attach/Upload</th>
          </tr>
        </thead>
        <tbody>
        @foreach($questionsSeven as $seven)
          <tr>
            <th style="border: 1px solid black; text-align:center;">   {{$seven->duration_npa}} </th>
            <td style="border: 1px solid black; text-align:center;"> 
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

   
   </div>
   <div class="card-body">


   


     <table id="resources_funding" class="table table-bordered table-white" style="width:100%; border: 1px solid black;">
       <thead>
         <tr>
           <th scope="col" style="border: 1px solid black; text-align:center;">Allocation</th>
           <th scope="col" style="border: 1px solid black; text-align:center;">Allocation</th>


         </tr>
       </thead>
       <tbody>
       @foreach($questionsEight as $eight)
         <tr>
           <th style="border: 1px solid black; text-align:center;">
           @if ($eight->instrument	 == 1)
           Total Allocation under NPA
                @elseif ($eight->instrument	 == 2)
                Total Allocation utilized under NPA
                @elseif ($eight->instrument	 == 3)
                MoAssessment of Allocation
           
                @endif
           
          </th>

           <td style="border: 1px solid black; text-align:center;"> 
        
             
                {{$eight->allocation_status}}
        
           
          

           </td>
         </tr>
         @endforeach
       </tbody>
     </table>

   </div>
 </div>
</div> 


@if(Auth::user()->can('9.question'))
<div class="col-md-12 question9">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">9.Did tde ministry/agency/organization fund and/or conduct awareness activities?
      </h3>

    </div>
   
    <div class="card-body">
<form action="/q9-pdf-view" method="post">
  @csrf 
  <input type="hidden" name="chartData" id="chartInputData">
  <!-- <input type="submit" value="Print Chart"> -->
 
</form>


         
          <h6>Gender based Distribution of the Participants of each type of Awareness Activities</h6>

      <table class="table table-bordered table-white" id="q9_individual_activities">
        <thead>
          <tr>
            <td rowspan="2" scope="col">Category</td>
            <td colspan="17">Coverage/Response</td>
            
          </tr>

          <tr>
            <td scope="col" colspan="2">M</td>
            <td scope="col" colspan="2">W</td>
            <td scope="col" colspan="2">3rd G</td>
            <td scope="col" colspan="2">Total Adult</td>
            <td scope="col"  colspan="2">Boys</td>
            <td scope="col"  colspan="2">Girls</td>
            <td scope="col"  colspan="2">Total children</td>
            <td scope="col" colspan="2">Total </td>    
            <th >Location</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>

      <b></b>
     
    
    </div>

    <div class="card-body">
    <h6>
    Gender based Distribution of the Participants of all Awareness Activities
</h6>
          <table class="table table-bordered table-white" id="q9_all_participants">
            <thead>
              <tr>
                <td rowspan="2" scope="col">Category</td>
                <td colspan="17">Coverage/Response</td>
              </tr>
    
              <tr>
                <td scope="col" colspan="2">M</td>
                <td scope="col" colspan="2">W</td>
                <td scope="col" colspan="2">3rd G</td>
                <td scope="col" colspan="2">Total Adult</td>
                <td scope="col"  colspan="2">Boys</td>
                <td scope="col"  colspan="2">Girls</td>
                <td scope="col"  colspan="2">Total children</td>
                <td scope="col" colspan="2">Total </td>
                <th >Location</th>
              </tr>   
            </thead>
            <tbody></tbody>
          </table>
  
          
         
        
        </div>

  </div>
</div>


@endif


    @if(Auth::user()->can('18.question'))
      <div class="col-md-12 question18">
        <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">18.Did the government train its diplomats not to engage in or facilitate
          trafficking?</h3>
        </div>
        <div class="card-body">

          <table class="table table-bordered table-white" style="width:90%; border: 1px solid black;">
          <thead>
            <tr style="width:90%,border: 1px solid black; text-align:center;">
            <th style="border: 1px solid black; text-align:center;" rowspan="2">Category of Trainee</th>
            <th style="border: 1px solid black; text-align:center;" colspan="9" style="text-align: left">Coverage of
              Training</th>
            </tr>
            <tr style="border: 1px solid black; text-align:center;">
            <th style="border: 1px solid black; text-align:center;" colspan="2">Men</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Women</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">3rd G</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Total Adult</th>

            </tr>
          </thead>
          <tbody>
            <?php  if (isset($questionsEighteen) && !empty($questionsEighteen)) {
      foreach ($questionsEighteen as $row) {
          ?>
            <tr style="border: 1px solid black; text-align:center;">
            <td style="border: 1px solid black; text-align:center;" scope="col" id="category_trainee_q18"
              class="blank-cell row_cell">{{$row['category_trainee_q18']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="coverage_training_men"
              class="blank-cell row_cell">{{$row['coverage_training_men']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="men_perchantege"
              class="blank-cell row_cell">{{$row['men_perchantege']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="coverage_training_men"
              class="blank-cell row_cell">{{$row['coverage_training_men']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="women_perchantege"
              class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="coverage_training_third_gender"
              class="blank-cell row_cell">{{$row['coverage_training_third_gender']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege"
              class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category"
              class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage"
              class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
            </tr>
            <?php
      }
      } 
        ?>
          </tbody>
          </table>

          <br><br>
          <table class="table table-bordered table-white" style="width:100%; border: 1px solid black;">
          <thead>
            <tr style="border: 1px solid black; text-align:center;">
            <th style="border: 1px solid black; text-align:center;" rowspan="2">Category of Trainee</th>
            <th style="border: 1px solid black; text-align:center;" colspan="9" style="text-align: left">Coverage of
              Training</th>
            </tr>
            <tr style="border: 1px solid black; text-align:center;">
            <th style="border: 1px solid black; text-align:center;" colspan="2">Men</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Women</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">3rd G</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Total Adult</th>

            </tr>
          </thead>
          <tbody>
            <?php  if (isset($questionsEighteentable2) && !empty($questionsEighteentable2)) {
      foreach ($questionsEighteentable2 as $row) {
          ?>
            <tr style="border: 1px solid black; text-align:center;">
            <td style="border: 1px solid black; text-align:center;" scope="col" id="category_trainee_q18"
              class="blank-cell row_cell">{{$row['category_trainee_q18']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="coverage_training_men"
              class="blank-cell row_cell">{{$row['coverage_training_men']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="men_perchantege"
              class="blank-cell row_cell">{{$row['men_perchantege']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="coverage_training_men"
              class="blank-cell row_cell">{{$row['coverage_training_men']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="women_perchantege"
              class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="coverage_training_third_gender"
              class="blank-cell row_cell">{{$row['coverage_training_third_gender']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege"
              class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category"
              class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage"
              class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
            </tr>
            <?php
      }
      } 
        ?>
          </tbody>
          </table>

        </div>
        </div>
      </div>


      <div class="col-md-12 question20">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">20.Did the government provide anti-trafficking training to its nationals deployed
        abroad on
        peacekeeping or other similar missions?</h3>

      
    </div>


    <div class="card-body">

      <table class="table table-bordered text-center" style="width:100%; border: 1px solid black;" id="q20_individual_activities">
        <thead class="">
          <tr>
            <th rowspan="2" style="border: 1px solid black; text-align:center;">Country where
              posted</th>
            <th style="border: 1px solid black; text-align:center;" rowspan="2">Description</th>
            <th style="border: 1px solid black; text-align:center;" colspan="10">Coverage</th>

          </tr>

          <tr>
            <th style="border: 1px solid black; text-align:center;" colspan="2"></th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Men</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Women</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">3rd G</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Total Adult</th>
          </tr>
          <?php
          if(isset( $questionsTwenty) && !empty( $questionsTwenty)){
            foreach($questionsTwenty as $row){
              ?>
              <tr>
              <td style="border: 1px solid black; text-align:center;" id="q20_country_id" class="blank-cell row_cell">{{$row['q20_country_id']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q20_description" class="blank-cell row_cell">{{$row['q20_description']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q20_number_cases_men" class="blank-cell row_cell">{{$row['q20_number_cases_men']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q20_number_cases_women" class="blank-cell row_cell">{{$row['q20_number_cases_women']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q20_number_cases_third_gender" class="blank-cell row_cell">{{$row['q20_number_cases_third_gender']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
          
              <td style="border: 1px solid black; text-align:center;" id="total_protect_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="totalProtedMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>    
              </tr>
           <?php
            }
        } 
          ?>

        </thead>
        <tbody></tbody>


      </table>
      <br><br>
      <table class="table table-bordered text-center" style="width:100%; border: 1px solid black;" id="q20_all_participants">
        <thead class="">
          <tr>
            <th rowspan="2" style="border: 1px solid black; text-align:center;" style="text-align: center;">Country where
              posted</th>
            <th style="border: 1px solid black; text-align:center;" rowspan="2">Description</th>
            <th style="border: 1px solid black; text-align:center;" colspan="10">Coverage</th>

          </tr>
          <tr>
            <th style="border: 1px solid black; text-align:center;" colspan="2"></th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Men</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Women</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">3rd G</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Total Adult</th>
          </tr>

          <?php
          if(isset( $questionsTwentyTable2) && !empty( $questionsTwentyTable2)){
            foreach($questionsTwentyTable2 as $row){
              ?>
              <tr>
              <td style="border: 1px solid black; text-align:center;" id="q20_country_id" class="blank-cell row_cell">{{$row['q20_country_id']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q20_description" class="blank-cell row_cell">{{$row['q20_description']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q20_number_cases_men" class="blank-cell row_cell">{{$row['q20_number_cases_men']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q20_number_cases_women" class="blank-cell row_cell">{{$row['q20_number_cases_women']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q20_number_cases_third_gender" class="blank-cell row_cell">{{$row['q20_number_cases_third_gender']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
          
              <td style="border: 1px solid black; text-align:center;" id="total_protect_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="totalProtedMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>    
              </tr>
           <?php
            }
        } 
          ?>
     
        </thead>
<tbody></tbody>

      </table>
       
    </div>
  </div>





  



      <div class="card card-outline collapsed-card">
        <div class="card-header">
        <h3 class="card-title">24.Actors having changes in formal/standard procedures for victim referral to protection
          services</h3>

      
        </div>

        <div class="card-body">
        <h5>Number of VoT Referred by Different Actors
        </h5>
        <table class="table table-bordered table-white" style="width:100%; border: 1px solid black;" id="q24_individual_activities">
          <thead>
          <tr>
            <td style="border: 1px solid black; text-align:center;" rowspan="2" scope="col">Category</td>
            <td style="border: 1px solid black; text-align:center;" rowspan="2" scope="col">Description of change/Status</td>
            <td style="border: 1px solid black; text-align:center;" colspan="19">Coverage/Response</td>
          </tr>

          <tr>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">M</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">W</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">3rd G</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">Total Adult</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">Boys</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">Girls</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">Total children</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">Total </td>


          </tr>
         <?php
          if(isset( $questionsTwentyFour) && !empty( $questionsTwentyFour)){
            foreach($questionsTwentyFour as $row){
          ?>
              <tr>
              <td style="border: 1px solid black; text-align:center;" id="q24_title_origin_guidelines" class="blank-cell row_cell">{{$row['q24_title_origin_guidelines']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q24_description_change_status" class="blank-cell row_cell">{{$row['q24_description_change_status']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="men_q24" class="blank-cell row_cell">{{$row['men_q24']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
              <td style="border: 1px solid black; text-align:center;" id="women_q24" class="blank-cell row_cell">{{$row['women_q24']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="third_gender_q24" class="blank-cell row_cell">{{$row['third_gender_q24']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="boy_q24" class="blank-cell row_cell">{{$row['boy_q24']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="boys_perchantege" class="blank-cell row_cell">{{$row['boys_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="girl_q24" class="blank-cell row_cell">{{$row['girl_q24']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="girls_perchantege" class="blank-cell row_cell">{{$row['girls_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_children_by_category" class="blank-cell row_cell">{{$row['total_children_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="children_perchnatage" class="blank-cell row_cell">{{$row['children_perchnatage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_courtyard_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="totalCourtyuardMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>     
              </tr>
          <?php 
            }
          } 
        ?>







          </thead>
          <tbody></tbody>
        </table>
        <br>

        <h5>Percentage Distribution of VoTs by Gender on Total VoT Referred by all Actors
        </h5>
        <table style="width:100%; border: 1px solid black;" class="table table-bordered table-white" id="q24_all_participants">
          <thead>
          <tr>
            <td style="border: 1px solid black; text-align:center;" rowspan="2" scope="col">Category</td>
            <td style="border: 1px solid black; text-align:center;" rowspan="2" scope="col">Description of change/Status</td>
            <td style="border: 1px solid black; text-align:center;" colspan="19">Coverage/Response</td>
          </tr>

          <tr>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">M</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">W</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">3rd G</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">Total Adult</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">Boys</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">Girls</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">Total children</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">Total </td>



          </tr>

          <?php
          if(isset( $questionsTwentyFourTable2) && !empty( $questionsTwentyFourTable2)){
            foreach($questionsTwentyFourTable2 as $row){
          ?>
              <tr>
              <td style="border: 1px solid black; text-align:center;" id="q24_title_origin_guidelines" class="blank-cell row_cell">{{$row['q24_title_origin_guidelines']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q24_description_change_status" class="blank-cell row_cell">{{$row['q24_description_change_status']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="men_q24" class="blank-cell row_cell">{{$row['men_q24']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
              <td style="border: 1px solid black; text-align:center;" id="women_q24" class="blank-cell row_cell">{{$row['women_q24']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="third_gender_q24" class="blank-cell row_cell">{{$row['third_gender_q24']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="boy_q24" class="blank-cell row_cell">{{$row['boy_q24']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="boys_perchantege" class="blank-cell row_cell">{{$row['boys_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="girl_q24" class="blank-cell row_cell">{{$row['girl_q24']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="girls_perchantege" class="blank-cell row_cell">{{$row['girls_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_children_by_category" class="blank-cell row_cell">{{$row['total_children_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="children_perchnatage" class="blank-cell row_cell">{{$row['children_perchnatage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_courtyard_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="totalCourtyuardMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>     
              </tr>
          <?php 
            }
          } 
        ?>




          </thead>
          <tbody></tbody>
        </table>

        <br><br>

        <div class="container text-center">
          <div class="row">
          <div class="col-sm-6">
            <section class="content">

           

            </section>
          </div>
         
          </div>
        </div>
        </div>





      </div>


      <div class="col-md-12 question25">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">25.Were there any new (or changes to preexisting) procedures or services available for victim care at your ministry/agency/organization?
      </h3>

   
    </div>
    <div class="card-body">
          
         
         


      <table style="width:100%; border: 1px solid black;"class="table table-bordered table-white" id="q25_individual_activities">
        <thead>
          <tr>
          <td style="border: 1px solid black; text-align:center;" rowspan="2" scope="col">Protection Services</td>
            <td style="border: 1px solid black; text-align:center;" rowspan="2" scope="col">Status</td>
            <td style="border: 1px solid black; text-align:center;" colspan="19">Current Coverage of VoTs</td>
          </tr>

          <tr>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">M</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">W</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">3rd G</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">Total Adult</td>
            <td style="border: 1px solid black; text-align:center;" scope="col"  colspan="2">Boys</td>
            <td style="border: 1px solid black; text-align:center;" scope="col"  colspan="2">Girls</td>
            <td style="border: 1px solid black; text-align:center;" scope="col"  colspan="2">Total children</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">Total </td>
          </tr>
         
        <?php
          if(isset( $questionsTwentyFive) && !empty( $questionsTwentyFive)){
            foreach($questionsTwentyFive as $row){
              ?>
              <tr>
              <td style="border: 1px solid black; text-align:center;" id="protection_services_q25" class="blank-cell row_cell">{{$row['protection_services_q25']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q25_status_id" class="blank-cell row_cell">{{$row['q25_status_id']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q25_current_coverage_vots_men" class="blank-cell row_cell">{{$row['q25_current_coverage_vots_men']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
              <td style="border: 1px solid black; text-align:center;" id="q25_current_coverage_vots_women" class="blank-cell row_cell">{{$row['q25_current_coverage_vots_women']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q25_current_coverage_vots_third_gender" class="blank-cell row_cell">{{$row['q25_current_coverage_vots_third_gender']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q25_current_coverage_vots_boy" class="blank-cell row_cell">{{$row['q25_current_coverage_vots_boy']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="boys_perchantege" class="blank-cell row_cell">{{$row['boys_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q25_current_coverage_vots_girl" class="blank-cell row_cell">{{$row['q25_current_coverage_vots_girl']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="girls_perchantege" class="blank-cell row_cell">{{$row['girls_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_children_by_category" class="blank-cell row_cell">{{$row['total_children_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="children_perchnatage" class="blank-cell row_cell">{{$row['children_perchnatage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_protect_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="totalPeotedMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>     
              </tr>'
           <?php
            }
        } 
     
   ?>
        </thead>
        <tbody></tbody>
      </table>

      <b></b>
     
    
    </div>
    
    <div class="card-body">
  
    <table class="table table-bordered table-white" style="width:100%; border: 1px solid black;" id="q25_all_participants">
        <thead>
          <tr>
            <td style="border: 1px solid black; text-align:center;" rowspan="2" scope="col">Protection Services</td>
            <td style="border: 1px solid black; text-align:center;" rowspan="2" scope="col">Status</td>
            <td style="border: 1px solid black; text-align:center;" colspan="19">Current Coverage of VoTs</td>
          </tr>

          <tr>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">M</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">W</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">3rd G</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">Total Adult</td>
            <td style="border: 1px solid black; text-align:center;" scope="col"  colspan="2">Boys</td>
            <td style="border: 1px solid black; text-align:center;" scope="col"  colspan="2">Girls</td>
            <td style="border: 1px solid black; text-align:center;" scope="col"  colspan="2">Total children</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">Total </td>
          </tr>
        
       

         
        
          <?php
          if(isset( $questionsTwentyFiveTable2) && !empty( $questionsTwentyFiveTable2)){
            foreach($questionsTwentyFiveTable2 as $row){  
              ?>
              <tr>
              <td style="border: 1px solid black; text-align:center;" id="protection_services_q25" class="blank-cell row_cell">{{$row['protection_services_q25']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q25_status_id" class="blank-cell row_cell">{{$row['q25_status_id']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q25_current_coverage_vots_men" class="blank-cell row_cell">{{$row['q25_current_coverage_vots_men']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
              <td style="border: 1px solid black; text-align:center;" id="q25_current_coverage_vots_women" class="blank-cell row_cell">{{$row['q25_current_coverage_vots_women']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q25_current_coverage_vots_third_gender" class="blank-cell row_cell">{{$row['q25_current_coverage_vots_third_gender']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q25_current_coverage_vots_boy" class="blank-cell row_cell">{{$row['q25_current_coverage_vots_boy']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="boys_perchantege" class="blank-cell row_cell">{{$row['boys_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q25_current_coverage_vots_girl" class="blank-cell row_cell">{{$row['q25_current_coverage_vots_girl']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="girls_perchantege" class="blank-cell row_cell">{{$row['girls_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_children_by_category" class="blank-cell row_cell">{{$row['total_children_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="children_perchnatage" class="blank-cell row_cell">{{$row['children_perchnatage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_protect_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="totalPeotedMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>     
              </tr>
           <?php
            }
        } 
     
   ?>
       
       


   
        </thead>
        <tbody></tbody>
      </table>
         
        
        </div>

  </div>
</div>



<div class="col-md-12 question30">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">30.Were foreign victims legally entitled to the same benefits as host country nationals?

      </h3>

 
    </div>
    <div class="card-body">
          
         
   

    <table style="width:100%; border: 1px solid black;" class="table table-bordered" id="q30_individual_activities">
        <thead>
          <tr>
            <td style="border: 1px solid black; text-align:center;" rowspan="2" scope="col">Protection Services</td>
            <td style="border: 1px solid black; text-align:center;" rowspan="2" scope="col">Protection Services</td>
            <td style="border: 1px solid black; text-align:center;" colspan="19">Current Coverage of VoTs</td>
          </tr>

          <tr>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">M</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">W</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">3rd G</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">Total Adult</td>
            <td style="border: 1px solid black; text-align:center;" scope="col"  colspan="2">Boys</td>
            <td style="border: 1px solid black; text-align:center;" scope="col"  colspan="2">Girls</td>
            <td style="border: 1px solid black; text-align:center;" scope="col"  colspan="2">Total children</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">Total </td>
          </tr>
          
        </thead>
        <tbody>
          <?php
            if(isset( $questionsThirty) && !empty( $questionsThirty)){
              foreach($questionsThirty as $row){
                ?>
               
                <tr>
                <td style="border: 1px solid black; text-align:center;" id="protection_services_q30" class="blank-cell row_cell">{{$row['protection_services_q30']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="status_coverage_q30" class="blank-cell row_cell">{{$row['status_coverage_q30']}}</td>

                <td style="border: 1px solid black; text-align:center;" id="current_coverage_foreign_vots_men" class="blank-cell row_cell">{{$row['current_coverage_foreign_vots_men']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
                <td style="border: 1px solid black; text-align:center;" id="current_coverage_foreign_vots_women" class="blank-cell row_cell">{{$row['current_coverage_foreign_vots_women']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="current_coverage_foreign_vots_third_gender" class="blank-cell row_cell">{{$row['current_coverage_foreign_vots_third_gender']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="current_coverage_foreign_vots_boy" class="blank-cell row_cell">{{$row['current_coverage_foreign_vots_boy']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="boys_perchantege" class="blank-cell row_cell">{{$row['boys_perchantege']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="current_coverage_foreign_vots_girl" class="blank-cell row_cell">{{$row['current_coverage_foreign_vots_girl']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="girls_perchantege" class="blank-cell row_cell">{{$row['girls_perchantege']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="total_children_by_category" class="blank-cell row_cell">{{$row['total_children_by_category']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="children_perchnatage" class="blank-cell row_cell">{{$row['children_perchnatage']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="total_protect_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="totalProtedMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>     
                </tr>
                <?php
              }
          } 
          ?>
        </tbody>
      </table>
       <h1></h1>
       <br>
      <table style="width:100%; border: 1px solid black;" class="table table-bordered" id="q30_all_participants">
        <thead>
          <tr>
          <td style="border: 1px solid black; text-align:center;" rowspan="2" scope="col">Protection Services</td>
            <td style="border: 1px solid black; text-align:center;" rowspan="2" scope="col">Protection Services</td>
            <td style="border: 1px solid black; text-align:center;" colspan="19">Current Coverage of VoTs</td>
          </tr>

          <tr>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">M</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">W</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">3rd G</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">Total Adult</td>
            <td style="border: 1px solid black; text-align:center;" scope="col"  colspan="2">Boys</td>
            <td style="border: 1px solid black; text-align:center;" scope="col"  colspan="2">Girls</td>
            <td style="border: 1px solid black; text-align:center;" scope="col"  colspan="2">Total children</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">Total </td>
          </tr>
          
       


   
        </thead>
        <tbody>
        <?php
            if(isset( $questionsThirty) && !empty( $questionsThirty)){
              foreach($questionsThirty as $row){
                ?>
               
                <tr>
                <td style="border: 1px solid black; text-align:center;" id="protection_services_q30" class="blank-cell row_cell">{{$row['protection_services_q30']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="status_coverage_q30" class="blank-cell row_cell">{{$row['status_coverage_q30']}}</td>

                <td style="border: 1px solid black; text-align:center;" id="current_coverage_foreign_vots_men" class="blank-cell row_cell">{{$row['current_coverage_foreign_vots_men']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
                <td style="border: 1px solid black; text-align:center;" id="current_coverage_foreign_vots_women" class="blank-cell row_cell">{{$row['current_coverage_foreign_vots_women']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="current_coverage_foreign_vots_third_gender" class="blank-cell row_cell">{{$row['current_coverage_foreign_vots_third_gender']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="current_coverage_foreign_vots_boy" class="blank-cell row_cell">{{$row['current_coverage_foreign_vots_boy']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="boys_perchantege" class="blank-cell row_cell">{{$row['boys_perchantege']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="current_coverage_foreign_vots_girl" class="blank-cell row_cell">{{$row['current_coverage_foreign_vots_girl']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="girls_perchantege" class="blank-cell row_cell">{{$row['girls_perchantege']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="total_children_by_category" class="blank-cell row_cell">{{$row['total_children_by_category']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="children_perchnatage" class="blank-cell row_cell">{{$row['children_perchnatage']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="total_protect_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="totalProtedMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>     
                </tr>
                <?php
              }
          } 
          ?>
        </tbody>
      </table>

  
     
    
    </div>

    

  </div>
</div>
    

<div class="col-md-12 question31">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">31.Were foreign victims legally entitled to the same benefits as host country
        nationals?</h3>

    
    </div>
  
    <div class="card-body">
     

   
  
  <div id="31_question_view">
    <div class="card-body">
   

        <table style="width:100%; border: 1px solid black;" class="table table-bordered table-white" id="q31_individual_activities">
            <thead class="">
                <tr>
                  <th style="border: 1px solid black; text-align:center;" rowspan="2" style="text-align: center; margin: bottom 45%;">Types of Hotlines</th>
                  <th style="border: 1px solid black; text-align:center;" rowspan="2">Implementer</th>
                  <th style="border: 1px solid black; text-align:center;" rowspan="2">Hotline number</th>
                  <th style="border: 1px solid black; text-align:center;" colspan="16">Coverage</th>
                </tr>
                <tr>
                  <th style="border: 1px solid black; text-align:center;" colspan="2"></th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2"></th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2">Men</th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2">Women</th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2">3rd G</th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2">Boy</th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2">Girls</th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2">Total</th>
                </tr>
            </thead>
            <tbody>
              <?php
            if(isset( $questionsThiryOne) && !empty( $questionsThiryOne)){
            foreach($questionsThiryOne as $row){
              ?>
              <tr>
              <td style="border: 1px solid black; text-align:center;" id="q31_type" class="blank-cell row_cell">{{$row['q31_type']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q31_implementer_traffick" class="blank-cell row_cell">{{$row['q31_implementer_traffick']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q31_traffick_type_of_hotlines" class="blank-cell row_cell">{{$row['q31_traffick_type_of_hotlines']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q31_traffick_men" class="blank-cell row_cell">{{$row['q31_traffick_men']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
              <td style="border: 1px solid black; text-align:center;" id="q31_traffick_women" class="blank-cell row_cell">{{$row['q31_traffick_women']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q31_traffick_third_gender" class="blank-cell row_cell">{{$row['q31_traffick_third_gender']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q31_traffick_boys" class="blank-cell row_cell">{{$row['q31_traffick_boys']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="boys_perchantege" class="blank-cell row_cell">{{$row['boys_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q31_traffick_girls" class="blank-cell row_cell">{{$row['q31_traffick_girls']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="girls_perchantege" class="blank-cell row_cell">{{$row['girls_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_children_by_category" class="blank-cell row_cell">{{$row['total_children_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="children_perchnatage" class="blank-cell row_cell">{{$row['children_perchnatage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_protect_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="totalProtedMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>     
              </tr>
            <?php
            }
        } 
        ?>
              </tbody>
          </table>

          <br>
          <table style="width:100%; border: 1px solid black;" class="table table-bordered table-white" id="q31_all_participants">
            <thead class="">
                <tr>
                  <th style="border: 1px solid black; text-align:center;" rowspan="2" style="text-align: center; margin: bottom 45%;">Types of Hotlines</th>
                  <th style="border: 1px solid black; text-align:center;" rowspan="2">Implementer</th>
                  <th style="border: 1px solid black; text-align:center;" rowspan="2">Hotline number</th>
                  <th style="border: 1px solid black; text-align:center;" colspan="16">Coverage</th>
                </tr>
                <tr>
                  <th style="border: 1px solid black; text-align:center;" colspan="2"></th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2"></th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2">Men</th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2">Women</th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2">3rd G</th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2">Boy</th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2">Girls</th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2">Total</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if(isset( $questionsThiryOneTable2) && !empty( $questionsThiryOneTable2)){
            foreach($questionsThiryOneTable2 as $row){
              ?>
              <tr>
              <td style="border: 1px solid black; text-align:center;" id="q31_type" class="blank-cell row_cell">{{$row['q31_type']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q31_implementer_traffick" class="blank-cell row_cell">{{$row['q31_implementer_traffick']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q31_traffick_type_of_hotlines" class="blank-cell row_cell">{{$row['q31_traffick_type_of_hotlines']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q31_traffick_men" class="blank-cell row_cell">{{$row['q31_traffick_men']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
              <td style="border: 1px solid black; text-align:center;" id="q31_traffick_women" class="blank-cell row_cell">{{$row['q31_traffick_women']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q31_traffick_third_gender" class="blank-cell row_cell">{{$row['q31_traffick_third_gender']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q31_traffick_boys" class="blank-cell row_cell">{{$row['q31_traffick_boys']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="boys_perchantege" class="blank-cell row_cell">{{$row['boys_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q31_traffick_girls" class="blank-cell row_cell">{{$row['q31_traffick_girls']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="girls_perchantege" class="blank-cell row_cell">{{$row['girls_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_children_by_category" class="blank-cell row_cell">{{$row['total_children_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="children_perchnatage" class="blank-cell row_cell">{{$row['children_perchnatage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_protect_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="totalProtedMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>     
              </tr>
            <?php
            }
        } 
        ?>
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

  
    </div>
    <div class="card-body">
    
      

    <table class="table table-bordered" style="width:100%; border: 1px solid black;" id="q32_individual_activities">
     
        <thead>
          <tr>
            <th rowspan="2"style="border: 1px solid black; text-align:center;" >Types of Trafficking</th>
            <th colspan="16" style="border: 1px solid black; text-align:center;" style="text-align: left">VoT participating in investigation/prosecution</th>
          </tr>
          <tr>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Men</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Women</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">3rd G</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Total Adult</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Boys</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Girls</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Total Childen</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Total </th>

          </tr>
        </thead>
        <tbody>
         
        <?php
        if(isset( $questionsThirtyTwo) && !empty( $questionsThirtyTwo)){
            foreach($questionsThirtyTwo as $row){
              ?>
              <tr>
              <td style="border: 1px solid black; text-align:center;" id="q32_type" class="blank-cell row_cell">{{$row['q32_type']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q32_internal_trafficking_men" class="blank-cell row_cell">{{$row['q32_internal_trafficking_men']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
              <td style="border: 1px solid black; text-align:center;" id="q32_trafficking_women" class="blank-cell row_cell">{{$row['q32_trafficking_women']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q32_trafficking_third_gender" class="blank-cell row_cell">{{$row['q32_trafficking_third_gender']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q32_trafficking_boy" class="blank-cell row_cell">{{$row['q32_trafficking_boy']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="boys_perchantege" class="blank-cell row_cell">{{$row['boys_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q32_trafficking_girl" class="blank-cell row_cell">{{$row['q32_trafficking_girl']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="girls_perchantege" class="blank-cell row_cell">{{$row['girls_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_children_by_category" class="blank-cell row_cell">{{$row['total_children_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="children_perchnatage" class="blank-cell row_cell">{{$row['children_perchnatage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_courtyard_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="totalCourtyuardMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>     
              </tr>
              <?php
            }
        } 
         ?>
          
        </tbody>
      </table>
      <br><br>

      <table class="table table-bordered" style="width:100%; border: 1px solid black;" id="q32_all_participants">
      
        <thead>
          <tr>
            <th rowspan="2" style="border: 1px solid black; text-align:center;">Types of Trafficking</th>
            <th colspan="16" style="border: 1px solid black; text-align:center;" style="text-align: left">VoT participating in investigation/prosecution</th>
          </tr>
          <tr>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Men</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Women</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">3rd G</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Total Adult</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Boys</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Girls</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Total Childen</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Total </th>

          </tr>
        </thead>
        <tbody>
         
        <?php
        if(isset( $questionsThirtyTwo) && !empty( $questionsThirtyTwo)){
            foreach($questionsThirtyTwo as $row){
              ?>
              <tr>
              <td style="border: 1px solid black; text-align:center;" id="q32_type" class="blank-cell row_cell">{{$row['q32_type']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q32_internal_trafficking_men" class="blank-cell row_cell">{{$row['q32_internal_trafficking_men']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
              <td style="border: 1px solid black; text-align:center;" id="q32_trafficking_women" class="blank-cell row_cell">{{$row['q32_trafficking_women']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q32_trafficking_third_gender" class="blank-cell row_cell">{{$row['q32_trafficking_third_gender']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q32_trafficking_boy" class="blank-cell row_cell">{{$row['q32_trafficking_boy']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="boys_perchantege" class="blank-cell row_cell">{{$row['boys_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q32_trafficking_girl" class="blank-cell row_cell">{{$row['q32_trafficking_girl']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="girls_perchantege" class="blank-cell row_cell">{{$row['girls_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_children_by_category" class="blank-cell row_cell">{{$row['total_children_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="children_perchnatage" class="blank-cell row_cell">{{$row['children_perchnatage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_courtyard_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="totalCourtyuardMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>     
              </tr>
              <?php
            }
        } 
         ?>
        
        </tbody>
      </table>
      
   

    </div>
  </div>
</div>


<div class="col-md-12 question33">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">33.Were participating victims provided any forms of witness protection? If “Yes’, how many?
      </h3>

  
    </div>
    <div class="card-body">
    
      

    <table class="table table-bordered" style="width:100%; border: 1px solid black;" id="q33_individual_activities">
  
        <thead>
          <tr>
            <th style="border: 1px solid black; text-align:center;"rowspan="2" >Types of Trafficking</th>
            <th style="border: 1px solid black; text-align:center;"colspan="16" style="text-align: left">VoT participating in investigation/prosecution</th>
          </tr>
          <tr>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Men</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Women</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">3rd G</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Total Adult</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Boys</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Girls</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Total Childen</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Total </th>

          </tr>
        </thead>
        <tbody>
   
         <?php
         if(isset( $questionsThirtyThree) && !empty( $questionsThirtyThree)){
          foreach($questionsThirtyThree as $row){
            ?>
            <tr>
            <td style="border: 1px solid black; text-align:center;"id="q33_type" class="blank-cell row_cell">{{$row['q33_type']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="q33_trafficking_men" class="blank-cell row_cell">{{$row['q33_trafficking_men']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
            <td style="border: 1px solid black; text-align:center;"id="q33_trafficking_women" class="blank-cell row_cell">{{$row['q33_trafficking_women']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="q33_trafficking_third_gender" class="blank-cell row_cell">{{$row['q33_trafficking_third_gender']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="q33_trafficking_boy" class="blank-cell row_cell">{{$row['q33_trafficking_boy']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="boys_perchantege" class="blank-cell row_cell">{{$row['boys_perchantege']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="q33_trafficking_girl" class="blank-cell row_cell">{{$row['q33_trafficking_girl']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="girls_perchantege" class="blank-cell row_cell">{{$row['girls_perchantege']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="total_children_by_category" class="blank-cell row_cell">{{$row['total_children_by_category']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="children_perchnatage" class="blank-cell row_cell">{{$row['children_perchnatage']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="total_courtyard_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="totalCourtyuardMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>     
            </tr>
            <?php
          }
      } 
         ?>
          
       
        </tbody>
      </table>
      <br><br>

      <table class="table table-bordered" style="width:100%; border: 1px solid black;" id="q33_all_participants">

        <thead>
          <tr>
            <th rowspan="2" style="border: 1px solid black; text-align:center;">Types of Trafficking</th>
            <th colspan="16" style="border: 1px solid black; text-align:center;"style="text-align: left">VoT participating in investigation/prosecution</th>
          </tr>
          <tr>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Men</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Women</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">3rd G</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Total Adult</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Boys</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Girls</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Total Childen</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Total </th>

          </tr>
        </thead>
        <tbody>
    
      
        <?php
         if(isset( $questionsThirtyThreeTable2) && !empty( $questionsThirtyThreeTable2)){
          foreach($questionsThirtyThreeTable2 as $row){
            ?>
            <tr>
            <td style="border: 1px solid black; text-align:center;"id="q33_type" class="blank-cell row_cell">{{$row['q33_type']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="q33_trafficking_men" class="blank-cell row_cell">{{$row['q33_trafficking_men']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
            <td style="border: 1px solid black; text-align:center;"id="q33_trafficking_women" class="blank-cell row_cell">{{$row['q33_trafficking_women']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="q33_trafficking_third_gender" class="blank-cell row_cell">{{$row['q33_trafficking_third_gender']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="q33_trafficking_boy" class="blank-cell row_cell">{{$row['q33_trafficking_boy']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="boys_perchantege" class="blank-cell row_cell">{{$row['boys_perchantege']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="q33_trafficking_girl" class="blank-cell row_cell">{{$row['q33_trafficking_girl']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="girls_perchantege" class="blank-cell row_cell">{{$row['girls_perchantege']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="total_children_by_category" class="blank-cell row_cell">{{$row['total_children_by_category']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="children_perchnatage" class="blank-cell row_cell">{{$row['children_perchnatage']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="total_courtyard_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
            <td style="border: 1px solid black; text-align:center;"id="totalCourtyuardMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>     
            </tr>
            <?php
          }
      } 
         ?>
         
       
        </tbody>
      </table>
      
   

    </div>
  </div>
</div>


<div class="col-md-12 question34">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">34.Did your ministry/agency/organization take any steps to avoid re-traumatization of victims in investigation and prosecution? Please describe.
    </h3>

    </div>
    <div class="card-body">
    

    <table class="table table-bordered table-white" style="width:100%; border: 1px solid black;" id="q34_individual_activities">
   
        <thead>
          <tr>
            <th rowspan="2" style="border: 1px solid black; text-align:center;">Type of Support </th>
            <th rowspan="2" style="border: 1px solid black; text-align:center;"scope="col">Types of Assistance</th>
            <th colspan="18" style="border: 1px solid black; text-align:center;">Coverage of VoT Received Assistance to avoid Re-traumatization</th>
          </tr>
          <tr>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Men</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Women</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">3rd G</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Total Adult</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Boys</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Girls</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Total Childen</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Total </th>

          </tr>
        </thead>
        <tbody>
          <?php
        if(isset( $questionsThirtyFour) && !empty( $questionsThirtyFour)){
            foreach($questionsThirtyFour as $row){
              ?>
              <tr>
              <td style="border: 1px solid black; text-align:center;"id="location_id_q34" class="blank-cell row_cell">{{$row['location_id_q34']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="types_assistance_q34" class="blank-cell row_cell">{{$row['types_assistance_q34']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q34_coverage_men" class="blank-cell row_cell">{{$row['q34_coverage_men']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
              <td style="border: 1px solid black; text-align:center;" id="q34_coverage_women" class="blank-cell row_cell">{{$row['q34_coverage_women']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q34_coverage_third_gender" class="blank-cell row_cell">{{$row['q34_coverage_third_gender']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q34_coverage_boy" class="blank-cell row_cell">{{$row['q34_coverage_boy']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="boys_perchantege" class="blank-cell row_cell">{{$row['boys_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q34_coverage_girl" class="blank-cell row_cell">{{$row['q34_coverage_girl']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="girls_perchantege" class="blank-cell row_cell">{{$row['girls_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_children_by_category" class="blank-cell row_cell">{{$row['total_children_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="children_perchnatage" class="blank-cell row_cell">{{$row['children_perchnatage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_courtyard_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="totalCourtyuardMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>     
              </tr>
            <?php
            }
        } 
     ?>
        </tbody>
    </table>
      <br><br>

      <table class="table table-bordered table-white" style="width:100%; border: 1px solid black;" id="q34_all_participants">
   
   <thead>
     <tr>
     <th rowspan="2"style="border: 1px solid black; text-align:center;" >Type of Support </th>
            <th rowspan="2" style="border: 1px solid black; text-align:center;" scope="col">Types of Assistance</th>
            <th colspan="18" style="border: 1px solid black; text-align:center;" style="text-align: left">Coverage of VoT Received Assistance to avoid Re-traumatization</th>
     </tr>
     <tr>
       <th style="border: 1px solid black; text-align:center;"  colspan="2">Men</th>
       <th style="border: 1px solid black; text-align:center;"  colspan="2">Women</th>
       <th style="border: 1px solid black; text-align:center;"  colspan="2">3rd G</th>
       <th style="border: 1px solid black; text-align:center;"  colspan="2">Total Adult</th>
       <th style="border: 1px solid black; text-align:center;"  colspan="2">Boys</th>
       <th style="border: 1px solid black; text-align:center;"  colspan="2">Girls</th>
       <th style="border: 1px solid black; text-align:center;"  colspan="2">Total Childen</th>
       <th style="border: 1px solid black; text-align:center;"  colspan="2">Total </th>

     </tr>
   </thead>
   <tbody>
   <?php
        if(isset( $questionsThirtyFourTable2) && !empty( $questionsThirtyFourTable2)){
            foreach($questionsThirtyFourTable2 as $row){
              ?>
              <tr>
              <td style="border: 1px solid black; text-align:center;"id="location_id_q34" class="blank-cell row_cell">{{$row['location_id_q34']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="types_assistance_q34" class="blank-cell row_cell">{{$row['types_assistance_q34']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q34_coverage_men" class="blank-cell row_cell">{{$row['q34_coverage_men']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
              <td style="border: 1px solid black; text-align:center;" id="q34_coverage_women" class="blank-cell row_cell">{{$row['q34_coverage_women']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q34_coverage_third_gender" class="blank-cell row_cell">{{$row['q34_coverage_third_gender']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q34_coverage_boy" class="blank-cell row_cell">{{$row['q34_coverage_boy']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="boys_perchantege" class="blank-cell row_cell">{{$row['boys_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q34_coverage_girl" class="blank-cell row_cell">{{$row['q34_coverage_girl']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="girls_perchantege" class="blank-cell row_cell">{{$row['girls_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_children_by_category" class="blank-cell row_cell">{{$row['total_children_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="children_perchnatage" class="blank-cell row_cell">{{$row['children_perchnatage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_courtyard_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="totalCourtyuardMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>     
              </tr>
            <?php
            }
        } 
     ?>
     
   
   </tbody>
 </table>

    </div>
  </div>
</div>


<div class="col-md-12 question36">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">36.Please list the number of individuals or cases, investigation, prosecution,
        or conviction for sex trafficking, labour trafficking/forced labour and other forms of trafficking
        (e.g.
        organ trafficking). </h3>

   
    </div>
    <div class="card-body">
      <h3>Investigations</h3>
   
      <table class="table" cellpadding=0 celspecing=0 width="100%" style="width:100%; border: 1px solid black;" id="q36_individual_activities"> 
    
      <thead>
          <tr>
            <th rowspan="3" style="border: 1px solid black; text-align:center;">Type of TIP Cases investigated </th>
            <th rowspan="3" style="border: 1px solid black; text-align:center;" scope="col">Category of coverage</th>
            <th colspan="16" style="border: 1px solid black; text-align:center;"></th>
          </tr>
            <tr>
            <th style="border: 1px solid black; text-align:center;" colspan="2"></th>
            <th style="border: 1px solid black; text-align:center;" colspan="2"></th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Men</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Women</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">3rd G</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Boys</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Girls</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Total</th>

          </tr>
        </thead>
       
         <tbody>
         <?php
         if(isset( $questionsThirtySix) && !empty( $questionsThirtySix)){
            foreach($questionsThirtySix as $row){
              ?>
               <tr>
              <td style="border: 1px solid black; text-align:center;" id="q36_type_cases_investigated" class="blank-cell row_cell">{{$row['q36_type_cases_investigated']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q36_category_coverage" class="blank-cell row_cell">{{$row['q36_category_coverage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q36_new_report_sex_trafficking_cases_men" class="blank-cell row_cell">{{$row['q36_new_report_sex_trafficking_cases_men']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
              <td style="border: 1px solid black; text-align:center;" id="q36_new_report_sex_trafficking_cases_women" class="blank-cell row_cell">{{$row['q36_new_report_sex_trafficking_cases_women']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q36_new_report_sex_trafficking_cases_third_gender" class="blank-cell row_cell">{{$row['q36_new_report_sex_trafficking_cases_third_gender']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q36_new_report_sex_trafficking_cases_boy" class="blank-cell row_cell">{{$row['q36_new_report_sex_trafficking_cases_boy']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="boys_perchantege" class="blank-cell row_cell">{{$row['boys_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q36_new_report_sex_trafficking_cases_girl" class="blank-cell row_cell">{{$row['q36_new_report_sex_trafficking_cases_girl']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="girls_perchantege" class="blank-cell row_cell">{{$row['girls_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_children_by_category" class="blank-cell row_cell">{{$row['total_children_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="children_perchnatage" class="blank-cell row_cell">{{$row['children_perchnatage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_protect_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="totalProtedMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>     
              </tr>
           <?php
            }
        } 

        ?>
         </tbody>

      </table>
      <br><br>
      <table class="table table-bordered table-white" cellpadding=0 style="width:100%; border: 1px solid black;" id="q36_all_participants"> 
      <thead>
          <tr>
            <th rowspan="3" style="border: 1px solid black; text-align:center;">Type of TIP Cases investigated </th>
            <th rowspan="3" style="border: 1px solid black; text-align:center;" scope="col">Category of coverage</th>
            <th colspan="16" style="border: 1px solid black; text-align:center;"></th>
          </tr>
            <tr>
            <th style="border: 1px solid black; text-align:center;" colspan="2"></th>
            <th style="border: 1px solid black; text-align:center;" colspan="2"></th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Men</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Women</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">3rd G</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Boys</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Girls</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Total</th>

          </tr>
        </thead>  
       
         <tbody>
         <?php
         if(isset( $questionsThirtySix) && !empty( $questionsThirtySix)){
            foreach($questionsThirtySix as $row){
              ?>
               <tr>
              <td style="border: 1px solid black; text-align:center;" id="q36_type_cases_investigated" class="blank-cell row_cell">{{$row['q36_type_cases_investigated']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q36_category_coverage" class="blank-cell row_cell">{{$row['q36_category_coverage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q36_new_report_sex_trafficking_cases_men" class="blank-cell row_cell">{{$row['q36_new_report_sex_trafficking_cases_men']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
              <td style="border: 1px solid black; text-align:center;" id="q36_new_report_sex_trafficking_cases_women" class="blank-cell row_cell">{{$row['q36_new_report_sex_trafficking_cases_women']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q36_new_report_sex_trafficking_cases_third_gender" class="blank-cell row_cell">{{$row['q36_new_report_sex_trafficking_cases_third_gender']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q36_new_report_sex_trafficking_cases_boy" class="blank-cell row_cell">{{$row['q36_new_report_sex_trafficking_cases_boy']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="boys_perchantege" class="blank-cell row_cell">{{$row['boys_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q36_new_report_sex_trafficking_cases_girl" class="blank-cell row_cell">{{$row['q36_new_report_sex_trafficking_cases_girl']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="girls_perchantege" class="blank-cell row_cell">{{$row['girls_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_children_by_category" class="blank-cell row_cell">{{$row['total_children_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="children_perchnatage" class="blank-cell row_cell">{{$row['children_perchnatage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_protect_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="totalProtedMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>     
              </tr>
           <?php
            }
        } 

        ?>
         </tbody>

      </table>

    </div>
  </div>
</div>

<div class="col-md-12 question37">
                <div class="card card-outline collapsed-card">
                  <div class="card-header">
                    <h3 class="card-title">37. Please list the number of individuals or cases prosecution for sex
                      trafficking, labour trafficking/forced labour and other forms of trafficking (e.g. organ
                      trafficking). </h3>
  
                 
                  </div>
                <div class="card-body">
                    <h3>Prosecution</h3>
                   
                    <table class="table" style="width:100%; border: 1px solid black;" id="q37_individual_activities">
                      
 
     
                      <!-- <thead>
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
                      </thead> -->
                      <thead>
                        <tr>
                          <th style="border: 1px solid black; text-align:center;" rowspan="3" >Type of TIP Cases investigated </th>
                          <th style="border: 1px solid black; text-align:center;" rowspan="3" style="text-align: left" scope="col">Category of coverage</th>
                          <th style="border: 1px solid black; text-align:center;" colspan="16"></th>
                        </tr>
                          <tr>
                          <th style="border: 1px solid black; text-align:center;" colspan="2"></th>
                          <th style="border: 1px solid black; text-align:center;" colspan="2"></th>
                          <th style="border: 1px solid black; text-align:center;" colspan="2">Men</th>
                          <th style="border: 1px solid black; text-align:center;" colspan="2">Women</th>
                          <th style="border: 1px solid black; text-align:center;" colspan="2">3rd G</th>
                          <th style="border: 1px solid black; text-align:center;" colspan="2">Boys</th>
                          <th style="border: 1px solid black; text-align:center;" colspan="2">Girls</th>
                          <th style="border: 1px solid black; text-align:center;" colspan="2">Total</th>

                        </tr>
                      </thead>
     
                      <tbody>
                        <?php
  if(isset( $questionsThirtySeven) && !empty( $questionsThirtySeven)){
    foreach($questionsThirtySeven as $row){
      ?>
       <tr>
      <td style="border: 1px solid black; text-align:center;" id="q37_type_cases_investigated" class="blank-cell row_cell">{{$row['q37_type_cases_investigated']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="q37_category_coverage" class="blank-cell row_cell">{{$row['q37_category_coverage']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="q37_new_report_sex_trafficking_cases_men" class="blank-cell row_cell">{{$row['q37_new_report_sex_trafficking_cases_men']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
      <td style="border: 1px solid black; text-align:center;" id="q37_new_report_sex_trafficking_cases_women" class="blank-cell row_cell">{{$row['q37_new_report_sex_trafficking_cases_women']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="q37_new_report_sex_trafficking_cases_third_gender" class="blank-cell row_cell">{{$row['q37_new_report_sex_trafficking_cases_third_gender']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="q37_new_report_sex_trafficking_cases_boy" class="blank-cell row_cell">{{$row['q37_new_report_sex_trafficking_cases_boy']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="boys_perchantege" class="blank-cell row_cell">{{$row['boys_perchantege']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="q37_new_report_sex_trafficking_cases_girl" class="blank-cell row_cell">{{$row['q37_new_report_sex_trafficking_cases_girl']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="girls_perchantege" class="blank-cell row_cell">{{$row['girls_perchantege']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="total_children_by_category" class="blank-cell row_cell">{{$row['total_children_by_category']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="children_perchnatage" class="blank-cell row_cell">{{$row['children_perchnatage']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="total_protect_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="totalProtedMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>     
      </tr>
   <?php
    }
    } 
                        ?>
                      </tbody>

                    </table>

                    <br><br>
                  <table class="table table-bordered table-white" style="width:100%; border: 1px solid black;" id="q37_all_participants">
                      
 
     
                      <!-- <thead>
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
                      </thead> -->
                      <thead>
                        <tr>
                          <th rowspan="3" style="border: 1px solid black; text-align:center;">Type of TIP Cases investigated </th>
                          <th rowspan="3" style="border: 1px solid black; text-align:center;" scope="col">Category of coverage</th>
                          <th colspan="16" style="border: 1px solid black; text-align:center;"></th>
                        </tr>
                          <tr>
                          <th style="border: 1px solid black; text-align:center;" colspan="2"></th>
                          <th style="border: 1px solid black; text-align:center;" colspan="2"></th>
                          <th style="border: 1px solid black; text-align:center;" colspan="2">Men</th>
                          <th style="border: 1px solid black; text-align:center;" colspan="2">Women</th>
                          <th style="border: 1px solid black; text-align:center;" colspan="2">3rd G</th>
                          <th style="border: 1px solid black; text-align:center;" colspan="2">Boys</th>
                          <th style="border: 1px solid black; text-align:center;" colspan="2">Girls</th>
                          <th style="border: 1px solid black; text-align:center;" colspan="2">Total</th>

                        </tr>
                      </thead>
     
                      <tbody>

                      <?php
  if(isset( $questionsThirtySevenTable2) && !empty( $questionsThirtySevenTable2)){
    foreach($questionsThirtySevenTable2 as $row){
      ?>
       <tr>
      <td style="border: 1px solid black; text-align:center;" id="q37_type_cases_investigated" class="blank-cell row_cell">{{$row['q37_type_cases_investigated']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="q37_category_coverage" class="blank-cell row_cell">{{$row['q37_category_coverage']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="q37_new_report_sex_trafficking_cases_men" class="blank-cell row_cell">{{$row['q37_new_report_sex_trafficking_cases_men']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
      <td style="border: 1px solid black; text-align:center;" id="q37_new_report_sex_trafficking_cases_women" class="blank-cell row_cell">{{$row['q37_new_report_sex_trafficking_cases_women']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="q37_new_report_sex_trafficking_cases_third_gender" class="blank-cell row_cell">{{$row['q37_new_report_sex_trafficking_cases_third_gender']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="q37_new_report_sex_trafficking_cases_boy" class="blank-cell row_cell">{{$row['q37_new_report_sex_trafficking_cases_boy']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="boys_perchantege" class="blank-cell row_cell">{{$row['boys_perchantege']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="q37_new_report_sex_trafficking_cases_girl" class="blank-cell row_cell">{{$row['q37_new_report_sex_trafficking_cases_girl']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="girls_perchantege" class="blank-cell row_cell">{{$row['girls_perchantege']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="total_children_by_category" class="blank-cell row_cell">{{$row['total_children_by_category']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="children_perchnatage" class="blank-cell row_cell">{{$row['children_perchnatage']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="total_protect_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
      <td style="border: 1px solid black; text-align:center;" id="totalProtedMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>     
      </tr>
   <?php
    }
    } 
                        ?>
                      </tbody>

                  </table>
  
              </div>
               </div>
           </div>


</div>  


<div class="col-md-12 question40">
      <div class="card card-outline collapsed-card">
          <div class="card-header">
            <h3 class="card-title">40. Conviction Status</h3>

          
          </div>
          <div class="card-body">
            <h3>Conviction Status</h3>
        
            <table class="table table-bordered table-white"  cellpadding=0 celspecing=0 width="100%" style="width:100%; border: 1px solid black;" id="q40_individual_activities">
              <!-- <thead>
              <tr>
                <td colspan="2"> Conviction Status
                </td>
                <td>M</td>
                <td>W</td>
                <td>3rd G</td>
                <td>B</td>
                <td>G</td>
                <td>Total</td>
              </tr>
              </thead> -->
              <thead>
                <tr>
                  <th rowspan="3" style="border: 1px solid black; text-align:center;">Conviction Status </th>
                  <th rowspan="3" style="border: 1px solid black; text-align:center;" scope="col">Category of coverage</th>
                  <th colspan="16" style="border: 1px solid black; text-align:center;"></th>
                </tr>
                  <tr>
                  <th style="border: 1px solid black; text-align:center;" colspan="2"></th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2"></th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2">Men</th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2">Women</th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2">3rd G</th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2">Boys</th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2">Girls</th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2">Total</th>

                </tr>
              </thead>  
            
              <tbody>
                <?php
              if(isset( $questionsFourty) && !empty( $questionsFourty)){
                foreach($questionsFourty as $row){
                  ?>
                  <tr>
                  <td style="border: 1px solid black; text-align:center;" id="q40_type_cases_investigated" class="blank-cell row_cell">{{$row['q40_type_cases_investigated']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="q40_category_coverage" class="blank-cell row_cell">{{$row['q40_category_coverage']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="q40_new_report_sex_trafficking_cases_men" class="blank-cell row_cell">{{$row['q40_new_report_sex_trafficking_cases_men']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
                  <td style="border: 1px solid black; text-align:center;" id="q40_new_report_sex_trafficking_cases_women" class="blank-cell row_cell">{{$row['q40_new_report_sex_trafficking_cases_women']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="q40_new_report_sex_trafficking_cases_third_gender" class="blank-cell row_cell">{{$row['q40_new_report_sex_trafficking_cases_third_gender']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="q40_new_report_sex_trafficking_cases_boy" class="blank-cell row_cell">{{$row['q40_new_report_sex_trafficking_cases_boy']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="boys_perchantege" class="blank-cell row_cell">{{$row['boys_perchantege']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="q40_new_report_sex_trafficking_cases_girl" class="blank-cell row_cell">{{$row['q40_new_report_sex_trafficking_cases_girl']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="girls_perchantege" class="blank-cell row_cell">{{$row['girls_perchantege']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="total_children_by_category" class="blank-cell row_cell">{{$row['total_children_by_category']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="children_perchnatage" class="blank-cell row_cell">{{$row['children_perchnatage']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="total_protect_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="totalProtedMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>     
                  </tr>
              <?php
                  }
                } 

                ?>

              </tbody>
            </table>
            <br><br>
            <table class="table table-bordered table-white" cellpadding=0 celspecing=0 width="100%" style="width:100%; border: 1px solid black;" id="q40_all_participants">
          
              <thead>
                <tr>
                  <th rowspan="3" style="border: 1px solid black; text-align:center;">Conviction Status </th>
                  <th rowspan="3" style="border: 1px solid black; text-align:center;" scope="col">Category of coverage</th>
                  <th colspan="16" style="border: 1px solid black; text-align:center;"></th>
                </tr>
                <tr>
                  <th style="border: 1px solid black; text-align:center;" colspan="2"></th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2"></th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2">Men</th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2">Women</th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2">3rd G</th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2">Boys</th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2">Girls</th>
                  <th style="border: 1px solid black; text-align:center;" colspan="2">Total</th>

                </tr>
              </thead>  
          
              <tbody>
              <?php
              if(isset( $questionsFourtyTable2) && !empty( $questionsFourtyTable2)){
                foreach($questionsFourtyTable2 as $row){
                  ?>
                  <tr>
                  <td style="border: 1px solid black; text-align:center;" id="q40_type_cases_investigated" class="blank-cell row_cell">{{$row['q40_type_cases_investigated']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="q40_category_coverage" class="blank-cell row_cell">{{$row['q40_category_coverage']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="q40_new_report_sex_trafficking_cases_men" class="blank-cell row_cell">{{$row['q40_new_report_sex_trafficking_cases_men']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
                  <td style="border: 1px solid black; text-align:center;" id="q40_new_report_sex_trafficking_cases_women" class="blank-cell row_cell">{{$row['q40_new_report_sex_trafficking_cases_women']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="q40_new_report_sex_trafficking_cases_third_gender" class="blank-cell row_cell">{{$row['q40_new_report_sex_trafficking_cases_third_gender']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="q40_new_report_sex_trafficking_cases_boy" class="blank-cell row_cell">{{$row['q40_new_report_sex_trafficking_cases_boy']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="boys_perchantege" class="blank-cell row_cell">{{$row['boys_perchantege']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="q40_new_report_sex_trafficking_cases_girl" class="blank-cell row_cell">{{$row['q40_new_report_sex_trafficking_cases_girl']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="girls_perchantege" class="blank-cell row_cell">{{$row['girls_perchantege']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="total_children_by_category" class="blank-cell row_cell">{{$row['total_children_by_category']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="children_perchnatage" class="blank-cell row_cell">{{$row['children_perchnatage']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="total_protect_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="totalProtedMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>     
                  </tr>
              <?php
                  }
                } 

                ?>
            
            </tbody>
            </table>
          </div>
  
      </div>
</div>



<div class="col-md-12 question42">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">42.Conviction of Internal Trafficking by Division</h3>

     
    </div>
    <div class="card-body">
      <h2>Conviction of Internal Trafficking by Division</h2>
      <h3>Total number of persons convicted of trafficking for Sexual exploitation</h3>
     
      <input type="hidden" name="q42_type[]" value="1">
      <table id="q42_individual_activities" style="width:100%; border: 1px solid black;" class="table table-bordered text-center">
        <thead>
          <tr>
            <th style="border: 1px solid black; text-align:center;" rowspan="2"> Type</th>
            <th style="border: 1px solid black; text-align:center;" rowspan="2">Division</th>
          </tr>
          <tr>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Male</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Female</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">3rd G</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Total</th>
          </tr>
        </thead>
        <tbody>
      
        <?php
         if(isset( $questionsFortyTwo) && !empty( $questionsFortyTwo)){
          foreach($questionsFortyTwo as $row){
            ?>
            <tr>
            <td style="border: 1px solid black; text-align:center;" scope="col" id="q42_type" class="blank-cell row_cell">{{$row['q42_type']}}</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" id="q42_sexual_exploitation_division_id" class="blank-cell row_cell">{{$row['q42_sexual_exploitation_division_id']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="q42_sexual_men" class="blank-cell row_cell">{{$row['q42_sexual_men']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
            <td style="border: 1px solid black; text-align:center;" id="q42_sexual_women" class="blank-cell row_cell">{{$row['q42_sexual_women']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="q42_sexual_third_gender" class="blank-cell row_cell">{{$row['q42_sexual_third_gender']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
         
            </tr>
         <?php
          }
      } 
        ?>
        </tbody>
      </table>
      <br><br>
      <table style="width:100%; border: 1px solid black;" id="q42_all_participants" class="table table-bordered text-center">
        <thead>
          <tr>
            <th style="border: 1px solid black; text-align:center;" rowspan="2"> Type</th>
            <th style="border: 1px solid black; text-align:center;" rowspan="2">Division</th>
          </tr>
          <tr>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Male</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Female</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">3rd G</th>
            <th style="border: 1px solid black; text-align:center;" colspan="2">Total</th>
          </tr>
        </thead>
        <tbody>
      
        <?php
         if(isset( $questionsFortyTwo) && !empty( $questionsFortyTwo)){
          foreach($questionsFortyTwo as $row){
            ?>
            <tr>
            <td style="border: 1px solid black; text-align:center;" scope="col" id="q42_type" class="blank-cell row_cell">{{$row['q42_type']}}</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" id="q42_sexual_exploitation_division_id" class="blank-cell row_cell">{{$row['q42_sexual_exploitation_division_id']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="q42_sexual_men" class="blank-cell row_cell">{{$row['q42_sexual_men']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
            <td style="border: 1px solid black; text-align:center;" id="q42_sexual_women" class="blank-cell row_cell">{{$row['q42_sexual_women']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="q42_sexual_third_gender" class="blank-cell row_cell">{{$row['q42_sexual_third_gender']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
            <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
         
            </tr>
         <?php
          }
      } 
        ?>
        </tbody>
      </table>
  </div>
      
  
    </div>
  </div>
</div>


<div class="col-md-12 question44">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">44.Did any allegedly complicit officials face criminal investigations,
            prosecutions, convictions, or sentencing?</h3>

         
        </div>
        <div class="card-body">
       
          <table class="table table-bordered table-white" style="width:100%; border: 1px solid black;" id="question44">
            <thead >
        
              <tr>
                 <th style="border: 1px solid black; text-align:center;" rowspan="2">Ministry/Department</th>
                 <th style="border: 1px solid black; text-align:center;" colspan="8">Number of Official Accused</th>
               </tr> 
               <tr> 
                 <th style="border: 1px solid black; text-align:center;"  colspan="2">Men</th> 
                 <th style="border: 1px solid black; text-align:center;"  colspan="2">Women</th>  
                 <th style="border: 1px solid black; text-align:center;"  colspan="2">3 rd G</th> 
                 <th style="border: 1px solid black; text-align:center;"  colspan="2">Total Adult</th>
               </tr>

            

            </thead>
            <tbody>
              <?php
               if(isset( $questionsFortyFour) && !empty( $questionsFortyFour)){
                foreach($questionsFortyFour as $row){
                  ?>
                  <tr>
                  
                  <td style="border: 1px solid black; text-align:center;" id="ministry_department" class="blank-cell row_cell">{{$row['ministry_department']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="number_official_accused_men" class="blank-cell row_cell">{{$row['number_official_accused_men']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
                  <td style="border: 1px solid black; text-align:center;" id="number_official_accused_women" class="blank-cell row_cell">{{$row['number_official_accused_women']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="number_official_accused_third_gender" class="blank-cell row_cell">{{$row['number_official_accused_third_gender']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="percentage_third_gender" class="blank-cell row_cell">{{$row['percentage_third_gender']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td> 
                  </tr>';
                <?php
                }
            } 
              ?>
            </tbody>
          </table>
          <br><br>
          <table class="table table-bordered table-white" style="width:100%; border: 1px solid black;" id="participants44">
            <thead>
              <tr>
                 <th style="border: 1px solid black; text-align:center;" rowspan="2">Ministry/Department</th>
                 <th style="border: 1px solid black; text-align:center;" colspan="8">Number of Official Accused</th>
               </tr> 
               <tr> 
                 <th style="border: 1px solid black; text-align:center;" colspan="2">Men</th> 
                 <th style="border: 1px solid black; text-align:center;" colspan="2">Women</th>  
                 <th style="border: 1px solid black; text-align:center;" colspan="2">3 rd G</th> 
                 <th style="border: 1px solid black; text-align:center;" colspan="2">Total Adult</th>
               </tr>

            </thead>
            <tbody>
            <?php
               if(isset( $questionsFortyFour) && !empty( $questionsFortyFour)){
                foreach($questionsFortyFour as $row){
                  ?>
                  <tr>
                  
                  <td style="border: 1px solid black; text-align:center;" id="ministry_department" class="blank-cell row_cell">{{$row['ministry_department']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="number_official_accused_men" class="blank-cell row_cell">{{$row['number_official_accused_men']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
                  <td style="border: 1px solid black; text-align:center;" id="number_official_accused_women" class="blank-cell row_cell">{{$row['number_official_accused_women']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="number_official_accused_third_gender" class="blank-cell row_cell">{{$row['number_official_accused_third_gender']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="percentage_third_gender" class="blank-cell row_cell">{{$row['percentage_third_gender']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
                  <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td> 
                  </tr>';
                <?php
                }
            } 
              ?>
            </tbody>
          </table>
        </div>
      </div>
</div>


<div class="col-md-12 question49">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">49.Did the government/your ministry/department/organization train judiciary and
            court officials on anti-trafficking enforcement, policies, and laws? </h3>

          
        </div>
        <div id="q49_question_view" class="card-body row">


          <table id="q49_individual_activities" style="width:100%; border: 1px solid black;" class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th style="border: 1px solid black; text-align:center;" rowspan="2" style="text-align: center; margin: bottom 45%;">Category of Trainee </th>
                <th style="border: 1px solid black; text-align:center;" rowspan="2">Training Contents </th>
                <!-- <th rowspan="2">Number of Training</th> -->
                <th style="border: 1px solid black; text-align:center;" rowspan="2">Location</th>
                <th style="border: 1px solid black; text-align:center;" rowspan="2">Development Partner</th>
                <th style="border: 1px solid black; text-align:center;" colspan="6">Coverage</th>
                <th></th>
              </tr>
              <tr>
                <th style="border: 1px solid black; text-align:center;" colspan="2">Men</th>
                <th style="border: 1px solid black; text-align:center;" colspan="2">Women</th>
                <th style="border: 1px solid black; text-align:center;" colspan="2">3rd G</th>
                <th style="border: 1px solid black; text-align:center;" colspan="2">Total</th>
              </tr>
              <thead>
            <tbody>
            <?php
             if(isset( $questionsFortyNine) && !empty( $questionsFortyNine)){
              foreach($questionsFortyNine as $row){
                ?>
                <tr>
                <td style="border: 1px solid black; text-align:center;" scope="col" id="q49_category_trainee" class="blank-cell row_cell">{{$row['q49_category_trainee']}}</td>
                <td style="border: 1px solid black; text-align:center;"scope="col" id="q49_training_contents" class="blank-cell row_cell">{{$row['q49_training_contents']}}</td>
                <td style="border: 1px solid black; text-align:center;"scope="col" id="q49_location_id" class="blank-cell row_cell">{{$row['q49_location_id']}}</td>
                <td style="border: 1px solid black; text-align:center;"id="q49_coverage_men" class="blank-cell row_cell">{{$row['q49_coverage_men']}}</td>
                <td style="border: 1px solid black; text-align:center;"id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
                <td style="border: 1px solid black; text-align:center;"id="q49_coverage_women" class="blank-cell row_cell">{{$row['q49_coverage_women']}}</td>
                <td style="border: 1px solid black; text-align:center;"id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
                <td style="border: 1px solid black; text-align:center;"id="q49_coverage_third_gender" class="blank-cell row_cell">{{$row['q49_coverage_third_gender']}}</td>
                <td style="border: 1px solid black; text-align:center;"id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
                <td style="border: 1px solid black; text-align:center;"id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
                <td style="border: 1px solid black; text-align:center;"id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
             
                </tr>
              <?php
              }
          } 
            ?>
          </tbody>
          </table>

          <br><br>
          <table id="q49_all_participants" class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th rowspan="2" style="border: 1px solid black; text-align:center;">Category of Trainee </th>
                <th rowspan="2" style="border: 1px solid black; text-align:center;">Training Contents </th>
                <!-- <th rowspan="2">Number of Training</th> -->
                <th rowspan="2" style="border: 1px solid black; text-align:center;">Location</th>
                <th rowspan="2" style="border: 1px solid black; text-align:center;">Development Partner</th>
                <th colspan="6" style="border: 1px solid black; text-align:center;">Coverage</th>
                <th></th>
              </tr>
              <tr>
                <th colspan="2" style="border: 1px solid black; text-align:center;">Men</th>
                <th colspan="2" style="border: 1px solid black; text-align:center;">Women</th>
                <th colspan="2" style="border: 1px solid black; text-align:center;">3rd G</th>
                <th colspan="2" style="border: 1px solid black; text-align:center;">Total</th>
              </tr>
              <thead>
            <tbody>
            <?php
             if(isset( $questionsFortyNine) && !empty( $questionsFortyNine)){
              foreach($questionsFortyNine as $row){
                ?>
                <tr>
                <td style="border: 1px solid black; text-align:center;" scope="col" id="q49_category_trainee" class="blank-cell row_cell">{{$row['q49_category_trainee']}}</td>
                <td style="border: 1px solid black; text-align:center;"scope="col" id="q49_training_contents" class="blank-cell row_cell">{{$row['q49_training_contents']}}</td>
                <td style="border: 1px solid black; text-align:center;"scope="col" id="q49_location_id" class="blank-cell row_cell">{{$row['q49_location_id']}}</td>
                <td style="border: 1px solid black; text-align:center;"id="q49_coverage_men" class="blank-cell row_cell">{{$row['q49_coverage_men']}}</td>
                <td style="border: 1px solid black; text-align:center;"id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
                <td style="border: 1px solid black; text-align:center;"id="q49_coverage_women" class="blank-cell row_cell">{{$row['q49_coverage_women']}}</td>
                <td style="border: 1px solid black; text-align:center;"id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
                <td style="border: 1px solid black; text-align:center;"id="q49_coverage_third_gender" class="blank-cell row_cell">{{$row['q49_coverage_third_gender']}}</td>
                <td style="border: 1px solid black; text-align:center;"id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
                <td style="border: 1px solid black; text-align:center;"id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
                <td style="border: 1px solid black; text-align:center;"id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
             
                </tr>
              <?php
              }
          } 
            ?>

          </tbody>
          </table>
        </div>
      </div>
</div>


<div class="col-md-12 question53">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">53.How many VoTs received assistance? How much in total (in BDT).</h3>

       
        </div>
        <div class="card-body">


  
    
       <div id ="53_question_view">
   
          <table id="question53" style="width:100%; border: 1px solid black;" class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th style="border: 1px solid black; text-align:center;" rowspan="2" style="text-align: center; margin: bottom 45%;">Number of Case</th>
                <th style="border: 1px solid black; text-align:center;" colspan="16">Individual Coverage</th>

              </tr>
              <tr>
                <th style="border: 1px solid black; text-align:center;" colspan="2"></th>
                <th style="border: 1px solid black; text-align:center;" colspan="2"></th>
                <th style="border: 1px solid black; text-align:center;" colspan="2">Men</th>
                <th style="border: 1px solid black; text-align:center;" colspan="2">Women</th>
                <th style="border: 1px solid black; text-align:center;" colspan="2">3rd G</th>
                <th style="border: 1px solid black; text-align:center;" colspan="2">Boy</th>
                <th style="border: 1px solid black; text-align:center;" colspan="2">Girl</th>
                <th style="border: 1px solid black; text-align:center;" colspan="2">Total</th>
              </tr>

            </thead>
            <tbody>
              <?php
            if(isset( $questionsFiftyThree) && !empty( $questionsFiftyThree)){
            foreach($questionsFiftyThree as $row){
              ?>
               <tr>
              <td style="border: 1px solid black; text-align:center;" style="border: 1px solid black; text-align:center;" id="number_of_case" class="blank-cell row_cell">{{$row['number_of_case']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q53_individual_coverage_men" class="blank-cell row_cell">{{$row['q53_individual_coverage_men']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
              <td style="border: 1px solid black; text-align:center;" id="q53_individual_coverage_women" class="blank-cell row_cell">{{$row['q53_individual_coverage_women']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q53_individual_coverage_third_gender" class="blank-cell row_cell">{{$row['q53_individual_coverage_third_gender']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q53_individual_coverage_boy" class="blank-cell row_cell">{{$row['q53_individual_coverage_boy']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="boys_perchantege" class="blank-cell row_cell">{{$row['boys_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q53_individual_coverage_girl" class="blank-cell row_cell">{{$row['q53_individual_coverage_girl']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="girls_perchantege" class="blank-cell row_cell">{{$row['girls_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_children_by_category" class="blank-cell row_cell">{{$row['total_children_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="children_perchnatage" class="blank-cell row_cell">{{$row['children_perchnatage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_courtyard_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="totalCourtyuardMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>     
              </tr>
              <?php
            }
        } 
        ?>
            </tbody>
          </table>

          <br>
          <br>
          <table style="width:100%; border: 1px solid black;" id="participants53" class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th style="border: 1px solid black; text-align:center;" rowspan="2" style="text-align: center; margin: bottom 45%;">Number of Case</th>
                <th style="border: 1px solid black; text-align:center;" colspan="16">Individual Coverage</th>

              </tr>
              <tr>
                <th style="border: 1px solid black; text-align:center;" colspan="2"></th>
                <th style="border: 1px solid black; text-align:center;" colspan="2"></th>
                <th style="border: 1px solid black; text-align:center;" colspan="2">Men</th>
                <th style="border: 1px solid black; text-align:center;" colspan="2">Women</th>
                <th style="border: 1px solid black; text-align:center;" colspan="2">3rd G</th>
                <th style="border: 1px solid black; text-align:center;" colspan="2">Boy</th>
                <th style="border: 1px solid black; text-align:center;" colspan="2">Girl</th>
                <th style="border: 1px solid black; text-align:center;" colspan="2">Total</th>
              </tr>

            </thead>
            <tbody>
            <?php
            if(isset( $questionsFiftyThreeTable2) && !empty( $questionsFiftyThreeTable2)){
            foreach($questionsFiftyThreeTable2 as $row){
              ?>
               <tr>
              <td style="border: 1px solid black; text-align:center;" style="border: 1px solid black; text-align:center;" id="number_of_case" class="blank-cell row_cell">{{$row['number_of_case']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q53_individual_coverage_men" class="blank-cell row_cell">{{$row['q53_individual_coverage_men']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
              <td style="border: 1px solid black; text-align:center;" id="q53_individual_coverage_women" class="blank-cell row_cell">{{$row['q53_individual_coverage_women']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q53_individual_coverage_third_gender" class="blank-cell row_cell">{{$row['q53_individual_coverage_third_gender']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q53_individual_coverage_boy" class="blank-cell row_cell">{{$row['q53_individual_coverage_boy']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="boys_perchantege" class="blank-cell row_cell">{{$row['boys_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="q53_individual_coverage_girl" class="blank-cell row_cell">{{$row['q53_individual_coverage_girl']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="girls_perchantege" class="blank-cell row_cell">{{$row['girls_perchantege']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_children_by_category" class="blank-cell row_cell">{{$row['total_children_by_category']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="children_perchnatage" class="blank-cell row_cell">{{$row['children_perchnatage']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="total_courtyard_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
              <td style="border: 1px solid black; text-align:center;" id="totalCourtyuardMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>     
              </tr>
              <?php
            }
        } 
        ?>
            </tbody>
          </table>
      </div>
        </div>
      </div>
</div>


<div class="col-md-12 question55">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">55.Did ministry/agency/organization/CTC carried out partnership promotion actions?
        </h3>

         
        </div>
        <div class="card-body">

         
       
        <table style="width:100%; border: 1px solid black;" class="table table-bordered table-white" id="q55_individual_activities">
        <thead>
          <tr>
            <td style="border: 1px solid black; text-align:center;" rowspan="2" scope="col">Category</td>
            <td style="border: 1px solid black; text-align:center;" colspan="17">Coverage/Response</td>
          </tr>

          <tr>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">M</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">W</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">3rd G</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">Total Adult</td>
            <td style="border: 1px solid black; text-align:center;" scope="col"  colspan="2">Boys</td>
            <td style="border: 1px solid black; text-align:center;" scope="col"  colspan="2">Girls</td>
            <td style="border: 1px solid black; text-align:center;" scope="col"  colspan="2">Total children</td>
            <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">Total </td>         
          </tr>
        </thead>
        <tbody>
          <?php
            if(isset( $questionsFiftyFive) && !empty( $questionsFiftyFive)){
              foreach($questionsFiftyFive as $row){
                ?>
                <tr>
                <td style="border: 1px solid black; text-align:center;" id="q55_type_activities" class="blank-cell row_cell">{{$row['q55_type_activities']}}</td>
                
                <td style="border: 1px solid black; text-align:center;" id="q55_individuals_covered_men" class="blank-cell row_cell">{{$row['q55_individuals_covered_men']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
                <td style="border: 1px solid black; text-align:center;" id="q55_individuals_covered_women" class="blank-cell row_cell">{{$row['q55_individuals_covered_women']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="q55_individuals_covered_third_gender" class="blank-cell row_cell">{{$row['q55_individuals_covered_third_gender']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="q55_individuals_covered_boy" class="blank-cell row_cell">{{$row['q55_individuals_covered_boy']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="boys_perchantege" class="blank-cell row_cell">{{$row['boys_perchantege']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="q55_individuals_covered_girl" class="blank-cell row_cell">{{$row['q55_individuals_covered_girl']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="girls_perchantege" class="blank-cell row_cell">{{$row['girls_perchantege']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="total_children_by_category" class="blank-cell row_cell">{{$row['total_children_by_category']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="children_perchnatage" class="blank-cell row_cell">{{$row['children_perchnatage']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="total_courtyard_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="totalCourtyuardMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>     
                </tr>';
              <?php
              }
          } 
          ?>
        </tbody>
      </table>

      <b></b>
     
    
       </div>

        <div class="card-body">
              <h6>
              Gender based Distribution of the Participants of all Awareness Activities
              </h6>
          <table style="width:100%; border: 1px solid black;" class="table table-bordered table-white" id="q55_all_participants">
            <thead>
              <tr>
                <td style="border: 1px solid black; text-align:center;" rowspan="2" scope="col">Category</td>
                <td style="border: 1px solid black; text-align:center;" colspan="17">Coverage/Response</td>
              </tr>
    
              <tr>
                <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">M</td>
                <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">W</td>
                <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">3rd G</td>
                <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">Total Adult</td>
                <td style="border: 1px solid black; text-align:center;" scope="col"  colspan="2">Boys</td>
                <td style="border: 1px solid black; text-align:center;" scope="col"  colspan="2">Girls</td>
                <td style="border: 1px solid black; text-align:center;" scope="col"  colspan="2">Total children</td>
                <td style="border: 1px solid black; text-align:center;" scope="col" colspan="2">Total </td>
              </tr>   
            </thead>
            <tbody>

            <?php
            if(isset( $questionsFiftyFiveTable2) && !empty( $questionsFiftyFiveTable2)){
              foreach($questionsFiftyFiveTable2 as $row){
                ?>
                <tr>
                <td style="border: 1px solid black; text-align:center;" id="q55_type_activities" class="blank-cell row_cell">{{$row['q55_type_activities']}}</td>
                
                <td style="border: 1px solid black; text-align:center;" id="q55_individuals_covered_men" class="blank-cell row_cell">{{$row['q55_individuals_covered_men']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="men_perchantege" class="blank-cell row_cell">{{$row['men_perchantege']}}</td>   
                <td style="border: 1px solid black; text-align:center;" id="q55_individuals_covered_women" class="blank-cell row_cell">{{$row['q55_individuals_covered_women']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="women_perchantege" class="blank-cell row_cell">{{$row['women_perchantege']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="q55_individuals_covered_third_gender" class="blank-cell row_cell">{{$row['q55_individuals_covered_third_gender']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="thirdg_perchantege" class="blank-cell row_cell">{{$row['thirdg_perchantege']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="total_adult_by_category" class="blank-cell row_cell">{{$row['total_adult_by_category']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="total_adult_perchantage" class="blank-cell row_cell">{{$row['total_adult_perchantage']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="q55_individuals_covered_boy" class="blank-cell row_cell">{{$row['q55_individuals_covered_boy']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="boys_perchantege" class="blank-cell row_cell">{{$row['boys_perchantege']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="q55_individuals_covered_girl" class="blank-cell row_cell">{{$row['q55_individuals_covered_girl']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="girls_perchantege" class="blank-cell row_cell">{{$row['girls_perchantege']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="total_children_by_category" class="blank-cell row_cell">{{$row['total_children_by_category']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="children_perchnatage" class="blank-cell row_cell">{{$row['children_perchnatage']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="total_courtyard_meeting" class="blank-cell row_cell">{{$row['total_people']}}</td>
                <td style="border: 1px solid black; text-align:center;" id="totalCourtyuardMetting" class="blank-cell row_cell">{{$row['percentage_of_total_population']}}</td>     
                </tr>';
              <?php
              }
          } 
          ?>
            </tbody>
          </table>
         
        </div>
      </div>
    </div>

      
    </div> 
  @endif

  </div>


    @php
      $fifty_nine=DB::table('general_recommendations_human_trafficking_q59')->get();
    @endphp
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
    
           <tr>
            <th >1</th>
            <th >2</th>
            <th >3</th>
            <th >4</th>
            <th >5</th>
            <th >6</th>
            <th >7</th>
            <th >8</th>
          </tr>
           @foreach($fifty_nine as $row)
          <tr>
             <td>{{$row->q59_one}}</td>
             <td>{{$row->q59_two}}</td>
             <td>{{$row->q59_three}}</td>
             <td>{{$row->q59_four}}</td>
             <td>{{$row->q59_five}}</td>
             <td>{{$row->q59_six}}</td>
             <td>{{$row->q59_seven}}</td>
             <td>{{$row->q59_eight}}</td>
          </tr>
          @endforeach
        
          
       
     
</tbody>
       
      </table>
    </div>
  </div>
</div>

   @php
$sixties=DB::table('captured_questionnaire_q60')->latest()->limit(1)->get();

@endphp
<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">

      <h3 class="card-title">60.Please provide any other information which could not be captured in the questionnaire </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    @foreach($sixties as $sixty)
    <div class="card-body">
      <h6>Additional information from Police HQ</h6>
      <textarea class="form-control"  name="description" id="summernote"  placeholder="This is some sample content." rows="3">
         
       
           {!!$sixty->description_60!!}
       
      </textarea>
    
      


      <br>


    </div>
    @endforeach

    <!--<div class="card-body">-->
    <!--  <h6>Additional information from BGB</h6>-->
    <!--  <textarea class="form-control" id="editor" name="description" placeholder="This is some sample content." rows="3"></textarea>-->
      


    <!--  <br>-->


    <!--</div>-->
  </div>
</div>




  <!-- End the Question No 60 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script type="text/php">
    if (isset($pdf)) {
        $x = 260;
        $y = 820;
        $text = "Page {PAGE_NUM} of {PAGE_COUNT}";
        $font = null;
        $size = 14;
        $color = array(0,0,0);
        $word_space = 0.0;  //  default
        $char_space = 0.0;  //  default
        $angle = 0.0;   //  default
        $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
    }
  </script>

    </body>

</html>