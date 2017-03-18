<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
   protected $table ='pengguna';
    protected $fillable =['id','username','password'];

     protected $hidden = [
        'password', 'remember_token',
    ];
   }
