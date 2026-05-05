<html>
<!-- <script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script> -->
<head>
<style type="text/css">
.page_break  { page-break-inside:avoid;  page-break-after:always;             }

.q9-table table{
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
.q9-table table th.row_cell, .q9-table table td.row_cell {
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
   .image-center {
        text-align: center;
        margin-top: 20px;
    }
    .image-center img {
        width: 400px;   /* increase width */
        height: auto;   /* keeps aspect ratio */
        display: inline-block;
    }
</style> 
  
</head>  
<body>


  
  <div class="image-center">
    <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('uploads/tire.jpeg'))) }}" style="width: 250px; height: auto; border-radius: 8px;">
  </div>


<div class="q9-table-chart">
<h2>Gender based Distribution of the Participants of each type of Awareness Activities</h2>    
<div class="q9-table page_break">
        <table class="table table-bordered " id="q9_individual_activities">
            <tr>
              <th rowspan="2" class="row_cell">Category</th>
              <th colspan="16" class="row_cell">Coverage/Response</th>
            </tr>

            <tr>
              <th class="row_cell" colspan="2">M</tk>
              <th class="row_cell" colspan="2">W</th>
              <th class="row_cell" colspan="2">3rd G</th>
              <th class="row_cell" colspan="2">Total Adult</th>
              <th class="row_cell"  colspan="2">Boys</th>
              <th class="row_cell"  colspan="2">Girls</th>
              <th class="row_cell" colspan="2">Total children</th>
              <th class="row_cell" colspan="2">Total </th>         
            </tr>
        
          <tbody>
            <?php echo $table1_rows; ?> 
          </tbody>  
        </table>
      </div> 
    

    <h2>Gender based Distribution of the Participants of all Awareness Activities</h2>
    <div class="q9-table page_break">  
      <table class="table table-bordered" id="q9_all_participants">
        <thead>
          <tr>
            <th rowspan="2" class="row_cell">Category</td>
            <th colspan="16" class="row_cell">Coverage/Response</td>
          </tr>

          <tr>
            <th class="row_cell" colspan="2">M</th>
            <th class="row_cell" colspan="2">W</th>
            <th class="row_cell" colspan="2">3rd G</th>
            <th class="row_cell" colspan="2">Total Adult</th>
            <th class="row_cell"  colspan="2">Boys</th>
            <th class="row_cell" colspan="2">Girls</th>
            <th class="row_cell"  colspan="2">Total children</th>
            <th class="row_cell" colspan="2">Total </th>
          </tr>   
        </thead>
        <tbody>
          <?php echo $table2_rows; ?> 
        </tbody>  
      </table>
    </div>   
    <br/><br/> <br/><br/>
  
    <div class="pie-chart-view page_break">
    <div class="heading" style="background-color:#28a745;padding:1px">    
        <h2 style="color:#fff;"> distributiion of participants</h2>
    </div><br><br>
    
            <!-- <div style="width: 800px;"><canvas id="canvas"></canvas></div> -->
            <!-- <div id="pieChart4" style="width: 100%; height: 500px;"></div> -->
        <div id="pieChart4" style="width:100%; height:100%;">
        <!-- <div id="pieChart4"  style="min-height: 500px; height: 500px; max-height: 500px; max-width: 100%; display: block; width: 1008px;"
  width="2016"
  height="1000"> -->
  
        
       @if($data)
            {!! $data !!}
        @endif
      </div>

    </div>
    </div>
</body>

</html>