<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswacontroller extends Controller
{
     public function awal()
     {
       return "Hello dari MahasiswaContoller";
     }

    public function tambah()
     {
     	return $this->simpan();
     } 
    public function simpan()
     {
     	$mahasiswa = new mahasiswa();
     	$mahasiswa->nama = 'Nimah Moham';
     	$mahasiswa->nim = '1515015016';
     	$mahasiswa->alamat ='samarinda sebrang';
     	$mahasiswa->pengguna_id ='2';
     	$mahasiswa->save();
     	return "data dengan Nama {$mahasiswa->nama} telah disimpan";
     }
}
