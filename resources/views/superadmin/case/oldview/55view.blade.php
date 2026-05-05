@if(Auth::user()->can('55.question'))
<style>
.otherSpecify{
  display:none;
}
</style>
<div class="col-md-12 question55">
    <div class="card card-outline collapsed-card">
      <div class="card-header">
        <h3 class="card-title">55.Did ministry/agency/organization/CTC carried out partnership promotion actions?
        </h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body row">
        <div class="form-check">





          <table id="addRowQ55" class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th rowspan="2">Types of Activities</th>
                <th rowspan="2">District</th>
                <th rowspan="2">Number of Organizations covered</th>
                <th rowspan="2">Number of Events</th>
                <th colspan="6">Number of Individuals Covered</th>
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
            @foreach($case->fiftyfive as $fiftyfive)
          <tr>
            <td>
            @if($fiftyfive->q55_type_activities==1)
            GO-NGO Coordination
            @elseif($fiftyfive->q55_type_activities==2)
            Facilitation of CTC Members (Union)
            @elseif($fiftyfive->q55_type_activities==3)
            Facilitation of CTC Members (Upazilla)
            @elseif($fiftyfive->q55_type_activities==4)
            Facilitation of CTC Members (District)
            @elseif($fiftyfive->q55_type_activities==5)
            Facilitation of Private Sector
            @elseif($fiftyfive->q55_type_activities==6)
            Development Partners
            @elseif($fiftyfive->q55_type_activities==7)
            Networking Meeting
            @elseif($fiftyfive->q55_type_activities==8)
            Workshop/Conference/Seminar/Meeting
            @elseif($fiftyfive->q55_type_activities==9)
            MoU
            @elseif($fiftyfive->q55_type_activities==10)
            Meeting of DLAC (District)
            @elseif($fiftyfive->q55_type_activities==11)
            Meeting of DLAC (Upazilla)
            @elseif($fiftyfive->q55_type_activities==12)
            Facilitation with Police/Court/BLAS organizations
            @elseif($fiftyfive->q55_type_activities==13)
            {{$fiftyfive->q55_othe_specify}}
            @endif  
           
            </td>
            <td>
            {{$fiftyfive->distric->name ?? ''}}
            </td> 
            <td>
            {{$fiftyfive->q55_organizations_covered}}
            </td>
            <td>
            {{$fiftyfive->q55_number_events}}
            </td>
            <td>
            {{$fiftyfive->q55_individuals_covered_men}}
            </td>
            <td>
            {{$fiftyfive->q55_individuals_covered_women}}
            </td>
            <td>
            {{$fiftyfive->q55_individuals_covered_third_gender}}
            </td> 
            <td>
            {{$fiftyfive->q55_individuals_covered_boy}}
            </td>
            <td>
            {{$fiftyfive->q55_individuals_covered_girl}}
            </td>
            <td>
            {{$fiftyfive->q55_individuals_covered_total}}
            </td>
            
            </tr>
            @php
                $menTotal += $fiftyfive->q55_individuals_covered_men;
                $womenTotal += $fiftyfive->q55_individuals_covered_women;
                $boysTotal += $fiftyfive->q55_individuals_covered_third_gender;
                $girlsTotal += $fiftyfive->q55_individuals_covered_boy;
                $thirdGenderTotal += $fiftyfive->q55_individuals_covered_girl;
                $grandTotal += $fiftyfive->q55_individuals_covered_total;
            @endphp
            @endforeach
             <tr style="font-weight:bold; background:#f1f1f1;">
               <td colspan="4">Total</td>
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
  