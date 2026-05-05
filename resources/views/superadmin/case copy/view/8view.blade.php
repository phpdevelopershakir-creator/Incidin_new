<?php
if (($questiontitles[7]->status ?? null) == 1) {

?>

  <div class="card">
    <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0">
        <a data-toggle="collapse" href="#Question-8" aria-expanded="false"
          aria-controls="collapse-4">
          8.{{ $questiontitles[7]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-8" class="collapse" role="tabpane8" aria-labelledby="heading-4"
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
              @foreach($case->eight as $eight)
              <tr>
                <td>

                  {{$eight->court_title_q8}}
                </td>
                <td>
                  {{ $eight->court_type_q8 == 1 ? 'Yes' : 'No' }}
                </td>
                @if($eight->court_type_q8 == 1)
                <td>

                  {{ $eight->court_description_q8 }}

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