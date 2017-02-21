<?php

namespace App\Http\Controllers;

use Request;
use App\jabatan;
use App\golongan;
use App\kategori_lembur;
class kategori_lemburController extends Controller
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
        $kategorilembur=kategori_lembur::paginate(8);
     
        return view('kategorilembur.index',compact('kategorilembur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategorilembur=kategori_lembur::all();
        $jabatan=jabatan::all();
        $golongan=golongan::all();
        return view('kategorilembur.create', compact('kategorilembur','jabatan','golongan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $kategorilembur = new kategori_lembur;
         $kategorilembur->kode_lembur=Request::get('kode_lembur');
         $kategorilembur->jabatan_id=Request::get('jabatan_id');
         $kategorilembur->golongan_id=Request::get('golongan_id');
         $kategorilembur->besaran_uang=Request::get('besaran_uang');
         
         $kategorilembur->save(); 

         return redirect('kategorilembur');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jabatan=jabatan::all();
        $golongan=golongan::all();
        $kategorilembur=kategori_lembur::find($id);
        return view('kategorilembur.show',compact('kategorilembur','golongan','jabatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jabatan=jabatan::all();
        $golongan=golongan::all();
        $kategorilembur=kategori_lembur::find($id);
        return view('kategorilembur.edit',compact('kategorilembur','golongan','jabatan'));
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
        $kategorilembur=kategori_lembur::find($id);
        $kategoriUpdate=Request::all();
        $kategorilembur->update($kategoriUpdate);
        return redirect('kategorilembur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kategori_lembur::find($id)->delete();
        return redirect('kategorilembur');
    }
}
