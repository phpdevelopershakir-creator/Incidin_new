<div class="card">
    <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0">
        <a data-toggle="collapse" href="#Question-11" aria-expanded="false"
          aria-controls="collapse-4">
           11.Does law enforcement pursue trafficking cases that would hold criminally accountable private employers or corporations for forced labor in supply chains?
        </a>
      </h6>
    </div>

    <div id="Question-11" class="collapse" role="tabpane11" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">

           <div id="eleven_question_view">
<table class="table table-white">
<thead>
<tr>
<th scope="col">Original Document/Approach</th>
<th scope="col">Description of Change</th>
</tr>
</thead>
<tbody>
@foreach($case->eleven as $eleven)
<tr>
<td >
@if  ($eleven->original_approach   == 1)
OEMA 2013
@elseif ($eleven->original_approach  == 2)
Employee-paid-model
@elseif ($eleven->original_approach  == 3)
Fair recruitment cost notification
@elseif ($eleven->original_approach  == 4)
Ranking of Recruiting Agents
@elseif ($eleven->original_approach  == 5)
Licensing of Recruiting Agents
@elseif ($eleven->original_approach  == 6)
Registration of Informal Recruiting Agents
@elseif ($eleven->original_approach  == 7)
Zero Migration Cost Approach
@else
{{$eleven->original_approach}}
@endif

</td>

<td> 
@if  ($eleven->description_change  == 1)
Firmly Implemented/enforced
@elseif ($eleven->description_change   == 2)
Reformed
@elseif ($eleven->description_change   == 3)
Planned
@elseif ($eleven->description_change   == 4)
Drafted
@elseif ($eleven->description_change   == 5)
Updated
@elseif ($eleven->description_change   == 6)
Partially enforced
@elseif ($eleven->description_change   == 7)
Expanded use
@elseif ($eleven->description_change   == 8)
Prohibited by law
@elseif ($eleven->description_change   == 9)
Prohibit
@elseif ($eleven->description_change  == 10)
Strictly monitored
@else
{{$eleven->description_change}}


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