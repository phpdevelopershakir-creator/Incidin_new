<style>
  .othersText { display: none; }
  .visibility { display: none; }
  .type3Input { display: none; }
</style>

<div class="card question18">
  <?php
    $type_vot=[ 1 => "Sex Trafficing", 2 => "Forced labour", 3 => "Other Specify" ];
    $protection_measures_taken=[ 1 => "Detained", 2 => "Referred to care", 3 => "Investigation" ];
    $preventive_measures_taken=[ 1 => "Awareness Taising", 2 => "Stricter Border Control" ];
  ?>

  <div class="card-header" role="tab" id="heading-18">
    <h6 class="card-title">
      <a data-toggle="collapse" href="#Question-19" aria-expanded="false" aria-controls="collapse-18">
     19.VENEZUELAN MIGRANTS: Venezuela’s economic, political, and humanitarian crises have forced millions of people to flee the country. Venezuelan migrants are highly vulnerable to human trafficking. Have authorities identified Venezuelan victims of sex trafficking or forced labor in the country?
      </a>
    </h6>
  </div>

  <div id="Question-19" class="collapse" role="tabpanel9" aria-labelledby="heading-18" data-parent="#accordion-2">
    <div class="card-body">



      <!-- TABLE SECTION -->
      <div id="eighteen_question_view" class="{{ isset($question_18_data->q18radioEighteen3_checked_value) && in_array($question_18_data->q18radioEighteen3_checked_value, ['0','2']) ? 'visibility':'' }}">
        <table id="addRowq18radioThree3" class="table table-bordered text-center">
          <thead>
            <tr>
              <th>Type of VOT</th>
              <th>Men</th>
              <th>Women</th>
              <th>Third Gender</th>
              <th>Total</th>
              <th>Protection Measures</th>
              <th>Preventive Measures</th>
       
            </tr>
          </thead>
          <tbody>
             @foreach($case->nineteen as $nineteen)
              <tr>
                <td>
                  @if($nineteen->type_vot == 1)
                    Sex Trafficing
                  @elseif ($nineteen->type_vot	 == 2)
                    Forced labour
                  @else

                    {{$nineteen->type_vot}}
               
                  @endif
                 
                </td>
                 <td>
                {{$nineteen->men_19}}
                </td>
                 <td>
                {{$nineteen->women_19}}
                </td>
                 <td>
                {{$nineteen->third_gender_19}}
                </td>
                 <td>
                {{$nineteen->total_19}}
                </td>

                <td>
                  @if($nineteen->protection_measures_taken == 1)
                    Detained
                  @elseif ($nineteen->protection_measures_taken	 == 2)
                    Referred to care
                  @elseif ($nineteen->protection_measures_taken	 == 3)

                    Investigation
               
                  @endif
                 
                </td>

                <td>
                  @if($nineteen->preventive_measures_taken == 1)
                    Awareness Taising
                  @elseif ($nineteen->preventive_measures_taken	 == 2)
                    Stricter Border Control
             
               
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

