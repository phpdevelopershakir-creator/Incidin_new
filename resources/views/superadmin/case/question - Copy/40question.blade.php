<?php
if($questiontitles[39]->status==0)
{

  ?>
@if(Auth::user()->can('40.question'))
   <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">
             <span class="numbering">40</span>.
           @if (isset($questiontitles [39]))
         {{ $questiontitles[39]->title }}
         @endif
        </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <h3>Conviction Status</h3>
          <table class="table table-bordered" cellpadding=0 celspecing=0 width="100%">
            <tr>
              <td colspan="2"> Conviction Status
              </td>
              <td>M</td>
              <td>W</td>
              <td>3rd Gender</td>
              <td>B</td>
              <td>G</td>
              <!-- <td>T</td> -->
              <td>Total</td>
            </tr>
            <tr>
              <td rowspan=3>Total individuals convicted</td>
              <input type="hidden" name="q40_type_cases_investigated[]" value="1">
              <input type="hidden" name="q40_type_cases_investigated[]" value="1">
              <input type="hidden" name="q40_type_cases_investigated[]" value="1">
              <td>Number of Victims of Sex Trafficking Cases</td>
              <input type="hidden" name="q40_category_coverage[]" value="1">
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_men[]" id="q40ColMen1" value="<?= isset($question_40_data->q40_data->q40ColMen1) ? $question_40_data->q40_data->q40ColMen1 :'' ?>" class="form-control q40TotalConvictOne q40Input"></td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_women[]" id="q40ColWomen1" value="<?= isset($question_40_data->q40_data->q40ColWomen1) ? $question_40_data->q40_data->q40ColWomen1 :'' ?>" class="form-control q40TotalConvictOne q40Input"></td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_third_gender[]" id="q40Col3rdG1" value="<?= isset($question_40_data->q40_data->q40Col3rdG1) ? $question_40_data->q40_data->q40Col3rdG1 :'' ?>" class="form-control q40TotalConvictOne q40Input"></td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_boy[]" id="q40ColBoy1" value="<?= isset($question_40_data->q40_data->q40ColBoy1) ? $question_40_data->q40_data->q40ColBoy1 :'' ?>" class="form-control q40TotalConvictOne q40Input"></td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_girl[]" id="q40ColGirl1" value="<?= isset($question_40_data->q40_data->q40ColGirl1) ? $question_40_data->q40_data->q40ColGirl1 :'' ?>" class="form-control q40TotalConvictOne q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_total[]" id="q40TotalConvictOne" value="<?= isset($question_40_data->q40_data->q40TotalConvictOne) ? $question_40_data->q40_data->q40TotalConvictOne :'' ?>" class="form-control q40Input" readonly></td>
              <!-- <td> <input type="text" name="" id="" class="form-control" placeholder="dd"></td> -->
            </tr>
            <tr>
              <td>Number of Victims of Labour Trafficking Cases</td>
              <input type="hidden" name="q40_category_coverage[]" value="2">
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_men[]" id="q40ColMen2" value="<?= isset($question_40_data->q40_data->q40ColMen2) ? $question_40_data->q40_data->q40ColMen2 :'' ?>" class="form-control q40TotalConvictTwo q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_women[]" id="q40ColWomen2" value="<?= isset($question_40_data->q40_data->q40ColWomen2) ? $question_40_data->q40_data->q40ColWomen2 :'' ?>" class="form-control q40TotalConvictTwo q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_third_gender[]" id="q40Col3rdG2" value="<?= isset($question_40_data->q40_data->q40Col3rdG2) ? $question_40_data->q40_data->q40Col3rdG2 :'' ?>" class="form-control q40TotalConvictTwo q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_boy[]" id="q40ColBoy2" value="<?= isset($question_40_data->q40_data->q40ColBoy2) ? $question_40_data->q40_data->q40ColBoy2 :'' ?>" class="form-control q40TotalConvictTwo q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_girl[]" id="q40ColGirl2" value="<?= isset($question_40_data->q40_data->q40ColGirl2) ? $question_40_data->q40_data->q40ColGirl2 :'' ?>" class="form-control q40TotalConvictTwo q40Input"> </td>
              <td><input type="text" name="q40_new_report_sex_trafficking_cases_total[]" id="q40TotalConvictTwo" value="<?= isset($question_40_data->q40_data->q40TotalConvictTwo) ? $question_40_data->q40_data->q40TotalConvictTwo :'' ?>" class="form-control q40Input" readonly> </td>
              <!-- <td> <input type="text" name="" id="" class="form-control"></td> -->
            </tr>
            <tr>
              <td> Number of Victims of Other/unspecified Trafficking Cases</td>
              <input type="hidden" name="q40_category_coverage[]" value="3">
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_men[]" id="q40ColMen3" value="<?= isset($question_40_data->q40_data->q40ColMen3) ? $question_40_data->q40_data->q40ColMen3 :'' ?>" class="form-control q40TotalConvictThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_women[]" id="q40ColWomen3" value="<?= isset($question_40_data->q40_data->q40ColWomen3) ? $question_40_data->q40_data->q40ColWomen3 :'' ?>" class="form-control q40TotalConvictThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_third_gender[]" id="q40Col3rdG3" value="<?= isset($question_40_data->q40_data->q40Col3rdG3) ? $question_40_data->q40_data->q40Col3rdG3 :'' ?>" class="form-control q40TotalConvictThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_boy[]" id="q40ColBoy3" value="<?= isset($question_40_data->q40_data->q40ColBoy3) ? $question_40_data->q40_data->q40ColBoy3 :'' ?>" class="form-control q40TotalConvictThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_girl[]" id="q40ColGirl3" value="<?= isset($question_40_data->q40_data->q40ColGirl3) ? $question_40_data->q40_data->q40ColGirl3 :'' ?>" class="form-control q40TotalConvictThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_total[]" id="q40TotalConvictThree" value="<?= isset($question_40_data->q40_data->q40TotalConvictThree) ? $question_40_data->q40_data->q40TotalConvictThree :'' ?>" class="form-control q40Input" readonly> </td>
              <!-- <td> <input type="text" name="" id="" class="form-control"></td> -->
            </tr>
            <tr>
              <td rowspan=3>Individuals convicted under
                PSHT Act 2012

              </td>
              <input type="hidden" name="q40_type_cases_investigated[]" value="1">
              <input type="hidden" name="q40_type_cases_investigated[]" value="1">
              <input type="hidden" name="q40_type_cases_investigated[]" value="1">
              <td>Number of Victims of Sex Trafficking Cases</td>
              <input type="hidden" name="q40_category_coverage[]" value="1">
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_men[]" id="q40ColMen4" value="<?= isset($question_40_data->q40_data->q40ColMen4) ? $question_40_data->q40_data->q40ColMen4 :'' ?>" class="form-control q40PSHTOne q40Input"></td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_women[]" id="q40ColWomen4" value="<?= isset($question_40_data->q40_data->q40ColWomen4) ? $question_40_data->q40_data->q40ColWomen4 :'' ?>" class="form-control q40PSHTOne q40Input"></td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_third_gender[]" id="q40Col3rdG4" value="<?= isset($question_40_data->q40_data->q40Col3rdG4) ? $question_40_data->q40_data->q40Col3rdG4 :'' ?>" class="form-control q40PSHTOne q40Input"></td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_boy[]" id="q40ColBoy4" value="<?= isset($question_40_data->q40_data->q40ColBoy4) ? $question_40_data->q40_data->q40ColBoy4 :'' ?>" class="form-control q40PSHTOne q40Input"></td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_girl[]" id="q40ColGirl4" value="<?= isset($question_40_data->q40_data->q40ColGirl4) ? $question_40_data->q40_data->q40ColGirl4 :'' ?>" class="form-control q40PSHTOne q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_total[]" id="q40PSHTOne" value="<?= isset($question_40_data->q40_data->q40PSHTOne) ? $question_40_data->q40_data->q40PSHTOne :'' ?>" class="form-control q40Input" readonly></td>
              <!-- <td> <input type="text" name="" id="" class="form-control"></td> -->
            </tr>
            <tr>
              <td>Number of Victims of Labour Trafficking Cases</td>
              <input type="hidden" name="q40_category_coverage[]" value="2">
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_men[]" id="q40ColMen5" value="<?= isset($question_40_data->q40_data->q40ColMen5) ? $question_40_data->q40_data->q40ColMen5 :'' ?>" class="form-control q40PSHTTwo q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_women[]" id="q40ColWomen5" value="<?= isset($question_40_data->q40_data->q40ColWomen5) ? $question_40_data->q40_data->q40ColWomen5 :'' ?>" class="form-control q40PSHTTwo q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_third_gender[]" id="q40Col3rdG5" value="<?= isset($question_40_data->q40_data->q40Col3rdG5) ? $question_40_data->q40_data->q40Col3rdG5 :'' ?>" class="form-control q40PSHTTwo q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_boy[]" id="q40ColBoy5" value="<?= isset($question_40_data->q40_data->q40ColBoy5) ? $question_40_data->q40_data->q40ColBoy5 :'' ?>" class="form-control q40PSHTTwo q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_girl[]" id="q40ColGirl5" value="<?= isset($question_40_data->q40_data->q40ColGirl5) ? $question_40_data->q40_data->q40ColGirl5 :'' ?>" class="form-control q40PSHTTwo q40Input"> </td>
              <td><input type="text" name="q40_new_report_sex_trafficking_cases_total[]" id="q40PSHTTwo" value="<?= isset($question_40_data->q40_data->q40PSHTTwo) ? $question_40_data->q40_data->q40PSHTTwo :'' ?>" class="form-control q40Input" readonly> </td>
              <!-- <td> <input type="text" name="" id="" class="form-control"></td> -->
            </tr>
            <tr>
              <td> Number of Victims of Other/unspecified Trafficking Cases</td>
              <input type="hidden" name="q40_category_coverage[]" value="3">
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_men[]" id="q40ColMen6" value="<?= isset($question_40_data->q40_data->q40ColMen6) ? $question_40_data->q40_data->q40ColMen6 :'' ?>" class="form-control q40PSHTThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_women[]" id="q40ColWomen6" value="<?= isset($question_40_data->q40_data->q40ColWomen6) ? $question_40_data->q40_data->q40ColWomen6 :'' ?>" class="form-control q40PSHTThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_third_gender[]" id="q40Col3rdG6" value="<?= isset($question_40_data->q40_data->q40Col3rdG6) ? $question_40_data->q40_data->q40Col3rdG6 :'' ?>" class="form-control q40PSHTThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_boy[]" id="q40ColBoy6" value="<?= isset($question_40_data->q40_data->q40ColBoy6) ? $question_40_data->q40_data->q40ColBoy6 :'' ?>" class="form-control q40PSHTThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_girl[]" id="q40ColGirl6" value="<?= isset($question_40_data->q40_data->q40ColGirl6) ? $question_40_data->q40_data->q40ColGirl6 :'' ?>" class="form-control q40PSHTThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_total[]" id="q40PSHTThree" value="<?= isset($question_40_data->q40_data->q40PSHTThree) ? $question_40_data->q40_data->q40PSHTThree :'' ?>" class="form-control q40Input" readonly> </td>
              <!-- <td> <input type="text" name="" id="" class="form-control"></td> -->
            </tr>

            <tr>
              <td rowspan=3>individuals convicted under non-trafficking laws
                (OEMA/PC)


              </td>
              <input type="hidden" name="q40_type_cases_investigated[]" value="1">
              <input type="hidden" name="q40_type_cases_investigated[]" value="1">
              <input type="hidden" name="q40_type_cases_investigated[]" value="1">
              <td>Number of Victims of Sex Trafficking Cases</td>
              <input type="hidden" name="q40_category_coverage[]" value="1">
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_men[]" id="q40ColMen7" value="<?= isset($question_40_data->q40_data->q40ColMen7) ? $question_40_data->q40_data->q40ColMen7 :'' ?>" class="form-control q40OEMAOne q40Input"></td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_women[]" id="q40ColWomen7" value="<?= isset($question_40_data->q40_data->q40ColWomen7) ? $question_40_data->q40_data->q40ColWomen7 :'' ?>" class="form-control q40OEMAOne q40Input"></td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_third_gender[]" id="q40Col3rdG7" value="<?= isset($question_40_data->q40_data->q40Col3rdG7) ? $question_40_data->q40_data->q40Col3rdG7 :'' ?>" class="form-control q40OEMAOne q40Input"></td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_boy[]" id="q40ColBoy7" value="<?= isset($question_40_data->q40_data->q40ColBoy7) ? $question_40_data->q40_data->q40ColBoy7 :'' ?>" class="form-control q40OEMAOne q40Input"></td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_girl[]" id="q40ColGirl7" value="<?= isset($question_40_data->q40_data->q40ColGirl7) ? $question_40_data->q40_data->q40ColGirl7 :'' ?>" class="form-control q40OEMAOne q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_total[]" id="q40OEMAOne" value="<?= isset($question_40_data->q40_data->q40OEMAOne) ? $question_40_data->q40_data->q40OEMAOne :'' ?>" class="form-control q40Input" readonly></td>
              <!-- <td> <input type="text" name="" id="" class="form-control"></td> -->
            </tr>
            <tr>
              <td>Number of Victims of Labour Trafficking Cases</td>
              <input type="hidden" name="q40_category_coverage[]" value="2">
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_men[]" id="q40ColMen8" value="<?= isset($question_40_data->q40_data->q40ColMen8) ? $question_40_data->q40_data->q40ColMen8 :'' ?>" class="form-control q40OEMATwo q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_women[]" id="q40ColWomen8" value="<?= isset($question_40_data->q40_data->q40ColWomen8) ? $question_40_data->q40_data->q40ColWomen8 :'' ?>" class="form-control q40OEMATwo q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_third_gender[]" id="q40Col3rdG8" value="<?= isset($question_40_data->q40_data->q40Col3rdG8) ? $question_40_data->q40_data->q40Col3rdG8 :'' ?>" class="form-control q40OEMATwo q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_boy[]" id="q40ColBoy8" value="<?= isset($question_40_data->q40_data->q40ColBoy8) ? $question_40_data->q40_data->q40ColBoy8 :'' ?>" class="form-control q40OEMATwo q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_girl[]" id="q40ColGirl8" value="<?= isset($question_40_data->q40_data->q40ColGirl8) ? $question_40_data->q40_data->q40ColGirl8 :'' ?>" class="form-control q40OEMATwo q40Input"> </td>
              <td><input type="text" name="q40_new_report_sex_trafficking_cases_total[]" id="q40OEMATwo" value="<?= isset($question_40_data->q40_data->q40OEMATwo) ? $question_40_data->q40_data->q40OEMATwo :'' ?>" class="form-control q40Input" readonly> </td>
              <!-- <td> <input type="text" name="" id="" class="form-control"></td> -->
            </tr>
            <tr>
              <td>Number of Victims of Other/unspecified Trafficking Cases</td>
              <input type="hidden" name="q40_category_coverage[]" value="3">
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_men[]" id="q40ColMen9" value="<?= isset($question_40_data->q40_data->q40ColMen9) ? $question_40_data->q40_data->q40ColMen9 :'' ?>" class="form-control q40OEMAThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_women[]" id="q40ColWomen9" value="<?= isset($question_40_data->q40_data->q40ColWomen9) ? $question_40_data->q40_data->q40ColWomen9 :'' ?>" class="form-control q40OEMAThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_third_gender[]" id="q40Col3rdG9" value="<?= isset($question_40_data->q40_data->q40Col3rdG9) ? $question_40_data->q40_data->q40Col3rdG9 :'' ?>" class="form-control q40OEMAThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_boy[]" id="q40ColBoy9" value="<?= isset($question_40_data->q40_data->q40ColBoy9) ? $question_40_data->q40_data->q40ColBoy9 :'' ?>" class="form-control q40OEMAThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_girl[]" id="q40ColGirl9" value="<?= isset($question_40_data->q40_data->q40ColGirl9) ? $question_40_data->q40_data->q40ColGirl9 :'' ?>" class="form-control q40OEMAThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_total[]" id="q40OEMAThree" value="<?= isset($question_40_data->q40_data->q40OEMAThree) ? $question_40_data->q40_data->q40OEMAThree :'' ?>" class="form-control q40Input" readonly> </td>
              <!-- <td> <input type="text" name="" id="" class="form-control"></td> -->
            </tr>
            <tr>
              <td rowspan=3>Convictions newly upheld on appeal
              </td>
              <input type="hidden" name="q40_type_cases_investigated[]" value="1">
              <input type="hidden" name="q40_type_cases_investigated[]" value="1">
              <input type="hidden" name="q40_type_cases_investigated[]" value="1">
              <td>Number of Victims of Sex Trafficking Cases</td>
              <input type="hidden" name="q40_category_coverage[]" value="1">
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_men[]" id="q40ColMen10" value="<?= isset($question_40_data->q40_data->q40ColMen10) ? $question_40_data->q40_data->q40ColMen10 :'' ?>" class="form-control q40ConvictionsUpheldOne q40Input"></td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_women[]" id="q40ColWomen10" value="<?= isset($question_40_data->q40_data->q40ColWomen10) ? $question_40_data->q40_data->q40ColWomen10 :'' ?>" class="form-control q40ConvictionsUpheldOne q40Input"></td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_third_gender[]" id="q40Col3rdG10" value="<?= isset($question_40_data->q40_data->q40Col3rdG10) ? $question_40_data->q40_data->q40Col3rdG10 :'' ?>" class="form-control q40ConvictionsUpheldOne q40Input"></td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_boy[]" id="q40ColBoy10" value="<?= isset($question_40_data->q40_data->q40ColBoy10) ? $question_40_data->q40_data->q40ColBoy10 :'' ?>" class="form-control q40ConvictionsUpheldOne q40Input"></td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_girl[]" id="q40ColGirl10" value="<?= isset($question_40_data->q40_data->q40ColGirl10) ? $question_40_data->q40_data->q40ColGirl10 :'' ?>" class="form-control q40ConvictionsUpheldOne q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_total[]" id="q40ConvictionsUpheldOne" value="<?= isset($question_40_data->q40_data->q40ConvictionsUpheldOne) ? $question_40_data->q40_data->q40ConvictionsUpheldOne :'' ?>" class="form-control q40Input" readonly></td>
              <!-- <td> <input type="text" name="" id="" class="form-control"></td> -->
            </tr>
            <tr>
              <td>Number of Victims of Labour Trafficking Cases</td>
              <input type="hidden" name="q40_category_coverage[]" value="2">
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_men[]" id="q40ColMen11" value="<?= isset($question_40_data->q40_data->q40ColMen11) ? $question_40_data->q40_data->q40ColMen11 :'' ?>" class="form-control q40ConvictionsUpheldTwo q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_women[]" id="q40ColWomen11" value="<?= isset($question_40_data->q40_data->q40ColWomen11) ? $question_40_data->q40_data->q40ColWomen11 :'' ?>" class="form-control q40ConvictionsUpheldTwo q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_third_gender[]" id="q40Col3rdG11" value="<?= isset($question_40_data->q40_data->q40Col3rdG11) ? $question_40_data->q40_data->q40Col3rdG11 :'' ?>" class="form-control q40ConvictionsUpheldTwo q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_boy[]" id="q40ColBoy11" value="<?= isset($question_40_data->q40_data->q40ColBoy11) ? $question_40_data->q40_data->q40ColBoy11 :'' ?>" class="form-control q40ConvictionsUpheldTwo q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_girl[]" id="q40ColGirl11" value="<?= isset($question_40_data->q40_data->q40ColGirl11) ? $question_40_data->q40_data->q40ColGirl11 :'' ?>" class="form-control q40ConvictionsUpheldTwo q40Input"> </td>
              <td><input type="text" name="q40_new_report_sex_trafficking_cases_total[]" id="q40ConvictionsUpheldTwo" value="<?= isset($question_40_data->q40_data->q40ConvictionsUpheldTwo) ? $question_40_data->q40_data->q40ConvictionsUpheldTwo :'' ?>" class="form-control q40Input" readonly> </td>
              <!-- <td> <input type="text" name="" id="" class="form-control"></td> -->
            </tr>
            <tr>
              <td> Number of Victims of Other/unspecified Trafficking Cases</td>
              <input type="hidden" name="q40_category_coverage[]" value="3">
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_men[]" id="q40ColMen12" value="<?= isset($question_40_data->q40_data->q40ColMen12) ? $question_40_data->q40_data->q40ColMen12 :'' ?>" class="form-control q40ConvictionsUpheldThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_women[]" id="q40ColWomen12" value="<?= isset($question_40_data->q40_data->q40ColWomen12) ? $question_40_data->q40_data->q40ColWomen12 :'' ?>" class="form-control q40ConvictionsUpheldThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_third_gender[]" id="q40Col3rdG12" value="<?= isset($question_40_data->q40_data->q40Col3rdG12) ? $question_40_data->q40_data->q40Col3rdG12 :'' ?>" class="form-control q40ConvictionsUpheldThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_boy[]" id="q40ColBoy12" value="<?= isset($question_40_data->q40_data->q40ColBoy12) ? $question_40_data->q40_data->q40ColBoy12 :'' ?>" class="form-control q40ConvictionsUpheldThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_girl[]" id="q40ColGirl12" value="<?= isset($question_40_data->q40_data->q40ColGirl12) ? $question_40_data->q40_data->q40ColGirl12 :'' ?>" class="form-control q40ConvictionsUpheldThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_total[]" id="q40ConvictionsUpheldThree" value="<?= isset($question_40_data->q40_data->q40ConvictionsUpheldThree) ? $question_40_data->q40_data->q40ConvictionsUpheldThree :'' ?>" class="form-control q40Input" readonly> </td>
              <!-- <td> <input type="text" name="" id="" class="form-control"></td> -->
            </tr>
            <tr>
              <td rowspan=3>Convictions newly overturned on appeal</td>
              <input type="hidden" name="q40_type_cases_investigated[]" value="1">
              <input type="hidden" name="q40_type_cases_investigated[]" value="1">
              <input type="hidden" name="q40_type_cases_investigated[]" value="1">

              <td>Number of Victims of Sex Trafficking Cases</td>
              <input type="hidden" name="q40_category_coverage[]" value="1">
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_men[]" id="q40ColMen13" value="<?= isset($question_40_data->q40_data->q40ColMen13) ? $question_40_data->q40_data->q40ColMen13 :'' ?>" class="form-control q40ConvictionsOverturnedOne q40Input"></td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_women[]" id="q40ColWomen13" value="<?= isset($question_40_data->q40_data->q40ColWomen13) ? $question_40_data->q40_data->q40ColWomen13 :'' ?>" class="form-control q40ConvictionsOverturnedOne q40Input"></td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_third_gender[]" id="q40Col3rdG13" value="<?= isset($question_40_data->q40_data->q40Col3rdG13) ? $question_40_data->q40_data->q40Col3rdG13 :'' ?>" class="form-control q40ConvictionsOverturnedOne q40Input"></td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_boy[]" id="q40ColBoy13" value="<?= isset($question_40_data->q40_data->q40ColBoy13) ? $question_40_data->q40_data->q40ColBoy13 :'' ?>" class="form-control q40ConvictionsOverturnedOne q40Input"></td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_girl[]" id="q40ColGirl13" value="<?= isset($question_40_data->q40_data->q40ColGirl13) ? $question_40_data->q40_data->q40ColGirl13 :'' ?>" class="form-control q40ConvictionsOverturnedOne q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_total[]" id="q40ConvictionsOverturnedOne" value="<?= isset($question_40_data->q40_data->q40ConvictionsOverturnedOne) ? $question_40_data->q40_data->q40ConvictionsOverturnedOne :'' ?>" class="form-control q40Input" readonly></td>
              <!-- <td> <input type="text" name="" id="" class="form-control"></td> -->
            </tr>
            <tr>
              <td>Number of Victims of Labour Trafficking Cases</td>
              <input type="hidden" name="q40_category_coverage[]" value="2">
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_men[]" id="q40ColMen14" value="<?= isset($question_40_data->q40_data->q40ColMen14) ? $question_40_data->q40_data->q40ColMen14 :'' ?>" class="form-control q40ConvictionsOverturnedTwo q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_women[]" id="q40ColWomen14" value="<?= isset($question_40_data->q40_data->q40ColWomen14) ? $question_40_data->q40_data->q40ColWomen14 :'' ?>" class="form-control q40ConvictionsOverturnedTwo q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_third_gender[]" id="q40Col3rdG14" value="<?= isset($question_40_data->q40_data->q40Col3rdG14) ? $question_40_data->q40_data->q40Col3rdG14 :'' ?>" class="form-control q40ConvictionsOverturnedTwo q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_boy[]" id="q40ColBoy14" value="<?= isset($question_40_data->q40_data->q40ColBoy14) ? $question_40_data->q40_data->q40ColBoy14 :'' ?>" class="form-control q40ConvictionsOverturnedTwo q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_girl[]" id="q40ColGirl14" value="<?= isset($question_40_data->q40_data->q40ColGirl14) ? $question_40_data->q40_data->q40ColGirl14 :'' ?>" class="form-control q40ConvictionsOverturnedTwo q40Input"> </td>
              <td><input type="text" name="q40_new_report_sex_trafficking_cases_total[]" id="q40ConvictionsOverturnedTwo" value="<?= isset($question_40_data->q40_data->q40ConvictionsOverturnedTwo) ? $question_40_data->q40_data->q40ConvictionsOverturnedTwo :'' ?>" class="form-control q40Input" readonly> </td>
              <!-- <td> <input type="text" name="" id="" class="form-control"></td> -->
            </tr>
            <tr>
              <td> Number of Victims of Other/unspecified Trafficking Cases</td>
              <input type="hidden" name="q40_category_coverage[]" value="3">
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_men[]" id="q40ColMen15" value="<?= isset($question_40_data->q40_data->q40ColMen15) ? $question_40_data->q40_data->q40ColMen15 :'' ?>" class="form-control q40ConvictionsOverturnedThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_women[]" id="q40ColWomen15" value="<?= isset($question_40_data->q40_data->q40ColWomen15) ? $question_40_data->q40_data->q40ColWomen15 :'' ?>" class="form-control q40ConvictionsOverturnedThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_third_gender[]" id="q40Col3rdG15" value="<?= isset($question_40_data->q40_data->q40Col3rdG15) ? $question_40_data->q40_data->q40Col3rdG15 :'' ?>" class="form-control q40ConvictionsOverturnedThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_boy[]" id="q40ColBoy15" value="<?= isset($question_40_data->q40_data->q40ColBoy15) ? $question_40_data->q40_data->q40ColBoy15 :'' ?>" class="form-control q40ConvictionsOverturnedThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_girl[]" id="q40ColGirl15" value="<?= isset($question_40_data->q40_data->q40ColGirl15) ? $question_40_data->q40_data->q40ColGirl15 :'' ?>" class="form-control q40ConvictionsOverturnedThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_total[]" id="q40ConvictionsOverturnedThree" value="<?= isset($question_40_data->q40_data->q40ConvictionsOverturnedThree) ? $question_40_data->q40_data->q40ConvictionsOverturnedThree :'' ?>" class="form-control q40Input" readonly> </td>
              <!-- <td> <input type="text" name="" id="" class="form-control"></td> -->
            </tr>
            <tr>
              <td rowspan=3>Individuals acquitted</td>
              <input type="hidden" name="q40_type_cases_investigated[]" value="1">
              <input type="hidden" name="q40_type_cases_investigated[]" value="1">
              <input type="hidden" name="q40_type_cases_investigated[]" value="1">
              <td>Number of Victims of Sex Trafficking Cases</td>
              <input type="hidden" name="q40_category_coverage[]" value="1">
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_men[]" id="q40ColMen16" value="<?= isset($question_40_data->q40_data->q40ColMen16) ? $question_40_data->q40_data->q40ColMen16 :'' ?>" class="form-control q40IndividualAcquitOne q40Input"></td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_women[]" id="q40ColWomen16" value="<?= isset($question_40_data->q40_data->q40ColWomen16) ? $question_40_data->q40_data->q40ColWomen16 :'' ?>" class="form-control q40IndividualAcquitOne q40Input"></td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_third_gender[]" id="q40Col3rdG16" value="<?= isset($question_40_data->q40_data->q40Col3rdG16) ? $question_40_data->q40_data->q40Col3rdG16 :'' ?>" class="form-control q40IndividualAcquitOne q40Input"></td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_boy[]" id="q40ColBoy16" value="<?= isset($question_40_data->q40_data->q40ColBoy16) ? $question_40_data->q40_data->q40ColBoy16 :'' ?>" class="form-control q40IndividualAcquitOne q40Input"></td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_girl[]" id="q40ColGirl16" value="<?= isset($question_40_data->q40_data->q40ColGirl16) ? $question_40_data->q40_data->q40ColGirl16 :'' ?>" class="form-control q40IndividualAcquitOne q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_total[]" id="q40IndividualAcquitOne" value="<?= isset($question_40_data->q40_data->q40IndividualAcquitOne) ? $question_40_data->q40_data->q40IndividualAcquitOne :'' ?>" class="form-control q40Input" readonly></td>
              <!-- <td> <input type="text" name="" id="" class="form-control"></td> -->
            </tr>
            <tr>
              <td>Number of Victims of Labour Trafficking Cases</td>
              <input type="hidden" name="q40_category_coverage[]" value="2">
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_men[]" id="q40ColMen17" value="<?= isset($question_40_data->q40_data->q40ColMen17) ? $question_40_data->q40_data->q40ColMen17 :'' ?>" class="form-control q40IndividualAcquitTwo q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_women[]" id="q40ColWomen17" value="<?= isset($question_40_data->q40_data->q40ColWomen17) ? $question_40_data->q40_data->q40ColWomen17 :'' ?>" class="form-control q40IndividualAcquitTwo q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_third_gender[]" id="q40Col3rdG17" value="<?= isset($question_40_data->q40_data->q40Col3rdG17) ? $question_40_data->q40_data->q40Col3rdG17 :'' ?>" class="form-control q40IndividualAcquitTwo q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_boy[]" id="q40ColBoy17" value="<?= isset($question_40_data->q40_data->q40ColBoy17) ? $question_40_data->q40_data->q40ColBoy17 :'' ?>" class="form-control q40IndividualAcquitTwo q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_girl[]" id="q40ColGirl17" value="<?= isset($question_40_data->q40_data->q40ColGirl17) ? $question_40_data->q40_data->q40ColGirl17 :'' ?>" class="form-control q40IndividualAcquitTwo q40Input"> </td>
              <td><input type="text" name="q40_new_report_sex_trafficking_cases_total[]" id="q40IndividualAcquitTwo" value="<?= isset($question_40_data->q40_data->q40IndividualAcquitTwo) ? $question_40_data->q40_data->q40IndividualAcquitTwo :'' ?>" class="form-control q40Input" readonly> </td>
              <!-- <td> <input type="text" name="" id="" class="form-control"></td> -->
            </tr>
            <tr>
              <td>Number of Victims of Other/unspecified Trafficking Cases</td>
              <input type="hidden" name="q40_category_coverage[]" value="3">
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_men[]" id="q40ColMen18" value="<?= isset($question_40_data->q40_data->q40ColMen18) ? $question_40_data->q40_data->q40ColMen18 :'' ?>" class="form-control q40IndividualAcquitThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_women[]" id="q40ColWomen18" value="<?= isset($question_40_data->q40_data->q40ColWomen18) ? $question_40_data->q40_data->q40ColWomen18 :'' ?>" class="form-control q40IndividualAcquitThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_third_gender[]" id="q40Col3rdG18" value="<?= isset($question_40_data->q40_data->q40Col3rdG18) ? $question_40_data->q40_data->q40Col3rdG18 :'' ?>" class="form-control q40IndividualAcquitThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_boy[]" id="q40ColBoy18" value="<?= isset($question_40_data->q40_data->q40ColBoy18) ? $question_40_data->q40_data->q40ColBoy18 :'' ?>" class="form-control q40IndividualAcquitThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_girl[]" id="q40ColGirl18" value="<?= isset($question_40_data->q40_data->q40ColGirl18) ? $question_40_data->q40_data->q40ColGirl18 :'' ?>" class="form-control q40IndividualAcquitThree q40Input"> </td>
              <td> <input type="text" name="q40_new_report_sex_trafficking_cases_total[]" id="q40IndividualAcquitThree" value="<?= isset($question_40_data->q40_data->q40IndividualAcquitThree) ? $question_40_data->q40_data->q40IndividualAcquitThree :'' ?>" class="form-control q40Input" readonly> </td>
              <!-- <td> <input type="text" name="" id="" class="form-control"></td> -->
            </tr>
            <tr>
              <td>Please Attach/Upload Description of sentencing data</td>
              <td colspan="2"> <input type="file" name="" id="" class="form-control"> </td>
              <td colspan="6"></td>

            </tr>

          </table>
          <br/>
          <p class="text-right">
              <button type="button" class="btn btn-success" id="temp-save-question40">Save</button>       
          </p>
        </div>
      </div>
    </div> 
    @endif
<?php }
  ?>
    <script>
    $(function(){
    $(document).on("click",'#temp-save-question40',function() {

      var q40_data={}
      // alert($(this).attr('id'))
      $('.q40Input').each(function() {
        Object.assign(q40_data,{[$(this).attr('id')]:$(this).val()}) 

       });
       let new_data={
        q40_data:q40_data
       }
      //  console.log(new_data)
      $.ajax({    //create an ajax request to display.php
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
                'question40':new_data,
                'question_no':'40',
              },
              url: "/superadmin/case/temp-save-question40to60",             
              success: function(response){ 
                if(response){
                  alert("Question 40 has been saved temporary")

                }else{
                  alert("Not Saved")
                }
              }
      });
    }); 
  }); 

</script>