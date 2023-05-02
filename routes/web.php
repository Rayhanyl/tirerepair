<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthenticationController,
    CustomerController,
};
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


Route::get('/', [AuthenticationController::class, 'landing_page'])->name('landing.page');
Route::get('/Login', [AuthenticationController::class, 'login_page'])->name('login.page');
Route::get('/Register', [AuthenticationController::class, 'register_page'])->name('register.page');
Route::post('/Authentication', [AuthenticationController::class, 'authentication'])->name('authentication');
Route::post('/Register', [AuthenticationController::class, 'register'])->name('register');
Route::get('/Logout', [AuthenticationController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () { 
    Route::get('/Dashboard', [CustomerController::class, 'home_page'])->name('home.page');
    Route::get('/Catalog', [CustomerController::class, 'catalog_page'])->name('catalog.page');
    Route::get('/OrderForm', [CustomerController::class, 'orderform_page'])->name('orderform.page');
    Route::get('/OrderList', [CustomerController::class, 'orderlist_page'])->name('orderlist.page');
    Route::get('/OrderDetail', [CustomerController::class, 'orderdetail_page'])->name('orderdetail.page');
});