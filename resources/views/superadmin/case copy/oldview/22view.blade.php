@if(Auth::user()->can('22.question'))
<div class="col-md-12 question22">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">22.Is there any update on the existing formal written procedures to guide
        enforcement, immigration,
        and social services personnel in proactive victim identification?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div id ="22_question_view">
      <table class="table table-white">
        <thead>
          <tr>
            <th scope="col">Main document/Procedure</th>
            <th scope="col">Description of change/Status</th>
            <th scope="col">Attach/Upload</th>
          </tr>
        </thead>
        <tbody>
        @foreach($case->twentytwo as $twentytwo)
          <tr>
            <th>
            @if ($twentytwo->q22_main_document_procedure	 == 1)
            Victim Identification Guidelines of PSD/MoHA
                @elseif ($twentytwo->q22_main_document_procedure	 == 2)
                PSHT Act’s Rule on VoT Identification
                @elseif ($twentytwo->q22_main_document_procedure	 == 3)
                Victim identification checklist of MoSW
                @elseif ($twentytwo->q22_main_document_procedure	 == 4)
                VoT identification under NRM of MoHA
           


                @else
           
                 {{$twentytwo->q22_main_document_procedure}}
                  @endif
              
             
            </th>
       
            <td> 
            @if ($twentytwo->q22_status_id	 == 1)
            Enforced
                @elseif ($twentytwo->q22_status_id	 == 2)
                Updated and enforced
                @elseif ($twentytwo->q22_status_id	 == 3)
                Stricter enforcement
                @elseif ($twentytwo->q22_status_id	 == 4)
                Increased efforts
                @elseif ($twentytwo->q22_status_id	 == 5)
                Moderate Effortt
                @elseif ($twentytwo->q22_status_id	 == 6)
                Less Effort
                @elseif ($twentytwo->q22_status_id	 == 7)
                Poor Enforcement
                @elseif ($twentytwo->q22_status_id	 == 8)
                Under Review
                @elseif ($twentytwo->q22_status_id	 == 9)
               
                 {{$twentytwo->q22_others_specify}}
                  @endif
    </td>
            <td> 
                      @if(!empty($twentytwo->upload_file_q22))
    <a href="{{ asset($twentytwo->upload_file_q22) }}" target="_blank">
      View
    </a>
    @else
    Not Found
    @endif
    
            <!--<img id="logo" src="{{ asset($twentytwo->upload_file_q22) }}" width="50" height="50;" />-->
              
             </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      </div>
    </div>
  </div>
</div>
@endif