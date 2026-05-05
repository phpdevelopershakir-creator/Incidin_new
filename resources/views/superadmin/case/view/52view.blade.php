<?php
if (($questiontitles[51]->status ?? null) == 1) {

?>
  <div class="card">
    <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0">
        <a data-toggle="collapse" href="#Question-52" aria-expanded="false"
          aria-controls="collapse-4">
          52.{{ $questiontitles[51]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-52" class="collapse" role="tabpane52" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div id="six_question_view">
          <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th scope="col">Action </th>
                <th scope="col">Status</th>
                <th scope="col">Attach/Upload Pdf</th>
              </tr>
            </thead>
            <tbody>
              @foreach($case->fiftytwo as $fiftytwo)
              <tr>
                <th>
                  @if($fiftytwo->prosecute_title_q52 == 1)
                  Awareness raising on forced prostitution and trafficking among citizens
                  @elseif ($fiftytwo->prosecute_title_q52 == 2)
                  Awareness raising on legal measures against sexual exploitation of trafficked individuals
                  @elseif ($fiftytwo->prosecute_title_q52 == 3)
                  Legal actions against foreign podophiles/sex-tourists (clients on underaged girls/VoTs)
                  @else
                  {{$fiftytwo->prosecute_title_q52}}
                  @endif
                </th>
                <td>
                  @if($fiftytwo->prosecute_status_q52 == 1)
                  Enforced
                  @elseif ($fiftytwo->prosecute_status_q52 == 2)
                  Updated and enforced
                  @elseif ($fiftytwo->prosecute_status_q52 == 3)
                  Stricter enforcement
                  @elseif ($fiftytwo->prosecute_status_q52 == 4)
                  Increases efforts
                  @endif

                </td>
                <td>
                  @if(!empty($fiftytwo->document_upload_q52))
                  <a href="{{ asset($fiftytwo->document_upload_q52) }}" target="_blank">View</a>
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