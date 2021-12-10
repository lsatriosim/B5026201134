@extends('layout.ceria')

@section('title', 'DATA TUGAS')

@section('judulhalaman', 'Data Tugas')

@section('isikonten')

    <a href="/tugas/tambah" class="btn btn-primary" > + Tambah Tugas Baru</a>
	<br/>
	<br/>
    <div class="container">
        <form action="/tugas/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Absen .." value="{{ old('cari') }}">
            <input type="submit" class="form-control btn-secondary" value="CARI">
        </form>
        </div>
    <br>
	<table class="table table-success table-striped m-0">
		<tr>
            <th>No</th>
			<th>Nama Pegawai</th>
			<th>Tanggal </th>
			<th>NamaTugas</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($tugas as $t)
		<tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $t->pegawai_nama }}</td>
			<td>{{ $t->Tanggal}}</td>
			<td>{{ $t->NamaTugas}}</td>
			<td>{{ $t->Status }}</td>
			<td>
                <a href="/tugas/detail/{{ $t->ID}}" class="btn btn-default btn-sm" role="button">View</a>
                |
				<a href="/tugas/edit/{{ $t->ID }}" class="btn btn-warning" >Edit</a>
				|
				<a href="/tugas /hapus/{{ $t->ID }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $tugas->links() }}
@endsection

@section('tugasactive')
class='active'
@endsection
