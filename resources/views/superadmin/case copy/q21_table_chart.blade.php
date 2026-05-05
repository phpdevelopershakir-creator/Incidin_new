<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
<style type="text/css">
    .page_break  { page-break-inside:avoid;  page-break-after:always;             }

    .q21-table table{
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
    .q21-table table th.row_cell, .q21-table table td.row_cell {
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

<div class="q21-table-chart">
  <!-- <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">21.Did the government train its diplomats not to engage in or facilitate
        trafficking?
      </h3> -->
        <div class="q21-table">
    
            <table class="table table-bordered" id="q21_individual_activities">
                <thead>
                <tr>
                    <th class="row_cell">Main document/Procedure</th>
                    <th class="row_cell">Description of change/Status</th>
                    <th class="row_cell">Attach/Upload</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($twenty_ones as $twenty_one)
          <tr>
            <td class="row_cell">
                 @if($twenty_one->q21_main_document_procedure == 1)
                 PSHT Act 2012 on VoT identification
               @elseif($twenty_one->q21_main_document_procedure == 2)
               NRM guideline on VoT identification
               @else
                 {{ $twenty_one->q21_main_document_procedure ?? ''  }}
                 @endif
                 </td>
            <td class="row_cell">
                
                     @if($twenty_one->q21_status_id == 1)
                Enforced
               @elseif($twenty_one->q21_status_id == 2)
               Updated and enforced
               @elseif($twenty_one->q21_status_id == 3)
               Stricter enforcement
               @elseif($twenty_one->q21_status_id == 4)
              Increased efforts
               @elseif($twenty_one->q21_status_id == 5)
               Moderate Effortt
               @elseif($twenty_one->q21_status_id == 6)
               Less Effort
               @elseif($twenty_one->q21_status_id == 7)
               Poor Enforcement
               @elseif($twenty_one->q21_status_id == 8)
                Under Review
               @elseif($twenty_one->q21_status_id == 9)
                 Other (Specify)
                  {{ $twenty_one->q21_others_specify ?? '' }}
                  @endif
                
              
             </td>
            <td class="row_cell">
                <img id="logo" src="{{ asset($twenty_one->upload_file_21) }}" width="50" height="50;" />

                
               
                </td>
          </tr>
           @endforeach

                </tbody>
            </table>
        </div>
     
      
      </div>
    </div>
  <!-- </div>
</div> -->
</body>
</html>




