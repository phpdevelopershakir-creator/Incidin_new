<div class="card">
  <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0">
        <a data-toggle="collapse" href="#Question-23" aria-expanded="false"
          aria-controls="collapse-4">
          23.Did the mechanism refer potential or identified victims directly to social service providers or did it require victims to interact with law enforcement first? Were victims required to speak to law enforcement before they were referred to care? Did referral to care take place when victims refused to speak to law enforcement?
        </a>
      </h6>
    </div>

    <div id="Question-23" class="collapse" role="tabpane23" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
      <div id="six_question_view">
        <table class="table table-bordered text-center">
          
            @foreach($case->twentythree as $twentythree)
              <tr>
                <th>
                  
                As per the approved NRM structure, the VoTs can directly reach social service providers. However, for identification they need to interact with law enforcing actors (Police).
   
                </th>
                
                <td>
                    @if(!empty($twentythree->document_upload_q23))
                    <a href="{{ asset($twentythree->document_upload_q23) }}" target="_blank">View</a>
                    @else
                    not Found
                @endif
                 
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        
        </div>
        </div>
      </div>
    </div>