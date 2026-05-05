@if(Auth::user()->can('25.question'))
<div class="col-md-12 question9">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">25.Were there any new (or changes to preexisting) procedures or services available for victim care at your ministry/agency/organization?
      </h3>

      <div class="card-tools">
        <button id="q25-dashboard-data-view" type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
          
         
         
    <a style="margin:5px;" href="{{url('q25-pdf-view')}}" target="_blank" class="btn btn-info float-right">PDF Dawnload</a>

      <table class="table table-bordered table-white" id="q25_individual_activities">
        <thead>
          <tr>
          <td rowspan="2" scope="col">Protection Services</td>
            <td rowspan="2" scope="col">Status</td>
            <td colspan="19">Current Coverage of VoTs</td>
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
  
    <table class="table table-bordered table-white" id="q25_all_participants">
        <thead>
          <tr>
            <td rowspan="2" scope="col">Protection Services</td>
            <td rowspan="2" scope="col">Status</td>
            <td colspan="19">Current Coverage of VoTs</td>
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