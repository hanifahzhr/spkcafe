<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rasa extends Model
{
    protected $table = 'rasa_cafe';
    protected $fillable = ['nama_rasa'];

    public function alternatif() {
        return $this->hasMany('App\alternatif', 'id_rasa');
    }
}
