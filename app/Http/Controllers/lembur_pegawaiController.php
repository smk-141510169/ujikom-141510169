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
        if (request()->has('created_at')) {
            $lembur_pegawai=lembur_pegawai::where('created_at',request('created_at'))->paginate(5);
            
        }
        else{
        $lembur_pegawai=lembur_pegawai::with('kategori_lembur');
        $lembur_pegawai=lembur_pegawai::with('pegawai');
        $lembur_pegawai=lembur_pegawai::paginate(5);
        }

        
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
        $kategori_lembur = kategori_lembur::all();
        
        $lembur_pegawai = Request::all();
        $rules = ['pegawai_id' => 'required',
                  'jumlah_jam' => 'required|numeric|min:1'];
        $sms = ['pegawai_id.required' => 'Harus Diisi',
                'jumlah_jam.required' => 'Harus Diisi',
                'jumlah_jam.numeric' => 'Harus Angka',
                'jumlah_jam.min' => 'Angka harus minimal 1'];
        $valid=Validator::make(Input::all(),$rules,$sms);
        if ($valid->fails()) {

          
            return redirect('lembur_pegawai/create')
            ->withErrors($valid)
            ->withInput();
        }
        else
        {
       
        $pegawai = pegawai::where('id',$lembur_pegawai['pegawai_id'])->first();
        $check = kategori_lembur::where('jabatan_id',$pegawai->jabatan_id)->where('golongan_id',$pegawai->golongan_id)->first();
        if(!isset($check)){
            $pegawai = pegawai::with('User')->get();
            $missing_count = true;
            // dd($error_klnf);
            return view('lembur_pegawai.create',compact('kategori_lembur','pegawai','missing_count'));
        }
        $lembur_pegawai['kode_lembur_id'] = $check->id;
        lembur_pegawai::create($lembur_pegawai);
         
         
        }
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
         $kategori_lembur = kategori_lembur::all();
        
        $lembur_pegawai = Request::all();
        $rules = ['jumlah_jam' => 'required|numeric|min:1'];
        $sms = ['jumlah_jam.required' => 'Harus Diisi',
                'jumlah_jam.numeric' => 'Harus Angka',
                'jumlah_jam.min' => 'Angka harus minimal 1'];
        $valid=Validator::make(Input::all(),$rules,$sms);
        if ($valid->fails()) {

          
            return redirect('lembur_pegawai/'.$id.'/edit')
            ->withErrors($valid)
            ->withInput();
        }
        else
        {
       
         $lembur_pegawaiUpdate =Request::all();
         $lembur_pegawai=lembur_pegawai::find($id);
         $lembur_pegawai->update($lembur_pegawaiUpdate);
         
        return redirect('lembur_pegawai'); 
         
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
        lembur_pegawai::find($id)->delete();
        return redirect('lembur_pegawai');
    }
}
