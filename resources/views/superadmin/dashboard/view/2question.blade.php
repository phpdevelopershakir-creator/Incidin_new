@if(Auth::user()->can('2.question'))
@php
$sex_labers=DB::table('sex_trafficking_force_labors_q2')->limit(3)->get();


@endphp


<div class="col-md-12">
    <div class="card card-outline collapsed-card">
      <div class="card-header">

        <h3 class="card-title">2. Groups at risk of sex trafficking and forced labor
</h3>

        <div class="card-tools">
          <button id="q2-dashboard-data-view" type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
      <a style="margin:5px;" href="{{url('q2-pdf-view')}}" target="_blank" class="btn btn-info float-right">PDF Dawnload</a>

        <table class="table" style="border: 0;">
          <thead>
            <tr>
              <th align="center">New Form of Trafficking </th>
              <th align="center">Location</th>
       

            </tr>
          </thead>
          <tbody>
              @foreach($sex_labers as $sex_location)
            <tr>
             
              <td>

                  <div>
                       @if($sex_location->level_risky_community == 1)
               Most at risk
               @elseif($sex_location->level_risky_community == 2)
              Moderately at risk
               @elseif($sex_location->level_risky_community == 3)
              Least at Risk
           
                  @endif
                  </div>
              </td>
              <td>
                <div>
                   @if($sex_location->choose_vulnerable_list_id == 1)
                Migrant Men
               @elseif($sex_location->choose_vulnerable_list_id == 2)
               Migrant Women
               @elseif($sex_location->choose_vulnerable_list_id == 3)
             3rd G
               @elseif($sex_location->choose_vulnerable_list_id == 4)
             Girls of Poor Household
               @elseif($sex_location->choose_vulnerable_list_id == 5)
             Boys of Poor Household
               @elseif($sex_location->choose_vulnerable_list_id == 6)
             Men
               @elseif($sex_location->choose_vulnerable_list_id == 7)
             Women
              @elseif($sex_location->choose_vulnerable_list_id == 8)
             Children of Sex Worker
              @elseif($sex_location->choose_vulnerable_list_id == 9)
              Child Labour
              @elseif($sex_location->choose_vulnerable_list_id == 10)
              Street Children
              @elseif($sex_location->choose_vulnerable_list_id == 11)
            Other (Specify)
        
            @endif
                </div>
                
               </td>

               <td>
                <div>
                {{ $sex_location->others_specify_id }}
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