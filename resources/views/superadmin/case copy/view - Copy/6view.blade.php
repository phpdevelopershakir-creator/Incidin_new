<div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-6" aria-expanded="false"
                              aria-controls="collapse-4">
                               6.Describe government units/courts responsible for investigating, prosecuting, or hearing trafficking
cases, such as police units, prosecution offices, labor inspectorate units, and courts:
                            </a>
                          </h6>
                        </div>

                        <div id="Question-6" class="collapse" role="tabpanel6" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">
<div id="six_question_view">
          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Type of preventive Action</th>
                <th scope="col">Allocation (in BDT)</th>


              </tr>
            </thead>
            <tbody>
        
              
            
            @foreach($case->six as $six)
              <tr>
                <th>
                @if ($six->type_preventive_action  == 1)
                Total Allocation under NPA for prevention
                @elseif ($six->type_preventive_action  == 2)
                Total Allocation utilized under NPA for prevention
                @elseif ($six->type_preventive_action  == 3)
                Total allocation spent for Awareness activities
                @elseif ($six->type_preventive_action  == 4)
                Total allocation spent for safety-net            
                    @elseif ($six->type_preventive_action  == 5)
                    Total allocation spent for training to promote prevention 
                @elseif ($six->type_preventive_action  == 6)
                Assessment of Allocation

                @endif
                
                </th>
               
                <td>
              
                 {{$six->allocation_id}}
                 
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
                          </div>
                        </div>
                      </div>