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
      <a data-toggle="collapse" href="#Question-18" aria-expanded="false" aria-controls="collapse-18">
      18.UKRAINIAN REFUGEES: Since Russia’s further invasion of Ukraine in 2022, have authorities identified any refugees from Ukraine as victims of forced labor or sex trafficking in the country? If so, specify when they were identified and referred to care. Are there ongoing investigations into trafficking of Ukrainian refugees? Please describe government efforts to prevent trafficking among this at-risk population.
      </a>
    </h6>
  </div>

  <div id="Question-18" class="collapse" role="tabpanel" aria-labelledby="heading-18" data-parent="#accordion-2">
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
             @foreach($case->eighteen as $eighteen)
              <tr>
                <td>
                  @if($eighteen->type_vot == 1)
                    Sex Trafficing
                  @elseif ($eighteen->type_vot	 == 2)
                    Forced labour
                  @else

                    {{$eighteen->type_vot}}
               
                  @endif
                 
                </td>
                 <td>
                {{$eighteen->men_18}}
                </td>
                 <td>
                {{$eighteen->women_18}}
                </td>
                 <td>
                {{$eighteen->third_gender_18}}
                </td>
                 <td>
                {{$eighteen->total_18}}
                </td>

                <td>
                  @if($eighteen->protection_measures_taken == 1)
                    Detained
                  @elseif ($eighteen->protection_measures_taken	 == 2)
                    Referred to care
                  @elseif ($eighteen->protection_measures_taken	 == 3)

                    Investigation
               
                  @endif
                 
                </td>

                <td>
                  @if($eighteen->preventive_measures_taken == 1)
                    Awareness Taising
                  @elseif ($eighteen->preventive_measures_taken	 == 2)
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

