@if(Auth::user()->can('11.question'))
    <div class="col-md-12 question11">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">11.Were there any changes to how your ministry/agency
             regulated and oversaw labor recruitment for licensed and unlicensed recruitment agencies,
              individual recruiters, and sub-brokers</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        
          <div id="eleven_question_view">
          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Original Document/Approach</th>
                <th scope="col">Description of Change</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->eleven as $eleven)
              <tr>
                <td >
                @if  ($eleven->original_approach	 == 1)
                OEMA 2013
                @elseif ($eleven->original_approach	 == 2)
                Employee-paid-model
                @elseif ($eleven->original_approach	 == 3)
                Fair recruitment cost notification
                @elseif ($eleven->original_approach	 == 4)
                Ranking of Recruiting Agents
                @elseif ($eleven->original_approach	 == 5)
                Licensing of Recruiting Agents
                @elseif ($eleven->original_approach	 == 6)
                Registration of Informal Recruiting Agents
                @elseif ($eleven->original_approach	 == 7)
                Zero Migration Cost Approach
                @else
                  {{$eleven->original_approach}}
                @endif
                 
                </td>
              
                <td> 
                @if  ($eleven->description_change	 == 1)
                Firmly Implemented/enforced
                @elseif ($eleven->description_change	 == 2)
                Reformed
                @elseif ($eleven->description_change	 == 3)
                Planned
                @elseif ($eleven->description_change	 == 4)
                Drafted
                @elseif ($eleven->description_change	 == 5)
                Updated
                @elseif ($eleven->description_change	 == 6)
                Partially enforced
                @elseif ($eleven->description_change	 == 7)
                Expanded use
                @elseif ($eleven->description_change	 == 8)
                Prohibited by law
                @elseif ($eleven->description_change	 == 9)
                Prohibit
                 @elseif ($eleven->description_change	 == 10)
                 Strictly monitored
                 @else
                 {{$eleven->description_change}}

     
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
    @endif