<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Case View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
.block_container6 > div {
    display: inline-block;
    vertical-align: middle;
    margin-left: 10px;
    margin-top: 5px;
    

}

.bloc6{
    font-size:16px;
}

.bloc61{
    font-size: 16px;
    padding-left:350px
}

</style>
  </head>
  <body>
    
   <h2 style="text-align: center;"> {{$role->name}} Question Report </h2>

 


   <div class="row" >

<div class="block_container6" >
    <div class="bloc6"> Username: {{$user->name}}</div>
    <div class="bloc61">Publish date: {{date("d-m-Y", strtotime($case->situation_prevent[0]->created_at))}}</div>
</div>
       

        

    
</div>
   <div class="row">
   <p style="text-align:center;"></p>
   <p style="text-align:center;"></p>
   </div>
   <!-- Start the Question No 1 -->
   @if(array_search("1.question",$permissions,true))
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title m-1">1. Is there any new form of trafficking in your district?</h3>
          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
        <div class="card-body">
  
          <table class="table table-bordered" style="width:100%; border: 1px solid black;">
            <thead>
              <tr>
                <th style="border: 1px solid black; text-align:center;" >New form of Trafficking</th>
                <th style="border: 1px solid black; text-align:center;">Type</th>
                <th style="border: 1px solid black; text-align:center;">Location</th>
   
              </tr>
            </thead>
            <tbody>
            @foreach($case->one as $one)
              <tr>
                <td style="border: 1px solid black; text-align:center;">
                  <div>
                  @if ($one->trafficking_form_no == 1)
                  New form # 1
                  @elseif ($one->trafficking_form_no == 2)
                  New form # 2
                  @elseif ($one->trafficking_form_no == 3)
                  New form # 3
                  @elseif ($one->trafficking_form_no == 4)
                  New form # 4
                  @elseif ($one->trafficking_form_no == 5)
                  New form # 5
                  @endif
                </div>
                </td>
                <td style="border: 1px solid black; text-align:center;">
                  <div>
                  @if ($one->q1_type_id == 1)
                  Forced sexual exploitation
                  @elseif ($one->q1_type_id == 2)
                  Trafficking for sexual visuals/pornography
                  @elseif ($one->q1_type_id == 3)
                  Web Enabled Trafficking
                  @elseif ($one->q1_type_id == 4)
                  Trafficking in Migrants
                  @elseif ($one->q1_type_id == 5)
                  Organ Trafficking
                  @elseif ($one->q1_type_id == 6)
                  Trafficking in Refugee
                  @elseif ($one->q1_type_id == 7)
                  
                  @endif
                  </div>
                  @if ($one->q1_type_id == 7 && !empty($one->q1_trafficking_other_specify))
                  <div>
                      {{ $one->q1_trafficking_other_specify }}
                  </div>
                @endif

                </td>
                <td style="border: 1px solid black; text-align:center;">
                  <div>
                  @if ($one->q1_location_id == 1)
                  Barisal
                  @elseif ($one->q1_location_id == 2)
                  Chattogram
                  @elseif ($one->q1_location_id == 3)
                  Dhaka
                  @elseif ($one->q1_location_id == 4)
                  Khulna
                  @elseif ($one->q1_location_id == 5)
                  Mymensingh
                  @elseif ($one->q1_location_id == 6)
                  Rajshahi
                  @elseif ($one->q1_location_id == 7)
                  Rangpur
                  @elseif ($one->q1_location_id == 8)
                  Sylhet
                  @elseif ($one->q1_location_id == 9)
                  National
                  @endif 
                  </div>  
                </td>
              </tr>
            @endforeach
           </tbody>
          </table>
          <br>
        </div>
      </div>
    </div>
    @endif
   <!-- End the Question No 1 -->
    <!-- Start the Question No 2 -->
    @if(array_search("2.question",$permissions,true))
    <div class="col-md-12">
    <div class="card card-outline collapsed-card">
      <div class="card-header">

        <h3 class="card-title">2. Which identified groups are at particular risk of sex trafficking and forced
          labor?</h3>

        <!-- <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
          </button>
        </div> -->
      </div>
      <div class="card-body">

        <table class="table table-bordered" style="width:100%; border: 1px solid black;">
          <thead>
            <tr>
              <th style="border: 1px solid black; text-align:center;">Level of Risky community</th>
              <th style="border: 1px solid black; text-align:center;">Choose of vulnerable-list</th>
              <th style="border: 1px solid black; text-align:center;">Others (Specify)</th>

            </tr>
          </thead>
          <tbody>
          @foreach($case->two as $two)
            <tr>
              <td style="border: 1px solid black; text-align:center;"><div>
              @if ($two->level_risky_community == 1)
              Most at risk
                @elseif ($two->level_risky_community == 2)
                Moderately at risk
                @elseif ($two->level_risky_community == 3)
                Least at Risk
             
                @endif
              </div>
              </td>
              <td style="border: 1px solid black; text-align:center;">

                <div>
                @if ($two->choose_vulnerable_list_id == 1)
                Migrant Men
                @elseif ($two->choose_vulnerable_list_id == 2)
                Migrant Women
                @elseif ($two->choose_vulnerable_list_id == 3)
                3rd G Gender

                @elseif ($two->choose_vulnerable_list_id == 4)
                Girls of Poor Household
                @elseif ($two->choose_vulnerable_list_id == 5)
                Boys of Poor Household
                @elseif ($two->choose_vulnerable_list_id == 6)
                Men
                @elseif ($two->choose_vulnerable_list_id == 7)
                Women
                @elseif ($two->choose_vulnerable_list_id == 8)
                Children of Sex Worker
                @elseif ($two->choose_vulnerable_list_id == 9)
                Child Labour
                @elseif ($two->choose_vulnerable_list_id == 10)
                Street Children     

                @elseif ($two->choose_vulnerable_list_id == 11)
                Other (Specify)
                @endif
                </div>
             
              </td>
              <td style="border: 1px solid black; text-align:center;">
                <div>
                {{ $two->others_specify_id }}
                </div>
                
               </td>
              </tr>
            @endforeach
       
          </tbody>

        </table>
        <br>
      </div>
    </div>
  </div>
  @endif
  <!-- End the Question No 2 -->
  @if(array_search("3.question",$permissions,true))
  <!-- Start the Question No 3 -->
  <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">3.Is there any new risk and initiatives to mitigate the risk of trafficking
            associated with Climate Change
            (CC)?</h3>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div> -->
        <div class="card-body">
          <table class="table " style="width:100%; border: 1px solid black;" style="width:100%; border: 1px solid black;">
            <thead>
              <tr>
                <th scope="col"  style="border: 1px solid black; text-align:center;">Risk associated with Climate Change</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Initiative to mitigate Risk</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Title of Project/Program/Policy/ Law</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Beneficiary</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Location</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->three as $three)
              <tr>
                <th scope="row" style="border: 1px solid black; text-align:center;">
               {{$three->q3_risk_associated_climate_change}}
                  @if ($three->q3_risk_associated_climate_change == 1)
                  Displacement
                @elseif ($three->q3_risk_associated_climate_change == 2)
                Loss of livelihood
                @elseif ($three->q3_risk_associated_climate_change == 3)
                Loss of arable land

                @elseif ($three->q3_risk_associated_climate_change == 4)
                Loss in agriculture
                @elseif ($three->q3_risk_associated_climate_change == 5)
                Debt
                @elseif ($three->q3_risk_associated_climate_change == 6)
                Increased poverty
                @elseif ($three->q3_risk_associated_climate_change == 7)
                Loss of housing
             
                @else
                  {{$three->q3_risk_associated_climate_change }}
           
                @endif
                
                </th>  
                <td style="border: 1px solid black; text-align:center;">  
                @if ($three->q3_initiative_mitigate_risk == 1)
                Policy
                @elseif ($three->q3_initiative_mitigate_risk == 2)
                Law
                @elseif ($three->q3_initiative_mitigate_risk == 3)
                Awareness
                @elseif ($three->q3_initiative_mitigate_risk == 4)
                Economic Support
                @elseif ($three->q3_initiative_mitigate_risk == 5)
                Technology Transfer
                @elseif ($three->q3_initiative_mitigate_risk == 6)
                Psychosocial Care
                @elseif ($three->q3_initiative_mitigate_risk == 7)
                Legal Aid
                @elseif ($three->q3_initiative_mitigate_risk == 8)
                Health Care
                @elseif ($three->q3_initiative_mitigate_risk == 9)
                Shelter
                @elseif ($three->q3_initiative_mitigate_risk == 10)
                Technical Training
                @elseif ($three->q3_initiative_mitigate_risk == 11)
                Education
                @elseif ($three->q3_initiative_mitigate_risk == 12)
                Lifeskill Training
                @elseif ($three->q3_initiative_mitigate_risk == 13)
                Research
                @elseif ($three->q3_risk_associated_climate_change == 14)
                Othes
                @else
                {{$three->q3_risk_associated_climate_change}}
                @endif
                </td>
                <td style="border: 1px solid black; text-align:center;">
                
                {{$three->q3_title_project_program}}
                 
             
                </td>
                <td style="border: 1px solid black; text-align:center;">
               
                @if ($three->q3_location_id == 1)
                Barisal
                @elseif ($three->q3_location_id == 2)
                Chattogram
                @elseif ($three->q3_location_id == 3)
                Dhaka
                @elseif ($three->q3_location_id == 4)
                Khulna
                @elseif ($three->q3_location_id == 5)
                Mymensingh
                @elseif ($three->q3_location_id == 6)
                Rajshahi
                @elseif ($three->q3_location_id == 7)
                Rangpur
                @elseif ($three->q3_location_id == 8)
                Sylhet
                @elseif ($three->q3_location_id == 9)
                National
              
                @endif
               
                
                </td>
                <td style="border: 1px solid black; text-align:center;">
        
                @if ($three->q3_problem_id == 1)
                Men
                @elseif ($three->q3_problem_id == 2)
                Women
                @elseif ($three->q3_problem_id == 3)
                3rd G
                @elseif ($three->q3_problem_id == 4)
                Rural Poor
                @elseif ($three->q3_problem_id == 5)
                Urban Poor  
                @endif
                 
                </td>
              </tr>
              
             @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endif
   
  <!-- End the Question No 3 -->
  @if(array_search("4.question",$permissions,true))
  <!-- Start the Question No 4 -->
  <div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">4.Did the National Authority convene?</h3>

      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
    <div class="card-body">
      <table id="National_Authority" class="table" style="width:100%; border: 1px solid black;">
        <thead>
          <tr>
            <th scope="col"style="border: 1px solid black; text-align:center;">Meeting no</th>
            <th colspan="3" scope="col" style="border: 1px solid black; text-align:center;">Key decisions</th>
            <th scope="col" style="border: 1px solid black; text-align:center;">Upload</th>
          </tr>
          <tr>
            <th scope="col" style="vertical-align: top;" >
             
            </th>
            <th colspan="3" scope="col">
             
            </th>
            <th scope="col" style="vertical-align: top;">
             
            </th>
          </tr>
        </thead>
        <tbody>
        @foreach($case->four as $four)
          <tr>
            <td style="border: 1px solid black; text-align:center;">
            @if ($four->type_component_q4 == 1)
            First
                @elseif ($four->type_component_q4 == 2)
                Second
                @elseif ($four->type_component_q4 == 3)
                Third
                
                @endif
              
            </td>
          
            <td style="border: 1px solid black; text-align:center;">
            @if ($four->type_component == 1)
            Prevention
                @elseif ($four->type_component == 2)
                Protection
                @elseif ($four->type_component == 3)
                Prosecution
                @elseif ($four->type_component == 4)
                Protection
                @elseif ($four->type_component == 5)
                Partnership
                @elseif ($four->type_component == 6)
                M&E (NPA)
                @elseif ($four->type_component == 7)
                NPA
                @elseif ($four->type_component == 8)
                NRM
                @elseif ($four->type_component ==9)
                MLA
                @elseif ($four->type_component == 10)
                TIP Report
                @else
                {{$four->type_component_others_specify_q4}}
                @endif
              
            </td>
            <td style="border: 1px solid black; text-align:center;">  @if ($four->type_issue_q4 == 1)
            Policy
                @elseif ($four->type_issue_q4 == 2)
                Law
                @elseif ($four->type_issue_q4 == 3)
                Awareness
                @elseif ($four->type_issue_q4 == 4)
                Economic Support
                @elseif ($four->type_issue_q4 == 5)
                Technology Transfer
                @elseif ($four->type_issue_q4 == 6)
                Psychosocial Care
                @elseif ($four->type_issue_q4 == 7)
                Legal Aid
                @elseif ($four->type_issue_q4 == 8)
                Health Care
                @elseif ($four->type_issue_q4 == 9)
                Shelter
                @elseif ($four->type_issue_q4 == 10)
                Technical Training
                @elseif ($four->type_issue_q4 == 11)
                Education
                @elseif ($four->type_issue_q4 == 12)
                Lifeskill Training
                @elseif ($four->type_issue_q4 == 13)
                Research
                @elseif ($four->type_issue_q4 == 14)
                Othes
                @endif
              </td>
            <td style="border: 1px solid black; text-align:center;">@if ($four->type_remark_q4 == 1)
            Satisfactory
                @elseif ($four->type_remark_q4 == 2)
                Planned
                @elseif ($four->type_remark_q4 == 3)
                Discontinued
                @elseif ($four->type_remark_q4 == 4)
                Completed
                
                @endif</td>

            <td style="border: 1px solid black; text-align:center;">
           </td>
          </tr> 
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div> 
@endif
  <!-- End the Question No 4 -->
  @if(array_search("5.question",$permissions,true))

  <!-- Start the Question No 5 -->
  <div class="col-md-12 question5" >
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">5.Did your ministry/agency take steps to ensure policies did not further marginalize communities already overrepresented among trafficking victims?</h3>

      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
    <div class="card-body">
     
     
      <div id="five_question_view">
      <table class="table" style="width:100%; border: 1px solid black;">
        <thead>
          <tr>
            <th scope="col" style="border: 1px solid black; text-align:center;">Type of Policy tool</th>
            <th scope="col" style="border: 1px solid black; text-align:center;">Title of the initiative</th>
            <th scope="col" style="border: 1px solid black; text-align:center;">Objectives</th>

          </tr>
        </thead>
        <tbody>
        @foreach($case->five as $five)
          <tr>
            <td style="border: 1px solid black; text-align:center;">
            @if ($five->type_policy_tool_id	 == 1)
            National Policy
                @elseif ($five->type_policy_tool_id	 == 2)
                National Strategy
                @elseif ($five->type_policy_tool_id	 == 3)
                National Plan
                @elseif ($five->type_policy_tool_id	 == 4)
                Regional Arrangement 
                @elseif ($five->type_policy_tool_id	 == 5)
                Economic Policy
                 {{$five->type_policy_tool_id}}

                  @endif
            </td>

            <td style="border: 1px solid black; text-align:center;">{{$five->title_the_initiative_id}}</td>
            <td style="border: 1px solid black; text-align:center;">{{$five->objectives_id}}</td>
          </tr>
         
          @endforeach
        
        </tbody>
      </table>
    </div>
    </div>
  </div>
