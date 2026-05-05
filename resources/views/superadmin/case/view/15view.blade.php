
<style>
  .othersText{
    display:none
  }
  .visibility{
    display:none
  }
</style>

<div class="card question15">
   <?php
$training_responses=[ 
  1 => "Front-line officials of  Police",
  2 => "Front-line officials of  BGB",
  3 => "Front-line officials of  Coastguard",
  4 => "Front-line officials of  Police",
  5 => "Front-line officials of  Ansar",
  6 => "Front-line officials of  DSS",
  7 => "Front-line officials of  INGO",
  8 => "Front-line officials of  UN Agencies",
  9 => "Community Leaders",
];
?>




      <div class="card-header" role="tab" id="heading-4">
        <h6 class="mb-0 card-title" >
          <a data-toggle="collapse" href="#Question-15" aria-expanded="false"
            aria-controls="collapse-4">
             15.Did front-line officials, including law enforcement, immigration, social services personnel, healthcare workers, and labor inspectors receive adequate training on use of the victim identification protocol or formal written procedures? (Tips: Please consider - Front-line officials of Police, Front-line officials of BGB, Front-line officials of Coastguard , Front-line officials of Ansar, Front-line officials of Immigration, DSS Officials, Labour Inspectors and similar officials of NGO workers, international organization staff, religious officials, and community leaders who come at first contact with VoTs)
          </a>
        </h6>
      </div>

      <div id="Question-15" class="collapse" role="tabpane15" aria-labelledby="heading-4"
        data-parent="#accordion-2">
        <div class="card-body">

      

      <table class="table table-bordered text-center" id="q15Table">
  <thead>
    <tr>
      <th>Category of Front-line officials as Trainee</th>
      <th>Number of Training</th>
      <th>Location
      (multiple-Response)
      </th>
      <th>Development Partner
      </th>

      <th>Men</th>
      <th>Women</th>
      <th>TG</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>
             @php
                $menTotal = 0;
                $womenTotal = 0;
                $thirdgenderTotal = 0;
                $Total = 0;
             @endphp
          @foreach($case->fifteen as $fifteen)
              <tr>
                
                <td>
                  @if($fifteen->category_trainee == 1)
                    Front-line officials of  Police
                  @elseif ($fifteen->category_trainee	 == 2)
                    Front-line officials of  BGB
                  @elseif ($fifteen->category_trainee	 == 3)
                    Front-line officials of  Coastguard
                  @elseif ($fifteen->category_trainee	 == 4)
                    Front-line officials of  Police
                  @elseif ($fifteen->category_trainee	 == 5)
                  Front-line officials of  Ansar
                  @elseif ($fifteen->category_trainee	 == 6)
                     Front-line officials of  DSS
                     @elseif ($fifteen->category_trainee	 == 7)
                     Front-line officials of  INGO
                     @elseif ($fifteen->category_trainee	 == 8)
                    Front-line officials of  UN Agencies
                       @elseif ($fifteen->category_trainee	 == 9)
                    Community Leaders
              
                  @endif
                 
                </td>
                <td>
                  {{$fifteen->division_name}}
                </td>

                <td>
                  {{$fifteen->number_traning}}
                </td>

                <td>
                  {{$fifteen->development_partner}}
                </td>
                <td>
                  {{$fifteen->men_q15}}
                </td>
                <td>
                  {{$fifteen->women_q15}}
                </td>
                <td>
                  {{$fifteen->third_gender_q15}}
                </td>
                <td>
                  {{$fifteen->total_q15}}
                </td>
              
              </tr>

               @php
                $menTotal += $fifteen->men_q15;
                $womenTotal += $fifteen->women_q15;
                $thirdgenderTotal += $fifteen->third_gender_q15;
                $Total += $fifteen->total_q15;
               @endphp
              @endforeach

              <tr style="font-weight:bold; background:#f1f1f1;">
               <td colspan="4">Total</td>
                <td>{{ $menTotal }}</td>
                <td>{{ $womenTotal }}</td>
                <td>{{ $thirdgenderTotal }}</td>
                <td>{{ $Total }}</td>
            
            </tr>
  </tbody>
</table>

    
  
   

        </div>
      </div>
    </div>


