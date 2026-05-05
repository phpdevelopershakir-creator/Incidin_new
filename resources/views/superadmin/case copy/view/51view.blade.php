@if(Auth::user()->can('51.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">51.Did courts order restitution?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">



          <table class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th>Categories of VoTs</th>
                <th>Number of Cases</th>
                <th>Total amount Compensation in BDT</th>

              </tr>
            </thead>
            <tbody>
            @foreach($case->fiftyone as $fiftyone)
          <tr>
            <td>
              @if ($fiftyone->q51_type == 1)
              Man
              @elseif ($fiftyone->q51_type == 2)
              Women
              @elseif ($fiftyone->q51_type == 3)
              3RD G
              @elseif ($fiftyone->q51_type == 4)
              Boy
              @elseif ($fiftyone->q51_type == 5)
              Girl
              @elseif ($fiftyone->q51_type == 6)
              Total
              @endif
              </td>
            
            <td>{{$fiftyone->q51_number_case}}</td>
            <td>{{$fiftyone->q51_total_case}}</td>

            

          </tr>
          @endforeach
            </tbody>
              


          </table>
        </div>
      </div>
    </div>
    @endif