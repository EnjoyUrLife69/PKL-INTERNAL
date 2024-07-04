<?php

namespace App\Http\Controllers;

use App\Models\Artikel;

class TampilController extends Controller
{
    public function index($id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikelLainnya = Artikel::orderBy('created_at', 'desc')->take(5)->get(); // Atau sesuai kebutuhan Anda
        return view('tampil', compact('artikel', 'artikelLainnya'));
    }
}

