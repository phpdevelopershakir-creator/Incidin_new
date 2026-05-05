<?php
if($questiontitles[36]->status==0)
{

  ?>
@if(Auth::user()->can('37.question'))
            <!-- question no 37 Start -->
            <style>
              
            </style>  
            <div class="col-md-12">
                <div class="card card-outline collapsed-card">
                  <div class="card-header">
                    <h3 class="card-title">
                 <span class="numbering">37</span>.
           @if (isset($questiontitles [36]))
         {{ $questiontitles[36]->title }}
         @endif
                    </h3>
  
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3>Prosecution</h3>
                    <table class="table table-bordered" cellpadding=0 celspecing=0 width="100%">
                      <thead>
                      <tr>
                        <td colspan="2"> Type of TIP Cases investigated
                        </td>
                        <td class="col-md-2">M</td>
                        <td class="col-md-2">W</td>
                        <td class="col-md-2">3rd Gender</td>
                        <td class="col-md-2">B</td>
                        <td class="col-md-2">G</td>
                        <td class="col-md-2">T</td>
  
                      </tr>
            </thead>
<tbody>
  <tr>
    <td rowspan=3>Number of cases prosecuted</td>
    <input type="hidden" name="q37_type_cases_investigated[]" value="1">
    <input type="hidden" name="q37_type_cases_investigated[]" value="1">
    <input type="hidden" name="q37_type_cases_investigated[]" value="1">
    <td>Number of Victims of Sex Trafficking Cases</td>
    <input type="hidden" name="q37_category_coverage[]" value="1">
    <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen1" value="<?= isset($question_37_data->q37_data->q37ColMen1) ? $question_37_data->q37_data->q37ColMen1 :'' ?>" class="form-control question37RowMen question37Col1 q37Input"></td>
    <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen1" value="<?= isset($question_37_data->q37_data->q37ColWomen1) ? $question_37_data->q37_data->q37ColWomen1 :'' ?>" class="form-control question37RowWomen question37Col1 q37Input"></td>
    <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG1" value="<?= isset($question_37_data->q37_data->q37Col3rdG1) ? $question_37_data->q37_data->q37Col3rdG1 :'' ?>" class="form-control question37RowBoys question37Col1 q37Input"></td>
    <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy1" value="<?= isset($question_37_data->q37_data->q37ColBoy1) ? $question_37_data->q37_data->q37ColBoy1 :'' ?>" class="form-control question37RowGirls question37Col1 q37Input"></td>
    <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl1" value="<?= isset($question_37_data->q37_data->q37ColGirl1) ? $question_37_data->q37_data->q37ColGirl1 :'' ?>" class="form-control question37Row3rdGender question37Col1 q37Input"> </td>
    <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]"   id="question37Col1" value="<?= isset($question_37_data->q37_data->question37Col1) ? $question_37_data->q37_data->question37Col1 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>

  </tr>
    <tr>
      <td>Number of Victims of Labour Trafficking Cases</td>
      <input type="hidden" name="q37_category_coverage[]" value="2">
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen2" value="<?= isset($question_37_data->q37_data->q37ColMen2) ? $question_37_data->q37_data->q37ColMen2 :'' ?>" class="form-control question37RowMen question37Col2 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen2" value="<?= isset($question_37_data->q37_data->q37ColWomen2) ? $question_37_data->q37_data->q37ColWomen2 :'' ?>" class="form-control question37RowWomen question37Col2 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG2" value="<?= isset($question_37_data->q37_data->q37Col3rdG2) ? $question_37_data->q37_data->q37Col3rdG2 :'' ?>" class="form-control question37RowBoys question37Col2 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy2" value="<?= isset($question_37_data->q37_data->q37ColBoy2) ? $question_37_data->q37_data->q37ColBoy2 :'' ?>" class="form-control question37RowGirls question37Col2 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl2" value="<?= isset($question_37_data->q37_data->q37ColGirl2) ? $question_37_data->q37_data->q37ColGirl2 :'' ?>" class="form-control question37Row3rdGender question37Col2 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]" id="question37Col2" value="<?= isset($question_37_data->q37_data->question37Col2) ? $question_37_data->q37_data->question37Col2 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>

    </tr>
    <tr>
      <td> Number of Victims of Other/unspecified Trafficking Cases</td>
      <input type="hidden" name="q37_category_coverage[]" value="3">
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen3" value="<?= isset($question_37_data->q37_data->q37ColMen3) ? $question_37_data->q37_data->q37ColMen3 :'' ?>" class="form-control question37RowMen question37Col3 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen3" value="<?= isset($question_37_data->q37_data->q37ColWomen3) ? $question_37_data->q37_data->q37ColWomen3 :'' ?>" class="form-control question37RowWomen question37Col3 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG3" value="<?= isset($question_37_data->q37_data->q37Col3rdG3) ? $question_37_data->q37_data->q37Col3rdG3 :'' ?>" class="form-control question37RowBoys question37Col3 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy3" value="<?= isset($question_37_data->q37_data->q37ColBoy3) ? $question_37_data->q37_data->q37ColBoy3 :'' ?>" class="form-control question37RowGirls question37Col3 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl3" value="<?= isset($question_37_data->q37_data->q37ColGirl3) ? $question_37_data->q37_data->q37ColGirl3 :'' ?>" class="form-control question37Row3rdGender question37Col3 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]"  id="question37Col3" value="<?= isset($question_37_data->q37_data->question37Col3) ? $question_37_data->q37_data->question37Col3 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>

    </tr>
      <tr>
        <td rowspan=3>Number of cases prosecuted (ongoing from the previous
          reporting period)
          <input type="hidden" name="q37_type_cases_investigated[]" value="2">
    <input type="hidden" name="q37_type_cases_investigated[]" value="2">
    <input type="hidden" name="q37_type_cases_investigated[]" value="2">
        </td>
        <td>Number of Victims of Sex Trafficking Cases</td>
        <input type="hidden" name="q37_category_coverage[]" value="1">
        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen4" value="<?= isset($question_37_data->q37_data->q37ColMen4) ? $question_37_data->q37_data->q37ColMen4 :'' ?>" class="form-control question37RowMen question37Col4 q37Input"></td>
        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen4" value="<?= isset($question_37_data->q37_data->q37ColWomen4) ? $question_37_data->q37_data->q37ColWomen4 :'' ?>" class="form-control question37RowWomen question37Col4 q37Input"></td>
        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG4" value="<?= isset($question_37_data->q37_data->q37Col3rdG4) ? $question_37_data->q37_data->q37Col3rdG4 :'' ?>" class="form-control question37RowBoys question37Col4 q37Input"></td>
        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy4" value="<?= isset($question_37_data->q37_data->q37ColBoy4) ? $question_37_data->q37_data->q37ColBoy4 :'' ?>" class="form-control question37RowGirls question37Col4 q37Input"></td>
        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl4" value="<?= isset($question_37_data->q37_data->q37ColGirl4) ? $question_37_data->q37_data->q37ColGirl4 :'' ?>" class="form-control question37Row3rdGender question37Col4 q37Input"> </td>
        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]" id="question37Col4" value="<?= isset($question_37_data->q37_data->question37Col4) ? $question_37_data->q37_data->question37Col4 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>

      </tr>
      <tr>
        <td>Number of Victims of Labour Trafficking Cases</td>
        <input type="hidden" name="q37_category_coverage[]" value="2">
        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen5" value="<?= isset($question_37_data->q37_data->q37ColMen5) ? $question_37_data->q37_data->q37ColMen5 :'' ?>" class="form-control question37RowMen question37Col5 q37Input"> </td>
        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen5" value="<?= isset($question_37_data->q37_data->q37ColWomen5) ? $question_37_data->q37_data->q37ColWomen5 :'' ?>" class="form-control question37RowWomen question37Col5 q37Input"> </td>
        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG5" value="<?= isset($question_37_data->q37_data->q37Col3rdG5) ? $question_37_data->q37_data->q37Col3rdG5 :'' ?>" class="form-control question37RowBoys question37Col5 q37Input"> </td>
        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy5" value="<?= isset($question_37_data->q37_data->q37ColBoy5) ? $question_37_data->q37_data->q37ColBoy5 :'' ?>" class="form-control question37RowGirls question37Col5 q37Input"> </td>
        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl5" value="<?= isset($question_37_data->q37_data->q37ColGirl5) ? $question_37_data->q37_data->q37ColGirl5 :'' ?>" class="form-control question37Row3rdGender question37Col5 q37Input"> </td>
        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]" id="question37Col5" value="<?= isset($question_37_data->q37_data->question37Col5) ? $question_37_data->q37_data->question37Col5 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>

      </tr>
      <tr>
        <td> Number of Victims of Other/unspecified Trafficking Cases</td>
        <input type="hidden" name="q37_category_coverage[]" value="3">
        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen6" value="<?= isset($question_37_data->q37_data->q37ColMen6) ? $question_37_data->q37_data->q37ColMen6 :'' ?>" class="form-control  question37RowMen question37Col6 q37Input"> </td>
        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen6" value="<?= isset($question_37_data->q37_data->q37ColWomen6) ? $question_37_data->q37_data->q37ColWomen6 :'' ?>" class="form-control question37RowWomen question37Col6 q37Input"> </td>
        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG6" value="<?= isset($question_37_data->q37_data->q37Col3rdG6) ? $question_37_data->q37_data->q37Col3rdG6 :'' ?>" class="form-control question37RowBoys question37Col6 q37Input"> </td>
        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy6" value="<?= isset($question_37_data->q37_data->q37ColBoy6) ? $question_37_data->q37_data->q37ColBoy6 :'' ?>" class="form-control question37RowGirls question37Col6 q37Input"> </td>
        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl6" value="<?= isset($question_37_data->q37_data->q37ColGirl6) ? $question_37_data->q37_data->q37ColGirl6 :'' ?>" class="form-control  question37Row3rdGender question37Col6 q37Input"> </td>
        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]" id="question37Col6" value="<?= isset($question_37_data->q37_data->question37Col6) ? $question_37_data->q37_data->question37Col6 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>

      </tr>
  
                      <tr>
                        <td rowspan=3>Number of cases prosecuted (new this reporting period)
                        <input type="hidden" name="q37_type_cases_investigated[]" value="3">
    <input type="hidden" name="q37_type_cases_investigated[]" value="3">
    <input type="hidden" name="q37_type_cases_investigated[]" value="3">
                        </td>
                        <td>Number of Victims of Sex Trafficking Cases</td>
                        <input type="hidden" name="q37_category_coverage[]" value="1">
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen7" value="<?= isset($question_37_data->q37_data->q37ColMen7) ? $question_37_data->q37_data->q37ColMen7 :'' ?>" class="form-control  question37RowMen question37Col7 q37Input"></td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen7" value="<?= isset($question_37_data->q37_data->q37ColWomen7) ? $question_37_data->q37_data->q37ColWomen7 :'' ?>" class="form-control question37RowWomen question37Col7 q37Input"></td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG7" value="<?= isset($question_37_data->q37_data->q37Col3rdG7) ? $question_37_data->q37_data->q37Col3rdG7 :'' ?>" class="form-control question37RowBoys question37Col7 q37Input"></td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy7" value="<?= isset($question_37_data->q37_data->q37ColBoy7) ? $question_37_data->q37_data->q37ColBoy7 :'' ?>" class="form-control question37RowGirls question37Col7 q37Input"></td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl7" value="<?= isset($question_37_data->q37_data->q37ColGirl7) ? $question_37_data->q37_data->q37ColGirl7 :'' ?>" class="form-control question37Row3rdGender question37Col7 q37Input"> </td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]" id="question37Col7" value="<?= isset($question_37_data->q37_data->question37Col7) ? $question_37_data->q37_data->question37Col7 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>
  
                      </tr>
                      <tr>
                        <td>Number of Victims of Labour Trafficking Cases</td>
                        <input type="hidden" name="q37_category_coverage[]" value="2">
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen8" value="<?= isset($question_37_data->q37_data->q37ColMen8) ? $question_37_data->q37_data->q37ColMen8 :'' ?>" class="form-control question37RowMen question37Col8 q37Input"> </td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen8" value="<?= isset($question_37_data->q37_data->q37ColWomen8) ? $question_37_data->q37_data->q37ColWomen8 :'' ?>" class="form-control question37RowWomen question37Col8 q37Input"> </td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG8" value="<?= isset($question_37_data->q37_data->q37Col3rdG8) ? $question_37_data->q37_data->q37Col3rdG8 :'' ?>" class="form-control question37RowBoys question37Col8 q37Input"> </td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy8" value="<?= isset($question_37_data->q37_data->q37ColBoy8) ? $question_37_data->q37_data->q37ColBoy8 :'' ?>" class="form-control question37RowGirls question37Col8 q37Input"> </td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl8" value="<?= isset($question_37_data->q37_data->q37ColGirl8) ? $question_37_data->q37_data->q37ColGirl8 :'' ?>" class="form-control question37Row3rdGender question37Col8 q37Input"> </td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]" id="question37Col8" value="<?= isset($question_37_data->q37_data->question37Col8) ? $question_37_data->q37_data->question37Col8 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>
  
                      </tr>
                      <tr>
                        <td> Number of Victims of Other/unspecified Trafficking Cases</td>
                        <input type="hidden" name="q37_category_coverage[]" value="3">
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen9" value="<?= isset($question_37_data->q37_data->q37ColMen9) ? $question_37_data->q37_data->q37ColMen9 :'' ?>" class="form-control question37RowMen question37Col9 q37Input"> </td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen9" value="<?= isset($question_37_data->q37_data->q37ColWomen9) ? $question_37_data->q37_data->q37ColWomen9 :'' ?>" class="form-control question37RowWomen question37Col9 q37Input"> </td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG9" value="<?= isset($question_37_data->q37_data->q37Col3rdG9) ? $question_37_data->q37_data->q37Col3rdG9 :'' ?>" class="form-control question37RowBoys question37Col9 q37Input"> </td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy9" value="<?= isset($question_37_data->q37_data->q37ColBoy9) ? $question_37_data->q37_data->q37ColBoy9 :'' ?>" class="form-control question37RowGirls question37Col9 q37Input"> </td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl9" value="<?= isset($question_37_data->q37_data->q37ColGirl9) ? $question_37_data->q37_data->q37ColGirl9 :'' ?>" class="form-control question37Row3rdGender question37Col9 q37Input"> </td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]" id="question37Col9" value="<?= isset($question_37_data->q37_data->question37Col9) ? $question_37_data->q37_data->question37Col9 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>
  
                      </tr>
                      <tr>
                        <td rowspan=3>Number of individuals prosecuted</td>
                        <input type="hidden" name="q37_type_cases_investigated[]" value="4">
    <input type="hidden" name="q37_type_cases_investigated[]" value="4">
    <input type="hidden" name="q37_type_cases_investigated[]" value="4">
                        <td>Number of Victims of Sex Trafficking Cases</td>
                        <input type="hidden" name="q37_category_coverage[]" value="1">
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen20" value="<?= isset($question_37_data->q37_data->q37ColMen20) ? $question_37_data->q37_data->q37ColMen20 :'' ?>" class="form-control question37RowMen question37Co20 q37Input"></td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen20" value="<?= isset($question_37_data->q37_data->q37ColWomen20) ? $question_37_data->q37_data->q37ColWomen20 :'' ?>" class="form-control question37RowWomen question37Co20 q37Input"></td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG20" value="<?= isset($question_37_data->q37_data->q37Col3rdG20) ? $question_37_data->q37_data->q37Col3rdG20 :'' ?>" class="form-control question37RowBoys question37Co20 q37Input"></td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy20" value="<?= isset($question_37_data->q37_data->q37ColBoy20) ? $question_37_data->q37_data->q37ColBoy20 :'' ?>" class="form-control question37RowGirls question37Co20 q37Input"></td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl20" value="<?= isset($question_37_data->q37_data->q37ColGirl20) ? $question_37_data->q37_data->q37ColGirl20 :'' ?>" class="form-control question37Row3rdGender question37Co20 q37Input"> </td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]" id="question37Co20" value="<?= isset($question_37_data->q37_data->question37Co20) ? $question_37_data->q37_data->question37Co20 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>
  
                      </tr>
                      <tr>
                        <td>Number of Victims of Labour Trafficking Cases</td>
                        <input type="hidden" name="q37_category_coverage[]" value="2">
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen21" value="<?= isset($question_37_data->q37_data->q37ColMen21) ? $question_37_data->q37_data->q37ColMen21 :'' ?>" class="form-control question37RowMen question37Co21 q37Input"> </td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen21" value="<?= isset($question_37_data->q37_data->q37ColWomen21) ? $question_37_data->q37_data->q37ColWomen21 :'' ?>" class="form-control question37RowWomen question37Co21 q37Input"> </td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG21" value="<?= isset($question_37_data->q37_data->q37Col3rdG21) ? $question_37_data->q37_data->q37Col3rdG21 :'' ?>" class="form-control  question37RowBoys question37Co21 q37Input"> </td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy21" value="<?= isset($question_37_data->q37_data->q37ColBoy21) ? $question_37_data->q37_data->q37ColBoy21 :'' ?>" class="form-control question37RowGirls question37Co21 q37Input"> </td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl21" value="<?= isset($question_37_data->q37_data->q37ColGirl21) ? $question_37_data->q37_data->q37ColGirl21 :'' ?>" class="form-control question37Row3rdGender question37Co21 q37Input"> </td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]" id="question37Co21" value="<?= isset($question_37_data->q37_data->question37Co21) ? $question_37_data->q37_data->question37Co21 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>
  
                      </tr>
                      <tr>
                        <td> Number of Victims of Other/unspecified Trafficking Cases</td>
                        <input type="hidden" name="q37_category_coverage[]" value="3">
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen22" value="<?= isset($question_37_data->q37_data->q37ColMen22) ? $question_37_data->q37_data->q37ColMen22 :'' ?>" class="form-control question37RowMen question37Co22 q37Input"> </td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen22" value="<?= isset($question_37_data->q37_data->q37ColWomen22) ? $question_37_data->q37_data->q37ColWomen22 :'' ?>" class="form-control  question37RowWomen question37Co22 q37Input"> </td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG22" value="<?= isset($question_37_data->q37_data->q37Col3rdG22) ? $question_37_data->q37_data->q37Col3rdG22 :'' ?>" class="form-control question37RowBoys question37Co22 q37Input"> </td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy22" value="<?= isset($question_37_data->q37_data->q37ColBoy22) ? $question_37_data->q37_data->q37ColBoy22 :'' ?>" class="form-control question37RowGirls question37Co22 q37Input"> </td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl22" value="<?= isset($question_37_data->q37_data->q37ColGirl22) ? $question_37_data->q37_data->q37ColGirl22 :'' ?>" class="form-control question37Row3rdGender question37Co22 q37Input"> </td>
                        <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]" id="question37Co22" value="<?= isset($question_37_data->q37_data->question37Co22) ? $question_37_data->q37_data->question37Co22 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>
  
                      </tr>
        <tr>
          <td rowspan="3">Number of individuals i prosecuted (ongoing from the previous
            reporting period)

          </td>
          <input type="hidden" name="q37_type_cases_investigated[]" value="5">
