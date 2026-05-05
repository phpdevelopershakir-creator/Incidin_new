@if(Auth::user()->can('57.question'))
<br> <br>
<h4 style="padding-Left:10px; font-weight:bold">MONITORING AND EVALUATION</h4>

 <div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">57.Did the ministry/agency/organization undertake or support any new projects to research or assess
        trafficking issues within the country or its nationals abroad, and/or publicize its efforts to combat
        trafficking?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-white table-bordered">
        <thead>
          <tr>
           
            <th scope="col">Research title</th>
            <th scope="col">Area of Research</th>
            <th scope="col">Status</th>
            <th scope="col">Research Location</th>
          </tr>
        </thead>
        <tbody>
        @foreach($case->fiftyseven as $fiftyseven)

        <tr>
          <td>{{$fiftyseven->research_title}}</td>
        <td>
        @if ($fiftyseven->q57_area_research == 1)
        Area of Research
        @elseif ($fiftyseven->q57_area_research == 2)
        Prevention
        @elseif ($fiftyseven->q57_area_research == 3)
        Protection
        @elseif ($fiftyseven->q57_area_research == 4)
        Prosecution
        @elseif ($fiftyseven->q57_area_research == 5)
        Participation
        @elseif ($fiftyseven->q57_area_research == 6)
        Midterm Evaluation of NPA
        @elseif ($fiftyseven->q57_area_research == 7)
        End evaluation of NPA
        @elseif ($fiftyseven->q57_area_research == 8)
        Best practice 
        @elseif ($fiftyseven->q57_area_research == 9)
        Baseline
        @elseif ($fiftyseven->q57_area_research == 10)
        Annual Countrhy TIP Report
        @elseif ($fiftyseven->q57_area_research == 11)
        MRM
        @endif
          </td>
          <td>
        @if ($fiftyseven->q57_status_id == 1)
        Completed
        @elseif ($fiftyseven->q57_status_id == 2)
        Draft
        @elseif ($fiftyseven->q57_status_id == 3)
        On-Going
        @elseif ($fiftyseven->q57_status_id == 4)
        Approved Plan
        @elseif ($fiftyseven->q57_status_id == 5)
        Proposed
        @endif
          </td>
          <td>{{$fiftyseven->q57_research_location_id}}</td>
        </tr>
        @endforeach
          
        </tbody>
      </table>
    </div>
  </div>
</div>
@endif