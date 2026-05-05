@if(Auth::user()->can('1.question'))
<div class="col-md-12">
    <div class="card card-outline collapsed-card">
      <div class="card-header">

        <h3 class="card-title">1. Is there any new form of trafficking in your district?</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">

        <table class="table" style="border: 0;">
          <thead>
            <tr>
              <th align="center">New form of Trafficking</th>
              <th align="center">Type</th>
              <th align="center">Location</th>

            </tr>
          </thead>
          <tbody>
          @foreach($case->one as $one)
   
    

            <tr>
              <td>
                <div>
                @if ($one->trafficking_form_no == 1)
                New form # 1
                @elseif ($one->trafficking_form_no == 2)
                New form # 2
                @elseif ($one->trafficking_form_no == 3)
                New form # 3
                @elseif ($one->trafficking_form_no == 4)
                New form # 4
                @elseif ($one->trafficking_form_no == 5)
                New form # 5
                @endif

                 </div>
                </td>
              <td>
                <div>
                @if ($one->q1_type_id == 1)
                Forced sexual exploitation
                @elseif ($one->q1_type_id == 2)
                Trafficking for sexual visuals/pornography
                @elseif ($one->q1_type_id == 3)
                Web Enabled Trafficking
                @elseif ($one->q1_type_id == 4)
                Trafficking in Migrants
                @elseif ($one->q1_type_id == 5)
                Organ Trafficking
                @elseif ($one->q1_type_id == 6)
                Trafficking in Refugee
                @elseif ($one->q1_type_id == 7)
                
                @endif
          
                </div>
                @if ($one->q1_type_id == 7 && !empty($one->q1_trafficking_other_specify))
                  <div>
                      {{ $one->q1_trafficking_other_specify }}
                  </div>
                @endif

               
                
              </td>
              <td>
                <div>
                @if ($one->q1_location_id == 1)
                Barisal
                @elseif ($one->q1_location_id == 2)
                Chattogram
                @elseif ($one->q1_location_id == 3)
                Dhaka
                @elseif ($one->q1_location_id == 4)
                Khulna
                @elseif ($one->q1_location_id == 5)
                Mymensingh
                @elseif ($one->q1_location_id == 6)
                Rajshahi
                @elseif ($one->q1_location_id == 7)
                Rangpur
                @elseif ($one->q1_location_id == 8)
                Sylhet
                @elseif ($one->q1_location_id == 9)
                National
                @endif
              
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