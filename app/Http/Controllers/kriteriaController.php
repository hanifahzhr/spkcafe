<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kriteria; 

class kriteriaController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        // $this->middleware('admin');
    }
    public function index() {
        $halaman = 'kriteria';
        $kriteria_list = Kriteria::all();
        return view ('WEB.DataKriteria.index', compact('halaman', 'kriteria_list'));
    }
}
