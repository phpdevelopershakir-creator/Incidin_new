@if(Auth::user()->can('6.question'))
     <div class="col-md-12 question6">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">6.How much funding (in the local currency) did your ministry/agency/organization
            spend on
            prevention efforts (e.g., awareness campaigns, research projects, national action plan
            implementation, etc.)?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
       
         
          <div id="six_question_view">
          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Type of preventive Action</th>
                <th scope="col">Allocation (in BDT)</th>


              </tr>
            </thead>
            <tbody>
        
              
            
            @foreach($case->six as $six)
              <tr>
                <th>
                @if ($six->type_preventive_action	 == 1)
                Total Allocation under NPA for prevention
                @elseif ($six->type_preventive_action	 == 2)
                Total Allocation utilized under NPA for prevention
                @elseif ($six->type_preventive_action	 == 3)
                Total allocation spent for Awareness activities
                @elseif ($six->type_preventive_action	 == 4)
                Total allocation spent for safety-net            
                    @elseif ($six->type_preventive_action	 == 5)
                    Total allocation spent for training to promote prevention 
                @elseif ($six->type_preventive_action	 == 6)
                Assessment of Allocation

                @endif
                
                </th>
               
                <td>
              
                 {{$six->allocation_id}}
                 
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
    <!-- question no 6 end -->
    @endif