<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;

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

Route::get('/',[SiteController::class, 'home'])->name('home');


Route::get('/customers',[CustomerController::class, 'index'])->name('customers');
Route::get('/customers/create',[CustomerController::class, 'create'])->name('customers');
Route::post('/customers/create',[CustomerController::class, 'store'])->name('customers');
Route::get('/customers/{customer}',[CustomerController::class, 'edit'])->name('customers');
Route::patch('/customers/{customer}',[CustomerController::class, 'update'])->name('customers');
Route::delete('/customers/{customer}',[CustomerController::class, 'delete'])->name('customers');

Route::get('/rooms',[RoomController::class, 'index'])->name('rooms');
Route::get('/rooms/create',[RoomController::class, 'create'])->name('rooms');
Route::post('/rooms/create',[RoomController::class, 'store'])->name('rooms');
Route::get('/rooms/{room}',[RoomController::class, 'edit'])->name('rooms');
Route::patch('/rooms/{room}',[RoomController::class, 'update'])->name('rooms');
Route::delete('/rooms/{room}',[RoomController::class, 'delete'])->name('rooms');

Route::get('/bookings',[BookingController::class, 'index'])->name('bookings');
Route::get('/bookings/create',[BookingController::class, 'create'])->name('bookings');
Route::post('/bookings/create',[BookingController::class, 'store'])->name('bookings');
Route::get('/bookings/{booking}',[BookingController::class, 'edit'])->name('bookings');
Route::patch('/bookings/{booking}',[BookingController::class, 'update'])->name('bookings');
Route::delete('/bookings/{booking}',[BookingController::class, 'delete'])->name('bookings');
