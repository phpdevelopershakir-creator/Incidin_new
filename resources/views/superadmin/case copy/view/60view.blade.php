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
            <a data-toggle="collapse" href="#Question-60" aria-expanded="false"
                aria-controls="collapse-4">
             60.What resources (funding or in-kind) did the government devote to implement new/updated or existing national action plans?
            </a>
            </h6>
        </div>

        <div id="Question-60" class="collapse" role="tabpane60" aria-labelledby="heading-4"
            data-parent="#accordion-2">
            <div class="card-body">
                
                   

            </div>
            <table id="resources_funding" class="table table-bordered table-white <?=(isset($question_57_data->q57_checked_value)) && ($question_57_data->q57_checked_value=="2" || $question_57_data->q57_checked_value=="0" )?"visibility":"" ;?>">
       <thead>
         <tr>
            <th scope="col">Country</th>
            <th scope="col">Target group of Training
              (multiple response)</th>
            <th scope="col">Total coverage</th>
           


          </tr>
       </thead>
       <tbody>
          @foreach($case->sixty as $sixty)
          <tr>
            <td >
            {{$sixty->traffickingCountry->name  ?? ''}}
            </td>
            <td>
            @if  ($sixty->trafficking_target_group   == 1)
            Government Official
                @elseif ($sixty->trafficking_target_group  == 2)
                Immigration Authority
                @elseif ($sixty->trafficking_target_group  == 3)
                Law Enforcing Personnel
                @elseif ($sixty->trafficking_target_group  == 4)
                Border Control Force
                @elseif ($sixty->trafficking_target_group  == 5)
                Judiciary
                @elseif ($sixty->trafficking_target_group  == 6)
                Diplomats
                @endif

            
            </td>
            <td> 
            {{$sixty->trafficking_total_coverage}}
              
             </td>
            

          </tr>
          @endforeach
       </tbody>
     </table>      
  </div>

</div>
