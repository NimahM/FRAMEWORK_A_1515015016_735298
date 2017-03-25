<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class matakuliahcontroller extends Controller
{
    public function awal()
     {
       //return "Hello dari MatakuliahContoller";
         return view("matakuliah.awal",['data'=>matakuliah::all()]);
     }

    public function tambah()
     {
     	//return $this->simpan();
        return view('matakuliah.tambah');
     } 
     public function simpan(Request $input)
     {
     	$matakuliah = new matakuliah();
     	$matakuliah->tittle = $input->tittle;
     	$matakuliah->keterangan = $input->keterangan;
     	$informasi->save()?  'Berhasil simpan data': 'Gagal Simpan Data';
     	return redirect ('matakuliah')->with (['informasi'=>$informasi]);
     }
      public function edit($id)
      {
        $matakuliah = matakuliah::find($id);
        return view('matakuliah.edit')->with(array('matakuliah'=>$matakuliah));
      }
      public function lihat($id)
      {
         $matakuliah = matakuliah::find($id);
        return view('matakuliah.lihat')->with(array('matakuliah'=>$matakuliah));
      }
        public function update($id,Request $input)
        {
        $matakuliah = matakuliah::find($id);
        $matakuliah->tittle = $input->tittle;
        $matakuliah->keterangan = $input->keterangan;
        $informasi->save()?  'Berhasil update data': 'Gagal update Data';
        return redirect ('matakuliah')->with (['informasi'=>$informasi]);  
        }
         public function hapus($id)
      {
        $matakuliah = matakuliah::find($id);
        $informasi = $matakuliah->delete()? 'Berhasil hapus data':'Gagal hapus data';
        return redirect('matakuliah') ->with (['informasi'=>$informasi]);
      }
}
