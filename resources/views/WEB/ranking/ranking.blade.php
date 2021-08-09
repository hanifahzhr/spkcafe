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
                        <h1 class="h3 mb-0 text-gray-800">Perangkingan Alternatif Cafe</h1>
                    </div>

                    <!-- DataTables Kriteria Cafe -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Ranking Cafe</h6>
                        </div>
                        <div class="card-body">
                        @if (!empty($alternatif))
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                        <tr> 
                                            <th>No</th>
                                            <th>Id Cafe</th>
                                            <th>Nama Cafe</th>
                                            <th>Hasil Akhir</th>
                                            <th>Ranking</th>
                                        </tr>
                                    </thead>
                                    <?php $no = 0;?>
                                    @foreach($alternatif as $alter)
                                    @php
                                        $a = round((($alter->nilai_fasilitas)/$sumFas)*$bfasilitas,3);
                                        $b = round((($alter->nilai_lokasi)/$sumLok)*$blokasi,3);
                                        $c = round((($alter->nilai_menu)/$sumVar)*$bvariasi,3);
                                        $d = round((($alter->nilai_rasa)/$sumRas)*$brasa,3);
                                        $e = round((($alter->nilai_harga)/$sumHar)*$bharga,3);
                                        $f = round((($alter->nilai_pelayanan)/$sumPel)*$bpelayanan,3);
                                        $g = round((($alter->nilai_area)/$sumArea)*$barea,3);
                                        $h = round((($alter->nilai_operasional)/$sumWaktu)*$bwaktu,3);
                                        $i = round((($alter->nilai_rating)/$sumRat)*$brating,3);

                                        $jumlah = ($a+$b+$c+$d+$e+$f+$g+$h+$i);
                                    @endphp
                                    <?php $no++;?>
                                    <tbody>
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td>{{ $alter->idcafe }}</td>
                                            <td>{{ $alter->nama_cafe}}</td>
                                            <td class="total"> 
                                                
                                               {{
                                                    $jumlah
                                                }}
                                                
                                            </td>
                                            <td class="rank"></td>
                                        </tr>
                                    </tbody>
                                    @endforeach
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