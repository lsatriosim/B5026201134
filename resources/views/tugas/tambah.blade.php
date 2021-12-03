@extends('layout.ceria')

@section('title', 'TAMBAH TUGAS')

@section('judulhalaman', 'Tambah Tugas')

@section('isikonten')
	<a href="/tugas" > Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
        Pegawai : <br><select id="IDPegawai" name="IDPegawai" required="required">
            @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
            @endforeach
        </select><br> <br>
        <span>
            <div class="form-group">
                <label for="datetimepicker" class="control-label">Tanggal :</label>
                    <div class=' input-group date ' id='datetimepicker'>
                        <input type='text' required="required" class="form-control" name="tanggal" />
                        <span class="input-group-addon input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        </span>
                    </div>
                </div>
        </span>
        <label for="namatugas">Nama Tugas :</label><br>
		<input type="text" name="namatugas" required="required"> <br/>
        <label for="status">Status :</label><br>
        <input type="radio" id="selesai" name="status" value="S">
        <label for="hadir">Selesai</label> <br>
        <input type="radio" id="belumselesai" name="status" value="B" checked="checked">
        <label for="tidak">Belum Selesai</label><br>
		<input type="submit" class="btn btn-primary" value="Simpan Data">
	</form>

@endsection
