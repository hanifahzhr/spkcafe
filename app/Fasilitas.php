<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = 'fasilitas_cafe';
    protected $fillable = ['nama_fasilitas'];

    public function alternatif() {
        return $this->hasMany('App\alternatif', 'id_fas');
    }
}
