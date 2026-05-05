@if(Auth::user()->can('24.question'))
<div class="col-md-12 question24">
    <div class="card card-outline collapsed-card">
      <div class="card-header">
        <h3 class="card-title">24.Actors having changes in formal/standard procedures for victim referral to protection services</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
      
      <div class="card-body">
        <h5>Number of VoT Referred by Different Actors
      </h5>
      <table class="table table-white">
        <tdead>
          <tr>
            <td rowspan="2" scope="col">Category</td>
            
            <td colspan="17">Coverage/Response</td>
          </tr>

          <tr>
            <td scope="col" colspan="2">M</td>
            <td scope="col" colspan="2">W</td>
            <td scope="col" colspan="2">3rd G</td>
            <td scope="col" colspan="2">Total Adult</td>
            <td scope="col"  colspan="2">Boys</td>
            <td scope="col"  colspan="2">Girls</td>
            <td scope="col"  colspan="2">Total children</td>
            <td scope="col" colspan="2">Total </td>
      
           
           
          </tr>
          <tr>
            <td scope="col">Police HQ </td>

            
              <td id="policy_total_men"></td>
              <td id="totalPolicyMenPercentage"></td>
            
           
            <td id="policy_total_women"></td>
            <td id="totalPolicyWoMenPercentage"></td>
           
            
            
            <td id="policy_total_3rd"></td>
              <td id="totalPolicy3rdgPercentage"></td>
        
              <td id="total_adult_policy_meeting"></td>
              <td id="totalPolicyPercentage"></td>
            
              <td id="policy_total_boys"></td>
              <td id="totalPolicyBoysPercentage"></td>

              
              <td id="policy_total_girls"></td>
              <td id="totalPolicyGirlsPercentage"></td>
              <td id="total_child_policy_meeting"></td>
              <td id="totalChildPolicyPercentage"></td>
              <td id="total_policy_meeting"></td>
              <td id="totalPoliceHqPercentage"></td>
              
          </tr>

          <tr>
            <td scope="col">BGB</td>

            
              <td id="bgb_total_men"></td>
              <td id="totalBGBMenPercentage"></td>
            
           
            <td id="bgb_total_women"></td>
            <td id="totalBGBWoMenPercentage"></td>
           
            
            
            <td id="bgb_total_3rd"></td>
              <td id="totalBGB3rdgPercentage"></td>
        
              <td id="total_adult_bgb"></td>
              <td id="totalBGBPercentaget"></td>
            
              <td id="bgb_total_boys"></td>
              <td id="totalBGBBoysPercentage"></td>

              
              <td id="bgb_total_girls"></td>
              <td id="totalBGBGirlsPercentage"></td>
              <td id="total_child_bgb"></td>
              <td id="totalChildBGBPercentage"></td>
              <td id="total_bgb_meeting"></td>
              <td id="totalBgbPercentage"></td>
              
          </tr>

          <td scope="col">Total</td>

            
<td id="totalmen"></td>
<td id="totalRowMenPercentage"></td>


<td id="totalwomen"></td>
<td id="totalRowWoMenPercentage"></td>



<td id="total3rdg"></td>
<td id="totalRow3rdPercentage"></td>

<td id="totaladultshakir"></td>
<td id="toatlAdulPercentage"></td>

<td id="totalboys"></td>
<td id="totalRowBoysPercentage"></td>


<td id="totalgirls"></td>
<td id="totalRowGirlsPercentage"></td>
<td id="totachild"></td>
<td id="totalChildPercentage"></td>
<td id="totalcount"></td>
<td id="totalactorsPercentages"></td>

</tr>
     

      


   
        </tdead>
      </table>
      <br>
      
