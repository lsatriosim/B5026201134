@extends('layout.ceria')

@section('title', 'Data Pegawai')

@section('judulhalaman','Data Absen')

@section('isikonten')

	<a href="/absen/tambah" class="btn btn-primary" > + Tambah Absen Pegawai Baru</a>

	<br/>
	<br/>
    <div class="container">
        <form action="/absen/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Absen .." value="{{ old('cari') }}">
            <input type="submit" class="form-control btn-secondary" value="CARI">
        </form>
        </div>
    <br>
	<table class="table table-success table-striped">
		<tr>
            <th>No</th>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->Status }}</td>
			<td>
                <a href="/absen/detail/{{ $p->ID }}" class="btn btn-default" >View</a>
                |
				<a href="/absen/edit/{{ $p->ID }}" class="btn btn-warning" >Edit</a>
				|
				<a href="/absen/hapus/{{ $p->ID }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $absen->links() }}

@endsection

@section('absenactive')
class='active'
@endsection
