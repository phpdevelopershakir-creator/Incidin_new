@if(Auth::user()->can('24.question'))
  <div class="col-md-12 question24">
    <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">24.Actors having changes in formal/standard procedures for victim referral to protection
      services</h3>

      <div class="card-tools">
      <button type="button" id="q24-dashboard-data-view" class="btn btn-tool" data-card-widget="collapse"><i
        class="fas fa-plus"></i>
      </button>
      </div>
    </div>

    <div class="card-body">
      <h5>Number of VoT Referred by Different Actors
      </h5>
      <a style="margin:5px;" href="{{url('q24-pdf-view')}}" target="_blank" class="btn btn-info float-right">PDF
      Dawnload</a>

      <table class="table table-bordered table-white" id="q24_individual_activities">
      <thead>
        <tr>
        <td rowspan="2" scope="col">Category</td>
        <td rowspan="2" scope="col">Description of change/Status</td>
        <td colspan="19">Coverage/Response</td>
        </tr>

        <tr>
        <td scope="col" colspan="2">M</td>
        <td scope="col" colspan="2">W</td>
        <td scope="col" colspan="2">3rd G</td>
        <td scope="col" colspan="2">Total Adult</td>
        <td scope="col" colspan="2">Boys</td>
        <td scope="col" colspan="2">Girls</td>
        <td scope="col" colspan="2">Total children</td>
        <td scope="col" colspan="2">Total </td>


        </tr>









      </thead>
      <tbody></tbody>
      </table>
      <br>

      <h5>Percentage Distribution of VoTs by Gender on Total VoT Referred by all Actors
      </h5>
      <table class="table table-bordered table-white" id="q24_all_participants">
      <thead>
        <tr>
        <td rowspan="2" scope="col">Category</td>
        <td rowspan="2" scope="col">Description of change/Status</td>
        <td colspan="19">Coverage/Response</td>
        </tr>

        <tr>
        <td scope="col" colspan="2">M</td>
        <td scope="col" colspan="2">W</td>
        <td scope="col" colspan="2">3rd G</td>
        <td scope="col" colspan="2">Total Adult</td>
        <td scope="col" colspan="2">Boys</td>
        <td scope="col" colspan="2">Girls</td>
        <td scope="col" colspan="2">Total children</td>
        <td scope="col" colspan="2">Total </td>



        </tr>






      </thead>
      <tbody></tbody>
      </table>

      <br><br>

      <div class="container text-center">
      <div class="row">
        <div class="col-sm-6">
        <section class="content">

          <div class="container-fluid">
          <div class="card card-info">
            <div class="card-header">
            <h3 class="card-title"> % of reffered adult VoTs </h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
              </button>
            </div>
            </div>
            <div class="card-body">
            <div class="chartjs-size-monitor">
              <div class="chartjs-size-monitor-expand">
              <div class=""></div>
              </div>
              <div class="chartjs-size-monitor-shrink">
              <div class=""></div>
              </div>
            </div>
            <canvas id="pieChart"
              style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 504px;"
              width="1008" height="500" class="chartjs-render-monitor"></canvas>
            </div>

          </div>
          </div>

        </section>
        </div>
        <div class="col-sm-6">
        <section class="content">

          <div class="container-fluid">
          <div class="card card-info">
            <div class="card-header">
            <h3 class="card-title">% of reffered child VoTs </h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
              </button>
            </div>
            </div>
            <div class="card-body">
            <div class="chartjs-size-monitor">
              <div class="chartjs-size-monitor-expand">
              <div class=""></div>
              </div>
              <div class="chartjs-size-monitor-shrink">
              <div class=""></div>
              </div>
            </div>
            <div id="pieChartQ24B"></div>
            </div>

          </div>
          </div>

        </section>
        </div>
      </div>
      </div>
    </div>





    </div>
  </div>


@endif

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  google.charts.load('current', {
    'packages': ['corechart']
  });
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    $.ajax({
      url: "/pichartadult",
      datatype: "json",
      type: "get",

      success: function (data) {
        console.log('datas', data.data.q24_category_data)
        var data_arr = [
          ['Men', 'Women'],
          // ['Yes',parseFloat(data.data.totalYesPercentage)],
          // ['No',parseFloat(data.data.totalNoPercentage)]


        ];

        $.each(data.data.q24_category_data, function (index, value) {
          // alert(value)
          if (value !== null && value !== undefined) {
            data_arr.push([
              // value.q24_description_change_status,value.men_perchantege,
              // value.q24_description_change_status,value.women_perchantege,
              // value.q24_description_change_status,value.percentage_third_gender,
              // value.q24_description_change_status,value.boys_perchantege,
              // value.q24_description_change_status,value.girls_perchantege,
              // value.q24_description_change_status,value.children_perchnatage,
              value.q24_description_change_status, value.percentage_of_total_population

            ]);
          }
        })
        console.log('arr', data_arr)
        var options = {
          width: 470,
          height: 350,
          colors: ['#4472C4', '#EE7D31'],
          legend: 'none',
          chartType: 'PieChart',
          dataLabels: {
            format: '{label}: {value}'
          }
        };

        var figure = google.visualization.arrayToDataTable(data_arr);

        var chart = new google.visualization.PieChart(document.getElementById('pieChartQ24B'));
        chart.draw(figure, options);
      },
      error: function () {
        alert('error');
      }
    });
  }
</script>