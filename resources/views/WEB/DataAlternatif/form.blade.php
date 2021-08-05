@if (isset($alternatif))
    {!! Form::hidden('id', $alternatif->id) !!}
@endif

@if ($errors->any())
    <div class="form-group {{ $errors->has('idcafe') ?
        'has-error' : 'has-success'}}">
@else
<div class="form-group mt-4">
@endif
    {!! Form::label('idcafe', 'ID Cafe', ['class' => 'control-label']) !!}
    {!! Form::text('idcafe', null, ['class' => 'form-control']) !!}
    @if ($errors->has('idcafe'))
        <span class="help-block">{{ $errors->first('idcafe')}}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('nama_cafe') ?
        'has-error' : 'has-success'}}">
@else
<div class="form-group mt-4">
@endif
    {!! Form::label('nama_cafe', 'Nama Cafe', ['class' => 'control-label']) !!}
    {!! Form::text('nama_cafe', null, ['class' => 'form-control']) !!}
    @if ($errors->has('nama_cafe'))
        <span class="help-block">{{ $errors->first('nama_cafe')}}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('alamat') ?
        'has-error' : 'has-success'}}">
@else
<div class="form-group mt-4">
@endif
    {!! Form::label('alamat', 'Alamat', ['class' => 'control-label']) !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
    @if ($errors->has('alamat'))
        <span class="help-block">{{ $errors->first('alamat')}}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('telepon') ?
        'has-error' : 'has-success'}}">
@else
<div class="form-group mt-4">
@endif
    {!! Form::label('telepon', 'Nomor Telepon', ['class' => 'control-label']) !!}
    {!! Form::text('telepon', null, ['class' => 'form-control']) !!}
    @if ($errors->has('telepon'))
        <span class="help-block">{{ $errors->first('telepon')}}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('id_fas') ?
        'has-error' : 'has-success'}}">
@else
<div class="form-group mt-4">
@endif
    {!! Form::label('id_fas', 'Fasilitas Cafe', ['class' => 'control-label']) !!}
    @if(count($list_fasilitas) > 0)
        {!! Form::select('id_fas', $list_fasilitas, null,
        ['class' => 'form-control', 'id' => 'id_fas', 'placeholder' => 'Pilih']) !!}
        @else
            <p>Tidak ada pilihan Fasilitas. Silahkan Buat Terlebih Dahulu</p>
        @endif
            @if ($errors->has('id_fas'))
                <span class="help-block">
                    {{ $errors->first('id_fas')}}
                </span>
            @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('id_lokasi') ?
        'has-error' : 'has-success'}}">
@else
<div class="form-group mt-4">
@endif
    {!! Form::label('id_lokasi', 'Lokasi Cafe', ['class' => 'control-label']) !!}
    @if(count($list_lokasi) > 0)
        {!! Form::select('id_lokasi', $list_lokasi, null,
        ['class' => 'form-control', 'id' => 'id_lokasi', 'placeholder' => 'Pilih']) !!}
        @else
            <p>Tidak ada pilihan Lokasi. Silahkan Buat Terlebih Dahulu</p>
        @endif
            @if ($errors->has('id_lokasi'))
                <span class="help-block">
                    {{ $errors->first('id_lokasi')}}
                </span>
            @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('id_menu') ?
        'has-error' : 'has-success'}}">
@else
<div class="form-group mt-4">
@endif
    {!! Form::label('id_menu', 'Variasi Menu', ['class' => 'control-label']) !!}
    @if(count($list_menu) > 0)
        {!! Form::select('id_menu', $list_menu, null,
        ['class' => 'form-control', 'id' => 'id_menu', 'placeholder' => 'Pilih']) !!}
        @else
            <p>Tidak ada pilihan Menu. Silahkan Buat Terlebih Dahulu</p>
        @endif
            @if ($errors->has('id_menu'))
                <span class="help-block">
                    {{ $errors->first('id_menu')}}
                </span>
            @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('id_rasa') ?
        'has-error' : 'has-success'}}">
@else
<div class="form-group mt-4">
@endif
    {!! Form::label('id_rasa', 'Rasa', ['class' => 'control-label']) !!}
    @if(count($list_rasa) > 0)
        {!! Form::select('id_rasa', $list_rasa, null,
        ['class' => 'form-control', 'id' => 'id_rasa', 'placeholder' => 'Pilih']) !!}
        @else
            <p>Tidak ada pilihan Rasa. Silahkan Buat Terlebih Dahulu</p>
        @endif
            @if ($errors->has('id_rasa'))
                <span class="help-block">
                    {{ $errors->first('id_rasa')}}
                </span>
            @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('id_harga') ?
        'has-error' : 'has-success'}}">
