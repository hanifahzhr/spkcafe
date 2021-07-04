@extends('WEB.layout.app')
@section('title','Spk Cafe Admin')
@section('content')
@include('WEB.home.navbar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <h2 class="mt-4">Kelola Admin</h2>

                    <div>
                    <a href="{{ url('user/create')}}" class="btn btn-primary btn-lg mt-4 mb-4 align-right"> Create Admin</a>
                    </div>
                        <div class="card mb-4">
                          
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Admin
                            </div>
                            <div class="card-body">
                                @if (count($user_list) > 0)
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Level</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 0; ?>
                                    <?php foreach($user_list as $user): ?>
                                    <tr>
                                        <!-- <th>1</th>
                                        <th>Hanifah</th>
                                        <th>hanifah@admin.co.id</th>
                                        <th>Admin</th>
                                        <td>
                                        <a href="{{ url('user/edit')}}" class="btn btn-warning"> Edit</a>
                                        <a href="#" class="btn btn-danger"> Delete</a>
                                        </td> -->
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->level }}</td>
                                        <td>
                                            <div class="box-button">
                                                {{ link_to('user/' . $user->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
                                            </div>
                                            <div class="box-button">
                                                {!! Form::open(['method' => 'DELETE', 'action' => ['userController@destroy', $user->id]]) !!}
                                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                                {!! Form::close() !!}
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                                    </tbody>
                                </table>
                                @else
                                    <p>Tidak ada data user.</p>
                                @endif
                            </div>
                        </div>

                        <div class="card mb-4">
                          
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Create Data Admin
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
                </main>
                @include('WEB.home.footer')
            </div>
        </div>
@endsection