@if(Auth::user()->can('41.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">41.Please provide details on Court Proceedings by District:</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div id="fourty_one_question_view" class="card-body row">
          <h3>Please provide details on Court Proceedings by District:</h3>
    <table cellpadding=0 celspecing=0 width="100%" id="addRowQ41" class="table table-bordered text-center">
        <thead> 
          <tr>
              
              <th>District</th>
              <!-- <th>Previous Cases</th> -->
              <th>Previous Cases</th>
              <th>Received Cases</th>
              <th>Total Cases</th>
              <th>Disposed Cases</th>
              <th>Transferred Cases</th>
              <th>Pending Cases</th>
              <th>Cases more than five year - old</th>
            </tr>
        </thead>
      <tbody>
      @foreach($case->fortyone as $fortyone)

            <tr>
              
            <td>
            {{$fortyone->distric->name ?? ''}}

            </td>

            <td>
            {{$fortyone->previous_cases}}
            </td> 
            <td>
            {{$fortyone->received_cases}}
            </td>
            <td>
            {{$fortyone->total_cases}}
            </td> 
            <td>
            {{$fortyone->disposed_cases}}
            </td>  
            <td>
            {{$fortyone->transferred_cases}}
            </td>  
            <td>
            {{$fortyone->pending_cases}}
            </td>  
            <td>
            {{$fortyone->cases_more_than_five_year_old}}
            </td>  
            </tr>
          


@endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endif

      