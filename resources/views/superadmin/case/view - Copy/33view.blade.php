@if(Auth::user()->can('33.question'))
    <div class="col-md-12 question33">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">33.Were participating victims provided any forms of witness protection? If “Yes’,
            how many?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <div id="33_question_view">
          <table class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th colspan="6" style="text-align: center; margin: bottom 45%;">VoT participating in investigation
                  Provided with Witness Protection </th>
              </tr>
              <!-- <tr>
                <td colspan="6" text-align:"center">Internal Trafficking</td>
                <input type="hidden" name="q33_type[]" value="1">
              </tr> -->
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>3rd Gender </th>
                <th>Boy</th>
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

          @foreach($case->thirtythree as $thirtythree)

          <tr>

            <td colspan="10">
              @if($thirtythree->	q33_type==1)
              Internal Trafficking
              @elseif($thirtythree->	q33_type==2)
              International Trafficking
              @endif  
            </td>
          


          </tr>

          <tr>

          
            <td>
          {{$thirtythree->q33_trafficking_men}}
          </td> 
          <td>
          {{$thirtythree->q33_trafficking_women}}
          </td>
          <td>
          {{$thirtythree->q33_trafficking_third_gender}}
          </td> 
          <td>
          {{$thirtythree->q33_trafficking_boy}}
          <td>
          {{$thirtythree->q33_trafficking_girl}}
          </td> 
          <td>
          {{$thirtythree->q33_trafficking_total}}
          </td>

          </tr>
           @php
                $menTotal += $thirtythree->q33_trafficking_men;
                $womenTotal += $thirtythree->q33_trafficking_women;
                $boysTotal += $thirtythree->q33_trafficking_third_gender;
                $girlsTotal += $thirtythree->q33_trafficking_boy;
                $thirdGenderTotal += $thirtythree->q33_trafficking_girl;
                $grandTotal += $thirtythree->q33_trafficking_total;
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
  