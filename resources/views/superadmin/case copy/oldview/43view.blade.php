@if(Auth::user()->can('43.question'))
    <!-- qestion no 42 end -->
    <div class="col-md-12 question43">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">43.Were there any new bilateral, multilateral, or regional enforcement coordination
            arrangements/ treaties/MoU/MLA with foreign counterparts?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
  
        <div class="card-body">

          <div id="43_question_view" class="card-body row">
          <table id="addRowQ43" class="table table-bordered text-center">
            <thead>
              <tr>
                <th scope="col">Country</th>
                <th scope="col">Nature of Arrangement</th>
                <th scope="col">Focus</th>
                <th scope="col">Status</th>
                <th scope="col">Please upload a summary note or any other relevant document</th>
              </tr>
            </thead>
            <tbody>
        @foreach($case->fortythree as $fortythree)

              <tr>
                <td>
                  {{$fortythree->country->name ?? ''}}
                 
                </td>
                <td>
                  @if($fortythree->	q43_nature_arrangement_id==1)
                  MoU
                  @elseif($fortythree->	q43_nature_arrangement_id==2)
                  Treaties
                  @elseif($fortythree->	q43_nature_arrangement_id==3)
                  MAL
                  @elseif($fortythree->	q43_nature_arrangement_id==4)
                  UN Convention
                  @elseif($fortythree->	q43_nature_arrangement_id==5)
                  Regional Cooperation Initiatiev
                  @elseif($fortythree->	q43_nature_arrangement_id==6)
                  Bilateral Cooperation Initiative
                  @endif  
                 
                </td>
                <td>
                @if($fortythree->	q43_focus_id==1)
                Prevent
                @elseif($fortythree->	q43_focus_id==2)
                Prosecution
                @elseif($fortythree->	q43_focus_id==3)
                Repatriation
                @elseif($fortythree->	q43_focus_id==4)
                Extradition
                @elseif($fortythree->	q43_focus_id==5)
                Investigation
                @elseif($fortythree->	q43_focus_id==6)
                Support to VoT
                @elseif($fortythree->	q43_focus_id==7)
                Monitoring
                @elseif($fortythree->	q43_focus_id==8)
                Legal Aid
                @elseif($fortythree->	q43_focus_id==9)
                Labour Market Cooperation
                @endif  
               
                </td>
                <td>
                @if($fortythree->	q43_status_id==1)
                Planned
                @elseif($fortythree->	q43_status_id==2)
                Agreed
                @elseif($fortythree->	q43_status_id==3)
                Signed
                @elseif($fortythree->	q43_status_id==4)
                In Placed
                @elseif($fortythree->	q43_status_id==5)
                Under study
                @elseif($fortythree->	q43_status_id==6)
                On process
                @endif
                  
                </td>
                <td>

                   @if(!empty($fortythree->upload_document))
    <a href="{{ asset($fortythree->upload_document) }}" target="_blank">
      View
    </a>
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
    </div>
    @endif