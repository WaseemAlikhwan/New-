<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\CompetencyController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/doctors', [DoctorController::class, 'index'])->name('doctors');
Route::get('/home/doctors/add',[DoctorController::class,'create'])->name('doctor.add');
Route::post('/home/doctors/store',[DoctorController::class,'store'])->name('doctor.store');


Route::get('/home/rating',[RatingController::class,'index'])->name('rating');
Route::get('/home/rating/add',[RatingController::class,'create'])->name('rating.add');
Route::post('/home/rating/store',[RatingController::class,'store'])->name('rating.store');
Route::get('/home/rating/avg/{id}',[RatingController::class,'show'])->name('rating.avg');
// Route::get('/home/rating',[RatingController::class,'search'])->name('doctor.search');
