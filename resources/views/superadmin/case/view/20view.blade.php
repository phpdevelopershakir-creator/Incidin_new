@if(Auth::user()->can('20.question'))
<div class="col-md-12 question20">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">20.Did the government provide anti-trafficking training to its nationals deployed
        abroad on
        peacekeeping or other similar missions?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    
    <div class="card-body">
    <div class="form-group clearfix">
  
         
         
     <div id ="twenty_question_view" class="card-body row">
      <table id="addRowQ20" class="table table-bordered text-center">
        <thead class="">
          <tr>
            <th rowspan="3" style="text-align: center; margin: bottom 45%;">Country where
              posted</th>
            <th rowspan="3">Description</th>
            <th colspan="4">Number of Cases</th>
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

@foreach($case->twenty as $twenty)
          <tr>
            <td> 
            <div>   {{ $twenty->country->name  ?? ''}}  </div>
            </td>
            <td><div>   {{ $twenty->q20_description }}  </div></td>
            <td><div>   {{ $twenty->q20_number_cases_men }}  </div></td> 
            <td><div>   {{ $twenty->q20_number_cases_women }}  </div></td> 
            <td><div>   {{ $twenty->q20_number_cases_third_gender }}  </div></td> 
            <td><div>   {{ $twenty->q20_number_cases_total }}  </div></td> 

          </tr>
           @php
                $menTotal += $twenty->q20_number_cases_men;
                $womenTotal += $twenty->q20_number_cases_women;
                $thirdGenderTotal += $twenty->q20_number_cases_third_gender;
                $grandTotal += $twenty->q20_number_cases_total;
            @endphp
          @endforeach
          <tr style="font-weight:bold; background:#f1f1f1;">
             <td colspan="2">Total</td>
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
@endif

