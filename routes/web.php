<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WdController;


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

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/wd-logout', [WdController::class, 'logout']);


Route::get('/', function () {
    return view('index');
});

Route::get('/master', function () {
    return view('wd-master');
});

Route::post('/attend', [WdController::class, 'attend'])->name('attend');
Route::post('/create', [WdController::class, 'createGuest'])->name('createGuest');
Route::match(['get', 'post'],'/update', [WdController::class, 'updateGuest'])->name('updateGuest');
Route::match(['get', 'post'],'/booking', [WdController::class, 'bookRoom'])->name('bookRoom');
Route::get('/profile', [WdController::class, 'showProfile'])->name('showProfile');



Route::get('/travel-info', function () {
    return view('travel-info');
});

Route::get('/transfer-info', function () {
    return view('transfer-info');
});

Route::get('/bg-info', function () {
    return view('bg-info');
});

Route::get('/region-info', function () {
    return view('region-info');
});

Route::get('/country-info', function () {
    return view('country-info');
});

//Route::get('/test', [WdController::class, 'test']);


Route::get('/{locale?}', function ($locale = null) {
    if (isset($locale) && in_array($locale, config('app.available_locales'))) {
        app()->setLocale($locale);
    }

    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
