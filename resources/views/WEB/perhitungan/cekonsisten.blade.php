@extends('WEB.layout.app')
@section('title','Spk Cafe Admin')
@section('content')
@include('WEB.home.navbar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <h2 class="mt-4">Hasil Uji Konsistensi</h2>

                    <!-- <div>
                    <a href="{{ url('user/create')}}" class="btn btn-primary btn-lg mt-4 mb-4 align-right"> Create Admin</a>
                    </div> -->

                    <div class="card mt-4 mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Cek Konsistensi
                            </div>
                            <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">n (jumlah kriteria)</th>
                                            <td>9</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">nilai t</th>
                                            <td>9,047</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">CI (consistency Index)</th>
                                            <td>0,006</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">IR (index Rasio)</th>
                                            <td>1,49</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">CR (Consistency Rasio)</th>
                                            <td>0,0041</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">CR %</th>
                                            <td>0,41% < 10% Maka KONSISTEN</td>
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