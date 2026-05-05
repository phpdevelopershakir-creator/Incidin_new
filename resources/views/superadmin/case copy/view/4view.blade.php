<div class="card">
  <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0">
        <a data-toggle="collapse" href="#Question-4" aria-expanded="false"
          aria-controls="collapse-4">
          4.Were law enforcement, military, security, state or municipal employees, or other officials allegedly facilitating the crime or obstructing justice (e.g., taking bribes)? (Tips: Please provide information solely based on government documents cleared for public sharing and the answer can only be “YES” when the crime is a result of a national directive or policy, including state sponsored forced labor)
        </a>
      </h6>
    </div>

    <div id="Question-4" class="collapse" role="tabpanel4" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
<div id="six_question_view">
       <table class="table table-bordered text-center">
          <thead>
            <tr>
            <th rowspan="2" scope="row">Ministry/Department Municipality body</th>
            <th colspan="5" style="text-align: left">Number of Official Accused</th>
          </tr>
          <tr>
            <th scope="row">Men</th>
            <th scope="col">Women</th>
            <th scope="col">Total</th>

          </tr>
            </thead>
            <tbody>
              @php
                $menTotal = 0;
                $womenTotal = 0;
                $Total = 0;
      
             @endphp
              @foreach($case->four as $four)
               <tr>
             
                <td>{{$four->justice_title}}</td>
                <td>{{$four->justice_men}}</td>
                <td>{{$four->justice_women}}</td>
                <td>{{$four->justice_total}}</td>
               </tr>
               @php
                $menTotal += $four->justice_men;
                $womenTotal += $four->justice_women;
                $Total += $four->justice_total;
              
               
            @endphp
              @endforeach
              <tr style="font-weight:bold; background:#f1f1f1;">
               <td >Total</td>
                <td>{{ $menTotal }}</td>
                <td>{{ $womenTotal }}</td>
                <td>{{ $Total }}</td>
            
            </tr>
            
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>