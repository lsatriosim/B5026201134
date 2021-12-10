@extends('layout.ceria')
@section('title', 'DETAIL PEGAWAI')

@section('judulhalaman', 'Detail Data Pegawai')
@section('isikonten')
<a href="/pegawai"> Kembali</a>

<br/>
<br/>

@foreach($pegawai as $p)
<div class="row">
    <div class="col-2">
        <b><label for="">Id Pegawai</label></b>
    </div>
    <div class="col-1">
        <b>:</b>
    </div>
    <div class="col-9">
        <label for="">{{$p->pegawai_id}}</label>
    </div>
</div>
<div class="row">
    <div class="col-2">
        <b><label for="">Nama Pegawai</label></b>
    </div>
    <div class="col-1">
        <b>:</b>
    </div>
    <div class="col-9">
        <label for="">{{$p->pegawai_nama}}</label>
    </div>
</div>
<div class="row">
    <div class="col-2">
        <b><label for="">Jabatan</label></b>
    </div>
    <div class="col-1">
        <b>:</b>
    </div>
    <div class="col-9">
        <label for="">{{$p->pegawai_jabatan}}</label>
    </div>
</div>
<div class="row">
    <div class="col-2">
        <b><label for="">Umur</label></b>
    </div>
    <div class="col-1">
        <b>:</b>
    </div>
    <div class="col-9">
        <label for="">{{$p->pegawai_umur}}</label>
    </div>
</div>
<div class="row">
    <div class="col-2">
        <b><label for="">Alamat</label></b>
    </div>
    <div class="col-1">
        <b>:</b>
    </div>
    <div class="col-9">
        <label for="">{{$p->pegawai_alamat}}</label>
    </div>
</div>
@endforeach
@endsection