<input type="hidden" name="q37_type_cases_investigated[]" value="5">
<input type="hidden" name="q37_type_cases_investigated[]" value="5">
          <td>Number of Victims of Sex Trafficking Cases</td>
          <input type="hidden" name="q37_category_coverage[]" value="1">
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen23" value="<?= isset($question_37_data->q37_data->q37ColMen23) ? $question_37_data->q37_data->q37ColMen23 :'' ?>" class="form-control question37RowMen question37Co23 q37Input"></td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen23" value="<?= isset($question_37_data->q37_data->q37ColWomen23) ? $question_37_data->q37_data->q37ColWomen23 :'' ?>" class="form-control question37RowWomen question37Co23 q37Input"></td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG23" value="<?= isset($question_37_data->q37_data->q37Col3rdG23) ? $question_37_data->q37_data->q37Col3rdG23 :'' ?>" class="form-control  question37RowBoys question37Co23 q37Input"></td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy23" value="<?= isset($question_37_data->q37_data->q37ColBoy23) ? $question_37_data->q37_data->q37ColBoy23 :'' ?>" class="form-control question37RowGirls question37Co23 q37Input"></td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl23" value="<?= isset($question_37_data->q37_data->q37ColGirl23) ? $question_37_data->q37_data->q37ColGirl23 :'' ?>" class="form-control question37Row3rdGender question37Co23 q37Input"> </td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]" id="question37Co23" value="<?= isset($question_37_data->q37_data->question37Co23) ? $question_37_data->q37_data->question37Co23 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>

        </tr>
            <tr>
              <td>Number of Victims of Labour Trafficking Cases</td>
              <input type="hidden" name="q37_category_coverage[]" value="2">
              <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen24" value="<?= isset($question_37_data->q37_data->q37ColMen24) ? $question_37_data->q37_data->q37ColMen24 :'' ?>" class="form-control question37RowMen question37Co24 q37Input"> </td>
              <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen24" value="<?= isset($question_37_data->q37_data->q37ColWomen24) ? $question_37_data->q37_data->q37ColWomen24 :'' ?>" class="form-control question37RowWomen question37Co24 q37Input"> </td>
              <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG24" value="<?= isset($question_37_data->q37_data->q37Col3rdG24) ? $question_37_data->q37_data->q37Col3rdG24 :'' ?>" class="form-control question37RowBoys question37Co24 q37Input"> </td>
              <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy24" value="<?= isset($question_37_data->q37_data->q37ColBoy24) ? $question_37_data->q37_data->q37ColBoy24 :'' ?>" class="form-control question37RowGirls question37Co24 q37Input"> </td>
              <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl24" value="<?= isset($question_37_data->q37_data->q37ColGirl24) ? $question_37_data->q37_data->q37ColGirl24 :'' ?>" class="form-control  question37Row3rdGender question37Co24 q37Input"> </td>
              <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]" id="question37Co24" value="<?= isset($question_37_data->q37_data->question37Co24) ? $question_37_data->q37_data->question37Co24 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>
            </tr>
            <tr>
              <td> Number of Victims of Other/unspecified Trafficking Cases</td>
              <input type="hidden" name="q37_category_coverage[]" value="3">
              <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen25" value="<?= isset($question_37_data->q37_data->q37ColMen25) ? $question_37_data->q37_data->q37ColMen25 :'' ?>" class="form-control question37RowMen question37Co25 q37Input"> </td>
              <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen25" value="<?= isset($question_37_data->q37_data->q37ColWomen25) ? $question_37_data->q37_data->q37ColWomen25 :'' ?>" class="form-control question37RowWomen question37Co25 q37Input"> </td>
              <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG25" value="<?= isset($question_37_data->q37_data->q37Col3rdG25) ? $question_37_data->q37_data->q37Col3rdG25 :'' ?>" class="form-control question37RowBoys question37Co25 q37Input"> </td>
              <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy25" value="<?= isset($question_37_data->q37_data->q37ColBoy25) ? $question_37_data->q37_data->q37ColBoy25 :'' ?>" class="form-control question37RowGirls question37Co25 q37Input"> </td>
              <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl25" value="<?= isset($question_37_data->q37_data->q37ColGirl25) ? $question_37_data->q37_data->q37ColGirl25 :'' ?>" class="form-control question37Row3rdGender question37Co25 q37Input"> </td>
              <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]" id="question37Co25" value="<?= isset($question_37_data->q37_data->question37Co25) ? $question_37_data->q37_data->question37Co25 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>

            </tr>
    <tr>
      <td rowspan=3>Number of individuals prosecuted (new this reporting period)</td>
      <input type="hidden" name="q37_type_cases_investigated[]" value="6">
