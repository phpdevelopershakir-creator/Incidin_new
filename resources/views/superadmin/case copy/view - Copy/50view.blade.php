@if(Auth::user()->can('50.question'))

    <div class="col-md-12 question50">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">50.How much funding (in the local currency) did the government spend on prosecution efforts (e.g.,
            awareness campaigns, research projects, national action plan implementation, etc.)?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">

            <div id="50_question_view">
          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Type of preventive Action</th>
                <th scope="col">Allocation (in BDT)</th>

              </tr>
            </thead>
            <tbody>
          @foreach($case->fifty as $fifty)
          <tr>
            <td>
              @if ($fifty->type_preventive_action_q50 == 1)
              Total Allocation under NPA for prosecution
              @elseif ($fifty->type_preventive_action_q50 == 2)
              Total Allocation utilized under NPA for prosecution
              @elseif ($fifty->type_preventive_action_q50 == 3)
              Total allocation spent for prosecution training
              @elseif ($fifty->type_preventive_action_q50 == 4)
              Assessment of Allocation
              
              @endif
              </td>
            
              
              
            </td>
            <td>{{$fifty->total_allocation_under_npa_prosecution_q50}}</td>
            

          </tr>
          @endforeach
              

            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
    @endif