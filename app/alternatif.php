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
    'id_fas',
    'id_lokasi',
    'id_menu',
    'id_rasa',
    'id_harga',
    'id_pelayanan',
    'id_area',
    'id_operasional',
    'id_rating',
    'deskripsi',
    'foto',
    ];

    public function getNamaCafeAttribute($nama_cafe) {
        return ucwords($nama_cafe);
    }

    public function fasilitas() {
        return $this->belongsTo('App\Fasilitas', 'id_fas');
    }
    public function lokasi() {
        return $this->belongsTo('App\Lokasi', 'id_lokasi');
    }
    public function menu() {
        return $this->belongsTo('App\Menu', 'id_menu');
    }
    public function rasa() {
        return $this->belongsTo('App\Rasa', 'id_rasa');
    }
    public function harga() {
        return $this->belongsTo('App\Harga', 'id_harga');
    }
    public function pelayanan() {
        return $this->belongsTo('App\Pelayanan', 'id_pelayanan');
    }
    public function area() {
        return $this->belongsTo('App\Area', 'id_area');
    }
    public function operasional() {
        return $this->belongsTo('App\Operasional', 'id_operasional');
    }
    public function rating() {
        return $this->belongsTo('App\Rating', 'id_rating');
    }
}
