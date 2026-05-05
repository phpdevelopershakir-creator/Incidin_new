@if(Auth::user()->can('34.question'))
<style>
  .otherSpecify{
    display:none
  }
</style>
<div class="col-md-12 question34">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">34.Did your ministry/agency/organization take any steps to avoid
        re-traumatization
        of victims in
        investigation and prosecution? Please describe.</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
        <div id="34_question_view" class="card-body row">
      <table id="addRowQ34" class="table table-bordered text-center">
        <thead class="">
          <tr>
            <th rowspan="2" style="text-align: center; vertical-align: middle;">Location
              </th>
            <th rowspan="2" style="vertical-align: middle;">Types of Assistance</th>
            <th colspan="6">Coverage</th>
          </tr>
          <tr>
            <th>Men</th>
            <th>Women</th>
            <th>3rd Gender </th>
            <th>Boys</th>
            <th>Girls</th>
            <th>Total</th>
          </tr>
</thead>
<tbody>
              @php
                $menTotal = 0;
                $womenTotal = 0;
                $thirdGenderTotal = 0;
                $boysTotal = 0;
                $girlsTotal = 0;
                $grandTotal = 0;
             @endphp

@foreach($case->thirtyfour as $thirtyfour)

          <tr>
            <td> 
            @if ($thirtyfour->	location_id_q34 == 1)
            Barisal
            @elseif ($thirtyfour->	location_id_q34 == 2)
            Chattogram
            @elseif ($thirtyfour->	location_id_q34 == 3)
            Dhaka
            @elseif ($thirtyfour->	location_id_q34 == 4)
            Khulna
            @elseif ($thirtyfour->	location_id_q34 == 5)
            Mymensingh
            @elseif ($thirtyfour->	location_id_q34 == 6)
            Rajshahi
            @elseif ($thirtyfour->	location_id_q34 == 7)
            Rangpur
            @elseif ($thirtyfour->	location_id_q34 == 8)
            Sylhet
            @elseif ($thirtyfour->	location_id_q34 == 9)
            National
            @endif
            </td>
            <td>
            @if ($thirtyfour->types_assistance_q34 == 1)
            Psychosocial Counselling
            @elseif ($thirtyfour->types_assistance_q34 == 2)
            Shelter
            @elseif ($thirtyfour->types_assistance_q34 == 3)
            Assistance to persons with disability
            @elseif ($thirtyfour->types_assistance_q34 == 4)
            Testimony via video or written statements
            @elseif ($thirtyfour->types_assistance_q34 == 5)
            {{$thirtyfour->q34_other_specify}}            
            @endif
            
            </td>

             
            <td>
            {{$thirtyfour->q34_coverage_men}}
            </td> 
            <td>
            {{$thirtyfour->q34_coverage_women}}
            </td>
            <td>
            {{$thirtyfour->q34_coverage_third_gender}}
            </td> 
            <td>
            {{$thirtyfour->q34_coverage_boy}}
            <td>
            {{$thirtyfour->q34_coverage_girl}}
            </td> 
            <td>
            {{$thirtyfour->q34_coverage_total}}
            </td>
          
          </tr>
             @php
                $menTotal += $thirtyfour->q34_coverage_men;
                $womenTotal += $thirtyfour->q34_coverage_women;
                $boysTotal += $thirtyfour->q34_coverage_third_gender;
                $girlsTotal += $thirtyfour->q34_coverage_boy;
                $thirdGenderTotal += $thirtyfour->q34_coverage_girl;
                $grandTotal += $thirtyfour->q34_coverage_total;
            @endphp

         @endforeach
         <tr style="font-weight:bold; background:#f1f1f1;">
               <td colspan="2">Total</td>
                <td>{{ $menTotal }}</td>
                <td>{{ $womenTotal }}</td>
                <td>{{ $thirdGenderTotal }}</td>
                <td>{{ $boysTotal }}</td>
                <td>{{ $girlsTotal }}</td>
                <td>{{ $grandTotal }}</td>
            </tr>
            
        </tbody>
      </table>
        </div>
    </div>
  </div>
</div>
@endif
