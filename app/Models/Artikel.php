<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{

    protected $fillable = [ 'judul','tanggal','id_kategori','deskripsi','isi','cover' ];
    public $timestamps = true;

    use HasFactory;

    //mengambil kategori
    public function kategori()
    {
        return $this->BelongsTo(Kategori::class, 'id_kategori');
    }

    //menghapus img
    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/artikel' . $this->cover))) {
            return unlink(public_path('images/artikel' . $this->cover));
        }
    }
}
