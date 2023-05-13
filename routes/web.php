<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('loginConfirm',[LoginController::class,'store'])->name('login.confirm');
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/registerConfirm',[RegisterController::class,'store'])->name('register.store');
Route::get('/dashboardPorduct',[dashboardPorduct::class,'index'])->name('dashboard.product');
Route::get('/', function () {
    return view('welcome');
});
