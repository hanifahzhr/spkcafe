<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kriteria;
use App\alternatif;
use App\User;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        // $this->middleware('admin');
    }
    
    public function index(){
        // $halaman = 'dashboard';
        // $kriteria_l = Kriteria::all();
        $halaman = 'kriteria';
        $kriteria_list = Kriteria::all();

        $halaman1 = 'alternatif';
        $alternatif_list = alternatif::all();
        $jumlah_alternatif = $alternatif_list->count();

        $halaman2 = 'users';
        $user_list = User::all();
        $jumlah_user = $user_list->count();
        return view('WEB.home.dashboard', compact('halaman', 'kriteria_list', 'alternatif_list', 'jumlah_alternatif', 
                    'user_list', 'jumlah_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
