<?php
if (($questiontitles[2]->status ?? null) == 1) {

?>
  <div class="card">
    <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0">
        <a data-toggle="collapse" href="#Question-3" aria-expanded="false"
          aria-controls="collapse-4">
          3.{{ $questiontitles[2]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-3" class="collapse" role="tabpanel3" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div id="six_question_view">
          <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th rowspan="3" style="text-align: center; margin: bottom 45%;">Ministry/Department</th>

              <tr>
                <th colspan="3">Number of Official Accused</th>
                <th colspan="1">Result of which Policy/Law/ response </th>
              </tr>
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>Total</th>
                <td>Response</td>

              </tr>
            </thead>
            <tbody>
              @php
              $menTotal = 0;
              $womenTotal = 0;
              $Total = 0;

              @endphp
              @foreach($case->three as $three)
              <tr>

                <td>{{$three->labor_title}}</td>
                <td>{{$three->labor_men}}</td>
                <td>{{$three->labor_women}}</td>
                <td>{{$three->labor_total}}</td>
                <td>{{$three->labor_response}}</td>
              </tr>
              @php
              $menTotal += $three->labor_men;
              $womenTotal += $three->labor_women;
              $Total += $three->labor_total;


              @endphp
              @endforeach
              <tr style="font-weight:bold; background:#f1f1f1;">
                <td>Total</td>
                <td>{{ $menTotal }}</td>
                <td>{{ $womenTotal }}</td>
                <td>{{ $Total }}</td>

              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

<?php } ?>