@extends('layout.ceria')

@section('title', 'DETAIL ABSEN PEGAWAI')

@section('judulhalaman','Detail Edit Absen')

@section('isikonten')
<a href="/absen"> Kembali</a>
<br/>
<br/>
	@foreach($absen as $p)
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
                <b><label for="">Status</label></b>
            </div>
            <div class="col-1">
                <b>:</b>
            </div>
            <div class="col-9">
                <label for="">@if($p->Status === 'H') HADIR @else TIDAK HADIR @endif</label>
            </div>
        </div>
	@endforeach


    @endsection
