<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\prescriptionController;
use App\Http\Controllers\SpecialistController;
use App\Http\Controllers\paymentController;









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
Route::get('/dashboard', [DashboardController::class, 'dashboardView']);
Route::get('/doctor/list',[DoctorController::class,'list'])->name('doctor.list');
Route::get('/patient/list', [PatientController::class, 'list'])->name('patient.list');
Route::get('/appointment/list', [AppointmentController::class, 'appoList'])->name('appointment.list');
Route::get('/prescription/list',[PrescriptionController::class,'list'])->name('prescription.list');
Route::get('/specialist/list',[SpecialistController::class,'list'])->name('specialist.list');
Route::get('/payment/list',[PaymentController::class,'list'])->name('payment.list');