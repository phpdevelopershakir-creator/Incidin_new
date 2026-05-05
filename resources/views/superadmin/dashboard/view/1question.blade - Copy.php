@if(Auth::user()->can('1.question'))
@php
$sex_locations=DB::table('trafficking_location_q1')->limit(5)->get();





@endphp
<div class="col-md-12">
    <div class="card card-outline collapsed-card">
      <div class="card-header">

        <h3 class="card-title">1. New forms of Trafficking</h3>

        <div class="card-tools">
          <button id="q1-dashboard-data-view" type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
      <a style="margin:5px;" href="{{url('q1-pdf-view')}}" target="_blank" class="btn btn-info float-right">PDF Dawnload</a>

        <table class="table table-bordered" style="border: 0;">
          <thead>
            <tr>
              <th align="center">New form of Trafficking</th>
              <th align="center">Type</th>
              <th align="center">Location</th>

            </tr>
          </thead>
          <tbody>
              @foreach($sex_locations as $sex_location)
            <tr>
             
              <td>
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
              <td>
                <div>
           
                       @if($sex_location->q1_type_id == 1)
                Forced sexual exploitation
               @elseif($sex_location->q1_type_id == 2)
               Trafficking for sexual
               visuals/pornography
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
               <td>
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
            <h3 class="card-title">1.	Pie chart on percentage distribution of Yes, No  </h3>
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
                url: "/pichart1",
                datatype: "json",
                type: "get",

                success: function(data) {
                  console.log('data',data.data.totalYesPercentage)
                    var data_arr = [
                      ['Yes','No'],
                      ['Yes',parseFloat(data.data.totalYesPercentage)],
                      ['No',parseFloat(data.data.totalNoPercentage)]
                        
                      
                    ];

                    // $.each(data, function(index, value) {
                    //   if(value !==null && value !==undefined){
                    //     data_arr.push([value.totalNoPercentage,value.totalYesPercentage]);
                    // }
                    // })
                    console.log('arr',data_arr)
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

                    var chart = new google.visualization.PieChart(document.getElementById('pieChartQ1'));
                    chart.draw(figure, options);
                },
                error: function() {
                    alert('error');
                }
            });
        }
    </script>
