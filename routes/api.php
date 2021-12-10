<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//ASSET ENDPOINTS
Route::get('/asset', [App\Http\Controllers\AssetController::class, 'index'])->name('asset');


Route::get('/vendor', [App\Http\Controllers\AssetController::class, 'index'])->name('vendor');

Route::get('/assetassignment', [App\Http\Controllers\AssetController::class, 'index'])->name('assetassignment');