<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\customer\DashboardController as CustomerDashboardController;
use App\Http\Controllers\customer\ReservationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Hotel\DashboardController as HotelDashboardController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index'])->name("homepage");



Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group(function(){

    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
});

Route::middleware(['auth','hotel'])->name('hotel.')->prefix('hotel')->group(function(){

    Route::get('dashboard',[HotelDashboardController::class,'index'])->name('dashboard');
});

Route::middleware(['auth','customer'])->name('customer.')->prefix('customer')->group(function(){

    Route::get('dashboard',[CustomerDashboardController::class,'index'])->name('dashboard');
    Route::resource('my-reservations',ReservationController::class);
    Route::post('step-final',[HotelController::class,'stepFinal'])->name('step-final');
    Route::get('confirm/reservation',[HotelController::class,"confirm"])->name('confirm');
    Route::post('cancel/reservation/{id}',[ReservationController::class,'cancel'])->name('cancel');
    Route::get('reserver-rapidement',[ReservationController::class,'fast'])->name('fast');
    Route::post('reserver-rapidement',[ReservationController::class,'fastStore'])->name('fast.post');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::get('details/{id}',[HotelController::class,"details"])->name('details.hotel');
Route::get('step-one/list-hotels',[HotelController::class,'stepOne'])->name('search');
Route::get('step-two/list-rooms/{id}',[HotelController::class,'stepTwo'])->name('step-two');
Route::get('step-tree/final-reservation/{id}',[HotelController::class,'stepThree'])->middleware('auth')->name('step-three');


require __DIR__.'/auth.php';
