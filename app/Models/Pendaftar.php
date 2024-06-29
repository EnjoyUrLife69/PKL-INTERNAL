<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    protected $fillable = ['id', 'nama', 'jabatan', 'pesan'];
    public $timestamps = true;

    use HasFactory;
}