@else
<div class="form-group mt-4">
@endif
    {!! Form::label('id_harga', 'Kisaran Harga Menu', ['class' => 'control-label']) !!}
    @if(count($list_harga) > 0)
        {!! Form::select('id_harga', $list_harga, null,
        ['class' => 'form-control', 'id' => 'id_harga', 'placeholder' => 'Pilih']) !!}
        @else
            <p>Tidak ada pilihan Harga Menu. Silahkan Buat Terlebih Dahulu</p>
        @endif
            @if ($errors->has('id_harga'))
                <span class="help-block">
                    {{ $errors->first('id_harga')}}
                </span>
            @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('id_pelayanan') ?
        'has-error' : 'has-success'}}">
@else
<div class="form-group mt-4">
@endif
    {!! Form::label('id_pelayanan', 'Pelayanan Cafe', ['class' => 'control-label']) !!}
    @if(count($list_pelayanan) > 0)
        {!! Form::select('id_pelayanan', $list_pelayanan, null,
        ['class' => 'form-control', 'id' => 'id_pelayanan', 'placeholder' => 'Pilih']) !!}
        @else
            <p>Tidak ada pilihan Pelayanan Cafe. Silahkan Buat Terlebih Dahulu</p>
        @endif
            @if ($errors->has('id_pelayanan'))
                <span class="help-block">
                    {{ $errors->first('id_pelayanan')}}
                </span>
            @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('id_area') ?
        'has-error' : 'has-success'}}">
@else
<div class="form-group mt-4">
@endif
    {!! Form::label('id_area', 'Area Cafe', ['class' => 'control-label']) !!}
    @if(count($list_area) > 0)
        {!! Form::select('id_area', $list_area, null,
        ['class' => 'form-control', 'id' => 'id_area', 'placeholder' => 'Pilih']) !!}
        @else
            <p>Tidak ada pilihan Area Cafe. Silahkan Buat Terlebih Dahulu</p>
        @endif
            @if ($errors->has('id_area'))
                <span class="help-block">
                    {{ $errors->first('id_area')}}
                </span>
            @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('id_operasional') ?
        'has-error' : 'has-success'}}">
@else
<div class="form-group mt-4">
@endif
    {!! Form::label('id_operasional', 'Waktu Operasional Cafe', ['class' => 'control-label']) !!}
    @if(count($list_operasional) > 0)
        {!! Form::select('id_operasional', $list_operasional, null,
        ['class' => 'form-control', 'id' => 'id_operasional', 'placeholder' => 'Pilih']) !!}
        @else
            <p>Tidak ada pilihan Waktu Operasional Cafe. Silahkan Buat Terlebih Dahulu</p>
        @endif
            @if ($errors->has('id_operasional'))
                <span class="help-block">
                    {{ $errors->first('id_operasional')}}
                </span>
            @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('id_rating') ?
        'has-error' : 'has-success'}}">
@else
<div class="form-group mt-4">
@endif
    {!! Form::label('id_rating', 'Rating Cafe', ['class' => 'control-label']) !!}
    @if(count($list_rating) > 0)
        {!! Form::select('id_rating', $list_rating, null,
        ['class' => 'form-control', 'id' => 'id_rating', 'placeholder' => 'Pilih']) !!}
        @else
            <p>Tidak ada pilihan Rating. Silahkan Buat Terlebih Dahulu</p>
        @endif
            @if ($errors->has('id_rating'))
                <span class="help-block">
                    {{ $errors->first('id_rating')}}
                </span>
            @endif
</div>

@if ($errors->any())
<div class="form-group {{ $errors->has('deskripsi') ?
        'has-error' : 'has-success'}}">
@else
    <div class="form-group mt-4">
@endif
    {!! Form::label('deskripsi', 'Deskripsi', ['class' => 'control-label']) !!}
    {!! Form::textarea('deskripsi', null, ['class' => 'form-control']) !!}
    @if ($errors->has('deskripsi'))
        <span class="help-block">{{ $errors->first('deskripsi')}}</span>
    @endif
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>