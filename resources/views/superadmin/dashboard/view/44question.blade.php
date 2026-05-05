@if(Auth::user()->can('44.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">44.Did any allegedly complicit officials face criminal investigations,
            prosecutions, convictions, or sentencing?</h3>

          <div class="card-tools">
            <button id="q44-dashboard-data-view" type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <a style="margin:5px;" href="{{url('q44-pdf-view')}}" target="_blank" class="btn btn-info float-right">PDF Dawnload</a>

          <table class="table table-bordered table-white" id="question44">
            <thead >
        
              <tr>
                 <th rowspan="2">Ministry/Department</th>
                 <th colspan="8">Number of Official Accused</th>
               </tr> 
               <tr> 
                 <th  colspan="2">Men</th> 
                 <th  colspan="2">Women</th>  
                 <th  colspan="2">3 rd G</th> 
                 <th  colspan="2">Total Adult</th>
               </tr>

            

            </thead>
            <tbody></tbody>
          </table>
          <br><br>
          <table class="table table-bordered table-white" id="participants44">
            <thead>
              <tr>
                 <th rowspan="2">Ministry/Department</th>
                 <th colspan="8">Number of Official Accused</th>
               </tr> 
               <tr> 
                 <th  colspan="2">Men</th> 
                 <th  colspan="2">Women</th>  
                 <th  colspan="2">3 rd G</th> 
                 <th  colspan="2">Total Adult</th>
               </tr>

            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
    </div>
    @endif