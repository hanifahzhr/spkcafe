
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
                        <h1 class="h3 mb-0 text-gray-800">Proses Perhitungan Uji Konsistensi Kriteria</h1>
                    </div>

                    <!-- DataTables Matriks Penjumlahan Setiap Baris -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Matriks Penjumlahan Setiap Baris</h6>
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
                                        <th>{{ $matriks->nama}}</th>
                                        <td>{{ $a  = round(($matriks->mat_fas)*$bfasilitas,3)}}</td>
                                        <td>{{ $b  = round(($matriks->mat_lok)*$blokasi,3)}}</td>
                                        <td>{{ $c  = round(($matriks->mat_var)*$bvariasi,3)}}</td>
                                        <td>{{ $d  = round(($matriks->mat_ras)*$brasa,3)}}</td>
                                        <td>{{ $e  = round(($matriks->mat_har)*$bharga,3)}}</td>
                                        <td>{{ $f  = round(($matriks->mat_pel)*$bpelayanan,3)}}</td>
                                        <td>{{ $g  = round(($matriks->mat_area)*$barea,3)}}</td>
                                        <td>{{ $h  = round(($matriks->mat_waktu)*$bwaktu,3)}}</td>
                                        <td>{{ $i  = round(($matriks->mat_rat)*$brating,3)}}</td>
                                        <th class="total">
                                            {{ $total = $a+$b+$c+$d+$e+$f+$g+$h+$i }} 
                                        </th>
                                    </tr>
                                </tbody>
                                @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                        <!-- DataTables Perhitungan Rasio Konsistensi -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Perhitungan Rasio Konsistensi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">-</th>
                                        <th scope="col">Jumlah Baris</th>
                                        <th scope="col">Bobot Kriteria</th>
                                        <th scope="col">Hasil</th>
                                        <!-- <th scope="col">Cek</th> -->
                                    </tr>
                                </thead>
                                @php
                                $cekbf=0;
                                @endphp
                                @foreach($matriks_perbandingan_list as $matriks)
                                @php
                                    $a1  = round(($matriks->mat_fas)*$bfasilitas,3);
                                    $b1  = round(($matriks->mat_lok)*$blokasi,3);
                                    $c1  = round(($matriks->mat_var)*$bvariasi,3);
                                    $d1  = round(($matriks->mat_ras)*$brasa,3);
                                    $e1  = round(($matriks->mat_har)*$bharga,3);
                                    $f1  = round(($matriks->mat_pel)*$bpelayanan,3);
                                    $g1  = round(($matriks->mat_area)*$barea,3);
                                    $h1  = round(($matriks->mat_waktu)*$bwaktu,3);
                                    $i1  = round(($matriks->mat_rat)*$brating,3);
                                    $total1 = ($a1+$b1+$c1+$d1+$e1+$f1+$g1+$h1+$i1);


                                    $b1 = round(($matriks->mat_fas)/$sumFas,3);
                                    $b2 = round(($matriks->mat_lok)/$sumLok,3);
                                    $b3 = round(($matriks->mat_var)/$sumVar,3);
                                    $b4 = round(($matriks->mat_ras)/$sumRas,3);
                                    $b5 = round(($matriks->mat_har)/$sumHar,3);
                                    $b6 = round(($matriks->mat_pel)/$sumPel,3);
                                    $b7 = round(($matriks->mat_area)/$sumArea,3);
                                    $b8 = round(($matriks->mat_waktu)/$sumWaktu,3);
                                    $b9 = round(($matriks->mat_rat)/$sumRat,3);
                                    $totalboboot = round(($b1+$b2+$b3+$b4+$b5+$b6+$b7+$b8+$b9)/($count_kriteria),3);

                                    $chasil = round($total1/$totalboboot,3);
                                    $cek = round($chasil+$cekbf,3);
                                    $cekbf = $cek;

                                    $total = $cek;
                                    
                                    $a = round((($matriks->mat_fas)*$bfasilitas)/$bfasilitas,3);
                                    $b = round((($matriks->mat_lok)*$blokasi)/$blokasi,3);
                                    $c = round((($matriks->mat_var)*$bvariasi)/$bvariasi,3);
                                    $d = round((($matriks->mat_ras)*$brasa)/$brasa,3);
                                    $e = round((($matriks->mat_har)*$bharga)/$bharga,3);
                                    $f = round((($matriks->mat_pel)*$bpelayanan)/$bpelayanan,3);
                                    $g = round((($matriks->mat_area)*$barea)/$barea,3);
                                    $h = round((($matriks->mat_waktu)*$bwaktu)/$bwaktu,3);
                                    $i = round((($matriks->mat_rat)*$brating)/$brating,3);
                                    $jumlah = ($a+$b+$c+$d+$e+$f+$g+$h+$i);

                                    

                                    


                                @endphp
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $matriks->nama}}</th>
                                        <td>
                                            {{$total1}} 
                                        </td>
                                        <td>
                                        {{ $totalboboot }}
                                        </td>
                                            <th>
                                                {{ $chasil }}
                                            </th>
                                            
                                    </tr>
                                    @endforeach
                                    <!-- <tr>
                                        <th scope="row">JUMLAH</th>
                                            <td>-</td>
                                            <td>-</td>
                                            <th>0,222</th>
                                    </tr> -->
                                    <tr>
                                        <th>Jumlah</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th class="total">
                                            {{
                                                $total
                                            }}
                                        </th>
                                    </tr>
                                </tbody>
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