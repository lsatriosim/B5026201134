@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('judulhalaman','Tambah Absen')

@section('isikonten')
	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	<form action="/absen/store" method="post">
		@csrf
		Pegawai : <br><select id="IDPegawai" name="IDPegawai" required="required">
            @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
            @endforeach
        </select><br>
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

            Status : <br>
        <input type="radio" id="hadir" name="status" value="H">
  <label for="hadir">HADIR</label> <br>
  <input type="radio" id="tidak" name="status" value="T" checked="checked">
  <label for="tidak">TIDAK HADIR</label><br>
		<input type="submit" class="btn btn-primary" value="Simpan Data">
	</form>

@endsection

