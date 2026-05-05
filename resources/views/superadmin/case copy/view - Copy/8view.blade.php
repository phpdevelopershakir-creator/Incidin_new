<div class="card">
          <div class="card-header" role="tab" id="heading-4">
            <h6 class="mb-0">
              <a data-toggle="collapse" href="#Question-8" aria-expanded="false"
                aria-controls="collapse-4">
                  8.Did these units/courts have adequate resources?
              </a>
            </h6>
          </div>

          <div id="Question-8" class="collapse" role="tabpanel8" aria-labelledby="heading-4"
            data-parent="#accordion-2">
            <div class="card-body">

          <table id="resources_funding" class="table table-white">
       <thead>
         <tr>
           <th scope="col">Allocation</th>
           <th scope="col">Allocation</th>


         </tr>
       </thead>
       <tbody>
       @foreach($case->eight as $eight)
         <tr>
           <th >
           @if ($eight->allocation_under_npa   == 1)
           Total Allocation under NPA
                @elseif ($eight->allocation_under_npa  == 2)
                Total Allocation utilized under NPA
                @elseif ($eight->allocation_under_npa  == 3)
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