<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
<style type="text/css">
    .page_break  { page-break-inside:avoid;  page-break-after:always;             }

    .q22-table table{
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
    .q22-table table th.row_cell, .q22-table table td.row_cell {
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
<div class="q22-table-chart">
  <!-- <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">22.Did the government train its diplomats not to engage in or facilitate
        trafficking?
      </h3> -->
        <div class="q22-table">
    
            <table class="table table-bordered" id="q22_individual_activities">
                <thead>
                <tr>
                    <th class="row_cell">Main document/Procedure</th>
                    <th class="row_cell">Description of change/Status</th>
                    <th class="row_cell">Attach/Upload</th>
                </tr>
                </thead>
                <tbody>
                @foreach($twenty_twos as $twenty_two)
          <tr>
            <th class="row_cell">
                
                  @if($twenty_two->q22_main_document_procedure == 1)
               Victim Identification Guidelines of PSD/MoHA
               @elseif($twenty_two->q22_main_document_procedure == 2)
            PSHT Act’s Rule on VoT identification
                   @elseif($twenty_two->q22_main_document_procedure == 3)
             Victim identification checklist of MoSW
                   @elseif($twenty_two->q22_main_document_procedure == 4)
              VoT identification under NRM of MoHA
           
               @else
                 {{ $twenty_two->q22_main_document_procedure ?? ''  }}
                 @endif
            </th>
            <td class="row_cell">
                
                     @if($twenty_two->q22_status_id == 1)
               Enforced
               @elseif($twenty_two->q22_status_id == 2)
               Updated and enforced
               @elseif($twenty_two->q22_status_id == 3)
               Stricter enforcement
               @elseif($twenty_two->q22_status_id == 4)
              Increased efforts
               @elseif($twenty_two->q22_status_id == 5)
               Moderate Effortt
               @elseif($twenty_two->q22_status_id == 6)
               Less Effort
               @elseif($twenty_two->q22_status_id == 7)
               Poor Enforcement
               @elseif($twenty_two->q22_status_id == 8)
                Under Review
               @elseif($twenty_two->q22_status_id == 9)
                 Other (Specify)
                  {{ $twenty_two->q22_others_specify ?? '' }}
                  @endif
                
                 

            </td>
            <td class="row_cell"> 
                <img id="logo" src="{{ asset($twenty_two->upload_file_q22) }}" width="50" height="50;" />

             </td>
          </tr>
       
        @endforeach
     

                </tbody>
            </table>
        </div>
     
      
    </div>
  <!-- </div>
</div> -->
</body>
</html>




