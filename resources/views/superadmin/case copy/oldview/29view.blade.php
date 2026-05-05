@if(Auth::user()->can('29.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">29.How much funding (in the local currency) did the ministry/agency/organization
            spend on protection
            efforts?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Type of protection Action</th>
                <th scope="col">Allocation (in BDT)</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->twentynine as $twentynine)
              <tr>
                <th>
                @if ($twentynine->type_protection_action	 == 1)
                Total Allocation under NPA for protection
                @elseif ($twentynine->type_protection_action	 == 2)
                Total allocation spent for different protection services
                @elseif ($twentynine->type_protection_action	 == 3)
                Assessment of Allocation
                @endif
                
                </th>
            
                <td>
                @if ($twentynine->total_allocation_under_npa_protection	 == 1)
                Excess
                @elseif ($twentynine->total_allocation_under_npa_protection	 == 2)
                Adequate
                @elseif ($twentynine->total_allocation_under_npa_protection	 == 3)
                Inadequate
                @elseif ($twentynine->total_allocation_under_npa_protection	 == 4)
                None
                @else
                 {{$twentynine->total_allocation_under_npa_protection}}
                  @endif
              
                  

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endif