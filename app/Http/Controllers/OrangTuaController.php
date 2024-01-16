<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Ayah;
use App\Models\Bayi;
use App\Models\Ibu;
use App\Models\KesehatanBayi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;


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
        Alert::success('Sukses', 'Akun berhasil dibuat');
        return redirect()->route('dashboard');
    }
    public function homeDashboard()
    {
        $artikel = Artikel::all();
        $user = Auth::user(); 
        $ibuId = $user->dataIbu->id;
        $data = Bayi::with('ibuBayi','statusBayi')
            ->where('ibu_id', $ibuId)
            ->get();
            $selisihBulan = [];
            foreach ($data as $bayi) {
                if (isset($bayi->tglLahirBayi)) {
                    $tanggalLahir = Carbon::parse($bayi->tglLahirBayi);
                    $tanggalSekarang = Carbon::now();
                    $selisihBulan[] = $tanggalLahir->diffInMonths($tanggalSekarang);
                    $bayi->kesehatanBayi()->latest()->first();
                } else {
                    // Jika tglLahirBayi tidak tersedia
                    $selisihBulan[] = '';
                }
            }
        return view('user.home', compact('user','data','selisihBulan','artikel'));
    }
    public function dataBayi($id){
        $detailBayi = Bayi::find($id);
        $year = KesehatanBayi::select(DB::raw("DATE_FORMAT(created_at, '%Y') AS year"))
            ->where('bayi_id', $detailBayi->id)
            ->GroupBy(DB::raw("DATE_FORMAT(created_at, '%Y')"))
            ->OrderBy(DB::raw('created_at'))
            ->pluck('year');

       
        $results = DB::table('kesehatanbayi')
            ->select(
                DB::raw("DATE_FORMAT(created_at, '%M') AS nama_bulan"),
                DB::raw("DATE_FORMAT(created_at, '%Y') AS tahun"),
                'tinggiBadanBayi'
            )
            ->where('bayi_id', $detailBayi->id)
            ->groupBy(
                DB::raw("DATE_FORMAT(created_at, '%M')"),
                DB::raw("DATE_FORMAT(created_at, '%Y')"),
                'tinggiBadanBayi'
            )
            ->orderBy(DB::raw("Month(created_at)"))
            ->get();
        
        // Mengkonversi nilai nama_bulan ke huruf kecil

        if ($detailBayi) {
            $tanggalLahir = Carbon::parse($detailBayi->tglLahirBayi);
            $tanggalSekarang = Carbon::now();
            $selisihBulan = $tanggalLahir->diffInMonths($tanggalSekarang);
            $tabelKesehatan = KesehatanBayi::where('bayi_id', $detailBayi->id)->get();
            return view('user.dataBayi', compact('detailBayi', 'selisihBulan', 'tabelKesehatan', 'results','year'));
        } else {
            // Handle ketika data bayi tidak ditemukan, misalnya dengan menampilkan pesan kesalahan.
            return redirect()->route('dashboard')->with('error', 'Data bayi tidak ditemukan.');
        }
    }
    public function ganti_Foto(Request $request, string $id)
    {
        $data = User::find($id);
        if ($request->hasFile('inputGambar')) {
            Storage::delete($data->profile_photo_path);
            $photo_Profil = $request->file('inputGambar')->store('inputGambar');
            $data->profile_photo_path = $photo_Profil;
        }
        $data->update();
        return redirect()->route('edit_profile');
    }
}
