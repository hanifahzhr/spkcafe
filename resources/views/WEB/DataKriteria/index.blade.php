@extends('WEB.layout.app')
@section('title','Spk Cafe Admin')
@section('content')
@include('WEB.home.navbar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <h2 class="mt-4">Kriteria Cafe</h2>

                    <!-- <div>
                    <a href="{{ url('user/create')}}" class="btn btn-primary btn-lg mt-4 mb-4 align-right"> Create Admin</a>
                    </div> -->
                        <div class="card mb-4">
                          
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Kriteria Cafe
                            </div>
                            <div class="card-body">
                                @if (!empty($kriteria_list))
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id Kriteria</th>
                                            <th>Nama Kriteria</th>
                                            <th>Bobot</th>
                                        </tr>
                                    </thead>
                                    @foreach($kriteria_list as $kriteria)
                                    <tbody>
                                    <tr>
                                        <td>{{ $kriteria->idx_kriteria}}</td>
                                        <td>{{ $kriteria->nama_kriteria}}</td>
                                        <td>bobot</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @else
                                    <p>Tidak ada data kriteria</p>
                                @endif
                            </div>
                        
                    </div>
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
                </main>
                @include('WEB.home.footer')
            </div>
        </div>
@endsection