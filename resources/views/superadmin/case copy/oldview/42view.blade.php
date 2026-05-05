@if(Auth::user()->can('42.question'))
<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">42.Conviction of Internal Trafficking by Division</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <h2>Conviction of Internal Trafficking by Division</h2>
      <!-- <h3>Total number of persons convicted of trafficking for Sexual exploitation</h3> -->
      <input type="hidden" name="q42_type[]" value="1">
      <table id="addRowQ42Sexual" class="table table-bordered text-center">
        <thead>
          <tr>
            <th>Division</th>
            <th>Male</th>
            <th>Female</th>
            <th>3rd Gender </th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
        @foreach($case->fortytwo as $fortytwo)

              <tr>

                <td colspan="10">
                  @if($fortytwo->	q42_type==1)
                  Total number of persons convicted of trafficking for Sexual exploitation
                  @elseif($fortytwo->	q42_type==2)
                  Total number of persons convicted for labour Trafficking
                  @elseif($fortytwo->	q42_type==3)
                  Total number of persons convicted of trafficking for International Trafficking
                  @endif  
                </td>
              


              </tr>

              <tr>
              <td>
                  @if ($fortytwo->q42_sexual_exploitation_division_id == 1)
                  Barisal
                @elseif ($fortytwo->q42_sexual_exploitation_division_id == 2)
                Chattogram
                @elseif ($fortytwo->q42_sexual_exploitation_division_id == 3)
                Dhaka
                @elseif ($fortytwo->q42_sexual_exploitation_division_id == 4)
                Khulna
                @elseif ($fortytwo->q42_sexual_exploitation_division_id == 5)
                Mymensingh
                @elseif ($fortytwo->q42_sexual_exploitation_division_id == 6)
                Rajshahi
                @elseif ($fortytwo->q42_sexual_exploitation_division_id == 7)
                Sylhet
                @endif
                  
                </td>
               
                <td>
              {{$fortytwo->q42_sexual_men}}
              </td> 
              <td>
              {{$fortytwo->q42_sexual_women}}
              </td>
              <td>
              {{$fortytwo->q42_sexual_third_gender}}
              </td> 
              <td>
              {{$fortytwo->q42_sexual_total}}
              </td>

              </tr>
              @endforeach
          <!-- <tr>
            <td>
              <select name="q42_sexual_exploitation_division_id[]" id="" class="form-control q42_sexual_exploitation_division_id">
                <option value="0">--Select Division--</option>
                <option value="1">Barisal</option>
                <option value="2">Chattogram</option>
                <option value="3">Dhaka</option>
                <option value="4">Khulna</option>
                <option value="5">Mymensingh</option>
                <option value="6">Rajshahi</option>
                <option value="7">Sylhet</option>
                </select>
                  
              </td>
            <td><input type="text" name="q42_sexual_men[]" id="q42_sexual_exploit_male_1" class="form-control q42_sexual_exploit_male" for="1"></td>
            <td><input type="text" name="q42_sexual_women[]" id="q42_sexual_exploit_female_1" class="form-control q42_sexual_exploit_female" for="1"></td>
            <td><input type="text" name="q42_sexual_third_gender[]" id="q42_sexual_exploit_third_gender_1" class="form-control q42_sexual_exploit_third_gender" for="1"></td>
            <td><input type="text" name="q42_sexual_total[]" id="q42_sexual_exploit_total_1" class="form-control q42_sexual_exploit_total" readonly="true" for="1"></td>
            <td><button id="addRowDatasQ42Sexual" type="button" class="btn btn-primary">+</i></button></td>
          
          </tr> -->

        
        </tbody>
      </table>
</div>
      
      <!-- <div class="card-body">
      <h3>Total number of persons convicted for labour Trafficking</h3>
      <input type="hidden" name="q42_type[]" value="2">
      <table id="addRowQ42Labour" class="table table-bordered text-center">
        <thead>
          <tr>
            <th>Division</th>
            <th>Male</th>
            <th>Female</th>
            <th>3rd G</th>
            <th>Total</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <select name="q42_sexual_exploitation_division_id[]" id="" class="form-control q42_labour_traffick_division_id">
                <option value="">--Select Division--</option>
                <option value="1">Barisal</option>
                <option value="2">Chattogram</option>
                <option value="3">Dhaka</option>
                <option value="4">Khulna</option>
                <option value="5">Mymensingh</option>
                <option value="6">Rajshahi</option>
                <option value="7">Sylhet</option>
                </select>
            </td>
            <td><input type="text" name="q42_sexual_men[]" id="q42_labour_traffick_male_1" class="form-control q42_labour_traffick_male" for="1"></td>
            <td><input type="text" name="q42_sexual_women[]" id="q42_labour_traffick_female_1" class="form-control q42_labour_traffick_female" for="1"></td>
            <td><input type="text" name="q42_sexual_third_gender[]" id="q42_labour_traffick_third_gender_1" class="form-control q42_labour_traffick_third_gender" for="1"></td>
            <td><input type="text" name="q42_sexual_total[]" id="q42_labour_traffick_total_1" class="form-control q42_labour_traffick_total" readonly="true" for="1"></td>
            <td><button id="addRowDatasQ42Labour" type="button" class="btn btn-primary">+</i></button></td>
          </tr>

        
        </tbody>
      </table>
</div>
<div class="card-body">
      <h3>Total number of persons convicted of trafficking for International Trafficking</h3>
      <input type="hidden" name="q42_type[]" value="3">
      <table id="addRowQ42International" class="table table-bordered text-center">
        <thead>
          <tr>
            <th>Division</th>
            <th>Male</th>
            <th>Female</th>
            <th>3rd G</th>
            <th>Total</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <select name="q42_sexual_exploitation_division_id[]" id="" class="form-control q42_international_traffick_division_id">
                <option value="">--Select Division--</option>
                <option value="1">Barisal</option>
                <option value="2">Chattogram</option>
                <option value="3">Dhaka</option>
                <option value="4">Khulna</option>
                <option value="5">Mymensingh</option>
                <option value="6">Rajshahi</option>
                <option value="7">Sylhet</option>
              </select>
            </td>
            <td><input type="text" name="q42_sexual_men[]" id="q42_international_traffick_male_1" class="form-control q42_international_traffick_male" for="1"></td>
            <td><input type="text" name="q42_sexual_women[]" id="q42_international_traffick_female_1" class="form-control q42_international_traffick_female" for="1"></td>
            <td><input type="text" name="q42_sexual_third_gender[]" id="q42_international_traffick_third_gender_1" class="form-control q42_international_traffick_third_gender" for="1"></td>
            <td><input type="text" name="q42_sexual_total[]" id="q42_international_traffick_total_1" class="form-control q42_international_traffick_total" readonly="true" for="1"></td>
            <td><button id="addRowDatasQ42International" type="button" class="btn btn-primary">+</i></button></td>
          </tr>

         
        </tbody>
      </table>
</div> -->
    </div>
  </div>
</div>

@endif
