<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bayi;
use App\Models\Ibu;
use App\Models\KesehatanBayi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class BayiController extends Controller
{
    // function for show "data bayi"
    public function daftarBayi()
    {
        $dataBayi['allDataBayi'] = Bayi::all();
        return view('admin.dataAnak', $dataBayi);
    }

    //function for show data bayi to edit

    public function showBayi()
    {
        $dataBayi['allDataBayi'] = Bayi::all();
        return view('admin.showAnak', $dataBayi);
    }
    // function for show "tambahData" view
    public function tambahDataBayi()
    {
        $dataIbu = Ibu::all();
        return view('admin.tambahData', compact('dataIbu'));
    }

    // function for store data from 'tambahDataBayi' function
    public function simpanDataBayi(Request $request)
    {
        $dataBayi = new Bayi();
        $dataBayi->nikBayi = $request->nikBayi;
        $dataBayi->namaBayi = $request->namaBayi;
        $dataBayi->tglLahirBayi = $request->tglLahirBayi;
        $dataBayi->tmptLahirBayi = $request->tmptLahirBayi;
        $dataBayi->jenisKelamin = $request->jenisKelamin;
        $dataBayi->ibu_id = $request->ibu_id;
        $dataBayi->save();
        return redirect()->route('dataBayi.view');
    }

    // function for view "edit data bayi"
    public function editDataBayi($id)
    {
        $data = Bayi::find($id);
        $dataIbu = Ibu::all();
        return view('admin.editData', compact('data', 'dataIbu'));
    }

    // function for update "data bayi"
    public function updateDataBayi(Request $request, string $id)
    {
        $dataBayi = Bayi::find($id);
        $dataBayi->nikBayi = $request->nikBayi;
        $dataBayi->namaBayi = $request->namaBayi;
        $dataBayi->tglLahirBayi = $request->tglLahirBayi;
        $dataBayi->tmptLahirBayi = $request->tmptLahirBayi;
        $dataBayi->jenisKelamin = $request->jenisKelamin;
        $dataBayi->ibu_id = $request->ibu_id;
        $dataBayi->update();
        return redirect()->route('dataBayi.view');
    }

    // function for view "detailbayi"
    public function detailDataBayi($id)
    {
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
            return view('admin.dataKesehatanAnak', compact('detailBayi', 'selisihBulan', 'tabelKesehatan', 'results','year'));
        } else {
            // Handle ketika data bayi tidak ditemukan, misalnya dengan menampilkan pesan kesalahan.
            return redirect()->route('dashboard')->with('error', 'Data bayi tidak ditemukan.');
        }
    }
}
