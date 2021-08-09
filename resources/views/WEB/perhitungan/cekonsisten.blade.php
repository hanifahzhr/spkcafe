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
                        <h1 class="h3 mb-0 text-gray-800">Hasil Uji Konsistensi</h1>
                    </div>

                    <!-- DataTables Cek Konsistensi -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Cek Konsistensi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Nilai</th>
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

                                    $jum = round((1/$count_kriteria),3);
                                    $t = round(($jum*$total),3);

                                    $ci =round(($t-$count_kriteria)/($count_kriteria-1),3);
                                    $cr = round(($ci/1.49),3);
                                    $crper = round(($cr*100),3);
                                
                                @endphp
                                @endforeach
                                <tbody>
                                    <tr>
                                        <th scope="row">n (jumlah kriteria)</th>
                                            <td>{{ $count_kriteria }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">nilai t</th>
                                            <td>{{$t}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">CI (consistency Index)</th>
                                            <td>{{$ci}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">IR (index Rasio)</th>
                                            <td>1.49</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">CR (Consistency Rasio)</th>
                                            <td>{{$cr}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">CR %</th>
                                            <td>{{$crper}}% < 10% Maka KONSISTEN</td>
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