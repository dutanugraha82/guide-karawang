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

Route::get('/', [FNBController::class, 'index']);
Route::get('/hisgov',[HisGovController::class, 'index']);
Route::get('/street', [StreetController::class, 'index']);
