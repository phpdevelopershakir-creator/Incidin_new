<div class="card">
  <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0">
        <a data-toggle="collapse" href="#Question-28" aria-expanded="false"
          aria-controls="collapse-4">
          28.Describe the overall quality of care? Did service providers receive adequate training on providing care to trauma survivors? Did service providers have the knowledge and skills to support victims through a consistent victim-centered approach?
        </a>
      </h6>
    </div>

    <div id="Question-28" class="collapse" role="tabpane28" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
      <div id="six_question_view">
        <table class="table table-bordered text-center">
          <thead>
            <tr>
                <th scope="col">Overall Quality of Care	</th>
                <th scope="col">Why	</th>
  
              </tr>
            </thead>
            <tbody>
            @foreach($case->twentyeight as $twentyeight)
              <tr>
                <th>
                  @if($twentyeight->overall_quality_car == 1)
                   Screening carried out by Police as per PSHTA
                  @elseif ($twentyeight->main_document	 == 2)
                   Screening via checklist of MoSW
                  @else

                  {{$twentyeight->overall_quality_car}}
                  @endif
                </th>
                <td>
                  @if($twentyeight->why_q28 == 1)
                    Staff are well trained on trauma informed service
                  @elseif ($twentyeight->why_q28	 == 2)
                  Staff are properly trained on victim centric care
                     @elseif ($twentyeight->why_q28	 == 3)
                  Staff are inadequately trained on trauma informed service
                  @elseif ($twentyeight->why_q28	 == 4)
                Staff are not trained on trauma informed service
                  @elseif ($twentyeight->why_q28	 == 5)
                Staff are inadequately trained on victim centric care
                @elseif ($twentyeight->why_q28	 == 6)
               Staff are not trained on victim centric care
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