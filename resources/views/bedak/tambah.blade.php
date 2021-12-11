@extends('layout.ceria')
@section('title', 'TAMBAH BEDAK')

@section('judulhalaman', 'Tambah Bedak')
@section('isikonten')
	<a href="/bedak"> Kembali</a>

	<br/>
	<br/>

	<form action="/bedak/store" class="form-group" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-2">
                <b><label for="merk">Merk</label></b>
            </div>
            <div class="col-1">
                <b>:</b>
            </div>
            <div class="col-9">
                <input type="text" class="form-control" name="merk" required="required">
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <b><label for="stock">Stock</label></b>
            </div>
            <div class="col-1">
                <b>:</b>
            </div>
            <div class="col-9">
                <input type="number" class="form-control" name="stock" required="required">
            </div>
        </div>
		<input type="submit" class="btn btn-primary" value="Simpan Data">
	</form>
@endsection
