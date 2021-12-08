@extends('layout.ceria')
@section('title', 'DETAIL PEGAWAI')

@section('judulhalaman', 'Detail Data Pegawai')
@section('isikonten')
<a href="/pegawai"> Kembali</a>

<br/>
<br/>

@foreach($pegawai as $p)
    <label for="nama">Nama :</label>
    <label for="nama">{{$p->pegawai_nama}}</label><br/>
    <label for="jabatan">Jabatan  :</label>
    <label for="jabatan">{{$p->pegawai_jabatan}}</label><br/>
    <label for="umur">Umur :</label>
    <label for="umur">{{$p->pegawai_umur}}</label><br/>
    <label for="alamat">Alamat :</label>
    <label for="alamat">{{$p->pegawai_alamat}}</label><br/>
@endforeach
@endsection
