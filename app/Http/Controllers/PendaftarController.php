<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftar = Pendaftar::all();
        return view('pendaftar.index', compact('pendaftar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pendaftar = Pendaftar::all();
        return view('pendaftar.create', compact('pendaftar'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pendaftar = new pendaftar;
        $pendaftar->nama = $request->nama;
        $pendaftar->jenis_kelamin = $request->jenis_kelamin;
        $pendaftar->kelas = $request->kelas;
        $pendaftar->asal_sekolah = $request->asal_sekolah;
        $pendaftar->nomor_telp_siswa = $request->nomor_telp_siswa;
        $pendaftar->nomor_telp_ortu = $request->nomor_telp_ortu;
        $pendaftar->email = $request->email;

        $pendaftar->save();

        return redirect()->route('pendaftar.index')->with('success', 'Data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pendaftar = Pendaftar::FindOrFail($id);
        return view('pendaftar.show', compact('pendaftar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendaftar = Pendaftar::FindOrFail($id);
        return view('pendaftar.edit', compact('pendaftar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pendaftar = Pendaftar::FindOrFail($id);
        $pendaftar->nama = $request->nama;
        $pendaftar->jenis_kelamin = $request->jenis_kelamin;
        $pendaftar->kelas = $request->kelas;
        $pendaftar->asal_sekolah = $request->asal_sekolah;
        $pendaftar->nomor_telp_siswa = $request->nomor_telp_siswa;
        $pendaftar->nomor_telp_ortu = $request->nomor_telp_ortu;
        $pendaftar->email = $request->email;

        $pendaftar->save();

        return redirect()->route('pendaftar.index')->with('success', 'Data berhasil Di Edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendaftar $pendaftar)
    {
        $pendaftar->delete();
        return redirect()->route('pendaftar.index')->with('success', 'Data Berhasil Di Hapuss');
    }
}
