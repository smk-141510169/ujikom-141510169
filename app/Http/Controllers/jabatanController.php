<?php

namespace App\Http\Controllers;

use Request;
use App\jabatan;
use Validator;
use Input;

class jabatanController extends Controller
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
        if (request()->has('nama_jabatan')) {
            $jabatan=jabatan::where('nama_jabatan',request('nama_jabatan'))->paginate(5);
            
        }
        else{
            $jabatan=jabatan::paginate(5);
        }
        
        
        return view('jabatan.index',compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules=['kode_jabatan'=>'required|unique:jabatans',
                'nama_jabatan'=>'required',
                'besaran_uang'=>'required|numeric|min:1'];
        $sms=['kode_jabatan.required'=>'Harus Di Isi',
                'kode_jabatan.unique'=>'Tidak Boleh Sama',
                'nama_jabatan.required'=>'Harus Di Isi',
                'besaran_uang.required'=>'Harus Di Isi',
                'besaran_uang.numeric'=>'Harus Angka',
                'besaran_uang.min'=>'Angka tidak boleh min'
                ];
        $valid=Validator::make(Input::all(),$rules,$sms);
        if ($valid->fails()) {

              
            return redirect('jabatan/create')
            ->withErrors($valid)
            ->withInput();
        }
        else
        {
        
         $jabatan = new jabatan;
         $jabatan->kode_jabatan=Request::get('kode_jabatan');
         $jabatan->nama_jabatan=Request::get('nama_jabatan');
         $jabatan->besaran_uang=Request::get('besaran_uang');
         
         $jabatan->save(); 

         return redirect('jabatan');
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
        
        $jabatan=jabatan::find($id);
        return view('jabatan.edit',compact('jabatan'));
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
         $rules=['kode_jabatan'=>'required|unique:jabatans',
                'nama_jabatan'=>'required',
                'besaran_uang'=>'required|numeric|min:1'];
        $sms=['kode_jabatan.required'=>'Harus Di Isi',
                'kode_jabatan.unique'=>'Tidak Boleh Sama',
                'nama_jabatan.required'=>'Harus Di Isi',
                'besaran_uang.required'=>'Harus Di Isi',
                'besaran_uang.numeric'=>'Harus Angka',
                'besaran_uang.min'=>'Angka tidak boleh min'
                ];
        $valid=Validator::make(Input::all(),$rules,$sms);
        if ($valid->fails()) {

              
            return redirect('jabatan/'.$id.'/edit')
            ->withErrors($valid)
            ->withInput();
        }
        else
        {
        
         $jabatan =jabatan::find($id);
         $jabatan->kode_jabatan=Request::get('kode_jabatan');
         $jabatan->nama_jabatan=Request::get('nama_jabatan');
         $jabatan->besaran_uang=Request::get('besaran_uang');
         
         $jabatan->update(); 

         return redirect('jabatan');
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
        jabatan::find($id)->delete();
        return redirect('jabatan');
    }
}
