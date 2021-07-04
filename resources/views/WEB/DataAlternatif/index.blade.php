@extends('WEB.layout.app')
@section('title','Spk Cafe Admin')
@section('content')
@include('WEB.home.navbar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <h2 class="mt-4">Alternatif Cafe</h2>

                    <div class="d-flex justify-content-end">
                        <div>
                            <a href="{{ url('alternatif/create')}}" class="btn btn-primary mt-4 mb-4 align-right"> Create Alternatif</a>
                        </div>
                    </div>
                        <div class="card mb-4">
                          
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Cafe
                            </div>
                            <div class="card-body">
                                @if (!empty($alternatif_list))
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr class="table-secondary"> 
                                            <th>No</th>
                                            <th>Id Cafe</th>
                                            <th>Nama Cafe</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach($alternatif_list as $alternatif)
                                    <tbody>
                                    <tr>
                                        <td>{{ $alternatif->id}}</td>
                                        <td>{{ $alternatif->idcafe}}</td>
                                        <td>{{ $alternatif->nama_cafe}}</td>
                                        <td>-</td>
                                        <td>
                                        <a href="{{ url('alternatif/'.$alternatif->id.'/detail')}}" class="btn btn-success"> Detail</a>
                                        <a href="{{ url('alternatif/edit')}}" class="btn btn-warning"> Edit</a>
                                        <a href="{{ url('alternatif/'.$alternatif->id.'/delete')}}" class="btn btn-danger"> Delete</a>
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
                </main>
                @include('WEB.home.footer')
            </div>
        </div>
@endsection