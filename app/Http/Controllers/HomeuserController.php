<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\alternatif;
use App\UserHome;

class HomeuserController extends Controller
{
  public function index(){
    $halaman = 'alternatif';
    $homeuser_list = UserHome::all();
    return view('WEB.homeuser.index', compact('halaman', 'homeuser_list'));
  }

  public function cari(Request $request) {
    $halaman = 'alternatif';
    $kata_kunci = trim($request->input('kata_kunci'));
    $w = $request->input('w');
    $sk = $request->input('sk');
    $sf = $request->input('sf');
    $lv = $request->input('lm');
    $p = $request->input('p');
    $fu = $request->input('fu');

    $query = UserHome::
    join('fasilitas_cafe','alternatif.id_fas', '=', 'fasilitas_cafe.id_fas')
    ->join('lokasi_cafe','alternatif.id_lokasi', '=', 'lokasi_cafe.id_lokasi')
    ->join('menu_cafe','alternatif.id_menu', '=', 'menu_cafe.id_menu')
    ->join('harga_cafe','alternatif.id_harga', '=', 'harga_cafe.id_harga')
    ->join('area_cafe','alternatif.id_area', '=', 'area_cafe.id_area')
    ->join('operasional_cafe','alternatif.id_operasional', '=', 'operasional_cafe.id_operasional');
    
    (!empty($w))? $query->where('nama_fasilitas', 'LIKE', '%' . $w . '%'):'';
    (!empty($p))? $query->where('nama_fasilitas', 'LIKE', '%' . $p . '%'):'';
    (!empty($lv))? $query->where('nama_fasilitas', 'LIKE', '%' . $lv . '%'):'';
    
    $homeuser_list = $query->get();
    return view('WEB.homeuser.index', compact('halaman', 'homeuser_list', 'w', 'sk', 'sf', 'lv', 'p', 'fu'));

    // select alternatif.*, fasilitas_cafe.* from alternatif INNER JOIN fasilitas_cafe ON alternatif.id_fas = fasilitas_cafe.id_fas WHERE nama_fasilitas like '%wifi%' and nama_fasilitas like '%permainan%';
  }
}
