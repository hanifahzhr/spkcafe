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
use App\perbandinganBerpasangan;
use App\Bobot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class perhitunganController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        // $this->middleware('admin');
    }
    public function kriteria() {
        $halaman = 'matriks_perbandingan';
        $matriks_perbandingan_list = perbandinganBerpasangan::all();

        $sumFas = perbandinganBerpasangan::sum('mat_fas');
        $sumLok = perbandinganBerpasangan::sum('mat_lok');
        $sumVar = perbandinganBerpasangan::sum('mat_var');
        $sumRas = perbandinganBerpasangan::sum('mat_ras');
        $sumHar = perbandinganBerpasangan::sum('mat_har');
        $sumPel = perbandinganBerpasangan::sum('mat_pel');
        $sumArea = perbandinganBerpasangan::sum('mat_area');
        $sumWaktu = perbandinganBerpasangan::sum('mat_waktu');
        $sumRat = perbandinganBerpasangan::sum('mat_rat');

        $count_kriteria = perbandinganBerpasangan::count();

        //rumus matriks nilai kriteria (normalisasi) -> kolom/jumlah per kolom
        // $data = perbandinganBerpasangan::all();
        // for ($i=0; $i < count($data); $i++) {
        //     echo $data[$i]->mat_fas / $sumFas;
        // }

        // foreach ($matriks_perbandingan_list as $val){
        //     echo "$val";
        //     echo "<br />";
        // }

        $var = perbandinganBerpasangan::where('id_matriks','=',1)->first('mat_fas');
        $var2 = perbandinganBerpasangan::where('id_matriks','=',1)->first('mat_lok');
        $var3 = perbandinganBerpasangan::where('id_matriks','=',1)->first('mat_var');
        $var4 = perbandinganBerpasangan::where('id_matriks','=',1)->first('mat_ras');
        $var5 = perbandinganBerpasangan::where('id_matriks','=',1)->first('mat_har');
        $var6 = perbandinganBerpasangan::where('id_matriks','=',1)->first('mat_pel');
        $var7 = perbandinganBerpasangan::where('id_matriks','=',1)->first('mat_area');
        $var8 = perbandinganBerpasangan::where('id_matriks','=',1)->first('mat_waktu');
        $var9 = perbandinganBerpasangan::where('id_matriks','=',1)->first('mat_rat');

        $hasil1=($var->mat_fas/$sumFas);
        $hasil2=($var2->mat_lok/$sumLok);
        $hasil3=($var3->mat_var/$sumVar);
        $hasil4=($var4->mat_ras/$sumRas);
        $hasil5=($var5->mat_har/$sumHar);
        $hasil6=($var6->mat_pel/$sumPel);
        $hasil7=($var7->mat_area/$sumArea);
        $hasil8=($var8->mat_waktu/$sumWaktu);
        $hasil9=($var9->mat_rat/$sumRat);
        
        $hasil_total = $hasil1+$hasil2+$hasil3+$hasil4+$hasil5+$hasil6+$hasil7+$hasil8+$hasil9;
        // dd($hasil_total);

        for ($i=0; $i < sizeof($matriks_perbandingan_list); $i++) {
            $vir = perbandinganBerpasangan::where('id_matriks',$matriks_perbandingan_list[$i]['id_matriks'])->first();
            // dd($vir);
            // echo ($vir->mat_fas/$sumFas)+($vir->mat_lok/$sumLok)+();
            // echo "<br>";
            
        }
        return view('WEB.perhitungan.kriteria', compact('halaman', 'matriks_perbandingan_list', 'sumFas', 'sumLok', 
                'sumVar', 'sumRas', 'sumHar', 'sumPel', 'sumArea', 'sumWaktu', 'sumRat', 'count_kriteria'));
    }
    public function konsisten() {
        $halaman = 'matriks_perbandingan';
        $matriks_perbandingan_list = perbandinganBerpasangan::all();

        $sumFas = perbandinganBerpasangan::sum('mat_fas');
        $sumLok = perbandinganBerpasangan::sum('mat_lok');
        $sumVar = perbandinganBerpasangan::sum('mat_var');
        $sumRas = perbandinganBerpasangan::sum('mat_ras');
        $sumHar = perbandinganBerpasangan::sum('mat_har');
        $sumPel = perbandinganBerpasangan::sum('mat_pel');
        $sumArea = perbandinganBerpasangan::sum('mat_area');
        $sumWaktu = perbandinganBerpasangan::sum('mat_waktu');
        $sumRat = perbandinganBerpasangan::sum('mat_rat');

        $count_kriteria = perbandinganBerpasangan::count();

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

        return view('WEB.perhitungan.konsisten', compact('halaman', 'matriks_perbandingan_list','bobot', 'bfasilitas', 'blokasi',
                     'bvariasi', 'brasa', 'bharga', 'bpelayanan', 'barea', 'bwaktu', 'brating', 'sumFas', 'sumLok', 'sumVar', 
                     'sumRas', 'sumHar', 'sumPel', 'sumArea', 'sumWaktu', 'sumRat', 'count_kriteria'));
    }
    public function cekonsisten() {
        $halaman = 'matriks_perbandingan';
        $matriks_perbandingan_list = perbandinganBerpasangan::all();

        $sumFas = perbandinganBerpasangan::sum('mat_fas');
        $sumLok = perbandinganBerpasangan::sum('mat_lok');
        $sumVar = perbandinganBerpasangan::sum('mat_var');
        $sumRas = perbandinganBerpasangan::sum('mat_ras');
        $sumHar = perbandinganBerpasangan::sum('mat_har');
        $sumPel = perbandinganBerpasangan::sum('mat_pel');
        $sumArea = perbandinganBerpasangan::sum('mat_area');
        $sumWaktu = perbandinganBerpasangan::sum('mat_waktu');
        $sumRat = perbandinganBerpasangan::sum('mat_rat');

        $count_kriteria = perbandinganBerpasangan::count();

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

        return view('WEB.perhitungan.cekonsisten', compact('halaman', 'matriks_perbandingan_list', 'count_kriteria', 'bobot', 'bfasilitas', 'blokasi',
        'bvariasi', 'brasa', 'bharga', 'bpelayanan', 'barea', 'bwaktu', 'brating', 'sumFas', 'sumLok', 'sumVar', 
        'sumRas', 'sumHar', 'sumPel', 'sumArea', 'sumWaktu', 'sumRat'));
    }
    public function alternatif() {
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

        return view('WEB.perhitungan.alternatif', compact('alternatif', 'sumFas', 'sumLok', 
        'sumVar', 'sumRas', 'sumHar', 'sumPel', 'sumArea', 'sumWaktu', 'sumRat', 'bobot', 'bfasilitas', 'blokasi',
        'bvariasi', 'brasa', 'bharga', 'bpelayanan', 'barea', 'bwaktu', 'brating'));
    }
}
