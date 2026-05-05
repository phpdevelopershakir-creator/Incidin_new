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
        <thead>
          <tr>
                <th scope="col">BDT</th>
                <th scope="col">Source</th>
                <th scope="col">Assessment of Allocation</th>
                <th scope="col">Others</th>

              </tr>
        </thead>
<tbody>
        @foreach($case->fiftyeight as $fiftyeight)
          <tr>
          
            
            <td>{{$fiftyeight->q58_bdt}}</td>
            <td>{{$fiftyeight->q58_source}}</td>
            <td>{{$fiftyeight->q58_assessment_allocation}}</td>
            <td>{{$fiftyeight->others_total}}</td>

           

            

          </tr>
          @endforeach
</tbody>
       
      </table>
    </div>
  </div>
</div>
    @endif  