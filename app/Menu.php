<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu_cafe';
    protected $fillable = ['nama_menu'];

    public function alternatif() {
        return $this->hasMany('App\alternatif', 'id_menu');
    }
}
