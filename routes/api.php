<?php

use App\Http\Controllers\AuthenticateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeneficiaryController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\StoreController;

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

Route::post('/login', [AuthenticateController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::apiResource('/beneficiary', BeneficiaryController::class);
    Route::apiResource('/product', ProductController::class);
    Route::apiResource('/store', StoreController::class);
    Route::apiResource('/location', LocationController::class)->only(['index', 'store', 'destroy']);
    Route::apiResource('/province', ProvinceController::class)->only(['index', 'store', 'destroy']);
    Route::apiResource('/recipe', RecipeController::class);
    Route::apiResource('/date', DateController::class);
});
