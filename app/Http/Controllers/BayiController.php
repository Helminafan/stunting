<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bayi;
use App\Models\Ibu;

class BayiController extends Controller
{
    // function for show "data bayi"
    public function daftarBayi(){
        $dataBayi['allDataBayi'] = Bayi::all();
        return view('admin.dataAnak', $dataBayi);
    }

    // function for show "tambahData" view
    public function tambahDataBayi(){
        $dataIbu = Ibu::all();
        return view('admin.tambahData', compact('dataIbu'));
    }

    // function for store data from 'tambahDataBayi' function
    public function simpanDataBayi(Request $request){
        $dataBayi = new Bayi();
        $dataBayi -> namaBayi = $request -> namaBayi;
        $dataBayi -> tglLahirBayi = $request -> tglLahirBayi;
        $dataBayi -> tmptLahirBayi = $request -> tmptLahirBayi;
        $dataBayi -> jenisKelamin = $request -> jenisKelamin;
        $dataBayi -> ibu_id = $request -> ibu_id;
        $dataBayi ->save();
        return redirect()->route('dataBayi.view');
    }

    // function for view "detailbayi"
    public function detailDataBayi($id){
        $detailBayi = Bayi::find($id);
        return view('admin.dataKesehatanAnak', compact('detailBayi'));
    }
}
