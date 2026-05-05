@if(Auth::user()->can('18.question'))
<div class="col-md-12 question18">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">18.Did the government train its diplomats not to engage in or facilitate
        trafficking?</h3>

      <div class="card-tools">
        <button type="button" id="q18-dashboard-data-view" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      
    

     <a style="margin:5px;" href="{{url('q18-pdf-view')}}" target="_blank" class="btn btn-info float-right">PDF Dawnload</a>
    <!-- <input type="submit" style="margin:5px;" href="{{url('q18-pdf-view')}}" target="_blank" class="btn btn-info float-right" value="PDF Dawnload">   -->

     <table class="table table-bordered table-white" id="q18_individual_activities">
        <br />
        <br />
        <thead>
          <tr>
            <th rowspan="2" >Category of Trainee</th>
            <th colspan="9" style="text-align: left">Coverage of Training</th>
          </tr>
          <tr>
            <th  colspan="2">Men</th>
            <th  colspan="2">Women</th>
            <th  colspan="2">3rd G</th>
            <th  colspan="2">Total Adult</th>

          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
     
      <br><br>
      <table class="table table-bordered table-white" id="q18_all_participants">
        <br />
        <br />
        <thead>
          <tr>
            <th rowspan="2" >Category of Trainee</th>
            <th colspan="9" style="text-align: left">Coverage of Training</th>
          </tr>
          <tr>
            <th  colspan="2">Men</th>
            <th  colspan="2">Women</th>
            <th  colspan="2">3rd G</th>
            <th  colspan="2">Total Adult</th>

          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    
    </div>
  </div>
</div>

<script>
  
</script>
@endif

