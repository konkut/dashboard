<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiJS\ConnectController;
use App\Http\Controllers\ApiJS\UserController;
use App\Http\Controllers\CookiesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TwoFactorController;
use App\Http\Controllers\UsersController;

Route::get('/', [DashboardController::class,'getHome'])->name('dashboard');

//users
Route::get('/users/{type}', [UsersController::class,'getUsersList'])->name('users_list');
Route::get('/user/{id}/edit', [UsersController::class,'getUserEdit'])->name('user_edit');
Route::get('/users/{id}/delete', [UsersController::class,'getUsersList'])->name('user_delete');
Route::get('/users/{id}/permission', [UsersController::class,'getUsersList'])->name('user_permissions');


Route::get('/settings', [DashboardController::class,'getHom'])->name('settings');
Route::get('/profile', function(){
    return view('/components/component/breadcrumb');
})->name('profile');

//connect Router
Route::get('/login',[ConnectController::class,"getLogin"])->name('login');
Route::get('/logout',[ConnectController::class,"getLogout"])->name('logout');
Route::get('/connect/two/factor',[TwoFactorController::class,"getCode"])->name('connect_two_factor');


Route::prefix('/api-js')->group(function () {
    //connect Module
    Route::post('/connect/login', [ConnectController::class,"postLogin"]);
    Route::post('/connect/twoauth', [ConnectController::class,"postAuthCode"]);

    //user Module
    Route::post('/user/update', [UserController::class,"postUserUpdate"]);

});



// Route::get('/alert', function () {
//     return view("alert");
// });

Route::get('/setCookie',[ CookiesController::class,'setCookie']);
Route::get('/getCookie',[ CookiesController::class,'getCookie']);
Route::get('/delCookie',[ CookiesController::class,'delCookie']);


