@if(Auth::user()->can('36.question'))
<!-- question no 36 Start -->
<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">36.Please list the number of individuals or cases, investigation, prosecution,
        or conviction for sex trafficking, labour trafficking/forced labour and other forms of trafficking
        (e.g.
        organ trafficking). </h3>

      <div class="card-tools">
        <button id="q36-dashboard-data-view" type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <h3>Investigations</h3>
    <a style="margin:5px;" href="{{url('q36-pdf-view')}}" target="_blank" class="btn btn-info float-right">PDF Dawnload</a>

      <table class="table table-bordered table-white" cellpadding=0 celspecing=0 width="100%" id="q36_individual_activities"> 
    
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
      <table class="table table-bordered table-white" cellpadding=0 celspecing=0 width="100%" id="q36_all_participants"> 
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
<!-- question no 36 End -->
    @endif