<h5>Percentage Distribution of VoTs by Gender on Total VoT Referred by all Actors
</h5>
<table class="table table-white">
        <tdead>
          <tr>
            <td rowspan="2" scope="col">Category</td>
            <td colspan="17">Coverage/Response</td>
          </tr>

          <tr>
            <td scope="col" colspan="2">M</td>
            <td scope="col" colspan="2">W</td>
            <td scope="col" colspan="2">3rd G</td>
            <td scope="col" colspan="2">Total Adult</td>
            <td scope="col"  colspan="2">Boys</td>
            <td scope="col"  colspan="2">Girls</td>
            <td scope="col"  colspan="2">Total children</td>
            <td scope="col" colspan="2">Total </td>
      
           
           
          </tr>
          <tr>
            <td scope="col">Police HQ </td>

            
              <td id="policy_total_menac"></td>
              <td id="totalPolicyMenPercentageac"></td>
            
           
            <td id="policy_total_womenac"></td>
            <td id="totalPolicyWoMenPercentageac"></td>
           
            
            
            <td id="policy_total_3rdac"></td>
              <td id="totalPolicy3rdgPercentageac"></td>
        
              <td id="total_adult_policy_meetingac"></td>
              <td id="totalPolicyPercentageac"></td>
            
              <td id="policy_total_boysac"></td>
              <td id="totalPolicyBoysPercentageac"></td>

              
              <td id="policy_total_girlsac"></td>
              <td id="totalPolicyGirlsPercentageac"></td>
              <td id="total_child_policy_meetingac"></td>
              <td id="totalChildPolicyPercentageac"></td>
              <td id="total_policy_meetingac"></td>
              <td id="totalPoliceHqPercentageac"></td>
              
          </tr>

          <tr>
            <td scope="col">BGB</td>

            
              <td id="bgb_total_menac"></td>
              <td id="totalBGBMenPercentageac"></td>
            
           
            <td id="bgb_total_womenac"></td>
            <td id="totalBGBWoMenPercentageac"></td>
           
            
            
            <td id="bgb_total_3rdac"></td>
              <td id="totalBGB3rdgPercentageac"></td>
        
              <td id="total_adult_bgbac"></td>
              <td id="totalBGBPercentagetac"></td>
            
              <td id="bgb_total_boysac"></td>
              <td id="totalBGBBoysPercentageac"></td>

              
              <td id="bgb_total_girlsac"></td>
              <td id="totalBGBGirlsPercentageac"></td>
              <td id="total_child_bgbac"></td>
              <td id="totalChildBGBPercentageac"></td>
              <td id="total_bgb_meetingac"></td>
              <td id="totalBgbPercentageac"></td>
              
          </tr>

          <td scope="col">Total</td>

            
<td id="totalmenac"></td>
<td id="totalRowMenPercentageac"></td>


<td id="totalwomenac"></td>
<td id="totalRowWoMenPercentageac"></td>



<td id="total3rdgac"></td>
<td id="totalRow3rdPercentageac"></td>

<td id="totaladultshakirac"></td>
<td id="toatlAdulPercentageac"></td>

<td id="totalboysac"></td>
<td id="totalRowBoysPercentageac"></td>


<td id="totalgirlsac"></td>
<td id="totalRowGirlsPercentageac"></td>
<td id="totachildac"></td>
<td id="totalChildPercentageac"></td>
<td id="totalcountac"></td>
<td id="totalactorsPercentagesac"></td>

</tr>
     

      


   
        </tdead>
      </table>
      </div>


      
      

     

     

      <!-- pichart section -->
     
      <!-- <div class="card-body">
       <div class="row">
        <div class="col-md-12">

        <div class="col-md-6 col-6">
        <section class="content">
    
            <div class="container-fluid">
            <div class="card card-info">
            <div class="card-header">
            <h3 class="card-title">1.	% of reffered adult VoTs </h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
            </button>
            </div>
            </div>
            <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 504px;" width="1008" height="500" class="chartjs-render-monitor"></canvas>
            </div>

            </div>
            </div>
          
        </section>
        </div>
        <div class="col-md-6 col-6">
        <section class="content">
       
          <div class="container-fluid">
          <div class="card card-success">
          <div class="card-header">
          <h3 class="card-title">2.% of reffered child VoTs   </h3>
          <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
          </button>
          </div>
          </div>
          <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          <canvas id="pieChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 504px;" width="1008" height="500" class="chartjs-render-monitor"></canvas>
          </div>
          </div>
          </div>
         
         </section>
      </div> -->

    <div class="row">
      <div class="col-md-12">
        <div class="col-md-6">h2</div>
        <div class="col-md-6">h3</div>
      </div>
    </div>
     


        </div>
       </div>
        
          
        
      </div>
    </div>
  </div>

  @endif