<div class="card">
  <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0">
        <a data-toggle="collapse" href="#Question-16" aria-expanded="false"
          aria-controls="collapse-4">
          16.Did the victim identification protocol or formal written procedures outline steps to screen members of underserved communities or those at increased risk of trafficking? Such groups could include but are not limited to adults arrested for alleged commercial sex crimes, irregular migrants, asylum seekers, stateless persons, persons with disabilities, unhoused persons, children in welfare systems or aging out of such systems (if applicable, those previously incarcerated, members of marginalized racial and ethnic communities, or individuals or communities living in conflict, crisis, or post-disaster settings). (Tips: Please consider cases related to adults arrested for alleged commercial sex crimes, irregular migrants, asylum seekers, stateless persons, persons with disabilities, unhoused persons, children in welfare systems or aging out of such systems (if applicable, those previously incarcerated, members of marginalized racial and ethnic communities, or individuals or communities living in conflict, crisis, or post-disaster settings)
        </a>
      </h6>
    </div>

    <div id="Question-16" class="collapse" role="tabpane16" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
      <div id="six_question_view">
        <table class="table table-bordered text-center">
          <thead>
            <tr>
                <th scope="col">Title of The New Low	</th>
                <th scope="col">Contents of Change/Status	</th>
                <th scope="col">Attach/Upload Pdf</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->sixteen as $sixteen)
              <tr>
                <th>
                  @if($sixteen->main_document == 1)
                   Screening carried out by Police as per PSHTA
                  @elseif ($sixteen->main_document	 == 2)
                   Screening via checklist of MoSW
                  @else

                  {{$sixteen->main_document}}
                  @endif
                </th>
                <td>
                  @if($sixteen->description_change == 1)
                    Enforced
                  @elseif ($sixteen->description_change	 == 2)
                   Updated and enforced
                     @elseif ($sixteen->description_change	 == 3)
                  Stricter enforcement
                  @elseif ($sixteen->description_change	 == 4)
                  Increases efforts
                    @endif
            
                </td>
                <td>
                    @if(!empty($sixteen->document_image_q16))
                    <a href="{{ asset($sixteen->document_image_q16) }}" target="_blank">View</a>
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