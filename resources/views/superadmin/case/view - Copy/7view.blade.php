<div class="card">
          <div class="card-header" role="tab" id="heading-4">
            <h6 class="mb-0">
              <a data-toggle="collapse" href="#Question-7" aria-expanded="false"
                aria-controls="collapse-4">
                 7.Were any of these units and their staff exclusively dedicated to trafficking, or was trafficking among various responsibilities/mandates?
              </a>
            </h6>
          </div>

          <div id="Question-7" class="collapse" role="tabpanel7" aria-labelledby="heading-4"
            data-parent="#accordion-2">
            <div class="card-body">

          <div id="seven_question_view">
          <table class="table table-white">
            <thead>
              <tr>
                <th>Duration of NPA</th>
                <th>Attach/Upload</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->seven as $seven)
              <tr>
                <th>   {{$seven->duration_npa}} </th>
                <td> 

                  @if(!empty($seven->attach_image))
                  <a href="{{ asset('uploads/' . $seven->attach_image) }}" target="_blank">
                     View
                    </a>
                  @else
                  Not Found
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