</div>

@endif

  <!-- End the Question No 5 -->
  @if(array_search("6.question",$permissions,true))
  <!-- Start the Question No 6 -->
  <div class="col-md-12 question6">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">6.How much funding (in the local currency) did your ministry/agency/organization
            spend on
            prevention efforts (e.g., awareness campaigns, research projects, national action plan
            implementation, etc.)?</h3>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
        <div class="card-body">
          <div id="six_question_view">
          <table class="table" style="width:100%; border: 1px solid black;">
            <thead>
              <tr>
                <th scope="col" style="border: 1px solid black; text-align:center;">Type of preventive Action</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Allocation (in BDT)</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->six as $six)
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
  <!-- End the Question No 6 -->
  @endif

  @if(array_search("7.question",$permissions,true))
  <!-- Start the Question No 7 -->
  <div class="col-md-12 question7">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">7.Did your ministry/agency update or create a new national action plan to address
            trafficking? If yes,
            please provide a copy (in English, if available) and note the timeline.</h3>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
        <div class="card-body">
          <div id="seven_question_view">
          <table class="table" style="width:100%; border: 1px solid black;">
            <thead>
              <tr>
                <th style="border: 1px solid black; text-align:center;">Duration of NPA</th>
                <th style="border: 1px solid black; text-align:center;">Attach/Upload</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->seven as $seven)
              <tr>
                <th style="border: 1px solid black; text-align:center;">   {{$seven->duration_npa}} </th>
                <td style="border: 1px solid black; text-align:center;"> 
                <!-- <img id="logo" src="{{ asset($seven->attach_image) }}" width="50" height="50;" /> -->
                  
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          
          </div>
        </div>
      </div>
    </div>
  <!-- End the Question No 7 -->
  @endif
  <!-- Start the Question No 8 -->
  @if(array_search("8.question",$permissions,true))
  <div class="col-md-12" >
    <div class="card card-outline collapsed-card">
      <div class="card-header">
        <h3 class="card-title">8.What resources (funding or in-kind contributions) did your
          ministry/agency/organization devote
          towards implementation of new/updated or existing plans?</h3>

        <!-- <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
          </button>
        </div> -->
      </div>
      <div class="card-body">
        <table id="resources_funding" class="table" style="width:100%; border: 1px solid black;">
          <thead>
            <tr>
              <th scope="col" style="border: 1px solid black; text-align:center;">Allocation</th>
              <th scope="col" style="border: 1px solid black; text-align:center;">Allocation</th>
            </tr>
          </thead>
          <tbody>
          @foreach($case->eight as $eight)
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
@endif
  <!-- End the Question No 8 -->
  @if(array_search("9.question",$permissions,true))
  <!-- Start the Question No 9 -->
  <div class="col-md-12 question9">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">9.Did the ministry/agency/organization fund and/or conduct awareness activities?
      </h3>

      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
    <div class="card-body">
          
          <div id ="9_question_view" >
      <table class="table" style="width:100%; border: 1px solid black;">
        <thead>
          <tr>
            <th rowspan="2" scope="col" style="border: 1px solid black; text-align:center;">Types of Activities</th>
            <th colspan="8" scope="col" style="border: 1px solid black; text-align:center;">Community (number covered)s</th>

            <!-- <th colspan="3">Total (number covered)</th> -->
      
          </tr>

          <tr>
            <th colspan="1" scope="col" style="border: 1px solid black; text-align:center;">M</th>
            <th colspan="1" scope="col" style="border: 1px solid black; text-align:center;">W</th>
            <th colspan="1" scope="col" style="border: 1px solid black; text-align:center;">3rd G</th>
            <th colspan="1" scope="col" style="border: 1px solid black; text-align:center;">B</th>
            <th colspan="1" scope="col" style="border: 1px solid black; text-align:center;">G</th>
            <th colspan="1" scope="col" style="border: 1px solid black; text-align:center;">T</th>
            <th colspan="2" scope="col" style="border: 1px solid black; text-align:center;">Location</th>
          </tr>
          </thead>
          <tbody>
          @foreach($case->nine as $nine)
          <tr>
            <td style="border: 1px solid black; text-align:center;">
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
            <td style="border: 1px solid black; text-align:center;">
            {{$nine->type_activities_men}}
            </td>
            <td  style="border: 1px solid black; text-align:center;">   {{$nine->type_activities_women}}</td>
            <td  style="border: 1px solid black; text-align:center;"> {{$nine->type_activities_third_gender}}</td>
            <td style="border: 1px solid black; text-align:center;">{{$nine->type_activities_boy}} </td>
            <td  style="border: 1px solid black; text-align:center;">{{$nine->type_activities_girl}} </td>
            <td  style="border: 1px solid black; text-align:center;">{{$nine->type_activities_total}}  </td>
            <td colspan="2" style="border: 1px solid black; text-align:center;">
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
            </td>
          </tr>
          @endforeach

  </tbody>
      </table>
          </div>
    </div>
  </div>
</div>
@endif
  <!-- End the Question No 9 -->
  @if(array_search("10.question",$permissions,true))
  <!-- Start the Question No 10 -->
  <div class="col-md-12 question10">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">10.Did your ministry/agency carry out any efforts to raise awareness or train
        foreign governments on trafficking?</h3>

      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
    <div class="card-body">

      <div id="ten_question_view" class="card-body row">
      <table id="addRowQ10" class="table" style="width:100%; border: 1px solid black;">
        <thead>
          <tr>
            <th scope="col" style="border: 1px solid black; text-align:center;">Country</th>
            <th scope="col" style="border: 1px solid black; text-align:center;">Target group of Training
              (multiple response)</th>
            <th scope="col" style="border: 1px solid black; text-align:center;">Total coverage</th>
 
          </tr>
        </thead>
        <tbody>
        @foreach($case->ten as $ten)
          <tr>
            <td style="border: 1px solid black; text-align:center;">
            {{$ten->country->name	 ?? ''}}
       
            </td>
            <td style="border: 1px solid black; text-align:center;">
            @if  ($ten->trafficking_target_group	 == 1)
            Government Official
                @elseif ($ten->trafficking_target_group	 == 2)
                Immigration Authority
                @elseif ($ten->trafficking_target_group	 == 3)
                Law Enforcing Personnel
                @elseif ($ten->trafficking_target_group	 == 4)
                Border Control Force
                @elseif ($ten->trafficking_target_group	 == 5)
                Judiciary
                @elseif ($ten->trafficking_target_group	 == 6)
                Diplomats
                @endif

            </td>
            <td style="border: 1px solid black; text-align:center;"> 
            {{$ten->trafficking_total_coverage}}
              
             </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    </div>
  </div>
