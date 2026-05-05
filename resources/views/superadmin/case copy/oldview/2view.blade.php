@if(Auth::user()->can('2.question'))
<div class="col-md-12">
    <div class="card card-outline collapsed-card">
      <div class="card-header">

        <h3 class="card-title">2. Which identified groups are at particular risk of sex trafficking and forced
          labor?</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">

        <table class="table" style="border: 0;">
          <thead>
            <tr>
              <th align="center">Level of Risky community</th>
              <th align="center">Choose of vulnerable-list</th>
              <th align="center">Others (Specify)</th>

            </tr>
          </thead>
          <tbody>
          @foreach($case->two as $two)
            <tr>
              <td><div>
              @if ($two->level_risky_community == 1)
              Most at risk
                @elseif ($two->level_risky_community == 2)
                Moderately at risk
                @elseif ($two->level_risky_community == 3)
                Least at Risk
             
                @endif
              </div></td>
              <td>

                  <div>
                  @if ($two->choose_vulnerable_list_id == 1)
                Migrant Men
                @elseif ($two->choose_vulnerable_list_id == 2)
                Migrant Women
                @elseif ($two->choose_vulnerable_list_id == 3)
                3rd G Gender

                @elseif ($two->choose_vulnerable_list_id == 4)
                Girls of Poor Household
                @elseif ($two->choose_vulnerable_list_id == 5)
                Boys of Poor Household
                @elseif ($two->choose_vulnerable_list_id == 6)
                Men
                @elseif ($two->choose_vulnerable_list_id == 7)
                Women
                @elseif ($two->choose_vulnerable_list_id == 8)
                Children of Sex Worker
                @elseif ($two->choose_vulnerable_list_id == 9)
                Child Labour
                @elseif ($two->choose_vulnerable_list_id == 10)
                Street Children     

                @elseif ($two->choose_vulnerable_list_id == 11)
                Other (Specify)
                @endif
                  </div>
             
                
              </td>
              <td>
                <div>
                {{ $two->others_specify_id }}
                </div>
                
               </td>
            </tr>
            @endforeach
       
          </tbody>

        </table>


        <br>


      </div>
    </div>
  </div>
@endif