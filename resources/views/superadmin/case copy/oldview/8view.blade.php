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
           @if ($eight->allocation_under_npa	 == 1)
           Total Allocation under NPA
                @elseif ($eight->allocation_under_npa	 == 2)
                Total Allocation utilized under NPA
                @elseif ($eight->allocation_under_npa	 == 3)
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

@endif