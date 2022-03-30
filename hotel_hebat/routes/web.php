<?php

use App\Http\Controllers\FacilityController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReceptionistController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('hotel', HotelController::class);
Route::resource('fasilitas', FacilityController::class);
Route::resource('kamar', RoomController::class);
Route::resource('pesan', OrderController::class);
Route::resource('resepsionis', ReceptionistController::class);
Route::resource('reservasi', ReservationController::class);
Route::resource('login', LoginController::class);
Route::resource('registrasi', RegisterController::class);

// login
Route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');
Route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');

// admin
Route::get('/admin/hotel',[AdminController::class, 'hotel'])->name('admin.hotel');
Route::get('/admin/resepsionis',[AdminController::class, 'hotel'])->name('admin.resepsionis');
Route::get('/admin/reservasi',[AdminController::class, 'hotel'])->name('admin.reservasi');