@if(Auth::user()->can('53.question'))
<style>
  .otherSpecify{
    display:none;
  }
</style>
    <div class="col-md-12 question53">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">53.How many VoTs received assistance? How much in total (in BDT).</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
    
    <div id ="53_question_view">
          <table id="addRowQ53" class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th rowspan="2" style="text-align: center; margin: bottom 45%;">Number of Case</th>
                <th colspan="6">Individual Coverage</th>

              </tr>
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>3rd Gender </th>
                <th>Boy</th>
                <th>Girl</th>
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

          @foreach($case->fiftythree as $fiftythree)

              <tr>
                
              <td>
              @if ($fiftythree->number_of_case == 1)
              Health support
              @elseif ($fiftythree->number_of_case == 2)
              Compensation
              @elseif ($fiftythree->number_of_case == 3)
              Training
              @elseif ($fiftythree->number_of_case == 4)
              Psycho-social care
              @elseif ($fiftythree->number_of_case == 5)
              Shelter
              @elseif ($fiftythree->number_of_case == 6)
              Victim protection
              @elseif ($fiftythree->number_of_case == 7)
              {{$fiftythree->q53_other_specify}}
              @endif
                </td>
                <td>
            {{$fiftythree->q53_individual_coverage_men}}
            </td> 
            <td>
            {{$fiftythree->q53_individual_coverage_women}}
            </td>
            <td>
            {{$fiftythree->q53_individual_coverage_third_gender}}
            </td>
            <td>
            {{$fiftythree->q53_individual_coverage_boy}}
            </td>
            <td>
            {{$fiftythree->q53_individual_coverage_girl}}
            </td>
            <td>
            {{$fiftythree->q53_individual_coverage_total}}
            </td>
              </tr>

              @php
                $menTotal += $fiftythree->q53_individual_coverage_men;
                $womenTotal += $fiftythree->q53_individual_coverage_women;
                $boysTotal += $fiftythree->q53_individual_coverage_third_gender;
                $girlsTotal += $fiftythree->q53_individual_coverage_boy;
                $thirdGenderTotal += $fiftythree->q53_individual_coverage_girl;
                $grandTotal += $fiftythree->q53_individual_coverage_total;
            @endphp

            @endforeach
            <tr style="font-weight:bold; background:#f1f1f1;">
               <td>Total</td>
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
   