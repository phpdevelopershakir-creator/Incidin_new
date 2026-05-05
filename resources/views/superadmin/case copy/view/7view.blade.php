<div class="card">
  <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0">
        <a data-toggle="collapse" href="#Question-7" aria-expanded="false"
          aria-controls="collapse-4">
         7.Describe government units/courts responsible for investigating, prosecuting, or hearing trafficking cases, such as police units, prosecution offices, labor inspectorate units, and courts: (Tips: For this question, please provide text inputs on the following agencies and their roles in investigating, prosecuting, or hearing trafficking cases)
        </a>
      </h6>
    </div>

    <div id="Question-7" class="collapse" role="tabpane7" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
<div id="six_question_view">
        <table class="table table-bordered text-center">
          <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                  <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->seven as $seven)
              <tr>
                <td>
                
                {{$seven->court_title_q7}}
                 </td>
                <td>
                  {{ $seven->court_type_q7 == 1 ? 'Yes' : 'No' }}
              </td>
            @if($seven->court_type_q7 == 1)
                          <td>
                            
                                  {{ $seven->court_description_q7 }}
                              
                          </td>
                          @endif
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>