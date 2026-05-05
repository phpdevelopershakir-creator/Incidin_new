<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\QuestionTitle;
use App\Models\CaseModel;
use App\Models\SituationPreventionYesNo;
use App\Models\YesNoStatus20to40;
use App\Models\YesNoStatus40to60;
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
use App\Models\Sixty;
use App\Models\Upzila;
use App\Models\Division;
use App\Models\Union;
use App\Models\Thirten;
use App\Models\ThirtyOne;
use App\Models\FiftyNine;

use App\Models\FourtyTwo;
use App\Models\User;
use App\Models\Roles;
use Spatie\Permission\Models\Permission;

//new database design
use DB;
use PDF;
use Spatie\Permission\Models\Role;
use Session;
class CaseController extends Controller
{

    public function AllCase()
    {

        $users = User::where('status', 1)->get();

        return view('superadmin.case.all_list', compact('users'));
    }
    public function userwish($id)
    {

        $user = User::where('id', $id)->where('status', 1)->first();
        $cases = CaseModel::where('user_id', $user->id)->where('is_delete', 1)->latest()->paginate(10);

        return view('superadmin.case.all_list_case', compact('user', 'cases'));
    }
    public function usercasewish($id)
    {

        $user = User::with('cases')->findOrFail($id);
        // $case = $user->case()->with('one')->findOrFail($id);
        return response()->json($case);


        $case = CaseModel::
            with(
                'one',
                'two',
                'three',
                'four',
                'five',
                'six',
                'seven',
                'eight',
                'nine',
                'ten',
                'eleven',
                'twelve',
                'thirteen',
                'fourteen',
                'fifteen',
                'sixteen',
                'seventeen',
                'eighteen',
                'nineteen',
                'twenty',
                'twentyone',
                'twentytwo',
                'twentythree',
                'twentyfour',
                'twentyfive',
                'twentysix',
                'twentyseven',
                'twentyeight',
                'twentynine',
                'thirty',
                'thirtyone',
                'thirtytwo',
                'thirtythree',
                'thirtyfour',
                'thirtyfive',
                'thirtysix',
                'thirtyseven',
                'thirtyeight',
                'thirtynine',
                'forty',
                'fortyone',
                'fortytwo',
                'fortythree',
                'fortyfour',
                'fortyfive',
                'fortysix',
                'fortyseven',
                'fortyeight',
                'fortynine',
                'fifty',
                'fiftyone',
                'fiftytwo',
                'fiftythree',
                'fiftyfour',
                'fiftyfive',
                'fiftyseven',
                'fiftyeight',
                'fiftyfine',
                'sixty'
            )
            ->find($id);






        return view('superadmin.case.all_list_case_single', compact('case'));
    }
    public function ListCase()
    {
        $userId = Auth::id();
        $userType = Auth::user()->user_type;

        if ($userType == "Super Admin") {
            $cases = CaseModel::where('is_delete', 1)
                ->latest()
                ->paginate(10);
        } else {
            $cases = CaseModel::where('user_id', $userId)
                ->where('is_delete', 1)
                ->latest()
                ->paginate(10);
        }
        
        return view('superadmin.case.list', compact('cases'));
    }

    public function listSuperAdmin()
    {
        $cases = CaseModel::where('is_delete', 1)
                ->latest()
                ->paginate(10);
                 return view('superadmin.case.superadmin', compact('cases'));
    }


    // case view
    public function View($id)
    {
        $userId = Auth::id();
        $userType = Auth::user()->user_type;
        $relationships = [
            'one',
            'two',
            'three',
            'four',
            'five',
            'six',
            'seven',
            'eight',
            'nine',
  
            'ten',
            'eleven',
            'twelve',
            'thirteen',
            'fourteen',
            'fifteen',
            'sixteen',
            'seventeen',
            'eighteen',
            'nineteen',
            'twenty',
            'twentyone',
            'twentytwo',
            'twentythree',
            'twentyfour',
            'twentyfive',
            'twentysix',
            'twentyseven',
            'twentyeight',
            'twentynine',
            'thirty',
             'thirtyone',
            'thirtytwo',
            'thirtythree',
            'thirtyfour',
            'thirtyfive',
            'thirtysix',
            'thirtyseven',
            'thirtyeight',
            'thirtynine',
            'forty',
            'fortyone',
            'fortytwo',
            'fortythree',
            'fortyfour',
            'fortyfive',
            'fortysix',
            'fortyseven',
            'fortyeight',
            'fortynine',
            'fifty',
            'fiftyone',
            'fiftytwo',
            'fiftythree',
            'fiftyfour',
            'fiftyfive',
            'fiftysix',
            'fiftyseven',
            'fiftyeight',
            'fiftyfine',
            'sixty'
        ];

        if ($userType == "Super Admin" || $userType == 2) {
            // For user_type 1 and 2, get the case without additional constraints
            $case = CaseModel::with($relationships)->find($id);
        } else {
            // For other user types, ensure the case belongs to the logged-in user
            $case = CaseModel::
            with($relationships)
                ->where('user_id', $userId)
                ->where('id', $id)
                ->first();
        }
//         echo "<pre>";
//    print_r($case);
// echo "</pre>"; 
        //return response()->jsoN($case);

        return view('superadmin.case.view', compact('case'));
    }

    


    public function generateInvoice(Request $request, $id)
{
    $userId = $request->input('user_id'); // ✅ Define first

    $role = Role::findOrFail($userId); // ✅ Now it works

    $Allpermissions = Permission::all();
    $permissions = [];

    foreach ($Allpermissions as $permission) {
        if ($role->hasPermissionTo($permission->name)) {
            $permissions[] = $permission->name;
        }
    }

    $case = CaseModel::with(
        'one', 'two', 'three', 'four', 'five', 'six', 'seven',
        'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen',
        'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen',
        'nineteen', 'twenty', 'twentyone', 'twentytwo', 'twentythree',
        'twentyfour', 'twentyfive', 'twentysix', 'twentyseven',
        'twentyeight', 'twentynine', 'thirty', 'thirtyone', 'thirtytwo',
        'thirtythree', 'thirtyfour', 'thirtyfive', 'thirtysix',
        'thirtyseven', 'thirtyeight', 'thirtynine', 'forty', 'fortyone',
        'fortytwo', 'fortythree', 'fortyfour', 'fortyfive', 'fortysix',
        'fortyseven', 'fortyeight', 'fortynine', 'fifty', 'fiftyone',
        'fiftytwo', 'fiftythree', 'fiftyfour', 'fiftyfive', 'fiftysix',
        'fiftyseven', 'fiftyeight', 'fiftyfine', 'sixty', 'situation_prevent'
    )->find($id);

    $user = User::findOrFail($case->situation_prevent[0]->created_by);

    $pdf = PDF::loadView('superadmin.case.case_report', compact('case', 'permissions', 'role', 'user'));
    $pdf->set_option('isPhpEnabled', true);
    return $pdf->stream('case_report.pdf');
}

    public function generateCSV($id)
    {


        $case = CaseModel::with([
            'one',
            'two' // Add all needed relationships here
        ])->find($id);

        if (!$case) {
            return response()->json(['message' => 'Case not found'], 404);
        }

        $fileName = 'case_details.csv';
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );

        $callback = function () use ($case) {
            $file = fopen('php://output', 'w');

            // Define your CSV header
            fputcsv($file, ['Case ID', 'User ID', 'Case One One', 'Case One One']);

            // Example of adding main model data
            $row = [
                $case->id,
                $case->user_id,

            ];

            // Example of adding related data
            // This is simplified; you may need to iterate through relationships if they are collections
            if ($case->one) {
                $row[] = $case->one->one; // Replace 'property' with the actual field name
                $row[] = $case->one->two; // Replace 'property' with the actual field name
            } else {
                $row[] = ''; // Empty if relation doesn't exist
            }

            if ($case->two) {
                $row[] = $case->two->two_one; // Same as above
            } else {
                $row[] = '';
            }

            // Add more relationships as needed...

            fputcsv($file, $row);
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }


    public function Report()
    {
        $super_admin= Auth()->user()->user_type == "Super Admin";
        $userid=Auth::id();
        if($super_admin){
            $reports = CaseModel::where('is_delete',1)->latest()->paginate(10);
        }else{
            $reports = CaseModel::where('user_id',$userid)->where('is_delete',1)->latest()->paginate(10);
        }
        
        $roles = DB::table('roles')->get();
        return view('superadmin.case.report', compact('reports', 'roles'));
    }

    public function Rolebase(Request $request, $id)
    {
        $userId = $request->input('user_id');
        $users = User::with('roles.permissions')->with('permissions')->find($userId);
        //return response()->json($users->roles);
        $permissions = array();
        foreach ($users->roles as $role) {

            // $role->title; // for example

            foreach ($role->permissions as $permission) {

                //  $permission->title; // for example
                //dd($permission->name);
                array_push($permissions, $permission->name);


            }
        }
        $case = CaseModel::where('user_id', $userId)->with(
            'one',
            'two',
            'three',
            'four',
            'five',
            'six',
            'seven',
            'eight',
            'nine',
            'ten',
            'eleven',
            'twelve',
            'thirteen',
            'fourteen',
            'fifteen',
            'sixteen',
            'seventeen',
            'eighteen',
            'nineteen',
            'twenty',
            'twentyone',
            'twentytwo',
            'twentythree',
            'twentyfour',
            'twentyfive',
            'twentysix',
            'twentyseven',
            'twentyeight',
            'twentynine',
            'thirty',
            'thirtyone',
            'thirtytwo',
            'thirtythree',
            'thirtyfour',
            'thirtyfive',
            'thirtysix',
            'thirtyseven',
            'thirtyeight',
            'thirtynine',
            'forty',
            'fortyone',
            'fortytwo',
            'fortythree',
            'fortyfour',
            'fortyfive',
            'fortysix',
            'fortyseven',
            'fortyeight',
            'fortynine',
            'fifty',
            'fiftyone',
            'fiftytwo',
            'fiftythree',
            'fiftyfour',
            'fiftyfive',
            'fiftysix',
            'fiftyseven',
            'fiftyeight',
            'fiftyfine',
            'sixty',
        )
            ->find($id);
        //return response()->json($reports);
        $pdf = PDF::loadView('superadmin.case.case_report', compact('case', 'userId'));

        return $pdf->stream('case_report.pdf');

    }
    public function add()
    {
        $data['header_title'] = 'Create Data ';
        $divisions = Division::where('status', 1)->get();
        $counties = DB::table('countries')->get();
         $questiontitles=QuestionTitle::where('status',0)->get();

         //return response()->json($questiontitles);
        $types = array(
            1 => 'Forced sexual exploitation',
            2 => 'Trafficking for sexual',
            3 => 'Web Enabled Trafficking',
            4 => 'Trafficking in Migrants',
            5 => 'Organ Trafficking',
            6 => 'Trafficking in Refugee',
            7 => 'Other (Specify)'
        );
        $locations = array(
            1 => 'Barisal',
            2 => 'Chattogram',
            3 => 'Dhaka',
            4 => 'Khulna',
            5 => 'Mymensingh',
            6 => 'Rajshahi',
            7 => 'Rangpur',
            8 => 'Sylhet',
            9 => 'National'
        );
        // Session::forget(['question1','question46','question57','question59','question58']);
        // Session::forget(['question31A','question31B','question34','question48','question47','question53']);
        // $question1 = Session::get('question1');
        // $question1_data=json_decode($question1);
        $question1 = json_decode(Session::get('question1'));
        $question2 = json_decode(Session::get('question2'));
        $question3 = json_decode(Session::get('question3'));
        $question4 = json_decode(Session::get('question4'));
        $question5 = json_decode(Session::get('question5'));
        $question7 = json_decode(Session::get('question7'));
        $question8 = json_decode(Session::get('question8'));
        $question9 = json_decode(Session::get('question9'));
        $question11 = json_decode(Session::get('question11'));
        $question12 = json_decode(Session::get('question12'));
        $question13 = json_decode(Session::get('question13'));
        $question14 = json_decode(Session::get('question14'));
        $question15 = json_decode(Session::get('question15'));
        $question16 = json_decode(Session::get('question16'));
        $question17 = json_decode(Session::get('question17'));
        $question18 = json_decode(Session::get('question18'));
        $question19 = json_decode(Session::get('question19'));
        $question20 = json_decode(Session::get('question20'));
        $question21 = json_decode(Session::get('question21'));
        $question22 = json_decode(Session::get('question22'));
        $question23 = json_decode(Session::get('question23'));
        $question24 = json_decode(Session::get('question24'));
        $question25 = json_decode(Session::get('question25'));
        $question26 = json_decode(Session::get('question26'));
        $question27 = json_decode(Session::get('question27'));
        $question28 = json_decode(Session::get('question28'));
        $question29 = json_decode(Session::get('question29'));
        $question30 = json_decode(Session::get('question30'));
        $question31A = json_decode(Session::get('question31A'));
        $question31B = json_decode(Session::get('question31B'));
        $question32 = json_decode(Session::get('question32'));
        $question33 = json_decode(Session::get('question33'));
        $question34 = json_decode(Session::get('question34'));
        $question35 = json_decode(Session::get('question35'));
        $question36 = json_decode(Session::get('question36'));
        $question37 = json_decode(Session::get('question37'));
        $question38 = json_decode(Session::get('question38'));
        $question39 = json_decode(Session::get('question39'));
        $question40 = json_decode(Session::get('question40'));
        $question41 = json_decode(Session::get('question41'));
        $question42A = json_decode(Session::get('question42A'));
        $question42B = json_decode(Session::get('question42B'));
        $question42C = json_decode(Session::get('question42C'));
        $question43 = json_decode(Session::get('question43'));
        $question44 = json_decode(Session::get('question44'));
        $question45 = json_decode(Session::get('question45'));
        $question46 = json_decode(Session::get('question46'));
        $question47 = json_decode(Session::get('question47'));
        $question50 = json_decode(Session::get('question50'));
        $question49 = json_decode(Session::get('question49'));
        $question51 = json_decode(Session::get('question51'));
        $question52 = json_decode(Session::get('question52'));
        $question53 = json_decode(Session::get('question53'));
        $question54 = json_decode(Session::get('question54'));
        $question55 = json_decode(Session::get('question55'));
        $question56 = json_decode(Session::get('question56'));
        $question48 = json_decode(Session::get('question48'));
        $question10 = json_decode(Session::get('question10'));
        $question57 = json_decode(Session::get('question57'));
        $question59 = json_decode(Session::get('question59'));
        $question60 = json_decode(Session::get('question60'));
        $question58 = json_decode(Session::get('question58'));
        $question6 = json_decode(Session::get('question6'));
        // $data["q1_type"]=(isset($question1_data->q1_type)) ? $question1_data->q1_type:null;
        // $data["q1_locations"]=(isset($question1_data->q1_location)) ? $question1_data->q1_location:null;
        // $data["q1_otherspecify"]=(isset($question1_data->q1_otherspecify)) ? $question1_data->q1_otherspecify:null;
        $data["question_1_data"] = (isset($question1)) ? $question1 : null;
        $data["question_5_data"] = (isset($question5)) ? $question5 : null;
        $data["question_9_data"] = (isset($question9)) ? $question9 : null;
        $data["question_11_data"] = (isset($question11)) ? $question11 : null;
        $data["question_13_data"] = (isset($question13)) ? $question13 : null;
        $data["question_14_data"] = (isset($question14)) ? $question14 : null;
        $data["question_15_data"] = (isset($question15)) ? $question15 : null;
        $data["question_16_data"] = (isset($question16)) ? $question16 : null;
        $data["question_17_data"] = (isset($question17)) ? $question17 : null;
        $data["question_19_data"] = (isset($question19)) ? $question19 : null;
        $data["question_20_data"] = (isset($question20)) ? $question20 : null;
        $data["question_21_data"] = (isset($question21)) ? $question21 : null;
        $data["question_22_data"] = (isset($question22)) ? $question22 : null;
        $data["question_23_data"] = (isset($question23)) ? $question23 : null;
        $data["question_24_data"] = (isset($question24)) ? $question24 : null;
        $data["question_25_data"] = (isset($question25)) ? $question25 : null;
        $data["question_26_data"] = (isset($question26)) ? $question26 : null;
        $data["question_27_data"] = (isset($question27)) ? $question27 : null;
        $data["question_28_data"] = (isset($question28)) ? $question28 : null;
        $data["question_30_data"] = (isset($question30)) ? $question30 : null;
        $data["question_31_data_one"] = (isset($question31A)) ? $question31A : null;
        $data["question_31_data_two"] = (isset($question31B)) ? $question31B : null;
        $data["question_32_data"] = (isset($question32)) ? $question32 : null;
        $data["question_33_data"] = (isset($question33)) ? $question33 : null;
        $data["question_34_data"] = (isset($question34)) ? $question34 : null;
        $data["question_35_data"] = (isset($question35)) ? $question35 : null;
        $data["question_36_data"] = (isset($question36)) ? $question36 : null;
        $data["question_37_data"] = (isset($question37)) ? $question37 : null;
        $data["question_38_data"] = (isset($question38)) ? $question38 : null;
        $data["question_39_data"] = (isset($question39)) ? $question39 : null;
        $data["question_40_data"] = (isset($question40)) ? $question40 : null;
        $data["question_41_data"] = (isset($question41)) ? $question41 : null;
        $data["question_42_data_one"] = (isset($question42A)) ? $question42A : null;
        $data["question_42_data_two"] = (isset($question42B)) ? $question42B : null;
        $data["question_42_data_three"] = (isset($question42C)) ? $question42C : null;
        $data["question_43_data"] = (isset($question43)) ? $question43 : null;
        $data["question_44_data"] = (isset($question44)) ? $question44 : null;
        $data["question_45_data"] = (isset($question45)) ? $question45 : null;
        $data["question_46_data"] = (isset($question46)) ? $question46 : null;
        $data["question_47_data"] = (isset($question47)) ? $question47 : null;
        $data["question_48_data"] = (isset($question48)) ? $question48 : null;
        $data["question_49_data"] = (isset($question49)) ? $question49 : null;
        $data["question_10_data"] = (isset($question10)) ? $question10 : null;
        $data["question_59_data"] = (isset($question59)) ? $question59 : null;
        $data["question_60_data"] = (isset($question60)) ? $question60 : null;
        $data["question_58_data"] = (isset($question58)) ? $question58 : null;
        $data["question_57_data"] = (isset($question57)) ? $question57 : null;
        $data["question_50_data"] = (isset($question50)) ? $question50 : null;
        $data["question_51_data"] = (isset($question51)) ? $question51 : null;
        $data["question_52_data"] = (isset($question52)) ? $question52 : null;
        $data["question_53_data"] = (isset($question53)) ? $question53 : null;
        $data["question_54_data"] = (isset($question54)) ? $question54 : null;
        $data["question_55_data"] = (isset($question55)) ? $question55 : null;
        $data["question_56_data"] = (isset($question56)) ? $question56 : null;
        $data["question_7_data"] = (isset($question7)) ? $question7 : null;
        $data["question_8_data"] = (isset($question8)) ? $question8 : null;
        $data["question_2_data"] = (isset($question2)) ? $question2 : null;
        $data["question_29_data"] = (isset($question29)) ? $question29 : null;
        $data["question_6_data"] = (isset($question6)) ? $question6 : null;
        $data["question_12_data"] = (isset($question12)) ? $question12 : null;
        $data["question_3_data"] = (isset($question3)) ? $question3 : null;
        $data["question_4_data"] = (isset($question4)) ? $question4 : null;
        return view('superadmin.case.create', $data, compact('divisions', 'counties', 'types', 'locations','questiontitles'));
    }

