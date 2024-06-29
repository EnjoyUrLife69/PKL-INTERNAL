<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $fillable = ['id' , 'nama' , 'email' , 'jabatan' , 'cover' , 'pesan'];
    public $timestamps = true;

    use HasFactory;


    //menghapus img
    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/testimoni' . $this->cover))) {
            return unlink(public_path('images/testimoni' . $this->cover));
        }
    }
}



