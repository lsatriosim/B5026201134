@extends('layout.ceria')
@section('title', 'TAMBAH PEGAWAI')

@section('judulhalaman', 'Tambah Pegawai')
@section('isikonten')
	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <label for="nama">Nama :</label><br>
		<input type="text" name="nama" required="required"> <br/>
        <label for="jabatan">Jabatan  :</label><br>
		<input type="text" name="jabatan" required="required"> <br/>
        <label for="umur">Umur :</label><br>
		<input type="number" name="umur" required="required"> <br/>
        <label for="alamat">Alamat :</label><br>
        <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" class="btn btn-primary" value="Simpan Data">
	</form>
@endsection
