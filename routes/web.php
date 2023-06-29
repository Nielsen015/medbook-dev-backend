<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('patients')->group(function () {
    Route::get('/', [PatientController::class, 'index']);
    Route::get('/{patient}', [PatientController::class, 'show']);
    Route::post('/', [PatientController::class, 'store']);
    // Other patient-related routes...
});

