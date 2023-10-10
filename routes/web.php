<?php

use App\Http\Controllers\KalenderController;
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
    Route::get('/kalender', [KalenderController::class, 'index'])->name('kalender');
    Route::get('/tambahData', function () {
        return view('admin.tambahData');
    });
    Route::get('/dataAnak', function () {
        return view('admin.dataAnak');
    });
    Route::get('/akun', function () {
        return view('admin.akun');
    });
    Route::get('/akunkader', function () {
        return view('admin.akunKader');
    });
    Route::get('/kepriv', function () {
        return view('admin.kepriv');
    });
    Route::get('/tentang', function () {
        return view('admin.tentang');
    });
    Route::get('/tambahJadwal', [KalenderController::class,'create'])->name('tambahKalender');
    Route::post('/storeJadwal', [KalenderController::class,'store'])->name('storeKalender');
    Route::get('/getKalender',[KalenderController::class,'getKalender']);
    
});
Route::prefix('user')->group(function () {
    Route::get('/home', function () {
        return view('user.home');
    });
    Route::get('/bayi', function () {
        return view('user.bayi');
    });
    Route::get('/akun', function () {
        return view('user.akun');
    });
    Route::get('/kalender', function () {
        return view('user.calender');
    });
    Route::get('/dataKesehatanPribadi', function () {
        return view('user.dataKesehatanPribadi');
    });
    Route::get('/dataPribadi', function () {
        return view('user.dataPribadi');
    });
    Route::get('/gantiPassword', function () {
        return view('user.gantiPassword');
    });
    Route::get('/editProfil', function () {
        return view('user.editProfil');
    });
    Route::get('/dataBayi', function () {
        return view('user.dataBayi');
    });
    Route::get('/akunsaya', function () {
        return view('user.akunSaya');
    });
    Route::get('/notif', function () {
        return view('user.notifikasiView');
    });
    Route::get('/kepriv', function () {
        return view('user.kepriv');
    });
    Route::get('/tentang', function () {
        return view('user.tentangapp');
    });
    Route::get('/akunsaya/editprofil', function () {
        return view('user.editprofil');
    });
    Route::get('/akunsaya/gantipass', function () {
        return view('user.gantipassword');
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
