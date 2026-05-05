   <?php
    if (($questiontitles[43]->status ?? null) == 1) {

    ?>
     <style>
       .visibility {
         display: none;
       }

       .othersText {
         display: none;
       }
     </style>
     <div class="card question57">
       <div class="card-header" role="tab" id="heading-4">
         <h6 class="card-title">
           <a data-toggle="collapse" href="#Question-44" aria-expanded="false"
             aria-controls="collapse-4">
             44.{{ $questiontitles[43]->title }}
           </a>
         </h6>
       </div>

       <div id="Question-44" class="collapse" role="tabpane44" aria-labelledby="heading-4"
         data-parent="#accordion-2">
         <div class="card-body">



         </div>
         <table id="resources_funding" class="table table-bordered table-white <?= (isset($question_57_data->q57_checked_value)) && ($question_57_data->q57_checked_value == "2" || $question_57_data->q57_checked_value == "0") ? "visibility" : ""; ?>">
           <thead>
             <tr>
               <th scope="col">Allocation</th>
               <th scope="col">Allocation</th>


             </tr>
           </thead>
           <tbody>
             @foreach($case->fortyfour as $fortyfour)
             <tr>
               <th>
                 @if ($fortyfour->awareness_campaigns_research_projects_title_q44 == 1)
                 Total Allocation under NPA for prevention
                 @elseif ($fortyfour->awareness_campaigns_research_projects_title_q44 == 2)
                 Total Allocation utilized under NPA for prevention
                 @elseif ($fortyfour->awareness_campaigns_research_projects_title_q44 == 3)
                 Total allocation spent for Awareness activities
                 @elseif ($fortyfour->awareness_campaigns_research_projects_title_q44 == 4)
                 Total allocation spent for safety-net
                 @elseif ($fortyfour->awareness_campaigns_research_projects_title_q44 == 5)
                 Total allocation spent for training to promote prevention
                 @elseif ($fortyfour->awareness_campaigns_research_projects_title_q44 == 6)
                 Assessment of Allocation
                 @endif

               </th>

               <th>
                 @if($fortyfour->awareness_campaigns_research_projects_status_q44 == 1)
                 Excess
                 @elseif ($fortyfour->awareness_campaigns_research_projects_status_q44 == 2)
                 Adequate
                 @elseif ($fortyfour->awareness_campaigns_research_projects_status_q44 == 3)
                 Inadequate
                 @elseif ($fortyfour->awareness_campaigns_research_projects_status_q44 == 4)
                 None
                 @else
                 {{$fortyfour->awareness_campaigns_research_projects_status_q44}}
                 @endif

               </th>
             </tr>
             @endforeach
           </tbody>
         </table>
       </div>
     </div>


   <?php } ?>