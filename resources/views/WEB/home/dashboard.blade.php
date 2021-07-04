@extends('WEB.layout.app')
@section('title','Spk Cafe Admin')
@section('content')
@include('WEB.home.navbar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Selamat Datang di Sistem Pendukung Keputusan Pemilihan Cafe di Kota Tangerang Selatan Menggunakan Metode AHP (Analytical Hierarchy Process)</h1>
                        <ol class="breadcrumb mt-4 mb-4">
                            <li class="breadcrumb-item active">Sistem pendukung keputusan ini adalah sistem yang dapat digunakan untuk membantu konsumen dalam memilih cafe di Kota Tangerang Selatan
                            yang ingin dikunjungi berdasarkan kriteria pertimbangan konsumen. untuk dapat memberikan keputusan, sistem ini menggunakan metode AHP (Analytical Hierarchy Process)</li>
                        </ol>

                        <div class="card mb-4">
                          
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Kriteria Cafe
                            </div>
                            <div class="card-body">
                                <!-- @if (!empty($kriteria_l)) -->
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id Kriteria</th>
                                            <th>Nama Kriteria</th>
                                        </tr>
                                    </thead>
                                    <!-- @foreach($kriteria_l as $kriteria) -->
                                    <tbody>
                                    <!-- <tr>
                                        <td>{{ $kriteria->idx_kriteria}}</td>
                                        <td>{{ $kriteria->nama_kriteria}}</td>
                                    </tr>
                                    @endforeach -->
                                    </tbody>
                                </table>
                                <!-- @else -->
                                    <p>Tidak ada data kriteria</p>
                                <!-- @endif -->
                            </div>
                        </div>
                        
                        <div class="card mb-4">
                          
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Cafe
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple2">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Cafe</th>
                                            <th>Nama Cafe</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Cafe</th>
                                            <th>Nama Cafe</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>A1</td>
                                        <td>Kedai Roti Bakar (Keibar) Pamulang</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                @include('WEB.home.footer')
            </div>
        </div>
@endsection