<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('master');
});

//Route::get('/public', function () {
  //  return 'Nama Saya : Nimah Moham';
//});

Route::get('pengguna', 'penggunacontroller@awal');
Route::get('pengguna/tambah', 'penggunacontroller@tambah');
Route::get('pengguna/{pengguna}', 'penggunacontroller@lihat');
Route::post('pengguna/simpan', 'penggunacontroller@simpan');
Route::get('pengguna/edit{pengguna}', 'penggunacontroller@edit');
Route::post('pengguna/update{pengguna}', 'penggunacontroller@update');
Route::get('pengguna/hapus{pengguna}', 'penggunacontroller@hapus');


Route::get('dosen', 'doosencontroller@awal');
Route::get('dosen/tambah', 'doosencontroller@tambah');


Route::get('mahasiswa', 'mahasiswacontroller@awal');
Route::get('mahasiswa/tambah', 'mahasiswacontroller@tambah');

Route::get('matakuliah', 'matakuliahcontroller@awal');
Route::get('matakuliah/tambah', 'matakuliahcontroller@tambah');
Route::get('matakuliah/{matakuliah}', 'matakuliahcontroller@lihat');
Route::post('matakuliah/simpan', 'matakuliahcontroller@simpan');
Route::get('matakuliah/edit{matakuliah}', 'matakuliahcontroller@edit');
Route::post('matakuliah/update{matakuliah}', 'matakuliahcontroller@update');
Route::get('matakuliah/hapus{matakuliah}', 'matakuliahcontroller@hapus');

Route::get('ruangan', 'ruangancontroller@awal');
Route::get('ruangan/tambah', 'ruangancontroller@tambah');
Route::get('ruangan/{ruangan}', 'ruangancontroller@lihat');
Route::post('ruangan/simpan', 'ruangancontroller@simpan');
Route::get('ruangan/edit{ruangan}', 'ruangancontroller@edit');
Route::post('ruangan/update{ruangan}', 'ruangancontroller@update');
Route::get('ruangan/hapus{ruangan}', 'matakuliahcontroller@hapus');

Route::get('dosen_matakuliah', 'dosen_matakuliahcontroller@awal');
Route::get('dosen_matakuliah/tambah', 'dosen_matakuliahcontroller@tambah');

Route::get('jadwal_matakuliah', 'jadwal_matakuliahcontroller@awal');
Route::get('jadwal_matakuliah/tambah', 'jadwal_matakuliahcontroller@tambah');