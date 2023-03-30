<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\prescriptionController;
use App\Http\Controllers\SpecialistController;
Use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReportController;
use  App\Http\Controllers\BusinesssettingController;
use  App\Http\Controllers\paymentController;









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
Route::get('/', [DashboardController::class, 'dashboard']);


//Doctor
Route::get('/dashboard', [DashboardController::class, 'dashboardView']);
Route::get('/doctor/list',[DoctorController::class,'list'])->name('doctor.list');
Route::get('/doctor/create',[DoctorController::class,'create'])->name('doctor.create');
Route::post('/doctor/store',[DoctorController::class,'store'])->name('doctor.store');
Route::get('/doctor/view/{id}',[DoctorController::class,'view'])->name('doctor.view');
Route::get('/doctor/delete',[DoctorController::class,'delete'])->name('doctor.delete');



//patient
Route::get('/patient/create', [PatientController::class, 'create'])->name('patient.create');
Route::get('/patient/list', [PatientController::class, 'list'])->name('patient.list');
Route::post('/patient/store',[patientController::class,'store'])->name('patient.store');

//Appointment

Route::get('/appointment/list', [AppointmentController::class, 'list'])->name('appointment.list');
Route::get('/appointment/create', [AppointmentController::class, 'create'])->name('appointment.create');
Route::post('/patient/store',[patientController::class,'store'])->name('patient.store');
//Prescription
Route::get('/prescription/list',[PrescriptionController::class,'list'])->name('prescription.list');
Route::get('/prescription/create',[prescriptionController::class,'create'])->name('prescription.create');
Route::post('/patient/store',[patientController::class,'store'])->name('patient.store');

//specialist
Route::get('/specialist/list',[SpecialistController::class,'list'])->name('specialist.list');
//Payment
Route::get('/payment/create',[paymentController::class,'create'])->name('payment.create');
Route::get('/payment/list',[PaymentController::class,'list'])->name('payment.list');
Route::post('/payment/store',[paymentController::class,'store'])->name('payment.store');

//Business setting
Route::get('/businesssetting/list',[BusinesssettingController::class,'list'])->name('Businesssetting.list');
//Admin
Route::get('/admin/create',[adminController::class,'create'])->name('admin.create');

Route::get('/admin/list',[AdminController::class,'list'])->name('admin.list');
//Report
Route::get('/report/list',[ReportController::class,'list'])->name('report.list');
