@if(Auth::user()->can('44.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">44.Did any allegedly complicit officials face criminal investigations,
            prosecutions, convictions, or sentencing?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div id="fourty_four_question_view" class="card-body row">
          <table id="addRowQ44" class="table table-bordered text-center">
            <thead>
              <tr>
                <th rowspan="2" scope="col">Ministry/Department</th>
                <th colspan="4">Number of Official Accused</th>

              </tr>
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>3rd Gender </th>
                <th>Total</th>
                </tr>
            </thead>
        <tbody>
             @php
                $menTotal = 0;
                $womenTotal = 0;
                $thirdGenderTotal = 0;
                $grandTotal = 0;
             @endphp
        @foreach($case->fortyfour as $fortyfour)

              
              <tr>
              <td>
              {{$fortyfour->ministry_department}}
              </td> 
              <td>
              {{$fortyfour->number_official_accused_men}}
              </td>
              <td>
              {{$fortyfour->number_official_accused_women}}
              </td> 
              <td>
              {{$fortyfour->number_official_accused_third_gender}}
              </td>
              <td>
              {{$fortyfour->number_official_accused_total}}
              </td>
              
              </tr>
              @php
                $menTotal += $fortyfour->number_official_accused_men;
                $womenTotal += $fortyfour->number_official_accused_women;
                $thirdGenderTotal += $fortyfour->number_official_accused_third_gender;
                $grandTotal += $fortyfour->number_official_accused_total;
            @endphp
              @endforeach
              <tr style="font-weight:bold; background:#f1f1f1;">
                <td>Total</td>
                <td>{{ $menTotal }}</td>
                <td>{{ $womenTotal }}</td>
                <td>{{ $thirdGenderTotal }}</td>
                <td>{{ $grandTotal }}</td>
            </tr>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endif

 