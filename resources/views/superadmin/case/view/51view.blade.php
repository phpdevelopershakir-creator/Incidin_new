<?php
if (($questiontitles[50]->status ?? null) == 1) {

?>
  <div class="card">
    <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0">
        <a data-toggle="collapse" href="#Question-51" aria-expanded="false"
          aria-controls="collapse-4">
          51.{{ $questiontitles[50]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-51" class="collapse" role="tabpane51" aria-labelledby="heading-4"
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
              @foreach($case->fiftyone as $fiftyone)
              <tr>
                <th>
                  @if($fiftyone->commercial_title_q51 == 1)
                  Awareness raising on forced prostitution and trafficking among citizens
                  @elseif ($fiftyone->commercial_title_q51 == 2)
                  Awareness raising on legal measures against sexual exploitation of trafficked individuals
                  @elseif ($fiftyone->commercial_title_q51 == 3)
                  Legal actions against foreign podophiles/sex-tourists (clients on underaged girls/VoTs)
                  @else
                  {{$fiftyone->commercial_title_q51}}
                  @endif
                </th>
                <td>
                  @if($fiftyone->commercial_status_q51 == 1)
                  Enforced
                  @elseif ($fiftyone->commercial_status_q51 == 2)
                  Updated and enforced
                  @elseif ($fiftyone->commercial_status_q51 == 3)
                  Stricter enforcement
                  @elseif ($fiftyone->commercial_status_q51 == 4)
                  Increases efforts
                  @endif

                </td>
                <td>
                  @if(!empty($fiftyone->document_upload_q51))
                  <a href="{{ asset($fiftyone->document_upload_q51) }}" target="_blank">View</a>
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