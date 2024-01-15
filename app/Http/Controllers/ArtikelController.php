<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use RealRashid\SweetAlert\Facades\Alert;


class ArtikelController extends Controller
{
    /**
     * Show the form for creating the resource.
     */
    public function create()
    {
        return view('admin.addArtikel');
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addArtikel = new Artikel();
        $addArtikel->judul = $request->judul;
        $addArtikel->isi = $request->isi;
        $addArtikel->save();
        Alert::success('Sukses', 'Artikel Berhasil Dibuat');
        return view('admin.dashboard');
    }

    /**
     * Display the resource.
     */
    public function show($id)
    {
        $showArtikel = Artikel::find($id);
        return view('user.artikel', compact('showArtikel'));
    }

    /**
     * Show the form for editing the resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy()
    {
        abort(404);
    }
}
