<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\doosen;

class doosencontroller extends Controller
{
    public function awal()
     {
       return "Hello dari dosenContoller";
     }

    public function tambah()
     {
     	return $this->simpan();
     } 
    public function simpan()
     {
     	$doosen = new doosen();
     	$doosen->nama = 'Nimah Moham';
     	$doosen->nip = '1515015016';
     	$doosen->alamat ='samarinda sebrang';
     	$doosen->pengguna_id ='1';
     	$doosen->save();
     	return "data dengan Nama {$doosen->nama} telah disimpan";
     }
}