</div>
@endif
  <!-- End the Question No 10 -->
  @if(array_search("11.question",$permissions,true))
  <!-- Start the Question No 11 -->
  <div class="col-md-12 question11">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">11.Were there any changes to how your ministry/agency
             regulated and oversaw labor recruitment for licensed and unlicensed recruitment agencies,
              individual recruiters, and sub-brokers</h3>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
        <div class="card-body">
        
          <div id="eleven_question_view">
          <table class="table" style="width:100%; border: 1px solid black;">
            <thead>
              <tr>
                <th scope="col" style="border: 1px solid black; text-align:center;">Original Document/Approach</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Description of Change</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->eleven as $eleven)
              <tr>
                <td scope="col" style="border: 1px solid black; text-align:center;">
                @if  ($eleven->original_approach	 == 1)
                OEMA 2013
                @elseif ($eleven->original_approach	 == 2)
                Employee-paid-model
                @elseif ($eleven->original_approach	 == 3)
                Fair recruitment cost notification
                @elseif ($eleven->original_approach	 == 4)
                Ranking of Recruiting Agents
                @elseif ($eleven->original_approach	 == 5)
                Licensing of Recruiting Agents
                @elseif ($eleven->original_approach	 == 6)
                Registration of Informal Recruiting Agents
                @elseif ($eleven->original_approach	 == 7)
                Zero Migration Cost Approach
                {{$eleven->original_approach}}
                @endif
                 
                </td>
              
                <td scope="col" style="border: 1px solid black; text-align:center;"> 
                @if  ($eleven->description_change	 == 1)
                Firmly Implemented/enforced
                @elseif ($eleven->description_change	 == 2)
                Reformed
                @elseif ($eleven->description_change	 == 3)
                Planned
                @elseif ($eleven->description_change	 == 4)
                Drafted
                @elseif ($eleven->description_change	 == 5)
                Updated
                @elseif ($eleven->description_change	 == 6)
                Partially enforced
                @elseif ($eleven->description_change	 == 7)
                Expanded use
                @elseif ($eleven->description_change	 == 8)
                Prohibited by law
                @elseif ($eleven->description_change	 == 9)
                Prohibit
                 @elseif ($eleven->description_change	 == 10)
                 Strictly monitored

     
                @endif
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
  <!-- End the Question No 11 -->
  @endif
  @if(array_search("12.question",$permissions,true))
  <!-- Start the Question No 12 -->
  <div class="col-md-12 question12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">12.Any new agreements, with a transparent oversight mechanism, with other countries
            on safe and
            responsible labor recruitment that included measures</h3>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
        <div class="card-body">
       
          <div id="twevel_question_view" class="card-body row">
          <table id="addRowQ12" class="table" style="width:100%; border: 1px solid black;">
            <thead>
              <tr>
                <th scope="col" colspan="3" style="border: 1px solid black; text-align:center;">Country</th>
                <th scope="col"colspan="3" style="border: 1px solid black; text-align:center;">Instrument</th>
                <th scope="col"colspan="6" style="border: 1px solid black; text-align:center;">Attach/Upload/Summary</th>
      
              </tr>
            </thead>
            <tbody>
            @foreach($case->twelve as $twelve)
              <tr>
                <td scope="col"style="border: 1px solid black; text-align:center;">
                {{$twelve->country->name ?? ''}}
                </td>
                <td scope="col"style="border: 1px solid black; text-align:center;"> 
                @if ($twelve->instrument	 == 1)
                Bil-Lateral Agreement
                @elseif ($twelve->instrument	 == 2)
                Mutual Legal Arrangement
                @elseif ($twelve->instrument	 == 3)
                MoU
                @elseif ($twelve->instrument	 == 4)
                Trade Treaty
                @elseif ($twelve->instrument	 == 4)
                G to G agreement
                @endif
                </td>
                <td scope="col"style="border: 1px solid black; text-align:center;"> 
                <img id="logo" src="{{ asset($twelve->upload_summary) }}" width="50" height="50;" />
                 
                </td>
                
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
  <!-- End the Question No 12 -->
  @endif
  @if(array_search("13.question",$permissions,true))2
  <!-- Start the Question No 13 -->
  <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">13.Did your ministry/agency/organization take tangible action to prevent forced
            labor in domestic or
            global supply chains?</h3>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
        <div class="card-body">
          <table class="table" style="width:100%; border: 1px solid black;">
            <thead>
              <tr>

                <th scope="col" style="border: 1px solid black; text-align:center;">Action Level</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Type of Action (Multiple Response)</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Attach/Upload/Summary</th>
              </tr>
            </thead>

            <tbody>
            @foreach($case->thirteen as $thirteen)
              <tr>
                <td style="border: 1px solid black; text-align:center;">
                @if ($thirteen->q13_action_level == 1)
                National
                @elseif ($thirteen->q13_action_level == 2)
                Global
                @endif
                  </td>
         
                <td style="border: 1px solid black; text-align:center;">
                @if ($thirteen->q13_national_type_action == 1)
                Reform of Labour Law
                @elseif ($thirteen->q13_national_type_action == 2)
                Stricter Enforcement of law
                @elseif ($thirteen->q13_national_type_action == 3)
                Research
                @elseif ($thirteen->q13_national_type_action == 4)
                Stricter monitoring
                @elseif ($thirteen->q13_national_type_action == 5)
                Training of Factory Inspectors
                @elseif ($thirteen->q13_national_type_action == 6)
                Training of Trade Unions
                @elseif ($thirteen->q13_national_type_action == 7)
                Training of entrepreneurs
                @elseif ($thirteen->q13_national_type_action == 8)
                Increased legal action
                @else
                {{$thirteen->q13_national_others_specify}}
                @endif
                </td>
                <td style="border: 1px solid black; text-align:center;">
                <!-- <img id="logo" src="{{ asset($thirteen->q13_upload_summary) }}" width="50" height="50;" /> -->
                 
              </td>
              </tr>

              @endforeach
            </tbody>
         
          </table>
        </div>
      </div>
    </div>
  <!-- End the Question No 13 -->
  @endif
  @if(array_search("14.question",$permissions,true))
  <!-- Start the Question No 14 -->
  <div class="col-md-12 question14">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">14.Did your ministry/agency make any new efforts to ensure its trade or migration
            policies did not
            facilitate trafficking?</h3>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
        <div class="card-body">
  
          <div id="fourteen_question_view">
          <table class="table" style="width:100%; border: 1px solid black;">
            <thead>
              <tr>
                <th scope="col" style="border: 1px solid black; text-align:center;">Action</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Attach/Upload/Summary</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->fourteen as $fourteen)
              <tr>
                <th style="border: 1px solid black; text-align:center;">
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
         
                <td style="border: 1px solid black; text-align:center;"> 
                <!-- <img id="logo" src="{{ asset($fourteen->q14_upload_summary) }}" width="50" height="50;" /> -->
          
                 </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          

        </div>
        </div>
      </div>
    </div>
  <!-- End the Question No 14 -->
  @endif

  @if(array_search("15.question",$permissions,true))
  <!-- Start the Question No 15 -->
  <div class="col-md-12 question15">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">15.Did government/your ministry/agency make any efforts to prohibit and prevent
            trafficking in the
            supply chains of its own public procurement?</h3>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
        <div class="card-body">

         <div id="fifteen_question_view">
          <table class="table" style="width:100%; border: 1px solid black;">
            <thead>
              <tr>
                <th scope="col" style="border: 1px solid black; text-align:center;">Action/Tool</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Status</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Attach/Upload/Summary</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->fifteen as $fifteen)
              <tr>
                <td style="border: 1px solid black; text-align:center;">
                @if ($fifteen->q15_action_no	 == 1)
                Procurement Policy
                @elseif ($fifteen->q15_action_no	 == 2)
                Anti-Corruption measures
                @elseif ($fifteen->q15_action_no	 == 3)
                Capacity building of government officials
                @else
                {{$fifteen->q15_action_no}}
                @endif
                </td>
               
                <td style="border: 1px solid black; text-align:center;">
                @if ($fifteen->q15_status_id	 == 1)
                Enforced
                @elseif ($fifteen->q15_status_id	 == 2)
                Updated and enforced
                @elseif ($fifteen->q15_status_id	 == 3)
                Stricter enforcement
                @elseif ($fifteen->q15_status_id	 == 4)
                Increased efforts
                @endif
                 </td>
                <td style="border: 1px solid black; text-align:center;">
                <!-- <img id="logo" src="{{ asset($fifteen->q15_upload_summary) }}" width="50" height="50;" /> -->
             
                   </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
  <!-- End the Question No 15 -->
  @endif
  @if(array_search("16.question",$permissions,true))
  <!-- Start the Question No 16 -->
  <div class="col-md-12 question16">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">16.What measures not mentioned elsewhere did the government/your
            ministry/agency/organizations
            take to reduce the demand for commercial sex acts? [NOTE: Measures should target consumers –
            not suppliers or facilitators – of commercial sex. Law enforcement efforts against brothels or
            individuals in prostitution are not considered efforts to reduce the demand for commercial sex. END
            NOTE.]</h3>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
        <div class="card-body">

          <table class="table" style="width:100%; border: 1px solid black;">
            <thead>
              <tr>
                <th scope="col" style="border: 1px solid black; text-align:center;">Action</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Status</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Please upload a summary note or any other relevant document.</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->sixteen as $sixteen)
              <tr>
                <td style="border: 1px solid black; text-align:center;">
                @if ($sixteen->q16_action_no == 1)
                Awareness raising on forced prostitution and trafficking among citizens
                @elseif ($sixteen->q16_action_no == 2)
                Awareness raising on legal measures against sexual exploitation of trafficked individuals
                @elseif ($sixteen->q16_action_no == 3)
                Legal actions against podophiles/sex-tourists (clients on underaged girls/VoTs)
                {{$sixteen->q16_action_no}}
                @endif
                </td>

                <td style="border: 1px solid black; text-align:center;">
                @if ($sixteen->q16_status_id	 == 1)
                Enforced
                @elseif ($sixteen->q16_status_id	 == 2)
                Updated and enforced
                @elseif ($sixteen->q16_status_id	 == 3)
                Stricter enforcement
                @elseif ($sixteen->q16_status_id	 == 4)
                Increased efforts
                @elseif ($sixteen->q16_status_id	 == 5)
                Moderate Effortt
                @elseif ($sixteen->q16_status_id	 == 6)
                Less Effort
                @elseif ($sixteen->q16_status_id	 == 7)
                Poor Enforcement
                @elseif ($sixteen->q16_status_id	 == 8)
                Under Review
                @elseif ($sixteen->q16_status_id	 == 9)
                Other (Specify)
                {{$sixteen->q16_ation_others_specify}}
                @endif
          
                
                </td>
                <td style="border: 1px solid black; text-align:center;">
                <!-- <img id="logo" src="{{ asset($sixteen->upload_relevant_document) }}" width="50" height="50;" /> -->
                    </td>
              </tr>
           
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  <!-- End the Question No 16 -->
  @endif
  @if(array_search("17.question",$permissions,true))
  <!-- Start the Question No 17 -->
  <div class="col-md-12 question17">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">17.Did the government make any efforts to reduce its nationals’ or foreigners’
            participation in
            international and domestic child sex tourism?</h3>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
        <div class="card-body">
      
         <div id="seventeen_question_view">
          <table class="table" style="width:100%; border: 1px solid black;">
            <thead>
              <tr>
                <th scope="col" style="border: 1px solid black; text-align:center;">Action</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Status</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Please upload a summary note or any other relevant document.</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->seventeen as $seventeen)
              <tr>
                <td style="border: 1px solid black; text-align:center;">
                @if ($seventeen->action_no_q17 == 1)
                Awareness raising on forced prostitution and trafficking among citizens
                @elseif ($seventeen->action_no_q17 == 2)
                Awareness raising on legal measures against sexual exploitation of trafficked individuals
                @elseif ($seventeen->action_no_q17 == 3)
                Legal actions against foreign podophiles/sex- tourists (clients on underaged girls/VoTs)
                @endif
                </td>
           
               
                <td style="border: 1px solid black; text-align:center;">
                @if ($seventeen->status_id_q17 == 1)
                Enforced
                @elseif ($seventeen->status_id_q17 == 2)
                Updated and enforced
                @elseif ($seventeen->status_id_q17 == 3)
                Stricter enforcement
                @elseif ($seventeen->status_id_q17 == 4)
                Increased efforts
                @elseif ($seventeen->status_id_q17 == 5)
                Moderate Effortt
                @elseif ($seventeen->status_id_q17 == 6)
                Less Effort
                @elseif ($seventeen->status_id_q17 == 7)
                Poor Enforcement
                @elseif ($seventeen->status_id_q17 == 8)
                Under Review
                @elseif ($seventeen->status_id_q17 == 9)
                Other (Specify)
                {{$seventeen->q17_awareness_raising_other_specify}}
                @endif
          
               
                </td>
                <td style="border: 1px solid black; text-align:center;">
                <!-- <img id="logo" src="{{ asset($seventeen->upload_relevant_document) }}" width="50" height="50;" /> -->
                    </td>
              </tr>
           
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  <!-- End the Question No 17 -->
  @endif
  @if(array_search("18.question",$permissions,true))
  <!-- Start the Question No 18 -->
  <div class="col-md-12 question18">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">18.Did the government train its diplomats not to engage in or facilitate
        trafficking?</h3>

      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
    <div class="card-body">
    
       <div id="eightteen_question_view">
      <table style="width:100%; border: 1px solid black;">
        
        <thead>
          <tr>
            <th rowspan="2" scope="row" style="border: 1px solid black; text-align:center;">Category of Trainee</th>
            <th colspan="8" style="border: 1px solid black; text-align:center;">Coverage of Training</th>
          </tr>
          <tr>
            <th scope="row" colspan="2" style="border: 1px solid black; text-align:center;">Men</th>
            <th scope="col" colspan="2" style="border: 1px solid black; text-align:center;">Women</th>
            <th scope="col" colspan="2" style="border: 1px solid black; text-align:center;">3rd G</th>
            <th scope="col" colspan="2" style="border: 1px solid black; text-align:center;">Total</th>

          </tr>
        </thead>
        <tbody>
        @foreach($case->eighteen as $eighteen)
          <tr>
          <td style="border: 1px solid black; text-align:center;">
          @if ($eighteen->category_trainee_q18 == 1)
          Diplomats in foreign missions
                @elseif ($eighteen->category_trainee_q18 == 2)
                Labour Attaches
                @elseif ($eighteen->category_trainee_q18 == 3)
                MoFA officials within the country
                @endif
              </td>

            <td colspan="2" style="border: 1px solid black; text-align:center;">   <div>   {{ $eighteen->coverage_training_men }}  </div>  </td>
            <td colspan="2" style="border: 1px solid black; text-align:center;">{{ $eighteen->coverage_training_women }}</td>
            <td colspan="2" style="border: 1px solid black; text-align:center;">{{ $eighteen->coverage_training_third_gender }}</td>
            <td colspan="2" style="border: 1px solid black; text-align:center;">{{ $eighteen->coverage_training_total }}</td>
           
          </tr>

          @endforeach
       
        </tbody>
      </table>
    </div>
    </div>
  </div>
</div>
  <!-- End the Question No 18 -->
  @endif
  @if(array_search("19.question",$permissions,true))
  <!-- Start the Question No 19 -->
  <div class="col-md-12 question19">
 <div class="card card-outline collapsed-card">
   <div class="card-header">
     <h3 class="card-title">19.If there were allegations that a diplomat representing the government abroad engaged in or facilitated trafficking, did the government seek criminal accountability?<h3>
     <!-- <div class="card-tools">
       <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
       </button>
     </div> -->
   </div>
  
   <div class="card-body">

    <div id="nineteen_question_view">
     <table id="addRowQ19" class="table" style="width:100%; border: 1px solid black;">
     <thead class="">
          <tr>
            <th rowspan="2" scope="row" style="border: 1px solid black; text-align:center;">Country where
              posted</th>
            <th rowspan="2" scope="row" style="border: 1px solid black; text-align:center;">Description</th>
            <th colspan="8" scope="col" style="border: 1px solid black; text-align:center;">Number of Cases</th>
          
          </tr>
          <tr>
            <th colspan="2" scope="col" style="border: 1px solid black; text-align:center;">Men</th>
            <th colspan="2" scope="col" style="border: 1px solid black; text-align:center;">Women</th>
            <th colspan="2" scope="col" style="border: 1px solid black; text-align:center;">3rd G</th>
            <th colspan="2" scope="col" style="border: 1px solid black; text-align:center;">Total</th>
    
          </tr>
        </thead>
          <tbody>
   
        @foreach($case->nineteen as $nineteen)
         <tr>
    
         <td rowspan="2" scope="row" style="border: 1px solid black; text-align:center;">{{ $nineteen->country->name  ?? '' }}</td>
         <td rowspan="2" scope="row" style="border: 1px solid black; text-align:center;"> {{ $nineteen->q19_description }}</td>
       
         <td colspan="2" scope="col"style="border: 1px solid black; text-align:center;"> {{ $nineteen->q19_number_cases_men }}</td>
         <td colspan="2" scope="col"style="border: 1px solid black; text-align:center;"> {{ $nineteen->q19_number_cases_women }}</td>
         <td colspan="2" scope="col"style="border: 1px solid black; text-align:center;"> {{ $nineteen->q19_number_cases_third_gender }}</td>
         <td colspan="2" scope="col"style="border: 1px solid black; text-align:center;"> {{ $nineteen->q19_number_cases_total }}</td>
 
         </tr>
         @endforeach
    </tbody>


     </table>
   </div>
   </div>
 </div>
</div> 
  <!-- End the Question No 19 -->
  @endif
  @if(array_search("20.question",$permissions,true))
  <!-- Start the Question No 20 -->
  <div class="col-md-12 question20">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">20.Did the government provide anti-trafficking training to its nationals deployed
        abroad on
        peacekeeping or other similar missions?</h3>

      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
    
    <div class="card-body">
    <div class="form-group clearfix">
  
     <div id ="twenty_question_view" class="card-body row">
      <table id="addRowQ20" class="table" style="width:100%; border: 1px solid black;">
        <thead class="">
          <tr>
            <th rowspan="2" scope="row" style="border: 1px solid black; text-align:center;">Country where
              posted</th>
            <th rowspan="2" scope="row" style="border: 1px solid black; text-align:center;">Description</th>
            <th colspan="8" scope="col" style="border: 1px solid black; text-align:center;">Number of Cases</th>
          
          </tr>
          <tr>
            <th colspan="2" scope="col" style="border: 1px solid black; text-align:center;">Men</th>
            <th colspan="2" scope="col" style="border: 1px solid black; text-align:center;">Women</th>
            <th colspan="2" scope="col" style="border: 1px solid black; text-align:center;">3rd G</th>
            <th colspan="2" scope="col" style="border: 1px solid black; text-align:center;">Total</th>
    
          </tr>
        </thead>
        <tbody>
        @foreach($case->twenty as $twenty)
          <tr>
            <td rowspan="2" scope="row" style="border: 1px solid black; text-align:center;"> 
            {{ $twenty->country->name  ?? ''}}
            </td>
            <td rowspan="2" scope="row" style="border: 1px solid black; text-align:center;">{{ $twenty->q20_description }}</td>
            <td colspan="2" scope="col" style="border: 1px solid black; text-align:center;">{{ $twenty->q20_number_cases_men }}</td> 
            <td colspan="2" scope="col" style="border: 1px solid black; text-align:center;">{{ $twenty->q20_number_cases_women }}</td> 
            <td colspan="2" scope="col" style="border: 1px solid black; text-align:center;">{{ $twenty->q20_number_cases_third_gender }}</td> 
            <td colspan="2" scope="col" style="border: 1px solid black; text-align:center;">{{ $twenty->q20_number_cases_total }}</td> 

          </tr>
          @endforeach
      </tbody>
      </table>
      </div>  
    </div>
  </div>
</div>  
@endif
  <!-- End the Question No 20 -->
  @if(array_search("21.question",$permissions,true))
  <!-- Start the Question No 21 -->
  <div class="col-md-12 question21">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">21.Were there any new (or changes to preexisting) formal/standard procedures for
        victim identification
        at your ministry/agency/organization?</h3>

      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
    <div class="card-body">
      <div id ="21_question_view">
      <table class="table" style="width:100%; border: 1px solid black;">
        <thead>
          <tr>
            <th scope="col" style="border: 1px solid black; text-align:center;">Main document/Procedure</th>
            <th scope="col" style="border: 1px solid black; text-align:center;">Description of change/Status</th>
            <th scope="col" style="border: 1px solid black; text-align:center;">Attach/Upload</th>
          </tr>
        </thead>
        <tbody>
        @foreach($case->twentyone as $twentyone)
          <tr>
            <td style="border: 1px solid black; text-align:center;">
            @if ($twentyone->q21_main_document_procedure	 == 1)
            PSHT Act 2012 on VoT identification
                @elseif ($twentyone->q21_main_document_procedure	 == 2)
                NRM guideline on VoT identification
                @else
           
                 {{$twentyone->q21_main_document_procedure}}
                  @endif
              
            </td>
            
            <td style="border: 1px solid black; text-align:center;">   
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
            <td style="border: 1px solid black; text-align:center;">
            <!-- <img id="logo" src="{{ asset($twentyone->upload_file_21) }}" width="50" height="50;" /> -->
             </td>
          </tr>
          @endforeach
         
        </tbody>
      </table>
      </div>
    </div>
  </div>
