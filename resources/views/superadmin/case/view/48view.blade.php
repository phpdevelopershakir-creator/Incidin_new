@if(Auth::user()->can('48.question'))
<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">48.Did the government/your ministry/department/ organization train law enforcement
        and border security officials on anti-trafficking enforcement, policies, and laws? </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div if="q48_question_view" class="card-body row">



      <table id="addRowQ48" class="table table-bordered text-center">
        <thead class="">
          <tr>
            <th rowspan="2" style="text-align: center; margin: bottom 45%;">Category of Trainee </th>
            <th rowspan="2">Training Contents </th>
            <th rowspan="2">Number of Training</th>
            <th rowspan="2">Location
            </th>
            <th rowspan="2">Development Partner</th>
            <th colspan="4">Coverage</th>
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

@foreach($case->fortyeight as $fortyeight)

          <tr>
            <td>
            @if($fortyeight->	category_trainee==1)
            Police
            @elseif($fortyeight->	category_trainee==2)
            CID
            @elseif($fortyeight->	category_trainee==3)
            RAB
            @elseif($fortyeight->	category_trainee==4)
            Ansar
            @elseif($fortyeight->	category_trainee==5)
            VDP
            @elseif($fortyeight->	category_trainee==6)
            Coast Guard
            @elseif($fortyeight->	category_trainee==7)
            BGB
            @elseif($fortyeight->	category_trainee==8)
            Immigration
            @endif  
           
            </td>
            <td>
            @if($fortyeight->	category_trainee==1)
            PSHT
            @elseif($fortyeight->	category_trainee==2)
            PSHT Act 2012
            @elseif($fortyeight->	category_trainee==3)
            Rule of PSHT Act
            @elseif($fortyeight->	category_trainee==4)
            TIP Investigation
            @elseif($fortyeight->	category_trainee==5)
            Victim Withess Protection
            @elseif($fortyeight->	category_trainee==6)
            TIP and MLA
            @elseif($fortyeight->	category_trainee==7)
            Role of Police
            @elseif($fortyeight->	category_trainee==8)
            NPA
            @elseif($fortyeight->	category_trainee==9)
            NRM
            @elseif($fortyeight->	category_trainee==10)
            VoT identification Guideline
            @endif  
              
            </td>
            <td>
            {{$fortyeight->number_of_training}}
            </td> 
            <td>
            {{$fortyeight->q48_location_id}}
            </td>
            <td>
            {{$fortyeight->development_partner}}
            </td>
            <td>
            {{$fortyeight->q48_coverage_men}}
            </td>
            <td>
            {{$fortyeight->q48_coverage_women}}
            </td>
            <td>
            {{$fortyeight->q48_coverage_third_gender}}
            </td>
            <td>
            {{$fortyeight->q48_coverage_total}}
            </td>
            
          </tr>
           @php
              $menTotal += $fortyeight->q48_coverage_men;
              $womenTotal += $fortyeight->q48_coverage_women;
              $thirdGenderTotal += $fortyeight->q48_coverage_third_gender;
              $grandTotal += $fortyeight->q48_coverage_total;
          @endphp

        @endforeach
         <tr style="font-weight:bold; background:#f1f1f1;">
            
                <td colspan="5">Total</td>
                <td colspan="">{{ $menTotal }}</td>
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

 