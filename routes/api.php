<?php

use App\Http\Controllers\API\ArticleController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [UserController::class, 'register']);
Route::post('login',  [UserController::class, 'login']);

Route::middleware('auth:api')->group(function () {

    Route::get('article',  [ArticleController::class, 'index']);
    Route::get('article/{article}',  [ArticleController::class, 'show']);
    Route::put('article/update/{article}',  [ArticleController::class, 'update']);
    Route::delete('article/destroy/{article}',  [ArticleController::class, 'destroy']);
    Route::post('article',  [ArticleController::class, 'store']);
    Route::get('profile',  [UserController::class, 'profile']);
    Route::get('logout',  [UserController::class, 'logout']);
});
