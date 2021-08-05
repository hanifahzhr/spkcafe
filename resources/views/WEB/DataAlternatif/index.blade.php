
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
                        <h1 class="h3 mb-0 text-gray-800">Alternatif Cafe</h1>
                    </div>

                    @include('WEB._partial.flash_message')

                    <div class="d-flex justify-content-end">
                        <div>
                            <a href="{{ url('alternatif/create')}}" class="btn btn-primary mt-4 mb-4 align-right"> Create Alternatif</a>
                        </div>
                    </div>

                    <!-- DataTables Kriteria Cafe -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Cafe</h6>
                        </div>
                        <div class="card-body">
                        @if (!empty($alternatif_list))
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Id Cafe</th>
                                        <th>Nama Cafe</th>
                                        <th>Alamat</th>
                                        <th>No Telepon</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 0;?>
                                        @foreach($alternatif_list as $alternatif)
                                    <?php $no++;?>
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $alternatif->idcafe}}</td>
                                            <td>{{ $alternatif->nama_cafe}}</td>
                                            <td>{{ $alternatif->alamat}}</td>
                                            <td>{{ $alternatif->telepon}}</td>
                                            <td>
                                            <div class="d-flex justify-content-center">
                                                <div class="mr-1">
                                                    <a href="{{url('alternatif/'.$alternatif->id)}}" class="btn btn-success"> 
                                                        <i class="far fa-list-alt"></i>
                                                    </a>
                                                </div>
                                                <div class="mr-1">
                                                    <a href="{{ url('alternatif/'.$alternatif->id.'/edit')}}" class="btn btn-warning"> 
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </div class="mr-1">
                                                <!-- <a> {{url('alternatif/'.$alternatif->id.'/delete')}}
                                                    {!! Form::open(['method' => 'DELETE', 'action' => ['alternatifController@destroy', $alternatif->id]]) !!}
                                                    {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
                                                    {!! Form::close() !!}
                                                </a> -->
                                                <div class="box-button">
                                                    {!! Form::open(['method' => 'DELETE', 'action' =>
                                                        ['alternatifController@destroy', $alternatif->id]]) !!}
                                                    {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
                                                    {!! Form::close() !!}                                                
                                                </div>
                                                <!-- <a href="{{ url('alternatif/'.$alternatif->id.'/delete')}}" class="btn btn-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a> -->
                                            </div>
                                            </td>
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