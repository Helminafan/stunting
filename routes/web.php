<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KalenderController;
use App\Http\Controllers\OrangTuaController;
use App\Http\Controllers\BayiController;
use App\Http\Controllers\KesehatanBayiController;
use App\Http\Controllers\RoleController;
use App\Models\Bayi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;
use App\Http\Controllers\ArtikelController;

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
    return view('auth/login');
});
Route::get('/coba', function () {
    $jumlahBayiStunting = Bayi::whereHas('kesehatanBayi', function ($query) {
        $query->where('status', 'stunting')
            ->where('id', function ($subquery) {
                $subquery->from('kesehatanbayi')
                    ->select('id')
                    ->whereRaw('bayi.id = kesehatanbayi.bayi_id')
                    ->orderBy('id', 'desc')
                    ->limit(1);
            });
    })->count();
    dd($jumlahBayiStunting);
    return view('user.coba');
});
Route::middleware(['AyahAccess', 'auth:sanctum', config('jetstream.auth_session', 'verified')])->group(function () {
    Route::get('dataAyah', [OrangTuaController::class, 'create_ayah'])->name('create_ayah');
    Route::post('/storeAyah', [OrangTuaController::class, 'storeAyah'])->name('storeAyah');
});
Route::middleware(['OneTimeAccess', 'auth:sanctum', config('jetstream.auth_session', 'verified')])->group(function () {
    Route::get('/dataIbu', [OrangTuaController::class, 'create_ibu'])->name('create_ibu');
    Route::post('/storeIbu', [OrangTuaController::class, 'storeIbu'])->name('storeIbu');
});

Route::group(['prefix' => 'user', 'middleware' => [
    'EnsureProfileCompleted',
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
]], function () {
    Route::get('/home', [OrangTuaController::class, 'homeDashboard'])->name('user.home');
    Route::post('/editPassword/{id}', [AuthController::class, 'gantiPassword'])->name('update_password');
    Route::post('/updateTelp/{id}', [AuthController::class, 'gantiTelp'])->name('update_telp');
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
    Route::get('/gantiPassword', function () {
        return view('user.gantiPassword');
    });
    Route::get('/editProfil', function () {
        return view('user.editProfil');
    });
    Route::get('/dataBayi/{id}', [OrangTuaController::class, 'dataBayi'])->name('user.dataBayi');
    Route::get('/akunsaya', function () {
        return view('user.akunSaya');
    })->name('edit_profile');
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
    Route::post('/update_profil/{id}', [OrangTuaController::class,'ganti_Foto'])->name('update_foto');
    Route::get('/akunsaya/gantipass/{id}', function () {
        return view('user.gantipassword');
    });
    Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('user.artikel');
});

Route::group(['prefix' => 'kader', 'middleware' => [
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
]], function () {
    Route::get('/dashboard', function () {
        $jumlahBayiStunting = Bayi::whereHas('kesehatanBayi', function ($query) {
            $query->where('status', 'stunting')
                ->where('id', function ($subquery) {
                    $subquery->from('kesehatanbayi')
                        ->select('id')
                        ->whereRaw('bayi.id = kesehatanbayi.bayi_id')
                        ->orderBy('id', 'desc')
                        ->limit(1);
                });
        })->count();
        $jumlahBayiNormal = Bayi::whereHas('kesehatanBayi', function ($query) {
            $query->where('status', 'normal')
                ->where('id', function ($subquery) {
                    $subquery->from('kesehatanbayi')
                        ->select('id')
                        ->whereRaw('bayi.id = kesehatanbayi.bayi_id')
                        ->orderBy('id', 'desc')
                        ->limit(1);
                });
        })->count();
        return view('admin.dashboard',compact('jumlahBayiStunting','jumlahBayiNormal'));
    })->name('admin.dashboard');
    Route::get('/kalender', [KalenderController::class, 'index'])->name('kalender');
    Route::get('/tambahData', [BayiController::class, 'tambahDataBayi'])->name('tambahData.view');
    Route::get('/dataAnak', [BayiController::class, 'daftarBayi'])->name('dataBayi.view');
    Route::get('/showDataAnak', [BayiController::class, 'showBayi'])->name('showBayi.view');
    Route::post('/storeDataAnak', [BayiController::class, 'simpanDataBayi'])->name('dataBayi.store');
    Route::get('/detailData/{id}', [BayiController::class, 'detailDataBayi'])->name('detailData.edit');
    Route::get('/editData/{id}', [BayiController::class, 'editDataBayi'])->name('editData.view');
    Route::post('/storeKesehatanBayi', [KesehatanBayiController::class, 'tambahDataKesehatanBayi'])->name('kesehatanBayi.store');
    Route::post('/updateKesehatanBayi/{id}', [BayiController::class, 'updateDataBayi'])->name('kesehatanBayi.update');
    Route::get('/akun', function () {
        return view('admin.akun');
    });

    Route::get('/dataKesehatanAnak', function () {
        return view('admin.dataKesehatanAnak');
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
    // Route::get('/data-kesehatan', function () {
    //     return view('admin.dataKesehatanAnak');
    // });
    Route::get('/tambahJadwal', [KalenderController::class, 'create'])->name('tambahKalender');
    Route::post('/storeJadwal', [KalenderController::class, 'store'])->name('storeKalender');
    Route::get('/getKalender', [KalenderController::class, 'getKalender']);
    Route::get('/tambahArtikel', [ArtikelController::class, 'create']);
    Route::post('/storeArtikel', [ArtikelController::class, 'store'])->name('artikel.store');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [RoleController::class, 'redirectUser'])->name('dashboard');
});
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('admin.logout')->middleware('auth');
