<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_lembur extends Model
{
    //
    protected $table = 'kategori_lemburs';
    

 

   public function golongan(){
   	return $this->belongsTo('App\golongan','golongan_id');
   }
   public function jabatan(){
   	return $this->belongsTo('App\jabatan','jabatan_id');
   }
   public function lembur_pegawai(){
   	return $this->hasMany('App\lembur_pegawai','kode_lembur_id');
   }

}
