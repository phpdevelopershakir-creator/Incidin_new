   <style>
  .visibility{
    display:none;
  }
  .othersText{
    display:none;
  }
</style>
   <div class="card question57">
        <div class="card-header" role="tab" id="heading-4">
            <h6 class="card-title">
            <a data-toggle="collapse" href="#Question-57" aria-expanded="false"
                aria-controls="collapse-4">
             57.What resources (funding or in-kind) did the government devote to implement new/updated or existing national action plans?
            </a>
            </h6>
        </div>

        <div id="Question-57" class="collapse" role="tabpane57" aria-labelledby="heading-4"
            data-parent="#accordion-2">
            <div class="card-body">
                
                   

            </div>
      <table id="resources_funding" class="table table-bordered table-white <?=(isset($question_57_data->q57_checked_value)) && ($question_57_data->q57_checked_value=="2" || $question_57_data->q57_checked_value=="0" )?"visibility":"" ;?>">
       <thead>
         <tr>
           <th scope="col">Allocation</th>
           <th scope="col">Allocation</th>


         </tr>
       </thead>
       <tbody>
          @foreach($case->fiftyseven as $fiftyseven)
         <tr>
           <th >
           @if ($fiftyseven->allocation_under_npa   == 1)
           Total Allocation under NPA
                @elseif ($fiftyseven->allocation_under_npa  == 2)
                Total Allocation utilized under NPA
                @elseif ($fiftyseven->allocation_under_npa  == 3)
                MoAssessment of Allocation
           
                @endif
           
          </th>

           <td> 
        
             
                {{$fiftyseven->allocation_status}}
        
           
          

           </td>
         </tr>
         @endforeach
       </tbody>
     </table>      
  </div>
  </div>

        
