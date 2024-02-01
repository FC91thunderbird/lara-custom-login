<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [AuthController::class,'dashboard'])->name('dashboard');
Route::get('/login', [AuthController::class,'login']);
Route::post('/login', [AuthController::class,'auth'])->name('login');


Route::group(['middleware' => ['auth']], function() {
    Route::get('/logout', [AuthController::class,'logout'])->name('logout');
});

Route::group(['prefix'=> 'admin', 'middleware'=>['auth']], function(){
    Route::resource('/users', UsersController::class);
    Route::resource('/roles', RolesController::class);
    Route::resource('/permissions', PermissionController::class);
});