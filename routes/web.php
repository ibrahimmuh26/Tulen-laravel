<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\dashboardProductController;
use App\Http\Controllers\productListController;

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
Route::get('/dashboardPorduct',[DashboardProductController::class,'index'])->name('dashboard.product');
Route::get('/dashboardCreateProdut',[DashboardProductController::class,'create'])->name('dashboard.product.create');
Route::get('/dashboardStoreProdut',[DashboardProductController::class,'store'])->name('dashboard.product.store');
Route::get('/',[productListController::class,'index'])->name('general.product');
// Route::get('/', function () {
//     return view('dashboard.admin.index');
// });
