<?php

namespace App\Http\Controllers;

use Request;
use App\jabatan;
use App\golongan;
use App\kategori_lembur;
use Input;
use Validator;
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
        if (request()->has('kode_lembur')) {
            $kategori_lembur=kategori_lembur::where('kode_lembur',request('kode_lembur'))->paginate(5);
            
        }
        else{
            $kategori_lembur = kategori_lembur::with('jabatan')->get();
            $kategori_lembur = kategori_lembur::with('golongan')->get();
            $kategori_lembur = kategori_lembur::paginate(8);
        }
        return view('kategori_lembur.index',compact('kategori_lembur','jabatan','golongan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_lembur=kategori_lembur::all();
        $jabatan=jabatan::all();
        $golongan=golongan::all();
        return view('kategori_lembur.create', compact('kategori_lembur','jabatan','golongan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $rules = ['kode_lembur' => 'required|unique:kategori_lemburs',
                  'jabatan_id' => 'required',
                  'golongan_id' => 'required',
                  'besaran_uang' => 'required|numeric'];
        $sms = ['kode_lembur.required' => 'Harus Diisi',
                'kode_lembur.unique' => 'Data Sudah Ada',
                'jabatan_id.required' => 'Harus Diisi',
                'golongan_id.required' => 'Harus Diisi',
                'besaran_uang.required' => 'Harus Diisi',
                'besaran_uang.numeric' => 'Harus Angka'];
        $valid=Validator::make(Input::all(),$rules,$sms);
        if ($valid->fails()) {

            return redirect('kategori_lembur/create')
            ->withErrors($valid)
            ->withInput();
        }
        else
        {
         $kategori_lembur = new kategori_lembur;
         $kategori_lembur->kode_lembur=Request::get('kode_lembur');
         $kategori_lembur->jabatan_id=Request::get('jabatan_id');
         $kategori_lembur->golongan_id=Request::get('golongan_id');
         $kategori_lembur->besaran_uang=Request::get('besaran_uang');
         
         $kategori_lembur->save(); 

         return redirect('kategori_lembur');
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
        $jabatan=jabatan::all();
        $golongan=golongan::all();
        $kategori_lembur=kategori_lembur::find($id);
        return view('kategori_lembur.edit',compact('kategori_lembur','golongan','jabatan'));
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
          
        $rules = ['kode_lembur' => 'required|unique:kategori_lemburs',
                  'jabatan_id' => 'required',
                  'golongan_id' => 'required',
                  'besaran_uang' => 'required|numeric'];
        $sms = ['kode_lembur.required' => 'Harus Diisi',
                'kode_lembur.unique' => 'Data Sudah Ada',
                'jabatan_id.required' => 'Harus Diisi',
                'golongan_id.required' => 'Harus Diisi',
                'besaran_uang.required' => 'Harus Diisi',
                'besaran_uang.numeric' => 'Harus Angka'];
        $valid=Validator::make(Input::all(),$rules,$sms);
        if ($valid->fails()) {

            return redirect('kategori_lembur/'.$id.'/edit')
            ->withErrors($valid)
            ->withInput();
        }
        else
        {
        
        $kategori_lembur =kategori_lembur::find($id);
         $kategori_lembur->kode_lembur=Request::get('kode_lembur');
         $kategori_lembur->jabatan_id=Request::get('jabatan_id');
         $kategori_lembur->golongan_id=Request::get('golongan_id');
         $kategori_lembur->besaran_uang=Request::get('besaran_uang');
         
         $kategori_lembur->update(); 

         return redirect('kategori_lembur');

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
        kategori_lembur::find($id)->delete();
        return redirect('kategori_lembur');
    }
}
