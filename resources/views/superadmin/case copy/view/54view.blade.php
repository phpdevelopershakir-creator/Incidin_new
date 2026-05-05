<style>
  .othersText { display: none; }
  .visibility { display: none; }
  .type3Input { display: none; }
</style>

<div class="card question53">


  <div class="card-header" role="tab" id="heading-18">
    <h6 class="card-title">
      <a data-toggle="collapse" href="#Question-54" aria-expanded="false" aria-controls="collapse-18">
54.Did the government take new or ongoing steps to ensure policies did not further marginalize communities already overrepresented among trafficking victims?
      </a>
    </h6>
  </div>

  <div id="Question-54" class="collapse" role="tabpane54" aria-labelledby="heading-18" data-parent="#accordion-2">
    <div class="card-body">

    

      <!-- TABLE SECTION -->

        <table id="addRowq53radioThree3" class="table table-bordered text-center">
          <thead>
            <tr>
              <th rowspan="5">Number of Case</th>
              <th colspan="2">Number of Case</th>
            </tr>
            <tr>
              <th>Men</th>
              <th>Women</th>
              <th>Third Gender</th>
              <th>Total</th>
             
            </tr>
          </thead>
          <tbody>

             @foreach($case->fiftyfour as $fiftyfour)
             <tr>
                  <td>{{$fiftyfour->category_trainee}}</td>
                   <td>{{$fiftyfour->number_training}}</td>
                    <td>{{$fiftyfour->training_contents}}</td>
                  <td>{{$fiftyfour->men_54}}</td>
                  <td>{{$fiftyfour->women_54}}</td>
                  <td>{{$fiftyfour->third_gender_54}}</td>
                  <td>{{$fiftyfour->total_54}}</td>
                  @endforeach
            </tr>
          </tbody>
        </table>
  

     

    </div>
  </div>
</div>
