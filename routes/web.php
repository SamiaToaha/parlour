<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\FeedbackController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\BeauticianController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\backend\ServiceCategoryController;
use App\Http\Controllers\backend\TimeScheduleController;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\frontend\MakeoverController;


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
Route::get('/user',[UsersController::class,'profile'])->name('users.profile');
Route::get('/appointment',[AppointmentController::class,'profile'])->name('appointment.profile');
Route::get('/beautician',[BeauticianController::class,'profile'])->name('beautician.profile');
Route::get('/service',[ServiceController::class,'profile'])->name('service.profile');
Route::get('/service category',[ServiceCategoryController::class,'profile'])->name('service category.profile');
Route::get('/report',[ReportController::class,'profile'])->name('report.profile');
Route::get('/dashboard',[DashboardController::class,'profile'])->name('dashboard.profile');
Route::get('/time schedule',[TimeScheduleController::class,'profile'])->name('time schedule.profile');
Route::get('/feedback',[FeedbackController::class,'profile'])->name('feedback.profile');
Route::get('/create/service',[ServiceController::class,'CreateService'])->name('service.create');
Route::get('/create/service',[ServiceController::class,'CreateService'])->name('service.create');

//database




Route::post('/service/store',[ServiceController::class,'ServiceStore'])->name('admin.service.store');
Route::post('/booking/appointment',[AppointmentController::class,'AppointmentStore'])->name('admin.appointment.store');














// frontend

Route::get('/', function () { 
    return view('website.master');
});

Route::get('/dashboard',[IndexController::class,'dashboard'])->name('frontend.dashboard');
Route::get('/makeover',[MakeoverController::class,'dashboard'])->name('makeover.dashboard');