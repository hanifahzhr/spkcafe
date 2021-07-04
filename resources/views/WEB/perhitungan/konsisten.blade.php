@extends('WEB.layout.app')
@section('title','Spk Cafe Admin')
@section('content')
@include('WEB.home.navbar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <h2 class="mt-4">Proses Perhitungan Uji Konsistensi Kriteria</h2>

                    <!-- <div>
                    <a href="{{ url('user/create')}}" class="btn btn-primary btn-lg mt-4 mb-4 align-right"> Create Admin</a>
                    </div> -->

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Matriks Penjumlahan Setiap Baris
                            </div>
                            <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">-</th>
                                        <th scope="col">Fasilitas</th>
                                        <th scope="col">Lokasi</th>
                                        <th scope="col">Variasi Menu</th>
                                        <th scope="col">Rasa</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Pelayanan</th>
                                        <th scope="col">Area Cafe</th>
                                        <th scope="col">Waktu Operasional</th>
                                        <th scope="col">Rating</th>
                                        <th scope="col">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Fasilitas</th>
                                            <td>1</td>
                                            <td>7</td>
                                            <td>5</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td>4</td>
                                            <td>9</td>
                                            <td>7</td>
                                            <th>0,111</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Lokasi</th>
                                            <td>0,143</td>
                                            <td>1</td>
                                            <td>0,5</td>
                                            <td>0,2</td>
                                            <td>0,25</td>
                                            <td>0,2</td>
                                            <td>0,333</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <th>0,111</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Variasi Menu</th>
                                            <td>0,2</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>0,25</td>
                                            <td>0,333</td>
                                            <td>0,25</td>
                                            <td>0,5</td>
                                            <td>3</td>
                                            <td>2</td>
                                            <th>0,111</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Rasa</th>
                                            <td>0,2</td>
                                            <td>5</td>
                                            <td>4</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>3</td>
                                            <td>7</td>
                                            <td>5</td>
                                            <th>0,111</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Harga</th>
                                            <td>0,333</td>
                                            <td>4</td>
                                            <td>3</td>
                                            <td>0,5</td>
                                            <td>1</td>
                                            <td>0,5</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>4</td>
                                            <th>0,111</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pelayanan</th>
                                            <td>0,2</td>
                                            <td>5</td>
                                            <td>4</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>3</td>
                                            <td>7</td>
                                            <td>5</td>
                                            <th>0,111</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Area Cafe</th>
                                            <td>0,25</td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td>0,333</td>
                                            <td>0,5</td>
                                            <td>0,333</td>
                                            <td>1</td>
                                            <td>4</td>
                                            <td>3</td>
                                            <th>0,111</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Waktu Operasional</th>
                                            <td>0,111</td>
                                            <td>0,5</td>
                                            <td>0,333</td>
                                            <td>0,143</td>
                                            <td>0,2</td>
                                            <td>0,142</td>
                                            <td>0,25</td>
                                            <td>1</td>
                                            <td>0,5</td>
                                            <th>0,111</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Rating</th>
                                            <td>0,143</td>
                                            <td>1</td>
                                            <td>0,5</td>
                                            <td>0,2</td>
                                            <td>0,25</td>
                                            <td>0,2</td>
                                            <td>0,333</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <th>0,111</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card mt-4 mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Perhitungan Rasio Konsistensi
                            </div>
                            <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">-</th>
                                        <th scope="col">Jumlah Baris</th>
                                        <th scope="col">Bobot Kriteria</th>
                                        <th scope="col">Hasil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Fasilitas</th>
                                            <td>0,111</td>
                                            <td>0,111</td>
                                            <th>0,222</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Lokasi</th>
                                            <td>0,111</td>
                                            <td>0,111</td>
                                            <th>0,222</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Variasi Menu</th>
                                            <td>0,111</td>
                                            <td>0,111</td>
                                            <th>0,222</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Rasa</th>
                                            <td>0,111</td>
                                            <td>0,111</td>
                                            <th>0,222</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Harga</th>
                                            <td>0,111</td>
                                            <td>0,111</td>
                                            <th>0,222</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pelayanan</th>
                                            <td>0,111</td>
                                            <td>0,111</td>
                                            <th>0,222</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Area Cafe</th>
                                            <td>0,111</td>
                                            <td>0,111</td>
                                            <th>0,222</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Waktu Operasional</th>
                                            <td>0,111</td>
                                            <td>0,111</td>
                                            <th>0,222</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Rating</th>
                                            <td>0,111</td>
                                            <td>0,111</td>
                                            <th>0,222</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">JUMLAH</th>
                                            <td>-</td>
                                            <td>-</td>
                                            <th>0,222</th>
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