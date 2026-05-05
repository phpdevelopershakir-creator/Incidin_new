<style>
  .othersText { display: none; }
  .visibility { display: none; }
  .type3Input { display: none; }
</style>

<div class="card question55">
 
   <?php
 $type_acts = [
  1 =>'GO-NGO Coordination', 
  2 =>'Facilitation of CTC Members (Union)', 
  3 =>'Facilitation of CTC Members (Upazilla)', 
  4 =>'Facilitation of CTC Members (District)',   
  5 =>'Facilitation of Private Sector',   
  6 =>'Development Partners',
  7 =>'Networking Meeting',
  8 =>'Workshop/Conference/Seminar/Meeting',
  9 =>'MoU',
  10 =>'Meeting of DLAC (District)',
  11 =>'Meeting of DLAC (Upazilla)',
  12 =>'Facilitation with Police/Court/BLAS organizations',
  13 =>'Others (Specify)'
 ];
 ?>
  

  <div class="card-header" role="tab" id="heading-18">
    <h6 class="card-title" >
      <a data-toggle="collapse" href="#Question-55" aria-expanded="false" aria-controls="collapse-18">
       55.How much funding (in the local currency) did the government spend on prevention efforts (e.g., awareness campaigns, research projects, national action plan implementation, etc.)?
      </a>
    </h6>
  </div>

  <div id="Question-55" class="collapse" role="tabpane55" aria-labelledby="heading-18" data-parent="#accordion-2">
    <div class="card-body">

      

      <!-- TABLE SECTION -->
    
        <table id="addRowq55radioThree3" class="table table-bordered text-center">
          <thead>
            <tr>
              <th rowspan="7">Types of Activities</th>
              <th rowspan="7">District</th>
              <th rowspan="7">Number of Organizations covered</th>
              <th rowspan="7">Number of Events</th>
              <th colspan="2">Number of Individuals Covered</th>
            </tr>
            <tr>
              <th>Men</th>
              <th>Women</th>
              <th>Third Gender</th>
              <th>Boy</th>
              <th>Girl</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
                @foreach($case->fiftyfive as $fiftyfive)
                   <tr>
                     <td>
                         @if($fiftyfive->types_activities == 1)
                    GO-NGO Coordination
                  @elseif ($fiftyfive->types_activities	 == 2)
                  Facilitation of CTC Members (Union)
                  @elseif ($fiftyfive->types_activities	 == 3)
                    Facilitation of CTC Members (Upazilla)
                  @elseif ($fiftyfive->types_activities	 == 4)
                  Facilitation of CTC Members (District)
                  @elseif ($fiftyfive->types_activities	 == 5)
                   Facilitation of Private Sector
                  @elseif ($fiftyfive->types_activities	 == 6)
                     Development Partners
                     @elseif ($fiftyfive->types_activities	 == 7)
                     Networking Meeting
                     @elseif ($fiftyfive->types_activities	 == 8)
                     Workshop/Conference/Seminar/Meeting
                     @elseif ($fiftyfive->types_activities	 == 9)
                     MoU
                     @elseif ($fiftyfive->types_activities	 == 10)
                     Meeting of DLAC (District)
                     @elseif ($fiftyfive->types_activities	 == 11)
                     Meeting of DLAC (Upazilla)
                     @elseif ($fiftyfive->types_activities	 == 12)
                     Facilitation with Police/Court/BLAS organizations
                     @elseif ($fiftyfive->types_activities	 == 13)
                     {{$fiftyfive->types_activities_other}}
                     

              
                  @endif
                     </td>

                      <td>{{$fiftyfive->number_organizations_covered}}</td>
                      <td>{{$fiftyfive->number_events}}</td>
                      <td>{{$fiftyfive->distric_id}}</td>
                      <td>{{$fiftyfive->men_55}}</td>
                      <td>{{$fiftyfive->women_55}}</td>
                      <td>{{$fiftyfive->third_gender_55}}</td>
                       <td>{{$fiftyfive->boy_55}}</td>
                       <td>{{$fiftyfive->girl_55}}</td>
                      <td>{{$fiftyfive->total_55}}</td>

                   </tr>
                @endforeach
          </tbody>
        </table>
     
     

    </div>
  </div>
</div>
