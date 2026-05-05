<div class="card">
  <div class="card-header" role="tab" id="heading-4">
      <h6 class="mb-0">
        <a data-toggle="collapse" href="#Question-11" aria-expanded="false"
          aria-controls="collapse-4">
          11.Were law enforcement, military, security, state or municipal employees, or other officials or state institutions involved directly in trafficking? (Tips: Please provide information solely based on government documents cleared for public sharing)
        </a>
      </h6>
    </div>

    <div id="Question-11" class="collapse" role="tabpane11" aria-labelledby="heading-4"
      data-parent="#accordion-2">
      <div class="card-body">
   
     
     @foreach($case->eleven as $eleven)
         {{$eleven->forced_labor_supply_chains_title}}
     @endforeach
          
        
        </div>
      </div>
    </div>