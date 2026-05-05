@if(Auth::user()->can('14.question'))
    <div class="col-md-12 question14">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">14.Did your ministry/agency make any new efforts to ensure its trade or migration
            policies did not
            facilitate trafficking?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        

       
          <div id="fourteen_question_view">
          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Action</th>
                <th scope="col">Attach/Upload/Summary</th>
                <th scope="col">Others</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->fourteen as $fourteen)
              <tr>
                <th >
                @if ($fourteen->q14_action_no	 == 1)
                Strict Monitoring of impacts of policies
                @elseif ($fourteen->q14_action_no	 == 2)
                Promotion of safe migration
                @elseif ($fourteen->q14_action_no	 == 3)
                Awareness raising of vulnerable groups
                @elseif ($fourteen->q14_action_no	 == 4)
                Expansion of safety-net for vulnerable groups
                @elseif ($fourteen->q14_action_no	 == 5)
                Promotion of skilling among vulnerable groups
                    @else
                {{$fourteen->q14_action_no}}
                @endif
                
                </th>
         
               <td>
                <div>
                  
                  @if(!empty($fourteen->q14_upload_summary))
                    <a href="{{ asset($fourteen->q14_upload_summary) }}" target="_blank">View</a>
                    @else
                    not Found
                @endif
                </div>
              </td>
              <td><div>{{$fourteen->q14_attach}}</div></td>
              
              
              </tr>
              @endforeach
            </tbody>
          </table>
          

        </div>
        </div>
      </div>
    </div>
    @endif