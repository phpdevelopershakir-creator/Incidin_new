@if(Auth::user()->can('54.question'))
 <div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">54.Did ministry/agency/organization train law enforcing agencies and judiciary?
      </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body row">



      <table id="addRow" class="table table-bordered text-center">
        <thead>
          <tr>
            <th rowspan="2" style="text-align: center; margin: bottom 45%;">Category of Trainee</th>
            <th rowspan="2">Number of Training</th>
            <th rowspan="2">Training Contents</th>
            <th colspan="6">Coverage</th>
            <tr>
            <th>Men</th>
            <th>Women</th>
            <th>3rd Gender </th>
            <th>Total</th>
          </tr>
          </tr>
        </thead>
        <tbody>
            @php
                $menTotal = 0;
                $womenTotal = 0;
                $thirdGenderTotal = 0;
                $grandTotal = 0;
             @endphp
        @foreach($case->fiftyfour as $fiftyfour)

          <tr>
          <td>
              {{$fiftyfour->category_trainee_54}}
              </td> 
              <td>
              {{$fiftyfour->number_of_training_54}}
              </td>
              <td>
              {{$fiftyfour->training_contents_54}}
              </td> 
              <td>
              {{$fiftyfour->men_q54}}
              </td> 
              <td>
              {{$fiftyfour->women_q54}}
              </td> 
              <td>
              {{$fiftyfour->third_gender_q54}}
              </td> 
              <td>
              {{$fiftyfour->total_q54}}
              </td> 
          </tr>
              @php
                $menTotal += $fiftyfour->men_q54;
                $womenTotal += $fiftyfour->women_q54;
                $thirdGenderTotal += $fiftyfour->third_gender_q54;
                $grandTotal += $fiftyfour->total_q54;
            @endphp
      @endforeach
      <tr style="font-weight:bold; background:#f1f1f1;">
                <td colspan="3">Total</td>
                <td>{{ $menTotal }}</td>
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

