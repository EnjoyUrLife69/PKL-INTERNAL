<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimoni = Testimoni::all();
        $testimoni = Testimoni::orderBy('id', 'desc')->get();
        return view('testimoni.index', compact('testimoni'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
        ],

            [
                'nama.required' => 'Nama harus diisi',
            ]

        );

        $testimoni = new Testimoni;
        $testimoni->nama = $request->nama;
        $testimoni->jabatan = $request->jabatan;
        
        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/testimoni', $name);
            $testimoni->cover = $name;
        }

        $testimoni->pesan = $request->pesan;
        $testimoni->save();
        toast('Data berhasil disimpan', 'success');
        return redirect()->route('testimoni.index');

    }

    public function show($id)
    {
        $testimoni = Testimoni::FindOrFail($id);
        return view('testimoni.show', compact('testimoni'));
    }

    public function edit($id)
    {
        $testimoni = Testimoni::FindOrFail($id);
        return view('testimoni.edit', compact('testimoni'));

    }

    public function update(Request $request, $id)
    {

        $testimoni = Testimoni::FindOrFail($id);
        $testimoni->nama = $request->nama;
        $testimoni->jabatan = $request->jabatan;
        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/testimoni', $name);
            $testimoni->cover = $name;
        }
        $testimoni->pesan = $request->pesan;
        $testimoni->save();
        toast('Data berhasil di update', 'success');

        return redirect()->route('testimoni.index');

    }

    public function destroy($id)
    {
        $testimoni = testimoni::FindOrFail($id);
        $testimoni->delete();
        toast('Data berhasil di hapus', 'success');
        return redirect()->route('testimoni.index')
            ;

    }
}
