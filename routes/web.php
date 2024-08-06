<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\CompetencyController;
use App\Http\Controllers\TimeController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/doctors', [DoctorController::class, 'index'])->name('doctors');
Route::get('/home/competency', [CompetencyController::class, 'index'])->name('Competency');
Route::get('/home/patients', [App\Http\Controllers\PatientController::class, 'index'])->name('patients');

Route::get('/home/patients/create', [App\Http\Controllers\PatientController::class, 'create'])->name('patients.create');
Route::post('/home/patients/store', [App\Http\Controllers\PatientController::class, 'store'])->name('patients.store');
Route::get('/home/patients/edit/{id}', [App\Http\Controllers\PatientController::class, 'edit'])->name('patients.edit');
Route::post('/home/patients/update/{id}', [App\Http\Controllers\PatientController::class, 'update'])->name('patients.update');
Route::get('/home/patients/delete/{id}', [App\Http\Controllers\PatientController::class, 'destroy'])->name('patients.destroy');

//Route::get('/home/times', [TimeController::class, 'index'])->name('times');
Route::get('/home/times/create/{patientq}/{pa}', [TimeController::class, 'create'])->name('times.create');
Route::post('/home/times/create', [TimeController::class, 'store'])->name('times.store');
