@extends('WEB.layout.app')
@section('title','Spk Cafe Admin')
@section('content')
@include('WEB.home.navbar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <h2 class="mt-4">Detail Data Alternatif Cafe</h2>

                        <div class="card mb-4">
                          
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Detail Data Cafe
                            </div>
                            <div class="card-body">
                            <table class="table table-striped">

                                <tbody>
                                    <tr>
                                        <div class="text-center">
                                            <img src="..." class="rounded" alt="...">
                                        </div>
                                    </tr>
                                    <tr>
                                        <th scope="row">No</th>
                                            <td>{{$alternatif->id}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Id Cafe</th>
                                            <td>{{$alternatif->idcafe}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Cafe</th>
                                            <td>{{$alternatif->nama_cafe}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Alamat Cafe</th>
                                            <td>{{$alternatif->alamat}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">No Telepon</th>
                                            <td>{{$alternatif->telepon}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Fasilitas</th>
                                            <td>{{$alternatif->fasilitas}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Lokasi</th>
                                            <td>{{$alternatif->id}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Variasi Menu</th>
                                            <td>{{$alternatif->variasi}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Rasa</th>
                                            <td>{{$alternatif->rasa}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Harga</th>
                                            <td>{{$alternatif->harga}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pelayanan</th>
                                            <td>{{$alternatif->pelayanan}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Area Cafe</th>
                                            <td>{{$alternatif->area}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Waktu Operasional</th>
                                            <td>{{$alternatif->waktu_operasional}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Rating</th>
                                            <td>{{$alternatif->rating}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Deskripsi</th>
                                            <td>{{$alternatif->deskripsi}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
                @include('WEB.home.footer')
            </div>
        </div>
@endsection