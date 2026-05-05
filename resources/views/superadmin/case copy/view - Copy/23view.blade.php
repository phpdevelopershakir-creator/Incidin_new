@if(Auth::user()->can('23.question'))
    <!-- question 23  start -->
    <div class="col-md-12 question23">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">23. Is there any update on the existing approach of screening conducted by law enforcement, immigration, and social services personnel for indicators of trafficking, including of migrants, other vulnerable groups, and when detaining or arresting individuals in commercial sex?  </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div id="23_question_view">
          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Main document/Procedure</th>
                <th scope="col">Description of change/Status</th>
                <th scope="col">Attach/Upload</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->twentythree as $twentythree)
              <tr>
                <td>
                @if ($twentythree->q23_main_document_procedure	 == 1)
                Screening via checklist of MoSW     
                @elseif ($twentythree->q23_main_document_procedure	 == 2)
                Victim Identification Guidelines of PSD/MoHA
                @elseif ($twentythree->q23_main_document_procedure	 == 3)
                Screening carried out by Police as per PSHTA

           


                @else
           
                 {{$twentythree->q23_main_document_procedure}}
                  @endif
              
                 
                </td>
              
                <td>
                @if ($twentythree->q23_status_id	 == 1)
            Enforced
                @elseif ($twentythree->q23_status_id	 == 2)
                Updated and enforced
                @elseif ($twentythree->q23_status_id	 == 3)
                Stricter enforcement
                @elseif ($twentythree->q23_status_id	 == 4)
                Increased efforts
                @elseif ($twentythree->q23_status_id	 == 5)
                Moderate Effortt
                @elseif ($twentythree->q23_status_id	 == 6)
                Less Effort
                @elseif ($twentythree->q23_status_id	 == 7)
                Poor Enforcement
                @elseif ($twentythree->q23_status_id	 == 8)
                Under Review

       @elseif ($twentythree->q23_status_id	 == 9)
       
                 {{$twentythree->q23_others_specify}}
                  @endif
              </td>
                <td> 
                            @if(!empty($twentythree->upload_file_q23))
    <a href="{{ asset($twentythree->upload_file_q23) }}" target="_blank">
      View
    </a>
    @else
    Not Found
    @endif
    
                <!--<img id="logo" src="{{ asset($twentythree->upload_file_q23) }}" width="50" height="50;" />-->
                 
                 </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
    <!-- question 23 end -->
@endif