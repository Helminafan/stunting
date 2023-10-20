<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bayi;
use App\Models\KesehatanBayi;

class KesehatanBayiController extends Controller
{
    // function for "tambah data kesehatan bayi"
    public function tambahDataKesehatanBayi(Request $request){
        $dataKesehatanBayi = new KesehatanBayi();
        $dataKesehatanBayi->tinggiBadanBayi = $request->tb;
        $dataKesehatanBayi->beratBadanBayi = $request->bb;
        $dataKesehatanBayi->lingkarKepala = $request->lingkep;
        $dataKesehatanBayi->keterangan = $request->ket;
        $dataKesehatanBayi->usiaBayi = $request->usiaBayi;
        $dataKesehatanBayi->bayi_id = $request->bayi_id;
        $dataKesehatanBayi->save();
        return redirect()->route('dataBayi.view');
    }

    // function for show "data kesehatan bayi"
    public function viewKesehatanBayi($id){
        $dataKesehatanBayi = KesehatanBayi::find($id)->get();
        return view('admin.dataKesehatanAnak', compact('dataKesehatanBayi'));
    }
}
