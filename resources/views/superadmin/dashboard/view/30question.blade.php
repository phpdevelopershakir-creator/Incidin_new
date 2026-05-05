@if(Auth::user()->can('30.question'))
<div class="col-md-12 question9">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">30.Were foreign victims legally entitled to the same benefits as host country nationals?

      </h3>

      <div class="card-tools">
        <button id="q30-dashboard-data-view" type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
          
         
    <a style="margin:5px;" href="{{url('q30-pdf-view')}}" target="_blank" class="btn btn-info float-right">PDF Dawnload</a>

    <table class="table table-bordered" id="q30_individual_activities">
        <thead>
          <tr>
            <td rowspan="2" scope="col">Protection Services</td>
            <td rowspan="2" scope="col">Protection Services</td>
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
       <h1></h1>
       <br>
      <table class="table table-bordered" id="q30_all_participants">
        <thead>
          <tr>
          <td rowspan="2" scope="col">Protection Services</td>
            <td rowspan="2" scope="col">Protection Services</td>
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