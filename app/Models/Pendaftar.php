<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    protected $fillable = ['id', 'nama' , 'jenis_kelamin' , 'kelas' ,'asal_sekolah','nomor_telp_siswa','nomor_telp_ortu','email'];
    public $timestamps = true;

    use HasFactory;
}
