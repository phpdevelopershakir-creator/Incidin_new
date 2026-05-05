@if(Auth::user()->can('40.question'))
   <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">40. Conviction Status</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <h3>Conviction Status</h3>
          <table cellpadding=0 celspecing=0 width="100%">
            <thead>
              <tr>
                <td colspan="2"> Conviction Status
                </td>
                <td>M</td>
                <td>W</td>
                <td>3rd Gender </td>
                <td>B</td>
                <td>G</td>
                <!-- <td>T</td> -->
                <td>Total</td>
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

        @foreach($case->forty as $forty)
        <tr>
        <!-- <td rowspan=3>Total individuals convicted</td> -->
        <td>
        @if ($forty->q40_type_cases_investigated == 1)
        Total individuals convicted
        @elseif ($forty->q40_type_cases_investigated == 2)
        Individuals convicted under PSHT Act 2012
        @elseif ($forty->q40_type_cases_investigated == 3)
        individuals convicted under non-trafficking laws (OEMA/PC)
        @elseif ($forty->q40_type_cases_investigated == 4)
        Convictions newly upheld on appeal
        @elseif ($forty->q40_type_cases_investigated == 5)
        Convictions newly overturned on appeal
        @elseif ($forty->q40_type_cases_investigated == 6)
        Individuals acquitted             
        @endif
        </td>
        <td>
        @if ($forty->q40_category_coverage == 1)
        Number of Victims of Sex Trafficking Cases
        @elseif ($forty->q40_category_coverage == 2)
        Number of Victims of Labour Trafficking Cases
        @elseif ($forty->q40_category_coverage == 3)
        Number of Victims of Other/unspecified Trafficking Cases
                          
        @endif
        </td>
          <!-- <td>{{$forty->q40_category_coverage}}</td> -->
          <td>{{$forty->q40_new_report_sex_trafficking_cases_men}}</td>
          <td>{{$forty->q40_new_report_sex_trafficking_cases_women}}</td>
          <td>{{$forty->q40_new_report_sex_trafficking_cases_third_gender}}</td>
          <td>{{$forty->q40_new_report_sex_trafficking_cases_boy}}</td>
          <td>{{$forty->q40_new_report_sex_trafficking_cases_girl}}</td>
          <td>{{$forty->q40_new_report_sex_trafficking_cases_total}}</td>
          
        </tr>
         @php
                $menTotal += $forty->q40_new_report_sex_trafficking_cases_men;
                $womenTotal += $forty->q40_new_report_sex_trafficking_cases_women;
                $thirdGenderTotal += $forty->q40_new_report_sex_trafficking_cases_third_gender;
                $boysTotal += $forty->q40_new_report_sex_trafficking_cases_boy;
                $girlsTotal += $forty->q40_new_report_sex_trafficking_cases_girl;
                $grandTotal += $forty->q40_new_report_sex_trafficking_cases_total;
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
    @endif