</div>
@endif
  <!-- End the Question No 21 -->
  @if(array_search("22.question",$permissions,true))
  <!-- Start the Question No 22 -->
  <div class="col-md-12 question22">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">22.Is there any update on the existing formal written procedures to guide
        enforcement, immigration,
        and social services personnel in proactive victim identification?</h3>

      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
    <div class="card-body">
      <div id ="22_question_view">
      <table class="table" style="width:100%; border: 1px solid black;">
        <thead>
          <tr>
            <th scope="col" style="border: 1px solid black; text-align:center;">Main document/Procedure</th>
            <th scope="col" style="border: 1px solid black; text-align:center;">Description of change/Status</th>
            <th scope="col" style="border: 1px solid black; text-align:center;">Attach/Upload</th>
          </tr>
        </thead>
        <tbody>
        @foreach($case->twentytwo as $twentytwo)
          <tr>
            <th style="border: 1px solid black; text-align:center;">
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
        
              <td style="border: 1px solid black; text-align:center;"> 
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
              <td style="border: 1px solid black; text-align:center;"> 
              <!-- <img id="logo" src="{{ asset($twentytwo->upload_file_q22) }}" width="50" height="50;" /> -->
                
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      </div>
    </div>
  </div>
</div>
@endif
  <!-- End the Question No 22 -->
  @if(array_search("23.question",$permissions,true))  <!-- Start the Question No 23 -->
  <div class="col-md-12 question23">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">23. Is there any update on the existing approach of screening conducted by law enforcement, immigration, and social services personnel for indicators of trafficking, including of migrants, other vulnerable groups, and when detaining or arresting individuals in commercial sex?  </h3>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
        <div class="card-body">
          <div id="23_question_view">
          <table class="table" style="width:100%; border: 1px solid black;">
            <thead>
              <tr>
                <th scope="col" style="border: 1px solid black; text-align:center;">Main document/Procedure</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Description of change/Status</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Attach/Upload</th>
              </tr>
            </thead>
            <tbody>
              @foreach($case->twentythree as $twentythree)
              <tr>
                <td style="border: 1px solid black; text-align:center;">
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
              
                <td style="border: 1px solid black; text-align:center;">
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
                <td style="border: 1px solid black; text-align:center;"> 
                <!-- <img id="logo" src="{{ asset($twentythree->upload_file_q23) }}" width="50" height="50;" /> -->
                 
                 </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
    @endif
  <!-- End the Question No 23 -->
  @if(array_search("24.question",$permissions,true))
  <!-- Start the Question No 24 -->
  <div class="col-md-12 question24">
    <div class="card card-outline collapsed-card">
      <div class="card-header">
        <h3 class="card-title">24.Were there any new (or changes to preexing) formal/standard procedures for
          victim referral to protected services at your ministry/agency/organization ?</h3>

        <!-- <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
          </button>
        </div> -->
      </div>
      <div class="card-body">
        <div id ="24_question_view">
          <table class="table" style="width:100%; border: 1px solid black;">
            <thead class="">
              <tr>
                <th rowspan="2" style="border: 1px solid black; text-align:center;">Title of Origin Guidelines</th>
                <th rowspan="2" style="border: 1px solid black; text-align:center;">Description of change/Status</th>
                <th colspan="6" style="border: 1px solid black; text-align:center;">VoT referred</th>

              </tr>
              <tr>
                <th style="border: 1px solid black; text-align:center;">Men</th>
                <th style="border: 1px solid black; text-align:center;">Women</th>
                <th style="border: 1px solid black; text-align:center;">Boys</th>
                <th style="border: 1px solid black; text-align:center;">Girls</th>
                <th style="border: 1px solid black; text-align:center;">3rd G</th>
                <th style="border: 1px solid black; text-align:center;">Total</th>
              </tr>
              @foreach($case->twentyfour as $twentyfour)
              <tr>
                <td style="border: 1px solid black; text-align:center;">
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
             
                <td style="border: 1px solid black; text-align:center;">
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
                <td style="border: 1px solid black; text-align:center;">
                {{$twentyfour->men_q24}}  
                </td>
                <td style="border: 1px solid black; text-align:center;">  {{$twentyfour->women_q24}}</td>
                <td style="border: 1px solid black; text-align:center;"> {{$twentyfour->boy_q24}}</td>
                <td style="border: 1px solid black; text-align:center;">{{$twentyfour->girl_q24}}</td>
                <td style="border: 1px solid black; text-align:center;">{{$twentyfour->third_gender_q24}}</td>
                <td style="border: 1px solid black; text-align:center;">{{$twentyfour->total_q24}}</td>

              </tr>
              @endforeach
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
  @endif
  <!-- End the Question No 24 -->
  @if(array_search("25.question",$permissions,true))
  <!-- Start the Question No 25 -->
  <div class="col-md-12 question25">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">25.Were there any new (or changes to preexisting) procedures or services available
        for victim care at your ministry/agency/organization?</h3>

      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
    <div class="card-body">
      <div id ="25_question_view" class="card-body row">
      <table id="addRowQ25" class="table " style="width:100%; border: 1px solid black;">
        <thead class="">
         
          <tr>
            <th rowspan="2" style="border: 1px solid black; text-align:center;">Protection Services</th>
            <th rowspan="2" style="border: 1px solid black; text-align:center;">Status</th>
            <th colspan="6"  style="border: 1px solid black; text-align:center;">Current Coverage of VoTs</th>
          </tr>
          <tr>
            <th style="border: 1px solid black; text-align:center;">Men</th>
            <th style="border: 1px solid black; text-align:center;">Women</th>
            <th style="border: 1px solid black; text-align:center;">3rd G</th>
            <th style="border: 1px solid black; text-align:center;">Boy</th>
            <th style="border: 1px solid black; text-align:center;">Girls</th>
            <th style="border: 1px solid black; text-align:center;">Total</th>
          </tr>

      <tbody>
        @foreach($case->twentyfive as $twentyfive)
          <tr>
            <td style="border: 1px solid black; text-align:center;">
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
            <td style="border: 1px solid black; text-align:center;">
              @if($twentyfive->	q25_status_id==1)
              New
              @elseif($twentyfive->	q25_status_id==2)
              Existing
              @endif
             
            </td>

            <td style="border: 1px solid black; text-align:center;">
            {{$twentyfive->q25_current_coverage_vots_men}}
            </td> 
            <td style="border: 1px solid black; text-align:center;">
            {{$twentyfive->q25_current_coverage_vots_women}}
            </td>
            <td style="border: 1px solid black; text-align:center;">
            {{$twentyfive->q25_current_coverage_vots_third_gender}}
            </td> 
            <td style="border: 1px solid black; text-align:center;">
            {{$twentyfive->q25_current_coverage_vots_boy}}
            <td style="border: 1px solid black; text-align:center;">
            {{$twentyfive->q25_current_coverage_vots_girl}}
            </td> 
            <td style="border: 1px solid black; text-align:center;">
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
  <!-- End the Question No 25 -->
  @endif
  @if(array_search("26.question",$permissions,true))
  <!-- Start the Question No 26 -->
  <div class="col-md-12 question26">
        <div class="card card-outline collapsed-card">
          <div class="card-header">
            <h3 class="card-title">26.What was the quality of care?</h3>

            <!-- <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div> -->
          </div>
          <div class="card-body">
          <div id="26_question_view">
            <table id="addRowQ26" cellpadding=0 celspecing=0 width="100%" class="table " style="width:100%; border: 1px solid black;">
              <thead class="">
                <tr>
                  <th style="border: 1px solid black; text-align:center;">Protection Services</th>
                  <th style="border: 1px solid black; text-align:center;">Quality</th>
                  <th style="border: 1px solid black; text-align:center;">Location</th>

                </tr>
              </thead>
                <tbody>
                @foreach($case->twentysix as $twentysix)
                <tr>
                <td style="border: 1px solid black; text-align:center;">
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
                  <td style="border: 1px solid black; text-align:center;">
                  @if($twentysix->	q26_quality_id==1)
                  Excellent
                  @elseif($twentysix->	q26_quality_id==2)
                  As per standard
                  @elseif($twentysix->	q26_quality_id==3)
                  below standard
                  @endif
                    
                  </td>
                  <td style="border: 1px solid black; text-align:center;">
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
  <!-- End the Question No 26 -->
  @endif

  @if(array_search("27.question",$permissions,true))
  <!-- Start the Question No 27 -->
  <div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">27.Where were child victims placed (e.g., in shelters, foster care, or child
        development centers), and what kind of specialized care did they receive? Please describe coverage?</h3>

      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
    <div class="card-body">
      <table class="table" style="width:100%; border: 1px solid black;">
        <thead>
          <tr>
            <th rowspan="2" style="border: 1px solid black; text-align:center;">Location</th>
            <th rowspan="2" style="border: 1px solid black; text-align:center;">Type of Facility</th>
            <th rowspan="2" style="border: 1px solid black; text-align:center;">Number of Facility</th>
            <th colspan="3" style="border: 1px solid black; text-align:center;">Number of children</th>
          </tr>

          <tr>
            <th style="border: 1px solid black; text-align:center;">Boy</th>
            <th style="border: 1px solid black; text-align:center;">Girl</th>
            <th style="border: 1px solid black; text-align:center;">Total</th>
          </tr>
        </thead>
        @foreach($case->twentyseven as $twentyseven)
        <tr>
          <td style="border: 1px solid black; text-align:center;">
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
          <td style="border: 1px solid black; text-align:center;">
            @if ($twentyseven->type_facility == 1)
            Shelter
            @elseif ($twentyseven->type_facility == 2)
            Development Center	
            @endif
          </td>
          <td style="border: 1px solid black; text-align:center;">{{$twentyseven->number_facility}}  </td>
          <td style="border: 1px solid black; text-align:center;">{{$twentyseven->number_children_boy_q27}}  </td>
          <td style="border: 1px solid black; text-align:center;">{{$twentyseven->number_children_girl_q27}}  </td>
          <td style="border: 1px solid black; text-align:center;">{{$twentyseven->number_children_total_q27}}  </td>
     
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
  <!-- End the Question No 27 -->
  @endif
  @if(array_search("28.question",$permissions,true))
  <!-- Start the Question No 28 -->
  <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">28.Please provide an overview of the Protection Services available for the VoTs.
          </h3>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
        <div class="card-body">
          <table class="table" style="width:100%; border: 1px solid black;">
            <thead>
              <tr>
                <th colspan="6" scope="col" style="border: 1px solid black; text-align:center;">Identification of Vots</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td colspan="2" style="border: 1px solid black; text-align:center;">Victims identified by government</th>
                <td colspan="1" style="border: 1px solid black; text-align:center;"> Sex Trafficking</td>
                <td colspan="1" style="border: 1px solid black; text-align:center;"> Forced Labor</td>
                <td colspan="1" style="border: 1px solid black; text-align:center;">Other Trafficking (Specify)</td>
                <td colspan="1" style="border: 1px solid black; text-align:center;">Unspecified Trafficking</td>
              </tr>
              @foreach($case->twentyeight as $twentyeight)
              <tr>
              <td colspan="2" style="border: 1px solid black; text-align:center;">
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
                <td colspan="1" style="border: 1px solid black; text-align:center;">{{$twentyeight->identification_sex_trafficking}} </td>
                <td colspan="1" style="border: 1px solid black; text-align:center;">{{$twentyeight->identification_forced_labor}} </td>
                <td  colspan="1"style="border: 1px solid black; text-align:center;">{{$twentyeight->identification_other_traficking}} </td>
                <td  colspan="1"style="border: 1px solid black; text-align:center;">{{$twentyeight->identification_unspecified_traficking}} </td>
                
              </tr>
                <tr>
                <td colspan="2" style="border: 1px solid black; text-align:center;">
                @if ($twentyeight->referral_type == 1)
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
                <td colspan="1" style="border: 1px solid black; text-align:center;">{{$twentyeight->referral_sex_trafficking}} </td>
                <td colspan="1" style="border: 1px solid black; text-align:center;">{{$twentyeight->referral_forced_labor}} </td>
                <td colspan="1" style="border: 1px solid black; text-align:center;">{{$twentyeight->referral_other_traficking}} </td>
                <td colspan="1" style="border: 1px solid black; text-align:center;">{{$twentyeight->referral_unspecified_traficking}} </td>
                
              </tr>
                <tr>
                <td colspan="2" style="border: 1px solid black; text-align:center;">
                @if ($twentyeight->victims_type == 1)
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
                <td colspan="1" style="border: 1px solid black; text-align:center;">{{$twentyeight->victims_sex_trafficking}} </td>
                <td colspan="1" style="border: 1px solid black; text-align:center;">{{$twentyeight->victims_forced_labor}} </td>
                <td colspan="1" style="border: 1px solid black; text-align:center;">{{$twentyeight->victims_other_traficking}} </td>
                <td colspan="1" style="border: 1px solid black; text-align:center;">{{$twentyeight->victims_unspecified_traficking}} </td>
                
              </tr>

                <tr>
                  <td colspan="2" style="border: 1px solid black; text-align:center;">
                    @if ($twentyeight->repatriated_type == 1)
                    victims repatriated by host government
                    @elseif ($twentyeight->repatriated_type == 2)
                    victims repatriated by foreign government
                    @elseif ($twentyeight->repatriated_type == 3)
                    victims repatriated by NGOs/INGOs/UN agencies
            
                
                    @endif
                  </td>
                <td colspan="1" style="border: 1px solid black; text-align:center;">{{$twentyeight->repatriated_sex_trafficking}} </td>
                <td colspan="1" style="border: 1px solid black; text-align:center;">{{$twentyeight->repatriated_forced_labor}} </td>
                <td colspan="1" style="border: 1px solid black; text-align:center;">{{$twentyeight->repatriated_other_traficking}} </td>
                <td colspan="1" style="border: 1px solid black; text-align:center;">{{$twentyeight->repatriated_unspecified_traficking}} </td>
                
              </tr>
              @endforeach
            </tbody>
          </table>
         
        </div>
      </div>
    </div>
  <!-- End the Question No 28 -->
  @endif
  @if(array_search("29.question",$permissions,true))
  <!-- Start the Question No 29 -->
  <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">29.How much funding (in the local currency) did the ministry/agency/organization
            spend on protection
            efforts?</h3>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
        <div class="card-body">
          <table class="table " style="width:100%; border: 1px solid black;">
            <thead>
              <tr>
                <th scope="col" style="border: 1px solid black; text-align:center;">Type of protection Action</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Allocation (in BDT)</th>
              </tr>
            </thead>
            <tbody>
              @foreach($case->twentynine as $twentynine)
              <tr>
                <th style="border: 1px solid black; text-align:center;">
                @if ($twentynine->type_protection_action	 == 1)
                Total Allocation under NPA for protection
                @elseif ($twentynine->type_protection_action	 == 2)
                Total allocation spent for different protection services
                @elseif ($twentynine->type_protection_action	 == 3)
                Assessment of Allocation
                @endif
                
                </th>
            
                <td style="border: 1px solid black; text-align:center;">
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
  <!-- End the Question No 29 -->
  @endif
  @if(array_search("30.question",$permissions,true))
  <!-- Start the Question No 30 -->
