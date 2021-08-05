<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    protected $table = 'lokasi_cafe';
    protected $fillable = ['nama_lokasi'];

    public function alternatif() {
        return $this->hasMany('App\alternatif', 'id_lokasi');
    }
}
