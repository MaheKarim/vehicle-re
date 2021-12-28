<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\EmergencyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ServiceCenterController;
use App\Http\Controllers\VehcileAdminController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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
/** Project initialize */

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin','middleware'=>['isAdmin','auth']], function(){
        Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
        Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
        Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');

        Route::post('update-profile-info',[AdminController::class,'updateInfo'])->name('adminUpdateInfo');
        Route::post('change-profile-picture',[AdminController::class,'updatePicture'])->name('adminPictureUpdate');
        Route::post('change-password',[AdminController::class,'changePassword'])->name('adminChangePassword');

        Route::get('employees', [EmployeeController::class, 'index'])->name('employee.index');
        Route::get('employee/create', [EmployeeController::class, 'create'])->name('employee.create');
        Route::post('employee', [EmployeeController::class, 'store'])->name('employee.store');

        Route::get('vehicle/all', [VehcileAdminController::class, 'index'])->name('vehicle.index');
        Route::get('vehicle/edit/{id}', [VehcileAdminController::class, 'edit'])->name('vehicle.edit');
        Route::post('vehicle-update/{id}', [VehcileAdminController::class, 'update'])->name('vehicleNew.update');

        Route::get('/service_center/index', [ServiceCenterController::class, 'index'])->name('serviceCenter.index');
        Route::get('/service_center/create', [ServiceCenterController::class, 'create'])->name('serviceCenter.create');
        Route::post('service_center', [ServiceCenterController::class, 'store'])->name('serviceCenter.store');

        Route::get('/area', [AreaController::class, 'index'])->name('area.index');
        Route::get('/area/create', [AreaController::class, 'create'])->name('area.create');
        Route::post('/area/store', [AreaController::class, 'store'])->name('area.store');

});

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::get('profile',[UserController::class,'profile'])->name('user.profile');
    Route::get('settings',[UserController::class,'settings'])->name('user.settings');

    Route::get('vehicle-request', [VehicleController::class, 'index'])->name('vehicle.index');
    Route::get('vehicle-request/create', [VehicleController::class, 'create'])->name('vehicle.create');
    Route::post('vehicle-request', [VehicleController::class, 'store'])->name('vehicle.store');

    Route::get('emergency-request/create', [EmergencyController::class, 'create'])->name('emergency.create');
    Route::post('emergency-request', [EmergencyController::class, 'store'])->name('emergency.store');

    Route::get('service-center-booking/create/{id}', [BookingController::class, 'create'])->name('serviceCenterBooking.create');
    Route::post('service-center-booking', [BookingController::class, 'store'])->name('serviceCenterBooking.store');

});
