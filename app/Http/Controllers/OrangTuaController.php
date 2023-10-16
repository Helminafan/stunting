<?php

namespace App\Http\Controllers;

use App\Models\Ayah;
use App\Models\Bayi;
use App\Models\Ibu;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrangTuaController extends Controller
{
    public function create_ibu()
    {
        return view('user/dataIbu');
    }
    public function storeIbu(Request $request)
    {
        $data = new Ibu();
        $data->nama = $request->nama;
        $data->nik = $request->nik;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->agama = $request->agama;
        $data->user_id = Auth::user()->id;
        $data->save();
        $updateData = User::find(Auth::user()->id);
        $updateData->ibu_complete = true;
        $updateData->update();
        return redirect()->route('dashboard');
    }
    public function create_ayah()
    {
        return view('user/dataAyah');
    }
    public function storeAyah(Request $request)
    {
        $data = new Ayah();
        $data->nama = $request->nama;
        $data->nik = $request->nik;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->telpon = $request->telpon;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->agama = $request->agama;
        $data->user_id = Auth::user()->id;
        $data->save();
        $updateData = User::find(Auth::user()->id);
        $updateData->ayah_complete = true;
        $updateData->update();
        return redirect()->route('dashboard');
    }
    public function homeDashboard()
    {
        $user = Auth::user();
        $ibuId = $user->dataIbu->id;
        $data = Bayi::with('ibuBayi')
            ->where('ibu_id', $ibuId)
            ->get();
            $selisihBulan = [];
            foreach ($data as $bayi) {
                if (isset($bayi->tglLahirBayi)) {
                    $tanggalLahir = Carbon::parse($bayi->tglLahirBayi);
                    $tanggalSekarang = Carbon::now();
                    $selisihBulan[] = $tanggalLahir->diffInMonths($tanggalSekarang);
                } else {
                    // Jika tglLahirBayi tidak tersedia
                    $selisihBulan[] = '';
                }
            }
        return view('user.home', compact('data','selisihBulan'));
    }
}
