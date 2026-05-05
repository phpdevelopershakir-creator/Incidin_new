@if(Auth::user()->can('49.question'))

    <!-- question no 48 end -->
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">49.Did the government/your ministry/department/organization train judiciary and
            court officials on anti-trafficking enforcement, policies, and laws? </h3>

          <div class="card-tools">
            <button id="q49-dashboard-data-view" type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div id="q49_question_view" class="card-body row">


        <a style="margin:5px;" href="{{url('q49-pdf-view')}}" target="_blank" class="btn btn-info float-right">PDF Dawnload</a>

          <table id="q49_individual_activities" class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th rowspan="2" style="text-align: center; margin: bottom 45%;">Category of Trainee </th>
                <th rowspan="2">Training Contents </th>
                <!-- <th rowspan="2">Number of Training</th> -->
                <th rowspan="2">Location</th>
                <th rowspan="2">Development Partner</th>
                <th colspan="6">Coverage</th>
                <th></th>
              </tr>
              <tr>
                <th colspan="2">Men</th>
                <th colspan="2">Women</th>
                <th colspan="2">3rd G</th>
                <th colspan="2">Total</th>
              </tr>
              <thead>
            <tbody>
            
           






          </tbody>
          </table>

          <br><br>
          <table id="q49_all_participants" class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th rowspan="2" style="text-align: center; margin: bottom 45%;">Category of Trainee </th>
                <th rowspan="2">Training Contents </th>
                <!-- <th rowspan="2">Number of Training</th> -->
                <th rowspan="2">Location</th>
                <th rowspan="2">Development Partner</th>
                <th colspan="6">Coverage</th>
                <th></th>
              </tr>
              <tr>
                <th colspan="2">Men</th>
                <th colspan="2">Women</th>
                <th colspan="2">3rd G</th>
                <th colspan="2">Total</th>
              </tr>
              <thead>
            <tbody>
            
           






          </tbody>
          </table>
        </div>
      </div>
    </div>
    @endif

 