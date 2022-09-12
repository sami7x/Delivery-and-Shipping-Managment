<?php

use App\Http\Controllers\Admin\Add\RiderController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\CourierController;
use App\Http\Controllers\Rider\Auth\SigninController;
use App\Http\Controllers\Rider\Auth\SignupController;
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

Route::get('/','App\Http\Controllers\HomeController@home');

Route::get('demo', function () {
    return view('demo');
});






//Admin Login & Register
Route::get('login',function() {
    return view('admin.auth.login');
});
Route::get('/register', [RegisterController::class, 'registerForm'])->name('auth.register');
Route::post('/register', [RegisterController::class, 'registerUser'])->name('auth.register-user');

Route::get('/login', [RegisterController::class, 'loginForm'])->name('auth.login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.login-user');


//logout

// Route::get('dashboard', 'App\Http\Controllers\HomeController@dashboard')->name('dashboard');

Route::group(['middleware'=>"auth"], function($router)
{
    //admin dashboard
    Route::get('dashboard', 'App\Http\Controllers\HomeController@dashboard')->name('dashboard');

    Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');

});




//Adding rider details

Route::get('rider', function () {
    return view('admin.add.deliveryperson');
});

Route::get('display', function () {
    return view('admin.add.display');
});

Route::post('rider', [App\Http\Controllers\Admin\Add\RiderController::class, 'index'])->name('rider-index');
Route::post('store', [App\Http\Controllers\Admin\Add\RiderController::class, 'store'])->name('rider-store');
Route::get('display', [App\Http\Controllers\Admin\Add\RiderController::class, 'show'])->name('rider-display');
Route::get('delete/{id}', [App\Http\Controllers\Admin\Add\RiderController::class, 'destroy'])->name('rider-delete');
Route::get('edit/{id}', [App\Http\Controllers\Admin\Add\RiderController::class, 'edit'])->name('rider-edit');
Route::post('edit/{id}', [App\Http\Controllers\Admin\Add\RiderController::class, 'update'])->name('rider-update');




// Route::get('email',[App\Http\Controllers\Admin\DeliveryPerson\MailController::class,'sendEmail']);

//Rider Login & Register
Route::get('rider-register',function() {
    return view('rider.auth.register');
});
Route::get('rider-login',function() {
    return view('rider.auth.login');
});

//after rider logins
Route::get('riderdashboard', 'App\Http\Controllers\HomeController@riderdashboard')->name('riderdashboard');




Route::get('rider-register', [SignupController::class, 'registerForm'])->name('rider.register');
Route::post('rider-register', [SignupController::class, 'registerUser'])->name('rider.register-user');

Route::get('rider-login', [SignupController::class, 'loginForm'])->name('rider.login');
Route::post('rider-login', [SigninController::class, 'authenticate'])->name('rider.login-user');


//admin page

//display users
Route::get('allriders', [App\Http\Controllers\Admin\Add\RiderController::class, 'riderdisplay'])->name('allriders');

//rider page
Route::get('riderprofile', [App\Http\Controllers\Admin\Add\RiderController::class, 'rider'])->name('riderprofile');



//ayushma




Route::get('aboutus','App\Http\Controllers\HomeController@aboutus');





Route::get('cargo',[CourierController::class, 'cargo'])->name('cargo');
Route::post('cargo-store', [CourierController::class, 'store'])->name('cargo-store');
Route::get('cargo-display', [CourierController::class, 'show'])->name('cargo-display');
Route::get('cargo-delete/{id}', [CourierController::class, 'destroy'])->name('cargo-delete');
Route::get('cargo-edit/{id}', [CourierController::class, 'edit'])->name('cargo-edit');
Route::post('cargo-edit/{id}', [CourierController::class, 'update'])->name('cargo-update');
Route::get('cargo/{id}/toggle', [CourierController::class, 'toogleCargoStatus'])->name('toggle-cargo-status');//toogle code
Route::get('cargodrop/{id}/toggle', [CourierController::class, 'toogleCargosStatus'])->name('toggle-cargodrop-status');

Route::post('pickup-status/{id}', [CourierController::class, 'setStatus'])->name('pickup-status'); //pickup status route
Route::post('cargo-status/{id}', [CourierController::class, 'cargoStatus'])->name('cargo-status'); //cargo status route





Route::get('shipping', [CourierController::class, 'shipping'])->name('shipping');
Route::get('cargodetail', [CourierController::class, 'cargodetail'])->name('cargodetail');

Route::get('shippingstatus', [CourierController::class, 'shippingstatus'])->name('shippingstatus');


Route::get('pickedup', [CourierController::class, 'pickedup'])->name('pickedup');
Route::get('dropped', [CourierController::class, 'dropped'])->name('dropped');


Route::post('tracker', [CourierController::class, 'tracker'])->name('tracker');

Route::get('track','App\Http\Controllers\HomeController@track')->name('track');
