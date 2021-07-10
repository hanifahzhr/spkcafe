
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
                        <h1 class="h3 mb-0 text-gray-800">Kriteria Cafe</h1>
                    </div>
                
                    <!-- DataTables Kriteria Cafe -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kriteria Cafe</h6>
                        </div>
                        <div class="card-body">
                        @if (!empty($kriteria_list))
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
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
                    </div>

                    <!-- DataTables perbandingan Kriteria Cafe -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kriteria Cafe</h6>
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