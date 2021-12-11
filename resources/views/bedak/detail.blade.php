@extends('layout.ceria')
@section('title', 'EDIT BEDAK')

@section('judulhalaman', 'Edit Bedak')
@section('isikonten')
	<a href="/bedak"> Kembali</a>

	<br/>
	<br/>

    @foreach ($bedak as $b)

<div class="row">
    <div class="col-2">
        <b><label for="merk">Merk</label></b>
    </div>
    <div class="col-1">
        <b>:</b>
    </div>
    <div class="col-9">
        <label for="merk">{{$b->merkbedak}} </label>
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
        <label for="stock">{{$b->stockbedak}}</label>
    </div>
</div>
<div class="row">
    <div class="col-2">
        <b><label for="status">Status</label></b>
    </div>
    <div class="col-1">
        <b>:</b>
    </div>
    <div class="col-9">
        <label for="status">@if($b->tersedia == 'Y') Tersedia @else Tidak Tersedia @endif</label>
    </div>
</div>
    @endforeach
@endsection
