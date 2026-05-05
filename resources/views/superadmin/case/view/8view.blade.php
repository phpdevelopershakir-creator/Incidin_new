<?php
if (($questiontitles[7]->status ?? null) == 1) {

?>
  <div class="card">
    <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0">
        <a data-toggle="collapse" href="#Question-5" aria-expanded="false"
          aria-controls="collapse-4">
          8.{{ $questiontitles[7]->title }}
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
              @foreach($case->eight as $eight)
              <tr>

                <td>{{$eight->official_title_q8}}</td>
                <td>{{$eight->official_investigation_q8}}</td>
                <td>{{$eight->official_prosecution_q8}}</td>
                <td>{{$eight->official_conviction_q8}}</td>
                <td>{{$eight->official_administrative_q8}}</td>
              </tr>
              @php
              $menTotal += $eight->official_investigation_q8;
              $womenTotal += $eight->official_prosecution_q8;
              $thirdGenderTotal += $eight->official_conviction_q8;
              $boysTotal += $eight->official_administrative_q8;

              @endphp
              @endforeach
              <tr style="font-weight:bold; background:#f1f1f1;">
                <td>Total</td>
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

<?php } ?>