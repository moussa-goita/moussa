<?php
use App\Http\Controllers\StudentController;
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
    return view('welcome');
});

Auth::routes(); 
Route::resource("/student", StudentController::class);
/*
Route::get("/home", HomeController::class);
Route::get("/employe", EmployeController::class);
Route::get("/welcome", WelcomeController::class);
Route::get("/a-propos", AproposController::class);
  */