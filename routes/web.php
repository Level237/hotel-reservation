<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Hotel\DashboardController as HotelDashboardController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','client'])->name('dashboard');

Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group(function(){

    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
});

Route::middleware(['auth','hotel'])->name('hotel.')->prefix('hotel')->group(function(){

    Route::get('dashboard',[HotelDashboardController::class,'index'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
