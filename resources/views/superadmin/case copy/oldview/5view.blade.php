@if(Auth::user()->can('5.question'))
<div class="col-md-12 question5">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">5.Did your ministry/agency take steps to ensure policies did not further marginalize communities already overrepresented among trafficking victims?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
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
            @if ($five->type_policy_tool_id	 == 1)
            National Policy
                @elseif ($five->type_policy_tool_id	 == 2)
                National Strategy
                @elseif ($five->type_policy_tool_id	 == 3)
                National Plan
                @elseif ($five->type_policy_tool_id	 == 4)
                Regional Arrangement 
                @elseif ($five->type_policy_tool_id	 == 5)
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
@endif