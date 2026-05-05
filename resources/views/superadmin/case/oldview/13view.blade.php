@if(Auth::user()->can('13.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">13.Did your ministry/agency/organization take tangible action to prevent forced
            labor in domestic or
            global supply chains?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <table class="table" border="2">
            <thead>
              <tr>

                <th scope="col">Action Level</th>
                <th scope="col">Type of Action (Multiple Response)</th>
                <th scope="col">Attach/Upload/Summary</th>
              </tr>
            </thead>

            <tbody>
            @foreach($case->thirteen as $thirteen)
              <tr>
                <td>
                @if ($thirteen->q13_action_level == 1)
                National
                @elseif ($thirteen->q13_action_level == 2)
                Global
                @endif
                  </td>
         
                <td>
                @if ($thirteen->q13_national_type_action == 1)
                Reform of Labour Law
                @elseif ($thirteen->q13_national_type_action == 2)
                Stricter Enforcement of law
                @elseif ($thirteen->q13_national_type_action == 3)
                Research
                @elseif ($thirteen->q13_national_type_action == 4)
                Stricter monitoring
                @elseif ($thirteen->q13_national_type_action == 5)
                Training of Factory Inspectors
                @elseif ($thirteen->q13_national_type_action == 6)
                Training of Trade Unions
                @elseif ($thirteen->q13_national_type_action == 7)
                Training of entrepreneurs
                @elseif ($thirteen->q13_national_type_action == 8)
                Prohibited by law
                @elseif ($thirteen->q13_national_type_action == 9)
                Prohibitated by circular
                @elseif ($thirteen->q13_national_type_action == 10)
                Increased legal action
                 @else
                     
                {{$thirteen->q13_national_type_action }}
                @endif
                </td>
                <td>

                            @if(!empty($thirteen->q13_upload_summary))
    <a href="{{ asset($thirteen->q13_upload_summary) }}" target="_blank">
      View
    </a>
    @else
    Not Found
    @endif



    
                <!-- <img id="logo" src="{{ asset($thirteen->q13_upload_summary) }}" width="50" height="50;" /> -->
                 
              </td>
              </tr>
             
             
            
              @endforeach
            </tbody>
         
          </table>
        </div>
      </div>
    </div>
    @endif