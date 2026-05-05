@if(Auth::user()->can('36.question'))
<!-- question no 36 Start -->
<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">36.Please list the number of individuals or cases, investigation, prosecution,
        or conviction for sex trafficking, labour trafficking/forced labour and other forms of trafficking
        (e.g.
        organ trafficking). </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <h3>Investigations</h3>
      <table cellpadding=0 celspecing=0 width="100%" class="table table-white table-bordered">
        <thead>

          <tr align="center">
            <th>Type of TIP Cases investigated</th>
            <th>Category of coverage</th>
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


        @foreach($case->thirtysix as $thirtysix)
        <tr>
        <!-- <td rowspan=3>Total individuals convicted</td> -->
        <td>
        @if ($thirtysix->q36_type_cases_investigated == 1)
        Individuals/cases (new this reporting period)
        @elseif ($thirtysix->q36_type_cases_investigated == 2)
        Individuals/cases investigated (ongoing from the previous reporting period)
        @elseif ($thirtysix->q36_type_cases_investigated == 3)
        Individuals/cases investigated (new this reporting period)
        @elseif ($thirtysix->q36_type_cases_investigated == 4)
        Individuals/cases investigated (ongoing from the previous reporting period)
        @elseif ($thirtysix->q36_type_cases_investigated == 5)
        Individuals/cases investigated (new this reporting period)
        @elseif ($thirtysix->q36_type_cases_investigated == 6)
        Individuals/cases investigated (ongoing from the previous reporting period)           
        @endif
        </td>
        <td>
        @if ($thirtysix->q36_category_coverage == 1)
        Number of Victims of Sex Trafficking Cases
        @elseif ($thirtysix->q36_category_coverage == 2)
        Number of Victims of Labour Trafficking Cases
        @elseif ($thirtysix->q36_category_coverage == 3)
        Number of Victims of Other/unspecified Trafficking Cases
                          
        @endif
        </td>
          <td>{{$thirtysix->q36_new_report_sex_trafficking_cases_men}}</td>
          <td>{{$thirtysix->q36_new_report_sex_trafficking_cases_women}}</td>
          <td>{{$thirtysix->q36_new_report_sex_trafficking_cases_third_gender}}</td>
          <td>{{$thirtysix->q36_new_report_sex_trafficking_cases_boy}}</td>
          <td>{{$thirtysix->q36_new_report_sex_trafficking_cases_girl}}</td>
          <td>{{$thirtysix->q36_new_report_sex_trafficking_cases_total}}</td>
          
        </tr>
        @php
                $menTotal += $thirtysix->q36_new_report_sex_trafficking_cases_men;
                $womenTotal += $thirtysix->q36_new_report_sex_trafficking_cases_women;
                $boysTotal += $thirtysix->q36_new_report_sex_trafficking_cases_third_gender;
                $girlsTotal += $thirtysix->q36_new_report_sex_trafficking_cases_boy;
                $thirdGenderTotal += $thirtysix->q36_new_report_sex_trafficking_cases_girl;
                $grandTotal += $thirtysix->q36_new_report_sex_trafficking_cases_total;
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
<!-- question no 36 End -->
    @endif