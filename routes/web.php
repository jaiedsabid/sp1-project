<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\SignupController;
use \App\Http\Controllers\LogOutController;
use \App\Http\Controllers\DoctorController;
use \App\Http\Controllers\AdminLoginController;
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

// Route::get('/', function () {
//     return redirect()->route('login');
// })->name('root');

Route::get('/', function () {
    return view('home');
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
    Route::post('/doctor/patient/add', [DoctorController::class, 'store']);
});




Route::get('/adminlogin',[AdminLoginController::class,'viewSingnup'])->name('adminlogin');
Route::post('/adminlogin',[AdminLoginController::class,'check'])->name('adminloginCheck');

Route::middleware(['auth:admin'])->group(function () {

    Route::get('/admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('/admin/profile',[AdminController::class,'profile'])->name('admin.profile');

    Route::get('/admin/edit',[AdminController::class,'edit'])->name('admin.edit');
    Route::post('/admin/edit',[AdminController::class,'storeEdit'])->name('admin.storeEdit');

    Route::get('/admin/addview',[AdminController::class,'addView'])->name('admin.addView');

    Route::get('/admin/adddoctor',[AdminController::class,'addDoctor'])->name('admin.addDoctor');
    Route::post('/admin/adddoctor',[AdminController::class,'storeDoctor'])->name('admin.storeDoctor');

    //Route::get('/admin/addpatient',[AdminController::class,'addView'])->name('admin.addView');

    Route::get('/admin/totaluser',[AdminController::class,'totalUser'])->name('admin.totalUser');
});
