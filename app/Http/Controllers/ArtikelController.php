<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
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
        if ($request->hasFile('image')) {
            $articleImage = $request->file('image')->store('image');
            $addArtikel->image = $articleImage;
        }
        $addArtikel->save();
        Alert::success('Sukses', 'Artikel Berhasil Dibuat');
        return back();
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
