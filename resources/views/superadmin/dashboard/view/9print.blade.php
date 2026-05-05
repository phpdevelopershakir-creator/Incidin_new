@if(Auth::user()->can('9.question'))
<div class="col-md-12 question9">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">9.Did tde ministry/agency/organization fund and/or conduct awareness activities?
      </h3>

      
 
      <div class="card-tools">
        <button id="q9-dashboard-data-view" type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
   
    <div class="card-body">
<form action="/q9-pdf-view" method="post">
  @csrf 
  <input type="hidden" name="chartData" id="chartInputData">
  <!-- <input type="submit" value="Print Chart"> -->
  <input type="submit" style="margin:5px;" href="{{url('q9-pdf-view')}}" target="_blank" class="btn btn-info float-right" value="PDF Dawnload">  <br>
</form>


<form action="/q9-csv-download" method="post">
  @csrf 
  <input type="hidden" name="chartData" id="chartInputDataCsv">
  <input type="submit" style="margin:5px;" class="btn btn-success float-right" value="CSV Download">  
</form>



         
          <h6>Gender based Distribution of the Participants of each type of Awareness Activities</h6>

      <table class="table table-bordered table-white" id="q9_individual_activities">
        <thead>
          <tr>
            <td rowspan="2" scope="col">Category</td>
            <td colspan="17">Coverage/Response</td>
            
          </tr>

          <tr>
            <td scope="col" colspan="2">M</td>
            <td scope="col" colspan="2">W</td>
            <td scope="col" colspan="2">3rd G</td>
            <td scope="col" colspan="2">Total Adult</td>
            <td scope="col"  colspan="2">Boys</td>
            <td scope="col"  colspan="2">Girls</td>
            <td scope="col"  colspan="2">Total children</td>
            <td scope="col" colspan="2">Total </td>    
            <th >Location</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>

      <b></b>
     
    
    </div>

    <div class="card-body">
    <h6>
    Gender based Distribution of the Participants of all Awareness Activities
</h6>
          <table class="table table-bordered table-white" id="q9_all_participants">
            <thead>
              <tr>
                <td rowspan="2" scope="col">Category</td>
                <td colspan="17">Coverage/Response</td>
              </tr>
    
              <tr>
                <td scope="col" colspan="2">M</td>
                <td scope="col" colspan="2">W</td>
                <td scope="col" colspan="2">3rd G</td>
                <td scope="col" colspan="2">Total Adult</td>
                <td scope="col"  colspan="2">Boys</td>
                <td scope="col"  colspan="2">Girls</td>
                <td scope="col"  colspan="2">Total children</td>
                <td scope="col" colspan="2">Total </td>
                <th >Location</th>
              </tr>   
            </thead>
            <tbody></tbody>
          </table>
    
          <br><br>
          <section class="content">
       
       <div class="container-fluid">
       <div class="card card-success">
       <div class="card-header">
       <h3 class="card-title">% distributiion of participants   </h3>
       <div class="card-tools">
       <button type="button" class="btn btn-tool" data-card-widget="collapse">
       <i class="fas fa-minus"></i>
       </button>
       <button type="button" class="btn btn-tool" data-card-widget="remove">
       <i class="fas fa-times"></i>
       </button>
       </div>
       </div>
       <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
       <div align="center">

         <div id="draw-charts" style="display:none;width:100%;height: 600px;"></div>
       </div>
         <!-- <canvas id="pieChart4" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 504px;" width="1008" height="500" class="chartjs-render-monitor"></canvas> -->

         <canvas id="pieChart4"
  style="min-height: 500px; height: 500px; max-height: 500px; max-width: 100%; display: block; width: 1008px;"
  width="2016"
  height="1000"
  class="chartjs-render-monitor">
</canvas>
       </div>
       </div>
       </div>
      
      </section>
         
        
        </div>

  </div>
</div>


@endif
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      
      $(function(){
        google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      
      function drawChart() {
       
        var data = google.visualization.arrayToDataTable([
          
          ['Task', 'Hours per Day'],
          
          ['Countryard meeting',     11],
          ['Bazar/hatt meeting',      24],
          ['CTC meeting',  12],
          ['Consultation', 45],
          ['Poster',    9],
          ['Leaflet',    7],
          ['Booklet',    14],
          ['SMS',    19],
          ['Newsletter',    28],
          ['Billboard',    38],
          ['Folk show',    52],
          ['Film show',    42],
          ['Miking',    24],
          ['Web campaign',    27],

        ]);

        var options = {
          title: 'My Daily Activities'
        };
        var chart_div = document.getElementById('draw-charts');
        var chart = new google.visualization.PieChart(chart_div);
        google.visualization.events.addListener(chart,"ready",function(){
          chart_div.innerHTML = '<img src="'+chart.getImageURI()+'">';
        }); 
        chart.draw(data);
      }
      $("#draw-charts").append("<div id='draw-charts'></div>");
        setTimeout(() => {
          let chartsData = $('#draw-charts').html();
          $("#chartInputData").val(chartsData)
        }, 1000);
      })
    </script> 