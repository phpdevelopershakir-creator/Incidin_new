@if(Auth::user()->can('47.question'))

<div class="col-md-12 question47">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">47.Did these units/courts have adequate resources? Please describe any update?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      
     
    
      <div id="47_question_view" class="card-body row">
      <table id="addRowQ47" class="table table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">Name of the Unit/Court</th>
            <th scope="col">Focus/Jurisdiction</th>
            <th scope="col">Location</th>
          </tr>
        </thead>
        <tbody>
        @foreach($case->fortyseven as $fortyseven)

        <tr>
        <td>
            {{$fortyseven->q47_name_unit}}
            </td> 
            <td>
            {{$fortyseven->q47_focus_jurisdiction}}
            </td>
            <td>
            {{$fortyseven->distric->name ?? ''}}
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
