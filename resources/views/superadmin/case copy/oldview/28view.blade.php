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
               @php
                $menTotal = 0;
                $womenTotal = 0;
                $boysTotal = 0;
                $girlsTotal = 0;
             @endphp
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
         
             



            @php
                $menTotal += $twentyeight->identification_sex_trafficking;
                $womenTotal += $twentyeight->identification_forced_labor;
                $boysTotal += $twentyeight->identification_other_traficking;
                $girlsTotal += $twentyeight->identification_unspecified_traficking;
            @endphp

              @endforeach
           <tr style="font-weight:bold; background:#f1f1f1;">
                <td style="text-align:right;">Total:</td>
                <td>{{ $menTotal }}</td>
                <td>{{ $womenTotal }}</td>
                <td>{{ $boysTotal }}</td>
                <td>{{ $girlsTotal }}</td>
            </tr>
      
            </tbody>
          </table>
         
        </div>
      </div>
    </div>
    @endif