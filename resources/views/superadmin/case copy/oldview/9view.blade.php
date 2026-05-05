@if(Auth::user()->can('9.question'))
<div class="col-md-12 question9">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">9.Did the ministry/agency/organization fund and/or conduct awareness activities?
      </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
          
         


          <div id ="9_question_view">
      <table class="table table-white">
        <thead>
          <tr>
            <th rowspan="2" scope="col">Types of Activities</th>
            <th colspan="7">Community (number covered)s</th>

            <!-- <th colspan="3">Total (number covered)</th> -->
      
          </tr>

          <tr>
            <th scope="col">M </th>
            <th scope="col">W</th>
            <th scope="col">3rd Gender </th>
            <th scope="col">B</th>
            <th scope="col">G</th>
            <th scope="col">T</th>
            <th>Location</th>
           
          </tr>
          @foreach($case->nine as $nine)
          <tr>
            <td>
            @if ($nine->type_activities	 == 1)
                Courtyard meeting
                @elseif ($nine->type_activities	 == 2)
                Bazar/hatt meeting
                @elseif ($nine->type_activities	 == 3)
                CTC meeting
                @elseif ($nine->type_activities	 == 4)
                Consultation
                @elseif ($nine->type_activities	 == 5)
                Poster
                @elseif ($nine->type_activities	 == 6)
                leaflet
                @elseif ($nine->type_activities	 == 7)
                Booklet
                @elseif ($nine->type_activities	 == 8)
                SMS	
                @elseif ($nine->type_activities	 == 9)
                Newsletter	
                @elseif ($nine->type_activities	 == 10)
                Billboard
                @elseif ($nine->type_activities	 == 11)
                Folk show
                @elseif ($nine->type_activities	 == 12)
                Film show
                @elseif ($nine->type_activities	 == 13)
                Miking
                @elseif ($nine->type_activities	 == 14)
                Web campaign
                @else
                 {{$nine->type_activities}}
                  @endif
             
             </td>
           
            <th>{{$nine->type_activities_men}}  </th>
            <th > {{$nine->type_activities_women}}</th>
            <th > {{$nine->type_activities_third_gender}}</th>
            <th>{{$nine->type_activities_boy}} </th>
            <th >{{$nine->type_activities_girl}} </th>
            <th >{{$nine->type_activities_total}}  </th>
            <th >
             
                {{$nine->division_name}}
              
            </th>

        
          </tr>
          @endforeach


        </thead>
      </table>
          </div>
    </div>
  </div>
</div>
@endif