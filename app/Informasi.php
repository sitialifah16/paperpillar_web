<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    //
    protected $table = 'Informasi';
    protected $fillable = [
    	'nim', 'jurusan', 'fakultas'
    ];
}
