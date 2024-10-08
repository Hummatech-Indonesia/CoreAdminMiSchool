<?php

use App\Http\Controllers\API\ApiFaqController;
use App\Http\Controllers\API\ApiLoginController;
use App\Http\Controllers\API\ApiRfidController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('rfid-check', [ApiRfidController::class, 'check']);
Route::get('faq', [ApiFaqController::class, 'index']);

Route::post('login', [ApiLoginController::class, 'login']);

