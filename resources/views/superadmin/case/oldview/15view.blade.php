@if(Auth::user()->can('15.question'))
    <div class="col-md-12 question15">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">15.Did government/your ministry/agency make any efforts to prohibit and prevent
            trafficking in the
            supply chains of its own public procurement?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          

         
         <div id="fifteen_question_view">
          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Action/Tool</th>
                <th scope="col">Status</th>
                <th scope="col">Attach/Upload/Summary</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->fifteen as $fifteen)
              <tr>
                <td>
                @if ($fifteen->q15_action_no	 == 1)
                Procurement Policy
                @elseif ($fifteen->q15_action_no	 == 2)
                Anti-Corruption measures
                @elseif ($fifteen->q15_action_no	 == 3)
                Capacity building of government officials
                @else
                {{$fifteen->q15_action_no}}
                @endif
                </td>
               
                <td>
                @if ($fifteen->q15_status_id	 == 1)
                Enforced
                @elseif ($fifteen->q15_status_id	 == 2)
                Updated and enforced
                @elseif ($fifteen->q15_status_id	 == 3)
                Stricter enforcement
                @elseif ($fifteen->q15_status_id	 == 4)
                Increased efforts
                @endif
                 </td>
                <td>
                  @if(!empty($fifteen->q15_upload_summary))
                  <a href="{{ asset($fifteen->q15_upload_summary) }}" target="_blank">
                    View
                  </a>
                  @else
                  Not Found
                  @endif

                  
                <!-- <img id="logo" src="{{ asset($fifteen->q15_upload_summary) }}" width="50" height="50;" /> -->
             
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