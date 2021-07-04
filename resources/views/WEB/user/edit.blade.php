@extends('WEB.layout.app')
@section('title','Spk Cafe Admin')
@section('content')
@include('WEB.home.navbar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <h2 class="mt-4">Kelola Admin</h2>

                        <div class="card mb-4">
                          
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Edit Data Admin
                            </div>
                            <div class="card-body">
                                <!-- <form>
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
                                  <input class="btn btn-success form-control" type="submit" value="Update">
                                </div>
                                </form> -->
                                {!! Form::model($user, ['method' => 'PATCH', 'action' => ['userController@update', $user->id]]) !!}
                                @include('user.form', ['submitButtonText' => 'Update User'])
                                {!! Form::close() !!}
                            </div>
                            @stop
                    </div>
                </main>
                @include('WEB.home.footer')
            </div>
        </div>
@endsection