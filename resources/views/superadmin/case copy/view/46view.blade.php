@if(Auth::user()->can('46.question'))


<div class="col-md-12 question46">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">46.Is there any change to government unit(s) and/or courts responsible for
        investigating, prosecuting,
        and/or hearing trafficking cases. Please describe-</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
  
    <div class="card-body">

     <div id="46_question_view" class="card-body row">
      <table id="addRowQ46" class="table table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">Name of the Unit/Court</th>
            <th scope="col">Focus/Jurisdiction</th>
            <th scope="col">Location</th>
          </tr>
        </thead>
        <tbody>
        @foreach($case->fortysix as $fortysix)

          <tr>
          <td>
              {{$fortysix->q46_unit_court}}
              </td> 
              <td>
              {{$fortysix->q46_focus_jurisdiction}}
              </td>
              <td>
              {{$fortysix->distric->name ?? ''}}
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



