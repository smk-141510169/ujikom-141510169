<?php

namespace App\Http\Controllers;

use Request;
use App\kategori_lembur;
use App\pegawai;
use App\User;
use Validator;
use Input;
use App\lembur_pegawai;
class lembur_pegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('admin');
        
    }
    
    public function index()
    {
        $lembur_pegawai=lembur_pegawai::with('kategori_lembur');
        $lembur_pegawai=lembur_pegawai::with('pegawai');
        $lembur_pegawai=lembur_pegawai::paginate(5);
        return view('lembur_pegawai.index',compact('lembur_pegawai','kategori_lembur','pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lembur_pegawai=lembur_pegawai::all();
        $kategori_lembur=kategori_lembur::all();
        $pegawai=pegawai::all();
        return view('lembur_pegawai.create', compact('lembur_pegawai','kategori_lembur','pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
         $lembur_pegawai = new lembur_pegawai;
         $lembur_pegawai->kode_lembur_id=Request::get('kode_lembur_id');
         $lembur_pegawai->pegawai_id=Request::get('pegawai_id');
         $lembur_pegawai->jumlah_jam=Request::get('jumlah_jam');
         
         $lembur_pegawai->save(); 

         return redirect('lembur_pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori_lembur=kategori_lembur::all();
        $pegawai=pegawai::all();
        $user=User::all();
        $lembur_pegawai=lembur_pegawai::find($id);
        return view('lembur_pegawai.edit',compact('lembur_pegawai','kategori_lembur','pegawai','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $lembur_pegawai =lembur_pegawai::find($id);
         $lembur_pegawai->kode_lembur_id=Request::get('kode_lembur_id');
         $lembur_pegawai->pegawai_id=Request::get('pegawai_id');
         $lembur_pegawai->jumlah_jam=Request::get('jumlah_jam');
         
         $lembur_pegawai->update(); 

         return redirect('lembur_pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        lembur_pegawai::find($id)->delete();
        return redirect('lembur_pegawai');
    }
}
