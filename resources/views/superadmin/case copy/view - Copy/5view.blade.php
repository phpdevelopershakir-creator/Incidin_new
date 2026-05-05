 <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-5" aria-expanded="false"
                              aria-controls="collapse-4">
                             5.Did the government investigate, prosecute, convict, or sentence any allegedly complicit officials?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-5" class="collapse" role="tabpanel5" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">
<div id="five_question_view">
      <table class="table table-white">
        <thead>
          <tr>
            <th scope="col">Type of Policy tool</th>
            <th scope="col">Title of the initiative</th>
            <th scope="col">Objectives</th>

          </tr>
        </thead>
        <tbody>
        @foreach($case->five as $five)
          <tr>
            <td>
            @if ($five->type_policy_tool_id  == 1)
            National Policy
                @elseif ($five->type_policy_tool_id  == 2)
                National Strategy
                @elseif ($five->type_policy_tool_id  == 3)
                National Plan
                @elseif ($five->type_policy_tool_id  == 4)
                Regional Arrangement 
                @elseif ($five->type_policy_tool_id  == 5)
                Economic Policy
                @else
                 {{$five->type_policy_tool_id}}

                  @endif
             

            </td>

            <td>{{$five->title_the_initiative_id}}</td>
            <td>{{$five->objectives_id}}</td>
          </tr>
         
          @endforeach
        
        </tbody>
      </table>
    </div>
                          </div>
                        </div>
                      </div>