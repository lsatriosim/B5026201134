<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    public function index()
    {
    	$tugas = DB::table('tugas')->get();

    	return view('tugas.index',['tugas' => $tugas]);

    }

    public function tambah()
{
	return view('tugas.tambah');

}

public function store(Request $request)
{
	DB::table('tugas')->insert([
		'IDPegawai' => $request->idpegawai,
		'Tanggal' => $request->tanggal,
		'NamaTugas' => $request->namatugas,
		'Status' => $request->status
	]);
	return redirect('/tugas');

}


public function edit($id)
{

	$tugas = DB::table('tugas')->where('ID',$id)->get();

	return view('tugas.edit',['tugas' => $tugas]);

}


public function update(Request $request)
{

	DB::table('tugas')->where('ID',$request->id)->update([
		'IDPegawai' => $request->idpegawai,
		'Tanggal' => $request->tanggal,
		'NamaTugas' => $request->namatugas,
		'Status' => $request->status
	]);

	return redirect('/tugas');
}


public function hapus($id)
{

	DB::table('tugas')->where('ID',$id)->delete();


	return redirect('/tugas');
}
}