<input type="hidden" name="q37_type_cases_investigated[]" value="6">
<input type="hidden" name="q37_type_cases_investigated[]" value="6">
      <td>Number of Victims of Sex Trafficking Cases</td>
      <input type="hidden" name="q37_category_coverage[]" value="1">
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen26" value="<?= isset($question_37_data->q37_data->q37ColMen26) ? $question_37_data->q37_data->q37ColMen26 :'' ?>" class="form-control question37RowMen question37Co26 q37Input"></td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen26" value="<?= isset($question_37_data->q37_data->q37ColWomen26) ? $question_37_data->q37_data->q37ColWomen26 :'' ?>" class="form-control question37RowWomen question37Co26 q37Input"></td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG26" value="<?= isset($question_37_data->q37_data->q37Col3rdG26) ? $question_37_data->q37_data->q37Col3rdG26 :'' ?>" class="form-control question37RowBoys question37Co26 q37Input"></td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy26" value="<?= isset($question_37_data->q37_data->q37ColBoy26) ? $question_37_data->q37_data->q37ColBoy26 :'' ?>" class="form-control question37RowGirls question37Co26 q37Input"></td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl26" value="<?= isset($question_37_data->q37_data->q37ColGirl26) ? $question_37_data->q37_data->q37ColGirl26 :'' ?>" class="form-control question37Row3rdGender question37Co26 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]"  id="question37Co26" value="<?= isset($question_37_data->q37_data->question37Co26) ? $question_37_data->q37_data->question37Co26 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>

    </tr>
    <tr>
      <td>Number of Victims of Labour Trafficking Cases</td>
      <input type="hidden" name="q37_category_coverage[]" value="2">
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen27" value="<?= isset($question_37_data->q37_data->q37ColMen27) ? $question_37_data->q37_data->q37ColMen27 :'' ?>" class="form-control question37RowMen question37Co27 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen27" value="<?= isset($question_37_data->q37_data->q37ColWomen27) ? $question_37_data->q37_data->q37ColWomen27 :'' ?>" class="form-control question37RowWomen question37Co27 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG27" value="<?= isset($question_37_data->q37_data->q37Col3rdG27) ? $question_37_data->q37_data->q37Col3rdG27 :'' ?>" class="form-control question37RowBoys question37Co27 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy27" value="<?= isset($question_37_data->q37_data->q37ColBoy27) ? $question_37_data->q37_data->q37ColBoy27 :'' ?>" class="form-control question37RowGirls question37Co27 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl27" value="<?= isset($question_37_data->q37_data->q37ColGirl27) ? $question_37_data->q37_data->q37ColGirl27 :'' ?>" class="form-control question37Row3rdGender question37Co27 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]" id="question37Co27" value="<?= isset($question_37_data->q37_data->question37Co27) ? $question_37_data->q37_data->question37Co27 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>

    </tr>
    <tr>
      <td> Number of Victims of Other/unspecified Trafficking Cases</td>
      <input type="hidden" name="q37_category_coverage[]" value="3">
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen28" value="<?= isset($question_37_data->q37_data->q37ColMen28) ? $question_37_data->q37_data->q37ColMen28 :'' ?>" class="form-control question37RowMen question37Co28 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen28" value="<?= isset($question_37_data->q37_data->q37ColWomen28) ? $question_37_data->q37_data->q37ColWomen28 :'' ?>" class="form-control question37RowWomen question37Co28 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG28" value="<?= isset($question_37_data->q37_data->q37Col3rdG28) ? $question_37_data->q37_data->q37Col3rdG28 :'' ?>" class="form-control question37RowBoys question37Co28 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy28" value="<?= isset($question_37_data->q37_data->q37ColBoy28) ? $question_37_data->q37_data->q37ColBoy28 :'' ?>" class="form-control question37RowGirls question37Co28 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl28" value="<?= isset($question_37_data->q37_data->q37ColGirl28) ? $question_37_data->q37_data->q37ColGirl28 :'' ?>" class="form-control question37Row3rdGender question37Co28 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]" id="question37Co28" value="<?= isset($question_37_data->q37_data->question37Co28) ? $question_37_data->q37_data->question37Co28 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>

    </tr>
    <tr>
      <td rowspan="3">Number of individuals cases under PSHT Act 2012</td>
      <input type="hidden" name="q37_type_cases_investigated[]" value="7">
