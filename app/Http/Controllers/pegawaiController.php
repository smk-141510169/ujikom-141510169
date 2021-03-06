<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jabatan;
use App\golongan;
use App\User;
use App\Validator;
use App\pegawai;
use Input;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;


class pegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    
    public function index()
    {
        if (request()->has('nip')) {
            $pegawai=pegawai::where('nip',request('nip'))->paginate(5);
            
        }
        else{
            $pegawai=pegawai::paginate(5);
        }
      
        return view('pegawai.index',compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawai=pegawai::all();
        $jabatan=jabatan::all();
        $golongan=golongan::all();
        return view('pegawai.creater', compact('pegawai','jabatan','golongan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
                'name'=>'required',
                'nip'=>'required|numeric|min:3|unique:pegawais',
                'permision'=>'required|max:255',
                'email'=>'required|email|max:255|unique:users',
                'password'=>'required|min:6|confirmed',
            ]);

        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'permision' => $request->get('permision'),
            'password' => bcrypt($request->get('password')),
        ]);


        $file=Input::file('photo');
        $dis=public_path().'/image';
        $filen=str_random(6).'_'.$file->getClientOriginalName();
        $upload=$file->move($dis,$filen);
        if(Input::hasfile('photo')){
            $pegawai=new pegawai;
            $pegawai->nip=Input::get('nip');
            $pegawai->jabatan_id=Input::get('jabatan_id');
            $pegawai->golongan_id=Input::get('golongan_id');

        }
         $pegawai->photo=$filen;
         $pegawai->user_id= $user->id;
         $pegawai->save(); 

         return redirect('pegawai');
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
        $pegawai=pegawai::find($id);
        return view('pegawai.edit',compact('pegawai','jabatan','golongan'));
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
         
        $file=Input::file('photo');
        $dis=public_path().'/image';
        $filen=str_random(6).'_'.$file->getClientOriginalName();
        $upload=$file->move($dis,$filen);
        if(Input::hasfile('photo')){
            $pegawai=pegawai::find($id);
            $pegawai->nip=Input::get('nip');
            $pegawai->jabatan_id=Input::get('jabatan_id');
            $pegawai->golongan_id=Input::get('golongan_id');

        }
         $user=User::all();
         $pegawai->photo=$filen;
        
         $pegawai->user_id= $pegawai->User->id;
         $pegawai->update(); 

         return redirect('pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pegawai::find($id)->delete();
        return redirect('pegawai');
    }
}
