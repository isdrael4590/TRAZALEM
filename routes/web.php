<?php

use App\Http\Controllers\testbowieController;
use Illuminate\Support\Facades\Route;

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

/** for side bar menu active */
function set_active($route) {
    if (is_array($route )){
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('home');
    });
    Route::get('home',function()
    {
        return view('home');
    });
});

Auth::routes();

Route::group(['namespace' => 'App\Http\Controllers\Auth'],function()
{
    // -----------------------------login----------------------------------------//
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'authenticate');
        Route::get('/logout', 'logout')->name('logout');
    });

    // ------------------------------ register ----------------------------------//
    Route::controller(RegisterController::class)->group(function () {
        Route::get('/register', 'register')->name('register');
        Route::post('/register','storeUser')->name('register');    
    });

    // ----------------------------- forget password ----------------------------//
    Route::controller(ForgotPasswordController::class)->group(function () {
        Route::get('forget-password', 'getEmail')->name('forget-password');
        Route::post('forget-password', 'postEmail')->name('forget-password');    
    });

    // ----------------------------- reset password -----------------------------//
    Route::controller(ResetPasswordController::class)->group(function () {
        Route::get('reset-password/{token}', 'getPassword');
        Route::post('reset-password', 'updatePassword');    
    });
});

Route::group(['namespace' => 'App\Http\Controllers'],function()
{
    // ----------------------------- main dashboard ------------------------------//
    Route::controller(HomeController::class)->group(function () {
        Route::get('/home', 'index')->name('home');
        Route::get('em/dashboard', 'emDashboard')->name('em/dashboard');
    });

    // ----------------------------- lock screen --------------------------------//
    Route::controller(LockScreen::class)->group(function () {
        Route::get('lock_screen','lockScreen')->middleware('auth')->name('lock_screen');
        Route::post('unlock', 'unlock')->name('unlock');    
    });

    // -----------------------------settings-------------------------------------//
    Route::controller(SettingController::class)->group(function () {
        Route::get('company/settings/page', 'companySettings')->middleware('auth')->name('company/settings/page'); /** index page */
        Route::post('company/settings/save', 'saveRecord')->middleware('auth')->name('company/settings/save'); /** save record or update */
        Route::get('roles/permissions/page', 'rolesPermissions')->middleware('auth')->name('roles/permissions/page');
        Route::post('roles/permissions/save', 'addRecord')->middleware('auth')->name('roles/permissions/save');
        Route::post('roles/permissions/update', 'editRolesPermissions')->middleware('auth')->name('roles/permissions/update');
        Route::post('roles/permissions/delete', 'deleteRolesPermissions')->middleware('auth')->name('roles/permissions/delete');
        Route::get('localization/page', 'localizationIndex')->middleware('auth')->name('localization/page'); /** index page localization */
        Route::get('salary/settings/page', 'salarySettingsIndex')->middleware('auth')->name('salary/settings/page'); /** index page salary settings */
        Route::get('email/settings/page', 'emailSettingsIndex')->middleware('auth')->name('email/settings/page'); /** index page email settings */
    });

    // ----------------------------- manage users -------d-----------------------//
    Route::controller(UserManagementController::class)->group(function () {
        Route::get('profile_user', 'profile')->middleware('auth')->name('profile_user');
        Route::post('profile/information/save', 'profileInformation')->name('profile/information/save');

        Route::get('userManagement', 'index')->middleware('auth')->name('userManagement');
        Route::post('user/add/save', 'addNewUserSave')->name('user/add/save');
        Route::post('update', 'update')->name('update');
        Route::post('user/delete', 'delete')->middleware('auth')->name('user/delete');
        Route::get('activity/log', 'activityLog')->middleware('auth')->name('activity/log');
        Route::get('activity/login/logout', 'activityLogInLogOut')->middleware('auth')->name('activity/login/logout');
        Route::get('change/password', 'changePasswordView')->middleware('auth')->name('change/password');
        Route::post('change/password/db', 'changePasswordDB')->name('change/password/db');
        
        Route::post('user/profile/emergency/contact/save', 'emergencyContactSaveOrUpdate')->name('user/profile/emergency/contact/save'); /** save or update emergency contact */
        Route::get('get-users-data', 'getUsersData')->name('get-users-data'); /** get all data users */
        
    });

        // ----------------------------- CODERUMED BASE DE DATOS -------d-----------------------//
    Route::controller(coderumedController::class)->group(function () {
        Route::get('coderumedManagement','index')-> middleware('auth')-> name('coderumedManagement');
        Route::get('coderumed/activity/log', 'activityLogcoderumed')->middleware('auth')->name('coderumed/activity/log');
       
        Route::post('coderumed/add/save', 'addNewCoderumed')->name('coderumed/add/save');
        Route::post('coderumed/delete', 'deleteCoderumed')->middleware('auth')->name('coderumed/delete');
        Route::post('coderumed/update', 'updateCoderumed')->name('coderumed/update');

        Route::get('get-coderumed-data', 'getcoderumedData')->name('get-coderumed-data'); 
    });


    //----------------------TEST DE BOWIE-------------------//
    Route::controller(zonanoesterilController::class)->group(function(){
        Route::get('zneManagement','index')->middleware('auth')->name('zneManagement');
        Route::get('all/generatorlabel','allgeneratorlabel')->middleware('auth')->name('all/generatorlabel');
        Route::post('testbowie/add/save', 'addNewtestbowie')->name('testbowie/add/save');
        Route::post('testbowie/delete', 'deleteTestbowie')->middleware('auth')->name('testbowie/delete');
        Route::post('form/apply/testbowie/update', 'updateTestbowie')->name('form/apply/testbowie/update');
        Route::get('get-testbowie-data', 'gettesbowieData')->name('get-testbowie-data'); 
        Route::get('testbowie/activity/log', 'activityLogtestbowie')->middleware('auth')->name('testbowie/activity/log');
        Route::post('add/coderumed/temporary', 'TemporarySelecRumed')->name('add/coderumed/temporary');
        Route::get('all/generatorlabel', 'SelectCoderumed')->middleware('auth')->name('all/generatorlabel');

    });

    //----------------------TEST DE BOWIE-------------------//
    Route::controller(testbowieController::class)->group(function(){
        Route::get('testbowie', 'testbowie')->middleware('auth')->name('testbowie');
        Route::post('form/testbowie/save', 'testbowieSaveRecord')->name('form/testbowie/save');
        Route::post('form/apply/testbowie/save', 'applytestbowieSaveRecord')->name('form/apply/testbowie/save');
 




    });


    
    // ---------------------------- form employee ---------------------------//
    Route::controller(EmployeeController::class)->group(function () {
        Route::get('all/employee/card', 'cardAllEmployee')->middleware('auth')->name('all/employee/card');
        Route::get('all/employee/list', 'listAllEmployee')->middleware('auth')->name('all/employee/list');
        Route::post('all/employee/save', 'saveRecord')->middleware('auth')->name('all/employee/save');
        Route::get('all/employee/view/edit/{employee_id}', 'viewRecord');
        Route::post('all/employee/update', 'updateRecord')->middleware('auth')->name('all/employee/update');
        Route::get('all/employee/delete/{employee_id}', 'deleteRecord')->middleware('auth');
        Route::post('all/employee/search', 'employeeSearch')->name('all/employee/search');
        Route::post('all/employee/list/search', 'employeeListSearch')->name('all/employee/list/search');

        Route::get('form/departments/page', 'index')->middleware('auth')->name('form/departments/page');    
        Route::post('form/departments/save', 'saveRecordDepartment')->middleware('auth')->name('form/departments/save');    
        Route::post('form/department/update', 'updateRecordDepartment')->middleware('auth')->name('form/department/update');    
        Route::post('form/department/delete', 'deleteRecordDepartment')->middleware('auth')->name('form/department/delete');  
        
        Route::get('form/designations/page', 'designationsIndex')->middleware('auth')->name('form/designations/page');    
        Route::post('form/designations/save', 'saveRecordDesignations')->middleware('auth')->name('form/designations/save');    
        Route::post('form/designations/update', 'updateRecordDesignations')->middleware('auth')->name('form/designations/update');    
        Route::post('form/designations/delete', 'deleteRecordDesignations')->middleware('auth')->name('form/designations/delete');
        
        Route::get('form/timesheet/page', 'timeSheetIndex')->middleware('auth')->name('form/timesheet/page');    
        Route::post('form/timesheet/save', 'saveRecordTimeSheets')->middleware('auth')->name('form/timesheet/save');    
        Route::post('form/timesheet/update', 'updateRecordTimeSheets')->middleware('auth')->name('form/timesheet/update');    
        Route::post('form/timesheet/delete', 'deleteRecordTimeSheets')->middleware('auth')->name('form/timesheet/delete');
        
        Route::get('form/overtime/page', 'overTimeIndex')->middleware('auth')->name('form/overtime/page');    
        Route::post('form/overtime/save', 'saveRecordOverTime')->middleware('auth')->name('form/overtime/save');    
        Route::post('form/overtime/update', 'updateRecordOverTime')->middleware('auth')->name('form/overtime/update');    
        Route::post('form/overtime/delete', 'deleteRecordOverTime')->middleware('auth')->name('form/overtime/delete');  
    });

    // ------------------------- profile employee --------------------------//
    Route::controller(EmployeeController::class)->group(function () {
        Route::get('employee/profile/{user_id}', 'profileEmployee')->middleware('auth');
    });

    // --------------------------- form holiday ---------------------------//
    Route::controller(HolidayController::class)->group(function () {
        Route::get('form/holidays/new', 'holiday')->middleware('auth')->name('form/holidays/new');
        Route::post('form/holidays/save', 'saveRecord')->middleware('auth')->name('form/holidays/save');
        Route::post('form/holidays/update', 'updateRecord')->middleware('auth')->name('form/holidays/update');    
    });

   
});
