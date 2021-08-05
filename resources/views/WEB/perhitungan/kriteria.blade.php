
@extends('WEB.layout.app')
@section('title','Spk Cafe Admin')
@section('content')

    <!-- Page Wrapper -->
    <div id="wrapper">
    @include('WEB.home.navbar')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Proses Perhitungan Kriteria</h1>
                    </div>

                    <!-- DataTables perbandingan Kriteria Cafe -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Matriks Perbandingan Kriteria</h6>
                        </div>
                        <div class="card-body">
                            @if (!empty($matriks_perbandingan_list))
                            <div class="table-responsive">
                                <table class="table table-striped" width="100%" cellspacing="0">
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
                                @foreach($matriks_perbandingan_list as $matriks_perbandingan)
                                <tbody>
                                    <tr>
                                            <td>{{ $matriks_perbandingan->nama}}</td>
                                            <td>{{ $matriks_perbandingan->mat_fas}}</td>
                                            <td>{{ $matriks_perbandingan->mat_lok}}</td>
                                            <td>{{ $matriks_perbandingan->mat_var}}</td>
                                            <td>{{ $matriks_perbandingan->mat_ras}}</td>
                                            <td>{{ $matriks_perbandingan->mat_har}}</td>
                                            <td>{{ $matriks_perbandingan->mat_pel}}</td>
                                            <td>{{ $matriks_perbandingan->mat_area}}</td>
                                            <td>{{ $matriks_perbandingan->mat_waktu}}</td>
                                            <td>{{ $matriks_perbandingan->mat_rat}}</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <th>Jumlah</th>
                                        <th>{{ $sumFas }}</th>
                                        <th>{{ $sumLok }}</th>
                                        <th>{{ $sumVar }}</th>
                                        <th>{{ $sumRas }}</th>
                                        <th>{{ $sumHar }}</th>
                                        <th>{{ $sumPel }}</th>
                                        <th>{{ $sumArea }}</th>
                                        <th>{{ $sumWaktu }}</th>
                                        <th>{{ $sumRat }}</th>
                                    </tr>
                                </tbody>
                            </table>
                                @else
                                    <p>tidak ada data</p>
                                @endif
                            </div>
                        </div>
                    </div>

                        <!-- DataTables Jumlah Kriteria Cafe -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Kriteria</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" width="100%" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <th scope="row">Jumlah Kriteria</th>
                                            <th>{{ $count_kriteria }}</th>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Matriks Nilai Kriteria (Normalisasi)</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" width="100%" cellspacing="0">
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
                                @foreach($matriks_perbandingan_list as $matriks)
                                <tbody>
                                    <tr>
                                        <td>{{ $matriks->nama}}</td>
                                        <td>{{round($matriks->mat_fas/$sumFas,3)}}</td>
                                        <td>{{round($matriks->mat_lok/$sumLok,3)}}</td>
                                        <td>{{round($matriks->mat_var/$sumVar,3)}}</td>
                                        <td>{{round($matriks->mat_ras/$sumRas,3)}}</td>
                                        <td>{{round($matriks->mat_har/$sumHar,3)}}</td>
                                        <td>{{round($matriks->mat_pel/$sumPel,3)}}</td>
                                        <td>{{round($matriks->mat_area/$sumArea,3)}}</td>
                                        <td>{{round($matriks->mat_waktu/$sumWaktu,3)}}</td>
                                        <td>{{round($matriks->mat_rat/$sumRat,3)}}</td>
                                        <td>
                                            {{
                                                (round($matriks->mat_fas/$sumFas,3))+ (round($matriks->mat_lok/$sumLok,3)) + (round($matriks->mat_var/$sumVar,3)) + (round($matriks->mat_ras/$sumRas,3)) + 
                                                (round($matriks->mat_har/$sumHar,3)) + (round($matriks->mat_pel/$sumPel,3)) + (round($matriks->mat_area/$sumArea,3)) + (round($matriks->mat_waktu/$sumWaktu,3)) +
                                                (round($matriks->mat_rat/$sumRat,3))
                                            }}
                                        </td>
                                    </tr>
                                    
                                </tbody>
                                @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bobot Kriteria</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">Kriteria</th>
                                        <th scope="col">Bobot Kriteria</th>
                                    </tr>
                                </thead>
                                @foreach($matriks_perbandingan_list as $matriks)
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $matriks->nama}}</th>
                                        <td>
                                        {{
                                        round(((round($matriks->mat_fas/$sumFas,3))+ (round($matriks->mat_lok/$sumLok,3)) + (round($matriks->mat_var/$sumVar,3)) + 
                                                (round($matriks->mat_ras/$sumRas,3)) + (round($matriks->mat_har/$sumHar,3))+(round($matriks->mat_pel/$sumPel,3)) + 
                                                (round($matriks->mat_area/$sumArea,3)) + (round($matriks->mat_waktu/$sumWaktu,3)) + 
                                                (round($matriks->mat_rat/$sumRat,3))) / ($count_kriteria),3)
                                        }}
                                        </td>
                                    </tr>
                                    
                                </tbody>
                                @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
                <!-- /.container-fluid -->

    </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('WEB.home.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logout Of Admin Page?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div> -->