<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\patientsController;

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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/patient/store', [PatientController::class, 'store']);
Route::post('/patient/login', [PatientController::class, 'login']);

Route::middleware(['cors'])->group(function () {
    Route::apiResource('patients', patientsController::class);
});


Route::get('/user', function (Request $request) {
    return $request->user();
});

// Route::Post('/patient/store', [PatientController::class, 'store']);