<input type="hidden" name="q37_type_cases_investigated[]" value="7">
<input type="hidden" name="q37_type_cases_investigated[]" value="7">
      <td>Number of Victims of Sex Trafficking Cases</td>
      <input type="hidden" name="q37_category_coverage[]" value="1">
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen29" value="<?= isset($question_37_data->q37_data->q37ColMen29) ? $question_37_data->q37_data->q37ColMen29 :'' ?>" class="form-control question37RowMen question37Co29 q37Input"></td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen29" value="<?= isset($question_37_data->q37_data->q37ColWomen29) ? $question_37_data->q37_data->q37ColWomen29 :'' ?>" class="form-control question37RowWomen question37Co29 q37Input"></td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG29" value="<?= isset($question_37_data->q37_data->q37Col3rdG29) ? $question_37_data->q37_data->q37Col3rdG29 :'' ?>" class="form-control question37RowBoys question37Co29 q37Input"></td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy29" value="<?= isset($question_37_data->q37_data->q37ColBoy29) ? $question_37_data->q37_data->q37ColBoy29 :'' ?>" class="form-control question37RowGirls question37Co29 q37Input"></td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl29" value="<?= isset($question_37_data->q37_data->q37ColGirl29) ? $question_37_data->q37_data->q37ColGirl29 :'' ?>" class="form-control  question37Row3rdGender question37Co29 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]"  id="question37Co29" value="<?= isset($question_37_data->q37_data->question37Co29) ? $question_37_data->q37_data->question37Co29 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>

    </tr>
    <tr>
      <td>Number of Victims of Labour Trafficking Cases</td>
      <input type="hidden" name="q37_category_coverage[]" value="2">
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen30" value="<?= isset($question_37_data->q37_data->q37ColMen30) ? $question_37_data->q37_data->q37ColMen30 :'' ?>" class="form-control question37RowMen question37Co30 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen30" value="<?= isset($question_37_data->q37_data->q37ColWomen30) ? $question_37_data->q37_data->q37ColWomen30 :'' ?>" class="form-control question37RowWomen question37Co30 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG30" value="<?= isset($question_37_data->q37_data->q37Col3rdG30) ? $question_37_data->q37_data->q37Col3rdG30 :'' ?>" class="form-control question37RowBoys question37Co30 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy30" value="<?= isset($question_37_data->q37_data->q37ColBoy30) ? $question_37_data->q37_data->q37ColBoy30 :'' ?>" class="form-control  question37RowGirls question37Co30 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl30" value="<?= isset($question_37_data->q37_data->q37ColGirl30) ? $question_37_data->q37_data->q37ColGirl30 :'' ?>" class="form-control question37Row3rdGender question37Co30 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]"  id="question37Co30" value="<?= isset($question_37_data->q37_data->question37Co30) ? $question_37_data->q37_data->question37Co30 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>

    </tr>
    <tr>
      <td> Number of Victims of Other/unspecified Trafficking Cases</td>
      <input type="hidden" name="q37_category_coverage[]" value="3">
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen31" value="<?= isset($question_37_data->q37_data->q37ColMen31) ? $question_37_data->q37_data->q37ColMen31 :'' ?>" class="form-control question37RowMen question37Co31 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen31" value="<?= isset($question_37_data->q37_data->q37ColWomen31) ? $question_37_data->q37_data->q37ColWomen31 :'' ?>" class="form-control question37RowWomen question37Co31 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG31" value="<?= isset($question_37_data->q37_data->q37Col3rdG31) ? $question_37_data->q37_data->q37Col3rdG31 :'' ?>" class="form-control question37RowBoys question37Co31 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy31" value="<?= isset($question_37_data->q37_data->q37ColBoy31) ? $question_37_data->q37_data->q37ColBoy31 :'' ?>" class="form-control question37RowGirls question37Co31 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl31" value="<?= isset($question_37_data->q37_data->q37ColGirl31) ? $question_37_data->q37_data->q37ColGirl31 :'' ?>" class="form-control question37Row3rdGender question37Co31 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]" id="question37Co31" value="<?= isset($question_37_data->q37_data->question37Co31) ? $question_37_data->q37_data->question37Co31 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>

    </tr>
    <tr>
      <td rowspan=3>Number of cases prosecuted under non-trafficking laws (OEMA/PC)</td>

      <input type="hidden" name="q37_type_cases_investigated[]" value="8">
