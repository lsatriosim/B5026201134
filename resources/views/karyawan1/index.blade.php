@extends('layout.ceria')
@section('title', 'DATA KARYAWAN')

@section('judulhalaman', 'Data Karyawan')
@section('isikonten')
<a href="/karyawan/tambah" class="btn btn-primary" > + Tambah Karyawan Baru</a>

<br/>
<br/>
<div class="container">
<form action="/karyawan/cari" method="GET">
    <input type="text" class="form-control" name="cari" placeholder="Cari Karyawan .." value="{{ old('cari') }}">
    <input type="submit" class="form-control btn-secondary" value="CARI">
</form>
</div>
<br>

    <div class="table-responsive-sm">
	<table class="table table-success table-striped ">
		<tr>
            <th>No</th>
			<th>NIP</th>
			<th>Nama</th>
			<th>Pangkat</th>
			<th>Gaji</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawan as $k)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $k->NIP }}</td>
			<td>{{ $k->Nama }}</td>
			<td>{{ $k->Pangkat }}</td>
			<td>{{ $k->Gaji }}</td>
			<td >
                <a href="/karyawan/detail/{{ $k->NIP}}" class="btn btn-default btn-sm" role="button">View </a>
                |
				<a href="/karyawan/edit/{{ $k->NIP }} " class="btn btn-warning">Edit</a>
				|
				<a href="/karyawan/hapus/{{ $k->NIP}}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</div>

	{{ $karyawan->links() }}
@endsection

@section('karyawanactive')
class='active'
@endsection
