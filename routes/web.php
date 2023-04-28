<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

//Backend
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PatientController;
use  App\Http\Controllers\paymentController;
use  App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SpecialistController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\prescriptionController;
use  App\Http\Controllers\BusinesssettingController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\ChambeController;
use App\Http\Controllers\RgistrationController;
use App\Http\Controllers\Frontend\DoctorController as FrontendDoctorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//for login
Route::get('/login', [DashboardController::class, 'login'])->name('login');
Route::post('/dologin', [DashboardController::class, 'dologin'])->name('dologin');
Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
//for frontend login
Route::get('/loginfront', [loginController::class, 'loginfront'])->name('loginfront');
Route::post('/loginfront', [DashboardController::class, 'loginfront'])->name('loginfront');
Route::get('froontend-logout', [loginController::class, 'logout'])->name('frontend.logout');

Route::post('/loginform', [loginController::class, 'loginfront'])->name('loginform');


Route::get('/dologinfront', [DashboardController::class, 'loginfront'])->name('loginfront');
Route::get('/logoutfront', [DashboardController::class, 'logoutfront'])->name('logoutoutfront');





//website frontend


Route::get('/', [HomeController::class, 'web'])->name('website');
Route::get('/doctor', [FrontendDoctorController::class, 'list'])->name('Doctor.list');
Route::get('/appointment', [FrontendAppointmentController::class, 'list'])->name('appointment.list');
Route::get('/registration', [HomeController::class, 'registrationform'])->name('registration.form');
Route::post('/registration/form', [HomeController::class, 'registrationformshow'])->name('registrationformshow');


//for auth
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [DashboardController::class, 'dashboard'])->name('home');


    //Doctor
    Route::get('/dashboard', [DashboardController::class, 'dashboardView']);
    Route::get('/doctor/list', [DoctorController::class, 'list'])->name('doctor.list');
    Route::get('/doctor/create', [DoctorController::class, 'create'])->name('doctor.create');
    Route::post('/doctor/store', [DoctorController::class, 'store'])->name('doctor.store');
    Route::get('/doctor/view/{id}', [DoctorController::class, 'view'])->name('doctor.view');
    Route::get('/doctor/delete/{id}', [DoctorController::class, 'delete'])->name('doctor.delete');

    // doctor

    //Appointment

    Route::get('/appointment/list', [AppointmentController::class, 'list'])->name('appointment.list');
    Route::get('/appointment/create', [AppointmentController::class, 'create'])->name('appointment.create');
    Route::post('/appointment/store', [AppointmentController::class, 'store'])->name('appointment.store');
    Route::get('/delete/{id}', [AppointmentController::class, 'delete'])->name('appointment.delete');
    

    //Prescription
    Route::get('/prescription/list', [PrescriptionController::class, 'list'])->name('prescription.list');
    Route::get('/prescription/create', [prescriptionController::class, 'create'])->name('prescription.create');
    Route::post('/patient/store', [patientController::class, 'store'])->name('patient.store');

    //specialist
    Route::get('/specialist/list', [SpecialistController::class, 'list'])->name("specialist.list");

    Route::get('/specialist/form', [SpecialistController::class, 'form'])->name("specialist.form");
    Route::post('/specialist/store', [SpecialistController::class, 'store'])->name("specialist.store");
    //Payment
    Route::get('/payment/create', [paymentController::class, 'create'])->name('payment.create');
    Route::get('/payment/list', [PaymentController::class, 'list'])->name('payment.list');
    Route::post('/payment/store', [paymentController::class, 'store'])->name('payment.store');
    //chamber
    Route::get('/chamber/list', [ChamberController::class, 'list'])->name('chamber.list');
    Route::get('/chamber/form', [ChamberController::class, 'form'])->name('chamber.form');
    Route::post('chamber/store', [ChamberController::class, 'store'])->name('chamber.store');

    //Business setting
    Route::get('/businesssetting/list', [BusinesssettingController::class, 'list'])->name('Businesssetting.list');
    //Admin
    Route::get('/admin/create', [adminController::class, 'create'])->name('admin.create');

    Route::get('/admin/list', [AdminController::class, 'list'])->name('admin.list');
    //Report
    Route::get('/report/list', [ReportController::class, 'list'])->name('report.list');


    //Department
    Route::group(['prefix' => 'department'], function () {
        Route::get('/list', [DepartmentController::class, 'list'])->name('department.list');
        Route::get('/form', [DepartmentController::class, 'form'])->name('department.form');
        Route::post('/store', [DepartmentController::class, 'store'])->name('department.store');
        Route::get('/edit/{id}', [DepartmentController::class, 'edit'])->name('department.edit');
        Route::put('/update/{id}', [DepartmentController::class, 'update'])->name('department.update');
        Route::get('/delete/{id}', [DepartmentController::class, 'delete'])->name('department.delete');
    });


    //Patient
    Route::group(['prefix' => 'patient'], function () {
        Route::get('/list', [PatientController::class, 'list'])->name('patient.list');
        Route::get('/create', [PatientController::class, 'create'])->name('patient.create');
        Route::post('/store', [patientController::class, 'store'])->name('patient.store');
        Route::get('/edit/{id}', [PatientController::class, 'edit'])->name('patient.edit');
        Route::put('/update/{id}', [PatientController::class, 'update'])->name('patient.update');
    });
});
