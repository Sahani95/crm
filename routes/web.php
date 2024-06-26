<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;

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
Route::get('/', [AuthController::class,'loginpage']);
Route::post('/login',[AuthController::class,'login'])->name('AdminLogin');
Route::get('/logout', [AuthController::class,'logout']);

Route::get('/dashboard', [AuthController::class,'index'])->name('AdminDashboard');
Route::resource('company',CompanyController::class);
Route::resource('employee',EmployeeController::class);


