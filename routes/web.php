<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/error', function () {
    return view('stop');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/pegawai','pegawaiController');
Route::resource('/jabatan','jabatanController');
Route::resource('/golongan','golonganController');
Route::resource('/kategori_lembur','kategori_lemburController');
Route::resource('/tunjangan','tunjanganController');
Route::resource('/tunjangan_pegawai','tunjangan_pegawaiController');
Route::resource('/lembur_pegawai','lembur_pegawaiController');
Route::resource('/penggajian','penggajianController');
Route::resource('/user','userController');


