@if(Auth::user()->can('45.question'))
    <div class="col-md-12 question45" >
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">45.Did the government take any new to ensure that its policies, regulations, and
            agreements relating to
            migration, labor, trade, border security measures, and investment did not facilitate trafficking?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          
        
       
       
          <table id="45_question_view" class="table table-white table-bordered">
            <thead>
              <tr>
                <th scope="col">Ministry/Department</th>
                <th scope="col">Measures Taken</th>
              </tr>
            </thead>
            <tbody>
              @foreach($case->fortyfive as $fortyfive)

              <tr>
              <td>{{$fortyfive->q45_ministry_department}}</td>
              <td>{{$fortyfive->q45_measures_taken}}</td>

             
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endif