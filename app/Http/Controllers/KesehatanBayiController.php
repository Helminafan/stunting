<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bayi;
use App\Models\KesehatanBayi;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;

class KesehatanBayiController extends Controller
{
    // function for "tambah data kesehatan bayi"
    public function tambahDataKesehatanBayi(Request $request){
        $dataKesehatanBayi = new KesehatanBayi();
        $dataKesehatanBayi->tinggiBadanBayi = $request->tb;
        $dataKesehatanBayi->beratBadanBayi = $request->bb;
        $dataKesehatanBayi->keterangan = $request->ket;
        $dataKesehatanBayi->usiaBayi = $request->usiaBayi;
        $dataKesehatanBayi->status = $request->status;
        $dataKesehatanBayi->hasil = $request->hasil;
        $dataKesehatanBayi->bayi_id = $request->bayi_id;
        $dataKesehatanBayi->save();
        Alert::success('Sukses', 'Data berhasil tersimpan');
        return redirect()->route('dataBayi.view');
    }
}
