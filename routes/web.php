<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Website\UserController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ItemController;
use App\Http\Controllers\frontend\TimeController;
use App\Http\Controllers\Admin\ManagersController;
use App\Http\Controllers\Admin\TimeSlotController;
use App\Http\Controllers\backend\ReportController;


// website

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\frontend\ExpertController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\FeedbackController;
use App\Http\Controllers\frontend\BookingController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\frontend\ServicesController;
use App\Http\Controllers\backend\BeauticianController;
use App\Http\Controllers\frontend\FeedbacksController;
use App\Http\Controllers\frontend\ExpertViewController;
use App\Http\Controllers\frontend\ServiceViewController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\frontend\CustomerProfileController;
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
 Route::get('/admin/logout',[AdminUserController::class,'logout'])->name('admin.logout');

// Route::get('/admin',[AdminController::class,'profile'])->name('manager.profile');



// Customer

Route::get('/customer',[CustomerController::class,'show_list'])->name('customer.show');
Route::get('/customer_list/add',[CustomerController::class,'add'])->name('customer_list.show');
Route::get('/customer/search',[CustomerController::class,'customerSearch'])->name('customer.search');
Route::get('/customer/details/view/{item_id}',[CustomerController::class,'customerDetails'])->name('customer.view');
Route::get('/customer/delete/{item_id}',[CustomerController::class,'customerDelete'])->name('customer.delete');
Route::post('/customer/store',[CustomerController::class,'CustomerStore'])->name('admin.customer.store');
// Route::get('/customer/update/{item_id}',[CustomerController::class,'customerupdate'])->name('customer.update');
// Route::patch('/customer/actual_update/{item_id}',[CustomerController::class,'actual_update'])->name('customer.actual_update');



Route::get('/view/{id}',[AppointmentController::class,'view'])->name('payment.view');
Route::post('/add/{id}',[AppointmentController::class,'add'])->name('payment.add');



// Appointment

Route::get('/appointment',[AppointmentController::class,'booking'])->name('appointment.profile');
Route::get('/appointment/list',[AppointmentController::class,'list'])->name('appointment.list');
Route::post('/booking/appointment',[AppointmentController::class,'AppointmentStore'])->name('admin.appointment.store');
Route::get('/appointment/search',[AppointmentController::class,'appointmentSearch'])->name('appointment.search');
Route::get('/appointment/details/{item_id}',[AppointmentController::class,'appointmentDetails'])->name('appointment.details');
Route::get('/appointment/delete/{item_id}',[AppointmentController::class,'appointmentDelete'])->name('appointment.delete');
Route::get('/appointment/action/{item_id}',[AppointmentController::class,'action'])->name('appointment.action');



Route::get('/package',[PackageController::class,'offer'])->name(('package.profile'));


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



// Time Slot

Route::get('/time',[TimeSlotController::class,'select'])->name('timeslot.profile');
Route::get('/time/create',[TimeSlotController::class,'time'])->name('time.create');
Route::post('/time/store',[TimeSlotController::class,'TimeStore'])->name('admin.time.store');


// Service

Route::get('/services',[ServiceController::class,'view'])->name('admin.service');
Route::get('/service/create',[ServiceController::class,'create'])->name('service.create');
Route::post('/service/store',[ServiceController::class,'ServiceStore'])->name('admin.service.store');
Route::get('/service/search',[ServiceController::class,'serviceSearch'])->name('service.search');
Route::get('/service/details/{item_id}',[ServiceController::class,'serviceDetails'])->name('service.view');
Route::get('/service/delete/{item_id}',[ServiceController::class,'serviceDelete'])->name('service.delete');
Route::get('/service/update/{item_id}',[ServiceController::class,'serviceupdate'])->name('service.update');
Route::patch('/service/actual_update/{item_id}',[ServiceController::class,'service_update'])->name('service.actual_update');

// Service Category
Route::get('/service_category',[ServiceCategoryController::class,'showcategory'])->name('service_category.profile');
Route::get('/category/list',[ServiceCategoryController::class,'categorylist'])->name('category.list');
Route::post('/category/store',[ServiceCategoryController::class,'CategoryStore'])->name('category.store');
Route::get('/category/details/{item_id}',[ServiceCategoryController::class,'categoryDetails'])->name('category.view');
Route::get('/category/delete/{item_id}',[ServiceCategoryController::class,'categoryDelete'])->name('category.delete');
Route::get('/category/update/{item_id}',[ServiceCategoryController::class,'categoryupdate'])->name('category.update');
Route::patch('/category/real_update/{item_id}',[ServiceCategoryController::class,'category_update'])->name('category.real_update');


Route::get('/feedback',[FeedbackController::class,'review'])->name('admin.feedback');
Route::get('/report',[ReportController::class,'reportList'])->name('check.report');


// frontend

 Route::get('/', function () { 
    return view('website.master');
 });

Route::get('/home',[HomeController::class,'dashboard'])->name('home.dashboard');
Route::get('/index',[IndexController::class,'dashboard'])->name('frontend.dashboard');

// Customer
// Route::get('/customers',[CustomerProfileController::class,'create'])->name('website.create');
  Route::get('/profile',[CustomerProfileController::class,'profile'])->name('website.profile');
  Route::get('/customer/edit/',[CustomerProfileController::class,'update'])->name('customer.update');
  Route::put('/customer/actual_update/',[CustomerProfileController::class,'actual_update'])->name('customer.actual_update');


// Appointment

Route::get('/check',[BookingController::class,'appointment'])->name('website.booking');
Route::get('/appoint',[BookingController::class,'view'])->name('appoint.view');

// Service Category
Route::get('/item',[ItemController::class, 'viewCategory'])->name('Website.service_category');


// Experts/Beautician
Route::get('/visit',[ExpertController::class,'expert'])->name('website.expert');
Route::get('/expert/visit/{id}',[ExpertViewController::class,'expertview'])->name('expert.visit.show');

// Services
Route::get('/show',[ServicesController::class,'type'])->name('website.type');
Route::get('/service/view/{id}',[ServiceViewController::class,'serviceView'])->name('service.show');

// Time
Route::get('/choose',[TimeController::class,'choose'])->name('website.time');

// Feedback
Route::get('/feedbacks',[FeedbacksController::class,'give'])->name('feedback.website');
Route::post('/store',[FeedbacksController::class,'feedbackStore'])->name('feedback.store');

Route::get('/registration',[UserController::class,'registration'])->name('user.registration');

// User login

Route::post('/store/user',[UserController::class,'UserStore'])->name('user.store');
Route::get('/login',[UserController::class,'login'])->name('user.login');
Route::post('/loggedin',[UserController::class,'loggedin'])->name('user.loggedin');
Route::get('/logout',[UserController::class,'logout'])->name('user.logout');

Route::get('/home/addtocart/{id}',[AppointmentController::class,'addtocart'])->name('cart.add');
Route::get('/get-cart',[AppointmentController::class,'getCart'])->name('cart.get');
Route::get('/confirm-cart',[AppointmentController::class,'confirmCart'])->name('cart.confirm');


// ?WebAuth
Route::group(['middleware'=>['web_auth','admin']],function(){
   


 //Cart






});
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');