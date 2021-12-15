@extends('layout.ceria')
@section('title', 'DETAIL KARYAWAN')

@section('judulhalaman', 'Detail Karyawan')
@section('isikonten')
	<a href="/karyawan"> Kembali</a>

	<br/>
	<br/>

    @foreach ($karyawan as $k)

<div class="row">
    <div class="col-2">
        <b><label for="nip">NIP</label></b>
    </div>
    <div class="col-1">
        <b>:</b>
    </div>
    <div class="col-9">
        <label for="nip">{{$k->NIP}} </label>
    </div>
</div>
<div class="row">
    <div class="col-2">
        <b><label for="nama">Nama</label></b>
    </div>
    <div class="col-1">
        <b>:</b>
    </div>
    <div class="col-9">
        <label for="nama">{{$k->Nama}}</label>
    </div>
</div>
<div class="row">
    <div class="col-2">
        <b><label for="pangkat">Pangkat</label></b>
    </div>
    <div class="col-1">
        <b>:</b>
    </div>
    <div class="col-9">
        <label for="pangkat">{{$k->Pangkat}}</label>
    </div>
</div>
<div class="row">
    <div class="col-2">
        <b><label for="gaji">Gaji</label></b>
    </div>
    <div class="col-1">
        <b>:</b>
    </div>
    <div class="col-9">
        <label for="gaji">{{$k->Gaji}}</label>
    </div>
</div>
    @endforeach
@endsection
