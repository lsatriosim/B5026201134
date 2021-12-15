@extends('layout.ceria')
@section('title', 'TAMBAH KARYAWAN')

@section('judulhalaman', 'Tambah Karyawan')
@section('isikonten')
	<a href="/karyawan"> Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan/store" class="form-group" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-2">
                <b><label for="nip">NIP</label></b>
            </div>
            <div class="col-1">
                <b>:</b>
            </div>
            <div class="col-9">
                <input type="text" class="form-control" name="nip" required="required">
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
                <input type="text" class="form-control" name="nama" required="required">
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
                <input type="text" class="form-control" name="pangkat" required="required">
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
                <input type="number" class="form-control" name="gaji" required="required">
            </div>
        </div>
		<input type="submit" class="btn btn-primary" value="Simpan Data">
	</form>
@endsection
