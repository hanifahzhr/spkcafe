
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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Data Cafe</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah_alternatif}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-coffee fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Data Akun Admin</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah_user}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- DataTables Admin -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Admin</h6>
                        </div>
                        <div class="card-body">
                        @if (!empty($user_list))
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama Admin</th>
                                        <th>Email</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($user_list as $user)
                                        <tr class="text-center">
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                    <p>Tidak ada data user</p>
                                @endif
                            </div>
                        </div>
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
                                    <tr class="text-center">
                                        <th>Id Kriteria</th>
                                        <th>Nama Kriteria</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($kriteria_list as $kriteria)
                                        <tr class="text-center">
                                            <td>{{ $kriteria->idx_kriteria}}</td>
                                            <td>{{ $kriteria->nama_kriteria}}</td>
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

                    <!-- DataTables Cafe -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Cafe</h6>
                        </div>
                        <div class="card-body">
                        @if (!empty($alternatif_list))
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                                    <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Id Cafe</th>
                                        <th>Nama Cafe</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($alternatif_list as $alternatif)
                                        <tr class="text-center">
                                            <td>{{ $alternatif->id}}</td>
                                            <td>{{ $alternatif->idcafe}}</td>
                                            <td>{{ $alternatif->nama_cafe}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                    <p>Tidak ada data alternatif</p>
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