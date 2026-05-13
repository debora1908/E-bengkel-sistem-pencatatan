<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    //
    protected $fillable = [
        
    'plat_nomor',
        'nama_pemilik',
        'merek_kendaraan',
        'keluhan'
    ];
}
