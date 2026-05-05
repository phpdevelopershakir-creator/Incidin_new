<?php
if($questiontitles[35]->status==0)
{

  ?>
@if(Auth::user()->can('36.question'))
<!-- question no 36 Start -->
<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">
        <span class="numbering">36</span>.
           @if (isset($questiontitles [35]))
         {{ $questiontitles[35]->title }}
         @endif
         </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <h3>Investigations</h3>
      <table class="table table-bordered" cellpadding=0 celspecing=0 width="100%">
        <thead>
          <tr align="center">
            <th>Type of TIP Cases investigated</th>
            <th>Category of coverage</th>
            <th>Men</th>
            <th>Women</th>
            <th>3rd Gender</th>
            <th>Boys</th>
            <th>Girls</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>

        
        <tr>
          <td rowspan=3>Individuals/cases (new this reporting period)</td>
          <input type="hidden" name="q36_type_cases_investigated[]" value="1">
          <input type="hidden" name="q36_type_cases_investigated[]" value="1">
          <input type="hidden" name="q36_type_cases_investigated[]" value="1">
          <td>Number of Victims of Sex Trafficking Cases</td>
          <input type="hidden" name="q36_category_coverage[]" value="1">
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_men[]" id="q36Col1a" value="<?= isset($question_36_data->q36_data->q36Col1a) ? $question_36_data->q36_data->q36Col1a :'' ?>" class="form-control question36RowMen question36Col1 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_women[]" id="q36Col1b" value="<?= isset($question_36_data->q36_data->q36Col1b) ? $question_36_data->q36_data->q36Col1b :'' ?>" class="form-control question36RowWomen question36Col1 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_third_gender[]" id="q36Col1c" value="<?= isset($question_36_data->q36_data->q36Col1c) ? $question_36_data->q36_data->q36Col1c :'' ?>" class="form-control question36RowBoys question36Col1 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_boy[]" id="q36Col1d" value="<?= isset($question_36_data->q36_data->q36Col1d) ? $question_36_data->q36_data->q36Col1d :'' ?>" class="form-control  question36RowGirls question36Col1 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_girl[]" id="q36Col1e" value="<?= isset($question_36_data->q36_data->q36Col1e) ? $question_36_data->q36_data->q36Col1e :'' ?>" class="form-control question36Row3rdGender question36Col1 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_total[]" id="question36Col1" value="<?= isset($question_36_data->q36_data->question36Col1) ? $question_36_data->q36_data->question36Col1 :'' ?>" class="form-control q36Total q36Input" readonly="true"></td>
        </tr>
        <tr>
          <td>Number of Victims of Labour Trafficking Cases</td>
          <input type="hidden" name="q36_category_coverage[]" value="2">
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_men[]" id="q36Col2a" value="<?= isset($question_36_data->q36_data->q36Col2a) ? $question_36_data->q36_data->q36Col2a :'' ?>" class="form-control question36RowMen question36Col2 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_women[]" id="q36Col2b" value="<?= isset($question_36_data->q36_data->q36Col2b) ? $question_36_data->q36_data->q36Col2b :'' ?>" class="form-control question36RowWomen question36Col2 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_third_gender[]" id="q36Col2c" value="<?= isset($question_36_data->q36_data->q36Col2c) ? $question_36_data->q36_data->q36Col2c :'' ?>" class="form-control question36RowBoys question36Col2 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_boy[]" id="q36Col2d" value="<?= isset($question_36_data->q36_data->q36Col2d) ? $question_36_data->q36_data->q36Col2d :'' ?>" class="form-control question36RowGirls question36Col2 q36Input"> </td>
          <td><input type="text" name="q36_new_report_sex_trafficking_cases_girl[]" id="q36Col2e" value="<?= isset($question_36_data->q36_data->q36Col2e) ? $question_36_data->q36_data->q36Col2e :'' ?>" class="form-control question36Row3rdGender question36Col2 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_total[]" id="question36Col2" value="<?= isset($question_36_data->q36_data->question36Col2) ? $question_36_data->q36_data->question36Col2 :'' ?>"  class="form-control q36Total q36Input" readonly="true"></td>
        </tr>
        <tr>
          <td> Number of Victims of Other/unspecified Trafficking Cases</td>
          <input type="hidden" name="q36_category_coverage[]" value="3">
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_men[]" id="q36Col3a" value="<?= isset($question_36_data->q36_data->q36Col3a) ? $question_36_data->q36_data->q36Col3a :'' ?>" class="form-control question36RowMen question36Col3 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_women[]" id="q36Col3b" value="<?= isset($question_36_data->q36_data->q36Col3b) ? $question_36_data->q36_data->q36Col3b :'' ?>" class="form-control question36RowWomen question36Col3 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_third_gender[]" id="q36Col3c" value="<?= isset($question_36_data->q36_data->q36Col3c) ? $question_36_data->q36_data->q36Col3c :'' ?>" class="form-control question36RowBoys question36Col3 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_boy[]" id="q36Col3d" value="<?= isset($question_36_data->q36_data->q36Col3d) ? $question_36_data->q36_data->q36Col3d :'' ?>" class="form-control question36RowGirls question36Col3 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_girl[]" id="q36Col3e" value="<?= isset($question_36_data->q36_data->q36Col3e) ? $question_36_data->q36_data->q36Col3e :'' ?>" class="form-control question36Row3rdGender question36Col3 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_total[]"  id="question36Col3" value="<?= isset($question_36_data->q36_data->question36Col3) ? $question_36_data->q36_data->question36Col3 :'' ?>"  class="form-control q36Total q36Input" readonly="true"></td>
        </tr>
        <tr>

        
          <td rowspan=3>Individuals/cases investigated (ongoing from the previous
            reporting period)
            <input type="hidden" name="q36_type_cases_investigated[]" value="2">
          <input type="hidden" name="q36_type_cases_investigated[]" value="2">
          <input type="hidden" name="q36_type_cases_investigated[]" value="2">
          </td>
          <td>Number of Victims of Sex Trafficking Cases</td>
          <input type="hidden" name="q36_category_coverage[]" value="1">
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_men[]" id="q36Col4a" value="<?= isset($question_36_data->q36_data->q36Col4a) ? $question_36_data->q36_data->q36Col4a :'' ?>" class="form-control question36RowMen question36Col4 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_women[]" id="q36Col4b" value="<?= isset($question_36_data->q36_data->q36Col4b) ? $question_36_data->q36_data->q36Col4b :'' ?>" class="form-control question36RowWomen question36Col4 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_third_gender[]" id="q36Col4c" value="<?= isset($question_36_data->q36_data->q36Col4c) ? $question_36_data->q36_data->q36Col4c :'' ?>" class="form-control question36RowBoys question36Col4 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_boy[]" id="q36Col4d" value="<?= isset($question_36_data->q36_data->q36Col4d) ? $question_36_data->q36_data->q36Col4d :'' ?>" class="form-control question36RowGirls question36Col4 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_girl[]" id="q36Col4e" value="<?= isset($question_36_data->q36_data->q36Col4e) ? $question_36_data->q36_data->q36Col4e :'' ?>" class="form-control question36Row3rdGender question36Col4 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_total[]"  id="question36Col4" value="<?= isset($question_36_data->q36_data->question36Col4) ? $question_36_data->q36_data->question36Col4 :'' ?>"  class="form-control q36Total q36Input" readonly="true"></td>
        </tr>
        <tr>
          <td>Number of Victims of Labour Trafficking Cases</td>
          <input type="hidden" name="q36_category_coverage[]" value="2">
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_men[]" id="q36Col5a" value="<?= isset($question_36_data->q36_data->q36Col5a) ? $question_36_data->q36_data->q36Col5a :'' ?>" class="form-control question36RowMen question36Col5 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_women[]" id="q36Col5b" value="<?= isset($question_36_data->q36_data->q36Col5b) ? $question_36_data->q36_data->q36Col5b :'' ?>" class="form-control question36RowWomen question36Col5 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_third_gender[]" id="q36Col5c" value="<?= isset($question_36_data->q36_data->q36Col5c) ? $question_36_data->q36_data->q36Col5c :'' ?>" class="form-control question36RowBoys question36Col5 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_boy[]" id="q36Col5d" value="<?= isset($question_36_data->q36_data->q36Col5d) ? $question_36_data->q36_data->q36Col5d :'' ?>" class="form-control question36RowGirls question36Col5 q36Input"> </td>
          <td><input type="text" name="q36_new_report_sex_trafficking_cases_girl[]" id="q36Col5e" value="<?= isset($question_36_data->q36_data->q36Col5e) ? $question_36_data->q36_data->q36Col5e :'' ?>" class="form-control question36Row3rdGender question36Col5 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_total[]"  id="question36Col5" value="<?= isset($question_36_data->q36_data->question36Col5) ? $question_36_data->q36_data->question36Col5 :'' ?>"  class="form-control q36Total q36Input" readonly="true"></td>
        </tr>
        <tr>
          <td> Number of Victims of Other/unspecified Trafficking Cases</td>
          <input type="hidden" name="q36_category_coverage[]" value="3">
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_men[]" id="q36Col6a" value="<?= isset($question_36_data->q36_data->q36Col6a) ? $question_36_data->q36_data->q36Col6a :'' ?>" class="form-control  question36RowMen question36Col6 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_women[]" id="q36Col6b" value="<?= isset($question_36_data->q36_data->q36Col6b) ? $question_36_data->q36_data->q36Col6b :'' ?>" class="form-control question36RowWomen question36Col6 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_third_gender[]" id="q36Col6c" value="<?= isset($question_36_data->q36_data->q36Col6c) ? $question_36_data->q36_data->q36Col6c :'' ?>" class="form-control question36RowBoys question36Col6 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_boy[]" id="q36Col6d" value="<?= isset($question_36_data->q36_data->q36Col6d) ? $question_36_data->q36_data->q36Col6d :'' ?>" class="form-control question36RowGirls question36Col6 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_girl[]" id="q36Col6e" value="<?= isset($question_36_data->q36_data->q36Col6e) ? $question_36_data->q36_data->q36Col6e :'' ?>" class="form-control question36Row3rdGender question36Col6 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_total[]" id="question36Col6" value="<?= isset($question_36_data->q36_data->question36Col6) ? $question_36_data->q36_data->question36Col6 :'' ?>"  class="form-control q36Total q36Input" readonly="true"></td>
        </tr>


        <tr>
          <td rowspan=3>Individuals/cases investigated (new this reporting period)</td>
          <input type="hidden" name="q36_type_cases_investigated[]" value="3">
          <input type="hidden" name="q36_type_cases_investigated[]" value="3">
          <input type="hidden" name="q36_type_cases_investigated[]" value="3">
          <td>Number of Victims of Sex Trafficking Cases</td>
          <input type="hidden" name="q36_category_coverage[]" value="1">
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_men[]" id="q36Col7a" value="<?= isset($question_36_data->q36_data->q36Col7a) ? $question_36_data->q36_data->q36Col7a :'' ?>" class="form-control question36RowMen question36Col7 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_women[]" id="q36Col7b" value="<?= isset($question_36_data->q36_data->q36Col7b) ? $question_36_data->q36_data->q36Col7b :'' ?>" class="form-control  question36RowWomen question36Col7 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_third_gender[]" id="q36Col7c" value="<?= isset($question_36_data->q36_data->q36Col7c) ? $question_36_data->q36_data->q36Col7c :'' ?>" class="form-control question36RowBoys question36Col7 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_boy[]" id="q36Col7d" value="<?= isset($question_36_data->q36_data->q36Col7d) ? $question_36_data->q36_data->q36Col7d :'' ?>" class="form-control question36RowGirls question36Col7 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_girl[]" id="q36Col7e" value="<?= isset($question_36_data->q36_data->q36Col7e) ? $question_36_data->q36_data->q36Col7e :'' ?>" class="form-control question36Row3rdGender question36Col7 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_total[]"  id="question36Col7" value="<?= isset($question_36_data->q36_data->question36Col7) ? $question_36_data->q36_data->question36Col7 :'' ?>"  class="form-control q36Total q36Input" readonly="true"></td>
        </tr>
        <tr>
          <td>Number of Victims of Labour Trafficking Cases</td>
          <input type="hidden" name="q36_category_coverage[]" value="2">
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_men[]" id="q36Col8a" value="<?= isset($question_36_data->q36_data->q36Col8a) ? $question_36_data->q36_data->q36Col8a :'' ?>"  class="form-control question36RowMen question36Col8 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_women[]" id="q36Col8b" value="<?= isset($question_36_data->q36_data->q36Col8b) ? $question_36_data->q36_data->q36Col8b :'' ?>"  class="form-control question36RowWomen question36Col8 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_third_gender[]" id="q36Col8c" value="<?= isset($question_36_data->q36_data->q36Col8c) ? $question_36_data->q36_data->q36Col8c :'' ?>"  class="form-control question36RowBoys question36Col8 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_boy[]" id="q36Col8d" value="<?= isset($question_36_data->q36_data->q36Col8d) ? $question_36_data->q36_data->q36Col8d :'' ?>"  class="form-control question36RowGirls question36Col8 q36Input"> </td>
          <td><input type="text" name="q36_new_report_sex_trafficking_cases_girl[]" id="q36Col8e" value="<?= isset($question_36_data->q36_data->q36Col8e) ? $question_36_data->q36_data->q36Col8e :'' ?>"  class="form-control question36Row3rdGender question36Col8 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_total[]" id="question36Col8" value="<?= isset($question_36_data->q36_data->question36Col8) ? $question_36_data->q36_data->question36Col8 :'' ?>"   class="form-control q36Total q36Input" readonly="true"></td>
        </tr>
        <tr>
          <td> Number of Victims of Other/unspecified Trafficking Cases</td>
          <input type="hidden" name="q36_category_coverage[]" value="3">
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_men[]" id="q36Col9a" value="<?= isset($question_36_data->q36_data->q36Col9a) ? $question_36_data->q36_data->q36Col9a :'' ?>" class="form-control question36RowMen question36Col9 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_women[]" id="q36Col9b" value="<?= isset($question_36_data->q36_data->q36Col9b) ? $question_36_data->q36_data->q36Col9b :'' ?>" class="form-control question36RowWomen question36Col9 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_third_gender[]" id="q36Col9c" value="<?= isset($question_36_data->q36_data->q36Col9c) ? $question_36_data->q36_data->q36Col9c :'' ?>" class="form-control question36RowBoys question36Col9 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_boy[]" id="q36Col9d" value="<?= isset($question_36_data->q36_data->q36Col9d) ? $question_36_data->q36_data->q36Col9d :'' ?>" class="form-control question36RowGirls question36Col9 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_girl[]" id="q36Col9e" value="<?= isset($question_36_data->q36_data->q36Col9e) ? $question_36_data->q36_data->q36Col9e :'' ?>" class="form-control  question36Row3rdGender question36Col9 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_total[]"  id="question36Col9" value="<?= isset($question_36_data->q36_data->question36Col9) ? $question_36_data->q36_data->question36Col9 :'' ?>"  class="form-control q36Total q36Input" readonly="true"></td>
        </tr>


        <tr>
          <td rowspan=3>Individuals/cases investigated (ongoing from the previous
            reporting period)
          </td>
          <input type="hidden" name="q36_type_cases_investigated[]" value="4">
          <input type="hidden" name="q36_type_cases_investigated[]" value="4">
          <input type="hidden" name="q36_type_cases_investigated[]" value="4">
          <td>Number of Victims of Sex Trafficking Cases</td>
          <input type="hidden" name="q36_category_coverage[]" value="1">
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_men[]" id="q36Col20a" value="<?= isset($question_36_data->q36_data->q36Col20a) ? $question_36_data->q36_data->q36Col20a :'' ?>" class="form-control question36RowMen question36Co20 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_women[]" id="q36Col20b" value="<?= isset($question_36_data->q36_data->q36Col20b) ? $question_36_data->q36_data->q36Col20b :'' ?>" class="form-control question36RowWomen question36Co20 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_third_gender[]" id="q36Col20c" value="<?= isset($question_36_data->q36_data->q36Col20c) ? $question_36_data->q36_data->q36Col20c :'' ?>" class="form-control question36RowBoys question36Co20 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_boy[]" id="q36Col20d" value="<?= isset($question_36_data->q36_data->q36Col20d) ? $question_36_data->q36_data->q36Col20d :'' ?>" class="form-control  question36RowGirls question36Co20 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_girl[]" id="q36Col20e" value="<?= isset($question_36_data->q36_data->q36Col20e) ? $question_36_data->q36_data->q36Col20e :'' ?>" class="form-control question36Row3rdGender question36Co20 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_total[]" id="question36Co20" value="<?= isset($question_36_data->q36_data->question36Co20) ? $question_36_data->q36_data->question36Co20 :'' ?>"  class="form-control q36Total q36Input" readonly="true"></td>
        </tr>
        <tr>
          <td>Number of Victims of Labour Trafficking Cases</td>
          <input type="hidden" name="q36_category_coverage[]" value="2">
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_men[]" id="q36Col21a" value="<?= isset($question_36_data->q36_data->q36Col21a) ? $question_36_data->q36_data->q36Col21a :'' ?>" class="form-control question36RowMen question36Co21 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_women[]" id="q36Col21b" value="<?= isset($question_36_data->q36_data->q36Col21b) ? $question_36_data->q36_data->q36Col21b :'' ?>" class="form-control question36RowWomen question36Co21 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_third_gender[]" id="q36Col21c" value="<?= isset($question_36_data->q36_data->q36Col21c) ? $question_36_data->q36_data->q36Col21c :'' ?>" class="form-control question36RowBoys question36Co21 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_boy[]" id="q36Col21d" value="<?= isset($question_36_data->q36_data->q36Col21d) ? $question_36_data->q36_data->q36Col21d :'' ?>" class="form-control  question36RowGirls question36Co21 q36Input"> </td>
          <td><input type="text" name="q36_new_report_sex_trafficking_cases_girl[]" id="q36Col21e" value="<?= isset($question_36_data->q36_data->q36Col21e) ? $question_36_data->q36_data->q36Col21e :'' ?>" class="form-control  question36Row3rdGender question36Co21 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_total[]" id="question36Co21" value="<?= isset($question_36_data->q36_data->question36Co21) ? $question_36_data->q36_data->question36Co21 :'' ?>"  class="form-control q36Total q36Input" readonly="true"></td>
        </tr>
        <tr>
          <td> Number of Victims of Other/unspecified Trafficking Cases</td>
          <input type="hidden" name="q36_category_coverage[]" value="3">
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_men[]" id="q36Col22a" value="<?= isset($question_36_data->q36_data->q36Col22a) ? $question_36_data->q36_data->q36Col22a :'' ?>" class="form-control question36RowMen question36Co22 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_women[]" id="q36Col22b" value="<?= isset($question_36_data->q36_data->q36Col22b) ? $question_36_data->q36_data->q36Col22b :'' ?>" class="form-control question36RowWomen question36Co22 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_third_gender[]" id="q36Col22c" value="<?= isset($question_36_data->q36_data->q36Col22c) ? $question_36_data->q36_data->q36Col22c :'' ?>" class="form-control question36RowBoys question36Co22 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_boy[]" id="q36Col22d" value="<?= isset($question_36_data->q36_data->q36Col22d) ? $question_36_data->q36_data->q36Col22d :'' ?>" class="form-control  question36RowGirls question36Co22 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_girl[]" id="q36Col22e" value="<?= isset($question_36_data->q36_data->q36Col22e) ? $question_36_data->q36_data->q36Col22e :'' ?>" class="form-control  question36Row3rdGender question36Co22 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_total[]" id="question36Co22" value="<?= isset($question_36_data->q36_data->question36Co22) ? $question_36_data->q36_data->question36Co22 :'' ?>"  class="form-control q36Total q36Input" readonly="true"></td>
        </tr>


        <tr>
          <td rowspan=3>Individuals/cases investigated (new this
            reporting period)
          </td>
          <input type="hidden" name="q36_type_cases_investigated[]" value="5">
          <input type="hidden" name="q36_type_cases_investigated[]" value="5">
          <input type="hidden" name="q36_type_cases_investigated[]" value="5">
          <td>Number of Victims of Sex Trafficking Cases</td>
          <input type="hidden" name="q36_category_coverage[]" value="1">
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_men[]" id="q36Col23a" value="<?= isset($question_36_data->q36_data->q36Col23a) ? $question_36_data->q36_data->q36Col23a :'' ?>" class="form-control question36RowMen question36Co23 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_women[]" id="q36Col23b" value="<?= isset($question_36_data->q36_data->q36Col23b) ? $question_36_data->q36_data->q36Col23b :'' ?>" class="form-control question36RowWomen question36Co23 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_third_gender[]" id="q36Col23c" value="<?= isset($question_36_data->q36_data->q36Col23c) ? $question_36_data->q36_data->q36Col23c :'' ?>" class="form-control question36RowBoys question36Co23 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_boy[]" id="q36Col23d" value="<?= isset($question_36_data->q36_data->q36Col23d) ? $question_36_data->q36_data->q36Col23d :'' ?>" class="form-control question36RowGirls question36Co23 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_girl[]" id="q36Col23e" value="<?= isset($question_36_data->q36_data->q36Col23e) ? $question_36_data->q36_data->q36Col23e :'' ?>" class="form-control  question36Row3rdGender question36Co23 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_total[]" id="question36Co23" value="<?= isset($question_36_data->q36_data->question36Co23) ? $question_36_data->q36_data->question36Co23 :'' ?>"  class="form-control q36Total q36Input" readonly="true"></td>
        </tr>
        <tr>
          <td>Number of Victims of Labour Trafficking Cases</td>
          <input type="hidden" name="q36_category_coverage[]" value="2">
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_men[]" id="q36Col24a" value="<?= isset($question_36_data->q36_data->q36Col24a) ? $question_36_data->q36_data->q36Col24a :'' ?>" class="form-control question36RowMen question36Co24 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_women[]" id="q36Col24b" value="<?= isset($question_36_data->q36_data->q36Col24b) ? $question_36_data->q36_data->q36Col24b :'' ?>" class="form-control question36RowWomen question36Co24 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_third_gender[]" id="q36Col24c" value="<?= isset($question_36_data->q36_data->q36Col24c) ? $question_36_data->q36_data->q36Col24c :'' ?>" class="form-control question36RowBoys question36Co24 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_boy[]" id="q36Col24d" value="<?= isset($question_36_data->q36_data->q36Col24d) ? $question_36_data->q36_data->q36Col24d :'' ?>" class="form-control question36RowGirls question36Co24 q36Input"> </td>
          <td><input type="text" name="q36_new_report_sex_trafficking_cases_girl[]" id="q36Col24e" value="<?= isset($question_36_data->q36_data->q36Col24e) ? $question_36_data->q36_data->q36Col24e :'' ?>" class="form-control question36Row3rdGender question36Co24 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_total[]" id="question36Co24" value="<?= isset($question_36_data->q36_data->question36Co24) ? $question_36_data->q36_data->question36Co24 :'' ?>"  class="form-control q36Total q36Input" readonly="true"></td>
        </tr>
        <tr>
          <td> Number of Victims of Other/unspecified Trafficking Cases</td>
          <input type="hidden" name="q36_category_coverage[]" value="3">
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_men[]" id="q36Col25a" value="<?= isset($question_36_data->q36_data->q36Col25a) ? $question_36_data->q36_data->q36Col25a :'' ?>" class="form-control question36RowMen question36Co25 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_women[]" id="q36Col25b" value="<?= isset($question_36_data->q36_data->q36Col25b) ? $question_36_data->q36_data->q36Col25b :'' ?>" class="form-control question36RowWomen question36Co25 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_third_gender[]" id="q36Col25c" value="<?= isset($question_36_data->q36_data->q36Col25c) ? $question_36_data->q36_data->q36Col25c :'' ?>" class="form-control  question36RowBoys question36Co25 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_boy[]" id="q36Col25d" value="<?= isset($question_36_data->q36_data->q36Col25d) ? $question_36_data->q36_data->q36Col25d :'' ?>" class="form-control question36RowGirls question36Co25 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_girl[]" id="q36Col25e" value="<?= isset($question_36_data->q36_data->q36Col25e) ? $question_36_data->q36_data->q36Col25e :'' ?>" class="form-control question36Row3rdGender question36Co25 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_total[]" id="question36Co25" value="<?= isset($question_36_data->q36_data->question36Co25) ? $question_36_data->q36_data->question36Co25 :'' ?>"  class="form-control q36Total q36Input" readonly="true"></td>
        </tr>


        <tr>
          <td rowspan=3>Individuals/cases investigated (ongoing from the previous reporting period)
          </td>
          <input type="hidden" name="q36_type_cases_investigated[]" value="6">
          <input type="hidden" name="q36_type_cases_investigated[]" value="6">
          <input type="hidden" name="q36_type_cases_investigated[]" value="6">
          <td>Number of Victims of Sex Trafficking Cases</td>
          <input type="hidden" name="q36_category_coverage[]" value="1">
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_men[]" id="q36Col26a" value="<?= isset($question_36_data->q36_data->q36Col26a) ? $question_36_data->q36_data->q36Col26a :'' ?>" class="form-control question36RowMen question36Co26 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_women[]" id="q36Col26b" value="<?= isset($question_36_data->q36_data->q36Col26b) ? $question_36_data->q36_data->q36Col26b :'' ?>" class="form-control question36RowWomen question36Co26 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_third_gender[]" id="q36Col26c" value="<?= isset($question_36_data->q36_data->q36Col26c) ? $question_36_data->q36_data->q36Col26c :'' ?>" class="form-control question36RowBoys question36Co26 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_boy[]" id="q36Col26d" value="<?= isset($question_36_data->q36_data->q36Col26d) ? $question_36_data->q36_data->q36Col26d :'' ?>" class="form-control question36RowGirls question36Co26 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_girl[]" id="q36Col26e" value="<?= isset($question_36_data->q36_data->q36Col26e) ? $question_36_data->q36_data->q36Col26e :'' ?>" class="form-control question36Row3rdGender question36Co26 q36Input"></td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_total[]" id="question36Co26" value="<?= isset($question_36_data->q36_data->question36Co26) ? $question_36_data->q36_data->question36Co26 :'' ?>"  class="form-control q36Total q36Input" readonly="true"></td>
        </tr>
        <tr>
          <td>Number of Victims of Labour Trafficking Cases</td>
          <input type="hidden" name="q36_category_coverage[]" value="2">
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_men[]" id="q36Col27a" value="<?= isset($question_36_data->q36_data->q36Col27a) ? $question_36_data->q36_data->q36Col27a :'' ?>" class="form-control question36RowMen question36Co27 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_women[]" id="q36Col27b" value="<?= isset($question_36_data->q36_data->q36Col27b) ? $question_36_data->q36_data->q36Col27b :'' ?>" class="form-control question36RowWomen question36Co27 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_third_gender[]" id="q36Col27c" value="<?= isset($question_36_data->q36_data->q36Col27c) ? $question_36_data->q36_data->q36Col27c :'' ?>" class="form-control question36RowBoys question36Co27 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_boy[]" id="q36Col27d" value="<?= isset($question_36_data->q36_data->q36Col27d) ? $question_36_data->q36_data->q36Col27d :'' ?>" class="form-control question36RowGirls question36Co27 q36Input"> </td>
          <td><input type="text" name="q36_new_report_sex_trafficking_cases_girl[]" id="q36Col27e" value="<?= isset($question_36_data->q36_data->q36Col27e) ? $question_36_data->q36_data->q36Col27e :'' ?>" class="form-control question36Row3rdGender question36Co27 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_total[]" id="question36Co27" value="<?= isset($question_36_data->q36_data->question36Co27) ? $question_36_data->q36_data->question36Co27 :'' ?>"  class="form-control q36Total q36Input" readonly="true"></td>
        </tr>
        <tr>
          <td> Number of Victims of Other/unspecified Trafficking Cases</td>
          <input type="hidden" name="q36_category_coverage[]" value="3">
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_men[]" id="q36Col28a" value="<?= isset($question_36_data->q36_data->q36Col28a) ? $question_36_data->q36_data->q36Col28a :'' ?>" class="form-control question36RowMen question36Co28 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_women[]" id="q36Col28b" value="<?= isset($question_36_data->q36_data->q36Col28b) ? $question_36_data->q36_data->q36Col28b :'' ?>" class="form-control question36RowWomen question36Co28 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_third_gender[]" id="q36Col28c" value="<?= isset($question_36_data->q36_data->q36Col28c) ? $question_36_data->q36_data->q36Col28c :'' ?>" class="form-control  question36RowBoys question36Co28 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_boy[]" id="q36Col28d" value="<?= isset($question_36_data->q36_data->q36Col28d) ? $question_36_data->q36_data->q36Col28d :'' ?>" class="form-control question36RowGirls question36Co28 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_girl[]" id="q36Col28e" value="<?= isset($question_36_data->q36_data->q36Col28e) ? $question_36_data->q36_data->q36Col28e :'' ?>" class="form-control question36Row3rdGender question36Co28 q36Input"> </td>
          <td> <input type="text" name="q36_new_report_sex_trafficking_cases_total[]" id="question36Co28" value="<?= isset($question_36_data->q36_data->question36Co28) ? $question_36_data->q36_data->question36Co28 :'' ?>"  class="form-control q36Total q36Input" readonly="true"></td>
        </tr>
        <tr>
          <th colspan="2" style="text-align: right;"> Grand Total</th>
          <td> <input type="text" name="" id="q36MenTotal" value="<?= isset($question_36_data->q36_data->q36MenTotal) ? $question_36_data->q36_data->q36MenTotal :'' ?>"  class="form-control q36gTotal q36Input" readonly="true"></td>
          <td> <input type="text" name="" id="q36WomenTotal" value="<?= isset($question_36_data->q36_data->q36WomenTotal) ? $question_36_data->q36_data->q36WomenTotal :'' ?>"  class="form-control q36gTotal q36Input" readonly="true"></td>
          <td> <input type="text" name="" id="q36BoysTotal" value="<?= isset($question_36_data->q36_data->q36BoysTotal) ? $question_36_data->q36_data->q36BoysTotal :'' ?>"  class="form-control q36gTotal q36Input" readonly="true"></td>
          <td> <input type="text" name="" id="q36GirlsTotal" value="<?= isset($question_36_data->q36_data->q36GirlsTotal) ? $question_36_data->q36_data->q36GirlsTotal :'' ?>"  class="form-control q36gTotal q36Input" readonly="true"></td>
          <td> <input type="text" name="" id="q36TrdGTotal" value="<?= isset($question_36_data->q36_data->q36TrdGTotal) ? $question_36_data->q36_data->q36TrdGTotal :'' ?>"  class="form-control q36gTotal q36Input" readonly="true"></td>
          <td> <input type="text" name="" id="q36gTotal" value="<?= isset($question_36_data->q36_data->q36gTotal) ? $question_36_data->q36_data->q36gTotal :'' ?>" class="form-control q36Input" readonly="true"></td>

        </tr>


        </tbody>
      </table>
      <br/>
      <p class="text-right">
          <button type="button" class="btn btn-success" id="temp-save-question36">Save</button>       
      </p>
    </div>
  </div>
</div>
<!-- question no 36 End -->
    @endif


<?php }
  ?>
<script>
    $(function(){
    $(document).on("click",'#temp-save-question36',function() {

      var q36_data={}
      // alert($(this).attr('id'))
      $('.q36Input').each(function() {
        Object.assign(q36_data,{[$(this).attr('id')]:$(this).val()}) 

       });
       let new_data = {
        q36_data:q36_data
       }
      //  console.log(new_data)
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
                'question36':new_data,
                'question_no':'36',
              },
              url: "/superadmin/case/temp-save-question40to60",             
              success: function(response){ 
                if(response){
                  alert("Question 36 has been saved temporary")

                }else{
                  alert("Not Saved")
                }
              }
      });
    }); 
  }); 

</script>