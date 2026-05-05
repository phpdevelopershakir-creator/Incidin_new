@if(Auth::user()->can('25.question'))
<div class="col-md-12 question25">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">25.Were there any new (or changes to preexisting) procedures or services available
        for victim care at your ministry/agency/organization?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
     

     
      <div id ="25_question_view" class="card-body row">
      <table id="addRowQ25" class="table table-bordered text-center">
        <thead class="">
          <tr>
            <th rowspan="3" style="text-align: center; margin: bottom 45%;">Protection Services</th>
            <th rowspan="3">Status</th>
            <th colspan="6">Current Coverage of VoTs</th>
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
@foreach($case->twentyfive as $twentyfive)
          <tr>
            <td>
            @if ($twentyfive->protection_services_q25	 == 1)
            Economic Support/assest transfer
                @elseif ($twentyfive->protection_services_q25	 == 2)
                Micro Credit
                @elseif ($twentyfive->protection_services_q25	 == 3)
                Livelihood Training
                @elseif ($twentyfive->protection_services_q25	 == 4)
                Job placement
                @elseif ($twentyfive->protection_services_q25	 == 5)
                Health care
                @elseif ($twentyfive->protection_services_q25	 == 6)
                Psychosocial care
                @elseif ($twentyfive->protection_services_q25	 == 7)
                Shelter
                @elseif ($twentyfive->protection_services_q25	 == 8)
                Social safetynet
                @elseif ($twentyfive->protection_services_q25	 == 9)
                Information support
                @elseif ($twentyfive->protection_services_q25	 == 10)
                Mainstream education
                @elseif ($twentyfive->protection_services_q25	 == 11)
                Non Formal Education
                @elseif ($twentyfive->protection_services_q25	 == 12)
                Technical Education
                @elseif ($twentyfive->protection_services_q25	 == 13)
                Life skill
                @elseif ($twentyfive->protection_services_q25	 == 14)
                Family reunion
                @elseif ($twentyfive->protection_services_q25	 == 15)
                Referral
            @endif
              
            </td>
            <td>
              @if($twentyfive->	q25_status_id==1)
              New
              @elseif($twentyfive->	q25_status_id==2)
              Existing
              @endif
             
            </td>

            <td>
            {{$twentyfive->q25_current_coverage_vots_men}}
            </td> 
            <td>
            {{$twentyfive->q25_current_coverage_vots_women}}
            </td>
            <td>
            {{$twentyfive->q25_current_coverage_vots_third_gender}}
            </td> 
            <td>
            {{$twentyfive->q25_current_coverage_vots_boy}}
            <td>
            {{$twentyfive->q25_current_coverage_vots_girl}}
            </td> 
            <td>
            {{$twentyfive->q25_current_coverage_vots_total}}
            </td>


          </tr>
          @php
                $menTotal += $twentyfive->q25_current_coverage_vots_men;
                $womenTotal += $twentyfive->q25_current_coverage_vots_women;
                $boysTotal += $twentyfive->q25_current_coverage_vots_third_gender;
                $girlsTotal += $twentyfive->q25_current_coverage_vots_boy;
                $thirdGenderTotal += $twentyfive->q25_current_coverage_vots_girl;
                $grandTotal += $twentyfive->q25_current_coverage_vots_total;
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
