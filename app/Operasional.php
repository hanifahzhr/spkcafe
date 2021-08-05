<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operasional extends Model
{
    protected $table = 'operasional_cafe';
    protected $fillable = ['nama_operasional'];

    public function alternatif() {
        return $this->hasMany('App\alternatif', 'id_operasional');
    }
}
