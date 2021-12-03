@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('judulhalaman','Edit Absen')

@section('isikonten')
<a href="/absen"> Kembali</a>
	@foreach($absen as $p)
	<form action="/absen/update" method="post">
		@csrf
		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
        Pegawai : <br><select id="IDPegawai" name="IDPegawai" required="required">
            @foreach($pegawai as $peg)
                <option value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $p->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
            @endforeach
        </select><br>
        <span>
            <div class="form-group">
                <label for="datetimepicker" class="control-label">Tanggal :</label>
                    <div class=' input-group date ' id='datetimepicker'>
                        <input type='text' required="required" class="form-control" name="tanggal" value="{{$p->Tanggal}}" />
                        <span class="input-group-addon input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        </span>
                    </div>
                </div>
        </span>
            <br>
		Status
        <input type="radio" id="hadir" name="status" value="H" @if ($p->Status === "H") checked="checked" @endif>
        <label for="hadir">HADIR</label>
        <input type="radio" id="tidak" name="status" value="T" @if ($p->Status === "T") checked="checked" @endif>
        <label for="tidak">TIDAK HADIR</label><br>

		<input type="submit" class="btn btn-primary" value="Simpan Data">
	</form>
	@endforeach


    @endsection
