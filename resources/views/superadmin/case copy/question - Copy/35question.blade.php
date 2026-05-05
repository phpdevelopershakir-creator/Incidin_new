<?php
if($questiontitles[34]->status==0)
{

  ?>
@if(Auth::user()->can('35.question'))
<style>
  .othersText{
    display:none
  }
  .visibility{
    display:none
  }
</style>
     <div class="col-md-12 question35">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
           <span class="numbering">35</span>.
           @if (isset($questiontitles [34]))
         {{ $questiontitles[34]->title }}
         @endif
          </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="icheck-primary">
          <?php if(isset($question_35_data->q35_checked_value)) { ?>

            <input 
            type="radio" 
            id="radioTen11"  
            class="thirty_five_status" 
            name="is_changes_preexisting_q35" 
            <?=(isset($question_35_data->q35_checked_value)   && $question_35_data->q35_checked_value=='1') ? 'checked' : '' ;?> value="1">
            <?php } else { ?>
            
            <input type="radio" id="radioTen11"  class="thirty_five_status" name="is_changes_preexisting_q35" checked value="1">
           <?php } ?>
            
            <label for="radioTen11">
              Yes
            </label>
          </div>
          <div class="icheck-primary">
            <input type="radio" id="radioTen22"  class="thirty_five_status" name="is_changes_preexisting_q35" <?=(isset($question_35_data->q35_checked_value)   && $question_35_data->q35_checked_value=='0') ? 'checked' : '' ;?> value="0" >
            <label for="radioTen22">
              No
            </label>
          </div>

          <div class="icheck-primary input-group mb-3">
            <input type="radio" id="radioTen33"  class="thirty_five_status" name="is_changes_preexisting_q35" <?=(isset($question_35_data->q35_checked_value)   && $question_35_data->q35_checked_value=='2') ? 'checked' : '' ;?>  value="2">
            <label for="radioTen33">
              Others
            </label><span class=" col-md-6 mt--4 <?=(isset($question_35_data->q35_checked_value)   && ($question_35_data->q35_checked_value=='2')) ? '' : 'othersText' ;?>" style="margin-top:-8px;">
            <input type="text" id="q35others"  placeholder="Others " value="<?=(isset($question_35_data->others)) ? $question_35_data->others : '' ;?>"  class="form-control" name="changes_preexisting_others_q35"></span>
        
          </div>
      <div id="35_question_view" class="<?=(isset($question_35_data->q35_checked_value)   && ($question_35_data->q35_checked_value=='2' || $question_35_data->q35_checked_value=='0')) ? 'visibility' : '' ;?>">
          <h3>Reform of Existing Law</h3>
          <table class="table table-bordered table-white">
            <thead>
              <tr>
                <th scope="col">Title of the law</th>
                <th scope="col">Contents of Change/Status</th>
                <th scope="col">Attach/Upload</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <select name="reform_existing_law_q35_one[]" id="law_status_one" class="form-control q35Input">
                    <option value="" disabled selected>--choose an item--</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_one=='1') ? 'selected' : '' ;?> value="1">PSHT 2012</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_one=='2') ? 'selected' : '' ;?> value="2">Rule of PSHTA (2017)</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_one=='3') ? 'selected' : '' ;?> value="3">OEMA 2013</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_one=='4') ? 'selected' : '' ;?> value="4">Children's Act</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_one=='5') ? 'selected' : '' ;?> value="5">Labour Act</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_one=='6') ? 'selected' : '' ;?> value="6">MLA in Criminal Matter 2012</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_one=='7') ? 'selected' : '' ;?> value="7">Human Organ Transfer Rule 1999</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_one=='8') ? 'selected' : '' ;?> value="8">Passport Act 1920</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_one=='9') ? 'selected' : '' ;?> value="9">Bangladesh Passport Order 1973</option>
                  </select>

                </td>
                <td> 
                  <select name="contents_status_id_q35_one[]" class="form-control q35Input" id="status_one">
                  <option value="" disabled selected>--choose an item--</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_one=='1') ? 'selected' : '' ;?> value="1">Revised</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_one=='2') ? 'selected' : '' ;?> value="2">Abolished</option>
                  </select>
               

                </td>
                <td> <input type="file" name="attach_upload_one[]" class="form-control"> </td>
              </tr>

              <tr>
                <td scope="row">
                  <select name="reform_existing_law_q35_one[]" id="law_status_two" class="form-control q35Input">
                <option value="" disabled selected>--choose an item--</option>
                <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_two=='1') ? 'selected' : '' ;?> value="1">PSHT 2012</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_two=='2') ? 'selected' : '' ;?> value="2">Rule of PSHTA (2017)</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_two=='3') ? 'selected' : '' ;?> value="3">OEMA 2013</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_two=='4') ? 'selected' : '' ;?> value="4">Children's Act</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_two=='5') ? 'selected' : '' ;?> value="5">Labour Act</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_two=='6') ? 'selected' : '' ;?> value="6">MLA in Criminal Matter 2012</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_two=='7') ? 'selected' : '' ;?> value="7">Human Organ Transfer Rule 1999</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_two=='8') ? 'selected' : '' ;?> value="8">Passport Act 1920</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_two=='9') ? 'selected' : '' ;?> value="9">Bangladesh Passport Order 1973</option>
                  </select>

                </td>
               <td> 
                  <select name="contents_status_id_q35_one[]" class="form-control q35Input" id="status_two">
                  <option value="" disabled selected>--choose an item--</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_two=='1') ? 'selected' : '' ;?> value="1">Revised</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_two=='2') ? 'selected' : '' ;?> value="2">Abolished</option>
                  </select>
               

                </td>
                <td> <input type="file" name="attach_upload_one[]"  class="form-control"> </td>
              </tr>
              <tr>
                <td scope="row">
                  <select name="reform_existing_law_q35_one[]" id="law_status_three" class="form-control q35Input">
                  <option value="" disabled selected>--choose an item--</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_three=='1') ? 'selected' : '' ;?> value="1">PSHT 2012</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_three=='2') ? 'selected' : '' ;?> value="2">Rule of PSHTA (2017)</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_three=='3') ? 'selected' : '' ;?> value="3">OEMA 2013</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_three=='4') ? 'selected' : '' ;?> value="4">Children's Act</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_three=='5') ? 'selected' : '' ;?> value="5">Labour Act</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_three=='6') ? 'selected' : '' ;?> value="6">MLA in Criminal Matter 2012</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_three=='7') ? 'selected' : '' ;?> value="7">Human Organ Transfer Rule 1999</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_three=='8') ? 'selected' : '' ;?> value="8">Passport Act 1920</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_three=='9') ? 'selected' : '' ;?> value="9">Bangladesh Passport Order 1973</option>
                  </select>

                </td>
               <td> 
                  <select name="contents_status_id_q35_one[]" class="form-control q35Input" id="status_three">
                  <option value="" disabled selected>--choose an item--</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_three=='1') ? 'selected' : '' ;?> value="1">Revised</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_three=='2') ? 'selected' : '' ;?> value="2">Abolished</option>
                  </select>
               

                </td>
                <td> <input type="file" name="attach_upload_one[]" class="form-control"> </td>
              </tr>
              <tr>
                <td scope="row">
                  <select name="reform_existing_law_q35_one[]" id="law_status_four" class="form-control q35Input">
                  <option value="" disabled selected>--choose an item--</option>
                  <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_four=='1') ? 'selected' : '' ;?> value="1">PSHT 2012</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_four=='2') ? 'selected' : '' ;?> value="2">Rule of PSHTA (2017)</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_four=='3') ? 'selected' : '' ;?> value="3">OEMA 2013</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_four=='4') ? 'selected' : '' ;?> value="4">Children's Act</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_four=='5') ? 'selected' : '' ;?> value="5">Labour Act</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_four=='6') ? 'selected' : '' ;?> value="6">MLA in Criminal Matter 2012</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_four=='7') ? 'selected' : '' ;?> value="7">Human Organ Transfer Rule 1999</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_four=='8') ? 'selected' : '' ;?> value="8">Passport Act 1920</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_four=='9') ? 'selected' : '' ;?> value="9">Bangladesh Passport Order 1973</option>
                  </select>

                </td>
               <td> 
                  <select name="contents_status_id_q35_one[]" class="form-control q35Input" id="status_four">
                  <option value="" disabled selected>--choose an item--</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_four=='1') ? 'selected' : '' ;?> value="1">Revised</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_four=='2') ? 'selected' : '' ;?> value="2">Abolished</option>
                  </select>
               

                </td>
                <td> <input type="file" name="attach_upload_one[]" class="form-control"> </td>
              </tr>
              <tr>
                <td scope="row">
                  <select name="reform_existing_law_q35_one[]" id="law_status_five" class="form-control q35Input">
                  <option value="" disabled selected>--choose an item--</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_five=='1') ? 'selected' : '' ;?> value="1">PSHT 2012</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_five=='2') ? 'selected' : '' ;?> value="2">Rule of PSHTA (2017)</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_five=='3') ? 'selected' : '' ;?> value="3">OEMA 2013</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_five=='4') ? 'selected' : '' ;?> value="4">Children's Act</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_five=='5') ? 'selected' : '' ;?> value="5">Labour Act</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_five=='6') ? 'selected' : '' ;?> value="6">MLA in Criminal Matter 2012</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_five=='7') ? 'selected' : '' ;?> value="7">Human Organ Transfer Rule 1999</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_five=='8') ? 'selected' : '' ;?> value="8">Passport Act 1920</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_five=='9') ? 'selected' : '' ;?> value="9">Bangladesh Passport Order 1973</option>
                  </select>

                </td>
               <td> 
                  <select name="contents_status_id_q35_one[]" class="form-control q35Input" id="status_five">
                  <option value="" disabled selected>--choose an item--</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_five=='1') ? 'selected' : '' ;?> value="1">Revised</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_five=='2') ? 'selected' : '' ;?> value="2">Abolished</option>
                  </select>
               

                </td>
                <td> <input type="file" name="attach_upload_one[]" class="form-control"> </td>
              </tr>
              <tr>
                <td scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="reform_existing_law_q35_one[]" id="law_status_other_one" value="<?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_other_one) ? $question_35_data->q35_data->law_status_other_one : '' ;?>" class="form-control q35Input" width="100%"> </div>
                </td>
               <td> 
                  <select name="contents_status_id_q35_one[]" class="form-control q35Input" id="status_six">
                  <option value="" disabled selected>--choose an item--</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_six=='1') ? 'selected' : '' ;?> value="1">Revised</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_six=='2') ? 'selected' : '' ;?> value="2">Abolished</option>
                  </select>
               

                </td>
                <td> <input type="file" name="attach_upload_one[]" class="form-control"> </td>
              </tr>
              <tr>
                <td scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="reform_existing_law_q35_one[]" id="law_status_other_two" value="<?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_other_two) ? $question_35_data->q35_data->law_status_other_two : '' ;?>" class="form-control q35Input" width="100%"> </div>
                </td>
               <td> 
                  <select name="contents_status_id_q35_one[]" class="form-control q35Input" id="status_seven">
                  <option value="" disabled selected>--choose an item--</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_seven=='1') ? 'selected' : '' ;?> value="1">Revised</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_seven=='2') ? 'selected' : '' ;?> value="2">Abolished</option>
                  </select>
               

                </td>
                <td> <input type="file" name="attach_upload_one[]" class="form-control"> </td>
              </tr>
              <tr>
                <td scope="row">
                  <div class="RightContaner"> Others (Specify)</div>
                  <div class="LeftContaner"> <input type="text" name="reform_existing_law_q35_one[]" id="law_status_other_three" value="<?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_status_other_three) ? $question_35_data->q35_data->law_status_other_three : '' ;?>" class="form-control q35Input" width="100%"> </div>
                </td>
               <td> 
                  <select name="contents_status_id_q35_one[]" class="form-control q35Input" id="status_eight">
                  <option value="" disabled selected>--choose an item--</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_eight=='1') ? 'selected' : '' ;?> value="1">Revised</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_eight=='2') ? 'selected' : '' ;?> value="2">Abolished</option>
                  </select>
               

                </td>
                <td> <input type="file" name="attach_upload_one[]" class="form-control"> </td>
              </tr>
            </tbody>
          </table>

          <h3>New Law</h3>
          <table class="table table-bordered table-white">
            <thead>
              <tr>
                <th scope="col">Title of the New law</th>
                <th scope="col">Status</th>
                <th scope="col">Attach/Upload</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> <input name="q35_title[]" type="text" id="law_text_one" value="<?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_text_one) ? $question_35_data->q35_data->law_text_one : '' ;?>" class="form-control q35Input"> </td>
                <td>
                  <select class="form-control q35Input" id="status_nine" name="status_id_q35_two[]">
                  <option value="" disabled selected>Choose an item</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_nine=='1') ? 'selected' : '' ;?> value="1">Planned</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_nine=='2') ? 'selected' : '' ;?> value="2">On process of need assessment</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_nine=='3') ? 'selected' : '' ;?> value="3">Waiting to be enacted</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_nine=='4') ? 'selected' : '' ;?> value="4">Enacted</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_nine=='5') ? 'selected' : '' ;?> value="5">Enforced</option>
                  </select>
                </td>
                <td> <input type="file" name="attach_upload_q35_two[]" class="form-control ">
                </td>
              </tr>

              <tr>
                <td> <input type="text" name="q35_title[]" id="law_text_two" value="<?=isset($question_35_data->q35_data->law_text_two) ? $question_35_data->q35_data->law_text_two : '' ;?>" class="form-control q35Input"> </td>
                <td>
                  <select class="form-control q35Input" id="status_ten" name="status_id_q35_two[]">
                    <option value="" disabled selected>Choose an item</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_ten=='1') ? 'selected' : '' ;?> value="1">Planned</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_ten=='2') ? 'selected' : '' ;?> value="2">On process of need assessment</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_ten=='3') ? 'selected' : '' ;?> value="3">Waiting to be enacted</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_ten=='4') ? 'selected' : '' ;?> value="4">Enacted</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_ten=='5') ? 'selected' : '' ;?> value="5">Enforced</option>
                  </select>
                </td>
                <td> <input type="file" name="attach_upload_q35_two[]" class="form-control">
                </td>
              </tr>
              <tr>
                <td> <input type="text" name="q35_title[]" id="law_text_three" value="<?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_text_three) ? $question_35_data->q35_data->law_text_three : '' ;?>" class="form-control q35Input"> </td>
                <td>
                  <select class="form-control q35Input" id="status_eleven" name="status_id_q35_two[]">
                     <option value="" disabled selected>Choose an item</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_eleven=='1') ? 'selected' : '' ;?> value="1">Planned</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_eleven=='2') ? 'selected' : '' ;?> value="2">On process of need assessment</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_eleven=='3') ? 'selected' : '' ;?> value="3">Waiting to be enacted</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_eleven=='4') ? 'selected' : '' ;?> value="4">Enacted</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_eleven=='5') ? 'selected' : '' ;?> value="5">Enforced</option>
                  </select>
                </td>
                <td> <input type="file" name="attach_upload_q35_two[]" class="form-control"></td>
              </tr>
              <tr>
                <td> <input type="text" name="q35_title[]" id="law_text_four" value="<?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_text_four) ? $question_35_data->q35_data->law_text_four : '' ;?>" class="form-control q35Input"> </td>
                <td>
                  <select class="form-control q35Input" id="status_twelve" name="status_id_q35_two[]">
                    <option value="" disabled selected>Choose an item</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_twelve=='1') ? 'selected' : '' ;?> value="1">Planned</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_twelve=='2') ? 'selected' : '' ;?> value="2">On process of need assessment</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_twelve=='3') ? 'selected' : '' ;?> value="3">Waiting to be enacted</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_twelve=='4') ? 'selected' : '' ;?> value="4">Enacted</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_twelve=='5') ? 'selected' : '' ;?> value="5">Enforced</option>
                  </select>
                </td>
                <td> <input type="file" name="attach_upload_q35_two[]" class="form-control"></td>
              </tr>
              <tr>
                <td> <input type="text" name="q35_title[]" id="law_text_five" value="<?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_text_five) ? $question_35_data->q35_data->law_text_five : '' ;?>" class="form-control q35Input"> </td>
                <td>
                  <select class="form-control q35Input" id="status_thirteen" name="status_id_q35_two[]">
                    <option value="" disabled selected>Choose an item</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_thirteen=='1') ? 'selected' : '' ;?> value="1">Planned</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_thirteen=='2') ? 'selected' : '' ;?> value="2">On process of need assessment</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_thirteen=='3') ? 'selected' : '' ;?> value="3">Waiting to be enacted</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_thirteen=='4') ? 'selected' : '' ;?> value="4">Enacted</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_thirteen=='5') ? 'selected' : '' ;?> value="5">Enforced</option>
                  </select>
                </td>
                <td> <input type="file" name="attach_upload_q35_two[]" class="form-control"></td>
              </tr>
              <tr>
                <td> <input type="text" name="q35_title[]" id="law_text_six" value="<?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->law_text_six) ? $question_35_data->q35_data->law_text_six : '' ;?>" class="form-control q35Input"> </td>
                <td>
                  <select class="form-control q35Input" id="status_fourteen" name="status_id_q35_two[]">
                    <option value="" disabled selected>Choose an item</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_fourteen=='1') ? 'selected' : '' ;?> value="1">Planned</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_fourteen=='2') ? 'selected' : '' ;?> value="2">On process of need assessment</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_fourteen=='3') ? 'selected' : '' ;?> value="3">Waiting to be enacted</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_fourteen=='4') ? 'selected' : '' ;?> value="4">Enacted</option>
                    <option <?=(isset($question_35_data->q35_data)  &&  !empty($question_35_data->q35_data) && $question_35_data->q35_data->status_fourteen=='5') ? 'selected' : '' ;?> value="5">Enforced</option>
                  </select>
                </td>
                <td> <input type="file"  name="attach_upload_q35_two[]" class="form-control"></td>
              </tr>
            </tbody>
          </table>
        </div>
          <br/>
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question35">Save</button>       
            </p>
        </div>
      </div>
    </div> 
    @endif

<?php }
  ?>
    <script>

$(function(){
  $(document).on("click",'#temp-save-question35',function() {

    let yes_no_value=$("input[type='radio'][name='is_changes_preexisting_q35']:checked").val()

    var q35_data={
      
    }
    if(yes_no_value=='1'){
      $('.q35Input').each(function() {
        Object.assign(q35_data,{[$(this).attr('id')]:$(this).val()})   
      });
    }
    var new_data={
      q35_data:q35_data,
      q35_checked_value:yes_no_value,
      others:$("input[name='changes_preexisting_others_q35']").val()
    }
      // console.log(new_data)
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
              'question35':new_data,
              'question_no':'35',
            },
            url: "/superadmin/case/temp-save-question40to60",             
            success: function(response){ 
              if(response){
                alert("Question 35 has been saved temporary")

              }else{
                alert("Not Saved")
              }
            }
    });
  }); 
}); 

</script>