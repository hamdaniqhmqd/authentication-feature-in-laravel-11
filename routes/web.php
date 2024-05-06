<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [HomeController::class, 'index']);

Route::get('/', [AuthController::class, 'login']);
Route::post('/process_login', [AuthController::class, 'process_login']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/process_register', [AuthController::class, 'process_register']);

Route::get('/forget', [AuthController::class, 'forget']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard',[AdminController::class, 'dashboard'])->name('admin/dashboard');
});

Route::group(['middleware' => 'manager'], function () {
    Route::get('/manager/dashboard',[AdminController::class, 'dashboard'])->name('manager/dashboard');
});
