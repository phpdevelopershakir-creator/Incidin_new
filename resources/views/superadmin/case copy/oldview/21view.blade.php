@if(Auth::user()->can('21.question'))
<div class="col-md-12 question21">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">21.Were there any new (or changes to preexisting) formal/standard procedures for
        victim identification
        at your ministry/agency/organization?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
   
  

    
      <div id ="21_question_view">
      <table class="table table-white">
        <thead>
          <tr>
            <th scope="col">Main document/Procedure</th>
            <th scope="col">Description of change/Status</th>
            <th scope="col">Attach/Upload</th>
          </tr>
        </thead>
        <tbody>
        @foreach($case->twentyone as $twentyone)
          <tr>
            <td>
            @if ($twentyone->q21_main_document_procedure	 == 1)
            PSHT Act 2012 on VoT identification
                @elseif ($twentyone->q21_main_document_procedure	 == 2)
                NRM guideline on VoT identification
                @else
           
                 {{$twentyone->q21_main_document_procedure}}
                  @endif
              
            </td>
            
            <td>   
            @if ($twentyone->q21_status_id	 == 1)
            Enforced
                @elseif ($twentyone->q21_status_id	 == 2)
                Updated and enforced
                @elseif ($twentyone->q21_status_id	 == 3)
                Updated and enforced
                @elseif ($twentyone->q21_status_id	 == 4)
                Increased efforts
                @elseif ($twentyone->q21_status_id	 == 5)
                Moderate Effortt
                @elseif ($twentyone->q21_status_id	 == 6)
                Less Effort
                @elseif ($twentyone->q21_status_id	 == 7)
                Poor Enforcement
                @elseif ($twentyone->q21_status_id	 == 8)
                Under Review

       @elseif ($twentyone->q21_status_id	 == 9)
       {{$twentyone->q21_others_specify}}
      
                 
                  @endif
        

                  
                 </td>
            <td>
                    @if(!empty($twentyone->upload_file_21))
    <a href="{{ asset($twentyone->upload_file_21) }}" target="_blank">
      View
    </a>
    @else
    Not Found
    @endif
    
    
            <!--<img id="logo" src="{{ asset($twentyone->upload_file_21) }}" width="50" height="50;" />-->
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