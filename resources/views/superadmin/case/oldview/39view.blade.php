@if(Auth::user()->can('39.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">39.Conviction of Trafficking Cases</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-white table-bordered">
            <thead>
              <tr>
                <th scope="col">Type of Cases reaching verdict </th>
                <th scope="col">Number of Cases</th>
              </tr>
            </thead>
            <tbody>
          @foreach($case->thirtynine as $thirtynine)
          <tr>

          
          <td>
          @if($thirtynine->	type_cases_reaching_verdict==1)
          Total number of cases of Internal Trafficking having conviction
          @elseif($thirtynine->	type_cases_reaching_verdict==2)
          Total number of cases of International Trafficking having conviction
          @elseif($thirtynine->	type_cases_reaching_verdict==3)
          Total number of cases of Internal Trafficking having acquittal
          @elseif($thirtynine->	type_cases_reaching_verdict==4)
          Total number of cases of International Trafficking having acquittal
          @elseif($thirtynine->	type_cases_reaching_verdict==5)
          Among the total number of person convicted- the number of foreign citizen
          @endif  
          </td>
          <td>{{$thirtynine->number_of_cases}}</td>
          </tr>
          @endforeach
              
            </tbody>
          </table>

          <table class="table table-white">
            <thead>

            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div> 
    @endif