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
Route::get('/dashboardCreateProduct',[DashboardProductController::class,'create'])->name('dashboard.product.create');
Route::post('/dashboardStoreProduct',[DashboardProductController::class,'store'])->name('dashboard.product.store');
Route::get('/dashboardShowProduct/{id}',[DashboardProductController::class,'show'])->name('dashboard.product.show');
Route::post('/dashboardUpdateProduct/{id}',[DashboardProductController::class,'update'])->name('dashboard.product.update');
Route::get('/',[productListController::class,'index'])->name('general.product');
Route::get('/{id}',[productListController::class,'show'])->name('general.product.show');
Route::post('/co/{id}',[productListController::class,'edit'])->name('general.product.edit');
Route::post('/co_proses/{id}',[productListController::class,'update'])->name('general.product.update');

// Route::get('/', function () {
//     return view('dashboard.admin.index');
// });
