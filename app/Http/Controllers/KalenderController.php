<?php

namespace App\Http\Controllers;

use App\Models\Kalender;
use Illuminate\Http\Request;

class KalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kalender::all();
        return view('admin.kalender');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambah_jadwal');
    }
    public function getKalender() {
        $dataDatabase = Kalender::all();
        $data = $dataDatabase->map(function($item){
            $tanggal = $item->tanggal;
            $tanggalString = \Carbon\Carbon::parse($tanggal);
            return [
                'day' => $tanggalString->day,
                'month' => $tanggalString->month,
                'year' => $tanggalString->year,
                'events'=>[
                    [
                        'title' => $item->kegiatan,
                        'tempat' => $item->tempat,
                        'alamat' => $item->alamat,
                        'time' => $item->waktu,
                    ],
                ],
            ];
        });
        return response()->json($data);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Kalender();
        $data->kegiatan = $request->kegiatan;
        $data->tanggal = $request->tanggal;
        $data->waktu = $request->waktu;
        $data->tempat = $request->tempat;
        $data->alamat = $request->alamat;
        $data->save();
        return redirect()->route('kalender');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
