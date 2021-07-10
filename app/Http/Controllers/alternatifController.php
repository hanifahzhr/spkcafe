<?php

namespace App\Http\Controllers;

// use App\alternatif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\alternatif;

class alternatifController extends Controller
{
  public function index(){
    $halaman = 'alternatif';
    $alternatif_list = alternatif::all();
    return view('WEB.DataAlternatif.index', compact('halaman', 'alternatif_list'));
  }
  public function create(){
    // $input = alternatif::all();
    // $data = DB::table('alternatif')
       // ->get();
    // dd($data);
    $fasilitas_cafe = DB::table('fasilitas_cafe')->get();
    $lokasi_cafe = DB::table('lokasi_cafe')->get();
    $menu_cafe = DB::table('menu_cafe')->get();
    $rasa_cafe = DB::table('rasa_cafe')->get();
    $harga_cafe = DB::table('harga_cafe')->get();
    $pelayanan_cafe = DB::table('pelayanan_cafe')->get();
    $area_cafe = DB::table('area_cafe')->get();
    $operasional_cafe = DB::table('operasional_cafe')->get();
    $rating_cafe = DB::table('rating_cafe')->get();
    return view('WEB.DataAlternatif.create', compact('fasilitas_cafe', 'lokasi_cafe', 'menu_cafe', 'rasa_cafe', 
                  'harga_cafe', 'pelayanan_cafe', 'area_cafe', 'operasional_cafe', 'rating_cafe'));
  }
  public function update(){
    return view('WEB.DataAlternatif.edit');
  }

  // public function show() {
    
  //   return view('WEB.DataAlternatif.show');
  // }

  
  public function store(Request $request) {
    // dd($request->all());
    alternatif::create ([
    'idcafe'=>$request->idcafe,
    'nama_cafe'=>$request->nama_cafe,
    'alamat'=>$request->alamat,
    'telepon'=>$request->notelp,
    'fasilitas'=>$request->fasilitas,
    'lokasi'=>$request->lokasi,
    'variasi_menu'=>$request->variasi,
    'rasa'=>$request->rasa,
    'harga'=>$request->harga,
    'pelayanan'=>$request->pelayanan,
    'area' =>$request->area,
    'waktu_operasional'=>$request->waktu,
    'rating'=>$request->rating,
    'deskripsi'=>$request->deskripsi,
    ]);

    // konversi::create ([
    //   gimana caranya biar dapet value dari id yg dipilih dari request, nanti valuenya dikirim ke db konversi?
    // 'idcafe'=>$request->idcafe,
    // if ($request->fasilitas == ('1' || '2' || '3' || '4' || '5')) {
    //   $fas = '1';
    // }else if ($request->fasilitas == ('8')) {
    //   $fas = '2';
    // }
    // 'fasilitas'=>$fas, ketika gua klik id fasilitas 2, valuenya bisa keambil
    // ]);

    
    return redirect('alternatif');
  }

  // public function alternatif(){
  //   $halaman = 'alternatif';
  //   $alternatif_list = alternatif::all();
  //   return view('alternatif.alternatif', compact('halaman', 'alternatif_list'));
  // }
  public function show($id) {
    $halaman = 'alternatif';
    $alternatif = alternatif::findOrFail($id);
    return view('WEB.DataAlternatif.show', compact('halaman', 'alternatif'));
  }

  public function delete($id) {
    $halaman = 'alternatif';
    $alternatif = alternatif::where('id','=',$id)->delete();
    return redirect()->back();
  }


  
}
