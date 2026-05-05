@if(Auth::user()->can('18.question'))
<div class="col-md-12 question18">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">18.Did the government train its diplomats not to engage in or facilitate
        trafficking?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      
     
       <div id="eightteen_question_view">
      <table>
        <br />
        <br />
        <thead>
          <tr>
            <th rowspan="2" scope="row">Category of Trainee</th>
            <th colspan="5" style="text-align: left">Coverage of Training</th>
          </tr>
          <tr>
            <th scope="row">Men</th>
            <th scope="col">Women</th>
            <th scope="col">3rd Gender </th>
            <th scope="col">Total</th>

          </tr>
        </thead>
        <tbody>
          @php
                $menTotal = 0;
                $womenTotal = 0;
                $thirdGenderTotal = 0;
                $grandTotal = 0;
             @endphp

        @foreach($case->eighteen as $eighteen)
          <tr>
          <td>
          @if ($eighteen->category_trainee_q18 == 1)
          Diplomats in foreign missions
                @elseif ($eighteen->category_trainee_q18 == 2)
                Labour Attaches
                @elseif ($eighteen->category_trainee_q18 == 3)
                MoFA officials within the country
                @endif
              </td>

      
            <td>   <div>   {{ $eighteen->coverage_training_men }}  </div>  </td>
            <td>   <div>   {{ $eighteen->coverage_training_women }}  </div>  </td>
            <td>   <div>   {{ $eighteen->coverage_training_third_gender }}  </div>  </td>
            <td>   <div>   {{ $eighteen->coverage_training_total }}  </div>  </td>
           

          </tr>
              @php
                $menTotal += $eighteen->coverage_training_men;
                $womenTotal += $eighteen->coverage_training_women;
                $thirdGenderTotal += $eighteen->coverage_training_third_gender;
                $grandTotal += $eighteen->coverage_training_total;
            @endphp
          @endforeach
          <tr style="font-weight:bold; background:#f1f1f1;">
             <td >Total</td>
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
</div>

<script>
  
</script>
@endif

