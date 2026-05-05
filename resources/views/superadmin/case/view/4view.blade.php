<?php
if (($questiontitles[3]->status ?? null) == 1) {

?>

  <div class="card">
    <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0">
        <a data-toggle="collapse" href="#Question-4" aria-expanded="false"
          aria-controls="collapse-4">
          4.{{ $questiontitles[3]->title }}

        </a>
      </h6>
    </div>

    <div id="Question-4" class="collapse" role="tabpanel4" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div id="six_question_view">
          <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th scope="col">Title of The New Low </th>
                <th scope="col">Contents of Change/Status </th>
                <th scope="col">Attach/Upload Pdf</th>
              </tr>
            </thead>
            <tbody>
              @foreach($case->foura as $foura)
              <tr>
                <th>
                  @if($foura->supreme_court_title_q4 == 1)
                  PSHT 2012
                  @elseif ($foura->supreme_court_title_q4 == 2)
                  Rule of PSHTA (2017)
                  @elseif ($foura->supreme_court_title_q4 == 3)
                  OEMA 2013
                  @elseif ($foura->supreme_court_title_q4 == 4)
                  Children Act
                  @elseif ($foura->supreme_court_title_q4 == 5)
                  Labour Act
                  @elseif ($foura->supreme_court_title_q4 == 6)
                  MLA in Criminal Matter 2012
                  @elseif ($foura->supreme_court_title_q4 == 7)
                  Human Organ Transfer Rule 1999
                  @else
                  {{$foura->supreme_court_title_q4}}
                  @endif
                </th>
                <td>
                  @if($foura->supreme_court_status_q4 == 1)
                  Revised
                  @elseif ($foura->supreme_court_status_q4 == 2)
                  Abolished
                  @endif

                </td>
                <td>
                  @if(!empty($foura->supreme_court_image_q4))
                  <a href="{{ asset($foura->supreme_court_image_q4) }}" target="_blank">View</a>
                  @else
                  not Found
                  @endif

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <br>
          <h6>New Low</h6>
          <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th scope="col">Title of The New Low </th>
                <th scope="col">Contents of Change/Status </th>
                <th scope="col">Attach/Upload Pdf</th>
              </tr>
            </thead>
            <tbody>
              @foreach($case->fourb as $fourb)
              <tr>
                <th>
                  {{$fourb->supreme_court_title_two_q4}}
                </th>
                <td>
                  @if($fourb->supreme_court_status_two_q4 == 1)
                  Planned
                  @elseif ($fourb->supreme_court_status_two_q4 == 2)
                  On Process of Need Assessment
                  @elseif ($fourb->supreme_court_status_two_q4 == 3)
                  Drafted
                  @elseif ($fourb->supreme_court_status_two_q4 == 4)
                  Under Review of MoLJPA
                  @elseif ($fourb->supreme_court_status_two_q4 == 5)
                  Waiting to be enacted
                  @elseif ($fourb->supreme_court_status_two_q4 == 6)
                  Enforced

                  @endif

                </td>
                <td>
                  @if(!empty($fourb->supreme_court_image_two_q4))
                  <a href="{{ asset($fourb->supreme_court_image_two_q4) }}" target="_blank">View</a>
                  @else
                  not Found
                  @endif

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


<?php } ?>