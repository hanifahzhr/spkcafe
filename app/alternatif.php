<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alternatif extends Model
{
    protected $table = 'alternatif';

    protected $fillable = [
    'idcafe',
    'nama_cafe',
    'alamat',
    'telepon',
    'fasilitas',
    'lokasi',
    'variasi_menu',
    'rasa',
    'harga',
    'pelayanan',
    'area',
    'waktu_operasional',
    'rating',
    'deskripsi',
    ];
    
}
