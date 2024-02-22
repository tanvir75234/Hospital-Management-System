<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard',[HomeController::class,'index'])->name('home');


Route::get('dashboard/user',[UserController::class,'index'])->name('user.home');
Route::get('dashboard/user/add',[UserController::class,'add'])->name('user.add');
Route::get('dashboard/user/view/{id}',[UserController::class,'view'])->name('user.view');
Route::get('dashboard/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
Route::post('dashboard/user/submit',[UserController::class,'insert'])->name('user.submit');
Route::post('dashboard/user/update',[UserController::class,'update'])->name('user.update');

Route::get('dashboard/doctor',[DoctorController::class,'index'])->name('doctor.home');
Route::get('dashboard/doctor/add',[DoctorController::class,'add'])->name('doctor.add');
Route::post('dashboard/doctor/submit',[DoctorController::class,'insert'])->name('doctor.submit');

require __DIR__.'/auth.php';
