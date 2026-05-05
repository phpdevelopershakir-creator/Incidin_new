<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LangugeController;
use App\Http\Controllers\SuperAdmin\UserController;
use App\Http\Controllers\SuperAdmin\CaseController;
use App\Http\Controllers\SuperAdmin\RoleController;
use App\Http\Controllers\SuperAdmin\DistricController;
use App\Http\Controllers\SuperAdmin\UpzilaController;
use App\Http\Controllers\SuperAdmin\UnionController;
use App\Http\Controllers\SuperAdmin\DivisionController;
use App\Http\Controllers\SuperAdmin\MinistryController;
use App\Http\Controllers\SuperAdmin\AgencyController;
use App\Http\Controllers\SuperAdmin\CTGController;
use App\Http\Controllers\SuperAdmin\NgoController;
use App\Http\Controllers\SuperAdmin\IngoController;
use App\Http\Controllers\SuperAdmin\UNController;
use App\Http\Controllers\SuperAdmin\RegisterController;
use App\Http\Controllers\SuperAdmin\ProfileController;
use App\Http\Controllers\SuperAdmin\Pichart24Controller;
use App\Http\Controllers\SuperAdmin\Pichart9Controller;
use App\Http\Controllers\SuperAdmin\PiChart1Controller;
use App\Http\Controllers\SuperAdmin\Pichart18Controller;
use App\Http\Controllers\SuperAdmin\Pichart20Controller;
use App\Http\Controllers\SuperAdmin\Pichart25Controller;
use App\Http\Controllers\SuperAdmin\Pichart32Controller;
use App\Http\Controllers\SuperAdmin\Pichart33Controller;
use App\Http\Controllers\SuperAdmin\Pichart34Controller;
use App\Http\Controllers\SuperAdmin\Pichart44Controller;
use App\Http\Controllers\SuperAdmin\Pichart30Controller;
use App\Http\Controllers\SuperAdmin\Pichart54Controller;
use App\Http\Controllers\SuperAdmin\Pichart55Controller;
use App\Http\Controllers\SuperAdmin\Pichart53Controller;
use App\Http\Controllers\SuperAdmin\Pichart31Controller;
use App\Http\Controllers\SuperAdmin\Pichart36Controller;
use App\Http\Controllers\SuperAdmin\Pichart37Controller;
use App\Http\Controllers\SuperAdmin\Pichart40Controller;
use App\Http\Controllers\SuperAdmin\Pichart49Controller;
use App\Http\Controllers\SuperAdmin\Pichart42Controller;
use App\Http\Controllers\SuperAdmin\ReportController;
use App\Http\Controllers\SuperAdmin\QuestionTitleController;
use App\Http\Controllers\SuperAdmin\BannerController;
use App\Http\Controllers\SuperAdmin\FagController;
use App\Http\Controllers\ReportSummary;
use App\Http\Controllers\TwoFactorController;

use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/send-test-mail', function () {
    $details = [
        'message' => 'This is a test email from Laravel 10 via cPanel SMTP.'
    ];

    try {
        Mail::to('phpdeveloper.shakir@gmail.com')->send(new TestMail($details));
        return 'Email sent successfully!';
    } catch (\Exception $e) {
        return ' Failed: ' . $e->getMessage();
    }
});

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('/welcome');
});


// Route::get('language/bangla','BlogController@Bangla')->name('language.bangla');
// Route::get('language/english','BlogController@English')->name('language.english');

Route::get('language/bangla', [LangugeController::class, 'Bangla'])->name('language.bangla');
Route::get('language/english', [LangugeController::class, 'English'])->name('language.english');

Route::group(['middleware' => 'auth'], function () {
    Route::get('two-factor', [TwoFactorController::class, 'index'])->name('two-factor.index');
    Route::post('two-factor', [TwoFactorController::class, 'verify'])->name('two.factor.verify');
});


Route::get('/login', [AuthController::class, 'Login'])->name('login');
Route::post('login/store', [AuthController::class, 'Loginstore'])->name('login.store');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [AuthController::class, 'ForgotPassword'])->name('forgot-password');
Route::post('/forgot-password-store', [AuthController::class, 'ForgotPasswordStore'])->name('forgot-password-store');
Route::get('superadmin/reset/password/{token}', [AuthController::class, 'ResetPassword'])->name('superadmin.reset.password');
Route::post('superadmin/reset/password/{token}', [AuthController::class, 'ResetPasswordStore']);


