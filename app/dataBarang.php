<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataBarang extends Model
{
    //untuk menginput ke database
    protected $guarded = [];

    //referensi Relationship Eloquent dokumentasi

    public function kategori()
    {
        return $this->belongsTo(refKategoriBarang::class, 'refkategori_id');
    }

}
