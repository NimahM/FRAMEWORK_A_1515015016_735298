<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class matakuliahcontroller extends Controller
{
    public function awal()
     {
       return "Hello dari MatakuliahContoller";
     }

    public function tambah()
     {
     	return $this->simpan();
     } 
    public function simpan()
     {
     	$matakuliah = new matakuliah();
     	$matakuliah->tittle = 'FRAMEWORK';
     	$matakuliah->keterangan = 'Masuk setiap hari selasa pukul 08.00 AM';
     	$matakuliah->save();
     	return "data dengan judul {$matakuliah->tittle} telah disimpan";
     }
}
