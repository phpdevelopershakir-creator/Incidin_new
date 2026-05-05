@if(Auth::user()->can('35.question'))
     <div class="col-md-12 question35">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">35.Have there been any changes to preexisting anti-trafficking legislation during
            the reporting period
            (amendments to laws or penal codes, new laws, official circular/ decrees, supreme court precedents,
            etc.)?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
      <div id="35_question_view">
          <h3>Reform of Existing Law</h3>
          <table class="table table-white table-bordered">
            <thead>
              <tr>
                <th scope="col">Title of the law</th>
                <th scope="col">Contents of Change/Status</th>
                <th scope="col">Attach/Upload</th>
              </tr>
            </thead>
            <tbody>
          @foreach($case->thirtyfive as $thirtyfive)
              <tr>
                <td>
                @if($thirtyfive->	reform_existing_law_q35_one==1)
                PSHT 2012
                @elseif($thirtyfive->	reform_existing_law_q35_one==2)
                Rule of PSHTA (2017)
                @elseif($thirtyfive->	reform_existing_law_q35_one==3)
                OEMA 2013
                @elseif($thirtyfive->	reform_existing_law_q35_one==4)
                Children's Act
                @elseif($thirtyfive->	reform_existing_law_q35_one==5)
                Labour Act
                @elseif($thirtyfive->	reform_existing_law_q35_one==6)
                MLA in Criminal Matter 2012
                @elseif($thirtyfive->	reform_existing_law_q35_one==7)
                Human Organ Transfer Rule 1999
                @elseif($thirtyfive->	reform_existing_law_q35_one==8)
                Passport Act 1920
                @elseif($thirtyfive->	reform_existing_law_q35_one==9)
                Bangladesh Passport Order 1973
                <!-- @elseif($thirtyfive->	reform_existing_law_q35_one==10)
                {{$thirtyfive->	reform_existing_law_q35_one}}
                @elseif($thirtyfive->	reform_existing_law_q35_one==11)
                {{$thirtyfive->	reform_existing_law_q35_one}}
                @elseif($thirtyfive->	reform_existing_law_q35_one==12) -->
                @else
                {{$thirtyfive->	reform_existing_law_q35_one}}
              @endif 
                

                </td>

                <td> 
                @if($thirtyfive->	contents_status_id_q35_one==1)
                Revised
                @elseif($thirtyfive->	contents_status_id_q35_one==2)
                Abolished
                @endif 
                  
               

                </td>
                <td>
                                  @if(!empty($thirtyfive->attach_upload_one))
    <a href="{{ asset($thirtyfive->attach_upload_one) }}" target="_blank">
      View
    </a>
    
    @endif
    
                <!-- <img id="logo" src="{{ asset($thirtyfive->attach_upload_one) }}" width="50" height="50;" /> -->

                </td>
                

              
              </tr>
              @endforeach
            </tbody>
          </table>

          <h3>New Law</h3>
          <table class="table table-white table-bordered">
            <thead>
              <tr>
                <th scope="col">Title of the New law</th>
                <th scope="col">Status</th>
                <th scope="col">Attach/Upload</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->thirtyfive as $thirtyfive)

            <tr>
            <td>{{$thirtyfive->q35_title}}</td>
              <td>
                @if($thirtyfive->	status_id_q35_two==1)
                Planned
                @elseif($thirtyfive->	status_id_q35_two==2)
                On process of need assessment
                @elseif($thirtyfive->	status_id_q35_two==3)
                Waiting to be enacted
                @elseif($thirtyfive->	status_id_q35_two==4)
                Enacted
                @elseif($thirtyfive->	status_id_q35_two==5)
                Enforced
                @endif  
              </td>
              <td>

                          @if(!empty($thirtyfive->attach_upload_q35_two))
    <a href="{{ asset($thirtyfive->attach_upload_q35_two) }}" target="_blank">
      View
    </a>
    @else
    Not Found
    
    @endif

                  <!-- <img id="logo" src="{{ asset($thirtyfive->attach_upload_q35_two) }}" width="50" height="50;" /> -->

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