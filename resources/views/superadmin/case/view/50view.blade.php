<?php
if (($questiontitles[49]->status ?? null) == 1) {

?>
  <div class="card">
    <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0">
        <a data-toggle="collapse" href="#Question-50" aria-expanded="false"
          aria-controls="collapse-4">
          50.{{ $questiontitles[49]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-50" class="collapse" role="tabpane50" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div id="six_question_view">
          <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th scope="col">Action </th>
                <th scope="col">Attach/Upload Pdf</th>
              </tr>
            </thead>
            <tbody>
              @foreach($case->fifty as $fifty)
              <tr>
                <th>
                  @if($fifty->exploitative_treatment_title_q50 == 1)
                  Strict Monitoring of impacts of policies
                  @elseif ($fifty->exploitative_treatment_title_q50 == 2)
                  Promotion of safe migration
                  @elseif ($fifty->exploitative_treatment_title_q50 == 3)
                  Awareness raising of vulnerable groups
                  @elseif ($fifty->exploitative_treatment_title_q50 == 4)
                  Expansion of safety-net for vulnerable groups
                  @elseif ($fifty->exploitative_treatment_title_q50 == 5)
                  Promotion of skilling among vulnerable groups
                  @else
                  {{$fifty->exploitative_treatment_title_q50}}
                  @endif
                </th>
                

                <td>
                  @if(!empty($fifty->document_upload_q50))
                  <a href="{{ asset($fifty->document_upload_q50) }}" target="_blank">View</a>
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