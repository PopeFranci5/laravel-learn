<?php

use App\Http\Controllers\MoneyController;
use App\Http\Controllers\MoneyVariationsController;
use App\Http\Controllers\StocksController;
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

Route::get('/money', [MoneyController::class, 'api']);
Route::get('/stocks', [StocksController::class, 'index']);
Route::get('/moneyvariations', [MoneyVariationsController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
