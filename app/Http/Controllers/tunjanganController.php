<?php

namespace App\Http\Controllers;

use Request;
use App\jabatan;
use App\golongan;
use App\tunjangan;
use Validator;
use Input;


class tunjanganController extends Controller
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

        if (request()->has('kode_tunjangan')) {
            $tunjangan=tunjangan::where('kode_tunjangan',request('kode_tunjangan'))->paginate(5);
            
        }
        else{
            $tunjangan = tunjangan::with('jabatan')->get();
            $tunjangan = tunjangan::with('golongan')->get();
            $tunjangan = tunjangan::paginate(5);
        }
        
        return view('tunjangan.index',compact('tunjangan','jabatan','golongan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tunjangan =tunjangan::all();
        $jabatan = jabatan::all();
        $golongan = golongan::all();
        return view('tunjangan.create',compact('tunjangan','jabatan','golongan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = ['kode_tunjangan'  => 'required|unique:tunjangans',
            'jabatan_id' => 'required',
            'golongan_id' => 'required',
            'status' => 'required',
            'jumlah_anak' => 'required|numeric',
            'besaran_tunjangan' => 'required|numeric'];
        $sms = ['kode_tunjangan.required' => 'Harus Diisi',
                'kode_tunjangan.unique' => 'Data Sudah Ada',
                'jumlah_anak.numeric' => 'Harus Angka',
                'besaran_uang.numeric' => 'Harus Angka',
                'jabatan_id.required' => 'Harus Diisi',
                'golongan_id.required' => 'Harus Diisi',
                'status.required' => 'Harus Diisi',
                'jumlah_anak.required' => 'Harus Diisi',
                'besaran_tunjangan.required' => 'Harus Diisi'
                ];
        $valid=Validator::make(Input::all(),$rules,$sms);
        if ($valid->fails()) {

            
            return redirect('tunjangan/create')
            ->withErrors($valid)
            ->withInput();
        }
        else
        {
        $tunjangan = new tunjangan;
         $tunjangan->kode_tunjangan=Request::get('kode_tunjangan');
         $tunjangan->jabatan_id=Request::get('jabatan_id');
         $tunjangan->golongan_id=Request::get('golongan_id');
         $tunjangan->status=Request::get('status');
         $tunjangan->jumlah_anak=Request::get('jumlah_anak');
         $tunjangan->besaran_tunjangan=Request::get('besaran_tunjangan');
         
         $tunjangan->save(); 

         return redirect('tunjangan');
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
        
        $jabatan = jabatan::all();
        $golongan = golongan::all();
        $tunjangan=tunjangan::find($id);
        return view('tunjangan.edit',compact('tunjangan','jabatan','golongan'));
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
        
        $tunjangan = new tunjangan;
         $tunjangan->kode_tunjangan=Request::get('kode_lembur');
         $tunjangan->jabatan_id=Request::get('jabatan_id');
         $tunjangan->golongan_id=Request::get('golongan_id');
         $tunjangan->status=Request::get('status');
         $tunjangan->jumlah_anak=Request::get('jumlah_anak');
         $tunjangan->besaran_tunjangan=Request::get('besaran_tunjangan');
         
         $tunjangan->update(); 

        
        
         return redirect('tunjangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tunjangan::find($id)->delete();
        return redirect('tunjangan');
    }
}
