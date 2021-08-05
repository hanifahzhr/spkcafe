<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    protected $table = 'harga_cafe';
    protected $fillable = ['nama_harga'];

    public function alternatif() {
        return $this->hasMany('App\alternatif', 'id_harga');
    }
}
