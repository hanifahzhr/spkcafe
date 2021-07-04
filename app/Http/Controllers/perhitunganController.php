<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class perhitunganController extends Controller
{
    public function kriteria() {
        return view('WEB.perhitungan.kriteria');
    }
    public function konsisten() {
        return view('WEB.perhitungan.konsisten');
    }
    public function cekonsisten() {
        return view('WEB.perhitungan.cekonsisten');
    }
    public function alternatif() {
        return view('WEB.perhitungan.alternatif');
    }
}
