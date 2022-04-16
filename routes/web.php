<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WdController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Session;

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

Route::controller(WdController::class)->group(function () {
    Route::post('/attend', 'attend')->name('attend');
    Route::post('/create', 'createGuest')->name('createGuest');
    Route::match(['get', 'post'],'/update', 'updateGuest')->name('updateGuest');
    Route::match(['get', 'post'],'/booking', 'bookRoom')->name('bookRoom');
    Route::get('/profile', 'showProfile')->name('showProfile');
    Route::get('/wd-logout', 'logout');
});

Route::get('/switch', [LanguageController::class, 'simpleSwitch']);
Route::get('/bg', [LanguageController::class, 'bgStart']);

Route::middleware(['web'])->group(function () {
    Route::get('/', function () {
        if (Session()->has('applocale') AND array_key_exists(Session()->get('applocale'), config('app.available_locales'))) {
            app()->setLocale(Session()->get('applocale'));
        }
        return view('index');
    });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    if (Session()->has('applocale') AND array_key_exists(Session()->get('applocale'), config('app.available_locales'))) {
        app()->setLocale(Session()->get('applocale'));
    }
    return view('index');
})->name('dashboard');

Route::get('/travel-info', function () {
    if (Session()->has('applocale') AND array_key_exists(Session()->get('applocale'), config('app.available_locales'))) {
        app()->setLocale(Session()->get('applocale'));
    }
    return view('travel-info');
});

Route::get('/transfer-info', function () {
    if (Session()->has('applocale') AND array_key_exists(Session()->get('applocale'), config('app.available_locales'))) {
        app()->setLocale(Session()->get('applocale'));
    }
    return view('transfer-info');
});

Route::get('/bg-info', function () {
    if (Session()->has('applocale') AND array_key_exists(Session()->get('applocale'), config('app.available_locales'))) {
        app()->setLocale(Session()->get('applocale'));
    }
    return view('bg-info');
});

Route::get('/region-info', function () {
    if (Session()->has('applocale') AND array_key_exists(Session()->get('applocale'), config('app.available_locales'))) {
        app()->setLocale(Session()->get('applocale'));
    }
    return view('region-info');
});

Route::get('/country-info', function () {
    if (Session()->has('applocale') AND array_key_exists(Session()->get('applocale'), config('app.available_locales'))) {
        app()->setLocale(Session()->get('applocale'));
    }
    return view('country-info');
});

