<?php

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
    return view('welcome');
});


Route::prefix('kader')->group(function () {
    //kader
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/kalender', function () {
        return view('admin.kalender');
    });
    Route::get('/tambahData', function () {
        return view('admin.tambahData');
    });
    Route::get('/dataAnak', function () {
        return view('admin.dataAnak');
    });
});
Route::prefix('user')->group(function () {
    Route::get('/home', function () {
        return view('user.home');
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
