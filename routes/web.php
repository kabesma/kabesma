<?php

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

Route::prefix('admin')->group(function () {

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('table-list', function () {
            return view('pages.table_list');
        })->name('table');

        Route::get('typography', function () {
            return view('pages.typography');
        })->name('typography');

        Route::get('icons-two', function () {
            return view('pages.icons-two');
        })->name('icons');

        Route::get('icons', function () {
            return view('pages.icons');
        })->name('icons');

        Route::get('map', function () {
            return view('pages.map');
        })->name('map');

        Route::get('notifications', function () {
            return view('pages.notifications');
        })->name('notifications');

        Route::get('upgrade', function () {
            return view('pages.upgrade');
        })->name('upgrade');
    });

});



