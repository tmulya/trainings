<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $fillable = ['kode_matakuliah','nama_matakuliah','sks','date_matakuliah','mahasiswa_id'];

    public function mahasiswa()
    {
    	return $this->belongsTo('App\Mahasiswa');
    }
}
