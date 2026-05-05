@if(Auth::user()->can('17.question'))
    <div class="col-md-12 question17">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">17.Did the government make any efforts to reduce its nationals’ or foreigners’
            participation in
            international and domestic child sex tourism?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
     
    
    

     
         
         <div id="seventeen_question_view">
          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Action</th>
                <th scope="col">Status</th>
                <th scope="col">Please upload a summary note or any other relevant document.</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->seventeen as $seventeen)
              <tr>
                <td><div>
                @if ($seventeen->action_no_q17 == 1)
                Awareness raising on forced prostitution and trafficking among citizens
                @elseif ($seventeen->action_no_q17 == 2)
                Awareness raising on legal measures against sexual exploitation of trafficked individuals
                @elseif ($seventeen->action_no_q17 == 3)
                Legal actions against foreign podophiles/sex- tourists (clients on underaged girls/VoTs)
                @endif
                </div></td>
           
               
                <td> <div>
                @if ($seventeen->status_id_q17 == 1)
                Enforced
                @elseif ($seventeen->status_id_q17 == 2)
                Updated and enforced
                @elseif ($seventeen->status_id_q17 == 3)
                Stricter enforcement
                @elseif ($seventeen->status_id_q17 == 4)
                Increased efforts
                @elseif ($seventeen->status_id_q17 == 5)
                Moderate Effortt
                @elseif ($seventeen->status_id_q17 == 6)
                Less Effort
                @elseif ($seventeen->status_id_q17 == 7)
                Poor Enforcement
                @elseif ($seventeen->status_id_q17 == 8)
                Under Review
                @elseif ($seventeen->status_id_q17 == 9)
              
                {{$seventeen->q17_awareness_raising_other_specify}}
                @endif
          
                </div>
                </td>
                <td>
                    @if(!empty($seventeen->upload_relevant_document))
    <a href="{{ asset($seventeen->upload_relevant_document) }}" target="_blank">
      View
    </a>
    @else
    Not Found
@endif

                <!--<img id="logo" src="{{ asset($seventeen->upload_relevant_document) }}" width="50" height="50;" />-->
                    </td>
              </tr>
           
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endif