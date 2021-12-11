<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\AssestAssignmentController;

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
Route::resource('assets', AssetController::class);

// VENDORS ENDPOINTS
Route::resource('vendors', VendorController::class);

// ASSET-ASSIGNMENT ENDPOINT
Route::resource('asset_assignment', AssetAssignmentController::class);