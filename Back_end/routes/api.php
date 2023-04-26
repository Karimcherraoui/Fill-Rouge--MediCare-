<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointementController;
use App\Http\Controllers\BedController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\NurseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\patientsController;
use App\Http\Controllers\RoomController;
use App\Models\Appointement;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Prefix for Patient routes
Route::prefix('/patient')->group(function () {
    Route::post('/store', [PatientController::class, 'store']);
    Route::post('/login', [PatientController::class, 'login']);
    Route::post('/getClient', [PatientController::class, 'getPatient']);
    Route::post('/getClientById/{id}', [PatientController::class, 'getPatientById']);
    Route::get('/getAllPatient', [PatientController::class, 'index']);
    Route::delete('/delete/{id}', [PatientController::class, 'destroy']);
    Route::put('/edit/{id}', [PatientController::class, 'update']);
});

// Prefix for Nurse routes
Route::prefix('/nurse')->group(function () {
    Route::post('/store', [NurseController::class, 'store']);
    Route::post('/login', [NurseController::class, 'login']);
    Route::get('/getAllNurse', [NurseController::class, 'index']);
    Route::delete('/delete/{id}', [NurseController::class, 'destroy']);
});

// Prefix for Appointment routes
Route::prefix('/appointment')->group(function () {
    Route::post('/store', [AppointementController::class, 'store']);
    Route::post('/allRdv', [AppointementController::class, 'allRdv']);
    Route::get('/getAllAppointment', [AppointementController::class, 'index']);

});

// Prefix for Doctor routes
Route::prefix('/doctor')->group(function () {
    Route::post('/store', [DoctorController::class, 'store']);
    Route::post('/login', [DoctorController::class, 'login']);
    Route::get('/getAllDoctor', [DoctorController::class, 'index']);
    Route::post('/getDoctorBySpeciality', [DoctorController::class, 'getDoctorByspeciality']);
    Route::delete('/delete/{id}', [DoctorController::class, 'destroy']);
});

// Prefix for Admin routes
Route::prefix('/admin')->group(function () {
    Route::post('/login', [AdminController::class, 'login']);
});

// Route outside the prefixes
Route::post("/allRdv", [AppointementController::class, "allRdv"]);
