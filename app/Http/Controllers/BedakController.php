<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BedakController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$bedak = DB::table('bedak')->paginate(5);

    	// mengirim data pegawai ke view index
    	return view('bedak.index',['bedak' => $bedak]);

    }

    public function tambah()
    {

	    // memanggil view tambah
	    return view('bedak.tambah');

    }

    public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('bedak')->insert([
		'merkbedak' => $request->merk,
		'stockbedak' => $request->stock,
		'tersedia' => 'Y'
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/bedak');

}

public function edit($id){
    $bedak = DB::table('bedak')->where('kodebedak',$id)->orderBy('merkbedak', 'asc')->paginate(5);

	return view('bedak.edit',['bedak' => $bedak]);

    }


public function update(Request $request){
     $status = 'Y';
    if($request->stock == 0){
        $status = 'N';
    }

	DB::table('bedak')->where('kodebedak',$request->id)->update([
        'merkbedak' => $request->merk,
		'stockbedak' => $request->stock,
        'tersedia'=> $status
	]);

	return redirect('/bedak');
    }

    public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('bedak')->where('kodebedak',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/bedak');
}

public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$bedak = DB::table('bedak')
		->where('merkbedak','like',"%".$cari."%")
		->paginate(5);

    		// mengirim data pegawai ke view index
		return view('bedak.index',['bedak' => $bedak]);

	}

    public function view($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $bedak = DB::table('bedak')
        ->where('kodebedak',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('bedak.detail',['bedak' => $bedak]);

    }
}

