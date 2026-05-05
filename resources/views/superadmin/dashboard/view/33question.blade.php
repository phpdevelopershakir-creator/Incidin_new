@if(Auth::user()->can('33.question'))
<div class="col-md-12 question32">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">33.Were participating victims provided any forms of witness protection? If “Yes’, how many?
      </h3>

      <div class="card-tools">
        <button id="q33-dashboard-data-view" type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
    
      
    <a style="margin:5px;" href="{{url('q33-pdf-view')}}" target="_blank" class="btn btn-info float-right">PDF Dawnload</a>

    <table class="table table-bordered" id="q33_individual_activities">
        <br />
        <br />
        <thead>
          <tr>
            <th rowspan="2" >Types of Trafficking</th>
            <th colspan="16" style="text-align: left">VoT participating in investigation/prosecution</th>
          </tr>
          <tr>
            <th  colspan="2">Men</th>
            <th  colspan="2">Women</th>
            <th  colspan="2">3rd G</th>
            <th  colspan="2">Total Adult</th>
            <th  colspan="2">Boys</th>
            <th  colspan="2">Girls</th>
            <th  colspan="2">Total Childen</th>
            <th  colspan="2">Total </th>

          </tr>
        </thead>
        <tbody>
   
         
          
       
        </tbody>
      </table>
      <br><br>

      <table class="table table-bordered" id="q33_all_participants">
        <br />
        <br />
        <thead>
          <tr>
            <th rowspan="2" >Types of Trafficking</th>
            <th colspan="16" style="text-align: left">VoT participating in investigation/prosecution</th>
          </tr>
          <tr>
            <th  colspan="2">Men</th>
            <th  colspan="2">Women</th>
            <th  colspan="2">3rd G</th>
            <th  colspan="2">Total Adult</th>
            <th  colspan="2">Boys</th>
            <th  colspan="2">Girls</th>
            <th  colspan="2">Total Childen</th>
            <th  colspan="2">Total </th>

          </tr>
        </thead>
        <tbody>
    
      
        
         
       
        </tbody>
      </table>
      
   

    </div>
  </div>
</div>
@endif