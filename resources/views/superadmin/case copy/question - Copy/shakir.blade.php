@if(Auth::user()->can('31.question'))
<div class="col-md-12 question31">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">31.Were foreign victims legally entitled to the same benefits as host country
        nationals?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="form-check">
        <input type="radio" id="radioThirty1" class="thirty_one_status" name="thirty_one_status" checked value="yes">
        <label for="radioThirty1">
          Yes
        </label>
      </div>
      <div class="form-check">
        <input type="radio" id="radioThirty2" class="thirty_one_status" name="thirty_one_status" value="no">
        <label for="radioThirty2">
          No
        </label>
      </div>

      <div class="form-check">
        <input type="radio" id="radioThirty3" class="thirty_one_status" name="thirty_one_status" value="others">
        <label for="radioThirty3">
          Others
        </label>
      </div>
      <div id="31_question_view">
      <table class="table table-bordered text-center">
        <thead class="">
          <tr>
            <th rowspan="2" style="text-align: center; margin: bottom 45%;">Types of Hotlines</th>
            <th rowspan="2">Hotline number</th>
            <th colspan="6">Coverage</th>
          </tr>
          <tr>
            <th>Men</th>
            <th>Women</th>
            <th>3rd G</th>
            <th>Boy</th>
            <th>Girls</th>
            <th>Total</th>
          </tr>
          <tr>
            <td colspan="8" text-align:"center">Internal Trafficking</td>



          </tr>
          <tr>
            <td><select name="" id="" class="form-control">
              <option value="Government run/free">Government run/free</option>
              <option value="Government supported">Government supported</option>
              <option value="NGO run">NGO run</option>
              </select></td>

            <td><input type="text" name="thirty_one_two" id="" class="form-control"></td>
            <td><input type="text" name="thirty_one_three" id="" class="form-control question31RowMen question31Col1"></td>
            <td><input type="text" name="nine_three" id="" class="form-control question31RowWomen question31Col1"></td>
            <td><input type="text" name="thirty_one_four" id="" class="form-control question31Row3rdGender question31Col1"></td>
            <td><input type="text" name="thirty_one_five" id="" class="form-control question31RowBoys question31Col1"></td>
            <td><input type="text" name="thirty_one_six" id="" class="form-control question31RowGirls question31Col1"></td>
            <td><input type="text" name="thirty_one_seven" id="question31Col1" class="form-control q31gTotal" readonly="true"> </td>
          </tr>
          <tr>
            <td><select name="thirty_one_night" id="" class="form-control">
              <option value="Government run/free">Government run/free</option>
              <option value="Government supported">Government supported</option>
              <option value="NGO run">NGO run</option>
              </select></td>

            <td><input type="text" name="thirty_one_ten" id="" class="form-control "></td>
            <td><input type="text" name="thirty_one_eleven" id="" class="form-control question31RowMen question31Col2"></td>
            <td><input type="text" name="thirty_one_twelve" id="" class="form-control question31RowWomen question31Col2"></td>
            <td><input type="text" name="thirty_one_thirteen" id="" class="form-control question31Row3rdGender question31Col2"></td>
            <td><input type="text" name="thirty_one_fourteen" id="" class="form-control question31RowBoys question31Col2"></td>
            <td><input type="text" name="thirty_one_fifteen" id="" class="form-control question31RowGirls question31Col2"></td>
            <td><input type="text" name="thirty_one_sixteen" id="question31Col2" class="form-control q31gTotal" readonly="true"></td>
          </tr>

          <tr>
            <td>
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" class="form-control" width="50%"> </div>

            </td>

            <td><input type="text" name="thirty_one_other" id="" class="form-control"></td>
            <td><input type="text" name="thirty_one_seventeen" id="" class="form-control question31RowMen question31Col3"></td>
            <td><input type="text" name="thirty_one_eighteen" id="" class="form-control question31RowWomen question31Col3"></td>
            <td><input type="text" name="thirty_one_nineteen" id="" class="form-control question31Row3rdGender question31Col3"></td>
            <td><input type="text" name="thirty_one_twenty" id="" class="form-control question31RowBoys question31Col3"></td>
            <td><input type="text" name="thirty_one_twenty_one" id="" class="form-control question31RowGirls question31Col3"></td>
            <td><input type="text" name="thirty_one_twenty_two" id="question31Col3" class="form-control q31gTotal" readonly="true"></td>
          </tr>

          <tr>
            <td colspan="2">Total</td>

            <td><input type="text" name="thirty_one_twenty_three" id="q31MenTotal" class="form-control menTotal" readonly="true"></td>
            <td><input type="text" name="thirty_one_twenty_four" id="q31WomenTotal" class="form-control womenTotal" readonly="true"></td>
            <td><input type="text" name="thirty_one_twenty_five" id="q31TrdGTotal" class="form-control 3rdgTotal" readonly="true"></td>
            <td><input type="text" name="thirty_one_twenty_six" id="q31BoysTotal" class="form-control boysTotal" readonly="true"></td>
            <td><input type="text" name="thirty_one_twenty_seven" id="q31GirlsTotal" class="form-control girlsTotal" readonly="true"></td>
            <td><input type="text" name="thirty_one_twenty_eight" id="q31inTotal" class="form-control allTotal" readonly="true"></td>

          </tr>

          <tr>
            <th colspan="8">International Trafficking</th>

          </tr>
          <tr>
            <td><select name="thirty_one_twenty_night" id="" class="form-control">
              <option value="Government run/free">Government run/free</option>
              <option value="Government supported">Government supported</option>
              <option value="NGO run">NGO run</option>
              </select></td>

            <td><input type="text" name="thirty_one_twenty_four" id="" class="form-control"></td>
            <td><input type="text" name="thirty_one_twenty_five" id="" class="form-control question31IntMenRow question31IntCol1"></td>
            <td><input type="text" name="thirty_one_twenty_six" id="" class="form-control question31IntWomenRow question31IntCol1"></td>
            <td><input type="text" name="thirty_one_twenty_seven" id="" class="form-control question31Int3rdGRow  question31IntCol1"></td>
            <td><input type="text" name="thirty_one_twenty_eight" id="" class="form-control question31IntBoysRow question31IntCol1"></td>
            <td><input type="text" name="thirty_one_twenty_night" id="" class="form-control question31IntGirlsRow question31IntCol1"></td>
            <td><input type="text" name="thirty_one2_one" id="question31IntCol1" class="form-control q31IntTotal" readonly="true"> </td>
          </tr>
          <tr>
            <td><select name="thirty_one2_two" id="" class="form-control">
              <option value="Government run/free">Government run/free</option>
              <option value="Government supported">Government supported</option>
              <option value="NGO run">NGO run</option>
              </select></td>

            <td><input type="text" name="thirty_one2_three" id="" class="form-control "></td>
            <td><input type="text" name="thirty_one2_four" id="" class="form-control question31IntMenRow form-control question31IntCol2 question31IntCol2"></td>
            <td><input type="text" name="thirty_one2_five" id="" class="form-control question31IntWomenRow question31IntCol2"></td>
            <td><input type="text" name="thirty_one2_six" id="" class="form-control question31Int3rdGRow question31IntCol2"></td>
            <td><input type="text" name="thirty_one2_seven" id="" class="form-control question31IntBoysRow question31IntCol2"></td>
            <td><input type="text" name="thirty_one2_eight" id="" class="form-control question31IntGirlsRow question31IntCol2"></td>
            <!-- <td><input type="text" name="" id="" class="form-control question31IntCol2"></td> -->
            <td><input type="text" name="" id="question31IntCol2" class="form-control q31IntTotal" readonly="true"> </td>
          </tr>

          <tr>
            <td>
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" name="thirty_one2_other" class="form-control" width="100%"> </div>

            </td>

            <td><input type="text" name="thirty_one2_ten" id="" class="form-control"></td>
            <td><input type="text" name="thirty_one2_eleven" id="" class="form-control question31IntMenRow question31IntCol3"></td>
            <td><input type="text" name="thirty_one2_twelve" id="" class="form-control question31IntWomenRow question31IntCol3"></td>
            <td><input type="text" name="thirty_one2_thirteen" id="" class="form-control question31Int3rdGRow question31IntCol3"></td>
            <td><input type="text" name="thirty_one2_fourteen" id="" class="form-control question31IntBoysRow question31IntCol3"></td>
            <td><input type="text" name="thirty_one2_fifteen" id="" class="form-control  question31IntGirlsRow question31IntCol3"></td>
            <td><input type="text" name="thirty_one2_sixteen" id="question31IntCol3" class="form-control q31IntTotal" readonly="true"></td>
          </tr>
          <tr>
            <td colspan="2">Total</td>

            <td><input type="text" name="thirty_one2_seventeen" id="question31IntMenRowTotal" class="form-control menTotal" readonly="true"></td>
            <td><input type="text" name="thirty_one2_eighteen" id="question31IntWomenRowTotal" class="form-control womenTotal" readonly="true"></td>
            <td><input type="text" name="thirty_one2_nineteen" id="question31Int3rdGRowTotal" class="form-control 3rdgTotal" readonly="true"></td>
            <td><input type="text" name="thirty_one2_twenty" id="question31IntBoysRowTotal" class="form-control boysTotal" readonly="true"></td>
            <td><input type="text" name="thirty_one2_twenty_one" id="question31IntGirlsRowTotal" class="form-control girlsTotal" readonly="true"></td>
            <td><input type="text" name="thirty_one2_twenty_two" id="q31IntTotal" class="form-control allTotal" readonly="true"></td>

          </tr>
          <tr>
            <th colspan="8">Combined</th>
          </tr>

          <tr>
            <td colspan="2"> Combined Total</td>
            <td><input type="text" name="thirty_one2_twenty_three" id="comMenTotal" class="form-control" readonly="true"></td>
            <td><input type="text" name="thirty_one2_twenty_four" id="comWomenTotal"  class="form-control" readonly="true"></td>
            <td><input type="text" name="thirty_one2_twenty_five" id="com3rdGTotal"  class="form-control" readonly="true"></td>
            <td><input type="text" name="thirty_one2_twenty_six" id="comBoysTotal"  class="form-control" readonly="true"></td>
            <td><input type="text" name="thirty_one2_twenty_seven"id="comGirlsTotal" class="form-control" readonly="true"></td>
            <td><input type="text" name="thirty_one2_twenty_eight" id="grossTotal" class="form-control" readonly="true"></td>

          </tr>
        </thead>


      </table>
     
    </div>
    </div>
  </div>
</div>
      @endif