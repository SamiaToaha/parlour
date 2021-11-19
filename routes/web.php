<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\FeedbackController;
use App\Http\Controllers\Admin\PackagesController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\BeauticianController;
use App\Http\Controllers\backend\AppointmentController;
use App\Http\Controllers\backend\ServiceTypesController;
use App\Http\Controllers\backend\TimeScheduleController;


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
Route::get('/',[AdminController::class,'profile'])->name('admin.profile');
Route::get('/appointment',[AppointmentController::class,'profile'])->name('appointment.profile');
Route::get('/beautician',[BeauticianController::class,'profile'])->name('beautician.profile');
Route::get('/service',[ServiceController::class,'profile'])->name('service.profile');
Route::get('/service types',[ServiceTypesController::class,'profile'])->name('service types.profile');
Route::get('/packages',[PackagesController::class,'profile'])->name('packages.profile');
Route::get('/dashboard',[DashboardController::class,'profile'])->name('dashboard.profile');
Route::get('/time schedule',[TimeScheduleController::class,'profile'])->name('time schedule.profile');
Route::get('/feedback',[FeedbackController::class,'profile'])->name('feedback.profile');

//database




Route::post('/service/store',[ServiceController::class,'profile'])->name('admin.service.store');