<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Controllers\SuperAdmin\Pichart18Controller;
use App\Http\Controllers\SuperAdmin\Pichart24Controller;
use App\Http\Controllers\SuperAdmin\Pichart20Controller;
use App\Http\Controllers\SuperAdmin\Pichart25Controller;
use App\Http\Controllers\SuperAdmin\Pichart30Controller;
use App\Http\Controllers\SuperAdmin\Pichart31Controller;
use App\Http\Controllers\SuperAdmin\Pichart32Controller;
use App\Http\Controllers\SuperAdmin\Pichart33Controller;
use App\Http\Controllers\SuperAdmin\Pichart34Controller;
use App\Http\Controllers\SuperAdmin\Pichart36Controller;
use App\Http\Controllers\SuperAdmin\Pichart37Controller;
use App\Http\Controllers\SuperAdmin\Pichart40Controller;
use App\Http\Controllers\SuperAdmin\Pichart42Controller;
use App\Http\Controllers\SuperAdmin\Pichart44Controller;
use App\Http\Controllers\SuperAdmin\Pichart49Controller;
use App\Http\Controllers\SuperAdmin\Pichart53Controller;
use App\Http\Controllers\SuperAdmin\Pichart55Controller;
use App\Models\One;
use App\Models\Two;
use App\Models\Three;
use App\Models\Four;
use App\Models\Five;
use App\Models\Six;
use App\Models\Seven;
use App\Models\Eight;
use App\Models\Nine;
use App\Models\Ten;
use App\Models\Eleven;
use App\Models\Twelve;
use App\Models\Thirteen;
use App\Models\Fourteen;
use App\Models\Fifteen;
use App\Models\Sixteen;
use App\Models\Seventeen;
use App\Models\Eighteen;
use App\Models\Nineteen;
use App\Models\Twenty;
use App\Models\TwentyOne;
use App\Models\TwentyTwo;
use App\Models\TwentyThree;
use App\Models\TwentyFour;
use App\Models\TwentyFive;
use App\Models\TwentySix;
use App\Models\TwentySeven;
use App\Models\TwentyEight;
use App\Models\TwentyNine;
use App\Models\Thirty;
use App\Models\ThiryOne;
use App\Models\ThirtyTwo;
use App\Models\ThirtyThree;
use App\Models\ThirtyFour;
use App\Models\ThirtyFive;
use App\Models\ThirtySix;
use App\Models\ThirtySeven;
use App\Models\ThirtyEight;
use App\Models\ThirtyNine;
use App\Models\Fourty;
use App\Models\FortyOne;
use App\Models\FortyTwo;
use App\Models\FortyThree;
use App\Models\FortyFour;
use App\Models\FortyFive;
use App\Models\FortySix;
use App\Models\FortySeven;
use App\Models\FortyEight;
use App\Models\FortyNine;
use App\Models\Fifty;
use App\Models\FiftyOne;
use App\Models\FiftyTwo;
use App\Models\FiftyThree;
use App\Models\FiftyFour;
use App\Models\FiftyFive;
use App\Models\FiftySix;
use App\Models\FiftySeven;
use App\Models\FiftyEight;
use App\Models\FiftyNine;
use App\Models\Sixty;
use App\Helpers\helper;
use PDF;
class ReportSummary extends Controller
{
    public function summary_report_view()
    {

        
        $q1_question_type = array(
            1 => "Forced sexual exploitation",
            2 => "Trafficking for sexual visuals/pornography",
            3 => "Web Enabled Trafficking",
            4 => "Trafficking in Migrants",
            5 => "Organ Trafficking",
            6 => "Trafficking in Refugee",
            7 => "Other (Specify)"
        );
        $q1_locations = array(
            1 => "Barisal",
            2 => "Chattogram",
            3 => "Dhaka",
            4 => "Khulna",
            5 => "Mymensingh",
            6 => "Rajshahi",
            7 => "Rangpur",
            8 => "Sylhet"
        );
        $q1_vulnerable_list=array(
            1=>"Migrant Men", 
            2=>"Migrant Women", 
            3=>"Third Gender", 
            4=>"Girls of Poor Household",
            5=>"Boys of Poor Household", 
            6=>"Men", 
            7=>"Women", 
            8=>"Children of Sex Worker", 
            9=>"Child Labour", 
            10=>"Street Children", 
            11=>"Other Specify"
        );
        $q3_migitate_risk=array(
            1=>"Policy", 
            2=>"Law", 
            3=>"Awareness", 
            4=>"Economic Support", 
            5=>"Technology Transfer", 
            6=>"Psychosocial Care", 
            7=>"Legal Aid", 
            8=>"Health Care", 
            9=>"Shelter", 
            10=>"Technical Training", 
            11=>"Education", 
            12=>"Research", 
            13=>"Other Specify"
        );
        $q3_locations = array(
            1 =>"Barisal",
            2 =>"Chattogram",
            3 =>"Dhaka",
            4 =>"Khulna",
            5 =>"Mymensingh",
            6 =>"Rajshahi",
            7 =>"Rangpur",
            8 =>"Sylhet",
            9=>"National"
        );
        $q3_problem_beneficary =array(
            1=>"Men",
            2=>"Women",
            3=>"3rd G",
            4=>"Rural Poor",
            5=>"Urban Poor"
        );
        $q4_type_issues = array(
            1=>"Policy", 
            2=>"Law", 
            3=>"Awareness", 
            4=>"Economic Support", 
            5=>"Technology Transfer", 
            6=>"Psychosocial Care", 
            7=>"Legal Aid", 
            8=>"Health Care", 
            9=>"Shelter", 
            10=>"Technical Training", 
            11=>"Education", 
            12=>"Lifeskill Training", 
            13=>"Research", 
            14=>"Other Specify"
        );
        $q4_remarks = array(
            1=>"Satisfactory", 
            2=>"Planned", 
            3=>"Discontinued", 
            4=>"Completed"
        );
        $q4_components=array(
            1=>"Prevention", 
            2=>"Protection", 
            3=>"Prosecution", 
            4=>"Protection", 
            5=>"Partnership", 
            6=>"M&E (NPA)", 
            7=>"NPA", 
            8=>"NRM", 
            9=>"MLA", 
            10=>"TIP Report", 
            // 11=>"Others (Specify)1", 
            // 12=>"Others (Specify)2"
        );
        $q5_type_policy_tool=array(
            1=>"National Policy", 
            2=>"National Strategy", 
            3=>"National Plan", 
            4=>"Regional Arrangement", 
            5=>"Economic Policy"
        );
        $q10_target_groups=array(
            1=>"Government Official", 
            2=>"Immigration Authority", 
            3=>"Law Enforcing Personnel", 
            4=>"Border Control Force", 
            5=>"Judiciary", 
            6=>"Diplomats"
        );
        $q11_orgianal_approach=array(
            1=>"OEMA 2013", 
            2=>"Employee-paid-model", 
            3=>"Fair recruitment cost notification", 
            4=>"Ranking of Recruiting Agents", 
            5=>"Licensing of Recruiting Agents", 
            6=>"Registration of Informal Recruiting Agents",
            7=>"Zero Migration Cost Approach"
        );
        $q11_description_changes =array(
            1=>"Firmly Implemented/enforced", 
            2=>"Reformed", 
            3=>"Planned", 
            4=>"Drafted", 
            5=>"Updated", 
            6=>"Partially enforced",
            7=>"Expanded use",
            8=>"Prohibited by law",
            9=>"Prohibit",
            10=>"Strictly monitored"

        );
        $q12_instruments = array(
            1=>"Bil-Lateral Agreement", 
            2=>"Mutual Legal Arrangement", 
            3=>"MoU", 
            4=>"Trade Treaty", 
            5=>"G to G agreement"	
        );
        $q13_national_type_actions=array(
            1=>"Reform of Labour Law", 
            2=>"Stricter Enforcement of law", 
            3=>"Research",
            4=>"Stricter monitoring", 
            5=>"Training of Factory Inspectors",
            6=>"Training of Trade Unions",
            7=>"Training of entrepreneurs",
            8=>"Prohibited by law",
            9=>"Prohibitated by circular", 
            10=>"Increased legal action"
          
        );
        $q13_action_levels = array(
            1=>"National",
            2=>"Global"
        );
        $q15_status = array(
            1=>"Enforced", 
            2=>"Updated and enforced", 
            3=>"Stricter enforcement", 
            4=>"Increased efforts"
        );
        $q15_actions = array(
            1=>"Procurement Policy", 
            2=>"Anti-Corruption measures", 
            3=>"Capacity building of government officials", 
            4=>"Others (Specify)1", 
            5=>"Others (Specify)2", 
            6=>"Others (Specify)3"
        );
        $q16_status = array(
            1=>"Enforced", 
            2=>"Updated and enforced", 
            3=>"Stricter enforcement", 
            4=>"Increased efforts", 
            5=>"Moderate Effortt", 
            6=>"Less Effort", 
            7=>"Poor Enforcement", 
            8=>"Under Review", 
            9=>"Other (Specify)"
        );
        $q16_actions = array(
            1=>"Awareness raising on forced prostitution and trafficking among citizens", 
            2=>"Awareness raising on legal measures against sexual exploitation of trafficked individuals", 
            3=>"Legal actions against podophiles/sex-tourists (clients on underaged girls/VoTs)", 
            4=>"Others (Specify)1", 
            5=>"Others (Specify)2", 
            6=>"Others (Specify)3"
        );
        $q17_status = array(
            1=>"Enforced", 
            2=>"Updated and enforced", 
            3=>"Stricter enforcement", 
            4=>"Increased efforts", 
            5=>"Moderate Effortt", 
            6=>"Less Effort", 
            7=>"Poor Enforcement", 
            8=>"Under Review", 
            9=>"Other (Specify)"
        );
        $q17_actions = array(
            1=>"Awareness raising on forced prostitution and trafficking among citizens", 
            2=>"Awareness raising on legal measures against sexual exploitation of trafficked individuals", 
            3=>"Legal actions against foreign podophiles/sex- tourists (clients on underaged girls/VoTs)"
        );
        // $startDate = $request->input('start_date') ? date('Y-m-d', strtotime(strtotime($request->input('start_date')))) : date('Y-m-d');
        // $endDate = $request->input('end_date') ? date('Y-m-d', strtotime("+1 day", strtotime($request->input('end_date')))) : date('Y-m-d', strtotime("+1 day", strtotime(date('Y-m-d'))));
        // $question_id = $request->input('question_id');
        // if($question_id=='1'){
        $questionsOne = One::get_string_data_by_date('', '',false);
        $questions_two = Two::get_question2_string_data_by_date('', '',false);
        $questions_three = Three::get_question3_string_data_by_date('', '',false);
        $questions_four = Four::get_question4_string_data_by_date('', '',false);
        $questions_five = Five::get_question5_string_data_by_date('', '',false);
        $questions_ten = Ten::get_question10_string_data_by_date('', '',false);
        $questions_eleven = Eleven::get_question11_string_data_by_date('', '',false);
        $questions_twelve = Twelve::get_question12_string_data_by_date('', '',false);
        $questions_thirteen = Thirteen::get_question13_string_data_by_date('', '',false);
        $questions_fifteen = Fifteen::get_question15_string_data_by_date('', '',false);
        $questions_sixteen = Sixteen::get_question16_string_data_by_date('', '',false);
        $questions_seventeen = Seventeen::get_question17_string_data_by_date('', '',false);
        $questionsNineteen = Nineteen::get_question19_string_data_by_date('', '',false);
        $questionsTwenty = Twenty::get_question20_string_data_by_date('', '',false);

        $questionOneData = array(

        );
        foreach ($questionsOne as $one) {
            $new_array = array(
                'case_id' => $one->case_id,
                'created_at' => date("d-m-Y", strtotime($one->date)),
                'name' => $one->name
            );
            //Checking array Value
            $foundIndex = array_search($one->case_id, array_filter(array_combine(array_keys($questionOneData), array_column($questionOneData, 'case_id'))));
            if ($foundIndex > -1) {
                $questionOneData[$foundIndex]['feedback'][] = $one;
            } else {
                $new_array['feedback'][] = $one;
                array_push($questionOneData, $new_array);
            }
        }
     

        // End Question one

        //Question Two Data Manipulation
        $question_two_data = array(

        );
        foreach ($questions_two as $two) {
            $new_array = array(
                'case_id' => $two->case_id,
                'created_at' => date("d-m-Y", strtotime($two->date)),
                'name' => $two->name
            );
            //Checking array Value
            $foundIndex = array_search($two->case_id, array_filter(array_combine(array_keys($question_two_data), array_column($question_two_data, 'case_id'))));
            if ($foundIndex > -1) {
                $question_two_data[$foundIndex]['feedback'][] = $two;
            } else {
                $new_array['feedback'][] = $two;
                array_push($question_two_data, $new_array);
            }
        }

        //End Data Manipulation

        //Question Three Data Manipulation
        $questionsThree = array(

        );
        foreach ($questions_three as $three) {
            $new_array = array(
                'case_id' => $three->case_id,
                'created_at' => date("d-m-Y", strtotime($three->date)),
                'name' => $three->name
            );
            //Checking array Value
            $foundIndex = array_search($three->case_id, array_filter(array_combine(array_keys($questionsThree), array_column($questionsThree, 'case_id'))));
            if ($foundIndex > -1) {
                $questionsThree[$foundIndex]['feedback'][] = $three;
            } else {
                $new_array['feedback'][] = $three;
                array_push($questionsThree, $new_array);
            }
        }

        //End Data Manipulation

        //Question Four Data Manipulation
        $questionsFour = array(

        );
        foreach ($questions_four as $four) {
            $new_array = array(
                'case_id' => $four->case_id,
                'created_at' => date("d-m-Y", strtotime($four->date)),
                'name' => $four->name
            );
            //Checking array Value
            $foundIndex = array_search($four->case_id, array_filter(array_combine(array_keys($questionsFour), array_column($questionsFour, 'case_id'))));
            if ($foundIndex > -1) {
                $questionsFour[$foundIndex]['feedback'][] = $four;
            } else {
                $new_array['feedback'][] = $four;
                array_push($questionsFour, $new_array);
            }
        }

        //End Data Manipulation

        //Question Five Data Manipulation
        $questionsFive = array(

        );
        foreach ($questions_five as $five) {
            $new_array = array(
                'case_id' => $five->case_id,
                'created_at' => date("d-m-Y", strtotime($five->date)),
                'name' => $five->name
            );
            //Checking array Value
            $foundIndex = array_search($five->case_id, array_filter(array_combine(array_keys($questionsFive), array_column($questionsFive, 'case_id'))));
            if ($foundIndex > -1) {
                $questionsFive[$foundIndex]['feedback'][] = $five;
            } else {
                $new_array['feedback'][] = $five;
                array_push($questionsFive, $new_array);
            }
        }

        //End Data Manipulation

        //Question Ten Data Manipulation
        $questionsTen = array(

        );
        foreach ($questions_ten as $ten) {
            $new_array = array(
                'case_id' => $ten->case_id,
                'created_at' => date("d-m-Y", strtotime($ten->date)),
                'name' => $ten->name
            );
            //Checking array Value
            $foundIndex = array_search($ten->case_id, array_filter(array_combine(array_keys($questionsTen), array_column($questionsTen, 'case_id'))));
            if ($foundIndex > -1) {
                $questionsTen[$foundIndex]['feedback'][] = $ten;
            } else {
                $new_array['feedback'][] = $ten;
                array_push($questionsTen, $new_array);
            }
        }

        //End Data Manipulation

        //Question Eleven Data Manipulation
        $questionsEleven = array(

        );
        foreach ($questions_eleven as $eleven) {
            $new_array = array(
                'case_id' => $eleven->case_id,
                'created_at' => date("d-m-Y", strtotime($eleven->date)),
                'name' => $eleven->name
            );
            //Checking array Value
            $foundIndex = array_search($eleven->case_id, array_filter(array_combine(array_keys($questionsEleven), array_column($questionsEleven, 'case_id'))));
            if ($foundIndex > -1) {
                $questionsEleven[$foundIndex]['feedback'][] = $eleven;
            } else {
                $new_array['feedback'][] = $eleven;
                array_push($questionsEleven, $new_array);
            }
        }

        //End Data Manipulation

        //Question Twelve Data Manipulation
        $questionsTwelve = array(

        );
        foreach ($questions_twelve as $twelve) {
            $new_array = array(
                'case_id' => $twelve->case_id,
                'created_at' => date("d-m-Y", strtotime($twelve->date)),
                'name' => $twelve->name
            );
            //Checking array Value
            $foundIndex = array_search($twelve->case_id, array_filter(array_combine(array_keys($questionsTwelve), array_column($questionsTwelve, 'case_id'))));
            if ($foundIndex > -1) {
                $questionsTwelve[$foundIndex]['feedback'][] = $twelve;
            } else {
                $new_array['feedback'][] = $twelve;
                array_push($questionsTwelve, $new_array);
            }
        }

        //End Data Manipulation

        //Question Thirteen Data Manipulation
        $questionsThirteen = array(

        );
        foreach ($questions_thirteen as $thirteen) {
            $new_array = array(
                'case_id' => $thirteen->case_id,
                'created_at' => date("d-m-Y", strtotime($thirteen->date)),
                'name' => $thirteen->name
            );
            //Checking array Value
            $foundIndex = array_search($thirteen->case_id, array_filter(array_combine(array_keys($questionsThirteen), array_column($questionsThirteen, 'case_id'))));
            if ($foundIndex > -1) {
                $questionsThirteen[$foundIndex]['feedback'][] = $thirteen;
            } else {
                $new_array['feedback'][] = $thirteen;
                array_push($questionsThirteen, $new_array);
            }
        }

        //End Data Manipulation


        //Question Fifteen Data Manipulation
        $questionsFifteen = array(

        );
        foreach ($questions_fifteen as $fifteen) {
            $new_array = array(
                'case_id' => $fifteen->case_id,
                'created_at' => date("d-m-Y", strtotime($fifteen->date)),
                'name' => $fifteen->name
            );
            //Checking array Value
            $foundIndex = array_search($fifteen->case_id, array_filter(array_combine(array_keys($questionsFifteen), array_column($questionsFifteen, 'case_id'))));
            if ($foundIndex > -1) {
                $questionsFifteen[$foundIndex]['feedback'][] = $fifteen;
            } else {
                $new_array['feedback'][] = $fifteen;
                array_push($questionsFifteen, $new_array);
            }
        }

        //End Data Manipulation


        //Question Sixteen Data Manipulation
        $questionsSixteen = array(

        );
        foreach ($questions_sixteen as $sixteen) {
            $new_array = array(
                'case_id' => $sixteen->case_id,
                'created_at' => date("d-m-Y", strtotime($sixteen->date)),
                'name' => $sixteen->name
            );
            //Checking array Value
            $foundIndex = array_search($sixteen->case_id, array_filter(array_combine(array_keys($questionsSixteen), array_column($questionsSixteen, 'case_id'))));
            if ($foundIndex > -1) {
                $questionsSixteen[$foundIndex]['feedback'][] = $sixteen;
            } else {
                $new_array['feedback'][] = $sixteen;
                array_push($questionsSixteen, $new_array);
            }
        }

        //End Data Manipulation


        //Question Seventeen Data Manipulation
        $questionsSeventeen = array(

        );
        foreach ($questions_seventeen as $seventeen) {
            $new_array = array(
                'case_id' => $seventeen->case_id,
                'created_at' => date("d-m-Y", strtotime($seventeen->date)),
                'name' => $seventeen->name
            );
            //Checking array Value
            $foundIndex = array_search($seventeen->case_id, array_filter(array_combine(array_keys($questionsSeventeen), array_column($questionsSeventeen, 'case_id'))));
            if ($foundIndex > -1) {
                $questionsSeventeen[$foundIndex]['feedback'][] = $seventeen;
            } else {
                $new_array['feedback'][] = $seventeen;
                array_push($questionsSeventeen, $new_array);
            }
        }
        $questionsSix = Six::whereBetween('created_at', ['', '',false])->get();
        $questionsSeven = Seven::whereBetween('created_at', ['', '',false])->get();
        $questionsEight = Eight::whereBetween('created_at', ['', '',false])->get();
        $questionsNine = Nine::whereBetween('created_at', ['', '',false])->get();
        // $questionsTen = Ten::whereBetween('created_at', [$startDate, $endDate])->get();

        // $questionsEleven = Eleven::whereBetween('created_at', [$startDate, $endDate])->get();
        // $questionsTwelve = Twelve::whereBetween('created_at', [$startDate, $endDate])->get();
        // $questionsThirteen = Thirteen::whereBetween('created_at', [$startDate, $endDate])->get();
        $questionsFourteen = Fourteen::whereBetween('created_at', ['', '',false])->get();
        // $questionsFifteen = Fifteen::whereBetween('created_at', [$startDate, $endDate])->get();
        // $questionsSixteen = Sixteen::whereBetween('created_at', [$startDate, $endDate])->get();
        // $questionsSeventeen = Seventeen::whereBetween('created_at', [$startDate, $endDate])->get();
        $questionsEighteen = Eighteen::whereBetween('created_at', ['', '',false])->get();
        // $questionsNineteen = Nineteen::whereBetween('created_at', [$startDate, $endDate])->get();
        // $questionsTwenty = Twenty::whereBetween('created_at', [$startDate, $endDate])->get();

        $questionsTwentyOne = TwentyOne::whereBetween('created_at', ['', '',false])->get();
        $questionsTwentyTwo = TwentyTwo::whereBetween('created_at', ['', '',false])->get();
        $questionsTwentyThree = TwentyThree::whereBetween('created_at', ['', '',false])->get();
        $questionsTwentyFour = TwentyFour::whereBetween('created_at', ['', '',false])->get();
        $questionsTwentyFive = TwentyFive::whereBetween('created_at', ['', '',false])->get();
        $questionsTwentySix = TwentySix::whereBetween('created_at', ['', '',false])->get();
        $questionsTwentySeven = TwentySeven::whereBetween('created_at', ['', '',false])->get();
        $questionsTwentyEight = TwentyEight::whereBetween('created_at', ['', '',false])->get();
        $questionsTwentyNine = TwentyNine::whereBetween('created_at', ['', '',false])->get();
        $questionsThirty = Thirty::whereBetween('created_at', ['', '',false])->get();


        $questionsThiryOne = ThiryOne::whereBetween('created_at', ['', '',false])->get();
        $questionsThirtyTwo = ThirtyTwo::whereBetween('created_at', ['', '',false])->get();
        $questionsThirtyThree = ThirtyThree::whereBetween('created_at', ['', '',false])->get();
        $questionsThirtyFour = ThirtyFour::whereBetween('created_at', ['', '',false])->get();
        $questionsThirtyFive = ThirtyFive::whereBetween('created_at', ['', '',false])->get();
        $questionsThirtySix = ThirtySix::whereBetween('created_at', ['', '',false])->get();
        $questionsThirtySeven = ThirtySeven::whereBetween('created_at', ['', '',false])->get();
        $questionsThirtyEight = ThirtyEight::whereBetween('created_at', ['', '',false])->get();
        $questionsThirtyNine = ThirtyNine::whereBetween('created_at', ['', '',false])->get();
        $questionsFourty = Fourty::whereBetween('created_at', ['', '',false])->get();

        $questionsFortyOne = FortyOne::whereBetween('created_at', ['', '',false])->get();
        $questionsFortyTwo = FortyTwo::whereBetween('created_at', ['', '',false])->get();
        $questionsFortyThree = FortyThree::whereBetween('created_at', ['', '',false])->get();
        $questionsFortyFour = FortyFour::whereBetween('created_at', ['', '',false])->get();
        $questionsFortyFive = FortyFive::whereBetween('created_at', ['', '',false])->get();
        $questionsFortySix = FortySix::whereBetween('created_at', ['', '',false])->get();
        $questionsFortySeven = FortySeven::whereBetween('created_at', ['', '',false])->get();
        $questionsFortyEight = FortyEight::whereBetween('created_at', ['', '',false])->get();
        $questionsFortyNine = FortyNine::whereBetween('created_at', ['', '',false])->get();
        $questionsFifty = Fifty::whereBetween('created_at', ['', '',false])->get();

        $questionsFiftyOne = FiftyOne::whereBetween('created_at', ['', '',false])->get();
        $questionsFiftyTwo = FiftyTwo::whereBetween('created_at', ['', '',false])->get();
        $questionsFiftyThree = FiftyThree::whereBetween('created_at', ['', '',false])->get();
        $questionsFiftyFour = FiftyFour::whereBetween('created_at', ['', '',false])->get();
        $questionsFiftyFive = FiftyFive::whereBetween('created_at', ['', '',false])->get();
        $questionsFiftySix = FiftySix::whereBetween('created_at', ['', '',false])->get();
        $questionsFiftySeven = FiftySeven::whereBetween('created_at', ['', '',false])->get();
        $questionsFiftyEight = FiftyEight::whereBetween('created_at', ['', '',false])->get();
        $questionsFiftyNine = FiftyNine::whereBetween('created_at', ['', '',false])->get();
        //return response()->json($questionsFiftyNine);
        $questionsSixty = Sixty::whereBetween('created_at', ['', '',false])->get();
        return view('reports.summary_report', compact(
            'questionOneData',
            'question_two_data',
            'questionsThree',
            'questionsFour',
            'questionsFive',
            'questionsSix',
            'questionsSeven',
            'questionsEight',
            'questionsNine',
            'questionsTen',
            'questionsEleven',
            'questionsTwelve',
            'questionsThirteen',
            'questionsFourteen',
            'questionsFifteen',
            'questionsSixteen',
            'questionsSeventeen',
            'questionsEighteen',
            'questionsNineteen',
            'questionsTwenty',
            'questionsTwentyOne',
            'questionsTwentyTwo',
            'questionsTwentyThree',
            'questionsTwentyFour',
            'questionsTwentyFive',
            'questionsTwentySix',
            'questionsTwentySeven',
            'questionsTwentyEight',
            'questionsTwentyNine',
            'questionsThirty',
            'questionsThiryOne',
            'questionsThirtyTwo',
            'questionsThirtyThree',
            'questionsThirtyFour',
            'questionsThirtyFive',
            'questionsThirtySix',
            'questionsThirtySeven',
            'questionsThirtyEight',
            'questionsThirtyNine',
            'questionsFourty',
            'questionsFortyOne',
            'questionsFortyTwo',
            'questionsFortyThree',
            'questionsFortyFour',
            'questionsFortyFive',
            'questionsFortySix',
            'questionsFortySeven',
            'questionsFortyEight',
            'questionsFortyNine',
            'questionsFifty',
            'questionsFiftyOne',
            'questionsFiftyTwo',
            'questionsFiftyThree',
            'questionsFiftyFour',
            'questionsFiftyFive',
            'questionsFiftySix',
            'questionsFiftySeven',
            'questionsFiftyEight',
            'questionsFiftyNine',
            'questionsSixty',
            'q1_locations',
            'q1_question_type',
            'q1_vulnerable_list',
            'q3_migitate_risk',
            'q3_locations',
            'q3_problem_beneficary',
            'q4_type_issues',
            'q4_remarks',
            'q4_components',
            'q5_type_policy_tool',
            'q10_target_groups',
            'q11_orgianal_approach',
            'q11_description_changes',
            'q12_instruments',
            'q13_national_type_actions',
            'q13_action_levels',
            'q15_status',
            'q15_actions',
            'q16_status',
            'q16_actions',
            'q17_status',
            'q17_actions'
        ));
      
    
    }
    public function summary_report_download()
    {
        //implemented for maximum execution and memory limit
        set_time_limit(seconds: 1000);
        ini_set('memory_limit', '-1');
        
        $q1_question_type = array(
            1 => "Forced sexual exploitation",
            2 => "Trafficking for sexual visuals/pornography",
            3 => "Web Enabled Trafficking",
            4 => "Trafficking in Migrants",
            5 => "Organ Trafficking",
            6 => "Trafficking in Refugee",
            7 => "Other (Specify)"
        );
        $q1_locations = array(
            1 => "Barisal",
            2 => "Chattogram",
            3 => "Dhaka",
            4 => "Khulna",
            5 => "Mymensingh",
            6 => "Rajshahi",
            7 => "Rangpur",
            8 => "Sylhet"
        );
        $q1_vulnerable_list=array(
            1=>"Migrant Men", 
            2=>"Migrant Women", 
            3=>"Third Gender", 
            4=>"Girls of Poor Household",
            5=>"Boys of Poor Household", 
            6=>"Men", 
            7=>"Women", 
            8=>"Children of Sex Worker", 
            9=>"Child Labour", 
            10=>"Street Children", 
            11=>"Other Specify"
        );
        $q3_migitate_risk=array(
            1=>"Policy", 
            2=>"Law", 
            3=>"Awareness", 
            4=>"Economic Support", 
            5=>"Technology Transfer", 
            6=>"Psychosocial Care", 
            7=>"Legal Aid", 
            8=>"Health Care", 
            9=>"Shelter", 
            10=>"Technical Training", 
            11=>"Education", 
            12=>"Research", 
            13=>"Other Specify"
        );
        $q3_locations = array(
            1 =>"Barisal",
            2 =>"Chattogram",
            3 =>"Dhaka",
            4 =>"Khulna",
            5 =>"Mymensingh",
            6 =>"Rajshahi",
            7 =>"Rangpur",
            8 =>"Sylhet",
            9=>"National"
        );
        $q3_problem_beneficary =array(
            1=>"Men",
            2=>"Women",
            3=>"3rd G",
            4=>"Rural Poor",
            5=>"Urban Poor"
        );
        $q4_type_issues = array(
            1=>"Policy", 
            2=>"Law", 
            3=>"Awareness", 
            4=>"Economic Support", 
            5=>"Technology Transfer", 
            6=>"Psychosocial Care", 
            7=>"Legal Aid", 
            8=>"Health Care", 
            9=>"Shelter", 
            10=>"Technical Training", 
            11=>"Education", 
            12=>"Lifeskill Training", 
            13=>"Research", 
            14=>"Other Specify"
        );
        $q4_remarks = array(
            1=>"Satisfactory", 
            2=>"Planned", 
            3=>"Discontinued", 
            4=>"Completed"
        );
        $q4_components=array(
            1=>"Prevention", 
            2=>"Protection", 
            3=>"Prosecution", 
            4=>"Protection", 
            5=>"Partnership", 
            6=>"M&E (NPA)", 
            7=>"NPA", 
            8=>"NRM", 
            9=>"MLA", 
            10=>"TIP Report", 
            // 11=>"Others (Specify)1", 
            // 12=>"Others (Specify)2"
        );
        $q5_type_policy_tool=array(
            1=>"National Policy", 
            2=>"National Strategy", 
            3=>"National Plan", 
            4=>"Regional Arrangement", 
            5=>"Economic Policy"
        );
        $q10_target_groups=array(
            1=>"Government Official", 
            2=>"Immigration Authority", 
            3=>"Law Enforcing Personnel", 
            4=>"Border Control Force", 
            5=>"Judiciary", 
            6=>"Diplomats"
        );
        $q11_orgianal_approach=array(
            1=>"OEMA 2013", 
            2=>"Employee-paid-model", 
            3=>"Fair recruitment cost notification", 
            4=>"Ranking of Recruiting Agents", 
            5=>"Licensing of Recruiting Agents", 
            6=>"Registration of Informal Recruiting Agents",
            7=>"Zero Migration Cost Approach"
        );
        $q11_description_changes =array(
            1=>"Firmly Implemented/enforced", 
            2=>"Reformed", 
            3=>"Planned", 
            4=>"Drafted", 
            5=>"Updated", 
            6=>"Partially enforced",
            7=>"Expanded use",
            8=>"Prohibited by law",
            9=>"Prohibit",
            10=>"Strictly monitored"

        );
        $q12_instruments = array(
            1=>"Bil-Lateral Agreement", 
            2=>"Mutual Legal Arrangement", 
            3=>"MoU", 
            4=>"Trade Treaty", 
            5=>"G to G agreement"	
        );
        $q13_national_type_actions=array(
            1=>"Reform of Labour Law", 
            2=>"Stricter Enforcement of law", 
            3=>"Research",
            4=>"Stricter monitoring", 
            5=>"Training of Factory Inspectors",
            6=>"Training of Trade Unions",
            7=>"Training of entrepreneurs",
            8=>"Prohibited by law",
            9=>"Prohibitated by circular", 
            10=>"Increased legal action"
          
        );
        $q13_action_levels = array(
            1=>"National",
            2=>"Global"
        );
        $q15_status = array(
            1=>"Enforced", 
            2=>"Updated and enforced", 
            3=>"Stricter enforcement", 
            4=>"Increased efforts"
        );
        $q15_actions = array(
            1=>"Procurement Policy", 
            2=>"Anti-Corruption measures", 
            3=>"Capacity building of government officials", 
            4=>"Others (Specify)1", 
            5=>"Others (Specify)2", 
            6=>"Others (Specify)3"
        );
        $q16_status = array(
            1=>"Enforced", 
            2=>"Updated and enforced", 
            3=>"Stricter enforcement", 
            4=>"Increased efforts", 
            5=>"Moderate Effortt", 
            6=>"Less Effort", 
            7=>"Poor Enforcement", 
            8=>"Under Review", 
            9=>"Other (Specify)"
        );
        $q16_actions = array(
            1=>"Awareness raising on forced prostitution and trafficking among citizens", 
            2=>"Awareness raising on legal measures against sexual exploitation of trafficked individuals", 
            3=>"Legal actions against podophiles/sex-tourists (clients on underaged girls/VoTs)", 
            4=>"Others (Specify)1", 
            5=>"Others (Specify)2", 
            6=>"Others (Specify)3"
        );
        $q17_status = array(
            1=>"Enforced", 
            2=>"Updated and enforced", 
            3=>"Stricter enforcement", 
            4=>"Increased efforts", 
            5=>"Moderate Effortt", 
            6=>"Less Effort", 
            7=>"Poor Enforcement", 
            8=>"Under Review", 
            9=>"Other (Specify)"
        );
        $q17_actions = array(
            1=>"Awareness raising on forced prostitution and trafficking among citizens", 
            2=>"Awareness raising on legal measures against sexual exploitation of trafficked individuals", 
            3=>"Legal actions against foreign podophiles/sex- tourists (clients on underaged girls/VoTs)"
        );
        // $startDate = $request->input('start_date') ? date('Y-m-d', strtotime(strtotime($request->input('start_date')))) : date('Y-m-d');
        // $endDate = $request->input('end_date') ? date('Y-m-d', strtotime("+1 day", strtotime($request->input('end_date')))) : date('Y-m-d', strtotime("+1 day", strtotime(date('Y-m-d'))));
        // $question_id = $request->input('question_id');
        // if($question_id=='1'){
        $questionsOne = One::get_string_data_by_date('', '',false);
        $questions_two = Two::get_question2_string_data_by_date('', '',false);
        $questions_three = Three::get_question3_string_data_by_date('', '',false);
        $questions_four = Four::get_question4_string_data_by_date('', '',false);
        $questions_five = Five::get_question5_string_data_by_date('', '',false);
        $questions_ten = Ten::get_question10_string_data_by_date('', '',false);
        $questions_eleven = Eleven::get_question11_string_data_by_date('', '',false);
        $questions_twelve = Twelve::get_question12_string_data_by_date('', '',false);
        $questions_thirteen = Thirteen::get_question13_string_data_by_date('', '',false);
        $questions_fifteen = Fifteen::get_question15_string_data_by_date('', '',false);
        $questions_sixteen = Sixteen::get_question16_string_data_by_date('', '',false);
        $questions_seventeen = Seventeen::get_question17_string_data_by_date('', '',false);
        $questions_nineteen = Nineteen::get_question19_string_data_by_date('', '',false);
        $questions_twenty = Twenty::get_question20_string_data_by_date('', '',false);

        $questionOneData = array(

        );
        foreach ($questionsOne as $one) {
            $new_array = array(
                'case_id' => $one->case_id,
                'created_at' => date("d-m-Y", strtotime($one->date)),
                'name' => $one->name
            );
            //Checking array Value
            $foundIndex = array_search($one->case_id, array_filter(array_combine(array_keys($questionOneData), array_column($questionOneData, 'case_id'))));
            if ($foundIndex > -1) {
                $questionOneData[$foundIndex]['feedback'][] = $one;
            } else {
                $new_array['feedback'][] = $one;
                array_push($questionOneData, $new_array);
            }
        }
     

        // End Question one

        //Question Two Data Manipulation
        $question_two_data = array(

        );
        foreach ($questions_two as $two) {
            $new_array = array(
                'case_id' => $two->case_id,
                'created_at' => date("d-m-Y", strtotime($two->date)),
                'name' => $two->name
            );
            //Checking array Value
            $foundIndex = array_search($two->case_id, array_filter(array_combine(array_keys($question_two_data), array_column($question_two_data, 'case_id'))));
            if ($foundIndex > -1) {
                $question_two_data[$foundIndex]['feedback'][] = $two;
            } else {
                $new_array['feedback'][] = $two;
                array_push($question_two_data, $new_array);
            }
        }

        //End Data Manipulation

        //Question Three Data Manipulation
        $questionsThree = array(

        );
        foreach ($questions_three as $three) {
            $new_array = array(
                'case_id' => $three->case_id,
                'created_at' => date("d-m-Y", strtotime($three->date)),
                'name' => $three->name
            );
            //Checking array Value
            $foundIndex = array_search($three->case_id, array_filter(array_combine(array_keys($questionsThree), array_column($questionsThree, 'case_id'))));
            if ($foundIndex > -1) {
                $questionsThree[$foundIndex]['feedback'][] = $three;
            } else {
                $new_array['feedback'][] = $three;
                array_push($questionsThree, $new_array);
            }
        }

        //End Data Manipulation

        //Question Four Data Manipulation
        $questionsFour = array(

        );
        foreach ($questions_four as $four) {
            $new_array = array(
                'case_id' => $four->case_id,
                'created_at' => date("d-m-Y", strtotime($four->date)),
                'name' => $four->name
            );
            //Checking array Value
            $foundIndex = array_search($four->case_id, array_filter(array_combine(array_keys($questionsFour), array_column($questionsFour, 'case_id'))));
            if ($foundIndex > -1) {
                $questionsFour[$foundIndex]['feedback'][] = $four;
            } else {
                $new_array['feedback'][] = $four;
                array_push($questionsFour, $new_array);
            }
        }

        //End Data Manipulation

        //Question Five Data Manipulation
        $questionsFive = array(

        );
        foreach ($questions_five as $five) {
            $new_array = array(
                'case_id' => $five->case_id,
                'created_at' => date("d-m-Y", strtotime($five->date)),
                'name' => $five->name
            );
            //Checking array Value
            $foundIndex = array_search($five->case_id, array_filter(array_combine(array_keys($questionsFive), array_column($questionsFive, 'case_id'))));
            if ($foundIndex > -1) {
                $questionsFive[$foundIndex]['feedback'][] = $five;
            } else {
                $new_array['feedback'][] = $five;
                array_push($questionsFive, $new_array);
            }
        }

        //End Data Manipulation

        //Question Ten Data Manipulation
        $questionsTen = array(

        );
        foreach ($questions_ten as $ten) {
            $new_array = array(
                'case_id' => $ten->case_id,
                'created_at' => date("d-m-Y", strtotime($ten->date)),
                'name' => $ten->name
            );
            //Checking array Value
            $foundIndex = array_search($ten->case_id, array_filter(array_combine(array_keys($questionsTen), array_column($questionsTen, 'case_id'))));
            if ($foundIndex > -1) {
                $questionsTen[$foundIndex]['feedback'][] = $ten;
            } else {
                $new_array['feedback'][] = $ten;
                array_push($questionsTen, $new_array);
            }
        }

        //End Data Manipulation

        //Question Eleven Data Manipulation
        $questionsEleven = array(

        );
        foreach ($questions_eleven as $eleven) {
            $new_array = array(
                'case_id' => $eleven->case_id,
                'created_at' => date("d-m-Y", strtotime($eleven->date)),
                'name' => $eleven->name
            );
            //Checking array Value
            $foundIndex = array_search($eleven->case_id, array_filter(array_combine(array_keys($questionsEleven), array_column($questionsEleven, 'case_id'))));
            if ($foundIndex > -1) {
                $questionsEleven[$foundIndex]['feedback'][] = $eleven;
            } else {
                $new_array['feedback'][] = $eleven;
                array_push($questionsEleven, $new_array);
            }
        }

        //End Data Manipulation

        //Question Twelve Data Manipulation
        $questionsTwelve = array(

        );
        foreach ($questions_twelve as $twelve) {
            $new_array = array(
                'case_id' => $twelve->case_id,
                'created_at' => date("d-m-Y", strtotime($twelve->date)),
                'name' => $twelve->name
            );
            //Checking array Value
            $foundIndex = array_search($twelve->case_id, array_filter(array_combine(array_keys($questionsTwelve), array_column($questionsTwelve, 'case_id'))));
            if ($foundIndex > -1) {
                $questionsTwelve[$foundIndex]['feedback'][] = $twelve;
            } else {
                $new_array['feedback'][] = $twelve;
                array_push($questionsTwelve, $new_array);
            }
        }

        //End Data Manipulation

        //Question Thirteen Data Manipulation
        $questionsThirteen = array(

        );
        foreach ($questions_thirteen as $thirteen) {
            $new_array = array(
                'case_id' => $thirteen->case_id,
                'created_at' => date("d-m-Y", strtotime($thirteen->date)),
                'name' => $thirteen->name
            );
            //Checking array Value
            $foundIndex = array_search($thirteen->case_id, array_filter(array_combine(array_keys($questionsThirteen), array_column($questionsThirteen, 'case_id'))));
            if ($foundIndex > -1) {
                $questionsThirteen[$foundIndex]['feedback'][] = $thirteen;
            } else {
                $new_array['feedback'][] = $thirteen;
                array_push($questionsThirteen, $new_array);
            }
        }

        //End Data Manipulation


        //Question Fifteen Data Manipulation
        $questionsFifteen = array(

        );
        foreach ($questions_fifteen as $fifteen) {
            $new_array = array(
                'case_id' => $fifteen->case_id,
                'created_at' => date("d-m-Y", strtotime($fifteen->date)),
                'name' => $fifteen->name
            );
            //Checking array Value
            $foundIndex = array_search($fifteen->case_id, array_filter(array_combine(array_keys($questionsFifteen), array_column($questionsFifteen, 'case_id'))));
            if ($foundIndex > -1) {
                $questionsFifteen[$foundIndex]['feedback'][] = $fifteen;
            } else {
                $new_array['feedback'][] = $fifteen;
                array_push($questionsFifteen, $new_array);
            }
        }

        //End Data Manipulation


        //Question Sixteen Data Manipulation
        $questionsSixteen = array(

        );
        foreach ($questions_sixteen as $sixteen) {
            $new_array = array(
                'case_id' => $sixteen->case_id,
                'created_at' => date("d-m-Y", strtotime($sixteen->date)),
                'name' => $sixteen->name
            );
            //Checking array Value
            $foundIndex = array_search($sixteen->case_id, array_filter(array_combine(array_keys($questionsSixteen), array_column($questionsSixteen, 'case_id'))));
            if ($foundIndex > -1) {
                $questionsSixteen[$foundIndex]['feedback'][] = $sixteen;
            } else {
                $new_array['feedback'][] = $sixteen;
                array_push($questionsSixteen, $new_array);
            }
        }

        //End Data Manipulation


        //Question Seventeen Data Manipulation
        $questionsSeventeen = array(

        );
        foreach ($questions_seventeen as $seventeen) {
            $new_array = array(
                'case_id' => $seventeen->case_id,
                'created_at' => date("d-m-Y", strtotime($seventeen->date)),
                'name' => $seventeen->name
            );
            //Checking array Value
            $foundIndex = array_search($seventeen->case_id, array_filter(array_combine(array_keys($questionsSeventeen), array_column($questionsSeventeen, 'case_id'))));
            if ($foundIndex > -1) {
                $questionsSeventeen[$foundIndex]['feedback'][] = $seventeen;
            } else {
                $new_array['feedback'][] = $seventeen;
                array_push($questionsSeventeen, $new_array);
            }
        }

        //End Data Manipulation

        //Question Nineteen Data Manipulation
        $questionsNineteen = array(

        );
        foreach ($questions_nineteen as $nineteen) {
            $new_array = array(
                'case_id' => $nineteen->case_id,
                'created_at' => date("d-m-Y", strtotime($nineteen->date)),
                'name' => $nineteen->name
            );
            //Checking array Value
            $foundIndex = array_search($nineteen->case_id, array_filter(array_combine(array_keys($questionsNineteen), array_column($questionsNineteen, 'case_id'))));
            if ($foundIndex > -1) {
                $questionsNineteen[$foundIndex]['feedback'][] = $nineteen;
            } else {
                $new_array['feedback'][] = $nineteen;
                array_push($questionsNineteen, $new_array);
            }
        }

        //End Data Manipulation

        //Question Twenty Data Manipulation
        $questionsTwenty = array(

        );
        foreach ($questions_twenty as $twenty) {
            $new_array = array(
                'case_id' => $twenty->case_id,
                'created_at' => date("d-m-Y", strtotime($twenty->date)),
                'name' => $twenty->name
            );
            //Checking array Value
            $foundIndex = array_search($twenty->case_id, array_filter(array_combine(array_keys($questionsTwenty), array_column($questionsTwenty, 'case_id'))));
            if ($foundIndex > -1) {
                $questionsTwenty[$foundIndex]['feedback'][] = $twenty;
            } else {
                $new_array['feedback'][] = $twenty;
                array_push($questionsTwenty, $new_array);
            }
        }
        $questionsSix = Six::whereBetween('created_at', ['', '',false])->get();
        $questionsSeven = Seven::whereBetween('created_at', ['', '',false])->get();
        $questionsEight = Eight::whereBetween('created_at', ['', '',false])->get();
        $questionsNine = Nine::whereBetween('created_at', ['', '',false])->get();
        // $questionsTen = Ten::whereBetween('created_at', [$startDate, $endDate])->get();

        // $questionsEleven = Eleven::whereBetween('created_at', [$startDate, $endDate])->get();
        // $questionsTwelve = Twelve::whereBetween('created_at', [$startDate, $endDate])->get();
        // $questionsThirteen = Thirteen::whereBetween('created_at', [$startDate, $endDate])->get();
        $questionsFourteen = Fourteen::whereBetween('created_at', ['', '',false])->get();
        // $questionsFifteen = Fifteen::whereBetween('created_at', [$startDate, $endDate])->get();
        // $questionsSixteen = Sixteen::whereBetween('created_at', [$startDate, $endDate])->get();
        // $questionsSeventeen = Seventeen::whereBetween('created_at', [$startDate, $endDate])->get();
        $questionsEighteen = Pichart18Controller::getting_government_data();
        $questionsEighteentable2 = Pichart18Controller::getting_government_data(true);
        // $questionsNineteen = Nineteen::whereBetween('created_at', [$startDate, $endDate])->get();
        $questionsTwenty = Pichart20Controller::getting_awarness_data();
        $questionsTwentyTable2 = Pichart20Controller::getting_awarness_data(true);

        $questionsTwentyOne = TwentyOne::whereBetween('created_at', ['', '',false])->get();
        $questionsTwentyTwo = TwentyTwo::whereBetween('created_at', ['', '',false])->get();
        $questionsTwentyThree = TwentyThree::whereBetween('created_at', ['', '',false])->get();
        $questionsTwentyFour = Pichart24Controller::getting_awarness_data();
        $questionsTwentyFourTable2 = Pichart24Controller::getting_awarness_data(true);
        $questionsTwentyFive = Pichart25Controller::getting_awarness_data();
        $questionsTwentyFiveTable2 = Pichart25Controller::getting_awarness_data(true);
        $questionsTwentySix = TwentySix::whereBetween('created_at', ['', '',false])->get();
        $questionsTwentySeven = TwentySeven::whereBetween('created_at', ['', '',false])->get();
        $questionsTwentyEight = TwentyEight::whereBetween('created_at', ['', '',false])->get();
        $questionsTwentyNine = TwentyNine::whereBetween('created_at', ['', '',false])->get();
        $questionsThirty = Pichart30Controller::getting_awarness_data();
        $questionsThirtyTable2 = Pichart30Controller::getting_awarness_data(true);


        $questionsThiryOne = Pichart31Controller::getting_awarness_data();
        $questionsThiryOneTable2 = Pichart31Controller::getting_awarness_data(true);
        $questionsThirtyTwo = Pichart32Controller::getting_awarness_data();
        $questionsThirtyTwoTable2 = Pichart32Controller::getting_awarness_data(true);
        $questionsThirtyThree =  Pichart33Controller::getting_awarness_data();
        $questionsThirtyThreeTable2 = Pichart33Controller::getting_awarness_data(true);
        $questionsThirtyFour = Pichart34Controller::getting_awarness_data();
        $questionsThirtyFourTable2 = Pichart34Controller::getting_awarness_data(true);
        $questionsThirtyFive = ThirtyFive::whereBetween('created_at', ['', '',false])->get();
        $questionsThirtySix = Pichart36Controller::getting_awarness_data();
        $questionsThirtySixTable2 = Pichart36Controller::getting_awarness_data(true);
        $questionsThirtySeven = Pichart37Controller::getting_awarness_data();
        $questionsThirtySevenTable2 = Pichart37Controller::getting_awarness_data(true);
        $questionsThirtyEight = ThirtyEight::whereBetween('created_at', ['', '',false])->get();
        $questionsThirtyNine = ThirtyNine::whereBetween('created_at', ['', '',false])->get();
        $questionsFourty = Pichart40Controller::getting_awarness_data();
        $questionsFourtyTable2 = Pichart40Controller::getting_awarness_data(true);

        $questionsFortyOne = FortyOne::whereBetween('created_at', ['', '',false])->get();
        $questionsFortyTwo = Pichart42Controller::getting_government_data();
        $questionsFortyTwoTable2 = Pichart42Controller::getting_government_data(true);
        $questionsFortyThree = FortyThree::whereBetween('created_at', ['', '',false])->get();
        $questionsFortyFour = Pichart44Controller::getting_government_data();
        $questionsFortyFourTable2 =Pichart44Controller::getting_government_data(true);
        $questionsFortyFive = FortyFive::whereBetween('created_at', ['', '',false])->get();
        $questionsFortySix = FortySix::whereBetween('created_at', ['', '',false])->get();
        $questionsFortySeven = FortySeven::whereBetween('created_at', ['', '',false])->get();
        $questionsFortyEight = FortyEight::whereBetween('created_at', ['', '',false])->get();
        $questionsFortyNine = Pichart49Controller::getting_government_data();
        $questionsFortyNineTable2 = Pichart49Controller::getting_government_data(true);
        $questionsFifty = Fifty::whereBetween('created_at', ['', '',false])->get();

        $questionsFiftyOne = FiftyOne::whereBetween('created_at', ['', '',false])->get();
        $questionsFiftyTwo = FiftyTwo::whereBetween('created_at', ['', '',false])->get();
        $questionsFiftyThree = Pichart53Controller::getting_awarness_data();
        $questionsFiftyThreeTable2 = Pichart53Controller::getting_awarness_data(true);
        $questionsFiftyFour = FiftyFour::whereBetween('created_at', ['', '',false])->get();
        $questionsFiftyFive = Pichart55Controller::getting_awarness_data();
        $questionsFiftyFiveTable2 = Pichart55Controller::getting_awarness_data(true);
        $questionsFiftySix = FiftySix::whereBetween('created_at', ['', '',false])->get();
        $questionsFiftySeven = FiftySeven::whereBetween('created_at', ['', '',false])->get();
        $questionsFiftyEight = FiftyEight::whereBetween('created_at', ['', '',false])->get();
        $questionsFiftyNine = FiftyNine::whereBetween('created_at', ['', '',false])->get();
        $questionsSixty = Sixty::whereBetween('created_at', ['', '',false])->get();
       
        $pdf= PDF::loadView('reports.summary_report_pdf_view', compact(
            'questionOneData',
            'question_two_data',
            'questionsThree',
            'questionsFour',
            'questionsFive',
            'questionsSix',
            'questionsSeven',
            'questionsEight',
            'questionsNine',
            'questionsTen',
            'questionsEleven',
            'questionsTwelve',
            'questionsThirteen',
            'questionsFourteen',
            'questionsFifteen',
            'questionsSixteen',
            'questionsSeventeen',
            'questionsEighteen',
            'questionsEighteentable2',
            'questionsNineteen',
            'questionsTwenty',
            'questionsTwentyTable2',
            'questionsTwentyOne',
            'questionsTwentyTwo',
            'questionsTwentyThree',
            'questionsTwentyFour',
            'questionsTwentyFourTable2',
            'questionsTwentyFive',
            'questionsTwentyFiveTable2',
            'questionsTwentySix',
            'questionsTwentySeven',
            'questionsTwentyEight',
            'questionsTwentyNine',
            'questionsThirty',
            'questionsThirtyTable2',
            'questionsThiryOne',
            'questionsThiryOneTable2',
            'questionsThirtyTwo',
            'questionsThirtyTwoTable2',
            'questionsThirtyThree',
            'questionsThirtyThreeTable2',
            'questionsThirtyFour',
            'questionsThirtyFourTable2',
            'questionsThirtyFive',
            'questionsThirtySix',
            'questionsThirtySixTable2',
            'questionsThirtySeven',
            'questionsThirtySevenTable2',
            'questionsThirtyEight',
            'questionsThirtyNine',
            'questionsFourty',
            'questionsFourtyTable2',
            'questionsFortyOne',
            'questionsFortyTwo',
            'questionsFortyTwoTable2',
            'questionsFortyThree',
            'questionsFortyFour',
            'questionsFortyFourTable2',
            'questionsFortyFive',
            'questionsFortySix',
            'questionsFortySeven',
            'questionsFortyEight',
            'questionsFortyNine',
            'questionsFortyNineTable2',
            'questionsFifty',
            'questionsFiftyOne',
            'questionsFiftyTwo',
            'questionsFiftyThree',
            'questionsFiftyThreeTable2',
            'questionsFiftyFour',
            'questionsFiftyFive',
            'questionsFiftyFiveTable2',
            'questionsFiftySix',
            'questionsFiftySeven',
            'questionsFiftyEight',
            'questionsFiftyNine',
            'questionsSixty',
            'q1_locations',
            'q1_question_type',
            'q1_vulnerable_list',
            'q3_migitate_risk',
            'q3_locations',
            'q3_problem_beneficary',
            'q4_type_issues',
            'q4_remarks',
            'q4_components',
            'q5_type_policy_tool',
            'q10_target_groups',
            'q11_orgianal_approach',
            'q11_description_changes',
            'q12_instruments',
            'q13_national_type_actions',
            'q13_action_levels',
            'q15_status',
            'q15_actions',
            'q16_status',
            'q16_actions',
            'q17_status',
            'q17_actions'
        ));
      
        $pdf->set_option('isPhpEnabled', true);
        return $pdf->stream('summary_report.pdf');

       
    }


      public function print_report_view()
       {
 
        $questionsNine = Nine::whereBetween('created_at', ['', '',false])->get();
        return view('reports.print_report', compact(

            'questionsNine'
        ));
      
    
    }
   
}
