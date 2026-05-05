@if(Auth::user()->can('54.question'))
 <div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">54.Did ministry/agency/organization train law enforcing agencies and judiciary?
      </h3>

      <div class="card-tools">
        <button id="q54-dashboard-data-view" type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body row">


    <a style="margin:5px;" href="{{url('q54-pdf-view')}}" target="_blank" class="btn btn-info float-right">PDF Dawnload</a>

      <table id="question54" class="table table-bordered text-center">
        <thead>
          <tr>
            <th rowspan="2" style="text-align: center; margin: bottom 45%;">Category of Trainee</th>
            <th rowspan="2">Number of Training</th>
            <th rowspan="2">Training Contents</th>
            <th colspan="8">Coverage</th>
            <tr>
            <th colspan="2">Men</th>
            <th colspan="2">Women</th>
            <th colspan="2">3rd G</th>
            <th colspan="2">Total</th>
          </tr>
          </tr>
        </thead>
        <tbody>
          
      
        </tbody>
      </table>
      <br><br>
      <table id="participants54" class="table table-bordered text-center">
        <thead>
          <tr>
            <th rowspan="2" style="text-align: center; margin: bottom 45%;">Category of Trainee</th>
            <th rowspan="2">Number of Training</th>
            <th rowspan="2">Training Contents</th>
            <th colspan="8">Coverage</th>
            <tr>
            <th colspan="2">Men</th>
            <th colspan="2">Women</th>
            <th colspan="2">3rd G</th>
            <th colspan="2">Total</th>
          </tr>
          </tr>
        </thead>
        <tbody>
          
      
        </tbody>
      </table>
    </div>
  </div>
</div> 

@endif

