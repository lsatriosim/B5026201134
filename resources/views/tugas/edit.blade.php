@extends('layout.ceria')

@section('title', 'EDIT TUGAS')

@section('judulhalaman', 'Edit Tugas')

@section('isikonten')
	<a href="/tugas"> Kembali</a>

	<br/>

	@foreach($tugas as $p)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
		Pegawai : <br><select id="IDPegawai" name="IDPegawai" required="required">
            @foreach($pegawai as $peg)
                <option value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $p->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
            @endforeach
        </select><br> <br>
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
        <label for="namatugas">Nama Tugas :</label><br>
		<input type="text" name="namatugas" required="required" value="{{$p->NamaTugas}}"> <br/> <br>
		Status <br>
        <input type="radio" id="selesai" name="status" value="S" @if ($p->Status === "S") checked="checked" @endif>
        <label for="selesai">Selesai</label><br>
        <input type="radio" id="belumselesai" name="status" value="B" @if ($p->Status === "B") checked="checked" @endif>
        <label for="belumselesai">belum Selesai</label><br>
		<input type="submit" class="btn btn-primary" value="Simpan Data">
	</form>
	@endforeach
@endsection
