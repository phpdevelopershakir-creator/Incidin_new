<?php
if($questiontitles[55]->status==0)
{

  ?>
@if(Auth::user()->can('56.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
              <span class="numbering">56</span>.
           @if (isset($questiontitles [55]))
         {{ $questiontitles[55]->title }}
         @endif
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
                <th>Number of Meeting</th>
                <th>Union</th>
                <th>Upazila</th>
                <th>District</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Number of Male Participants</th>
                <input type="hidden" name="q56_type_of_meeting[]" value="1">
                <td> <input type="text" id="q56_union_1" value="<?= isset($question_56_data->q56_data->q56_union_1) ? $question_56_data->q56_data->q56_union_1 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_1" value="<?= isset($question_56_data->q56_data->q56_upazila_1) ? $question_56_data->q56_data->q56_upazila_1 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_1" value="<?= isset($question_56_data->q56_data->q56_district_1) ? $question_56_data->q56_data->q56_district_1 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_1" value="<?= isset($question_56_data->q56_data->q56_total_1) ? $question_56_data->q56_data->q56_total_1 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>

              <tr>
                <td>Number of Female Participants				
                </th>
                <input type="hidden" name="q56_type_of_meeting[]" value="2">
                <td> <input type="text" id="q56_union_2" value="<?= isset($question_56_data->q56_data->q56_union_2) ? $question_56_data->q56_data->q56_union_2 :'' ?>"  name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_2" value="<?= isset($question_56_data->q56_data->q56_upazila_2) ? $question_56_data->q56_data->q56_upazila_2 :'' ?>"  name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_2" value="<?= isset($question_56_data->q56_data->q56_district_2) ? $question_56_data->q56_data->q56_district_2 :'' ?>"  name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_2" value="<?= isset($question_56_data->q56_data->q56_total_2) ? $question_56_data->q56_data->q56_total_2 :'' ?>"  name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <tr>
                <td>Number of 3RD G Participants</th>
                <input type="hidden" name="q56_type_of_meeting[]" value="3">
                <td> <input type="text" id="q56_union_3" value="<?= isset($question_56_data->q56_data->q56_union_3) ? $question_56_data->q56_data->q56_union_3 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_3" value="<?= isset($question_56_data->q56_data->q56_upazila_3) ? $question_56_data->q56_data->q56_upazila_3 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_3" value="<?= isset($question_56_data->q56_data->q56_district_3) ? $question_56_data->q56_data->q56_district_3 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_3" value="<?= isset($question_56_data->q56_data->q56_total_3) ? $question_56_data->q56_data->q56_total_3 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>

              <tr>
                <td>Number of Boy-participants</th>
                <input type="hidden" name="q56_type_of_meeting[]" value="4">
                <td> <input type="text" id="q56_union_4" value="<?= isset($question_56_data->q56_data->q56_union_4) ? $question_56_data->q56_data->q56_union_4 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_4" value="<?= isset($question_56_data->q56_data->q56_upazila_4) ? $question_56_data->q56_data->q56_upazila_4 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_4" value="<?= isset($question_56_data->q56_data->q56_district_4) ? $question_56_data->q56_data->q56_district_4 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_4" value="<?= isset($question_56_data->q56_data->q56_total_4) ? $question_56_data->q56_data->q56_total_4 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>

              <tr>
                <td>Number of Girl-participants</th>
                <input type="hidden" name="q56_type_of_meeting[]" value="5">
                <td> <input type="text" id="q56_union_5" value="<?= isset($question_56_data->q56_data->q56_union_5) ? $question_56_data->q56_data->q56_union_5 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_5" value="<?= isset($question_56_data->q56_data->q56_upazila_5) ? $question_56_data->q56_data->q56_upazila_5 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_5" value="<?= isset($question_56_data->q56_data->q56_district_5) ? $question_56_data->q56_data->q56_district_5 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_5" value="<?= isset($question_56_data->q56_data->q56_total_5) ? $question_56_data->q56_data->q56_total_5 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <!-- <tr>
                <th>Awareness Activities  of CTCs</th>
                <input type="hidden" name="q56_type_of_meeting[]" value="6">
                <td> <input type="text" id="q56_union_6" value="<?= isset($question_56_data->q56_data->q56_union_6) ? $question_56_data->q56_data->q56_union_6 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_6" value="<?= isset($question_56_data->q56_data->q56_upazila_6) ? $question_56_data->q56_data->q56_upazila_6 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_6" value="<?= isset($question_56_data->q56_data->q56_district_6) ? $question_56_data->q56_data->q56_district_6 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_6" value="<?= isset($question_56_data->q56_data->q56_total_6) ? $question_56_data->q56_data->q56_total_6 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr> -->

              <tr>
                <td>Number of Events</th>
                <input type="hidden" name="q56_type_of_meeting[]" value="7">
                <td> <input type="text" id="q56_union_7" value="<?= isset($question_56_data->q56_data->q56_union_7) ? $question_56_data->q56_data->q56_union_7 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_7" value="<?= isset($question_56_data->q56_data->q56_upazila_7) ? $question_56_data->q56_data->q56_upazila_7 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_7" value="<?= isset($question_56_data->q56_data->q56_district_7) ? $question_56_data->q56_data->q56_district_7 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_7" value="<?= isset($question_56_data->q56_data->q56_total_7) ? $question_56_data->q56_data->q56_total_7 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <tr>
                <td>Number of Male Participants</th>
                <input type="hidden" name="q56_type_of_meeting[]" value="8">
                <td> <input type="text" id="q56_union_8" value="<?= isset($question_56_data->q56_data->q56_union_8) ? $question_56_data->q56_data->q56_union_8 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_8" value="<?= isset($question_56_data->q56_data->q56_upazila_8) ? $question_56_data->q56_data->q56_upazila_8 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_8" value="<?= isset($question_56_data->q56_data->q56_district_8) ? $question_56_data->q56_data->q56_district_8 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_8" value="<?= isset($question_56_data->q56_data->q56_total_8) ? $question_56_data->q56_data->q56_total_8 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <tr>
                <td>Number of Female Participants</th>
                <input type="hidden" name="q56_type_of_meeting[]" value="9">
                <td> <input type="text" id="q56_union_9" value="<?= isset($question_56_data->q56_data->q56_union_9) ? $question_56_data->q56_data->q56_union_9 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_9" value="<?= isset($question_56_data->q56_data->q56_upazila_9) ? $question_56_data->q56_data->q56_upazila_9 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_9" value="<?= isset($question_56_data->q56_data->q56_district_9) ? $question_56_data->q56_data->q56_district_9 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_9" value="<?= isset($question_56_data->q56_data->q56_total_9) ? $question_56_data->q56_data->q56_total_9 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <tr>
                <td>Number of 3RD G Participants</th>
                <input type="hidden" name="q56_type_of_meeting[]" value="10">
                <td> <input type="text" id="q56_union_10" value="<?= isset($question_56_data->q56_data->q56_union_10) ? $question_56_data->q56_data->q56_union_10 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_10" value="<?= isset($question_56_data->q56_data->q56_upazila_10) ? $question_56_data->q56_data->q56_upazila_10 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_10" value="<?= isset($question_56_data->q56_data->q56_district_10) ? $question_56_data->q56_data->q56_district_10 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_10" value="<?= isset($question_56_data->q56_data->q56_total_10) ? $question_56_data->q56_data->q56_total_10 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <tr>
                <td>Number of Boy-participants</th>
                <input type="hidden" name="q56_type_of_meeting[]" value="11">
                <td> <input type="text" id="q56_union_11" value="<?= isset($question_56_data->q56_data->q56_union_11) ? $question_56_data->q56_data->q56_union_11 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_11" value="<?= isset($question_56_data->q56_data->q56_upazila_11) ? $question_56_data->q56_data->q56_upazila_11 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_11" value="<?= isset($question_56_data->q56_data->q56_district_1) ? $question_56_data->q56_data->q56_district_11 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_11" value="<?= isset($question_56_data->q56_data->q56_total_11) ? $question_56_data->q56_data->q56_total_11 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <tr>
                <td>Number of Girl-participants				
                </th>
                <input type="hidden" name="q56_type_of_meeting[]" value="12">
                <td> <input type="text" id="q56_union_12" value="<?= isset($question_56_data->q56_data->q56_union_12) ? $question_56_data->q56_data->q56_union_12 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_12" value="<?= isset($question_56_data->q56_data->q56_upazila_12) ? $question_56_data->q56_data->q56_upazila_12 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_12" value="<?= isset($question_56_data->q56_data->q56_district_12) ? $question_56_data->q56_data->q56_district_12 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_12" value="<?= isset($question_56_data->q56_data->q56_total_12) ? $question_56_data->q56_data->q56_total_12 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <!-- <tr>
                <th>Referral of VoTs by CTC for assistance</th>
                <input type="hidden" name="q56_type_of_meeting[]" value="13">
                <td> <input type="text" id="q56_union_13" value="<?= isset($question_56_data->q56_data->q56_union_13) ? $question_56_data->q56_data->q56_union_13 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_13" value="<?= isset($question_56_data->q56_data->q56_upazila_13) ? $question_56_data->q56_data->q56_upazila_13 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_13" value="<?= isset($question_56_data->q56_data->q56_district_13) ? $question_56_data->q56_data->q56_district_13 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_13" value="<?= isset($question_56_data->q56_data->q56_total_13) ? $question_56_data->q56_data->q56_total_13 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr> -->

              <tr>
                <td>Total Number of Referral</th>
                <input type="hidden" name="q56_type_of_meeting[]" value="14">
                <td> <input type="text" id="q56_union_14" value="<?= isset($question_56_data->q56_data->q56_union_14) ? $question_56_data->q56_data->q56_union_14 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_14" value="<?= isset($question_56_data->q56_data->q56_upazila_14) ? $question_56_data->q56_data->q56_upazila_14 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_14" value="<?= isset($question_56_data->q56_data->q56_district_14) ? $question_56_data->q56_data->q56_district_14 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_14" value="<?= isset($question_56_data->q56_data->q56_total_14) ? $question_56_data->q56_data->q56_total_14 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <tr>
                <td>Total number of VoTs referred </th>
                <input type="hidden" name="q56_type_of_meeting[]" value="15">
                <td> <input type="text" id="q56_union_15" value="<?= isset($question_56_data->q56_data->q56_union_15) ? $question_56_data->q56_data->q56_union_15 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_15" value="<?= isset($question_56_data->q56_data->q56_upazila_15) ? $question_56_data->q56_data->q56_upazila_15 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_15" value="<?= isset($question_56_data->q56_data->q56_district_15) ? $question_56_data->q56_data->q56_district_15 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_15" value="<?= isset($question_56_data->q56_data->q56_total_15) ? $question_56_data->q56_data->q56_total_15 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <tr>
                <td>Number of Male VoTs</th>
                <input type="hidden" name="q56_type_of_meeting[]" value="16">
                <td> <input type="text" id="q56_union_16" value="<?= isset($question_56_data->q56_data->q56_union_16) ? $question_56_data->q56_data->q56_union_16 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_16" value="<?= isset($question_56_data->q56_data->q56_upazila_16) ? $question_56_data->q56_data->q56_upazila_16 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_16" value="<?= isset($question_56_data->q56_data->q56_district_16) ? $question_56_data->q56_data->q56_district_16 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_16" value="<?= isset($question_56_data->q56_data->q56_total_16) ? $question_56_data->q56_data->q56_total_16 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <tr>
                <td>Number of Female VoTs</th>
                <input type="hidden" name="q56_type_of_meeting[]" value="17">
                <td> <input type="text" id="q56_union_17" value="<?= isset($question_56_data->q56_data->q56_union_17) ? $question_56_data->q56_data->q56_union_17 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_17" value="<?= isset($question_56_data->q56_data->q56_upazila_17) ? $question_56_data->q56_data->q56_upazila_17 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_17" value="<?= isset($question_56_data->q56_data->q56_district_17) ? $question_56_data->q56_data->q56_district_17 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_17" value="<?= isset($question_56_data->q56_data->q56_total_17) ? $question_56_data->q56_data->q56_total_17 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <tr>
                <td>Number of 3RD G VoTs</th>
                <input type="hidden" name="q56_type_of_meeting[]" value="18">
                <td> <input type="text" id="q56_union_18" value="<?= isset($question_56_data->q56_data->q56_union_18) ? $question_56_data->q56_data->q56_union_18 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_18" value="<?= isset($question_56_data->q56_data->q56_upazila_18) ? $question_56_data->q56_data->q56_upazila_18 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_18" value="<?= isset($question_56_data->q56_data->q56_district_18) ? $question_56_data->q56_data->q56_district_18 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_18" value="<?= isset($question_56_data->q56_data->q56_total_18) ? $question_56_data->q56_data->q56_total_18 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <tr>
                <td>Number of Boy-VoTs			
                </th>
                <input type="hidden" name="q56_type_of_meeting[]" value="19">
                <td> <input type="text" id="q56_union_19" value="<?= isset($question_56_data->q56_data->q56_union_19) ? $question_56_data->q56_data->q56_union_19 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_19" value="<?= isset($question_56_data->q56_data->q56_upazila_19) ? $question_56_data->q56_data->q56_upazila_19 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_19" value="<?= isset($question_56_data->q56_data->q56_district_19) ? $question_56_data->q56_data->q56_district_19 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_19" value="<?= isset($question_56_data->q56_data->q56_total_19) ? $question_56_data->q56_data->q56_total_19 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <tr>
                <td>Number of Girl-VoTs		
                </th>
                <input type="hidden" name="q56_type_of_meeting[]" value="20">
                <td> <input type="text" id="q56_union_20" value="<?= isset($question_56_data->q56_data->q56_union_20) ? $question_56_data->q56_data->q56_union_20 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_20" value="<?= isset($question_56_data->q56_data->q56_upazila_20) ? $question_56_data->q56_data->q56_upazila_20 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_20" value="<?= isset($question_56_data->q56_data->q56_district_20) ? $question_56_data->q56_data->q56_district_20 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_20" value="<?= isset($question_56_data->q56_data->q56_total_20) ? $question_56_data->q56_data->q56_total_20 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <!-- <tr>
                <th>Direct Livelihood/Financial Assistance to VoTs</th>
                <input type="hidden" name="q56_type_of_meeting[]" value="21">
                <td> <input type="text" id="q56_union_21" value="<?= isset($question_56_data->q56_data->q56_union_21) ? $question_56_data->q56_data->q56_union_21 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_21" value="<?= isset($question_56_data->q56_data->q56_upazila_21) ? $question_56_data->q56_data->q56_upazila_21 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_21" value="<?= isset($question_56_data->q56_data->q56_district_21) ? $question_56_data->q56_data->q56_district_21 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_21" value="<?= isset($question_56_data->q56_data->q56_total_21) ? $question_56_data->q56_data->q56_total_21 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr> -->

              <tr>
                <td>Total Number of VoTs supported</th>
                <input type="hidden" name="q56_type_of_meeting[]" value="22">
                <td> <input type="text" id="q56_union_22" value="<?= isset($question_56_data->q56_data->q56_union_22) ? $question_56_data->q56_data->q56_union_22 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_22" value="<?= isset($question_56_data->q56_data->q56_upazila_22) ? $question_56_data->q56_data->q56_upazila_22 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_22" value="<?= isset($question_56_data->q56_data->q56_district_22) ? $question_56_data->q56_data->q56_district_22 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_22" value="<?= isset($question_56_data->q56_data->q56_total_22) ? $question_56_data->q56_data->q56_total_22 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <tr>
                <td>Total number of VoTs supported </th>
                <input type="hidden" name="q56_type_of_meeting[]" value="23">
                <td> <input type="text" id="q56_union_23" value="<?= isset($question_56_data->q56_data->q56_union_23) ? $question_56_data->q56_data->q56_union_23 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_23" value="<?= isset($question_56_data->q56_data->q56_upazila_23) ? $question_56_data->q56_data->q56_upazila_23 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_23" value="<?= isset($question_56_data->q56_data->q56_district_23) ? $question_56_data->q56_data->q56_district_23 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_23" value="<?= isset($question_56_data->q56_data->q56_total_23) ? $question_56_data->q56_data->q56_total_23 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <tr>
                <td>Number of Male VoTs 				
                </th>
                <input type="hidden" name="q56_type_of_meeting[]" value="24">
                <td> <input type="text" id="q56_union_24" value="<?= isset($question_56_data->q56_data->q56_union_24) ? $question_56_data->q56_data->q56_union_24 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_24" value="<?= isset($question_56_data->q56_data->q56_upazila_24) ? $question_56_data->q56_data->q56_upazila_24 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_24" value="<?= isset($question_56_data->q56_data->q56_district_24) ? $question_56_data->q56_data->q56_district_24 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_24" value="<?= isset($question_56_data->q56_data->q56_total_24) ? $question_56_data->q56_data->q56_total_24 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <tr>
                <td>Number of Female VoTs</th>
              
                <input type="hidden" name="q56_type_of_meeting[]" value="25">
                <td> <input type="text" id="q56_union_25" value="<?= isset($question_56_data->q56_data->q56_union_25) ? $question_56_data->q56_data->q56_union_25 :'' ?>" name="q56_union[]" class="form-control q56Input q56Input"> </td>
                <td> <input type="text" id="q56_upazila_25" value="<?= isset($question_56_data->q56_data->q56_upazila_25) ? $question_56_data->q56_data->q56_upazila_25 :'' ?>" name="q56_upazila[]" class="form-control q56Input q56Input"> </td>
                <td> <input type="text" id="q56_district_25" value="<?= isset($question_56_data->q56_data->q56_district_25) ? $question_56_data->q56_data->q56_district_25 :'' ?>" name="q56_district[]" class="form-control q56Input q56Input"> </td>
                <td> <input type="text" id="q56_total_25" value="<?= isset($question_56_data->q56_data->q56_total_25) ? $question_56_data->q56_data->q56_total_25 :'' ?>" name="q56_total[]" class="form-control q56Input q56Input"> </td>
              </tr>
              <tr>
                <td>Number of 3RD G VoTs</th>
                <input type="hidden" name="q56_type_of_meeting[]" value="26">
                <td> <input type="text" id="q56_union_26" value="<?= isset($question_56_data->q56_data->q56_union_26) ? $question_56_data->q56_data->q56_union_26 :'' ?>" name="q56_union[]" class="form-control q56Input q56Input"> </td>
                <td> <input type="text" id="q56_upazila_26" value="<?= isset($question_56_data->q56_data->q56_upazila_26) ? $question_56_data->q56_data->q56_upazila_26 :'' ?>" name="q56_upazila[]" class="form-control q56Input q56Input"> </td>
                <td> <input type="text" id="q56_district_26" value="<?= isset($question_56_data->q56_data->q56_district_26) ? $question_56_data->q56_data->q56_district_26 :'' ?>" name="q56_district[]" class="form-control q56Input q56Input"> </td>
                <td> <input type="text" id="q56_total_26" value="<?= isset($question_56_data->q56_data->q56_total_26) ? $question_56_data->q56_data->q56_total_26 :'' ?>" name="q56_total[]" class="form-control q56Input q56Input"> </td>
              </tr>
              <tr>
                <td>Number of Boy-VoTs			
                </th>
                <input type="hidden" name="q56_type_of_meeting[]" value="27">
                <td> <input type="text" id="q56_union_27" value="<?= isset($question_56_data->q56_data->q56_union_27) ? $question_56_data->q56_data->q56_union_27 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_27" value="<?= isset($question_56_data->q56_data->q56_upazila_27) ? $question_56_data->q56_data->q56_upazila_27 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_27" value="<?= isset($question_56_data->q56_data->q56_district_27) ? $question_56_data->q56_data->q56_district_27 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_27" value="<?= isset($question_56_data->q56_data->q56_total_27) ? $question_56_data->q56_data->q56_total_27 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <tr>
                <td>Number of Girl-VoTs				
		
                </th>
                <input type="hidden" name="q56_type_of_meeting[]" value="28">
                <td> <input type="text" id="q56_union_28" value="<?= isset($question_56_data->q56_data->q56_union_28) ? $question_56_data->q56_data->q56_union_28 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_28" value="<?= isset($question_56_data->q56_data->q56_upazila_28) ? $question_56_data->q56_data->q56_upazila_28 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_28" value="<?= isset($question_56_data->q56_data->q56_district_28) ? $question_56_data->q56_data->q56_district_28 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_28" value="<?= isset($question_56_data->q56_data->q56_total_28) ? $question_56_data->q56_data->q56_total_28 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <!-- <tr>
                <th>Case monitoring by CTC</th>
                <input type="hidden" name="q56_type_of_meeting[]" value="29">
                <td> <input type="text" id="q56_union_29" value="<?= isset($question_56_data->q56_data->q56_union_29) ? $question_56_data->q56_data->q56_union_29 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_29" value="<?= isset($question_56_data->q56_data->q56_upazila_29) ? $question_56_data->q56_data->q56_upazila_29 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_29" value="<?= isset($question_56_data->q56_data->q56_district_29) ? $question_56_data->q56_data->q56_district_29 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_29" value="<?= isset($question_56_data->q56_data->q56_total_29) ? $question_56_data->q56_data->q56_total_29 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr> -->

              <tr>
                <td>Total Number TIP cases monitored</th>
                <input type="hidden" name="q56_type_of_meeting[]" value="30">
                <td> <input type="text" id="q56_union_30" value="<?= isset($question_56_data->q56_data->q56_union_30) ? $question_56_data->q56_data->q56_union_30 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_30" value="<?= isset($question_56_data->q56_data->q56_upazila_30) ? $question_56_data->q56_data->q56_upazila_30 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_30" value="<?= isset($question_56_data->q56_data->q56_district_30) ? $question_56_data->q56_data->q56_district_30 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_30" value="<?= isset($question_56_data->q56_data->q56_total_30) ? $question_56_data->q56_data->q56_total_30 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <tr>
                <td>Total number of VoTs’ case monitored </th>
                <input type="hidden" name="q56_type_of_meeting[]" value="31">
                <td> <input type="text" id="q56_union_31" value="<?= isset($question_56_data->q56_data->q56_union_31) ? $question_56_data->q56_data->q56_union_31 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_31" value="<?= isset($question_56_data->q56_data->q56_upazila_31) ? $question_56_data->q56_data->q56_upazila_31 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_31" value="<?= isset($question_56_data->q56_data->q56_district_31) ? $question_56_data->q56_data->q56_district_31 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_31" value="<?= isset($question_56_data->q56_data->q56_total_31) ? $question_56_data->q56_data->q56_total_31 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <tr>
                <td>Number of Male VoTs’ case monitored				
                </th>
                <input type="hidden" name="q56_type_of_meeting[]" value="32">
                <td> <input type="text" id="q56_union_32" value="<?= isset($question_56_data->q56_data->q56_union_32) ? $question_56_data->q56_data->q56_union_32 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_32" value="<?= isset($question_56_data->q56_data->q56_upazila_32) ? $question_56_data->q56_data->q56_upazila_32 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_32" value="<?= isset($question_56_data->q56_data->q56_district_32) ? $question_56_data->q56_data->q56_district_32 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_32" value="<?= isset($question_56_data->q56_data->q56_total_32) ? $question_56_data->q56_data->q56_total_32 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <tr>
                <td>Number of Female VoTs’ case monitored				
                </th>
                <input type="hidden" name="q56_type_of_meeting[]" value="33">
                <td> <input type="text" id="q56_union_33" value="<?= isset($question_56_data->q56_data->q56_union_33) ? $question_56_data->q56_data->q56_union_33 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_33" value="<?= isset($question_56_data->q56_data->q56_upazila_33) ? $question_56_data->q56_data->q56_upazila_33 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_33" value="<?= isset($question_56_data->q56_data->q56_district_33) ? $question_56_data->q56_data->q56_district_33 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_33" value="<?= isset($question_56_data->q56_data->q56_total_33) ? $question_56_data->q56_data->q56_total_33 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <tr>
                <td>Number of 3RD G VoTs’ case monitored</th>
                <input type="hidden" name="q56_type_of_meeting[]" value="34">
                <td> <input type="text" id="q56_union_34" value="<?= isset($question_56_data->q56_data->q56_union_34) ? $question_56_data->q56_data->q56_union_34 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_34" value="<?= isset($question_56_data->q56_data->q56_upazila_34) ? $question_56_data->q56_data->q56_upazila_34 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_34" value="<?= isset($question_56_data->q56_data->q56_district_34) ? $question_56_data->q56_data->q56_district_34 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_34" value="<?= isset($question_56_data->q56_data->q56_total_34) ? $question_56_data->q56_data->q56_total_34 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <tr>
                <td>Number of Boy- VoTs’ case monitored			
                </th>
                <input type="hidden" name="q56_type_of_meeting[]" value="35">
                <td> <input type="text" id="q56_union_35" value="<?= isset($question_56_data->q56_data->q56_union_35) ? $question_56_data->q56_data->q56_union_35 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_35" value="<?= isset($question_56_data->q56_data->q56_upazila_35) ? $question_56_data->q56_data->q56_upazila_35 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_35" value="<?= isset($question_56_data->q56_data->q56_district_35) ? $question_56_data->q56_data->q56_district_35 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_35" value="<?= isset($question_56_data->q56_data->q56_total_35) ? $question_56_data->q56_data->q56_total_35 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <tr>
                <td>Number of Girl- VoTs’ case monitored			
		
                </th>
                <input type="hidden" name="q56_type_of_meeting[]" value="36">
                <td> <input type="text" id="q56_union_36" value="<?= isset($question_56_data->q56_data->q56_union_36) ? $question_56_data->q56_data->q56_union_36 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_36" value="<?= isset($question_56_data->q56_data->q56_upazila_36) ? $question_56_data->q56_data->q56_upazila_36 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_36" value="<?= isset($question_56_data->q56_data->q56_district_36) ? $question_56_data->q56_data->q56_district_36 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_36" value="<?= isset($question_56_data->q56_data->q56_total_36) ? $question_56_data->q56_data->q56_total_36 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr>
              <!-- <tr>
                <th>Resource Mobilization			
		
                </th>
                <input type="hidden" name="q56_type_of_meeting[]" value="37">
                <td> <input type="text" id="q56_union_37" value="<?= isset($question_56_data->q56_data->q56_union_37) ? $question_56_data->q56_data->q56_union_37 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_upazila_37" value="<?= isset($question_56_data->q56_data->q56_upazila_37) ? $question_56_data->q56_data->q56_upazila_37 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_district_37" value="<?= isset($question_56_data->q56_data->q56_district_37) ? $question_56_data->q56_data->q56_district_37 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
                <td> <input type="text" id="q56_total_37" value="<?= isset($question_56_data->q56_data->q56_total_37) ? $question_56_data->q56_data->q56_total_37 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
              </tr> -->
              <tr>  
              <td>Total resource mobilized (BDT)				
			
		
        </th>
        <input type="hidden" name="q56_type_of_meeting[]" value="38">
        <td> <input type="text" id="q56_union_38" value="<?= isset($question_56_data->q56_data->q56_union_38) ? $question_56_data->q56_data->q56_union_38 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
        <td> <input type="text" id="q56_upazila_38" value="<?= isset($question_56_data->q56_data->q56_upazila_38) ? $question_56_data->q56_data->q56_upazila_38 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
        <td> <input type="text" id="q56_district_38" value="<?= isset($question_56_data->q56_data->q56_district_38) ? $question_56_data->q56_data->q56_district_38 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
        <td> <input type="text" id="q56_total_38" value="<?= isset($question_56_data->q56_data->q56_total_38) ? $question_56_data->q56_data->q56_total_38 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
      </tr>
      <tr>
      <td>Total Expenditure (BDT)			
		
        </td>
        <input type="hidden" name="q56_type_of_meeting[]" value="39">
        <td> <input type="text" id="q56_union_39" value="<?= isset($question_56_data->q56_data->q56_union_39) ? $question_56_data->q56_data->q56_union_39 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
        <td> <input type="text" id="q56_upazila_39" value="<?= isset($question_56_data->q56_data->q56_upazila_39) ? $question_56_data->q56_data->q56_upazila_39 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
        <td> <input type="text" id="q56_district_39" value="<?= isset($question_56_data->q56_data->q56_district_39) ? $question_56_data->q56_data->q56_district_39 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
        <td> <input type="text" id="q56_total_39" value="<?= isset($question_56_data->q56_data->q56_total_39) ? $question_56_data->q56_data->q56_total_39 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
      </tr>
      <tr>
      <td>Source of fund		
		
        </td>
        <input type="hidden" name="q56_type_of_meeting[]" value="40">
        <td> <input type="text" id="q56_union_40" value="<?= isset($question_56_data->q56_data->q56_union_40) ? $question_56_data->q56_data->q56_union_40 :'' ?>" name="q56_union[]" class="form-control q56Input"> </td>
        <td> <input type="text" id="q56_upazila_40" value="<?= isset($question_56_data->q56_data->q56_upazila_40) ? $question_56_data->q56_data->q56_upazila_40 :'' ?>" name="q56_upazila[]" class="form-control q56Input"> </td>
        <td> <input type="text" id="q56_district_40" value="<?= isset($question_56_data->q56_data->q56_district_40) ? $question_56_data->q56_data->q56_district_40 :'' ?>" name="q56_district[]" class="form-control q56Input"> </td>
        <td> <input type="text" id="q56_total_40" value="<?= isset($question_56_data->q56_data->q56_total_40) ? $question_56_data->q56_data->q56_total_40 :'' ?>" name="q56_total[]" class="form-control q56Input"> </td>
      </tr>
      <tr>
      <th>Attach/ Upload		
		
        </th>
        <input type="hidden" name="q56_type_of_meeting[]" value="41">
        <td>   <input type="file" name="q56_upload_photo[]" class="form-control"> </td>
        <td> <input type="file" name="q56_upload_photo[]" class="form-control">  </td>
        <td> <input type="file" name="q56_upload_photo[]" class="form-control">  </td>
        <td> <input type="file" name="q56_upload_photo[]" class="form-control">  </td>

      </tr>
            </tbody>
          </table>
        
          <br/>
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question56">Save</button>       
            </p>
        </div>
      </div>
    </div>
    @endif

<?php }
  ?>
    <script>

  $(function(){
    $(document).on("click",'#temp-save-question56',function() {

      var q56_data={}
      // alert($(this).attr('id'))
      $('.q56Input').each(function() {
        Object.assign(q56_data,{[$(this).attr('id')]:$(this).val()}) 

       });
       let new_data = {
        q56_data:q56_data
       }
      //  console.log(new_data)
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
                'question56':new_data,
                'question_no':'56',
              },
              url: "/superadmin/case/temp-save-question40to60",             
              success: function(response){ 
                if(response){
                  alert("Question 56 has been saved temporary")

                }else{
                  alert("Not Saved")
                }
              }
      });
    }); 
  }); 

</script>