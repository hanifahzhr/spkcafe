
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
                        <h1 class="h3 mb-0 text-gray-800">Proses Perhitungan Alternatif</h1>
                    </div>

                    <!-- DataTables Konversi Nilai Alternatif -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Konversi Nilai Alternatif</h6>
                        </div>
                        <div class="card-body">
                        @if (!empty($alternatif))
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
                                @foreach($alternatif as $alter)
                                <tbody>
                                    <tr>
                                        <th scope="row">{{$alter->nama_cafe}}</th>
                                            <td>{{$alter->nilai_fasilitas}}</td>
                                            <td>{{$alter->nilai_lokasi}}</td>
                                            <td>{{$alter->nilai_menu}}</td>
                                            <td>{{$alter->nilai_rasa}}</td>
                                            <td>{{$alter->nilai_harga}}</td>
                                            <td>{{$alter->nilai_pelayanan}}</td>
                                            <td>{{$alter->nilai_area}}</td>
                                            <td>{{$alter->nilai_operasional}}</td>
                                            <td>{{$alter->nilai_rating}}</td>
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

                        <!-- DataTables Perhitungan Bobot Prioritas Alternatif -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Perhitungan Bobot Prioritas Alternatif</h6>
                        </div>
                        <div class="card-body">
                        @if (!empty($alternatif))
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
                                @foreach($alternatif as $alter)
                                <tbody>
                                    <tr>
                                        <th scope="row">{{$alter->nama_cafe}}</th>
                                            <td>{{round(($alter->nilai_fasilitas)/$sumFas,3)}}</td>
                                            <td>{{round(($alter->nilai_lokasi)/$sumLok,3)}}</td>
                                            <td>{{round(($alter->nilai_menu)/$sumVar,3)}}</td>
                                            <td>{{round(($alter->nilai_rasa)/$sumRas,3)}}</td>
                                            <td>{{round(($alter->nilai_harga)/$sumHar,3)}}</td>
                                            <td>{{round(($alter->nilai_pelayanan)/$sumPel,3)}}</td>
                                            <td>{{round(($alter->nilai_area)/$sumArea,3)}}</td>
                                            <td>{{round(($alter->nilai_operasional)/$sumWaktu,3)}}</td>
                                            <td>{{round(($alter->nilai_rating)/$sumRat,3)}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                                @else
                                    <p>tidak ada data</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Matriks Total Prioritas Global</h6>
                        </div>
                        <div class="card-body">
                        @if (!empty($alternatif))
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
                                        <th scope="col">Hasil</th>
                                        <th scope="col">Ranking</th>
                                    </tr>
                                </thead>
                                @foreach($alternatif as $alter)
                                <tbody>
                                    <tr>
                                        <th scope="row">{{$alter->nama_cafe}}</th>
                                            <td>{{ $a = round((($alter->nilai_fasilitas)/$sumFas)*$bfasilitas,3)}}</td>
                                            <td>{{ $b = round((($alter->nilai_lokasi)/$sumLok)*$blokasi,3)}}</td>
                                            <td>{{ $c = round((($alter->nilai_menu)/$sumVar)*$bvariasi,3)}}</td>
                                            <td>{{ $d = round((($alter->nilai_rasa)/$sumRas)*$brasa,3)}}</td>
                                            <td>{{ $e = round((($alter->nilai_harga)/$sumHar)*$bharga,3)}}</td>
                                            <td>{{ $f = round((($alter->nilai_pelayanan)/$sumPel)*$bpelayanan,3)}}</td>
                                            <td>{{ $g = round((($alter->nilai_area)/$sumArea)*$barea,3)}}</td>
                                            <td>{{ $h = round((($alter->nilai_operasional)/$sumWaktu)*$bwaktu,3)}}</td>
                                            <td>{{ $i = round((($alter->nilai_rating)/$sumRat)*$brating,3)}}</td>
                                            <td class="total">{{$total = $a+$b+$c+$d+$e+$f+$g+$h+$i}}</td>
                                            <td class="rank"></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                                @else
                                    <p>tidak ada data</p>
                                @endif
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
    
    @endsection
        @section('script')
        <script>
                    $(document).ready(function() {
                    $(".total")
                        .map(function(){return $(this).text()})
                        .get()
                        .sort(function(a,b){return a - b })
                        .reduce(function(a, b){ if (b != a[0]) a.unshift(b); return a }, [])
                        .forEach((v,i)=>{
                    $('.total').filter(function() {return $(this).text() == v;}).next().text(i + 1);
                    });
                });
        </script>

    @endsection

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