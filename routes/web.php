<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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



Auth::routes();



 Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
 Route::post('/', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('forlogin');



 Route::middleware('auth')->group(function () {

//     Route::middleware('userType')->group(function () {

            // Admin Route

            Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
            Route::get('/AdminHome', [App\Http\Controllers\AdminController::class, 'index'])->name('AdminHome');
            Route::get('/userList', [App\Http\Controllers\UserController::class, 'userList'])->name('UserList');





            // task-Route




        });
    // });
