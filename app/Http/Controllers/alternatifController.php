<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
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
use Validator;
use Storage;
use Session;
use Illuminate\Support\Facades\DB;

class alternatifController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
    // $this->middleware('admin');
}

  public function index(){
    $halaman = 'alternatif';
    $alternatif_list = alternatif::all();
    return view('WEB.DataAlternatif.index', compact('halaman', 'alternatif_list'));
  }
  public function create(){
    $list_fasilitas   = Fasilitas::pluck('nama_fasilitas', 'id_fas');
    $list_lokasi      = Lokasi::pluck('nama_lokasi', 'id_lokasi');
    $list_menu        = Menu::pluck('nama_menu', 'id_menu');
    $list_rasa        = Rasa::pluck('nama_rasa', 'id_rasa');
    $list_harga       = Harga::pluck('nama_harga', 'id_harga');
    $list_pelayanan   = Pelayanan::pluck('nama_pelayanan', 'id_pelayanan');
    $list_area        = Area::pluck('nama_area', 'id_area');
    $list_operasional = Operasional::pluck('nama_operasional', 'id_operasional');
    $list_rating      = Rating::pluck('nama_rating', 'id_rating');

    return view('WEB.DataAlternatif.create', compact('list_fasilitas', 'list_lokasi', 'list_menu', 'list_rasa', 
                'list_harga', 'list_pelayanan', 'list_area', 'list_operasional', 'list_rating'));
  }
  public function edit($id) {
    $alternatif = alternatif::findOrFail($id);

    $list_fasilitas   = Fasilitas::pluck('nama_fasilitas', 'id_fas');
    $list_lokasi      = Lokasi::pluck('nama_lokasi', 'id_lokasi');
    $list_menu        = Menu::pluck('nama_menu', 'id_menu');
    $list_rasa        = Rasa::pluck('nama_rasa', 'id_rasa');
    $list_harga       = Harga::pluck('nama_harga', 'id_harga');
    $list_pelayanan   = Pelayanan::pluck('nama_pelayanan', 'id_pelayanan');
    $list_area        = Area::pluck('nama_area', 'id_area');
    $list_operasional = Operasional::pluck('nama_operasional', 'id_operasional');
    $list_rating      = Rating::pluck('nama_rating', 'id_rating');

    return view('WEB.DataAlternatif.edit', compact('alternatif', 'list_fasilitas', 'list_lokasi', 'list_menu', 'list_rasa', 
    'list_harga', 'list_pelayanan', 'list_area', 'list_operasional', 'list_rating'));
  }
  public function update($id, Request $request){
    $alternatif = alternatif::findOrFail($id);
    $input = $request->all();
    $validator = Validator::make($input, [
      'idcafe' => 'required|string|max:6|unique:alternatif,idcafe,' .$request->input('id'),
      'nama_cafe' => 'required|string',
      'alamat' => 'required|string',
      'telepon' => 'required|numeric|digits_between:10,15',
      'id_fas' => 'required',
      'id_lokasi' => 'required',
      'id_menu' => 'required',
      'id_rasa' => 'required',
      'id_harga' => 'required',
      'id_pelayanan' => 'required',
      'id_area' => 'required',
      'id_operasional' => 'required',
      'id_rating' => 'required',
      'deskripsi' => 'required|string',
    ]);

    if ($validator->fails()) {
      return Redirect('alternatif/' . $id . '/edit')->withInput()
      ->withErrors($validator); 
    }
    $alternatif->update($request->all());

    Session::flash('flash_message', 'Data Alternatif Cafe berhasil diupdate.');
    return redirect('alternatif');
  }

  // public function show() {
    
  //   return view('WEB.DataAlternatif.show');
  // }

  
  public function store(Request $request) {
    $input = $request->all();

    //foto
    if ($request->hasFile('foto')) {
      $foto = $request->file('foto');
      $ext = $foto->getClientOriginalExtension();
      if ($request->file('foto')->isValid()) {
        $foto_name = date('YmdHis'). ".$ext";
        $upload_path = "fotoupload";
        $request->file('foto')->move($upload_path, $foto_name);
        $input['foto'] = $foto_name;
      }
    }
    $validator = Validator::make($input, [
      'idcafe' => 'required|string|max:6|unique:alternatif,idcafe',
      'nama_cafe' => 'required|string',
      'alamat' => 'required|string',
      'telepon' => 'required|numeric|digits_between:10,15|unique:alternatif,telepon',
      'id_fas' => 'required',
      'id_lokasi' => 'required',
      'id_menu' => 'required',
      'id_rasa' => 'required',
      'id_harga' => 'required',
      'id_pelayanan' => 'required',
      'id_area' => 'required',
      'id_operasional' => 'required',
      'id_rating' => 'required',
      'deskripsi' => 'required|string',
    ]);

    if($validator->fails()) {
      return redirect('alternatif/create')
      ->withInput()
      ->withErrors($validator);
    }
    // dd($request->all());
     $alternatif = alternatif::create($input);

     Session::flash('flash_message', 'Data Alternatif Cafe berhasil disimpan.');

    return redirect('alternatif');
  }

  public function show($id) {
    $halaman = 'alternatif';
    // $alternatif = alternatif::join('fasilitas_cafe', 'alternatif.id_fas', '=', 'fasilitas_cafe.id_fas')->firstt();
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
    ->where('id', '=', $id)
    ->first();
    return view('WEB.DataAlternatif.show', compact('alternatif'));
  }

  public function destroy(alternatif $alternatif) {
    $alternatif->delete();

    Session::flash('flash_message', 'Data Alternatif Cafe berhasil dihapus.');
    Session::flash('penting', true);
    return redirect('alternatif');
  }


  
}
