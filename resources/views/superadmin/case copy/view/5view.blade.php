<div class="card">
  <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0">
        <a data-toggle="collapse" href="#Question-5" aria-expanded="false"
          aria-controls="collapse-4">
          5.Did the government investigate, prosecute, convict, or sentence any allegedly complicit officials? (Tips: Please provide information solely based on government documents cleared for public sharing and the answer can only be “YES” when the crime is a result of a national directive or policy, including state sponsored forced labor)
        </a>
      </h6>
    </div>

    <div id="Question-5" class="collapse" role="tabpanel5" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
<div id="six_question_view">
       <table class="table table-bordered text-center">
          <thead>
            <tr>
                <th rowspan="2" style="text-align: center; vertical-align: middle;">Ministry/Department Municipality body</th>
                <!-- <th rowspan="2">Description of change/Status</th> -->
                <th colspan="4">Measures Taken</th>

              </tr>
              <tr>
                <th>Investigation (numbwer)</th>
                <th>Prosecution (number)</th>
                <th>Conviction or Sentencing (number)</th>
                <th>Administrative Measures (numbwer)</th>
            
              </tr>
            </thead>
            <tbody>
              @php
                $menTotal = 0;
                $womenTotal = 0;
                $thirdGenderTotal = 0;
                $boysTotal = 0;
      
             @endphp
              @foreach($case->five as $five)
               <tr>
             
                <td>{{$five->official_title}}</td>
                <td>{{$five->official_investigation}}</td>
                <td>{{$five->official_prosecution}}</td>
                <td>{{$five->official_conviction}}</td>
                <td>{{$five->official_administrative}}</td>
               </tr>
               @php
                $menTotal += $five->official_investigation;
                $womenTotal += $five->official_prosecution;
                $thirdGenderTotal += $five->official_conviction;
                $boysTotal += $five->official_administrative;
               
            @endphp
              @endforeach
              <tr style="font-weight:bold; background:#f1f1f1;">
               <td >Total</td>
                <td>{{ $menTotal }}</td>
                <td>{{ $womenTotal }}</td>
                <td>{{ $thirdGenderTotal }}</td>
                <td>{{ $boysTotal }}</td>
            </tr>
            
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>