<div class="col-md-12 question30">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">30.Were foreign victims legally entitled to the same benefits as host country
        nationals?</h3>

      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
    <div class="card-body">
      <div id ="30_question_view" class="card-body row">
        <table id="addRowQ30" class="table" style="width:100%; border: 1px solid black;">
          <thead class="">
            <tr>
              <th rowspan="2" style="text-align: center; margin: bottom 45%; border: 1px solid black; text-align:center;">Protection Services</th>
              <th rowspan="2" style="border: 1px solid black; text-align:center;">Status of coverage</th>
              <th colspan="6" style="border: 1px solid black; text-align:center;">Current Coverage of Foreign VoTs</th>
            </tr>
            <tr>
              <th style="border: 1px solid black; text-align:center;">Men</th>
              <th style="border: 1px solid black; text-align:center;">Women</th>
              <th style="border: 1px solid black; text-align:center;">3rd G</th>
              <th style="border: 1px solid black; text-align:center;">Boy</th>
              <th style="border: 1px solid black; text-align:center;">Girls</th>
              <th style="border: 1px solid black; text-align:center;">Total</th>
            </tr>
          </thead>
          <tbody>
            @foreach($case->thirty as $thirty)

            <tr>
              <td style="border: 1px solid black; text-align:center;">
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
              <td style="border: 1px solid black; text-align:center;">
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
            <td style="border: 1px solid black; text-align:center;">
            {{$thirty->current_coverage_foreign_vots_men}}
            </td> 
            <td style="border: 1px solid black; text-align:center;">
            {{$thirty->current_coverage_foreign_vots_women}}
            </td>
            <td style="border: 1px solid black; text-align:center;">
            {{$thirty->current_coverage_foreign_vots_third_gender}}
            </td> 
            <td style="border: 1px solid black; text-align:center;">
            {{$thirty->current_coverage_foreign_vots_boy}}
            <td style="border: 1px solid black; text-align:center;">
            {{$thirty->current_coverage_foreign_vots_girl}}
            </td> 
            <td style="border: 1px solid black; text-align:center;">
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
  <!-- End the Question No 30 -->
  @endif
  @if(array_search("31.question",$permissions,true))
  <!-- Start the Question No 31 -->
  <div class="col-md-12 question31">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">31.Were foreign victims legally entitled to the same benefits as host country
        nationals?</h3>

      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
  
  <div class="card-body">
      
  <div id="31_question_view">
    <div class="">
        <table id="addRowQ31Internal" class="table " style="width:100%; border: 1px solid black;">
            <thead class="">
                <tr>
                  <th rowspan="2" style=" text-align: center; margin: bottom 45%; border: 1px solid black; text-align:center;">Types of Hotlines</th>
                  <th rowspan="2" style="border: 1px solid black; text-align:center;">Implementer</th>
                  <th rowspan="2" style="border: 1px solid black; text-align:center;">Hotline number</th>
                  <th colspan="6" style="border: 1px solid black; text-align:center;">Coverage</th>
                </tr>
                <tr>
                  <th style="border: 1px solid black; text-align:center;">Men</th>
                  <th style="border: 1px solid black; text-align:center;">Women</th>
                  <th style="border: 1px solid black; text-align:center;">3rd G</th>
                  <th style="border: 1px solid black; text-align:center;">Boy</th>
                  <th style="border: 1px solid black; text-align:center;">Girls</th>
                  <th style="border: 1px solid black; text-align:center;">Total</th>
                </tr>
            </thead>
            <tbody>
              @foreach($case->thirtyone as $thirtyone)
                <tr>
                  <td colspan="10" style="border: 1px solid black; text-align:center;">
                    @if($thirtyone->	q31_type==1)
                    Internal Trafficking
                    @elseif($thirtyone->	q31_type==2)
                    International Trafficking
                    @endif  
                  </td>
                </tr>

                <tr>
                  <td style="border: 1px solid black; text-align:center;">
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

                  <td style="border: 1px solid black; text-align:center;">
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
                  <td style="border: 1px solid black; text-align:center;">
                  {{$thirtyone->q31_traffick_hotline_number}}
                  </td> 
                  <td style="border: 1px solid black; text-align:center;">
                  {{$thirtyone->q31_traffick_men}}
                  </td> 
                  <td style="border: 1px solid black; text-align:center;">
                  {{$thirtyone->q31_traffick_women}}
                  </td>
                  <td style="border: 1px solid black; text-align:center;">
                  {{$thirtyone->q31_traffick_third_gender}}
                  </td> 
                  <td style="border: 1px solid black; text-align:center;">
                  {{$thirtyone->q31_traffick_boys}}
                  </td>
                  <td style="border: 1px solid black; text-align:center;">
                  {{$thirtyone->q31_traffick_girls}}
                  </td> 
                  <td style="border: 1px solid black; text-align:center;">
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
  <!-- End the Question No 31 -->
  @endif
  @if(array_search("32.question",$permissions,true))

  <!-- Start the Question No 32 -->
  <div class="col-md-12 question32">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">32.Did VoT participated in investigation and prosecution?</h3>

      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
    <div class="card-body">
     

    
      <div id ="32_question_view">
      <table class="table " style="width:100%; border: 1px solid black;">
        <thead class="">
          <tr>
            <th colspan="6" style="border: 1px solid black; text-align:center;">VoT participating in
              investigation/prosecution</th>
          </tr>
          <!-- <tr>
            <td colspan="6" text-align:"center">Internal Trafficking</td>
            <input type="hidden" name="q32_type[]" value="1">
          </tr> -->
          <tr>
            <th style="border: 1px solid black; text-align:center;">Men</th>
            <th style="border: 1px solid black; text-align:center;">Women</th>
            <th style="border: 1px solid black; text-align:center;">3rd G</th>
            <th style="border: 1px solid black; text-align:center;">Boy</th>
            <th style="border: 1px solid black; text-align:center;">girls</th>
            <th style="border: 1px solid black; text-align:center;">Total</th>
          </tr>
          </thead>
          <tbody>
            @foreach($case->thirtytwo as $thirtytwo)

              <tr>

                <td colspan="10" style="border: 1px solid black; text-align:center;">
                  @if($thirtytwo->	q32_type==1)
                  Internal Trafficking
                  @elseif($thirtytwo->	q32_type==2)
                  International Trafficking
                  @endif  
                </td>
              </tr>

              <tr>

              
                <td style="border: 1px solid black; text-align:center;">
                {{$thirtytwo->q32_internal_trafficking_men}}
                </td> 
                <td style="border: 1px solid black; text-align:center;">
                {{$thirtytwo->q32_trafficking_women}}
                </td>
                <td style="border: 1px solid black; text-align:center;">
                {{$thirtytwo->q32_trafficking_third_gender}}
                </td> 
                <td style="border: 1px solid black; text-align:center;">
                {{$thirtytwo->q32_trafficking_boy}}
                </td>
                <td style="border: 1px solid black; text-align:center;">
                {{$thirtytwo->q32_trafficking_girl}}
                </td> 
                <td style="border: 1px solid black; text-align:center;">
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
  <!-- End the Question No 32 -->
  @endif
  @if(array_search("33.question",$permissions,true))

  <!-- Start the Question No 33 -->
  <div class="col-md-12 question33">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">33.Were participating victims provided any forms of witness protection? If “Yes’,
            how many?</h3>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
        <div class="card-body">
            <div id="33_question_view">
          <table class="table " style="width:100%; border: 1px solid black;">
            <thead class="">
              <tr>
                <th colspan="6" style="border: 1px solid black; text-align:center;">VoT participating in investigation
                  Provided with Witness Protection</th>
              </tr>
              <!-- <tr>
                <td colspan="6" text-align:"center">Internal Trafficking</td>
                <input type="hidden" name="q33_type[]" value="1">
              </tr> -->
              <tr>
                <th style="border: 1px solid black; text-align:center;">Men</th>
                <th style="border: 1px solid black; text-align:center;">Women</th>
                <th style="border: 1px solid black; text-align:center;">3rd G</th>
                <th style="border: 1px solid black; text-align:center;">Boy</th>
                <th style="border: 1px solid black; text-align:center;">Girls</th>
                <th style="border: 1px solid black; text-align:center;">Total</th>
              </tr>
              </thead>
                 <tbody>
            @foreach($case->thirtythree as $thirtythree)
              <tr>
                <td colspan="10" style="border: 1px solid black; text-align:center;">
                  @if($thirtythree->	q33_type==1)
                  Internal Trafficking
                  @elseif($thirtythree->	q33_type==2)
                  International Trafficking
                  @endif  
                </td>
              </tr>
              <tr> 
              <td style="border: 1px solid black; text-align:center;">
              {{$thirtythree->q33_trafficking_men}}
              </td> 
              <td style="border: 1px solid black; text-align:center;">
              {{$thirtythree->q33_trafficking_women}}
              </td>
              <td style="border: 1px solid black; text-align:center;">
              {{$thirtythree->q33_trafficking_third_gender}}
              </td> 
              <td style="border: 1px solid black; text-align:center;">
              {{$thirtythree->q33_trafficking_boy}}
              <td style="border: 1px solid black; text-align:center;">
              {{$thirtythree->q33_trafficking_girl}}
              </td> 
              <td style="border: 1px solid black; text-align:center;">
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
  <!-- End the Question No 33 -->
  @endif
  @if(array_search("34.question",$permissions,true))

  <!-- Start the Question No 34 -->
  <div class="col-md-12 question34">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">34.Did your ministry/agency/organization take any steps to avoid
        re-traumatization
        of victims in
        investigation and prosecution? Please describe.</h3>

      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
    <div class="card-body">
        <div id="34_question_view" class="card-body row">
      <table id="addRowQ34" class="table " style="width:100%; border: 1px solid black;">
        <thead class="">
          <tr>
            <th rowspan="2" style=" text-align: center; margin: bottom 45%; border: 1px solid black; text-align:center;">Location
              </th>
            <th rowspan="2" style="border: 1px solid black; text-align:center;">Types of Assistance</th>
            <th colspan="6" style="border: 1px solid black; text-align:center;">Coverage</th>
          </tr>
          <tr>
            <th style="border: 1px solid black; text-align:center;">Men</th>
            <th style="border: 1px solid black; text-align:center;">Women</th>
            <th style="border: 1px solid black; text-align:center;">3rd G</th>
            <th style="border: 1px solid black; text-align:center;">Boys</th>
            <th style="border: 1px solid black; text-align:center;">Girls</th>
            <th style="border: 1px solid black; text-align:center;">Total</th>
          </tr>
        </thead>
        <tbody>
          @foreach($case->thirtyfour as $thirtyfour)

            <tr>
              <td style="border: 1px solid black; text-align:center;"> 
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
              <td style="border: 1px solid black; text-align:center;">
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
              <td style="border: 1px solid black; text-align:center;">
              {{$thirtyfour->q34_coverage_men}}
              </td> 
              <td style="border: 1px solid black; text-align:center;">
              {{$thirtyfour->q34_coverage_women}}
              </td>
              <td style="border: 1px solid black; text-align:center;">
              {{$thirtyfour->q34_coverage_third_gender}}
              </td> 
              <td style="border: 1px solid black; text-align:center;">
              {{$thirtyfour->q34_coverage_boy}}
              <td style="border: 1px solid black; text-align:center;">
              {{$thirtyfour->q34_coverage_girl}}
              </td> 
              <td style="border: 1px solid black; text-align:center;">
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
  <!-- End the Question No 34 -->
  @endif
  @if(array_search("35.question",$permissions,true))

  <!-- Start the Question No 35 -->
  <div class="col-md-12 question35">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">35.Have there been any changes to preexisting anti-trafficking legislation during
            the reporting period
            (amendments to laws or penal codes, new laws, official circular/ decrees, supreme court precedents,
            etc.)?</h3>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
        <div class="card-body">
      <div id="35_question_view">
          <h3>Reform of Existing Law</h3>
          <table class="table " style="width:100%; border: 1px solid black;">
            <thead>
              <tr>
                <th scope="col" style="border: 1px solid black; text-align:center;">Title of the law</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Contents of Change/Status</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Attach/Upload</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->thirtyfive as $thirtyfive)
              <tr>
                <td style="border: 1px solid black; text-align:center;">
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
                <!-- @elseif($thirtyfive->	reform_existing_law_q35_one==10)
                {{$thirtyfive->	reform_existing_law_q35_one}}
                @elseif($thirtyfive->	reform_existing_law_q35_one==11)
                {{$thirtyfive->	reform_existing_law_q35_one}}
                @elseif($thirtyfive->	reform_existing_law_q35_one==12) -->
                @else
                {{$thirtyfive->	reform_existing_law_q35_one}}
                @endif 
                
                </td>
                <td style="border: 1px solid black; text-align:center;"> 
                @if($thirtyfive->	contents_status_id_q35_one==1)
                Revised
                @elseif($thirtyfive->	contents_status_id_q35_one==2)
                Abolished
                @endif 
                </td>
                <td style="border: 1px solid black; text-align:center;">
                <!-- <img id="logo" src="{{ asset($thirtyfive->attach_upload_one) }}" width="50" height="50;" /> -->
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>

          <h3>New Law</h3>
          <table class="table " style="width:100%; border: 1px solid black;">
            <thead>
              <tr>
                <th scope="col" style="border: 1px solid black; text-align:center;">Title of the New law</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Status</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Attach/Upload</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->thirtyfive as $thirtyfive)

              <tr>
                <td style="border: 1px solid black; text-align:center;">{{$thirtyfive->q35_title}}</td>
                <td style="border: 1px solid black; text-align:center;">
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
                <td style="border: 1px solid black; text-align:center;">
                      <!-- <img id="logo" src="{{ asset($thirtyfive->attach_upload_q35_two) }}" width="50" height="50;" /> -->

                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div> 
  <!-- End the Question No 35 -->
  @endif
  @if(array_search("36.question",$permissions,true))

  <!-- Start the Question No 36 -->
  <div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">36.Please list the number of individuals or cases, investigation, prosecution,
        or conviction for sex trafficking, labour trafficking/forced labour and other forms of trafficking
        (e.g.
        organ trafficking). </h3>

      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
    <div class="card-body">
      <h3>Investigations</h3>
      <table cellpadding=0 celspecing=0 width="100%" class="table " style="width:100%; border: 1px solid black;">
        <thead>

          <tr>
            <th style="border: 1px solid black; text-align:center;">Type of TIP Cases investigated</th>
            <th style="border: 1px solid black; text-align:center;">Category of coverage</th>
            <th style="border: 1px solid black; text-align:center;">Men</th>
            <th style="border: 1px solid black; text-align:center;">Women</th>
            <th style="border: 1px solid black; text-align:center;">3rd G</th>
            <th style="border: 1px solid black; text-align:center;">Boys</th>
            <th style="border: 1px solid black; text-align:center;">Girls</th>
            <th style="border: 1px solid black; text-align:center;">Total</th>
          </tr>
        </thead>
        <tbody>
        @foreach($case->thirtysix as $thirtysix)
        <tr>
          <!-- <td rowspan=3>Total individuals convicted</td> -->
          <td style="border: 1px solid black; text-align:center;">
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
          <td style="border: 1px solid black; text-align:center;">
          @if ($thirtysix->q36_category_coverage == 1)
          Number of Victims of Sex Trafficking Cases
          @elseif ($thirtysix->q36_category_coverage == 2)
          Number of Victims of Labour Trafficking Cases
          @elseif ($thirtysix->q36_category_coverage == 3)
          Number of Victims of Other/unspecified Trafficking Cases
                            
          @endif
          </td>
          <!-- <td>{{$thirtysix->q40_category_coverage}}</td> -->
          <td style="border: 1px solid black; text-align:center;">{{$thirtysix->q36_new_report_sex_trafficking_cases_men}}</td>
          <td style="border: 1px solid black; text-align:center;">{{$thirtysix->q36_new_report_sex_trafficking_cases_women}}</td>
          <td style="border: 1px solid black; text-align:center;">{{$thirtysix->q36_new_report_sex_trafficking_cases_third_gender}}</td>
          <td style="border: 1px solid black; text-align:center;">{{$thirtysix->q36_new_report_sex_trafficking_cases_boy}}</td>
          <td style="border: 1px solid black; text-align:center;">{{$thirtysix->q36_new_report_sex_trafficking_cases_girl}}</td>
          <td style="border: 1px solid black; text-align:center;">{{$thirtysix->q36_new_report_sex_trafficking_cases_total}}</td>
          
        </tr>
        @endforeach
        </tbody>
      </table>

    </div>
  </div>
