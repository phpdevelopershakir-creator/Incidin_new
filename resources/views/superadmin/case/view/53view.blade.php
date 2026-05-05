<?php
if (($questiontitles[52]->status ?? null) == 1) {

?>
  <div class="card">
    <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0">
        <a data-toggle="collapse" href="#Question-53" aria-expanded="false"
          aria-controls="collapse-4">
          53.{{ $questiontitles[52]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-53" class="collapse" role="tabpane53" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div id="six_question_view">
          <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th rowspan="2">Category of Trainee</th>
                <th colspan="4">Coverage of Training</th>
          
              </tr>
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>TG</th>


              </tr>
            </thead>
            <tbody>
              @php
              $menTotal = 0;
              $womenTotal = 0;
              $thirdTotal = 0;
              $Total = 0;

              @endphp
              @foreach($case->fiftythree as $fiftythree)
              <tr>
                <th>
                  @if($fiftythree->government_title_q53 == 1)
                  Diplomats in foreign missions
                  @elseif ($fiftythree->government_title_q53 == 2)
                  Labour Attaches
                  @elseif ($fiftythree->government_title_q53 == 3)
                  MoFA officials within the country
                  @else
                  {{$fiftythree->government_title_q53}}
                  @endif
                </th>
                <td>{{$fiftythree->government_men_q53}}</td>
                <td>{{$fiftythree->government_women_q53}}</td>
                <td>{{$fiftythree->government_tg_q53}}</td>
                <td>{{$fiftythree->government_total_q53}}</td>


              </tr>
              @php
              $menTotal += $fiftythree->government_men_q53;
              $womenTotal += $fiftythree->government_women_q53;
              $thirdTotal += $fiftythree->government_tg_q53;
              $Total += $fiftythree->government_total_q53;
              @endphp
              @endforeach
              <tr style="font-weight:bold; background:#f1f1f1;">
                <td>Total</td>
                <td>{{ $menTotal }}</td>
                <td>{{ $womenTotal }}</td>
                <td>{{ $thirdTotal }}</td>
                <td>{{ $Total }}</td>

              </tr>
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>

<?php } ?>