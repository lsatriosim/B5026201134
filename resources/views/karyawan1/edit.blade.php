@extends('layout.ceria')
@section('title', 'EDIT KARYAWAN')

@section('judulhalaman', 'Edit Karyawan')
@section('isikonten')
	<a href="/karyawan"> Kembali</a>

	<br/>
	<br/>

    @foreach ($karyawan as $k)
	<form action="/karyawan/update" class="form-group" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-2">
                <b><label for="nip">NIP</label></b>
            </div>
            <div class="col-1">
                <b>:</b>
            </div>
            <div class="col-9">
                <input type="text" class="form-control" name="nip" required="required" value="{{$k->NIP}}" disabled>
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
                <input type="text" class="form-control" name="nama" required="required" value="{{$k->Nama}}">
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
                <input type="text" class="form-control" name="pangkat" required="required" value="{{$k->Pangkat}}">
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
                <input type="number" class="form-control" name="gaji" required="required" value="{{$k->Gaji}}">
            </div>
        </div>
		<input type="submit" class="btn btn-primary" value="Simpan Data">
	</form>
    @endforeach
@endsection
