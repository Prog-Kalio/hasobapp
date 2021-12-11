<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\AssestAssignmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/assets', function () {
    return view('addasset');
});

Route::get('/vendors', function() {
    return view('vendors');
});

Route::get('/asset_assignments', function() {
    return view('asset_assignments');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/register', function() {
    return view('register');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//ASSET ENDPOINTS
Route::resource('assets', AssetController::class);

// VENDORS ENDPOINTS
Route::resource('vendors', VendorController::class);

// ASSET_ASSIGNMENT ENDPOINT
Route::resource('asset_assignment', AssetAssignmentController::class);
