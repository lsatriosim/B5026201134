@extends('layout.ceria')
@section('title', 'DATA PEGAWAI')

@section('judulhalaman', 'Data Pegawai')
@section('isikonten')
<a href="/pegawai/tambah" class="btn btn-primary" > + Tambah Pegawai Baru</a>

<br/>
<br/>
<div class="container">
<form action="/pegawai/cari" method="GET">
    <input type="text" class="form-control" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
    <input type="submit" class="form-control btn-secondary" value="CARI">
</form>
</div>
<br>

    <div class="table-responsive-sm">
	<table class="table table-success table-striped ">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td >
                <a href="/pegawai/detail/{{ $p->pegawai_id }}" class="btn btn-default btn-sm" role="button">View </a>
                |
				<a href="/pegawai/edit/{{ $p->pegawai_id }} " class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</div>

<br/>
	Halaman : {{ $pegawai->currentPage() }} <br/>
	Jumlah Data : {{ $pegawai->total() }} <br/>
	Data Per Halaman : {{ $pegawai->perPage() }} <br/>


	{{ $pegawai->links() }}
@endsection

@section('pegawaiactive')
class='active'
@endsection
