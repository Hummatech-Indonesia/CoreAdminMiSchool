<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\RfidController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SubDistrictController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('school', SchoolController::class);
Route::patch('school/{school}/enable', [SchoolController::class, 'active'])->name('school.active');
Route::patch('school/{school}/disable', [SchoolController::class, 'nonactive'])->name('school.nonactive');
Route::resource('rfid' ,RfidController::class)->except(['create']);
Route::put('rfid-create', [RfidController::class, 'create'])->name('rfid.create');

Route::get('get-cities', [CityController::class, 'show'])->name('city.show');
Route::get('get-sub-districts', [SubDistrictController::class, 'show'])->name('sub-district.show');

Route::get('faq', function(){
    return view('admin.pages.faq.faq');
})->name('faq.index');