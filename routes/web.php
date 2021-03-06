<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('praktikum1', function () {
    return view('prak1web');
});

Route::get('tugas4', function () {
    return view('task4');
});

Route::get('praktikum2','ViewController@showPraktikum2');

Route::get('ets','ViewController@showets');

Route::get('tugasphp','ViewController@showtugasphp');

Route::post('faktorial','ViewController@faktorialfunc');

Route::get('/pegawai','PegawaiController@index');

Route::get('/pegawai/tambah','PegawaiController@tambah');

Route::post('/pegawai/store','PegawaiController@store');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');

Route::post('/pegawai/update','PegawaiController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

Route::get('/tugas','TugasController@index');

Route::get('/tugas/tambah','TugasController@tambah');

Route::post('/tugas/store','TugasController@store');

Route::get('/tugas/edit/{ID}','TugasController@edit');

Route::post('/tugas/update','TugasController@update');

Route::get('/tugas/hapus/{ID}','TugasController@hapus');

Route::get('/absen','AbsenController@index');

Route::get('/absen/tambah','AbsenController@tambah');

Route::post('/absen/store','AbsenController@store');

Route::get('/absen/edit/{id}','AbsenController@edit');

Route::post('/absen/update','AbsenController@update');

Route::get('/absen/hapus/{id}','AbsenController@hapus');

Route::get('/pegawai/cari','PegawaiController@cari');

Route::get('/pegawai/detail/{id}','PegawaiController@view');

Route::get('/absen/detail/{id}','AbsenController@view');

Route::get('/tugas/detail/{id}','TugasController@view');

Route::get('/absen/cari','AbsenController@cari');

Route::get('/tugas/cari','TugasController@cari');

Route::get('/bedak','BedakController@index');

Route::get('/bedak/tambah','BedakController@tambah');

Route::post('/bedak/store','BedakController@store');

Route::get('/bedak/edit/{id}','BedakController@edit');

Route::post('/bedak/update','BedakController@update');

Route::get('/bedak/hapus/{id}','BedakController@hapus');

Route::get('/bedak/cari','BedakController@cari');

Route::get('/bedak/detail/{id}','BedakController@view');

Route::get('/karyawan','KaryawanController@index');

Route::get('/karyawan/tambah','KaryawanController@tambah');

Route::post('/karyawan/store','KaryawanController@store');

Route::get('/karyawan/hapus/{id}','KaryawanController@hapus');

Route::get('/karyawan/edit/{id}','KaryawanController@edit');

Route::post('/karyawan/update','KaryawanController@update');

Route::get('/karyawan/cari','KaryawanController@cari');

Route::get('/karyawan/detail/{id}','KaryawanController@view');
