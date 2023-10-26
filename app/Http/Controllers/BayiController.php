<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bayi;
use App\Models\Ibu;
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
    public function editDataBayi($id){
        $data = Bayi::find($id);
        $dataIbu = Ibu::all();
        return view('admin.editdata',compact('data','dataIbu'));
    }
    public function updateDataBayi(Request $request, string $id){
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
        if ($detailBayi) {
            $tanggalLahir = Carbon::parse($detailBayi->tglLahirBayi);
            $tanggalSekarang = Carbon::now();
            $selisihBulan = $tanggalLahir->diffInMonths($tanggalSekarang);
            return view('admin.dataKesehatanAnak', compact('detailBayi', 'selisihBulan'));
        } else {
            // Handle ketika data bayi tidak ditemukan, misalnya dengan menampilkan pesan kesalahan.
            return redirect()->route('dashboard')->with('error', 'Data bayi tidak ditemukan.');
        }
    }
}
