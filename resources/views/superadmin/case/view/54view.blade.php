<?php
if (($questiontitles[53]->status ?? null) == 1) {

?>
  <div class="card">
    <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0">
        <a data-toggle="collapse" href="#Question-54" aria-expanded="false"
          aria-controls="collapse-4">
          54.{{ $questiontitles[53]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-54" class="collapse" role="tabpane54" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        
          <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th rowspan="2">Country where posted</th>
                <th rowspan="2">Description</th>
                <th colspan="4">Coverage of Training</th>

              </tr>
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>TG</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              @php
              $menTotal = 0;
              $womenTotal = 0;
              $thirdTotal = 0;
              $Total = 0;

              @endphp
              @foreach($case->fiftyfour as $fiftyfour)
              <tr>
                <th>
                  @if($fiftyfour->country_diplomat_name_q54 == 1)
                  India
                  @elseif ($fiftyfour->country_diplomat_name_q54 == 2)
                  Nepal
                  @elseif ($fiftyfour->country_diplomat_name_q54 == 3)
                  Sri lanka
                  @elseif ($fiftyfour->country_diplomat_name_q54 == 4)
                  EU
                  @elseif ($fiftyfour->country_diplomat_name_q54 == 5)
                  USA
                  @elseif ($fiftyfour->country_diplomat_name_q54 == 6)
                  Saudi Arabia
                  @elseif ($fiftyfour->country_diplomat_name_q54 == 7)
                  Qatar
                  @elseif ($fiftyfour->country_diplomat_name_q54 == 8)
                  Lebanon
                  @elseif ($fiftyfour->country_diplomat_name_q54 == 9)
                  Irag
                  @elseif ($fiftyfour->country_diplomat_name_q54 == 10)
                  UAE
                  @elseif ($fiftyfour->country_diplomat_name_q54 == 11)
                  Thailand
                  @elseif ($fiftyfour->country_diplomat_name_q54 == 12)
                  Vietnam
                  @elseif ($fiftyfour->country_diplomat_name_q54 == 13)
                  Cambodia
                  @elseif ($fiftyfour->country_diplomat_name_q54 == 14)
                  South Africa
                  @elseif ($fiftyfour->country_diplomat_name_q54 == 15)
                  Brazil
                  @elseif ($fiftyfour->country_diplomat_name_q54 == 16)
                  UK

                  @else
                  {{$fiftyfour->country_diplomat_name_q54}}
                  @endif
                </th>
                <td>{{$fiftyfour->country_diplomat_description_q54}}</td>
                <td>{{$fiftyfour->country_diplomat_men_q54}}</td>
                <td>{{$fiftyfour->country_diplomat_women_q54}}</td>
                <td>{{$fiftyfour->country_diplomat_tg_q54}}</td>
                <td>{{$fiftyfour->country_diplomat_total_q54}}</td>


              </tr>
              @php
              $menTotal += $fiftyfour->country_diplomat_men_q54;
              $womenTotal += $fiftyfour->country_diplomat_women_q54;
              $thirdTotal += $fiftyfour->country_diplomat_tg_q54;
              $Total += $fiftyfour->country_diplomat_total_q54;
              @endphp
              @endforeach
              <tr style="font-weight:bold; background:#f1f1f1;">
                <td colspan="2">Total</td>
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

<?php } ?>