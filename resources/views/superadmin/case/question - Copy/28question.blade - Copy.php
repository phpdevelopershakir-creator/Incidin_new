@if(Auth::user()->can('28.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">28.Please provide an overview of the Protection Services available for the VoTs.
          </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-white">
            <thead>
              <tr>
                <th colspan="6" scope="col">Identification of Vots</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Victims identified by government</th>
                <td> Sex Trafficking </td>
                <td> Forced Labor </td>
                <td>Other Trafficking (Specify) </td>
                <td>Unspecified Trafficking </td>
              </tr>

              <tr>
                <td>Total victims identified by the government</th>
                <input type="hidden" name="identification_type[]" value="1">
                <td><input type="text" id="q28Sex1" value="<?= isset($question_28_data->q28_data->q28Sex1) ? $question_28_data->q28_data->q28Sex1 :''?>" name="identification_sex_trafficking[]" class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor1" value="<?= isset($question_28_data->q28_data->q28Labor1) ? $question_28_data->q28_data->q28Labor1 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other1" value="<?= isset($question_28_data->q28_data->q28Other1) ? $question_28_data->q28_data->q28Other1 :''?>" name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick1" value="<?= isset($question_28_data->q28_data->q28Traffick1) ? $question_28_data->q28_data->q28Traffick1 :''?>" name="identification_unspecified_traficking[]"  class="form-control q28Input"> </td>
              </tr>
              <tr>
                <td>Men</th>
                 <input type="hidden" name="identification_type[]" value="2">
                <td> <input type="text" id="q28Sex2" value="<?= isset($question_28_data->q28_data->q28Sex2) ? $question_28_data->q28_data->q28Sex2 :''?>" name="identification_sex_trafficking[]" class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor2" value="<?= isset($question_28_data->q28_data->q28Labor2) ? $question_28_data->q28_data->q28Labor2 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other2" value="<?= isset($question_28_data->q28_data->q28Other2) ? $question_28_data->q28_data->q28Other2 :''?>" name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick2" value="<?= isset($question_28_data->q28_data->q28Traffick2) ? $question_28_data->q28_data->q28Traffick2 :''?>" name="identification_unspecified_traficking[]" class="form-control q28Input"> </td>
              </tr>

              <tr>
                <td>Women</th>
                 <input type="hidden" name="identification_type[]" value="3">
                <td> <input type="text" id="q28Sex3" value="<?= isset($question_28_data->q28_data->q28Sex3) ? $question_28_data->q28_data->q28Sex3 :''?>" name="identification_sex_trafficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor3" value="<?= isset($question_28_data->q28_data->q28Labor3) ? $question_28_data->q28_data->q28Labor3 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other3" value="<?= isset($question_28_data->q28_data->q28Other3) ? $question_28_data->q28_data->q28Other3 :''?>" name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick3" value="<?= isset($question_28_data->q28_data->q28Traffick3) ? $question_28_data->q28_data->q28Traffick3 :''?>" name="identification_unspecified_traficking[]"  class="form-control q28Input"> </td>
              </tr>
              <tr>
                <td>3rd G</th>
                 <input type="hidden" name="identification_type[]" value="4">
                <td> <input type="text" id="q28Sex4" value="<?= isset($question_28_data->q28_data->q28Sex4) ? $question_28_data->q28_data->q28Sex4 :''?>"  name="identification_sex_trafficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor4" value="<?= isset($question_28_data->q28_data->q28Labor4) ? $question_28_data->q28_data->q28Labor4 :''?>"  name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other4" value="<?= isset($question_28_data->q28_data->q28Other4) ? $question_28_data->q28_data->q28Other4 :''?>"  name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick4" value="<?= isset($question_28_data->q28_data->q28Traffick4) ? $question_28_data->q28_data->q28Traffick4 :''?>"  name="identification_unspecified_traficking[]" class="form-control q28Input"> </td>
              </tr>

              <tr>
                <td>Boys (under 18)</th>
                 <input type="hidden" name="identification_type[]" value="5">
                <td> <input type="text" id="q28Sex5" value="<?= isset($question_28_data->q28_data->q28Sex5) ? $question_28_data->q28_data->q28Sex5 :''?>" name="identification_sex_trafficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor5" value="<?= isset($question_28_data->q28_data->q28Labor5) ? $question_28_data->q28_data->q28Labor5 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other5" value="<?= isset($question_28_data->q28_data->q28Other5) ? $question_28_data->q28_data->q28Other5 :''?>" name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick5" value="<?= isset($question_28_data->q28_data->q28Traffick5) ? $question_28_data->q28_data->q28Traffick5 :''?>" name="identification_unspecified_traficking[]"  class="form-control q28Input"> </td>
              </tr>

              <tr>
                <td>Girls (under 18)</th>
                 <input type="hidden" name="identification_type[]" value="6">
                <td> <input type="text" id="q28Sex6" value="<?= isset($question_28_data->q28_data->q28Sex6) ? $question_28_data->q28_data->q28Sex6 :''?>" name="identification_sex_trafficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor6" value="<?= isset($question_28_data->q28_data->q28Labor6) ? $question_28_data->q28_data->q28Labor6 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other6" value="<?= isset($question_28_data->q28_data->q28Other6) ? $question_28_data->q28_data->q28Other6 :''?>" name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick6" value="<?= isset($question_28_data->q28_data->q28Traffick6) ? $question_28_data->q28_data->q28Traffick6 :''?>" name="identification_unspecified_traficking[]"  class="form-control q28Input"> </td>
              </tr>


              <tr>
                <td>Persons with disabilities</th>
                 <input type="hidden" name="identification_type[]" value="7">
                <td> <input type="text" id="q28Sex7" value="<?= isset($question_28_data->q28_data->q28Sex7) ? $question_28_data->q28_data->q28Sex7 :''?>" name="identification_sex_trafficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor7" value="<?= isset($question_28_data->q28_data->q28Labor7) ? $question_28_data->q28_data->q28Labor7 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other7" value="<?= isset($question_28_data->q28_data->q28Other7) ? $question_28_data->q28_data->q28Other7 :''?>" name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick7" value="<?= isset($question_28_data->q28_data->q28Traffick7) ? $question_28_data->q28_data->q28Traffick7 :''?>" name="identification_unspecified_traficking[]"  class="form-control q28Input"> </td>
              </tr>

              <tr>
                <td>LGBTQI+ persons</th>
                 <input type="hidden" name="identification_type[]" value="8">
                <td> <input type="text" id="q28Sex8" value="<?= isset($question_28_data->q28_data->q28Sex8) ? $question_28_data->q28_data->q28Sex8 :''?>" name="identification_sex_trafficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor8" value="<?= isset($question_28_data->q28_data->q28Labor8) ? $question_28_data->q28_data->q28Labor8 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other8" value="<?= isset($question_28_data->q28_data->q28Other8) ? $question_28_data->q28_data->q28Other8 :''?>" name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick8" value="<?= isset($question_28_data->q28_data->q28Traffick8) ? $question_28_data->q28_data->q28Traffick8 :''?>" name="identification_unspecified_traficking[]"  class="form-control q28Input"> </td>
              </tr>

              <tr>
                <td>Foreign nationals (if available, from what countries?)</th>
                 <input type="hidden" name="identification_type[]" value="9">
                <td> <input type="text" id="q28Sex9" value="<?= isset($question_28_data->q28_data->q28Sex9) ? $question_28_data->q28_data->q28Sex9 :''?>" name="identification_sex_trafficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor9" value="<?= isset($question_28_data->q28_data->q28Labor9) ? $question_28_data->q28_data->q28Labor9 :''?>" name="identification_forced_labor[]" class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other9" value="<?= isset($question_28_data->q28_data->q28Other9) ? $question_28_data->q28_data->q28Other9 :''?>" name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick9" value="<?= isset($question_28_data->q28_data->q28Traffick9) ? $question_28_data->q28_data->q28Traffick9 :''?>" name="identification_unspecified_traficking[]"  class="form-control q28Input"> </td>
              </tr>
            </tbody>
          </table>
          <table class="table table-bordered table-white">
            <thead>
              <tr>
                <th colspan="6" scope="col">Referral of VoTs for Service and Care</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Victims identified by government</th>
                <td> Sex Trafficking </td>
                <td> Forced Labor </td>
                <td>Other Trafficking (Specify) </td>
                <td>Unspecified Trafficking </td>
              </tr>

              <tr>
                <td>Total victims identified by the government</th>
                   <input type="hidden" name="identification_type[]" value="1">
                <td> <input type="text" id="q28Sex10" value="<?= isset($question_28_data->q28_data->q28Sex10) ? $question_28_data->q28_data->q28Sex10 :''?>" name="identification_sex_trafficking[]" class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor10" value="<?= isset($question_28_data->q28_data->q28Labor10) ? $question_28_data->q28_data->q28Labor10 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other10" value="<?= isset($question_28_data->q28_data->q28Other10) ? $question_28_data->q28_data->q28Other10 :''?>" name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick10" value="<?= isset($question_28_data->q28_data->q28Traffick10) ? $question_28_data->q28_data->q28Traffick10 :''?>" name="identification_unspecified_traficking[]"  class="form-control q28Input"> </td>
              </tr>
              <tr>
                <td>Men</th>
                  <input type="hidden" name="identification_type[]" value="2">
                <td> <input type="text" id="q28Sex11" value="<?= isset($question_28_data->q28_data->q28Sex11) ? $question_28_data->q28_data->q28Sex11 :''?>" name="identification_sex_trafficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor11" value="<?= isset($question_28_data->q28_data->q28Labor11) ? $question_28_data->q28_data->q28Labor11 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other11" value="<?= isset($question_28_data->q28_data->q28Other11) ? $question_28_data->q28_data->q28Other11 :''?>" name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick11" value="<?= isset($question_28_data->q28_data->q28Traffick11) ? $question_28_data->q28_data->q28Traffick11 :''?>" name="identification_unspecified_traficking[]" class="form-control q28Input"> </td>
              </tr>

              <tr>
                <td>Women</th>
                  <input type="hidden" name="identification_type[]" value="3">
                <td> <input type="text" id="q28Sex12" value="<?= isset($question_28_data->q28_data->q28Sex12) ? $question_28_data->q28_data->q28Sex12 :''?>" name="identification_sex_trafficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor12" value="<?= isset($question_28_data->q28_data->q28Labor12) ? $question_28_data->q28_data->q28Labor12 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other12" value="<?= isset($question_28_data->q28_data->q28Other12) ? $question_28_data->q28_data->q28Other12 :''?>" name="identification_other_traficking[]" class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick12" value="<?= isset($question_28_data->q28_data->q28Traffick12) ? $question_28_data->q28_data->q28Traffick12 :''?>" name="identification_unspecified_traficking[]"  class="form-control q28Input"> </td>
              </tr>
              <tr>
                <td>3rd G</th>
                  <input type="hidden" name="identification_type[]" value="4">
                <td> <input type="text" id="q28Sex13" value="<?= isset($question_28_data->q28_data->q28Sex13) ? $question_28_data->q28_data->q28Sex13 :''?>" name="identification_sex_trafficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor13" value="<?= isset($question_28_data->q28_data->q28Labor13) ? $question_28_data->q28_data->q28Labor13 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other13" value="<?= isset($question_28_data->q28_data->q28Other13) ? $question_28_data->q28_data->q28Other13 :''?>" name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick13" value="<?= isset($question_28_data->q28_data->q28Traffick13) ? $question_28_data->q28_data->q28Traffick13 :''?>" name="identification_unspecified_traficking[]" class="form-control q28Input"> </td>
              </tr>

              <tr>
                <td>Boys (under 18)</th>
                  <input type="hidden" name="identification_type[]" value="5">
                <td> <input type="text" id="q28Sex14" value="<?= isset($question_28_data->q28_data->q28Sex14) ? $question_28_data->q28_data->q28Sex14 :''?>" name="identification_sex_trafficking[]" class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor14" value="<?= isset($question_28_data->q28_data->q28Labor14) ? $question_28_data->q28_data->q28Labor14 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other14" value="<?= isset($question_28_data->q28_data->q28Other14) ? $question_28_data->q28_data->q28Other14 :''?>" name="identification_other_traficking[]" class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick14" value="<?= isset($question_28_data->q28_data->q28Traffick14) ? $question_28_data->q28_data->q28Traffick14 :''?>" name="identification_unspecified_traficking[]" class="form-control q28Input"> </td>
              </tr>

              <tr>
                <td>Girls (under 18)</th>
                  <input type="hidden" name="identification_type[]" value="6">
                <td> <input type="text" id="q28Sex15" value="<?= isset($question_28_data->q28_data->q28Sex15) ? $question_28_data->q28_data->q28Sex15 :''?>" name="identification_sex_trafficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor15" value="<?= isset($question_28_data->q28_data->q28Labor15) ? $question_28_data->q28_data->q28Labor15 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other15" value="<?= isset($question_28_data->q28_data->q28Other15) ? $question_28_data->q28_data->q28Other15 :''?>" name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick15" value="<?= isset($question_28_data->q28_data->q28Traffick15) ? $question_28_data->q28_data->q28Traffick15 :''?>" name="identification_unspecified_traficking[]" class="form-control q28Input"> </td>
              </tr>


              <tr>
                <td>Persons with disabilities</th>
                  <input type="hidden" name="identification_type[]" value="7">
                <td> <input type="text" id="q28Sex16" value="<?= isset($question_28_data->q28_data->q28Sex16) ? $question_28_data->q28_data->q28Sex16 :''?>" name="identification_sex_trafficking[]" class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor16" value="<?= isset($question_28_data->q28_data->q28Labor16) ? $question_28_data->q28_data->q28Labor16 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other16" value="<?= isset($question_28_data->q28_data->q28Other16) ? $question_28_data->q28_data->q28Other16 :''?>" name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick16" value="<?= isset($question_28_data->q28_data->q28Traffick16) ? $question_28_data->q28_data->q28Traffick16 :''?>" name="identification_unspecified_traficking[]" class="form-control q28Input"> </td>
              </tr>

              <tr>
                <td>LGBTQI+ persons</th>
                  <input type="hidden" name="identification_type[]" value="8">
                <td> <input type="text" id="q28Sex17" value="<?= isset($question_28_data->q28_data->q28Sex17) ? $question_28_data->q28_data->q28Sex17 :''?>" name="identification_sex_trafficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor17" value="<?= isset($question_28_data->q28_data->q28Labor17) ? $question_28_data->q28_data->q28Labor17 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other17" value="<?= isset($question_28_data->q28_data->q28Other17) ? $question_28_data->q28_data->q28Other17 :''?>" name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick17" value="<?= isset($question_28_data->q28_data->q28Traffick17) ? $question_28_data->q28_data->q28Traffick17 :''?>" name="identification_unspecified_traficking[]" class="form-control q28Input"> </td>
              </tr>

              <tr>
                <td>Foreign nationals (if available, from what countries?)</th>
                  <input type="hidden" name="identification_type[]" value="9">
                <td> <input type="text" id="q28Sex18" value="<?= isset($question_28_data->q28_data->q28Sex18) ? $question_28_data->q28_data->q28Sex18 :''?>" name="identification_sex_trafficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor18" value="<?= isset($question_28_data->q28_data->q28Labor18) ? $question_28_data->q28_data->q28Labor18 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other18" value="<?= isset($question_28_data->q28_data->q28Other18) ? $question_28_data->q28_data->q28Other18 :''?>" name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick18" value="<?= isset($question_28_data->q28_data->q28Traffick18) ? $question_28_data->q28_data->q28Traffick18 :''?>" name="identification_unspecified_traficking[]" class="form-control q28Input"> </td>
              </tr>
            </tbody>
          </table>
          <table class="table table-bordered table-white">
            <thead>
              <tr>
                <th colspan="6" scope="col">Services (indicate whether victims received services from NGOs,
                  International Organizations (INGOs/UN agencies), or the government, if available) </th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Victims identified by government</th>
                <td> Sex Trafficking </td>
                <td> Forced Labor </td>
                <td>Other Trafficking (Specify) </td>
                <td>Unspecified Trafficking </td>
              </tr>

              <tr>
                <td>Total victims identified by the government</th>
                 <input type="hidden" name="identification_type[]" value="1">
                <td> <input type="text" id="q28Sex19" value="<?= isset($question_28_data->q28_data->q28Sex19) ? $question_28_data->q28_data->q28Sex19 :''?>" name="identification_sex_trafficking[]" class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor19" value="<?= isset($question_28_data->q28_data->q28Labor19) ? $question_28_data->q28_data->q28Labor19 :''?>" name="identification_forced_labor[]" class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other19" value="<?= isset($question_28_data->q28_data->q28Other19) ? $question_28_data->q28_data->q28Other19 :''?>" name="identification_other_traficking[]" class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick19" value="<?= isset($question_28_data->q28_data->q28Traffick19) ? $question_28_data->q28_data->q28Traffick19 :''?>" name="identification_unspecified_traficking[]"  class="form-control q28Input"> </td>
              </tr>
              <tr>
                <td>Men</th>
                 <input type="hidden" name="identification_type[]" value="2">
                <td> <input type="text" id="q28Sex20" value="<?= isset($question_28_data->q28_data->q28Sex20) ? $question_28_data->q28_data->q28Sex20 :''?>" name="identification_sex_trafficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor20" value="<?= isset($question_28_data->q28_data->q28Labor20) ? $question_28_data->q28_data->q28Labor20 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other20" value="<?= isset($question_28_data->q28_data->q28Other20) ? $question_28_data->q28_data->q28Other20 :''?>" name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick20" value="<?= isset($question_28_data->q28_data->q28Traffick20) ? $question_28_data->q28_data->q28Traffick20 :''?>" name="identification_unspecified_traficking[]"  class="form-control q28Input"> </td>
              </tr>

              <tr>
                <td>Women</th>
                 <input type="hidden" name="identification_type[]" value="3">
                <td> <input type="text" id="q28Sex21" value="<?= isset($question_28_data->q28_data->q28Sex21) ? $question_28_data->q28_data->q28Sex21 :''?>" name="identification_sex_trafficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor21" value="<?= isset($question_28_data->q28_data->q28Labor21) ? $question_28_data->q28_data->q28Labor21 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other21" value="<?= isset($question_28_data->q28_data->q28Other21) ? $question_28_data->q28_data->q28Other21 :''?>" name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick21" value="<?= isset($question_28_data->q28_data->q28Traffick21) ? $question_28_data->q28_data->q28Traffick21 :''?>" name="identification_unspecified_traficking[]"  class="form-control q28Input"> </td>
              </tr>
              <tr>
                <td>3rd G</th>
                 <input type="hidden" name="identification_type[]" value="4">
                <td> <input type="text" id="q28Sex22" value="<?= isset($question_28_data->q28_data->q28Sex22) ? $question_28_data->q28_data->q28Sex22 :''?>" name="identification_sex_trafficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor22" value="<?= isset($question_28_data->q28_data->q28Labor22) ? $question_28_data->q28_data->q28Labor22 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other22" value="<?= isset($question_28_data->q28_data->q28Other22) ? $question_28_data->q28_data->q28Other22 :''?>" name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick22" value="<?= isset($question_28_data->q28_data->q28Traffick22) ? $question_28_data->q28_data->q28Traffick22 :''?>" name="identification_unspecified_traficking[]"  class="form-control q28Input"> </td>
              </tr>

              <tr>
                <td>Boys (under 18)</th>
                 <input type="hidden" name="identification_type[]" value="5">
                <td> <input type="text" id="q28Sex23" value="<?= isset($question_28_data->q28_data->q28Sex23) ? $question_28_data->q28_data->q28Sex23 :''?>" name="identification_sex_trafficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor23" value="<?= isset($question_28_data->q28_data->q28Labor23) ? $question_28_data->q28_data->q28Labor23 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other23" value="<?= isset($question_28_data->q28_data->q28Other23) ? $question_28_data->q28_data->q28Other23 :''?>" name="identification_other_traficking[]" class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick23" value="<?= isset($question_28_data->q28_data->q28Traffick23) ? $question_28_data->q28_data->q28Traffick23 :''?>" name="identification_unspecified_traficking[]"  class="form-control q28Input"> </td>
              </tr>

              <tr>
                <td>Girls (under 18)</th>
                 <input type="hidden" name="identification_type[]" value="6">
                <td> <input type="text" id="q28Sex24" value="<?= isset($question_28_data->q28_data->q28Sex24) ? $question_28_data->q28_data->q28Sex24 :''?>" name="identification_sex_trafficking[]" class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor24" value="<?= isset($question_28_data->q28_data->q28Labor24) ? $question_28_data->q28_data->q28Labor24 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other24" value="<?= isset($question_28_data->q28_data->q28Other24) ? $question_28_data->q28_data->q28Other24 :''?>" name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick24" value="<?= isset($question_28_data->q28_data->q28Traffick24) ? $question_28_data->q28_data->q28Traffick24 :''?>" name="identification_unspecified_traficking[]"  class="form-control q28Input"> </td>
              </tr>


              <tr>
                <td>Persons with disabilities</th>
                 <input type="hidden" name="identification_type[]" value="7">
                <td> <input type="text" id="q28Sex25" value="<?= isset($question_28_data->q28_data->q28Sex25) ? $question_28_data->q28_data->q28Sex25 :''?>" name="identification_sex_trafficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor25" value="<?= isset($question_28_data->q28_data->q28Labor25) ? $question_28_data->q28_data->q28Labor25 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other25" value="<?= isset($question_28_data->q28_data->q28Other25) ? $question_28_data->q28_data->q28Other25 :''?>" name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick25" value="<?= isset($question_28_data->q28_data->q28Traffick25) ? $question_28_data->q28_data->q28Traffick25 :''?>" name="identification_unspecified_traficking[]" class="form-control q28Input"> </td>
              </tr>

              <tr>
                <td>LGBTQI+ persons</th>
                 <input type="hidden" name="identification_type[]" value="8">
                <td> <input type="text" id="q28Sex26" value="<?= isset($question_28_data->q28_data->q28Sex26) ? $question_28_data->q28_data->q28Sex26 :''?>" name="identification_sex_trafficking[]" class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor26" value="<?= isset($question_28_data->q28_data->q28Labor26) ? $question_28_data->q28_data->q28Labor26 :''?>" name="identification_forced_labor[]" class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other26" value="<?= isset($question_28_data->q28_data->q28Other26) ? $question_28_data->q28_data->q28Other26 :''?>" name="identification_other_traficking[]" class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick26" value="<?= isset($question_28_data->q28_data->q28Traffick26) ? $question_28_data->q28_data->q28Traffick26 :''?>" name="identification_unspecified_traficking[]" class="form-control q28Input"> </td>
              </tr>

              <tr>
                <td>Foreign nationals (if available, from what countries?)</th>
                 <input type="hidden" name="identification_type[]" value="9">
                <td> <input type="text" id="q28Sex27" value="<?= isset($question_28_data->q28_data->q28Sex27) ? $question_28_data->q28_data->q28Sex27 :''?>" name="identification_sex_trafficking[]" class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor27" value="<?= isset($question_28_data->q28_data->q28Labor27) ? $question_28_data->q28_data->q28Labor27 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other27" value="<?= isset($question_28_data->q28_data->q28Other27) ? $question_28_data->q28_data->q28Other27 :''?>" name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick27" value="<?= isset($question_28_data->q28_data->q28Traffick27) ? $question_28_data->q28_data->q28Traffick27 :''?>" name="identification_unspecified_traficking[]" class="form-control q28Input"> </td>
              </tr>
            </tbody>
          </table>
          <table class="table table-bordered table-white">
            <thead>
              <tr>
                <th colspan="6" scope="col">Additional Victim Information </th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Victims repatriated to source country (if applicable)</th>
                <td> Sex Trafficking </td>
                <td> Forced Labor </td>
                <td>Other Trafficking (Specify) </td>
                <td>Unspecified Trafficking </td>
              </tr>

              <tr>
                <td>victims repatriated by host government</th>
                <input type="hidden" name="identification_type[]" value="1">
                <td> <input type="text" id="q28Sex28" value="<?= isset($question_28_data->q28_data->q28Sex28) ? $question_28_data->q28_data->q28Sex28 :''?>" name="identification_sex_trafficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor28" value="<?= isset($question_28_data->q28_data->q28Labor28) ? $question_28_data->q28_data->q28Labor28 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other28" value="<?= isset($question_28_data->q28_data->q28Other28) ? $question_28_data->q28_data->q28Other28 :''?>" name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick28" value="<?= isset($question_28_data->q28_data->q28Traffick28) ? $question_28_data->q28_data->q28Traffick28 :''?>" name="identification_unspecified_traficking[]"  class="form-control q28Input"> </td>
              </tr>
              <tr>
                <td>victims repatriated by foreign government</th>
                <input type="hidden" name="identification_type[]" value="2">
                <td> <input type="text" id="q28Sex29" value="<?= isset($question_28_data->q28_data->q28Sex29) ? $question_28_data->q28_data->q28Sex29 :''?>" name="identification_sex_trafficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor29" value="<?= isset($question_28_data->q28_data->q28Labor29) ? $question_28_data->q28_data->q28Labor29 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other29" value="<?= isset($question_28_data->q28_data->q28Other29) ? $question_28_data->q28_data->q28Other29 :''?>"  name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick29" value="<?= isset($question_28_data->q28_data->q28Traffick29) ? $question_28_data->q28_data->q28Traffick29 :''?>" name="identification_unspecified_traficking[]" class="form-control q28Input"> </td>
              </tr>

              <tr>
                <td>victims repatriated by NGOs/INGOs/UN agencies</th>
                 <input type="hidden" name="identification_type[]" value="3">
                <td> <input type="text" id="q28Sex30" value="<?= isset($question_28_data->q28_data->q28Sex30) ? $question_28_data->q28_data->q28Sex30 :''?>" name="identification_sex_trafficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Labor30" value="<?= isset($question_28_data->q28_data->q28Labor30) ? $question_28_data->q28_data->q28Labor30 :''?>" name="identification_forced_labor[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Other30" value="<?= isset($question_28_data->q28_data->q28Other30) ? $question_28_data->q28_data->q28Other30 :''?>" name="identification_other_traficking[]"  class="form-control q28Input"> </td>
                <td><input type="text" id="q28Traffick30" value="<?= isset($question_28_data->q28_data->q28Traffick30) ? $question_28_data->q28_data->q28Traffick30 :''?>" name="identification_unspecified_traficking[]" class="form-control q28Input"> </td>
              </tr>


            </tbody>
          </table>
          <br/>
        <p class="text-right">
            <button type="button" class="btn btn-success" id="temp-save-question28">Save</button>       
        </p>
        </div>
      </div>
    </div>
    @endif

    <script>

$(function(){
  $(document).on("click",'#temp-save-question28',function() {



    var q28_data={
    }
 
      $('.q28Input').each(function() {
        Object.assign(q28_data,{[$(this).attr('id')]:$(this).val()})   
      });

    let new_data = {
      q28_data:q28_data
    }
      // console.log(new_data)
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
              'question28':new_data,
              'question_no':'28'
            },
            url: "/superadmin/case/temp-save-question40to60",             
            success: function(response){ 
              if(response){
                alert("Question 28 has been saved temporary")

              }else{
                alert("Not Saved")
              }
            }
    });
  }); 
}); 

</script>