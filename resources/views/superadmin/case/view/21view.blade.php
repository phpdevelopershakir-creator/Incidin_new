


<?php
if (($questiontitles[20]->status ?? null) == 1) {

?>
  <div class="card">
    <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0">
        <a data-toggle="collapse" href="#Question-21" aria-expanded="false"
          aria-controls="collapse-4">
          21.{{ $questiontitles[20]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-21" class="collapse" role="tabpane4" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">

        <table class="table table-bordered text-center">
          <thead>
            <tr>
              <th rowspan="2">Name of the Shalters </th>
              <th rowspan="2">Operators </th>
              <th colspan="3">Capacity </th>
              <th rowspan="2">Specialized for Trafficking? </th>
              <th rowspan="2">Eligible Victims</th>
              <th rowspan="2">Note</th>
            </tr>
            <tr>
              <th>Men</th>
              <th>Women</th>
              <th>Total</th>
            </tr>
          </thead>>
          @foreach($case->twentyone as $twentyone)
          <tr>
            <td> {{$twentyone->name_q21}}</td>
            <td> {{$twentyone->operator_q21}}</td>
            <td> {{$twentyone->capacity_men_q21}}</td>
            <td> {{$twentyone->capacity_women_q21}}</td>
            <td> {{$twentyone->capacity_total_q21}}</td>
            <td> {{$twentyone->is_specialized_q21}}</td>
            <td> {{$twentyone->eligible_victims_q21}}</td>
            <td> {{$twentyone->note_q21}}</td>

          </tr>
          @endforeach
          </tbody>
        </table>

      
    </div>

  </div>
  </div>
<?php } ?>