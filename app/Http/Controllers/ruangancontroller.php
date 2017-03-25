<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruangancontroller extends Controller
{
    public function awal()
     {
      
         return view("ruangan.awal",['data'=>ruangan::all()]);
     }

    public function tambah()
     {
     	//return $this->simpan();
        return view('ruangan.tambah');
     } 
 public function simpan(Request $input)
     {
     	$ruangan = new ruangan();
     	$ruangan->tittle = $input->tittle;
     	$informasi = $ruangan->save()? 'Berhasil simpan data': 'Gagal Simpan Data';
     	return redirect ('ruangan')->with (['informasi'=>$informasi]);
     }
      public function edit($id)
      {
        $ruangan = ruangan::find($id);
        return view('ruangan.edit')->with(array('ruangan'=>$ruangan));
      }
      public function lihat($id)
      {
         $ruangan = ruangan::find($id);
        return view('ruangan.lihat')->with(array('ruangan'=>$ruangan));
      }
      public function update($id,Request $input)
      {
        $ruangan = ruangan::find($id);
        $ruangan->tittle =$input->tittle;
        $informasi = $ruangan->save()? 'Berhasil update data': 'Gagal update Data';
        return redirect ('ruangan')->with (['informasi'=>$informasi]);
      }
       public function hapus($id)
      {
        $ruangan = ruangan::find($id);
        $informasi = $ruangan->delete()? 'Berhasil hapus data':'Gagal hapus data';
        return redirect('ruangan') ->with (['informasi'=>$informasi]);
      }

}