<input type="hidden" name="q37_type_cases_investigated[]" value="8">
<input type="hidden" name="q37_type_cases_investigated[]" value="8">
      <td>Number of Victims of Sex Trafficking Cases</td>
      <input type="hidden" name="q37_category_coverage[]" value="1">
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen32" value="<?= isset($question_37_data->q37_data->q37ColMen32) ? $question_37_data->q37_data->q37ColMen32 :'' ?>" class="form-control question37RowMen question37Co32 q37Input"></td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen32" value="<?= isset($question_37_data->q37_data->q37ColWomen32) ? $question_37_data->q37_data->q37ColWomen32 :'' ?>" class="form-control question37RowWomen question37Co32 q37Input"></td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG32" value="<?= isset($question_37_data->q37_data->q37Col3rdG32) ? $question_37_data->q37_data->q37Col3rdG32 :'' ?>" class="form-control question37RowBoys question37Co32 q37Input"></td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy32" value="<?= isset($question_37_data->q37_data->q37ColBoy32) ? $question_37_data->q37_data->q37ColBoy32 :'' ?>" class="form-control question37RowGirls question37Co32 q37Input"></td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl32" value="<?= isset($question_37_data->q37_data->q37ColGirl32) ? $question_37_data->q37_data->q37ColGirl32 :'' ?>" class="form-control question37Row3rdGender question37Co32 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]" id="question37Co32" value="<?= isset($question_37_data->q37_data->question37Co32) ? $question_37_data->q37_data->question37Co32 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>

    </tr>
    <tr>
      <td>Number of Victims of Labour Trafficking Cases</td>
      <input type="hidden" name="q37_category_coverage[]" value="2">
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen33" value="<?= isset($question_37_data->q37_data->q37ColMen33) ? $question_37_data->q37_data->q37ColMen33 :'' ?>" class="form-control question37RowMen question37Co33 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen33" value="<?= isset($question_37_data->q37_data->q37ColWomen33) ? $question_37_data->q37_data->q37ColWomen33 :'' ?>" class="form-control question37RowWomen question37Co33 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG33" value="<?= isset($question_37_data->q37_data->q37Col3rdG33) ? $question_37_data->q37_data->q37Col3rdG33 :'' ?>" class="form-control question37RowBoys question37Co33 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy33" value="<?= isset($question_37_data->q37_data->q37ColBoy33) ? $question_37_data->q37_data->q37ColBoy33 :'' ?>" class="form-control question37RowGirls question37Co33 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl33" value="<?= isset($question_37_data->q37_data->q37ColGirl33) ? $question_37_data->q37_data->q37ColGirl33 :'' ?>" class="form-control question37Row3rdGender question37Co33 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]" id="question37Co33" value="<?= isset($question_37_data->q37_data->question37Co33) ? $question_37_data->q37_data->question37Co33 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>

    </tr>
    <tr>
      <td> Number of Victims of Other/unspecified Trafficking Cases</td>
      <input type="hidden" name="q37_category_coverage[]" value="3">
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen34" value="<?= isset($question_37_data->q37_data->q37ColMen34) ? $question_37_data->q37_data->q37ColMen34 :'' ?>" class="form-control question37RowMen question37Co34 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen34" value="<?= isset($question_37_data->q37_data->q37ColWomen34) ? $question_37_data->q37_data->q37ColWomen34 :'' ?>" class="form-control question37RowWomen question37Co34 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG34" value="<?= isset($question_37_data->q37_data->q37Col3rdG34) ? $question_37_data->q37_data->q37Col3rdG34 :'' ?>" class="form-control question37RowBoys question37Co34 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy34" value="<?= isset($question_37_data->q37_data->q37ColBoy34) ? $question_37_data->q37_data->q37ColBoy34 :'' ?>" class="form-control question37RowGirls question37Co34 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl34" value="<?= isset($question_37_data->q37_data->q37ColGirl34) ? $question_37_data->q37_data->q37ColGirl34 :'' ?>" class="form-control question37Row3rdGender question37Co34 q37Input"> </td>
      <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]" id="question37Co34" value="<?= isset($question_37_data->q37_data->question37Co34) ? $question_37_data->q37_data->question37Co34 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>

    </tr>
        <tr>
          <td rowspan=3>Number of individuals prosecuted under PSHT Act 2012</td>
          <input type="hidden" name="q37_type_cases_investigated[]" value="9">
