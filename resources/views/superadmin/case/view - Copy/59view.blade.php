@if(Auth::user()->can('59.question'))
     
<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">59.Please provide general recommendations for addressing human trafficking.</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-bordered text-center">
        <thead></thead>
    <tbody>
    @foreach($case->fiftyfine as $fiftyfine)
           <tr>
            <th >1</th>
            <th >2</th>
            <th >3</th>
            <th >4</th>
            <th >5</th>

          </tr>

          <tr>
          
            <td>{{$fiftyfine->q59_one}}</td>
            <td>{{$fiftyfine->q59_two}}</td>
            <td>{{$fiftyfine->q59_three}}</td>
            <td>{{$fiftyfine->q59_four}}</td>
            <td>{{$fiftyfine->q59_five}}</td>
            </tr>
            @endforeach
</tbody>
       
      </table>
    </div>
  </div>
</div>
    @endif  