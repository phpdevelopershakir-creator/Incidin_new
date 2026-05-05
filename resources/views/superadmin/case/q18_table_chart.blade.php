<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
<style type="text/css">
    .page_break  { page-break-inside:avoid;  page-break-after:always;             }

    .q18-table table{
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
    .q18-table table th.row_cell, .q18-table table td.row_cell {
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
<div class="q18-table-chart">
  <!-- <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">18.Did the government train its diplomats not to engage in or facilitate
        trafficking?
      </h3> -->
        <div class="q18-table">
    
            <table class="table table-bordered" id="q18_individual_activities">
                <thead>
                    <tr>
                        <th rowspan="2" class="row_cell">Category of Trainee</th>
                        <th colspan="8" class="row_cell">Coverage of Training</th>
                    </tr>
                    <tr>
                        <th class="row_cell" colspan="2">Men</th>
                        <th class="row_cell" colspan="2">Women</th>
                        <th class="row_cell" colspan="2">3rd G</th>
                        <th class="row_cell" colspan="2">Total Adult</th>
                    </tr>
                </thead>
                <tbody>
                <?php echo $table1_rows; ?> 

                </tbody>
            </table>
        </div>
      <br><br>
      <div class="q18-table">
            <table class="table table-bordered" id="q18_all_participants">
                <thead>
                    <tr>
                        <th rowspan="2" class="row_cell">Category of Trainee</th>
                        <th colspan="8" class="row_cell">Coverage of Training</th>
                    </tr>
                    <tr>
                        <th class="row_cell" colspan="2">Men</th>
                        <th class="row_cell" colspan="2">Women</th>
                        <th class="row_cell" colspan="2">3rd G</th>
                        <th class="row_cell" colspan="2">Total Adult</th>

                    </tr>
                </thead>
                <tbody>
                    <?php echo $table2_rows; ?> 

                </tbody>
            </table>
      </div>
    </div>
  <!-- </div>
</div> -->
</body>
</html>




