@if(Auth::user()->can('40.question'))
   <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">40. Conviction Status</h3>

          <div class="card-tools">
            <button id="q40-dashboard-data-view" type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <h3>Conviction Status</h3>
          <a style="margin:5px;" href="{{url('q40-pdf-view')}}" target="_blank" class="btn btn-info float-right">PDF Dawnload</a>

          <table class="table table-bordered table-white" cellpadding=0 celspecing=0 width="100%" id="q40_individual_activities">
            <!-- <thead>
            <tr>
              <td colspan="2"> Conviction Status
              </td>
              <td>M</td>
              <td>W</td>
              <td>3rd G</td>
              <td>B</td>
              <td>G</td>
              <td>Total</td>
            </tr>
            </thead> -->
            <thead>
              <tr>
                <th rowspan="3" >Conviction Status </th>
                <th rowspan="3" style="text-align: left" scope="col">Category of coverage</th>
                <th colspan="16"></th>
              </tr>
                <tr>
                <th colspan="2"></th>
                <th colspan="2"></th>
                <th colspan="2">Men</th>
                <th colspan="2">Women</th>
                <th colspan="2">3rd G</th>
                <th colspan="2">Boys</th>
                <th colspan="2">Girls</th>
                <th colspan="2">Total</th>

              </tr>
            </thead>  
          
            <tbody></tbody>
          </table>
          <br><br>
          <table class="table table-bordered table-white" cellpadding=0 celspecing=0 width="100%" id="q40_all_participants">
            <!-- <thead>
            <tr>
              <td colspan="2"> Conviction Status
              </td>
              <td>M</td>
              <td>W</td>
              <td>3rd G</td>
              <td>B</td>
              <td>G</td>
              <td>Total</td>
            </tr>
            </thead> -->
            <thead>
              <tr>
                <th rowspan="3" >Conviction Status </th>
                <th rowspan="3" style="text-align: left" scope="col">Category of coverage</th>
                <th colspan="16"></th>
              </tr>
              <tr>
                <th colspan="2"></th>
                <th colspan="2"></th>
                <th colspan="2">Men</th>
                <th colspan="2">Women</th>
                <th colspan="2">3rd G</th>
                <th colspan="2">Boys</th>
                <th colspan="2">Girls</th>
                <th colspan="2">Total</th>

              </tr>
            </thead>  
        
            <tbody></tbody>
          </table>
        </div>
      </div>
  </div> 
@endif