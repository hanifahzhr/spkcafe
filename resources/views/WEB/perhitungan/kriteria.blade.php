@extends('WEB.layout.app')
@section('title','Spk Cafe Admin')
@section('content')
@include('WEB.home.navbar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <h2 class="mt-4">Proses Perhitungan Kriteria</h2>

                    <!-- <div>
                    <a href="{{ url('user/create')}}" class="btn btn-primary btn-lg mt-4 mb-4 align-right"> Create Admin</a>
                    </div> -->

                    <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Matriks Perbandingan Kriteria
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
                                    </tr>
                                    <tr>
                                        <th scope="row">Jumlah</th>
                                            <th>2,58</th>
                                            <th>28,5</th>
                                            <th>20,333</th>
                                            <th>5,626</th>
                                            <th>9,533</th>
                                            <th>5,626</th>
                                            <th>14,416</th>
                                            <th>40</th>
                                            <th>28,5</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>

                        <div class="card mt-4 mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Kriteria
                            </div>
                            <div class="card-body">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th scope="row">Jumlah Kriteria</th>
                                            <th>9</th>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Matriks Nilai Kriteria (Normalisasi)
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
                                Bobot Kriteria
                            </div>
                            <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Kriteria</th>
                                        <th scope="col">Bobot Kriteria</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Fasilitas</th>
                                            <td>0,111</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Lokasi</th>
                                            <td>0,111</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Variasi Menu</th>
                                            <td>0,111</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Rasa</th>
                                            <td>0,111</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Harga</th>
                                            <td>0,111</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pelayanan</th>
                                            <td>0,111</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Area Cafe</th>
                                            <td>0,111</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Waktu Operasional</th>
                                            <td>0,111</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Rating</th>
                                            <td>0,111</td>
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