//superadmin route
Route::group(['middleware' => 'auth', '2fa'], function () {
    Route::get('superadmin/dashboard', [DashboardController::class, 'dashboard'])->name('superadmin.dashboard');
    Route::get('superadmin/dashboardquestion', [DashboardController::class, 'dashboardquestion'])->name('superadmin.dashboardquestion');

    Route::get('superadmin/user/list', [UserController::class, 'list'])->name('superadmin.user.list');
    Route::get('superadmin/user/create', [UserController::class, 'add'])->name('superadmin.user.create');
    Route::post('superadmin/user/store', [UserController::class, 'store'])->name('superadmin.user.store');
    Route::get('superadmin/user/edit/{id}', [UserController::class, 'edit'])->name('superadmin.user.edit');
    Route::post('superadmin/user/edit/{id}', [UserController::class, 'update'])->name('superadmin.user.edit');
    Route::get('superadmin/user/delete/{id}', [UserController::class, 'Delete'])->name('superadmin.user.delete');



    //profile update

    Route::get('superadmin/profile/change', [ProfileController::class, 'ChangeProfile'])->name('superadmin.profile.change');
    Route::post('superadmin/profile/change', [ProfileController::class, 'UpdateProfile'])->name('superadmin.profile.change');

    Route::get('superadmin/change/password', [ProfileController::class, 'ChangePassword'])->name('superadmin.chage.password');
    Route::post('superadmin/change/password', [ProfileController::class, 'UpdatePassword'])->name('superadmin.chage.password');
    //ministry route


    Route::get('superadmin/ministry/list', [MinistryController::class, 'Ministries'])->name('superadmin.ministry.list');
    Route::get('superadmin/ministry/create', [MinistryController::class, 'MinistryAdd'])->name('superadmin.ministry.create');
    Route::post('superadmin/ministry/store', [MinistryController::class, 'MinistryStore'])->name('superadmin.ministry.store');
    Route::get('superadmin/ministry/edit/{id}', [MinistryController::class, 'MinistryEdit'])->name('superadmin.ministry.edit');
    Route::post('superadmin/ministry/edit/{id}', [MinistryController::class, 'MinistryUpdate']);
    Route::post('ministry/profile', [MinistryController::class, 'MinistryProfile']);
    Route::get('superadmin/ministry/delete/{id}', [MinistryController::class, 'delete'])->name('superadmin.ministry.delete');

    //agency route
    Route::get('superadmin/agency/list', [AgencyController::class, 'Agencies'])->name('superadmin.agency.list');
    Route::get('superadmin/agency/create', [AgencyController::class, 'AgencyAdd'])->name('superadmin.agency.create');
    Route::post('superadmin/agency/store', [AgencyController::class, 'AgencyStore'])->name('superadmin.agency.store');
    Route::get('superadmin/agency/edit/{id}', [AgencyController::class, 'AgencyEdit'])->name('superadmin.agency.edit');
    Route::post('superadmin/agency/edit/{id}', [AgencyController::class, 'AgencyUpdate'])->name('superadmin.agency.edit');
    Route::post('agency/profile', [AgencyController::class, 'AgencyProfile']);
    Route::get('superadmin/agency/delete/{id}', [AgencyController::class, 'AgencyDelete'])->name('superadmin.agency.delete');

    //agencymoib  route
    Route::get('superadmin/agencymoib/list', [AgencyController::class, 'AgencyMoi'])->name('superadmin.agencymoib.list');
    Route::get('superadmin/agencymoib/create', [AgencyController::class, 'AgencyMoibAdd'])->name('superadmin.agencymoib.create');
    Route::post('superadmin/agencymoib/store', [AgencyController::class, 'AgencyMoiStore'])->name('superadmin.agencymoib.store');
    Route::get('superadmin/agencymoib/edit/{id}', [AgencyController::class, 'AgencyMoibEdit'])->name('superadmin.agencymoib.edit');
    Route::post('superadmin/agencymoib/edit/{id}', [AgencyController::class, 'AgencyMoibUpdate']);
    Route::post('agencymoib/profile', [AgencyController::class, 'AgencymoibProfile']);
    Route::get('superadmin/agencymoib/delete/{id}', [AgencyController::class, 'AgencyMoibDelete'])->name('superadmin.agencymoib.delete');
    //ctc  route
    Route::get('superadmin/ctc/list', [CTGController::class, 'CTGies'])->name('superadmin.ctc.list');
    Route::get('superadmin/ctc/create', [CTGController::class, 'CTGAdd'])->name('superadmin.ctc.create');
    Route::post('superadmin/ctc/store', [CTGController::class, 'CTGStore'])->name('superadmin.ctc.store');
    Route::get('superadmin/ctc/edit/{id}', [CTGController::class, 'CTGEdit'])->name('superadmin.ctc.edit');
    Route::post('superadmin/ctc/edit/{id}', [CTGController::class, 'CTGUpdate']);
    Route::post('ctc/profile', [CTGController::class, 'CTCProfile']);
    Route::get('superadmin/ctc/delete/{id}', [CTGController::class, 'CTGDelete'])->name('superadmin.ctc.delete');

    //ngo
    Route::get('superadmin/ngo/list', [NgoController::class, 'ngos'])->name('superadmin.ngo.list');
    Route::get('superadmin/ngo/create', [NgoController::class, 'NGOAdd'])->name('superadmin.ngo.create');
    Route::post('superadmin/ngo/store', [NgoController::class, 'NGOStore'])->name('superadmin.ngo.store');
    Route::get('superadmin/ngo/edit/{id}', [NgoController::class, 'NGOEdit'])->name('superadmin.ngo.edit');
    Route::post('superadmin/ngo/edit/{id}', [NgoController::class, 'NGOUpdate'])->name('superadmin.ngo.edit');
    Route::post('ngo/profile', [NgoController::class, 'NGOrofile']);
    Route::get('superadmin/ngo/delete/{id}', [NgoController::class, 'NGODelete'])->name('superadmin.ngo.delete');


    //INGO

    Route::get('superadmin/ingo/list', [IngoController::class, 'ingos'])->name('superadmin.ingo.list');
    Route::get('superadmin/ingo/create', [IngoController::class, 'INGOAdd'])->name('superadmin.ingo.create');
    Route::post('superadmin/ingo/store', [IngoController::class, 'INGOStore'])->name('superadmin.ingo.store');
    Route::get('superadmin/ingo/edit/{id}', [IngoController::class, 'INGOEdit'])->name('superadmin.ingo.edit');
    Route::post('superadmin/ingo/edit/{id}', [IngoController::class, 'INGOUpdate'])->name('superadmin.ingo.edit');
    Route::post('ingo/profile', [IngoController::class, 'INGOrofile']);
    Route::get('superadmin/ingo/delete/{id}', [IngoController::class, 'INGODelete'])->name('superadmin.ingo.delete');

    //UN
    Route::get('superadmin/un/list', [UNController::class, 'index'])->name('superadmin.un.list');
    Route::get('superadmin/un/create', [UNController::class, 'create'])->name('superadmin.un.create');
    Route::post('superadmin/un/store', [UNController::class, 'store'])->name('superadmin.un.store');
    Route::get('superadmin/un/edit/{id}', [UNController::class, 'edit'])->name('superadmin.un.edit');
    Route::post('superadmin/un/edit/{id}', [UNController::class, 'update'])->name('superadmin.un.edit');
    Route::post('un/profile', [UNController::class, 'UNProfile']);
    Route::get('superadmin/un/delete/{id}', [UNController::class, 'delete'])->name('superadmin.un.delete');


    Route::get('get/division/{division_id}', [CTGController::class, 'GetDivision']);
    Route::get('get/upazila/{upazilla_id}', [CTGController::class, 'GetUpazila']);





    //role and permission

    Route::get('superadmin/all/permission', [RoleController::class, 'AllPermission'])->name('superadmin.all.permission');
    Route::get('superadmin/add/permission', [RoleController::class, 'Create'])->name('superadmin.add.permission');
    Route::post('superadmin/store/permission', [RoleController::class, 'StorePermission'])->name('superadmin.store.permission');
    Route::get('superadmin/edit/permission/{id}', [RoleController::class, 'edit'])->name('superadmin.edit.permission');
    Route::post('superadmin/update/permission/{id}', [RoleController::class, 'update'])->name('superadmin.update.permission');
    Route::get('superadmin/delete/permission/{id}', [RoleController::class, 'delete'])->name('superadmin.delete.permission');



    Route::get('superadmin/all/role', [RoleController::class, 'AllRole'])->name('superadmin.all.role');
    Route::get('superadmin/add/role', [RoleController::class, 'RoleCreate'])->name('superadmin.add.role');
    Route::post('superadmin/store/role', [RoleController::class, 'StoreRole'])->name('superadmin.store.role');
    Route::get('superadmin/edit/role/{id}', [RoleController::class, 'editrole'])->name('superadmin.edit.role');
    Route::post('superadmin/update/role/{id}', [RoleController::class, 'updaterole'])->name('superadmin.update.role');
    Route::get('superadmin/delete/role/{id}', [RoleController::class, 'deleterole'])->name('superadmin.delete.role');

    Route::get('superadmin/all/role/permission', [RoleController::class, 'AllRolePermission'])->name('superadmin.all.role.permission');
    Route::get('superadmin/add/role/permission', [RoleController::class, 'RolePermissionCreate'])->name('superadmin.add.role.permission');
    Route::post('superadmin/store/role/permission', [RoleController::class, 'StoreRolePermission'])->name('superadmin.store.role.permission');
    Route::get('superadmin/edit/role/permission/{id}', [RoleController::class, 'editrolepermission'])->name('superadmin.edit.role.permission');
    Route::post('superadmin/update/role/permission/{id}', [RoleController::class, 'updaterolepermission'])->name('superadmin.update.role.permission');
    Route::get('superadmin/delete/role/permission/{id}', [RoleController::class, 'deleterolepermission'])->name('superadmin.delete.role.permission');


    //division
    Route::get('superadmin/all/division', [DivisionController::class, 'All'])->name('superadmin.all.division');
    Route::get('superadmin/add/division', [DivisionController::class, 'Create'])->name('superadmin.add.division');
    Route::post('superadmin/store/division', [DivisionController::class, 'Store'])->name('superadmin.store.division');
    Route::get('superadmin/division/edit/{id}', [DivisionController::class, 'edit'])->name('superadmin.division.edit');
    Route::post('superadmin/update/division/{id}', [DivisionController::class, 'update'])->name('superadmin.update.division');
    Route::get('superadmin/division/delete/{id}', [DivisionController::class, 'delete'])->name('superadmin.division.delete');


    //Districts

    Route::get('superadmin/all/district', [DistricController::class, 'All'])->name('superadmin.all.district');
    Route::get('superadmin/add/district', [DistricController::class, 'Create'])->name('superadmin.add.district');
    Route::post('superadmin/store/district', [DistricController::class, 'Store'])->name('superadmin.store.district');
    Route::get('superadmin/edit/district/{id}', [DistricController::class, 'edit'])->name('superadmin.edit.district');
    Route::post('superadmin/update/district/{id}', [DistricController::class, 'update'])->name('superadmin.update.district');
    Route::get('superadmin/delete/district/{id}', [DistricController::class, 'delete'])->name('superadmin.delete.district');

    //upazila

    Route::get('superadmin/all/upazila', [UpzilaController::class, 'All'])->name('superadmin.all.upazila');
    Route::get('superadmin/add/upazila', [UpzilaController::class, 'Create'])->name('superadmin.add.upazila');
    Route::post('superadmin/store/upazila', [UpzilaController::class, 'Store'])->name('superadmin.store.upazila');
    Route::get('superadmin/edit/upazila/{id}', [UpzilaController::class, 'edit'])->name('superadmin.edit.upazila');
    Route::post('superadmin/update/upazila/{id}', [UpzilaController::class, 'update'])->name('superadmin.update.upazila');
    Route::get('superadmin/delete/upazila/{id}', [UpzilaController::class, 'delete'])->name('superadmin.delete.upazila');


    //union
    Route::get('superadmin/all/union', [UnionController::class, 'All'])->name('superadmin.all.union');
    Route::get('superadmin/add/union', [UnionController::class, 'Create'])->name('superadmin.add.union');
    Route::post('superadmin/store/union', [UnionController::class, 'Store'])->name('superadmin.store.union');
    Route::get('superadmin/edit/union/{id}', [UnionController::class, 'edit'])->name('superadmin.edit.union');
    Route::post('superadmin/update/union/{id}', [UnionController::class, 'update'])->name('superadmin.update.union');
    Route::get('superadmin/delete/union/{id}', [UnionController::class, 'delete'])->name('superadmin.delete.union');

    //get upzila
    Route::get('get/upzila/{distric_id}', [UnionController::class, 'GetDis']);
    Route::get('/distric/upzila/union/{upzila_id}', [UnionController::class, 'GetUpzila']);

    //question store

    Route::get('superadmin/all/question', [QuestionTitleController::class, 'All'])->name('superadmin.all.question');
    Route::get('superadmin/add/question', [QuestionTitleController::class, 'Create'])->name('superadmin.add.question');
    Route::post('superadmin/store/question', [QuestionTitleController::class, 'Store'])->name('superadmin.store.question');
    Route::get('superadmin/edit/question/{id}', [QuestionTitleController::class, 'edit'])->name('superadmin.edit.question');
    Route::post('superadmin/update/question/{id}', [QuestionTitleController::class, 'update'])->name('superadmin.update.question');

    Route::get('superadmin/delete/question/{id}', [QuestionTitleController::class, 'delete'])->name('superadmin.delete.question');
    Route::get('superadmin/question/summary', [QuestionTitleController::class, 'QuestionSummary'])->name('superadmin.question.summary');

    Route::get('/question-title/status/{id}', [QuestionTitleController::class, 'status'])->name('question-title.status');



    //super admin case list
    Route::get('superadmin/case/superadmin', [CaseController::class, 'listSuperAdmin'])->name('superadmin.case.superadmin');

    //case route
    Route::get('superadmin/case/create', [CaseController::class, 'create'])->name('superadmin.case.create');
    Route::post('superadmin/case/store', [CaseController::class, 'Store'])->name('superadmin.case.store');
    Route::get('superadmin/case/list', [CaseController::class, 'ListCase'])->name('superadmin.case.list');
    Route::get('superadmin/view/case/{id}', [CaseController::class, 'View'])->name('superadmin.view.case');
    Route::get('superadmin/case/invoice/{id}', [CaseController::class, 'generateInvoice'])->name('superadmin.case.invoice');


    Route::get('superadmin/report/', [CaseController::class, 'Report'])->name('superadmin.report');
    Route::get('superadmin/case/csv/{id}', [CaseController::class, 'generateCSV'])->name('superadmin.case.csv');
    Route::get('superadmin/case/delete/{id}', [CaseController::class, 'CaseDelete'])->name('superadmin.case.delete');
    Route::get('superadmin/user/wish/{id}', [CaseController::class, 'userwish'])->name('superadmin.user.wish');
    Route::get('superadmin/user/casewish/{id}', [CaseController::class, 'usercasewish'])->name('superadmin.user.casewish');
    Route::get('superadmin/view/test/{id}', [CaseController::class, 'Test'])->name('superadmin.view.test');
    Route::get('superadmin/view/rolebase/{id}', [CaseController::class, 'Rolebase'])->name('superadmin.view.rolebase');

    Route::post('superadmin/case/temp-save-question', [CaseController::class, 'TempSaveQuestion'])->name('superadmin.case.temp-save-question');
    Route::post('superadmin/case/temp-save-question40to60', [CaseController::class, 'TempSaveQuestion40To60'])->name('superadmin.case.temp-save-question40to60');
    Route::post('superadmin/case/temp-save-question20to40', [CaseController::class, 'TempSaveQuestion20To40'])->name('superadmin.case.temp-save-question20to40');
    Route::get('superadmin/case/get-temp-60-Question/', [CaseController::class, 'GettingQuestion60Data'])->name('superadmin.case.get-temp-60-Question');
    Route::get('superadmin/reports/', [ReportController::class, 'Reports'])->name('superadmin.reports');
    Route::get('/superadmin/reports/search', [ReportController::class, 'searchByDateRange']);
    Route::get('/superadmin/reports/pdf', [ReportController::class, 'PdfDateRange']);
    Route::get('/superadmin/reports/summary_report', [ReportSummary::class, 'summary_report_view'])->name('summary_report_view');
    Route::get('/superadmin/reports/summary_report_pdf', [ReportSummary::class, 'summary_report_download'])->name('summary_report_pdf');;

    Route::get('/superadmin/print/report', [ReportSummary::class, 'print_report_view'])->name('print_report_view');

    //banner route
    Route::get('/superadmin/banners', [BannerController::class, 'banner_add'])->name('superadmin.banners');
    Route::post('/superadmin/banner/store', [BannerController::class, 'banner_store'])->name('superadmin.banner.store');
    Route::get('listed/ministry/agency', [DashboardController::class, 'ListMinistryAgency'])->name('listed.ministry.agency');




    Route::get('superadmin/all/faq', [FagController::class, 'All'])->name('superadmin.all.faq');
    Route::get('superadmin/add/faq', [FagController::class, 'Create'])->name('superadmin.add.faq');
    Route::post('superadmin/store/faq', [FagController::class, 'Store'])->name('superadmin.store.faq');
    Route::get('superadmin/edit/faq/{id}', [FagController::class, 'edit'])->name('superadmin.edit.faq');
    Route::post('superadmin/update/faq/{id}', [FagController::class, 'update'])->name('superadmin.update.faq');
    Route::get('superadmin/delete/faq/{id}', [FagController::class, 'delete'])->name('superadmin.delete.faq');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('q1-pdf-view', [DashboardController::class, 'q1_generate_pdf']);
    Route::get('q2-pdf-view', [DashboardController::class, 'q2_generate_pdf']);
    Route::get('q21-pdf-view', [DashboardController::class, 'q21_generate_pdf']);
    Route::get('q22-pdf-view', [DashboardController::class, 'q22_generate_pdf']);

    Route::get('shakir24', [Pichart24Controller::class, 'shakir24']);
    Route::get('pichart24', [Pichart24Controller::class, 'pichart24']);
    Route::get('pichartadult', [Pichart24Controller::class, 'pichartadult']);


    Route::get('distribution_participants', [Pichart9Controller::class, 'distribution_participants']);
    Route::get('pichart9', [Pichart9Controller::class, 'pichart9']);
    Route::get('q9datatotalparticipant', [Pichart9Controller::class, 'Q9DataTotalParticipant']);
    Route::post('/q9-pdf-view', [Pichart9Controller::class, 'q9_generate_pdf']);

    Route::get('pichart1', [PiChart1Controller::class, 'pichartone']);
    Route::get('referred', [Pichart24Controller::class, 'reffered_all_actor']);
    Route::get('q24-pdf-view', [Pichart24Controller::class, 'q24_generate_pdf']);

    Route::get('adult18', [Pichart18Controller::class, 'adult18']);
    Route::get('participants', [Pichart18Controller::class, 'participants']);
    Route::get('q18-pdf-view', [Pichart18Controller::class, 'q18_generate_pdf']);

    Route::get('adult44', [Pichart44Controller::class, 'adult44']);
    Route::get('participants44', [Pichart44Controller::class, 'participants44']);
    Route::get('q44-pdf-view', [Pichart44Controller::class, 'q44_generate_pdf']);


    Route::get('adult20', [Pichart20Controller::class, 'adult20']);
    Route::get('participants20', [Pichart20Controller::class, 'participants20']);
    Route::get('q20-pdf-view', [Pichart20Controller::class, 'q20_generate_pdf']);

    Route::get('adult25', [Pichart25Controller::class, 'adult25']);
    Route::get('participants25', [Pichart25Controller::class, 'participants25']);
    Route::get('q25-pdf-view', [Pichart25Controller::class, 'q25_generate_pdf']);

    Route::get('adult32', [Pichart32Controller::class, 'adult32']);
    Route::get('participants32', [Pichart32Controller::class, 'participants32']);
    Route::get('q32-pdf-view', [Pichart32Controller::class, 'q32_generate_pdf']);


    Route::get('adult33', [Pichart33Controller::class, 'adult33']);
    Route::get('participants33', [Pichart33Controller::class, 'participants33']);
    Route::get('q33-pdf-view', [Pichart33Controller::class, 'q33_generate_pdf']);


    Route::get('adult34', [Pichart34Controller::class, 'adult34']);
    Route::get('participants34', [Pichart34Controller::class, 'participants34']);
    Route::get('q34-pdf-view', [Pichart34Controller::class, 'q34_generate_pdf']);

    Route::get('adult44', [Pichart44Controller::class, 'adult44']);
    Route::get('participants44', [Pichart44Controller::class, 'participants44']);

    Route::get('adult30', [Pichart30Controller::class, 'adult30']);
    Route::get('participants30', [Pichart30Controller::class, 'participants30']);
    Route::get('q30-pdf-view', [Pichart30Controller::class, 'q30_generate_pdf']);

    Route::get('agencies_judiciary_question54', [Pichart54Controller::class, 'agencies_judiciary_question54']);
    Route::get('participants54', [Pichart54Controller::class, 'participants54']);
    Route::get('q54-pdf-view', [Pichart54Controller::class, 'q54_generate_pdf']);

    Route::get('chart', [DashboardController::class, 'chart'])->name('chart');

    Route::get('adult55', [Pichart55Controller::class, 'adult55']);
    Route::get('participants55', [Pichart55Controller::class, 'participants55']);
    Route::get('q55-pdf-view', [Pichart55Controller::class, 'q55_generate_pdf']);

    Route::get('adult53', [Pichart53Controller::class, 'adult53']);
    Route::get('participants53', [Pichart53Controller::class, 'participants53']);
    Route::get('q53-pdf-view', [Pichart53Controller::class, 'q53_generate_pdf']);

    Route::get('adult31', [Pichart31Controller::class, 'adult31']);
    Route::get('participants31', [Pichart31Controller::class, 'participants31']);
    Route::get('q31-pdf-view', [Pichart31Controller::class, 'q31_generate_pdf']);


    Route::get('adult36', [Pichart36Controller::class, 'adult36']);
    Route::get('participants36', [Pichart36Controller::class, 'participants36']);
    Route::get('q36-pdf-view', [Pichart36Controller::class, 'q36_generate_pdf']);

    Route::get('adult37', [Pichart37Controller::class, 'adult37']);
    Route::get('participants37', [Pichart37Controller::class, 'participants37']);
    Route::get('q37-pdf-view', [Pichart37Controller::class, 'q37_generate_pdf']);

    Route::get('adult40', [Pichart40Controller::class, 'adult40']);
    Route::get('participants40', [Pichart40Controller::class, 'participants40']);
    Route::get('q40-pdf-view', [Pichart40Controller::class, 'q40_generate_pdf']);

    Route::get('adult49', [Pichart49Controller::class, 'adult49']);
    Route::get('participants49', [Pichart49Controller::class, 'participants49']);
    Route::get('q49-pdf-view', [Pichart49Controller::class, 'q49_generate_pdf']);

    Route::get('adult42', [Pichart42Controller::class, 'adult42']);
    Route::get('participants42', [Pichart42Controller::class, 'participants42']);
    Route::get('q42-pdf-view', [Pichart42Controller::class, 'q42_generate_pdf']);
});




// //admin route
// Route::group(['middleware'=>'admin'],function(){
//     Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
// });
// //user route
// Route::group(['middleware'=>'user'],function(){
//     Route::get('user/dashboard', [DashboardController::class, 'dashboard'])->name('user.dashboard');

// });

//Clear Cache facade value:
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});


//Clear Route cache:
Route::get('/route-clear', function () {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function () {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function () {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});

Route::get('/config-clear', function () {
    $exitCode = Artisan::call('config:clear');
    return '<h1>Config cache cleared</h1>';
});
