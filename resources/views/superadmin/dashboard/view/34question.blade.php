@if(Auth::user()->can('34.question'))
<div class="col-md-12 question32">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">34.Did your ministry/agency/organization take any steps to avoid re-traumatization of victims in investigation and prosecution? Please describe.
    </h3>

      <div class="card-tools">
        <button id="q34-dashboard-data-view" type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
    
      
    <a style="margin:5px;" href="{{url('q34-pdf-view')}}" target="_blank" class="btn btn-info float-right">PDF Dawnload</a>

    <table class="table table-bordered table-white" id="q34_individual_activities">
   
        <thead>
          <tr>
            <th rowspan="2" >Type of Support </th>
            <th rowspan="2" scope="col">Types of Assistance</th>
            <th colspan="18" style="text-align: left">Coverage of VoT Received Assistance to avoid Re-traumatization</th>
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

      <table class="table table-bordered table-white" id="q34_all_participants">
   
   <thead>
     <tr>
     <th rowspan="2" >Type of Support </th>
            <th rowspan="2" scope="col">Types of Assistance</th>
            <th colspan="18" style="text-align: left">Coverage of VoT Received Assistance to avoid Re-traumatization</th>
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