</div>
  <!-- End the Question No 36 -->
  @endif
  @if(array_search("37.question",$permissions,true))
  <!-- Start the Question No 37 -->
  <div class="col-md-12">
        <div class="card card-outline collapsed-card">
          <div class="card-header">
            <h3 class="card-title">37. Please list the number of individuals or cases prosecution for sex
              trafficking, labour trafficking/forced labour and other forms of trafficking (e.g. organ
              trafficking). </h3>

            <!-- <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div> -->
          </div>
        <div class="card-body">
              <h3>Prosecution</h3>
              <table cellpadding=0 celspecing=0 style="width:100%; border: 1px solid black;">
                <thead>

                  <tr>
                    <td colspan="2" style="border: 1px solid black; text-align:center;"> Type of TIP Cases investigated
                    </td>
                    <td class="col-md-2" style="border: 1px solid black; text-align:center;">M</td>
                    <td class="col-md-2" style="border: 1px solid black; text-align:center;">W</td>
                    <td class="col-md-2" style="border: 1px solid black; text-align:center;">3rd G</td>
                    <td class="col-md-2" style="border: 1px solid black; text-align:center;">B</td>
                    <td class="col-md-2" style="border: 1px solid black; text-align:center;">G</td>
                    <td class="col-md-2" style="border: 1px solid black; text-align:center;">T</td>

                  </tr>
                </thead>
                <tbody>
                  @foreach($case->thirtyseven as $thirtyseven)
                  <tr>
                  <!-- <td rowspan=3>Total individuals convicted</td> -->
                  <td style="border: 1px solid black; text-align:center;">
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
                  <td style="border: 1px solid black; text-align:center;">
                  @if ($thirtyseven->q37_category_coverage == 1)
                  Number of Victims of Sex Trafficking Cases
                  @elseif ($thirtyseven->q37_category_coverage == 2)
                  Number of Victims of Labour Trafficking Cases
                  @elseif ($thirtyseven->q37_category_coverage == 3)
                  Number of Victims of Other/unspecified Trafficking Cases
                                    
                  @endif
                  </td>
                    <!-- <td>{{$thirtyseven->q40_category_coverage}}</td> -->
                    <td style="border: 1px solid black; text-align:center;">{{$thirtyseven->q37_new_report_sex_trafficking_cases_men}}</td>
                    <td style="border: 1px solid black; text-align:center;">{{$thirtyseven->q37_new_report_sex_trafficking_cases_women}}</td>
                    <td style="border: 1px solid black; text-align:center;">{{$thirtyseven->q37_new_report_sex_trafficking_cases_third_gender}}</td>
                    <td style="border: 1px solid black; text-align:center;">{{$thirtyseven->q37_new_report_sex_trafficking_cases_boy}}</td>
                    <td style="border: 1px solid black; text-align:center;">{{$thirtyseven->q37_new_report_sex_trafficking_cases_girl}}</td>
                    <td style="border: 1px solid black; text-align:center;">{{$thirtyseven->q37_new_report_sex_trafficking_cases_total}}</td>
                    
                  </tr>
                  @endforeach
                </tbody>
          </table>

        </div>
      </div>
    </div>
  <!-- End the Question No 37 -->
  @endif
  @if(array_search("38.question",$permissions,true))

  <!-- Start the Question No 38 -->
  <div class="col-md-12 question38">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">38.Did the government cooperate with foreign counterparts on any law enforcement
        activities?</h3>
        
      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
   
    <div class="card-body">
      <div id ="38_question_view" class="card-body row">
      <table id="addRowQ38" class="table " style="width:100%; border: 1px solid black;">
        <thead>
          <tr>
            <th scope="col" style="border: 1px solid black; text-align:center;">Country</th>
            <th scope="col" style="border: 1px solid black; text-align:center;">Sex Trafficking</th>
            <th scope="col" style="border: 1px solid black; text-align:center;">Labour Trafficking</th>
            <th scope="col" style="border: 1px solid black; text-align:center;">Other/Unspecific Trafficking</th>
            <th scope="col" style="border: 1px solid black; text-align:center;">Total</th>
          </tr>
        </thead>
        <tbody>
            @foreach($case->thirtyeight as $thirtyeight)

            <tr>
            <td style="border: 1px solid black; text-align:center;">
            {{$thirtyeight->country->name ?? ''}}
           

            </td>

            <td style="border: 1px solid black; text-align:center;">
            {{$thirtyeight->sex_trafficking}}
            </td> 
            <td style="border: 1px solid black; text-align:center;">
            {{$thirtyeight->labour_trafficking}}
            </td>
            <td style="border: 1px solid black; text-align:center;">
            {{$thirtyeight->other_unspecific_trafficking}}
            </td> 
            <td style="border: 1px solid black; text-align:center;">
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
  <!-- End the Question No 38 -->
  @endif
  @if(array_search("39.question",$permissions,true))

  <!-- Start the Question No 39 -->
  <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">39.Conviction of Trafficking Cases</h3>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
        <div class="card-body">
          <table class="table " style="width:100%; border: 1px solid black;">
            <thead>
              <tr>
                <th scope="col" style="border: 1px solid black; text-align:center;">Type of Cases reaching verdict </th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Number of Cases</th>
              </tr>
            </thead>
            <tbody>
              @foreach($case->thirtynine as $thirtynine)
              <tr>

              
              <td style="border: 1px solid black; text-align:center;">
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
              <td style="border: 1px solid black; text-align:center;">{{$thirtynine->number_of_cases}}</td>
              </tr>
              @endforeach
             
          </tbody>
          </table>

          <table class="table " style="width:100%; border: 1px solid black;">
            <thead>

            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div> 
  <!-- End the Question No 39 -->
  @endif
  @if(array_search("40.question",$permissions,true))
  <!-- Start the Question No 40 -->
  <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">40. Conviction Status</h3>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
        <div class="card-body">
          <h3>Conviction Status</h3>
          <table cellpadding=0 celspecing=0 style="width:100%; border: 1px solid black;">
            <thead>
              <tr>
                <td colspan="2" style="border: 1px solid black; text-align:center;"> Conviction Status
                </td>
                <td style="border: 1px solid black; text-align:center;">M</td>
                <td style="border: 1px solid black; text-align:center;">W</td>
                <td style="border: 1px solid black; text-align:center;">3rd G</td>
                <td style="border: 1px solid black; text-align:center;">B</td>
                <td style="border: 1px solid black; text-align:center;">G</td>
                <!-- <td>T</td> -->
                <td style="border: 1px solid black; text-align:center;">Total</td>
              </tr>
            </thead>
            <tbody>
              @foreach($case->forty as $forty)
              <tr>
              <!-- <td rowspan=3>Total individuals convicted</td> -->
              <td style="border: 1px solid black; text-align:center;">
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
              <td style="border: 1px solid black; text-align:center;">
              @if ($forty->q40_category_coverage == 1)
              Number of Victims of Sex Trafficking Cases
              @elseif ($forty->q40_category_coverage == 2)
              Number of Victims of Labour Trafficking Cases
              @elseif ($forty->q40_category_coverage == 3)
              Number of Victims of Other/unspecified Trafficking Cases
                                
              @endif
              </td>
                <!-- <td>{{$forty->q40_category_coverage}}</td> -->
                <td style="border: 1px solid black; text-align:center;">{{$forty->q40_new_report_sex_trafficking_cases_men}}</td>
                <td style="border: 1px solid black; text-align:center;">{{$forty->q40_new_report_sex_trafficking_cases_women}}</td>
                <td style="border: 1px solid black; text-align:center;">{{$forty->q40_new_report_sex_trafficking_cases_third_gender}}</td>
                <td style="border: 1px solid black; text-align:center;">{{$forty->q40_new_report_sex_trafficking_cases_boy}}</td>
                <td style="border: 1px solid black; text-align:center;">{{$forty->q40_new_report_sex_trafficking_cases_girl}}</td>
                <td style="border: 1px solid black; text-align:center;">{{$forty->q40_new_report_sex_trafficking_cases_total}}</td>
                
              </tr>
              @endforeach
          </tbody>
          </table>
        </div>
      </div>
    </div> 
  <!-- End the Question No 40 -->
  @endif
  @if(array_search("41.question",$permissions,true))

  <!-- Start the Question No 41 -->
  <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">41.Please provide details on Court Proceedings by District:</h3>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
        <div id="fourty_one_question_view" class="card-body row">
          <h3>Please provide details on Court Proceedings by District:</h3>
    <table cellpadding=0 celspecing=0 width="100%" id="addRowQ41" class="table " style="width:100%; border: 1px solid black;">
        <thead> 
          <tr>
              <th  style="border: 1px solid black; text-align:center;">District</th>
              <!-- <th>Previous Cases</th> -->
              <th style="border: 1px solid black; text-align:center;">Previous Cases</th>
              <th style="border: 1px solid black; text-align:center;">Received Cases</th>
              <th style="border: 1px solid black; text-align:center;">Total Cases</th>
              <th style="border: 1px solid black; text-align:center;">Disposed Cases</th>
              <th style="border: 1px solid black; text-align:center;">Transferred Cases</th>
              <th style="border: 1px solid black; text-align:center;">Pending Cases</th>
              <th style="border: 1px solid black; text-align:center;">Cases more than five year - old</th>
            </tr>
        </thead>
        <tbody>
            @foreach($case->fortyone as $fortyone)
              <tr>
              <td style="border: 1px solid black; text-align:center;">
              {{$fortyone->distric->name ?? ''}}
          
              </td>
              <td style="border: 1px solid black; text-align:center;">
              {{$fortyone->previous_cases}}
              </td> 
              <td style="border: 1px solid black; text-align:center;">
              {{$fortyone->received_cases}}
              </td>
              <td style="border: 1px solid black; text-align:center;">
              {{$fortyone->total_cases}}
              </td> 
              <td style="border: 1px solid black; text-align:center;">
              {{$fortyone->disposed_cases}}
              </td>  
              <td style="border: 1px solid black; text-align:center;">
              {{$fortyone->transferred_cases}}
              </td>  
              <td style="border: 1px solid black; text-align:center;">
              {{$fortyone->pending_cases}}
              </td>  
              <td style="border: 1px solid black; text-align:center;">
              {{$fortyone->cases_more_than_five_year_old}}
              </td>  
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  <!-- End the Question No 41 -->
  @endif
  @if(array_search("42.question",$permissions,true))

  <!-- Start the Question No 42 -->
  <div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">42.Conviction of Internal Trafficking by Division</h3>
      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
    <div class="col-md-12 question42">
      <h2>Conviction of Internal Trafficking by Division</h2>
      <!-- <h3>Total number of persons convicted of trafficking for Sexual exploitation</h3> -->
      <input type="hidden" name="q42_type[]" value="1">
      <table id="addRowQ42Sexual" class="table " style="width:100%; border: 1px solid black;">
        <thead>
          <tr>
            <th colspan="2" style="border: 1px solid black; text-align:center;">Division</th>
            <th colspan="2" style="border: 1px solid black; text-align:center;">Male</th>
            <th colspan="2" style="border: 1px solid black; text-align:center;">Female</th>
            <th colspan="2" style="border: 1px solid black; text-align:center;">3rd G</th>
            <th colspan="2" style="border: 1px solid black; text-align:center;">Total</th>
          </tr>
        </thead>
        <tbody>
            @foreach($case->fortytwo as $fortytwo)
              <tr>
                <td colspan="10" style="border: 1px solid black; text-align:center;">
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
              <td colspan="2" style="border: 1px solid black; text-align:center;">
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
                <td colspan="2" style="border: 1px solid black; text-align:center;">
                {{$fortytwo->q42_sexual_men}}
                </td> 
                <td colspan="2" style="border: 1px solid black; text-align:center;">
                {{$fortytwo->q42_sexual_women}}
                </td>
                <td colspan="2" style="border: 1px solid black; text-align:center;">
                {{$fortytwo->q42_sexual_third_gender}}
                </td> 
                <td  colspan="2"style="border: 1px solid black; text-align:center;">
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
  <!-- End the Question No 42 -->
  @endif
  @if(array_search("43.question",$permissions,true))

  <!-- Start the Question No 43 -->
  <div class="col-md-12 question43">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">43.Were there any new bilateral, multilateral, or regional enforcement coordination
            arrangements/ treaties/MoU/MLA with foreign counterparts?</h3>
          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>  
        <div class="card-body">

          <div id="43_question_view" class="card-body row">
          <table id="addRowQ43" class="table " style="width:100%; border: 1px solid black;">
            <thead>
              <tr>
                <th scope="col" style="border: 1px solid black; text-align:center;">Country</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Nature of Arrangement</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Focus</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Status</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Please upload a summary note or any other relevant document</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->fortythree as $fortythree)
              <tr>
                <td style="border: 1px solid black; text-align:center;">
                
                  {{$fortythree->country->name ?? ''}}
                </td>
                <td style="border: 1px solid black; text-align:center;">
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
                <td style="border: 1px solid black; text-align:center;">
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
                <td style="border: 1px solid black; text-align:center;">
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
                <td style="border: 1px solid black; text-align:center;">
                <!-- <img id="logo" src="{{ asset($fortythree->upload_document) }}" width="50" height="50;" /> -->      
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
  <!-- End the Question No 43 -->
  @endif
  @if(array_search("44.question",$permissions,true))

  <!-- Start the Question No 44 -->
  <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">44.Did any allegedly complicit officials face criminal investigations,
            prosecutions, convictions, or sentencing?</h3>
          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
        <div id="fourty_four_question_view" class="card-body row">
          <table id="addRowQ44" class="table " style="width:100%; border: 1px solid black;">
            <thead>
              <tr>
                <th rowspan="2" scope="col" style="border: 1px solid black; text-align:center;">Ministry/Department</th>
                <th colspan="4" style="border: 1px solid black; text-align:center;">Number of Official Accused</th>

              </tr>
              <tr>
                <th style="border: 1px solid black; text-align:center;">Men</th>
                <th style="border: 1px solid black; text-align:center;">Women</th>
                <th style="border: 1px solid black; text-align:center;">3rd G</th>
                <th style="border: 1px solid black; text-align:center;">Total</th>
                </tr>
            </thead>
              <tbody>
            @foreach($case->fortyfour as $fortyfour)
              <tr>
              <td style="border: 1px solid black; text-align:center;">
              {{$fortyfour->ministry_department}}
              </td> 
              <td style="border: 1px solid black; text-align:center;">
              {{$fortyfour->number_official_accused_men}}
              </td>
              <td style="border: 1px solid black; text-align:center;">
              {{$fortyfour->number_official_accused_women}}
              </td> 
              <td style="border: 1px solid black; text-align:center;">
              {{$fortyfour->number_official_accused_third_gender}}
              </td>
              <td style="border: 1px solid black; text-align:center;">
              {{$fortyfour->number_official_accused_total}}
              </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  <!-- End the Question No 44 -->
  @endif
  @if(array_search("45.question",$permissions,true))

  <!-- Start the Question No 45 -->
  <div class="col-md-12 question45" >
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">45.Did the government take any new to ensure that its policies, regulations, and
            agreements relating to
            migration, labor, trade, border security measures, and investment did not facilitate trafficking?</h3>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
        <div class="card-body">
          <table id="45_question_view" class="table " style="width:100%; border: 1px solid black;">
            <thead>
              <tr>
                <th scope="col" style="border: 1px solid black; text-align:center;">Ministry/Department</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Measures Taken</th>
              </tr>
            </thead>
            <tbody>
              @foreach($case->fortyfive as $fortyfive)

              <tr>
              <td style="border: 1px solid black; text-align:center;">{{$fortyfive->q45_ministry_department}}</td>
              <td style="border: 1px solid black; text-align:center;">{{$fortyfive->q45_measures_taken}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  <!-- End the Question No 45 -->
  @endif
  @if(array_search("46.question",$permissions,true))
  <!-- Start the Question No 46 -->
  <div class="col-md-12 question46">

  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">46.Is there any change to government unit(s) and/or courts responsible for
        investigating, prosecuting,
        and/or hearing trafficking cases. Please describe-</h3>

      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
  
    <div class="card-body">

     <div id="46_question_view" class="card-body row">
      <table id="addRowQ46" class="table " style="width:100%; border: 1px solid black;">
        <thead>
          <tr>
            <th scope="col" style="border: 1px solid black; text-align:center;">Name of the Unit/Court</th>
            <th scope="col" style="border: 1px solid black; text-align:center;">Focus/Jurisdiction</th>
            <th scope="col" style="border: 1px solid black; text-align:center;">Location</th>
          </tr>
        </thead>
        <tbody>
        @foreach($case->fortysix as $fortysix)

          <tr>
          <td style="border: 1px solid black; text-align:center;">
              {{$fortysix->q46_unit_court}}
              </td> 
              <td style="border: 1px solid black; text-align:center;">
              {{$fortysix->q46_focus_jurisdiction}}
              </td>
              <td style="border: 1px solid black; text-align:center;">

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
  <!-- End the Question No 46 -->
  @endif
  @if(array_search("47.question",$permissions,true))

  <!-- Start the Question No 47 -->
  <div class="col-md-12 question47">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">47.Did these units/courts have adequate resources? Please describe any update?</h3>

      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
    <div class="card-body">
 
      <div id="47_question_view" class="card-body row">
      <table id="addRowQ47" class="table " style="width:100%; border: 1px solid black;">
        <thead>
          <tr>
            <th scope="col" style="border: 1px solid black; text-align:center;">Name of the Unit/Court</th>
            <th scope="col" style="border: 1px solid black; text-align:center;">Focus/Jurisdiction</th>
            <th scope="col" style="border: 1px solid black; text-align:center;">Location</th>
          </tr>
        </thead>
        <tbody>
        @foreach($case->fortyseven as $fortyseven)

          <tr>
          <td style="border: 1px solid black; text-align:center;">
              {{$fortyseven->q47_name_unit}}
              </td> 
              <td style="border: 1px solid black; text-align:center;">
              {{$fortyseven->q47_focus_jurisdiction}}
              </td>
              <td style="border: 1px solid black; text-align:center;">
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
@endif
  <!-- End the Question No 47 -->
  @if(array_search("48.question",$permissions,true))

  <!-- Start the Question No 48 -->
  <div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">48.Did the government/your ministry/department/ organization train law enforcement
        and border security officials on anti-trafficking enforcement, policies, and laws? </h3>

      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
    <div if="q48_question_view" class="card-body row">
      <table id="addRowQ48" class="table " style="width:100%; border: 1px solid black;">
        <thead class="">
          <tr>
            <th rowspan="2" style="border: 1px solid black; text-align:center;">Category of Trainee </th>
            <th rowspan="2" style="border: 1px solid black; text-align:center;">Training Contents </th>
            <th rowspan="2" style="border: 1px solid black; text-align:center;">Number of Training</th>
            <th rowspan="2" style="border: 1px solid black; text-align:center;">Location
            </th>
            <th rowspan="2" style="border: 1px solid black; text-align:center;">Development Partner</th>
            <th colspan="4" style="border: 1px solid black; text-align:center;">Coverage</th>
          </tr>
          <tr>
            <th style="border: 1px solid black; text-align:center;">Men</th>
            <th style="border: 1px solid black; text-align:center;">Women</th>
            <th style="border: 1px solid black; text-align:center;">3rd G</th>
            <th style="border: 1px solid black; text-align:center;">Total</th>
          </tr>
          </thead>
             <tbody>
        @foreach($case->fortyeight as $fortyeight)

          <tr>
            <td style="border: 1px solid black; text-align:center;">
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
            <td style="border: 1px solid black; text-align:center;">
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
            <td style="border: 1px solid black; text-align:center;">
            {{$fortyeight->number_of_training}}
            </td> 
            <td style="border: 1px solid black; text-align:center;">
            {{$fortyeight->q48_location_id}}
            </td>
            <td style="border: 1px solid black; text-align:center;">
            {{$fortyeight->development_partner}}
            </td>
            <td style="border: 1px solid black; text-align:center;">
            {{$fortyeight->q48_coverage_men}}
            </td>
            <td style="border: 1px solid black; text-align:center;">
            {{$fortyeight->q48_coverage_women}}
            </td>
            <td style="border: 1px solid black; text-align:center;">
            {{$fortyeight->q48_coverage_third_gender}}
            </td>
            <td style="border: 1px solid black; text-align:center;">
            {{$fortyeight->q48_coverage_total}}
            </td>
            
          </tr>
        @endforeach
      </tbody>
      </table>
    </div>
  </div>
</div>
@endif
  <!-- End the Question No 48 -->
  @if(array_search("49.question",$permissions,true))

  <!-- Start the Question No 49 -->
  <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">49.Did the government/your ministry/department/organization train judiciary and
            court officials on anti-trafficking enforcement, policies, and laws? </h3>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
        <div id="q49_question_view" class="card-body row">



          <table id="addRowQ49" class="table " style="width:100%; border: 1px solid black;">
            <thead class="">
              <tr>
                <th rowspan="2"style="border: 1px solid black; text-align:center;">Category of Trainee </th>
                <th rowspan="2"style="border: 1px solid black; text-align:center;">Training Contents </th>
                <th rowspan="2"style="border: 1px solid black; text-align:center;">Number of Training</th>
                <th rowspan="2"style="border: 1px solid black; text-align:center;">Location</th>
                <th rowspan="2"style="border: 1px solid black; text-align:center;">Development Partner</th>
                <th colspan="4"style="border: 1px solid black; text-align:center;">Coverage</th>
              </tr>
              <tr>
                <th style="border: 1px solid black; text-align:center;">Men</th>
                <th style="border: 1px solid black; text-align:center;">Women</th>
                <th style="border: 1px solid black; text-align:center;">3rd G</th>
                <th style="border: 1px solid black; text-align:center;">Total</th>
              </tr>
              <thead>
            <tbody>
              @foreach($case->fortynine as $fortynine)
              <tr>
            <td style="border: 1px solid black; text-align:center;">
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
            <td style="border: 1px solid black; text-align:center;">
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
            <td style="border: 1px solid black; text-align:center;">{{$fortynine->q49_number_of_training}}</td>

            <td style="border: 1px solid black; text-align:center;">
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
            <td style="border: 1px solid black; text-align:center;">
            {{$fortynine->q49_development_partner}}
            </td> 
            <td style="border: 1px solid black; text-align:center;">
            {{$fortynine->q49_coverage_men}}
            </td>
            <td style="border: 1px solid black; text-align:center;">
            {{$fortynine->q49_coverage_women}}
            </td>
            <td style="border: 1px solid black; text-align:center;">
            {{$fortynine->q49_coverage_third_gender}}
            </td>
            <td style="border: 1px solid black; text-align:center;">
            {{$fortynine->q49_coverage_total}}
            </td>
          </tr>
            @endforeach
          </tbody>
          </table>
        </div>
      </div>
    </div>
  <!-- End the Question No 49 -->
  @endif
  @if(array_search("50.question",$permissions,true))

  <!-- Start the Question No 50 -->
  <div class="col-md-12 question50">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">50.How much funding (in the local currency) did the government spend on prosecution efforts (e.g.,
            awareness campaigns, research projects, national action plan implementation, etc.)?</h3>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
        <div class="card-body">

            <div id="50_question_view">
          <table class="table " style="width:100%; border: 1px solid black;">
            <thead>
              <tr>
                <th scope="col" style="border: 1px solid black; text-align:center;">Type of preventive Action</th>
                <th scope="col" style="border: 1px solid black; text-align:center;">Allocation (in BDT)</th>

              </tr>
            </thead>
            <tbody>
              @foreach($case->fifty as $fifty)
              <tr>
            <td style="border: 1px solid black; text-align:center;">
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
            <td style="border: 1px solid black; text-align:center;">{{$fifty->total_allocation_under_npa_prosecution_q50}}</td>
          </tr>
          @endforeach 
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
  <!-- End the Question No 50 -->
  @endif
  @if(array_search("51.question",$permissions,true))

  <!-- Start the Question No 51 -->
  <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">51.Did courts order restitution?</h3>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
        <div class="card-body">
          <table class="table " style="width:100%; border: 1px solid black;">
            <thead class="">
              <tr>
                <th style="border: 1px solid black; text-align:center;">Categories of VoTs</th>
                <th style="border: 1px solid black; text-align:center;">Number of Cases</th>
                <th style="border: 1px solid black; text-align:center;">Total amount Compensation in BDT</th>

              </tr>
            </thead>
            <tbody>
            @foreach($case->fiftyone as $fiftyone)
            <tr>
              <td style="border: 1px solid black; text-align:center;">
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
            <td style="border: 1px solid black; text-align:center;">{{$fiftyone->q51_number_case}}</td>
            <td style="border: 1px solid black; text-align:center;">{{$fiftyone->q51_total_case}}</td>
          </tr>
          @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  <!-- End the Question No 51 -->
  @endif
  @if(array_search("52.question",$permissions,true))

  <!-- Start the Question No 52 -->
  <div class="col-md-12 question52">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">52.How much did ministry/agency/organization allocate in victim compensation fund (National Fund)?</h3>
          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
        <div class="card-body">

          <div id ="52_question_view">
          <table class="table " style="width:100%; border: 1px solid black;">
            <thead></thead>
              <tbody>
              @foreach($case->fiftytwo as $fiftytwo)
                <tr>
                <td style="border: 1px solid black; text-align:center;">
                  @if ($fiftytwo->q52_type == 1)
                  BDT
                  @elseif ($fiftytwo->q52_type == 2)
                  MoHA
                  @elseif ($fiftytwo->q52_type == 3)
                  MoLJPA
                  
                  @endif
                  </td>
                <td style="border: 1px solid black; text-align:center;">{{$fiftytwo->q52_bdt}}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
  <!-- End the Question No 52 -->
  @endif
  @if(array_search("53.question",$permissions,true))


  <!-- Start the Question No 53 -->
  <div class="col-md-12 question53">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">53.How many VoTs received assistance? How much in total (in BDT).</h3>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div> -->
        </div>
    <div class="card-body">
    <div id ="53_question_view">
          <table id="addRowQ53" class="table " style="width:100%; border: 1px solid black;">
            <thead class="">
              <tr>
                <th rowspan="2" style="border: 1px solid black; text-align:center;">Number of Case</th>
                <th colspan="6" style="border: 1px solid black; text-align:center;">Individual Coverage</th>

              </tr>
              <tr>
                <th style="border: 1px solid black; text-align:center;">Men</th>
                <th style="border: 1px solid black; text-align:center;">Women</th>
                <th style="border: 1px solid black; text-align:center;">3rd G</th>
                <th style="border: 1px solid black; text-align:center;">Boy</th>
                <th style="border: 1px solid black; text-align:center;">Girl</th>
                <th style="border: 1px solid black; text-align:center;">Total</th>
              </tr>
              </thead>
              <tbody>
            @foreach($case->fiftythree as $fiftythree)

                <tr> 
                <td style="border: 1px solid black; text-align:center;">
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
              <td style="border: 1px solid black; text-align:center;">
              {{$fiftythree->q53_individual_coverage_men}}
              </td> 
              <td style="border: 1px solid black; text-align:center;">
              {{$fiftythree->q53_individual_coverage_women}}
              </td>
              <td style="border: 1px solid black; text-align:center;">
              {{$fiftythree->q53_individual_coverage_third_gender}}
              </td>
              <td style="border: 1px solid black; text-align:center;">
              {{$fiftythree->q53_individual_coverage_boy}}
              </td>
              <td style="border: 1px solid black; text-align:center;">
              {{$fiftythree->q53_individual_coverage_girl}}
              </td>
              <td style="border: 1px solid black; text-align:center;">
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
  <!-- End the Question No 53 -->
  @endif
  @if(array_search("54.question",$permissions,true))

  <!-- Start the Question No 54 -->
  <div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">54.Did ministry/agency/organization train law enforcing agencies and judiciary?
      </h3>

      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
    <div class="card-body row">
      <table id="addRowQ54" class="table " style="width:100%; border: 1px solid black;">
        <thead>
          <tr>
            <th rowspan="2" style="border: 1px solid black; text-align:center;">Category of Trainee</th>
            <th rowspan="2" style="border: 1px solid black; text-align:center;">Number of Training</th>
            <th rowspan="2" style="border: 1px solid black; text-align:center;">Training Contents</th>
            <th colspan="8" style="border: 1px solid black; text-align:center;">Coverage</th>
            </tr>
            <tr>
            <th colspan="2" style="border: 1px solid black; text-align:center;">Men</th>
            <th colspan="2" style="border: 1px solid black; text-align:center;">Women</th>
            <th colspan="2" style="border: 1px solid black; text-align:center;">3rd G</th>
            <th colspan="2" style="border: 1px solid black; text-align:center;">Total</th>
          </tr>
        </thead>
        <tbody>
        @foreach($case->fiftyfour as $fiftyfour)

          <tr>
          <td style="border: 1px solid black; text-align:center;">
              {{$fiftyfour->category_trainee_54}}
              </td> 
              <td style="border: 1px solid black; text-align:center;">
              {{$fiftyfour->number_of_training_54}}
              </td>
              <td style="border: 1px solid black; text-align:center;">
              {{$fiftyfour->training_contents_54}}
              </td> 
              <td colspan="2" style="border: 1px solid black; text-align:center;">
              {{$fiftyfour->men_q54}}
              </td> 
              <td colspan="2" style="border: 1px solid black; text-align:center;">
              {{$fiftyfour->women_q54}}
              </td> 
              <td colspan="2" style="border: 1px solid black; text-align:center;">
              {{$fiftyfour->third_gender_q54}}
              </td> 
              <td colspan="2" style="border: 1px solid black; text-align:center;">
              {{$fiftyfour->total_q54}}
              </td> 
          </tr>

        @endforeach 
        </tbody>
      </table>
    </div>
  </div>
