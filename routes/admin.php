<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

Route::group(['prefix' => '/'], function () {
    Route::get('login', [Admin\LoginController::class, 'loginForm'])->name('admin.login');
    Route::post('login', [Admin\LoginController::class, 'login'])->name('admin.login.post');
    Route::get('logout', [Admin\LoginController::class, 'logout'])->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', function () {
            return view('admin.dashboard.index');
        })->name('admin.dashboard');
        Route::get('/product', function () {
            return view('admin.Ecommerce.index');
        })->name('admin.product');
        Route::get('/product-create', function () {
            return view('admin.Ecommerce.create');
        })->name('admin.productcreate');
        Route::get('/order', function () {
            return view('admin.order.index');
        })->name('admin.order');
        Route::get('/order-detail', function () {
            return view('admin.order.detail');
        })->name('admin.orderdetail');  
    });
});
