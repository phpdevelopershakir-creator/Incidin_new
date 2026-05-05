@if(Auth::user()->can('30.question'))
@php
$countries=DB::table('countries')->get()    

@endphp
<style>
.otherSpecify{
  display:none;
}
</style>
<div class="col-md-12 question30">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">30.Were foreign victims legally entitled to the same benefits as host country
        nationals?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div id ="30_question_view" class="card-body row">
        <table id="addRowQ30" class="table table-bordered text-center">
          <thead class="">
            <tr>
              <th rowspan="2" style="text-align: center; margin: bottom 45%;">Protection Services</th>
              <th rowspan="2">Status of coverage</th>
              <th colspan="6">Current Coverage of Foreign VoTs</th>
            </tr>
            <tr>
              <th>Men</th>
              <th>Women</th>
              <th>3rd Gender </th>
              <th>Boy</th>
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


@foreach($case->thirty as $thirty)

            <tr>
              <td>
              @if ($thirty->protection_services_q30 == 1)
                  Economic Support/assest transfer
                  @elseif ($thirty->protection_services_q30 == 2)
                  Micro Credit
                  @elseif ($thirty->protection_services_q30 == 3)
                  Livelihood Training
                  @elseif ($thirty->protection_services_q30 == 4)
                  Job placement
                  @elseif ($thirty->protection_services_q30 == 5)
                  Health care
                  @elseif ($thirty->protection_services_q30 == 6)
                  Psychosocial care
                  @elseif ($thirty->protection_services_q30 == 7)
                  Shelter
                  @elseif ($thirty->protection_services_q30 == 8)
                  Social safetynet
                  @elseif ($thirty->protection_services_q30 == 9)
                  Information support
                  @elseif ($thirty->protection_services_q30 == 10)
                  Mainstream education
                  @elseif ($thirty->protection_services_q30 == 11)
                  Non Formal Education
                  @elseif ($thirty->protection_services_q30 == 12)
                  Technical Education
                  @elseif ($thirty->protection_services_q30 == 13)
                  Life skill
                  @elseif ($thirty->protection_services_q30 == 14)
                  Family reunion
                  @elseif ($thirty->protection_services_q30 == 15)
                  Referral
                  @endif
                
              </td>
              <td>
              @if($thirty->	status_coverage_q30==1)
              Excess
              @elseif($thirty->	status_coverage_q30==2)
              Adequate
              @elseif($thirty->	status_coverage_q30==3)
              Inadequate
              @elseif($thirty->	status_coverage_q30==4)
              None
              @elseif($thirty->	status_coverage_q30==5)
              {{$thirty->q30_other_specify}}
              @endif
</td>
<td>
            {{$thirty->current_coverage_foreign_vots_men}}
            </td> 
            <td>
            {{$thirty->current_coverage_foreign_vots_women}}
            </td>
            <td>
            {{$thirty->current_coverage_foreign_vots_third_gender}}
            </td> 
            <td>
            {{$thirty->current_coverage_foreign_vots_boy}}
            <td>
            {{$thirty->current_coverage_foreign_vots_girl}}
            </td> 
            <td>
            {{$thirty->current_coverage_foreign_vots_total}}
            </td>

            </tr>

            @php
                $menTotal += $thirty->current_coverage_foreign_vots_men;
                $womenTotal += $thirty->current_coverage_foreign_vots_women;
                $thirdGenderTotal += $thirty->current_coverage_foreign_vots_third_gender;
                $boysTotal += $thirty->current_coverage_foreign_vots_boy;
                $girlsTotal += $thirty->current_coverage_foreign_vots_girl;
                $grandTotal += $thirty->current_coverage_foreign_vots_total;
            @endphp


  @endforeach
             <tr style="font-weight:bold; background:#f1f1f1;">
                <td colspan="2" style="text-align:right;">Total:</td>
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

