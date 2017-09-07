<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = [
    	'nama',
    	'address',
    	'nim',
    	'sex'
    ];

    public function matakuliahs()
    {
    	return $this->hasMany('App\Matakuliah');
    }
}
