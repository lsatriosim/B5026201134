<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller{
    public function index()
    {
    	$tugas = DB::table('tugas')
        ->join('pegawai', 'tugas.IDPegawai', '=', 'pegawai.pegawai_id')
        ->select('tugas.*', 'pegawai.pegawai_nama')
        ->paginate(5);

    	return view('tugas.index',['tugas' => $tugas]);

    }

    public function tambah(){
    $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
	return view('tugas.tambah',['pegawai' => $pegawai]);
    }

    public function store(Request $request){
	DB::table('tugas')->insert([
		'IDPegawai' => $request->IDPegawai,
		'Tanggal' => $request->tanggal,
		'NamaTugas' => $request->namatugas,
		'Status' => $request->status
	]);
	return redirect('/tugas');

    }


public function edit($id){
    $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
	$tugas = DB::table('tugas')->where('ID',$id)->get();

	return view('tugas.edit',['tugas' => $tugas,'pegawai'=>$pegawai]);

    }


public function update(Request $request){
	DB::table('tugas')->where('ID',$request->id)->update([
		'IDPegawai' => $request->IDPegawai,
		'Tanggal' => $request->tanggal,
		'NamaTugas' => $request->namatugas,
		'Status' => $request->status
	]);

	return redirect('/tugas');
    }


public function hapus($id){

	DB::table('tugas')->where('ID',$id)->delete();


	return redirect('/tugas');
}

public function cari(Request $request){
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$tugas = DB::table('tugas')
        ->join('pegawai', 'tugas.IDPegawai', '=', 'pegawai.pegawai_id')
        ->select('tugas.*', 'pegawai.pegawai_nama')
		->where('pegawai_nama','like',"%".$cari."%")
        ->orWhere('NamaTugas','like',"%".$cari."%")
		->paginate(5);

    		// mengirim data pegawai ke view index
		return view('tugas.index',['tugas' => $tugas]);

	}

    public function view($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $tugas = DB::table('tugas')
        ->join('pegawai', 'tugas.IDPegawai', '=', 'pegawai.pegawai_id')
        ->select('tugas.*', 'pegawai.pegawai_nama', 'pegawai.pegawai_id')
        ->where('ID',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('tugas.detail',['tugas' => $tugas]);

    }
}



