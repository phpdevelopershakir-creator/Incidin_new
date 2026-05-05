<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
<style type="text/css">
    .page_break  { page-break-inside:avoid;  page-break-after:always;             }

    .q1-table table{
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #000;
    }

    .blank-cell{

    min-width: 15px;


    }

    .row_cell{

    padding: 8px;


    }

    th { font-size: 13px }
    td { font-size: 13px }
    .q1-table table th.row_cell, .q1-table table td.row_cell {
        border: 1px solid #000;
    }
    .heading {
        background:'#28a745';
    }
    .pie-chart {
                width: 600px;
                height: 400px;
                margin: 0 auto;
            }
    .text-center{
        text-align: center;
    }
</style> 
</head>
<body>

<div class="q1-table-chart">
  <!-- <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">1.Did the government train its diplomats not to engage in or facilitate
        trafficking?
      </h3> -->
        <div class="q1-table">
    
            <table class="table table-bordered" id="q1_individual_activities">
                <thead>
                <tr>
                    <th align="center" class="row_cell">New form of Trafficking</th>
                    <th align="center" class="row_cell">Type</th>
                    <th align="center" class="row_cell">Location</th>

                </tr>
                </thead>
                <tbody>
                
                @foreach($sex_locations as $sex_location)
            <tr>
             
              <td class="row_cell">
                <div>
                       @if($sex_location->trafficking_form_no == 1)
                New form # 1
               @elseif($sex_location->trafficking_form_no == 2)
            New form # 2
               @elseif($sex_location->trafficking_form_no == 3)
               New form # 3
               @elseif($sex_location->trafficking_form_no == 4)
             New form # 4
               @elseif($sex_location->trafficking_form_no == 5)
               New form # 5
             
                  @endif
             
                </div>
               
              </td>
              <td class="row_cell">
                <div>
           
                       @if($sex_location->q1_type_id == 1)
                Forced sexual exploitation
               @elseif($sex_location->q1_type_id == 2)
               Trafficking for sexual visuals/pornography
               @elseif($sex_location->q1_type_id == 3)
             Web Enabled Trafficking
               @elseif($sex_location->q1_type_id == 4)
             Trafficking in Migrants
               @elseif($sex_location->q1_type_id == 5)
              Organ Trafficking
               @elseif($sex_location->q1_type_id == 6)
             Trafficking in Refugee
               @elseif($sex_location->q1_type_id == 7)     
            @endif
                </div>


                @if ($sex_location->q1_type_id == 7 && !empty($sex_location->q1_trafficking_other_specify))
                  <div>
                      {{ $sex_location->q1_trafficking_other_specify }}
                  </div>
                @endif

               
              </td>
               <td class="row_cell">
                <div>
           
                       @if($sex_location->q1_location_id == 1)
                Barisal
               @elseif($sex_location->q1_location_id == 2)
               Chattogram
               @elseif($sex_location->q1_location_id == 3)
               Dhaka
               @elseif($sex_location->q1_location_id == 4)
              Khulna
               @elseif($sex_location->q1_location_id == 5)
               Mymensingh
               @elseif($sex_location->q1_location_id == 6)
               Rajshahi
               @elseif($sex_location->q1_location_id == 7)
               Rangpur
                @elseif($sex_location->q1_location_id == 8)
              Sylhet
                @elseif($sex_location->q1_location_id == 9)
               National
               
          
                 
                  @endif
                </div>
              </td>
            </tr>
           @endforeach
                </tbody>
            </table>

            <br>
            <div class="col-lg-6 col-6">
        <section class="content">
            <div class="container-fluid">
            <div class="card card-info">
            <div class="card-header">
            <h3 class="card-title">1.   Pie chart on percentage distribution of Yes, No  </h3>
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
            <div id="pieChartQ1">
            </div>
            </div>

            </div>
            </div>
        </section>
        </div>

        </div>
      </div>
    </div>


  


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
google.charts.load('current', { packages: ['corechart'] });
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  $.ajax({
    url: "/pichart1",
    dataType: "json",
    type: "GET",
    success: function (data) {
      console.log('full data', data);

      // Adjust according to actual JSON structure
      var yes = parseFloat(data.data.totalYesPercentage);
      var no = parseFloat(data.data.totalNoPercentage);

      var data_arr = [
        ['Answer', 'Percentage'],
        ['Yes', yes],
        ['No', no]
      ];

      var figure = google.visualization.arrayToDataTable(data_arr);

      var options = {
        width: 470,
        height: 350,
        colors: ['#4472C4', '#EE7D31'],
        legend: { position: 'bottom' },
        pieSliceText: 'value'
      };

      var chart = new google.visualization.PieChart(document.getElementById('pieChartQ1'));
      chart.draw(figure, options);
    },
    error: function (xhr, status, error) {
      console.error('AJAX Error:', error);
      alert('Error loading chart data');
    }
  });
}
</script>

</body>
</html>






