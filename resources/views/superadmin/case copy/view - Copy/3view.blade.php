@if(Auth::user()->can('3.question'))
 <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">3.Is there any new risk and initiatives to mitigate the risk of trafficking
            associated with Climate Change
            (CC)?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
         
         
          <table class="table table-white" style="border: none;">
            <thead>
              <tr>
                <th scope="col">Risk associated with Climate Change</th>
                <th scope="col">Initiative to mitigate Risk</th>
                <th scope="col">Title of Project/Program/Policy/ Law</th>
                <th scope="col">Beneficiary</th>
                <th scope="col">Location</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->three as $three)
              <tr>
                <th scope="row">
                <div>
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
                  </div>
                </th>
          
                 
            <td>  @if ($three->q3_initiative_mitigate_risk == 1)
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
                Research
                @elseif ($three->q3_initiative_mitigate_risk == 13)
               {{$three->q3_others_specify}}
                
                
                @endif
                </td>


                <td>
                <div>
                {{$three->q3_title_project_program}}
                  </div>
             
                </td>
                <td>
                <div>
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
                  </div>
                
                </td>
                <td>

                <div>
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
                  </div>
                 
                </td>
              </tr>
             @endforeach
            </tbody>
          </table>


        </div>
      </div>
    </div> 

    @endif