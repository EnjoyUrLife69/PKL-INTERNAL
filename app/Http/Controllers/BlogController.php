<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class BlogController extends Controller
{
    public function index()
    {
        $artikel = Artikel::orderBy('created_at', 'desc')->get();
        return view('blog', compact('artikel'));
    }
}
