<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class golongan extends Model
{
    //
   	protected $table = 'golongans';
   	
  
   	
   	public function kategori_lembur(){
   		return $this->hasMany('App\kategori_lembur','golongan_id');
   	}
   	public function pegawai(){
   		return $this->hasMany('App\pegawai','golongan_id');
   	} 
   	public function tunjangan(){
   		return $this->hasMany('App\tunjangan','golongan_id');
   	}
}
