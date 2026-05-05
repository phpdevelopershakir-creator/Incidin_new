@if(Auth::user()->can('22.question'))
@php
$twenty_twos=DB::table('proactive_victim_identification_q22')->limit(7)->get();


@endphp

<div class="col-md-12 question22">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">22.Is there any update on the existing formal written procedures to guide
        enforcement, immigration,
        and social services personnel in proactive victim identification?</h3>

      <div class="card-tools">
        <button id="q22-dashboard-data-view" type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
   
   

     
    <a style="margin:5px;" href="{{url('q22-pdf-view')}}" target="_blank" class="btn btn-info float-right">PDF Dawnload</a>
      
      <table class="table table-white">
        <thead>
          <tr>
            <th scope="col">Main document/Procedure</th>
            <th scope="col">Description of change/Status</th>
            <th scope="col">Attach/Upload</th>
          </tr>
        </thead>
        <tbody>
            @foreach($twenty_twos as $twenty_two)
          <tr>
            <th>
                
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
            <td>
                <div>
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
                 
                  {{ $twenty_two->q22_others_specify ?? '' }}
                  @endif
                </div>
                 

            </td>
            <td> 
                 @if(!empty($twenty_two->upload_file_q22))
    <a href="{{ asset($twenty_two->upload_file_q22) }}" target="_blank">
      View
    </a>
    @else
    Not Found
    @endif
    
                <!-- <img id="logo" src="{{ asset($twenty_two->upload_file_q22) }}" width="50" height="50;" /> -->

             </td>
          </tr>
       
        @endforeach
     
       

     
   
        </tbody>
      </table>

    </div>
  </div>
</div>
@endif