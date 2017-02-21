<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    //
    protected $table = 'jabatans';
    


    public function kategori_lembur(){
   		return $this->hasMany('App\kategori_lembur','jabatan_id');
   	}
   	public function pegawai(){
   		return $this->hasMany('App\pegawai','jabatan_id');
   	} 
   	public function tunjangan(){
   		return $this->hasMany('App\tunjangan','jabatan_id');
   	}
}
