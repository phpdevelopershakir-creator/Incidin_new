<?php
if (($questiontitles[23]->status ?? null) == 1) {

?>
<div class="card">
  <div class="card-header" role="tab" id="heading-4">
    <h6 class="mb-0">
      <a data-toggle="collapse" href="#Question-24" aria-expanded="false"
        aria-controls="collapse-4">
        24.{{ $questiontitles[23]->title }}
      </a>
    </h6>
  </div>

  <div id="Question-22" class="collapse" role="tabpane24" aria-labelledby="heading-4"
    data-parent="#accordion-2">
    <div class="card-body">

      <input type="radio" name="gender" value="male"> Yes <br>
      <input type="radio" name="gender" value="male"> No <br>

      <input type="radio" name="gender" value="female"> Others <br>
    </div>
  </div>
</div>

<?php } ?>