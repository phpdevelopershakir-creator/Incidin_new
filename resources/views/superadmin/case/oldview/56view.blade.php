@if(Auth::user()->can('56.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">56
          </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-white">
            <thead>
              <tr>
                <th>Number of Meeting</th>
                <th>Union</th>
                <th>Upazila</th>
                <th>District</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
            @foreach($case->fiftysix as $fiftysix)
              <tr>
                <td>
                @if($fiftysix->q56_type_of_meeting==1)
            GO-NGO Coordination
            @elseif($fiftysix->q56_type_of_meeting==2)
            Facilitation of CTC Members (Union)
            @elseif($fiftysix->q56_type_of_meeting==3)
            Facilitation of CTC Members (Upazilla)
            @elseif($fiftysix->q56_type_of_meeting==4)
            Facilitation of CTC Members (District)
            @elseif($fiftysix->q56_type_of_meeting==5)
            Facilitation of Private Sector
            @elseif($fiftysix->q56_type_of_meeting==6)
            Development Partners
            @elseif($fiftysix->q56_type_of_meeting==7)
            Networking Meeting
            @elseif($fiftysix->q56_type_of_meeting==8)
            Workshop/Conference/Seminar/Meeting
            @elseif($fiftysix->q56_type_of_meeting==9)
            MoU
            @elseif($fiftysix->q56_type_of_meeting==10)
            Meeting of DLAC (District)
            @elseif($fiftysix->q56_type_of_meeting==11)
            Meeting of DLAC (Upazilla)
            @elseif($fiftysix->q56_type_of_meeting==12)
            Number of Girl-participants	
            @elseif($fiftysix->q56_type_of_meeting==13)
            Referral of VoTs by CTC for assistance
            @elseif($fiftysix->q56_type_of_meeting==14)
            Total Number of Referral
            @elseif($fiftysix->q56_type_of_meeting==15)
            Total number of VoTs referred
            @elseif($fiftysix->q56_type_of_meeting==16)
            Number of Male VoTs
            @elseif($fiftysix->q56_type_of_meeting==17)
            Number of Female VoTs
            @elseif($fiftysix->q56_type_of_meeting==18)
            Number of 3RD G VoTs
            @elseif($fiftysix->q56_type_of_meeting==19)
            Number of Boy-VoTs			
            @elseif($fiftysix->q56_type_of_meeting==20)
            Number of Girl-VoTs		
            @elseif($fiftysix->q56_type_of_meeting==21)
            Direct Livelihood/Financial Assistance to VoTs
            @elseif($fiftysix->q56_type_of_meeting==22)
            Total number of VoTs supported
            @elseif($fiftysix->q56_type_of_meeting==23)
            Total number of VoTs supported
            @elseif($fiftysix->q56_type_of_meeting==24)
            Number of Male VoTs
            @elseif($fiftysix->q56_type_of_meeting==25)
            Number of Female VoTs
            @elseif($fiftysix->q56_type_of_meeting==26)
            Number of 3RD G VoTs
            @elseif($fiftysix->q56_type_of_meeting==27)
            Number of Boy-VoTs		
            @elseif($fiftysix->q56_type_of_meeting==28)
            Number of Girl-VoTs	
            @elseif($fiftysix->q56_type_of_meeting==29)
            Case monitoring by CTC
            @elseif($fiftysix->q56_type_of_meeting==30)
            Total Number TIP cases monitored
            @elseif($fiftysix->q56_type_of_meeting==31)
            Total number of VoTs’ case monitored
            @elseif($fiftysix->q56_type_of_meeting==32)
            Number of Male VoTs’ case monitored	
            @elseif($fiftysix->q56_type_of_meeting==33)
            Number of Female VoTs’ case monitored
            @elseif($fiftysix->q56_type_of_meeting==34)
            Number of 3RD G VoTs’ case monitored
            @elseif($fiftysix->q56_type_of_meeting==35)
            Number of Boy- VoTs’ case monitored	
            @elseif($fiftysix->q56_type_of_meeting==36)
            Number of Girl- VoTs’ case monitored	
            @elseif($fiftysix->q56_type_of_meeting==37)
            Resource Mobilization	
            @elseif($fiftysix->q56_type_of_meeting==38)
            Total resource mobilized (BDT)	
            @elseif($fiftysix->q56_type_of_meeting==39)
            Total Expenditure (BDT)		
            @elseif($fiftysix->q56_type_of_meeting==40)
            Source of fund	
            @elseif($fiftysix->q56_type_of_meeting==41)
            Attach/ Upload
            @endif  
                </th>
              



                <td>{{$fiftysix->q56_union}}</td>
                <td>{{$fiftysix->q56_upazila}}  </td>
                <td>{{$fiftysix->q56_district}}  </td>
                <td>{{$fiftysix->q56_total}}  </td>
              </tr>
              @endforeach
             
            </tbody>
          </table>
        
      
        </div>
      </div>
    </div>
    @endif