@if(Auth::user()->can('48.question'))
<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">48.Did the government/your ministry/department/ organization train law enforcement
        and border security officials on anti-trafficking enforcement, policies, and laws? </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">



      <table class="table table-bordered text-center">
        <thead class="">
          <tr>
            <th rowspan="2" style="text-align: center; margin: bottom 45%;">Category of Trainee </th>
            <th rowspan="2">Training Contents </th>
            <th rowspan="2">Number of Training</th>
            <th rowspan="2">Location
            </th>
            <th rowspan="2">Development Partner</th>
            <th colspan="4">Coverage</th>

          </tr>
          <tr>
            <th>Men</th>
            <th>Women</th>
            <th>3rd G</th>
            <th>Total</th>

          </tr>
          <tr>
            <td rowspan="2">Police</td>
            <td> <select name="" id="" class="form-control">
            <option>--Select Country--</option>
                <option value="PSHT">PSHT</option>
                <option value="PSHT Act 2012">PSHT Act 2012</option>
                <option value="Rule of PSHT Act">Rule of PSHT Act</option>
                <option value="TIP Investigation">TIP Investigation</option>
                <option value="Victim Withess Protection">Victim Withess Protection</option>
                <option value="TIP and MLA">TIP and MLA</option>
                <option value="Role of Police">Role of Police </option>
                <option value="NPA">NPA</option>
                <option value="NRM">NRM</option>
                <option value="VoT identification Guideline">VoT identification Guideline</option>
              </select> </td>
            <td> <input type="text" name="" id="" class="form-control"> </td>
            <td> <select name="" id="" class="form-control">
            <option>--Select District--</option>
               @foreach($districs as $distric)
                <option value="">{{$distric->name}}</option>
               

                @endforeach
              </select> </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td><input type="number" name="" id="" class="form-control question48RowMen question48Col1"></td>
            <td><input type="number" name="" id="" class="form-control question48RowWomen question48Col1"></td>
            <td><input type="number" name="" id="" class="form-control question48RowBoys question48Col1"></td>
            <td><input type="text" name="" id="question48Col1"  class="form-control q48Total" readonly></td>
          </tr>
          <tr>
            <td>
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" class="form-control" width="100%"> </div>
            </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
            <option>--Select District--</option>
            @foreach($districs as $distric)
            <option value="">{{$distric->name}}</option>
           

            @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Col2"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Col2"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Col2"></td>
              <td><input type="text" name="" id="question48Col2"  class="form-control q48Total" readonly></td>

          </tr>

          <tr>
            <td rowspan="2">CID</td>
            <td> <select name="" id="" class="form-control">
            <option>--Select Country--</option>
                <option value="PSHT">PSHT</option>
                <option value="PSHT Act 2012">PSHT Act 2012</option>
                <option value="Rule of PSHT Act">Rule of PSHT Act</option>
                <option value="TIP Investigation">TIP Investigation</option>
                <option value="Victim Withess Protection">Victim Withess Protection</option>
                <option value="TIP and MLA">TIP and MLA</option>
                <option value="Role of Police">Role of Police </option>
                <option value="NPA">NPA</option>
                <option value="NRM">NRM</option>
                <option value="VoT identification Guideline">VoT identification Guideline</option>
              </select> </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Col3"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Col3"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Col3"></td>
              <td><input type="text" name="" id="question48Col3"  class="form-control q48Total" readonly></td>
          </tr>
          <tr>
            <td>
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" class="form-control" width="100%"> </div>
            </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Col4"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Col4"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Col4"></td>
              <td><input type="text" name="" id="question48Col4"  class="form-control q48Total" readonly></td> 
             
           

          </tr>
          <tr>
            <td rowspan="2">RAB</td>
            <td> <select name="" id="" class="form-control">
            <option>--Select Country--</option>
                <option value="PSHT">PSHT</option>
                <option value="PSHT Act 2012">PSHT Act 2012</option>
                <option value="Rule of PSHT Act">Rule of PSHT Act</option>
                <option value="TIP Investigation">TIP Investigation</option>
                <option value="Victim Withess Protection">Victim Withess Protection</option>
                <option value="TIP and MLA">TIP and MLA</option>
                <option value="Role of Police">Role of Police </option>
                <option value="NPA">NPA</option>
                <option value="NRM">NRM</option>
                <option value="VoT identification Guideline">VoT identification Guideline</option>
              </select> </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Col5"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Col5"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Col5"></td>
              <td><input type="text" name="" id="question48Col5"  class="form-control q48Total" readonly></td>
          </tr>
          <tr>
            <td>
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" class="form-control" width="100%"> </div>
            </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Col6"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Col6"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Col6"></td>
              <td><input type="text" name="" id="question48Col6"  class="form-control q48Total" readonly></td>

          </tr>
          <tr>
            <td rowspan="2">Ansar</td>
            <td> <select name="" id="" class="form-control">
            <option>--Select Country--</option>
                <option value="PSHT">PSHT</option>
                <option value="PSHT Act 2012">PSHT Act 2012</option>
                <option value="Rule of PSHT Act">Rule of PSHT Act</option>
                <option value="TIP Investigation">TIP Investigation</option>
                <option value="Victim Withess Protection">Victim Withess Protection</option>
                <option value="TIP and MLA">TIP and MLA</option>
                <option value="Role of Police">Role of Police </option>
                <option value="NPA">NPA</option>
                <option value="NRM">NRM</option>
                <option value="VoT identification Guideline">VoT identification Guideline</option>
              </select> </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Col7"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Col7"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Col7"></td>
              <td><input type="text" name="" id="question48Col7"  class="form-control q48Total" readonly></td>
          </tr>
          <tr>
            <td>
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" class="form-control" width="100%"> </div>
            </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Col8"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Col8"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Col8"></td>
              <td><input type="text" name="" id="question48Col8"  class="form-control q48Total" readonly></td>

          </tr>
          <tr>
            <td rowspan="2">VDP</td>
            <td> <select name="" id="" class="form-control">
            <option>--Select Country--</option>
                <option value="PSHT">PSHT</option>
                <option value="PSHT Act 2012">PSHT Act 2012</option>
                <option value="Rule of PSHT Act">Rule of PSHT Act</option>
                <option value="TIP Investigation">TIP Investigation</option>
                <option value="Victim Withess Protection">Victim Withess Protection</option>
                <option value="TIP and MLA">TIP and MLA</option>
                <option value="Role of Police">Role of Police </option>
                <option value="NPA">NPA</option>
                <option value="NRM">NRM</option>
                <option value="VoT identification Guideline">VoT identification Guideline</option>
              </select> </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Col9"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Col9"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Col9"></td>
              <td><input type="text" name="" id="question48Col9"  class="form-control q48Total" readonly></td>
          </tr>
          <tr>
            <td>
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" class="form-control" width="100%"> </div>
            </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Co20"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Co20"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Co20"></td>
              <td><input type="text" name="" id="question48Co20"  class="form-control q48Total" readonly></td>

          </tr>
          <tr>
            <td rowspan="2">Coast Guard</td>
            <td> <select name="" id="" class="form-control">
            <option>--Select Country--</option>
                <option value="PSHT">PSHT</option>
                <option value="PSHT Act 2012">PSHT Act 2012</option>
                <option value="Rule of PSHT Act">Rule of PSHT Act</option>
                <option value="TIP Investigation">TIP Investigation</option>
                <option value="Victim Withess Protection">Victim Withess Protection</option>
                <option value="TIP and MLA">TIP and MLA</option>
                <option value="Role of Police">Role of Police </option>
                <option value="NPA">NPA</option>
                <option value="NRM">NRM</option>
                <option value="VoT identification Guideline">VoT identification Guideline</option>
              </select> </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Co21"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Co21"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Co21"></td>
              <td><input type="text" name="" id="question48Co21"  class="form-control q48Total" readonly></td>
          </tr>
          <tr>
            <td>
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" class="form-control" width="100%"> </div>
            </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Co22"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Co22"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Co22"></td>
              <td><input type="text" name="" id="question48Co22"  class="form-control q48Total" readonly></td>

          </tr>
          <tr>
            <td rowspan="2">BGB</td>
            <td> <select name="" id="" class="form-control">
            <option>--Select Country--</option>
                <option value="PSHT">PSHT</option>
                <option value="PSHT Act 2012">PSHT Act 2012</option>
                <option value="Rule of PSHT Act">Rule of PSHT Act</option>
                <option value="TIP Investigation">TIP Investigation</option>
                <option value="Victim Withess Protection">Victim Withess Protection</option>
                <option value="TIP and MLA">TIP and MLA</option>
                <option value="Role of Police">Role of Police </option>
                <option value="NPA">NPA</option>
                <option value="NRM">NRM</option>
                <option value="VoT identification Guideline">VoT identification Guideline</option>
              </select> </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Co23"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Co23"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Co23"></td>
              <td><input type="text" name="" id="question48Co23"  class="form-control q48Total" readonly></td>
          </tr>
          <tr>
            <td>
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" class="form-control" width="100%"> </div>
            </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Co24"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Co24"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Co24"></td>
              <td><input type="text" name="" id="question48Co24"  class="form-control q48Total" readonly></td>

          </tr>
          <tr>
            <td rowspan="2">Immigration</td>
            <td> <select name="" id="" class="form-control">
            <option>--Select Country--</option>
                <option value="PSHT">PSHT</option>
                <option value="PSHT Act 2012">PSHT Act 2012</option>
                <option value="Rule of PSHT Act">Rule of PSHT Act</option>
                <option value="TIP Investigation">TIP Investigation</option>
                <option value="Victim Withess Protection">Victim Withess Protection</option>
                <option value="TIP and MLA">TIP and MLA</option>
                <option value="Role of Police">Role of Police </option>
                <option value="NPA">NPA</option>
                <option value="NRM">NRM</option>
                <option value="VoT identification Guideline">VoT identification Guideline</option>
              </select> </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Co25"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Co25"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Co25"></td>
              <td><input type="text" name="" id="question48Co25"  class="form-control q48Total" readonly></td>
          </tr>
          <tr>
            <td>
              <div class="RightContaner"> Others (Specify)</div>
              <div class="LeftContaner"> <input type="text" class="form-control" width="100%"> </div>
            </td>
            <td><input type="text" name="" id="" class="form-control"></td>
            <td> <select name="" id="" class="form-control">
              <option>--Select District--</option>
              @foreach($districs as $distric)
              <option value="">{{$distric->name}}</option>
             

              @endforeach
              </select> </td>
              <td><input type="text" name="" id="" class="form-control"></td>
              <td><input type="number" name="" id="" class="form-control question48RowMen question48Co26"></td>
              <td><input type="number" name="" id="" class="form-control question48RowWomen question48Co26"></td>
              <td><input type="number" name="" id="" class="form-control question48RowBoys question48Co26"></td>
              <td><input type="text" name="" id="question48Co26"  class="form-control q48Total" readonly></td>

          </tr>






        </thead>


      </table>
    </div>
  </div>
</div>
@endif
