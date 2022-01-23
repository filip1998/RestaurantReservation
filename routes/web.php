<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\UserController;
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

Route::get('/',[HomeController::class,'dashboard'])
    ->name('dashboard');
Route::get('/restaurants', [RestaurantController::class,'index'])
    ->name('restaurants.index');
Route::get('/tables',[TableController::class,'index'])
    ->name('tables.index');
Route::get('/employees',[EmployeeController::class,'index'])
    ->name('employees.index');
Route::get('/reservations',[ReservationController::class,'index'])
    ->name('reservations.index');
Route::get('/users',[UserController::class,'index'])
    ->name('users.index');

Route::get('/restaurants/delete/{restaurant}',[RestaurantController::class,'destroy'])
    ->name('restaurants.destroy');
Route::get('tables/delete/{table}',[TableController::class,'destroy'])
    ->name('tables.destroy');
Route::get('/employees/delete/{employee}',[EmployeeController::class,'destroy'])
    ->name('employees.destroy');
Route::get('/reservations/delete/{reservation}',[ReservationController::class,'destroy'])
    ->name('reservations.destroy');
Route::get('/users/delete/{user}',[UserController::class,'destroy'])
    ->name('users.destroy');

Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'attemptLogin'])->name('auth.attempt_login');

Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'attemptRegister'])->name('auth.attempt_register');