</div> 
  <!-- End the Question No 54 -->
  @endif
  @if(array_search("55.question",$permissions,true))

  <!-- Start the Question No 55 -->
  <div class="col-md-12 question55">
    <div class="card card-outline collapsed-card">
      <div class="card-header">
        <h3 class="card-title">55.Did ministry/agency/organization/CTC carried out partnership promotion actions?
        </h3>

        <!-- <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
          </button>
        </div> -->
      </div>
      <div class="card-body row">
        <div class="">
          <table id="addRowQ55" class="table " style="width:100%; border: 1px solid black;">
            <thead class="">
              <tr>
                <th rowspan="2" style="border: 1px solid black; text-align:center;">Types of Activities</th>
                <th rowspan="2" style="border: 1px solid black; text-align:center;">District</th>
                <th rowspan="2" style="border: 1px solid black; text-align:center;">Number of Organizations covered</th>
                <th rowspan="2" style="border: 1px solid black; text-align:center;">Number of Events</th>
                <th colspan="6" style="border: 1px solid black; text-align:center;">Number of Individuals Covered</th>
              </tr>
              <tr>
                <th style="border: 1px solid black; text-align:center;">Men</th>
                <th style="border: 1px solid black; text-align:center;">Women</th>
                <th style="border: 1px solid black; text-align:center;">3rd G</th>
                <th style="border: 1px solid black; text-align:center;">Boy</th>
                <th style="border: 1px solid black; text-align:center;">Girls</th>
                <th style="border: 1px solid black; text-align:center;">Total</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->fiftyfive as $fiftyfive)
              <tr>
                <td style="border: 1px solid black; text-align:center;">
            @if($fiftyfive->	q55_type_activities==1)
            GO-NGO Coordination
            @elseif($fiftyfive->	q55_type_activities==2)
            Facilitation of CTC Members (Union)
            @elseif($fiftyfive->	q55_type_activities==3)
            Facilitation of CTC Members (Upazilla)
            @elseif($fiftyfive->	q55_type_activities==4)
            Facilitation of CTC Members (District)
            @elseif($fiftyfive->	q55_type_activities==5)
            Facilitation of Private Sector
            @elseif($fiftyfive->	q55_type_activities==6)
            Development Partners
            @elseif($fiftyfive->	q55_type_activities==7)
            Networking Meeting
            @elseif($fiftyfive->	q55_type_activities==8)
            Workshop/Conference/Seminar/Meeting
            @elseif($fiftyfive->	q55_type_activities==9)
            MoU
            @elseif($fiftyfive->	q55_type_activities==10)
            Meeting of DLAC (District)
            @elseif($fiftyfive->	q55_type_activities==11)
            Meeting of DLAC (Upazilla)
            @elseif($fiftyfive->	q55_type_activities==12)
            Facilitation with Police/Court/BLAS organizations
            @elseif($fiftyfive->	q55_type_activities==13)
            {{$fiftyfive->q55_othe_specify}}
            @endif  
           
            </td>
            <td style="border: 1px solid black; text-align:center;">
            {{$fiftyfive->distric->name ?? ''}}
        
            </td> 
            <td style="border: 1px solid black; text-align:center;">
            {{$fiftyfive->q55_organizations_covered}}
            </td>
            <td style="border: 1px solid black; text-align:center;">
            {{$fiftyfive->q55_number_events}}
            </td>
            <td style="border: 1px solid black; text-align:center;">
            {{$fiftyfive->q55_individuals_covered_men}}
            </td>
            <td style="border: 1px solid black; text-align:center;">
            {{$fiftyfive->q55_individuals_covered_women}}
            </td>
            <td style="border: 1px solid black; text-align:center;">
            {{$fiftyfive->q55_individuals_covered_third_gender}}
            </td> 
            <td style="border: 1px solid black; text-align:center;">
            {{$fiftyfive->q55_individuals_covered_boy}}
            </td>
            <td style="border: 1px solid black; text-align:center;">
            {{$fiftyfive->q55_individuals_covered_girl}}
            </td>
            <td style="border: 1px solid black; text-align:center;">
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
  <!-- End the Question No 55 -->
  @endif
  @if(array_search("56.question",$permissions,true))

  <!-- Start the Question No 56 -->
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
          <table class="table " style="width:100%; border: 1px solid black;">
            <thead>
              <tr>
                <th style="border: 1px solid black; text-align:center;">Number of Meeting</th>
                <th style="border: 1px solid black; text-align:center;">Union</th>
                <th style="border: 1px solid black; text-align:center;">Upazila</th>
                <th style="border: 1px solid black; text-align:center;">District</th>
                <th style="border: 1px solid black; text-align:center;">Total</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->fiftysix as $fiftysix)
              <tr>
                <td style="border: 1px solid black; text-align:center;">
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
              



                <td style="border: 1px solid black; text-align:center;">{{$fiftysix->q56_union}}</td>
                <td style="border: 1px solid black; text-align:center;">{{$fiftysix->q56_upazila}}  </td>
                <td style="border: 1px solid black; text-align:center;">{{$fiftysix->q56_district}}  </td>
                <td style="border: 1px solid black; text-align:center;">{{$fiftysix->q56_total}}  </td>
              </tr>
              @endforeach
             
            </tbody>
          </table>
        
      
        </div>
      </div>
    </div>

  <!-- End the Question No 56 -->
  @endif
  @if(array_search("57.question",$permissions,true))

  <!-- Start the Question No 57 -->
  <div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">57.Did the ministry/agency/organization undertake or support any new projects to research or assess
        trafficking issues within the country or its nationals abroad, and/or publicize its efforts to combat
        trafficking?</h3>

      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
    <div class="card-body">
      <table class="table " style="width:100%; border: 1px solid black;">
        <thead>
          <tr>
           
            <th scope="col" style="border: 1px solid black; text-align:center;">Research title</th>
            <th scope="col" style="border: 1px solid black; text-align:center;">Area of Research</th>
            <th scope="col" style="border: 1px solid black; text-align:center;">Status</th>
            <th scope="col" style="border: 1px solid black; text-align:center;">Research Location</th>
          </tr>
        </thead>
        <tbody>
        @foreach($case->fiftyseven as $fiftyseven)

        <tr>
          <td style="border: 1px solid black; text-align:center;">{{$fiftyseven->research_title}}</td>
        <td style="border: 1px solid black; text-align:center;">
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
          <td style="border: 1px solid black; text-align:center;">
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
          <td style="border: 1px solid black; text-align:center;">{{$fiftyseven->q57_research_location_id}}</td>
        </tr>
        @endforeach
          
        </tbody>
      </table>
    </div>
  </div>
