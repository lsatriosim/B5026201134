<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table karyawan
    	$karyawan = DB::table('karyawan1')->paginate(5);

    	// mengirim data pegawai ke view index
    	return view('karyawan1.index',['karyawan' => $karyawan]);

    }

    public function tambah()
    {

	    // memanggil view tambah
	    return view('karyawan1.tambah');

    }

    public function store(Request $request)
{
	DB::table('karyawan1')->insert([
		'NIP' => $request->nip,
		'Nama' => $request->nama,
		'Pangkat' => $request->pangkat,
		'Gaji' => $request->gaji
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/karyawan');

}

public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('karyawan1')->where('NIP',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/karyawan');
}

public function edit($id){
    $karyawan = DB::table('karyawan1')->where('NIP',$id)->orderBy('Nama', 'asc')->paginate(5);

	return view('karyawan1.edit',['karyawan' => $karyawan]);

    }


public function update(Request $request){
   DB::table('karyawan1')->where('NIP',$request->nip)->update([
       'NIP' => $request->nip,
       'Nama' => $request->nama,
       'Pangkat'=> $request->pangkat,
       'Gaji'=> $request->gaji,
   ]);

   return redirect('/karyawan');
   }

   public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$karyawan = DB::table('karyawan1')
		->where('Nama','like',"%".$cari."%")
		->paginate(5);

    		// mengirim data pegawai ke view index
		return view('karyawan1.index',['karyawan' => $karyawan]);

	}

    public function view($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $karyawan = DB::table('karyawan1')
        ->where('NIP',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('karyawan1.detail',['karyawan' => $karyawan]);

    }
}
