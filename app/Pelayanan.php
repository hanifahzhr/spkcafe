<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    protected $table = 'pelayanan_cafe';
    protected $fillable = ['nama_pelayanan'];

    public function alternatif() {
        return $this->hasMany('App\alternatif', 'id_pelayanan');
    }
}
