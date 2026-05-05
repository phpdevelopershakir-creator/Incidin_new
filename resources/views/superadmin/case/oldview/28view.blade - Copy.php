@if(Auth::user()->can('28.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">28.Please provide an overview of the Protection Services available for the VoTs.
          </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-white">
            <thead>
              <tr>
                <th colspan="6" scope="col">Identification of Vots</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Victims identified by government</th>
                <td> Sex Trafficking </td>
                <td> Forced Labor </td>
                <td>Other Trafficking (Specify) </td>
                <td>Unspecified Trafficking </td>
              </tr>
              @foreach($case->twentyeight as $twentyeight)
              <tr>
<td>
              @if ($twentyeight->identification_type == 1)
               Total victims identified by the government
                @elseif ($twentyeight->identification_type == 2)
                Men	
                @elseif ($twentyeight->identification_type == 3)
                Women
                @elseif ($twentyeight->identification_type == 4)
                 3rd G
                @elseif ($twentyeight->identification_type == 5)
               Boys (under 18)
                @elseif ($twentyeight->identification_type == 6)
                Girls (under 18)
                @elseif ($twentyeight->identification_type == 7)
                Persons with disabilities
                @elseif ($twentyeight->identification_type == 8)
                LGBTQI+ persons
                @elseif ($twentyeight->identification_type == 9)
                Foreign nationals (if available, from what countries?)
                @endif </td>
                <td>{{$twentyeight->identification_sex_trafficking}} </td>
                <td>{{$twentyeight->identification_forced_labor}} </td>
                <td>{{$twentyeight->identification_other_traficking}} </td>
                <td>{{$twentyeight->identification_unspecified_traficking}} </td>
                
              </tr>
         
             


<tr>
  <td>@if ($twentyeight->referral_type == 1)
Victims identified by government
                @elseif ($twentyeight->referral_type == 2)
                Total victims identified by the government	
                @elseif ($twentyeight->referral_type == 3)
                Men
                @elseif ($twentyeight->referral_type == 4)
                Women
                @elseif ($twentyeight->referral_type == 5)
                3rd G
                @elseif ($twentyeight->referral_type == 6)
                Boys (under 18)
                @elseif ($twentyeight->referral_type == 7)
                Girls (under 18)
                @elseif ($twentyeight->referral_type == 8)
                Persons with disabilities
                @elseif ($twentyeight->referral_type == 9)
                LGBTQI+ persons
                @elseif ($twentyeight->referral_type == 10)
                Foreign nationals (if available, from what countries?)
                @endif</td>
                <td>{{$twentyeight->referral_sex_trafficking}} </td>
                <td>{{$twentyeight->referral_forced_labor}} </td>
                <td>{{$twentyeight->referral_other_traficking}} </td>
                <td>{{$twentyeight->referral_unspecified_traficking}} </td>
                
              </tr>
         

<tr>
  <td>@if ($twentyeight->victims_type == 1)
Victims identified by government
                @elseif ($twentyeight->victims_type == 2)
                Total victims identified by the government	
                @elseif ($twentyeight->victims_type == 3)
                Men
                @elseif ($twentyeight->victims_type == 4)
                Women
                @elseif ($twentyeight->victims_type == 5)
                3rd G
                @elseif ($twentyeight->victims_type == 6)
                Boys (under 18)
                @elseif ($twentyeight->victims_type == 7)
                Girls (under 18)
                @elseif ($twentyeight->victims_type == 8)
                Persons with disabilities
                @elseif ($twentyeight->victims_type == 9)
                LGBTQI+ persons
                @elseif ($twentyeight->victims_type == 10)
                Foreign nationals (if available, from what countries?)
                @endif</td>
                <td>{{$twentyeight->victims_sex_trafficking}} </td>
                <td>{{$twentyeight->victims_forced_labor}} </td>
                <td>{{$twentyeight->victims_other_traficking}} </td>
                <td>{{$twentyeight->victims_unspecified_traficking}} </td>
                
              </tr>

                <tr>
                  <td>@if ($twentyeight->repatriated_type == 1)
victims repatriated by host government
                @elseif ($twentyeight->repatriated_type == 2)
                victims repatriated by foreign government
                @elseif ($twentyeight->repatriated_type == 3)
                victims repatriated by NGOs/INGOs/UN agencies
         
            
                @endif</td>
                <td>{{$twentyeight->repatriated_sex_trafficking}} </td>
                <td>{{$twentyeight->repatriated_forced_labor}} </td>
                <td>{{$twentyeight->repatriated_other_traficking}} </td>
                <td>{{$twentyeight->repatriated_unspecified_traficking}} </td>
                
              </tr>
         


         

              @endforeach

      
            </tbody>
          </table>
         
        </div>
      </div>
    </div>
    @endif