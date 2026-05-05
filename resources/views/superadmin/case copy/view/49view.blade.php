@if(Auth::user()->can('49.question'))

    <!-- question no 48 end -->
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">49.Did the government/your ministry/department/organization train judiciary and
            court officials on anti-trafficking enforcement, policies, and laws? </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div id="q49_question_view" class="card-body row">



          <table id="addRowQ49" class="table table-bordered text-center">
            <thead class="">
              <tr>
                <th rowspan="2" style="text-align: center; margin: bottom 45%;">Category of Trainee </th>
                <th rowspan="2">Training Contents </th>
                <th rowspan="2">Number of Training</th>
                <th rowspan="2">Location</th>
                <th rowspan="2">Development Partner</th>
                <th colspan="4">Coverage</th>
              </tr>
              <tr>
                <th>Men</th>
                <th>Women</th>
                <th>3rd Gender </th>
                <th>Total</th>
              </tr>
              <thead>
            <tbody>
              @php
                $menTotal = 0;
                $womenTotal = 0;
                $thirdGenderTotal = 0;
                $grandTotal = 0;
             @endphp
        @foreach($case->fortynine as $fortynine)
          <tr>
            <td>
            @if($fortynine->	q49_category_trainee==1)
            Judges of Separate Special TIP Tribunal
            @elseif($fortynine->	q49_category_trainee==2)
            Judges of Special TIP Tribunal
            @elseif($fortynine->	q49_category_trainee==3)
            PP of Separate Special TIP Tribunal
            @elseif($fortynine->	q49_category_trainee==4)
            PP of Special TIP Tribunal
            @elseif($fortynine->	q49_category_trainee==5)
            Judges
            @elseif($fortynine->	q49_category_trainee==6)
            PP
            @elseif($fortynine->	q49_category_trainee==7)
            Lawyers
            @elseif($fortynine->	q49_category_trainee==8)
            Court Officials
            @endif  
           
            </td>
            <td>
            @if($fortynine->	q49_training_contents==1)
            PSHT
            @elseif($fortynine->	q49_training_contents==2)
            PSHT Act 2012
            @elseif($fortynine->	q49_training_contents==3)
            Rule of PSHT Act
            @elseif($fortynine->	q49_training_contents==4)
            TIP Investigation
            @elseif($fortynine->	q49_training_contents==5)
            Victim Withess Protection
            @elseif($fortynine->	q49_training_contents==6)
            TIP and MLA
            @elseif($fortynine->	q49_training_contents==7)
            Role of Police
            @elseif($fortynine->	q49_training_contents==8)
            NPA
            @elseif($fortynine->	q49_training_contents==9)
            NRM
            @elseif($fortynine->	q49_training_contents==10)
            VoT identification Guideline
            @endif  
              
            </td>
            <td>{{$fortynine->q49_number_of_training}}</td>

            <td>
            @if($fortynine->		q49_location_id==1)
            Barisal
            @elseif($fortynine->		q49_location_id==2)
            Chattogram
            @elseif($fortynine->		q49_location_id==3)
            Dhaka
            @elseif($fortynine->		q49_location_id==4)
            Khulna
            @elseif($fortynine->		q49_location_id==5)
            Mymensingh
            @elseif($fortynine->		q49_location_id==6)
            Rajshahi
            @elseif($fortynine->		q49_location_id==7)
            Rangpur
            @elseif($fortynine->		q49_location_id==8)
            Sylhet
            @endif  
              
            </td>
            <td>
            {{$fortynine->q49_development_partner}}
            </td> 
            <td>
            {{$fortynine->q49_coverage_men}}
            </td>
            <td>
            {{$fortynine->q49_coverage_women}}
            </td>
            <td>
            {{$fortynine->q49_coverage_third_gender}}
            </td>
            <td>
            {{$fortynine->q49_coverage_total}}
            </td>
          </tr>

           @php
                $menTotal += $fortynine->q49_coverage_men;
                $womenTotal += $fortynine->q49_coverage_women;
                $thirdGenderTotal += $fortynine->q49_coverage_third_gender;
                $grandTotal += $fortynine->q49_coverage_total;
            @endphp
          
@endforeach
         <tr style="font-weight:bold; background:#f1f1f1;">
                <td colspan="5">Total</td>
                <td>{{ $menTotal }}</td>
                <td>{{ $womenTotal }}</td>
                <td>{{ $thirdGenderTotal }}</td>
                <td>{{ $grandTotal }}</td>
            </tr>

          </tbody>
          </table>
        </div>
      </div>
    </div>
    @endif

     