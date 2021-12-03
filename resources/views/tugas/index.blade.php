@extends('layout.ceria')

@section('title', 'DATA TUGAS')

@section('judulhalaman', 'Data Tugas')

@section('isikonten')

    <a href="/tugas/tambah" class="btn btn-primary" > + Tambah Tugas Baru</a>
	<br/>
	<br/>

	<table class="table table-success table-striped">
		<tr>
			<th>IDPegawai</th>
			<th>Tanggal </th>
			<th>NamaTugas</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($tugas as $t)
		<tr>
			<td>{{ $t->IDPegawai }}</td>
			<td>{{ $t->Tanggal}}</td>
			<td>{{ $t->NamaTugas}}</td>
			<td>{{ $t->Status }}</td>
			<td>
				<a href="/tugas/edit/{{ $t->ID }}" class="btn btn-warning" >Edit</a>
				|
				<a href="/tugas /hapus/{{ $t->ID }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
