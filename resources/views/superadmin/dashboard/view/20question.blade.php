@if(Auth::user()->can('20.question'))
<div class="col-md-12 question20">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">20.Did the government provide anti-trafficking training to its nationals deployed
        abroad on
        peacekeeping or other similar missions?</h3>

      <div class="card-tools">
        <button id="q20-dashboard-data-view" type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    @php
    $counties=DB::table('countries')->get();
    @endphp

    <div class="card-body"> 
    
          
     
 
    <a style="margin:5px;" href="{{url('q20-pdf-view')}}" target="_blank" class="btn btn-info float-right">PDF Dawnload</a>
  
      <table class="table table-bordered text-center" id="q20_individual_activities">
        <thead class="">
          <tr>
            <th rowspan="2" style="text-align: center;">Country where
              posted</th>
            <th rowspan="2">Description</th>
            <th colspan="10">Coverage</th>

          </tr>
          <tr>
            <th colspan="2"></th>
            <th colspan="2">Men</th>
            <th colspan="2">Women</th>
            <th colspan="2">3rd G</th>
            <th colspan="2">Total Adult</th>
          </tr>
          <!-- <tr>
            <td></td>
            <td></td>
            <td id="level1_total_men"></td>
            <td id="totalLevel1MenPercentage"></td>
            <td id="level1_total_women"></td>
            <td id="totalLevel1WoMenPercentage"></td>
            <td id="level1_total_3rdg"></td>
            <td id="totalLevel13rdgPercentage"></td>
            <td id="total_adult_level1"></td>
            <td id="totalLevel1Row"></td>

          </tr>
          <tr>

            <td> </td>
            <td></td>
            <td id="level2_total_men"></td>
            <td id="totalLevel2MenPercentage"></td>
            <td id="level2_total_women"></td>
            <td id="totalLevel2WoMenPercentage"></td>
            <td id="level2_total_3rdg"></td>
            <td id="totalLevel23rdgPercentage"></td>
            <td id="total_adult_level2"></td>
            <td id="totalLevel2Row"></td>
          </tr>

          <tr>


            <td> </td>
            <td></td>
            <td id="level3_total_men"></td>
            <td id="totalLevel3MenPercentage"></td>
            <td id="level3_total_women"></td>
            <td id="totalLevel3WoMenPercentage"></td>
            <td id="level3_total_3rdg"></td>
            <td id="totalLevel33rdgPercentage"></td>
            <td id="total_adult_level3"></td>
            <td id="totalLevel3Row"></td>
          </tr>

          <tr>


            <td> </td>
            <td></td>
            <td id="level4_total_men"></td>
            <td id="totalLevel4MenPercentage"></td>
            <td id="level4_total_women"></td>
            <td id="totalLevel4WoMenPercentage"></td>
            <td id="level4_total_3rdg"></td>
            <td id="totalLevel43rdgPercentage"></td>
            <td id="total_adult_level4"></td>
            <td id="totalLevel4Row"></td>
          </tr>


          <tr>

            <th >
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"></div>
            </th>

            <td></td>
            <td id="level5_total_men"></td>
            <td id="totalLevel5MenPercentage"></td>
            <td id="level5_total_women"></td>
            <td id="totalLevel5WoMenPercentage"></td>
            <td id="level5_total_3rdg"></td>
            <td id="totalLevel53rdgPercentage"></td>
            <td id="total_adult_level5"></td>
            <td id="totalLevel5Row"></td>
          </tr>


          <tr>

            <th >
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner">  </div>
            </th>

            <td></td>
            <td id="level6_total_men"></td>
            <td id="totalLevel6MenPercentage"></td>
            <td id="level6_total_women"></td>
            <td id="totalLevel6WoMenPercentage"></td>
            <td id="level6_total_3rdg"></td>
            <td id="totalLevel63rdgPercentage"></td>
            <td id="total_adult_level6"></td>
            <td id="totalLevel6Row"></td>
          </tr>

          <tr>

            <th>
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner">  </div>
            </th>

            <td></td>
            <td id="level7_total_men"></td>
            <td id="totalLevel7MenPercentage"></td>
            <td id="level7_total_women"></td>
            <td id="totalLevel7WoMenPercentage"></td>
            <td id="level7_total_3rdg"></td>
            <td id="totalLevel73rdgPercentage"></td>
            <td id="total_adult_level7"></td>
            <td id="totalLevel7Row"></td>
          </tr>

          <tr>
            <th >
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner">  </div>
            </th>
            <td></td>
            <td id="level8_total_men"></td>
            <td id="totalLevel8MenPercentage"></td>
            <td id="level8_total_women"></td>
            <td id="totalLevel8WoMenPercentage"></td>
            <td id="level8_total_3rdg"></td>
            <td id="totalLevel83rdgPercentage"></td>
            <td id="total_adult_level8"></td>
            <td id="totalLevel8Row"></td>
          </tr>

          <tr>
            <td>Total</td>
            <td></td>
            <td id="totalmengrosstotalss"></td>
            <td id="totalNewaMenPercentage"></td>
            <td id="totalwomengrosstotalss"></td>
            <td id="totalNewaWoMenPercentage"></td>
            <td id="total3rdggrosstotalss"></td>
            <td id="totalNewa3rdgPercentage"></td>
            <td id="totalAdultggrosstotalss"></td>
            <td id="totalAdultPercentagess"></td>

          </tr> -->
        </thead>
        <tbody></tbody>


      </table>
      <br><br>
      <table class="table table-bordered text-center" id="q20_all_participants">
        <thead class="">
          <tr>
            <th rowspan="2" style="text-align: center;">Country where
              posted</th>
            <th rowspan="2">Description</th>
            <th colspan="10">Coverage</th>

          </tr>
          <tr>
            <th colspan="2"></th>
            <th colspan="2">Men</th>
            <th colspan="2">Women</th>
            <th colspan="2">3rd G</th>
            <th colspan="2">Total Adult</th>
          </tr>
          <!-- <tr>
            <td> </td>
            <td></td>
            <td id="level1_total_mener"></td>
            <td id="totalLevel1MenPercentageer"></td>
            <td id="level1_total_womener"></td>
            <td id="totalLevel1WoMenPercentageer"></td>
            <td id="level1_total_3rdger"></td>
            <td id="totalLevel13rdgPercentageer"></td>
            <td id="total_adult_level1er"></td>
            <td id="totalLevel1Rower"></td>

          </tr>
          <tr>

            <td> </td>
            <td></td>
            <td id="level2_total_mener"></td>
            <td id="totalLevel2MenPercentageer"></td>
            <td id="level2_total_womener"></td>
            <td id="totalLevel2WoMenPercentageer"></td>
            <td id="level2_total_3rdger"></td>
            <td id="totalLevel23rdgPercentageer"></td>
            <td id="total_adult_level2er"></td>
            <td id="totalLevel2Rower"></td>
          </tr>

          <tr>


            <td> </td>
            <td></td>
            <td id="level3_total_mener"></td>
            <td id="totalLevel3MenPercentageer"></td>
            <td id="level3_total_womener"></td>
            <td id="totalLevel3WoMenPercentageer"></td>
            <td id="level3_total_3rdger"></td>
            <td id="totalLevel33rdgPercentageer"></td>
            <td id="total_adult_level3er"></td>
            <td id="totalLevel3Rower"></td>
          </tr>

          <tr>


            <td> </td>
            <td></td>
            <td id="level4_total_mener"></td>
            <td id="totalLevel4MenPercentageer"></td>
            <td id="level4_total_womener"></td>
            <td id="totalLevel4WoMenPercentageer"></td>
            <td id="level4_total_3rdger"></td>
            <td id="totalLevel43rdgPercentageer"></td>
            <td id="total_adult_level4er"></td>
            <td id="totalLevel4Rower"></td>
          </tr>


          <tr>

            <th >
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner">  </div>
            </th>

            <td></td>
            <td id="level5_total_mener"></td>
            <td id="totalLevel5MenPercentageer"></td>
            <td id="level5_total_womener"></td>
            <td id="totalLevel5WoMenPercentageer"> </td>
            <td id="level5_total_3rdger"></td>
            <td id="totalLevel53rdgPercentageer"></td>
            <td id="total_adult_level5er"></td>
            <td id="totalLevel5Rower"></td>
          </tr>


          <tr>

            <th >
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner">  </div>
            </th>

            <td></td>
            <td id="level6_total_mener"></td>
            <td id="totalLevel6MenPercentageer"></td>
            <td id="level6_total_womener"></td>
            <td id="totalLevel6WoMenPercentageer"></td>
            <td id="level6_total_3rdger"></td>
            <td id="totalLevel63rdgPercentageer"></td>
            <td id="total_adult_level6er"></td>
            <td id="totalLevel6Rower"></td>
          </tr>

          <tr>

            <th>
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner">  </div>
            </th>

            <td></td>
            <td id="level7_total_mener"></td>
            <td id="totalLevel7MenPercentageer"></td>
            <td id="level7_total_womener"></td>
            <td id="totalLevel7WoMenPercentageer"></td>
            <td id="level7_total_3rdger"></td>
            <td id="totalLevel73rdgPercentageer"></td>
            <td id="total_adult_level7er"></td>
            <td id="totalLevel7Rower"></td>
          </tr>

          <tr>
            <th >
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner">  </div>
            </th>
            <td></td>
            <td id="level8_total_mener"></td>
            <td id="totalLevel8MenPercentageer"></td>
            <td id="level8_total_womener"></td>
            <td id="totalLevel8WoMenPercentageer"></td>
            <td id="level8_total_3rdger"></td>
            <td id="totalLevel83rdgPercentageer"></td>
            <td id="total_adult_level8er"></td>
            <td id="totalLevel8Rower"></td>
          </tr>

          <tr>
            <td>Total</td>
            <td></td>
            <td id="totalmengrosstotaler"></td>
            <td id="totalMenPercentageer"></td>
            <td id="totalwomengrosstotaler"></td>
            <td id="totalWoMenPercentageer"></td>
            <td id="total3rdggrosstotaler"></td>
            <td id="total3rdgPercentageer"></td>
            <td id="totalAdultggrosstotaler"></td>
            <td id="totalAdultPercentageer"></td>

          </tr> -->
        </thead>
<tbody></tbody>

      </table>
       
    </div>
  </div>
</div>  
@endif