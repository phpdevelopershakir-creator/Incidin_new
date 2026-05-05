@if(Auth::user()->can('32.question'))
<div class="col-md-12 question32">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">32.Did VoT participated in investigation and prosecution?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
     

    
      <div id ="32_question_view">
      <table class="table table-bordered text-center">
        <thead class="">
          <tr>
            <th colspan="6" style="text-align: center; margin: bottom 45%;">VoT participating in
              investigation/prosecution </th>
          </tr>
          <!-- <tr>
            <td colspan="6" text-align:"center">Internal Trafficking</td>
            <input type="hidden" name="q32_type[]" value="1">
          </tr> -->
          <tr>
            <th>Men</th>
            <th>Women</th>
            <th>3rd Gender </th>
            <th>Boy</th>
            <th>girls</th>
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



  @foreach($case->thirtytwo as $thirtytwo)

<tr>

  <td colspan="10">
    @if($thirtytwo->	q32_type==1)
    Internal Trafficking
    @elseif($thirtytwo->	q32_type==2)
    International Trafficking
    @endif  
  </td>
 


</tr>

<tr>

 
  <td>
{{$thirtytwo->q32_internal_trafficking_men}}
</td> 
<td>
{{$thirtytwo->q32_trafficking_women}}
</td>
<td>
{{$thirtytwo->q32_trafficking_third_gender}}
</td> 
<td>
{{$thirtytwo->q32_trafficking_boy}}
<td>
{{$thirtytwo->q32_trafficking_girl}}
</td> 
<td>
{{$thirtytwo->q32_trafficking_total}}
</td>

</tr>
           @php
                $menTotal += $thirtytwo->q32_internal_trafficking_men;
                $womenTotal += $thirtytwo->q32_trafficking_women;
                $boysTotal += $thirtytwo->q32_trafficking_third_gender;
                $girlsTotal += $thirtytwo->q32_trafficking_boy;
                $thirdGenderTotal += $thirtytwo->q32_trafficking_girl;
                $grandTotal += $thirtytwo->q32_trafficking_total;
            @endphp

@endforeach
              <tr style="font-weight:bold; background:#f1f1f1;">
            
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
