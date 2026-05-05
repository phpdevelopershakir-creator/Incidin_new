<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
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
class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('superadmin.dashboard'); 
    }

    public function chart()
    {

        $pdf = PDF::loadView('superadmin.case.chart');
    //     $pdf = PDF::loadView('superadmin.case.chart');
    //     $pdf->setOption('enable-javascript',true);
    //     $pdf->setOption('javascript-delay',1000);
    //     $pdf->setOption('no-stop-slow-scripts',true);
    //     $pdf->setOption('enable-smart-shrinking',true);
    
     return $pdf->stream();
    }

    public function q1_generate_pdf()
    {
        $sex_locations=DB::table('trafficking_location_q1')->limit(5)->get();
        // $awarness_data_table1 =$this->getting_awarness_data();
        // $awarness_data_table2 =$this->getting_awarness_data(true);
        // $table1_rows=$this->htmlRows($awarness_data_table1);
        // $table2_rows=$this->htmlRows($awarness_data_table2);
        // $category_pie_chart_data=$this->awarness_all_partcipants();
        $pdf=PDF::loadView('superadmin.case.q1_table_chart',compact('sex_locations')); // test using image for ''data''
        $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif','isJavascriptEnabled'=>true]);
        // $pdf->setOption('enable-javascript', true);
        // $pdf->setOption('javascript-delay', 5000);
        // $pdf->setOption('enable-smart-shrinking', true);
        // $pdf->setOption('no-stop-slow-scripts', true);
        return $pdf->stream('q1_chart.pdf');
    }
    public function q2_generate_pdf()
    {
        $sex_labers=DB::table('sex_trafficking_force_labors_q2')->limit(3)->get();
        // $awarness_data_table1 =$this->getting_awarness_data();
        // $awarness_data_table2 =$this->getting_awarness_data(true);
        // $table1_rows=$this->htmlRows($awarness_data_table1);
        // $table2_rows=$this->htmlRows($awarness_data_table2);
        // $category_pie_chart_data=$this->awarness_all_partcipants();
        $pdf=PDF::loadView('superadmin.case.q2_table_chart',compact('sex_labers')); // test using image for ''data''
        $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif','isJavascriptEnabled'=>true]);
        // $pdf->setOption('enable-javascript', true);
        // $pdf->setOption('javascript-delay', 5000);
        // $pdf->setOption('enable-smart-shrinking', true);
        // $pdf->setOption('no-stop-slow-scripts', true);
        return $pdf->stream('q2_chart.pdf');
    }
    public function q21_generate_pdf()
    {
        $twenty_ones=DB::table('standard_procedures_identification_q21')->limit(5)->get();
        // $awarness_data_table1 =$this->getting_awarness_data();
        // $awarness_data_table2 =$this->getting_awarness_data(true);
        // $table1_rows=$this->htmlRows($awarness_data_table1);
        // $table2_rows=$this->htmlRows($awarness_data_table2);
        // $category_pie_chart_data=$this->awarness_all_partcipants();
        $pdf=PDF::loadView('superadmin.case.q21_table_chart',compact('twenty_ones')); // test using image for ''data''
        $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif','isJavascriptEnabled'=>true]);
        // $pdf->setOption('enable-javascript', true);
        // $pdf->setOption('javascript-delay', 5000);
        // $pdf->setOption('enable-smart-shrinking', true);
        // $pdf->setOption('no-stop-slow-scripts', true);
        return $pdf->stream('q21_chart.pdf');
    }
    public function q22_generate_pdf()
    {
        $twenty_twos=DB::table('proactive_victim_identification_q22')->limit(7)->get();
         // $awarness_data_table1 =$this->getting_awarness_data();
        // $awarness_data_table2 =$this->getting_awarness_data(true);
        // $table1_rows=$this->htmlRows($awarness_data_table1);
        // $table2_rows=$this->htmlRows($awarness_data_table2);
        // $category_pie_chart_data=$this->awarness_all_partcipants();
        $pdf=PDF::loadView('superadmin.case.q22_table_chart',compact('twenty_twos')); // test using image for ''data''
        $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif','isJavascriptEnabled'=>true]);
        // $pdf->setOption('enable-javascript', true);
        // $pdf->setOption('javascript-delay', 5000);
        // $pdf->setOption('enable-smart-shrinking', true);
        // $pdf->setOption('no-stop-slow-scripts', true);
        return $pdf->stream('q22_chart.pdf');
    }
}
