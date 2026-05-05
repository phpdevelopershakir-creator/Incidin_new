@if(Auth::user()->can('37.question'))
            <!-- question no 37 Start -->
            <style>
              
            </style>  
            <div class="col-md-12">
                <div class="card card-outline collapsed-card">
                  <div class="card-header">
                    <h3 class="card-title">37. Please list the number of individuals or cases prosecution for sex
                      trafficking, labour trafficking/forced labour and other forms of trafficking (e.g. organ
                      trafficking). </h3>
  
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3>Prosecution</h3>
                    <table cellpadding=0 celspecing=0 width="100%">
                      <thead>

                        <tr>
                          <td colspan="2"> Type of TIP Cases investigated
                          </td>
                          <td class="col-md-2">M</td>
                          <td class="col-md-2">W</td>
                          <td class="col-md-2">3rd Gender </td>
                          <td class="col-md-2">B</td>
                          <td class="col-md-2">G</td>
                          <td class="col-md-2">T</td>
    
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

                        @foreach($case->thirtyseven as $thirtyseven)
                        <tr>
                        <td>
                        @if ($thirtyseven->q37_type_cases_investigated == 1)
                          Number of cases prosecuted
                        @elseif ($thirtyseven->q37_type_cases_investigated == 2)
                          Number of cases prosecuted (ongoing from the previous reporting period)
                        @elseif ($thirtyseven->q37_type_cases_investigated == 3)
                          Number of cases prosecuted (new this reporting period)
                        @elseif ($thirtyseven->q37_type_cases_investigated == 4)
                          Number of individuals prosecuted
                        @elseif ($thirtyseven->q37_type_cases_investigated == 5)
                          Number of individuals i prosecuted (ongoing from the previous reporting period)
                        @elseif ($thirtyseven->q37_type_cases_investigated == 6)
                          Number of individuals prosecuted (new this reporting period)  
                        @elseif ($thirtyseven->q37_type_cases_investigated == 7)
                          Number of individuals cases under PSHT Act 2012
                        @elseif ($thirtyseven->q37_type_cases_investigated == 8)
                          Number of cases prosecuted under non-trafficking laws (OEMA/PC)   
                        @elseif ($thirtyseven->q37_type_cases_investigated == 9)
                          Number of individuals prosecuted under PSHT Act 2012
                        @elseif ($thirtyseven->q37_type_cases_investigated == 10)
                          Number of individuals prosecuted under non-trafficking laws (OEMA/PC)
                        @endif
                        </td>
                        <td>
                        @if ($thirtyseven->q37_category_coverage == 1)
                        Number of Victims of Sex Trafficking Cases
                        @elseif ($thirtyseven->q37_category_coverage == 2)
                        Number of Victims of Labour Trafficking Cases
                        @elseif ($thirtyseven->q37_category_coverage == 3)
                        Number of Victims of Other/unspecified Trafficking Cases
                                          
                        @endif
                        </td>
                       
                          <td>{{$thirtyseven->q37_new_report_sex_trafficking_cases_men}}</td>
                          <td>{{$thirtyseven->q37_new_report_sex_trafficking_cases_women}}</td>
                          <td>{{$thirtyseven->q37_new_report_sex_trafficking_cases_third_gender}}</td>
                          <td>{{$thirtyseven->q37_new_report_sex_trafficking_cases_boy}}</td>
                          <td>{{$thirtyseven->q37_new_report_sex_trafficking_cases_girl}}</td>
                          <td>{{$thirtyseven->q37_new_report_sex_trafficking_cases_total}}</td>
                          
                        </tr>
                          @php
                            $menTotal += $thirtyseven->q37_new_report_sex_trafficking_cases_men;
                            $womenTotal += $thirtyseven->q37_new_report_sex_trafficking_cases_women;
                            $boysTotal += $thirtyseven->q37_new_report_sex_trafficking_cases_third_gender;
                            $girlsTotal += $thirtyseven->q37_new_report_sex_trafficking_cases_boy;
                            $thirdGenderTotal += $thirtyseven->q37_new_report_sex_trafficking_cases_girl;
                            $grandTotal += $thirtyseven->q37_new_report_sex_trafficking_cases_total;
                        @endphp

                        @endforeach
                        <tr style="font-weight:bold; background:#f1f1f1;">
            
                <td colspan="2">Total</td>
                <td colspan="">{{ $menTotal }}</td>
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
    <!-- question no 37 End -->

    @endif