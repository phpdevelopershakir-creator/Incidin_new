@if(Auth::user()->can('58.question'))
     
<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">58.How much did the ministry/agency/organization spent on research/evaluation?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-bordered text-center">
        <thead class="">
          <tr>
            <th align="left">BDT</th>
            <th><input type="text" name="fifty_two_one13" class="form-control"></th>
          </tr>
          <tr>
            <th align="left">Source</th>
            <th><input type="text" name="fifty_moha" class="form-control" placeholder="Govt. Budget"></th>
          </tr>
          <tr>
            <th align="left">Assessment of Allocation</th>
            <th><input type="text" name="assessment_allocation" class="form-control" placeholder="Govt. Budget"></th>
          </tr>
          <tr>
            <th align="left">Others</th>
            <th><input type="text" name="others" class="form-control" placeholder="Govt. Budget"></th>
          </tr>
          
        </thead>
      </table>
    </div>
  </div>
</div>
    @endif  