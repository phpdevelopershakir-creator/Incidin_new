@if(Auth::user()->can('7.question'))
   <div class="col-md-12 question7">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">7.Did your ministry/agency update or create a new national action plan to address
            trafficking? If yes,
            please provide a copy (in English, if available) and note the timeline.</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
         
         
        
          <div id="seven_question_view">
          <table class="table table-white">
            <thead>
              <tr>
                <th>Duration of NPA</th>
                <th>Attach/Upload</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->seven as $seven)
              <tr>
                <th>   {{$seven->duration_npa}} </th>
                <td> 

                  @if(!empty($seven->attach_image))
                  <a href="{{ asset('uploads/' . $seven->attach_image) }}" target="_blank">
                     View
                    </a>

                  @else
                  Not Found
                  @endif

                <!-- <img id="logo" src="{{ asset($seven->attach_image) }}" width="50" height="50;" /> -->
                  
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