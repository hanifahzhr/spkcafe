
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
                        <h1 class="h3 mb-0 text-gray-800">Detail Data Alternatif Cafe</h1>
                    </div>
                    <!-- DataTables Detail Alternatif Cafe -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Detail Data Cafe</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" width="100%" cellspacing="0">
                                <tbody>
                                    <!-- <tr>
                                        <div class="text-center">
                                            <img src="..." class="rounded" alt="...">
                                        </div>
                                    </tr> -->
                                    <!-- <tr>
                                        <th scope="row">No</th>
                                            <td>{{$alternatif->id}}</td>
                                    </tr> -->
                                    <tr>
                                        <th scope="row">Id Cafe</th>
                                            <td>{{$alternatif->idcafe}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Cafe</th>
                                            <td>{{$alternatif->nama_cafe}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Alamat Cafe</th>
                                            <td>{{$alternatif->alamat}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">No Telepon</th>
                                            <td>{{$alternatif->telepon}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Fasilitas Cafe</th>
                                            <td>{{$alternatif->nama_fasilitas}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Lokasi Cafe</th>
                                            <td>{{$alternatif->nama_lokasi}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Variasi Menu</th>
                                            <td>{{$alternatif->nama_menu}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Rasa</th>
                                            <td>{{$alternatif->nama_rasa}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Harga</th>
                                            <td>{{$alternatif->nama_harga}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pelayanan Cafe</th>
                                            <td>{{$alternatif->nama_pelayanan}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Area Cafe</th>
                                            <td>{{$alternatif->nama_area}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Waktu Operasional Cafe</th>
                                            <td>{{$alternatif->nama_operasional}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Rating Cafe</th>
                                            <td>{{$alternatif->nama_rating}}</td>
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