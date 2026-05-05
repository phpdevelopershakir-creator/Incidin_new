@if(Auth::user()->can('24.question'))
<div class="col-md-12 question24">
    <div class="card card-outline collapsed-card">
      <div class="card-header">
        <h3 class="card-title">24.Were there any new (or changes to preexing) formal/standard procedures for
          victim referral to protected services at your ministry/agency/organization ?</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        
    
        <div id ="24_question_view">
          <table class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th rowspan="2" style="text-align: center; vertical-align: middle;">Title of Origin Guidelines</th>
                <th rowspan="2">Description of change/Status</th>
                <th colspan="6">VoT referred</th>

              </tr>
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>Boys</th>
                <th>Girls</th>
                <th>3rd Gender </th>
                <th>Total</th>
              </tr>
               @php
                $menTotal = 0;
                $womenTotal = 0;
                $boysTotal = 0;
                $girlsTotal = 0;
                $thirdGenderTotal = 0;
                $grandTotal = 0;
             @endphp

              @foreach($case->twentyfour as $twentyfour)
              <tr>
                <td>
                @if ($twentyfour->q24_title_origin_guidelines	 == 1)
                Referral desk established at women and
Child Repression Prevention Tribunals,
Anti-Trafficking Tribunals, and District tribunals
                @elseif ($twentyfour->q24_title_origin_guidelines	 == 2)
                National Referral Mechanism Guideline
                @elseif ($twentyfour->q24_title_origin_guidelines	 == 3)
                National Referral Mechanism SOP
                @elseif ($twentyfour->q24_title_origin_guidelines	 == 4)
                Digital Referral Mechanism of MoHA
                @else
      
                {{$twentyfour->q24_title_origin_guidelines}}

                @endif
                  
                </td>
             
                <td>
                @if ($twentyfour->q24_description_change_status	 == 1)
            Enforced
                @elseif ($twentyfour->q24_description_change_status	 == 2)
                Updated and enforced
                @elseif ($twentyfour->q24_description_change_status	 == 3)
                Updated and enforced
                @elseif ($twentyfour->q24_description_change_status	 == 4)
                Increased efforts
                @elseif ($twentyfour->q24_description_change_status	 == 5)
                Moderate Effortt
                @elseif ($twentyfour->q24_description_change_status	 == 6)
                Less Effort
                @elseif ($twentyfour->q24_description_change_status	 == 7)
                Poor Enforcement
                @elseif ($twentyfour->q24_description_change_status	 == 8)
                Under Review

       @elseif ($twentyfour->q24_description_change_status	 == 9)
      
                 {{$twentyfour->q24_others_specify}}
                  @endif
                </td>
                <td>
                {{$twentyfour->men_q24}}
                  
                </td>
                <td>  {{$twentyfour->women_q24}}</td>
                <td> {{$twentyfour->boy_q24}}</td>
                <td>{{$twentyfour->girl_q24}}</td>
                <td>{{$twentyfour->third_gender_q24}}</td>
                <td>{{$twentyfour->total_q24}}</td>

              </tr>
              @php
                $menTotal += $twentyfour->men_q24;
                $womenTotal += $twentyfour->women_q24;
                $boysTotal += $twentyfour->boy_q24;
                $girlsTotal += $twentyfour->girl_q24;
                $thirdGenderTotal += $twentyfour->third_gender_q24;
                $grandTotal += $twentyfour->total_q24;
            @endphp

              @endforeach

              <tr style="font-weight:bold; background:#f1f1f1;">
                <td colspan="2" style="text-align:right;">Total:</td>
                <td>{{ $menTotal }}</td>
                <td>{{ $womenTotal }}</td>
                <td>{{ $boysTotal }}</td>
                <td>{{ $girlsTotal }}</td>
                <td>{{ $thirdGenderTotal }}</td>
                <td>{{ $grandTotal }}</td>
            </tr>

             




            </thead>


          </table>
        </div>
      </div>
    </div>
  </div>

  @endif
