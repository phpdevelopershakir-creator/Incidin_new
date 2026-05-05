  <div class="card">
    <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0">
        <a data-toggle="collapse" href="#Question-10" aria-expanded="false"
          aria-controls="collapse-4">
          10.Were there any gaps in law enforcement’s ability to investigate, prosecute, or convict traffickers? Did law enforcement investigate trafficking crimes as other offenses and/or did prosecutors charge alleged traffickers under alternative criminal provisions with lesser penalties (e.g., commercial sex crimes, smuggling of migrants, labor violations, fraud, etc.)?
        </a>
      </h6>
    </div>

    <div id="Question-10" class="collapse" role="tabpane10" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
   <div id="ten_question_view" class="card-body row">
      <table id="addRowQ10" class="table table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">Country</th>
            <th scope="col">Target group of Training
              (multiple response)</th>
            <th scope="col">Total coverage</th>
           


          </tr>
        </thead>
        <tbody>
        @foreach($case->ten as $ten)
          <tr>
            <td >
            {{$ten->country->name  ?? ''}}
            </td>
            <td>
            @if  ($ten->trafficking_target_group   == 1)
            Government Official
                @elseif ($ten->trafficking_target_group  == 2)
                Immigration Authority
                @elseif ($ten->trafficking_target_group  == 3)
                Law Enforcing Personnel
                @elseif ($ten->trafficking_target_group  == 4)
                Border Control Force
                @elseif ($ten->trafficking_target_group  == 5)
                Judiciary
                @elseif ($ten->trafficking_target_group  == 6)
                Diplomats
                @endif

            
            </td>
            <td> 
            {{$ten->trafficking_total_coverage}}
              
             </td>
            

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
      </div>
    </div>
  </div>