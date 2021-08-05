<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'area_cafe';
    protected $fillable = ['nama_area'];

    public function alternatif() {
        return $this->hasMany('App\alternatif', 'id_area');
    }
}
