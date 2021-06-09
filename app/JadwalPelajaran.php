<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalPelajaran extends Model
{
    //
    protected $fillable = [
        'no_plat',
        'merk_kendaraan',
        'nama_pemilik'
    ];
}
