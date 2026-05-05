@if(Auth::user()->can('60.question'))
     
<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">60.Please provide any other information which could not be captured in the questionnaire (not more than 500)</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-bordered text-center">
        <thead></thead>
        <tbody>
        @foreach($case->sixty as $sixty)
          <tr>
            
            
        
            {!!$sixty->description_60!!} 
           
           

           

            

          </tr>
          @endforeach
        </tbody>
       
      </table>
    </div>
  </div>
</div>
    @endif  