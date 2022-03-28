<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReceptionistController;
use App\Http\Controllers\RoomController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('hotel', HotelController::class);
Route::resource('fasilitas', FacilityController::class);
Route::resource('kamar', RoomController::class);
Route::resource('pesan', OrderController::class);
Route::resource('admin', AdminController::class);
Route::resource('resepsionis', ReceptionistController::class);
