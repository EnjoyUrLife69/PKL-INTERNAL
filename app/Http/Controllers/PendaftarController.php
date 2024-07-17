<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
        $pendaftar = Pendaftar::orderBy('id', 'desc')->get();
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
        $pendaftar->nomor_telp_siswa = $request->input('nomor_telp_siswa', null);
        $pendaftar->nomor_telp_ortu = $request->nomor_telp_ortu;
        $pendaftar->email = $request->email;

        $pendaftar->save();

        // Buat HTML untuk tampilan SweetAlert
        $htmlContent = '<table style="width: 100%; text-align: left;">';
        $htmlContent .= '<tr><td><strong>Fullname</strong></td><td>:</td><td>' . htmlspecialchars($request->nama) . '</td></tr>';
        $htmlContent .= '<tr><td><strong>Gender</strong></td><td>:</td><td>' . htmlspecialchars($request->jenis_kelamin) . '</td></tr>';
        $htmlContent .= '<tr><td><strong>Grades</strong></td><td>:</td><td>' . htmlspecialchars($request->kelas) . '</td></tr>';
        $htmlContent .= '<tr><td><strong>From School</strong></td><td>:</td><td>' . htmlspecialchars($request->asal_sekolah) . '</td></tr>';
        $htmlContent .= '<tr><td><strong>Student Phone Number</strong></td><td>:</td><td>' . htmlspecialchars($request->nomor_telp_siswa) . '</td></tr>';
        $htmlContent .= '<tr><td><strong>Parent Phone Number</strong></td><td>:</td><td>' . htmlspecialchars($request->nomor_telp_ortu) . '</td></tr>';
        $htmlContent .= '<tr><td><strong>Email</strong></td><td>:</td><td>' . htmlspecialchars($request->email) . '</td></tr>';
        $htmlContent .= '</table> <br>';
        $htmlContent .= 'We will contact you soon via <b> email </b> or <b> phone </b> for the payment details.';


        Alert::html(
            'Registration Successful',
            '<b>Thank you for registering with our tutoring center!</b><br><br>' . $htmlContent,
            'success'
        )->persistent(true, true);

        return redirect()->route('daftar-form');

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
        $pendaftar->nomor_telp_siswa = $request->input('nomor_telp_siswa', null);
        $pendaftar->nomor_telp_ortu = $request->nomor_telp_ortu;
        $pendaftar->email = $request->email;

        $pendaftar->save();
        toast('Data updated successfully', 'success');

        return redirect()->route('pendaftar.index');

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
        toast('Record removed successfully', 'success');

        return redirect()->route('pendaftar.index');
    }
}
