<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AssetController;
use App\Http\Controllers\api\VendorController;
use App\Http\Controllers\api\AssestAssignmentController;

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
Route::get('asset', [AssetController::class, 'index']);
Route::get('asset/{id}', [AssetController::class, 'show']);
Route::post('asset', [AssetController::class, 'store']);
Route::put('asset/{id}', [AssetController::class, 'update']);
Route::delete('asset/{id}', [AssetController::class, 'destroy']);

// VENDORS ENDPOINTS
Route::get('vendors', [VendorController::class, 'index']);
Route::get('vendor/{id}', [VendorController::class, 'show']);
Route::post('vendor', [VendorController::class, 'store']);
Route::put('vendor/{id}', [VendorController::class, 'update']);
Route::delete('vendor/{id}', [VendorController::class, 'destroy']);

// ASSET-ASSIGNMENT ENDPOINT
Route::get('asset_assignments', [AssetAssignmentController::class, 'index']);
Route::get('asset_assignment/{id}', [AssetAssignmentController::class, 'show']);
Route::post('asset_assignment', [AssetAssignmentController::class, 'store']);
Route::put('asset_assignment/{id}', [AssetAssignmentController::class, 'update']);
Route::delete('asset_assignment/{id}', [AssetAssignmentController::class, 'destroy']);
