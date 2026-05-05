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
use App\Http\Controllers\SuperAdmin\PiChart24Controller;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return redirect('/login');
});


// Route::get('language/bangla','BlogController@Bangla')->name('language.bangla');
// Route::get('language/english','BlogController@English')->name('language.english');

Route::get('language/bangla', [LangugeController::class, 'Bangla'])->name('language.bangla');
Route::get('language/english', [LangugeController::class, 'English'])->name('language.english');



Route::get('/login', [AuthController::class, 'Login'])->name('login');
Route::post('login/store', [AuthController::class, 'Loginstore'])->name('login.store');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [AuthController::class, 'ForgotPassword'])->name('forgot-password');
Route::post('/forgot-password-store', [AuthController::class, 'ForgotPasswordStore'])->name('forgot-password-store');
Route::get('superadmin/reset/password/{token}', [AuthController::class, 'ResetPassword'])->name('superadmin.reset.password');
Route::post('superadmin/reset/password/{token}', [AuthController::class, 'ResetPasswordStore']);


//superadmin route
Route::group(['middleware'=>'auth'],function(){
    Route::get('superadmin/dashboard', [DashboardController::class, 'dashboard'])->name('superadmin.dashboard');

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
    Route::get('superadmin/edit/division/{id}', [DivisionController::class, 'edit'])->name('superadmin.edit.division');
    Route::post('superadmin/update/division/{id}', [DivisionController::class, 'update'])->name('superadmin.update.division');
    Route::get('superadmin/delete/division/{id}', [DivisionController::class, 'delete'])->name('superadmin.delete.division');


//distric

    Route::get('superadmin/all/distric', [DistricController::class, 'All'])->name('superadmin.all.distric');
    Route::get('superadmin/add/distric', [DistricController::class, 'Create'])->name('superadmin.add.distric');
    Route::post('superadmin/store/distric', [DistricController::class, 'Store'])->name('superadmin.store.distric');
    Route::get('superadmin/edit/distric/{id}', [DistricController::class, 'edit'])->name('superadmin.edit.distric');
    Route::post('superadmin/update/distric/{id}', [DistricController::class, 'update'])->name('superadmin.update.distric');
    Route::get('superadmin/delete/distric/{id}', [DistricController::class, 'delete'])->name('superadmin.delete.distric');

    //upzila

    Route::get('superadmin/all/upzila', [UpzilaController::class, 'All'])->name('superadmin.all.upzila');
    Route::get('superadmin/add/upzila', [UpzilaController::class, 'Create'])->name('superadmin.add.upzila');
    Route::post('superadmin/store/upzila', [UpzilaController::class, 'Store'])->name('superadmin.store.upzila');
    Route::get('superadmin/edit/upzila/{id}', [UpzilaController::class, 'edit'])->name('superadmin.edit.upzila');
    Route::post('superadmin/update/upzila/{id}', [UpzilaController::class, 'update'])->name('superadmin.update.upzila');
    Route::get('superadmin/delete/upzila/{id}', [UpzilaController::class, 'delete'])->name('superadmin.delete.upzila');

    Route::get('superadmin/all/union', [UnionController::class, 'All'])->name('superadmin.all.union');
    Route::get('superadmin/add/union', [UnionController::class, 'Create'])->name('superadmin.add.union');
    Route::post('superadmin/store/union', [UnionController::class, 'Store'])->name('superadmin.store.union');
    Route::get('superadmin/edit/union/{id}', [UnionController::class, 'edit'])->name('superadmin.edit.union');
    Route::post('superadmin/update/union/{id}', [UnionController::class, 'update'])->name('superadmin.update.union');
    Route::get('superadmin/delete/union/{id}', [UnionController::class, 'delete'])->name('superadmin.delete.union');

//get upzila
    Route::get('get/upzila/{distric_id}', [UnionController::class, 'GetDis']);
    Route::get('/distric/upzila/union/{upzila_id}', [UnionController::class, 'GetUpzila']);
   



    //case route
    Route::get('superadmin/case/create', [CaseController::class, 'add'])->name('superadmin.case.create');
    Route::post('superadmin/case/store', [CaseController::class, 'Store'])->name('superadmin.case.store');
    Route::get('superadmin/case/list', [CaseController::class, 'ListCase'])->name('superadmin.case.list');
    Route::get('superadmin/view/case/{id}', [CaseController::class, 'View'])->name('superadmin.view.case');
    Route::get('superadmin/case/invoice/{id}', [CaseController::class, 'generateInvoice'])->name('superadmin.case.invoice');
    Route::get('superadmin/case/', [CaseController::class, 'ListCase'])->name('superadmin.case.list');

    Route::get('superadmin/report/', [CaseController::class, 'Report'])->name('superadmin.report');
    Route::get('superadmin/case/csv/{id}', [CaseController::class, 'generateCSV'])->name('superadmin.case.csv');
    Route::get('superadmin/case/delete/{id}', [CaseController::class, 'CaseDelete'])->name('superadmin.case.delete');
});

Route::group(['middleware'=>'auth'],function(){
Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('shakir24', [PiChart24Controller::class, 'shakir24']);
Route::get('pichart24', [PiChart24Controller::class, 'pichart24']);
Route::get('pichartadult', [PiChart24Controller::class, 'pichartadult']);


Route::get('distribution_participants', [Pichart9Controller::class, 'distribution_participants']);
Route::get('pichart9', [Pichart9Controller::class, 'pichart9']);
Route::get('q9datatotalparticipant', [Pichart9Controller::class, 'Q9DataTotalParticipant']);
Route::get('pichart1', [PiChart1Controller::class, 'pichartone']);
Route::get('referred', [PiChart24Controller::class, 'reffered_all_actor']);
Route::get('adult18', [Pichart18Controller::class, 'adult18']);
Route::get('participants', [Pichart18Controller::class, 'participants']);
Route::get('adult44', [Pichart44Controller::class, 'adult44']);
Route::get('participants44', [Pichart44Controller::class, 'participants44']);

Route::get('adult20', [Pichart20Controller::class, 'adult20']);
Route::get('participants20', [Pichart20Controller::class, 'participants20']);

Route::get('adult25', [Pichart25Controller::class, 'adult25']);
Route::get('participants25', [Pichart25Controller::class, 'participants25']);

Route::get('adult32', [Pichart32Controller::class, 'adult32']);
Route::get('participants32', [Pichart32Controller::class, 'participants32']);

Route::get('adult33', [Pichart33Controller::class, 'adult33']);
Route::get('participants33', [Pichart33Controller::class, 'participants33']);

Route::get('adult34', [Pichart34Controller::class, 'adult34']);
Route::get('participants34', [Pichart34Controller::class, 'participants34']);

Route::get('adult44', [Pichart44Controller::class, 'adult44']);
Route::get('participants44', [Pichart44Controller::class, 'participants44']);

Route::get('adult30', [Pichart30Controller::class, 'adult30']);
Route::get('participants30', [Pichart30Controller::class, 'participants30']);

Route::get('adult54', [Pichart54Controller::class, 'adult54']);
Route::get('participants54', [Pichart54Controller::class, 'participants54']);



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
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:


//Route cache:


//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});