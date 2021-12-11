@extends('layout.ceria')
@section('title', 'DATA BEDAK')

@section('judulhalaman', 'Data Bedak')
@section('isikonten')
<a href="/bedak/tambah" class="btn btn-primary" > + Tambah Bedak Baru</a>

<br/>
<br/>
<div class="container">
<form action="/bedak/cari" method="GET">
    <input type="text" class="form-control" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
    <input type="submit" class="form-control btn-secondary" value="CARI">
</form>
</div>
<br>

    <div class="table-responsive-sm">
	<table class="table table-success table-striped ">
		<tr>
            <th>No</th>
			<th>Kode</th>
			<th>Merk</th>
			<th>Stock</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($bedak as $b)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $b->kodebedak }}</td>
			<td>{{ $b->merkbedak }}</td>
			<td>{{ $b->stockbedak }}</td>
			<td>{{ $b->tersedia }}</td>
			<td >
                <a href="/bedak/detail/{{ $b->kodebedak }}" class="btn btn-default btn-sm" role="button">View </a>
                |
				<a href="/bedak/edit/{{ $b->kodebedak }} " class="btn btn-warning">Edit</a>
				|
				<a href="/bedak/hapus/{{ $b->kodebedak }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</div>

	{{ $bedak->links() }}
@endsection

@section('bedakactive')
class='active'
@endsection
