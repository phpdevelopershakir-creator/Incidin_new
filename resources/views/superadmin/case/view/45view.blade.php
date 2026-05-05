   <?php
    if (($questiontitles[44]->status ?? null) == 1) {

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
           <a data-toggle="collapse" href="#Question-45" aria-expanded="false"
             aria-controls="collapse-4">
             45.{{ $questiontitles[44]->title }}
           </a>
         </h6>
       </div>

       <div id="Question-45" class="collapse" role="tabpane45" aria-labelledby="heading-4"
         data-parent="#accordion-2">
         <div class="card-body">



         </div>
         <table class="table table-bordered table-white">
           <thead>
             <tr>

               <td>Duration of NPA</td>
               <td>Attach/Upload</td>



             </tr>
           </thead>
           <tbody>
             @foreach($case->fortyfive as $fortyfive)
             <tr>
               <th>

                 {{$fortyfive->national_plan_trafficking_q45_title_q45}}

               </th>

               <td>
                 @if(!empty($fortyfive->document_upload_q45))
                 <a href="{{ asset($fortyfive->document_upload_q45) }}" target="_blank">View</a>
                 @else
                 not Found
                 @endif

               </td>

             </tr>
             <tr>
               <td colspan="2">
                 {{$fortyfive->national_plan_trafficking_q45_description_q45}}
               </td>
             </tr>
             @endforeach
           </tbody>
         </table>
       </div>
     </div>


   <?php } ?>