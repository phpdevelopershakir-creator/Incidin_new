@if(Auth::user()->can('53.question'))
<style>
  .otherSpecify{
    display:none;
  }
</style>
    <div class="col-md-12 question53">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">53.How many VoTs received assistance? How much in total (in BDT).</h3>

          <div class="card-tools">
            <button id="q53-dashboard-data-view" type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">


  
    
       <div id ="53_question_view">
      <a style="margin:5px;" href="{{url('q53-pdf-view')}}" target="_blank" class="btn btn-info float-right">PDF Dawnload</a>

          <table id="question53" class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th rowspan="2" style="text-align: center; margin: bottom 45%;">Number of Case</th>
                <th colspan="16">Individual Coverage</th>

              </tr>
              <tr>
                <th colspan="2"></th>
                <th colspan="2"></th>
                <th colspan="2">Men</th>
                <th colspan="2">Women</th>
                <th colspan="2">3rd G</th>
                <th colspan="2">Boy</th>
                <th colspan="2">Girl</th>
                <th colspan="2">Total</th>
              </tr>

            </thead>
            <tbody></tbody>
          </table>

          <table id="participants53" class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th rowspan="2" style="text-align: center; margin: bottom 45%;">Number of Case</th>
                <th colspan="16">Individual Coverage</th>

              </tr>
              <tr>
                <th colspan="2"></th>
                <th colspan="2"></th>
                <th colspan="2">Men</th>
                <th colspan="2">Women</th>
                <th colspan="2">3rd G</th>
                <th colspan="2">Boy</th>
                <th colspan="2">Girl</th>
                <th colspan="2">Total</th>
              </tr>

            </thead>
            <tbody></tbody>
          </table>
      </div>
        </div>
      </div>
    </div>
    @endif
   