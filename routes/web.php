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

// Route for admin/user login

 Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
 Route::post('/', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('forlogin');



 Route::middleware('auth')->group(function () {

     //users Route

    Route::group(['middleware'=>['protecteduser']],function(){

        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/fileUpload', [App\Http\Controllers\UserController::class, 'fileupload'])->name('fileupload');
        Route::post('/filecreate', [App\Http\Controllers\UserController::class, 'createFile'])->name('create');

    });


    Route::group(['middleware'=>['protectedpage']],function(){

            // admin route

            Route::get('/AdminHome', [App\Http\Controllers\AdminController::class, 'index'])->name('AdminHome');
            Route::get('/userList', [App\Http\Controllers\UserController::class, 'userList'])->name('UserList');
            Route::get('/update/{id}', [App\Http\Controllers\UserController::class, 'userListupdate'])->name('UserListupdate');
            Route::delete('/delete/{id}', [App\Http\Controllers\UserController::class, 'userListdelete'])->name('UserListdelete');

        });




        });

