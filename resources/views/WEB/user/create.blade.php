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
                        <h1 class="h3 mb-0 text-gray-800">Kelola Admin</h1>
                    </div>

                    <!-- DataTables Kriteria Cafe -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Create Data Admin</h6>
                        </div>
                        <div class="card-body">
                        <form>
                                <div class="form-group mt-4">
                                  <label for="inputnama">Nama </label>
                                  <input type="nama" class="form-control" id="namaadmin" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group mt-4">
                                    <label for="inputemail">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="name@admin.co.id">
                                </div>
                                <div class="form-group mt-4">
                                    <label for="inputlevel">Level </label>
                                    <input class="form-control" type="text" placeholder="Admin" readonly>
                                </div>
                                <div class="form-group mt-4">
                                    <label for="inputpass">Password</label>
                                    <input type="password" class="form-control" id="pass" placeholder="Password">
                                </div>
                                <div class="form-group mt-4">
                                    <label for="inputpass">Confirmation Password</label>
                                    <input type="password" class="form-control" id="conpass" placeholder="Confirmation Password">
                                </div>
                                <div class="form-group mt-4 mb-4">
                                  <input class="btn btn-primary form-control" type="submit" value="Create">
                                </div>
                            </form>
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