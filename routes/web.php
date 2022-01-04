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
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\Admin\TimeSlotController;
use App\Http\Controllers\Admin\UserController as AdminUserController;


// website

use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\frontend\MakeoverController;
use App\Http\Controllers\frontend\HaircareController;
use App\Http\Controllers\frontend\SkincareController;
use App\Http\Controllers\frontend\HennaController;
use App\Http\Controllers\Website\UserController;
use App\Http\Controllers\frontend\HomeController;



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



Route::get('/',function() {
return view('admin.welcome');
 });

 Route::get('/admin/login',[AdminUserController::class,'login'])->name('admin.login');
 Route::post('/admin/do-login',[AdminUserController::class,'doLogin'])->name('admin.doLogin');

Route::get('/users',[UsersController::class,'profile'])->name('users.profile');
Route::get('/customer',[CustomerController::class,'profile'])->name('customer.profile');

Route::get('/appointment',[AppointmentController::class,'booking'])->name('appointment.profile');
Route::get('/report',[ReportController::class,'profile'])->name('report.profile');


// Beautician

Route::get('/beautician',[BeauticianController::class,'visit_list'])->name('beautician.profile');
Route::get('/beautician_list/add',[BeauticianController::class,'add'])->name('beautician_list.profile');
Route::get('/beautician/search',[BeauticianController::class,'beauticianSearch'])->name('beautician.search');

Route::get('/admin/dashboard',[DashboardController::class,'profile'])->name('admin.dashboard.profile');
Route::get('/feedback',[FeedbackController::class,'give'])->name('feedback.profile');
Route::get('/time_slot',[TimeSlotController::class,'select'])->name('time_slot.profile');




// Service
Route::get('/services',[ServiceController::class,'view'])->name('admin.service');
Route::get('/service/',[ServiceController::class,'CreateService'])->name('service.profile');




// Service Category
Route::get('/service_category',[ServiceCategoryController::class,'showcategory'])->name('service_category.profile');
Route::get('/create/list',[ServiceCategoryController::class,'Create_list'])->name('create.list');
Route::get('/create_service',[ServiceCategoryController::class,'create_service'])->name('create_service');






//database
Route::post('/service/store',[ServiceController::class,'ServiceStore'])->name('admin.service.store');
Route::post('/booking/appointment',[AppointmentController::class,'AppointmentStore'])->name('admin.appointment.store');
Route::get('/beautician',[BeauticianController::class,'visit_list'])->name('beautician.profile');

Route::post('/beautician/store',[BeauticianController::class,'BeauticianStore'])->name('admin.beautician.store');

Route::get('/time_slot/store',[TimeSlotController::class,'TimeSlotStore'])->name('admin.time_slot.store');










// frontend

 Route::get('/', function () { 
    return view('website.master');
 });

Route::get('/home',[HomeController::class,'dashboard'])->name('home.dashboard');
Route::get('/index',[IndexController::class,'dashboard'])->name('frontend.dashboard');


Route::get('/makeover',[MakeoverController::class,'dashboard'])->name('makeover.dashboard');
Route::get('/haircare',[HaircareController::class,'dashboard'])->name('haircare.dashboard');
Route::get('/skincare',[SkincareController::class,'dashboard'])->name('skincare.dashboard');
Route::get('/henna',[HennaController::class,'dashboard'])->name('henna.dashboard');

Route::get('/showcategory',[ServiceCategoryController::class,'showcategory'])->name('show.category');


Route::get('/registration',[UserController::class,'registration'])->name('user.registration');

Route::post('/store/user',[UserController::class,'UserStore'])->name('user.store');
Route::post('/login',[UserController::class,'login'])->name('user.login');
Route::get('/logout',[UserController::class,'logout'])->name('user.logout');
