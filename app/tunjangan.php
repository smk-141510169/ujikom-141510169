<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tunjangan extends Model
{
    //
    protected $table ='tunjangans';
    

   public function golongan(){
   	return $this->belongsTo('App\golongan','golongan_id');
   }
   public function jabatan(){
   	return $this->belongsTo('App\jabatan','jabatan_id');
   }
  
   public function tunjangan_pegawai(){
   	return $this->hasMany('App\tunjangan_pegawai','kode_tunjangan_id');
   }
}
