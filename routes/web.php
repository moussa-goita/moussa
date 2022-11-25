<?php

use Illuminate\Support\Facades\Route;

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
    return view('employe');
});

Auth::routes(); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/employe', [App\Http\Controllers\EmployeController::class, 'index'])->name('employe');
Route::get('/services', [App\Http\Controllers\servicesController::class, 'index'])->name('services');
Route::get('/a-propos', [App\Http\Controllers\AproposController::class, 'index'])->name('a-propos');
  