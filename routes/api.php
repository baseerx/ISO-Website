<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\LoadDrawnController;
use App\Http\Controllers\API\SmsMeteringController;
use App\Http\Controllers\API\DemandController;
use App\Http\Controllers\API\DataBannerController;
use App\Http\Controllers\API\WeatherTableController;
use App\Http\Controllers\API\DiscosController;
use App\Http\Controllers\API\NcpController;
use App\Http\Controllers\API\FuelMixController;

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

Route::apiResource('ldrawn', LoadDrawnController::class);
Route::apiResource('smsdata', SmsMeteringController::class);
Route::apiResource('ldemand', DemandController::class);
Route::apiResource('dbanner', DataBannerController::class);
Route::apiResource('weather', WeatherTableController::class);
Route::apiResource('discos', DiscosController::class);
Route::apiResource('ncp', NcpController::class);
Route::apiResource('fuelmix', FuelMixController::class);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

