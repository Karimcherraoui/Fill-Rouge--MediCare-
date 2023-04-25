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


Route::post('/patient/store', [PatientController::class, 'store']);

// Route::middleware('auth:sanctum')->post('/patient/store', [PatientController::class, 'store']);

Route::post('/patient/login', [PatientController::class, 'login']);
Route::post('/patient/getClient', [PatientController::class, 'getPatient']);
Route::post('/patient/getClientById/{id}', [PatientController::class, 'getPatientById']);
Route::get('/patient/getAllPatient', [PatientController::class, 'index']);
Route::delete('/patient/delete/{id}', [PatientController::class, 'destroy']);
Route::put('/patient/edit/{id}', [PatientController::class, 'update']);







Route::post('/Nurse/store', [NurseController::class, 'store']);
Route::post('/nurse/login', [NurseController::class, 'login']);
Route::get('/nurse/getAllNurse', [NurseController::class, 'index']);
Route::delete('/nurse/delete/{id}', [NurseController::class, 'destroy']);



Route::post('/appointment/store', [AppointementController::class, 'store']);
Route::post('/appointment/allRdv', [AppointementController::class, 'allRdv']);





Route::post('/doctor/store', [DoctorController::class, 'store']);
Route::post('/doctor/login', [DoctorController::class, 'login']);
Route::get('/doctor/getAllDoctor', [DoctorController::class, 'index']);
Route::post('/doctor/getDoctorBySpeciality', [DoctorController::class, 'getDoctorByspeciality']);

Route::delete('/doctor/delete/{id}', [DoctorController::class, 'destroy']);





Route::post('/admin/login', [AdminController::class, 'login']);

Route::post("/allRdv", [AppointementController::class, "allRdv"]);


