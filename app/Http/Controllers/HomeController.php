<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Pendaftar;
use App\Models\Kategori;
use App\Models\Testimoni;

class HomeController extends Controller
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
    public function index()
    {
        $total_artikel = Artikel::count('id');
        $total_pendaftar = Pendaftar::count('id');
        $total_kategori = Kategori::count('id');
        $total_testimoni = Testimoni::count('id');
        return view('home', compact('total_artikel', 'total_pendaftar', 'total_kategori', 'total_testimoni'));
    }
}
