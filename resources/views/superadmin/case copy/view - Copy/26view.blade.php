@if(Auth::user()->can('26.question'))
       <!-- question no 26 Start  -->
       <div class="col-md-12 question26">
        <div class="card card-outline collapsed-card">
          <div class="card-header">
            <h3 class="card-title">26.What was the quality of care?</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
          
           
        
          <div id="26_question_view">
            <table id="addRowQ26" cellpadding=0 celspecing=0 width="100%" class="table table-bordered text-center" >
              <thead class="">
                <tr>
                  <th>Protection Services</th>
                  <th>Quality</th>
                  <th>Location</th>

                </tr>
              </thead>
                <tbody>
          @foreach($case->twentysix as $twentysix)
          <tr>
                <td>
                  @if ($twentysix->protection_services == 1)
                  Economic Support/assest transfer
                  @elseif ($twentysix->protection_services == 2)
                  Micro Credit
                  @elseif ($twentysix->protection_services == 3)
                  Livelihood Training
                  @elseif ($twentysix->protection_services == 4)
                  Job placement
                  @elseif ($twentysix->protection_services == 5)
                  Health care
                  @elseif ($twentysix->protection_services == 6)
                  Psychosocial care
                  @elseif ($twentysix->protection_services == 7)
                  Shelter
                  @elseif ($twentysix->protection_services == 8)
                  Social safetynet
                  @elseif ($twentysix->protection_services == 9)
                  Information support
                  @elseif ($twentysix->protection_services == 10)
                  Mainstream education
                  @elseif ($twentysix->protection_services == 11)
                  Non Formal Education
                  @elseif ($twentysix->protection_services == 12)
                  Technical Education
                  @elseif ($twentysix->protection_services == 13)
                  Life skill
                  @elseif ($twentysix->protection_services == 14)
                  Family reunion
                  @elseif ($twentysix->protection_services == 15)
                  Referral
                  @endif
                  </td>
                  <td>
                  @if($twentysix->	q26_quality_id==1)
                  Excellent
                  @elseif($twentysix->	q26_quality_id==2)
                  As per standard
                  @elseif($twentysix->	q26_quality_id==3)
                  below standard
                  @endif
                    
                  </td>
                  <td>
                  {{$twentysix->distric->name ?? ''}}
                   
                  </td>

                </tr>
             
              
             

         @endforeach
         
</tbody>


            </table>
            </div>
          </div>
        </div>
      </div>
      <!-- question no 26 end  -->
    

@endif