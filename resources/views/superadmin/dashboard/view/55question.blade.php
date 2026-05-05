@if(Auth::user()->can('55.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">55.Did ministry/agency/organization/CTC carried out partnership promotion actions?
        </h3>

          <div class="card-tools">
            <button id="q55-dashboard-data-view" type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">

          <a style="margin:5px;" href="{{url('q55-pdf-view')}}" target="_blank" class="btn btn-info float-right">PDF Dawnload</a>
       
        <table class="table table-bordered table-white" id="q55_individual_activities">
        <thead>
          <tr>
            <td rowspan="2" scope="col">Category</td>
            <td colspan="17">Coverage/Response</td>
          </tr>

          <tr>
            <td scope="col" colspan="2">M</td>
            <td scope="col" colspan="2">W</td>
            <td scope="col" colspan="2">3rd G</td>
            <td scope="col" colspan="2">Total Adult</td>
            <td scope="col"  colspan="2">Boys</td>
            <td scope="col"  colspan="2">Girls</td>
            <td scope="col"  colspan="2">Total children</td>
            <td scope="col" colspan="2">Total </td>         
          </tr>
        </thead>
        <tbody></tbody>
      </table>

      <b></b>
     
    
       </div>

        <div class="card-body">
                  <h6>
                  Gender based Distribution of the Participants of all Awareness Activities
                  </h6>
          <table class="table table-bordered table-white" id="q55_all_participants">
            <thead>
              <tr>
                <td rowspan="2" scope="col">Category</td>
                <td colspan="17">Coverage/Response</td>
              </tr>
    
              <tr>
                <td scope="col" colspan="2">M</td>
                <td scope="col" colspan="2">W</td>
                <td scope="col" colspan="2">3rd G</td>
                <td scope="col" colspan="2">Total Adult</td>
                <td scope="col"  colspan="2">Boys</td>
                <td scope="col"  colspan="2">Girls</td>
                <td scope="col"  colspan="2">Total children</td>
                <td scope="col" colspan="2">Total </td>
              </tr>   
            </thead>
            <tbody></tbody>
          </table>
         
        </div>
      </div>
    </div>
    @endif