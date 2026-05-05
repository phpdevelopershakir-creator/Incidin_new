
<div class="card question59">

      <div class="card-header" role="tab" id="heading-4">
        <h6 class="mb-0 card-title" style="color: {{ isset($question_59_data) ? 'blue' : 'green' }};">
          <a data-toggle="collapse" href="#Question-59" aria-expanded="false"
            aria-controls="collapse-4">
             59.Did front-line officials, including law enforcement, immigration, social services personnel, healthcare workers, and labor inspectors receive adequate training on use of the victim identification protocol or formal written procedures? (Tips: Please consider - Front-line officials of Police, Front-line officials of BGB, Front-line officials of Coastguard , Front-line officials of Ansar, Front-line officials of Immigration, DSS Officials, Labour Inspectors and similar officials of NGO workers, international organization staff, religious officials, and community leaders who come at first contact with VoTs)
          </a>
        </h6>
      </div>

      <div id="Question-59" class="collapse" role="tabpane59" aria-labelledby="heading-4"
        data-parent="#accordion-2">
        <div class="card-body">

     

   

       
      <table class="table table-bordered text-center">
  <thead>
    <tr>
      <th>Types of Activities</th>
      <th>Men</th>
      <th>Women</th>
      <th>3rd Gender</th>
      <th>Boy</th>
      <th>Girl</th>
      <th>Total</th>
      <th>Location(multiple-Response)</th>

    </tr>
  </thead>
  <tbody>
   @foreach($case->fiftynine as $fiftynine)
          <tr>
            <td>
            @if ($fiftynine->number_traning_59	 == 1)
                Courtyard meeting
                @elseif ($fiftynine->number_traning_59	 == 2)
                Bazar/hatt meeting
                @elseif ($fiftynine->number_traning_59	 == 3)
                CTC meeting
                @elseif ($fiftynine->number_traning_59	 == 4)
                Consultation
                @elseif ($fiftynine->number_traning_59	 == 5)
                Poster
                @elseif ($fiftynine->number_traning_59	 == 6)
                leaflet
                @elseif ($fiftynine->number_traning_59	 == 7)
                Booklet
                @elseif ($fiftynine->number_traning_59	 == 8)
                SMS	
                @elseif ($fiftynine->number_traning_59	 == 9)
                Newsletter	
                @elseif ($fiftynine->number_traning_59	 == 10)
                Billboard
                @elseif ($fiftynine->number_traning_59	 == 11)
                Folk show
                @elseif ($fiftynine->number_traning_59	 == 12)
                Film show
                @elseif ($fiftynine->number_traning_59	 == 13)
                Miking
                @elseif ($fiftynine->number_traning_59	 == 14)
                Web campaign
                @else
                 {{$fiftynine->number_traning_59}}
                  @endif
             
             </td>
           
            <th>{{$fiftynine->men_q59}}  </th>
            <th > {{$fiftynine->women_q59}}</th>
            <th > {{$fiftynine->third_gender_q59}}</th>
            <th>{{$fiftynine->boy_q59}} </th>
            <th >{{$fiftynine->girl_q59}} </th>
            <th >{{$fiftynine->total_q59}}  </th>
            <th >
             
                {{$fiftynine->division_name}}
              
            </th>

        
          </tr>
          @endforeach

  </tbody>


</table>

   

        </div>
      </div>
    </div>



