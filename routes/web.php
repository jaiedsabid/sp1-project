<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\SignupController;
use \App\Http\Controllers\LogOutController;
use \App\Http\Controllers\DoctorController;

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

Route::get('/', function () {
    return redirect()->route('login');
})->name('root');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'create']);

Route::get('/logout', [LogOutController::class, 'index'])->name('logout');

Route::get('/signup', [SignupController::class, 'index'])->name('signup');
Route::post('/signup', [SignupController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    Route::get('/doctor/dashboard', [DoctorController::class, 'index'])->name('doctor.dashboard');
    Route::get('/doctor/profile', [DoctorController::class, 'profile'])->name('doctor.profile');
    Route::get('/doctor/patient/list', [DoctorController::class, 'patient_list'])->name('doctor.patient_list');
    Route::get('/doctor/patient/{id}/details', [DoctorController::class, 'show'])->name('doctor.patient_details');
    Route::get('/doctor/patient/{id}/remove', [DoctorController::class, 'destroy'])->name('doctor.remove_patient');
    Route::get('/doctor/patient/add', [DoctorController::class, 'create'])->name('doctor.add_patient');
});
