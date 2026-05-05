   <?php
    if (($questiontitles[46]->status ?? null) == 1) {

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
           <a data-toggle="collapse" href="#Question-47" aria-expanded="false"
             aria-controls="collapse-4">
             47.{{ $questiontitles[46]->title }}
           </a>
         </h6>
       </div>

       <div id="Question-47" class="collapse" role="tabpane47" aria-labelledby="heading-4"
         data-parent="#accordion-2">
         <div class="card-body">



         </div>
         <table class="table table-bordered table-white">
           <thead>
             <tr>

               <td>Original Document/Approach</td>
               <td>Description of Change</td>



             </tr>
           </thead>
           <tbody>
             @foreach($case->fortyseven as $fortyseven)
             <tr>
               <th>
                 @if ($fortyseven->government_change_regulated_title_q47 == 1)
                 OEMA 2013
                 @elseif ($fortyseven->government_change_regulated_title_q47 == 2)
                 Employee-paid-model
                 @elseif ($fortyseven->government_change_regulated_title_q47 == 3)
                 Employer-paid-model
                 @elseif ($fortyseven->government_change_regulated_title_q47 == 4)
                 Fair recruitment cost notification
                 @elseif ($fortyseven->government_change_regulated_title_q47 == 5)
                 Ranking of Recruiting Agents
                 @elseif ($fortyseven->government_change_regulated_title_q47 == 6)
                 Licensing of Recruiting Agents
                 @elseif ($fortyseven->government_change_regulated_title_q47 == 7)
                 Registration of Informal Recruiting Agents
                 @elseif ($fortyseven->government_change_regulated_title_q47 == 8)
                 Zero Migration Cost Approach
                 @else
                 {{$fortyseven->government_change_regulated_title_q47}}
                 @endif


               </th>

               <td>
                 @if ($fortyseven->government_change_regulated_status_q47 == 1)
                 Firmly implemented enforced
                 @elseif ($fortyseven->government_change_regulated_status_q47 == 2)
                 Reformed
                 @elseif ($fortyseven->government_change_regulated_status_q47 == 3)
                 Planned
                 @elseif ($fortyseven->government_change_regulated_status_q47 == 4)
                 Drafted
                 @elseif ($fortyseven->government_change_regulated_status_q47 == 5)
                 Updated
                 @elseif ($fortyseven->government_change_regulated_status_q47 == 6)
                 Partially enforced
                 @elseif ($fortyseven->government_change_regulated_status_q47 == 7)
                 Expanded us
                 @elseif ($fortyseven->government_change_regulated_status_q47 == 8)

                 @endif

               </td>

             </tr>

             @endforeach
           </tbody>
         </table>
       </div>
     </div>


   <?php } ?>