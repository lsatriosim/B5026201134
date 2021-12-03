@extends('layout.ceria')
@section('title', 'EDIT PEGAWAI')

@section('judulhalaman', 'Edit Data Pegawai')
@section('isikonten')
	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		<label for="nama">Nama :</label><br>
		<input type="text" name="nama" required="required" value="{{$p->pegawai_nama}}"> <br/>
        <label for="jabatan">Jabatan  :</label><br>
		<input type="text" name="jabatan" required="required" value="{{$p->pegawai_jabatan}}"> <br/>
        <label for="umur">Umur :</label><br>
		<input type="number" name="umur" required="required" value="{{$p->pegawai_umur}}"> <br/>
        <label for="alamat">Alamat :</label><br>
        <textarea name="alamat" required="required">{{$p->pegawai_alamat}}</textarea> <br/>
		<input type="submit" class="btn btn-primary" value="Simpan Data">
	</form>
	@endforeach
@endsection
