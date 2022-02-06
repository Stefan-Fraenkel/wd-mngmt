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

Route::get('/', function () {
    return view('index');
});

Route::get('/master', function () {
    return view('wd-master');
});

Route::post('/attend', [WdController::class, 'attend'])->name('attend');
Route::post('/create', [WdController::class, 'createGuest'])->name('createGuest');
Route::get('/booking', [WdController::class, 'bookRoom'])->name('bookRoom');
Route::match(['get', 'post'],'/update', [WdController::class, 'updateGuest'])->name('updateGuest');



Route::get('/test', [WdController::class, 'test']);


Route::get('/{locale?}', function ($locale = null) {
    if (isset($locale) && in_array($locale, config('app.available_locales'))) {
        app()->setLocale($locale);
    }

    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
