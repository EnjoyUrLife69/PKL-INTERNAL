<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ReadController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $kategori = Kategori::all();

        // Ambil ID kategori dari request
        $id_kategori = $request->get('id_kategori');

        // Jika id_kategori ada dan tidak kosong, filter artikel berdasarkan kategori tersebut
        if ($id_kategori) {
            $artikel = Artikel::where('id_kategori', $id_kategori)->get();
        } else {
            // Jika tidak, ambil semua artikel
            $artikel = Artikel::orderBy('created_at', 'desc')->get();

        }

        return view('read', compact('artikel', 'kategori', 'id_kategori'));

    }
}
