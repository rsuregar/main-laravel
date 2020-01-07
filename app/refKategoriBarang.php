<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class refKategoriBarang extends Model
{
    //
    // protected $primaryKey = 'idbarang';
    protected $guarded = []; //kita menolak inputan ke field tertentu (semua bisa diisi)

    // protected $fillable = ['name']; //tidak ada yang bisa diisi


}
