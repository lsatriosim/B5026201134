@extends('layout.ceria')
@section('title', 'EDIT BEDAK')

@section('judulhalaman', 'Edit Bedak')
@section('isikonten')
	<a href="/bedak"> Kembali</a>

	<br/>
	<br/>

    @foreach ($bedak as $b)
	<form action="/bedak/update" class="form-group" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $b->kodebedak }}"> <br/>
        <div class="row">
            <div class="col-2">
                <b><label for="merk">Merk</label></b>
            </div>
            <div class="col-1">
                <b>:</b>
            </div>
            <div class="col-9">
                <input type="text" name="merk" class="form-control" required="required" value="{{$b->merkbedak}}">
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
                <input type="number" class="form-control" name="stock" required="required" value="{{$b->stockbedak}}">
            </div>
        </div>
		<input type="submit" class="btn btn-primary" value="Simpan Data">
	</form>
    @endforeach
@endsection
