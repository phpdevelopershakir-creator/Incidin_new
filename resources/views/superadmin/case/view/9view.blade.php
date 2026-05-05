<?php
if (($questiontitles[8]->status ?? null) == 1) {

?>

  <div class="card">
    <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0">
        <a data-toggle="collapse" href="#Question-9" aria-expanded="false"
          aria-controls="collapse-4">
          9.{{ $questiontitles[8]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-9" class="collapse" role="tabpane9" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div id="six_question_view">
          <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach($case->nine as $nine)
              <tr>
                <td>

                  {{$nine->court_title_q9}}
                </td>
                <td>
                  {{ $nine->court_type_q9 == 1 ? 'Yes' : 'No' }}
                </td>
                @if($nine->court_type_q9 == 1)
                <td>

                  {{ $nine->court_description_q9 }}

                </td>
                @endif
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

<?php } ?>