<?php

use App\Http\Controllers\FNBController;
use App\Http\Controllers\HisGovController;
use App\Http\Controllers\StreetController;
use Illuminate\Support\Facades\Route;

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

// Route of Food & Beverages
Route::controller(FNBController::class)->group(function () {
    Route::get('/','index');
});

// Route of History and Goverment
Route::controller(HisGovController::class)->group(function () {
    Route::get('/hisgov','index');
});

// Route of Stree Food
Route::controller(StreetController::class)->group(function () {
    Route::get('/street','index');
});
