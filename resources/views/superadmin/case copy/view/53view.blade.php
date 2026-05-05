<style>
  .othersText { display: none; }
  .visibility { display: none; }
  .type3Input { display: none; }
</style>

<div class="card question53">
 
   <?php
  $number_cases = [
  1 =>'Health support', 
  2 =>'Compensation', 
  3 =>'Training', 
  4 =>'Psycho-social care',   
  5 =>'Shelter',   
  6 =>'Victim protection',
  7=>'Others (Specify)'
 ];
 ?>
  

  <div class="card-header" role="tab" id="heading-18">
    <h6 class="card-title">
      <a data-toggle="collapse" href="#Question-53" aria-expanded="false" aria-controls="collapse-18">
        53.Did the government seek civil society and/or survivors’ input in crafting or implementing any new anti-trafficking laws, regulations, policies, programs?
      </a>
    </h6>
  </div>

  <div id="Question-53" class="collapse" role="tabpane53" aria-labelledby="heading-18" data-parent="#accordion-2">
    <div class="card-body">

    

      <!-- TABLE SECTION -->

        <table id="addRowq53radioThree3" class="table table-bordered text-center">
          <thead>
            <tr>
              <th rowspan="7">Number of Case</th>
              <th colspan="2">Number of Case</th>
            </tr>
            <tr>
              <th>Men</th>
              <th>Women</th>
              <th>Third Gender</th>
              <th>Boy</th>
              <th>Girl</th>
              <th>Total</th>
             
            </tr>
          </thead>
          <tbody>

             @foreach($case->fiftythree as $fiftythree)
             <tr>
                 <td>
                @if($fiftythree->number_case_title == 1)
                    Health support
                  @elseif ($fiftythree->number_case_title	 == 2)
                    Compensation
                  @elseif ($fiftythree->number_case_title	 == 3)
                    Training
                  @elseif ($fiftythree->number_case_title	 == 4)
                    Psycho-social care
                  @elseif ($fiftythree->number_case_title	 == 5)
                   Shelter
                  @elseif ($fiftythree->number_case_title	 == 6)
                     Victim protection
                                @elseif ($fiftythree->number_case_title	 == 7)
                     {{$fiftythree->number_case_other}}

              
                  @endif
                  </td>
                  <td>{{$fiftythree->men_53}}</td>
                  <td>{{$fiftythree->women_53}}</td>
                  <td>{{$fiftythree->third_gender_53}}</td>
                  <td>{{$fiftythree->boy_53}}</td>
                  <td>{{$fiftythree->girl_53}}</td>
                  <td>{{$fiftythree->total_53}}</td>

                  @endforeach
            </tr>
          </tbody>
        </table>
  

     

    </div>
  </div>
</div>
