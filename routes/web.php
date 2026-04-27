<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', [TestController::class, 'index']);

// 一覧
Route::get('/users', [UserController::class, 'index']);

// 作成画面
Route::get('/users/create', [UserController::class, 'create']);

// 登録処理
Route::post('/users', [UserController::class, 'store']);