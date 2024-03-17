<?php

use App\Http\Controllers\CodeRumedController;
use App\Http\Controllers\CodeRumedDashboard;
use App\Http\Controllers\generatorqrController;
use App\Http\Controllers\Reportref_qrController;
use App\Http\Controllers\Reportref_qrDashboard;
use App\Http\Controllers\testbowieController;
use App\Http\Controllers\TestbowieDashboard;
use App\Http\Controllers\generatorqrDashboard;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\MachineDashboard;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\InstitutionDashboard;
use App\Http\Controllers\receptionrumedController;
use App\Http\Controllers\receptionrumedDashboard;
use App\Http\Controllers\PersonalInformationController;
use App\Http\Controllers\rumedSelecprevqrDashboard;
use App\Http\Controllers\liberarqrDashboard;
use App\Http\Controllers\liberarqrController;






use App\Http\Controllers\PrinterController;

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
function set_active($route)
{
    if (is_array($route)) {
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('home', function () {
        return view('home');
    });
    Route::get('home', function () {
        return view('home');
    });
});

Auth::routes();

Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
    // -----------------------------login----------------------------------------//
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'authenticate');
        Route::get('/logout', 'logout')->name('logout');
    });

    // ------------------------------ register ----------------------------------//
    Route::controller(RegisterController::class)->group(function () {
        Route::get('/register', 'register')->name('register');
        Route::post('/register', 'storeUser')->name('register');
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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    // ----------------------------- main dashboard ------------------------------//
    Route::controller(HomeController::class)->group(function () {
        Route::get('/home', 'index')->name('home');
        Route::get('em/dashboard', 'emDashboard')->name('em/dashboard');
    });

    // ----------------------------- lock screen --------------------------------//
    Route::controller(LockScreen::class)->group(function () {
        Route::get('lock_screen', 'lockScreen')->middleware('auth')->name('lock_screen');
        Route::post('unlock', 'unlock')->name('unlock');
    });

    // -----------------------------settings-------------------------------------//
    Route::controller(SettingController::class)->group(function () {
        Route::get('company/settings/page', 'companySettings')->middleware('auth')->name('company/settings/page');
        /** index page */
        Route::post('company/settings/save', 'saveRecord')->middleware('auth')->name('company/settings/save');
        /** save record or update */
        Route::get('roles/permissions/page', 'rolesPermissions')->middleware('auth')->name('roles/permissions/page');
        Route::post('roles/permissions/save', 'addRecord')->middleware('auth')->name('roles/permissions/save');
        Route::post('roles/permissions/update', 'editRolesPermissions')->middleware('auth')->name('roles/permissions/update');
        Route::post('roles/permissions/delete', 'deleteRolesPermissions')->middleware('auth')->name('roles/permissions/delete');
        Route::get('localization/page', 'localizationIndex')->middleware('auth')->name('localization/page');
        /** index page localization */
        Route::get('salary/settings/page', 'salarySettingsIndex')->middleware('auth')->name('salary/settings/page');
        /** index page salary settings */
        Route::get('email/settings/page', 'emailSettingsIndex')->middleware('auth')->name('email/settings/page');
        /** index page email settings */
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

        Route::post('user/profile/emergency/contact/save', 'emergencyContactSaveOrUpdate')->name('user/profile/emergency/contact/save');
        /** save or update emergency contact */
        Route::get('get-users-data', 'getUsersData')->name('get-users-data');
        /** get all data users */
    });

    // ----------------------------- CODERUMED BASE DE DATOS -------d-----------------------//
    // Creado con el estandar https://laravel.com/docs/10.x/controllers#resource-controllers
    Route::resource("coderumed", CodeRumedController::class)->except(['create', 'show', 'index'])->middleware('auth');
    Route::resource("coderumed", CodeRumedController::class)->only(['show']); // Show no necesita autenticacion
    Route::get("/coderumed-dashboard", CodeRumedDashboard::class)->name("coderumedManagement")->middleware('auth'); // Solo muestra el dashboard, filtra y nada más

    // ----------------------------- RECEPCION DE INSTRUMENTAL RUMED  -------d-----------------------//
    Route::resource("receptionrumed", receptionrumedController::class)->except(['create', 'show', 'index'])->middleware('auth');
    Route::resource("receptionrumed", receptionrumedController::class)->only(['show']);
    Route::get("/receptionrumed-dashboard", receptionrumedDashboard::class)->name("ReceptionRumed")->middleware('auth'); // Solo muestra el dashboard, filtra y nada más

    //----------------------TEST DE BOWIE-------------------//
    Route::resource("testbowie", testbowieController::class)->except(['create', 'show', 'index'])->middleware('auth');
    Route::resource("testbowie", testbowieController::class)->only(['show']);

    Route::get("/testbowie-dashboard", TestbowieDashboard::class)->name("zneManagement/testbowie")->middleware('auth'); //
    Route::resource("printertestbowie", PrinterController::class)->only(['show']);

    Route::get("/testbowie-dashboard", TestbowieDashboard::class)->name("zneManagement/testbowie")->middleware('auth'); // 

    //---------------------------PRINTER---------------------------------//
    Route::get("/printerBD{id}", [PrinterController::class, 'FormatprinterBD'])->name('/printerBD')->middleware(['auth']);
    Route::get("/printerInput{id}", [PrinterController::class, 'FormatprinterInput'])->name('/printerInput')->middleware(['auth']);


    //----------------------GENERADOR QR-------------------//
    // Solo muestra el dashboard, filtra y nada más

    Route::get("Generatorqr-dashboard", generatorqrDashboard::class)->name("zneManagement/generatorqr")->middleware('auth');
    // generar paquetes previos al qr
    Route::resource("generatorqr", rumedSelecprevqrDashboard::class)->except(['create', 'index'])->middleware('auth');
    Route::resource("generatorqr", rumedSelecprevqrDashboard::class)->only(['index']);
//generar reporte de la generacion de QR.
    Route::resource("Reportref_qr", Reportref_qrController::class)->except(['create', 'show', 'index'])->middleware('auth');
    Route::resource("Reportref_qr", Reportref_qrController::class)->only(['show']);
    Route::get("Reportref_qr-dashboard", Reportref_qrDashboard::class)->name("zneManagement/Reportref_qr")->middleware('auth');

    // ---------------------LIBERAR Y VALIDAR QR----------------------//
    Route::get("Liberarqr-dashboard", liberarqrDashboard::class)->name("ZEsterilManagement/LiberarCiclo")->middleware('auth');
    // revisar los paquetes previos a liberar el qr

    Route::resource("realesecycle", liberarqrController::class)->except(['create', 'index'])->middleware('auth');
    Route::resource("realesecycle", liberarqrController::class)->only(['index']);



    // selecionar los equipos y modelos

    Route::resource("machine", MachineController::class)->except(['create', 'show', 'index'])->middleware('auth');
    Route::resource("machine", MachineController::class)->only(['show']);
    Route::get("/machine-dashboard", MachineDashboard::class)->name("settingsMachine/machine")->middleware('auth');

    // llenado de informcion de la institucion
    Route::resource("institution", InstitutionController::class)->except(['create', 'show', 'index'])->middleware('auth');
    Route::resource("institution", InstitutionController::class)->only(['show']);
    Route::get("/institution-dashboard", InstitutionDashboard::class)->name("SettingInstitution/institution")->middleware('auth');









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
    Route::controller(PersonalInformationController::class)->group(function () {
        Route::post('user/information/save', 'saveRecord')->middleware('auth')->name('user/information/save');
    });
});
