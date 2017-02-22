<?php

namespace App\Http\Controllers;

use Request;
use App\golongan;
use Validator;
use Input;

class golonganController extends Controller
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
        if (request()->has('nama_golongan')) {
            $golongan=golongan::where('nama_golongan',request('nama_golongan'))->paginate(5);
            
        }
        else{
            $golongan=golongan::paginate(5);
        }
        return view('golongan.index',compact('golongan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('golongan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=['kode_golongan'=>'required|unique:golongans',
                'nama_golongan'=>'required',
                'besaran_uang'=>'required|numeric'];
        $sms=['kode_golongan.required'=>'Harus Di Isi',
                'kode_golongan.unique'=>'Tidak Boleh Sama',
                'nama_golongan.required'=>'Harus Di Isi',
                'besaran_uang.required'=>'Harus Diisi',
                'besaran_uang.numeric'=>'Harus Angka'];
        $valid=Validator::make(Input::all(),$rules,$sms);
        if ($valid->fails()) {

              
            return redirect('golongan/create')
            ->withErrors($valid)
            ->withInput();
        }
        else
        {
        
         $golongan = new golongan;
         $golongan->kode_golongan=Request::get('kode_golongan');
         $golongan->nama_golongan=Request::get('nama_golongan');
         $golongan->besaran_uang=Request::get('besaran_uang');
         
         $golongan->save(); 

         return redirect('golongan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $golongan=golongan::find($id);
        return view('golongan.edit',compact('golongan'));
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
        $rules=['kode_golongan'=>'required|unique:golongans',
                'nama_golongan'=>'required',
                'besaran_uang'=>'required|numeric'];
        $sms=['kode_golongan.required'=>'Harus Di Isi',
                'kode_golongan.unique'=>'Tidak Boleh Sama',
                'nama_golongan.required'=>'Harus Di Isi',
                'besaran_uang.required'=>'Harus Diisi',
                'besaran_uang.numeric'=>'Harus Angka'];
        $valid=Validator::make(Input::all(),$rules,$sms);
        if ($valid->fails()) {

              
            return redirect('golongan/'.$id.'/edit')
            ->withErrors($valid)
            ->withInput();
        }
        else
        {
        
         $golongan =golongan::find($id);
         $golongan->kode_golongan=Request::get('kode_golongan');
         $golongan->nama_golongan=Request::get('nama_golongan');
         $golongan->besaran_uang=Request::get('besaran_uang');
         
         $golongan->update(); 

         return redirect('golongan');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        golongan::find($id)->delete();
        return redirect('golongan');
    }
}
