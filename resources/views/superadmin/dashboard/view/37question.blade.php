@if(Auth::user()->can('37.question'))
            <!-- question no 37 Start -->
            <style>
              
            </style>  
            <div class="col-md-12">
                <div class="card card-outline collapsed-card">
                  <div class="card-header">
                    <h3 class="card-title">37. Please list the number of individuals or cases prosecution for sex
                      trafficking, labour trafficking/forced labour and other forms of trafficking (e.g. organ
                      trafficking). </h3>
  
                    <div class="card-tools">
                      <button id="q37-dashboard-data-view" type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                      </button>
                    </div>
                  </div>
                <div class="card-body">
                    <h3>Prosecution</h3>
                    <a style="margin:5px;" href="{{url('q37-pdf-view')}}" target="_blank" class="btn btn-info float-right">PDF Dawnload</a>

                    <table class="table table-bordered table-white" cellpadding=0 celspecing=0 width="100%" id="q37_individual_activities">
                      
 
     
                      <!-- <thead>
                      <tr>
                        <td colspan="2"> Type of TIP Cases investigated
                        </td>
                        <td class="col-md-2">M</td>
                        <td class="col-md-2">W</td>
                        <td class="col-md-2">3rd G</td>
                        <td class="col-md-2">B</td>
                        <td class="col-md-2">G</td>
                        <td class="col-md-2">T</td>
  
                      </tr>
                      </thead> -->
                      <thead>
                        <tr>
                          <th rowspan="3" >Type of TIP Cases investigated </th>
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
                  <table class="table table-bordered table-white" cellpadding=0 celspecing=0 width="100%" id="q37_all_participants">
                      
 
     
                      <!-- <thead>
                      <tr>
                        <td colspan="2"> Type of TIP Cases investigated
                        </td>
                        <td class="col-md-2">M</td>
                        <td class="col-md-2">W</td>
                        <td class="col-md-2">3rd G</td>
                        <td class="col-md-2">B</td>
                        <td class="col-md-2">G</td>
                        <td class="col-md-2">T</td>
  
                      </tr>
                      </thead> -->
                      <thead>
                        <tr>
                          <th rowspan="3" >Type of TIP Cases investigated </th>
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
              <!-- question no 37 End -->

              @endif