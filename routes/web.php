<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Website\UserController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ItemController;
use App\Http\Controllers\Admin\TimeSlotController;
use App\Http\Controllers\frontend\HennaController;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\frontend\ExpertController;


// website

use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\FeedbackController;
use App\Http\Controllers\frontend\BookingController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\frontend\HaircareController;
use App\Http\Controllers\frontend\MakeoverController;
use App\Http\Controllers\frontend\ServicesController;
use App\Http\Controllers\frontend\SkincareController;
use App\Http\Controllers\backend\BeauticianController;
use App\Http\Controllers\frontend\ServiceViewController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\Admin\UserController as AdminUserController;



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



// Customer

Route::get('/customer',[CustomerController::class,'show_list'])->name('customer.show');
Route::get('/customer_list/add',[CustomerController::class,'add'])->name('customer_list.show');
Route::get('/customer/search',[CustomerController::class,'customerSearch'])->name('customer.search');
Route::get('/customer/details/view/{item_id}',[CustomerController::class,'customerDetails'])->name('customer.view');
Route::get('/customer/delete/{item_id}',[CustomerController::class,'customerDelete'])->name('customer.delete');
Route::post('/customer/store',[CustomerController::class,'CustomerStore'])->name('admin.customer.store');


// Appointment

Route::get('/appointment',[AppointmentController::class,'booking'])->name('appointment.profile');
Route::get('/appointment/list',[AppointmentController::class,'list'])->name('appointment.list');
Route::post('/booking/appointment',[AppointmentController::class,'AppointmentStore'])->name('admin.appointment.store');
Route::get('/appointment/search',[AppointmentController::class,'appointmentSearch'])->name('appointment.search');
Route::get('/appointment/details/{item_id}',[AppointmentController::class,'appointmentDetails'])->name('appointment.view');
Route::get('/appointment/delete/{item_id}',[AppointmentController::class,'appointmentDelete'])->name('appointment.delete');



Route::get('/report',[ReportController::class,'profile'])->name('report.profile');


// Beautician

Route::get('/beautician',[BeauticianController::class,'visit_list'])->name('beautician.profile');
Route::get('/beautician_list/add',[BeauticianController::class,'add'])->name('beautician_list.profile');
Route::post('/beautician/store',[BeauticianController::class,'BeauticianStore'])->name('admin.beautician.store');
Route::get('/beautician/search',[BeauticianController::class,'beauticianSearch'])->name('beautician.search');
Route::get('/beautician/details/{item_id}',[BeauticianController::class,'beauticianDetails'])->name('beautician.view');
Route::get('/beautician/delete/{item_id}',[BeauticianController::class,'beauticianDelete'])->name('beautician.delete');
Route::get('/beautician/update/{item_id}',[BeauticianController::class,'beauticianupdate'])->name('beautician.update');
Route::patch('/beautician/actual_update/{item_id}',[BeauticianController::class,'actual_update'])->name('beautician.actual_update');


Route::get('/admin/dashboard',[DashboardController::class,'profile'])->name('admin.dashboard.profile');
Route::get('/feedback',[FeedbackController::class,'give'])->name('feedback.profile');
Route::get('/time_slot',[TimeSlotController::class,'select'])->name('time_slot.profile');

// Service

Route::get('/services',[ServiceController::class,'view'])->name('admin.service');
Route::get('/service/create',[ServiceController::class,'create'])->name('service.create');
Route::post('/service/store',[ServiceController::class,'ServiceStore'])->name('admin.service.store');
Route::get('/service/search',[ServiceController::class,'serviceSearch'])->name('service.search');
Route::get('/service/details/{item_id}',[ServiceController::class,'serviceDetails'])->name('service.view');
Route::get('/service/delete/{item_id}',[ServiceController::class,'serviceDelete'])->name('service.delete');
Route::get('/service/update/{item_id}',[ServiceController::class,'serviceupdate'])->name('service.update');


// Service Category
Route::get('/service_category',[ServiceCategoryController::class,'showcategory'])->name('service_category.profile');
Route::get('/category/list',[ServiceCategoryController::class,'categorylist'])->name('category.list');
Route::post('/category/store',[ServiceCategoryController::class,'CategoryStore'])->name('category.store');
// Route::get('/category/search',[CategoryeController::class,'categorySearch'])->name('category.search');
Route::get('/category/details/{item_id}',[ServiceCategoryController::class,'categoryDetails'])->name('category.view');
Route::get('/category/delete/{item_id}',[ServiceCategoryController::class,'categoryDelete'])->name('category.delete');





// database



Route::get('/time_slot/store',[TimeSlotController::class,'TimeSlotStore'])->name('admin.time_slot.store');










// frontend

 Route::get('/', function () { 
    return view('website.master');
 });

Route::get('/home',[HomeController::class,'dashboard'])->name('home.dashboard');
Route::get('/index',[IndexController::class,'dashboard'])->name('frontend.dashboard');


Route::get('/item',[ItemController::class, 'viewCategory'])->name('Website.service_category');
Route::get('/check',[BookingController::class,'appointment'])->name('website.booking');

// Experts

Route::get('/visit',[ExpertController::class,'expert'])->name('website.expert');

// Services

Route::get('/show',[ServicesController::class,'type'])->name('website.type');
Route::get('/service/view/{id}',[ServiceViewController::class,'serviceView'])->name('service.show');

// Route::get('/showcategory',[ServiceCategoryController::class,'showcategory'])->name('show.category');


Route::get('/registration',[UserController::class,'registration'])->name('user.registration');

Route::post('/store/user',[UserController::class,'UserStore'])->name('user.store');
Route::post('/login',[UserController::class,'login'])->name('user.login');
Route::get('/logout',[UserController::class,'logout'])->name('user.logout');

Route::get('/home/addtocart/{id}',[AppointmentController::class,'addtocart'])->name('cart.add');
Route::get('/get-cart',[AppointmentController::class,'getCart'])->name('cart.get');
Route::get('/clear-cart',[AppointmentController::class,'clearCart'])->name('cart.clear');

// ?WebAuth
Route::group(['middleware'=>'web_auth'],function(){


 //Cart

//  Route::get('/cart',[AppointmentController::class,'showlist'])->name('cart.website');




});
