<?php
if (($questiontitles[4]->status ?? null) == 1) {

?>

  <div class="card">
    <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0">
        <a data-toggle="collapse" href="#Question-2" aria-expanded="false"
          aria-controls="collapse-4">
          5.{{ $questiontitles[4]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-2" class="collapse" role="tabpane2" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
        <div id="six_question_view">

          @foreach($case->five as $five)
          {{$five->involved_directly_trafficking_title_q5}}
          @endforeach

        </div>
      </div>
    </div>
  </div>

<?php } ?>