</div>

  <!-- End the Question No 57 -->
  @endif

  @if(Auth::user()->can('58.question'))
  <!-- Start the Question No 58 -->
  <div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">58.How much did the ministry/agency/organization spent on research/evaluation?</h3>

      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
    <div class="card-body">
      <table class="table " style="width:100%; border: 1px solid black;">
        <thead></thead>
           <tbody>
            @foreach($case->fiftyeight as $fiftyeight)
              <tr>
            <td style="border: 1px solid black; text-align:center;">
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
            
            <td style="border: 1px solid black; text-align:center;">{{$fiftyeight->q58_bdt}}</td>
            <td style="border: 1px solid black; text-align:center;">{{$fiftyeight->q58_source}}</td>
            <td style="border: 1px solid black; text-align:center;">{{$fiftyeight->q58_assessment_allocation}}</td>
          </tr>
          @endforeach
      </tbody>
      </table>
    </div>
  </div>
</div>
@endif
  <!-- End the Question No 58 -->
  @if(Auth::user()->can('59.question'))
  <!-- Start the Question No 59 -->
  <div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">59.Please provide general recommendations for addressing human trafficking.</h3>

      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
    <div class="card-body">
      <table class="table " style="width:100%; border: 1px solid black;">
        <thead></thead>
          <tbody>
              @foreach($case->fiftyfine as $fiftyfine)
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
            
            <td style="border: 1px solid black; text-align:center;">{{$fiftyfine->q59_one}}</td>
            <td style="border: 1px solid black; text-align:center;">{{$fiftyfine->q59_two}}</td>
            <td style="border: 1px solid black; text-align:center;">{{$fiftyfine->q59_three}}</td>
            <td style="border: 1px solid black; text-align:center;">{{$fiftyfine->q59_four}}</td>
            <td style="border: 1px solid black; text-align:center;">{{$fiftyfine->q59_five}}</td>
            <td style="border: 1px solid black; text-align:center;">{{$fiftyfine->q59_six}}</td>
            <td style="border: 1px solid black; text-align:center;">{{$fiftyfine->q59_seven}}</td>
            <td style="border: 1px solid black; text-align:center;">{{$fiftyfine->q59_eight}}</td>
            </tr>
          @endforeach
      </tbody>
      </table>
    </div>
  </div>
</div>
@endif
  <!-- End the Question No 59 -->
  @if(Auth::user()->can('60.question'))
  <!-- Start the Question No 60 -->
  <div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">60.Please provide any other information which could not be captured in the questionnaire (not more than 500)</h3>

      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div> -->
    </div>
    <div class="card-body">
      <table class="table " style="width:100%; border: 1px solid black;">
        <thead></thead>
        <tbody>
        @foreach($case->sixty as $sixty)
          <tr>
            <td style="border: 1px solid black; text-align:center;">{{$sixty->description_60}}</td>
          </tr>
          @endforeach
        </tbody>
       
      </table>
    </div>
  </div>
</div>
@endif

  <!-- End the Question No 60 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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