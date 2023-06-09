<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Product\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [LoginController::class, 'checkLogin']);
});

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::group(['prefix' => 'product'], function () {
        Route::get('list', [ProductController::class, 'index']);
        Route::get('detail/{product_id}', [ProductController::class, 'show']);
    });
});
