<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    //
    protected $table = 'pegawais';
    
   

    public function lembur_pegawai(){
    	return $this->hasMany('App\lembur_pegawai','pegawai_id');
    }
    public function jabatan(){
    	return $this->belongsTo('App\jabatan','jabatan_id');
    }
    public function golongan(){
    	return $this->belongsTo('App\golongan','golongan_id');
    }
    public function User(){
    	return $this->belongsTo('App\User','user_id');
    }
    public function tunjangan_pegawai(){
    	return $this->hasOne('App\tunjangan_pegawai','pegawai_id');
    }
}
