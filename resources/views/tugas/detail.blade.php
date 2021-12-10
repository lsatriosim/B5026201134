@extends('layout.ceria')

@section('title', 'DETAIL TUGAS')

@section('judulhalaman', 'Detail Tugas')

@section('isikonten')
	<a href="/tugas"> Kembali</a>

	<br/>
    <br/>

	@foreach($tugas as $p)
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
            <b><label for="">Tanggal</label></b>
        </div>
        <div class="col-1">
            <b>:</b>
        </div>
        <div class="col-9">
            <label for="">{{$p->Tanggal}}</label>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <b><label for="">Nama Tugas</label></b>
        </div>
        <div class="col-1">
            <b>:</b>
        </div>
        <div class="col-9">
            <label for="">{{$p->NamaTugas}}</label>
        </div>
    </div>
	<div class="row">
        <div class="col-2">
            <b><label for="">Status</label></b>
        </div>
        <div class="col-1">
            <b>:</b>
        </div>
        <div class="col-9">
            <label for="">@if($p->Status ==='S') Sudah Selesai @else Belum Selesai @endif</label>
        </div>
    </div>
	@endforeach
@endsection
