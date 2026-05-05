@if(Auth::user()->can('59.question'))
@php
$fifty_nines=DB::table('general_recommendations_human_trafficking_q59')->latest()->limit(1)->get();

@endphp
<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">59.Please provide general recommendations for addressing human trafficking.</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
        <h6>General recommendations from Police HQ</h6>
        @foreach($fifty_nines as $fifty_nine)
      <table class="table table-bordered text-left">
        <thead class="">
            
          <tr>
            <th >1</th>
            <th>
              <div>
             {{$fifty_nine->q59_one ?? ''}}
              </div>
              
            
            </th>
          </tr>
          <tr>
            <th >2</th>
            <th>
              <div>
               {{$fifty_nine->q59_two ?? ''}}
              </div>
             
             
            </th>
          </tr>
          <tr>
            <th >3</th>
            <th>
              <div>
           {{$fifty_nine->q59_three ?? ''}}
              </div>
             
            
            </th>
          </tr>
          <tr>
            <th >4</th>
            <th>
              <div>
                 {{$fifty_nine->q59_four ?? ''}}
              </div>
             
         
            </th>
          </tr>
          <tr>
            <th >5</th>
            <th>
              <div>
                 {{$fifty_nine->q59_five ?? ''}}
              </div>
             
            
            </th>
          </tr>
          <tr>
            <th >6</th>
            <th>
              <div>
                  {{$fifty_nine->q59_six ?? ''}}
              </div>
              
             
            </th>
          </tr>
           <tr>
            <th >7</th>
            <th>
              <div>
                  {{$fifty_nine->q59_seven ?? ''}}
              </div>
              
             
            </th>
          </tr>
           <tr>
            <th >8</th>
            <th>
              <div>
                  {{$fifty_nine->q59_eight ?? ''}}
              </div>
              
             
            </th>
          </tr>
     
        
       
        </thead>
      </table>
      @endforeach
      
    </div>
    
  </div>
</div>
@endif