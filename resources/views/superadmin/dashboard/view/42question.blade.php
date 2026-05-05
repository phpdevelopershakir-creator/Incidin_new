@if(Auth::user()->can('42.question'))
<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">42.Conviction of Internal Trafficking by Division</h3>

      <div class="card-tools">
        <button id="q42-dashboard-data-view" type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <h2>Conviction of Internal Trafficking by Division</h2>
      <h3>Total number of persons convicted of trafficking for Sexual exploitation</h3>
      <a style="margin:5px;" href="{{url('q42-pdf-view')}}" target="_blank" class="btn btn-info float-right">PDF Dawnload</a>
      
      <input type="hidden" name="q42_type[]" value="1">
      <table id="q42_individual_activities" class="table table-bordered text-center">
        <thead>
          <tr>
            <th rowspan="2"> Type</th>
            <th rowspan="2">Division</th>
          </tr>
          <tr>
            <th colspan="2">Male</th>
            <th colspan="2">Female</th>
            <th colspan="2">3rd G</th>
            <th colspan="2">Total</th>
          </tr>
        </thead>
        <tbody>
      
        
        </tbody>
      </table>
      <br><br>
      <table id="q42_all_participants" class="table table-bordered text-center">
        <thead>
          <tr>
            <th rowspan="2"> Type</th>
            <th rowspan="2">Division</th>
          </tr>
          <tr>
            <th colspan="2">Male</th>
            <th colspan="2">Female</th>
            <th colspan="2">3rd G</th>
            <th colspan="2">Total</th>
          </tr>
        </thead>
        <tbody>
      
        
        </tbody>
      </table>
  </div>
      
  
    </div>
  </div>
</div>

@endif
