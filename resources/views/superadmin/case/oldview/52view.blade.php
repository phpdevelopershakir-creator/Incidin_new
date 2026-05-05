@if(Auth::user()->can('52.question'))
    <div class="col-md-12 question52">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">52.How much did ministry/agency/organization allocate in victim compensation fund (National Fund)?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">

          <div id ="52_question_view">
          <table class="table table-bordered text-center">
            <thead></thead>
            <tbody>
            @foreach($case->fiftytwo as $fiftytwo)
          <tr>
            <td>
              @if ($fiftytwo->q52_type == 1)
              BDT
              @elseif ($fiftytwo->q52_type == 2)
              MoHA
              @elseif ($fiftytwo->q52_type == 3)
              MoLJPA
              
              @endif
              </td>
            
            <td>{{$fiftytwo->q52_bdt}}</td>
           

            

          </tr>
          @endforeach
            </tbody>
            
          </table>
        </div>
        </div>
      </div>
    </div>
    <!-- question no 52 end -->
@endif