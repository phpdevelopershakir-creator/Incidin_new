<?php
if (($questiontitles[21]->status ?? null) == 1) {

?>
  <div class="card">
    <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0">
        <a data-toggle="collapse" href="#Question-22" aria-expanded="false"
          aria-controls="collapse-4">
          22.{{ $questiontitles[21]->title }}
        </a>
      </h6>
    </div>

    <div id="Question-22" class="collapse" role="tabpane22" aria-labelledby="heading-4"
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
            @foreach($case->twentytwo as $twentytwo)
            <tr>
              <td> {{$twentytwo->name_q22}}</td>
              <td> {{$twentytwo->operator_q22}}</td>
              <td> {{$twentytwo->capacity_men_q22}}</td>
              <td> {{$twentytwo->capacity_women_q22}}</td>
              <td> {{$twentytwo->capacity_total_q22}}</td>
              <td> {{$twentytwo->is_specialized_q22}}</td>
              <td> {{$twentytwo->eligible_victims_q22}}</td>
              <td> {{$twentytwo->note_q22}}</td>

            </tr>
            @endforeach
            </tbody>
          </table>
        
    </div>
  </div>
  </div>
<?php } ?>