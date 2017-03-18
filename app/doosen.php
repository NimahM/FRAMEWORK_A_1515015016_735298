<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doosen extends Model
{
   protected $table ='doosen';
   protected $fillable =['id','nama','nip','alamat','pengguna_id'];

}
