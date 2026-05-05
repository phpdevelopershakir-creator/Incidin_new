@if(Auth::user()->can('4.question'))
<!-- question no 4 end -->
<div class="col-md-12 question4">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">4.Did the National Authority convene?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
 

      <table id="National_Authority" class="table" border="2">
        <thead>
          <tr>
            <th scope="col">Meeting no</th>
            <th colspan="3" scope="col">Key decisions</th>
            <th scope="col">Upload</th>
          </tr>
          <tr>
            <th scope="col" style="vertical-align: top;">
             
            </th>
            <th colspan="3" scope="col">
             
            </th>
            <th scope="col" style="vertical-align: top;">
             
            </th>
          </tr>
        </thead>
     
        <tbody>
        @foreach($case->four as $four)
          <tr>
            <td>
            @if ($four->type_component_q4 == 1)
            First
                @elseif ($four->type_component_q4 == 2)
                Second
                @elseif ($four->type_component_q4 == 3)
                Third
                
                @endif
              

            </td>
          
            <td>
            @if ($four->type_component == 1)
            Prevention
                @elseif ($four->type_component == 2)
                Protection
                @elseif ($four->type_component == 3)
                Prosecution
                @elseif ($four->type_component == 4)
                Protection
                @elseif ($four->type_component == 5)
                Partnership
                @elseif ($four->type_component == 6)
                M&E (NPA)
                @elseif ($four->type_component == 7)
                NPA
                @elseif ($four->type_component == 8)
                NRM
                @elseif ($four->type_component ==9)
                MLA
                @elseif ($four->type_component == 10)
                TIP Report
                @else
                {{$four->type_component_others_specify_q4}}
                @endif
              
            </td>
            <td>  @if ($four->type_issue_q4 == 1)
            Policy
                @elseif ($four->type_issue_q4 == 2)
                Law
                @elseif ($four->type_issue_q4 == 3)
                Awareness
                @elseif ($four->type_issue_q4 == 4)
                Economic Support
                @elseif ($four->type_issue_q4 == 5)
                Technology Transfer
                @elseif ($four->type_issue_q4 == 6)
                Psychosocial Care
                @elseif ($four->type_issue_q4 == 7)
                Legal Aid
                @elseif ($four->type_issue_q4 == 8)
                Health Care
                @elseif ($four->type_issue_q4 == 9)
                Shelter
                @elseif ($four->type_issue_q4 == 10)
                Technical Training
                @elseif ($four->type_issue_q4 == 11)
                Education
                @elseif ($four->type_issue_q4 == 12)
                Lifeskill Training
                @elseif ($four->type_issue_q4 == 13)
                Research
                @elseif ($four->type_issue_q4 == 14)
                Othes
                @endif
              </td>
            <td>@if ($four->type_remark_q4 == 1)
            Satisfactory
                @elseif ($four->type_remark_q4 == 2)
                Planned
                @elseif ($four->type_remark_q4 == 3)
                Discontinued
                @elseif ($four->type_remark_q4 == 4)
                Completed
                
                @endif</td>

          </tr>
          
          @endforeach


        </tbody>

       

      
      </table>
    </div>
  </div>
</div> 


@endif