<input type="hidden" name="q37_type_cases_investigated[]" value="9">
<input type="hidden" name="q37_type_cases_investigated[]" value="9">
          <td>Number of Victims of Sex Trafficking Cases</td>
          <input type="hidden" name="q37_category_coverage[]" value="1">
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen35" value="<?= isset($question_37_data->q37_data->q37ColMen35) ? $question_37_data->q37_data->q37ColMen35 :'' ?>" class="form-control question37RowMen question37Co35 q37Input"></td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen35" value="<?= isset($question_37_data->q37_data->q37ColWomen35) ? $question_37_data->q37_data->q37ColWomen35 :'' ?>" class="form-control question37RowWomen question37Co35 q37Input"></td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG35" value="<?= isset($question_37_data->q37_data->q37Col3rdG35) ? $question_37_data->q37_data->q37Col3rdG35 :'' ?>" class="form-control question37RowBoys question37Co35 q37Input"></td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy35" value="<?= isset($question_37_data->q37_data->q37ColBoy35) ? $question_37_data->q37_data->q37ColBoy35 :'' ?>" class="form-control question37RowGirls question37Co35 q37Input"></td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl35" value="<?= isset($question_37_data->q37_data->q37ColGirl35) ? $question_37_data->q37_data->q37ColGirl35 :'' ?>" class="form-control  question37Row3rdGender question37Co35 q37Input"> </td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]" id="question37Co35" value="<?= isset($question_37_data->q37_data->question37Co35) ? $question_37_data->q37_data->question37Co35 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>

        </tr>
        <tr>
          <td>Number of Victims of Labour Trafficking Cases</td>
          <input type="hidden" name="q37_category_coverage[]" value="2">
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen36" value="<?= isset($question_37_data->q37_data->q37ColMen36) ? $question_37_data->q37_data->q37ColMen36 :'' ?>" class="form-control question37RowMen question37Co36 q37Input"> </td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen36" value="<?= isset($question_37_data->q37_data->q37ColWomen36) ? $question_37_data->q37_data->q37ColWomen36 :'' ?>" class="form-control question37RowWomen question37Co36 q37Input"> </td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG36" value="<?= isset($question_37_data->q37_data->q37Col3rdG36) ? $question_37_data->q37_data->q37Col3rdG36 :'' ?>" class="form-control question37RowBoys question37Co36 q37Input"> </td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy36" value="<?= isset($question_37_data->q37_data->q37ColBoy36) ? $question_37_data->q37_data->q37ColBoy36 :'' ?>" class="form-control question37RowGirls question37Co36 q37Input"> </td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl36" value="<?= isset($question_37_data->q37_data->q37ColGirl36) ? $question_37_data->q37_data->q37ColGirl36 :'' ?>" class="form-control question37Row3rdGender question37Co36 q37Input"> </td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]"  id="question37Co36" value="<?= isset($question_37_data->q37_data->question37Co36) ? $question_37_data->q37_data->question37Co36 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>

        </tr>
        <tr>
          <td> Number of Victims of Other/unspecified Trafficking Cases</td>
          <input type="hidden" name="q37_category_coverage[]" value="3">
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen37" value="<?= isset($question_37_data->q37_data->q37ColMen37) ? $question_37_data->q37_data->q37ColMen37 :'' ?>" class="form-control question37RowMen question37Co37 q37Input"> </td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen37" value="<?= isset($question_37_data->q37_data->q37ColWomen37) ? $question_37_data->q37_data->q37ColWomen37 :'' ?>" class="form-control question37RowWomen question37Co37 q37Input"> </td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG37" value="<?= isset($question_37_data->q37_data->q37Col3rdG37) ? $question_37_data->q37_data->q37Col3rdG37 :'' ?>" class="form-control question37RowBoys question37Co37 q37Input"> </td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy37" value="<?= isset($question_37_data->q37_data->q37ColBoy37) ? $question_37_data->q37_data->q37ColBoy37 :'' ?>" class="form-control question37RowGirls question37Co37 q37Input"> </td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl37" value="<?= isset($question_37_data->q37_data->q37ColGirl37) ? $question_37_data->q37_data->q37ColGirl37 :'' ?>" class="form-control question37Row3rdGender question37Co37 q37Input"> </td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]" id="question37Co37" value="<?= isset($question_37_data->q37_data->question37Co37) ? $question_37_data->q37_data->question37Co37 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>

        </tr>
        <tr>
          <td rowspan=3>Number of individuals prosecuted under non-trafficking laws (OEMA/PC)</td>
          <input type="hidden" name="q37_type_cases_investigated[]" value="10">
