@extends('WEB.layout.app')
@section('title','Spk Cafe Admin')
@section('content')
@include('WEB.home.navbar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <h2 class="mt-4">Perangkingan Alternatif Cafe</h2>

                        <div class="card mb-4">
                          
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Ranking Cafe
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr class="table-secondary"> 
                                            <th>No</th>
                                            <th>Id Cafe</th>
                                            <th>Nama Cafe</th>
                                            <th>Hasil Akhir</th>
                                            <th>Ranking</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>A1</td>
                                            <td>Keibar Pamulang</td>
                                            <td>9,999</td>
                                            <td>1</td>
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