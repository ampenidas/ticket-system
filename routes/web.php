<?php

use App\Http\Controllers\FileUploadController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TicketActivityController;
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

Route::resource('/activity', TicketActivityController::class);
Route::resource('/customers', CustomerController::class);
Route::resource('/tickets', TicketController::class);
Route::resource('/inventory', InventoryController::class);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('index');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/register', [RegisterController::class, 'create'])->name('register');
Route::resource('/upload', FileUploadController::class);