<input type="hidden" name="q37_type_cases_investigated[]" value="10">
<input type="hidden" name="q37_type_cases_investigated[]" value="10">
          <td>Number of Victims of Sex Trafficking Cases</td>
          <input type="hidden" name="q37_category_coverage[]" value="1">
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen38" value="<?= isset($question_37_data->q37_data->q37ColMen38) ? $question_37_data->q37_data->q37ColMen38 :'' ?>" class="form-control question37RowMen question37Co38 q37Input"></td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen38" value="<?= isset($question_37_data->q37_data->q37ColWomen38) ? $question_37_data->q37_data->q37ColWomen38 :'' ?>" class="form-control question37RowWomen question37Co38 q37Input"></td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG38" value="<?= isset($question_37_data->q37_data->q37Col3rdG38) ? $question_37_data->q37_data->q37Col3rdG38 :'' ?>" class="form-control question37RowBoys question37Co38 q37Input"></td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy38" value="<?= isset($question_37_data->q37_data->q37ColBoy38) ? $question_37_data->q37_data->q37ColBoy38 :'' ?>" class="form-control question37RowGirls question37Co38 q37Input"></td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl38" value="<?= isset($question_37_data->q37_data->q37ColGirl38) ? $question_37_data->q37_data->q37ColGirl38 :'' ?>" class="form-control question37Row3rdGender question37Co38 q37Input"> </td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]" id="question37Co38" value="<?= isset($question_37_data->q37_data->question37Co38) ? $question_37_data->q37_data->question37Co38 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>

        </tr>
        <tr>
          <td>Number of Victims of Labour Trafficking Cases</td>
          <input type="hidden" name="q37_category_coverage[]" value="2">
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen39" value="<?= isset($question_37_data->q37_data->q37ColMen39) ? $question_37_data->q37_data->q37ColMen39 :'' ?>" class="form-control question37RowMen question37Co39 q37Input"> </td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen39" value="<?= isset($question_37_data->q37_data->q37ColWomen39) ? $question_37_data->q37_data->q37ColWomen39 :'' ?>" class="form-control question37RowWomen question37Co39 q37Input"> </td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG39" value="<?= isset($question_37_data->q37_data->q37Col3rdG39) ? $question_37_data->q37_data->q37Col3rdG39 :'' ?>" class="form-control  question37RowBoys question37Co39 q37Input"> </td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy39" value="<?= isset($question_37_data->q37_data->q37ColBoy39) ? $question_37_data->q37_data->q37ColBoy39 :'' ?>" class="form-control question37RowGirls question37Co39 q37Input"> </td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl39" value="<?= isset($question_37_data->q37_data->q37ColGirl39) ? $question_37_data->q37_data->q37ColGirl39 :'' ?>" class="form-control question37Row3rdGender question37Co39 q37Input"> </td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]" id="question37Co39" value="<?= isset($question_37_data->q37_data->question37Co39) ? $question_37_data->q37_data->question37Co39 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>

        </tr>
        <tr>
          <td> Number of Victims of Other/unspecified Trafficking Cases</td>
          <input type="hidden" name="q37_category_coverage[]" value="3">
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_men[]" id="q37ColMen40" value="<?= isset($question_37_data->q37_data->q37ColMen40) ? $question_37_data->q37_data->q37ColMen40 :'' ?>" class="form-control question37RowMen question37Co40 q37Input"> </td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_women[]" id="q37ColWomen40" value="<?= isset($question_37_data->q37_data->q37ColWomen40) ? $question_37_data->q37_data->q37ColWomen40 :'' ?>" class="form-control question37RowWomen question37Co40 q37Input"> </td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_third_gender[]" id="q37Col3rdG40" value="<?= isset($question_37_data->q37_data->q37Col3rdG40) ? $question_37_data->q37_data->q37Col3rdG40 :'' ?>" class="form-control question37RowBoys question37Co40 q37Input"> </td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_boy[]" id="q37ColBoy40" value="<?= isset($question_37_data->q37_data->q37ColBoy40) ? $question_37_data->q37_data->q37ColBoy40 :'' ?>" class="form-control question37RowGirls question37Co40 q37Input"> </td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_girl[]" id="q37ColGirl40" value="<?= isset($question_37_data->q37_data->q37ColGirl40) ? $question_37_data->q37_data->q37ColGirl40 :'' ?>" class="form-control question37Row3rdGender question37Co40 q37Input"> </td>
          <td class="col-md-2"> <input type="text" name="q37_new_report_sex_trafficking_cases_total[]" id="question37Co40" value="<?= isset($question_37_data->q37_data->question37Co40) ? $question_37_data->q37_data->question37Co40 :'' ?>"  class="form-control q37Total q37Input" readonly="true"> </td>

        </tr>
                      <tr>
                        <td colspan="2"> Total</td>
                       <td class="col-md-2"> <input type="text" name="" id="q37MenTotal" value="<?= isset($question_37_data->q37_data->q37MenTotal) ? $question_37_data->q37_data->q37MenTotal :'' ?>" class="form-control q37gTotal q37Input"  readonly="true"></td>
                       <td class="col-md-2"> <input type="text" name="" id="q37WomenTotal" value="<?= isset($question_37_data->q37_data->q37WomenTotal) ? $question_37_data->q37_data->q37WomenTotal :'' ?>" class="form-control q37gTotal q37Input" readonly="true"></td>
                       <td class="col-md-2"> <input type="text" name="" id="q37BoysTotal" value="<?= isset($question_37_data->q37_data->q37BoysTotal) ? $question_37_data->q37_data->q37BoysTotal :'' ?>" class="form-control q37gTotal q37Input" readonly="true"></td>
                       <td class="col-md-2"> <input type="text" name="" id="q37GirlsTotal" value="<?= isset($question_37_data->q37_data->q37GirlsTotal) ? $question_37_data->q37_data->q37GirlsTotal :'' ?>" class="form-control q37gTotal q37Input" readonly="true"></td>
                       <td class="col-md-2"> <input type="text" name=""  id="q37TrdGTotal" value="<?= isset($question_37_data->q37_data->q37TrdGTotal) ? $question_37_data->q37_data->q37TrdGTotal :'' ?>" class="form-control q37gTotal q37Input" readonly="true"></td>
                       <td class="col-md-2"> <input type="text" name="" id="q37gTotal" value="<?= isset($question_37_data->q37_data->q37gTotal) ? $question_37_data->q37_data->q37gTotal :'' ?>" class="form-control q37Input" readonly="true"></td>
  
                      </tr>
                      </tbody>
                    </table>
                    <br/>
                    <p class="text-right">
                        <button type="button" class="btn btn-success" id="temp-save-question37">Save</button>       
                    </p>
                  </div>
                </div>
              </div>
              <!-- question no 37 End -->

@endif
<?php }
  ?>
  <script>
    $(function(){
    $(document).on("click",'#temp-save-question37',function() {

      var q37_data={}
      // alert($(this).attr('id'))
      $('.q37Input').each(function() {
        Object.assign(q37_data,{[$(this).attr('id')]:$(this).val()}) 

       });
       let new_data={
        q37_data:q37_data
       }
      //  console.log(new_data)
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
                'question37':new_data,
                'question_no':'37',
              },
              url: "/superadmin/case/temp-save-question40to60",             
              success: function(response){ 
                if(response){
                  alert("Question 37 has been saved temporary")

                }else{
                  alert("Not Saved")
                }
              }
      });
    }); 
  }); 

</script>