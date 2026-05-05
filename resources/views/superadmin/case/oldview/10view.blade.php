@if(Auth::user()->can('10.question'))
<div class="col-md-12 question10">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">10.Did your ministry/agency carry out any efforts to raise awareness or train
        foreign governments on trafficking?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
     
     
     
      <div id="ten_question_view" class="card-body row">
      <table id="addRowQ10" class="table table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">Country</th>
            <th scope="col">Target group of Training
              (multiple response)</th>
            <th scope="col">Total coverage</th>
           


          </tr>
        </thead>
        <tbody>
        @foreach($case->ten as $ten)
          <tr>
            <td >
            {{$ten->country->name	 ?? ''}}
            </td>
            <td>
            @if  ($ten->trafficking_target_group	 == 1)
            Government Official
                @elseif ($ten->trafficking_target_group	 == 2)
                Immigration Authority
                @elseif ($ten->trafficking_target_group	 == 3)
                Law Enforcing Personnel
                @elseif ($ten->trafficking_target_group	 == 4)
                Border Control Force
                @elseif ($ten->trafficking_target_group	 == 5)
                Judiciary
                @elseif ($ten->trafficking_target_group	 == 6)
                Diplomats
                @endif

            
            </td>
            <td> 
            {{$ten->trafficking_total_coverage}}
              
             </td>
            

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    </div>
  </div>
</div>
@endif

