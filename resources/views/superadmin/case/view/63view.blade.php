
    <div class="card question61">
     <div class="card-header" role="tab" id="heading-4">
            <h6 class="card-title" style="color: {{ isset($question_61_data) ? 'blue' : 'black' }};">
            <a data-toggle="collapse" href="#Question-63" aria-expanded="false"
                aria-controls="collapse-4">
             63.What resources (funding or in-kind) did the government devote to implement new/updated or existing national action plans?
            </a>
            </h6>
        </div>

        <div id="Question-63" class="collapse" role="tabpane63" aria-labelledby="heading-4"
            data-parent="#accordion-2">
            <div class="card-body">
          
          <table class="table table-white table-bordered">
            <thead>
              <tr>
                <th scope="col">Original Document/Approach</th>
                <th scope="col">Description of Change</th>
              </tr>
            </thead>
            <tbody>
            
             @foreach($case->sixty_three as $sixty_three)
                <tr>
                <td >
                @if  ($sixty_three->original_approach_q63   == 1)
                OEMA 2013
                @elseif ($sixty_three->original_approach_q63  == 2)
                Employee-paid-model
                @elseif ($sixty_three->original_approach_q63  == 3)
                Fair recruitment cost notification
                @elseif ($sixty_three->original_approach_q63  == 4)
                Ranking of Recruiting Agents
                @elseif ($sixty_three->original_approach_q63  == 5)
                Licensing of Recruiting Agents
                @elseif ($sixty_three->original_approach_q63  == 6)
                Registration of Informal Recruiting Agents
                @elseif ($sixty_three->original_approach_q63  == 7)
                Zero Migration Cost Approach
                @else
                {{$sixty_three->original_approach_q63}}
                @endif

                </td>

                <td> 
                @if  ($sixty_three->description_change_q63  == 1)
                Firmly Implemented/enforced
                @elseif ($sixty_three->description_change_q63   == 2)
                Reformed
                @elseif ($sixty_three->description_change_q63   == 3)
                Planned
                @elseif ($sixty_three->description_change_q63   == 4)
                Drafted
                @elseif ($sixty_three->description_change_q63   == 5)
                Updated
                @elseif ($sixty_three->description_change_q63   == 6)
                Partially enforced
                @elseif ($sixty_three->description_change_q63   == 7)
                Expanded use
                @elseif ($sixty_three->description_change_q63   == 8)
                Prohibited by law
                @elseif ($sixty_three->description_change_q63   == 9)
                Prohibit
                @elseif ($sixty_three->description_change_q63  == 10)
                Strictly monitored
                @else
                {{$sixty_three->description_change_q63}}


                @endif
                </td>
                </tr>
                @endforeach
              
            </tbody>
          </table>

      
         
        </div>
      </div>
    
 