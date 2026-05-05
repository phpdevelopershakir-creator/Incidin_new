@if(Auth::user()->can('31.question'))

<style>
  .otherSpecify{
    display:none;
  }
</style>
<div class="col-md-12 question31">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">31.Were foreign victims legally entitled to the same benefits as host country
        nationals?</h3>

      <div class="card-tools">
        <button id="q31-dashboard-data-view" type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
  
    <div class="card-body">
     

   
  
  <div id="31_question_view">
    <div class="card-body">
    <a style="margin:5px;" href="{{url('q31-pdf-view')}}" target="_blank" class="btn btn-info float-right">PDF Dawnload</a>

        <table class="table table-bordered table-white" id="q31_individual_activities">
            <thead class="">
                <tr>
                  <th rowspan="2" style="text-align: center; margin: bottom 45%;">Types of Hotlines</th>
                  <th rowspan="2">Implementer</th>
                  <th rowspan="2">Hotline number</th>
                  <th colspan="16">Coverage</th>
                </tr>
                <tr>
                  <th colspan="2"></th>
                  <th colspan="2"></th>
                  <th colspan="2">Men</th>
                  <th colspan="2">Women</th>
                  <th colspan="2">3rd G</th>
                  <th colspan="2">Boy</th>
                  <th colspan="2">Girls</th>
                  <th colspan="2">Total</th>
                </tr>
            </thead>
            <tbody>

              </tbody>
          </table>

          <br>
          <table class="table table-bordered table-white" id="q31_all_participants">
            <thead class="">
                <tr>
                  <th rowspan="2" style="text-align: center; margin: bottom 45%;">Types of Hotlines</th>
                  <th rowspan="2">Implementer</th>
                  <th rowspan="2">Hotline number</th>
                  <th colspan="16">Coverage</th>
                </tr>
                <tr>
                  <th colspan="2"></th>
                  <th colspan="2"></th>
                  <th colspan="2">Men</th>
                  <th colspan="2">Women</th>
                  <th colspan="2">3rd G</th>
                  <th colspan="2">Boy</th>
                  <th colspan="2">Girls</th>
                  <th colspan="2">Total</th>
                </tr>
            </thead>
            <tbody>

              </tbody>
          </table>
    </div>
        
    
          
        

         
  
  
          
    
     
</div>
  </div>
</div>
@endif



