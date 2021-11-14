<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\AppointmentController;

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
//return view('admin.welcome');
 //});
Route::get('/customer',[CustomerController::class,'profile'])->name('customer.profile');
Route::get('/admin',[AdminController::class,'profile'])->name('admin.profile');
Route::get('/appointment',[AppointmentController::class,'profile'])->name('appointment.profile');