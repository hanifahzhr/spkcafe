<?php

namespace App\Http\Controllers;
use App\alternatif;
use App\Fasilitas;
use App\Lokasi;
use App\Menu;
use App\Rasa;
use App\Harga;
use App\Pelayanan;
use App\Area;
use App\Operasional;
use App\Rating;
use App\Bobot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class rankingController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        // $this->middleware('admin');
    }
    public function ranking() {
        $alternatif = DB::table('alternatif')
        ->join('fasilitas_cafe','alternatif.id_fas', '=', 'fasilitas_cafe.id_fas')
        ->join('lokasi_cafe','alternatif.id_lokasi', '=', 'lokasi_cafe.id_lokasi')
        ->join('menu_cafe','alternatif.id_menu', '=', 'menu_cafe.id_menu')
        ->join('rasa_cafe','alternatif.id_rasa', '=', 'rasa_cafe.id_rasa')
        ->join('harga_cafe','alternatif.id_harga', '=', 'harga_cafe.id_harga')
        ->join('pelayanan_cafe','alternatif.id_pelayanan', '=', 'pelayanan_cafe.id_pelayanan')
        ->join('area_cafe','alternatif.id_area', '=', 'area_cafe.id_area')
        ->join('operasional_cafe','alternatif.id_operasional', '=', 'operasional_cafe.id_operasional')
        ->join('rating_cafe','alternatif.id_rating', '=', 'rating_cafe.id_rating')
        ->select('fasilitas_cafe.*','lokasi_cafe.*', 'menu_cafe.*', 'rasa_cafe.*', 'harga_cafe.*', 'pelayanan_cafe.*', 'area_cafe.*', 'operasional_cafe.*', 'rating_cafe.*','alternatif.*')
        ->get();

        $sumFas     = DB::table('alternatif')->join('fasilitas_cafe','alternatif.id_fas', '=', 'fasilitas_cafe.id_fas')->sum('fasilitas_cafe.nilai_fasilitas');
        $sumLok     = DB::table('alternatif')->join('lokasi_cafe','alternatif.id_lokasi', '=', 'lokasi_cafe.id_lokasi')->sum('lokasi_cafe.nilai_lokasi');
        $sumVar     = DB::table('alternatif')->join('menu_cafe','alternatif.id_menu', '=', 'menu_cafe.id_menu')->sum('menu_cafe.nilai_menu');
        $sumRas     = DB::table('alternatif')->join('rasa_cafe','alternatif.id_rasa', '=', 'rasa_cafe.id_rasa')->sum('rasa_cafe.nilai_rasa');
        $sumHar     = DB::table('alternatif')->join('harga_cafe','alternatif.id_harga', '=', 'harga_cafe.id_harga')->sum('harga_cafe.nilai_harga');
        $sumPel     = DB::table('alternatif')->join('pelayanan_cafe','alternatif.id_pelayanan', '=', 'pelayanan_cafe.id_pelayanan')->sum('pelayanan_cafe.nilai_pelayanan');
        $sumArea    = DB::table('alternatif')->join('area_cafe','alternatif.id_area', '=', 'area_cafe.id_area')->sum('area_cafe.nilai_area');
        $sumWaktu   = DB::table('alternatif')->join('operasional_cafe','alternatif.id_operasional', '=', 'operasional_cafe.id_operasional')->sum('operasional_cafe.nilai_operasional');
        $sumRat     = DB::table('alternatif')->join('rating_cafe','alternatif.id_rating', '=', 'rating_cafe.id_rating')->sum('rating_cafe.nilai_rating');

        $bobot = Bobot::all();
        foreach ($bobot as $bobot) {
            $bfasilitas = $bobot->fasilitas;
            $blokasi    = $bobot->lokasi;
            $bvariasi   = $bobot->variasi_menu;
            $brasa      = $bobot->rasa;
            $bharga     = $bobot->harga;
            $bpelayanan = $bobot->pelayanan;
            $barea      = $bobot->area;  
            $bwaktu     = $bobot->waktu_operasional;
            $brating    = $bobot->rating;   
        }
        
        return view ('WEB.ranking.ranking', compact('alternatif', 'sumFas', 'sumLok', 
        'sumVar', 'sumRas', 'sumHar', 'sumPel', 'sumArea', 'sumWaktu', 'sumRat', 'bobot', 'bfasilitas', 'blokasi',
        'bvariasi', 'brasa', 'bharga', 'bpelayanan', 'barea', 'bwaktu', 'brating'));
    }
}