    public function Store(Request $request)
    {

  // Increase MySQL max_allowed_packet temporarily (session/global)
    //DB::statement('SET GLOBAL max_allowed_packet = 268435456'); // 256MB
    //DB::statement('SET SESSION max_allowed_packet = 268435456');

    // DB::beginTransaction();
    // try {

        
        $question = new CaseModel();
        $question->user_id = Auth()->user()->id;
        $question->caseid = $request->caseid;
        $question->save();

        $case_id = $question->id;
        $yes_no = new SituationPreventionYesNo();
        $yes_no->case_id = $case_id;
        $yes_no->is_trafficking_location_q1 = $request->is_trafficking_location_q1;
        $yes_no->is_sex_trafficking_location_q2 = $request->is_sex_trafficking_location_q2;
        $yes_no->is_sex_trafficking_climate_cgn_q3 = $request->is_sex_trafficking_climate_cgn_q3;
        // $yes_no->is_national_authority_q4 = $request->is_national_authority_q4;
        $yes_no->is_trafficking_overrepresented_q5 = $request->is_trafficking_overrepresented_q5;
        $yes_no->is_prevention_efforts_q6 = $request->is_prevention_efforts_q6;
        $yes_no->is_address_trafficking_q7 = $request->is_address_trafficking_q7;
        $yes_no->address_trafficking_others_q7 = $request->address_trafficking_others_q7;
        $yes_no->is_devote_implementation_q8 = $request->is_devote_implementation_q8;
        $yes_no->is_awareness_activities_q9 = $request->is_awareness_activities_q9;
        $yes_no->awareness_activities_others_q9 = $request->awareness_activities_others_q9;
        $yes_no->is_governments_on_trafficking_q10 = $request->is_governments_on_trafficking_q10;
        $yes_no->is_labor_recruitment_q11 = $request->is_labor_recruitment_q11;
        $yes_no->labor_recruitment_others_q11 = $request->labor_recruitment_others_q11;
        $yes_no->is_recruitment_measures_q12 = $request->is_recruitment_measures_q12;
        $yes_no->recruitment_measures_others_q12 = $request->recruitment_measures_others_q12;
        $yes_no->is_facilitate_trafficking_q14 = $request->is_facilitate_trafficking_q14;
        $yes_no->is_facilitate_trafficking_others_q14 = $request->is_facilitate_trafficking_others_q14;
        $yes_no->is_public_procurement_q15 = $request->is_public_procurement_q15;
        $yes_no->public_procurement_others_q15 = $request->public_procurement_others_q15;
        $yes_no->is_child_sex_tourism_q17 = $request->is_child_sex_tourism_q17;
        $yes_no->child_sex_tourism_others_q17 = $request->child_sex_tourism_others_q17;
        $yes_no->is_engage_trafficking_q18 = $request->is_engage_trafficking_q18;
        $yes_no->engage_trafficking_others_q18 = $request->engage_trafficking_others_q18;
        $yes_no->is_criminal_accountability_q19 = $request->is_criminal_accountability_q19;
        $yes_no->is_criminal_accountability_others_q19 = $request->is_criminal_accountability_others_q19;
        $yes_no->peacekeeping_others_q20 = $request->peacekeeping_others_q20;
        $yes_no->is_peacekeeping_q20 = $request->is_peacekeeping_q20;
        $yes_no->created_by = Auth()->user()->id;
        $yes_no->save();





        //question no 1
        if ($request->is_trafficking_location_q1 != 0) {
            // Question no 1
            $trafficking_form_no = $request->input('trafficking_form_no', []);
            $q1_type_id = $request->input('q1_type_id', []);
            $q1_location_id = $request->input('q1_location_id', []);
            $q1_trafficking_other_specify = $request->input('q1_trafficking_other_specify', []);
            $case_id = $question->id;

            $bulkInsertData = [];
            $maxCount = max(count($trafficking_form_no), count($q1_type_id), count($q1_location_id));
            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,

                    'trafficking_form_no' => $trafficking_form_no[$i] ?? null, // Use null coalescing operator to handle missing indices
                    'q1_type_id' => $q1_type_id[$i] ?? null,
                    'q1_location_id' => $q1_location_id[$i] ?? null,
                    'q1_trafficking_other_specify' => $q1_trafficking_other_specify[$i] ?? null,
                ];
            }


