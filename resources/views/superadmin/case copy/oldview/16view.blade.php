@if(Auth::user()->can('16.question'))
    <div class="col-md-12 question16">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">16.What measures not mentioned elsewhere did the government/your
            ministry/agency/organizations
            take to reduce the demand for commercial sex acts? [NOTE: Measures should target consumers –
            not suppliers or facilitators – of commercial sex. Law enforcement efforts against brothels or
            individuals in prostitution are not considered efforts to reduce the demand for commercial sex. END
            NOTE.]</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">


          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Action</th>
                <th scope="col">Status</th>
                <th scope="col">Please upload a summary note or any other relevant document.</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->sixteen as $sixteen)
              <tr>
                <td><div>
                @if ($sixteen->q16_action_no == 1)
                Awareness raising on forced prostitution and trafficking among citizens
                @elseif ($sixteen->q16_action_no == 2)
                Awareness raising on legal measures against sexual exploitation of trafficked individuals
                @elseif ($sixteen->q16_action_no == 3)
                Legal actions against podophiles/sex-tourists (clients on underaged girls/VoTs)
                @else
      
                {{$sixteen->q16_action_no}}
                @endif
                </div></td>
           
               
                <td> <div>
                @if ($sixteen->q16_status_id	 == 1)
                Enforced
                @elseif ($sixteen->q16_status_id	 == 2)
                Updated and enforced
                @elseif ($sixteen->q16_status_id	 == 3)
                Stricter enforcement
                @elseif ($sixteen->q16_status_id	 == 4)
                Increased efforts
                @elseif ($sixteen->q16_status_id	 == 5)
                Moderate Effortt
                @elseif ($sixteen->q16_status_id	 == 6)
                Less Effort
                @elseif ($sixteen->q16_status_id	 == 7)
                Poor Enforcement
                @elseif ($sixteen->q16_status_id	 == 8)
                Under Review
                @elseif ($sixteen->q16_status_id	 == 9)
                
                
                {{$sixteen->q16_ation_others_specify}}
                @endif
          
                </div>
                </td>
                <td>
                        @if(!empty($sixteen->q16_upload_summary_relevant))
    <a href="{{ asset($sixteen->q16_upload_summary_relevant) }}" target="_blank">
      View
    </a>
    @else
    Not Found
    @endif
    
                <!--<img id="logo" src="{{ asset($sixteen->upload_relevant_document) }}" width="50" height="50;" />-->
                    </td>
              </tr>
           
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endif