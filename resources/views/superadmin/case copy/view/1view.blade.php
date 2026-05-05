<div class="card">
  <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0">
        <a data-toggle="collapse" href="#Question-1" aria-expanded="false"
          aria-controls="collapse-4">
           1.Were there any changes to preexisting anti-trafficking legislation during the reporting period (amendments to laws or penal codes, new laws, presidential decrees, supreme court precedents, etc.)? (Tips: Please check if there were any revisions, amendments to laws or penal codes, new laws, presidential decrees, Special Tribunals/Supreme court precedents)
        </a>
      </h6>
    </div>

    <div id="Question-1" class="collapse" role="tabpanel1" aria-labelledby="heading-4"
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
            @foreach($case->one as $one)
              <tr>
                <th>
                  @if($one->supreme_court_title == 1)
                    PSHT 2012
                  @elseif ($one->supreme_court_title	 == 2)
                    Rule of PSHTA (2017)
                  @elseif ($one->supreme_court_title	 == 3)
                    OEMA 2013
                  @elseif ($one->supreme_court_title	 == 4)
                   Children Act
                  @elseif ($one->supreme_court_title	 == 5)
                   Labour Act
                  @elseif ($one->supreme_court_title	 == 6)
                    MLA in Criminal Matter 2012
                  @elseif ($one->supreme_court_title	 == 7)
                  Human Organ Transfer Rule 1999
                  @else
                  {{$one->supreme_court_title}}
                  @endif
                </th>
                <td>
                  @if($one->supreme_court_status == 1)
                    Revised
                  @elseif ($one->supreme_court_status	 == 2)
                    Abolished
                    @endif
            
                </td>
                <td>
                    @if(!empty($one->supreme_court_image))
                    <a href="{{ asset($one->supreme_court_image) }}" target="_blank">View</a>
                    @else
                    not Found
                @endif
                 
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
           <h4>New Low</h4>
           <table class="table table-bordered text-center">
          <thead>
            <tr>
                <th scope="col">Title of The New Low	</th>
                <th scope="col">Contents of Change/Status	</th>
                <th scope="col">Attach/Upload Pdf</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->oneb as $oneb)
              <tr>
                <th>
                {{$oneb->supreme_court_title_two}}
                </th>
                <td>
                  @if($oneb->supreme_court_status_two == 1)
                    Planned
                  @elseif ($oneb->supreme_court_status_two	 == 2)
                    On Process of Need Assessment
                  @elseif ($oneb->supreme_court_status_two	 == 3)
                    Drafted
                  @elseif ($oneb->supreme_court_status_two	 == 4)
                    Under Review of MoLJPA
                  @elseif ($oneb->supreme_court_status_two	 == 5)
                   Waiting to be enacted
                  @elseif ($oneb->supreme_court_status_two	 == 6)
                     Enforced
              
                  @endif
                 
                </td>
                <td>
                   @if(!empty($oneb->supreme_court_image_two))
                    <a href="{{ asset($oneb->supreme_court_image_two) }}" target="_blank">View</a>
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