            if (!empty($bulkInsertData)) {
                One::insert($bulkInsertData);
            }

        }

        //question no 2
        if ($request->is_sex_trafficking_location_q2 != 0) {
            $level_risky_community = $request->input('level_risky_community', []);
            $choose_vulnerable_list_id = $request->input('choose_vulnerable_list_id', []);
            $others_specify_id = $request->input('others_specify_id', []);
            $case_id = $question->id;
            $bulkInsertData = [];
            $maxCount = max(count($level_risky_community), count($choose_vulnerable_list_id), count($others_specify_id));
            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'level_risky_community' => $level_risky_community[$i] ?? null,
                    'choose_vulnerable_list_id' => $choose_vulnerable_list_id[$i] ?? null,
                    'others_specify_id' => $others_specify_id[$i] ?? null,
                ];
            }
            if (!empty($bulkInsertData)) {
                Two::insert($bulkInsertData);
            }
        }









        //question no 3

        if ($request->is_sex_trafficking_climate_cgn_q3 != 0) {
            $q3_risk_associated_climate_change = $request->input('q3_risk_associated_climate_change', []);
            $q3_others_specify = $request->input('q3_others_specify', []);
            $q3_initiative_mitigate_risk = $request->input('q3_initiative_mitigate_risk', []);
            $q3_problem_id = $request->input('q3_problem_id', []);
            $q3_title_project_program = $request->input('q3_title_project_program', []);
            $q3_location_id = $request->input('q3_location_id', []);

            $case_id = $question->id;

            $bulkInsertData = [];
            $maxCount = max(
                count($q3_risk_associated_climate_change),
                count($q3_others_specify),
                count($q3_initiative_mitigate_risk),
                count($q3_problem_id),
                count($q3_title_project_program),
                count($q3_location_id)
            );
            for ($i = 0; $i < $maxCount; $i++) {

                # code...

                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'q3_risk_associated_climate_change' => $q3_risk_associated_climate_change[$i] ?? null,
                    'q3_others_specify' => $q3_others_specify[$i] ?? null,
                    'q3_initiative_mitigate_risk' => $q3_initiative_mitigate_risk[$i] ?? null,
                    'q3_problem_id' => $q3_problem_id[$i] ?? null,
                    'q3_title_project_program' => $q3_title_project_program[$i] ?? null,
                    'q3_location_id' => $q3_location_id[$i] ?? null,
                ];




            }
            //return response()->json($bulkInsertData);

            if (!empty($bulkInsertData)) {
                Three::insert($bulkInsertData);
            }
        }



        //question no 4

        if ($request->is_national_authority_q4 != 0) {
            $meeting_no = $request->input('meeting_no', []);
            $key_decisions = $request->input('key_decisions', []);
            $type_component_q4 = $request->input('type_component_q4', []);
            $type_component_others_specify_q4 = $request->input('type_component_others_specify_q4', []);
            $type_issue_q4 = $request->input('type_issue_q4', []);
            $type_remark_q4 = $request->input('type_remark_q4', []);
            $type_component = $request->input('type_component', []);


            $images = [];
            if ($request->hasFile('upload_photo')) {
                foreach ($request->file('upload_photo') as $index => $image) {
                    $ext = $image->extension();
                    $final_name = 'upload_photo_' . time() . '_' . $index . '.' . $ext;
                    $image->move(public_path('uploads/upload_photo'), $final_name);
                    $images[] = 'uploads/upload_photo/' . $final_name;
                }
            }


            // $images = [];
            // if ($request->hasFile('upload_photo')) {
            //     foreach ($request->file('upload_photo') as $index => $image) {
            //         $ext = $image->extension();
            //         $final_name = 'upload_photo_' . time() . '_' . $index . '.' . $ext;
            //         $image->move(public_path('uploads/upload_photo'), $final_name);
            //         $images[] = 'uploads/upload_photo/' . $final_name;
            //     }
            // }



            $case_id = $question->id;
            $bulkInsertData = [];
            $maxCount = max(
                count($meeting_no),
                count($key_decisions),
                count($type_component_q4),
                count($type_component_others_specify_q4),
                count($type_issue_q4),
                count($type_remark_q4),
                count($images),
                count($type_component)
            );
            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'meeting_no' => $meeting_no[$i] ?? null,
                    'key_decisions' => $key_decisions[$i] ?? null,
                    'type_component_q4' => $type_component_q4[$i] ?? null,
                    'type_component_others_specify_q4' => $type_component_others_specify_q4[$i] ?? null,
                    'type_issue_q4' => $type_issue_q4[$i] ?? null,
                    'type_remark_q4' => $type_remark_q4[$i] ?? null,
                    'upload_photo' => $images[$i] ?? null,
                    'type_component' => $type_component[$i] ?? null,

                ];
            }


            if (!empty($bulkInsertData)) {
                Four::insert($bulkInsertData);
            }
        }







        //question 5

        if ($request->is_trafficking_overrepresented_q5 != 0) {

            $type_policy_tool_id = $request->input('type_policy_tool_id', []);
            $title_the_initiative_id = $request->input('title_the_initiative_id', []);
            $objectives_id = $request->input('objectives_id', []);
            $others_specify_5 = $request->input('others_specify_5', []);
            $case_id = $question->id;

            $bulkInsertData = [];
            $maxCount = max(
                count($type_policy_tool_id),
                count($title_the_initiative_id),
                count($objectives_id),
                count($others_specify_5)
            );
            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'type_policy_tool_id' => $type_policy_tool_id[$i] ?? null,
                    'title_the_initiative_id' => $title_the_initiative_id[$i] ?? null,
                    'objectives_id' => $objectives_id[$i] ?? null,
                    'others_specify_5' => $others_specify_5[$i] ?? null,
                ];
            }
            if (!empty($bulkInsertData)) {
                Five::insert($bulkInsertData);
            }
        }


        //question no 6

        if ($request->is_prevention_efforts_q6 != 0) {

            $type_preventive_action = $request->input('type_preventive_action', []);
            $allocation_id = $request->input('allocation_id', []);

            $case_id = $question->id;

            $bulkInsertData = [];
            $maxCount = max(count($type_preventive_action), count($allocation_id));
            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'type_preventive_action' => $type_preventive_action[$i] ?? null,
                    'allocation_id' => $allocation_id[$i] ?? null,


                ];
            }

            // return response()->json($bulkInsertData);
            if (!empty($bulkInsertData)) {
                Six::insert($bulkInsertData);
            }
        }


        //question no 7
        if ($request->is_address_trafficking_q7 != 0) {
            $case_id = $question->id;
            $question7 = new Seven();
            $question7->case_id = $case_id;
            $question7->duration_npa = $request->duration_npa;
            if ($request->hasFile('attach_image')) {
                $ext = $request->file('attach_image')->extension();
                $final_name = 'qu_seven_photo_' . time() . '.' . $ext;
                $request->file('attach_image')->move(public_path('uploads/'), $final_name);
                $question7->attach_image = $final_name;
            }


            $question7->save();
        }


        // question no 8
        if ($request->is_devote_implementation_q8 != 0) {


            $allocation_under_npa = $request->input('allocation_under_npa', []);
            $allocation_status = $request->input('allocation_status', []);

            $case_id = $question->id;

            $bulkInsertData = [];
            $maxCount = max(count($allocation_under_npa), count($allocation_status));
            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'allocation_under_npa' => $allocation_under_npa[$i] ?? null,
                    'allocation_status' => $allocation_status[$i] ?? null,


                ];
            }

            if (!empty($bulkInsertData)) {
                Eight::insert($bulkInsertData);
            }





        }


        // //question no 9
        if ($request->is_awareness_activities_q9 != 0) {

            $type_activities = $request->input('type_activities', []);
            $type_activities_men = $request->input('type_activities_men', []);
            $type_activities_women = $request->input('type_activities_women', []);
            $type_activities_third_gender = $request->input('type_activities_third_gender', []);
            $type_activities_boy = $request->input('type_activities_boy', []);
            $type_activities_girl = $request->input('type_activities_girl', []);
            $type_activities_total = $request->input('type_activities_total', []);
            // Assuming $question is properly defined and has an ID
            $case_id = $question->id;
            $bulkInsertData = [];
            $locationInsertData = [];
            $maxCount = max(
                count($type_activities),
                count($type_activities_men),
                count($type_activities_women),
                count($type_activities_third_gender),
                count($type_activities_boy),
                count($type_activities_girl),
                count($type_activities_total)
            );

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'type_activities' => $type_activities[$i] ?? null,
                    'type_activities_men' => $type_activities_men[$i] ?? null,
                    'type_activities_women' => $type_activities_women[$i] ?? null,
                    'type_activities_third_gender' => $type_activities_third_gender[$i] ?? null,
                    'type_activities_boy' => $type_activities_boy[$i] ?? null,
                    'type_activities_girl' => $type_activities_girl[$i] ?? null,
                    'type_activities_total' => $type_activities_total[$i] ?? null,
                    'location_id' . $i => $request->input('location_id' . $i, []),
                ];

            }
            if (!empty($bulkInsertData)) {
                DB::transaction(function () use ($bulkInsertData, &$locationInsertData) {
                    // Insert data into Nine table and get inserted IDs
                    foreach ($bulkInsertData as $i => $data) {
                        $nine = Nine::create($data);
                        $insertedId = $nine->id;
                        $locations_id = $data['location_id' . $i];
                        if (isset($locations_id) && !empty($locations_id)) {
                            foreach ($locations_id as $data) {
                                $locationInsertData = [
                                    'q9_id' => $insertedId,
                                    'location_id' => $data,
                                ];
                                if (!empty($locationInsertData)) {
                                    DB::table('q9_locations')->insert($locationInsertData);
                                }
                            }
                        }
                    }
                    // Log the data that will be inserted into q9_locations
                    Log::info('Location Insert Data:', $locationInsertData);

                    // Insert data into q9_locations table

                });


            }


        }

        // question 10
        if ($request->is_governments_on_trafficking_q10 != 0) {
            $trafficking_country = $request->input('trafficking_country', []);
            $trafficking_target_group = $request->input('trafficking_target_group', []);
            $trafficking_total_coverage = $request->input('trafficking_total_coverage', []);
            $case_id = $question->id;
            $bulkInsertData = [];
            $maxCount = max(count($trafficking_country), count($trafficking_target_group), count($trafficking_total_coverage));

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'trafficking_country' => $trafficking_country[$i] ?? null, // Use null coalescing operator to handle missing indices
                    'trafficking_target_group' => $trafficking_target_group[$i] ?? null,
                    'trafficking_total_coverage' => $trafficking_total_coverage[$i] ?? null,
                ];
            }

            if (!empty($bulkInsertData)) {
                Ten::insert($bulkInsertData);
            }
        }

        // 11 question

        if ($request->is_labor_recruitment_q11 != 0) {

            $original_approach = $request->input('original_approach', []);
            $description_change = $request->input('description_change', []);
            $case_id = $question->id;
            $bulkInsertData = [];
            $maxCount = max(count($original_approach), count($description_change));

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'original_approach' => $original_approach[$i] ?? null, // Use null coalescing operator to handle missing indices
                    'description_change' => $description_change[$i] ?? null,

                ];
            }


            if (!empty($bulkInsertData)) {
                Eleven::insert($bulkInsertData);
            }
        }

        // question 12
        if ($request->is_recruitment_measures_q12 != 0) {
            $country_id_q12 = $request->input('country_id_q12', []);
            $instrument = $request->input('instrument', []);


            // $images = [];
            // if ($request->hasFile('upload_summary')) {
            //     foreach ($request->file('upload_summary') as $image) {
            //         $path = $image->store('upload_summary', 'public');
            //         $images[] = $path;
            //     }
            // }

            $images = [];
            if ($request->hasFile('upload_summary')) {
                foreach ($request->file('upload_summary') as $index => $image) {
                    $ext = $image->extension();
                    $final_name = 'upload_summary_' . time() . '_' . $index . '.' . $ext;
                    $image->move(public_path('uploads/upload_summary'), $final_name);
                    $images[] = 'uploads/upload_summary/' . $final_name;
                }
            }

            $case_id = $question->id;

            $bulkInsertData = [];
            $maxCount = max(count($country_id_q12), count($instrument), count($images));

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'country_id_q12' => $country_id_q12[$i] ?? null,
                    'instrument' => $instrument[$i] ?? null,
                    'upload_summary' => $images[$i] ?? null,
                ];
            }



            if (!empty($bulkInsertData)) {
                Twelve::insert($bulkInsertData);
            }
        }

        // question 13

        $q13_action_level = $request->input('q13_action_level', []);
        $q13_national_type_action = $request->input('q13_national_type_action', []);
        $q13_national_others_specify = $request->input('q13_national_others_specify', []);


        // $images = [];
        // if ($request->hasFile('q13_upload_summary')) {
        //     foreach ($request->file('q13_upload_summary') as $image) {
        //         $path = $image->store('q13_upload_summary', 'public');
        //         $images[] = $path;
        //     }
        // }

        $images = [];
        if ($request->hasFile('q13_upload_summary')) {
            foreach ($request->file('q13_upload_summary') as $index => $image) {
                $ext = $image->extension();
                $final_name = 'q13_upload_summary_' . time() . '_' . $index . '.' . $ext;
                $image->move(public_path('uploads/q13_upload_summary'), $final_name);
                $images[] = 'uploads/q13_upload_summary/' . $final_name;
            }
        }

        $case_id = $question->id;

        $bulkInsertData = [];
        $maxCount = max(count($q13_action_level), count($q13_national_type_action), count($q13_national_others_specify), count($images));

        for ($i = 0; $i < $maxCount; $i++) {
            $bulkInsertData[] = [
                'case_id' => $case_id,
                'q13_action_level' => $q13_action_level[$i] ?? null,
                'q13_national_type_action' => $q13_national_type_action[$i] ?? null,
                'q13_national_others_specify' => $q13_national_others_specify[$i] ?? null,
                'q13_upload_summary' => $images[$i] ?? null,
            ];
        }

        //return response()->json($bulkInsertData);

        if (!empty($bulkInsertData)) {
            Thirteen::insert($bulkInsertData);
        }

        // question 14 
        if ($request->is_facilitate_trafficking_q14 != 0) {
            $q14_action_no = $request->input('q14_action_no', []);
            $q14_attach = $request->input('q14_attach', []);


            // $images = [];
            // if ($request->hasFile('q14_upload_summary')) {
            //     foreach ($request->file('q14_upload_summary') as $image) {
            //         $path = $image->store('q14_upload_summary', 'public');
            //         $images[] = $path;
            //     }
            // }

            $images = [];
            if ($request->hasFile('q14_upload_summary')) {
                foreach ($request->file('q14_upload_summary') as $index => $image) {
                    $ext = $image->extension();
                    $final_name = 'q14_upload_summary_' . time() . '_' . $index . '.' . $ext;
                    $image->move(public_path('uploads/q14_upload_summary'), $final_name);
                    $images[] = 'uploads/q14_upload_summary/' . $final_name;
                }
            }

            $case_id = $question->id;

            $bulkInsertData = [];
            $maxCount = max(count($q14_action_no), count($images), count($q14_attach));

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'q14_action_no' => $q14_action_no[$i] ?? null,
                    'q14_upload_summary' => $images[$i] ?? null,
                    'q14_attach' => $q14_attach[$i] ?? null,
                ];
            }


            if (!empty($bulkInsertData)) {
                Fourteen::insert($bulkInsertData);
            }

        }

        //question 15
        if ($request->is_public_procurement_q15 != 0) {
            $q15_action_no = $request->input('q15_action_no', []);
            $q15_status_id = $request->input('q15_status_id', []);


            // $images = [];
            // if ($request->hasFile('q15_upload_summary')) {
            //     foreach ($request->file('q15_upload_summary') as $image) {
            //         $path = $image->store('q15_upload_summary', 'public');
            //         $images[] = $path;
            //     }
            // }

            $images = [];
            if ($request->hasFile('q15_upload_summary')) {
                foreach ($request->file('q15_upload_summary') as $index => $image) {
                    $ext = $image->extension();
                    $final_name = 'q15_upload_summary_' . time() . '_' . $index . '.' . $ext;
                    $image->move(public_path('uploads/q15_upload_summary'), $final_name);
                    $images[] = 'uploads/q15_upload_summary/' . $final_name;
                }
            }

            $case_id = $question->id;

            $bulkInsertData = [];
            $maxCount = max(count($q15_action_no), count($q15_status_id), count($images));

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'q15_action_no' => $q15_action_no[$i] ?? null,
                    'q15_status_id' => $q15_status_id[$i] ?? null,
                    'q15_upload_summary' => $images[$i] ?? null,
                ];
            }
            // return response()->json($bulkInsertData);
            if (!empty($bulkInsertData)) {
                Fifteen::insert($bulkInsertData);
            }

        }

        //question 16
        $q16_action_no = $request->input('q16_action_no', []);
        $q16_ation_others_specify = $request->input('q16_ation_others_specify', []);
        $q16_status_id = $request->input('q16_status_id', []);


        // $images = [];
        // if ($request->hasFile('q16_upload_summary_relevant')) {
        //     foreach ($request->file('q16_upload_summary_relevant') as $image) {
        //         $path = $image->store('q16_upload_summary_relevant', 'public');
        //         $images[] = $path;
        //     }
        // }


        $images = [];
        if ($request->hasFile('q16_upload_summary_relevant')) {
            foreach ($request->file('q16_upload_summary_relevant') as $index => $image) {
                $ext = $image->extension();
                $final_name = 'q16_upload_summary_relevant_' . time() . '_' . $index . '.' . $ext;
                $image->move(public_path('uploads/q16_upload_summary_relevant'), $final_name);
                $images[] = 'uploads/q16_upload_summary_relevant/' . $final_name;
            }
        }

        $case_id = $question->id;

        $bulkInsertData = [];
        $maxCount = max(count($q16_action_no), count($q16_ation_others_specify), count($q16_status_id), count($images));

        for ($i = 0; $i < $maxCount; $i++) {
            $bulkInsertData[] = [
                'case_id' => $case_id,
                'q16_action_no' => $q16_action_no[$i] ?? null,
                'q16_ation_others_specify' => $q16_ation_others_specify[$i] ?? null,
                'q16_status_id' => $q16_status_id[$i] ?? null,
                'q16_upload_summary_relevant' => $images[$i] ?? null,
            ];
        }
        //return response()->json($bulkInsertData);
        if (!empty($bulkInsertData)) {
            Sixteen::insert($bulkInsertData);
        }


        // question 17
        if ($request->is_child_sex_tourism_q17 != 0) {
            $action_no_q17 = $request->input('action_no_q17', []);
            $status_id_q17 = $request->input('status_id_q17', []);
            $q17_awareness_raising_other_specify = $request->input('q17_awareness_raising_other_specify', []);


            // $images = [];
            // if ($request->hasFile('upload_relevant_document')) {
            //     foreach ($request->file('upload_relevant_document') as $image) {
            //         $path = $image->store('upload_relevant_document', 'public');
            //         $images[] = $path;
            //     }
            // }


            $images = [];
            if ($request->hasFile('upload_relevant_document')) {
                foreach ($request->file('upload_relevant_document') as $index => $image) {
                    $ext = $image->extension();
                    $final_name = 'upload_relevant_document_' . time() . '_' . $index . '.' . $ext;
                    $image->move(public_path('uploads/upload_relevant_document'), $final_name);
                    $images[] = 'uploads/upload_relevant_document/' . $final_name;
                }
            }

            $case_id = $question->id;

            $bulkInsertData = [];
            $maxCount = max(count($action_no_q17), count($status_id_q17), count($images), count($q17_awareness_raising_other_specify));

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'action_no_q17' => $action_no_q17[$i] ?? null,
                    'status_id_q17' => $status_id_q17[$i] ?? null,
                    'q17_awareness_raising_other_specify' => $q17_awareness_raising_other_specify[$i] ?? null,
                    'upload_relevant_document' => $images[$i] ?? null,
                ];
            }

            if (!empty($bulkInsertData)) {
                Seventeen::insert($bulkInsertData);
            }
        }


        //18 question


        if ($request->is_engage_trafficking_q18 != 0) {

            $category_trainee_q18 = $request->input('category_trainee_q18', []);
            $coverage_training_men = $request->input('coverage_training_men', []);
            $coverage_training_women = $request->input('coverage_training_women', []);
            $coverage_training_third_gender = $request->input('coverage_training_third_gender', []);
            $coverage_training_total = $request->input('coverage_training_total', []);


            $case_id = $question->id;


            $bulkInsertData = [];
            $maxCount = max(
                count($category_trainee_q18),
                count($coverage_training_men),
                count($coverage_training_women),
                count($coverage_training_third_gender),
                count($coverage_training_total)
            );

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'category_trainee_q18' => $category_trainee_q18[$i] ?? null,
                    'coverage_training_men' => $coverage_training_men[$i] ?? null,
                    'coverage_training_women' => $coverage_training_women[$i] ?? null,
                    'coverage_training_third_gender' => $coverage_training_third_gender[$i] ?? null,
                    'coverage_training_total' => $coverage_training_total[$i] ?? null,

                ];
            }

            if (!empty($bulkInsertData)) {
                Eighteen::insert($bulkInsertData);
            }
        }




        // 19 question 
        if ($request->is_criminal_accountability_q19 != 0) {



            $q19_country_id = $request->input('q19_country_id', []);
            $q19_description = $request->input('q19_description', []);
            $q19_number_cases_men = $request->input('q19_number_cases_men', []);
            $q19_number_cases_women = $request->input('q19_number_cases_women', []);
            $q19_number_cases_third_gender = $request->input('q19_number_cases_third_gender', []);
            $q19_number_cases_total = $request->input('q19_number_cases_total', []);

            $case_id = $question->id;

            // Get the maximum count among all input arrays
            $maxCount = max(
                count($q19_country_id),
                count($q19_description),
                count($q19_number_cases_men),
                count($q19_number_cases_women),
                count($q19_number_cases_third_gender),
                count($q19_number_cases_total)
            );

            $bulkInsertData = [];

            // Iterate up to the maximum count
            for ($i = 0; $i < $maxCount; $i++) {
                // Assign values from each input array to corresponding keys in the bulk insert data
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'q19_country_id' => $q19_country_id[$i] ?? null,
                    'q19_description' => $q19_description[$i] ?? null,
                    'q19_number_cases_men' => $q19_number_cases_men[$i] ?? null,
                    'q19_number_cases_women' => $q19_number_cases_women[$i] ?? null,
                    'q19_number_cases_third_gender' => $q19_number_cases_third_gender[$i] ?? null,
                    'q19_number_cases_total' => $q19_number_cases_total[$i] ?? null,
                ];
            }



            if (!empty($bulkInsertData)) {
                Nineteen::insert($bulkInsertData);
            }

        }


        // 20 question 
        if ($request->is_peacekeeping_q20 != 0) {
            $q20_country_id = $request->input('q20_country_id', []);
            $q20_description = $request->input('q20_description', []);
            $q20_number_cases_men = $request->input('q20_number_cases_men', []);
            $q20_number_cases_women = $request->input('q20_number_cases_women', []);
            $q20_number_cases_third_gender = $request->input('q20_number_cases_third_gender', []);
            $q20_number_cases_total = $request->input('q20_number_cases_total', []);


            $case_id = $question->id;


            $bulkInsertData = [];
            $maxCount = max(
                count($q20_country_id),
                count($q20_description),
                count($q20_number_cases_men),
                count($q20_number_cases_women),
                count($q20_number_cases_third_gender),
                count($q20_number_cases_total)
            );

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'q20_country_id' => $q20_country_id[$i] ?? null,
                    'q20_description' => $q20_description[$i] ?? null,
                    'q20_number_cases_men' => $q20_number_cases_men[$i] ?? null,
                    'q20_number_cases_women' => $q20_number_cases_women[$i] ?? null,
                    'q20_number_cases_third_gender' => $q20_number_cases_third_gender[$i] ?? null,
                    'q20_number_cases_total' => $q20_number_cases_total[$i] ?? null,
                ];
            }


            if (!empty($bulkInsertData)) {
                Twenty::insert($bulkInsertData);
            }

        }




        //    21 to 40 yes no  system
        $case_id = $question->id;
        $yes_no = new YesNoStatus20to40();
        $yes_no->case_id = $case_id;
        $yes_no->is_standard_procedures_victim_q21 = $request->is_standard_procedures_victim_q21;
        $yes_no->standard_procedures_victim_others_q21 = $request->standard_procedures_victim_others_q21;
        $yes_no->is_proactive_victim_identification_q22 = $request->is_proactive_victim_identification_q22;
        $yes_no->proactive_victim_identification_others_q22 = $request->proactive_victim_identification_others_q22;
        $yes_no->is_detaining_arresting_individuals_q23 = $request->is_detaining_arresting_individuals_q23;
        $yes_no->detaining_arresting_individuals_others_q23 = $request->detaining_arresting_individuals_others_q23;
        $yes_no->is_victim_referral_protected_services_q24 = $request->is_victim_referral_protected_services_q24;
        $yes_no->victim_referral_protected_services_others_q24 = $request->victim_referral_protected_services_others_q24;
        $yes_no->is_victim_care_your_ministry_q25 = $request->is_victim_care_your_ministry_q25;
        $yes_no->victim_care_your_ministry_others_q25 = $request->victim_care_your_ministry_others_q25;
        $yes_no->is_the_quality_care_q26 = $request->is_the_quality_care_q26;
        $yes_no->the_quality_care_others_q26 = $request->the_quality_care_others_q26;
        $yes_no->is_host_country_nationals_q30 = $request->is_host_country_nationals_q30;
        $yes_no->host_country_nationals_others_q30 = $request->host_country_nationals_others_q30;
        $yes_no->is_foreign_victims_legally_entitled_q31 = $request->is_foreign_victims_legally_entitled_q31;
        //$yes_no->foreign_victims_legally_entitled_others_q31 = $request->foreign_victims_legally_entitled_others_q31;
        $yes_no->is_investigation_prosecution_q32 = $request->is_investigation_prosecution_q32;
        $yes_no->investigation_prosecution_others_q32 = $request->investigation_prosecution_others_q32;
        $yes_no->is_participating_victims_provided_q33 = $request->is_participating_victims_provided_q33;
        $yes_no->participating_victims_provided_others_q33 = $request->participating_victims_provided_others_q33;
        $yes_no->is_avoid_re_traumatization_victims_q34 = $request->is_avoid_re_traumatization_victims_q34;
        $yes_no->avoid_re_traumatization_victims_others_q34 = $request->avoid_re_traumatization_victims_others_q34;
        $yes_no->is_changes_preexisting_q35 = $request->is_changes_preexisting_q35;
        $yes_no->changes_preexisting_others_q35 = $request->changes_preexisting_others_q35;
        $yes_no->is_law_enforcement_activities_q38 = $request->is_law_enforcement_activities_q38;
        $yes_no->law_enforcement_activities_others_q38 = $request->law_enforcement_activities_others_q38;
        $yes_no->save();
        //question 21

        if ($request->is_standard_procedures_victim_q21 != 0) {
            $q21_main_document_procedure = $request->input('q21_main_document_procedure', []);
            $q21_others_specify = $request->input('q21_others_specify', []);
            $q21_status_id = $request->input('q21_status_id', []);


            // $images = [];
            // if ($request->hasFile('upload_file_21')) {
            //     foreach ($request->file('upload_file_21') as $image) {
            //         $path = $image->store('upload_file_21', 'public');
            //         $images[] = $path;
            //     }
            // }
            $images = [];
            if ($request->hasFile('upload_file_21')) {
                foreach ($request->file('upload_file_21') as $index => $image) {
                    $ext = $image->extension();
                    $final_name = 'upload_file_21_' . time() . '_' . $index . '.' . $ext;
                    $image->move(public_path('uploads/upload_file_21'), $final_name);
                    $images[] = 'uploads/upload_file_21/' . $final_name;
                }
            }




            $case_id = $question->id;

            $bulkInsertData = [];
            $maxCount = max(count($q21_main_document_procedure), count($q21_others_specify), count($q21_status_id), count($images));

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'q21_main_document_procedure' => $q21_main_document_procedure[$i] ?? null,
                    'q21_others_specify' => $q21_others_specify[$i] ?? null,
                    'q21_status_id' => $q21_status_id[$i] ?? null,
                    'upload_file_21' => $images[$i] ?? null,
                ];
            }


            if (!empty($bulkInsertData)) {
                TwentyOne::insert($bulkInsertData);
            }

        }
        //question 22

        if ($request->is_proactive_victim_identification_q22 != 0) {
            $q22_main_document_procedure = $request->input('q22_main_document_procedure', []);
            $q22_others_specify = $request->input('q22_others_specify', []);
            $q22_status_id = $request->input('q22_status_id', []);


            // $images = [];
            // if ($request->hasFile('upload_file_q22')) {
            //     foreach ($request->file('upload_file_q22') as $image) {
            //         $path = $image->store('upload_file_q22', 'public');
            //         $images[] = $path;
            //     }
            // }

            $images = [];
            if ($request->hasFile('upload_file_q22')) {
                foreach ($request->file('upload_file_q22') as $index => $image) {
                    $ext = $image->extension();
                    $final_name = 'upload_file_q22_' . time() . '_' . $index . '.' . $ext;
                    $image->move(public_path('uploads/upload_file_q22'), $final_name);
                    $images[] = 'uploads/upload_file_q22/' . $final_name;
                }
            }

            $case_id = $question->id;

            $bulkInsertData = [];
            $maxCount = max(count($q22_main_document_procedure), count($q22_others_specify), count($q22_status_id), count($images));

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'q22_main_document_procedure' => $q22_main_document_procedure[$i] ?? null,
                    'q22_others_specify' => $q22_others_specify[$i] ?? null,
                    'q22_status_id' => $q22_status_id[$i] ?? null,
                    'upload_file_q22' => $images[$i] ?? null,
                ];
            }



            if (!empty($bulkInsertData)) {
                TwentyTwo::insert($bulkInsertData);
            }

        }

        // question 23
        if ($request->is_detaining_arresting_individuals_q23 != 0) {
            $q23_main_document_procedure = $request->input('q23_main_document_procedure', []);
            $q23_others_specify = $request->input('q23_others_specify', []);
            $q23_status_id = $request->input('q23_status_id', []);


            // $images = [];
            // if ($request->hasFile('upload_file_q23')) {
            //     foreach ($request->file('upload_file_q23') as $image) {
            //         $path = $image->store('upload_file_q23', 'public');
            //         $images[] = $path;
            //     }
            // }

            $images = [];
            if ($request->hasFile('upload_file_q23')) {
                foreach ($request->file('upload_file_q23') as $index => $image) {
                    $ext = $image->extension();
                    $final_name = 'upload_file_q23_' . time() . '_' . $index . '.' . $ext;
                    $image->move(public_path('uploads/upload_file_q23'), $final_name);
                    $images[] = 'uploads/upload_file_q23/' . $final_name;
                }
            }

            $case_id = $question->id;

            $bulkInsertData = [];
            $maxCount = max(count($q23_main_document_procedure), count($q23_others_specify), count($q23_status_id), count($images));

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'q23_main_document_procedure' => $q23_main_document_procedure[$i] ?? null,
                    'q23_others_specify' => $q23_others_specify[$i] ?? null,
                    'q23_status_id' => $q23_status_id[$i] ?? null,
                    'upload_file_q23' => $images[$i] ?? null,
                ];
            }



            if (!empty($bulkInsertData)) {
                TwentyThree::insert($bulkInsertData);
            }

        }

        // question 24
        if ($request->victim_protected_services_q24 != 0) {
            $q24_title_origin_guidelines = $request->input('q24_title_origin_guidelines', []);
            $q24_others_specify = $request->input('q24_others_specify', []);
            $q24_description_change_status = $request->input('q24_description_change_status', []);
            $men_q24 = $request->input('men_q24', []);
            $women_q24 = $request->input('women_q24', []);
            $boy_q24 = $request->input('boy_q24', []);
            $girl_q24 = $request->input('girl_q24', []);
            $third_gender_q24 = $request->input('third_gender_q24', []);
            $total_q24 = $request->input('total_q24', []);



            $case_id = $question->id;

            $bulkInsertData = [];
            $maxCount = max(
                count($q24_title_origin_guidelines),
                count($q24_others_specify),
                count($q24_description_change_status),
                count($men_q24),
                count($women_q24),
                count($boy_q24)
                ,
                count($girl_q24),
                count($third_gender_q24),
                count($total_q24)
            );

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'q24_title_origin_guidelines' => $q24_title_origin_guidelines[$i] ?? null,
                    'q24_others_specify' => $q24_others_specify[$i] ?? null,
                    'q24_description_change_status' => $q24_description_change_status[$i] ?? null,
                    'men_q24' => $men_q24[$i] ?? null,
                    'women_q24' => $women_q24[$i] ?? null,
                    'boy_q24' => $boy_q24[$i] ?? null,
                    'girl_q24' => $girl_q24[$i] ?? null,
                    'third_gender_q24' => $third_gender_q24[$i] ?? null,
                    'total_q24' => $total_q24[$i] ?? null,

                ];
            }


            //   return response()->json($bulkInsertData);
            if (!empty($bulkInsertData)) {
                TwentyFour::insert($bulkInsertData);
            }


        }

        // question 25
        if ($request->is_victim_care_your_ministry_q25 != 0) {
            $protection_services_q25 = $request->input('protection_services_q25', []);
            $q25_status_id = $request->input('q25_status_id', []);
            $q25_current_coverage_vots_men = $request->input('q25_current_coverage_vots_men', []);
            $q25_current_coverage_vots_women = $request->input('q25_current_coverage_vots_women', []);
            $q25_current_coverage_vots_third_gender = $request->input('q25_current_coverage_vots_third_gender', []);
            $q25_current_coverage_vots_boy = $request->input('q25_current_coverage_vots_boy', []);
            $q25_current_coverage_vots_girl = $request->input('q25_current_coverage_vots_girl', []);
            $q25_current_coverage_vots_total = $request->input('q25_current_coverage_vots_total', []);




            $case_id = $question->id;

            $bulkInsertData = [];
            $maxCount = max(
                count($protection_services_q25),
                count($q25_status_id),
                count($q25_current_coverage_vots_men),
                count($q25_current_coverage_vots_women),
                count($q25_current_coverage_vots_third_gender),
                count($q25_current_coverage_vots_boy)
                ,
                count($q25_current_coverage_vots_girl),
                count($q25_current_coverage_vots_total)
            );

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'protection_services_q25' => $protection_services_q25[$i] ?? null,
                    'q25_status_id' => $q25_status_id[$i] ?? null,
                    'q25_current_coverage_vots_men' => $q25_current_coverage_vots_men[$i] ?? null,
                    'q25_current_coverage_vots_women' => $q25_current_coverage_vots_women[$i] ?? null,
                    'q25_current_coverage_vots_third_gender' => $q25_current_coverage_vots_third_gender[$i] ?? null,
                    'q25_current_coverage_vots_boy' => $q25_current_coverage_vots_boy[$i] ?? null,
                    'q25_current_coverage_vots_girl' => $q25_current_coverage_vots_girl[$i] ?? null,
                    'q25_current_coverage_vots_total' => $q25_current_coverage_vots_total[$i] ?? null,


                ];
            }



            if (!empty($bulkInsertData)) {
                TwentyFive::insert($bulkInsertData);
            }


        }


        // question 26
        if ($request->is_the_quality_care_q26 != 0) {
            $protection_services = $request->input('protection_services', []);
            $q26_quality_id = $request->input('q26_quality_id', []);
            $q26_location_id = $request->input('q26_location_id', []);




            $case_id = $question->id;

            $bulkInsertData = [];
            $maxCount = max(
                count($protection_services),
                count($q26_quality_id),
                count($q26_location_id)
            );

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'protection_services' => $protection_services[$i] ?? null,
                    'q26_quality_id' => $q26_quality_id[$i] ?? null,
                    'q26_location_id' => $q26_location_id[$i] ?? null,


                ];
            }

            if (!empty($bulkInsertData)) {
                TwentySix::insert($bulkInsertData);
            }
        }
        //question 27


        $location_id_q27 = $request->input('location_id_q27', []);
        $type_facility = $request->input('type_facility', []);
        $number_facility = $request->input('number_facility', []);
        $number_children_boy_q27 = $request->input('number_children_boy_q27', []);
        $number_children_girl_q27 = $request->input('number_children_girl_q27', []);
        $number_children_total_q27 = $request->input('number_children_total_q27', []);
        $case_id = $question->id;
        $bulkInsertData = [];
        $maxCount = max(
            count($location_id_q27),
            count($type_facility),
            count($number_facility),
            count($number_children_boy_q27),
            count($number_children_girl_q27),
            count($number_children_total_q27)
        );

        for ($i = 0; $i < $maxCount; $i++) {
            $bulkInsertData[] = [
                'case_id' => $case_id,
                'location_id_q27' => $location_id_q27[$i] ?? null,
                'type_facility' => $type_facility[$i] ?? null,
                'number_facility' => $number_facility[$i] ?? null,
                'number_children_boy_q27' => $number_children_boy_q27[$i] ?? null,
                'number_children_girl_q27' => $number_children_girl_q27[$i] ?? null,
                'number_children_total_q27' => $number_children_total_q27[$i] ?? null,



            ];
        }


        if (!empty($bulkInsertData)) {
            TwentySeven::insert($bulkInsertData);
        }


        // question 28

        $identification_type = $request->input('identification_type', []);
        $identification_sex_trafficking = $request->input('identification_sex_trafficking', []);
        $identification_forced_labor = $request->input('identification_forced_labor', []);
        $identification_other_traficking = $request->input('identification_other_traficking', []);
        $identification_unspecified_traficking = $request->input('identification_unspecified_traficking', []);

       


        $case_id = $question->id;
        $bulkInsertData = [];
        $maxCount = max(
            count($identification_type),
            count($identification_sex_trafficking),
            count($identification_forced_labor),
            count($identification_other_traficking),
            count($identification_unspecified_traficking),
        
        );

        for ($i = 0; $i < $maxCount; $i++) {
            $bulkInsertData[] = [
                'case_id' => $case_id,
                'identification_type' => $identification_type[$i] ?? null,
                'identification_sex_trafficking' => $identification_sex_trafficking[$i] ?? null,
                'identification_forced_labor' => $identification_forced_labor[$i] ?? null,
                'identification_other_traficking' => $identification_other_traficking[$i] ?? null,
                'identification_unspecified_traficking' => $identification_unspecified_traficking[$i] ?? null,
         

            ];
        }

        // return response()->json($bulkInsertData);
        if (!empty($bulkInsertData)) {
            TwentyEight::insert($bulkInsertData);
        }




        // question 29

        $type_protection_action = $request->input('type_protection_action', []);
        $total_allocation_under_npa_protection = $request->input('total_allocation_under_npa_protection', []);

        $case_id = $question->id;
        $bulkInsertData = [];
        $maxCount = max(count($type_protection_action), count($total_allocation_under_npa_protection));
        for ($i = 0; $i < $maxCount; $i++) {
            $bulkInsertData[] = [
                'case_id' => $case_id,
                'type_protection_action' => $type_protection_action[$i] ?? null,
                'total_allocation_under_npa_protection' => $total_allocation_under_npa_protection[$i] ?? null,
            ];
        }


        if (!empty($bulkInsertData)) {
            TwentyNine::insert($bulkInsertData);
        }





        // question 30
        if ($request->is_host_country_nationals_q30 != 0) {
            $protection_services_q30 = $request->input('protection_services_q30', []);
            $status_coverage_q30 = $request->input('status_coverage_q30', []);
            $current_coverage_foreign_vots_men = $request->input('current_coverage_foreign_vots_men', []);
            $current_coverage_foreign_vots_women = $request->input('current_coverage_foreign_vots_women', []);
            $current_coverage_foreign_vots_third_gender = $request->input('current_coverage_foreign_vots_third_gender', []);
            $current_coverage_foreign_vots_boy = $request->input('current_coverage_foreign_vots_boy', []);
            $current_coverage_foreign_vots_girl = $request->input('current_coverage_foreign_vots_girl', []);
            $current_coverage_foreign_vots_total = $request->input('current_coverage_foreign_vots_total', []);
            $origin_vots = $request->input('origin_vots', []);
            $q30_other_specify = $request->input('q30_other_specify', []);




            $case_id = $question->id;

            $bulkInsertData = [];
            $maxCount = max(
                count($protection_services_q30),
                count($status_coverage_q30),
                count($current_coverage_foreign_vots_men),
                count($current_coverage_foreign_vots_women),
                count($current_coverage_foreign_vots_third_gender),
                count($current_coverage_foreign_vots_boy)
                ,
                count($current_coverage_foreign_vots_girl),
                count($current_coverage_foreign_vots_total)
                ,
                count($origin_vots),
                count($q30_other_specify)
            );

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'protection_services_q30' => $protection_services_q30[$i] ?? null,
                    'status_coverage_q30' => $status_coverage_q30[$i] ?? null,
                    'current_coverage_foreign_vots_men' => $current_coverage_foreign_vots_men[$i] ?? null,
                    'current_coverage_foreign_vots_women' => $current_coverage_foreign_vots_women[$i] ?? null,
                    'current_coverage_foreign_vots_third_gender' => $current_coverage_foreign_vots_third_gender[$i] ?? null,
                    'current_coverage_foreign_vots_boy' => $current_coverage_foreign_vots_boy[$i] ?? null,
                    'current_coverage_foreign_vots_girl' => $current_coverage_foreign_vots_girl[$i] ?? null,
                    'current_coverage_foreign_vots_total' => $current_coverage_foreign_vots_total[$i] ?? null,
                    'origin_vots' => $origin_vots[$i] ?? null,
                    'q30_other_specify' => $q30_other_specify[$i] ?? null,


                ];
            }


            if (!empty($bulkInsertData)) {
                Thirty::insert($bulkInsertData);
            }
        }

        // question 31
        if ($request->is_foreign_victims_legally_entitled_q31 != 0) {
            $q31_type = $request->input('q31_type', []);
            $q31_traffick_type_of_hotlines = $request->input('q31_traffick_type_of_hotlines', []);
            $q31_implementer_traffick = $request->input('q31_implementer_traffick', []);
            $q31_traffick_others_specify = $request->input('q31_traffick_others_specify', []);
            $q31_traffick_hotline_number = $request->input('q31_traffick_hotline_number', []);
            $q31_traffick_men = $request->input('q31_traffick_men', []);
            $q31_traffick_women = $request->input('q31_traffick_women', []);
            $q31_traffick_third_gender = $request->input('q31_traffick_third_gender', []);
            $q31_traffick_boys = $request->input('q31_traffick_boys', []);
            $q31_traffick_girls = $request->input('q31_traffick_girls', []);
            $q31_traffick_total = $request->input('q31_traffick_total', []);




            $case_id = $question->id;

            $bulkInsertData = [];
            $maxCount = max(
                count($q31_type),
                count($q31_traffick_type_of_hotlines),
                count($q31_implementer_traffick),
                count($q31_traffick_others_specify),
                count($q31_traffick_hotline_number),
                count($q31_traffick_men)
                ,
                count($q31_traffick_women),
                count($q31_traffick_third_gender)
                ,
                count($q31_traffick_boys),
                count($q31_traffick_girls),
                count($q31_traffick_total)
            );

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'q31_type' => $q31_type[$i] ?? null,
                    'q31_traffick_type_of_hotlines' => $q31_traffick_type_of_hotlines[$i] ?? null,
                    'q31_implementer_traffick' => $q31_implementer_traffick[$i] ?? null,
                    'q31_traffick_others_specify' => $q31_traffick_others_specify[$i] ?? null,
                    'q31_traffick_hotline_number' => $q31_traffick_hotline_number[$i] ?? null,
                    'q31_traffick_men' => $q31_traffick_men[$i] ?? null,
                    'q31_traffick_women' => $q31_traffick_women[$i] ?? null,
                    'q31_traffick_third_gender' => $q31_traffick_third_gender[$i] ?? null,
                    'q31_traffick_boys' => $q31_traffick_boys[$i] ?? null,
                    'q31_traffick_girls' => $q31_traffick_girls[$i] ?? null,
                    'q31_traffick_total' => $q31_traffick_total[$i] ?? null,


                ];
            }


            if (!empty($bulkInsertData)) {
                ThiryOne::insert($bulkInsertData);
            }
        }

        // question 32
        if ($request->is_investigation_prosecution_q32 != 0) {
            $q32_type = $request->input('q32_type', []);
            $q32_internal_trafficking_men = $request->input('q32_internal_trafficking_men', []);
            $q32_trafficking_women = $request->input('q32_trafficking_women', []);
            $q32_trafficking_third_gender = $request->input('q32_trafficking_third_gender', []);
            $q32_trafficking_boy = $request->input('q32_trafficking_boy', []);
            $q32_trafficking_girl = $request->input('q32_trafficking_girl', []);
            $q32_trafficking_total = $request->input('q32_trafficking_total', []);

            $case_id = $question->id;
            $bulkInsertData = [];
            $maxCount = max(
                count($q32_type),
                count($q32_internal_trafficking_men),
                count($q32_trafficking_women),
                count($q32_trafficking_third_gender),
                count($q32_trafficking_boy),
                count($q32_trafficking_girl),
                count($q32_trafficking_total)
            );

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'q32_type' => $q32_type[$i] ?? null,
                    'q32_internal_trafficking_men' => $q32_internal_trafficking_men[$i] ?? null,
                    'q32_trafficking_women' => $q32_trafficking_women[$i] ?? null,
                    'q32_trafficking_third_gender' => $q32_trafficking_third_gender[$i] ?? null,
                    'q32_trafficking_boy' => $q32_trafficking_boy[$i] ?? null,
                    'q32_trafficking_girl' => $q32_trafficking_girl[$i] ?? null,
                    'q32_trafficking_total' => $q32_trafficking_total[$i] ?? null,

                ];
            }


            if (!empty($bulkInsertData)) {
                ThirtyTwo::insert($bulkInsertData);
            }
        }

        // question 33
        if ($request->is_participating_victims_provided_q33 != 0) {
            $q33_type = $request->input('q33_type', []);
            $q33_trafficking_men = $request->input('q33_trafficking_men', []);
            $q33_trafficking_women = $request->input('q33_trafficking_women', []);
            $q33_trafficking_third_gender = $request->input('q33_trafficking_third_gender', []);
            $q33_trafficking_boy = $request->input('q33_trafficking_boy', []);
            $q33_trafficking_girl = $request->input('q33_trafficking_girl', []);
            $q33_trafficking_total = $request->input('q33_trafficking_total', []);

            $case_id = $question->id;
            $bulkInsertData = [];
            $maxCount = max(
                count($q33_type),
                count($q33_trafficking_men),
                count($q33_trafficking_women),
                count($q33_trafficking_third_gender),
                count($q33_trafficking_boy),
                count($q33_trafficking_girl),
                count($q33_trafficking_total)
            );

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'q33_type' => $q33_type[$i] ?? null,
                    'q33_trafficking_men' => $q33_trafficking_men[$i] ?? null,
                    'q33_trafficking_women' => $q33_trafficking_women[$i] ?? null,
                    'q33_trafficking_third_gender' => $q33_trafficking_third_gender[$i] ?? null,
                    'q33_trafficking_boy' => $q33_trafficking_boy[$i] ?? null,
                    'q33_trafficking_girl' => $q33_trafficking_girl[$i] ?? null,
                    'q33_trafficking_total' => $q33_trafficking_total[$i] ?? null,

                ];
            }


            if (!empty($bulkInsertData)) {
                ThirtyThree::insert($bulkInsertData);
            }
        }


        // question 34
        if ($request->is_avoid_re_traumatization_victims_q34 != 0) {
            $location_id_q34 = $request->input('location_id_q34', []);
            $types_assistance_q34 = $request->input('types_assistance_q34', []);
            $q34_coverage_men = $request->input('q34_coverage_men', []);
            $q34_coverage_women = $request->input('q34_coverage_women', []);
            $q34_coverage_third_gender = $request->input('q34_coverage_third_gender', []);
            $q34_coverage_boy = $request->input('q34_coverage_boy', []);
            $q34_coverage_girl = $request->input('q34_coverage_girl', []);
            $q34_coverage_total = $request->input('q34_coverage_total', []);
            $q34_other_specify = $request->input('q34_other_specify', []);

            $case_id = $question->id;

            $bulkInsertData = [];
            $maxCount = max(
                count($location_id_q34),
                count($types_assistance_q34),
                count($q34_coverage_men),
                count($q34_coverage_women),
                count($q34_coverage_third_gender),
                count($q34_coverage_boy)
                ,
                count($q34_coverage_girl),
                count($q34_coverage_total),
                count($q34_other_specify)
            );

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'location_id_q34' => $location_id_q34[$i] ?? null,
                    'types_assistance_q34' => $types_assistance_q34[$i] ?? null,
                    'q34_coverage_men' => $q34_coverage_men[$i] ?? null,
                    'q34_coverage_women' => $q34_coverage_women[$i] ?? null,
                    'q34_coverage_third_gender' => $q34_coverage_third_gender[$i] ?? null,
                    'q34_coverage_boy' => $q34_coverage_boy[$i] ?? null,
                    'q34_coverage_girl' => $q34_coverage_girl[$i] ?? null,
                    'q34_coverage_total' => $q34_coverage_total[$i] ?? null,
                    'q34_other_specify' => $q34_other_specify[$i] ?? null,

                ];
            }


            if (!empty($bulkInsertData)) {
                ThirtyFour::insert($bulkInsertData);
            }
        }


        // question 35
        if ($request->is_changes_preexisting_q35 != 0) {
            $reform_existing_law_q35_one = $request->input('reform_existing_law_q35_one', []);
            $contents_status_id_q35_one = $request->input('contents_status_id_q35_one', []);

            // $imagesone = [];
            //     if ($request->hasFile('attach_upload_one')) {
            //         foreach ($request->file('attach_upload_one') as $image) {
            //             $path = $image->store('attach_upload_one', 'public');
            //             $imagesone[] = $path;
            //         }
            //     }


            $imagesone = [];
            if ($request->hasFile('attach_upload_one')) {
                foreach ($request->file('attach_upload_one') as $index => $image) {
                    $ext = $image->extension();
                    $final_name = 'attach_upload_one_' . time() . '_' . $index . '.' . $ext;
                    $image->move(public_path('uploads/attach_upload_one'), $final_name);
                    $imagesone[] = 'uploads/attach_upload_one/' . $final_name;
                }
            }

            $q35_title = $request->input('q35_title', []);
            $status_id_q35_two = $request->input('status_id_q35_two', []);

            // $imagestwo = [];
            //     if ($request->hasFile('attach_upload_q35_two')) {
            //         foreach ($request->file('attach_upload_q35_two') as $image) {
            //             $path = $image->store('attach_upload_q35_two', 'public');
            //             $imagestwo[] = $path;
            //         }
            //     }


            $imagestwo = [];
            if ($request->hasFile('attach_upload_q35_two')) {
                foreach ($request->file('attach_upload_q35_two') as $index => $image) {
                    $ext = $image->extension();
                    $final_name = 'attach_upload_q35_two_' . time() . '_' . $index . '.' . $ext;
                    $image->move(public_path('uploads/attach_upload_q35_two'), $final_name);
                    $imagestwo[] = 'uploads/attach_upload_q35_two/' . $final_name;
                }
            }

            $case_id = $question->id;
            $bulkInsertData = [];
            $maxCount = max(
                count($reform_existing_law_q35_one),
                count($contents_status_id_q35_one),
                count($imagesone),
                count($q35_title),
                count($status_id_q35_two),
                count($imagestwo)
            );

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'reform_existing_law_q35_one' => $reform_existing_law_q35_one[$i] ?? null,
                    'contents_status_id_q35_one' => $contents_status_id_q35_one[$i] ?? null,
                    'attach_upload_one' => $imagesone[$i] ?? null,
                    'q35_title' => $q35_title[$i] ?? null,
                    'status_id_q35_two' => $status_id_q35_two[$i] ?? null,
                    'attach_upload_q35_two' => $imagestwo[$i] ?? null,


                ];
            }

            // return response()->json($bulkInsertData);
            if (!empty($bulkInsertData)) {
                ThirtyFive::insert($bulkInsertData);
            }
        }


        // question 36

        $q36_type_cases_investigated = $request->input('q36_type_cases_investigated', []);
        $q36_category_coverage = $request->input('q36_category_coverage', []);
        $q36_new_report_sex_trafficking_cases_men = $request->input('q36_new_report_sex_trafficking_cases_men', []);
        $q36_new_report_sex_trafficking_cases_women = $request->input('q36_new_report_sex_trafficking_cases_women', []);
        $q36_new_report_sex_trafficking_cases_third_gender = $request->input('q36_new_report_sex_trafficking_cases_third_gender', []);
        $q36_new_report_sex_trafficking_cases_boy = $request->input('q36_new_report_sex_trafficking_cases_boy', []);
        $q36_new_report_sex_trafficking_cases_girl = $request->input('q36_new_report_sex_trafficking_cases_girl', []);
        $q36_new_report_sex_trafficking_cases_total = $request->input('q36_new_report_sex_trafficking_cases_total', []);

        $case_id = $question->id;
        $bulkInsertData = [];
        $maxCount = max(
            count($q36_type_cases_investigated),
            count($q36_category_coverage),
            count($q36_new_report_sex_trafficking_cases_men),
            count($q36_new_report_sex_trafficking_cases_women)
            ,
            count($q36_new_report_sex_trafficking_cases_third_gender),
            count($q36_new_report_sex_trafficking_cases_boy)
            ,
            count($q36_new_report_sex_trafficking_cases_girl),
            count($q36_new_report_sex_trafficking_cases_total)
        );

        for ($i = 0; $i < $maxCount; $i++) {
            $bulkInsertData[] = [
                'case_id' => $case_id,
                'q36_type_cases_investigated' => $q36_type_cases_investigated[$i] ?? null,
                'q36_category_coverage' => $q36_category_coverage[$i] ?? null,
                'q36_new_report_sex_trafficking_cases_men' => $q36_new_report_sex_trafficking_cases_men[$i] ?? null,
                'q36_new_report_sex_trafficking_cases_women' => $q36_new_report_sex_trafficking_cases_women[$i] ?? null,
                'q36_new_report_sex_trafficking_cases_third_gender' => $q36_new_report_sex_trafficking_cases_third_gender[$i] ?? null,
                'q36_new_report_sex_trafficking_cases_boy' => $q36_new_report_sex_trafficking_cases_boy[$i] ?? null,
                'q36_new_report_sex_trafficking_cases_girl' => $q36_new_report_sex_trafficking_cases_girl[$i] ?? null,
                'q36_new_report_sex_trafficking_cases_total' => $q36_new_report_sex_trafficking_cases_total[$i] ?? null,


            ];
        }


        if (!empty($bulkInsertData)) {
            ThirtySix::insert($bulkInsertData);
        }

        // question 37

        $q37_type_cases_investigated = $request->input('q37_type_cases_investigated', []);
        $q37_category_coverage = $request->input('q37_category_coverage', []);
        $q37_new_report_sex_trafficking_cases_men = $request->input('q37_new_report_sex_trafficking_cases_men', []);
        $q37_new_report_sex_trafficking_cases_women = $request->input('q37_new_report_sex_trafficking_cases_women', []);
        $q37_new_report_sex_trafficking_cases_third_gender = $request->input('q37_new_report_sex_trafficking_cases_third_gender', []);
        $q37_new_report_sex_trafficking_cases_boy = $request->input('q37_new_report_sex_trafficking_cases_boy', []);
        $q37_new_report_sex_trafficking_cases_girl = $request->input('q37_new_report_sex_trafficking_cases_girl', []);
        $q37_new_report_sex_trafficking_cases_total = $request->input('q37_new_report_sex_trafficking_cases_total', []);

        $case_id = $question->id;
        $bulkInsertData = [];
        $maxCount = max(
            count($q37_type_cases_investigated),
            count($q37_category_coverage),
            count($q37_new_report_sex_trafficking_cases_men),
            count($q37_new_report_sex_trafficking_cases_women)
            ,
            count($q37_new_report_sex_trafficking_cases_third_gender),
            count($q37_new_report_sex_trafficking_cases_boy)
            ,
            count($q37_new_report_sex_trafficking_cases_girl),
            count($q37_new_report_sex_trafficking_cases_total)
        );

        for ($i = 0; $i < $maxCount; $i++) {
            $bulkInsertData[] = [
                'case_id' => $case_id,
                'q37_type_cases_investigated' => $q37_type_cases_investigated[$i] ?? null,
                'q37_category_coverage' => $q37_category_coverage[$i] ?? null,
                'q37_new_report_sex_trafficking_cases_men' => $q37_new_report_sex_trafficking_cases_men[$i] ?? null,
                'q37_new_report_sex_trafficking_cases_women' => $q37_new_report_sex_trafficking_cases_women[$i] ?? null,
                'q37_new_report_sex_trafficking_cases_third_gender' => $q37_new_report_sex_trafficking_cases_third_gender[$i] ?? null,
                'q37_new_report_sex_trafficking_cases_boy' => $q37_new_report_sex_trafficking_cases_boy[$i] ?? null,
                'q37_new_report_sex_trafficking_cases_girl' => $q37_new_report_sex_trafficking_cases_girl[$i] ?? null,
                'q37_new_report_sex_trafficking_cases_total' => $q37_new_report_sex_trafficking_cases_total[$i] ?? null,


            ];
        }


        if (!empty($bulkInsertData)) {
            ThirtySeven::insert($bulkInsertData);
        }

        // question 38
        if ($request->is_law_enforcement_activities_q38 != 0) {
            $q38_country_id = $request->input('q38_country_id', []);
            $sex_trafficking = $request->input('sex_trafficking', []);
            $labour_trafficking = $request->input('labour_trafficking', []);
            $other_unspecific_trafficking = $request->input('other_unspecific_trafficking', []);
            $total = $request->input('total', []);






            $case_id = $question->id;

            $bulkInsertData = [];
            $maxCount = max(
                count($q38_country_id),
                count($sex_trafficking),
                count($labour_trafficking),
                count($other_unspecific_trafficking),
                count($total)
            );

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'q38_country_id' => $q38_country_id[$i] ?? null,
                    'sex_trafficking' => $sex_trafficking[$i] ?? null,
                    'labour_trafficking' => $labour_trafficking[$i] ?? null,
                    'other_unspecific_trafficking' => $other_unspecific_trafficking[$i] ?? null,
                    'total' => $total[$i] ?? null,


                ];
            }


            if (!empty($bulkInsertData)) {
                ThirtyEight::insert($bulkInsertData);
            }
        }

        //39 question

        $type_cases_reaching_verdict = $request->input('type_cases_reaching_verdict', []);
        $number_of_cases = $request->input('number_of_cases', []);
        $case_id = $question->id;
        $bulkInsertData = [];
        $maxCount = max(count($type_cases_reaching_verdict), count($number_of_cases));

        for ($i = 0; $i < $maxCount; $i++) {
            $bulkInsertData[] = [
                'case_id' => $case_id,
                'type_cases_reaching_verdict' => $type_cases_reaching_verdict[$i] ?? null,
                'number_of_cases' => $number_of_cases[$i] ?? null,



            ];
        }
           

           //return response()->json($bulkInsertData);

        if (!empty($bulkInsertData)) {
            ThirtyNine::insert($bulkInsertData);
        }



        // question 40
        $q40_type_cases_investigated = $request->input('q40_type_cases_investigated', []);
        $q40_category_coverage = $request->input('q40_category_coverage', []);
        $q40_new_report_sex_trafficking_cases_men = $request->input('q40_new_report_sex_trafficking_cases_men', []);
        $q40_new_report_sex_trafficking_cases_women = $request->input('q40_new_report_sex_trafficking_cases_women', []);
        $q40_new_report_sex_trafficking_cases_third_gender = $request->input('q40_new_report_sex_trafficking_cases_third_gender', []);
        $q40_new_report_sex_trafficking_cases_boy = $request->input('q40_new_report_sex_trafficking_cases_boy', []);
        $q40_new_report_sex_trafficking_cases_girl = $request->input('q40_new_report_sex_trafficking_cases_girl', []);
        $q40_new_report_sex_trafficking_cases_total = $request->input('q40_new_report_sex_trafficking_cases_total', []);
        $case_id = $question->id;
        $bulkInsertData = [];
        $maxCount = max(
            count($q40_type_cases_investigated),
            count($q40_category_coverage),
            count($q40_new_report_sex_trafficking_cases_men),
            count($q40_new_report_sex_trafficking_cases_women)
            ,
            count($q40_new_report_sex_trafficking_cases_third_gender),
            count($q40_new_report_sex_trafficking_cases_boy)
            ,
            count($q40_new_report_sex_trafficking_cases_girl),
            count($q40_new_report_sex_trafficking_cases_total)
        );

        for ($i = 0; $i < $maxCount; $i++) {
            $bulkInsertData[] = [
                'case_id' => $case_id,
                'q40_type_cases_investigated' => $q40_type_cases_investigated[$i] ?? null,
                'q40_category_coverage' => $q40_category_coverage[$i] ?? null,
                'q40_new_report_sex_trafficking_cases_men' => $q40_new_report_sex_trafficking_cases_men[$i] ?? null,
                'q40_new_report_sex_trafficking_cases_women' => $q40_new_report_sex_trafficking_cases_women[$i] ?? null,
                'q40_new_report_sex_trafficking_cases_third_gender' => $q40_new_report_sex_trafficking_cases_third_gender[$i] ?? null,
                'q40_new_report_sex_trafficking_cases_boy' => $q40_new_report_sex_trafficking_cases_boy[$i] ?? null,
                'q40_new_report_sex_trafficking_cases_girl' => $q40_new_report_sex_trafficking_cases_girl[$i] ?? null,
                'q40_new_report_sex_trafficking_cases_total' => $q40_new_report_sex_trafficking_cases_total[$i] ?? null,


            ];
        }


        if (!empty($bulkInsertData)) {
            Fourty::insert($bulkInsertData);
        }








        $case_id = $question->id;
        $yes_no = new YesNoStatus40to60();
        $yes_no->case_id = $case_id;
        $yes_no->is_regional_enforcement_coordination_q43 = $request->is_regional_enforcement_coordination_q43;
        $yes_no->regional_enforcement_coordination_others_q43 = $request->regional_enforcement_coordination_others_q43;
        $yes_no->is_courts_responsible_investigating_q46 = $request->is_courts_responsible_investigating_q46;
        $yes_no->courts_responsible_investigating_others_q46 = $request->courts_responsible_investigating_others_q46;
        $yes_no->is_courts_adequate_resources_q47 = $request->is_courts_adequate_resources_q47;
        $yes_no->courts_adequate_resources_others_q47 = $request->courts_adequate_resources_others_q47;
        $yes_no->is_spend_prosecution_efforts_q50 = $request->is_spend_prosecution_efforts_q50;
        $yes_no->spend_prosecution_efforts_others_q50 = $request->spend_prosecution_efforts_others_q50;
        $yes_no->is_allocate_victim_compensation_q52 = $request->is_allocate_victim_compensation_q52;
        $yes_no->allocate_victim_compensation_others_q52 = $request->allocate_victim_compensation_others_q52;
        $yes_no->is_vots_received_assistance_q53 = $request->is_vots_received_assistance_q53;
        $yes_no->vots_received_assistance_others_q53 = $request->vots_received_assistance_others_q53;
        $yes_no->is_border_security_measures_q45 = $request->is_border_security_measures_q45;
        $yes_no->border_security_measures_others_q45 = $request->border_security_measures_others_q45;

        $yes_no->save();

        // question 41
        $q41_district_id = $request->input('q41_district_id', []);
        $previous_cases = $request->input('previous_cases', []);
        $received_cases = $request->input('received_cases', []);
        $total_cases = $request->input('total_cases', []);
        $disposed_cases = $request->input('disposed_cases', []);
        $transferred_cases = $request->input('transferred_cases', []);
        $pending_cases = $request->input('pending_cases', []);
        $cases_more_than_five_year_old = $request->input('cases_more_than_five_year_old', []);

        $case_id = $question->id;

        $bulkInsertData = [];
        $maxCount = max(
            count($q41_district_id),
            count($previous_cases),
            count($received_cases),
            count($total_cases),
            count($disposed_cases),
            count($transferred_cases),
            count($pending_cases),
            count($cases_more_than_five_year_old)
        );

        for ($i = 0; $i < $maxCount; $i++) {
            $bulkInsertData[] = [
                'case_id' => $case_id,
                'q41_district_id' => $q41_district_id[$i] ?? null,
                'previous_cases' => $previous_cases[$i] ?? null,
                'received_cases' => $received_cases[$i] ?? null,
                'total_cases' => $total_cases[$i] ?? null,
                'disposed_cases' => $disposed_cases[$i] ?? null,
                'transferred_cases' => $transferred_cases[$i] ?? null,
                'pending_cases' => $pending_cases[$i] ?? null,
                'cases_more_than_five_year_old' => $cases_more_than_five_year_old[$i] ?? null,


            ];
        }

   //return response()->json($bulkInsertData);
        if (!empty($bulkInsertData)) {
            FortyOne::insert($bulkInsertData);
        }



        // question 42
        $q42_type = $request->input('q42_type', []);
        $q42_sexual_exploitation_division_id = $request->input('q42_sexual_exploitation_division_id', []);
        $q42_sexual_men = $request->input('q42_sexual_men', []);
        $q42_sexual_women = $request->input('q42_sexual_women', []);
        $q42_sexual_third_gender = $request->input('q42_sexual_third_gender', []);
        $q42_sexual_total = $request->input('q42_sexual_total', []);

        $case_id = $question->id;

        $bulkInsertData = [];
        $maxCount = max(
            count($q42_type),
            count($q42_sexual_exploitation_division_id),
            count($q42_sexual_men),
            count($q42_sexual_women),
            count($q42_sexual_third_gender),
            count($q42_sexual_total)
        );

        for ($i = 0; $i < $maxCount; $i++) {
            $bulkInsertData[] = [
                'case_id' => $case_id,
                'q42_type' => $q42_type[$i] ?? null,
                'q42_sexual_exploitation_division_id' => $q42_sexual_exploitation_division_id[$i] ?? null,
                'q42_sexual_men' => $q42_sexual_men[$i] ?? null,
                'q42_sexual_women' => $q42_sexual_women[$i] ?? null,

                'q42_sexual_third_gender' => $q42_sexual_third_gender[$i] ?? null,
                'q42_sexual_total' => $q42_sexual_total[$i] ?? null,


            ];
        }


        if (!empty($bulkInsertData)) {
            FortyTwo::insert($bulkInsertData);
        }


        //    question no 43
        if ($request->is_regional_enforcement_coordination_q43 != 0) {
            $q43_country_id = $request->input('q43_country_id', []);
            $q43_nature_arrangement_id = $request->input('q43_nature_arrangement_id', []);
            $q43_focus_id = $request->input('q43_focus_id', []);
            $q43_status_id = $request->input('q43_status_id', []);


            // $images = [];
// if ($request->hasFile('upload_document')) {
//     foreach ($request->file('upload_document') as $image) {
//         $path = $image->store('upload_document', 'public');
//         $images[] = $path;
//     }
// }


            $images = [];
            if ($request->hasFile('upload_document')) {
                foreach ($request->file('upload_document') as $index => $image) {
                    $ext = $image->extension();
                    $final_name = 'upload_document_' . time() . '_' . $index . '.' . $ext;
                    $image->move(public_path('uploads/upload_document'), $final_name);
                    $images[] = 'uploads/upload_document/' . $final_name;
                }
            }


            $case_id = $question->id;
            $bulkInsertData = [];
            $maxCount = max(
                count($q43_country_id),
                count($q43_nature_arrangement_id),
                count($q43_focus_id),
                count($q43_status_id),
                count($images)
            );

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'q43_country_id' => $q43_country_id[$i] ?? null,
                    'q43_nature_arrangement_id' => $q43_nature_arrangement_id[$i] ?? null,
                    'q43_focus_id' => $q43_focus_id[$i] ?? null,
                    'q43_status_id' => $q43_status_id[$i] ?? null,
                    'upload_document' => $images[$i] ?? null,


                ];
            }

            if (!empty($bulkInsertData)) {
                FortyThree::insert($bulkInsertData);
            }


        }

        // question 44
        $ministry_department = $request->input('ministry_department', []);
        $number_official_accused_men = $request->input('number_official_accused_men', []);
        $number_official_accused_women = $request->input('number_official_accused_women', []);
        $number_official_accused_third_gender = $request->input('number_official_accused_third_gender', []);
        $number_official_accused_total = $request->input('number_official_accused_total', []);


        $case_id = $question->id;
        $bulkInsertData = [];
        $maxCount = max(
            count($ministry_department),
            count($number_official_accused_men),
            count($number_official_accused_women),
            count($number_official_accused_third_gender),
            count($number_official_accused_total)
        );

        for ($i = 0; $i < $maxCount; $i++) {
            $bulkInsertData[] = [
                'case_id' => $case_id,
                'ministry_department' => $ministry_department[$i] ?? null,
                'number_official_accused_men' => $number_official_accused_men[$i] ?? null,
                'number_official_accused_women' => $number_official_accused_women[$i] ?? null,
                'number_official_accused_third_gender' => $number_official_accused_third_gender[$i] ?? null,
                'number_official_accused_total' => $number_official_accused_total[$i] ?? null,


            ];
        }

        if (!empty($bulkInsertData)) {
            FortyFour::insert($bulkInsertData);
        }


        // question 45
        if ($request->is_border_security_measures_q45 != 0) {
            $q45_ministry_department = $request->input('q45_ministry_department', []);
            $q45_measures_taken = $request->input('q45_measures_taken', []);



            $case_id = $question->id;
            $bulkInsertData = [];
            $maxCount = max(count($q45_ministry_department), count($q45_measures_taken));

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'q45_ministry_department' => $q45_ministry_department[$i] ?? null,
                    'q45_measures_taken' => $q45_measures_taken[$i] ?? null,




                ];
            }

            if (!empty($bulkInsertData)) {
                FortyFive::insert($bulkInsertData);
            }

        }

        // question 46
        if ($request->is_courts_responsible_investigating_q46 != 0) {
            $q46_unit_court = $request->input('q46_unit_court', []);
            $q46_focus_jurisdiction = $request->input('q46_focus_jurisdiction', []);
            $q46_location_id = $request->input('q46_location_id', []);


            $case_id = $question->id;
            $bulkInsertData = [];
            $maxCount = max(
                count($q46_unit_court),
                count($q46_focus_jurisdiction),
                count($q46_location_id)
            );

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'q46_unit_court' => $q46_unit_court[$i] ?? null,
                    'q46_focus_jurisdiction' => $q46_focus_jurisdiction[$i] ?? null,
                    'q46_location_id' => $q46_location_id[$i] ?? null,



                ];
            }

            if (!empty($bulkInsertData)) {
                FortySix::insert($bulkInsertData);
            }

        }

        // question 47
        if ($request->is_courts_adequate_resources_q47 != 0) {
            $q47_name_unit = $request->input('q47_name_unit', []);
            $q47_focus_jurisdiction = $request->input('q47_focus_jurisdiction', []);
            $q47_location_id = $request->input('q47_location_id', []);


            $case_id = $question->id;
            $bulkInsertData = [];
            $maxCount = max(
                count($q47_name_unit),
                count($q47_focus_jurisdiction),
                count($q47_location_id)
            );

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'q47_name_unit' => $q47_name_unit[$i] ?? null,
                    'q47_focus_jurisdiction' => $q47_focus_jurisdiction[$i] ?? null,
                    'q47_location_id' => $q47_location_id[$i] ?? null,



                ];
            }

            if (!empty($bulkInsertData)) {
                FortySeven::insert($bulkInsertData);
            }

        }




        //    question no 48

        $category_trainee = $request->input('category_trainee', []);
        $training_contents = $request->input('training_contents', []);
        $number_of_training = $request->input('number_of_training', []);
        $q48_location_id = $request->input('q48_location_id', []);
        $development_partner = $request->input('development_partner', []);
        $q48_coverage_men = $request->input('q48_coverage_men', []);
        $q48_coverage_women = $request->input('q48_coverage_women', []);
        $q48_coverage_third_gender = $request->input('q48_coverage_third_gender', []);
        $q48_coverage_total = $request->input('q48_coverage_total', []);
        $case_id = $question->id;
        $bulkInsertData = [];
        $maxCount = max(
            count($category_trainee),
            count($training_contents),
            count($number_of_training),
            count($q48_location_id),
            count($development_partner),
            count($q48_coverage_men)
            ,
            count($q48_coverage_women),
            count($q48_coverage_third_gender),
            count($q48_coverage_total)
        );

        for ($i = 0; $i < $maxCount; $i++) {
            $bulkInsertData[] = [
                'case_id' => $case_id,
                'category_trainee' => $category_trainee[$i] ?? null,
                'training_contents' => $training_contents[$i] ?? null,
                'number_of_training' => $number_of_training[$i] ?? null,
                'q48_location_id' => $q48_location_id[$i] ?? null,
                'development_partner' => $development_partner[$i] ?? null,
                'q48_coverage_men' => $q48_coverage_men[$i] ?? null,
                'q48_coverage_women' => $q48_coverage_women[$i] ?? null,
                'q48_coverage_third_gender' => $q48_coverage_third_gender[$i] ?? null,
                'q48_coverage_total' => $q48_coverage_total[$i] ?? null,

            ];
        }


        // return response()->json($bulkInsertData);
        if (!empty($bulkInsertData)) {
            FortyEight::insert($bulkInsertData);
        }



        // question 49
        $q49_category_trainee = $request->input('q49_category_trainee', []);
        $q49_training_contents = $request->input('q49_training_contents', []);
        $q49_number_of_training = $request->input('q49_number_of_training', []);
        $q49_location_id = $request->input('q49_location_id', []);
        $q49_development_partner = $request->input('q49_development_partner', []);
        $q49_coverage_men = $request->input('q49_coverage_men', []);
        $q49_coverage_women = $request->input('q49_coverage_women', []);
        $q49_coverage_third_gender = $request->input('q49_coverage_third_gender', []);
        $q49_coverage_total = $request->input('q49_coverage_total', []);


        $case_id = $question->id;
        $bulkInsertData = [];
        $maxCount = max(
            count($q49_category_trainee),
            count($q49_training_contents),
            count($q49_number_of_training),
            count($q49_location_id),
            count($q49_development_partner)
            ,
            count($q49_coverage_men),
            count($q49_coverage_women),
            count($q49_coverage_third_gender),
            count($q49_coverage_total)
        );

        for ($i = 0; $i < $maxCount; $i++) {
            $bulkInsertData[] = [
                'case_id' => $case_id,
                'q49_category_trainee' => $q49_category_trainee[$i] ?? null,
                'q49_training_contents' => $q49_training_contents[$i] ?? null,
                'q49_number_of_training' => $q49_number_of_training[$i] ?? null,
                'q49_location_id' => $q49_location_id[$i] ?? null,
                'q49_development_partner' => $q49_development_partner[$i] ?? null,
                'q49_coverage_men' => $q49_coverage_men[$i] ?? null,
                'q49_coverage_women' => $q49_coverage_women[$i] ?? null,
                'q49_coverage_third_gender' => $q49_coverage_third_gender[$i] ?? null,
                'q49_coverage_total' => $q49_coverage_total[$i] ?? null,


            ];
        }

        if (!empty($bulkInsertData)) {
            FortyNine::insert($bulkInsertData);
        }

        // fifty 

        if ($request->is_spend_prosecution_efforts_q50 != 0) {
            $type_preventive_action_q50 = $request->input('type_preventive_action_q50', []);
            $total_allocation_under_npa_prosecution_q50 = $request->input('total_allocation_under_npa_prosecution_q50', []);



            $case_id = $question->id;
            $bulkInsertData = [];
            $maxCount = max(count($type_preventive_action_q50), count($total_allocation_under_npa_prosecution_q50));

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'type_preventive_action_q50' => $type_preventive_action_q50[$i] ?? null,
                    'total_allocation_under_npa_prosecution_q50' => $total_allocation_under_npa_prosecution_q50[$i] ?? null,




                ];
            }

            if (!empty($bulkInsertData)) {
                Fifty::insert($bulkInsertData);
            }

        }



        //    question no 51

        $q51_type = $request->input('q51_type', []);
        $q51_number_case = $request->input('q51_number_case', []);
        $q51_total_case = $request->input('q51_total_case', []);

        $case_id = $question->id;
        $bulkInsertData = [];
        $maxCount = max(
            count($q51_type),
            count($q51_number_case),
            count($q51_total_case)
        );

        for ($i = 0; $i < $maxCount; $i++) {
            $bulkInsertData[] = [
                'case_id' => $case_id,
                'q51_type' => $q51_type[$i] ?? null,
                'q51_number_case' => $q51_number_case[$i] ?? null,
                'q51_total_case' => $q51_total_case[$i] ?? null,

            ];
        }



        if (!empty($bulkInsertData)) {
            FiftyOne::insert($bulkInsertData);
        }

        // fifty two
        if ($request->is_allocate_victim_compensation_q52 != 0) {

            $q52_type = $request->input('q52_type', []);
            $q52_bdt = $request->input('q52_bdt', []);


            $case_id = $question->id;
            $bulkInsertData = [];
            $maxCount = max(count($q52_type), count($q52_bdt));

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'q52_type' => $q52_type[$i] ?? null,
                    'q52_bdt' => $q52_bdt[$i] ?? null,

                ];
            }

            if (!empty($bulkInsertData)) {
                FiftyTwo::insert($bulkInsertData);
            }


        }



        // question 53
        if ($request->is_vots_received_assistance_q53 != 0) {
            $number_of_case = $request->input('number_of_case', []);
            $q53_individual_coverage_men = $request->input('q53_individual_coverage_men', []);
            $q53_individual_coverage_women = $request->input('q53_individual_coverage_women', []);
            $q53_individual_coverage_third_gender = $request->input('q53_individual_coverage_third_gender', []);
            $q53_individual_coverage_boy = $request->input('q53_individual_coverage_boy', []);
            $q53_individual_coverage_girl = $request->input('q53_individual_coverage_girl', []);
            $q53_individual_coverage_total = $request->input('q53_individual_coverage_total', []);
            $q53_other_specify = $request->input('q53_other_specify', []);



            $case_id = $question->id;
            $bulkInsertData = [];
            $maxCount = max(
                count($number_of_case),
                count($q53_individual_coverage_men),
                count($q53_individual_coverage_women),
                count($q53_individual_coverage_third_gender),
                count($q53_individual_coverage_boy)
                ,
                count($q53_individual_coverage_girl),
                count($q53_individual_coverage_total),
                count($q53_other_specify)
            );

            for ($i = 0; $i < $maxCount; $i++) {
                $bulkInsertData[] = [
                    'case_id' => $case_id,
                    'number_of_case' => $number_of_case[$i] ?? null,
                    'q53_individual_coverage_men' => $q53_individual_coverage_men[$i] ?? null,
                    'q53_individual_coverage_women' => $q53_individual_coverage_women[$i] ?? null,
                    'q53_individual_coverage_third_gender' => $q53_individual_coverage_third_gender[$i] ?? null,
                    'q53_individual_coverage_boy' => $q53_individual_coverage_boy[$i] ?? null,
                    'q53_individual_coverage_girl' => $q53_individual_coverage_girl[$i] ?? null,
                    'q53_individual_coverage_total' => $q53_individual_coverage_total[$i] ?? null,
                    'q53_other_specify' => $q53_other_specify[$i] ?? null,



                ];
            }



            if (!empty($bulkInsertData)) {
                FiftyThree::insert($bulkInsertData);
            }

        }
        // question no 54

        $category_trainee_54 = $request->input('category_trainee_54', []);
        $number_of_training_54 = $request->input('number_of_training_54', []);
        $training_contents_54 = $request->input('training_contents_54', []);
        $men_q54 = $request->input('men_q54', []);
        $women_q54 = $request->input('women_q54', []);
        $third_gender_q54 = $request->input('third_gender_q54', []);
        $total_q54 = $request->input('total_q54', []);

        $case_id = $question->id; // Ensure $question is defined and has an id property

        // Initialize an array to store all data sets to be inserted
        $bulkInsertData = [];

        // Get the maximum count to ensure all arrays have data
        $maxCount = max(count($category_trainee_54), count($number_of_training_54), count($training_contents_54), count($men_q54), count($women_q54), count($third_gender_q54), count($total_q54));

        for ($i = 0; $i < $maxCount; $i++) {
            $bulkInsertData[] = [
                'case_id' => $case_id,
                'category_trainee_54' => $category_trainee_54[$i] ?? null, // Use null coalescing operator to handle missing indices
                'number_of_training_54' => $number_of_training_54[$i] ?? null,
                'training_contents_54' => $training_contents_54[$i] ?? null,
                'men_q54' => $men_q54[$i] ?? null,
                'women_q54' => $women_q54[$i] ?? null,
                'third_gender_q54' => $third_gender_q54[$i] ?? null,
                'total_q54' => $total_q54[$i] ?? null,
            ];
        }



        // Insert all data at once if there is data to insert
        if (!empty($bulkInsertData)) {
            FiftyFour::insert($bulkInsertData);
        }


        // question no 55

        $q55_type_activities = $request->input('q55_type_activities', []);
        $q55_district_id = $request->input('q55_district_id', []);
        $q55_organizations_covered = $request->input('q55_organizations_covered', []);
        $q55_number_events = $request->input('q55_number_events', []);
        $q55_individuals_covered_men = $request->input('q55_individuals_covered_men', []);
        $q55_individuals_covered_women = $request->input('q55_individuals_covered_women', []);
        $q55_individuals_covered_third_gender = $request->input('q55_individuals_covered_third_gender', []);
        $q55_individuals_covered_boy = $request->input('q55_individuals_covered_boy', []);
        $q55_individuals_covered_girl = $request->input('q55_individuals_covered_girl', []);
        $q55_individuals_covered_total = $request->input('q55_individuals_covered_total', []);
        $q55_othe_specify = $request->input('q55_othe_specify', []);

        $case_id = $question->id; // Ensure $question is defined and has an id property

        // Initialize an array to store all data sets to be inserted
        $bulkInsertData = [];

        // Get the maximum count to ensure all arrays have data
        $maxCount = max(
            count($q55_type_activities),
            count($q55_district_id),
            count($q55_organizations_covered),
            count($q55_number_events),
            count($q55_individuals_covered_men),
            count($q55_individuals_covered_women),
            count($q55_individuals_covered_third_gender),
            count($q55_individuals_covered_boy),
            count($q55_individuals_covered_girl),
            count($q55_individuals_covered_total),
            count($q55_othe_specify)
        );

        for ($i = 0; $i < $maxCount; $i++) {
            $bulkInsertData[] = [
                'case_id' => $case_id,
                'q55_type_activities' => $q55_type_activities[$i] ?? null, // Use null coalescing operator to handle missing indices
                'q55_district_id' => $q55_district_id[$i] ?? null,
                'q55_organizations_covered' => $q55_organizations_covered[$i] ?? null,
                'q55_number_events' => $q55_number_events[$i] ?? null,
                'q55_individuals_covered_men' => $q55_individuals_covered_men[$i] ?? null,
                'q55_individuals_covered_women' => $q55_individuals_covered_women[$i] ?? null,
                'q55_individuals_covered_third_gender' => $q55_individuals_covered_third_gender[$i] ?? null,
                'q55_individuals_covered_boy' => $q55_individuals_covered_boy[$i] ?? null,
                'q55_individuals_covered_girl' => $q55_individuals_covered_girl[$i] ?? null,
                'q55_individuals_covered_total' => $q55_individuals_covered_total[$i] ?? null,
                'q55_othe_specify' => $q55_othe_specify[$i] ?? null,
            ];
        }



        // Insert all data at once if there is data to insert
        if (!empty($bulkInsertData)) {
            FiftyFive::insert($bulkInsertData);
        }

        // question no 56

        $q56_type_of_meeting = $request->input('q56_type_of_meeting', []);
        $q56_union = $request->input('q56_union', []);
        $q56_upazila = $request->input('q56_upazila', []);
        $q56_district = $request->input('q56_district', []);
        $q56_total = $request->input('q56_total', []);


        $case_id = $question->id; // Ensure $question is defined and has an id property

        // Initialize an array to store all data sets to be inserted
        $bulkInsertData = [];

        $images = [];
        if ($request->hasFile('q56_upload_photo')) {
            foreach ($request->file('q56_upload_photo') as $index => $image) {
                $ext = $image->extension();
                $final_name = 'q56_upload_photo_' . time() . '_' . $index . '.' . $ext;
                $image->move(public_path('uploads/q56_upload_photo'), $final_name);
                $images[] = 'uploads/q56_upload_photo/' . $final_name;
            }
        }

        // Get the maximum count to ensure all arrays have data
        $maxCount = max(
            count($q56_type_of_meeting),
            count($q56_union),
            count($q56_upazila),
            count($q56_district),
            count($q56_total),
            count($images)
        );

        for ($i = 0; $i < $maxCount; $i++) {
            $bulkInsertData[] = [
                'case_id' => $case_id,
                'q56_type_of_meeting' => $q56_type_of_meeting[$i] ?? null, // Use null coalescing operator to handle missing indices
                'q56_union' => $q56_union[$i] ?? null,
                'q56_upazila' => $q56_upazila[$i] ?? null,
                'q56_district' => $q56_district[$i] ?? null,
                'q56_total' => $q56_total[$i] ?? null,
                'q56_upload_photo' => $images[$i] ?? null,

            ];
        }



        // Insert all data at once if there is data to insert
        if (!empty($bulkInsertData)) {
            FiftySix::insert($bulkInsertData);
        }

        // question no 57

        $research_title = $request->input('research_title', []);
        $q57_area_research = $request->input('q57_area_research', []);
        $q57_status_id = $request->input('q57_status_id', []);
        $q57_research_location_id = $request->input('q57_research_location_id', []);
        $case_id = $question->id; // Ensure $question is defined and has an id property

        // Initialize an array to store all data sets to be inserted
        $bulkInsertData = [];

        // Get the maximum count to ensure all arrays have data
        $maxCount = max(count($research_title), count($q57_area_research), count($q57_status_id), count($q57_research_location_id));

        for ($i = 0; $i < $maxCount; $i++) {
            $bulkInsertData[] = [
                'case_id' => $case_id,
                'research_title' => $research_title[$i] ?? null, // Use null coalescing operator to handle missing indices
                'q57_area_research' => $q57_area_research[$i] ?? null,
                'q57_status_id' => $q57_status_id[$i] ?? null,
                'q57_research_location_id' => $q57_research_location_id[$i] ?? null,

            ];
        }



        // Insert all data at once if there is data to insert
        if (!empty($bulkInsertData)) {
            FiftySeven::insert($bulkInsertData);
        }

        // fifty eight

        $case_id = $question->id;
        $question58 = new FiftyEight();
        $question58->case_id = $case_id;
        $question58->q58_bdt = $request->q58_bdt;
        $question58->q58_source = $request->q58_source;
        $question58->q58_assessment_allocation = $request->q58_assessment_allocation;
        // $question58->spent_research = $request->spent_research;
        $question58->others_total = $request->others_total;


        $question58->save();

        // fifty nine

        $case_id = $question->id;
        $question59 = new FiftyNine();
        $question59->case_id = $case_id;
        $question59->q59_one = $request->q59_one;
        $question59->q59_two = $request->q59_two;
        $question59->q59_three = $request->q59_three;
        $question59->q59_four = $request->q59_four;
        $question59->q59_five = $request->q59_five;
        $question59->q59_six = $request->q59_six;
        $question59->q59_seven = $request->q59_seven;
        $question59->q59_eight = $request->q59_eight;

        $question59->save();

        $case_id = $question->id;
        $question60 = new Sixty();
        $question60->case_id = $case_id;
        $question60->description_60 = $request->description_60;
        $question60->save();


  // DB::commit();
  //       return response()->json(['success' => true]);
  //   } catch (\Throwable $e) {
  //       DB::rollBack();
  //       return response()->json(['error' => $e->getMessage()], 500);
  //   }





        //Session Clear
        
        // Session::forget(['question1','question2','question3','question4','question5','question6','question7','question8','question9','question10','question11','question12','question13','question14','question15','question16','question17','question18','question19','question20','question21','question22','question23','question24','question25','question26','question27','question28','question29','question30','question31A','question31B','question32','question33','question34','question35','question36','question37','question38','question39','question40','question41','question42A','question42B','question42C','question43','question44','question45','question46','question47','question48','question49','question50','question51','question52','question53','question54','question55','question56','question57','question58','question59','question60']);

        $notification = array(
            'messege' => ' Question Added Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);


    }


    public function CaseDelete($id)
    {
        $case = CaseModel::find($id);
        $case->is_delete = 0;
        $case->save();
        $notification = array(
            'messege' => ' Case Delete Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('superadmin.case.list')->with($notification);


    }
    public function GettingQuestion60Data()
    {
        $question60 = json_decode(Session::get('question60'));
        $data = (isset($question60)) ? $question60 : null;
        return response()->json($data);

    }

    public function TempSaveQuestion(Request $request)
    {

        //Recieving data by array from text input
        $question_no = $request->input('question_no');
        if ($question_no == "1") {
            $q1_data = $request->input('question1');
            $question1_data = (isset($q1_data) && !empty($q1_data)) ? $q1_data : '';
            $request->session()->put('question1', json_encode($question1_data));
            return true;
        } else if ($question_no == "46") {
            $q_46_data = $request->input('question46');
            $question46_data = (isset($q_46_data) && !empty($q_46_data)) ? $q_46_data : [];
            //    echo (json_encode($question46_data));die();
            $request->session()->put('question46', json_encode($question46_data));
            return true;
        } else if ($question_no == "2") {
            $q2_data = $request->input('q2_data');
            $question2_data = (isset($q2_data) && !empty($q2_data)) ? $q2_data : '';
            $request->session()->put('question2', json_encode($question2_data));
            return true;
        } else if ($question_no == "3") {
            $q3_data = $request->input('question3');
            $question3_data = (isset($q3_data) && !empty($q3_data)) ? $q3_data : '';
            $request->session()->put('question3', json_encode($question3_data));
            return true;
        } else if ($question_no == "4") {
            $q4_data = $request->input('question4');
            $question4_data = (isset($q4_data) && !empty($q4_data)) ? $q4_data : '';
            $request->session()->put('question4', json_encode($question4_data));
            return true;
        } else if ($question_no == "5") {
            $q5_data = $request->input('question5');
            $question5_data = (isset($q5_data) && !empty($q5_data)) ? $q5_data : '';
            $request->session()->put('question5', json_encode($question5_data));
            return true;
        } else if ($question_no == "6") {
            $q6_data = $request->input('q6_data');
            $question6_data = (isset($q6_data) && !empty($q6_data)) ? $q6_data : '';
            $request->session()->put('question6', json_encode($question6_data));
            return true;
        } else if ($question_no == "7") {
            $q7_data = $request->input('q7_data');
            $question7_data = (isset($q7_data) && !empty($q7_data)) ? $q7_data : '';
            $request->session()->put('question7', json_encode($question7_data));
            return true;
        } else if ($question_no == "8") {
            $q8_data = $request->input('q8_data');
            $question8_data = (isset($q8_data) && !empty($q8_data)) ? $q8_data : '';

            $request->session()->put('question8', json_encode($question8_data));
            return true;
        } else if ($question_no == "9") {
            $q9_data = $request->input('question9');
            $question9_data = (isset($q9_data) && !empty($q9_data)) ? $q9_data : '';

            $request->session()->put('question9', json_encode($question9_data));
            return true;
        } else if ($question_no == "10") {
            $q10_data = $request->input('question10');
            //array object generating 
            $q10_new_data = (isset($q10_data) && !empty($q10_data)) ? $q10_data : [];
            $request->session()->put('question10', json_encode($q10_new_data));
            return true;
        } else if ($question_no == "11") {
            $q11_data = $request->input('question11');
            //array object generating 
            $q11_json_data = (isset($q11_data) && $q11_data != null) ? $q11_data : [];
            $request->session()->put('question11', json_encode($q11_json_data));
            return true;
        } else if ($question_no == "12") {
            $q12_data = $request->input('question12');
            //array object generating 
            $q12_new_data = (isset($q12_data) && !empty($q12_data)) ? $q12_data : [];
            $request->session()->put('question12', json_encode($q12_new_data));
            return true;
        } else if ($question_no == "13") {
            $q13_data = $request->input('question13');
            //array object generating 
            $q13_new_data = (isset($q13_data) && !empty($q13_data)) ? $q13_data : [];
            $request->session()->put('question13', json_encode($q13_new_data));
            return true;
        } else if ($question_no == "14") {
            $q14_data = $request->input('question14');
            //array object generating 
            $q14_new_data = (isset($q14_data) && !empty($q14_data)) ? $q14_data : [];
            $request->session()->put('question14', json_encode($q14_new_data));
            return true;
        } else if ($question_no == "15") {
            $q15_data = $request->input('question15');
            //array object generating 
            $q15_json_data = (isset($q15_data) && $q15_data != null) ? $q15_data : [];
            $request->session()->put('question15', json_encode($q15_json_data));
            return true;
        } else if ($question_no == "16") {
            $q16_data = $request->input('question16');
            //array object generating 
            $q16_json_data = (isset($q16_data) && $q16_data != null) ? $q16_data : [];
            $request->session()->put('question16', json_encode($q16_json_data));
            return true;
        } else if ($question_no == "17") {
            $q17_data = $request->input('question17');
            //array object generating 
            $q17_json_data = (isset($q17_data) && $q17_data != null) ? $q17_data : [];
            $request->session()->put('question17', json_encode($q17_json_data));
            return true;
        } else if ($question_no == "18") {
            $q18_data = $request->input('question18');
            //array object generating 
            $q18_json_data = (isset($q18_data) && $q18_data != null) ? $q18_data : [];
            $request->session()->put('question18', json_encode($q18_json_data));
            return true;
        } else if ($question_no == "19") {
            $q19_data = $request->input('question19');
            //array object generating 
            $q19_json_data = (isset($q19_data) && $q19_data != null) ? $q19_data : [];
            $request->session()->put('question19', json_encode($q19_json_data));
            return true;
        }

        return false;
    }

    public function TempSaveQuestion20To40(Request $request)
    {
        //Recieving data by array from text input
        $question_no = $request->input('question_no');
        if ($question_no == "29") {
            $q29_data = $request->input('q29_data');
            //array object generating 
            $q29_new_data = (isset($q29_data) && $q29_data != null) ? $q29_data : '';
            $request->session()->put('question29', json_encode($q29_new_data));
            return true;
        } else if ($question_no == "20") {
            $q20_data = $request->input('question20');
            //array object generating 
            $q20_json_data = (isset($q20_data) && $q20_data != null) ? $q20_data : [];
            $request->session()->put('question20', json_encode($q20_json_data));
            return true;
        }

        return false;
    }

    public function TempSaveQuestion40To60(Request $request)
    {
        //Recieving data by array from text input
        $question_no = $request->input('question_no');
        if ($question_no == "21") {
            $q21_data = $request->input('question21');
            //array object generating 
            $q21_json_data = (isset($q21_data) && $q21_data != null) ? $q21_data : [];
            $request->session()->put('question21', json_encode($q21_json_data));
            return true;
        } else if ($question_no == "22") {
            $q22_data = $request->input('question22');
            //array object generating 
            $q22_json_data = (isset($q22_data) && $q22_data != null) ? $q22_data : [];
            $request->session()->put('question22', json_encode($q22_json_data));
            return true;
        } else if ($question_no == "23") {
            $q23_data = $request->input('question23');
            //array object generating 
            $q23_json_data = (isset($q23_data) && $q23_data != null) ? $q23_data : [];
            $request->session()->put('question23', json_encode($q23_json_data));
            return true;
        } else if ($question_no == "24") {
            $q24_data = $request->input('question24');
            //array object generating 
            $q24_json_data = (isset($q24_data) && $q24_data != null) ? $q24_data : [];
            $request->session()->put('question24', json_encode($q24_json_data));
            return true;
        } else if ($question_no == "25") {
            $q25_data = $request->input('question25');
            //array object generating 
            $q25_json_data = (isset($q25_data) && $q25_data != null) ? $q25_data : [];
            $request->session()->put('question25', json_encode($q25_json_data));
            return true;
        } else if ($question_no == "26") {
            $q26_data = $request->input('question26');
            //array object generating 
            $q26_json_data = (isset($q26_data) && $q26_data != null) ? $q26_data : [];
            $request->session()->put('question26', json_encode($q26_json_data));
            return true;
        } else if ($question_no == "27") {
            $q27_data = $request->input('question27');
            //array object generating 
            $q27_json_data = (isset($q27_data) && $q27_data != null) ? $q27_data : [];
            $request->session()->put('question27', json_encode($q27_json_data));
            return true;
        } else if ($question_no == "28") {
            $q28_data = $request->input('question28');
            //array object generating 
            $q28_json_data = (isset($q28_data) && $q28_data != null) ? $q28_data : [];
            $request->session()->put('question28', json_encode($q28_json_data));
            return true;
        } else if ($question_no == "30") {
            $q30_data = $request->input('question30');
            //array object generating 
            $q30_json_data = (isset($q30_data) && $q30_data != null) ? $q30_data : [];
            $request->session()->put('question30', json_encode($q30_json_data));
            return true;
        } else if ($question_no == "31A") {
            $q31_data_one = $request->input('question31A');
            //array object generating 
            $q31_json_data_one = (isset($q31_data_one) && $q31_data_one != null) ? $q31_data_one : [];
            $request->session()->put('question31A', json_encode($q31_json_data_one));
            return true;
        } else if ($question_no == "31B") {
            $q31_data_two = $request->input('question31B');
            //array object generating 
            $q31_json_data_two = (isset($q31_data_two) && $q31_data_two != null) ? $q31_data_two : [];
            $request->session()->put('question31B', json_encode($q31_json_data_two));
            return true;
        } else if ($question_no == "32") {
            $q32_data = $request->input('question32');
            //array object generating 
            $q32_json_data = (isset($q32_data) && $q32_data != null) ? $q32_data : [];
            $request->session()->put('question32', json_encode($q32_json_data));
            return true;
        } else if ($question_no == "33") {
            $q33_data = $request->input('question33');
            //array object generating 
            $q33_json_data = (isset($q33_data) && $q33_data != null) ? $q33_data : [];
            $request->session()->put('question33', json_encode($q33_json_data));
            return true;
        } else if ($question_no == "34") {
            $q34_data = $request->input('question34');
            //array object generating 
            $q34_json_data = (isset($q34_data) && $q34_data != null) ? $q34_data : [];
            $request->session()->put('question34', json_encode($q34_json_data));
            return true;
        } else if ($question_no == "35") {
            $q35_data = $request->input('question35');
            //array object generating 
            $q35_json_data = (isset($q35_data) && $q35_data != null) ? $q35_data : [];
            $request->session()->put('question35', json_encode($q35_json_data));
            return true;
        } else if ($question_no == "36") {
            $q36_data = $request->input('question36');
            //array object generating 
            $q36_json_data = (isset($q36_data) && $q36_data != null) ? $q36_data : [];
            $request->session()->put('question36', json_encode($q36_json_data));
            return true;
        } else if ($question_no == "37") {
            $q37_data = $request->input('question37');
            //array object generating 
            $q37_json_data = (isset($q37_data) && $q37_data != null) ? $q37_data : [];
            $request->session()->put('question37', json_encode($q37_json_data));
            return true;
        } else if ($question_no == "38") {
            $q38_data = $request->input('question38');
            //array object generating 
            $q38_new_data = (isset($q38_data) && !empty($q38_data)) ? $q38_data : [];
            $request->session()->put('question38', json_encode($q38_new_data));
            return true;
        } else if ($question_no == "39") {
            $q39_data = $request->input('question39');
            //array object generating 
            $q39_json_data = (isset($q39_data) && $q39_data != null) ? $q39_data : [];
            $request->session()->put('question39', json_encode($q39_json_data));
            return true;
        } else if ($question_no == "40") {
            $q40_data = $request->input('question40');
            //array object generating 
            $q40_json_data = (isset($q40_data) && $q40_data != null) ? $q40_data : [];
            $request->session()->put('question40', json_encode($q40_json_data));
            return true;
        } else if ($question_no == "41") {
            $q41_data = $request->input('question41');
            //array object generating 
            $q41_new_data = (isset($q41_data) && !empty($q41_data)) ? $q41_data : [];
            $request->session()->put('question41', json_encode($q41_new_data));
            return true;
        } else if ($question_no == "42A") {
            $q42_data_one = $request->input('question42A');

            //array object generating 
            $q42_new_data_one = (isset($q42_data_one) && !empty($q42_data_one)) ? $q42_data_one : [];
            $request->session()->put('question42A', json_encode($q42_new_data_one));
            return true;
        } else if ($question_no == "42B") {
            $q42_data_two = $request->input('question42B');

            //array object generating 
            $q42_new_data_two = (isset($q42_data_two) && !empty($q42_data_two)) ? $q42_data_two : [];
            $request->session()->put('question42B', json_encode($q42_new_data_two));
            return true;
        } else if ($question_no == "42C") {
            $q42_data_three = $request->input('question42C');

            //array object generating 
            $q42_new_data_three = (isset($q42_data_three) && !empty($q42_data_three)) ? $q42_data_three : [];
            $request->session()->put('question42C', json_encode($q42_new_data_three));
            return true;
        } else if ($question_no == "43") {
            $q43_data = $request->input('question43');
            //array object generating 
            $q43_new_data = (isset($q43_data) && !empty($q43_data)) ? $q43_data : [];
            $request->session()->put('question43', json_encode($q43_new_data));
            return true;
        } else if ($question_no == "44") {
            $q44_data = $request->input('question44');
            //array object generating 
            $q44_new_data = (isset($q44_data) && !empty($q44_data)) ? $q44_data : [];
            $request->session()->put('question44', json_encode($q44_new_data));
            return true;
        } else if ($question_no == "45") {
            $q45_data = $request->input('question45');
            //array object generating 
            $q45_json_data = (isset($q45_data) && $q45_data != null) ? $q45_data : [];
            $request->session()->put('question45', json_encode($q45_json_data));
            return true;
        } else if ($question_no == "47") {
            $q47_data = $request->input('question47');
            //array object generating 
            $q47_new_data = (isset($q47_data) && !empty($q47_data)) ? $q47_data : [];
            $request->session()->put('question47', json_encode($q47_new_data));
            return true;
        } else if ($question_no == "48") {
            $q48_data = $request->input('question48');
            //array object generating 
            $q48_new_data = (isset($q48_data) && !empty($q48_data)) ? $q48_data : [];
            $request->session()->put('question48', json_encode($q48_new_data));
            return true;
        } else if ($question_no == "49") {
            $q49_data = $request->input('question49');
            //array object generating 
            $q49_new_data = (isset($q49_data) && !empty($q49_data)) ? $q49_data : [];
            $request->session()->put('question49', json_encode($q49_new_data));
            return true;
        } else if ($question_no == "53") {
            $q53_data = $request->input('question53');
            //array object generating 
            $q53_json_data = (isset($q53_data) && $q53_data != null) ? $q53_data : [];
            $request->session()->put('question53', json_encode($q53_json_data));
            return true;
        } else if ($question_no == "54") {
            $q54_data = $request->input('question54');
            //array object generating 
            $q54_json_data = (isset($q54_data) && $q54_data != null) ? $q54_data : [];
            $request->session()->put('question54', json_encode($q54_json_data));
            return true;
        } else if ($question_no == "55") {
            $q55_data = $request->input('question55');
            //array object generating 
            $q55_json_data = (isset($q55_data) && $q55_data != null) ? $q55_data : [];
            $request->session()->put('question55', json_encode($q55_json_data));
            return true;
        } else if ($question_no == "56") {
            $q56_data = $request->input('question56');
            //array object generating 
            $q56_json_data = (isset($q56_data) && $q56_data != null) ? $q56_data : [];
            $request->session()->put('question56', json_encode($q56_json_data));
            return true;
        } else if ($question_no == "59") {
            $q59_data = $request->input('q59_data');
            //array object generating 
            $q59_new_data = (isset($q59_data) && $q59_data != null) ? $q59_data : [];
            $request->session()->put('question59', json_encode($q59_new_data));
            return true;
        } else if ($question_no == "60") {
            $q60_data = $request->input('q60_data');
            //array object generating 
            $q60_new_data = (isset($q60_data) && $q60_data != null) ? $q60_data : [];
            $request->session()->put('question60', json_encode($q60_new_data));
            return true;
        } else if ($question_no == "58") {
            $q58_data = $request->input('q58_data');
            //array object generating 
            $q58_json_data = (isset($q58_data) && $q58_data != null) ? $q58_data : [];
            $request->session()->put('question58', json_encode($q58_json_data));
            return true;
        } else if ($question_no == "57") {
            $q57_data = $request->input('q57_data');
            //array object generating 
            $q57_json_data = (isset($q57_data) && $q57_data != null) ? $q57_data : [];
            $request->session()->put('question57', json_encode($q57_json_data));
            return true;
        } else if ($question_no == "60") {
            $q60_data = $request->input('q60_data');
            //array object generating 
            $q60_json_data = (isset($q60_data) && $q60_data != null) ? $q60_data : '';
            $request->session()->put('question60', json_encode($q60_json_data));
            return true;
        } else if ($question_no == "50") {
            $q50_data = $request->input('q50_data');
            $question50_data = (isset($q50_data) && !empty($q50_data)) ? $q50_data : '';
            $request->session()->put('question50', json_encode($question50_data));
            return true;
        } else if ($question_no == "51") {
            $q51_data = $request->input('q51_data');
            //array object generating 
            $q51_json_data = (isset($q51_data) && $q51_data != null) ? $q51_data : '';
            $request->session()->put('question51', json_encode($q51_json_data));
            return true;
        } else if ($question_no == "52") {
            $q52_data = $request->input('q52_data');
            //array object generating 
            $q52_json_data = (isset($q52_data) && $q52_data != null) ? $q52_data : '';
            $request->session()->put('question52', json_encode($q52_json_data));
            return true;
        }

        return false;
    }
}
