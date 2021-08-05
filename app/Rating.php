<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'rating_cafe';
    protected $fillable = ['nama_rating'];

    public function alternatif() {
        return $this->hasMany('App\alternatif', 'id_rating');
    }
}
