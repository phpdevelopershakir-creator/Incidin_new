<?php
if (($questiontitles[10]->status ?? null) == 1) {

?>
  <div class="card">
    <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0">
        <a data-toggle="collapse" href="#Question-11" aria-expanded="false"
          aria-controls="collapse-4">
          11.{{ $questiontitles[51]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-11" class="collapse" role="tabpane11" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">

        <table class="table table-bordered text-center">
          <thead>
            <tr>
              <th>Country</th>
              <th>Target group of Training (multiple response)</th>
              <th>Total coverage</th>

            </tr>
          </thead>
          <tbody>
            @foreach($case->eleven as $eleven)
            <tr>
              <th>
                @if($eleven->government_agreements_transparent_country_q11 == 1)
                India
                @elseif ($eleven->government_agreements_transparent_country_q11 == 2)
                Nepal
                @elseif ($eleven->government_agreements_transparent_country_q11 == 3)
                Sri lanka
                @elseif ($eleven->government_agreements_transparent_country_q11 == 4)
                EU
                @elseif ($eleven->government_agreements_transparent_country_q11 == 5)
                USA
                @elseif ($eleven->government_agreements_transparent_country_q11 == 6)
                Saudi Arabia
                @elseif ($eleven->government_agreements_transparent_country_q11 == 7)
                Qatar
                @elseif ($eleven->government_agreements_transparent_country_q11 == 8)
                Lebanon
                @elseif ($eleven->government_agreements_transparent_country_q11 == 9)
                Irag
                @elseif ($eleven->government_agreements_transparent_country_q11 == 10)
                UAE
                @elseif ($eleven->government_agreements_transparent_country_q11 == 11)
                Thailand
                @elseif ($eleven->government_agreements_transparent_country_q11 == 12)
                Vietnam
                @elseif ($eleven->government_agreements_transparent_country_q11 == 13)
                Cambodia
                @elseif ($eleven->government_agreements_transparent_country_q11 == 14)
                South Africa
                @elseif ($eleven->government_agreements_transparent_country_q11 == 15)
                Brazil
                @elseif ($eleven->government_agreements_transparent_country_q11 == 16)
                UK

                @else
                {{$eleven->government_agreements_transparent_country_q11}}
                @endif
              </th>
              <td>
                @if($eleven->government_agreements_transparent_status_q11 == 1)
                Govemment Official
                @elseif ($eleven->government_agreements_transparent_status_q11 == 2)
                Immigration authority
                @elseif ($eleven->government_agreements_transparent_status_q11 == 3)
                Law Enforcing Personnel
                @elseif ($eleven->government_agreements_transparent_status_q11 == 4)
                Border Control Force
                @elseif ($eleven->government_agreements_transparent_status_q11 == 5)
                Judiciary
                @elseif ($eleven->government_agreements_transparent_status_q11 == 6)
                Diplomat
                @endif

              </td>
              <td>
                {{$eleven->government_agreements_transparent_total_q11}}

              </td>
            </tr>
            @endforeach
          </tbody>
        </table>


      </div>
    </div>
  </div>

<?php } ?>